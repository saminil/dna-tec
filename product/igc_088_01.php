<?php
	include_once('./_common.php');
$g5['title'] = '미주 제품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>


<?php
	/*
		CSS파일 로드(25~26라인)
		구매하신 (주)아이지씨인증원에 사용하신다면 적용하지 않아도 됩니다.
		(주)아이지씨인증원가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!----link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet"---->
<!-----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"----->



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
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }


	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_us_electronic_05.jpg') no-repeat center top; }
    
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    
    
    /* (주)아이지씨인증원 사업영역 시작  */	
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
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

		.business_type3 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type3 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
	}

	@media screen and (max-width:480px){

		.business_type3 .business_info .backImg {width:100%;}
		.business_type3 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type3 .business_info .backImg .txt_area{ height:auto; padding:15px;}


	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">

	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">전자 및 방사선 장치</span> / 미주 제품인증 소개</h1>
		
		<h2 class="sub_txt">
            <span style="display:block;font-weight:bold;text-align:left;">
              FDA 란? <br>
            </span> 
        </h2> 
            <ul style="display:block;text-align:justify;">
               미국에서 의료기기는 "Federal Food, Drug & Cosmetic Act : 연방 식품, 의약품, 화장품법"에 의해 식품, 의약품, 화장품 등과 함께 규제·관리되고 있습니다. 제품에 대한 사전검사 및 승인, 사후검사를 통한 부적합 제품의 제재 그리고 수입품/수출품 검사를 통해 해당 제품의 안전성을 확보합니다. <br>

               만약 FDA에서 요구하는 규정을 준수하지 않을 시 미국 내 유통 및 판매가 불가하며 판매 중인 제품이라도 의료기기 규정에 만족되지 않는 제품은 FDA 사후 관리에 의해 시정조치, 리콜, 제품 압류나 폐기 처분, 형사처분 등이 이루어 질 수 있습니다<br><br>
            </ul>
            

            <h2 class="sub_txt">
            <span style="display:block;font-weight:bold;text-align:left;">
              관련규정 <br>
            </span> 
            </h2>
            <ul style="display:block;text-align:justify;">
               &#8284; FD & C Act (Federal Food, Drug & Cosmetic Act : 연방 식품, 의약품, 화장품법)<br>
               &#8284; 21 CFR (The Code of Federal Regulations : 연방법규집)<br><br>
            </ul>
            
            
            <h2 class="sub_txt">
            <span style="display:block;font-weight:bold;text-align:left;">
              적용 범위 <br>
            </span> 
            </h2>
            <ul style="display:block;text-align:justify;">
               &#8284; 식품, 화장품, 의약품 및 의료기기(부속품 포함), 동물용 약품, 동물사료, 유아용 유동식, 식품첨가물, 저산성통조림, 산화식품 (단, 육류, 가금류 및 육가공품의 경우 농무부 위생검역국(FSIS, Food Safety & Inspection Service)에서 검사 및 규제 시행<br><br>
               &#8284; 방사선기기(전자제품) : 초음파 치료장비, Sunlamp, X-rays, TV수신기등<br><br><br>
            </ul>
            
            <h2 style="position:relative;margin:0 auto;width:65%;">
              <img src="images/product_us_electronic_02.jpg" alt="전자 제품인증" >
            </h2>
              
              <br><br>
            
            <span style="position:relative;display:block;font-weight:bold;font-size:1.6em;color:#336666;text-align:center;">전자 및 방사선 장치</span>
            <hr style="border-top: 1px solid #999999;display:block;margin-bottom:2px;margin-top:10px;width:100%;">   
               <br>
                <span style="font-weight:bold;">용구 및 방사선 건강평가 (CRDH)란?</span> <br>
            <ul style="display:block;text-align:justify;">    
                &#8280; 방사선의 다양하고 잠재적인 위험성에 근거하여 역학적인 실험조사를 하여 안전한 방사선 사용을 권장합니다.<br>
                &#8280; 방사선을 방출하는 용구와 제품을 평가할 수 있도록 그 측정 방법과 도구를 개발합니다.<br>
                &#8280; 의료용구의 안전과 효능도에 따라 분류(class I, class II, class III) 하여 판매 전 신고 및 승인을 받도록 합니다.<br>
                &#8280; 방사선을 방출하는 용구에 대한 실무표준을 개발하여 불필요한 방사선 노출 방지를 위해 사용지침을 마련합니다.<br>
                &#8280; 의료용구와 방사선 방출 제품에 대한 정확한 정보와 근거를 소비자나 제조업체에 교육을 시행합니다.<br> <br>
                <br>
             </ul>   

              <h2 style="position:relative;margin:0 auto;width:65%;">
                 <img src="images/product_us_electronic_04.jpg" alt="전자 제품인증" >
              </h2>
              <br><br>
            
             <span style="font-weight:bold;">용구 및 방사선 건강평가 (CRDH)란?</span><br><br>
             <ul style="display:block;text-align:justify;">     
                   시장 접근 번호는 FDA의 데이터 베이스의 보고서에 대한 유일한 식별 번호입니다. 이 번호는 CDRH 확인 서신에서 제공합니다. 시장 접근 번호는 특정 보고에 대한 의사소통을 촉진시킵니다. 왜냐하면 모든 기관들은 문서가 논의가 되었는지 파악하기 위해 이 시장 접근 번호를 사용할 수 있기 때문입니다. 추가적으로, FDA 수입부서 직원이 제조업자가 최소한으로 수입되는 제품에 대한 요구사항이 기록되었는지 확인하기 위해 시장 접근 번호를 사용합니다.<br><br>

                   시장 접근 번호는 보고서가 CDRH의 서류 보관실로 수신된 것을 의미할 뿐 아니라 제조 업체 및 제품에 대한 정보의 일부는 FDA의 데이터베이스에 입력된 것을 의미합니다.<br><br>

                   확인 서신은 보고서 제출자가 제공 한 주소로 반환됩니다. 오직 한 부의 복사본만이 배송됩니다. 제출자가 제조업자와 다른 경우, 편지는 보고서 제출자에게만 발송됩니다. 제출자는 제조업자에게 복사본을 보낼 수 있습니다.<br><br>

                   제조업자가 제품 보고서, 요약 보고서, 연간 보고서 또는 문의 전 보완 보고서를 보낸 이후, 최소 4주일이 소요될 것입니다.<br><br> 

                   제조업체가 전자 보고서 형식으로 제출한 경우, CDRH 데이터베이스의 성공적으로 실리자 마자 전자메일 확인 메시지가 발송될 것입니다. 일반적으로 전자 보고서는 수신으로부터 1일 안에 데이터베이스에 실릴 것입니다.<br><br>

                   제조업자는 제품이 미국 상업에 도입되기 이전에 CDRH에 보고서를 제출해야 합니다. 확인 서신과 시장 접근번호는 이러한 보고서가 CDRH에 의해 수신되었다는 증거입니다. 만약 제품이 다른 나라에서 만들어진 후 미국에 수입된 경우, 수입 승인 절차에서는 세관 신고서 FDA 2877양식에 시장 접근번호의 식별을 요구합니다.<br><br> 
                   
                   
                 <h2 style="position:relative;margin:0 auto;width:65%;">
                    <img src="images/product_us_electronic_01.jpg" alt="전자 제품인증" ><br>
                <p>This article addresses the impacts of non-ionizing radiation as shown in the more detailed chart from <a href="www.safespaceprotection.com" style="color:blue;">www.safespaceprotection.com</a> below.</p>
                 </h2>
                 
                 <br><br>
                   
                   
                   전자회로를 포함하고 방사선을 방출하는 모든 제품을 전자 제품이라고 합니다. X방사선(엑스레이), 극 초단파, 전파(고주파(RF)), 레이저, 가시 광선, 음파, 초음파 및 자외선은 전자 제품으로부터 방출되는 다양한 방사선 유형의 몇 가지 예시입니다. 진단용 X선 시스템, 레이저 제품, 레이저 광선 쇼 및 전자 레인지는 방사선을 배출하는 다양한 전자 제품 중 몇 가지 예입니다. <br><br>


                   미국(U.S.) 식약청(FDA) 방사선 보건 및 장치 센터는 방사선을 방출하는 전자 제품을 규정하는 것에 대한 책임을 지닙니다. CDRH는 위험하고 불필요한 전자 제품 방사선 노출 로부터 대중을 보호하는 것을 목표로 둡니다. 대부분의 전자 제품의 경우 안정 규제는 CDRH와 주 규제 기관 사이에서 분할됩니다. CDRH는 제품의 제조를 단속하고 주 규제 기관은 제품의 사용을 단속합니다.<br><br>


                   연방법 타이틀 21, J 조항, 파트 1000에서 1050(21 CFR 1,000에서 1,050 사이)는 방사선을 방출하는 전자 제품의 제조업자에 대한 안정 규제를 포함합니다. 제조업자는 위험하고 불필요한 방사선을 방출하지 않는 제품을 생산하는 것에 대한 책임을 지닙니다. 모든 제조업자들은 반드시 타이틀 21 CFR 1000, 1002, 1003, 1004 및 1005에서 요구하는 해당 요구사항에 대하여 부합하여야 합니다. 만약 제조업자의 제품에 의무적인 방사선 안전성 수행 규범이 적용되는 경우, 이러한 규범은 21 CFR 1020에서 1050에서 찾을 수 있습니다. <br><br>
 
 
                   위 FDA 홈페이지에서 언급한 바와 같이, 제조업자가 미국 내에 그들의 제품을 판매하고자 하는 경우, FDA는 제조업자에게 그들의 제품이 요구사항에 부합되는지 요청하고 확인할 것입니다.<br><br> 

                   
              </ul>
                <h2 style="display:block;text-align:center;">
        			<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
                </h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
			<div class="backImg">
				<div class="txt_area">
				
					<p class="tit">IGC 역량</p>
					<ul style="display:block;text-align:justify;">
                      &#8281; IGC 는 미국 자회사인 Pats corp 를 통해 차별화 된 fda 등록 컨설팅 서비스를 제공합니다. <br><br>
                      &#8281; Pats Corp은 미국 LA에 위치하였으며, 미국 FDA의 규정준수 및 cGMP 의 국내외 업체를 상대로 양질의 지원업무를 하고 있습니다. <br><br>
                      &#8281; IGC는 고객에게 발생할 수 있는 규제적 요구사항 전반에 대하여 문제가 발생하기 이전에 예방하는데 초점을 맞추고, 고객에게 기술 정보와 최고의 규정준수 서비스를 제공하며, 고객이 효율적이고 성공적으로 미국시장으로 진출하여 사업을 확장하는데 최선을 다해 지원하고 있습니다. <br><br>
                      &#8281; 우리는 끊임없이 변화하는FDA 법적 요구사항에 대한 정확하고 확실한 최신의 정보를 제공할 것이며 다음과 같은 항목의 서비스를 제공합니다.<br><br> 
					</ul>

				</div>
			</div>
			
			
		</div>  <!--------//  div class="business_info" 종료  --------------->
		
	</div>
	
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>의료 기기</span></p></li>
				<li><p><em><strong>02</strong></em><span>전자 및 방사선 장치</span></p></li>
				<li><p><em><strong>03</strong></em><span>의약품</span></p></li>
				<li><p><em><strong>04</strong></em><span>식음료품</span></p></li>
				<li><p><em><strong>05</strong></em><span>건강 보조식품</span></p></li>
				<li><p><em><strong>05</strong></em><span>화장품</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>

	
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>

<!-----?php
	include "../include/tail.php"; 
?----->