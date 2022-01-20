<?php
	include_once('./_common.php');
$g5['title'] = '사회적 책임 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
		<h1><span style="font-family: georgia;">ISO</span> 9001 품질경영시스템</h1>
		<h2>(주)아이지씨인증원의 특화되고 차별화된 서비스</h2>		
		<p style="display:inline-block;text-align:justify;font-size:1.2em">
            오늘날 많은 기업들은 고객의 니즈를 단순히 충족시키는 것뿐만 아니라 더욱 향상된 제품 및 서비스를 제공하기를 원하고 있습니다. 또한, 비용 절감을 통해 경쟁력을 유지하기 원합니다. 대기업이든 중소기업이든 품질 및 가격 경쟁력을 개선시키기 위한 종합적인 솔루션이 필요하고, <span style="font-family: georgia;">ISO</span> 9001은 이러한 기업들에게 효과적인 픔질경영 프로세스를 제공합니다.<br><br>
            소프트웨어 개발은 식품제조나 상담서비스 제공과는 다릅니다. 그러나 <span style="font-family: georgia;">ISO</span> 9001은 모든 산업에 적용될 수 있습니다. 제조 회사, 소프트웨어 개발 회사, 거래 조직, 서비스 조직, 경찰서, 프로 축구 팀 및 시의회 등 
            다양한 조직이 <span style="font-family: georgia;">ISO</span> 9001:2015 시스템을 성공적으로 적용하였습니다. 
            이와 같이 <span style="font-family: georgia;">ISO</span> 9001의 요구사항은 포괄적이며, 조직의 형태, 규모 또는 제공되는 제품 및 서비스에 관계없이 모든 조직에 적용될 수 있습니다. 그렇기에, 이 표준은 전세계적으로 가장 보편적으로 사용되고 있는 품질 경영 표준입니다.
		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_01.jpg">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 9001 요구사항</strong>
						<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">조직의 목적과 목표를 뒷받침하는 <span style="font-family: georgia;">ISO</span> 9001은 품질 방침과 목표를 달성하기 위한 프로세스, 절차 및 책임사항을 문서화합니다. 8가지 품질 경영 원칙을 기반으로 한 <span style="font-family: georgia;">ISO</span> 9001:2015 표준은 고객과 이해관계자의 요구사항을 충족하는 조직 운영 방식을 정의합니다.</span><br><br>
                        <span style="font-size:1.2em">1.고객 중시</span><br><br>
                        <span style="font-size:1.2em">2.리더십</span><br><br>
                        <span style="font-size:1.2em">3.관련 인원들의 적극적 관여</span><br><br>
                        <span style="font-size:1.2em">4.프로세스 접근방식</span><br><br>
                        <span style="font-size:1.2em">5.경영에의 체계적 접근</span><br><br>
                        <span style="font-size:1.2em">6.의사결정에의 사실 기반 접근</span><br><br>
                        <span style="font-size:1.2em">7.상호 이익 공급업체 관계</span><br><br>
                        <span style="font-size:1.2em">8.지속적 개선</span><br><br>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_02.jpg">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 9001의 중요성</strong>
						<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">오늘날의 서비스 부문 중심 경제에서 점점 더 많은 회사들이 <span style="font-family: georgia;">ISO</span> 9001을 비즈니스 도구로 사용하고 있습니다. 적절하게 명시된 품질 목표, 고객 만족도 조사 및 지속적인 개선 프로그램을 통해 기업은 효율성과 수익성을 높일 수 있습니다. <br>
                        즉, 적절한 품질 관리는 비즈니스를 향상 시키며, 투자, 시장 점유율, 매출 성장, 매출 마진, 경쟁 우위 및 소송 회피에 긍정적인 영향을 미칩니다. </span><br><br>
                        <span style="font-family: georgia;">ISO</span> 9001을 비즈니스 도구로 사용한다면 다음과 같은 이점이 있습니다.<br><br>
                        
                          <span style="font-size:1.2em">1.보다 효율적이고 효과적인 운영</span><br><br>
                          <span style="font-size:1.2em">2.마케팅 강화</span><br><br>
                          <span style="font-size:1.2em">3.이익 증가</span><br><br>
                          <span style="font-size:1.2em">4.직원 동기 부여, 인식 및 사기 개선</span><br><br>
                          <span style="font-size:1.2em">5.국제 무역 촉진</span><br><br>
                          <span style="font-size:1.2em">6.고객 만족도 및 고객 유지력 향상</span><br><br>
                          <span style="font-size:1.2em">7.폐기물 감소 및 생산성 향상 </span><br><br>
					</dd>
				</dl>			
			</li>
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_03.jpg">
					</dt>
					<dd>
						<strong>IGC의 역량</strong>
						<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                      IGC는 미국의 인정기구인 IAS로부터 <span style="font-family: georgia;">ISO</span> 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br><br>
                      뛰어난 자격과 전문성을 갖춘 심사원들로 이루어진 IGC의 심사팀은 전 세계 조직이 <span style="font-family: georgia;">ISO</span> 9001 인증을 구현하고 달성할 수 있도록 지원합니다. <br>
                      <br>IGC의 인증심사 접근방식은 매우 전문적이고, 시간에 구애받지 않으며 효과적이어서 구현이 용이하며, 고객 조직의 비즈니스 프로세스에 가치를 더합니다.<br><br>
                      IGC 심사원들은 다양한 국가에 거주하며, 해당 지역의 언어를 사용하여 기업들이 <span style="font-family: georgia;">ISO</span> 9001 인증을 획득하고, 이 인증을 다른 경영 시스템 인증과 연계할 수 있도록 지원합니다. <br>
                      <br>IGC의 인증 마크를 통해 기업들은 자사의 제품 및 서비스 품질에 대한 보증을 고객들에게 보여줄 수 있습니다.
                       </span><br><br>
                       <!------
                        <span style="font-size:1.2em">1.고객 중시</span><br><br>
                        <span style="font-size:1.2em">2.리더십</span><br><br>
                        <span style="font-size:1.2em">3.관련 인원들의 적극적 관여</span><br><br>
                        <span style="font-size:1.2em">4.프로세스 접근방식</span><br><br>
                        <span style="font-size:1.2em">5.경영에의 체계적 접근</span><br><br>
                        <span style="font-size:1.2em">6.의사결정에의 사실 기반 접근</span><br><br>
                        <span style="font-size:1.2em">7.상호 이익 공급업체 관계</span><br><br>
                        <span style="font-size:1.2em">8.지속적 개선</span><br><br>
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
		IGC는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다. <br>특히, <span style="font-family: georgia;">ISO</span> 45001은 <span style="font-family: georgia;">ISO</span> 9001, <span style="font-family: georgia;">ISO</span> 14001과 통합 인증이 가능합니다.<br><br><br>
			<ul style="display:inline-block;text-aling:left;">
				<li><p><em><strong>01</strong></em><span><span style="font-family: georgia;">ISO</span> 9001: 품질경영시스템</span></p></li>
				<li><p><em><strong>02</strong></em><span><span style="font-family: georgia;">ISO</span> 14001: 환경경영시스템</span></p></li>
				<li><p><em><strong>03</strong></em><span><span style="font-family: georgia;">ISO</span> 45001: 안전보건경영시스템</span></p></li>
				<!------
				<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
				<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
				----->
				<br>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
	
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>