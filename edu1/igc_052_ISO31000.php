<?php
	include_once('./_common.php');
$g5['title'] = '경험,위험 및 규정 준수';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
    
    
    /* ISO/IEC 38500 경험, 위 및 규정 준수 심사원 교육 시작 */
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
    .vision_type6 .vision_area:nth-child(6) ul li .i_box {background:#339999;}  
    .vision_type6 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
        
	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    /* ISO/IEC 29100 경험, 위험 및 규정 준수 시작 */
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
    .vision_type7 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;}  
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
    
    
    /* ISO 37001 경험, 위험 및 규정 준수 심사원 교육 시작 */
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
	.vision_type8 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}
    .vision_type8 .vision_area:nth-child(4) ul li .i_box {background:#339999;}
    .vision_type8 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
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
        
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃 설정  */
	}

</style>

<div class="content_wrap">

	<!--+++ 20.05.13 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
		<div class="tab_menu tab01">
			<ul style="display:inline-block;position:relative;text-align:center;">
				<!-- 처음 활성화 메뉴에 class="on" -->
				<li class="on"><a href="javascript:;">ISO 31000</a></li>
				<li><a href="javascript:;">ISO/IEC 38500</a></li>
				<li><a href="javascript:;">ISO/IEC 29100</a></li>
				<li><a href="javascript:;">ISO 37001</a></li>
			</ul>
		</div>
		<!--+++ 20.05.11 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->
	<!-----내용구분 선 2개 ------>
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	
	
<!--+++ 20.05.13 탭컨텐츠 영역 시작 +++-->
<div class="tab_con">
	  
<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
<article style="display:block">	

	<section class="page_title">
		<h1 class="sub_tit">ISO 31000 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 31000: 위험관리 지침 심사원 교육</h2>
	</section>
	<section class="vision_type5">

	<div class="vision_area">
		<h2 class="title">ISO 31000: 위험관리 지침 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso31000_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 31000은 조직이 직면 한 위험을 식별, 평가 및 완화하기 위한 위험 관리 원칙 및 지침을 규정합니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						조직이 위험 관리 프로세스를 조직의 전반적인 관리, 전략 및 계획, 관리, 보고 프로세스, 정책, 가치 및 문화에 통합하는 것을 목표로 하는 프레임 워크를 개발, 구현 및 지속적으로 개선할 것을 권장합니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						이 프레임 워크는 조직의 위험 유형과 관계없이 사용할 수 있습니다. 조직이 재무 안정성과 명성을 보호하는 데 도움이 될 것입니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>

        <div class="vision_area">
		<h2 class="title">ISO 31000 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso31000_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 31000: 2018은 조직이 직면 한 위험 관리에 대한 지침을 제공합니다. 이 지침의 적용은 모든 조직과 상황에 맞게 사용자 정의할 수 있습니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 31000: 2018은 모든 유형의 위험 관리에 대한 일반적인 접근 방식을 제공하며 산업 또는 부문별로 다릅니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    ISO 31000: 2018은 조직 전체에서 사용할 수 있으며 모든 수준의 의사 결정을 포함한 모든 활동에 적용할 수 있습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    1.	적용범위<br><br>
                        2.	규범 참조<br><br>
                        3.	용어 및 정의<br><br>
                        4.	원칙<br><br>
                        5.	프레임워크<br><br>
                        6.	프로세스<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
        
		<div class="vision_area">
		<h2 class="title">ISO 31001의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso31000_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						위험은 모든 활동에 내재되어 있습니다. ISO 31000은 자신이 위기에서 파생되는 공공 및 민간, 기간산업 및 상업을 하는 데 도움이 될 수 있습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						이 규격은 다음 사항들에 도움을 줍니다.<br>
                         &#8278; 목표 달성의 가능성을 높임<br>
                         &#8278; 사전 관리를 장려<br>
                         &#8278; 조직 전반에 걸쳐 위험을 파악하고 해결의 필요성을 인식<br>
                         &#8278; 기회와 위협의 식별을 향상<br>
                         &#8278; 관련 법률 및 규제요구사항과 국제규범을 준수<br>
                         &#8278; 재무보고 개선<br>
                         &#8278; 지배 구조를 개선<br>
                         &#8278; 이해 관계자의 신뢰 향상<br>
                         &#8278; 의사 결정 및 계획을 위한 안정적인 기반을 구축<br>
                         &#8278; 경영관리능력의 향상<br>
                         &#8278; 효과적인 위험 처리를 위한 리소스 및 자원을 할당하고 사용<br>
                         &#8278; 운영 효율성과를 향상<br>
                         &#8278; 건강과 안전 성능뿐만 아니라, 환경보호 강화<br>
                         &#8278; 손실 방지 및 사고 관리를 개선<br>
                         &#8278; 손실을 최소화<br>
                         &#8278; 조직의 학습을 향상<br>
                         &#8278; 조직의 탄력성을 향상<br><br>

                         관련표준<br>
                         -	ISO 가이드 73:2009 리스크 관리<br>
                         -	ISO/IEC 31010:2009 위험 관리<br>
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
					<div class="icon"><i class="fab fa-medapps"></i><em>CHALLENGE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 31000은 물론 품질, 환경 및 기타 경영시스템에 대한 교육을 제공하고 있습니다. <br><br>
						IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 서비스 </p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         		IGC는 다음과 같은 관련 서비스를 제공합니다.<br>

	         			<li><p><em><strong>승</strong></em><span>ISO 31000 심사원 교육</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
	
	
