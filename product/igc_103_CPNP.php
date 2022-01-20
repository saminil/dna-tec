<?php
	include_once('./_common.php');
$g5['title'] = '화장품 제품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

    /* 제품인증 > 화장품 인증 > CPNP 시작 */
	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_cosmetics_cpnp_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_cosmetics_cpnp_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_cosmetics_cpnp_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_cosmetics_cpnp_04.jpg') no-repeat center top; }
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CPNP</span> / 화장품 등록 인증 소개</h1>
		<h2 class="sub_txt">
            <span style="display:block;text-align:left;font-weight:bold;color:#ff9933;">
              CPNP(Cosmetic Product Notification Portal)<br>
            </span></h2>
            <ul style="display:block;text-align:justify;">
              유럽 시장에 유통될 모든 화장품 제품은 반드시 EU (European Union) 화장품 규정인 Cosmetic Regulation 1223/2009 요건에 만족하고 CPNP에 등록이 되어야 합니다. CPNP는 Cosmetic Product Notification Portal로, EC No. 1223/2009에 따라 만들어진 온라인 화장품 등록 포털입니다. CPNP에 한 번의 등록을 통해 화장품 제품의 성분 및 원료가 관리 및 통제되고, 전 EU 시장에 진출이 가능합니다.<br><br>

              화장품 제품의 CPNP 등록은 유럽 내 책임자인 RP(Responsible Person)에 의해 이루어집니다. RP는 EU 내에서 유통되는 화장품 제품에 대한 법적 책임자로, 제품이 유럽 시장에서 잘 유통될 수 있도록 돕는 역할을 하며, 제품에 대문제가 발생할 경우 관할당국은 RP를 통해 조치를 시행할 것을 명령합니다.
            </ul>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="color:#ff9933;">등록 프로세스</p>
					<ul style="display:block;text-align:justify;line-height:2.5em;">
                         CPNP 등록 절차는 다음과 같습니다.<br>
                         1.	RP 지정<br>
                             &nbsp; &nbsp; &#8280;	유럽 시장에 화장품을 수출하고자 하는 화장품 제조사는 RP를 지정하고, RP는 화장품 제품을 CPNP에 등록하기 위한 절차를 준비합니다. RP는 또한 제품정보파일(PIF)을 보관 및 관리하며, 추후 유럽 내에서 화장품 제품의 사후 관리를 담당하게 됩니다.<br>
                         2.	필요 서류 및 라벨링 작성<br>
                             &nbsp; &nbsp; &#8280;	화장품 제조사는 CPNP 등록에 필요한 정보 및 서류를 RP에게 제출합니다.<br>
                         3.	제품 성분 및 라벨 검토<br>
                             &nbsp; &nbsp; &#8280;	RP는 화장품 제조사에서 제출한 서류를 토대로 제품의 성분 및 라벨을 검토합니다.<br>
                         4.	제품정보파일 (PIF) 작성<br>
                             &nbsp; &nbsp; &#8280;	제품정보파일은 유럽 시장 진출에 필요한 모든 자료를 하나의 파일로 합친 것입니다. RP는 검토한 서류를 토대로 제품정보파일을 작성합니다.<br>
                         5.	CPNP 등록<br>
                             &nbsp; &nbsp; &#8280;	모든 요구사항을 충족하면 RP는 CPNP에 화장품 제품을 등록합니다.<br>
                         6.	제품 시장 출시<br>
                             &nbsp; &nbsp; &#8280;	CPNP로부터 화장품 제품에 등록번호가 부여되면 해당 화장품은 유럽 시장 내에서 유통될 수 있습니다.<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="color:#ff9933;">필요 정보 및 서류</p>
					<ul style="display:block;text-align:justify;line-height:2.5em;">
                       화장품 제조사는 CPNP에 등록하려는 화장품 제품에 대한 기본 및 세부정보와 라벨을 준비하여야 합니다.<br><br>
                       화장품 제조사가 RP에 제출하여야 하는 정보 및 서류는 다음과 같습니다.<br>
                       &nbsp; &nbsp; &#8278;	제조업체 정보<br>
                       &nbsp; &nbsp; &#8278;	ISO 22716, GMP 인증서<br>
                       &nbsp; &nbsp; &#8278;	제품정보<br>
                       &nbsp; &nbsp; &#8278;	성분 혼합비율<br>
                       &nbsp; &nbsp; &#8278;	제품이 출시될 EU 회원국명<br>
                       &nbsp; &nbsp; &#8278;	CoA<br>
                       &nbsp; &nbsp; &#8278;	MSDS (Material Safety Data Sheet)<br>
                       &nbsp; &nbsp; &#8278;	제품안전성, 적합성, 방부력, 동물실험 등 테스트 결과<br><br>
                       또한 화장품 라벨에는 다음 정보들이 포함되어야 합니다.<br>
                       &nbsp; &nbsp; &#8278;	제품의 기본정보<br>
                       &nbsp; &nbsp; &#8278;	제조번호<br>
                       &nbsp; &nbsp; &#8278;	성분표<br>
                       &nbsp; &nbsp; &#8278;	제품의 중량 또는 부피<br>
                       &nbsp; &nbsp; &#8278;	원료 정보<br>
                       &nbsp; &nbsp; &#8278;	유통기한<br>
                       &nbsp; &nbsp; &#8278;	알레르기 유발 성분<br>
                       &nbsp; &nbsp; &#8278;	사용방법 및 주의사항<br>
                       &nbsp; &nbsp; &#8278;	원산지<br>
                       &nbsp; &nbsp; &#8278;	RP정보<br>
					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="color:#ff9933;">CPSR 포함 사항</p>
					<ul style="display:block;text-align:justify;line-height:2.5em;">
                       제품 안전성 보고서 (Cosmetic Product Safety Report)는 CPNP에 등록될 화장품이 안전한 제품이라는 것을 증명하기 위한 서류입니다. 제품 안전성 보고서 (CPSR)는 안전성 평가자에 의해 작성되며, 안전성 평가자는 관련 분야 학위 소지자로, 최소 3년 이상의 경력을 보유한 자여야 합니다.<br><br>
                       CPSR에는 다음의 정보가 포함됩니다.<br>
                       &nbsp; &nbsp; &#9639;	성분표<br>
                       &nbsp; &nbsp; &#9639;	MSDS<br>
                       &nbsp; &nbsp; &#9639;	CoA<br>
                       &nbsp; &nbsp; &#9639;	성분 혼합비율<br>
                       &nbsp; &nbsp; &#9639;	화장품 제조사 및 용기 제조사 신고서<br>
                       &nbsp; &nbsp; &#9639;	라벨 초안<br>
                       &nbsp; &nbsp; &#9639;	패키지 이미지<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="color:#ff9933;">PIF 포함 사항</p>
					<ul style="display:block;text-align:justify;line-height:2.5em;">
                      제품정보파일 (Product Information File)은 화장품 제품이 유럽 시장 내에 유통되기 위해 필요한 모든 정보를 합친 파일로, 여기에 제품 안전성 보고서 (Cosmetic Product Safety Report)가 포함됩니다.<br><br>
                      제품정보파일 (PIF)에는 다음의 정보가 포함됩니다.<br>
                      &nbsp; &nbsp; &#9640;	제품기술서<br>
                      &nbsp; &nbsp; &#9640;	제품 안전성 보고서<br>
                      &nbsp; &nbsp; &#9640;	제조방식 GMP 적합성 (ISO 22716 인증서 또는 GMP)<br>
                      &nbsp; &nbsp; &#9640;	제품 효능효과와 증빙 자료 (임상테스트 등)<br>
                      &nbsp; &nbsp; &#9640;	동물 실험 데이터<br>
                      &nbsp; &nbsp; &#9640;	라벨<br>
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