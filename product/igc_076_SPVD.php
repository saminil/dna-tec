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
    table,td{font-size:96%;padding-left:20px;}
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_spvd_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_spvd_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_spvd_03.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(4){background:url('images/product_spvd_04.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(5){background:url('images/product_spvd_05.jpg') no-repeat center top; }

    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">SPVD–2014/29/EU<span style="font-size:45%;"> (Simple Pressure Vessels Directive)</span> </span> <br>
		 단순 압력 기기 유럽 제품인증 소개
        </h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            SPVD란 단순압력용기 지침(Simple Pressure Vessels Directive)으로 단순압력용기의 내부압력이 0.5이상인 용접 용기로 공기나 질소를 함유하고 있으며 비화성인 모든 유체를 대상으로 하는 압력용기에 적용되며, 연속적으로 제조되는 단순압력용기에 적용됩니다.<br>
            EU 국가에 해당 제품의 수출을 원하는 제조자는 단순압력용기 지침에 따라 인증을 받아야 하며, 단순압력용기 지침은 2016년 4월 20일자로 2014/29/EU로 개정되었습니다.
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">적용품목/적용 제외 품목</p>
					<ul style="display:block;text-align:left;">
                        <span style="font-weight:bold;">1.적용품목<br></span>
						압력용기의 내부 압력이 0.5 bar 이상인 용접용기로 공기나 질소를 함유하며 비화성인 모든 압력용기 <br><br>
						
                           &#9884; 압력을 받는 용기의 강도에 영향을 미치는 부위와 조립부품들은 비합금 재질의 강재, 비합금 알루미늄 또는 노화가 일어나지 않는 견고한 알루미늄합금으로 만들어져야 합니다.<br>
                           &#9884; 용기는 바깥쪽으로는 경판으로 닫혀진 원형 단면적의 원통형 부분 또는 원통형 부분과 동일축으로 회전하는 평판 혹은 동일축으로 회전하는 경판으로 구성됩니다.<br>
                           &#9884; 용기의 최대운전압력은 30 bar 를 초과하지 않아야 하며, 용기의 내용적과 압력의 곱은 10,000 bar/liter를 초과하지 않아야 합니다.<br>
                           &#9884; 용기의 최저운전온도는 -50℃보다 낮아서는 안되며 최대운전온도는 강재의 경우 300℃, 알루미늄과 알루미늄합금 용기의 경우는 100℃보다 높지 않아야 합니다.<br><br><br>
						
                        <span style="font-weight:bold;">2. 적용 제외 품목<br></span>
						   &#9884; 원자력에 사용될 목적으로 방사능 누출이 일어나지 않게 제작된 용기<br>
                           &#9884; 선박이나 항공기의 추진장치 또는 설비에 사용되는 용기<br>
                           &#9884; 소화기<br><br>
						
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">필수 요건</p>
					<ul style="display:block;text-align:left;">
						SPVD의 필수 요건은 다음과 같습니다: <br>
						1)	최대허용압력(PS) x 용량(V)이 50 bar.L를 초과하는 용기는 Annex I의 필수 안전 요구사항을 만족해야 합니다.<br>
                        2)	최대허용압력(PS) x 용량(V)이 50 bar.L 이하인 용기는 회원국 중 한 국가의 공학적 관행에 따라 설계되고 제조되어야 합니다.<br>
					</ul>
                
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">SPVD의 중요성</p>
					<ul style="display:block;text-align:left;">
						압력용기가 올바르지 않게 취급 및 평가되는 경우, 위험이 초래됩니다. 따라서 유럽지침 2014/29/EU(SPVD)은 모든 압력 용기가 인증기관에 의해 인증되어야 한다고 규정합니다.<br><br>

                        <p>이 규격은 다음 사항들에 도움을 줍니다.</p><br>
                        &#9882; 안전성을 포함한 적합성 평가 절차 충족<br>
                        &#9882; 제품 수출에 필요한 선결조건의 충족<br>
                        &#9882; 유럽 사용 규격 및 지침 요구사항 준수<br>
                        &#9882; 제품의 경쟁력 강화<br>
                        &#9882; 내부 생산관리 강화<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">적합성 평가 절차</p>
					<ul style="display:block;text-align:left;">
						단순 압력 용기는 최대허용압력(PS) x 용량(V)에 따라 module이 정해집니다.<br><br>
						
						<table cellspacing="0" cellpadding="0" border="1px">
                           <col width="116">
                           <col width="115">
                           <col width="454">
                           <tr>
                             <td rowspan="3" width="116">Module B +</td>
                             <td width="115">Module C1</td>
                             <td width="454">EU-형식 검사 + 내부    생산관리에 기반한 형식적합성 및 감독 하에 제품 테스트</td>
                           </tr>
                           <tr>
                             <td>Module C2</td>
                             <td width="454">EU-형식검사    + 내부 생산관리에 기반한 형식적합성 및 무작위 주기로 감도하에 제품 검사 </td>
                           </tr>
                           <tr>
                             <td>Module C3</td>
                             <td width="454">EU-형식검사    + 내부 생산관리에 기반한 형식접합성</td>
                           </tr>
                        </table>
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
						&#9812; IGC는 유럽의 인정기구인 FQC(First Quality Certification, NB2674)와 협약으로 단순 압력 용기에 대한 인증 서비스를 제공하고 있습니다. <br><br>
						
						&#9812; IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
						
                        &#9812; IGC는 제품인증의 신뢰할 수 있는 글로벌 리더로서 ISO SPVD은 물론 PED, Hot-water boiler 등에 대한 인증을 제공하고 있습니다.<br><br> 
                    
                        &#9812; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있습니다.<br><br> 
                    
                        &#9812; IGC는 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>

					</ul>

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
			IGC는 SPVD 외 다음과 같은 유럽 제품 인증 서비스를 제공하고 있습니다.<br><br>
				<li><p><em><strong>01</strong></em><span>Clinical evaluation </span></p></li>
				<li><p><em><strong>02</strong></em><span>CE IVD/IVDR</span></p></li>
				<li><p><em><strong>03</strong></em><span>CE LVD/EMC</span></p></li>
				<li><p><em><strong>04</strong></em><span>CE Machinery</span></p></li>
				<li><p><em><strong>05</strong></em><span>PED</span></p></li>
				<li><p><em><strong>06</strong></em><span>Hot water boiler</span></p></li>
				<li><p><em><strong>07</strong></em><span>Gas Appliance</span></p></li>
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