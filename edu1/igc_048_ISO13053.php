<?php
	include_once('./_common.php');
$g5['title'] = '품질경영시스템';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#339999;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:#f48025;}
    
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
    
    
    
    /* ISO/IEC 178025 시험 및 교정기관 요구사항 심사원 교육  */
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
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;}
    .vision_type6 .vision_area:nth-child(5) ul li .i_box {background:#ffffff;}
    .vision_type6 .vision_area:nth-child(6) ul li .i_box {background:#ffffff;}
    .vision_type6 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
    
    
    
	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    
    
    /* ISO 30301 기록경영시스템 심사원 교육 시작  */
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
    .vision_type7 .vision_area:nth-child(4) ul li .i_box {background:#005bab;}
    .vision_type7 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}
    .vision_type7 .vision_area:nth-child(6) ul li .i_box {background:#339999;}
    .vision_type7 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
    
	.vision_type7 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type7 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type7 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type7 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type7 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type7 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type7 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type7 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type7 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    
    /* ISO 21500 프로젝트 관리 심사원 교육*/
    .vision_type8 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type8:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type8 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type8 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type8 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type8 .vision_area ul {margin:0; padding:0; }
	.vision_type8 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type8 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
    
	.vision_type8 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type8 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type8 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;} 
    .vision_type8 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;} 
    .vision_type8 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}
    .vision_type8 .vision_area:nth-child(6) ul li .i_box {background:#339999;}
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
				<li class="on"><a href="javascript:;">ISO 13053</a></li>
				<li><a href="javascript:;">ISO/IEC 17025</a></li>
				<li><a href="javascript:;">ISO 30301</a></li>
				<li><a href="javascript:;">ISO 21500</a></li>
			</ul>
		</div>
		<!--+++ 20.05.11 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->
	
	<!--------------/  문단 구분선 / ------------->
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	
	 <!--+++ 20.05.13 탭컨텐츠 영역 시작 +++-->
	  <div class="tab_con">
	  
	    <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
<article style="display:block">	


	<section class="page_title">
		<h1 class="sub_tit">ISO 13053 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO13053은 6 시그마 방법론을 설명하는 국제 표준</h2>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title">ISO 13053 이란 무엇인가?</h2>
		<ul>
			<li>
			<!-----
				<div class="i_box">
				
					<div class="icon" style="background-image:url(./images/edu_iso_13053_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  
					 </em>
					</div>
					
				</div>
				----->
				
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO13053은 6 시그마 방법론을 설명하는 국제 표준입니다. 이 방법론은 조직의 비즈니스 프로세스를 향상시키기 위해 사용됩니다. 많은 기업들은 종종 폐기물 낭비와 같은 결함과 오류를 초래하는 프로세스 변형을 겪고 있습니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						<img src="./images/edu_iso_13053_01.jpg" alt="6시그마" style="display:block;margin: 0 auto;">
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">6 시그마의 목적</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_13053_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						6시그마의 목적은 통계적 접근법을 사용함으로써 오류율을 낮추고 품질 성능을 높이기 위해 통계적 접근법을 사용함으로써 변이를 식별 및 크게 줄이는 것입니다. 게다가, 6 시그마 방법론은 새로운 서비스, 제품 또는 프로세스 개발에 사용되는 DMAIC (정의, 측정, 분석, 개선 및 제어) DMADV (정의, 측정, 분석, 설계 및 검증)를 통해 기존 프로세스를 개선하는 데 사용할 수 있습니다.
					</span>
			
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">DMAIC 방법론</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_13053_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
						정의(Define), 측정(Measure,), 분석(Analyze), 개선(Improvement), 관리(Control)를 거쳐 최종적으로 6시그마 기준에 도달하게 되는 것을 의미하며 각 단계의 내용은 다음과 같습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
                        <p style="font-weight:bold">1) 정의(Define)</p>
                        기업 전략과 소비자 요구사항과 일치하는 디자인 활동의 목표를 정합니다.<br><br>
                        
                        <p style="font-weight:bold">2) 측정(Measure)</p>
                        현재의 프로세스 능력, 제품의 수준, 위험 수준을 측정하고 품질에 결정적 영향을 끼치는 요소(CTQs, Criticals to qualities)를 밝혀냅니다.<br><br>
                            
                        <p style="font-weight:bold">3) 분석(Analyze)</p>
                        디자인 대안, 상위 수준의 디자인을 만들기 그리고 최고의 디자인을 선택하기 위한 디자인 가능성을 평가하는 것을 개발하는 과정입니다.<br><br>
                        
                        <p style="font-weight:bold">4) 개선(Improvement)</p>
                        바람직한 프로세스가 구축될 수 있도록 시스템 구성요소들을 개선합니다.<br><br>
                          
                        <p style="font-weight:bold">5) 관리(Control)</p>
                        개선된 프로세스가 의도된 성과를 얻도록 투입요소와 변동성을 관리합니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">6시그마 방법론이 중요한 이유는 무엇인가?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>CHALLENGE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
						6 시그마를 이해하고 직업에서 그것의 실무를 운영 할 수 있다면 향후 커다란 효과를 가질 수 있습니다.  
                        ISO13053 인증을 받은 개인이 되면, 비즈니스 전문성과 체계적인 역량의 품질 향상에 대한 귀하의 의지를 보여줄 것입니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
						비용 절감, 비즈니스 프로세스 개선 및 이익 증대에 대한 지식으로 이 인증은 귀하의 분야에서 다른 전문가와 차별화됩니다. ISO13053에 대한 인증을 받은 개인은 또한 시그마의 방법론에 대한 정보뿐만 아니라 직장에서의 변화를 위한 주도자가 될 능력이 있기 때문에 리더십 역할을 수행할 준비가 되어있습니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
						 대기업의 경영진은 전문성의 가치를 알고 잠재력을 이해하기 때문에 승진 및 소득 향상으로 이어질 뿐 아니라, 구직 시장에서의 새로운 기회를 갖게 합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">GPC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>SOLUTIONS</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
						&#10053; GPC는 IAF MLA 개인인증 승인기관으로 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다.<br><br> 
						&#10053; GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인인증기관입니다.<br><br> 
						&#10053; GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>(주)아이지씨인증원 사업영역</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         			<li><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>

	</section>
	
	
