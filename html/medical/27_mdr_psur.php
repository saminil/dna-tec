<?php 	
	include "../../../../common.php";
	$tmenu_ = "임상"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "PSUR"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "PSUR"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">



<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#87bf78 }
    .point_b1{color:#87bf78;font-weight: 600;font-size: 1.2em }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto; font-size: 1.1em;font-weight: 400;line-height: 1.5}
    
	.page_title{width:90%; margin:0 auto 70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:40px auto 0; border:1px solid #000;}
	.page_title h2{width:100%; margin:70px auto; text-align:justify; font-size:1.2em; color:#666;}
    
    .page_title li strong { font-size: 1.1em }
    .business_type5 h2{font-weight:700; font-size:2em; color:#87bf78; text-align:center; margin-bottom:25px;}
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

    .logo_location {width: 100%;text-align: center;margin: 70px auto}
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
            <h1 class="sub_tit"><span class="fc_pointer">PSUR이란?</span></h1>
            <h2 class="sub_tit2">PSUR은 승인된 의료기기에 대한 안전성 및 성능에 대한 평가를 제공하기 위한 문서입니다.</h2>
            <p class="logo_location"><img src="/theme/dna/img/psur.jpg" style="width: 70%"></p>
            <div class="txt03">
                <span>
                    <ul style="width: 80%;margin: 0 auto">
                        <li><strong>PSUR</strong><br><br>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;PSUR의 목표는 안전성 및 성능에 대한 새로운 위험 등을 식별하여 포괄적이고 비판적인 분석을 제시하는 것입니다.</div><br><br>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Class IIa, Class IIb, Class III 등급의 의료기기를 제조하는 업체는 PSUR을 제출해야 하며 PMS 데이터 분석에 대한 보고서를 인증기관에 제출하고 이를 인증기관이 검토한 이후 결과를 EUDAMED에 등재하여야 합니다.</div><br><br>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;PSUR에는 위험과 기회에 대한 결론, PMCF 보고서, 제품 판매량 및 제품을 사용하는 인구의 특성 및 의료기기를 사용하는 빈도에 대한 평가가 포함되어야 합니다. 주기는 Class IIb, Class III 기기는 매년 업데이트하며, Class IIa 기기는 최소 2년에 한번 실시합니다.</div>
                        </li>
                   </ul>
                </span>
            </div>
	    </div>
    </div><!-----class="company 종료-------->	
    <strong class="con_arrow"><p>DNA TECHNOLOGIES PICIFIC의 PSUR 서비스</p></strong>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>Class IIa, Class IIb, Class III 등급의 위험성이 높은 의료기기를 제조하는 업체는 PSUR을 필수로 제출해야 하며 인증기관이 데이터를 EUDAMED에 등재하여야 하므로,</span></p></li>
				<li><p><em><strong>02</strong></em><span>DNA Technologies Pacific은 고객이 요청할 경우 PSUR 보고서를 작성하는 것을 지원하고 기술문서에 적용할 수 있도록 도와드립니다.</span></p></li>
			</ul>
		</div><br><br><br><br>
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<!---?php
	include "../include/tail.php"; 
?---->
<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>