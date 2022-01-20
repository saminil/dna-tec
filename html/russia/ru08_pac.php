<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "러시아"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "PAC(계측기기)"; //커스텀페이지의 타이틀을 입력합니다.
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
	.business_type5 ul li dl dd{display:block;width:90%; padding:50px 0; padding-top:30px; padding-left:5%;text-align:justify;padding-right;5%;}
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
		<h1 class="sub_tit"><span class="fc_pointer">계측기기 인증(PAC)</span>&nbsp; 러시아 (Russia) </h1>
		<h2 class="sub_txt">THE PATTERN APPROVAL CERTIFICATE OF MEASURING INSTRUMENTS </h2>
	</div>
	
	
	        <li>
				<dl>
					<dt> 
						<img src="./image/EAC24_Ex_PAC.jpg" style="display:block;width:30%;position:relative;margin-right:auto;margin-left:auto;">
				        <p style="text-align:center;">PAC(The Pattern Approval Certificate of Measuring Instruments) 인증서</p><br>
						
					</dt>
                        <br>
                </dl>
            </li>
	
	
	<div class="business_type5" class="area">
		<h1>계측기기 인증(PAC) 개요</h1>
		<h2>계측기기인증의 경우 측정 및 시험,<br> 분석장비의 모니터링 상태를 확인하는 프로세스</h2>		
		<h3 style="text-align:justify;">			
			PAC 인증은 The Pattern Approval Certificate of Measuring Instruments의 약어로 측정 및 시험, 분석장비의 모니터링 상태를 확인하는 프로세스입니다.<br class="sn"><br>
            계측기기인증서는 이러한 장비가 러시아에서 요구하는 기술 요구사항의 최소한의 요구사항을 충족하는 것을 의미합니다. 측정 테스트를 성공적으로 통과한 후 에는 러시아 영토내에서 승인된 측정기로써 정부에 등록(Rossrandart)되며 승인일자로부터 러시아에서 사용될 수 있습니다.<br class="sn"><br>
            필수 계측기기인증은 러시아 연방의 연방법률 “the Russian Federation № 102 "On Assurance of Measurement Uniformity(측정의 균일성의 보장)" of 26.06.2008”에 의해서 시행되고 있으며 오직 인증 및 승인된 계측장비만 사용될 수 있습니다.<br class="sn"><br>
			
			
			
		</h3>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/EAC26_Ex_PAC.jpg"  alt="계측기기 인증(PAC) 적용 범위" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>계측기기 인증(PAC) 적용 범위</strong>
                        <!------li>1. 필수적 인증</li>	
                        <li>2. 자발적 인증 - 자발적 도량형 인증서는 필수 계측기의 모니터링 및 인증 대상이 아닌 계측기의 품질 증명으로 사용됩니다. 그러나 자발적인 측정기 인증서는 특정 유형의 측정기에 대한 법률에서 요구하는 경우 의무 등록을 대체할 수 없습니다. 자발적인 도량형 인증 방법은 " On Assurance of Measurement Uniformity"러시아 연방 연방법에 의해 정의됩니다. 측정 장비의 자발적 인증은 Rosstandart에서 인증 한 인증 기관에 의해서만 수행될 수 있습니다. 자발적인 도량형 인증은 기술 규정의 요구 사항에 대한 기기의 적합성을 확인하고 소비자의 신뢰를 확보하기 위해 제조업체 또는 배포자의 주도에 따라 수행되어야 합니다.</li----->                         
                        <p> 보건 의료 (Healthcare)</p>
                        <p> 수의학 (Veterinary medicine)</p>
                        <p> 작업 안전 (Work safety)</p>
                        <p> 환경 보호 (Environmental protection)</p>
                        <p> 무기 산업 (Arms industry)</p>
                        <p> 운영 안전 (Operational safety)</p>
                        <p> 무역 (Trade)</p>
                        <p> 지도 제작 및 측지학 (Cartography and geodesy) 등</p>
					</dd>
				</dl>
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC24_Ex_PAC1.jpg"  alt="PAC(계측기기) 등록 대상 품목" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>PAC(계측기기) 등록 대상 품목</strong>                       
                        <p> 압력 게이지 (Pressure gauge)</p>
                        <p> 압력센서 및 스위치 (Pressure sensor and switch)</p>
                        <p> 온도 게이지 (Temperature gauge)</p>
                        <p> 온도 센서(열전대 & RTD) (Temperature sensor(Thermocouple & RTD))</p>
                        <p> 유량계기 (Flow gauge)</p>
                        <p> 이 외의 계측장비 (Other measuring devices)</p>
					</dd>
				</dl>
			</li>
				
			<li>
				<dl>
					<dt>
						<img src="./image/EAC27_Ex_PAC.jpg"  alt="계측기기(PAC) 인증서 유형" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>계측기기(PAC) 인증서 유형</strong>
                        <!------li>1. 필수적 인증</li>	
                        <li>2. 자발적 인증 - 자발적 도량형 인증서는 필수 계측기의 모니터링 및 인증 대상이 아닌 계측기의 품질 증명으로 사용됩니다. 그러나 자발적인 측정기 인증서는 특정 유형의 측정기에 대한 법률에서 요구하는 경우 의무 등록을 대체할 수 없습니다. 자발적인 도량형 인증 방법은 " On Assurance of Measurement Uniformity"러시아 연방 연방법에 의해 정의됩니다. 측정 장비의 자발적 인증은 Rosstandart에서 인증 한 인증 기관에 의해서만 수행될 수 있습니다. 자발적인 도량형 인증은 기술 규정의 요구 사항에 대한 기기의 적합성을 확인하고 소비자의 신뢰를 확보하기 위해 제조업체 또는 배포자의 주도에 따라 수행되어야 합니다.</li----->                         
                        <p>필수적 인증</p>
                        <p style="text-align:justify;">자발적 인증: 자발적 도량형 인증서는 필수 계측기의 모니터링 및 인증 대상이 아닌 계측기의 품질 증명으로 사용됩니다. 그러나 자발적인 측정기 인증서는 특정 유형의 측정기에 대한 법률에서 요구하는 경우 의무 등록을 대체할 수 없습니다. 자발적인 도량형 인증 방법은 " On Assurance of Measurement Uniformity"러시아 연방 연방법에 의해 정의됩니다. 측정 장비의 자발적 인증은 Rosstandart에서 인증 한 인증 기관에 의해서만 수행될 수 있습니다. 자발적인 도량형 인증은 기술 규정의 요구 사항에 대한 기기의 적합성을 확인하고 소비자의 신뢰를 확보하기 위해 제조업체 또는 배포자의 주도에 따라 수행되어야 합니다.</p>
					</dd>
				</dl>
			</li>
	
			<li>
				<dl>
					<dt>
						<img src="./image/EAC17_Ex_sgr.jpg"  alt="계측기기(PAC) 인증서 유효기간" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>계측기기(PAC) 인증서 유효기간</strong>
						<!-----계측장비 인증서의 최대 유효 기간은 5 년입니다. <br>  ------>
                        <p>계측장비 인증서의 최대 유효 기간은 5 년입니다. </p>

					</dd>
				</dl>			
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC18_Ex_sgr.jpg"  alt="PAC (계측기기) 인증 제출 서류" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>PAC (계측기기) 인증 제출 서류</strong>
						<!-----계측장비 인증서의 최대 유효 기간은 5 년입니다. <br>  ------>
                        <p> 테스트용 샘플 장비</p>
                        <p> 제품설명서</p>
                        <p> 내부 테스트 보고서</p>
                        <p> 기존 인증서</p>	
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC28_Ex_PAC.jpg"  alt="마킹 요구사항" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>마킹 요구사항</strong>
						측정 기기가 필요한 모든 측정 테스트를 통과하고 Rosstandart 결정에 따라 승인된 측정 기기의 상태 레지스터에 입력된 후에는 측정 기기에 "СТ"교정 마크 및 승인된 측정 기기 심볼이 식별 되어야합니다.<br>
                        <p>"СТ"마킹의 표시는 계측기의 인증서가 유효한 기간 동안에 허용됩니다.</p>
                        <p>인증서가 만료된 후에는 마킹이 더 이상 허용되지 않습니다.</p>
                        <p>"СТ"마킹은 각 측정장비에 위치해야 하며 반드시 알기 쉽게 나타나야 합니다.</p>
                        <p>기술문서에는 인증 및 등록에 대한 정보가 포함 되어야합니다. 계측장비 마킹을 잘못 사용하면 법적 결과를 초래할 수 있습니다.</p>
                        <p>모든 문서는 정식 번역가에 의해 러시아어로 번역되어야 합니다. 모든 문서 사본에는 법정 대리인의 도장과 서명이 있어야합니다.</p>
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