</article> <!--------+++++++/ <article style="display:block"> 종료 /++++++++----------->




<article><!--------+++++++/ 컨텐츠 02 심사원교육 > 식품경영식스템 > ISO/IEC 17025  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO/IEC 17025<span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO/IEC 17025: 시험 및 교정기관 요구사항/심사원 교육</h2>
	</section>
	<section class="vision_type6">
	
	
	
	
		
		<div class="vision_area">
		<h2 class="title">ISO/IEC 17025: 시험 및 교정기관 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/iso-iec1725-01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span>
						ISO/IEC 17025는 국제표준화기구에 의해 제정된 시험소 또는 교정기관의 능력에 관한 일반 요구사항 (General requirements for the competence of testing and calibration laboratories)의 국제표준규격입니다.
					</span>
					<span>
						시험 및 교정기관에 대한 요구사항으로, 인정기관의 인정기준으로 적용됩니다.

					</span>
					<span>
                        이 규격의 인정을 받은 시험소/교정기관이 발행하는 증명서류에는 인정마크를 기재하는 것이 가능하며 국제적으로 통용하는 증명서로서 신뢰성을 높일 수 있게 됩니다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">과정 소개</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/iso-iec1725-02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span>
						ISO/IEC 17025 운영실무과정은 시험 및 교정기관의 인정기준의 요구사항을 이해하고, 실무에 적용할 수 있도록 구성되었습니다.
					</span>
					<span>
						숙련도 시험, 소급성 지침, 적격성 기준 등 요건 해설과, 사례분석을 통한 실무 중심의 교육으로, 시험 및 교정기관 인원들의 교육 요구사항을 충족함이 목표입니다.
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
					<div class="icon" style="background-image:url(./images/iso-iec1725-05.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span>
                      &#10049; ISO/IEC 17025 인정을 준비하는 기관의 실무자<br><br>
                      &#10049; ISO/IEC 17025 인정을 유지하는 기관의 실무자<br><br>
                      &#10049; ISO/IEC 17025 컨설턴트<br><br>
                      &#10049; ISO/IEC 17025 시험 및 검사요원<br><br>
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
					<div class="icon" style="background-image:url(./images/iso-iec1725-03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span>
                    &#10052;	ISO/IEC 17025 요구사항의 이해<<br><br>
                    &#10052;	ISO/IEC 17025 기술 요구사항의 이해<<br><br>
                    &#10052;	ISO/IEC 17025 운영 사례 습득<<br><br>
                    &#10052;	ISO/IEC 17025 인정 절차에 대한 이해<<br><br>

					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">관련 서비스</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/iso-iec1725-04.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span>
						IGC는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다. <br><br>
                        &#10054; 연수기관 지정<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>(주)아이지씨인증원 사업영역</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         			<li><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
    
