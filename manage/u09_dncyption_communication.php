<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "러시아"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "통신인증"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //공통 상단을 연결합니다.
?>

    <!-----페이지 상단 글로벌 네비게이션-------->
	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><a href="ru01_trcueac.php"><?php echo $tmenu_?></a></li><!----인증서비스(러시아) 페이지 연결-------->
			<?php if($tmenu2_){?><li><a href="ru01_trcueac.php"><?php echo $tmenu2_?></a></li><?php }?><!----러시아 페이지 연결-------->
			<li><a href="u09_dncyption_communication.php"><?php echo $g5['title']?></a></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			고객님의 방문을 환영합니다.
		</p>
	</div>


<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다.     
    */
	
?>
<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>


<?php
	/*
		CSS파일 로드(25~26라인)
		구매하신 러스테스트 퍼스픽에 사용하신다면 적용하지 않아도 됩니다.
		러스테스트 퍼스픽가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



<?php
	/*
		주의사항 
		그누보드 관리자모드 내용관리등 에디터로 내용을 등록하실 경우, 보안문제로 자바스크립트와 css가 필터될 수 있습니다.
		이럴 경우 공통 css 파일에 아래 style을 별도 추가하고, 내용관리 에디터의 HTML 모드로 태그를 넣으시면 됩니다.(에디터마다 HTML 모드 버튼이 있으니 HTML 모드로 넣어주세요.)
		javascript 를 사용한다면 공통하단 파일 </body> 위에 코드를 복사하여 추가 합니다.	
	
	*/
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
    .business_type5 h1:after{display:block; position:relative; bottom:0; left:35%; margin-left:-10px; content:""; width:30%; height:1px; background-color:#195883; margin-top:1px;}
    
    
	.business_type5 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
	.business_type5 h2:after{display:block; position:relative; bottom:0; left:1%; margin-left:-10px; content:""; width:0%; height:1px; background-color:#195883; margin-top:1px;}
	.business_type5 h3{font-size:1.1em; color:#666; text-align:center; margin-bottom:50px;}
	.business_type5 h3 br.sn{display:none;}
    
    /*추가 2020.03.12 by mark*/
    .business_type5 h4{width:100%; margin:0 auto; text-align:left; font-size:1.2em; color:#777; margin-top:20px; margin-right:20px;margin-left:20px; }
    .business_type5 p {width:100%; margin:0 auto; text-align:left; font-size:1.2em; color:#777; margin-top:20px; margin-right:20px;margin-left:20px; }
    
    
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
		<h1 class="sub_tit"><span class="fc_pointer">러시아 통신인증 (FAC/FCA 및 FSS/FSB)</span>&nbsp;러시아 (RUSSIA)</h1>
		<h2 class="sub_txt">FAC/FCA (Federal Agency of Communication / Federal Communication Agency)<br>
FSS/FSB (Federal Security Service / Federal Security Bureau), RFC(Radio Frequency Conclusion) 
</h2>
	</div>
	
         <!-------
	         <li>
				<dl>
					<dt> 
						<img src="./image/EAC29_Ex_FSS Cert.jpg" style="display:block;width:50%;position:relative;margin-right:auto;margin-left:auto;">
				        <p style="text-align:center;color:blue;">암호통신인증 – 암호화 기기 인증 (FSS Notification) 샘플</p><br>
					</dt>
                        <br>
                </dl>
            </li>
	
	      ------>
	<br>
	
	
	<div class="business_type5" class="area">
		<h1>러시아 통신 인증 (FAC/FCA, FSS/FSB 및 RFC) 개요 </h1>
		<br><br>
		<!-----img src="./image/03_FAC DoC.jpg" style="width:30%;display:block;margin-left:auto;margin-right:auto;"-----><br><br>
		
		
		<h4 style="text-align:left;color:#333;font-size:1.2em;"> FAC/FCA (Federal Agency of Communication / Federal Communication Agency) 인증</h4>		
		<p style="text-align:left;color:#999;">			
			FAC 인증서와 선언서는 공용 네트워크에서 사용되거나 네트워크에 연결되고 있는 장비에 대한 러시아 텔레콤 및 무선 규칙의 제품 준수를 확인하는 문서입니다. 연방 통신법 №126 «On Telecommunications»을 따릅니다.
		</p><br>
		
		
		<h4 style="text-align:left;color:#333;font-size:1.2em;"> FSS/FSB (Federal Security Service / Federal Security Bureau) 인증</h4>		
		<p style="text-align:left;color:#999;">			
			통신에 암호화 요소가 포함된 장비를 세관 연합(EAEC) 영역으로 수입하거나 수출하기 위한 필수 조건입니다. 
		</p><br>
		
		
		<h4 style="text-align:left;color:#333;font-size:1.2em;"> RFC(Radio Frequency Conclusion)인증 </h4>		
		<p style="text-align:left;color:#999;">			
			RFC인증은 인증은 무선전자 장비(RED), 고주파 장비(HFD), 및 그를 구성하는 요소인 경우 받아야 하는 주파수 인증입니다.
		</p><br>
		

        <h4 style="text-align:left;color:#333;font-size:1.2em;"> 하나의 제품에 대하여 인증 대상 규격은 1개일 수도 있지만, 제품에 따라 2개 이상의 통신 규격에 대한 인증이 필요할 수도 있습니다. 네트워크에 연결되는 장치나 통신 장치 대부분은 EAC, FSB/FSS 및 FAC/FCA인증의 대상입니다. </h4>		
		<p style="text-align:left;color:#999;">			
			- FAC 인증은 대부분의 텔레콤, 무선 장치 및 Ethernet으로 연결하는 장치에(Ethernet to Wi-Fi) 적용됩니다. 
		</p>
      <p style="text-align:left;color:#999;">			
			- 통신장비에 무선기능이 암호화되어 있을 경우 추가로 FSB 인증을 받아야 합니다. 
		</p>
        <br><br><br>		
		
		<ul>
			<li>
				<dl>
					<dt> <br>
						<img src="./image/EAC30_Ex_PAC.jpg"><br><br>
						<!-----img src="./image/02_FAC CoC.jpg"---> <br> <br>
					</dt>
					<dd>
						<strong>통신인증 대상 품목</strong>	
                         					
                        <li><strong>FAC/FCA 인증</strong></li>
                        <p>이동 전화선과 고정 전화선의 자동 전화국 (ATS)</p>
                        <p>스위치, 라우터, 방화벽, 장거리 전송 시스템</p>
                        <p>공공 통신에서 통신 서비스 계측에 사용되는 장비 (자동 결제 시스템 – APS)</p>
                        <p>기타 무선 전자 장비 </p><br>
                        
                        <li><strong>FSS/FSB인증</strong></li>
                        <p>암호화 알고리즘 포함하는 장비</p>
                        <p>개인 스마트 카드</p>
                        <p>라디오 및 TV방송 수신 장비</p>
                        <p>이동형 및 휴대용 무선 전자 수단</p>
                        <p>기타 암호화 되어 있는 장비</p><br>
                        
                        
                        <li><strong>RFC인증</strong></li>
                        <p>무선전자 장비(RED)</p>
                        <p>고주파 장비(HFD)</p>
                        <p>RED 및 HFD 구성하는 요소</p>
                        
					</dd>
				</dl>
			</li>
			
			
			
			<li>
				<dl>
					<!-----dt> <br>
						<img src="./image/04_FSS.jpg"> <br>
					</dt---->
					<dd>
						<strong>통신인증 인증서 유형</strong>
						<div class="image_paper1" style="width:25%;float:left;">
						   <img src="./image/001_FAC DoC.jpg"> <br>
						   <p>FAC CoC</p>
						</div>
						
						
						<div class="image_paper2" style="width:25%;float:left;">
						    <img src="./image/002_FAC DoC.jpg"> <br>
						    <p>FAC DoC</p>
						</div>
						
						
						<div class="image_paper3" style="display:block;width:25%;float:left;word-break:keep all;">
						    <img src="./image/003_FSB_Notification.jpg">
						    <p>FSB Notification.</p>
						</div>
						
						<div class="image_paper4" style="width:25%;float:left;">
						    <img src="./image/004_RFC.png">
						    <p>RFC</p><br>
						</div>
						
						<li>FAC CoC 및 DoC의 차이점은 DoC를 발행하기 위하여 제조사가(해외업체경우 신청자/대리인)이 시험소에서 시험을 진행하고 ROSSVYAZ 기관에 DoC를 신청합니다. CoC발행 경우, 샘플시험, 적합성 평가, 보험 등은 공인 인증기관이 진행하고 있습니다.</li>
					</dd>
				</dl>			
			</li>
			
			 <br>
			
			<li>
				<dl>
					<dt> <br>
						<img src="./image/EAC17_Ex_sgr.jpg"> <br>
					<dd>
						<strong>인증서 유효기간 </strong>
						<p>FAC CoC – 최대 3년까지 유효한 인증서입니다. </p>
						<p>FAC DoC – 최대 10년까지 유효한 인증서입니다. </p>
						<p>FSS/FSB Notification – 유효기간은 정해져 있지 않으며 신청자가 원하는 기간을 직접 선택할 수 있습니다</p>
						<p>RFC 인증 – 1년 유효한 인증서입니다. </p>
					</dd>
				</dl>			
			</li>
			
			
			
			<li>
				<dl>
					<dt><br>
						<img src="./image/russia_FAC_etcs_20200312.png">
					</dt><br>
					<dd>
						<strong>통신인증 절차</strong>						
                        <span>1. 인증기관에 신청서 및 제품 관련 서류 제출</span><br><br>
                        <span>2. 서류 검토</span><br><br>
                        <span>3. 적용되는 인증서 유형 확인</span><br><br>
                        <span>4. 견적서 발행 및 계약</span><br><br>
                        <span>5. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</span><br><br>
                        <span>6. 제품에 따라 RF 수입허가 요구될 경우 진행</span><br><br>
                        <span>7. 인증서 초안 발행 및 고객 확인</span><br><br>
                        <span>8. 인증서 발행</span><br><br>
					</dd>
				</dl>
			</li>
			
			
			
			<li>
				<dl>
					<dt><br>
						<img src="./image/fac_fsb01.jpg">
					</dt>
					<dd>
						<strong>FAC 및 FSB 통신인증</strong>
						<p>러시아 지역에 등록되어 있는 법인이 신청자/대리인 역할을 할 수 있습니다.</p>
						<p>인증진행 및 발행은 공인 인증기관에서만 가능합니다</p>
						<p>인증스킴에 따라 제품은 단일(1회) 수출용 또는 연속생산용 인증서로 발행 가능합니다.</p>
						<p>FAC 인증은 ROSSVYAZ 러시아 정부 기관에 등록 대상입니다. </p>
						<p>RFC 인증은 «정부 무선 주파수 센터»에서 발행됩니다.  </p> 
					</dd>
				</dl>	<br>		
			</li>
			<br><br>
			
			
			
			
			<!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.2em;">RUS TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
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