<?php
	include_once('./_common.php');
$g5['title'] = 'CE MDR';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/prodeuct_ce-mdr_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/prodeuct_ce-mdr_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/prodeuct_ce-mdr_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_ce-mdd_04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_ce-mdd_05.jpg') no-repeat center top; }
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CE/MDR</span> / 유럽 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="display:block;font-weight:bold;text-align:left;">CE Marking 이란 ?</span>
            <span style="margin:0 auto;display:inline-block;text-align:justify;">의료기기 규제는 유럽 연합 내에서 의료기기에 관한 법률을 조화하기 위한 것입니다. 법적으로 유럽 시장에 의료기기들을 판매하기 위해서는 제조자들은 MDR(Medical Device Regulation)의 요구 사항을 2020년 강제적용 이후 준수해야 합니다. 신청자의 제품 및 품질 시스템을 평가해야 하며 제조자는 제품들을 판매 하기전에 CE 마크를 부착해야 합니다.</span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">MDR 개요</p>
					<ul>
                        <span style="display:block;margin-left:5px;text-align:justify;">
                         <li> 적용규격 : Regulation (EU) 2017/745 of the European Parliament and of the Council of 5 Ap</li>
                         <li> 법규내용 : Council Directive 93/42/EEC (MDD) + Council Directive 90/385/EEC (AIMD)</li>
                         <li> 발효일자 : 2017년 05월 25일</li>
                         <li> 강제적용일자 : 2020년 05월 26일, MDR 발효 후, 3년의 유예기간</li>
                         <li> 목적 : 유럽 내 좀 더 안전하고, 효과적이고, 혁신적인 의료기기 시장을 만드는 것</li>
                         <li> MDD 인증서 최종 유효일자 : 2024년 05월 26일 (판매는 2025년 05월 27일까지)</li>
                         <li> 지침(Directive)에서 규제(Regulation)로 바뀜. Directive보다 Regulation 은 변경이 더 자주 일어나며, 강제성이 강화됨.</li> <br>
						 </span>
					</ul>
					
					
					<p class="tit" style="text-align:left;">주요 개정 내용</p>
					<ul>
                        <span style="display:block;margin-left:5px;text-align:justify;">
                         <li> 심사기관 (NB)에 대한 보건당국의 강력한 통제 : Sub-contractor 관리강화</li>
                         <li> Harmonized Standard 외에 제품별 공통기술사양(Common Specification) 도입 및 적용</li>
                         <li> 경제운영자 [Manufacturer, Importer, Distributor, Authorized Representative]의 책임 강화 </li>
                         <li> EUDAMED 시스템에 등록 의무화(제조자와 경제운영자간의 표준계약서 필요)</li>
                         <li> 제조업체에 대한 NB의 강력한 통제</li>
                         <li> Pre/Post Market 임상평가의 확장과 모든 임상 조사에 대한 관리, 제조자의 시판 후 시장감시(Vigilance & PMS) 강화</li>
                         <li> EUDAMED(European database on medical devices) 기반의 전산시스템 정착 : 제품등록, UDI, 경제운영자등록, NB 및 인증서, 임상조사, Vigilance & PMS, 시장조사(보건당국)</li>
                         <li> UDI System의 개선 및 도입 : ClassⅢ부터 순차 도입. 현재 FDA와 호환가능하나, 변경가능성 있음.</li>
                         <li> MDCG(Medical Device Coordination Group) : 보건당국 내 독립적인 전문가들로 구성된 의료기기조정그룹으로 Class III Implantable & Class IIb 능동기기 제품에 대한 임상평가 자문 및 적합성평가 정밀조사, NB평가, Class III 관리</li>
                         <li> Class I 재사용수술기구 : Class I 멸균/측정기기처럼 NB 심사대상 → 세척 등의 재가공(Reprocessing) 공정에 대해서만 실시</li>
                         <li> 임플란트카드 : 의사, 제조자, 환자, 제조번호, etc.</li>
                         <li> 규제 적합성 책임자 (Person Responsible for Regulatory Compliance) : 제조자와 유럽대리인 공통사항으로 1년 이상 품질 & RA 업문 경력, 4년제 대졸이상의 학력을 소지한자로서 기술문서와 제품출시에 책임. </li>
                         <li> 의료기기 정의에 속하지 않는 제품들에 대한 MDR 적용 → 필러, 매선, 레이저수술기(제모, 미용목적)</li>
						 </span>
					</ul>
					
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">TCF(Technical Document)에 포함될 내용</p>
					<ul>
					    <!---span style="display:block;text-align:left;font-weight:bold;">&#10048; TCF(Technical Document)에 포함될 내용</span---->
						<!----li style="margin:0 auto;text-align:justify;">의료기기 지침서(93/42/EEC)의 부속서 IX는 의료기기를 분류할 수 있는 18개의 규칙을 제공합니다. 이 규칙들에 따라 의료기기는 의료기기의 의도된 목적에 따라 분류됩니다.</li----->
                         <span style="display:block;text-align:left;font-weight:200;">
						    1.	 MDR Annex1의 GSPR(General Safety and Performance Requirements) Check List 작성<br>
                            2.	 Biological Safety Assessment Report (ISO10993-1:2018)<br>
                            3.	 Risk Management Plan (ISO14971:2019)<br>
                            4.	 Risk Management Report<br>
                            5.	 Usability Validation Plan (IEC62366-1:2015)<br>
                            6.	 Usability Validation Report<br>
                            7.	 Clinical Evaluation Plan (MEDDEV 2.7/1 :2016<br>
                            8.	 Clinical Literature Search Protocol<br>
                            9.	 Clinical Literature Search Report<br>
                            10.	 Adverse Event Search Report<br>
                            11.	 Clinical Evaluation Report<br>
                            12.	 공정 (멸균, 세척, 포장, Clean Room) Validation Report 준비<br>
                            13.	 Software Validation Plan<br> 
                            14.	 Software Validation Report<br> 
                            15.	 제품도면 및 개략도<br>
                            16.	 제조공정도<br>
                            17.	 User Manual (Instructions for use)<br>
                            18.	 사용원자재 List(중요부품) 등<br>
                            19.	 Product Label<br>
                            20.	 SSCP(Summary of safety and clinical perpormance)매년 up load : Implantable 및 Class III Article 32<br>
                            21.	 PSUR(Periodic Safety Update Report) 정기적으로 up date : IIa, IIb, III 제품 Article 86<br>
                            22.	 DOC (Declaration of Conformity)<br>
                         </span>
					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">IGC의 역량 및 관련 제공 서비스</p>
					<ul style="display:block;margin-left:5px;text-align:justify;">
						<li>IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다. </li>
						<li>IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.</li>
						<li>또한, IGC는 의료기기 분야에서의 다양한 인증 관련 서비스를 제공하고 있습니다.</li><br>
						
						&#10022; 93/42/EEC<br><br>
						&#10022; ISO 13485<br><br>
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