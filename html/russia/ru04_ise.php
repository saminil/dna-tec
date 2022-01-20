<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "러시아"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "ISE"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>



<style>
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

		
	.business_type5 h1{font-size:3em; font-weight:700; color:#111; text-align:center;  margin:0 auto; margin-bottom:0px; }
	.business_type5 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
	.business_type5 h2:after{display:block; position:relative; bottom:0; left:50%; margin-left:-2px; content:""; width:2px; height:30px; background-color:#195883; margin-top:20px;}
	.business_type5 h3{font-size:1.1em; color:#666; text-align:center; margin-bottom:50px;}
	.business_type5 h3 br.sn{display:none;}
	.business_type5 ul{width:100%;}
	.business_type5 ul > li{width:100%; border-bottom:1px solid #d1d1d1; overflow:hidden;}
	.business_type5 ul > li:first-child{border-top:1px solid #d1d1d1;}
	.business_type5 ul > li:nth-child(odd){background-color:#f4f4f4;}
	.business_type5 ul li dl{display:table;}
	.business_type5 ul li dl dt, .business_type5 ul li dl dd{display:table-cell; vertical-align:middle;}
	.business_type5 ul li dl dt{width:40%; padding-left:5%;}
	.business_type5 ul li dl dt img{max-width:100%; margin:0 auto;}	
	.business_type5 ul li dl dd{display:block;width:90%; padding:50px 0; padding-top:30px; padding-left:5%;}
	.business_type5 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type5 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type5 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}

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
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
    
    
</style>


<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">ISE 산업안전평가</span>&nbsp; 러시아 (RUSSIA) </h1>
		<h2 class="sub_txt">ISE는 Industrial Safety Expertise의 약어로, 건물 또는 시설물 완공 후 산업전문평가원이 진행하는 평가절차를 의미합니다.</h2>
	</div>
	
	<div class="business_type5" class="area">
		<h1>ISE 개요</h1>
		<h2>RUS-TEST PACIFIC 러스테스트 퍼시픽</h2>		
		<h3 style="text-align:left;">
			평가 결과는 하나의 보고서로 작성되며, 평가는 No.116-ФЗ, 21.07.1997 “Industrial Safety in Hazardous Industrial Facilities”에 따라 Rostechnadzor에서 규정 한 안전평가항목을 확인한 보고서입니다. <br>
			기존 RTN 사용허가(RTN permit to use)를 대체하여 도입된 ISE는 위험산업군이나 품목으로 분류된 기계, 설비, 장비, 시설에 대해 인간에 유해하거나 생태학적 위험을 초래할 수 있는 요소를 평가하고, 이는 Law of Rostechnadzor No. 538, 14.11.2013 가이드라인에 따라 작성됩니다.<br class="sn">
			ISE는 위험산업군으로 분류된 기계, 설비, 시설 등의 디자인 도면, 공준비단계부터 건설, 증축, 재건축, 프로젝트 비활성화, 폐기 등의 단계 때에도 필요 한 절차입니다.<br>
            주요 대상 산업군으로는 유해물질 운수송시설, 석유, 화학, 정유공장, 발전시설 등이 있습니다.<br class="sn">

		</h3>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/EAC09_Ex_CoC.jpg" alt="ISE 절차" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>ISE 절차 </strong>
						2014년 부로, 기존 Rostechnadzor의 심사를 거쳐 발급되던 사용허가증은 Order of Rostekhnadzor No.538, 14.11.2013 (registered Ministry of Justice of Russia 26.12.2013, reg. no. 30855) 에 따라 산업전문평가요원으로 등록 된 전문가가 진행 한 Industrial Safety Expertise 보고서로 대체 되었습니다.

						<p>산업안전을 평가하는 주체가 정부기관에서 등록된 전문가로 바뀌었을 뿐 연방법 No.116-ФЗ, 21.07.1997에서 명시한 안전법규 검토사항 및 준비자료, 기본절차 등은 기본적으로 동일합니다.</p>
						<p>PJT의 범위 및 과정 검토 (Examination of scope and course of the PJT)</p>
						<p>현장 검사 준비 (Preparation of examining spots)</p>
						<p>스케쥴, 재료 및 준비 사전 문서 작업에 대한 전문가 평가 (Schedule the timeline)</p>
						<p>다음 사항의 검토 및 분석 (Review and analysis of) </p>
						<li>&nbsp; &nbsp; *PJT 범위 및 작업 흐름 (PJT scope and work flow)
                        <li>&nbsp; &nbsp; *시공, 운영, 유지보수 (Construction, operation, maintenance)</li>
                        <li>&nbsp; &nbsp; *위험 지역에 대한 안전 설명 (Safety statement on hazardous areas)</li>
                        <li>&nbsp; &nbsp; *기술 문서 및 인증서 (Technical passports and certificates)</li>
                        <li>&nbsp; &nbsp; *테스트 프로토콜 및 보고서 (Test protocols and reports)</li>
                        <li>&nbsp; &nbsp; *라벨링 및 식별 시스템 (Labeling and identification systems)</li>
                        <li>&nbsp; &nbsp; *기술 규정, 지침 및 PJT 운영 정책 (Technical standards, guidelines, PJT management policies)</li>
                        <li>&nbsp; &nbsp; *설계 보고서 및 검사 결과의 역량 (Competence of design reports and inspection results)</li>
                        <li>&nbsp; &nbsp; *직원 및 경영진의 역량 (Competence of employees and managements)</li>
                        <li>&nbsp; &nbsp; *장치 및 기기의 성능 (Competence of devices and instruments)</li>
						<p>기타 (Others)</p>
					</dd>
				</dl>
			</li>
			
			
			<!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li>&nbsp;<p style="font-size:1.3em;">&nbsp; &nbsp;<em><strong>01.</strong></em><span> EAC 및 GOST 인증 서비스</span><br><br></p></li>
		  		<li>&nbsp;<p style="font-size:1.3em;">&nbsp; &nbsp;<em><strong>02.</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span><br><br></p></li>
		  		<li>&nbsp;<p style="font-size:1.3em;">&nbsp; &nbsp;<em><strong>03.</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발행 서비스</span><br><br></p></li>
		  		<li>&nbsp;<p style="font-size:1.3em;">&nbsp; &nbsp;<em><strong>04.</strong></em><span> Eurasia Representative 서비스</span><br><br></p></li>
		  		<li>&nbsp;<p style="font-size:1.3em;">&nbsp; &nbsp;<em><strong>05.</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span><br><br></p></li>
		  	</ul>
		  </div> <!-------고객 혜택 종료 -------------->	
			
			
		</ul>
	</div>	
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>