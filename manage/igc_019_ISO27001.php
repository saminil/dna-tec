<?php
	include_once('./_common.php');
$g5['title'] = '정보보안 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<!------ Existing File Codings  시작----->

<!-----------------style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style----------------->
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
	
	<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 27001</a></li>
			<li><a href="javascript:;">ISO/IEC 20000-1</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	
<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
	<div class="tab_con"><!------------ class="tab_con"  시작 ---------------->
		

    <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<article style="display:block">
		
	<section class="business_type5" class="area">
		<h1><span style="font-family: georgia;">ISO/IEC</span> 27001 </h1>
		<h2>정보보호 경영시스템 인증</h2>		
		<p style="font-family:georgia;display:inline-block;text-align:justify;font-size:1.2em">
            ISO/IEC 27001은 국제표준화기구 (ISO: International Organization for Standardization) 및 국제전기기술위원회 (IEC: International Electrotechnical Commission)에서 제정한 정보보호 관리체계에 대한 국제 표준이자 정보보호 분야에서 가장 권위 있는 국제 인증표준으로, 정보보호정책, 물리적 보안, 정보접근 통제 등 정보보안 관련 11개 영역, 133개 항목을 다루고 있습니다.
		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_IEC 27001_02.jpg" alt="ISO/IEC 27001 구조">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO/IEC</span> 27001 표준 구조</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       
                            ISO/IEC 27001은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가, 개선의 10가지 항목과 14가지의 통제항목으로 구성되어 있습니다.
                            통제 항목은 ISO/IEC 27002를 참조하십시오. 
                            이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.

                       </span><br><br>
                       <!-------------------
                        <span style="font-size:1.2em">1.고객 중시</span><br><br>
					---------->
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_IEC 27001_01.jpg" alt="ISO/IEC 27001 인증효과">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO/IEC</span> 27001 인증 효과</strong>
						<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       
                          &#8280; <strong style="font-weight:bold;">고객 만족</strong><br>
                                  고객정보를 안전하게 보호함으로서 고객만족을 도모<br><br>
                          &#8280; <strong style="font-weight:bold;">비즈니스 연속성</strong><br>
                                  리스크 관리, 법규 준수 및 미래 보안 이슈 및 우려사항에 대한 경계를 통해 고장 시간 회피<br><br>
                          &#8280; <strong style="font-weight:bold;">법규 준수</strong><br>
                                  법적/규제적 요구사항이 어떻게 귀사 및 고객에 영향을 끼치며, 기소 및 벌금 부과 리스크 감소를 어떻게 하는지 이해<br><br>
                          &#8280; <strong style="font-weight:bold;">리스크 관리 증대</strong><br>
                                  고객 기록, 회계 정보 및 지적재산권이 체계적인 프레임워크를 통해 손실, 절도 및 손상으로부터 보호됨을 보장<br><br>
                          &#8280; <strong style="font-weight:bold;">증명된 사업 신뢰도</strong><br>
                                  인정된 글로벌 산업 규격에 대한 독립적 검증은 많은 것을 보여줍니다.<br><br>
                          &#8280; <strong style="font-weight:bold;">사업 확대</strong><br>
                                  고객은 종종 납품 조건으로 인증서를 요구하기 때문에 인증을 통한 사업 확대.<br>
                        </span><br><br>
					</dd>
				</dl>			
			</li>
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_IEC 27001_04.jpg" alt="ISO/IEC 27001 IGC인증원의 역량">
					</dt>
					<dd style="font-family:georgia;">
						<strong>IGC인증원의 역량</strong>
						<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                         IGC는 정보보안을 포함하여 다양한 산업 분야의 품질경영시스템에 대한 인증활동에 많은 지식과 풍부한 경험을 보유하고 있습니다.<br><br>
                         여러 국제 표준에서 요구되는 IT 시험 및 인증을 종합적으로 수행한 노하우를 바탕으로 빠르고 정확한 인증 서비스를 제공합니다.<br>

                       </span><br><br>
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
		<span style="font-family:georgia;">IGC</span>는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다. 
		<br><br><br>
			<ul style="display:inline-block;text-aling:left;">
				<li><p><em><strong>01</strong></em><span><span style="font-family: georgia;">ISO </span> 9001: 품질경영시스템</span></p></li>
				<li><p><em><strong>02</strong></em><span><span style="font-family: georgia;">ISO/IEC </span> 20000-1 : 서비스경영시스템</span></p></li>
				<li><p><em><strong>03</strong></em><span><span style="font-family: georgia;">ISO/IEC </span> 27001 : 심사원 교육 및 인증</span></p></li>
				<br>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
   
   </article> <!--+++++ /컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	
	

   <article><!--+++ /20.05.25 탭컨텐츠 영역 시작 +++-->
   
   <section class="business_type5" class="area">
		<h1><span style="font-family: georgia;">ISO/IEC</span> 20000-1</h1>
		<h2>IT서비스관리 경영시스템 인증</h2>		
		<p style="font-family:georgia;display:inline-block;text-align:justify;font-size:1.2em">
            Service Management System(SMS)는 조직이 수행하는 IT서비스의 설계, 계획, 제공, 운영 및 제어하기 위해 수행되는 활동에 적용됩니다. ISO/IEC 20000은 이러한 유형에 적용되는 최초의 국제 표준이며, 2005년 제정되어 2011년과 2018년 2번의 개정을 거쳐왔습니다.<br>
            ISO/IEC 20000-1은 서비스 요구사항을 충족하고 가치를 제공하기 위한 서비스 계획, 디자인, 전환, 제공 및 개선이 포함됩니다.<br>

		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/iso20000-1_1.jpg" alt="ISO IEC 20000-1 표준구조">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO/IEC</span> 20000-1 표준 구조</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       ISO/IEC 20000-1은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가 및 개선의 10가지 항목으로 구성되어 있습니다.<br><br>
                       가이드 문서는 ISO/IEC 20000-3을, 모범사례는 ISO/IEC 20000-5를 참조하십시오.<br><br> 
                       이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 서비스를 제공하는 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.<br>
                       </span><br><br>
                        <br><br>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso20000-1_2.jpg" alt="ISO IEC 20000-1 표준구조">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO/IEC </span> 20000-1 인증 효과</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                        <br>
                          a) 서비스 품질 향상<br><br>
                          b) 일관된 서비스 품질 수준 유지<br><br>
                          c) 서비스의 기획, 설계, 전환, 전달 및 개선에 대한 능력을 입증<br><br>
                          d) SMS 및 서비스의 모니터링, 측정 및 검토<br><br>      
                          e) 서비스상품화, 서비스통합, 업체별 공급업체관리, 고객의 서비스 가치결정<br><br>                   
                        </span>
					</dd>
				</dl>			
			</li>
			
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_03.jpg">
					</dt>
					<dd>
						<strong>IGC인증원의 역량</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                          IGC의 심사원은 부문별 IT 경험과 기술적 자격을 갖춘 전문가로서 ISO/IEC 20000-1 경영시스템의 구현 및 효과에 대한 철저하고 정직한 심사를 제공합니다.<br><br>
                          또한 귀사의 비즈니스 요구에 부합하는 지식과 역량을 갖추고 있으므로 경영시스템의 효과적이고 철저한 심사를 제공합니다.<br><br>
                       <br><br>
                       <!------
                        <span style="font-size:1.2em">1.고객 중시</span><br><br>
                        ------>
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
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
		<sapn><span style="font-family: georgia;">IGC</span>는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다.</sapn> 
		<br><br>
			<ul style="display:inline-block;text-aling:left;">
				<li><p><em><strong>01</strong></em><span><span style="font-family: georgia;">ISO</span> 9001 : 품질경영시스템</span></p></li>
				<li><p><em><strong>02</strong></em><span><span style="font-family: georgia;">ISO/IEC</span> 27001 : 정보보호경영시스템</span></p></li>
				<li><p><em><strong>03</strong></em><span><span style="font-family: georgia;">ISO/IEC</span> 20000-1 : 심사원 교육 및 인증</span></p></li>
				<!------
				<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
				----->
				<br>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
   
   </article><!--+++ /20.05.25 탭컨텐츠 영역  종료+++-->
	
	
	
</div> <!------------ class="tab_con"   종료 ---------------->

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>