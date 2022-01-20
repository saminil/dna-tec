<?php 	
	include "../../../../common.php";
	$tmenu_ = "기타업무"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "EU대리인"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">



<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#a66832 }
    .point_b1{color:#a66832;font-weight: 600;font-size: 1.2em }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto; font-size: 1.1em;font-weight: 400;line-height: 1.5}
    
	.page_title{width:90%; margin:0 auto 70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:40px auto 0; border:1px solid #000;}
	.page_title h2{width:100%; margin:70px auto; text-align:justify; font-size:1.2em; color:#666;}
    
    .page_title li strong { font-size: 1.1em }
    .business_type5 h2{font-weight:700; font-size:2em; color:#a66832; text-align:center; margin-bottom:25px;}
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
            <h1 class="sub_tit"><span class="fc_pointer">EU대리인이란?</span></h1>
            <h2 class="sub_tit2">EU 대리인(EU authorized representative)는 EU 외부에 위치하는 제조업체로부터 서면 위임을 받고 수락된 EU 내부의 개인 또는 법인을 의미하며,
            대리인은 의료기기 규정하의 의무와 관련된 EU내의 특정 업무에 대하여 제조업체를 대신하여 대리 업무를 수행하게 됩니다.</h2>
            <p class="logo_location"><img src="/theme/dna/img/other01.jpg"></p>
            <div class="txt03">
                <span>
                    <ul style="width: 80%;margin: 0 auto">
                        <li><strong>EU 대리인의 의무</strong><br><br>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;제조업체와 EU관할 내의 당국 사이의 연락 담당</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;필요 시 의료기기 등록 지원</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;제조업체의 의료기기에 대한 최신 기술문서 보관</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;관할 기관의 요청 시, 기술문서, CE DoC 등의 사본 제공</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;의료기기 라벨, 포장, 사용 설명서에 해당 정보 표시 권한 제공</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;EU 역내로 수입되는 의료기기에 대한 파악 및 관리</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Vigilance에 대한 사고 및 현장 안전 시정 조치 (FSCA : Field Safety Corrective Acitons) 보고 지원</div>
                        </li>
                   </ul>
                </span>
            </div>
	    </div>
    </div><!-----class="company 종료-------->	
    <strong class="con_arrow"><p>DNA TECHNOLOGIES PICIFIC의 EU 대리인 서비스</p></strong>	
    <div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>규정에 따라 제조업체는 CE 인증 받고 의료기기를 EU 국가로 수출하기 위하여 EU 대리인을 필수로 지정해야 합니다.</span></p></li>
				<li><p><em><strong>02</strong></em><span>EU 이외의 지역에 위치하며 EU 내에 지사 또는 대리인이 따로 존재하지 않는 제조사를 위하여 EU 대리인 서비스를 제공하고 있습니다.</span></p></li>
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