</article><!--------+++++++/ 컨텐츠 02  심사원교육 > 식품경영식스템 > ISO/IEC 17025  종료 /++++++++----------->



<article><!--------+++++++/ 컨텐츠 03 심사원교육 > 식품경영식스템증 > ISO 30301 시작 /++++++++----------->
   
<section class="page_title">
		<h1 class="sub_tit">ISO 30301 / 기록경영시스템 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">조직의 임무, 성과 및 목표 달성을 지원하기 위해 기록 관리 시스템이 충족해야 하는 요구 사항을 규정하는 국제 표준</h2>
	</section>
	<section class="vision_type7">
	
	<div class="vision_area">
		<h2 class="title">ISO 30301: 기록경영시스템 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_30301_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						모든 조직은 업무를 수행하는 과정에서 정보를 생산합니다. 이러한 정보 중 일부는 기록의 형태로 생산되는데 이는 업무 수행을 효과적으로 달성할 수 있게 해주고 위험을 관리해주며, 글로벌한 환경에서의 문제들에 대응할 수 있도록 하는 조직의 자산이 됩니다. <br><br>
						
						기록이 가지는 정보적 가치와 증거적 가치가 부각되면서 기록 관리에 대한 중요성이 증가되었습니다.  ISO 30301은 조직의 임무, 성과 및 목표 달성을 지원하기 위해 기록 관리 시스템이 충족해야 하는 요구 사항을 규정하는 국제 표준입니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
	
	
		
		<div class="vision_area">
		<h2 class="title">ISO 30301 이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_30301_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 30301은 기록관리를 통해 궁극적으로 조직이 원하는 조직의 임무, 성과 및 목표 달성을 지원하는 표준입니다. 조직의 성과와 목표 달성을 위한 조직의 기록경영시스템을 수립하고 이에 필요한 요구사항을 제시하고 있는 것이 ISO 30301 표준입니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						기록의 생산과 관리 등 기록관리와 관련한, 조직의 경영진을 포함하여 조직의 모든 구성원들이 이 표준을 활용할 수 있고 쉽게 적용할 수 있습니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">기록경영시스템의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_30301_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 30301 표준은 기록 “관리”에서 멈추는 것이 아니라 기록 “경영”이라는 영역으로 넘어가면서 단순히 기록관리에서 그치지 않고 기록관리를 함으로써 궁극적으로 조직이 원하는 조직의 성과와 목표를 지원하는 표준입니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						조직이 기록을 관리하는데 실패하면 인적, 물리적, 경제적 손해를 초래합니다. 따라서 기록경영시스템 시행은 단기, 장기적으로 조직에 긍정적인 효과를 발생시키며 정보 검색, 정보 재활용, 소송 및 규범 준수에 대한 운영프로세스를 효과적인 비용으로 수행하도록 지원합니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
                        ISO 30301 국제 표준은 기록 관리 및 기록 경영에 관심이 있고 효과적인 기록 관리를 통한 조직의 성과 및 목표 달성에 기여하고자 하는 모든 개인에게 적용됩니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">IGC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						&#10049; IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 30301에 대한 교육서비스를 제공합니다. <br><br>
						&#10049; GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. <br><br>
						&#10049; IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다. <br><br>
						&#10049; IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
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
	         			<li><p><em><strong>01</strong></em><span>기록 경영</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>보건, 안전 및 환경</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>품질경영시스템</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
	         		    <li><p><em><strong>03</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>IT 보안</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>서비스 관리</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
		
		
	</section>
    
</article><!--------+++++++/ 컨텐츠 03  심사원교육 > 식품경영식스템 ISO 30301  종료 /++++++++----------->





