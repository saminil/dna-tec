<?php 	
	include "../../../../common.php";
	$tmenu_ = "임상"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "MRD 요구사항"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "MRD 요구사항"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"---->

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#87bf78 }
    .point_b1{color:#333;font-weight: 600;font-size: 1.2em }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto; font-size: 1.1em;font-weight: 400;line-height: 1.5}
    
	.page_title{width:90%; margin:0 auto 70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:40px auto 0; border:1px solid #000;}
	.page_title h2{width:100%; margin:70px auto; text-align:justify; font-size:1.2em; color:#666;}
    
    .page_title li strong { font-size: 1.1em }
    .business_type5 h2{font-weight:700; font-size:2em; color:#87bf78; text-align:center; margin-bottom:25px;}
    .business_type5 li strong { font-size: 1.1em }
    
    table {width: 100%;border: 1px solid #444444;border-collapse: collapse;}
    th, td {border: 1px solid #444444;padding: 10px;}
    
    .con_arrow{ width:100%; padding-bottom:20px; text-align: left;}
    .con_arrow p{position:relative; font-size:2em; color:#000;margin-bottom: 20px}
    .con_box{ width:100%; padding:20px 0; border-top:1px solid #000}
    .con_box:after{content:""; display:block; clear:both;}
    .con_box ul {padding:0; margin:0; }
    .con_box ul li {list-style:none; margin:10px 0; }
    .con_box ul li p{display:table; width:100%; }
    .con_box ul li p > em,.con_box p > span{display:table-cell; vertical-align:top; }
    .con_box ul li p > em{ width:30px; }
    .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
    .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    
    .txt03{ width:100%; margin: 0 auto; border-top:1px solid #ddd; font-size:1em; color:#555; line-height:1.5em; text-transform: uppercase; background:#f8f8f8; overflow:hidden;word-break: keep-all}
	.txt03 span {display:block; padding:25px}/* 중앙 하단 텍스트 들어갈 박스 */
    
    .con_arrow p{width: 90%;margin: 0 auto 20px}
    .con_box{width: 90%;margin: 0 auto}

    .logo_location {width: 100%;text-align: center;margin: 0 auto}
    .logo_location img {width: 40%;}
    .sub_txt {width: 100%;margin: 70px auto;text-align: justify}
    

	@media screen and (max-width:992px){		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}
        .txt03 {position:relative !important; margin-top:40px;}
		.txt03 span {height:auto;}
	}

	@media all and (max-width:768px){
		.business_type5 h1{font-size:1.8em; }
		.business_type5 h2{font-size:1.4em; }
		.business_type5 h3{font-size:0.9em; padding:0 5px;}
		.business_type5 ul li dl, .business_type5 ul li dl dt, .business_type5 ul li dl dd{display:block; width:100%;}
		.business_type5 ul li dl dt{padding:5%;}
		.business_type5 ul li dl dt img{width:91%;}
		.business_type5 ul li dl dd > strong{line-height:30px; font-size:1.3em;}
		.business_type5 ul li dl dd{width:90%; padding:5%; padding-top:0;}
		.business_type5 ul li dl dd > p{line-height:24px; font-size:0.95em;}
		.business_type5 ul li dl dd > p:before{top:10px;}
	}

	@media all and (max-width:480px){
		.business_type5 h3 br.sn{display:inline;}
	}
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */    
</style>
<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">MDR이란?</a></li>
			<li><a href="javascript:;">주요 변경사항</a></li>
			<li><a href="javascript:;">기술문서구성요소</a></li>
		</ul>
	</div>
	
	<hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:90%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:90%;">
    
    <div class="tab_con">
		
     <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
    <article style="display:block">
        <div class="page_title">
            <h1 class="sub_tit"><span class="fc_pointer">MDR이란?</span></h1>
            <h2 class="sub_tit2">
                유럽 시장에 진출하고자 하는 모든 의료기기 제조사가 2020년 5월 26일부터 준수해야 하는 새로운 의료기기 규정
            </h2>
            <p class="logo_location"><img src="/theme/dna/img/Figure1.jpg"></p>
            <ul class="sub_txt">
                <li style="display:block">
                    <dl>
                        <strong style="display:block;font-size:2em;">MDR에 따른 의료기기 등급분류</strong><br>
                            유럽 시장에 진출하고자 하는 모든 의료기기 제조사가 2020년 5월 26일부터 준수해야 하는 새로운 의료기기 규정입니다. 이는 EU의 현행 의료기기 지침인 MDD: Medical Device Directive(93/42/ECC)와 능동 이식형 의료기기(90/385/EEC) 지침을 대체하는 규정으로, 2017년 5월 25일에 공식적으로 발효되었습니다. 2024년 5월 26일까지 기존의 MDD 인증서가 유효하고, 새로운 제품을 인증 받기 위해서 MDR의 요구사항을 따라야 합니다.<br><br>				    
                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="cccccc" borderheight="0.5">
                            <tr>
                                <td width="203" valign="top"><p align="center">등급</td>
                                <td width="203" valign="top"><p align="center">위험도 </p></td>
                                <td width="203" valign="top"><p align="center">임상시험의 필요성</p></td>
                            </tr>
                            <tr>
                                <td width="203" valign="top"><p align="center">Class I</p></td>
                                <td width="203" valign="top"><p align="center">아주 낮음 </p></td>
                                <td width="203" valign="top"><p align="center">X</p></td>
                            </tr>
                            <tr>
                                <td width="203" valign="top"><p align="center">Class IIa</p></td>
                                <td width="203" valign="top"><p align="center">낮음 또는 보통 </p></td>
                                <td width="203" valign="top"><p align="center">X</p></td>
                            </tr>

                            <tr>
                                <td><p align="center">Class IIb</p></td>
                                <td><p align="center">보통보다 높음 </p></td>
                                <td><p align="center">O</p></td>
                            </tr>
                            <tr>
                                <td ><p align="center">Class III</p></td>
                                <td><p align="center">아주 높음 </p></td>
                                <td><p align="center">O</p></td>
                            </tr>
                        </table> <!--------------/ MDR에 따른 의료기기 등급분류 테이블 종료 /----------------------->
                    </dl>
                </li>
            </ul>
        </div>
        <strong class="con_arrow"><p>DNA TECHNOLOGIES PICIFIC 주요 사업영역</p></strong>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>의료기기의 CE 인증을 위한 안전 및 유효성 임상 시험</span></p></li>
				<li><p><em><strong>02</strong></em><span>CE 인증 의료기기의 PMCF 진행</span></p></li>
				<li><p><em><strong>03</strong></em><span>PMCF Plan, Protocol, Investigator's Brochure 작성 지원</span></p></li>
				<li><p><em><strong>04</strong></em><span>임상시험 데이터 관리</span></p></li>
				<li><p><em><strong>05</strong></em><span>시스템 및 제품 인증 기술 지원</span></p></li>
			</ul>
		</div><br><br><br><br>
        
    </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   
    <article><!--+++++ 컨텐츠 02 시작 +++++--> 
         <div class="page_title">
            <h1 class="sub_tit"><span class="fc_pointer">주요 변경사항</span></h1>
            <ul class="sub_txt">
                <li><strong class="point_b1">1. 인증 기관 지정 <br></strong>
                    모든 인증기관은 MDR에따라 다시 지정되며, 새로운 MDR의 부속서 7에 명시된 요구사항을 준수하여야 합니다.<br><br>
                </li>
                <li><strong class="point_b1">2. 공인대리인 및 규정 준수 담당자 식별<br></strong>
                    의료기기에 CE마크를 획득하기 위해서는 법적으로 EU의 의료기기 규제 요구사항에 대한 전문지식을 갖추고 자격을 갖춘 공인대리인 및 규정준수 담당자를 임명해야 합니다.<br><br>
                </li>
                <li><strong class="point_b1">3. 제품 분류<br></strong>
                    위험성 및 접촉시간, 침습성에 따라 의료기기의 등급을 재 분류하고, 기술문서의 업데이트가 필요합니다. <br><br>
                </li>
                <li><strong class="point_b1">4. 임상 데이터<br></strong>
                    의료기기에 대한 안전성과 성능에 대한 충분한 임상 증거 자료로서 임상평가보고서(CER)를 보유해야 합니다.<br>
                    또한, 잔류위험에 대한 지속적인 평가의 일환으로 PMCF를 수행해야 합니다.<br><br>
                </li>
                <li><strong class="point_b1">5. 사후관리시스템 (Vigilance System) 및 PMS (Post-market surveillance)<br></strong>
                    의료기기의 정보, 인증기관 정보, 인증서, 안전 및 임상 성과 보고서 요약 (SSCP: Summary of Safety and Clinical Performance), <br>
                    정기 안전 업데이트 보고서 (PSUR: Periodic Safety Update Report), PMCF 보고서, 임상 평가 보고서를 포함한 데이터를 EUDAMED에 업로드해야 합니다. <br>
                    또한, Class III, Class IIb 기기의 경우, PMCF 보고서 및 PSUR 보고서를 매년 업데이트 해야 합니다.<br><br>
                </li>
                <li><strong class="point_b1">6. 고유 기기 식별 번호 (UDI: Unique Device Identification) 요구사항 </strong><br>
                    의료기기의 추적성을 제공하기 위해 UDI 번호체계를 도입합니다. 기기 식별자와 생산 식별자로 구분되며, 여기에는 제조업체 및 EU 대리인과 수입 업체에 대한 정보를 포함하여야 합니다.<br><br>
                </li>
                <li><strong class="point_b1">7. ISO 13485:2016<br></strong>
                    ISO 13485:2016 버전으로 업그레이드되면서 기존의 ISO 13485:2003 인증서는 더 이상 유효하지 않습니다.
                </li>
            </ul>
            <p class="logo_location"><img src="/theme/dna/img/Figure3.jpg"></p><br><br>
            <p class="logo_location"><img src="/theme/dna/img/keychanges_kr.png" style="width: 70%"></p>
        </div>
        <strong class="con_arrow"><p>DNA TECHNOLOGIES PICIFIC 주요 사업영역</p></strong>
        <div class="con_box">
            <ul>
                <li><p><em><strong>01</strong></em><span>의료기기의 CE 인증을 위한 안전 및 유효성 임상 시험</span></p></li>
                <li><p><em><strong>02</strong></em><span>CE 인증 의료기기의 PMCF 진행</span></p></li>
                <li><p><em><strong>03</strong></em><span>PMCF Plan, Protocol, Investigator's Brochure 작성 지원</span></p></li>
                <li><p><em><strong>04</strong></em><span>임상시험 데이터 관리</span></p></li>
                <li><p><em><strong>05</strong></em><span>시스템 및 제품 인증 기술 지원</span></p></li>
            </ul>
        </div><br><br><br><br>
    </article><!--+++++ 컨텐츠 02 종료 +++++--> 
    <article><!--+++++ 컨텐츠 03 방폭인증 시작 +++++-->
        <div class="page_title">
            <h1 class="sub_tit"><span class="fc_pointer">기술문서 구성요소</span></h1>
            <h2 class="sub_tit2">의료기기 제조업체는 의료기기를 시장에 출시하기 위해 필히 기술문서를 보유하고 있어야 합니다. 기술문서 제출 지침은 (EU) 2017/745 MDR의 요구사항에 따라 다음 항목을 포함해야 합니다.</h2>
            <p class="logo_location"><img src="/theme/dna/img/Figure6.jpg"></p>
            <div class="business_type5" class="area">
                <h2>MDR 기술문서에 포함되어야 하는 필수 항목</h2>
                <ul class="sub_txt">
                    <li><strong> <!-----(a) Annex II – Technical Documentation:</strong><br> -----></strong>
                        <strong class="point_b1">1.  의료기기 부속품의 설명 및 사양</strong><br>
                        <div style="text-indent: 2em;"> 1-1 기기의 설명 및 사양<br></div>
                        <div style="text-indent: 2em;"> 1-2 이전에 인증을 받은 유사 기기의 참조<br><br></div>
                    </li>
                    <li><!-----2.	제품 분류<br> --->
                        <strong class="point_b1">2. 제조업체가 제공해야 할 정보</strong><br><br>
                    </li>
                    <li><!----3.	임상 증거<br>   ---->
                        <strong class="point_b1">3. 설계 및 제조 정보</strong><br><br>
                    </li>
                    <li><!----4.	임상 증거<br>   ---->
                        <strong class="point_b1">4. 일반적인 안전 및 성능 요구사항</strong><br><br>
                    </li>
                    <li><!----5.	임상 증거<br>   ---->
                        <strong class="point_b1">5. 기회/위험(Benefit/Risk) 분석, 위험 관리</strong><br><br>
                    </li>
                    <li><!----6.	임상 증거<br>   ---->
                        <strong class="point_b1">6. 제품 검증 및 확인</strong><br>
                        <div style="text-indent: 2em;"> 6-1 전임상 및 임상 데이터<br></div>
                        <div style="text-indent: 2em;"> 6-2 특정 사례에 필요한 추가 정보<br><br></div>
                    </li>
                    <li><!-----2.	제품 분류<br> --->
                        <strong class="point_b1">7. 시판 이후 임상 평가 계획 (PMCF Plan)</strong><br><br>
                    </li>
                    <li><!----3.	임상 증거<br>   ---->
                        <strong class="point_b1">8. 주기적 안전성 업데이트 보고서 PSUR (Periodic Safety Update Report)</strong><br><br>
                    </li>
                    <li><!----3.	임상 증거<br>   ---->
                        <strong class="point_b1">9. PMS (Post-market surveillance) 보고서</strong>
                    </li>
                </ul>
            <div class="txt03" style="text-align:justify">
                <span>
                    <p style="width: 80%;margin: 0 auto">
                        유럽은 세계에서 의료 기기에 대한 가장 큰 시장 중 하나입니다. 우리는 업그레이드 된 MDR 규정을 준수하고 있으며, CRO 분야에서 전문가를 보유하고있는 DNA TECHNOLOGIES PACIFIC에서 고객님의 제품에 가치를 더욱 높여줄 것입니다.
                    </p>
                </span>
            </div>	
        </div>
        </div>
        <h3 class="con_arrow"><p>DNA TECHNOLOGIES PICIFIC 주요 사업영역</p></h3>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>의료기기의 CE 인증을 위한 안전 및 유효성 임상 시험</span></p></li>
                    <li><p><em><strong>02</strong></em><span>CE 인증 의료기기의 PMCF 진행</span></p></li>
                    <li><p><em><strong>03</strong></em><span>PMCF Plan, Protocol, Investigator's Brochure 작성 지원</span></p></li>
                    <li><p><em><strong>04</strong></em><span>임상시험 데이터 관리</span></p></li>
                    <li><p><em><strong>05</strong></em><span>시스템 및 제품 인증 기술 지원</span></p></li>
                </ul>
            </div><br><br><br><br>
    </article><!--+++++ 컨텐츠 03 방폭인증 종료 +++++--> 
    </div><!-------div class="tab_con" 종료------>
</div>	<!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>