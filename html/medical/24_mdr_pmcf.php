<?php 	
	include "../../../../common.php";
	$tmenu_ = "임상"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "PMCF"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "PMCF"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"---->

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
			<li class="on"><a href="javascript:;">PMCF란?</a></li>
			<li><a href="javascript:;">PMCF 계획</a></li>
			<li><a href="javascript:;">PMCF 보고서</a></li>
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
        <h1 class="sub_tit"><span class="fc_pointer">PMCF란?</span></h1>
        <h2 class="sub_tit2">
            PMCF는 PMS의 한 종류로, 임상 평가에 대한 자료를 수집하고 업데이트하는 프로세스로 MDR(유럽 의료기기 규정)의 필수 요구사항입니다.
            의료기기의 성능과 안전, 잔류위험에 대한 장기적인 데이터를 수집하고 입증하기 위해 고안되었습니다.
            제조업체는 PMCF를 통해 얻은 임상 데이터와 PMS보고서, 임상 평가 보고서, 리스크 평가 등의 데이터를 제출해야 합니다.
        </h2>
        <p class="logo_location"><img src="/theme/dna/img/pmcf.jpg" style="width: 70%"></p>
        <div class="txt03">
            <span style="padding: 25px">
                <ul style="width: 80%;margin: 0 auto">
                    <li><strong>PMCF의 목적은 다음과 같습니다.</strong><br><br>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;의료기기의 안전 및 임상 성능 확인</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;식별된 위험의 지속적인 관리</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;사실적인 증거에 입각한 위험 감지</div>
                    </li>
                </ul>
            </span>
        </div>
        <h2 class="sub_tit2" style="text-align: justify">
            PMCF는 새로운 임상 연구, 의료기기 레지스트리에서 파생된 데이터 검토, 시판 전 임상시험을 진행한 고객의 후속조치 또는 이전에 의료기기를 사용했던 환자의 후속조치 등을 통해 이루어질 수 있습니다.
        </h2>
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
        <h1 class="sub_tit"><span class="fc_pointer">PMCF 계획</span></h1>
        <h2 class="sub_tit2">
            PMCF 진행을 위한 Plan은 유럽 연합 회원국별로 상이하지만 크로아티아의 경우 사전에 관계 당국의 승인을 획득 이후 PMCF 관련 임상을 실시할 수 있습니다.
        </h2>
        <p class="logo_location"><img src="/theme/dna/img/pmcf01.jpg" style="width: 70%"></p>
        <div class="txt03">
            <span style="padding: 25px">
                <ul style="width: 80%;margin: 0 auto">
                    <li><strong>PMCF계획은 다음을 목표로 데이터를 사전에 수집하고 평가하는 방법과 절차를 명시해야 합니다.</strong><br><br>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;의료기기의 예상수명 동안 지속적으로 장치의 안전성과 성능 확인</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;이전에 알려지지 안은 부작용을 확인, 확인된 부착용 및 금지사항 모니터링</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;사실적 증거를 통해 새로운 리스크 파악 및 분석</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;허용가능한 이익과 위험 조사</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;기기 오용의 가능성과 라베 표기를 식별하여 제품이 올바른 용도로 사용되고 있는지 파악</div>
                    </li>
                </ul>
            </span>
        </div>
        <p class="logo_location"><img src="/theme/dna/img/pmcf02.jpg" style="width: 70%"></p>
        <div class="txt03">
            <span style="padding: 25px">
                <ul style="width: 80%;margin: 0 auto">
                    <li><strong>PMCF계획에는 다음 내용이 포함되어야 합니다.</strong><br><br>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;PMCF의 일반적인 방법 및 절차 : 임상경험, 제품 사용자의 피드백, 과학적인 문헌, 기타 임상 자료</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;PMCF의 구체적인 방법 및 절차 : 적절한 등록, PMCF 연구</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;사용된 방법 및 절차의 적절성에 대한 이론적 근거</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상평가 보고서, 위험관리 자료</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;구체적인 목표</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;동등하거나 유사한 기기의 임상 데이터 평가 자료</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;관련 조화 규격 및 지침</div>
                        <div style="text-indent: 1.2em;">-&nbsp;&nbsp;PMCF의 일정</div>
                    </li>
                </ul>
            </span>
        </div>
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
</article><!--+++++ 컨텐츠 02 종료 +++++--> 
<article><!--+++++ 컨텐츠 03 방폭인증 시작 +++++-->
	<div class="business_type2"><!-----class="company 시작-------->
        <div class="page_title">
            <h1 class="sub_tit"><span class="fc_pointer">PMCF 보고서</span></h1>
            <h2 class="sub_tit2">PMCF 보고서는 연구를 수행하고 기기의 안전성을 입증하는데 중요한 역할을 합니다. 이 자료는 잠재적인 위험을 식별하고 조치하는 과정에서 검토할 때 사용될 수 있습니다.
            </h2>
            <p class="logo_location"><img src="/theme/dna/img/Post-Market-Surveillance.jpg" style="width: 70%"></p>
            <div class="txt03">
                <span style="padding: 25px">
                    <ul style="width: 80%;margin: 0 auto">
                        <li><strong>PMCF 보고서는 다음 사항을 고려해야 합니다.</strong><br><br>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 시험이나 연구 계획을 준수해 진행되고, 보고서를 작성해야 한다.</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;적절한 전문가에 의해 분석된 계획에 따라 결정된 결론을 포함한 분석자료를 포함해야 합니다.</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;기존 임상시험의 목표와 가설을 바탕으로 최종 보고서의 결론을 결정지어야 합니다.</div><br><br>
                            PMCF 보고서는 임상시험의 증거와 임상평가 절차로 사용될 수 있습니다. 이것은 의료기기가 필수 요구사항에 적합한지 지속적으로 확인해야 하며, 그러한 평가는 수정되거나 보존될 수 있습니다. 제조 공정이 바뀌거나 설계가 바뀌거나 공공 요구사항이 변경된 경우 PMCF를 수행하고 보고서를 재 작성해야 합니다. 이 보고서는 인증기관에 의해 검토되고 관리되어야 합니다.
                        </li>
                   </ul>
                </span>
            </div>
	    </div>
    </div><!-----class="company 종료-------->	
    <strong class="con_arrow"><p>DNA TECHNOLOGIES PICIFIC은 PMCF와 관련해 다음 업무를 수행합니다.</p></strong>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>PMCF Plan 작성 지원</span></p></li>
				<li><p><em><strong>02</strong></em><span>PMCF Plan 허가 위한 지원</span></p></li>
				<li><p><em><strong>03</strong></em><span>PMCF 보고서 관리 및 검토</span></p></li>
				<li><p><em><strong>04</strong></em><span>PMCF 데이터 관리</span></p></li>
				<li><p><em><strong>05</strong></em><span>지속적인 데이터 수집으로 잔류 위험 식별 및 관리 지원</span></p></li><br>
				<li><span style="font-size: 16px;font-weight: 500;color: #87bf78">DNA Technologies Pacific의 전문가는 다년간의 경험과 실적을 바탕으로 고객사의 PMCF 실행을 지원해 드립니다.</span></li>
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