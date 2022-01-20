<?php
	include_once('./_common.php');
$g5['title'] = '미주지역 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_us_medical_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_us_medical_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_us_medical_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_us_medical_04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_us_medical_05.jpg') no-repeat center top;}
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">의료기기</span> /미주지역 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            <br><br>
              미국 내에서 사용될 목적의 의료기기의 생산 또는 유통에 관계된 사업체(시설 또는 설비)의 소유자 또는 운영인은 미 식약청에 해당 사업체를 연간 등록해야만 하는데 이러한 절차를 시설등록 절차라 합니다.<br><br>
            
              미 의회는 미 식약청이 사업체들 로부터 연간 등록금을 징수할 수 있는 권한을 부여하였습니다. 시설 등록을 하고 비용을 지불해야만 하는 상세한 대상은 “등록과 비용 지불의 대상” 문서를 보면 상세히 기재되어 있습니다. 연간 등록비용은 중소기업 및 다른 모든 기업체에 동일한 금액으로 징수됩니다.<br><br>

              대부분의 사업체 등록 대상이 기기의 등록 대상이며 현장에서 제조되고 있는 제품 생산에 어떠한 생산 활동을 담당하고 있는 지의 정보 역시 제공해야만 합니다. 만일 제품이 미국 시장 시판 전 승인이나 시판 전 신고의 대상이라면 해당 사업체의 소유자 또는 운영인은 관련 절차(510(k), PMA, PDP, HDE)를 완료해야 합니다.<br><br>
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">적합성 절차</p>
					<ul style="display:block;text-align:justify;">
						&#10054; 의료기기는 기기가 환자에게 내포하는 위험성에 따라 분류됩니다. 제품 및 등급의 종류에 따라, 적합성 평가 절차는 510(k)(premarket notification 및 특정 관리) 및 PMA(Premarket Approval) 등록으로 분류될 것입니다.<br><br>
						
                        &#10054; FDA는 안전성 및 효과성을 확인하기 위해 필요한 규정을 근거하여 3가지 등급 중 하나를 적용합니다.<br><br>
    
                        &#10054; 추가적으로, 분류는 위험성에 근거하여 평가됩니다. 즉, 의료기기의 환자 및 사용자에 대한 위험성은 등급을 배정하는데 있어서 중요한 요소입니다. 1등급은 가장 위험성이 적은 기기가 포함되고 3등급은 위험성이 가장 높은 기기가 포함됩니다.<br><br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">분류</p>
					<ul style="display:block;text-align:justify;">
                     &#10049; 1등급 의료기기<br>
                         &nbsp; &nbsp; &#8278;1등급은 오직 일반적인 관리의 대상이 되는 의료기기 등급을 의미합니다.<br>
                         &nbsp; &nbsp; &#8278;제품 종류: 밴드, 수술용 장갑, 수술용 칼, 수술용 붓<br><br>
                         
                     &#10049; 2등급 의료기기<br>
                         &nbsp; &nbsp; &#8278;2등급은 특별한 관리의 대상이거나 결국에 특별 관리 대상이 될 의료기기 등급을 의미<br>
                         &nbsp; &nbsp; &#8278;제품 종류: 콘돔, 콘택트렌즈, 주입 펌프, 뼈 분말, 치아 물질<br><br>
                         
                     &#10049; 3등급은 법 섹션 515에 따라 Premarket Approval이 요구되거나 요구될 것인 의료기기 등급을 의미<br>

					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">Premarket Approval 신청서(PMA)</p>
					<ul style="display:block;text-align:justify;">
                        &#8281;  의료기기는 기기가 환자에게 내포하는 위험성에 따라 분류됩니다. 제품 및 등급의 종류에 따라, 적합성 평가 절차는 510(k)(premarket notification 및 특정 관리) 및 PMA(Premarket Approval) 등록으로 분류될 것입니다.<br><br>
                        &#8281;  FDA는 안전성 및 효과성을 확인하기 위해 필요한 규정을 근거하여 3가지 등급 중 하나를 적용합니다.<br><br>
                        &#8281;  추가적으로, 분류는 위험성에 근거하여 평가됩니다. 즉, 의료기기의 환자 및 사용자에 대한 위험성은 등급을 배정하는데 있어서 중요한 요소입니다. 1등급은 가장 위험성이 적은 기기가 포함되고 3등급은 위험성이 가장 높은 기기가 포함됩니다.<br><br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의료기기 (510k) 등록 방법</p>
					<ul style="display:block;text-align:justify;">
                      &#8281; Premarket Notification - 510(k) / 1,2등급 의료기기에 적용됩니다.<br><br>
                      &#8281; 1등급 의료기기는 몇몇의 1등급 의료기기를 제외하고는 510k입니다. 그리고 2등급 의료기기는 반드시 FDA에게 premarket notification을 제출해야 합니다.<br><br>
                      &#8281; Premarket notification은 시설 등록을 포함합니다.<br><br>
                        &nbsp; &nbsp; ① 심사 기간  <br>
                                &nbsp; &nbsp; &nbsp; &#8278; 90일에서 180일 정도(가끔 1년의 심사기간이 걸리기도 합니다.)<br><br>
                        &nbsp; &nbsp; ② Premarket notification 내용 <br>
                                &nbsp; &nbsp; &nbsp; &#8278; 신청자의 이름, 주소, 제조업체, 멸균 시설 주소, 등록 번호, 신청 날짜를 작성합니다.<br>
                                &nbsp; &nbsp; &nbsp; &#8278; 제품 설명: 제품명, 분류, 외관 및 구조, 사용 목적, 작동 원리, labeling 및 성능 기준<br>
                                &nbsp; &nbsp; &nbsp; &#8278; 평가 보고서, 생체 적합성 및 성능에 대한 평가 보고서<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의료기기 요구 사항</p>
					<ul style="display:block;text-align:justify;">
                       &#8281; 제조회사의 등록<br><br>
                       &#8281; 제조된 모든 기기 목록<br><br>
                       &#8281; 제조업체에 의해 유지 및 보고된 기록<br><br>
                       &#8281; 라벨링에 대한 규정<br><br>
                       &#8281; 의료기기의 수리 및 환불에 대한 규정<br><br>
                       &#8281; 의료기기 및 시설에 대한 등록<br><br>

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
			<ul style="display:block;text-align:justify;">
			 &#8280; IGC인증원에서는 의료기기 제조사의 FDA 제품등록을 위해 필요한 절차와 자원을 준비할 수 있도록 지원합니다. <br><br>
			 &#8280; 제품이 미국시장에 진출할 수 있도록 최고의 서비스를 제공하고 있습니다.<br><br>
			
			
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