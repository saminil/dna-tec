<?php 	
	include "../../../../common.php";
	$tmenu_ = "임상"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "MRD & 임상"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "MRD & 임상"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>



<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"---->

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#87bf78 }
    .point_b1{color:#333;font-weight: 600;font-size: 1.2em }
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
    <!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">MDR과 임상시험</a></li>
			<li><a href="javascript:;" style="padding: 12px 40px">CRO</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	
	<hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:90%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin: 2px auto 50px;width:90%;">
	
<!--+++ Mark 20.06.09 탭 컨텐츠 영역 +++-->
<div class="tab_con">
<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
    <article style="display:block">
        <div class="page_title">
            <h1 class="sub_tit"><span class="fc_pointer">MDR과 임상시험</span></h1>
            <h2 class="sub_tit2">
                MDR은 임상과 관련한 데이터 및 평가 과정을 강화하는 프로세스를 요구합니다. 제조업체는 의료기기의 안전성 및 성능을 입증하기 위해 임상 평가 보고서를 제공하여야 합니다.
            </h2>
            <p class="logo_location"><img src="/theme/dna/img/image_03_technologicalDocumentationContent.jpg"></p>
            <ul class="sub_txt">
                <li><strong class="point_b1">1. 의료기기 제조 기업은 임상 평가를 진행할 때, 다음 사항을 고려하여야 합니다.</strong><br><br>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Class III, Class IIb제품은 임상평가를 필수로 진행해야 합니다.</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Class III, Class IIb기기는 임상평가 사용설명서, PMCF 계획을 포함하는 대상이 됩니다.</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;제조업체들은 임상평가에 대한 전문가의 상담을 요구합니다.</div><br><br>
                </li>
                <li><strong class="point_b1">2. 임상 데이터를 습득하는 방법은 다음과 같습니다.</strong><br><br>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;동등한 의료기기의 임상경험에 대한 데이터 수집</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 평가 보고서를 통한 임상 결과 도출</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;유사한 기기를 사용한 임상평가</div><br><br>
                </li>
                <li><strong class="point_b1">3. 임상 평가는 다음 중 하나의 절차를 따라야 합니다.</strong><br><br>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;관련 장치와의 동등성이 입증되고 요구사항을 준수함을 보여줌에 따라, 의료기기의 설계 특성과 안정성 및 성능을 평가하는 과학 관련 문헌에 대한 평가</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;현재 사용되는 대체 치료법을 고려하는 임상 조사 평가</div>
                </li>
            </ul>
            <div class="txt03" style="text-align:justify">
                <span style="padding: 25px">
                    <p style="width: 80%;margin: 0 auto">
                        임상평가는 MDR 부속서 9의 파트 B 및 제 84조에 언급된 PMCF 계획에 따라 시행한 임상 데이터로 의료기기의 유효기간에 따라 업데이트 되어야 합니다.
                        CLASS III 및 CLASS IIB의 이식형 장치의 경우, PMCF 평가 보고서는 매년 업데이트 되어야 하며, 의료기기의 안전성 및 성능에 대한 요약은 EUDAMED에 매년 업데이트 되어야 합니다.
                    </p>
                </span>
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
     </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   
     <article><!--+++++ 컨텐츠 02 시작 +++++--> 
         <div class="page_title">
            <h1 class="sub_tit"><span class="fc_pointer">CRO</span></h1>
            <h2 class="sub_tit2">
                CRO (Contract Research Organization)란 임상평가와 관련하여 의뢰자의 임무나 역할을 대신하기 위해 계약에 의해 위임된 개인이나 기관을 지칭합니다.
                유럽연합 회원국 소재의 CRO는 경우에 따라서 소재 국가의 의료기기 관련 관리 감독 기관으로부터 CRO 업무에 따른 승인을 획득한 이후 업무를 수행하여야 합니다. 
                DNA Technologies가 위치한 크로아티아의 경우 CRO 업무 수행을 위하여 국가기관으로부터 필히 승인을 획득한 이후 업무 수행이 가능합니다.
            </h2>
            <p class="logo_location"><img src="/theme/dna/img/image_03_technologicalDocumentationContent.jpg"></p>
            <ul class="sub_txt">
              <li><strong class="point_b1">1. 크로아티아 정부 승인 임상시험기관의 법률적 요구사항은 아래와 같습니다.</strong><br><br>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;정확한 임상시험 계획을 수립하기 위하여 임상 경험이 충분한 전문가를 채용하여 업무를 수행하여야 합니다.</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상시험은 수립된 임상 계획에 따라 임상시험을 진행하여야 하고, 임상과 관련된 기기를 구비하고 있어야 합니다.</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상시험 결과를 정해진 규정에 따라 일정 기간 보관하는 기능을 확보하고 있어야 합니다.</div><br><br>
              </li>
              <li><strong class="point_b1">2. DNA Technologies 자회사인 DNA Technologies Pacific은 아시아, 태평양 지역의 의료기기 제조 기업에 대한 CRO 서비스를 지원합니다.</strong><br><br>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;PMCF Plan 작성 지원</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상시험 Synopsis 및 Protocol 작성 지원</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Investigator’s Brochure 작성 지원</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;유럽 내 임상시험 진행 관리</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 데이터 관리</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;EU 대리인 업무 수행</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;시장 개척 지원 업무 수행</div>
              </li>
            </ul>
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
    </article><!--+++++ 컨텐츠 02 종료 +++++--> 
       
        
    </div><!-------div class="tab_con" 종료------>
      
          
	</div>	<!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>