<?php
	include_once('./_common.php');
$g5['title'] = '영국 비건 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

    /* Vegan 인증 |  식품 영국 비건 제품인증 시작 */
	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_vegan_certification_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_vegan1_01_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_vegan_certification_02.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(4){background:url('images/product_vegan_certification_03.jpg') no-repeat center top; }

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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">식품</span> 영국 비건 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="display:block;text-align:left;color:#009966;">
                 영국 비건협회 (The Vegan Society)<br><br>
            </span>
        </h2>
                 <ul style="display:block;text-align:justify;">
                    The Vegan Society (영국비건협회)는 1944년 11월에 설립한 비영리 단체입니다. 세계에서 가장 오래된 독창적인 비건 조직으로써 70여년이 지난 지금까지도 전세계 그 어떤 비건 단체보다 활발한 활동으로 비건 개념과 필요성을 널리 확산시키고 있습니다.<br><br>
                    &nbsp; &nbsp; &nbsp; &#10049;가장 오랜 역사와 경험을 가진 독창적인 비건 조직입니다.<br>
                    &nbsp; &nbsp; &nbsp; &#10049;‘VEGAN’이라는 신조어를 탄생시켜 새로운 트랜드를 선도하는 세계적인 권위를 가지고 있습니다<br>
                    &nbsp; &nbsp; &nbsp; &#10049;개별 제품에 대한 마크 적용 기준을 철저히 준수하고, 완제품에 더 이상 남아있지 않은 성분을 포함하여 그 어떠한 동물성 성분 함유 가능성도 남아있지 않도록 세심하게 검토합니다.<br>
                    &nbsp; &nbsp; &nbsp; &#10049;Vegan Trademark는 전세계 소비자들이 쉽게 식별할 수 있는 국제 마크입니다.<br>
                    &nbsp; &nbsp; &nbsp; &#10049;Vegan Trademark Logo는 소비자들에게 제품이 윤리적 기준을 충족한다는 확신을 줍니다.<br>
                    &nbsp; &nbsp; &nbsp; &#10049;License 기간 동안 제품과 관련된 모든 홍보물에 마크를 사용함으로써 다양한 홍보효과를 얻을 수 있습니다.<br>
                    &nbsp; &nbsp; &nbsp; &#10049;전세계 30,000개가 넘는 제품이 Vegan Trademark에 등록되어 있습니다.<br>
                    &nbsp; &nbsp; &nbsp; &#10049;제조라인이나 설비에 대한 현장 실사 없이 100% 서류 심사로만 진행됩니다.<br>
                </ul>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">비건 인증의 중요성</p>
					<ul style="display:block;text-align:justify;">
                       비건 인증은 동물 유래 원재료를 사용하거나 이용하지 않고, 교차오염 되지 않도록 관리하며, 제품에 동물실험을 실시하지 않는 기준으로 부여하는 인증입니다. Vegan Trademark는 까다로운 인증절차를 거쳤기 때문에 소비자들이 세부 원재료를 확인해야 하는 번거로움을 덜 수 있으며, 비건 제품을 쉽게 선택할 수 있습니다. 제품을 제조하는 생산자 역시, 제조하는 비건 제품을 자신감 있게 홍보하고 제품의 신뢰성을 재고하여 수익 증대에 도움을 줄 수 있습니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg" style="width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;">
				<div class="txt_area">
					<p class="tit">Vegan Trademark  등록 기준</p>
					<ul style="display:block;text-align:justify;">
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Animal Ingredients (동물성 원료 & 동물 유래 성분) </span><br>
                       원료 선택부터 제품의 제조 및/또는 전체 생산 단계에 걸쳐 그 어떠한 동물성 원료 및 생산품, 부산품, 부산물 혹은 파생물의 사용을 포함하거나 관련되어서는 안됩니다.<br><br>
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Animal Testing (동물 실험) </span><br>
                       제품의 제조 및/또는 개발, 그리고 제품 성분에 대해 회사의 주도로 혹은 회사를 대신하여 혹은 회사가 통제할 수 있는 관계자에 의해 어떠한 종류의 동물에게도 실험을 하거나 실험을 했던 적이 없어야 합니다.<br><br>
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Genetically Modified Organisms (GMO) (유전자 변형 생물) </span><br>
                       유전자 변형 생물체 (GMO)의 개발 및 생산과정에서 동물의 유전자 또는 동물 유래 성분과 절대 관련되지 않아야 합니다. 단, 식물성 성분은 해당되지 않습니다.<br><br>
                       <span style="font-weight:bold;color:#ff9933;">   &#10070; Cross Contamination with Non-vegan (논비건과의 교차오염)</span><br> 
                       동물성 원료 및 동물 유래 성분과의 잠재적 교차오염을 최대한 방지해야 합니다. Vegan 생산라인을 가동하기 전에 최소한의 사용면적과 기기들을 반드시 세척해야 합니다. 생산과정에서 Non-vegan 물질로부터 교차오염 될 수 있다는 위험성을 인지하고, 이를 방지하기 위해 모든 실천적, 합리적 조치를 취해야 합니다. Vegan과 Non-vegan을 동일라인에서 생산하는 경우, Non-vegan라인부터 먼저 생산하는 것을 권장합니다.<br><br>
					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">Vegan Trademark 등록 절차</p>
					<ul style="display:block;text-align:justify;">
                        <span style="font-weight:bold;color:#009966;">&#8284; 과정 </span><br>
                        상담문의 &#10140; 견적 제공 &#10140; 신청서 접수 &#10140; 비용 완납 &#10140; 서류심사 &#10140; 계약서 서명 &#10140; 인증서 발행 &#10140; 제품등록 &#10140; 마크 적용 &#10140; 완료<br>
                        &#8227; 예상 소요기간  : 평균 6개월<br><br>
                        
                        <span style="font-weight:bold;color:#009966;">&#8284; License 조건</span><br>
                         Vegan Trademark에 대한 License는 12개월 또는 24개월 중 선택이 가능하며, 유효기간이 종료되기 1~2개월 전에 영국에서 갱신여부를 확인합니다. 갱신 시 제품에 대한 변경사항 (제품명/디자인 변경/전성분 변경/제품 단종 등)이 없으면 기존 License 비용과 동일한 금액을 지불하고 재계약을 통해 기간을 연장할 수 있습니다.<br><br>
                         
                        <span style="font-weight:bold;color:#009966;">&#8284; 기간</span><br>
                         신청서 접수 후 등록이 완료되기까지 약 3~6개월 정도 소요됩니다. 소요기간은 제품 및 전성분의 종류, 서류 대응 속도, 비용 처리, 커뮤니케이션의 효율성 등 여러가지 요인에 따라 다소 차이가 있을 수 있습니다.<br><br>
                         
                        <span style="font-weight:bold;color:#009966;">&#8284; 비용</span><br>
                         License 비용은 회사의 연매출, 제품 등록 수, 제품의 종류 등을 고려하여 유연하게 산정됩니다. 만약 제품의 비건 여부를 심사하는 도중 제품이 비건에 부적합하다고 판단되어 등록이 불가한 경우, 지불 금액의 50%가 환불됩니다.<br><br>

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
                        <span style="font-weight:bold;color:#ff9933;"> &#10021; </span> IGC는 The Vegan Society와 협력하여 비건 인증을 실시하고 있습니다. <br><br>
                        <span style="font-weight:bold;color:#ff9933;"> &#10021; </span> 비건 식품이라 할지라도식품 첨가물이나 원료의 생산 중 제조자가 알 수 없는 동물 유래 원료가 사용될 수 있습니다.<br><br> 
                        <span style="font-weight:bold;color:#ff9933;"> &#10021; </span> IGC는 다년간 쌓아온 기술력 및 전문성을 통해 비건 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br> 
                        <span style="font-weight:bold;color:#ff9933;"> &#10021; </span> 광범위한 식품 관련 인증 제공업체인 IGC는 고도로 숙련되고 지식을 갖춘 심사원의 방대한 네트워크를 활용하여 최고의 인증서비스를 제공합니다.<br><br> 
                        <span style="font-weight:bold;color:#ff9933;"> &#10021; </span> IGC는 식품 관련 인증의 선두기관으로서 비건 인증의 까다로운 절차를 빠르고 정확하게 제공합니다.<br><br>
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
			IGC는 다음과 같은 인증 서비스를 제공하고 있습니다. 당사는 다양한 분야의 식품 관련 인증을 제공하는 업체이기도 합니다. 또한 식품 시험소 운영 및 다양한 식품 관련 인증을 진행함으로써 식품 안전에 관한 광범위한 지식을 보유하고 있습니다. 따라서 <span style="font-weight:bold;color:#cc99ff;">비건 인증</span> 뿐만 아니라 <span style="font-weight:bold;color:#cc99ff;">ISO 22000, FSSC 22000, FDA FSMA, Global HACCP을 통해 추가적인 인증</span>을 받아 귀사의 경쟁력을 높일 수 있습니다.<br><br>
				<li><p><em><strong>01</strong></em><span> ISO 22000</span></p></li>
				<li><p><em><strong>02</strong></em><span> FSSC 22000</span></p></li>
				<li><p><em><strong>03</strong></em><span> FDA FSMA</span></p></li>
				<li><p><em><strong>04</strong></em><span> Global HACCp</span></p></li>
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