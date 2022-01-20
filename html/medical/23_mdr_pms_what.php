<?php 	
	include "../../../../common.php";
	$tmenu_ = "임상"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "PMS란?"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "PMS란?"; //커스텀페이지의 타이틀을 입력합니다.
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

    .logo_location {width: 100%;text-align: center;margin: 0 auto 70px}
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
            <h1 class="sub_tit"><span class="fc_pointer">PMS(Post-market surveillance)란?</span></h1>
            <h2 class="sub_tit2">'PMS'는 제조업체가 EU 시장에 출시한 의료기기에서 얻은 경험을 사전에 수집하고 검토하기 위해 체계적인 절차를 수립하고, 수집된 자료를 최신 상태로 유지하기 위해 제조업체가 수행하는 모든 활동을 의미합니다.
            </h2>
            <p class="logo_location"><img src="/theme/dna/img/Post-Market-Surveillance.jpg" style="width: 70%"></p>
            <div class="txt03">
                <span>
                    <ul style="width: 80%;margin: 0 auto">
                        <li><strong>PMS를 통해 다음과 같은 정보가 이용 가능해야 합니다.</strong><br><br>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;PSUR의 정보 및 현장 안전 시정 조치를 포함하여 심각한 사고에 대한 정보</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;심각하지 않는 사건 및 바람직하지 않은 부작용에 대한 데이터를 언급한 기록</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;경향보고 정보</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;관련 전문가 또는 기술 문헌, 데이터베이스 및 / 또는 레지스터</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;사용자, 배포자 및 수입자가 제공한 피드백 및 불만 사항을 포함한 정보</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;유사한 의료기기에 대한 공개 정보</div>
                        </li>
                    </ul>
                </span>
            </div>
            <hr style="border:1px solid#cccccc; height: 1px !important; display: block !important; width: 100% !important; margin: 70px auto">
            <div class="sub_txt">
                <p><strong style="font-size: 2em;font-weight: 500;line-height: 35px;text-align: left">PMS에 대한 제조업체의 의무</strong></p><br><br>
				<p>제조업체는 각 기기에 대해 위험 등급에 비례하고 기기 유형에 적합한 방식으로 시판 후 감시 시스템을 계획, 수립, 문서화, 구현, 유지 및 업데이트해야 합니다. 이 PMS 시스템은 제조업체의 품질 관리 시스템에 없어서는 안될 부분입니다.</p><br><br>
				<p>시판 후 감시 시스템은 전체 수명 동안 기기의 품질, 성능 및 안전성에 관한 관련 데이터를 능동적이고 체계적으로 수집, 기록 및 분석하고 필요한 결론을 도출하고 예방 및 시정조치의 결정, 실행 및 모니터링에 적합해야 합니다.</p><br><br>
				<p>시판 후 감시 과정에서 예방 또는 시정 조치의 필요성 또는 둘 다가 필요한 경우 제조업체는 적절한 조치를 취하고 관련 관할 당국 및 해당되는 경우 통지 기관에 알려야 합니다. 심각한 사고가 확인되거나 현장 안전 시정 조치가 시행되는 경우, 감시 시스템에 따라 보고를 해야 합니다.</p><br><br>
				<p>MDR에서는 제조업체에 대한 시판 후 요구 사항과 데이터를 사전에 수집하고 이러한 시판 후 활동 및 데이터의 분석을 문서화하고 보고 할 의무가 강화되었습니다.</p>
            </div>
            <div class="sub_txt">
                <p><strong style="font-size: 2em;font-weight: 500;line-height: 35px;text-align: left">등급에 따른 PMS 관련 보고서</strong></p><br><br>
				<p><strong class="point_b1">1. 시판 후 감시 보고서 (Post-Market Surveillance Report, PMSR)</strong><br>
				Class I 기기의 제조업체는 시판 후 감시 계획의 결과로 수집된 시판 후 감시 데이터의 분석 결과 및 결론을 요약 한 시판 후 감시 보고서를 준비하여 예방 및 시정에 대한 이론적 근거 및 설명을 작성해야 합니다. 필요한 경우 보고서를 업데이트하고 요청 시 관할 기관에 제공해야합니다.
				</p><br><br>
				<p><strong class="point_b1">2. 주기적 안전 업데이트 보고서 (Periodic safety update report, PSUR)</strong><br>
				Class IIa, Class IIb 및 Class III 기기의 제조업체는 각 기기에 대한 주기적인 안전 관리에 따른 결과 보고서 ('PSUR') 및 각 범주 또는 기기 그룹과 관련하여 사후 분석 결과 및 결론을 요약해야 합니다. 시장 감시 데이터는 시판 후 감시 계획의 결과로 취해진 예방 및 시정 조치에 대한 이론적 근거와 설명으로 수집됩니다.
				</p>
            </div>
	    </div>
    </div><!-----class="company 종료-------->	
    <strong class="con_arrow"><p>DNA TECHNOLOGIES PICIFIC의 PMS 서비스</p></strong>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>PMS 데이터를 확보를 위한 임상시험 서비스를 제공합니다.</span></p></li>
				<li><p><em><strong>02</strong></em><span>유럽인구를 대상으로 하는 PMCF를 위한 계획 및 관련 문서 작성부터 임상 실시까지 PMCF 전반에 대하여 전체 가이드 및 기술 지원이 가능합니다.</span></p></li>
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