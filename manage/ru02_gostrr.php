<?php
	include_once('./_common.php');
$g5['title'] = 'GOST R';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다.     
    */
	
?>
<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
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
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;position:relative:margin-right:20px;}
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
		<h1 class="sub_tit"><span class="fc_pointer">GOST R</span>&nbsp; &nbsp;인증 러시아(Russia)</h1><br><br>
		
			    <h1>GOST R 인증서 개요</h1>
		        <h2>RUS-TEST PACIFIC 러스테스트 퍼시픽</h2>		
		
		<h2 class="sub_txt" style="text-align:left;">GOST는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.<br>
        현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은 GOST-K 등으로 구분지어 불리고 있습니다.</h2>
		<h2 class="sub_txt" style="text-align:left;">GOST-R은 러시아에서 발행하는 러시아기술표준 인증서입니다. 관세동맹국가 간 발효된 통합 인증제도의 도입 이후 러시아 내에서 GOST-R 인증 비중은 예전에 비하여 크게 줄었습니다. 하지만 아직 관세동맹국간에 협의가 이루지지 않은 강제인증 품목들에 한해서는 여전히 수입통관 시 GOST-R 인증이 요구됩니다.</h2>
		
		
		
		
		
	</div>

	<div class="business_type5" class="area">
		<br>
		<ul>
			<li>
				<dl>
					<dt>
					<br>
					<div id="eac_CoC" style="width:50%;margin-left:auto;margin-right:auto;">
						<img src="./image/eac_mark03_CoC.png">
						 <p style="text-align:center;">GOST R CoC</p>
						</div>
					<br><br><br>
						<div id="eac_Doc" style="width:50%;margin-left:auto;margin-right:auto;">
						<img src="./image/eac_mark04_DoC.png">
						 <p style="text-align:center;">GOST R DoC</p><br>
						</div>
						<br><br><br>
						<div id="eac_Doc" style="width:50%;margin-left:auto;margin-right:auto;">
						<img src="./image/eac_mark04_DoC.png">
						 <p style="text-align:center;">GOST Voluntary(자발적 GOST)</p><br>
						</div>
						<br>				
					</dt>
					<br>
					<dd>
						<strong>GOST R 인증서 유형</strong>
						<p>GOST R CoC</p>
						<span>의무적으로 적합성 인증을 받아야하는 대상에 대해 발급됩니다. GOST R CoC는 러시아로 수입되는 물품에 대해 아이템 및 제조공정라인이 러시아 안전 규정에 따라 적합함을 인증해주는 인증서이며, GOST R CoC의 발행은 인정을 받은 인증기관(Accredited Certification Body) 에서 이루어져야 합니다.</span><br><br><br><br><br><br><br><br><br><br><br>
						
						<p>GOST R DoC</p>
						<span>의무적으로 적합성 선언을 받아야하는 대상에 대해 발급됩니다. 적합성 선언(GOST R DoC)은 의무적인 적합성인증(GOST R CoC)에 비해 간소화된 유형의 인증서입니다.</span> <br><br><br><br><br><br><br><br><br><br><br><br>
						
						<p>GOST Voluntary(자발적 GOST)</p>
						<span>GOST Voluntary는 의무적으로 GOST 인증을 받아야 하는 제품은 아니지만 제품이 적용 규정과 지침에 따라 만들어 졌음을 증명하는 인증서로, EAC 인증을 받는 기업이 GOST Voluntary를 추가적으로 신청하여 받을 경우 기업의 홍보, 신뢰 확보 등의 효과가 있습니다.</span><br><br><br><br><br><br><br>
						
					</dd>
				</dl>
			</li>
			<br><br>
			<li>
				<dl>
					<dt>
						<img src="./image/GOST05_R.jpg" alt="GOST 인증 유효기간">
					</dt>
					<br>
					<dd>
						<strong>GOST R 인증 유효기간</strong>
						<p>GOST R 인증은 최소 1년에서 최대 3년까지 유효합니다.  </p>

					</dd>
				</dl>			
			</li>
			<br><br>
			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark08.png" alt="TRCU EAC 인증 절차">
					</dt>
					<dd>
						<strong>GOST R 인증 절차</strong>
                        <li>1. 인증기관에 신청서 및 제품 관련 서류 제출</li><br>
                        <li>2. 서류 검토</li><br>
                        <li>3. 적용되는 인증서 유형 확인</li><br>
                        <li>4. 샘플 시험 및 공장심사 여부 확인</li><br>
                        <li>5. 견적서 발행 및 계약</li><br>
                        <li>6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</li><br>
                        <li>7. 공장심사 필요 시, 심사 진행</li><br>
                        <li>8. 인증서 초안 발행 및 고객 확인</li><br>
                        <li>9. 인증서 발행</li>
					</dd>
				</dl>	
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/02_1.jpg">
					</dt>
					<dd>
						<strong>GOST R 인증 제출서류</strong>
                        <p>신청서 - (자료실에서 신청서 양식을 다운 받으실 수 있습니다.)</p>
                        <p>HS Code</p>
                        <p>제품 설명서&nbsp; (러시아어 또는 수출국 언어)</p>
                        <P>기 보유 시험 성적서</P>
                        <P>기 보유 인증서</P>
                        <P>도면 (해당 시)</P>
                        <P>기술문서 (해당 시)</P> 
					</dd>
				</dl>				
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark11.jpg">
					</dt>
					<dd>
						<strong> 유라시아 인증 신청자</strong>
                        <p>TRCU인증, GOST R인증 등을 신청할 경우 러시아 또는 기타 관세동맹 국가에서 위치한 업체만 신청자가 될 수 있습니다. 그 업체는 법적실체 또는 개인사업자여야 하며 일반인은 인증의 신청자가 될 수 없습니다.</p>
                        <p>RUS-TEST PACIFIC은 유라지아 지역 내에 신청자 역할을 할 수 있는 사업자가 없는 고객을 위해 Eurasia Representative 서비스를 제공하고 있습니다.</p>
					</dd>
				</dl>				
			</li>
			
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark09.jpg" alt="Rosakkreditasiya 대장(Register)">
					</dt>
					<dd>
						<strong>Rosakkreditasiya 대장(Register)</strong>
                        <p>TRCU인증, GOST R인증은 <a href="https://www.fsa.gov.ru/">Rosakkreditasiya 웹사이트</a>에 등록됩니다. 현재는 필수적 인증서만 Rosakkreditasiya 웹사이트에서 확인이 가능하며 자발적 인증서는 현재 시점에 확인이 불가능합니다. &nbsp;상세한 확인 절차는 자료실에 등록된 파일을 통해 확인하실 수 있습니다.<br>
                        
                        <a href="https://www.fsa.gov.ru/" style="color:blue;">Rosakkreditasiya 웹사이트 바로가기</a>
                        </p>
					</dd>
				</dl>				
			</li>
			
		  <!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
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
include_once(G5_THEME_PATH.'/tail.php');
?>