<?php
	include_once('./_common.php');
$g5['title'] = 'FDA FSMA / 식품안전 경영시스템 인증 ';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
   /*  ul li dl dd div img {display: block; margin: 0px auto; }  FSMA 제 3자 인증 2개의 이미지 */
    
    
    
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
		<h1><span style="font-family: georgia;">FDA </span> FSMA </h1>
		<h2>식품안전 경영시스템 인증</h2>		
		<p style="font-family: georgia;display:inline-block;text-align:justify;font-size:1.2em">
           <span style="font-size:1.6em;color:#1f2558">FSMA (식품안전현대화법, Food Safety Modernization Act)</span><br><br>
            2011년 01월 04일, 미국정부는 사전예방을 통한 식품공급 안전성 및 국민건강 보호를 목적으로 식품안전현대화법 (Food Safety Modernization Act, FSMA)을 제정하였습니다. 이에 따라 FDA는 FSMA 제정으로 식품안전문제를 예방하는데 초점을 맞출 수 있게 되었습니다. FSMA의 적용대상은 식품이나 사료를 제조, 가공, 포장 또는 보관하는 시설입니다. 또한 생산농가, US 수입업체, 화주업체, 수취업체, 선적업체, 운송업체 등 미국으로 식품을 보내는 업체도 FSMA를 준수해야 합니다. 따라서 업체들은 FSMA에 따라 위해요소 분석에 기반한 예방관리가 포함된 식품안전시스템을 구축하고, 문서화된 식품안전계획서를 작성하는 등의 각종 준비가 필요합니다.
		</p><br><br>
		
                        <span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                        <strong style="font-weight:bold;">
                        </strong><br>
                        </span><br>
                        <div style="display:block;width:50%;margin:0 auto;">
                        <img src="./image/FDA_FSMA_01.jpg" alt="세계식품 안전 기구 로고">
                        <br><br><br>
                        </div>
		<br><br>

		<ul>
		
			<li style="display:block;background-color:#ffffff;width:100%;height:auto;border-color:#aabbcc;">
				<dl>
					<!----dt>
						<img src="./image/ISO_9001_01.jpg">
					</dt----->
					<dd>
						<strong style="color:#1f2558"><span style="font-family:font-family: georgia;">FSMA</span>  제 3자 인증</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       GC는 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 제 3자 인증기관으로 인정받았습니다.
                       </span><br><br>
                         <div style="width:100%;">
                       	   <img src="./image/FDA_FSMA_02.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플1" style="display:block;float:left;width:40%; padding:5px;margin:0 auto;" > 
					       <img src="./image/FDA_FSMA_03.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플2" style="width:40%;padding:5px;display:block;margin:0 auto;">
					     </div>
                       <br>
                        <span style="font-weight:bold;"><a href="https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification" target="_blank">인정 정보 확인 Click </a></span><br>
                        
                        <a href="https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification" target="_blank">https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification </a>
                        
                      <br><br> 
                      <span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       FSMA에는 ‘공인된 제 3자 인증 프로그램 (Accredited Third-Party Certification Program)’이라는 규정이 있습니다. 본 프로그램은 미국 외 지역에서 생산되어 미국으로 수입되는 식품들의 생산시설들이 FSMA에서 요구하는 규정을 잘 준수하고 있는지 공인된 제 3의 기관이 심사를 하여 요구사항을 충족하는 경우 인증서를 발행하는 프로그램입니다. 
                       이렇게 발행된 인증서는 자발적 적격 수입업자 프로그램 (Voluntary Qualified Importer Program, VQIP)의 참여 자격을 얻는데 사용하거나 미국 소비자들에게 위해가 될 수 있는 식품의 반입을 예방하기 위해 FDA가 인증서를 요구할 경우 사용됩니다.
                       </span>
                        <br><br>
                        
                        <span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                        <strong style="font-weight:bold;">
                        1. VQIP (Voluntary Qualified Importer Program)</strong><br> 
                        FDA가 식품 수입 업체들에게 통관 혜택을 주어 해당 식품을 미국에 신속하게 들여올 수 있도록 하는 프로그램
                        </span><br><br>
                        
                        <span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                        <strong style="font-weight:bold;">
                        2.인증절차</strong><br> 
                        인증 신청 &#8658; 계약 체결 &#8658; 심사비 납부 &#8658; 서류 제출 &#8658; 1단계 심사 &#8658; 인증심의 (1단계) &#8658; 2단계 심사 &#8658; 인증 심의 (2단계) &#8658; 인증서 발행 &#8658; 사후심사 &#8658; 재인증 심사
                        </span><br><br>
                        
                        <span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                        <strong style="font-weight:bold;">
                        3.제3자 인증 프로세스</strong><br>
                        </span><br>
                        <div style="display:block;width:50%;margin:0 auto;">
                        <img src="./image/FDA_FSMA_04.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플2">
                        </div>
                        <span style="display:block;text-align:center;">미국 식품안전현대화법 대응 가이드북</span>
                        <br><br><br>
                        
                        <span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                        <strong style="font-weight:bold;">
                        4.공인된 제3자 인증의 면제 대상 ★</strong><br> 
                          - 특정 상황에서 외국 시설에서 제조한 알코올 음료<br>
                          - 수입시점에서 USDA가 감독하는 특정 육류, 가금류 및 계란제품<br>
                        </span><br><br>
					</dd>
				</dl>
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/FDA_FSMA_05.jpg" alt="FDA FSMA 제3자 인증 준비사항">
					</dt>
					<dd>
						<strong style="color:#1f2558"><span style="font-family: georgia;">FSMA</span> 제3자 인증 준비사항</strong>
				        <span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                          식품시설은 위해요소 분석과 위해를 기반으로 한 예방관리를 포함하는 식품안전시스템을 구축하고 실행해야 합니다. 또한 식품안전계획서를 반드시 서면으로 작성하고 식품안전계획서는 자격을 갖춘 식품예방관리전문가 (PCQI, Preventive    Control Qualified Individual)에 의해 검토되어야 합니다. <br><br>
                       
                          식품안전시스템에는 다음의 내용을 포함하는 식품안전계획을 설정하여야 합니다.<br><br>
                       
                          1. 위해요소 분석<br><br>
                          2. 예방관리 (공정, 식품 알레르기 유발물질, 위생, 공급망 및 기타, 회수계획)<br><br>
                          3. 예방관리의 감시 및 운영<br><br>
                          4. 시정조치 및 시정<br><br>
                          5. 검증<br><br>
                          
                          식품안전계획에는 회수계획을 세워 식품안전에 문제가 되는 제품에 대해서는 회수조치 가능하도록 작성해야 합니다. 이에 대응해 IGC는 미국시장에 수출하고 있거나 수출을 계획 중인 식품업체들을 위한 식품예방관리전문가 (PCQI) 교육과정 또한 마련하고 있습니다.
                     </span>
					</dd>
				</dl>
			</li>

			
			<li>
				<dl>
					<dt>
						<img src="./image/FDA_FSMA_06.jpg" alt="FDA FSMA 제3자 인증 준비사항">
					</dt>
					<dd>
						<strong style="color:#1f2558"><span style="font-family: georgia;">FSMA</span> 제3자 인증의 중요성</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       FSMA는 식품 안전의 중점을 예방에 둠으로써, 미국 및 미국 이외 국가의 식품 제조업자, 시설 및 수입업체에 새로운 사항들을 요구합니다. 따라서 미국 시장에 제품을 판매하고 유통하려면 새로운 요구사항을 준수해야 합니다. 이와 같이 FSMA에 대응해 미국시장에 식품 수출을 원활히 추진하기 위해서는 미국으로 식품을 수출하는 기업들의 세심한 준비가 필요합니다.
                        </span><br><br>
                        <!--------
                        <span style="font-family: georgia;">ISO</span> 9001을 비즈니스 도구로 사용한다면 다음과 같은 이점이 있습니다.<br><br>
                          <span style="font-size:1.2em">1.보다 효율적이고 효과적인 운영</span><br><br>
                          ------>
					</dd>
				</dl>			
			</li>
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_03.jpg">
					</dt>
					<dd>
						<strong style="font-family:georgia;color:#1f2558;">IGC의 역량</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                        &#10052; IGC는 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 3자 인증기관으로 인정받았습니다.<br><br> 
                        &#10052; IGC는 식품 시험소 운영 및 다양한 식품 관련 인증을 진행하고 있기에 식품안전 규정에 관한 광범위한 지식을 보유하고 있습니다. <br><br>
                        &#10052; IGC는 고객들을 위해 빠르고 정확한 서비스를 제공하며, 고객이 올바른 선택을 하고 FSMA 준수 서비스를 통해 실사를 입증하도록 도와드립니다. <br><br>
                        &#10052; IGC는 FDA FSMA 3자 인증의 선두기관으로서 빠르고 정확한 인증서비스를 제공합니다. <br>
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
		<span style="font-family:georgia;">IGC의 FSMA 관련 인정 카테고리는 다음 6가지로, 당사는 국내 식품 기업이 미국 수출을 하기 위해 다음 항목에 대한 인증 서비스를 제공하고 있습니다.</span><br><br><br>
			<ul style="display:inline-block;text-aling:left;">
				<li><p><em><strong>01</strong></em><span style="font-family: georgia;">Low Acid and Acidified Foods (산성식품)</span></p></li>
				<li><p><em><strong>02</strong></em><span style="font-family: georgia;">Fisheries/Seafood Products (수산식품)</span></p></li>
				<li><p><em><strong>03</strong></em><span style="font-family: georgia;">Fruit or Vegetable Juices, Other Beverages Including Water (과채주스)</span></p></li>
				<li><p><em><strong>04</strong></em><span style="font-family: georgia;">Starch Products (전분, 밀가루식품)</span></p></li>
				<li><p><em><strong>05</strong></em><span style="font-family: georgia;">Food Additives (식품 첨가제)</span></p></li>
				<li><p><em><strong>06</strong></em><span style="font-family: georgia;">Nuts and Edible Seed Products (견과, 씨앗류)</span></p></li>
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