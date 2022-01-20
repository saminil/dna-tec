<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "카자흐스탄"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "ISE K"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

   
<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>


<?php
	/*
		CSS파일 로드(25~26라인)
		구매하신 RUS TEST PACIFIC에 사용하신다면 적용하지 않아도 됩니다.
		RUS TEST PACIFIC가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>
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
		<h1 class="sub_tit"><span class="fc_pointer">ISE K</span>&nbsp;카자흐스탄(Kazahstan)</h1>
		<h2 class="sub_txt">ISE K(Industrial Safety Expertise Kazakhstan)</h2>
	</div>

	<div class="business_type2">
	
		<div>
		<ul>
			<!-----li class="left_box"><img src="./image/ISE_K.jpg" alt="이미지"></li----->
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">ISE K 개요 </span></p>
						<p><span class="txt">ISE K는 Industrial Safety Expertise Kazakhstan의 약어로, ISE검토 기관의 산업 안전 전문가가 건물 또는 시설물 완공 후 진행하는 평가절차입니다.<br>
                         카자흐스탄에서 Industrial Safety Expertise(ISE)는 카자흐스탄 법 No. 188-V, 11.04.2014 "On Civil Protection"에 따라 Комитет индустриального развития и промышленной безопасности Министерства по инвестициям и развитию Республики Казахстан에서 안전평가항목을 확인한 후 보고서를 발행합니다.  <br>
                         이전 카자흐스탄 내에서의 GGTN은 러시아의 RTN과 같은 역할을 했습니다.  그러나  카자흐스탄 법 No. 188-V, 11.04.2014 "On Civil Protection"에 따라 GGTN은 취소되었으며 ISE K가 그 역할을 대신합니다.</span></p>
                <br><br><br><br>
					</div>
				</div>

			</li>
		</ul>
		</div>
		
		
		<div class="business_info">
		<ul>
			<li><img src="./image/ise_k01.jpg" alt="TRCU EAC Ex 대상 품목" style="width:40%;display:block;margin:auto;"></li><br>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">ISE K 절차</span></p>
						<p><span class="txt">카자흐스탄 법 Procedure for harmonization of Regulatory Documents on Standardization with the Bodies of the State Fire Service, ПРРК64.1.01-97에 따른 화재안전 시험성적서가 필요한 대표적인 인증 대상은 다음과 같습니다. </span></p>
					</div>
					
					<div class="txt02">
					<ul>						                
                        ISE는 산업안전전문가로 등록된 전문가가 아래의 항목에 대한 평가를 진행합니다.
                        &#10020;  PJT의 범위 및 과정 검토 (Examination of scope and course of the PJT)<br>
                        &#10020;  현장 검사 준비 (Preparation of examining spots)<br>
                        &#10020;  스케쥴, 재료 및 준비 사전 문서 작업에 대한 전문가 평가 (Schedule the timeline)<br>
                        &#10020;  다음 사항의검토 및 분석 (Review and analysis of) <br>
                           <ul>
                             &nbsp; &nbsp;  &#8278; PJT 범위 및 작업 흐름 (PJT scope and work flow)<br>
                             &nbsp; &nbsp;  &#8278; 시공, 운영, 유지보수 (Construction, operation, maintenance)<br>
                             &nbsp; &nbsp;  &#8278; 위험 지역에 대한 안전 설명 (Safety statement on hazardous areas)<br>
                             &nbsp; &nbsp;  &#8278; 기술 문서 및 인증서 (Technical passports and certificates)<br>
                             &nbsp; &nbsp;  &#8278; 테스트 프로토콜 및 보고서 (Test protocols and reports)<br>
                             &nbsp; &nbsp;  &#8278; 라벨링 및 식별 시스템 (Labeling and identification systems)<br>
                             &nbsp; &nbsp;  &#8278; 기술 규정, 지침 및 PJT 운영 정책 (Technical standards, guidelines, PJT management policies)<br>
                             &nbsp; &nbsp;  &#8278; 설계 보고서 및 검사 결과의 역량 (Competence of design reports and inspection results)<br>
                             &nbsp; &nbsp;  &#8278; 직원 및 경영진의 역량 (Competence of employees and managements)<br>
                             &nbsp; &nbsp;  &#8278; 장치 및 기기의 성능 (Competence of devices and instruments)<br>      
                           </ul>  
                        &#10020; &nbsp; 기타 (Others)<br>
					</ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		
		<h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li><p><em><strong>01</strong></em><span> EAC 및 GOST 인증 서비스</span></p></li>
		  		<li><p><em><strong>04</strong></em><span> Eurasia Representative 서비스</span></p></li>
		  		<li><p><em><strong>02</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span></p></li>
		  		<li><p><em><strong>05</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span></p></li>
		  		<li><p><em><strong>03</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발행 서비스</span></p></li>
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