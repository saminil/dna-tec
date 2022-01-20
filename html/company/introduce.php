<?php 	
	include "../../../../common.php";
	$tmenu_ = "회사안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "회사소개"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

<!--
<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>
-->



<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">



<style>
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
    
	.fc_pointer {color:#2797c8 }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;word-break: break-all;text-align: justify;font-size: 1.1em;font-weight: 400;line-height: 1.5}

	.page_title{width:90%;margin: 0 auto 70px;word-break: break-all;text-align: justify}

	.page_title h1{width:100%; text-align:center; font-size:2.5em; font-weight:600; color: #2797c8;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:40px auto 0; border:1px solid #000;}
	.page_title h2{width:100%; text-align:justify; font-size:1.2em; color:#666; margin-top:20px; }
    .point_b1{font-weight: 600;font-size: 1.2em}

	.company_type1 {width:100%; margin:0 auto; }
	.company_type1:after{content:""; clear:both; display:block;}
	.company_type1 .ceo_img {position: relative; float:right; width:400px; text-align:right; padding-left:30px;}
	.company_type1 .ceo_img img {width:100%; height:auto; }
	.company_type1 .ceo_area{ float:left; width:50%;} 
	.company_type1 .ceo_area .ceo_tit { position:relative; float:left; width:100%; font-size:2em; line-height:1.4em; letter-spacing:-0.05em;  }
	.company_type1 .ceo_area .ceo_txt { float:right; width:100%; padding-top:50px; }
	.company_type1 .ceo_area .ceo_txt p {margin-top:20px; line-height:1.5em; color: #000; word-break: keep-all; }
	.company_type1 .ceo_area .ceo_txt span.ceo_sign{ display:block; font-size:1.1em; color:#000; margin-top:50px; font-family: 'Satisfy', 'Noto Sans KR', sans-serif;}
    
    .cro_wrap{width: 90%;margin: 0 auto}
    
    /*------RUS-TEST PACIFIC이 유라시아 지역의 인증에 대하여 제공하는 서비스 시작------*/
	.business_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.business_type2 .con_arrow p{position:relative; font-size:2em; color:#000;}
	.business_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}

	.business_type2 .con_box{ width:90%; padding:20px 0; border-top:1px solid #000}
	.business_type2 .con_box:after{content:""; display:block; clear:both;}
	.business_type2 .con_box ul { padding:0; margin:0; }
	.business_type2 .con_box ul li {float:none; width:100%; list-style:none; margin:10px 0; }
	.business_type2 .con_box ul li p{display:table; width:100%; }
	.business_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.business_type2 .con_box ul li p > em{ width:30px; }
	.business_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.business_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 10px;}
    
    .con_arrow p{width: 90%;margin: 0 auto 20px}
    .con_box{width: 90%;margin: 0 auto}
    .logo_location {width: 90%;text-align: center;margin: 0 auto}
    .logo_location img {width: 40%;margin-bottom: 50px}
    .sub_txt {width: 90%;margin: 0 auto;text-align: justify}
    .sub_tit2 {width: 90%;word-break: keep-all}


	@media screen and (max-width:992px){
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}	
		.business_type2 .business_info{margin-bottom:0px;}
		.business_type2 .business_info ul li.left_box { width:100%; height:300px;  }
		.business_type2 .business_info ul li.right_box{ width:100%; }
		.business_type2 .business_info ul li.right_box .txt03 {position:relative !important; margin-top:40px;}
		.business_type2 .business_info ul li.right_box .txt03 span {height:auto;}
		.business_type2 .txt_area { width:90%; margin:0 auto; border-top:0;}
		.business_type2 .txt_area .txt01 span.tit {font-size:1.85em;}
		.business_type2 .con_arrow{width:95%; margin:0 auto;}
		.business_type2 .con_box{width:95%; margin:0 auto;}
	}
	@media screen and (max-width:480px){
		.business_type2 .con_arrow p{ font-size:1.5em; margin-top:30px;}
		.business_type2 .con_box ul li { width:100%; }
	}
    /*------RUS-TEST PACIFIC이 유라시아 지역의 인증에 대하여 제공하는 서비스 종료------*/
    
    

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
	.tbla{width:100%; border-collapse: collapse; margin:0 auto; border:1px solid #ddd; border-bottom:0px;}
	.tbla tr th{width:20%; height:45px; padding:15px 0; text-align:center; border-bottom:1px solid #666; font-size:1em;}
	.tbla tr td{width:80%; border-bottom:1px solid #ddd; padding-left:15px; height:45px; text-align:left;}

		
	@media screen and (max-width:992px){
		
		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.company_type1 .ceo_img {width:100%; text-align:center; margin-bottom:30px; padding-left:0; }
		.company_type1 .ceo_img img{width:100%;}
		.company_type1 .ceo_area{ float:none; width:95%; margin:0 auto; } 
		.company_type1 .ceo_area .ceo_tit { font-size:1.8em; text-align:center;}
		.company_type1 .ceo_area .ceo_txt{padding-top:10px;}

		.tbla tr th{width:30%; font-size:0.9em;}
		.tbla tr td{width:70%; font-size:0.9em;}
        
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
    
    
    
</style>

<br>
<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
    <div class="business_type2"><!-----class="company 시작-------->
        <div class="page_title">
            <h1 class="sub_tit"><span class="fc_pointer">DNA테크놀리지퍼시픽</span></h1><br><br>
            <h2 class="sub_tit2" style="word-break: keep-all">
                시스템 및 제품 인증 기술지원과 의료기기, 화장품 등의 유럽연합 지역으로의 수출에 필요한 인증 관련 임상 시험에 필요한 일련의 위· 수탁 연구를 One-Stop Service로 제공
            </h2><br><br>
            <p class="logo_location"><img src="/theme/dna/img/introduce_img.jpg" style="width: 70%"></p>
            <div style="word-break: keep-all">
                <p style="margin-bottom: 6px"><strong class="point_b1">DNA TECHNOLOGIES PACIFIC</strong></p>
				<p>
				    DNA Technologies Pacific은 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 시스템 및 제품 인증을 위한 기술지원 서비스를 제공하고 있습니다. 또한 의료기기, 화장품 등의 유럽연합 지역으로의 수출에 필요한 인증 관련 임상 시험에 필요한 일련의 위· 수탁 연구를 One-Stop Service 로 제공합니다.
                </p><br><br>
				<p>국내 최초로 유럽연합 회원국인 크로아티아의 정부로부터 CRO 업무 승인을 획득한 DNA Technologies 와 함께 크로아티아 자그레브에 합작 법인을 설립하여 CRO 업무에 대한 One-Stop Total CRO 서비스를 제공 중입니다.</p><br><br>
				<p>새롭게 출현한 유럽연합 의료기기 인증인 MDR과 임상에 따른 입증은 필요 불가결의 요구사항입니다. MDR에서 요구하는 임상조사를 어렵게 생각하지 마시고 오랜 기간에 걸친 의료기기 인증과 임상평가 경험을 구비한 DNA Technologies Pacific의 활용을 적극적으로 권합니다.</p><br><br>
				<p>가장 경쟁력 있는 방식으로 국내외의 임상 결과와 크로아티아 보건복지부로부터 임상 수행에 대한 승인을 획득한 임상시험은 조사에 따른 연구의 결과를 접목시켜 인증평가에 따른 임상 평가 보고서, PMCF 계획, PMCF 보고서 및 정기 안전 업데이트 보고서 작성을 지원하여 인증 획득 및 인증 유지를 효과적으로 수행할 수 있도록 지원합니다.</p><br><br>
				<p>DNA Technologies Pacific은 크로아티아 보건복지부가 제정한 CRO 관련 법률적 요구사항을 준수하며 임상 업무를 수행합니다.</p><br><br>
            </div>
            <hr style="border:1px solid#cccccc; height: 1px !important; display: block !important; width: 100% !important; margin: 30px auto"><br><br>
            <div class="cro_wrap">
                <p class="ceo_sign">
                <strong style="font-size: 2em;line-height: 35px;">CRO의 법률적 요구사항은 아래와 같습니다.<br></strong><br>
                크로아티아의 CRO 기업을 관장하는 핵심 조항:
                </p><br><br>
                <p>
                    <strong style="text-align: left">제3조</strong><br>
                    임상 시험은 다음 사항을 충족하는 법인에서 수행된다.<br>
                    &nbsp;&nbsp;&nbsp;- &nbsp;임상 시험 계획 및 현장에서의 업무 활동을 수행할 전문가를 모집한다.<br>
                    &nbsp;&nbsp;&nbsp;- &nbsp;임상 시험 계획에 따라 임상 시험을 수행할 수 있는 장비를 보유한다.<br>
                    &nbsp;&nbsp;&nbsp;- &nbsp;이 조례에 따른 임상 시험 결과 문서를 보관하기 위한 시스템을 갖추어야 한다.<br>
                </p><br>
                <p>
                    <strong style="text-align: left">제4조</strong><br>
                    임상 시험은 자격을 갖춘 조사자가 수행한다.<br>
                    &nbsp;&nbsp;&nbsp;- &nbsp;시험 계획에서 제공된 특정 교육을 통해 의료 분야의 학사 학위를 취득한 자.<br>
                    &nbsp;&nbsp;&nbsp;- &nbsp;GCP (Good Clinical Practice)에서 문서화된 교육을 받은 자.<br>
                    &nbsp;&nbsp;&nbsp;- &nbsp;환자의 포함 (inclusion) 단계에 있는 임상시험을 동시에 최대 5건 수행한다.<br>
                </p><br>
                <p>
                    <strong style="text-align: left">제5조</strong><br>
                    임상 시험 관찰자는 시험 의뢰인에 의해 임명된 사람이며 다음 자격을 갖추어야 한다.<br>
                    &nbsp;&nbsp;&nbsp;- &nbsp;크로아티아 또는 유럽 연합 (EU)에서 임상 시험 모니터링 활동을 수행한 경험이 적어도 2년 이상인 의료 전문가.<br>
                    &nbsp;&nbsp;&nbsp;- &nbsp;임상 시험 관찰자의 직무를 수행할 수 있는 적절한 자격을 갖춘 자.<br>
                    &nbsp;&nbsp;&nbsp;- &nbsp;Good Clinical Practice (GCP) 교육을 받은 자.<br>
                    &nbsp;&nbsp;&nbsp;- &nbsp;크로아티아 국민 또는 외국인에 대한 특별 규정 및 크로아티아어에 능통하다는 증거에 따라 허가를 받은 외국인<br>
                </p><br>
                <p>
                    <strong style="text-align: left"></strong>
                    관찰자의 수용가능성은 중앙윤리위원회에 의해 평가된다.<br>
                    관찰자의 등록은 정부 부처에 의해 유지되어야 한다.
                </p>
            </div>
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