</article> <!--------+++++++/ <article style="display:block"> 종료 /++++++++----------->

<article><!--------+++++++/ 컨텐츠 02 교육 > 경험,위험 및 규정 준수 인증 > ISO/IEC 38500  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO/IEC 38500 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO / IEC 38500은 정보 기술 (IT)의 기업 지배 구조를 안내하기 위해 만들어진 국제 표준</h2>
	</section>
	<section class="vision_type6">

		<div class="vision_area">
		<h2 class="title">ISO/IEC 38500 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso38500_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
						ISO/IEC 38500은 정보 기술 (IT)의 중요성을 이해하는 데 도움이 되는 원칙, 정의 및 모델을 제공합니다. 이 표준은 모든 유형의 조직이 정보 기술 (IT)의 사용을 평가, 지시 및 모니터링하는 데 도움을 주기위한 것입니다.  
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
						IT 사용 정도에 관계없이 현재 및 향후 IT 사용과 관련된 관리 관행 및 의사 결정으로 구성됩니다. 이 표준의 목적은 IT 사용을 관리하고 IT 거버넌스 어휘를 설정하는데 있어 관리 기관에 정보를 제공하고 안내함으로써 모든 조직에서 IT를 효과적이고 효율적이며 수용 가능한 사용을 촉진하는 것입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">Information technology Governance 원칙</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso38500_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span>
                      &#8281; 책임 (Responsibility)<br><br>
                      &#8281; 전략 (Strategy)<br><br>
                      &#8281; 획득 (Acquisition)<br><br>
                      &#8281; 성과 (Performance)<br><br>
                      &#8281; 부합 (Conformance)<br><br>
                      &#8281; 행동 (Human behavior)<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		<div class="vision_area">
		<h2 class="title">ISO/IEC 38500 중요한 이유</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso38500_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
						ISO/IEC 38500은 IT 조직이 조직의 성과에 긍정적으로 기여할 수 있도록 관리 기관을 지원합니다. 따라서 ISO/IEC 38500 요구 사항을 충족함으로써 조직은 IT 사용을 모니터링하고 비즈니스 연속성 및 지속 가능성을 보장하며 IT를 비즈니스 요구에 맞추고 IT 자산의 적절한 구현 및 운영을 보장할 수 있습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
                        또한 이 표준은 ISO/IEC 38500에서 설정 한 우수한 IT 거버넌스를위한 원칙과 모델을 준수하는 프레임 워크를 구축, 구현 및 지속적으로 개선하는 데 필요한 전문 지식과 지식을 얻는 데 도움이 됩니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
					    위험 관리, IT 사용으로 인한 기회 활용 촉진, ISO/IEC 38500 원칙 및 IT 시스템의 부적절한 적용 방지에 필요한 기술. 이 표준을 통해 비즈니스 전략을 이해하고 기술 전략에 맞게 조정하고 회사에 IT 거버넌스 모범 사례를 조언할 수 있습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
                        자격을 갖춘 직원에 대한 요구 사항이 증가함에 따라 조직은 인증을 받고 적절한 경험을 가진 개인에게 훌륭한 경력 기회를 제공하고 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">ISO/IEC 38500을 통한 기대효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>BUSINESS <br> EXTENTION</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
					1.	체계적인 IT 관리체계 구축을 통한 법규 및 책임 준수<br>
                        &nbsp; &nbsp; (보안 표준, 법규 준수, 지적 재산권)<br><br>
                    2.	경영진이 IT 활용을 통해 조직의 성과에 기여할 수 있도록 지원<br>
                        &nbsp; &nbsp; (비즈니스 연속성 확보, 자원의 효율적 배분, 비즈니스 혁신을 통한 비용 절감)<br><br>
                    3.	IT 투자 관리<br><br>
                    4.	IT 위험 최소화<br><br>
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
					<div class="icon"><i class="fas fa-microscope"></i><em>SOLUTIONS</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
					IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO/IEC 38500에 대한 교육서비스를 제공합니다.<br><br> 
					GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. <br><br>
					IGC는 GPC로부터 연수기관으로 공식 지정을 받아 인증 및 교육서비스의 제공이 가능합니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 서비스 </p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         		<span >
	         		    IGC는 IT 기술이 발전함에 따라 IT 및 정보보안의 중요성을 인식하여 다양한 국제 표준에 대한 다음과 같은 인증서비스 및 교육을 제공함으로써 인증시장을 선도하고 있습니다.  
	         		</span>
	         		<br><br>
	         			<li><p><em><strong>01</strong></em><span>ISO/IEC 27001</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>ISO 20000-1</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>ISO 22301</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>IT 및 정보보안 교육</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
    
