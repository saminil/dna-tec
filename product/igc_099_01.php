<?php
	include_once('./_common.php');
$g5['title'] = '비건(Vegan) 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

     /* 비건 제품 인증 | 화장품 시작 */
	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_vegan_cosmetic_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_vegan_cosmetic_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_vegan_cosmetic_03.jpg') no-repeat center top; }

    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">화장품</span> / 비건 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
                The Vegan Society (영국비건협회)는 1944년 11월에 설립한 비영리 단체입니다. 세계에서 가장 오래된 독창적인 비건 조직으로써 70여년이 지난 지금까지도 전세계 그 어떤 비건 단체보다 활발한 활동으로 비건 개념과 필요성을 널리 확산시키고 있습니다.<br>
                </span></h2>
                <ul style="display:block;text-align:justify;line-height:2.5; ">
                   &nbsp; a)	가장 오랜 역사와 경험을 가진 독창적인 비건 조직입니다.<br>
                   &nbsp; b)	‘VEGAN’이라는 신조어를 탄생시켜 새로운 트랜드를 선도하는 세계적인 권위를 가지고 있습니다.<br>
                   &nbsp; c)	개별 제품에 대한 마크 적용 기준을 철저히 준수하고, 완제품에 더 이상 남아있지 않은 성분을 포함하여 그 어떠한 동물성 성분 함유 가능성도 남아있지 않도록 세심하게 검토합니다.<br>
                   &nbsp; d)	Vegan Trademark는 전세계 소비자들이 쉽게 식별할 수 있는 국제 마크입니다.<br>
                   &nbsp; e)	Vegan Trademark Logo는 소비자들에게 제품이 윤리적 기준을 충족한다는 확신을 줍니다.<br>
                   &nbsp; f)	License 기간 동안 제품과 관련된 모든 홍보물에 마크를 사용함으로써 다양한 홍보효과를 얻을 수 있습니다.<br>
                   &nbsp; g)	전세계 30,000개가 넘는 제품이 Vegan Trademark에 등록되어 있습니다.<br>
                   &nbsp; h)	제조라인이나 설비에 대한 현장 실사 없이 100% 서류 심사로만 진행됩니다.<br>
                </ul>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">비건 인증의 중요성</p>
					<ul style="display:block;text-align:justify;">
						료기기 지침은 '의료기기'의 정의에 따르는 장치에 적용 가능합니다. 의료기기란 제조자의 의도대로 인간에게 사용되는 목적을 가진 소프트웨어를 포함하는 비건 인증은 동물 유래 원재료를 사용하거나 이용하지 않고, 교차오염 되지 않도록 관리하며, 제품에 동물실험을 실시하지 않는 기준으로 부여하는 인증입니다. Vegan Trademark는 까다로운 인증절차를 거쳤기 때문에 소비자들이 세부 원재료를 확인해야 하는 번거로움을 덜 수 있으며, 비건 제품을 쉽게 선택할 수 있습니다. 제품을 제조하는 생산자 역시, 제조하는 비건 제품을 자신감 있게 홍보하고 제품의 신뢰성을 재고하여 수익 증대에 도움을 줄 수 있습니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">Vegan Trademark 등록 기준</p>
					<ul style="display:block;text-align:justify;">
                        <span style="font-weight:bold;color:#669900;">&#10049; </span><span style="font-weight:bold;color:#ff9933;">Animal Ingredients (동물성 원료 & 동물 유래 성분</span><br> 
                        원료 선택부터 제품의 제조 및/또는 전체 생산 단계에 걸쳐 그 어떠한 동물성 원료 및 생산품, 부산품, 부산물 혹은 파생물의 사용을 포함하거나 관련되어서는 안됩니다.<br><br>
                        
                        <span style="font-weight:bold;color:#669900;">&#10049; </span><span style="font-weight:bold;color:#ff9933;">Animal Testing (동물 실험)</span><br>
                        제품의 제조 및/또는 개발, 그리고 제품 성분에 대해 회사의 주도로 혹은 회사를 대신하여 혹은 회사가 통제할 수 있는 관계자에 의해 어떠한 종류의 동물에게도 실험을 하거나 실험을 했던 적이 없어야 합니다.<br><br>
                        
                        <span style="font-weight:bold;color:#669900;">&#10049; </span><span style="font-weight:bold;color:#ff9933;">Genetically Modified Organisms (GMO) (유전자 변형 생물)</span><br>
                        유전자 변형 생물체 (GMO)의 개발 및 생산과정에서 동물의 유전자 또는 동물 유래 성분과 절대 관련되지 않아야 합니다. 단, 식물성 성분은 해당되지 않습니다.<br><br>

                        <span style="font-weight:bold;color:#669900;">&#10049; </span><span style="font-weight:bold;color:#ff9933;">Cross Contamination with Non-vegan (논비건과의 교차오염)</span><br>
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
                        <span style="font-weight:bold;color:#ff9933">&#10049; 비건 인증 절차</span><br>
                        <span style="line-height:2.5em;">
                        &nbsp; &nbsp; 1.	접수<br>
                        &nbsp; &nbsp; 2.	서류 검토사항 확인<br>
                        &nbsp; &nbsp; a)	인증 받고자 하는 제품에 대한 서류를 제출합니다. (신청서, 동의서, OEM 계약서 등)<br>
                        &nbsp; &nbsp; b)	신청서 검토 및 보완 요청<br>
                        &nbsp; &nbsp; 3.	수수료 납부<br>
                        &nbsp; &nbsp; 4.	원재료 검토 서류심사 (동물성 유전자 검사)<br>
                        &nbsp; &nbsp; 5.	적합 / 보완 / 취소 판정에 따른 보완 요청<br>
                        &nbsp; &nbsp; 6.	동물성 DNA 검사 실시<br>
                        &nbsp; &nbsp; 7.	동물성 유전자 불검출임이 확인 후 최종심사<br>
                        &nbsp; &nbsp; 8.	비건 인증 발급<br>
                        </span>
                        *공식적인 인증 처리기한은 30일 입니다.<br>
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
			
			비건소사이어티와 MLA를 공식 체결한 IGC는 비건인증을 비롯하여 다음과 같은 다양한 분야의 인증 및 시험 서비스를 통해 동물성 성분 및 실험을 배제한 제품에 대한 정확하고 빠른 화장품 인증 서비스가 가능합니다. <br><br>
			
				<li><p><em><strong>01</strong></em><span>ISO 22716 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>CPNP</span></p></li>
				<li><p><em><strong>03</strong></em><span>EWG</span></p></li>
				<li><p><em><strong>04</strong></em><span>FDA 화학 및 생물학적 시험 (ISO/IEC 17025)</span></p></li>
				<li><p><em><strong>05</strong></em><span>Vegan certification (식품)</span></p></li>
				<li><p><em><strong>06</strong></em><span>유럽대리인 서비스</span></p></li>
				<li><p><em><strong>07</strong></em><span>EU 지역 내에 유통 서비스 지원</span></p></li>
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