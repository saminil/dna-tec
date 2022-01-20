<?php
	include_once('./_common.php');
$g5['title'] = '부패방지 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .
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
		<h1><span style="font-family: georgia;">ISO</span> 37001</h1>
		<h2>부패방지 경영시스템 인증</h2>		
		<p style="font-family:georgia;display:inline-block;text-align:justify;font-size:1.2em">
            부패방지경영시스템 (Anti-bribery management system)은 국제표준화기구 (ISO, International Organization for Standardization)가 2016년 10월에 발표한 국제 표준으로 부패방지를 위해 각국 기업이 실행해야 하는 구체적인 실행방안을 담고 있습니다.<br><br>
            조직의 활동 전 부문에서 발생할 수 있는 부패방지를 위한 요구사항으로 부패방지 관리시스템의 수립을 통해 전 세계적으로 부패에 대한 긍정적인 인식을 이끌어 나갈 수 있으며 이해관계자들 간의 법규위반 리스크를 감소하여 신뢰를 증대시킬 수 있는 효과를 기대할 수 있습니다.<br>

		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/iso_37001_01.jpg" alt="ISO 37001 요구사항">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 37001 요구사항</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       ISO 37001:2016은 ISO 9001:2015 등 표준에 적용되는 High Level Structure가 적용되어, 다른 표준과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                       <br><br>
                       1.  적용범위<br><br>
                       2.  인용표준<br><br>
                       3.  용어와 정의<br><br>
                       4.  조직 상황<br><br>
                       5.  리더십<br><br>
                       6.  기획<br><br>
                       7.  지원<br><br>
                       8.  운용<br><br>
                       9.  성과 평가<br><br>
                       10. 개선<br>
                       </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_37001_02.jpg" alt="ISO 37001의 중요성">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 37001의 중요성</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       
                       국제 반부패회의 (International Anti-Corruption Conference)는 반부패 경험과 정보의 교환, 국제적 협력 필요성 증대에 따라 1983년 워싱턴에서 처음 개최한 이래 격년제로 개최하고 있습니다. 세계에서 가장 큰 규모의 국제 반부패 회의로서 2020년 제 19차 회의를 한국에서 개최할 예정입니다.<br>
                       이를 기점으로 국내 정부, 공공 기관 및 다양한 산업분야에 부패방지, 컴플라이언스, 사회적 책임 등의 인증 수요가 증가할 것으로 보입니다.<br>
                           </span><br><br>
                           
                        <span style="font-family: georgia;text-weight:bold;">기대효과</span><br><br>
                        
                         1.개인 및 조직 차원에서 뇌물수수로 인한 법규 위반 등에 따른 리스크 감소<br><br>
                         2.조직 및 사업 활동에 대한 고객으로부터의 신뢰 증대<br><br>
                         3.파트너십 관계에 있는 조직 및 기관으로부터의 신뢰를 바탕으로 협력관계 향상<br><br>
                         4.직원 및 협력회사에 부패방지 인식 공유<br><br>
                         5.공공기관을 포함한 다양한 입찰에서 강화되는 부패방지 시스템 충족<br><br>
					</dd>
				</dl>			
			</li>
			<li>
				<dl>
					<dt>
						<img src="./image/iso_37001_03.jpg" alt="IGC인증원의 역량">
					</dt>
					<dd>
						<strong style="font-family:georgia;">IGC의 역량</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                          ■ IGC는 미국의 인정기구인 IAS로부터 ISO 37001에 대한 인정을 받은 협력기관 GIC를 통해 부패방지 경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br><br>
                          ■ IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                          ■ IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 37001은 물론 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다. <br><br>
                          ■ IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.

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
		<span style="font-family:georgia;">IGC</span>는 <span style="font-family:georgia;">ISO</span> 37001 부패방지 경영시스템과 더불어 다음과 같은 인증스킴을 확보함으로써 부패방지, 컴플라이언스, 사회적 책임 등 다양한 국제 표준 및 지침을 기반하여 관련된 인증 및 교육 서비스를 제공할 예정입니다.<br><br><br>
			<ul style="display:inline-block;text-aling:left;">
				<li><p><em><strong>01</strong></em><span><span style="font-family: georgia;">SA </span> 8000 (Social Accountability)</span></p></li>
				<li><p><em><strong>02</strong></em><span><span style="font-family: georgia;">ISO</span> 19600 (Compliance Management Systems) > ISO 37301 출판 예정</span></p></li>
				<li><p><em><strong>03</strong></em><span><span style="font-family: georgia;">ISO</span> 26000 (Guidance on social responsibility) 대응</span></p></li>
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