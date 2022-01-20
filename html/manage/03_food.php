<?php 	
	include "../../../../common.php";
	$tmenu_ = "시스템인증"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "식품"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "식품"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>



<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">



<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#0388a6 }
    .point_b1{color:#0388a6;font-weight: 600;font-size: 1.2em }
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
            <h1 class="sub_tit"><span class="fc_pointer">식품 인증</span></h1>
            <div class="sub_txt">
                <p><strong class="point_b1">ISO 22000 식품안전 경영시스템</strong></p>
				<p>장비의 생산, 재료 포장, 세제, 첨가제 및 원료 등의 관련 기업을 포함하여 전체 식품 체인 비즈니스에 적합한 국제적인 표준입니다.</p><br><br>
				<p><strong class="point_b1">FSSC 22000 식품 안전 시스템</strong></p>
				<p>
				    식품 안전 시스템 인증(Food Safety System Certification) 표준으로 식품 제조사들에게 가장 영향력 있는 국제식품안전기구(GFSI: Global Food Safety Initiative)가 식품산업 전반에 적합한 식품안전 인증제도를 도입하기 위해 승인한 식품 안전 표준입니다.
				</p><br><br>
				<p><strong class="point_b1">FDA FSMA 식품안전 현대화법</strong></p>
				<p>
				    미국 정부가 사전 예방을 통한 식품 공급 안전성 및 국민건강 보호를 목적으로 식품안전현대화법(FSMA: Food Safety Modernization Act)를 제정 및 발효하였으며, 미국 FDA로 하여금 규제를 할 수 있는 권한을 부여하였습니다. 요구사항에 근거하여 미국으로 수입되는 모든 식품 및 생산 기업은 법에서 요구하는 식품 안전 시스템을 구비하여야 합니다.
				</p><br><br>
                <p><strong class="point_b1">HACCP(Hazard Analysis Critical Control Point)</strong></p>
				<p>
				    HACCP은 식품의 원료 및 제조공정에서 생물학적, 화학적, 물리적 위해요소들이 존재할 수 있는 상황을 과학적으로 분석하고 사전에 위해요소의 잔존, 오염될 수 있는 원인들을 차단하여 소비자에게 안전하고 위생적인 식품을 공급하기 위한 시스템이며, 위해 방지를 위한 사전 예방적 식품안전관리 체계입니다.

				</p><br><br>
                <p><strong class="point_b1">GMP(우수건강기능식품)</strong></p>
				<p>
				    건강기능식품 GMP 지정제도는 우수한 건강 기능식품의 제조 및 품질관리를 위하여 건강기능식품제조업의 허가를 받은 영업자가 위생적인 제조시설/설비를 갖추고 업체 자율 4대 기준서를 마련하여, 이를 적용하는 업체에 대해 정부기관(식품의약품안전처)이 인정하는 제도입니다.
				</p>
            </div>
            <p class="logo_location"><img src="http://igcert.org/theme/rt_igcert/manage/image/FSSC22000_01.jpg" style="width: 70%"></p>
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