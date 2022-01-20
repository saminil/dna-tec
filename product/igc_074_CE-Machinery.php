<?php
	include_once('./_common.php');
$g5['title'] = '유럽 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_cemachinery_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_cemachinery_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_cemachinery_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_cemachinery_05.jpg') no-repeat center top; }
    
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 7%; }
    
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE Machinery</span> /기계류 안전 제품인증 </h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            
            유럽 내에서 제품을 유통 또는 판매하고자 하는 제조업체는 그 제품이 해당하는 EU 지침에 적합하다는 것을 적합성 선언 또는 적합성 인증을 통해 CE 마크를 제품에 부착하여야 합니다. 유럽에서 기계류의 안전에 적용되는 지침은 Machinery Directive 2006/42/EC이며, 운반 기계, 기계 장치, 승강기 및 운송장비와 안전 부품을 포함한 모든 기계류에 적용됩니다.
            
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">CE Machinery(기계류 안전) 유럽 제품인증 개요</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">
						기계류의 정의는 “적어도 하나의 부분이 가동부분으로서 구비되어 있으며, 복수의 서로 관계 있는 부품, 부분품이 다 갖추고 적절한 가동기, 제어기 및 동력회로가 있는 것”이라고 MD에 규정되어 있습니다. 유럽의 기계류 지침 (Machinery Directive:2006/42/EEC)은 다양한 기계류 및 부분적인 기계류, 부속품, 체인, 로프 및 웨빙, 교체 장비, 이동식 기계 전송장치 및 안전 부품을 포함한 다양한 제품의 사용에 작업자의 건강 및 안전을 보장하기 위해 제정되었습니다. 
						</li> <br>
						
						<li style="margin:0 auto;text-align:justify;"> 
						CE 마크를 부착할 수 있는 제품은 다음과 같습니다.<br>
                        1. 일반 산업용 기계: 반도체 장비, 굴삭기 장착 부속품류 및 부분 기계, 프레스, CNC 선반, 공작기계, 산업용 콤프레셔, 산업용 호이스트, 산업용 프린터, 포장 기기 등<br>
                        2. 위험 기계류: 원형 톱 등 유사 기계류, 프레스, 플라스틱, 고무 사출기, 광산 등 지하 작업용 제품, 작업용 카 리프트, 승객 운반용 리프트, 안전 릴레이류 등<br>

						</li>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">CE Machinery Directive(2006/42/EEC)</p>
					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;">&#10048; CE Machinery Directive(2006/42/EEC)의 구성</span><br>
						<li style="margin:0 auto;text-align:justify;">
                           서 론 : 작성에 해당되는 지침과 전반적인 해설 및 유의사항<br>
                           본 문 : 지침을 적용하기 위한 조문, 가맹국에 대한 법적 의무나 권한<br><br>
                           </li>
                         <span style="display:block;text-align:left;font-weight:300;">
						    &nbsp; &nbsp; &#10023; Annex I : 설계 및 제조에 관한 건강과 안전의 필수 요구사항<br>
                            &nbsp; &nbsp; &#10023; Annex II : 적합성 선언서에 관한 사항<br>
                            &nbsp; &nbsp; &#10023; Annex III : CE – Marking에 관한 사항<br>
                            &nbsp; &nbsp; &#10023; Annex IV : Notified Body로부터 EU 형식시험을 받아야 하는 기계류 목록<br>
                            &nbsp; &nbsp; &#10023; Annex V : 적합성 선언 및 기술파일<br>
                            &nbsp; &nbsp; &#10023; Annex VI : EU 형식시험<br>
                            &nbsp; &nbsp; &#10023; Annex VII : Notified Body 기준<br><br>
                         </span>
                                   
					</ul>
					
					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; 규격 구분</span>
					    <br>
					    <span style="display:block;text-align:left;">
					        기계 안전에 관한 유럽 규격은 A규격, B 규격, C 규격으로 나눌 수 있습니다. 제품은 해당되는 모든 3종류의 규격을 충족해야 합니다.<br><br>
					    </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						    &nbsp; &nbsp; &#10052; 규격 A (EN 414, EN 12100) <br>
                            &nbsp; &nbsp; 기본 안전규격으로 기본 개념, 설계 원칙 및 일반적 측면을 규정하는 규격<br><br>
                            
                            &nbsp; &nbsp; &#10052; 규격 B (EN 13850, EN 13849-1, EN 60204-1 등)<br> 
                            &nbsp; &nbsp; 일반적인 기계의 용도 및 목적에 따라 광범위하게 구분된 기계에 적용되는 안전에 관계되는 규격<br>
                            &nbsp; &nbsp; &nbsp; 1) B1규격은 특정 안전 측면에 관한 규격(전기, 안전거리, 표면온도, 소음 등)<br> 
                            &nbsp; &nbsp; &nbsp; 2) B2규격은 안전관련 장치 와 기계부품 등에 관한 규격(비상스위치, 압력감지장치 등)<br><br>
                            
                            &nbsp; &nbsp; &#10052; 규격 C <br>
                            &nbsp; &nbsp; 특정 기계 또는 기계 그룹에 관한 상세한 안전 요구사항을 규정하는 규격<br><br>
                         </span>
					</ul>

					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; 적용 대상 기기 </span>
					    <br>
                         <span style="display:block;text-align:left;font-weight:300;">
						    &nbsp; &nbsp; 1. 전기, 공기압 및 유압, 무게 등을 에너지원으로 하여 적어도 1개 이상의 작동부분이 있는 제품<br>
                            &nbsp; &nbsp; 2. 건강이나 안전에 관여하는 기계류의 부품으로, 단독으로 출하되는 기기
                         </span>
					</ul>
					
					<!----CSS 적용 없는 이미지 삽입------>
					<br>
					<h1 style="display:block;text-align:center;width:100%;">
					<img src="images/product_cemachinery_08.jpg" alt="CE Machinery Directive(2006/42/EEC) 핵심 요구사항">
					</h1>
                    <br>
                    
                    <ul>
					    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; CE Machinery Directive(2006/42/EEC) 핵심 요구사항 </span>
					    <br>
					    <span style="display:block;text-align:left;font-weight:300;">
                          제조자가 준수하여야 하는 문서화 요구사항은 MD의 부속서 I의 필수 보건 및 안전 요구 사항에 있으며, 기계가 안전하게 사용되고 있는지, 잔여 위험이 남아있는 경우 사용자에게 올바르게 경고하고 있는지에 대한 내용을 문서화한 것입니다.<br><br>
                        </span>
                        <span style="display:block;text-align:left;font-weight:300;">
                          필수 요구사항은 다음과 같습니다.
                        </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						    &nbsp; &nbsp; 1. 안전에 대한 원칙, 취급을 용이하게 하는 설계, 인체 공학, 제어 시스템, 기계적 위험으로 보호, 전기 및 기타 에너지 온도, 화재 및 폭발 등의 기타 위험, 소음 방출 등 모든 유형의 기계에 공통적인 일반사항, 진동, 방사선 및 유해물질, 유지보수, 청소, 정보의 표시 및 경고  <br>
                            &nbsp; &nbsp; 2. 식품, 화장품 및 의약품 등과 같은 특정 등급의 기계류에 적용되는 요구사항  <br>
                            &nbsp; &nbsp; 3. 기계의 이동성으로 인한 위험을 상쇄하기 위한 요구사항  <br>
                            &nbsp; &nbsp; 4. 리프트 작업의 위험을 상쇄하기 위한 요구사항 <br>
                            &nbsp; &nbsp; 5. 지하작업용 기계에 대한 요구사항  <br>
                            &nbsp; &nbsp; 6. 기계 리프트 인력에 대한 요구사항 <br>
                         </span>
					</ul>

                
					<ul>
					    <span style="display:block;text-align:left;font-weight:bold;"> &#10048; 인증절차 </span>
					    <span style="display:block;text-align:left;font-weight:300;">다음과 같이 4가지의 방식이 있습니다. </span><br>
                       
                        <span style="display:block;text-align:left;font-weight:300;">   
						    &nbsp; &nbsp; A) Annex 4에 기술된 고 위험군 기계류<br>
                            &nbsp; &nbsp;  승인기관 (Notified Body : NB)을 통한 인증취득<br><br>
                           
                            &nbsp; &nbsp; B) Annex 4가 아닌 일반 기계류 (Annex Ⅱ A)<br>
                            &nbsp; &nbsp;  자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득<br><br>
                            
                            &nbsp; &nbsp; C) 기계 부품류에 관한 자기 적합성 선언(Annex Ⅱ B)<br>
                            &nbsp; &nbsp;  자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득<br><br>
                            
                            &nbsp; &nbsp; D) 안전 부품류에 관한 자기 적합성 선언 (Annex Ⅱ C)<br>
                            &nbsp; &nbsp;  자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득<br><br>
                         </span>
                         <span style="display:block;text-align:left;font-weight:300;">
                         참고: B)와 C)의 경우, 자기 적합성 선언서를 작성하고 관련 기술문서를 보관함으로써 규격에 적합함을 선언할 수 있지만 해당제품이나 포장 등에 CE 마크를 부착할 수 없습니다.
                         </span>             
					</ul>

					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
					

				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">관련 문서</p>
					<ul>
					<span style="display:block;text-align:left;font-weight:300;">
					  <p style="display:block;font-weight:bold;">기술문서 (TCF: Technical Construction Files)</p>
					  기술문서는 2006/42/EC Annex VII에 요구사항이 기재되어 있습니다. <br>
                      기술문서에서는 기계가 Machinery Directive의 요구사항에 적합하다는 입증을 하여야 합니다. 사용되는 언어는 공식적인 공동체 언어로 작성되어야 합니다.<br><br>
				    </span>	
				    	
						<li>기술문서에는 다음 서류를 포함하여야 합니다.</li>
                          <span style="display:block;text-align:left;font-weight:300;">
                            &nbsp; &nbsp; &#10051; 기계에 관한 일반적인 설명<br>
                            &nbsp; &nbsp; &#10051; 기계의 전체 도면과 기계류의 적합성을 점검하기 위해 필요한 세부적인 도면<br>
                            &nbsp; &nbsp; &#10051; 기계류에 적용되는 필수적인 건강 및 안전 요구 사항의 목록<br>
                            &nbsp; &nbsp; &#10051; 식별된 위험을 감소시키기 위해 실행된 보호 조치에 관한 설명, 기계류와 연관된 잔류위험의 지시<br>
                            &nbsp; &nbsp; &#10051; 이 표준에 포함된 필수적인 건강 및 안전 요구사항을 제시하는 표준<br>
                            &nbsp; &nbsp; &#10051; 제조업자에 의해 또는 제조자가 인정한 대리인이 선택한 기관에 의해 수행된 테스트 결과를 제시하는 보고서<br>
                            &nbsp; &nbsp; &#10051; 기계류 및 기타 제품에 대한 EC 적합성 선언서 사본<br><br>
                          </span>
						<li>기술문서는 기계 제조일자로부터 최소 10년동안 이용이 가능하여야 합니다.</li><br>
					</ul>
					
					
					<ul>
					<span style="display:block;text-align:justify;font-weight:300;">
					  <p style="display:block;font-weight:bold;">EC 적합성 선언-Declarative of Conformity</p>
					  CE마크를 부착하기 위해서 제조업체는 제품이 적용 지침과 표준 규정에 적합함을 나타내는 적합성 선언서를 발행하여야 합니다. 대부분의 기계 제조 업체는 자가 적합성 선언이 가능합니다. 전기 톱과 같은 고위험 기계를 포함하는 몇 가지 제품 범주는 제 3자 인증이 필수적으로 요구됩니다..<br><br>
                      
                      강제안전인증은 기계류 사용으로 인한 수많은 사고로 인해 사회적 비용 손실과 제품을 안전하게 설계하고 적합하게 설치하며 유지관리를 잘하고 기계를 사용하는 작업자가 적절하게 사용하여 작업자의 안전을 확보하기 위해서 실시합니다.<br><br>
                      
                      제조업체는 EU 적합성 선언서를 작성, 서명하여 하며 DoC에는 적용한 harmonized legislation과 제조업체, 유럽 대리인, 인증기관의 정보를 반드시 기입하여야 하며 필요한 경우, 조화 규격, 제품, 기술 사양과 같은 정보를 추가 기재하여야 합니다.<br><br>
                      
                      기술문서와 동일하게 DoC는 제품이 출시된 시점으로부터 10년간 보관되어야 합니다. DoC의 보관 의무는 제조업체 또는 유럽대리인에게 있으며, 수입 제품의 경우에는 수입업자에게 책임이 있습니다.<br><br>
				    </span>	
				    	
						<li>DoC에는 다음과 같은 사항이 포함되어야 합니다.</li>
                          <span style="display:block;text-align:justify;font-weight:300;">
                            &nbsp; &nbsp; &#10051; 제조업자와 해당하는 경우 제조업자가 인정한 대리인의 상호 및 전체 주소<br>
                            &nbsp; &nbsp; &#10051; 기술 서류를 편집할 권한이 있는 사람의 이름 및 주소<br>
                            &nbsp; &nbsp; &#10051; 일반적인 증명, 기능, 모형, 일련번호 및 상호를 포함한 기계류에 대한 설명 및 증명<br>
                            &nbsp; &nbsp; &#10051; 기계류가 본 지침이 모든 관련 규정을 수행했다고 분명히 선언하는 문장<br>
                            &nbsp; &nbsp; &#10051; 해당하는 경우 기계류에 적합한 기타 지침 및/혹은 관련 규정을 선언하는 유사 문장<br>
                            &nbsp; &nbsp; &#10051; 인증기관의 이름, 주소 및 식별 번호, 인증서의 수<br>
                            &nbsp; &nbsp; &#10051; 사용된 조화 표준에 대한 기준<br>
                            &nbsp; &nbsp; &#10051; 사용된 기타 기술 표준과 시방서에 대한 기준<br>
                            &nbsp; &nbsp; &#10051; 인증장소 및 날짜<br>
                            &nbsp; &nbsp; &#10051; 제조업자 혹은 제조업자가 인정한 대표자 대신에 선언서를 작성하도록 위임한 사람의 신분 및 서명<br><br>
                          </span>
					</ul>

					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
					
					
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC의 역량</p>
					<ul>
						<li>IGC는 유럽의 인증기관(NB: Notified Body)와 협력을 통해 제품인증을 진행하고 있으며, CE Machinery, CE MDD, CE IVD, CE LVD 등의 제품인증 서비스를 제공하고 있습니다. </li>
						<li>IGC 인증원은 다년간 쌓아온 기술력 및 전문성과 더불어 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구사항에 대한 최신 지식을 보유하고 있습니다.</li>
						<li>고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
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
				<li><p><em><strong>01</strong></em><span>기술문서 작성 지원</span></p></li>
				<li><p><em><strong>02</strong></em><span>안전성 시험 지원</span></p></li>
				<li><p><em><strong>03</strong></em><span>고객 요구사항에 대한 자문</span></p></li>
				<li><p><em><strong>04</strong></em><span>설계 검토 지원</span></p></li>
				<li><p><em><strong>05</strong></em><span>EN ISO 12100에 대한 위험 평가 지원</span></p></li>
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