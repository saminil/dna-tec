<?php
	include_once('./_common.php');
$g5['title'] = '고객만족 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<!------ Existing File Codings  시작----->

<!-------style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style -------->
<!------ Existing File Codings  종료----->


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet"> <!-------// 상세 페이지 본문 전체 영문 폰트 정의----------->
<!-----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"---///퀵메뉴와 충돌-->


<style>
    /* *:lang(en) {font-family: georgia;} */ 
    /* *:lang(ko) {font-family: 'Noto Sans', sans-serif;} */
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
    
    
    
    /* (주)아이지씨인증원 사업영역 시작  */	
    
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:none; width:100%; list-style:none; margin:10px 0; }
	.partner_type2 .con_box ul li p{display:table; width:100%; }
	.partner_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.partner_type2 .con_box ul li p > em{ width:30px; }
	.partner_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.partner_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    
    /* (주)아이지씨인증원 사업영역 종료  */
    
    
    

	@media screen and (max-width:992px){		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}
	}

	@media all and (max-width:768px){
		.business_type5 h1{font-size:2.3em; }
		.business_type5 h2{font-size:1.9em; }
		.business_type5 h3{font-size:1.6em; padding:0 5px;}
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


</style>




<div class="content_wrap">
	<!---section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">OUR</span> BUSINESS</h1>
		<h2 class="sub_txt">IGC인증원의 다양한 사업영역를 소개합니다.</h2>
	</section---->
	
	<section class="business_type5" class="area">
		<h1><span style="font-family: georgia;">ISO</span> 10002</h1>
		<h2>고객만족 경영시스템 인증</h2>		
		<p style="font-family:georgia;display:inline-block;text-align:justify;font-size:1.2em">
          ISO10002는 전자상거래를 포함한 모든 유형의 상업적 또는 비상업적 활동에 대하여 기획, 설계, 운영, 유지 및 개선을 포함한 조직 내의 제품 관련 불만처리 프로세스에 대한 지침을 제공합니다. 그리고 기술된 불만처리 프로세스를 전체 품질경영시스템 중 하나의 프로세스로 활용하는 것도 적절합니다.<br><br>
          불만처리 프로세스를 통해 얻은 정보는 제품 및 프로세스의 개선을 이끌 수 있고 적절하게 불만이 처리된 경우에는 조직의 규모, 지역 및 산업 분야에 관계없이 조직의 명성이 높아질 수 있습니다.<br><br> 특히 효과적이고 효율적인 불만처리 프로세스는 제품을 공급하는 조직과 그 제품을 받는 이들 모두의 요구를 반영하기 때문입니다. 또한 국제 규격은 불만이 일관되게 처리될 것이라는 확신을 주기 때문에 국제 시장에서 규격의 가치는 점점 높아지고 있습니다.

		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/iso__10002_01.jpg" alt="ISO 1002 도입의 필요성">
					</dt>
					<br>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 10002 도입의 필요성</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       <br><br>
                         &#10053;  시장개방에 따른 기업들의 무한경쟁 상황 하에서 생존 및 발전을 위한 경쟁력 제고의 필요성 인식<br><br>
                         &#10053;  고객 서비스 개선을 통한 기존 고객의 이탈방지<br><br>
                         &#10053;  고객 수준의 향상과 소비자 권리의식의 증대<br><br>
                         &#10053;  상품 및 서비스 다양화에 따른 고객 문의에 대한 응대<br><br>
                         &#10053;  고객과의 관계 개선<br><br>
                         &#10053;  고객 관점의 만족도 향상<br><br>
                         &#10053;  고객 상담원 및 영업사원의 중요성 대두<br><br>
                         &#10053;  공공기관의 고객만족도 조사 강화<br><br>
                         &#10053;  제조사의 제조물 책임에 따른 대응능력 강화<br><br>

                        </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso__10002_02.jpg" alt="ISO 1002 도입 효과">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 10002 도입 효과</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                        
                        <br><br>          
                         &#10054;  공개적이며 신속히 대응하는 불만처리 프로세스를 불만제기자에게 제공<br><br>
                         &#10054;  일관성 있고 체계적이며 신속히 대응하는 방식으로 불만을 해결하여 불만제기자 및 조직이 만족할 수 있도록 하는 조직의 능력을 증진<br><br>
                         &#10054;  동향 파악, 불만의 원인 제거 및 조직의 운영 개선에 대한 조직의 능력을 증진<br><br>
                         &#10054;  불만 해결을 위한 고객중심 접근방법을 조직이 수립하도록 하고, 고객업무에 대한 관련 인원의 숙련도가 향상되도록 권장<br><br>
                         &#10054;  불만처리 프로세스의 지속적인 검토 및 분석, 불만 해결 그리고 프로세스 개선에 대한 근거를 제공<br><br>
                         </span>
					</dd>
				</dl>			
			</li>
			<li>
				<dl>
					<dt>
						<img src="./image/iso__10002_03.jpg" alt="ISO 1002 규격의 요구사항">
					</dt>
					<dd>
						<strong><span style="font-family:georgia;">ISO</span> 10002 규격의 요구사항</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                      <br><br>
                       
                          1.	적용범위<br><br>
                          2.	인용표준<br><br>
                          3.	용어와 정의<br><br>
                          4.	불만처리 기본 원칙<br><br>
                          5.	불만처리의 체제 및 구조<br><br>
                          6.	기획 및 설계<br><br>
                          7.	불만처리 프로세스의 운영<br><br>
                          8.	유지 및 개선<br><br>

                        </span>
					</dd>
				</dl>	
			</li>
			
		</ul>
	</section>
<br><br><br><br><br><br>
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;">
        <h2 class="con_arrow" style="font-size:0.7em;">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
		<span style="font-family: georgia;">IGC</span>인증원을 통하여 <span style="font-family: georgia;">ISO</span> 10002의 국제 요구사항에 부합하는 품질시스템을 구축함으로써 고객 서비스 표준과 불만 관리를 개선할 수 있습니다. <span style="font-family: georgia;">IGC</span>인증원은 이 외에도 품질시스템과 관련한 다양한 인증 서비스를 제공하고 있습니다.
		
		<br><br><br>
			<ul style="display:inline-block;text-aling:left;">
				<li><p><em><strong>01</strong></em><span><span style="font-family: georgia;">ISO</span> 9001 : 품질경영시스템</span></p></li>
				<li><p><em><strong>02</strong></em><span><span style="font-family: georgia;">ISO</span> 14001 : 환경경영시스템</span></p></li>
				<li><p><em><strong>03</strong></em><span><span style="font-family: georgia;">ISO</span> 45001 : 안전보건경영시스템</span></p></li>
				<br>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
	
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>