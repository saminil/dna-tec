<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "카자흐스탄"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "계측기기K"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


<style>
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }


	.business_type2{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type2:after{content:""; display:block; clear:both;}
	.business_type2 .business_info { width:100%; background:#fff; margin-bottom:80px; }
	.business_type2 .business_info:after{content:""; display:block; clear:both;}
	.business_type2 .business_info ul{ padding:0; margin:0;}
	.business_type2 .business_info ul li{ padding:0; margin:0;padding-right;5%;text-align:justify;}
	.business_type2 .business_info ul li.left_box { float:left; width:40%;/* height:500px;*/ overflow:hidden; }
	.business_type2 .business_info ul li.left_box img{ width:100%; height:100%; }
	.business_type2 .business_info ul li.right_box{position:relative; float:right; width:60%; /*height:500px;*/padding-right;5%;text-align:justify;}
	.business_type2 .business_info ul li.right_box .txt03{ position:absolute; left:0; bottom:0; width:100%; border-top:1px solid #ddd; font-size:0.9em; color:#555; line-height:1.5em; text-transform: uppercase; background:#f8f8f8; overflow:hidden;}
	.business_type2 .business_info ul li.right_box .txt03 span {display:block; padding:20px 25px; height:100px; }

	.business_type2 .txt_area { width:100%; padding-top:40px; border-top:2px solid #000; }
	.business_type2 .txt_area:after{content:""; display:block; clear:both;}
	.business_type2 .txt_area .txt01 { float:left; width:100%; word-break: keep-all; }
	.business_type2 .txt_area .txt01 p { padding:0; margin:0; margin-bottom:15px; padding:0;}
	.business_type2 .txt_area .txt01 span.tit { display:block; font-size:2.2em; color:#000; font-weight:700; line-height:1.2em;  }
	.business_type2 .txt_area .txt01 span.txt { display:block; font-size:1.15em; color:#333; font-weight:400; line-height:1.4em; }
	.business_type2 .txt_area .txt02 { float:left; width:100%; margin-top:20px;}
	.business_type2 .txt_area .txt02 ul {margin:0; padding:0; }
	.business_type2 .txt_area .txt02 ul li { position:relative; color:#555; font-weight:400; line-height:1.5em; list-style:none; padding-left:3%; margin-bottom:5px;}
	.business_type2 .txt_area .txt02 ul li:before {position:absolute; top:8px; left:0; content:""; display:inline-block; width:4px; height:4px; background:#555; margin-right:10px; vertical-align:middle;}

	.business_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.business_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.business_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.business_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.business_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.business_type2 .con_box:after{content:""; display:block; clear:both;}
	.business_type2 .con_box ul { padding:0; margin:0; }
	.business_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.business_type2 .con_box ul li p{display:table; width:100%; }
	.business_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.business_type2 .con_box ul li p > em{ width:30px; }
	.business_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.business_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}


	@media screen and (max-width:992px){
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}
		
		.business_type2 .business_info{margin-bottom:0px;}
		.business_type2 .txt_area { width:90%; margin:0 auto; border-top:0;}
		.business_type2 .txt_area .txt01 span.tit {font-size:1.85em;}
		.business_type2 .con_arrow{width:95%; margin:0 auto;}
		.business_type2 .con_box{width:95%; margin:0 auto;}

	}

	@media screen and (max-width:480px){

	
		.business_type2 .con_arrow p{ font-size:1.5em; margin-top:30px;}
		.business_type2 .con_box ul li { width:100%; }

	}

    /*  TRCU 관계 법령 시작,table  */
    
    .business_type5 ul li dl{display:table;}
	.business_type5 ul li dl dt, .business_type5 ul li dl dd{display:table-cell; vertical-align:middle;}
	.business_type5 ul li dl dt{width:40%; padding-left:5%;}
	.business_type5 ul li dl dt img{max-width:100%; margin:0 auto;}	
	.business_type5 ul li dl dd{width:60%; padding:50px 0; padding-top:30px; padding-left:5%;}
	.business_type5 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type5 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type5 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}
    
    
    table {width: 100%;border: 1px solid #444444;border-collapse: collapse;}
    th, td {border: 1px solid #444444;padding: 10px;}
    
    /*  TRCU 관계 법령 종료 table  */

	@media screen and (max-width:992px){		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}
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
        .business_type2 .business_info ul li.left_box { width:20%; }
		.business_type2 .business_info ul li.right_box{ width:80%; }
		.business_type2 .business_info ul li.right_box .txt03 {position:relative !important; margin-top:600px;}
		.business_type2 .business_info ul li.right_box .txt03 span {height:auto;}
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */    
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<br>
<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">계측기기 K인증(PAC K)</span>&nbsp;카자흐스탄 (KAZAKHSTAN)</h1>
		<h2 class="sub_txt">Pattern Approval Certificate for Measuring Device - Kazakhstan</h2>
	</div>

	<div class="business_type2">
	
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="./image/pac_k07.jpg" alt="PAC(계측기기) K 개요" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">PAC(계측기기) K 개요 </span></p>
						
						<p><span class="txt">PAC K 인증은 Pattern Approval Certificate for Measuring Device - Kazakhstan의 약어로, 계측 및 시험장비 기기류에 대한 인증서를 뜻하며 Pattern Approval Certificate (Certificate of Metrology) 로도 알려져 있습니다. </span></p>
						<p><span class="txt">현재 카자흐스탄 내 계측기기등록은 “Committee for Technical Regulation and Metrology of the Ministry of Industry and New Technologies of the Republic of Kazakhstan” 에서 관리, 감독한다. 카자흐스탄 계측관청은 등록 신청 된 계측기기를 검토, 시험 후 인증서를 발행합니다. </span></p> <br><br><br><br><br>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="../russia/image/EAC24_Ex_PAC1.jpg" alt="계측기기 K인증(PAC K) 적용 범위" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">계측기기 K인증(PAC K) 적용 범위</span></p>
						<!------p><span class="txt">현재 카자흐스탄 내 계측기기등록은 “Committee for Technical Regulation and Metrology of the Ministry of Industry and New Technologies of the Republic of Kazakhstan” 에서 관리, 감독한다.카자흐스탄 계측관청은 등록 신청 된 계측기기를 검토,시험 후 인증서를 발행합니다. </span></p----->
					</div>
					<div class="txt02">
					<ul>
                        <li> 의약품</li>
                        <li> 수의학</li>
                        <li> 환경 보호</li>
                        <li> 비상 상황의 비즈니스 관리</li>
                        <li> 작업장 내 예방</li>
                        <li> 산업 활동에서의 예방</li>
                        <li> 상품 교역 및 교환</li>
                        <li> 제품의 포장 및 중량</li>
                        <li> 공공회계</li>
                        <li> 우편 서비스</li>
                        <li> 급수 서비스, 전기 및 가스 공급</li>
                        <li> 안보 및 국방</li>
                        <li> 측지 및 지도 제작</li>
                        <li>기상 관측 서비스</li> 
                    </ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div>
		<ul>
			<!------li class="left_box"><img src="./image/measure_divices_kazahstan.jpg" alt="이미지"></li------>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">계측기기 K 인증(PAC K) 등록 대상 품목</span></p>
					</div>
					<div class="txt02">
					<ul>			
                        <li> 수량, 질량 등을 계량하는 기기</li>
                        <li> 산업용 측정기기, 기구 및 장비류</li>
                        <li> 육상 및 해양 관련 조사/측량 관련 기기</li>
                        <li> 각종 노동현장 안전 관련 기기</li>	<br><br><br><br><br><br>
					</ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div>
		<ul>
			<!------li class="left_box"><img src="./image/measure_divices_kazahstan.jpg" alt="이미지"></li------>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">계측기기 K 인증(PAC K) 유효기간</span></p>
						<p><span class="txt">계측장비 인증서의 최대 유효 기간은 5 년입니다. </span></p>   <br><br><br><br><br><br>
					</div>
				</div>
				
			</li>
		</ul>
		</div>
		
		
		
		<div>
		<ul>
			<!------li class="left_box"><img src="./image/measure_divices_kazahstan.jpg" alt="이미지"></li------>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">계측기기 K 인증(PAC K) 제출 서류</span></p>
					</div>
					<div class="txt02">
					<ul>			
                        <li> 테스트용 샘플 장비</li>
                        <li> 제품설명서</li>
                        <li> 내부 테스트 보고서</li>
                        <li> 기존 인증서</li>       <br><br><br><br><br><br>  
					</ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		

	      <h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS-TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li><p><em><strong>01</strong></em><span>EAC 및 GOST 인증 서비스</span></p></li>
		  		<li><p><em><strong>04</strong></em><span> Eurasia Representative 서비스</span></p></li>
		  		<li><p><em><strong>02</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span></p></li>
		  		<li><p><em><strong>05</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span></p></li>
		  		<li><p><em><strong>03</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발생 서비스</span></p></li>
		  	</ul>
		  </div>
		  
	</div>
	
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>
<!-----?php
	include "../include/tail.php"; 
?---->