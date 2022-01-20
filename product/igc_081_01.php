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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_uasia_food_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_uasia_food_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_uasia_food_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_uasia_food_04.jpg') no-repeat center top; }

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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">식품</span> / 유라시아 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;font-size:0.9em;">
            
            유라시아 지역으로 식품을 수출하고자 하는 경우 해당 기술규정에 따른 적합성 준수를 증명하는 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다. <br><br>
            
            경제연합/관세 동맹에 가입된 국가 (러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)로 수출할 경우 Technical Regulation of Customs Union (TRCU) 규정에 따른 EAC 인증 또는 GOST 인증을 받아야 하며 우즈베키스탄 등 기타 유라시아 국가로 수출할 경우에는 국가별 인증을 받아야 합니다.<br>
            
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">유라시아 제품인증 (EAC)</p>
					<ul style="display:block;text-align:justify;">
						TRCU는 Technical Regulation of Customs Union의 약어로 러시아를 중심으로 한 관세동맹(Customs Union)의 기술규정을 의미합니다.<br><br>
                       
                        TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시안 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시안 경제연합 “EEU, Eurasian Economic Union”에서 발효 한 통합 인증제도 입니다.<br><br>

                        현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어 있으며, TRCU인증은 유라시안 경제 위원회 결정을 따라 규정된 인증절차를 따릅니다. <br><br>

                        인증서 상에는 EAC 마크가 부착되며 이는 Eurasian Conformity를 뜻합니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">유라시아 제품인증 (GOST)</p>
					<ul style="display:block;text-align:justify;">
					    GOST는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.<br><br>
					    
                        현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은GOST-K 등으로 구분 지어 불리고 있습니다.<br><br>

                        관세동맹국가 간 발효된 통합 인증제도인 EAC의 도입 이후 해당국가 내에서 GOST인증 비중은 예전에 비하여 크게 줄었습니다. 하지만 아직 관세동맹국간에 협의가 이루지지 않은 강제인증 품목들에 한해서는 여전히 수입통관 시 GOST 인증이 요구됩니다.<br><br>

					</ul>
                
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">인증 진행 절차</p>
					<ul style="display:block;text-align:justify;">
                      TRCU EAC 및 GOST 인증 절차<br><br>
                      &nbsp; &nbsp; 1. 인증기관에 신청서 및 제품 관련 서류 제출<br><br>
                      &nbsp; &nbsp; 2. 서류 검토<br><br>
                      &nbsp; &nbsp; 3. 적용되는 인증서 유형 확인<br><br>
                      &nbsp; &nbsp; 4. 샘플 시험 및 공장심사 여부 확인<br><br>
                      &nbsp; &nbsp; 5. 견적서 발행 및 계약<br><br>
                      &nbsp; &nbsp; 6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행<br><br>
                      &nbsp; &nbsp; 7. 공장심사 필요 시, 심사 진행<br><br>
                      &nbsp; &nbsp; 8. 인증서 초안 발행 및 고객 확인<br><br>
                      &nbsp; &nbsp; 9. 인증서 발행<br><br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC의 역량 </p>
					<ul style="display:block;text-align:justify;">
                       &#10025; IGC는 여러 강점을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.<br><br>
                       &nbsp; &nbsp; ⁙ 다양한 분야의 인증 사업을 통해 확보한 지식과 기술력을 바탕으로 한 경쟁력 있는 서비스 제<br><br>
                       &nbsp; &nbsp; ⁙ 경쟁력 있는 인증 비용<br><br>
                       &nbsp; &nbsp; ⁙ 신속한 인증 서비스 진행을 통한 최소한의 기간 소요<br><br>
                       &nbsp; &nbsp; ⁙ 자회사를 통한 유라시아 이외 분야의 각종 시스템 및 제품 인증에 대하여 One Stop Service 제공<br><br>

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
			<br>
			<span style="font-weight:bold;font-size:120%;">EAC 인증</span><br><br>
				<li><p><em><strong>01</strong></em><span>5년간 유효한 EAC 인증서 공인인증기관에서 발행 </span></p></li>
				<li><p><em><strong>02</strong></em><span>Eurasia Representative/EU대리인</span></p></li>
				<li><p><em><strong>03</strong></em><span>샘플 유라시아 국가에 발송 및 해당 국가 시험소에서 시험 실시 </span></p></li>
				<li><p><em><strong>04</strong></em><span>인증에 필요한 언어 통번역</span></p></li>
			</ul>
			<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
			<ul>
			<br>
			<span style="font-weight:bold;font-size:120%;">GOST 인증</span><br><br>
				<li><p><em><strong>01</strong></em><span>최대 3년까지 유효한 GOST 인증서 공인인증기관에서 발행 </span></p></li>
				<li><p><em><strong>02</strong></em><span>Eurasia Representative/EU대리인</span></p></li>
				<li><p><em><strong>03</strong></em><span>샘플 유라시아 국가에 발송 및 해당 국가 시험소에서 시험 실시 </span></p></li>
				<li><p><em><strong>04</strong></em><span>인증에 필요한 언어 통역/번역</span></p></li>
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