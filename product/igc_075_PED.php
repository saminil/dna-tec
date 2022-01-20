<?php
	include_once('./_common.php');
$g5['title'] = '유럽제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    table,td p {font-size:0.9em;margin-left:0px;padding-left:20px;}
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
    
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_PressureEquipmentDirective_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_PressureEquipmentDirective_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_PressureEquipmentDirective_03.jpg') no-repeat center top; }

    
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 13%; }
    
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">PED(Pressure Equipment Directive)</span> / 2014/68/EU </h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            PED란 Pressure Equipment Directive(2014/68/EU)의 약어로써, 압력용기 지침으로 최대 허용 압력이 0.5bar 이상인 압력용기 및 부품의 설계, 제조 및 적합성 평가에 적용됩니다. EU 국가에 해당 제품의 수출을 원하는 제조자는 압력용기 지침에 따라 인증을 받아야 하며, 압력용기 지침은 2016년 7월 19일자로 97/23/EC에서 2014/68/EU로 개정되었습니다.
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">인증범위</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">
						이 지침은 최대 허용 압력이 0.5bar 이상인 압력 장비 및 조립품의 설계, 제조 및 적합성 평가에 적용됩니다. 선박, 배관, 안전 부속품 및 압력 부속품이 모두 포함됩니다.<br><br></li>
                         <span style="display:block;text-align:justify;font-weight:300;">	
                         <p style="font-weight:bold;">적용 압력 장비</p>
                         &#9745; 수관 보일러<br>
                         &#9745; 열교환기<br>
                         &#9745; 압력용기<br>
                         &#9745; 파이프<br>
                         &#9745; 전기 난방기<br>
                         &#9745; 밸브(절연, 제어)<br>
                         &#9745; 미터<br>
                         &#9745; 방출 밸브<br>
                         &#9745; 안전 밸브<br>
                         &#9745; 제어된 안전 압력 방출 시스템<br>
                         &#9745; 압력 스위치<br>
                         &#9745; 온도 전환<br>
                         &#9745; 유체 레벨 스위치<br><br>
                         </span>

                         <span style="display:block;text-align:justify;font-weight:300;">	
                         <p style="font-weight:bold;">적용 제외 품목</p>
                         
                         &#9745; 단순 압력용기 지침(Simple Pressure Vessels Directive, SPVD)과    이동용 압력용기 지침(Transportable Pressure Equipment Directive, TPED)에 적용되는 품목<br>
                         &#9745; 상대적으로 가압이 낮은 제품: 기계지침(Machinery Directive)<br>
                         &#9745; 압력용기<br>
                         &#9745; 차량용 장비 등<br>
                         </span>

					</ul>
					
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">압력 기기의 입증 (CE marking)</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">
                        최대 허용 압력(PS), 사용 유체(fluid), 내용적(Volume) 및 외경(DN)에 따라 압력 기기는 Category I, II, III, IV의 4단계로 분류되어, 아래의 표와 같이 해당 category에서 적용 가능한 Module 요구 사항에 따라 인증 절차를 진행합니다. 적합성 평가 시 세부 기술 요구 사항에 대해서는 EN 13445, AD2000 등의 유럽 기술 규격과 ASME code 등을 적용합니다.<br><br>
                        </li>
                         

						<li style="margin:0 auto;text-align:justify;">
						Annex II, 적합성 평가 테이블
						</li>
                          <table border="1" cellspacing="0" cellpadding="5">
                            <tr>
                              <td width="156" align="center" valign="top"><p>Category</p></td>
                              <td width="446" align="center" valign="top"><p>Modules</p></td>
                            </tr>
                            <tr>
                              <td width="156" align="center" valign="top"><p>I</p></td>
                              <td width="446" align="left" valign="top"><p>Module A</p></td>
                            </tr>
                            <tr>
                              <td width="156" align="center" valign="top"><p>II</p></td>
                              <td width="446" align="left" valign="top"><p>Modules A2, D1, E1</p></td>
                            </tr>
                            <tr>
                              <td width="156" align="center" valign="top"><p>III</p></td>
                              <td width="446" align="left" valign="top"><p>Modules B(Design type)+D, B(Design type)+F,    B(Production type)+E, B(Production type)+C2, H</p></td>
                            </tr>
                            <tr>
                              <td width="156" align="center" valign="top"><p>IV</p></td>
                              <td width="446" align="left" valign="top"><p>Modules B(Production type)+D, B(Production type)+F,    G, H1</p></td>
                            </tr>
                          </table>

						<br>
						
						<li>Annex III, 적합성 평가 절차</li>
						<table border="1" cellspacing="0" cellpadding="5">
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module A</p></td>
                              <td width="442" align="left" valign="top"><p>내부생산관리 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module A2</p></td>
                              <td width="442" align="left" valign="top"><p>내부생산관리+무작위 주기로 감독 하에 제품 검사 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module B</p></td>
                              <td width="442" align="left" valign="top"><p>EU-형식검사(Production type)<br>
                              EU-형식검사(Design type)</p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module C2</p></td>
                              <td width="442" align="left" valign="top"><p>내부생산관리에 기반한 형식적합성+무작위 주기로 감독 하에 제품 검사 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module D/D1</p></td>
                              <td width="442" align="left" valign="top"><p>D: 생산공정의 품질보증에 기반한 형식적합성 <br>
                              D1: 생산공정의 품질보증 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module E/E1<strong></strong></p></td>
                              <td width="442" align="left" valign="top"><p>E: 제품 품질보증에 기반한 형식적합성 <br>
                              E1: 최종 제품의 검사 및 시험의 품질보증 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module F<strong></strong></p></td>
                              <td width="442" align="left" valign="top"><p>제품검증에 기반한 형식적합성 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module G</p></td>
                              <td width="442" align="left" valign="top"><p>단위검증에 기반한 적합성 </p></td>
                            </tr>
                            <tr>
                              <td width="160" align="center" valign="top"><p>Module H/H1<strong></strong></p></td>
                              <td width="442" align="left" valign="top"><p>H: 완전품질보증에 기반한 적합성 <br>
                              H1: 완전품질보증에 기반한 적합성+설계검사 </p></td>
                            </tr>
                        </table>
                        
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">	
					</ul>
                </div> <!------// class="txt_area" 종료-------------->  
            </div>	<!--------// class="backImg" 종료 ------------>				
		
					
            <div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC의 역량</p>
					<ul>
						<span style="display:block;text-align:left;font-weight:300;">
						   &#9813; IGC는 다년간의 축적된 경험을 바탕으로 유럽에 제품을 수출하고자 하는 기업을 대상으로 다양한 분야에 대한 제품인증 서비스를 제공하고 있습니다.
                         </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						   &#9813; 해외 유수의 제품인증 기관과 협력관계 구축을 통하여 가장 경쟁력 있는 제품인증 서비스를 제공하고 있습니다.
                         </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						   &#9813; ISO 9000, 품질경영시스템을 이미 준수하는 기업은 현재의 품질 시스템을 최대한 활용할 수 있고 이를 기반으로 PED의 필수 안전 요구사항을 만족시킬 수 있습니다. 
                         </span>
                         <span style="display:block;text-align:left;font-weight:300;">
						   &#9813; 제조업체가 정식으로 품질 경영 시스템 인증을 받지 않았다면 PED QA 접근 방식에 따라 IGC가 인증 기관 서비스를 제공해 드립니다. 
                         </span>
					</ul>
					
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div> <!-----// class="backImg" 종료----------->
           			
		 </div>  <!--------//  div class="business_info" 종료  --------------->
		
	   </div> <!------------// class="business_type3" 종료--------------->
	
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>의료기기</span></p>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#9830;MEDICAL DEVICES<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#9830;IN-VITRO DIAGNOSTIC DEVICES<br>
				</li>
				<li><p><em><strong>02</strong></em><span>전기/전자 제품</span></p>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#9830;LOW-VOLTAGE DIRECTIVE 적용제품<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#9830;ELECTRO MAGNETIC COMPATIBILITY 적용 제품<br>
				</li>
				<li><p><em><strong>03</strong></em><span>개인보호장구(PPE)</span></p></li>
				<li><p><em><strong>04</strong></em><span>기계류(MACHINERY)</span></p></li>
				<li><p><em><strong>05</strong></em><span>완구</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   

	
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
