<?php
	include_once('./_common.php');
$g5['title'] = 'CE IVD/IVDR';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.8em;}
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_ceivdivdr_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_ceivdivdr_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_ceivdivdr_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_ceivdivdr_04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_ceivdivdr_05.jpg') no-repeat center top;}
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE/IVDIVDR|체외진단용 의료기기 지침 </span> / 유럽 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            
            체외진단용 의료기기 지침 (In-vitro diagnostic medical devices Directive 98/79/EC, IVD)은 1998년 12월 7일 제정되어 2003년 12월 7일부터 유럽시장에서 판매되는 모든 체외 진단용 의료기기에 적용되었습니다. 이 지침에 적합한 기기에 대해서는 CE 마크가 부착되며, EU는 체외진단 의료기기에 CE 마크 부착을 의무화하고 있습니다.<br><br>
            
            유럽연합은 2017년 의료기기 ‘규정 (regulation)’을 제정하여 의료기기에 관한 법제를 전면 개정하였습니다. 기존 ‘지침 (directive)’의 형식과 달리 ‘규정 (regulation)’은 직접 회원국에 적용되는 법적 효력을 가지며 회원국의 이행입법을 통하지 않고 직접 적용됩니다.<br><br>
          
            체외진단 의료기기 규정 (EU Regulation 2017/746, IVDR)은 2017년 5월 26일 발효되었으며, 5년의 경과기간 (transition period)을 거쳐 2022년 5월 26일부터 체외진단 의료기기 규정이 강제 적용됩니다.<br><br>

            
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">체외진단의료기기의 이해</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">	
						  체외진단 의료기기 규정은 IVDR Article 2 ‘체외진단 의료기기 정의’에 부합하는 기기에 적용됩니다. 체외진단 의료기기란 단독 또는 조합으로 다음 중 하나 이상에 대한 정보를 제공할 목적으로 인체에서 유래한 혈액 및 조직 기증을 포함한 표본 검사를 위해 체외에서 사용하도록 제조자가 의도한 시약, 시약제품, 측정기, 제어 물질, 키트, 기기, 기구, 장비, 소프트웨어 및 시스템인 의료기기를 의미합니다.
						</li> <br>
                         <span style="font-weight:200;display:block;text-align:left;">
                          &nbsp; &nbsp; &nbsp; (a) 생리적 또는 병리학적 과정 또는 상태에 관한 것;<br>
                          &nbsp; &nbsp; &nbsp; (b) 선천적 신체적 또는 정신적 장애에 관한 것;<br> 
                          &nbsp; &nbsp; &nbsp; (c) 의학적 상태 또는 질병의 소인에 관한 것;<br> 
                          &nbsp; &nbsp; &nbsp; (d) 잠재적 대상자와의 안전성 및 호환성을 결정하기 위해;<br> 
                          &nbsp; &nbsp; &nbsp; (e) 치료 반응 또는 작용을 예측하기 위해;<br> 
                          &nbsp; &nbsp; &nbsp; (f) 치료 조치를 정하거나 또는 모니터링하기 위해;<br> <br>
                    
                           &nbsp; &nbsp;표본 용기도 체외진단 의료기기로 간주됩니다.<br><br>						
                          </span>
						<li style="margin:0 auto;text-align:justify;"> 
						인증받고자 하는 제품의 의도된 사용 목적이 법령에서 규정하는 체외진단 의료기기 정의에 부합하고 IVDR 요구사항을 충족할 경우 CE Marking을 부착할 수 있으며, 유럽경제지역에 의료기기를 판매할 수 있습니다.
						</li>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IVD/IVDR 주요 변경 사항</p>
					<ul>
                        <li style="margin:0 auto;text-align:justify;">	
						  IVD는 24개 조, 10개 부속서로 구성되어 있으며, IVDR은 10개 장, 113개 조, 15개 부속서로 구성되어 있습니다. IVD가 IVDR로 대체되면서 요구사항이 추가되었으며 제품에 대한 관리가 강화되었습니다.
						</li> <br>
                       
                        <li style="margin:0 auto;text-align:justify;">	
						  주요 변경 사항은 아래와 같습니다.
						</li> 
                    
					    <table cellspacing="0" cellpadding="0" style="width:100%;border: 1px solid #444444;">
                            <col width="196">
                            <col width="141" span="5">
                            <tr>
                              <td width="196" align="center" bgcolor="#96F384">주요 변경    사항</td>
                              <td width="705" colspan="5" align="center" bgcolor="#96F384">세부 내용</td>
                            </tr>
                            <tr>
                              <td width="196" rowspan="9" align="center">의료기기 등급 분류 체계 변동</td>
                              <td colspan="5" width="705">IVD에서는 General, Self-testing, List B, List A로 등급을 분류하였지만,    IVDR에서는 A, B, C, D로 등급 분류체계가 변경되었습니다.</td>
                            </tr>
                            
                            <tr>
                              <td colspan="5" width="70%">　</td>
                            </tr>
                            <tr>
                              <td width="141" rowspan="5">　　　　　</td>
                              <td width="141" align="center">IVD 분류</td>
                              <td width="141" align="center">IVDR 분류</td>
                              <td width="141" align="center">위험도</td>
                              <td width="141" rowspan="5">　　　　　</td>
                            </tr>
                            <tr>
                              <td width="141" align="center">General</td>
                              <td width="141" align="center">A</td>
                              <td width="141" align="center">저</td>
                            </tr>
                            <tr>
                              <td width="141" align="center">Self-testing</td>
                              <td width="141" align="center">B</td>
                              <td width="141" align="center">↓</td>
                            </tr>
                            <tr>
                              <td width="141" align="center">List B</td>
                              <td width="141" align="center">C</td>
                              <td width="141" align="center">고</td>
                            </tr>
                            <tr>
                              <td width="141" align="center">List A</td>
                              <td width="141" align="center">D</td>
                              <td width="141" align="center">　</td>
                            </tr>
         
                            <tr>
                              <td colspan="5" width="70%">　</td>
                            </tr>
                            
                            <tr>
                              <td width="196" align="center">적합성 평가 절차의 변동</td>
                              <td colspan="5" width="705">Class A의 경우 인증기관을 통한 적합성 평가를 거치지 않아도 됩니다. 단,    Class A 이상의 기기 혹은 Class A 기기 중 멸균되는 기기 (Class As)는 인증기관을 거쳐야 하며 이와 더불어 품질관리    시스템도 요구됩니다.</td>
                            </tr>
                            <tr>
                              <td width="196" align="center">경제운영자들의 의무사항 변동</td>
                              <td colspan="5" width="705">경제운영자들 (제조업자, 위임대리인, 수입업자, 유통업자)의 의무가 강화 및    추가되었습니다.</td>
                            </tr>
                            <tr>
                              <td width="196" rowspan="2" align="center">성능 평가에 관한 변동</td>
                              <td colspan="5" width="705">IVDR에서는 성능에 대한 정확하고 추가적인 자료 작성이 요구되며 과학적 유효성,    분석 성능, 임상 성능에 대한 내용이 포함되어야 합니다.</td>
                            </tr>
                            <tr>
                              <td colspan="5" width="705">Class D의 경우, EU 기준 시험소에 의한 시험이    요구됩니다.</td>
                            </tr>
                            <tr>
                              <td width="196" align="center">고유식별코드 (UDI) 도입</td>
                              <td colspan="5" width="705">식별 및 추적성 확보와 시판 후 안전 확보를 위하여 고유식별코드 (UDI)를    도입하여야 합니다.</td>
                            </tr>
                            <tr>
                              <td width="196" align="center">소프트웨어에 관한 요구사항</td>
                              <td colspan="5" width="705">IVD에는 포함되지 않았던 소프트웨어 관련 규정이 강화되었습니다.</td>
                            </tr>
                        </table>

					</ul>
            		<br>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					
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
			<p>우리가 제공하는 서비스,</p>
		</h2>
		<div class="con_box">
			<ul>
			IGC는 고객의 해외시장 진출 및 경쟁력 제고를 위한 여러 분야의 인증서비스 및 시험서비스를 제공합니다.<br>
				<li><p><em><strong>01</strong></em><span>유럽 제품인증 (CE MDD, CE LVD/EMC, CE Machinery, PED, SPVD 등)</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
				<li><p><em><strong>03</strong></em><span>유라시아 제품인증 (EAC 인증, 의료기기, 식품, 화장품, 의약품 등)</span></p></li>
				<li><p><em><strong>04</strong></em><span>러시아 제품인증 (GOST-R, 의료기기 러시아 등록)</span></p></li>
				<li><p><em><strong>05</strong></em><span>미주 제품인증 (FDA, 의료기기, 전자 및 방사선 장치, 의약품, 식음료품, 건강 보조 식품, 화장품)</span></p></li>
				<li><p><em><strong>05</strong></em><span>중국 제품인증 (CFDA, 식품 위생 등록)</span></p></li>
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