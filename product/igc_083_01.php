<?php
	include_once('./_common.php');
$g5['title'] = '유라시아 제품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_medicine_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_medicine_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_medicine_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_medicine_04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_medicine_05.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(6){background:url('images/product_medicine_06.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(7){background:url('images/product_medicine_07.jpg') no-repeat center top; }
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">의약품</span> /의약품 유통법 (#61-FZ)</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            
            러시아 연방법 (의약품 유통법: #61-FZ /2010.04.12)에 의거해 러시아 연방으로 수입되는 모든 의약품 및 의료 물질은 수입 허가를 획득해야 하며 의약품 유통에 대해 연방 국가의 통제를 받게 됩니다. 국가 통제 기관은 러시아 연방 보건 감독국(ROSZDRAVNADZOR) 및 러시아 연방 구성 기관 하의 영토 당국입니다. 국가 감독의 목표는 의약품 유통분야에서 러시아 연방 법률의 요구사항 위반의 예방, 탐지 및 억제하는 것입니다.
            
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의약품 유통법(#61-FZ) 준수의 필요성</p>
					<ul style="display:block;text-align:justify;">
                      현행법을 따르면, 의약품 유통법을 위반한 경우 러시아 연방 법률에 따라 처벌을 받게 됩니다.<br><br>
                      
                      관련 법들은 다음과 같습니다:<br><br>
                      
                      1.	러시아 연방 정부 결의 제 5.1.4조<br>
                      건강 감시 서비스(No323, 2004/06/30)입니다.<br>
                      국가 감독에는 의약품의 유통, 운송, 조제, 의약품 판매 및 의약품 사용에 대한 요구사항을 갖춘 의약품의 순환 대상 준수 여부 검사 조직 및 수행이 포함됩니다.<br><br>
                      
                      
                      2.	연방법의 규정(#294-F3, 2008/12/26)<br>
                      국가 통제(감독) 및 지방자치단체 구현에 있어 법인 및 개인 기업의 권리 보호에 대한 사항입니다. 국가 감독의 완전성 및 품질 모니터링에는 검사 수행, 신청자의 권리 위반 식별 및 제거, 필수 요구사항의 위반, 위반을 억제하기 위한 조치 적용 및 그러한 위반의 결과 제거, 검토, 결정 및 신청자의 항소에 대한 대응 준비가 포함됩니다.<br><br>
                      
                      따라서 귀사가 러시아로 의약품을 유통하시고자 한다면, 반드시 의약품 유통법 및 기타 관련 법들을 준수해야 합니다.<br><br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">제품 허가 등록</p>
					<ul style="display:block;text-align:justify;">
					    수입 허가 등록을 위해서는 러시아 연방 보건감독국(ROSZDRAVNADZOR)에 제품 등록이 선행되어야 합니다. 제품 등록 시 연방 보건감독국 주관의 등록 심사와 임상 실험이 필요합니다. 등록 심사는 임상 시험 기간을 제외하고 210일 기한 내외로 결정되며, 서류 심사, 생산 공정 심사, 샘플링 형식의 테스트 등이 요구됩니다. <br><br>
					    
					    
                        임상 시험의 경우, 약물 유통 연방법 및 러시아의 기타 규제 법률에 의해 설정된 전임상 시험 및 임상 시험에 대한 요구 사항이 준수되어야 합니다. 의약품 유통법(#61-FZ/2010.04.12) 4조 40항에 따라, 전임상 시험은 생물학적, 미생물학적, 면역학적, 독성학적, 물리적 시험, 기타 과학적 평가방법에 의한 의약품의 안정성 시험 등으로 정의됩니다. 임상 시험의 경우, 의약품의 진단, 치료, 예방 및 약리학적 특성 등에 대한 연구가 포함됩니다. 이는 과학적 방법에 의한 흡수, 할당, 변형 등의 과정에 국한되는 것이 아닌 다른 의약품 및 식품과의 상호작용까지 해당됩니다.<br>

					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">수입 허가 신청</p>
					<ul style="display:block;text-align:justify;">
						연방 보건감독국에 의약품이 등록된 후 수입허가를 신청할 수 있으며, 처음 등록된 모든 의약품 인증은 5년 동안 유효하다. 그 후 갱신 시 승인받은 의약품의 인증서는 무한으로 유효하다. <br>
						
                        또한, 의약품 등록증 발급 외에도 러시아 인증 GOST R에 따른 인증서 (Certificate of Conformity)나 적합성신고서(Declaration of Conformity)의 획득도 필요하다.

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">인증 대상 품목</p>
					<ul style="display:block;text-align:justify;">
                      러시아 연방 정부 법령(#982, 2009.12.01)에 따라 필수적으로 인증서가 필요한 대상 품목은 면역글로불린, 감마글로불린, 혈청, 독소, 의학용 및 수의학용 백신 등이며 적합성 신고서 대상 품목들은 약품, 의약용 화학제품, 조효소, 효소, 아미노산, 비타민, 유기농 제품, 수의학용 혈청 등이 해당됩니다. 
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			<div class="backImg" class="backImg" style="width:100%; margin-top:0; float:none; margin-left:0px; padding-top:260px;">
				<div class="txt_area">
					<p class="tit">의약품 인증의 이익 : 유라시아 의약품 인증 확대 전망</p>
					<ul style="display:block;text-align:justify;">
                        의약품 인증을 요구하는 유라시아 국가들이 더욱 증가할 전망입니다. 현재 유라시아경제연합 성원국들은 의료기기의 경우와 마찬가지로 약품시장 공동체 형성을 진행 중입니다. <br><br>

                        &#10022;	2014년 12월 23일 러시아, 벨라루스, 카자흐스탄은 EEC 내 의약품 유통에 관한 공통 규칙과 원칙에 관한 협정 체결<br><br>
                        &#10022;	제78호 의약품등록검사규칙(2016.11.03) 포함 약 26개의 규제 사항 승인 및 적용(적용일: 2017.05~)<br><br>

                        따라서 의약품 인증의 효력 및 적용국가는 확대될 것입니다.<br>

					</ul>
					
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
					
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">EAEU 의약품 유통 규제</p>
					<ul style="display:block;text-align:justify;">
                       2017년 5월 5일 유라시아 경제위원회는 26개 문서로 구성된 EAEU 의약품 유통 규제는 2017년 5월 6일부터 발효됨을 발표했습니다. 초국가적규제는 의약품의 개발, 전임상 및 임상 연구, 품질 관리, 등록, 생산 및 유통에 적용되며 국가적 규제는 전임상 및 임상 시험, 가격 책정, 소매업, 공공 조달, 비용 환급, 광고 등을 포함합니다. <br><br>

                       2020년 12월 31일까지 유예기간이 있기 때문에, 등록 인증서가 필요한 경우 EAEU와 국가별 규제 시스템 중에서 선택해 신청할 수 있습니다. 2018년 12월 31일 이전에 등록을 신청하는 경우 EAEU 제조업체는 EAEU GMP 인증서 대신 국가별 규제 시스템에 따라 제출해야 했습니다. 2020년 12월 31일 이전 규정에 따라 등록된 모든 의약품은 2025년 12월 31일까지 각 시장 별 규정에 따라 재등록하여야 합니다.


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
                      &#10021; IGC는 RUS-TEST PACIFIC인 자회사와 같이 유라시아 지역 인증 서비스 제공 기관인 RUS-TEST와의 협약을 통해, 의약품에 대한 인증 서비스를 제공하고 있습니다. <br><br>

                      &#10021; IGC 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>


                      &#10021; IGC는 유라시아 인증의 신뢰할 수 있는 글로벌 리더로서 의약품은 물론 의료기기, 화장품, 식품, EAC 인증 등에 대한 인증을 제공하고 있습니다. <br><br>
                    
                      &#10021; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>

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
			IGC는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다. <br><br>
				<li><p><em><strong>01</strong></em><span>EAC 및 GOST 인증 서비스</span></p></li>
				<li><p><em><strong>02</strong></em><span>국가 위생등록, 의료기기 등록, 계측 기기 등록, 화재 안전 등의 유라시아 인증 서비스</span></p></li>
				<li><p><em><strong>03</strong></em><span>인증에 필요한 시험 및 시험 성적서 발행 서비스</span></p></li>
				<li><p><em><strong>04</strong></em><span>제품 설명, 서류 검증, 기술문서 등 인증에 필요한 러시아어 번역 및 심사에 따른 통역 지원</span></p></li>
				<li><p><em><strong>05</strong></em><span>-	Etc.</span></p></li>
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