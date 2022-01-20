<?php
	include_once('./_common.php');
$g5['title'] = '유라시아 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_eurasia_cosmetic00_cosmetic.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_eurasia_cosmetic02_gostdoc.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_eurasia_cosmetic04_stateregistrationcertificate.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_eurasia_cosmetic11_cosmetic.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_eurasia_cosmetic01_eacdoccertificate.jpg') no-repeat center top; }
    
    .business_type3 .business_info .backImg:nth-child(6){background:url('images/product_ce-mdd_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(7){background:url('images/product_eurasia_cosmetic03_gostvoluntary.jpg') no-repeat center top; }

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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">화장품 (국가위생등록)</span><br>
		EAC, GOST 인증 및 State Registration Certificate</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
             유라시아 지역으로 화장품을 수출하고자 하는 기업은 해당 기술규정에 따른 적합성 준수를 증명하는 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다.<br><br>
             
             유라시아 경제연합에 가입된 국가(러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)로 수출할 경우 TRCU 규정에 따른 EAC 인증 또는 State Registration Certificate를 받아야 하며, 우즈베키스탄 등의 기타 유라시아 국가로 수출할 경우에는 국가별 GOST 인증을 받아야 합니다.<br><br>

             화장품에 대한 인증은 제품 특성에 따라 EAC, GOST 및 State Registration Certificate로 구분됩니다.<br><br>
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">1. EAC</p>
					<ul style="display:block;text-align:justify;">
						
						TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시아 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시아 경제연합 “EAEU, Eurasian Economic Union”에서 발효한 통합 인증 제도입니다.<br><br>
						
                        &#10049;	TRCU EAC 적용 품목 (화장품)<br>
                            &nbsp; &nbsp; &#8278; TR СU 009/2011 On safety of cosmetics and perfumes 향수 및 화장품<br><br>
                            
                        &#10049;	EAC 인증서 유형 (화장품)<br>
                            &nbsp; &nbsp; &#8278; DoC (Declaration of Conformity): 비교적 위험성이 작은 제품군이 해당하며, 일부 제품은 서류심사만으로 인증서 발급 가능합니다. 화장품은 EAC DoC에 해당합니다.<br>
					</ul>
					<br>
					<ul style="display:block;text-align:justify;">
						<span style="font-weight:bold;font-size:120%;"> &#8281; 인증 절차</span><br><br>
                        1.제출서류 : 신청서, 제품 매뉴얼, HS Code, 기 보유 시험성적서, 기 보유 인증서 등 <br>
                          &nbsp;  (제출서류는 러시아어로 작성되어야 함)<br><br>
                        2.샘플시험 : 제품에 따라 샘플 제출 및 시험 여부가 결정됨. 화장품의 경우 샘플시험 실시<br><br>
                        3.공장심사 : 없음<br><br>
                        4.소요기간 : 2주 (샘플발송 및 샘플시험기간 제외)<br><br>
                        5.인증서 유효기간 : 5년 (Serial Production Certification)<br><br>
                        6. 인증비용 : 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함<br><br>
					</ul>
					
					<ul style="display:block;text-align:justify;">
						<span style="font-weight:bold;font-size:120%;"> &#8281; 인증 정보</span><br><br>
                        &#9637; 제출서류 : 신청서, 제품 매뉴얼, HS Code, 기 보유 시험성적서, 기 보유 인증서 등<br> 
                                &nbsp; &nbsp; (제출서류는 러시아어로 작성되어야 함)<br><br>
                        &#9637; 샘플시험 : 제품에 따라 샘플 제출 및 시험 여부가 결정됨. 화장품의 경우 샘플시험 실시<br><br>
                        &#9637; 공장심사 : 없음<br><br>
                        &#9637; 소요기간 : 2주 (샘플발송 및 샘플시험기간 제외)<br><br>
                        &#9637; 인증서 유효기간 : 5년 (Serial Production Certification)<br><br>
                        &#9637; 인증비용 : 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함<br>
					</ul>
                    <br>
                    <ul style="display:block;text-align:justify;">
						<span style="font-weight:bold;font-size:120%;"> &#8281; EAC 인증 절차 (화장품 DoC)</span><br><br>
                       1. 인증기관에 신청서 및 제품 관련 서류 제출<br><br>
                       2. 서류 검토<br><br>
                       3. 적용되는 인증서 유형 확인<br><br>
                       4. 견적서 발행 및 계약<br><br>
                       5. 샘플 발송 후 시험 및 시험 성적서 발행<br><br>
                       6. 인증서 발행<br><br>

					</ul>
					
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg" style="width:100%; margin-top:0; float:none; margin-left:0px; padding-top:850px;">
				<div class="txt_area">
					<p class="tit">2. GOST</p>
					<ul style="display:block;text-align:justify;">
					  GOST (ГОСТ)는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.<br><br>
					
                      현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은GOST-K 등으로 구분지어 불리고 있습니다.<br><br><br>

                      <span style="font-weight:bold;font-size:120%;"> &#8281; GOST 적용 품목 (화장품)</span><br><br>
                      유라시안 관세동맹국가간 발효된 통합 인증제도의 도입 후, GOST 인증 비중은 예전에 비하여 크게 줄어들었지만, 아직 동맹국 간 협의가 이루지지 않은 강제인증 품목은 GOST 인증을 받아야 합니다.<br><br>
                    
                      화장품을 유라시아 경제연합 소속국가(러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)에 수출하는 경우에는 EAC DoC 또는 State Registration Certificate (국가위생등록)이 필수적이며 GOST 인증은 포함되어 있지 않습니다. 하지만 경제연합 국가 이외의 유라시아 국가(우즈베키스탄 등)으로 수출하는 경우에는 각 국가별 GOST 인증 또는 국가내의 위생등록이 요구됩니다.<br><br>
					</ul>
					
					<ul style="display:block;text-align:justify;">
                     <span style="font-weight:bold;font-size:120%;"> &#8281; GOST 인증서 유형</span><br><br>
					  &#9639;	GOST DoC (Declaration of Conformity)<br><br>
                      &#9639;	GOST Voluntary (자발적 GOST)<br><br>
                      &#9639;	GOST Voluntary는 의무적으로 GOST 인증을 받아야 하는 제품은 아니지만 제품이 적용 규정과 지침에 따라 만들어 졌음을 증명하는 인증서로, 주로 EAC 인증을 받는 기업이 홍보, 신뢰 확보 등을 이유로 GOST Voluntary를 추가적으로 신청하여 받고 있습니다. GOST Voluntary 인증서의 추가적인 확보는 귀사의 관리 능력을 보다 명확히 보여주는 기대 효과를 가져와 수출 증대 효과를 확보해 줄 것입니다.<br><br>
					</ul>
					
					<ul style="display:block;text-align:justify;">
                     <span style="font-weight:bold;font-size:120%;"> &#8281; 인증 정보</span><br><br>
                      &#9639;	제출서류: 신청서, 제품 매뉴얼, HS Code, 기 보유 시험성적서, 기 보유 인증서<br>
                                &nbsp; &nbsp; (제출서류는 러시아어로 작성되어야 함)<br><br>
                      &#9639;	샘플시험: 제품에 따라 샘플 제출 및 시험 여부가 결정됨. (GOST Voluntary 인증 경우, 화장품의 샘플시험을 실시하지만, EAC 인증 절차에서 실시했기 때문에 추가 시험은 필요하지 않음)<br><br>
                      &#9639;	공장심사: 없음<br><br>
                      &#9639;	소요기간: 2주 (샘플발송 및 샘플시험기간 제외)<br><br>
                      &#9639;	인증서 유효기간: 3년 (Serial Production Certification)<br><br>
                      &#9639;	인증비용: 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함<br><br>
					</ul>
					
					<ul style="display:block;text-align:justify;">
                     <span style="font-weight:bold;font-size:120%;"> &#8281; GOST 인증 절차 (화장품)</span><br><br>
                       1. 인증기관에 신청서 및 제품 관련 서류 제출<br><br>
                       2. 서류 검토<br><br>
                       3. 적용되는 인증서 유형 확인<br><br>
                       4. 견적서 발행 및 계약<br><br>
                       5. 샘플 발송 후 시험 및 시험 성적서 발행<br><br>
                       6. 인증서 발행<br><br>
					</ul>
                
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
					
				</div>
			</div>
			
			<div class="backImg" style="width:100%; margin-top:0; float:none; margin-left:0px; padding-top:870px;">
				<div class="txt_area">
					<p class="tit">3. State Registration Certificate (국가위생등록)</p>
					<ul style="display:block;text-align:justify;">
						기존 국가별로 발행되던 위생등록증이 관세동맹국에 의해 2010년 채택된 Decision of CU commission No.299에 의거하여 하나로 통합되었습니다.<br><br>
						
                        하나의 인증서로 유라시아 경제연합 국가 (러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)에서 모두 사용 가능합니다.<br><br>
					</ul>
							
					<ul style="display:block;text-align:justify;">
                     <span style="font-weight:bold;font-size:120%;"> &#8281; State Registration Certificate 대상 제품 (화장품)</span><br><br>
                      성분, 기능, 목적에 따라 특수 화장품으로 분류되는 화장품은 국가위생등록증을 필수로 받아야 합니다.<br><br>
                      &#10017;	태닝을 위한 제품<br>
                      &#10017;	미백 제품<br>
                      &#10017;	타투용 제품<br>
                      &#10017;	인티메이트 케어<br>
                      &#10017;	개인이 유해 인자의 영향으로 부터 피부를 보호하기 위한 용도의 향수나 화장품<br>
                      &#10017;	유아용 화장품 (14세 이하의 어린이를 위한 제품)<br>
                      &#10017;	염색, 탈색 제품<br>
                      &#10017;	파마, 헤어 스트레이트를 위한 제품<br>
                      &#10017;	나노물질을 사용한 향수 및 화장품 (나노물질: 불용성 또는 체내 안정성 물질이며, 내부 또는 외부의 입자 크기가 1~100nm의 범위 내로 특별히 제조된 것)<br>
                      &#10017;	제모 제품<br>
                      &#10017;	필링제 (화학적 필링. 각질 제거제를 사용하여 표피의 표면 세포를 제거하기 위한 제품)<br>
                      &#10017;	불소 함량이 0.15% 이상인 불소 구강 위생 제품 (구강위생용 액상제품은 0.05% 이상)<br>
                      &#10017;	산화 수소가 들어간 치아 미백 제품 또는 과산화수소로 농축된 과산화 아연과 과산화 요소를 함유하며, 과산화 수소를 생성하는 다른 구성품들 (0.1~6.0%)<br>
					</ul>

					<ul style="display:block;text-align:justify;">
                    <span style="font-weight:bold;font-size:120%;"> &#8281; State Registration Certificate 인증 정보</span><br><br>
                     &#10017; 제출서류: 신청서, 제품 매뉴얼, MSDS, 제품 및 라벨 사본(사진), 기 보유 시험성적서, 기 보유 인증서 (제출서류는 러시아어로 작성되어야 함)<br><br>
                     &#10017; 샘플시험: 있음<br><br>
                     &#10017; 공장심사: 제품에 따라 공장심사가 요구될 수 있으며, 견적을 통해 심사 M/D와 심사 비용이 결정됨<br><br>
                     &#10017; 소요기간: 4~6주 (샘플발송 및 샘플시험기간 제외)<br><br>
                     &#10017; 인증서 유효기간: 영구 (인증서에 등록된 해당제품이 단종될 때까지 유효)<br><br>
                     &#10017; 인증비용: 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함<br><br>
					</ul>
					
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
					
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">4. 화장품 시험</p>
					<ul style="display:block;text-align:justify;">
                      인증 또는 국가위생등록을 위해 제출한 제품 샘플은 유라시아 국가내의 공인된 시험소에서 다음에 대한 시험을 실시합니다.<br><br>
                      &#10017; 물리적, 화학적 분석 시험<br><br>
                      &#10017; 미생물 검출 시험<br><br>
                      &#10017; 독성 시험<br><br>
                      &#10017; 위생 검사<br><br>
                      &#10017; 기타 필요한 시험 및 검사<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
				
			</div>
			
			<div class="backImg" style="width:100%; margin-top:0; float:none; margin-left:0px; padding-top:850px;">
			    <div class="txt_area">
			        <div class="txt_area">
					<p class="tit">5. 왜 중요한가?</p>
					<ul style="display:block;text-align:justify;">
                     유라시아 지역으로 상품을 수출하고자 하는 기업은 해당 기술규정에 따른 적합성 준수를 증명하는 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			    </div>
			</div>
			
			
			<div class="backImg" style="width:100%; margin-top:0; float:none; margin-left:0px; padding-top:360px;">
				<div class="txt_area">
					<p class="tit">6. IGC의 역량</p>
					<ul style="display:block;text-align:justify;">
                      IGC인증기관은 RUS-TEST PACIFIC인증기관과 협력하여 고객과 이해관계자들에게 경쟁력 있는 최고의 가치를 제공하여, 지속적 동반 성장을 통해 세계적인 인증기관으로 거듭나고 있습니다.<br><br>
                      IGC는 다음을 준수합니다.<br>
                      • 법적 요구사항 준수<br><br>
                      • 팀워크 및 조직원간의 연대<br><br>
                      • 성실성과 공정성<br><br>
                      • 사회적 및 환경적 책임<br><br> 
                      • 인증 및 등록 서비스 제공 업체로서의 지식과 학습을 통한 지속적인 발전과 개선활동<br><br>
					</ul>
                    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
				
			</div>
			
			<div class="backImg"  style="width:100%; margin-top:0; float:none; margin-left:0px; padding-top:870px;">
				<div class="txt_area">
					<p class="tit">7. 왜 IGC인가? </p>
					<ul style="display:block;text-align:justify;">
                     IGC는 여러 강점을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.<br>
                     &#10020;	다양한 분야의 인증 사업을 통해 확보한 지식과 기술력을 바탕으로 한 경쟁력 있는 서비스 제공<br>
                     &#10020;	경쟁력 있는 인증 비용<br>
                     &#10020;	신속한 인증 서비스 진행을 통한 최소한의 기간 소요<br>
                     &#10020;	자회사를 통한 유라시아 이외 분야의 각종 시스템 및 제품 인증에 대하여 One Stop Service 제공<br>

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
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>5년간 유효한 EAC 인증서 러시아 공인인증기관에서 발행 </span></p></li>
				<li><p><em><strong>02</strong></em><span>Eurasia Representative/EU대리인</span></p></li>
				<li><p><em><strong>03</strong></em><span>샘플 유라시아 국가에 발송 및 러시아 시험소에서 시험 실시 </span></p></li>
				<li><p><em><strong>04</strong></em><span>인증에 필요한 러시아어 통번역</span></p></li>
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