</article><!--------+++++++/ 컨텐츠 02  교육 > 경험,위험 및 규정 준수 인증 > ISO/IEC 38500  종료 /++++++++----------->



<article><!--------+++++++/ 컨텐츠 03 교육 > 경험,위험 및 규정 준수 인증 > ISO/IEC 29100 시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 29100 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 29100 개인정보 프레임워크(Privacy Framework) / 경험, 위험 및 규정 준수</h2>
	</section>
	<section class="vision_type7">
		
		<div class="vision_area">
		<h2 class="title">ISO 29100 개인정보 프레임워크 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso29100_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						대기업, 중소기업 및 유명 개인에게 일어나는 지속적인 프라이버시 관련 사고에 대응하여, ISO는 정보통신기술 시스템으로 개인식별가능정보(Personally identifiable information/PII)를 확보하기 위한 보다 높은 수준의 프레임워크를 제공하기 위해 ISO/IEC 29100 및 ISO 29101ISO/IEC 29100 개인 정보 보호 프레임 워크 및 ISO 29101 개인 정보 보호 프레임 워크 아키텍처를 개발했습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						조직은 이러한 표준을 사용하여 업계 모범 사례를 통해 PII를 보호하고 조직의 개인 정보 보호 프로그램을 개선할 수 있는 ICT 시스템을 설계, 구현, 운영 및 유지 관리할 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 29100이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso29100_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO/IEC 29100은 정보통신기술 시스템(ICT) 내에 있는 개인식별가능정보(PII)를 보호하기 위한 높은 수준의 프레임워크를 제공합니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO/IEC 29100에서 제공하는 이 프라이버시 프레임워크는 조직뿐만 아니라 PII를 처리하기 위해 프라이버시 제어가 필요한 ICT를 사용하는 개인에게도 적용됩니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    보안과 관련된 기존의 여러 표준 (ISO 27001, ISO 27002 및 ISO 27018 등)이 있지만 ISO / IEC 29100은 개인식별가능정보(PII) 처리에 더 중점을 둡니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 29100의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso29100_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						개인 식별 가능 정보(PII)를 처리하는 기술의 수를 고려하면, 조직은 PII를 보호하는 방법에 대한 지침을 제공하는 프라이버시 프레임워크를 구현하는 것이 필수적입니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						이 개인 정보 보호 프레임워크는 조직이 정보통신 기술 시스템(ICT) 내에서 개인 정보 보호를 위한 PII 관련 요구사항을 정의할 수 있도록 지원하기 위한 것입니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    이는 일반적인 개인 정보 용어를 지정하고, PII 처리에 있어 행위자와 그 역할을 정의하고, 친숙한 개인 정보 원칙을 참조하여 실행할 수 있습니다.
					</span>
					
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
                        개인 식별 정보에는 제한적인 용도로만 사용되는 기밀 데이터가 포함될 수 있습니다. 조직이 PII를 보호하는 주요 이유는 다음과 같습니다.<br><br>
                        &#9639; 개인의 사생활 개인식별가능정보 보호를 위해<br><br>
                        &#9639; 법적 및 규제 요구사항을 충족시키기 위해<br><br>
                        &#9639; 기업의 책임을 실천하기 위해<br><br>
                        &#9639; 소비자의 신뢰도를 높이기 위해<br><br>
                        &#9639; 보안위반 감소를 위해<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">ISO/IEC 29100의 이익</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso29100_04.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
                       &#9672;	기술 참조 아키텍처, 특정 개인 정보 보호 기술 사용, 전체 개인 정보 보호 관리, 아웃소싱 된 데이터 프로세스에 대한 개인 정보 준수 보장, 개인 정보 보호 영향 평가 및 엔지니어링 용어 등 선호하는 추가 개인 정보 보호 표준 이니셔티브의 기초가 됩니다.<br><br>
                       &#9672;	모든 개인 식별 정보 및 통신 시스템과 관련하여 개인 정보 보호 요구 사항을 정의합니다.<br><br>
                       &#9672;	광범위하게 적용할 수 있으며 일반적인 개인 정보 보호 용어를 설정하고, PII를 처리할 때 개인 정보 보호 원칙을 정의하고, 개인 정보 기능을 분류하고, 설명된 모든 개인 정보 측면을 기존 보안 지침과 관련시킵니다.<br><br>
                       &#9672;	실무에 광범위하게 구현된 기존 보안 표준과 밀접한 관련이 있습니다.<br><br>
                       &#9672;	조직, 기술, 절차 및 규제 측면을 관점으로 배치하고 시스템 별 문제를 상위 수준에서 해결합니다.<br><br>
                       &#9672;	국제적으로 사람들의 개인 정보 보호에 기여하기 위해 개인 식별 정보를 처리하기위한 정보 및 통신 시스템 요구 사항과 관련된 지침을 제공합니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 서비스 </p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         		IGC는 개인인증기관인 GPC와의
                        <span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">협력을 통해 여러 분야에 관련된 교육 및 심사원 인증 서비스를 제공합니다.</span><br><br>
	         			<li><p><em><strong>01</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>보건, 안전 및 환경</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>품질경영시스템</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>경영,위험 및 규정 준수</span></p></li>
	         			<li><p><em><strong>06</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>07</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>08</strong></em><span>IT 보안</span></p></li>
	         			<li><p><em><strong>09</strong></em><span>서비스 관리</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
    