<article><!--------+++++++/ 컨텐츠 04 심사원교육 > 식품경영식스템 > ISO 21500 시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 21500  프로젝트관리 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 21500 은 프로젝트의 성능에 중요하고 영향을 미치는 프로젝트 관리의 개념과 프로세스에 대한 지침을 제공한다</h2>
	</section>
	<section class="vision_type8">
		
		<div class="vision_area">
		<h2 class="title">ISO 21500이란? </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso21500_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						 ISO 21500 은 프로젝트의 성능에 중요하고 영향을 미치는 프로젝트 관리의 개념과 프로세스에 대한 지침을 제공한다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						본 가이드는 간단한 소개를 통해서 이해하고 프로젝트를 성공적으로 수행하고 지속 가능한 미래를 보장하는 방법에 대한 실질적인 적용 방법을 설명한다. ISO 21500은 프로젝트 관리 모범 사례를 결합하고 이를 집합적으로 전달하는 전문적 방법론이다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    공공, 민간 또는 지역사회 조직을 포함한 모든 유형의 조직에서 사용할 수 있으며, 복잡성, 규모 또는 기간에 관계없이 모든 유형의 프로젝트에 사용할 수 있다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">왜 중요한가?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso21500_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 21500은 나머지 비즈니스 운영의 중단을 최소화하면서 예산 및 시간 제약 내에서 프로젝트를 완료할 수 있도록 함으로써 중요한 프로젝트 개선을 안내해 줄 것이다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    ISO 21500은 나머지 사업 운영에 대한 중단을 최소화하면서 예산과 시간 제약 내에서 프로젝트를 완료함으로써 상당한 프로젝트 개선을 이끌어 줄 것이다. 또한 조직이 모든 프로젝트 관리 요구사항을 충족하고 프로젝트 실패의 가능성을 최소화할 수 있도록 할 것이다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 21500 인증을 획득하면 프로젝트의 진행 상황을 충분히 계획, 관리 및 모니터링 할 수 있으며, 동시에 작업을 완료하고 기한을 맞추는 데 필요한 시간을 적절하게 할당할 수 있는 기본적 기술을 보유할 수 있다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    가장 중요한 것은 베스트 프랙티스에 기초한 이 방법론은 결과를 생산적으로 문서화하는 방법에 대한 지식과 지침을 제공한다. 이 인증은 프로젝트를 이끌고 팀을 관리하는 데 필요한 기술을 보유하고 있음을 증명한다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">GPC 교육 과정 소개 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso21500_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 21500 전문가 교육을 통해 프로젝트 관리를 위한 모범 사례를 배울 수 있고, 이 교육 과정 동안 프로젝트 관리의 주요 개념과 프로세스를 이해할 수 있습니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						이 과정을 마치면 시험에 응시하여“GPC Certified ISO 21500”자격 증명을 신청할 수 있습니다. Certificate는 기본 도구, 기술, 프로세스 및 관리 방법을 이해했음을 나타냅니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">누가 참석해야 합니까?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso21500_04.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
                            &#8281; 프로젝트 관리에 관련된 개인<br><br>
                            &#8281; 프로젝트 관리의 주요 프로세스에 대한 지식을 얻으려는 개인<br><br>
                            &#8281; 프로젝트 관리 경력을 쌓고자 하는 개인<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">학습 목표</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i>
					<em>
                        PROCESS<br> 
                        METHOD<br>
                        TECHNOLOGY<br>
					
					</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
                            &#8281; 프로젝트 관리의 기본 개념 이해<br><br>
                            &#8281; 프로젝트 관리의 기본 프로세스 이해<br><br>
                            &#8281; 프로젝트 관리에 사용되는 접근법, 방법 및 기술 이해<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">교육적 접근</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>SOLUTIONS</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
				      &#8281; 강의 세션은 실제적인 질문과 예제로 설명됩니다<br><br>
                      &#8281; 실습에는 예제와 토론이 포함됩니다<br><br>
                      &#8281; 연습 시험은 인증 시험과 유사합니다<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>(주)아이지씨인증원 사업영역</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         			<li><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	
	</section>
    
</article><!--------+++++++/ 컨텐츠 04  심사원교육 > 식품경영식스템 > ISO 21500 종료 /++++++++----------->




	
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->

</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>