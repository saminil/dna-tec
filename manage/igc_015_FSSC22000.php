<?php
	include_once('./_common.php');
$g5['title'] = '식품안전시스템/FSSC 22000';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
    
    
    /* (주)아이지씨인증원 사업영역=우리가 제공하는 서비스 시작  */	
    .partner_type2 {width: 100%;}/* 우리가 제공하는 서비스 => 전체 가로 폭 100% */
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
    
    /* (주)아이지씨인증원 사업영역=우리가 제공하는 서비스 종료  */
    
    
    

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
		<h1><span style="font-family: georgia;">FSSC</span> 22000</h1>
		<h2>식품안전 시스템 인증</h2>		
		<p style="font-family:georgia;display:inline-block;text-align:justify;font-size:1.2em">
            FSSC 22000 (Food Safety System Certification) 표준은 식품제조회사들에게 가장 영향력 있는 국제식품안전기구 (GFSI: Global Food Safety Initiative)가 식품산업 전반에 적합한 식품안전인증제도를 도입하기 위하여 승인한 식품 안전 표준입니다.<br><br>
                 
            세계 인구가 증가함에 따라 저렴하고 안전하며 양질의 식품에 대한 수요가 증가하고 있습니다. 이러한 요구를 충족시키기 위해 FSSC 22000은 신뢰할 수 있는 식품 안전 플랫폼을 식품 업계에 제공합니다.
            FSSC 22000은 ISO 22000을 기반으로 식품 및 그 성분의 공급자에 대한 분야별 선행요건 프로그램(PRPs)과 추가적인 FSSC 22000 요구사항을 조합한 것으로, 조직의 규모, 복잡성, 위치에 관계없이 모든 식품 제조기업에 적용됩니다. 또한, 수송 및 생산현장에서의 보관도 인증 범위에 포함됩니다. <br><br>
            </p>
            
             <div style="display:block;margin:0 auto;width:60%;">
		        <img src="./image/FSSC22000_01.jpg" alt="FSSC 22000 식품안전 시스템 인증">
	       </div><br><br>
         <p style="font-family:georgia;display:inline-block;text-align:justify;font-size:1.2em">   
            IGC는 자체적으로 FSSC 22000 인정을 획득한 기관으로써, 국내 인증원 중 가장 많은 FSSC 22000 인증 scope와 고객 수를 보유하고 있습니다.
            따라서, FSSC 22000 인증을 받은 식품 제조 업체는 GFSI 승인 규격의 국제적 수요 증가에 따라 바이어들로부터 많은 신뢰를 받을 수 있고, 특히 IGC에서 받은 FSSC 22000 인증서를 통해 신뢰성 있는 인증원으로부터 인증서를 획득하였다는 점을 증명함으로써 업체의 이미지 제고 및 경쟁력 강화에 도움이 될 수 있습니다.<br><br>
		</p>

		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/FSSC22000_05.jpg" alt="FSSC 22000 요구사항">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">FSSC</span> 22000 요구사항</strong>
						<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       FSSC 22000 요구사항은 다음과 같은 항목으로 구성되어 있습니다.
                       <br><br>
                       &#10049;	ISO 22000<br><br>
                       &#10049;	PRP (선행요건 프로그램) <br>
                            <p style="text-indent:1.3EM">-	ISO 22002-1 (식품 제조)<br></p>
                            <p style="text-indent:1.3EM">-	ISO 22002-4 (식품 포장재 제조)<br></p>
                            <p style="text-indent:1.3EM">-	PAS 220 (식품 도매 및 소매)<br><br></p>
                       &#10049;	FSSC 22000 추가 요구사항 <br>
                            <p style="text-indent:1.3EM">-	서비스의 관리<br></p>
                            <p style="text-indent:1.3EM">-	제품 라벨링<br></p>
                            <p style="text-indent:1.3EM">-	식품 방어<br></p>
                            <p style="text-indent:1.3EM">-	식품 사기 완화<br></p>
                            <p style="text-indent:1.3EM">-	로고 사용<br></p>
                            <p style="text-indent:1.3EM">-	알레르기 유발물질의 관리<br></p>
                            <p style="text-indent:1.3EM">-	환경 모니터링 (카테고리 C, I에 해당)<br></p>
                            <p style="text-indent:1.3EM">-	운송 및 배송 (카테고리 FI에 해당)<br><br></p>
                        
                       FSSC 요구사항은 FSSC 22000 웹사이트에 공개되어 있으며, 하기 url을 통해 확인하실 수 있습니다.<br><br>
                       <p><a href="https://www.fssc22000.com/wp-content/uploads/19.0528-FSSC-22000-Scheme-Version-5.pdf" target="_blank">< "FSSC 22000 요구사항(PDF파일)" 확인 바로가기 &#9756;Click! ></FSSC></a></p><br>
                       PDF 파일 url : <br>https://www.fssc22000.com/wp-content/uploads/19.0528-FSSC-22000-Scheme-Version-5.pdf <br>

                        </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/FSSC22000_02.jpg" alt="FSSC 22000 인증의 필요성 및 장점">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">FSSC</span> 22000 인증의 필요성 및 장점</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                       
                       
                            <strong style="font-weight:bold;">인증의 필요성</strong><br><br>
                             
                              1. 소비자의 식품에 대한 안정성 의식 증대 및 안전에 대한 정확한 관리 요구 증대<br>
                              2. 국내/외 바이어들이 식품 안전을 보증할 수 인증 요구에 따라 ISO 22000 등을 포괄할 수 있는 인증의 필요성 증대<br>
                              3. 식품안전에 따른 국제 상거래에 있어서의 무역장벽요소 대두<br>
                              4. 식품안전사고의 사전예방 및 비상사태에 대한 대응<br>
                              5. 식품관련 공급자, 내부 및 협력업체 등 관련자와의 효과적인 의사소통<br>
                              6. 식품안전 관리수준 향상 및 사전예방<br><br><br>
                            <strong style="font-weight:bold;">인증의 장점</strong><br><br>
                              1. 위생관리 시스템 효율성 극대화<br>
                              2. 국내/외 식품안전 규정 및 법규 강화에 따른 대응 용이<br>
                              3. 식품 관련 법률 준수<br>
                              4. 공급체인과의 의사소통 원활<br>
                              5. 식품 업계 종사자의 책임의식 상향화<br>
                              6. 식품과 관련한 다양한 프로그램을 통합적으로 운영 (HACCP, PRPs, Food Defense & Fraud)<br>
                              7. FSSC 22000 인증 유지에 따른 회사 이미지 제고, 신뢰성 향상 및 수출증대 효과<br>
                              
                        </span>

					</dd>
				</dl>			
			</li>
			<li>
				<dl>
					<dt>
						<img src="./image/FSSC22000_03.jpg" alt="FSSC 22000 IGC인증원의 역량">
					</dt>
					<dd>
						<strong style="font-family:georgia;">IGC의 역량</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                      아이지씨인증원은 글로벌 경쟁력을 기반으로 FSSC 22000 인증 외에 식품분야에 대하여 다양한서비스를 제공하고 있습니다.<br><br><br>
                      
                        1. FSSC 22000 Training Organization (FSSC 22000 Foundation 공식 지정 교육기관)<br><br>
                        2. ISO 22000<br><br>
                        3. Vegan 인증<br><br>
                        4. 식품시험(ISO 17025인정)<br><br>
                        5. FDA FSMA 3자 인증기관<br><br>
                        6. PCQI Lead Instructor 보유 (2명)<br><br>
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
		<span style="font-family:georgia;">IGC</span>는 다음과 같은 관련 서비스를 제공합니다.<br><br>
			<ul style="display:inline-block;text-aling:left;">
				<li><p><em><strong>01</strong></em><span><span style="font-family: georgia;">FSSC </span> 22000 인증</span></p></li>
				<li><p><em><strong>03</strong></em><span><span style="font-family: georgia;">FSSC</span> 22000 교육 (FSSC 22000 foundation 인정 기관)</span></p></li>
				<br>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
	
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>