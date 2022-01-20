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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_usas_medicine01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_usas_medicine02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_usas_medicine03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_usas_medicine04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_usas_medicine05.jpg') no-repeat center top;}
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">의약품</span> / 미주 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            미국 식품의약품청은 식품 및 의약품의 유효성을 확보하고 자국민에게 보다 안전하고 비용부담이 적은 제품의 공급을 추진하며, 국민 건강 유지 및 개선을 위해 의약품과 식품 사용에 필요한 정확하고 과학적 기반을 가진 정보를 얻을 수 있도록 도움으로써 공중보건을 증진시키고 있습니다. 
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">신청 유형</p>
					<ul style="display:block;text-align:justify;">
                    임상시험계획 승인신청(Investigational New Drug application, IND)은 판매용 및 연구용(비판매용) 두 가지 범주가 있으며 다음과 같은 세 가지 신청유형이 있습니다. <br><br>

                    <span style="display:block;font-weight:bold;">&#8280; 1. 연구자 임상시험계획 승인신청</span>
                    해당 신청은 임상시험을 개시하고 수행하는 의사가 제출하며, 의사의 직접적인 지시 하에 시험용 의약품이 투여 또는 조제됩니다. 의사는 미허가 의약품 또는 새로운 적응증이나 새로운 환자군에 대한 허가 의약품에 대한 시험을 제안하기 위해 연구용 임상시험계획 승인신청을 제출할 수 있습니다. <br><br>

                    <span style="display:block;font-weight:bold;">&#8280; 2. 응급상황 사용 임상시험계획 승인신청</span>
                    해당 신청은 미국 식품의약품청이 『연방규정집』312.23조 또는 312.34조에 따른 임상시험계획 승인을 위한 시간이 허용되지 않는 상황에서의 시험약의 사용을 허가할 수 있도록 합니다. 또한 기존의 시험 계획 조건을 충족시키기 못하는 환자를 대상으로 또는 허가된 시험 계획서가 존재하지 않을 경우에 사용될 수 있습니다. <br><br>

                    <span style="display:block;font-weight:bold;">&#8280; 3. 치료목적 임상시험계획 승인신청</span><
                    해당 신청은 임상 시험이 수행되고 미국 식품의약품청의 검토가 진행 중일 때, 임상 시험에서 중증 또는 즉각적으로 생명을 위협할 수 있는 증상에 대한 전망을 보이는 시험약을 위해 제출됩니다. 중증질환의 경우 임상 3상 중이거나 또는 모든 임상시험들이 완료된 의약품을 본 항에 따른 치료용 사용이 가능합니다. 즉각적으로 생명을 위협할 수 있는 질환의 경우, 임상 3상 이전이라 하더라도, 통상 임상 2상 이전이 아니라면 해당 의약품을 본 항에 따른 치료용으로 사용 가능할 수 있습니다.<br><br>

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
                       &#8281; 제조, 준비, 전파, 합성 또는 미국(예외사항 없음)으로 수입 또는 수입에 제공하는 약의 공정(특히, 재 포장과 재 표기를 포함한다)에 관여하는 외국 국가 내 설립은 반드시 최초의 활동에 참여하는 즉시 등록하고 매년 등록해야 합니다.<br><br>
                       
                       &#8281; 약물 등록 개정안은 21 CFR 207.26에 따라 제출되어야 합니다.<br><br> 

                       &#8281; 등록 정보는 현재 암호화된 데이터 필드를 가진 SPL 파일을 사용하여 전자적으로 제출되어야 합니다. 법 510 섹션에 따라 등록 15 실패는 법 섹션 301(p)에서 금지 행위입니다. 또한, 법 502(O) 섹션에 따라, 법 섹션 510에 등록되지 않은 어떤 주의 시설에서 제조된 경우 약물은 무단 상표 표기가 되어있는 것입니다.<br><br>
 
                       &#8281; 법 510 섹션 및 21 CFR 파트 207은 국내외 약물 시설에서 제출하는데 필요한 등록 정보를 제시합니다. 이러한 규정에서는 모든 등록자들은 반드시 이름과 각 시설의 전체 주소, 설립에 사용되는 모든 상표명, 소유권 또는 사업의 종류(예를 들어, 개별적으로 소유, 공동소유 또는 법인), 소유자의 이름 또는 운영자 이름을(공동소유인 경우, 각 파트너의 이름을 포함하고 법인의 경우, 이름 및 각 임원과 이사의 이름과 직책 및 법인의 주를 포함한다) 제공하여야 합니다.<br><br>
					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">특정 추가정보 사항</p>
					<ul style="display:block;text-align:justify;">
                       모든 등록된 시설에 요구되는 정보와 더불어, 외국 시설을 등록하기 위해서는 특정 추가적인 정보가 반드시 제공되어야 합니다. 예를 들어, 외국인 등록자는 반드시 다음을 제출하여야 합니다.<br><br> 
                       &nbsp; &nbsp; &#8280; 외국인 등록자의 미국 에이전트의 이름, 주소, 전화 번호<br>
                       &nbsp; &nbsp; &#8280; 시설에 알려진 각 수입 업체의 명칭 (이것은 각각의 미국 회사 또는 개개인이 미국으로 수입되는 외래 시설의 약물의 소유자, 수탁인 또는 수취인을 의미합니다. 외국 시설이 직접적으로 약물을 고객이나 환자에게 배송하지 않는 한, 수입업자는 궁극적으로 약을 구매하거나 받거나 투여하는 고객이나 환자를 포함하지 않습니다.)<br>
                       &nbsp; &nbsp; &#8280; 약물을 수입 또는 제공하는 사람의 이름 (이것은 외국 약물 시설은 미국에 자신의 약물의 수입을 용이하게 하기 위해 사용하는 운송자 이외의 각 에이전트, 브로커, 또는 기타 단체의 이름을 의미합니다)<br><br>
                       등록자와 FDA의 대응을 촉진하기 위해 외국인 등록자 가져오기 또는 가져오기 위해 제공하는 수입자의 미국 에이전트와 전화 번호 및 이메일 주소의 전자 메일 주소를 제출해야 합니다.<br><br>
                       등록자는 양식 FDA의 2656.16을 사용하여 추가적인 약물 시설 등록 정보를 제출해야 합니다. 마찬가지로, 전자 제출에 대해서 등록자는 다음의 추가적인 정보를 그들의 SPL 파일에 제출하여야 합니다.<br> 
                       &nbsp; &nbsp; &#8280; 공식적인 계약자 성명, 주소, 전화 번호, 전자우편 주소<br>
                       &nbsp; &nbsp; &#8280; 각 시설에서 수행되는 업무의 종류<br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">악물 목록</p>
					<ul style="display:block;text-align:justify;">
                      &#9634; 등록자는 반드시 시설의 초기 등록 시 상업적으로 배포된 모든 약물에 대한 초기 목록 정보를 제출해야 합니다.<br><br>
                      &#9634; 법 301(p) 섹션에 따라 법 510(j)에 의해 요구된 어떠한 목록 정보제공의 실패는 금지된 행위이며, 또한, 법 502(o) 섹션에 요구된 목록을 포함하지 않은 경우, 약물은 무단 상표 표시가 되어 있는 것입니다. <br><br>
                      &#9634; FDA는 개인 상표 유통업자(PLDs)으로부터 약물 시설 등록 정보를 허용하지 않지만, PLDs는 자신의 NDC 라벨 코드를 요청하고 FDA에 약물 목록 정보를 제출할 수 있습니다.<br><br> 
                      &#9634; 약물 목록 정보를 제출함으로써 PLD는 목록 요구사항 준수에 대한 모든 책임을 집니다. <br><br>
                      &#9634; 이런 경우에는, 약물 목록 정보를 제출하거나 업데이트 할 시, 개인 상표 유통업자는 반드시 목록에 있는 약물을 제조하고, 준비하고, 전파하고, 합성하거나 가공(특히, 재 포장과 재 표기를 포함한다)하는 등록된 시설을 증명해야 합니다.<br><br> 
                      &#9634; 개인 상표 유통업자에 의한 등록된 시설의 인증은 용지형식을 사용할 수 있습니다.<br><br> 
                      &#9634; 약물 제품이 PLD에 의해 나열되는 경우, 이것은 또한 목록에 있는 약물을 제조하고, 준비하고, 전파하고, 합성하거나 가공(특히, 재 포장과 재 표기를 포함한다)하는 등록된 시설의 소유자에 의해 나열되면 안 됩니다.<br><br> 
                      &#9634; 등록자(및 해당 경우, 개인 상표 유통업자)는 반드시 그들의 약물 목록 정보를 업데이트하고 약물이 이전에 목록에 표시되지 않았고 상업적인 분배를 위해 도입되었음을 보장해야 합니다.<br><br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">왜 IGC 인가?</p>
					<ul style="display:block;text-align:justify;">
                       &#8284; IGC는 다년간의 풍부한 경험으로 의약품 미국 수출을 지원합니다. <br><br>
                       &#8284; 의약품 FDA 등록, 의약품 라벨 검토, IND, NDA, ANDA, NADA, ANADA, OTC 등록, NDC 등록, SPL 작성 및 제조시설 GMP 준수 서비스를 제공합니다. <br><br>
                       &#8284; IGC는 신속하고 결과 지향적이며, 인증 기관을 통한 인증 감사 및 사후 인증 향상/유지 보수 서비스를 제공하여 조직이 GMP 품질 관리를 최대한 활용할 수 있도록 합니다.<br><br>
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