</article><!--------+++++++/ 컨텐츠 03  교육 > 경험,위험 및 규정 준수 인증 ISO/IEC 29100 종료 /++++++++----------->





<article><!--------+++++++/ 컨텐츠 04 교육 > 경험,위험 및 규정 준수 인증 > ISO 37001 시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 37001 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 37001 / 반부패 경영시스템 심사원 교육</h2>
	</section>
	<section class="vision_type8">
	
		<div class="vision_area">
		<h2 class="title">ISO 37001 / 반부패 경영시스템 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso37001_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">ISO 37001은 국제표준화기구(ISO, International Organization for Standardization)가 2016년 10월 마련한 것으로, 부패방지를 위해 각국 기업이 실행해야 하는 구체적인 실행방안을 담고 있습니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						규모와 형태에 관계없이 모든 조직에서 반부패경영시스템 적용이 가능할 수 있도록 기획/설계되어 있습니다. 또한 ISO 37001은 요구사항의 체계적인 반영과 경영시스템적 접근이 가능하도록 PDCA 모형에 따라 이행사항을 기술하고 있습니다.
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
					<div class="icon" style="background-image:url(./images/edu_iso37001_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 37001 심사원 과정을 통해 뇌물 방지 관리 시스템 (ABMS)의 기본 개념과 기업, 사회 및 정부가 얻을 수 있는 이점을 이해할 수 있습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					또한 표준 요구사항과, 심사기법, 노하우를 학습하고 효과적으로 심사를 수행할 수 있습니다. 
                    교육과정을 찾으시거나, 교육기관으로 지정 받기 위해 문의하십시오.
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
					<div class="icon"><i class="fas fa-hands-helping"></i><em>PEOPLE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						다음 대상에 권장되나, 누구나 참석할 수 있습니다.<br><br>
                        &#8283; ISO 37001 실무자<br><br>
                        &#8283; ISO 37001 심사원 희망자<br><br>
                        &#8283; ISO 37001 지도위원 (컨설턴트)<br><br>
                        &#8283; 반부패경영시스템 관련 업무 종사자<br><br>
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
					<div class="icon"><i class="fab fa-medapps"></i><em>BENEFITS</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
				      &#10054; ISO 37001 요구사항에 대해 이해할 수 있습니다.<br><br>
                      &#10054; ISO 37001 심사 기법과 노하우를 학습합니다.<br><br>
                      &#10054; ISO 37001 심사에 대응할 수 있습니다.<br><br>
                      &#10054; ISO 37001 운영 및 시스템 구축에 도움이 됩니다.<br><br>
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
                        <span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">IGC는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다. </span><br><br>
	         			<li style="float:none;"><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
	         			<li style="float:none;"><p><em><strong>02</strong></em><span>ISO 37001: 반부패 경영시스템</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>ISO 37001 심사원 교육 및 인증</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
    
</article><!--------+++++++/ 컨텐츠 04  교육 > 경험,위험 및 규정 준수 인증 > ISO 37001 종료 /++++++++----------->




	
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->

</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>