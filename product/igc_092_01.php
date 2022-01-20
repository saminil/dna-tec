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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_usa_cosmetic_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_usa_cosmetic_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_usa_cosmetic_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_usa_cosmetic_04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_usa_cosmetic_05.jpg') no-repeat center top;}
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">화장품</span> / 미주 제품인증</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            <span style="font-weight:bold;"> &#8284; 미주 화장품 인증 개요</span><br>
            
            미국 FDA는 미주 내의 소비자 보호를 위해 미주에서 판매되는 화장품을 규제하고 있는데 그 규제가 까다로워 충분한 이해 없이 화장품을 수출할 경우 문제가 발생할 수 있습니다. 이 때문에 미주에 화장품을 수출하는 기업은 관련 내용을 충분히 이해하고 적용한 후에 제품을 수출해야 합니다.<br><br>

            화장품이 의약품으로 구분될 경우 기업은 FDA에 제조업체 등록 후 의약품에 대한 허가절차를 통과하여야 하며, 일반화장품으로 분류될 경우는 FDA 허가가 아닌 자율등록을 통해 제품을 판매할 수 있습니다.<br><br>

            기업은 미국 FDA의 화장품 자율등록 프로그램에 해당 제품과 관련하여 회사정보, 제품, 원료를 등록할 수 있습니다.<br><br>
 
            이 등록 프로그램은 The Voluntary Cosmetic Registration Program (VCRP)이며 미국에서 상업적으로 유통되는 화장품을 제조, 포장, 유통하는 기업이 FDA에 보고하는 시스템입니다. VCRP은 2 개의 항목으로 나누어져 있으며, 프로그램의 두 항목 또는 한 항목에 참가할 수 있습니다. VCRP 규정은 21 CFR part 710 및 720에서 상세히 확인할 수 있습니다.<br><br>
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">VCRP 등록 적용 대상</p>
					<ul style="display:block;text-align:justify;">
						VCRP는 미국에서 소비자에게 판매되는 화장품에만 적용됩니다. 미용실, 스파, 또는 피부 클리닉에서 사용된 제품과 같은 전문가용으로 사용되는 화장품에는 적용되지 않습니다. 또한 호텔의 샘플, 무료 선물 또는 친구에게 주기 위해서 집에서 만드는 화장품 등의 판매 목적 이외의 제품에도 적용되지 않습니다.<br><br>
						
                        추가로 화장품이 치료 또는 예방의 목적으로도 쓰이는 제품은 화장품인 동시에 의약품으로도 간주되기 때문에 관련 의약품 조항을 적용하여 법적 요구사항을 준수해야 합니다.<br><br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">VCRP 등록의 장점</p>
					<ul style="display:block;text-align:justify;">
                       VCRP은 FDA가 미국시장으로 판매되는 화장품을 규제하는 책임을 수행하도록 지원합니다. 제품 제출 및 시설 등록이 필수 사항은 아니지만 자발적인 제출을 통해 FDA가 화장품 및 성분, 사용 빈도, 제조 및 유통 관련 사업 등에 관해 유용한 정보를 얻을 수 있도록 자료를 제공하게 되며 이는 곧 기업의 수출 활동의 촉진에 도움을 줄 수 있습니다.<br><br>

                       VCRP 데이터베이스의 정보는 화장품 성분 검토 (CIR, Cosmetic Ingredient Review)에도 사용이 되는데 독립적인 업계 지원 전문가 패널 CIR 전문가 패널이 성분 안전성 검토의 일부로 성분 안전성을 평가하기 위해 우선 순위를 정하는 것에 도움을 주기 위해 사용되고 있습니다.<br><br>
					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">VCRP 등록에 관한 주의사항</p>
					<ul style="display:block;text-align:justify;">
                       &#8278; 화장품은 FDA 판매전 승인(Pre-market Approval)이 아닙니다.<br>
                       &#8278; VCRP는 화장품 승인 프로그램 또는 판매촉진 도구가 될 수 없습니다.<br>
                       &#8278; 화장품 등록, 등록번호 부여, 화장품 파일링 또 CPIS 번호부여는 FDA가 회사 및 제품을 승인했다는 의미는 아닙니다.<br>
                       &#8278; VCRP는 수입화장품에 대해 사전신고 제도가 아니며 미국 내 수입회사는 FDA 등록이 요구되지 않습니다.<br>
                       &#8278; VCRP에 등록하는 것은 화장품과 성분이 안전하고, 적합하게 라벨링 표시 관련법 준수를 확인하는 것이 회사의 책임이다 라는 것을 의미합니다.<br>
                       &#8278; 공식적인 승인 인상을 주는 광고나 라벨링의 표현은 화장품을 부정표시제품(misbranded)으로 만들 수 있습니다.<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">등록 방법</p>
					<ul style="display:block;text-align:justify;">
                     <span style="color:#ff00ff;">1. 화장품 제조 및/또는 포장 시설의 등록</span><br>
                     화장품 시설은 화장품이 제조 및/포장되는 장소를 의미하며 사업장 운영만 행해지는 장소는 해당되지 않습니다. 화장품 제조 또는 포장 시설의 소유자 또는 운영자만 각 시설의 위치에 대해 양식을 사용하여 시설을 등록할 수 있으며, 유통업자는 시설을 등록할 수 없습니다. 미국 외에 위치한 회사는 화장품을 미국으로 판매하기 위해 수출한 후에 시설을 자발적으로 등록할 수 있습니다. FDA는 각 시설 위치에 등록 번호를 할당하게 됩니다.<br><br>
                     <span style="color:#ff00ff;">2. 화장품 성분표 (CPIS, Cosmetic Product Ingredient Statement)의 작성</span><br>
                     화장품 제조업체, 포장업체 또는 유통업체는 회사가 미국에서 상업적 유통을 시작한 각 제품에 대한 진술서(Statement)를 제출할 수 있습니다. 각 계통에 대한 별도의 양식을 사용해야 합니다. FDA는 VCRP에 제출된 각 계통에 대해 CPIS 번호를 할당하게 됩니다.<br><br>
                     <span style="color:#ff00ff;">3. 제품 계통의 수정 또는 중단</span><br>
                     CPIS는 작성 양식과 연속 양식으로 수정하거나 중단할 수 있습니다. 브랜드명 또는 성분에 대한 변경은 제품이 상업적 유통에 들어간 후 60일 이내에 제출해야 합니다. CPIS는 상업적 유통의 배포 중단을 알게 된 후 180일 이내에 중단해야 합니다.<br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC 역량</p>
					<ul style="display:block;text-align:justify;">
                      &#8284; IGC는 미국내에 위치한 PATS Corp.와의 협력을 바탕으로 미주 판매 화장품에 대한 등록을 도와드리며 전반적인 가이드라인을 제공합니다.<br><br>
                      &#8284; PATS Corp. (Pan America Technical Service, Corp.)는 미국의 LA에 위치하고 있으며, 미국 FDA의 규정 준수 및 cGMP의 국내외 기업에게 신속하고 경쟁력 있는 지원 서비스를 제공하고 있습니다.<br><br>
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
			IGC는 미주 화장품 등록 서비스를 포함하여 화장품 분야에 대한 다양한 인증 서비스를 제공합니다.<br><br>
				<li><p><em><strong>01</strong></em><span>VCRP (Voluntary Cosmetic Registration Program) 등록</span></p></li>
				<li><p><em><strong>02</strong></em><span>ISO 22716 경영시스템 인증</span></p></li>
				<li><p><em><strong>03</strong></em><span>유라시아 인증 (화장품 EAC 인증, GOST 인증, 국가위생등록)</span></p></li>
				<li><p><em><strong>04</strong></em><span>Vegan 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>EWG (Environmental Working Group) 인증</span></p></li>
				<li><p><em><strong>06</strong></em><span>CPNP (Cosmetic Product Notification Portal) 등록</span></p></li>
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