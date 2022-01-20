<?php 	
	include "../../../../common.php";
	$tmenu_ = "임상"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "임상시험"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "임상시험"; //커스텀페이지의 타이틀을 입력합니다.
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
    <!--------------
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">TRCU EAC</span> 인증 러시아(RUSSIA)</h1>
		<h2 class="sub_txt">러스테스트 퍼스픽의 다양한 사업영역을 소개합니다.</h2>
	</div>
    -------------->
    
    
    <!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">임상시험이란?</a></li>
			<li><a href="javascript:;">임상 진행개요/프로토콜</a></li>
			<li><a href="javascript:;" style="padding: 12px 40px">IB</a></li>
			<li><a href="javascript:;">임상시험보고서</a></li>
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
       <h1 class="sub_tit"><span class="fc_pointer">임상시험이란?</span></h1>
       <h2 class="sub_tit2">
            의료기기 생산 기업은 제품의 안전성 및 사용 목적에 따른 효과성을 입증하기 위하여 임상시험을 진행할 때 필히 ISO 14155 규격의 요구사항을 충족하여야 합니다.
       </h2>
       <ul class="sub_txt">
            <li><strong class="point_b1">1. 임상시험 평가 자료는 다음 사항을 포함하여야 합니다.</strong><br><br>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;위험평가</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;설계된 임상시험에 대한 정당성 평가</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 시험단계</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상시험 브로셔</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상시험 진행 보고서</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;모니터링 계획</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상시험 장소 선정 이유</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;동의서</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 참가자 식별 방법</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;자료검토 위원회</div><br><br>
            </li>
            <li><strong class="point_b1">2. 임상시험 수행은 임상시험 계획에 따라 진행되어야 합니다. 임상시험 진행에 따른 승인은 유럽 연합 회원국 개별적으로 차이를 보이고 있습니다.
            DNA Technologies가 소재한 크로아티아의 경우 임상시험을 진행할 경우 관계 당국으로부터 필히 승인을 획득한 이후 진행하여야 합니다.</strong><br><br>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;초기 임상시험 장소에 대한 정보가 있어야 합니다.</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 시험 장소에 대한 주기적인 모니터링이 필요합니다.</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;부작용이나 기기의 결함 등에 대한 자료를 포함하여야 합니다.</div><br><br>
            </li>
            <li><strong class="point_b1">3. 임상시험 문서에는 다음을 포함하여야 합니다.</strong><br><br>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;수정사항</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 참가자 식별 방법</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상시험팀 명단 및 기타 인원</div>
                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 참가자 비밀유지계약서 등</div>
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
     </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   
       
       
       
    <article><!--+++++ 컨텐츠 02 시작 +++++--> 
         <div class="page_title">
            <h1 class="sub_tit"><span class="fc_pointer">임상 진행개요(Synopsis)/프로토콜</span></h1>
            <ul class="sub_txt">
                <li><strong class="point_b1">1. 임상 시험 계획</strong><br><br>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 시험을 위해서는 이론적 근거, 목표, 디자인, 방법론, 모니터링, 통계적 고려 사항, 구성 및 수행을 설명하는 Plan을 작성해야 합니다.</div><br><br>
                </li>
                <li><strong class="point_b1">2. Protocol은 다음의 내용이 포함되어 구성되어야 합니다.</strong><br><br>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상계획</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;스폰서</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;조사 정보(임시 조사자, 장소 등)</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상진행개요 (Synopsis)</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;의료기기 정보</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;의료기기 및 임상시험의 위험 및 효과</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상의 목적 및 가설</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;설계 (임상 대상, 연구 수, 절차, 모니터링 계획)</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;통계적 고려사항</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;데이터 관리</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 계획의 편차(deviation)</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;준수 선언문</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;사전동의 절차</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;이상 반응 / 효과</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;인구 (대상 집단)</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상의 정지 및 조기 종료</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;참고 문헌</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;기타 사항</div><br><br>
                </li>
                <li><strong class="point_b1">3. 임상 시험에 대한 Synopsis는 다음의 내용이 포함되어 구성되어야 합니다.</strong><br><br>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;포함 / 제외 기준</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;연구 수(피시험자 수)</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 기간</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;후속 조치</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;목적</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;종점</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;기타 사항</div>
                </li>
           </ul>	
        </div>
        <strong class="con_arrow"><p>DNA Technologies Pacific의 제공 서비스</p></strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>인증을 위한 Clinical Investigation 또는 PMCF를 위한 Clinical Trial 진행 시, Protocol 및 Synopsis에 대한 구성 및 작성 서비스를 제공해 드립니다.</span></p></li>
                    <li><p><em><strong>02</strong></em><span>다년간의 경험과 자격을 갖춘 기술전문가를 통한 맞춤 임상 가이드를 제공해 드리며, 관련 당국 부처와 윤리위원회의 승인을 받기 위해 제출되어야 할 전반적인 서류 작성 및 준비를 도와드립니다.</span></p></li>
                </ul>
            </div><br><br><br><br>
    </article><!--+++++ 컨텐츠 02 종료 +++++--> 
       
       
       
  <article><!--+++++ 컨텐츠 03 시작 +++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">The Investigator’s Brochure(IB)</span></h1>
		<ul class="sub_txt">
            <li><strong class="point_b1">1. Investigator’s Brochure (IB) 소개<br></strong>
                임상 시험과 관련된 의료기기에 대한 기존의 임상 및 비임상 정보를 모아둔 자료입니다.<br><br>
            </li>
            <li><strong class="point_b1">2. Investigator’s Brochure (IB) 목적<br></strong>
                IB의 주된 목적은 조사자, 임상 진행 의료진 및 임상시험 과정에 관여하는 전문가에게 관련 기기 사용량, 빈도, 방문 간격, 관리 방법, 안전성 모니터링 절차 등 필요한 정보를 제공하는 것입니다.<br>
                GCP(Good Clinical Practice)에 따른 정보는 간결하고 단순하며 객관적이며 균형 있는 형태로 제시하여야 합니다.<br><br>
            </li>
            <li><strong class="point_b1">3. 누가 준비하고, 누가 평가하나요?<br></strong>
                IB는 스폰서가 준비해야 하며 의학적으로 자격을 갖춘 전문가도 IB의 편집에 참여하여야 하지만 IB의 내용에 대한 최종 승인은 데이터를 생성한 연구자가 해야 합니다.<br>
                IB는 매년 검토 및 개정되어야 하며, 의약품이나 의료기기와 관련된 새로운 정보가 생성되는 경우 IB 데이터의 보다 빈번한 개정이 적절할 수 있습니다.
            </li>
        </ul>
        <div class="txt03" style="text-align:justify">
            <span style="padding: 25px">
                <ul style="width: 80%;margin: 0 auto">
                <li><strong>IB에 포함되어야 하는 정보</strong><br><br>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;일반 정보<br>
                        <ul style="text-indent: 2em;">
                            <li>①&nbsp;&nbsp;소개</li>
                            <li>②&nbsp;&nbsp;IB 문서 식별 번호</li>
                            <li>③&nbsp;&nbsp;스폰서/제보 업체 정보</li>
                        </ul>
                    </div><br>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상시험 장치 정보</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;전 임상 시험 정보</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;기본 임상 시험 데이터</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;리스크 관리</div>
                    <div style="text-indent: 1.2em;">-&nbsp;&nbsp;규정 및 기타 참조 사항</div>
                </li>
           </ul>
            </span>
        </div>
	</div>
	<strong class="con_arrow"><p>DNA Technologies Pacific의 Investigator’s Brochure 작성 지원 서비스</p></strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>DNA Technologies Pacific은 의료기기 임상 수행을 지원하고 모니터링 하며 임상 시험 프로토콜을 설계하는 업무를 수행하고 있습니다.</span></p></li>
                    <li><p><em><strong>02</strong></em><span>모든 고객의 특정 요구를 지원하기 위한 서비스를 제공할 수 있는 자격을 갖추고 전문적인 지식을 가진 팀으로 구성되어 있습니다.</span></p></li>
                    <li><p><em><strong>03</strong></em><span>Investigator’s Brochure는 스폰서나 제조자가 작성하는 것을 원칙으로 하고 있지만, Investigator’s Brochure를 작성하는데 필요한 많은 문서가 기술적 및 경험적 능력을 요구하기 때문에 문서를 작성하기가 쉽지 않습니다. 이러한 이유로 CRO 업무에 많은 경험을 갖춘 DNA Technologies Pacific 인력이 Investigator’s Brochure 제작 지원을 하고 있습니다.</span></p></li>
                </ul>
            </div><br><br><br><br>
 </article><!--+++++ 컨텐츠 03 종료 +++++--> 
  <article><!--+++++ 컨텐츠 04 시작 +++++--> 
         <div class="page_title">
            <h1 class="sub_tit"><span class="fc_pointer">임상시험 보고서</span></h1>
            <h2 class="sub_tit2">
                임상시험 결과 보고서는 시험이 어떻게 수행되었는지를 명확히 하기 위해 시험의 계획, 방법 및 수행에 대한 광범위한 세부사항을 포함하는 문서입니다.
                이 보고서는 연구의 설계 특징을 선택한 방법에 따라 명확한 설명을 제공하고 시험 결과를 포함합니다. 또한 임상시험 보고서는 충분한 환자 데이터를 포함해야 합니다.
            </h2>
            <div class="txt03" style="text-align:justify">
                <span style="padding: 25px">
                    <ul style="width: 80%;margin: 0 auto">
                        <li><strong>임상시험 보고서 항목</strong><br><br>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;표지</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;목차</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 시험 요약</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;진행하는 임상시험에 대한 소개</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 시험 기기 설명 및 방법</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상시험 계획</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;결과</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;결론</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;약어 및 정의</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;윤리적 고려사항</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;임상 시험의 시험자와 행정 구조</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;서명</div>
                            <div style="text-indent: 1.2em;">-&nbsp;&nbsp;부록</div>
                        </li>
                   </ul>
                </span>
            </div>
            <h2 class="sub_tit2">
                크로아티아의 경우 임상시험은 윤리 위원회 (IRB: Institutional Review Board) 및 관련 부처의 승인을 받은 뒤에 진행할 수 있습니다.
                DNA Technologies Pacific의 전문가들이 임상시험을 위한 계획 작성을 지원하고 임상시험에 대하여 직접 관리 및 모니터링하며,
                임상시험이 빠른 시일 내에 완료될 수 있도록 업체에 맞춤화 된 임상 서비스를 제공합니다.
            </h2>
        </div>
        <strong class="con_arrow"><p>DNA Technologies Pacific의 Clinical investigation 관련 서비스</p></strong>
            <div class="con_box">
                <ul>
                    <li><p><em><strong>01</strong></em><span>임상시험 계획 작성 지원</span></p></li>
                    <li><p><em><strong>02</strong></em><span>임상시험 데이터 관리</span></p></li>
                    <li><p><em><strong>03</strong></em><span>임상시험 설계 지원</span></p></li>
                    <li><p><em><strong>04</strong></em><span>프로토콜 및 시놉시스 검토</span></p></li>
                    <li><p><em><strong>05</strong></em><span>임상시험대상자 데이터 관리</span></p></li>
                </ul>
            </div><br><br><br><br>
    </article><!--+++++ 컨텐츠 04 종료 +++++--> 
    
       
       
    </div><!-------div class="tab_con" 종료------>
      
          
	</div>	<!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>