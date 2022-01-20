<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "러시아"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "화재안전"; //커스텀페이지의 타이틀을 입력합니다.
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
<!----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"---->


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
	.business_type5 ul li dl dd{width:60%; padding:50px 0; padding-top:30px; padding-left:5%;}
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
		<h1 class="sub_tit"><span class="fc_pointer">화재안전 인증</span> &nbsp; 러시아 (RUSSIA)</h1>
		<h2 class="sub_txt">제품의 “화재 안전성”에 관한 증명을 받는 인증</h2>
	</div>
	
	<div class="business_type5" class="area">
		<h1>화재안전 개요</h1>
		<h3 style="text-align:left;"> 
           화재안전인증은 러시아 연방법 Federal Law No.123 of 22.06.2008에서 승인한 “Technical Regulation on Fire Safety, entered into force on 01.05.2009”에 따라 제품의 적합성 인증 (GOST R 또는 TRCU)을 받기 전 제품의 “화재 안전성”에 관한 증명을 받는 인증입니다. <br class="sn"><br>
            특정 제품의 경우 러시아 세관 영토에 수출하기 위해 세관 당국이 요구하는 화재 안전 증명서가 있습니다. 화재안전증명서는 화재규정 준수 여부를 확인하는 공식증명입니다. <br class="sn"><br>
            화재안전증명서 요건은 러시아 국내 제품과 수입되는 제품 모두에 적용됩니다. 인증은 "기술 규정"의 규정에 따라 실시합니다. 화재 안전 인증은 러시아에 대한 특정 유형의 물품의 수입과 러시아 시장에 대한 보급을 위해 필요합니다.<br class="sn"><br>
            러시아에서는 화재안전인증을 의무적 또는 자발적 방법으로,<br class="sn"> 선언 형태로 실시할 수 있습니다.
		</h3>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/EAC10_Ex_trcueac.jpg" alt="화재안전 대상 품목" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>화재안전 대상 품목</strong>
						이 규정은 다음과 같은 제품군을 포함합니다.<br>
						<p>소방장비: 소화기, 소방호스 등</p>
						<p>전원 케이블</p>
						<p>가스난방시스템</p>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC11_Ex_trcueac.jpg" alt="화재안전 인증서 유효기간" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>화재안전 인증서 유효기간</strong>
						<p>화재안전 증명서는 5년간 유효합니다.</p>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC12_Ex_trcueac.png" alt="화재안전 인증 절차" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>화재안전 인증 절차</strong>
                        <span>1. 인증기관에 신청서 및 제품 관련 서류 제출</span><br><br>
                        <span>2. 서류 검토</span><br><br>
                        <span>3. 적용되는 인증서 유형 확인</span><br><br>
                        <span>4. 샘플 시험 및 공장심사 여부 확인</span><br><br>
                        <span>5. 견적서 발행 및 계약</span><br><br>
                        <span>6. 샘플 발송 후 시험 및 시험 성적서 발행</span><br><br>
                        <span>7. 공장심사 필요 시, 심사 진행</span><br><br>
                        <span>8. 인증서 초안 발행 및 고객 확인</span><br><br>
                        <span>9. 인증서 발행</span><br><br>
					</dd>
				</dl>	
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC07_Ex_CoC.jpg" alt="화재안전 인증 제출 서류" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
                        <strong>화재안전 인증 제출 서류</strong>
                        <p>신청서 - (자료실에서 신청서 양식을 다운 받으실 수 있습니다.)</p>
                        <p>HS Code </p>
                        <p>제품 설명서 (러시아어 또는 수출국 언어)</p>
                        <p>기술문서: 작동 지침, 기술 도면 </p>
                        <p>기 보유 인증서</p>
                        <p>기타 필요 문서</p>
					</dd>
				</dl>				
			</li>
			
			<!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
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