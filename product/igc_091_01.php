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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_dietarysupplementinusa_04.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_dietarysupplementinusa_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_dietarysupplementinusa_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_dietarysupplementinusa_01.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_dietarysupplementinusa_01.jpg') no-repeat center top;}
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">건강 보조 식품</span> / 미국 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            의회는 1994년 건강 보조 식품 건강 교육법(DSHEA)에서 ‘건강 보조 식품’이란 용어를 정의하였습니다. 건강 보조 식품이란 사람이 건강한 삶을 유지하는데 있어서 매일 필요한 성분(비타민, 미네랄, co-enzyme, 탄수화물, 지방, 단백질 등)들을 우리가 매일 섭취하는 음식으로 적당량을 섭취하기에는 부족한 영양소를 보충해주는 식품들을 말합니다. 
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">FDA(Food and Drug Administration) 승인</p>
					<ul style="display:block;text-align:justify;">
						모든 Dietary Supplement는 식품으로 분류되며 FDA의 관리를 받게 됩니다. 효과나 안전성에 대하여 개발사는 자체적으로 책임이 있지만, 의약품과는 다르게 시판전에 FDA 승인을 받아야 하는 절차는 없습니다. (단, 새로 개발된 원료일 경우는 제외) 모든 Dietary Supplement에는 ‘These statements has not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease’라는 문구가 반드시 표기되어야 하며 어느 특정한 질병의 이름을 사용하는 문구를 선전광고나 제품의 겉포장에 쓰지 못합니다. 또한, FDA라는 단어를 상업적 목적으로 광고에 이용하는 것은 위법이며, FDA는 강력한 제제조치를 취하게 됩니다. <br><br>
						
                        Dietary Supplement에서의 FDA 승인은 수입 허가 승인으로써 외국에서 수입해 들여오는 식품들은 모두 중금속 검사, 오염물 검사, 세균 검사, 농약 검사 등 소비자들이 먹어서 해로운 물질이 들어있지 않다는 실험결과를 조사하여 안정성을 인정해 식품으로 수입을 허가하는 것입니다. 이 안정성 검사는 FDA가 직접 시행하여 결과를 인정하는 것이 아니며 수입자들이 제출한 서류에 의하여 허가를 승인합니다.<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">우수 제조 관리 기준</p>
					<ul style="display:block;text-align:justify;">
                       미국 주 또는 영토, 콜롬비아 지역이나 푸에르토 리코 연합으로 수입되거나 수입을 제안받은 건강 보조 식품을 생산, 라벨링 및 보유하고 있는 경우, DS CGMP(현재의 건강 보조 식품 우수관리기준)이 적용됩니다. 소매 시설 설립에 창고 또는 소매업자를 위한 기타 저장 시설 및 직접적으로 개인 고객에게 판매할 수 있는 기타 저장 시설은 포함되지 않습니다. <br><br>
                       1)	Labeler인 경우, DS CGMP 규정은 아래와 같습니다.<br>
                           &nbsp; &nbsp; &#9673; 일괄 생산 기록을 수립하기 위해 21 CFR111.255 요구 사항을 충족해야 합니다.<br> 
                           &nbsp; &nbsp; &#9673; 인원, 시설 및 물리적 시설 및 공간, 시설 및 기구, 현상 유지 등의 기타 관련 요구사항을 준수해야 합니다.<br><br>
                       개별 구성요소단계가 이미 완성된 포장 프로세스부터 진행되므로, 21 CFR111.260(e)요구사항에서 사용되는 각 성분의 특징 및 중량 또는 측정을 준수할 필요가 없습니다.<br><br>
                       2)	Distributor인 경우, DS CGMP 규정은 아래와 같습니다.<br>
                           &nbsp; &nbsp; &#9673; 보관 및 분배하는 것에 대한 요구사항을 준수해야 합니다.<br>
                           &nbsp; &nbsp; &#9673; 인재, 물리적 시설 및 공간에 대한 요구사항 등 해당 요구 사항을 준수해야 합니다.<br><br>
                       건강보조 식품 제조를 위한 식이 성분을 가공하는 제조자만 유일한 고객인 경우, DS CGMP의 대상이 아닙니다. 그러나 DS CGMP 규정을 준수함으로써 우수한 관리를 진행하도록 독려할 수 있습니다. 단순한 건강 보조 식품으로써 식이성분을 포장하거나 포장된 식이성분을 라벨표시 하는 회사의 경우, DS CGMP 규정의 대상입니다. 이는 그 회사가 추가공정 없이 단순히 포장이나 라벨링만 하는 건강 보조 식품을 제조하는 제조업체이기 때문입니다.<br>
					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">건강보조식품의 포장 및 라벨링</p>
					<ul style="display:block;text-align:justify;">
                        건강 보조 식품의 품질을 보장하기 위해 관리가 필요한 제조 공정 및 단계에 대한 모든 세부사항, 그리고 건강 보조 식품의 완제품 제조 기록에 명시된 대로 포장 및 라벨링에 표시되어야 합니다. <br><br>
                        &#9678; 건강 보조 식품의 제조에 사용되는 부품의 사양<br>
                        &#9678; 중간 생산에 대한 사양<br>
                        &#9678; 건강 보조 식품의 라벨이나 포장 사양<br>
                        &#9678; 건강 보조 식품 완제품에 대한 제품 사양<br>
                        &#9678; 건강 보조 식품으로서 포장 및 라벨링에 대해 공급자로부터 받은 제품에 대한 사양<br>
                        &#9678; 포장 및 라벨 표시가 완료된 건강 보조 식품에 대한 포장 및 라벨 사양<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg" style="width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:560px;">
				<div class="txt_area">
					<p class="tit">IGC의 역량 </p>
					<ul style="display:block;text-align:justify;">
                      &#8284; IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br> 
                      &#8284; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
                      &#8284; IGC는 식품 분야에서의 다양한 인증 관련 서비스를 제공하고 있습니다. <br><br>
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
				<li><p><em><strong>01</strong></em><span>ISO 22000 시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>FSSC 22000</span></p></li>
				<li><p><em><strong>03</strong></em><span>식품 시험</span></p></li>
				<li><p><em><strong>04</strong></em><span>FDA FSMA 3자 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>유라시아 제품인증</span></p></li>
				<li><p><em><strong>06</strong></em><span>FSVP 전문가 양성 과정 교육</span></p></li>
				<li><p><em><strong>07</strong></em><span>PCQI 전문가 양성 과정 교육</span></p></li>
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