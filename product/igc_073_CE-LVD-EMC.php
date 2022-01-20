<?php
	include_once('./_common.php');
$g5['title'] = 'CE LVD/EMC(유럽 저전압기기 지침) ';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_celvdemc_01_2.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_celvdemc_02.jpg') no-repeat center top; }
	/* .business_type3 .business_info .backImg:nth-child(3){background:url('images/product_celvdemc_03.jpg') no-repeat center top; } */
    
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }
    
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE LVD/EMC(LVD: Low Voltage Directive)</span> <br>저전압기기 유럽 제품인증</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
                <span style="font-weight:bold;">&#10051; CE LVD/EMC란?</span><br>
            유럽의 저 전압 지침 (Low Voltage Directive: LVD)은 특정 전압 범위 내에서 전기 장비의 감전 및 기타 전기 위험에 대한 보호 지침입니다. 이 지침은 75 ~ 1500 V 사이의 직류 전류와 50 ~ 1000 V 사이의 교류 전류의 전압 규격으로 설계, 사용되는 전기 장비를 대상으로 적용됩니다. 또한 해당 지침에 적용되는 전압 규격은 장비 내부의 전압이 아닌 전기 입출력 전압에 관한 것입니다.<br><br>
            저 전압 지침은 전기 장비의 전자기장(Electromagnetic Fields) 방사가 인체에 미치는 영향에 대해서도 정의합니다. 저 전압 지침은 "New" 또는 "Global" 개념이 도입되기 전에 제정된 가장 오래된 단일 지침 중의 하나로 넓은 의미에서 장비에 대한 시장 출시 전 적합성 평가 절차와 장비가 직접 또는 조화 표준 (Harmonized Standards)에 의해 충족해야 하는 필수 보건 및 안전 요구 사항 (Essential Health and Safety Requirements: HSR)을 제공한다고 할 수 있으며 이를 통해 해당 전기 장비가 안전하게 사용될 수 있도록 합니다.
            <br><br>
            이것은 예측 또는 예측하지 못한 상황에서 발생할 수 있는 다음과 같은 위험요소(Hazard)로부터 인체 및 재산상의 상해나 손실을 방지하기 위한 것입니다.
            </span></h2>
            <br><br>
            
              <h1 style="display:block;position:relative;text-align:center;">
                   <img src="images/product_celvdemc_01.jpg" alt="적용 가능한 위해요소(Hazard)">
              </h1>
              <br>
              
              <span style="font-weight:bold;">&#10051; 적용 가능한 위해요소(Hazard)</span><br>
              <br>
              <p>&nbsp; &nbsp; 1) 전기적 위험요소(Electrical Hazard) : 감전 등의 사용중 위험에 노출될 경우</p>
              <p>&nbsp; &nbsp; 2) 화재적 위험요소(Fire Hazard) : 과부하, 단락 등으로 인한 화재 발생 가능의 경우</p>
              <p>&nbsp; &nbsp; 3) 기계적 위험요소(Mechnical Hazard) : 기계적 오작동에 의한 위험요소</p>
              <p>&nbsp; &nbsp; 4) 물리적 위험요소(Physical Hazard) : 낙하, 외부충격, 쓰러짐 등의 구조상의 위험요소</p>
              <p>&nbsp; &nbsp; 5) 화학적 위험요소(Chemical Hazard) : 제품에 사용한 페인트에 의한 발생 가능 위해요소</p>
          
	</div>
   
   
    <br><br>
          <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
				<span style="display:block;text-align:center;font-size:1.6em;">   CE LVD / EMC 인증절차</span>
		  <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
		  
		  
		  <span style="font-weight:bold;">&#8280; LVD 인증범위</span>
          <p>93/68/EEC에 따르면 AC50~1000V 또는 DC75~1500V의 정격전압을 가진 전기제품에 적용합니다. (단, Annex II에 열거된 제품은 제외(방폭기기, 방사선 및 의료기기, 승강기의 전기부품, 전기계량기, 옥내용 플러그 및 소켓 outlet, 전기 철조망 제어기, 전파 방해 기기, 국제기구에서 작성한 안전규정에 부합한 선박,항공기,철도에 사용되는 특수전기기기))</p>

		  


	<div class="business_type3">
		
		<div class="business_info">		
			<div class="backImg" style="width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:750px;">
				<div class="txt_area">
					<p class="tit">상세 절차</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">
						<span style="font-weight:bold;">[제1단계]</span><br>
                          1.	제조자는 CE marking을 진행하기 위해서는 marking하고자 하는 제품을 규정하고 있는 EMC 지침을 파악해야 한다.<br>
                              &nbsp; &nbsp; EMC 지침: 2014/30/EU Electromagnetic compatibility (EMC) Directive<br>
                          2.	제품의 적합성을 위해 관련지침(Directive)내에서 규정하고 있는 필수 요건 사항을 항목별로 정리<br>
                              &nbsp; &nbsp; 관련 지침(Directive)에서 규정하는 요구사항의 적합함을 제조자는 증명해야 하며 이를 위해 제품 사용상 안전성 및 위험방지를 위해 대응한 기술적인 내용을 기술하거나 제품시험을 실시한 결과 및 관련 자료를 제시해야 한다.<br>
                          3.	제조자는 CE Marking 관련 제품 해당지침의 요구사항을 만족하는 사실을 증명, 선언하기 위한 적합성 평가방식(적용 모듈)을 결정하고 그에 따라 적합성 평가를 실시한다.
                              &nbsp; &nbsp; CE marking 적합성 평가는 8가지 모듈 중 제품의 특성에 따라 하나 또는 두가지 모듈을 결합시킨 형태를 사용하도록 각 지침(Directive)에 규정하고 있다.<br>
                          4.	제품에 적용할 지침이 결정되었다면 해당지침별로 시험할 유럽 시험규격들을 결정해야 하지만 해당 규격을 결정하는 것은<br>
						</li> <br>
						
						<li style="margin:0 auto;text-align:justify;"> 
						<span style="font-weight:bold;">[제2단계]</span><br>
                          1.	제품에 관련된 유럽규격(EN Standard)이 결정되었다면 규격에 따라 공인된 기관에서의 시험을 실시한다.<br>
                          2.	제품시험은 지침에서 요구하는 제품의 안전성 및 위험에 대한 대응 기술을 증명하기 위한 자료로 사용된다.<br>
						</li><br>
						
						<li style="margin:0 auto;text-align:justify;">
						<span style="font-weight:bold;">[제3단계]</span><br>
                          1. 적합성 선언을 위하여 제품에 대한 안전성 및 위험 방지를 위한 기술적인 내용을 다루는 기술문서(Technical Construction Files; T.C.F)를 작성한다.<br>
                          2. 기술문서에서 다루어야 할 기술적인 내용들은 해당지침(Directive)에 따라 요구되는 자료가 다르므로 해당지침을 참조하여 준비해야 한다.<br>
						</li> <br>
						
						<li style="margin:0 auto;text-align:justify;"> 
						<span style="font-weight:bold;">[제4단계]</span><br>
                          이 단계에서는 지침(Directive)의 적합함을 선언하기위해 기술문서 등 여러 기술자료 및 모듈 별로 필요한 품질시스템 인증을 근거로 제조자는 적합성 선언서를 작성하고 그에 대한 확증으로 서명하여 승인한다.
						</li><br>
						
						<li style="margin:0 auto;text-align:justify;">
						<span style="font-weight:bold;">[제5단계]</span><br>
                          1. 적합성 선언서를 작성하고 승인한 후 제조자는 제품 출하 시 제품의 표시사항을 부착하게 되며 라벨에는 생산자 성명 및 제품 관련 사항과 CE marking을 포함한다.<br>

                          2. 일반적으로 기술문서를 구성하는 내역은 다음과 같다.<br>
                          &nbsp; &nbsp; o	제품에 대한 일반사항 및 제품의 작동 체제의 이해에 필요한 내용 및 설명<br>
                          &nbsp; &nbsp; o	설치도면, 설계도면, 회로도, 회로 계통도 등<br>
                          &nbsp; &nbsp; o	부품List, 시험성적서, 설계계산, 규격 checklist<br>
                          &nbsp; &nbsp; o	임상시험 data(MDD 경우), 위험요소 분석<br>
                          &nbsp; &nbsp; o	중요부품이나 유지보수 시 교환되는 부품 등의 카탈로그, 기술자료 등<br>
						</li> <br>
						
						<li style="margin:0 auto;text-align:justify;"> 
						유럽연합국내에서 인체 및 동물의 안전성을 위협하는 전기 제품이 판매되지 못하도록 하여 전기로부터의 안전성 확보가 이 지침의 목적이며 관련 제품에는 컴퓨터, 정보기술 기기, 가전제품, 동력공구, 시험실 기기, 시험 및 측정 기기와 전원 공급기기가 포함됩니다. 즉, 유럽으로 전기 제품을 판매하고자 하는 제조사에게는 필수적입니다.
						</li>
					</ul>

				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">CE/EMC 인증의 사후관리</p>
					<ul>
                         <span style="display:block;text-align:justify;font-weight:300;">
						    &#8280; CE마킹을 한 제품은 일단 EEA 17개국으로 아무런 제약 없이 통관되며 통관된 제품은 유럽 시장에서 아무런 차별 없이 유통될 수 있습니다.<br><br>
                            &#8280; 세관에서는 CE마킹에 대한 확인과 적합성 선언서를 접수하여 통관시킵니다.<br><br>
                            &#8280; 단, 통관된 제품인 경우에도 필요한 경우 관련 이해 관계자 (소비자, 경쟁업체 및 자국내 검사기관 등)의 이의신청에 따라 기술문서의 제출요구와 더불어 샘플검사 등 사후관리를 받게 됩니다.<br><br>
                            &#8280; CE마킹은 강제규격이나 회원국 정부의 CE마킹 주관기관의 사전 검사와 승인을 받아야만 시판할 수 있는 사전 검사제도가 아니라 사후 관리를 받는 제도로써 주관기관은 자발적으로 또는 이해관계자의 신고 또는 문제 발생시 시중 유통제품을 수거하여 규격 적합성 관련 서류검사와 필요시 제품의 안전 검사를 실시하게 됩니다.<br><br>
                         </span>
					</ul>
				</div>
			</div>
			
		</div>  <!--------//  div class="business_info" 종료  --------------->
		
	</div>
	
	<h1 style="display:block;position:relative;text-align:center;">
                   <img src="images/product_celvdemc_03.jpg" alt="우리가 제공하는 서비스">
              </h1>
              <br><br>
	
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
			IGC는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다. 특히, 유럽시장 진출을 위한 의료기기 관련 모든 인증 서비스를 제공합니다.<br>
				<li><p><em><strong>01</strong></em><span>CE MDD</span></p></li>
				<li><p><em><strong>02</strong></em><span>CE IVD</span></p></li>
				<li><p><em><strong>03</strong></em><span>CE Machinery</span></p></li>
				<li><p><em><strong>04</strong></em><span>US FDA</span></p></li>
				<li><p><em><strong>05</strong></em><span>CFDA</span></p></li>
				<li><p><em><strong>05</strong></em><span>TFDA</span></p></li>
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