<?php
	include_once('./_common.php');
$g5['title'] = 'Global HACCP/식품 안전에 대한 국제 권장 사항';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

<!-------style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style------>


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
		<h1><span style="font-family: georgia;">Global HACCP</span></h1>
		<h2>식품 안전에 대한 국제 권장 사항</h2>		
		<p style="font-family:georgia;display:inline-block;text-align:justify;font-size:1.2em">
            국제식품규격위원회 (CODEX)에서는 HACCP 적용을 위한 지침을 제시하여 전 세계적으로 이 지침에 의거하여 HACCP을 적용하고 있습니다. <br><br>
            HACCP 은 원료 생산, 조달 및 취급에서 완제품 제조 및 유통, 소비에 이르기까지 생물학적, 화학적, 물리적 위험에 대한 분석 및 제어를 통해 식품안전을 다루는 관리 시스템입니다.<br><br>
            HACCP 기반 시스템은 1 차 생산을 제외하고는 모든 국가에서 미국과 UE를 포함한 여러 국가에서 법적 요구사항입니다.<br><br>
            HACCP 준수를 통해 식품안전에 대한 진정한 의지를 증명하는 것은 브랜드를 변화시키고 효과적인 시장 진출 도구로서의 역할을 수행하여 전세계의 새로운 비즈니스 기회를 열어줍니다.<br>

		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/Global HACCP_01.jpg" alt="Global HACCP7원칙">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">Global HACCP 7원칙</span> </strong>
						
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                         국제식품규격위원회 (CODEX)에서는 HACCP 적용을 위한 7원칙 지침을 제시하였다
                           <br><br>
                         1.	위해요소분석 실시<br><br>
                         2.	중요관리점 결정<br><br>
                         3.	한계기준 결정<br><br>
                         4.	중요관리점에 대한 모니터링 방법 설정<br><br>
                         5.	모니터링 결과 중요관리점 관리 상태 위반시 개선조치 설정<br><br>
                         6.	HACCP가 효과적으로 시행되는지 검증<br><br>
                         7.	이 원칙 및 적용에 대한 문서화 및 기록 방법 설정 <br>                       
                        </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/Global HACCP_02.jpg" alt="HACCP의 중요성">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">HACCP의 중요성</span></strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       
                       국제식품규격위원회 (CODEX)가 개발한 위해요소중점관리기준(HACCP)은 시스템의 원칙은 ISO 22000, FSSC 22000, FSMA 등 많은 인증 스킴의 기반이 되고 있습니다. 이 지침은 프로세스 형태 및 사용시설과 관련될 수 있는 위해요소를 포함하여, 식품사슬에서 발생할 것이 예측되는 모든 위해요소를 파악하고 평가하도록 요구하고 있습니다.  
                        <br><br>
                        
                        Global HACCP를 통하여 조직은 다음과 같은 효과를 기대할 수 있습니다.<br><br>
                        
                         1. 구축과정에서의 효과적인 식품안전 경영 시스템 관리수단의 확립 및 위험 최소화<br><br>
                         2. 고객 신뢰성 확보<br><br>
                         3. 종업원의 책임의식 향상<br><br>
                         4. 비즈니스의 지속 가능성 향상<br><br>
                          </span>
					</dd>
				</dl>			
			</li>
	
			<li>
				<dl>
					<dt>
						<img src="./image/Global HACCP_03.jpg" alt="IGC의 역량">
					</dt>
					<dd>
						<strong>IGC의 역량</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                         IGC는 풍부한 경험과 전문지식을 보유한 다수의 숙달된 심사원을 보유하고 있습니다. <br><br>
                         IGC는 공인 ISO 22000, GFSI인증(FSSC 22000) 및 EAC인증과 FSVP 전문가 양성 과정 및 PCQI 양성과정을 통한 추가지원으로 귀사의 성장을 위해 필요한 과정을 빠르고 정확하게 지원합니다.
                       </span><br><br>
                       <!------
                        <span style="font-size:1.2em">1.고객 중시</span><br><br>
                        ------>
					</dd>
				</dl>	
			</li>
			
		</ul>
	</section>
<br><br><br><br><br><br>
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;">
        <h2 class="con_arrow" style="font-size:0.7em;">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
		 <span style="font-family:georgia;">IGC 인증원은 식품산업 분야의 적용되는 다양한 인증 스킴을 확보함으로써 빠르고 정확한 인증, 시험 및 교육서비스를 제공하고 있습니다.</span><br><br><br>
			<ul style="display:inline-block;text-aling:left;">
				<li><p><em><strong>01</strong></em><span style="font-family: georgia;">FDA FSMA 3자 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span style="font-family: georgia;">ISO 22000, FSSC 22000</span></p></li>
				<li><p><em><strong>03</strong></em><span style="font-family: georgia;">Vegan 인증</span></p></li>
				<li><p><em><strong>04</strong></em><span style="font-family: georgia;">EAC, GOST 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span style="font-family: georgia;">FDA 영양 및 화학, 생물학적 시험</span></p></li>
				<li><p><em><strong>06</strong></em><span style="font-family: georgia;">식품안전표준 교육</span></p></li>
				<li><p><em><strong>07</strong></em><span style="font-family: georgia;">위생 허가</span></p></li>
				<br>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
	
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>