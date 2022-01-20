<?php 	
	include "../../../../common.php";
	$tmenu_ = "임상"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "임상평가"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "임상평가"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#87bf78 }
    .point_b1{color:#87bf78;font-weight: 600;font-size: 1.2em }
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

    .logo_location {width: 100%;text-align: center;margin: 70px auto}
    .logo_location img {width: 40%;}
    .sub_txt {width: 100%;margin: 70px auto;text-align: justify}
    
    .circle_li{width: 100%; margin: 0 auto}
    .circle_box{float: left;width: 20%;margin: 0 auto}
    .circle_txt{float: left;width: 80%;margin: 0 auto}
    .icon{display: block;width: 60px;height: 60px;line-height: 55px;text-align: center;font-size: 2.2em;border-radius: 50%;color: #fff;position: relative;margin-left: 20px}
    
    .con_sec li:nth-child(1) .icon{background: #005bab}
    .con_sec li:nth-child(2) .icon{background: #36b1d4}
    .con_sec li:nth-child(3) .icon{background: #f48025}
    .con_sec li:nth-child(4) .icon{background: #005bab}
    .con_sec li:nth-child(5) .icon{background: #36b1d4}
    

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
    <!--------------
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">TRCU EAC</span> 인증 러시아(RUSSIA)</h1>
		<h2 class="sub_txt">러스테스트 퍼스픽의 다양한 사업영역을 소개합니다.</h2>
	</div>
    -------------->
    
    
    <!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">임상평가란?</a></li>
			<li><a href="javascript:;">임상평가 보고서</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	
	<hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:90%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:90%;">

	
<!--+++ Mark 20.06.09 탭 컨텐츠 영역 +++-->
<div class="tab_con">
     <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
     <article style="display:block">
         <div class="page_title">
           <h1 class="sub_tit"><span class="fc_pointer">임상평가란?</span></h1>
           <p class="logo_location"><img src="/theme/dna/img/img_1200.jpg" style="width: 70%"></p>
           <ul class="sub_txt">
               <li><strong>1. 임상 평가 도입</strong><br><br>
                    <div>임상 평가는 의료기기와 관련된 임상 데이터를 수집하고 평가하여 안전성, 효과 및 성능을 검증하고 관련 규제 요건에 대한 적합성을 입증하는 과정입니다.</div><br><br>
               </li>
               <li><strong>2. 임상 평가는 언제 필요한가?</strong><br><br>
                    <div>임상평가는 의료기기의 수명주기 전체에 걸쳐 실시하는 과정입니다.
                    제조업체가 임상 평가를 수행할 필요가 있는 첫 번째 시기는 연구해야 할 데이터를 승인하기 위해 의료기기를 개발하는 과정이며
                    그 후 본 기기의 안전성, 효과 및 성능에 관한 새로운 정보가 사후 마케팅 감시 보고서(PMSR) 또는 부작용 보고서(AER)의 형태로 사용 중 확보되므로
                    임상 평가를 주기적으로 반복해야 합니다.</div><br><br>
               </li>
               <li><strong>3. 임상평가 수행과정</strong><br><br>
                    <div>
                         <ul class="con_sec">
                            <li class="circle_li">
                                <div class="circle_box">
                                    <div class="icon"><i class="fab fa-medapps"></i></div>
                                </div>
                                <div class="circle_txt">
                                    <div style="font-weight: 600;font-size: 1.1em">0단계 : 범위</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;범위의 정의, 임상 평가 계획 수립</div><br><br>
                                </div>
                            </li>
                            <li class="circle_li">
                                <div class="circle_box">
                                    <div class="icon"><i class="fas fa-microscope"></i></div>
                                </div>
                                <div class="circle_txt">
                                    <div style="font-weight: 600;font-size: 1.1em">1단계 : 관련 데이터 식별</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;문헌 검색</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 경험</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 조사</div><br><br>
                                </div>
                            </li>
                            <li class="circle_li">
                                <div class="circle_box">
                                    <div class="icon"><i class="fas fa-hands-helping"></i></div>
                                </div>
                                <div class="circle_txt">
                                    <div style="font-weight: 600;font-size: 1.1em">2단계 : 개별 데이터 세트 평가</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;적합성</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;안전성, 임상 성과 및/또는 효과 입증에 대한 결과의 기여</div><br><br>
                                </div>
                            </li>
                            <li class="circle_li">
                                <div class="circle_box">
                                    <div class="icon"><i class="fas fa-microscope"></i></div>
                                </div>
                                <div class="circle_txt">
                                    <div style="font-weight: 600;font-size: 1.1em">3단계 : 관련자료 분석</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;전체 자료의 효용성 파악</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;안전, 임상 성과 및/또는 효과에 대한 결론</div><br><br>
                                </div>
                            </li>
                            <li class="circle_li">
                                <div class="circle_box">
                                    <div class="icon"><i class="fas fa-hands-helping"></i></div>
                                </div>
                                <div class="circle_txt">
                                    <div style="font-weight: 600;font-size: 1.1em">4단계 : 임상평가 보고서</div>
                                    <div style="text-indent: 1.2em;text-align: justify">-&nbsp;&nbsp;관련 중요 원칙의 적합성을 선언할 수 있을 정도로 충분한 임상 증거가 있는 경우 임상평가 보고서(CER)를 작성합니다. 그렇지 않을 경우 추가 또는 새로운 임상 데이터가 생성되어야 합니다.</div>
                                </div>
                            </li>
                       </ul>
                    </div>
               </li>   
           </ul>
         </div>
         <strong class="con_arrow"><p>DNA Technologies Pacific의 Clinical investigation 관련 서비스</p></strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>임상시험 계획 작성 지원</span></p></li>
                    <li><p><em><strong>02</strong></em><span>임상시험 데이터 관리</span></p></li>
                    <li><p><em><strong>03</strong></em><span>임상시험 설계 지원</span></p></li>
                    <li><p><em><strong>04</strong></em><span>프로토콜 및 시놉시스 검토</span></p></li>
                    <li><p><em><strong>05</strong></em><span>임상시험대상자 데이터 관리</span></p></li>
                </ul>
            </div><br><br><br><br>
     </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   
     <article><!--+++++ 컨텐츠 02 시작 +++++--> 
         <div class="page_title">
           <h1 class="sub_tit"><span class="fc_pointer">임상평가 보고서</span></h1>
           <h2 class="sub_tit2">
                임상평가보고서(CER)는 의료기기에 대한 임상평가의 결론으로 구성된 문서입니다. CER는 해당 기기의 문헌, 임상 경험 및/또는 임상 조사 또는 실질적으로 동등한 장치에 대한 다른 연구의 결과로부터 수집된 분석된 임상 데이터로 구성됩니다. 임상평가 보고서는 충분한 데이터를 확보한 이후 최종적으로 임상평가보고서를 작성합니다.
            </h2>
            <p class="logo_location"><img src="/theme/dna/img/img_1200_1.jpg" style="width: 70%"></p>
           <ul class="sub_txt">
               <li>
                    <div>
                         <ul class="con_sec">
                            <li class="circle_li">
                                <div class="circle_box">
                                    <div class="icon"><i class="fab fa-medapps"></i></div>
                                </div>
                                <div class="circle_txt">
                                    <div style="font-weight: 600;font-size: 1.1em">0단계 : 범위 정의, 임상평가 계획</div><br><br>
                                    <div style="text-indent: 1.2em;text-align: justify;word-break: keep-all">-&nbsp;&nbsp;임상 평가의 초점, 관점 및 맥락을 제시해야 합니다.
                                    여기에는 예를 들어, 평가할 제품에 대한 설명과 그 목적, 그리고 기술적 및 의료적 배경이 포함되며 이를 토대로 하여,
                                    임상평가 계획을 작성하는데, 여기에는 증거가 제공되어야 하는 기본적인 요건에 대한 참조가 포함됩니다.
                                    </div><br><br>
                                </div>
                            </li>
                            <li class="circle_li">
                                <div class="circle_box">
                                    <div class="icon"><i class="fas fa-microscope"></i></div>
                                </div>
                                <div class="circle_txt" style="word-break: break-all;text-align: justify;word-break: keep-all">
                                    <div style="font-weight: 600;font-size: 1.1em">1단계 : 문헌 및/또는 임상 경험 및/또는 임상 조사로부터 검색된 임상 데이터</div><br><br>
                                    <div style="text-indent: 1.2em">-&nbsp;&nbsp;1. 문헌검색<br><br>
                                        <span>문헌검색은 특정한 주제와 관련된 문헌이나 자료를 수집하는 데 이용될 수 있는 체계적인 접근법입니다.
                                        임상 평가와 관련된 데이터는 제조자 또는 과학 문헌에 보관할 수 있습니다.
                                        장치에 관련된 데이터를 식별하고 임상 평가에 필요한 데이터의 종류와 범위를 결정하는 것은 제조자의 책임입니다.
                                        문헌검색을 실시하기 전에 문헌검색 과정을 기술하는 프로토콜을 개발해야 합니다.
                                        그 후 프로토콜을 준수하여 포괄적인 검색을 수행해야 하며, 문헌 검색을 완료할 때 검색 결과를 제시할 보고서를 작성해야 합니다.<br><br>
                                        제품 자체에 대한 임상 데이터뿐만 아니라 충분히 유사한 기준 제품에 대한 문헌 출처의 임상 데이터를 사용하여 성능과 안전성을 평가할 수 있습니다.
                                        동등성의 정도는 임상, 기술적, 생물학적 측면의 세 가지 측면에서 입증되어야 합니다.<br><br>
                                        </span>
                                    </div>
                                    <div style="text-indent: 1.2em">-&nbsp;&nbsp;2. 임상경험<br><br>
                                        <span>임상 경험이란 임상조사 수행 이외의 의료기기의 임상사용에서 얻은 정보를 말합니다. 이러한 유형의 정보에는 다음과 같은 사항이 포함될 수 있습니다.<br><br>
                                            <ul>
                                                <li>1) 제조업체에서 생성한 사후 시장 감시 보고서(PMSR), 등록부 또는 코호트 연구</li>
                                                <li>2) 부작용 데이터베이스 (AE)</li>
                                                <li>3) 기기 마케팅에 앞서 동정적 사용 프로그램에 따라 개별 환자로부터 생성된 해당 기기의 데이터</li>
                                                <li>4) 임상적으로 관련된 현장 시정 조치의 세부사항(예: 리콜, 알림, 위험 경고)</li>
                                            </ul><br><br>
                                            이 데이터는 덜 흔하지만 심각한 기기 관련 부작용을 식별하고 기기의 안전과 성능에 대한 장기적인 정보를 제공하는 데 특히 유용하다.
                                            그것은 또한 과학 문헌이나 임상 조사의 보고 대상이 될 것 같지 않은 오래되고 잘 특성화된 기술에 기반을 둔 위험 기기에 유용합니다.
                                        </span>
                                    </div><br><br>
                                    <div style="text-indent: 1.2em">-&nbsp;&nbsp;3. 임상조사<br><br>
                                        <span>임상 조사는 "의료기기의 안전 및/또는 성능을 평가하기 위해 수행되는 하나 이상의 인간 대상의 체계적인 조사 또는 연구"로 정의되며,
                                        의료기기의 안전 및 웰빙이 의료기기에 참여하기 위해 헬싱키 선언에 따라 수행되어야 합니다.<br><br>
                                        * ISO 14155(2011)<br>
                                        인간 대상 의료장치의 임상조사 : 양호한 임상실습은 인간 대상의 임상조사 설계, 수행, 기록 및 보고를 위한 일반적인 원칙과 지침을 제공하며,
                                        임상조사를 실시할 때마다 가능한 한 따라야 합니다.
                                        </span>
                                    </div><br><br>
                                </div>
                            </li>
                            <li class="circle_li">
                                <div class="circle_box">
                                    <div class="icon"><i class="fas fa-hands-helping"></i></div>
                                </div>
                                <div class="circle_txt" style="word-break: keep-all">
                                    <div style="font-weight: 600;font-size: 1.1em">2단계 : 임상 데이터 평가</div><br><br>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상데이터의 평가는 임상 데이터의 강도와 한계를 이해하는 데 사용되는 체계적인 과정입니다.
                                    각 임상 데이터 세트는 연구 질문을 다루는 적합성과 기기의 안전과 성능을 확립하는 데 기여하는 적합성을 결정하기 위해 평가됩니다.
                                    임상 데이터의 평가를 위한 방법론은 연구마다 다르며 임상 데이터를 평가하는 정해진 한가지만 방법이 없습니다.
                                    따라서, 관련 임상 데이터에 기초하여 채택할 적절한 방법을 식별하는 것은 평가자에 달려 있습니다.
                                    </div><br><br>
                                </div>
                            </li>
                            <li class="circle_li">
                                <div class="circle_box">
                                    <div class="icon"><i class="fas fa-microscope"></i></div>
                                </div>
                                <div class="circle_txt" style="word-break: keep-all">
                                    <div style="font-weight: 600;font-size: 1.1em">3단계 : 임상 데이터 분석</div><br><br>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 데이터의 분석은 평가된 데이터가 의도한 사용과 관련하여 기기의 안전성과 성능을 입증할 수 있는지
                                     여부를 결정하기 위해 수행됩니다. 분석 결과는 라벨, 환자 정보 및 기기 사용 지침의 변경을 제안할 수 있습니다.
                                     단, 제조자가 필수요건 적합성 선언을 위한 임상적 증거가 불충분하다고 결론지을 경우, 제조자는 검색 범위를 넓히거나,
                                     불충분성을 해결하기 위한 임상조사를 실시함으로써 추가 정보를 수집할 필요가 있을 것입니다.
                                    </div><br><br>
                                </div>
                            </li>
                            <li class="circle_li">
                                <div class="circle_box">
                                    <div class="icon"><i class="fas fa-hands-helping"></i></div>
                                </div>
                                <div class="circle_txt" style="word-break: keep-all">
                                    <div style="font-weight: 600;font-size: 1.1em">4단계 : 임상평가 보고서</div>
                                    <div style="text-indent: 1.2em;text-align: justify">-&nbsp;&nbsp;중요 원칙의 적합성을 선언할 수 있을 정도로 충분한 임상 증거가 있는 경우 임상평가 보고서(CER)를 작성합니다.</div>
                                </div>
                            </li>
                       </ul>
                    </div>
               </li>   
           </ul>
         </div>
         <strong class="con_arrow"><p>DNA TECHNOLOGIES PICIFIC의 임상평가보고서 작성 지원 서비스</p></strong>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>DNA Technologies Pacific은 고객이 요청할 경우 임상 시험 프로토콜을 설계하고, 임상평가보고서(CER), 임상조사보고서(CIR),
				부작용보고서(AER) 등의 임상평가 데이터 관리 및 작성을 지원하는 서비스를 제공하고 있습니다.</span></p></li>
				<li><p><em><strong>02</strong></em><span>전문적인 지식을 갖추고 자격 있는 DNA Technologies Pacific의 전문가들이 고객 여러분들을 도와 성공적인 임상시험을 진행할 수 있도록
                    노력하겠습니다.</span></p></li>
			</ul>
		</div><br><br><br><br>
     </article><!--+++++ 컨텐츠 02 종료 +++++--> 
</div><!-------div class="tab_con" 종료------>
</div>	<!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>