<?php 	
	include "../../../../common.php";
	$tmenu_ = "회사안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "서비스"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "서비스"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

<!--<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>-->

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"---->

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
	.fc_pointer {color:#2797c8 }
    .point_b1{color:#2797c8 }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;font-size: 1.1em;font-weight: 400;line-height: 1.5}
    
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:40px auto 0; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px;}
    .point_b1{font-weight: 600;font-size: 1.2em}
    
    .page_title li strong { font-size: 1.1em }
    .business_type5 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
    .business_type5 li strong { font-size: 1.1em }
    
    table {width: 100%;border: 1px solid #444444;border-collapse: collapse;}
    th, td {border: 1px solid #444444;padding: 10px;}
    
    .con_arrow{ width:100%; padding-bottom:20px; text-align: left;}
    .con_arrow p{position:relative; font-size:2em; color:#000;margin-bottom: 20px}
    .con_box{ width:100%; padding:20px 0; border-top:1px solid #000;}
    .con_box:after{content:""; display:block; clear:both;}
    .con_box ul {padding:0; margin:0; }
    .con_box ul li {list-style:none; margin:10px 0; }
    .con_box ul li p{display:table; width:100%; }
    .con_box ul li p > em,.con_box p > span{display:table-cell; vertical-align:top; }
    .con_box ul li p > em{ width:30px; }
    .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
    .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    
    .txt03{ width:80%; margin: 0 auto; border-top:1px solid #ddd; font-size:1em; color:#555; line-height:1.5em; text-transform: uppercase; background:#f8f8f8; overflow:hidden;margin-bottom: 50px;word-break: keep-all}
	.txt03 span {display:block; padding:25px;}/* 중앙 하단 텍스트 들어갈 박스 */
    
    .con_arrow p{width: 90%;margin: 0 auto 20px}
    .con_box{width: 90%;margin: 0 auto}
    
    .logo_location {width: 90%;text-align: center;margin: 0 auto}
    .logo_location img {width: 40%;margin-bottom: 50px}
    .sub_txt {width: 90%;margin: 0 auto;text-align: justify}

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
   
    <div class="tab_con">
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <div class="business_type2"><!-----class="company 시작-------->
                <div class="page_title">
                    <h1 class="sub_tit"><span class="fc_pointer">서비스 안내</span></h1><br><br>
                    <h2 class="sub_tit2">
                         DNA Technologies Pacific이 제공하는 서비스<br><br>
                    </h2>
                    <hr style="border:1px solid#cccccc; height: 1px !important; display: block !important; width: 100% !important; margin: 30px auto">
                    <div style="width: 90%;margin: 0 auto">
                        <p>
                            <strong style="display:block;font-size:1.5em;margin-bottom: 6px">시스템 및 제품인증 지원 서비스</strong>
                            DNA Technologies Pacific은 국제 표준인증 지도를 위하여 수년간의 심사원 활동 및 산업 현장 경력을 보유한 전문 인력을 보유하고 있으며, 인증에 대한 이해도가 높고 여러 산업분야의 인증 경험으로 능동적인 서비스를 제공합니다.
                        </p>
                    </div><br><br>
                    <p class="logo_location"><img src="/theme/dna/img/services5.jpg" style="width: 70%"></p>
                    <hr style="border:1px solid#cccccc; height: 1px !important; display: block !important; width: 100% !important; margin: 30px auto">
                    <p class="logo_location"><img src="/theme/dna/img/services1.jpg" style="width: 70%"></p>
                    <div class="txt03" style="text-align:justify">
                        <span style="padding: 25px">
                            <ul style="width: 80%;margin: 0 auto">
                                <li><strong>종합적인 서비스</strong><br>
                                    DNA Technologies Pacific은 CRO 기관으로서 다음과 같은 서비스를 제공합니다.<br><br>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;프로젝트 관리</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;데이터베이스 설계 및 구축</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;데이터 입력 및 검증</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 시험 데이터 관리</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;의료 코딩 지원</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;데이터 품질관리</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;통계적 분석 계획 및 보고서 작성 지원</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;검증 프로그래밍 지원</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;안전 및 성능 요약 작성 지원</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;최종 연구 보고서 작성 지원</div>
                                </li>
                           </ul>
                        </span>
                    </div>
                    <hr style="border:1px solid#cccccc; height: 1px !important; display: block !important; width: 100% !important; margin: 30px auto">
                    <p class="logo_location"><img src="/theme/dna/img/services2.jpg" style="width: 70%"></p>
                    <div class="sub_txt">
                        <p><strong class="point_b1">프로젝트 관리자 및 모니터링 담당자</strong></p>
                        <p>
                            DNA Technologies Pacific은 배정된 프로젝트 담당자와 함께 법적 요구사항과 시간을 준수하고 고객과 효과적으로 의사소통 하며 임상 연구 및 시험에 대한 서비스를 제공합니다.
                        </p><br><br>
                    </div>
                    <div class="txt03" style="text-align:justify">
                        <span style="padding: 25px">
                            <ul style="width: 80%;margin: 0 auto">
                                <li>프로젝트 관리자와 모니터링 담당자는 다음을 포함하여 임상 시험 관리의 모든 측면에 관여합니다.<br><br>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;타당성조사</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;연구설계</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;프로토콜 및 시놉시스 검토</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;환자정보의 작성</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;동의서 작성</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;윤리위원회 주선</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 진행 의료진 선정</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 장소 선정</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 시험 전 사전 방문</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 장소 최초 방문</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;중간 모니터링 방문</div>
                                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;완료 방문(최종 방문)</div>
                                </li>
                           </ul>
                        </span>
                    </div>
                    <hr style="border:1px solid#cccccc; height: 1px !important; display: block !important; width: 100% !important; margin: 30px auto">
                    <div style="width: 90%;margin: 0 auto">
                        <p>
                            <strong style="display:block;font-size:1.5em;margin-bottom: 6px">임상 연구 보고</strong>
                            DNA Technologies Pacific은 임상시험 및 PMCF 연구에 대한 차별화된 서비스를 제공합니다. 저희 모든 임직원은 임상 시험 데이터의 분석에 대한 교육을 이수하였습니다.
                        </p>
                    </div><br><br>	
                    <p class="logo_location"><img src="/theme/dna/img/services3.jpg" style="width: 70%"></p>
                    <hr style="border:1px solid#cccccc; height: 1px !important; display: block !important; width: 100% !important; margin: 30px auto">
                    <div style="width: 90%;margin: 0 auto">
                        <p>
                            <strong style="display:block;font-size:1.5em;margin-bottom: 6px">통계 서비스</strong>
                            DNA Technologies Pacific은 복잡한 임상 시험 프로그램의 계획 및 설계, 분석에 대한 서비스를 지원합니다.
                        </p>
                    </div><br><br>
                    <p class="logo_location"><img src="/theme/dna/img/services4.jpg" style="width: 70%"></p>                    
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
            </div><!-----class="company 종료-------->	
    
     </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   
       
       
       

       
       
       
 

       
       
    </div><!-------div class="tab_con" 종료------>
      
          
	</div>	<!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>