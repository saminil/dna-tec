<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "러시아"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "위생등록"; //커스텀페이지의 타이틀을 입력합니다.
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
		<h1 class="sub_tit"><span class="fc_pointer">위생등록</span>&nbsp; 러시아(RUSSIA)</h1>
	</div>
	
	<div class="business_type5" class="area">
		<h1>국가위생등록 (SGR) 개요 </h1>
		<h2> State Registration Certificate</h2>		
		<h3 style="text-align:left;">
			기존 국가별로 발행되던 위생등록증이 관세동맹국에 의해 2010년 채택된 Decision of CU commission No.299에 의거하여 하나로 통합되었습니다.<br class="sn"> <br>
            하나의 인증서로 유라시아 관세동맹 5개국 (러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)에서 모두 사용 가능합니다.<br class="sn"> <br>
            규정에 해당하는 제품은 State Registration Certificate를 받아야 EAC 인증이 가능하며 관세동맹 국가로 수출이 가능합니다. <br class="sn"> <br>
            국가위생등록은 식품과 화장품의 경우 발행 요구대상이 될 수 있습니다.<br class="sn"> <br><br><br>

			<li>
				<dl>
					<dt> 
						<img src="./image/EAC13_Ex_trcueacSGR.png" style="display:block;width:35%;position:relative;margin-right:auto;margin-left:auto;">
				        <p style="text-align:center;">State Registration Certificate 샘플</p><br>
						
					</dt>
                        <br>
                </dl>
            </li>
		</h3>
		
		<ul>
		
			<li>
				<dl>
					<dt>
						<img src="./image/EAC15_Ex_sgr.jpg" alt="국가위생등록 (SGR) 적용 품목 (식품)" style="width:95%;margin-left:auto;margin-right:auto;">
						
					</dt>
					<dd>
						<strong>국가위생등록 (SGR) 적용 품목 (식품)</strong>
                        <p>미네랄 워터, 생수, 청량 음료, 주류 – 저 알코올 및 토닉 음료 포함</p>
                        <p>이유식, 임산부 및 모유 수유 여성을 위한 음식, 식이 제품, 운동 선수를 위한 음식, 생물학적 활성 
                           식품 첨가물, 유기농 제품, 보충제를 포함한 특수 식품</p>
                        <p>식품 첨가제 (식물 추출물, 아로마 등)</p>
                        <p>유전자 변형 (형질 전환) 유기체를 사용하여 생산된 식품</p>
                        <p>식수 공급용 물 사용을 위한 재료, 기기, 장비 및 기타 기술 제품</p>
                        <p>식품 접촉용 제품 (수저류, 식기류, 제조 장비 제외)</p>
						
						
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC14_Ex_sgr.jpg" alt="국가위생등록 (SGR) 적용 품목 (화장품)" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>국가위생등록 (SGR) 적용 품목 (화장품)</strong>
						성분, 기능, 목적에 따라 특수 화장품으로 분류되는 화장품은 국가위생등록증을 필수로 받아야 합니다.
                        <p>태닝을 위한 제품</p>
                        <p>미백 제품</p>
                        <p>타투용 제품</p>
                        <p>인티메이트 케어</p>
                        <p>개인이 유해 인자의 영향으로 부터 피부를 보호하기 위한 용도의 향수나 화장품</p>
                        <p>유아용 화장품 (14세 이하의 어린이를 위한 제품)</p>
                        <p>염색, 탈색 제품</p>
                        <p>파마, 헤어 스트레이트를 위한 제품</p>
                        <p>나노물질을 사용한 향수 및 화장품 (나노물질: 불용성 또는 체내 안정성 물질이며, 내부 또는
                           외부의 입자 크기가 1~100nm의 범위 내로 특별히 제조된 것)
                        <p>제모 제품</p>
                        <p>필링제 (화학적 필링. 각질 제거제를 사용하여 표피의 표면 세포를 제거하기 위한 제품)</p>
                        <p>불소 함량이 0.15% 이상인 불소 구강 위생 제품 (구강위생용 액상제품은 0.05% 이상)</p>
                        <p>산화 수소가 들어간 치아 미백 제품 또는 과산화수소로 농축된 과산화 아연과 과산화 요소를 함유하며,
                             과산화 수소를 생성하는 다른 구성품들 (0.1~6.0%)</p>
						
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC17_Ex_sgr.jpg" alt="국가위생등록 (SGR) 유효기간" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>국가위생등록 (SGR) 유효기간</strong>
						<p>영구 (인증서에 등록된 해당제품이 단종될 때까지 유효합니다.)</p>
				</dl>	
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC16_Ex_sgr.png" alt="국가위생등록 (SGR) 절차" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>국가위생등록 (SGR) 절차</strong>
						<span>1. 인증기관에 신청서 및 제품 관련 서류 제출</span><br><br>
                        <span>2. 서류 검토</span><br><br>
                        <span>3. 적용되는 인증서 유형 확인</span><br><br>
                        <span>4. 공장심사 여부 확인</span><br><br>
                        <span>5. 견적서 발행 및 계약</span><br><br>
                        <span>6. 샘플 발송 후 시험 및 시험 성적서 발행</span><br><br>
                        <span>7. 공장심사 필요 시, 심사 진행</span><br><br>
                        <span>8. 위생등록증 발행</span><br><br>
					</dd>
				</dl>	
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC18_Ex_sgr.jpg" alt="국가위생등록 (SGR) 제출 서류" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>국가위생등록 (SGR) 제출 서류</strong>
						<p>신청서 - (자료실에서 신청서 양식을 다운 받으실 수 있습니다.)</p>
                        <p>HS Code</p>
                        <p>제품 설명서 (러시아어)</p>
                        <p>MSDS</p>
                        <p>제품 및 라벨 사본 (사진)</p>
                        <p>기 보유 시험 성적서</p>
                        <p>기 보유 인증서</p>
		
					</dd>
				</dl>	
			</li>

			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark09.jpg" alt="Rospotrebnadzor 대장(Register)" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>Rospotrebnadzor 대장(Register) </strong>
                        <p>위생등록증(SGR) 인증서번호는 Rospotrebnadzor <a href="http://www.fp.crc.ru/">웹사이트</a>에서 확인 가능하며, 또는 관세동맹 웹사이트에서도 확인이 가능합니다. 자세한 정보는 자료실에서 확인하시면 됩니다.</p>
                        <a href="http://www.fp.crc.ru/" style="color:blue;">Rospotrebnadzsor 웹사이트 바로가기</a>
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