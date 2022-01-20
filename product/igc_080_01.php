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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_uasia_medicaldivices_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_uasia_medicaldivices_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_uasia_medicaldivices_04.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_uasia_medicaldivices_05.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_uasia_medicaldivices_06.jpg') no-repeat center top;}
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">의료기기</span> / 유라시아 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;font-size:0.9em;">
            
           러시아에 의료기기를 등록시키기 위해선 비록 CE 혹은 FDA등의 승인을 위하여 시험 등이 이루어 졌더라도 강제적인 요구 사항에 의하여 별도의 시험 등이 이루어 져야 하는 시간과 비용이 많이 소요됩니다. 러시아는 EU 또는 미국과 인증과 관련한 협약을 매지 않았기 때문에 EU의 CE 인증 또는 미국 FDA승인 등과 같은 국제적으로 인정된 인증서를 인정하지 않습니다.<br><br>
           
           2002년 이후로 러시아 정부는 시험에 대한 부분을 제품안전 보장 등의 다른 형태인 생산현장 심사, 품질시스템 확인 및 시판 이후의 지속적 관리로 변경을 시작하였습니다. 하지만 그러한 시도는 성공을 거두지 못하였고 따라서 2013년 1월 1일부터 이러한 절차는 보다 강력하면서 현실적인 형태로 운영되게 되었습니다.<br><br>
           
           
           <h1><img src="images/product_uasia_medicaldivices_01.jpg" alt="유라시아 의료기기 제품 인증"></h1>
           
           건강 및 사회 발전 서비스를 제공하는 러시아 연방 보건 감독청인 Roszdravnadzor가 발행하는 공식 문서인 의료기기등록 인증서가 관련 의료기기에 대한 사전 평가를 통과하였기에 생산, 수입, 판매 및 러시아 내에서의 사용에 적합함을 승인하는 것입니다. 러시아에서 생산이 되었든 아니면 해외에서 러시아로 수입이 되었든 모든 의료기기는 등록이 되어야 합니다. <br><br>
           
           등록 인증서에는 제조업체, 유통업자 또는 법정 대리인의 명칭이 포함됩니다. 암약 등록을 하고자 하는 의료기기가 다른 생산자가 제조 한 모듈/블록으로 구성되어 있지만 상표가 부착된 제품이 아닌 경우 각 모듈/블록은 개별적으로 등록하여야 합니다. 정부 법령 Jan. 17, 2002 N 19에 등재되어 있는 의료기기에 대하여 등록인증서가 있을 경우 생산 기업에게 부가세를 징수하지 않습니다.

            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의료기기 Class 분류</p>
					<ul style="display:block;text-align:justify;">
						러시아에서 운영중인 의료기기에 대한 명명 및 등급은 Order N4H “About Conformation of Nomenclature Classification of Medical Devices”에 정리되어 있으며 체외진단 장비는 포함되지 않습니다. 체외진단 장비는 별도의 등급 규정에 따릅니다.<br><br>
                          &#10023; Class 1 – 낮은 위험<br><br>
                          &#10023; Class 2a – 중간 위험<br><br>
                          &#10023; Class 2b – 높은 위험<br><br>
                          &#10023; Class 3 – 최상위 위험<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의료기기 등록 진행 시험 종류</p>
					<ul style="display:block;text-align:justify;">
					    의료기기 등록에 따른 시험은 5월 06자의 2011 N 352법형에 따라 등록된 시험소에서만 진행이 가능하고, 임상 시험에 관해서는 이 기능을 수행할 수 있는 기관 목록이 Roszdravnadzor 웹 사이트에 게시되어 있습니다.<br><br>
                         &#10023; 독성시험<br><br>
                         &#10023; 기능시험<br><br>
                         &#10023; 전자파검사<br><br>
                         &#10023; 임상시험<br><br>

					</ul>
					
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
					
					
                        <p class="tit">의료기기 등록 유효기간</p>
                    <ul style="display:block;text-align:justify;">
					    <span style="display:block;text-align:left;font-weight:bold;"> </span>
					    <br>
					    <span style="display:block;text-align:left;">영구 (인증서에 등록된 해당제품이 단종될 때까지 유효합니다)</span>
					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의료기기 등록  절차</p>
					<ul style="display:block;text-align:justify;">
				      1. 기업의 대리인은 Rosdravnadzor가 러시아로 샘플을 보내는 것에 동의하는 허가 신청을 해야 하며, 이 권한은 6 개월 동안 유효합니다. 또한 대리인은 신청 제품에 대한 설명, 시험소와의 계약서, 변호사 또는 제조업체와의 계약서 등을 제공하여야 합니다.<br><br>
                      2. 대리인은 샘플이 세관을 통과할 수 있도록 수속을 하여야 합니다. 또한 대표자는 샘플 외에도 계약서, 세관 공무원에게 제출할 문서 및 송장을 제공하여야 합니다.<br><br>
                      3. 인정을 받은 실험소에서 독성시험, 기술시험 및 전기제품의 경의 전자파 시험을 실시합니다.<br><br>
                      4. (3단계와 동시 진행) 기업은 등록에 필요한 기술문서 전체를 준비하여야 합니다.<br><br>
                      5. 의료 기기의 등급을 확정하고, 러시아에 등록된 유사 의료기기가 없는 경우 첫 번째 단계로 품질 평가, 효율성 및 안전성 시험이 실시되고, 그 이후 두 곳의 다른 의료기관에서 임상평가가 실시되어 두 번째 단계의 품질 평가, 효율성 및 안전성 평가가 수행됩니다. <br><br>
                      6. 기업은 전체 기술문서를 Rospotrebnadzor에 제출합니다. 의료기기등록을 마친 후, 등록증을 근거로 GOST-R 인증서와 품목에 따른 위생인증서 및 제품의 특성에 따라 계측기 인증서를 확보하여야 합니다.<br><br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의료기기 등록 제출 서류</p>
					<ul style="display:block;text-align:justify;">
                        &#8759; 등록 및 인증 절차 진행에 따른 제조자의 위임장 (공증 요망)<br><br>
                        &#8759; 본국의 회사 등록 증빙 자료 (예로서 상공회의소 자료, 내면 FDA 등록에 따른 증빙 자료 혹은 회사 등록 인증서, 사업 허가증)들은 공증이 되어 제출하여야 합니다.<br><br>
                        &#8759; 의료기기 적용 가능한 국내 혹은 국제 기관 발행의 ISO 9001 혹은 ISO 13485 인증서 <br><br>
                        &#8759; 93/42/EEC의 요구 사항에 따른 적합성 인증서, 적합성 선언서, 자유판매 증명서, FDA 인증 증빙 자료, 자국 혹은 기타 국에 대한 의료기기 인증 증빙 자료. (공증하여 제출하여야 함)<br><br>
                        &#8759; 안전을 입증하는 시험 성적서 (IEC 60601-1, IEC 60601-1-2, ISO 10993 등) – 정확한 성적서는 시험소에서의 기술검사시 업무를 간략히 하는데 도움을 줄 수 있습니다.<br><br>
                        &#8759; 독성안전 / 생체적합성에 대한 안전성 시험 성적서<br> <br>
                        &#8759; 기술 및 독성 시험 진행을 위한 셈플 제공<br><br>
                        &#8759; 의료기기 신규 등록 신청서 혹은 갱신 등록 신청서. 신청서는 반드시 신청자 (러시아에서 등록을 수행할 권한이 있는 법인) 레터 헤드를 사용하여야 합니다. 신청은 해당 의료기기 혹은 장비에 포함되는 모든 구성품 및 부품에 대한 설명을 포함하여야 합니다. 신청은 러시아어로 제출하여야 합니다.<br><br>
                        &#8759; 신청 업무를 수행할 법적 대리인 선임에 대한 위임장을 제출합니다. 제조 회사는 등록 권한이 있는 법인 (법인 책임자에게 주소 지정)에게 위임장을 발급해 주어야 하며 제조업체의 원산지 국가에서 공증을 받아야합니다. 또한 러시아어로 번역되어야 하며 자국 소재의 러시아 영사관에서 공증을 받아야 합니다. 위임장은 제조업체가 신청자가 의료 기기/장비의 등록을 수행하고 상담 및 전문 작업을 수행한다는 계약에 서명하고 등록 인증서를 받도록 위임해야 한다고 명시해야 합니다.<br><br>
                        
                        
                        &#8718; 등록 프로세스에는 GMP (Good Manufacturing Practices) 심사가 필요하지 않습니다. 하지만 이러한 심사를 도입할 법안은 가까운 시일 내에 시행될 예정입니다.<br><br>
                         
                        &#8718; 일반적으로 등록 비용은 필요한 테스트 범위에 따라 달라집니다.<br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의료기기 등록 확인</p>
					<ul style="display:block;text-align:justify;">
                      러시아어 버전의 Rospotrebnadzor 웹 사이트에서 의료 기기의 등록 상태를 확인할 수 있습니다. <br><br>
                      <a  style="font-weight:bold;color:#0066ff;" href="http://roszdravnadzor.ru/registration/mi/login"> &#9758; Rospotrebnadzor 웹 사이트 바로가기 &#9756;
                      <br>
                      웹사인트 주소 http://roszdravnadzor.ru/registration/mi/login</a><br><br>
                      
                      Class 1 및 2a의 의료기기의 경우 유사한 제품일 경우 (동일한 등급, 동일한 방법으로 적용, 동일한 효율) 두 제품이 동등하거나 기술 테스트, 안전을 기반으로 한다는<br><br>

                      Class 2b, 3, 1 및 2a를 포함한 다른 모든 제품 (이미 등록을 마친 유사제품이 존재하지 않을 경우) 들은 효과 및 안전성을 확인하는 기술 테스트, 안전성 평가, 임상 및 의료 테스트를 기반으로 등록됩니다.<br>
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