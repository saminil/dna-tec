<?php
	include_once('./_common.php');
$g5['title'] = '미주 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_usa_food&beverage_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_usa_food&beverage_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_usa_food&beverage_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_usa_food&beverage_04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_usa_food&beverage_05.jpg') no-repeat center top;}
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">식음료품</span> / 미주 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            미국으로 식음료품 수출을 고려하시는 분들께서 FDA 등록에 관한 문의를 많이 주십니다. 그 중 등록 과정을 많이 궁금해 하십니다. 이번 포스트에서는 식음료품의 기준 및 FDA 승인 및 등록이 필요한지 여부에 대해 알아보도록 하겠습니다.
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg" style="width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:500px;">
				<div class="txt_area">
					<p class="tit">FDA의 식음료품 등록이란?</p>
					<ul style="display:block;text-align:justify;">
                      공중 보건 안전 및 생물 테러 대비 및 대응 법 (바이오 테러 법)에 의거하여 미국 식약청 (FDA Food & Drug Administration: www.fda.gov)은 식품 규제 기관으로써 미국 식품 공급 및 기타 식품 관련 비상 사태에 대한 위협 또는 실제 테러 공격으로부터 국민을 보호하기 위한 조치를 취하였습니다.<br><br>
                      &nbsp; &nbsp; &#9632; 의약품，식품，화장품，방사선기배출사전검사및，수입품수출품/수출품검사를 함제품의확보함.<br><br> 
                      &nbsp; &nbsp; &#9632; 미국시장의 수입통관시 대상품목(식품, 의약품등)의 강제승인 및 관리.<br><br>
                      &nbsp; &nbsp; &#9632; 수입통관시 부적격 판정을 받을경우, 미국내 합법적인 마케팅이 금지됨.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">FDA 등록대상 품목?</p>
					<ul style="display:block;text-align:justify;">
                      식품, 화장품, 의약품 및 의료기기(부속품 포함), 동물용 약품, 동물사료, 유아용 유동식, 식품첨가물, 저산성통조림, 산화식품 (단, 육류, 가금류 및 육가공품의 경우 농무부 위생검역국(FSIS, Food Safety & Inspection Service)에서 검사 및 규제 시행.
					</ul>
                
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">식을료품 FDA 수출 흐름도</p>
					<ul style="display:block;text-align:justify;">
                      &#9678; 공장들록(FFR)이 되어 있는지<br>
                      &#9678; 제품 성분 검토는 했는지<br>
                      &#9678; 영양분석 및 Nutrition Facts 라벨 작성 했는지<br>
                      &#9678; 저산성 상온 식품의 경우에 SID / FCE 신고를 했는지<br>
                      &#9678; 수산물의 경우에 GACCP 인증 및 관련 서면이 있는지<br>
                      &#9678; 건강식품의 경우에 미국 건강식품 cGMP의 규정을 준수하고 있는지<br>
                      &#9678; 일반 식품의 경우에 제조자는 인간용식품규정 (PDCHF)를 준수하는지<br>
                      &#9678; 신선농산물의 경우에 넝산물 규정 (Produce Safety Rule)을 준수하고 있는지<br>
                      &#9678; 소량의 육류, 계란, 우유 성분 (2%)이 포함 될 경우에 USDA관련 허가가 있는지 (*원칙적으로 한국산 육류는 미국에 수출금지 항목)<br>
                      &#9678; 미국의 수입자는 DUNS#를 가지고 있는지, FSVP (해외공급자 검증제도)를 하고 있는지<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC의 역량</p>
					<ul style="display:block;text-align:justify;">
                    &#9672; IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br> 
                    &#9672; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">관련 제공 서비스</p>
					<ul style="display:block;text-align:justify;">
                        <span style="font-weight:bold;color:#ff9900;">1) 식품 시설 등록</span><br>
                      미국에서 소비되는 식품, 사료를 제조, 가공, 포장, 보관하는 국내 및 해외 시설은 반드시 FDA 식품 시설 등록을 해야하며, 미국 유통을 위해 식품을 제조, 가공, 포장, 보관을 진행하기 전 반드시 FDA 식품 시설 등록을 마쳐야 합니다.<br><br>

                          <span style="font-weight:bold;color:#ff9900;">2) 해외 공급업체 인증 (FSVP)</span><br>
                      해외 공급업체 인증(FSVP)은 제조업체의 식품이 미국의 식품안전기준의 공정과정에 따라 생산된다는 것을 수입업자가 증명하도록 규정한 프로그램입니다. 미국으로 식품 및 음료를 수출하려는 업체는 반드시 미국 대리인을 지정하여 미국 식품 수출을 진행해야 합니다.<br><br>
                      
                          <span style="font-weight:bold;color:#ff9900;">3) FDA 건강 보조식품 라벨링</span><br>
                      의약품이 아닌 건강보조식품은 FDA 사전승인절차를 거칠 필요가 없으나, 한국과 달리 제품 광고에서 치료 효과가 있다는 식의 문구로 라벨이 표기돼 있을 경우 의약품으로도 취급될 수 있어 세심한 주의가 필요합니다. 건강 보조식품 라벨링 규정을 준수할 수 있도록 해드립니다.<br><br>
                      
                          <span style="font-weight:bold;color:#ff9900;">4) 미국 대리인 서비스</span><br>
                      미국에서 식품 또는 음료를 판매하고자 하는 외국 회사는 반드시 미국 대리인을 통해 절차를 진행하여야 합니다. 미국 대리인은 회사와 FDA 사이의 중개자 역할을 합니다. IGC는 풍부한 경험이 있는 미국 대리인 서비스를 제공합니다.<br><br>
                      
                          <span style="font-weight:bold;color:#ff9900;">5) FDA 식품 라벨링 검토</span><br>
                      미국으로 식품 수출시 식품 라벨링을 엄격히 준수해야 합니다. 미국 진출을 고려하고 계신 식품 제조업, 식품수출업 및 유통업에 종사하는 분들은 새로운 규제 및 관련법 개정 내용을 확인하고 식품 라벨링을 준비해야 합니다.<br><br>
                      
                          <span style="font-weight:bold;color:#ff9900;">6) FCE & SID 등록</span><br>
                      제품이 산성 또는 저산성 식품인 경우는 FCE & SID 등록 (식품 공장 등록 & 공정 등록)이 필수입니다. FDA 규정에 따라 산성화 식품과 저산성 식품은 반드시 식품공장 등록 및 공정등록을 사전에 등록을 해야 미국 수출이 가능합니다. IGC는 FCE & SID 등록 (식품 공장 등록 & 공정 등록)을 통해 FDA 규정을 준수하도록 도와드립니다.<br><br>
                      
                          <span style="font-weight:bold;color:#ff9900;">7) FDA 사전 신고</span><br>
                      미국은 식품을 이용한 테러를 예방하기 위해 바이오테러리즘 법(The Bioterrorism Act)을 제정하였습니다. 이에 미국에서 인간과 동물이 섭취하는 식품을 제조/처리, 포장, 보관하는 미국 내/외 시설을 FDA 시설 등록(Facility Registration) 하도록 의무화하였고, FDA 시설 등록하지 않은 식품이 수입된 경우, 시설 등록될 때까지 제품이 입국항에 억류되거나 제 3의 장소로 옮겨질 수 있습니다. FDA가 정의한 사전 신고 대상 수입 식품에 해당되는지 여부를 도와 드리며, FDA 사전 신고 및 시설 등록을 돕습니다.<br><br>

					</ul>
					
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

				</div>
			</div>
			
		</div>  <!--------//  div class="business_info" 종료  --------------->
		
	</div>
	
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>(주)아이지씨인증원 사업영역</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
				<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
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