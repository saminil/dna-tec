<?php
	include_once('./_common.php');
$g5['title'] = '정보보안';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>


<!-----style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style------>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!--------link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"------->


<style>
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto; font-family:georgia; font-size:1.2em;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type5 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type5:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type5 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type5 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
    
	.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#005bab;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#f48025;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
    
    
    
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    /* ISO/IEC 27002 시작 */
    .vision_type6 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type6:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type6 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type6 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type6 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type6 .vision_area ul {margin:0; padding:0; }
	.vision_type6 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type6 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
    
	.vision_type6 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type6 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type6 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background:#005bab;}
    .vision_type6 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}
    .vision_type6 .vision_area:nth-child(6) ul li .i_box {background:#f48025;}
    .vision_type6 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
    
    
    
	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type6.vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    /* ISO 27799 시작 */
    .vision_type7 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type7:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type7 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type7 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type7 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type7 .vision_area ul {margin:0; padding:0; }
	.vision_type7 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type7 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
    
	.vision_type7 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type7 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type7 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type7 .vision_area:nth-child(4) ul li .i_box {background:#36b1d4;}
    .vision_type7 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}
    .vision_type7 .vision_area:nth-child(6) ul li .i_box {background:##f48025;}
    .vision_type7 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
    
    
    
	.vision_type7 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type7 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type7 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type7 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type7 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type7 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type7 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type7 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type7 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    
    /* ISO/IEC 27001:2013 시작 */
    .vision_type8 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type8:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type8 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type8 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type8 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type8 .vision_area ul {margin:0; padding:0; }
	.vision_type8 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type8 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
    
	.vision_type8 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type8 .vision_area:nth-child(2) ul li .i_box {background:#005bab;}
	.vision_type8 .vision_area:nth-child(3) ul li .i_box {background:#36b1d4;}
    .vision_type8 .vision_area:nth-child(4) ul li .i_box {background:#f48025;}
    .vision_type8 .vision_area:nth-child(5) ul li .i_box {background:#339999;}
    .vision_type8 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type8 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
    
	.vision_type8 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type8 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type8 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type8 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type8 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type8 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type8 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type8 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type8 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    
    
	.partner_type2 .con_area .txtArea ul li{margin-top:15px;}
	.partner_type2 .con_area .txtArea ul li:first-child{margin-top:0}
	.partner_type2 .con_area .txtArea ul li span{font-weight:700; margin-right:10px; }
	.partner_type2 .con_area .txtArea ul li p{display:inline-block; }
    
    
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
    
 
	@media screen and (max-width:768px){
		
		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.vision_type5 .vision_area h2.title { font-size:1.5em; }
		.vision_type5 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type5 .vision_area ul li {width:100%;}
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃 설정  */
        
        .vision_type6 .vision_area h2.title { font-size:1.5em; }
		.vision_type6 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type6 .vision_area ul li {width:100%;}
		.vision_type6 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type6 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type6 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        .vision_type7 .vision_area h2.title { font-size:1.5em; }
		.vision_type7 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type7 .vision_area ul li {width:100%;}
		.vision_type7 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type7 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type7 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        
        .vision_type8 .vision_area h2.title { font-size:1.5em; }
		.vision_type8 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type8 .vision_area ul li {width:100%;}
		.vision_type8 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type8 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type8 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
	}

</style>

<div class="content_wrap">

<!--+++ 20.05.13 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
		<div class="tab_menu tab01">
			<ul style="display:inline-block;position:relative;text-align:center;">
				<!-- 처음 활성화 메뉴에 class="on" -->
				<li class="on"><a href="javascript:;">ISO/IEC 27002</a></li>
				<li><a href="javascript:;">ISO/IEC 27005</a></li>
				<li><a href="javascript:;">ISO 27799</a></li>
				<li><a href="javascript:;">ISO 27001</a></li>
			</ul>
		</div>
		<!--+++ 20.05.11 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->
		
<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:0px;width:100%;">
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:20px;margin-top:0px;width:100%;"><br><br>
		
		

<!--+++ 20.05.13 탭컨텐츠 영역 시작 +++-->
  <div class="tab_con">
  
    <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<article style="display:block">	


	<section class="page_title">
		<h1 class="sub_tit">ISO/IEC 27002 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">정보기술, 보안기술–정보보안 통제를 위한 실천규범, 심사원 교육</h2>
	</section>
	<section class="vision_type5">
	
		<div class="vision_area">
		<h2 class="title">ISO/IEC 27002: 정보기술–보안기술–정보보안 통제를 위한 실천 규범 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27002_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27002:2013은 조직의 정보 보안 위험 환경을 고려한 통제의 선택, 구현 및 관리를 포함한조직 정보 보안 표준 및 정보 보안 관리 관행에 대한 지침을 제공합니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27002:2013은 ISO/IEC 27001을 기반으로 정보 보안 관리 시스템을 구현하거나, 일반적으로 수용되는 정보 보안 통제를 이행하거나, 또는 자체적으로 정보 보안 관리 지침을 개발하는 조직에서 사용되도록 설계되었습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27002란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27002_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
                    </div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27002는 최고의 정보 보안 관리 방법을 위한 지침을 제공하는 국제 규격입니다. 이 규격은 정보 보안 관리 시스템 구현 과정에서 통제를 선택하기 위한 참고 자료로 사용되는 문서로, 조직이 조직 간 활동에 대한 확신을 쌓고 정책, 프로세스, 조직 구조 및 소프트웨어 및 하드웨어 기능을 포함하는 적절한 제어를 구현하는 데 도움을 줄 수 있습니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27002는 공공 및 민간 부문, 상업 및 비영리 기관 및 정보 보안 위험에 직면한 기타 조직을 포함한 모든 유형의 조직을 위한 규격입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">정보 보안 관리의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27002_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
                    </div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						기ISO/IEC 27002는 조직이 가치 있는 정보 자산이 국제적으로 인정된 표준을 통해 보호될 수 있음을 이해하게 하며, ISO/IEC 27002를 기반으로 지속적인 정보 보안 통제 시스템을 구현하고 관리할 수 있도록 지원합니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                        ISO/IEC 27002를 통해서 개인은 조직 내에서 정보 보안 관리 시스템을 구현, 유지 및 개선하는 데 도움이 되는 기본 지침을 이해할 수 있습니다. 개인은 정보 보안 통제 구현에 사용되는 방법 및 기술을 습득하여 조직의 ISMS(정보 보안 관리 시스템)를 효과적으로 관리하고, 조직의 다양한 정보 보안 위험에 적절하게 대응할 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">교육 대상</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>CHALLENGE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
                      &#10043;  ISO/IEC 27001 인증을 취득하였거나 준비중인 기업의 실무자<br><br>
                      &#10043;  ISMS 책임자<br><br>
                      &#10043;  ISMS 컨설턴트<br><br>
                      &#10043;  기업의 정보 보안 담당자<br><br>
					</span>

				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>SOLUTION</em></div>
				</div>
				<div class="con_txt">
					<span>
						&#10053; IGC는 IPC MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO/IEC 27002에 대한 교육서비스를 제공합니다. <br><br>
						&#10053; GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다.<br><br>
						&#10053; IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다. <br><br>
						&#10053; IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

	
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         		IGC는 개인인증기관인 GPC와의 협력을 통해 여러 분야에 관련된 교육 및 심사원 인증 서비스를 제공합니다.<br>
	         			<li><p><em><strong>01</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>보건, 안전 및 환경</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>품질경영시스템</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>06</strong></em><span>IT 보안</span></p></li>
	         			<li><p><em><strong>07</strong></em><span>서비스 관리</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>

</article> <!--------+++++++/ <article style="display:block"> 종료 /++++++++----------->





<article><!--------+++++++/ 컨텐츠 02 심사원 교육 >  교육 > ISO/IEC 27005  시작 /++++++++----------->
   
<section class="page_title">
		<h1 class="sub_tit">ISO / IEC 27005:2018 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">정보보안 위험관리 프로세스 심사원 교육</h2>
	</section>
	<section class="vision_type6">

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27005 이란 무엇인가?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_iec27005_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO / IEC 27005:2018 정보보안 위험관리 프로세스
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						ISO / IEC 27005는 정보 보안 요구 사항에 대한 조직의 요구 사항을 파악하고 효과적인 정보 보안 관리 시스템을 구축하는데 필요한 정보 보안 위험 관리의 체계적인 접근 방법을 확립하기 위한 지침을 제공합니다. 이 국제 표준은 ISO/IEC 27001 개념을 지원하며 위험 관리 접근법을 기반으로 한 정보 보안의 효율적인 구현을 지원하도록 설계되었습니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27005의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_iec27005_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO / IEC 27005를 통해 정보 보안 위험 관리 프로세스의 구현을 시작하는 데 필요한 기술과 지식을 습득 할 수 있습니다. 따라서 조직이 직면 한 다양한 정보 보안 위험을 식별, 평가, 분석, 평가 및 처리 할 수 있음을 입증하며, 조직이 위험을 우선시하고 위험을 줄이거나 완화하기 위한 적절한 조치를 취할 수 있도록 지원합니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						이 국제 표준은 효율적인 정보 보안 위험관리로 조직을 보호하고 비즈니스 재정적 영향을 줄이기 위해 최대한의 기술과 지식을 배우고자 하는 모든 조직에게 적용됩니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_iec27005_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						&#10022; IGC는 개인인증기관인 GPC와의 협력을 바탕으로 ISO/IEC 27005에 대한 교육서비스를 제공합니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						&#10022; GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC (International Personnel Certification Association)와 MLA를 체결한 정회원 기관입니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						 &#10022; IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						 &#10022; IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         		IGC는 개인인증기관인 GPC와의 협력을 통해 여러 분야에 관련된 교육 및 심사원 인증 서비스를 제공합니다.<br><br>
	         			<li><p><em><strong>01</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>보건, 안전 및 환경</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>품질경영시스템</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>06</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>07</strong></em><span>IT 보안</span></p></li>
	         			<li><p><em><strong>08</strong></em><span>서비스 관리</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
    
</article><!--------+++++++/ 컨텐츠 02  심사원 교육 >  교육 > ISO/IEC 27005  종료 /++++++++----------->



<article><!--------+++++++/ 컨텐츠 03 심사원 교육 >  교육 > ISO 27799시작 /++++++++----------->
   
  <section class="page_title">
		<h1 class="sub_tit">ISO 27799: 2016 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">Information Security_ ISO 27799: 2016 의료정보보호시스템</h2>
	</section>
	<section class="vision_type7">

		<div class="vision_area">
		<h2 class="title">ISO 27799: 2016이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27799_2016_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						헬스케어 산업 및 고유한 운영 환경에서 근무하는 모든 사람의 개인 건강 데이터의 기밀성, 무결성 및 가용성을 최상으로 보호하는 방법에 대한 지침을 제공하는 국제 표준입니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						구체적으로는 의료기관 내 진료 및 처방기록, 검진결과 등 환자의 민감한 의료 및 개인 데이터를 적법하고 안전하게 관리할 수 있는 정보보호 관리 체계 인증입니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						이 규격은 다음 사항들에 도움을 줍니다<br><br>

                        &#10022; 데이터 액세스 제어 및 액세스 권한 관리<br><br>
                        &#10022; 암호키 관리 및 보<br><br>
                        &#10022; 보안 위협을 방지하기 위해 건강 기록을 보호하고 모니터<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO 27799: 2016 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27799_2016_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO27799 : 2016 교육은 개인 건강 정보를 보호하기 위한 기본적인 지침을 제공하기에 해당 분야에 종사하는 인원에게는 필수적입니다. 
						
						해당 표준의 이점은 크기, 유형 또는 복잡성에 관계없이 모든 의료기관에서 유효하다는 점입니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                        의료 기관에는 매우 민감하고 취약한 정보 시스템 및 정보 자산을 보유하고 있습니다. ISO 27799 표준은 이러한 조직이 처리하는 개인 정보를 안전하게 관리하는 데 큰 도움이 될 것입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">기대 효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27799_2016_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						품질 경영 시스템 인증 및 심사 스페셜리스트 - 일반적으로 의료기기 승인에 있어서 품질 경영 시스템 구현이 필요합니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
		     			IGC인증원은 대부분의 국제 규정 및 표준에 따라 품질 경영 시스템 인증, 감사 및 공장 심사를 수행하여 고객이 시간 및 비용을 줄이고 통합 검사 및 심사를 받으실 수 있습니다.
					</span>
					<br><br>
					<span style="text-align:justify;text-justify: inter-word;">
					<sapn style="font-weight:bold;">&#10050; 최상의 솔루션 제공</sapn><br>
				       IGC인증원은 국제 표준 및 규정에 따라 주요 의료기기 시장 진입에 필요한 시험 서비스를 제공합니다.
				       <br><br>
				    <sapn style="font-weight:bold;">&#10050; 전문집단과의 파트너쉽</sapn><br>
				       IGC인증원은 오랜 기간 의료기기에 대한 기술 및 규제에 관한 전문지식을 축적해 왔으며, 글로벌 제조사에서부터 지역 연구소에 이르기까지 다양한 조직으로부터 신뢰를 받고 있습니다.
				    </span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>SOLUTIONS</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						&#10049; IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 27799: 2016 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다. <br><br>
						&#10049; GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인인증 기관입니다. <br><br>
						&#10049; GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
				    <span style="font-weight:bold">&#8280; IAF로부터 인정받은 공식 인증서</span>
                        가장 널리 쓰이는 규격인 ISO 9001/ ISO 14001/ ISO 22000/ ISO 13485/ OSHAS 18001에 대해 IAF로부터의 인정을 받은 공식 인증서가 발행됩니다.<br><br>
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
				    <span style="font-weight:bold">&#8280; IPC로부터 인정받은 국내 유일의 연수기관 지정기관</span>
                        전 세계 수 십여 개 회원국의 신뢰를 받는 IPC의 인정을 획득한 국내 유일의 연수기관 지정가능 기관입니다. 이는 유능한 심사원 양성의 기틀을 제공할 것입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         		<span style="font-weight:bold;">하기 분야 관련 연수기관 연계</span><br><br>
	         			<li><p><em><strong>01</strong></em><span>정보보안</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>보건,안전 및 환경</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>품질경영 시스템</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>06</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>07</strong></em><span>IT보안</span></p></li>
	         			<li><p><em><strong>08</strong></em><span>서비스관리<br><br><br></span></p></li>
	         			<br>
	         		<span style="font-weight:bold;">긴밀한 협력관계에 있는 IGC ACADEMY 연계</span><br>
                    해당 규격에 대한 일정 이상의 수요 발생 시, GPC와 긴밀한 협력관계에 있는 IGC ACADEMY에서 자체적으로 교육 개최 서비스를 제공합니다.
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
		
	</section>
    
</article><!--------+++++++/ 컨텐츠 03 심사원 교육 >  교육 > ISO 27799  종료 /++++++++----------->





<article><!--------+++++++/ 컨텐츠 04 심사원 교육 >  교육 > ISO 27001 시작 /++++++++----------->
   
<section class="page_title">
		<h1 class="sub_tit">ISO/IEC 27001:2013 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO/IEC 27001:2013 / 정보보안 관리시스템 교육과정</h2>
	</section>
	<section class="vision_type8">
		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001:2013 / 정보보안 관리시스템 교육과정</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_iec_27001-2013_00.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27001은 정보 보안 경영시스템(ISMS: Information Security Management System)의 요구사항을 정의한 국제표준으로 품질시스템 관리를 통해 정보 시스템의 보안을 촉진하기 위해 개발되었습니다. 정보보안을 설정, 구현, 운영, 모니터링, 검토, 유지관리 및 개선하기 위한 체계적인 비즈니스 위험 접근 방식을 기반으로 하는 관리 시스템입니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						정보 보안 경영시스템은 다음 사항을 보장하여야 합니다.<br><br>
                        1.기밀성(Confidentiality): 정보에 액세스 할 권한이 있는 사용자만이 접근할 수 있도록 합니다.<br><br>
                        2. 무결성(Integrity): 정보가 정확하고 완전하며 권한없이 수정되지 않도록 합니다.<br><br>
                        3. 가용성(Availability): 필요한 경우 권한이 있는 사용자가 정보에 접근할 수 있도록 하며 정보 보안은 정책, 프로세스, 절차, 조직 구조, 소프트웨어 및 하드웨어 기능을 적용하여야 합니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		<br><br>
		<dl>
			<dd>
				정보 보안 경영시스템의 모델은 다음과 같습니다.<br><br>
						<img src="./images/edu_iso_iec_27001-2013_01.jpg" alt="정보보안 관리시스템 모델" style="display:block;margin: 0 auto;">
			</dd>
			<br><br>
			<dd>
                정보보안경영시스템의 프로세스는 다음과 같습니다.<br><br>
						<img src="./images/edu_iso_iec_27001-2013_02_process.jpg" alt="정보보안 관리시스템 프로세스" style="display:block;margin: 0 auto;">
			</dd>
		</dl>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001:2013 인증의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>DEDICATION</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						오늘날의 정보는 비즈니스 환경에서 중요한 역할을 담당합니다. 점점 더 많은 조직과 정보시스템이 컴퓨터 사이버 사기, 해킹, 바이러스 등 광범위한 출처로 인해 정보 보안 안전에 위협을 받고 있습니다. 따라서 정보보안을 설정하고 구현하며 운영하는 정보보안경영시스템의 중요성이 더욱 부각되고 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001:2013 인증의 기대효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
                      1. 외부로부터 발생하는 리스크를 최소화하고 비즈니스 연속성을 보장합니다.<br><br>
                      2. 기업 내 정보보안에 대한 의식 높이는 역할을 합니다.<br><br>
                      3. 정보보안에 대한 법적 규제사항 준수를 보장합니다.<br><br>
                      4. 인증을 통한 객관적인 평가로 인한 신뢰성을 향상시킵니다.<br><br>
                      5. 정보보안 리스크 관리 체계 개선을 통한 정보보안경영시스템의 수준을 향상시킵니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001:2013 심사원 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>CHALLENGE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
                     정보보안경영시스템의 심사원들은 다음과 같은 지식 및 이해를 필요로 합니다.<br><br>
                     1. 지적재산권<br><br>
                     2. 조직 기록물의 내용, 보호 및 유지<br><br>
                     3. 데이터 보호 및 프라이버시<br><br>
                     4. 암호화 통제에 관한 규제사항<br><br>
                     5. 전자상거래<br><br>
                     6. 전자 및 디지털서명<br><br>
                     7. 업무현장 관찰<br><br>
                     8. 정보통신 도청 및 데이터 감시<br><br>
                     9. 컴퓨터(시스템) 부정이용과 관련한 지식<br><br>
                     10. 국제 및 국내 분야별 특정 요구사항<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001:2013 교육의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>DEDICATION</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						IGC Academy는 GPC로부터 ‘ISO/IEC 27001 인증심사원 교육기관’으로 승인된 기관입니다.<br><br>
                        ISO/IEC 27001 인증 심사원 과정은 다음과 같습니다.<br><br>
                          &#8280; 정보보호관리체계 수립 및 구축 전문가 양성, 내부보안감사자 양성, 국제표준 심사활동 자질(스킬) 향상, 정보보호교육 전문가 양성<br><br>
                          &#8280; 국제 표준 ISO 27001 인증 심사원 양성<br><br>
                          &#8280; 국제 표준 심사원 승인기관인 GPC의 절차에 따른 정식 심사원 취득을 목표로 과정을 진행합니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		<dl>
			<dd>
               <span style="font-weight:bold;text-align:justify;text-justify: inter-word;">[ISO/IEC 27001:2013 교육의 목적]<br></span>
               ISO/IEC 27001 국제심사원 양성과정은 교육의 참가자가 정보보안경영 시스템에 대해 국내 또는 국제 수준의 설명서, 표준, 법률 요구 및 규정사항을 ISO 19011의 원칙을 근거하여 심사를 수행할 수 있도록 하는 지식을 습득하는데 그 목적이 있습니다.<br>
			</dd>
			<dd>
               <span style="font-weight:bold;text-align:justify;text-justify: inter-word;">[참가 대상 및 자격]<br></span>
               -품질경영 담당자, 내부보안 감사자, 정보 보안 책임자, 정보보호 담당자, 정보보호교육 담당자<br>
               -ISMS 심사원 등록 희망자 및 정보 보호 컨설턴트 활동 희망자, 품질 경영 컨설턴트, 정보 보호 교육 코디네이터 등<br>
			</dd>
			<dd>
               <span style="font-weight:bold;text-align:justify;text-justify: inter-word;">[교육 프로그램]<br></span>
               *정보보호관리체계(ISMS) 개요<br>
               *ISMS Framework 및 필수 통제 항<br>
               *심사원의 책임 및 역할 정의, 심사 계획 정의<br>
               *의사소통 및 체크리스트 작성을 통한 심사계획 작성<br>
               *사례연구 및 모의 심사 수행<br>
               *심사 결과 기준 정의 → 부적합<br>
               *사례연구 및 시정조치 활동, 심사보고서 사후 활동<br>
               *시험 및 설문조사<br><br>
			</dd>
		</dl>
		</div>

		<div class="vision_area">
		<h2 class="title">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>SOLUTION</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						&#8281; IGC는 GPC로부터 ‘ISO/IEC 27001 인증심사원 교육기관’으로 승인된 기관인 IGC Academy를 통해 교육을 진행하고 있습니다.<br><br>
						&#8281; GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인 인증 기관입니다. <br><br>
						&#8281; GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         			<li style="float:none;width:100%;"><p><em><strong>01</strong></em><span>정보보호관리체계 수립 및 구축 전문가 양성</span></p></li>
	         			<li style="float:none;width:100%;"><p><em><strong>02</strong></em><span>내부보안감사자 양성</span></p></li>
	         			<li style="float:none;width:100%;"><p><em><strong>03</strong></em><span>정보보호교육 전문가 양성</span></p></li>
	         			<li style="float:none;width:100%;"><p><em><strong>04</strong></em><span>국제 표준 ISO 27001 인증 심사원 양성<br>
	         			 : 국제 표준 심사원 승인기관인 GPC의 절차에 따른 정식 심사원 취득을 목표
	         			</span></p></li>
	         			<li style="float:none;width:100%;"><p><em><strong>05</strong></em><span>ISO/IEC 27001:2013 정보보안경영시스템 인증</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>		
	</section>
    
</article><!--------+++++++/ 컨텐츠 04  심사원 교육 >  교육 > ISO 27001  종료 /++++++++----------->




	
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->

</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->
	
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>