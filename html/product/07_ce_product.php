<?php 	
	include "../../../../common.php";
	$tmenu_ = "제품인증"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "CE"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "CE"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>




<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">



<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#05a6a4 }
    .point_b1{color:#05a6a4;font-weight: 600;font-size: 1.2em }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto; font-size: 1.1em;font-weight: 400;line-height: 1.5}
    
	.page_title{width:90%; margin:0 auto 70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:40px auto 0; border:1px solid #000;}
	.page_title h2{width:100%; margin:70px auto; text-align:justify; font-size:1.2em; color:#666;}
    
    .page_title li strong { font-size: 1.1em }
    .business_type5 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
    .business_type5 li strong { font-size: 1.1em }
    
    table {width: 100%;border: 1px solid #444444;border-collapse: collapse;}
    th, td {border: 1px solid #444444;padding: 10px;}
    
    .con_arrow{ width:100%; padding-bottom:20px; text-align: left;}
    .con_arrow p{position:relative; font-size:2em; color:#000;margin-bottom: 20px}
    .con_box{ width:100%; padding:20px 0; border-top:1px solid #000}
    .con_box:after{content:""; display:block; clear:both;}
    .con_box ul {padding:0; margin:0; }
    .con_box ul li {list-style:none; margin:10px 0; }
    .con_box ul li p{display:table; width:100%; }
    .con_box ul li p > em,.con_box p > span{display:table-cell; vertical-align:top; }
    .con_box ul li p > em{ width:30px; }
    .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
    .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    
    .txt03{ width:100%; margin: 0 auto; border-top:1px solid #ddd; font-size:1em; color:#555; line-height:1.5em; text-transform: uppercase; background:#f8f8f8; overflow:hidden;word-break: keep-all}
	.txt03 span {display:block; padding:25px}/* 중앙 하단 텍스트 들어갈 박스 */
    
    .con_arrow p{width: 90%;margin: 0 auto 20px}
    .con_box{width: 90%;margin: 0 auto}

    .logo_location {width: 100%;text-align: center;margin: 0 auto}
    .logo_location img {width: 40%;}
    .sub_txt {width: 100%;margin: 70px auto;text-align: justify}
    

	@media screen and (max-width:992px){		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}
        .txt03 {position:relative !important; margin-top:40px;}
		.txt03 span {height:auto;}
	}

	@media all and (max-width:768px){
		.business_type5 h1{font-size:1.8em; }
		.business_type5 h2{font-size:1.4em; }
		.business_type5 h3{font-size:0.9em; padding:0 5px;}
		.business_type5 ul li dl, .business_type5 ul li dl dt, .business_type5 ul li dl dd{display:block; width:100%;}
		.business_type5 ul li dl dt{padding:5%;}
		.business_type5 ul li dl dt img{width:91%;}
		.business_type5 ul li dl dd > strong{line-height:30px; font-size:1.3em;}
		.business_type5 ul li dl dd{width:90%; padding:5%; padding-top:0;}
		.business_type5 ul li dl dd > p{line-height:24px; font-size:0.95em;}
		.business_type5 ul li dl dd > p:before{top:10px;}
	}

	@media all and (max-width:480px){
		.business_type5 h3 br.sn{display:inline;}
	}
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */    
</style>

<br>
<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
    <div class="business_type2"><!-----class="company 시작-------->
        <div class="page_title">
            <h1 class="sub_tit"><span class="fc_pointer">CE 인증</span></h1>
            <div class="sub_txt">
                <p><strong class="point_b1">전기전자 - CE LVD/EMC</strong></p>
				<p>
				    유럽은 전기전자 제품의 안전에 대하여 저전압 지침 또는 전자파 적합성 지침을 적용하고 있으며, 전기전자제품 인증분야에서 취급하는 안전 규격은 통상적으로 Electrical Safety를 의미합니다. 이는 예측 또는 예측하지 못한 상황에서 발생할 수 있는 위험요소로부터 인체 및 재산상의 손해를 방지하기 위한 것입니다.
				</p><br><br>
				<p><strong class="point_b1">기계 - CE Machinery</strong></p>
				<p>
				    유럽 시장으로 기계를 판매하고자 하는 기업은 기계류 지침을 준수해야 합니다. 해당 지침에서 기계류는 ‘적어도 하나의 부분이 가동부분으로서 구비되어 있으며, 서로 관계 있는 부품, 부분품이 다 갖추어진 것 그리고 적절한 가동기, 제어기 및 동력회로가 있는것’으로 정의되어 있습니다.
				</p><br><br>
				<p><strong class="point_b1">압력용기 - CE PED, CE SPVD</strong></p>
				<p style="margin-bottom:6px">① CE PED&nbsp;&nbsp;-&nbsp;&nbsp;PED (Pressure Equipment Directive)는 최대 허용 압력이 0.5 bar 이상인 압력 용기 및 부품의 설계, 제조 및 적합성 평가에 적용되며, 유럽 국가에 해당 제품의 수출을 원하는 제조자는 압력용기 지침에 따라 인증을 받아야 합니다.</p>
				<p style="margin-bottom:6px">② CE SPVD&nbsp;&nbsp;-&nbsp;&nbsp;SPVD (Simple Pressure Vessels Directive)는 단순압력용기의 내부압력이 0.5 bar 이상인 용접 용기로 공기나 질소를 함유하고 있으며 비화성인 모든 유체를 대상으로 하는 압력용기에 적용되며 연속적으로 제조되는 단순압력용기에 적용됩니다.</p><br><br>
				<p><strong class="point_b1">보일러 - Hot-water boiler</strong></p>
				<p>
				    92/42/EEC는 정격 출력이 4 kW 이상 400 kW 이하인 액체 또는 기체 연료로 연소되는 새로운 온수 보일러의 효율성 요건에 대한 지침으로, 액체 또는 가스로 연소되는 온수 보일러에 효율 요건을 설정함으로써 에너지 효율을 개선하기 위해 만들어졌습니다.
				</p><br><br>
				<p><strong class="point_b1">가스기기 - Gas appliance</strong></p>
				<p>
				    유럽의 가스기기 규정으로 온수 생산, 냉장, 조명, 난방, 세탁, 조리의 목적으로 제작된 가스용품 및 부속품에 적용됩니다.
				</p>
            </div>
            <p class="logo_location"><img src="http://igcert.org/theme/rt_igcert/product/images/product_celvdemc_01.jpg" style="width: 70%"></p>
	    </div>
	    <strong class="con_arrow"><p>DNA TECHNOLOGIES PICIFIC 주요 사업영역</p></strong>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>의료기기의 CE 인증을 위한 안전 및 유효성 임상 시험</span></p></li>
				<li><p><em><strong>02</strong></em><span>CE 인증 의료기기의 PMCF 진행</span></p></li>
				<li><p><em><strong>03</strong></em><span>PMCF Plan, Protocol, Investigator's Brochure 작성 지원</span></p></li>
				<li><p><em><strong>04</strong></em><span>임상시험 데이터 관리</span></p></li>
				<li><p><em><strong>05</strong></em><span>시스템 및 제품 인증 기술 지원</span></p></li>
			</ul>
		</div><br><br><br><br>
    </div><!-----class="company 종료-------->	
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<!---?php
	include "../include/tail.php"; 
?---->
<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>