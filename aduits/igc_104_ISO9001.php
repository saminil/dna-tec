<?php
	include_once('./_common.php');
$g5['title'] = '심사원인증 1';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다. 
	*/ 
?>
<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:13px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
    
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding-left:20px;}
    td {font-size:96%;padding-left:20px;}
    
    
    /*심사원의 종류*/
    .txtBox00, .txtBox01, .txtBox02, .txtBox03, .txtBox04 { 
        border-width: 2px; 
        padding: 12px; 
        margin:20px;
        word-break: break-all; 
        width:250px;
        text-align:center;
        float:left;
        border-radius:15px;
    } 
    .txtBox00 { background-color:LightGray;} 
    .txtBox01 { background-color:#e0ecf3;} 
    .txtBox02 { background-color:#99ffff;} 
    .txtBox03 { clear:both;background-color:#ffcc99;} 
    .txtBox04 { background-color:#ffcccc;}
    
</style>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"--->


<style>
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
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
    
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso9001_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso9001_02.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso9001_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso9001_04.jpg);}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background-image:url(images/audit_iso9001_05.jpg);}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background-image:url(images/audit_iso9001_06.jpg);}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background-image:url(images/audit_iso9001_07.jpg);}
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
    
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    
    
    /**/
    .vision_type6 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type6:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type6 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type6 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type6 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type6 .vision_area ul {margin:0; padding:0; }
	.vision_type6 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type6 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type6 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso14001_01.jpg);}
    .vision_type6 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso14001_02.jpg);}
    .vision_type6 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso14001_03.jpg);}
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso14001_04.jpg);}
    
	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    /* 심사원 인증 => ISO 13485  시작*/
    .vision_type7 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type7:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type7 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type7 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type7 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type7 .vision_area ul {margin:0; padding:0; }
	.vision_type7 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type7 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type7 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso13485_02.jpg);}
    .vision_type7 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso13485_01.jpg);}
    .vision_type7 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso13485_03.jpg);}
    .vision_type7 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso13485_04.jpg);}
    .vision_type7 .vision_area:nth-child(5) ul li .i_box {background-image:url(images/audit_iso13485_06.jpg);}
    .vision_type7 .vision_area:nth-child(6) ul li .i_box {background-image:url(images/audit_iso13485_04.jpg);}
	.vision_type7 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type7 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type7 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
    
	.vision_type7 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type7 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type7 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type7 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type7 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type7 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    
    
    
    
    /* 심사원 등록 => ISO 22000 시작 */
    .vision_type8 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type8:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type8 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type8 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type8 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type8 .vision_area ul {margin:0; padding:0; }
	.vision_type8 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type8 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type8 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso22000_01.jpg);}
    .vision_type8 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso22000_02.jpg);}
    .vision_type8 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso22000_03.jpg);}
    .vision_type8 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso22000_04.jpg);}
	.vision_type8 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type8 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type8 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
    
	.vision_type8 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type8 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type8 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type8 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type8 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type8 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
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
		.vision_type5 .vision_area span.stitle{font-size:1em; width:100%;}
		.vision_type5 .vision_area ul li {width:100%;}
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:90px 0; }
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:30px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */
        
        
        .vision_type6 .vision_area h2.title { font-size:1.5em; }
		.vision_type6 .vision_area span.stitle{font-size:1em; width:100%;}
		.vision_type6 .vision_area ul li {width:100%;}
		.vision_type6 .vision_area ul li .i_box{ display:block; width:100%; padding:90px 0; }
		.vision_type6 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:30px 0; margin:0;}
		.vision_type6 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        .vision_type7 .vision_area h2.title { font-size:1.5em; }
		.vision_type7 .vision_area span.stitle{font-size:1em; width:100%;}
		.vision_type7 .vision_area ul li {width:100%;}
		.vision_type7 .vision_area ul li .i_box{ display:block; width:100%; padding:90px 0; }
		.vision_type7 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:30px 0; margin:0;}
		.vision_type7 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        .vision_type8 .vision_area h2.title { font-size:1.5em; }
		.vision_type8 .vision_area span.stitle{font-size:1em; width:100%;}
		.vision_type8 .vision_area ul li {width:100%;}
		.vision_type8 .vision_area ul li .i_box{ display:block; width:100%; padding:90px 0; }
		.vision_type8 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:30px 0; margin:0;}
		.vision_type8 .vision_area ul li .con_txt span { padding:0 30px; }


	}

</style>



<div class="content_wrap">

<!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 시작 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 9001</a></li>
			<li><a href="javascript:;">ISO 14001</a></li>
			<li><a href="javascript:;">ISO 13485</a></li>
			<li><a href="javascript:;">ISO 22000</a></li>
			
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->
	
	<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:00px;width:100%;">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
	
	<!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
  <div class="tab_con">

   <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<article style="display:block">


	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 9001 </span> | 심사원인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">GPC는 현재 ISO 9001 심사원 또는 선임심사원 양성 과정 진행이 가능하며, 지속적으로 추가 과정에 대한 스킴을 개발하고 있습니다.</h3>
	</section>
	
	
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title">ISO 9001 인증 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
						ISO 9001은 품질경영시스템(QMS)를 위한 국제적으로 인정된 규격입니다. 이는 전 세계적으로 가장 많이 사용되는 QMS 규격이며, 
						178개 국가 내 고객들에게 1,100만개 이상의 인증서가 발행되고 있습니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">심사원이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
						심사원은 IGC심사원 적격성기준에 의거하여 승인된 인원입니다. 심사원은 3자 심사를 단독 혹은 심사팀의 멤버로서 수행할 수 있습니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">심사원인증 ISO 9001 절차</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                         &#10021;신청자는 신청할 심사원의 등급을 결정합니다.<br>
                         &#10021;신청서를 작성하고 자격을 증명하기위해 아래의 증빙서류를 GPC에 제출해야 합니다 (증빙자료가 충분하지 않을 경우 GPC는 추가 자료를 요청할 수 있음)<br>
                         &nbsp; &nbsp; &#8278; 졸업증명서<br>
                         &nbsp; &nbsp; &#8278; 경력증명서<br>
                         &nbsp; &nbsp; &#8278; 심사이력<br>
                         &nbsp; &nbsp; &#8278; 교육수료증<br>
                         &nbsp; &nbsp; &#8278; 검증심사 평가기록<br>
                         

					</span>

				</div>
			</li>
		</ul>
		<br>
		<ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
				&#10021;신청서가 접수되고 자격요건을 충족하면 신청자는 평가대상자로서 GPC의 지식, 인성시험을 치를 수 있는 자격이 부여됩니다.<br>
                &#10021;모든 평가대상자는 두 시험을 합격하여야 인증서를 받을 수 있습니다.<br>
                &#10021;GPC에서 수용할 수 있는 교육수료증의 요구기준은 아래와 같습니다.<br>
                &nbsp; &nbsp; &#8278; 교육연수기관 절차의 요구사항을 충족하는 GPC가 승인한 관련 경영시스템 선임심사원 교육과정 수료증<br>
                &nbsp; &nbsp; &#8278; ISO/IEC 17024에 따라 인정을 받은 개인인증기관의 관련 품질시스템 선임심사원 교육과정 수료증<br>
                &nbsp; &nbsp; &#8278; 공인된 기관으로부터 지정받은 교육연수기관이 제공하는 관련 경영시스템 선임심사원 교육과정 수료증<br>
                &#10021;인증은 발행일로부터 3년간 유효하며, 매년 인증받은 주기마다 유지비용을 지불하여야 합니다.<br>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">심사원인증 ISO 9001 시험</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:70px;">
					    &#10020; 시험형태: 2가지의 필기시험 - 지식시험 및 인성시험<br>
                        &#10020; 시험장소: GPC로부터 평가되어 승인된 시험장소에서 실시<br>
                        &#10020; 시험실시: 통상 토요일 오전 10시 (시험장소 및 시간은 시험 전 통보됩니다)<br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">지식시험</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                       &#10027; 시험문제는 ISO 9001:2015에 기초하고 있으며 시험의 목적은 인증을 신청한 규격에 따라 심사활동을 수행하고자 하는 후보자의 적격성 및 자질을 평가하기 위함입니다.<br>
                       &#10027; 지식시험은 총 100문항이며 4개의 섹션으로 구분되어 있습니다. 점수는 문항 당 각 1점이고 아래의 합격기준에 따릅니다.<br>
                       &#10027; 시험시간은 120분이 주어지고 오픈북으로 진행됩니다.<br>
                       &#10027; 만일 지식시험에 통과하지 못할 경우 한번의 기회가 더 주어집니다. 재 시험에 합격하지 못한 후보자는 일년간 시험을 치를 수 없게 됩니다.<br>
					</span>
				</div>
			</li>
			<br>
			<table cellspacing="0" cellpadding="0" border="1px">
               <col width="72">
               <col width="112">
               <col width="72" span="2">
               <tr>
                 <td width="72" align="center">섹션</td>
                 <td width="135" align="center">관련규격/문항유형</td>
                 <td width="76" align="center">문항 개수</td>
                 <td width="93" align="center">합격요건</td>
               </tr>
               <tr>
                 <td width="72" align="center">I</td>
                 <td width="135">신청 또는 적용 표준</td>
                 <td width="76" align="center">50</td>
                 <td width="93">20점 이상</td>
               </tr>
               <tr>
                 <td width="72" align="center">II</td>
                 <td width="135">ISO 19011:2011</td>
                 <td width="76" align="center">30</td>
                 <td width="93">12점 이상</td>
               </tr>
               <tr>
                 <td width="72" align="center">III</td>
                 <td width="135">규격 특화 문항</td>
                 <td width="76" align="center">10</td>
                 <td width="93">4점 이상</td>
               </tr>
               <tr>
                 <td width="72" align="center">IV</td>
                 <td width="135">사례 연구</td>
                 <td width="76" align="center">10</td>
                 <td width="93">4점 이상</td>
               </tr>
               <tr>
                 <td colspan="2" align="center">Total</td>
                 <td width="76" align="center">100</td>
                 <td width="93">70점 이상</td>
               </tr>
             </table>
			
			
			
		</ul>
		<br><br>
		
		<h2 class="title">인성 시험</h2>
		<ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
                &#10027; 인성시험의 목적은 심사원으로서의 자질과 특성을 평가하기 위함으로 신청자가 어느 정도 문항을 이해하고 동의를 하는지 물어봅니다.
                &#10027; 이 시험은 ISO 19011:2011에 기초하고 25문항으로 구성되어 있습니다. 후보자들은 정답이라고 생각되는 답을 지체없이 선택해야 합니다.
                &#10027; 각 문항의 최고점은 4점이며 정답에서 멀어질 수록 3, 2,1점이 부여 됩니다. (미 선택 시 0점). 합격점수는 70점입니다. 
                &#10027; 시험에 실패할 경우, 면접의 기회가 한번 주어집니다. 면접에 통과하지 못한 후보자는 일년간 GPC의 인성시험을 치를 수 없게됩니다.
			</li>
			
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">왜 중요한가?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                      &#10048; 조직이 ISO 9001 요구사항을 기반으로 경영시스템을 수립하였는지 확인하여 심사를 수행하기 위하여 ISO 9001 심사원인증이 필요합니다.<br>
                      &#10048; 심사원 인증은 자격인증기관에 대한 국제적으로 통용되는 기준을 달성하고 촉진하기위한 목적으로 개발되었습니다.<br> 
                      &#10048; 인원에 대한 자격인증은 인증받은 자가 인증스킴의 요구 사항을 충족함을 보증하는 방법 중 하나입니다.<br> 
                      &#10048; 인원에 대한 각 인증스킴의 신뢰성은 인증받은 자의 적격성을 평가하고 주기적으로 재평가하는 국제적으로 통용되는 프로세스를 통해 달성됩니다.<br>
					</span>
				</div>
			</li>
		</ul>

		</div>
		
		
		<div class="vision_area">
		<h2 class="title">IGC 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                    &#10048; IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 9001 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다. <br><br>
                    &#10048; GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인인증기관입니다. <br><br>
                    &#10048; GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br>

					</span>
				</div>
			</li>
		</ul>
		</div>
		
	</section>
	
 
    
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:50px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
    

    <!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
			IGC는 ISO 9001에 대한 전 과정에 대한 서비스를 제공합니다.<br>
				<li><p><em><strong>01</strong></em><span>ISO 9001 시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>ISO 9001 교육 가능 연수기관 안내</span></p></li>
				<li style="float:none;"><p><em><strong>03</strong></em><span>ISO 9001 심사원 인증</span></p></li>
           <br>
            IGC는 ISO 9001에 대한 전 과정에 대한 서비스를 제공합니다.<br>
				
				<li><p><em><strong>01</strong></em><span>정보보안</span></p></li>
				<li><p><em><strong>02</strong></em><span>보건, 안전 및 환경</span></p></li>
				<li><p><em><strong>03</strong></em><span>품질 경영시스템</span></p></li>
				<li><p><em><strong>04</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
				<li><p><em><strong>05</strong></em><span>교통,통신 및 에너지</span></p></li>
				<li><p><em><strong>06</strong></em><span>연속성, 복원력 및 복구</span></p></li>
				<li><p><em><strong>07</strong></em><span>IT 보안</span></p></li>
				<li><p><em><strong>08</strong></em><span>서비스 관리</span></p></li>
				
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>      
   </article> <!-------+++++++ / article style="display:block" 종료 /  ++++++++++--------------->      
   
   
   
   
   
 
   <article><!-------+++++++ / article  심사원인증 > ISO 14001 시작  /++++++++++--------------->   
       <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 14001 </span> | 환경경영시스템(EMS) 심사원 인증</h1>
		
	<section class="vision_type6">	
		<div class="vision_area">
		<h2 class="title" style="color:#009999;display:block;text-align:left;">심사원 인증 개요</h2>
                 <ul>
                     <li>
                     <span  style="display:block;margin:3%;">
                     인증이란? 결국 귀사가 심사 등급에 따른 이해를 하고 있으며 적격성이 있다는 것을 당사가 인식하고 있다는 것입니다.<br><br>
                     &#10021;  적절한 윤리적 행동, 공정한 발표 그리고 전문적인 관심의 원칙을 유지.<br>
                     &#10021;  조직의 모든 수준에서 인원들과 명확하게 구두 및 서면으로 의사소통 함.<br>
                     &#10021;  환경경영시스템 심사를 계획하고 구성함.<br>
                     &#10021;  관련 비즈니스 프로세스를 인지하고 이해함.<br>
                     &#10021;  객관적 증거물을 평가하고 환경경영시스템의 효과성을 결정함.<br>
                     &#10021;  심사발견사항과 결론을 정확하게 보고함.<br>
                     &#10021;  심사팀을 이끌고 심사 프로세스를 경영함.<br>
                     &#10021;  경영 프로세스를 심사함.<br>
                     &#10021;  환경측면과 영향 그리고 그들의 중요성을 판단하는 능력의 기본 지식<br>
                     &#10021;  관련 법규의 지식<br>
                     &#10021;  평가되는 산업 프로세스의 지식<br>
                     
                     </span>
                     </li>
                 </ul>
        </div>
    </section>
		
	</section>
	<section class="vision_type6">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 14001 심사원 인증 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!------CHALLENGE-----></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
					<span style="font-weight:bold;">1) 기본 요구사항</span><br><br>
						&#10022; 교육 수료증 요구사항은 다음과 같습니다.<br><br>

                        &nbsp; &nbsp; &#8278; 교육연수원 절차의 요구사항을 충족하여 GPC가 승인한 경영시스템 선임심사원 교육 수료증<br><br>
                        &nbsp; &nbsp; &#8278; ISO/IEC 17024에 의해 승인된 개인인증기관으로부터 지정받은 교육연수기관이 제공하는 경영시스템 선임심사원 교육수료증<br><br>
                        &nbsp; &nbsp; &#8278; 공인된 기관으로부터 지정받은 교육연수기관이 제공한 경영시스템 선임심사원 교육 수료증<br><br>
 
					</span>
				</div>
			</li>
		</ul>
		<br><br>
		<table cellspacing="0" cellpadding="0">
            <col width="115">
            <col width="303" span="4">
            <col width="193">
            <tr>
              <td width="86" align="center" bgcolor="#BBEFF0">　</td>
              <td width="191" align="center" bgcolor="#BBEFF0">심사원</td>
              <td width="190" align="center" bgcolor="#BBEFF0">선임심사원</td>
              <td width="252" align="center" bgcolor="#BBEFF0">검증 심사원</td>
              <td width="198" align="center" bgcolor="#BBEFF0">내부심사원</td>
              <td width="217" align="center" bgcolor="#BBEFF0">심사원보</td>
            </tr>
            <tr>
              <td width="86" align="center">교육</td>
              <td colspan="5">중등    교육 이상</td>
            </tr>
            <tr>
              <td width="86" align="center">업무 경력</td>
              <td colspan="2" align="center">5년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</td>
              <td width="252" align="center">10년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 5년 이상의 경력 포함)</td>
              <td width="198" align="center">3년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</td>
              <td width="217" align="center">해당    사항 없음</td>
            </tr>
            <tr>
              <td width="86" align="center">심사 경력</td>
              <td width="191" align="center">최근    3년 이내에 심사원 또는 선임심사원으로서 20 M/D 이상의 심사 이력)</td>
              <td width="190" align="center">최근    3년 이내에 심사원 또는 선임심사원으로서 35 MD 이상의 심사 이력(그 중 15 M/D 이상은 선임심사원으로서 심사 이력)</td>
              <td width="252" align="center">최근    3년 이내 선임심사원으로서 15 M/D 이상의  심사 이력(공인된 개인    인증 기관으로부터 선임 심사원 자격 취득 후의 이력만 수용 가능)</td>
              <td width="198" align="center">최근    3년 이내 5회 시상 + 최소 15 M/D 이상의  심사 이력</td>
              <td width="217" align="center">해당    사항 없음</td>
            </tr>
            <tr>
              <td width="86" align="center">교육 훈련</td>
              <td colspan="5" align="center">*심사원/선임심사원    교육 과정<br>
                (공인된 개인 인증 기관 혹은 그로부터 지정 받은 연수 기관의 발행 수료증만 수용 가능)</td>
            </tr>
            <tr>
              <td width="86" align="center">시험</td>
              <td colspan="5" align="center">GPC    지식 및 인성 시험 합격</td>
            </tr>
        </table>
		<br><br>
		<ul>
		    <span style="font-weight:bold;">2) 환경경영시스템 심사원 제도, 지정요구사항</span><br><br>

               조직의 활동, 제품, 서비스 그리고 운영이 환경과의 상호작용을 이해하는 것은 환경경영시스템 심사원으로서 가장 중요한 적격성 부분입니다. 환경과학과 기술은 심사원으로 하여금 인간의 활동과 환경측면의 주요관계를 이해할 수 있도록 도와줄 수 있습니다. 환경심사원은 환경경영시스템을 심사하고 적절한 심사발견 사항을 도출하며 결정을 내릴 수 있는 능력을 부여할 수 있도록 환경경영기법과 기술에 대한 지식을 보유하고 있어야 합니다.<br><br>
               
               환경심사팀은 심사일원으로써 다음의 10 가지 지식 적격성을 보유하고 있어야 합니다.<br><br>
               
               &#8281; 환경용어<br>
               &#8281; 환경메트릭스<br>
               &#8281; 환경 모니터링 그리고 측정 기술<br>
               &#8281; 환경측면과 영향 그리고 환경중요성을 인식하고 평가하기 위한 기술<br>
               &#8281; 디자인의 환경측면<br>
               &#8281; 환경수행평가<br>
               &#8281; 법적 및 그 밖의 요구사항<br>
               &#8281; 비상사태 대비 및 대응<br>
               &#8281; 운영관리<br>
               &#8281; 장소관련 사항<br>
               &#8281; 이전 환경검토 이해<br><br>
                
               심사팀은 또한 다음의 환경관련 분야에서 측면, 모니터링, 측정 그리고 운영관리의 철저한 이해를 필요로 합니다.<br><br>
               
               &#8281; 대기로 배출<br>
               &#8281; 토양으로 배출<br>
               &#8281; 수질로 배출<br>
               &#8281; 원재료, 에너지 그리고 천연자원의 배출<br>
               &#8281; 에너지 방출<br>
               &#8281; 수질<br>
               &#8281; 물리적 특성<br><br>
                
               심사의 일환으로 GPC는 능력을 보유하고 있어 심사동안 증명할 필요성이 있는 적격성을 정의하는 주요 능력, 지식 그리고 경험 요구사항에 대비하여 신청자를 평가할 것입니다.<br><br>

		</ul>
		
		
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 14001 심사원 인증 신청절차</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                       신청자는 신청할 심사원의 등급을 결정합니다.<br><br>
                       &#8284; 신청서를 작성하고 자격을 증명하기위해 아래의 증빙서류를 GPC에 제출해야 합니다.<br>
                       (증빙자료가 충분하지 않을 경우 GPC는 추가 자료를 요청할 수 있음)<br><br>
                       
                       &nbsp; &nbsp; &#8278; 졸업증명서<br><br>
                       &nbsp; &nbsp; &#8278; 경력증명서<br><br>
                       &nbsp; &nbsp; &#8278; 심사이력<br><br>
                       &nbsp; &nbsp; &#8278; 교육수료증<br><br>
                       &nbsp; &nbsp; &#8278; 검증심사 평가기록<br><br>
					</span>
				</div>
			</li>
		</ul>
		
		<br>
		
		<ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
				<span >
                      &#8284; 신청서가 접수되고 자격요건을 충족하면 신청자는 평가대상자로서 GPC의 지식, 인성시험을 치를 수 있는 자격이 부여됩니다.<br>
                      &#8284; 모든 평가대상자는 두 시험을 합격하여야 인증서를 받을 수 있습니다.<br>
                      &#8284; GPC에서 수용할 수 있는 교육 수료증의 요구기준은 아래와 같습니다.<br>
                      
                       &nbsp; &nbsp;  &#8278; 교육연수기관 절차의 요구사항을 충족하는 GPC가 승인한 관련 경영시스템 선임심사원 교육과정 수료증<br>
                       &nbsp; &nbsp;  &#8278; ISO/IEC 17024에 따라 인정을 받은 개인인증기관의 관련 품질시스템 선임심사원 교육과정 수료증<br>
                       &nbsp; &nbsp;  &#8278; 공인된 기관으로부터 지정받은 교육연수기관이 제공하는 관련 경영시스템 선임심사원 교육과정 수료증<br>
                      &#8284; 인증은 발행일로부터 3년간 유효하며, 매년 인증받은 주기마다 유지비용을 지불하여야 합니다.<br>
					</span>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">심사원 시험</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                      <span style="font-weight:bold;margin-bottom:3%;margin-top:5%;">1) 본 시험은 서면의 두 가지 방식으로 지식시험 및 인성시험으로 구성이 됩니다.</span>
 
                       &#8278; 시험은 GPC가 사전에 평가하고 최종 승인한 장소에서 수행됩니다. (시험과 관련한 정보는 사전에 통보될 것입니다.) <br>
                       &#8278; 시험자는 반드시 시험이 실시되기 적어도 10분전에 입실해야 합니다. 만약 지각 또는 결석의 경우, 자동적으로 0점 처리가 됩니다.<br>
                       &#8278; 평가대상자는 자신의 신분을 확인하기 위해 사진이 부착된 신분증을 보여주어야 합니다. <br>
                       &#8278; 시험장에서 반입이 금지된 물품은 시험이 시작되기 전에 시험감독관에게 보관해야 합니다.<br><br>
                        
                       만약 부정행위가 발견되면, 시험감독관은 바로 퇴장명령을 요구할 것이며 더 이상 시험은 허용될 수 없습니다. 시험장소 및 정보를 확인하기 위해서 자세한 시험통보를 확인해 주시기 바랍니다.<br><br>

                         

					</span>
					<!----------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span---------->
				</div>
			</li>
		</ul>
		<br>
		<ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
                <span style="font-weight:bold;margin-bottom:3%;margin-top:5%;">2) 지식시험</span><br>
 
                     본 시험 질문은 ISO 14001:2015 규격에 출처를 두고 있으며 시험의 목적은 지원하고자 하는 규격에서 심사활동을 하고자 하는 평가대상자의 자질과 적격성을 평가하는데 있습니다.
                      
                     지식시험은 총 100 문제로 구성되어 있으며 4가지 영역으로 구분되어 있습니다.<br>
                      
                     한문제당 1점이며 합격기준은 다음과 같습니다.<br>
                      
                     &#8280; Section I (ISO 14001:2015): 총 50 점 중 최소 20 점 이상.<br>
                     &#8280; Section II (ISO 19011:2011): 총 30 점 중 최소 12 점 이상.<br>
                     &#8280; Section III (규격특화 문항): 총 10 점 중 최소 4 점 이상.<br>
                     &#8280; Section IV (사례 연구): 총 10 점 중 최소 4 점 이상.<br>
                     &#8280; Total: 총 100 점 중 최소 70 점 이상.<br>
                     * 총점이 70점을 넘을지라도, 각 영역에서 요구되는 최소한의 점수를 충족하지 못하면 시험에 통과할 수 없습니다.<br>
                      
                     시험을 위해 주어진 시간은 120분이며 오픈북(GPC가 제공하는 표준 Hard Copy본)으로 진행됩니다. 시험에 통과하지 못할 시 재 시험의 기회가 있습니다. 재 시험에서 합격하지 못하면 평가대상자는 1 년간 시험 응시 자격이 박탈됩니다.<br><br>
                      
                                     <span style="font-weight:bold;margin-bottom:3%;margin-top:5%;">3) 인성시험</span><br>
                      
                     &#8278; 인성 시험의 목적은 심사원으로서 특성과 자질을 파악하고 평가대상자가 질문에 얼마만큼 이해를 하는지 평가하는데 있습니다.<br>
                      
                     &#8278; 인성시험은 ISO 19011:2011 출처를 두고 있으며 25문항으로 구성되어 있습니다.<br> 
                      
                     &#8278; 각 문항은 최대 4점까지 주어지며 올바른 답변에서 멀어질수록 1점씩 차감이 됩니다. (무응답 0점)<br>
                      
                     &#8278; 통과 기준은 70점입니다.<br>
                      
                     &#8278; 시험을 통과하지 못하면 재시험의 기회가 부여됩니다. 재시험에서 통과하지 못하면 평가대상자는 1년 간 시험 응시 자격이 박탈됩니다.<br>

			</li>
			<!------------------------dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd------------------------>
		</ul>
		</div>
		
		
	</section>
	
 
    
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:50px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
    

    <!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
			IGC는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다. 특히, IAF 공식 인정 심사원 등록가능 표준에 대한 심사원 인증을 제공합니다.<br>
				
				<li><p><em><strong>01</strong></em><span>ISO 9001 : 2015</span></p></li>
				<li><p><em><strong>02</strong></em><span>ISO 14001 : 2015</span></p></li>
				<li><p><em><strong>03</strong></em><span>ISO 22000 : 2018</span></p></li>
				<li><p><em><strong>04</strong></em><span>ISO 13485 : 2016</span></p></li>
				<li><p><em><strong>05</strong></em><span>OSHAS 18001(만료일: 2021.03.01)</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   </article><!-------+++++++ / article  심사원인증 > ISO 14001 종료  /++++++++++-------------->   
   
   
   
   
   
   
   
    <article><!-------+++++++ / article  심사원인증 > ISO 13485 시작  /++++++++++--------------->   
       <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 13485:2016 </span> | 심사원인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		ISO 13485:2016은 의료기기 및 관련 서비스에 대한 품질관리시스템 요구사항입니다. 조직은 의료기기 및 관련 서비스 제조와 관련된 고객 및 법적 요구사항을 충족하여야 합니다. ISO 13485:2016은 의료기기의 설계, 개발, 생산, 설치, 서비스, 판매를 하는 조직을 위해 고안되었습니다.
		</h3>
	</section>
	
	<section class="vision_type7">
		
		<div class="vision_area">
		<h2 class="title"  style="color:#009999;">ISO 13485:2016 심사원 인증 기대효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                      ISO 13485:2016 인증의 기대 효과는 다음과 같습니다.<br><br>
                      1. 품질, 안전 및 법적 요구사항을 포함한 고객의 요구사항을 지속적으로 충족하는 제품을 제공함으로써 고객의 만족도를 향상시킬 수 있습니다.<br>
                      2. 법적/규제적 요구사항을 준수할 수 있습니다.<br>
                      3. 제품의 일관성 및 추적성을 증가시키고 리스크 관리 기법을 통해 리스크를 최소화하도록 도움을 줄 수 있습니다.<br>
                      4. 인정된 검증에 대한 독립적인 검증을 통해 신뢰도를 향상시킬 수 있습니다.<br>
					</span>
					<!----span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span----->
				</div>
			</li>
		</ul>
		
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">심사원 인증의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                       심사원 인증은 자격 인증기관에 대한 국제적으로 통용되는 기준을 달성하고 촉진하기 위한 목적으로 개발되었습니다. 인원에 대한 자격인증은 규격의 요구사항을 준수하고 있음을 보장하는 방법 중 하나입니다. 인원에 대한 각 인증 제도의 신뢰성은 인증을 받은 사람의 적격성을 평가하고 주기적으로 재평가하는 국제적으로 통용되는 프로세스를 통해 달성됩니다.<br><br>
                       심사원 인증은 인원에 대한 인증 제도를 운영하는 자격인증기관이 일관적이고 비교 가능하며 신뢰할 수 있는 방식으로 운영됨을 보장하는 요구사항을 명시하고 있습니다. 심사원 인증의 요구사항은 자격인증기관에 대한 일반 요구사항으로 고려되어야 합니다. 
					</span>
					<span></span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
			<li>
               
                <span style="display:block;padding:20px;font-size:1.3em;text-align:left;margin-bottom:-25px;">심사원의 종류</span>
					<div class="txtBox00">내부심사원(Internal Auditor)</div>
					<div class="txtBox01">심사원보(Provisional Auditor)</div>
					<div class="txtBox02">심사원(Auditor)</div>
					<div class="txtBox03">선임심사원(Lead Auditor)</div>
					<div class="txtBox04">검증심사원(Senior Auditor)</div>
			</li>
			<br>

			<span style="display:block;padding:20px;font-size:1.3em;text-align:left;margin-bottom:-12px;">심사원 등급에 따른 자격 요구사항</span>
               
                <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="77" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p></td>
                      <td width="105" valign="top"><p align="center"><strong>내부심사원</strong><strong> </strong></p></td>
                      <td width="95" valign="top"><p align="center"><strong>심사원보</strong><strong> </strong></p></td>
                      <td width="110" valign="top"><p align="center"><strong>심사원</strong><strong> </strong></p></td>
                      <td width="96" valign="top"><p align="center"><strong>선임심사원</strong><strong> </strong></p></td>
                      <td width="96" valign="top"><p align="center"><strong>검증심사원</strong><strong> </strong></p></td>
                    </tr>
                    <tr>
                      <td width="77" valign="middle" bgcolor="#FFFFFF"><p align="center"><strong>학력</strong><strong> </strong></p></td>
                      <td width="502" colspan="5" valign="top"><p align="center">고등학교 졸업 </p></td>
                    </tr>
                    <tr>
                      <td width="77" valign="middle" bgcolor="#FFFFFF"><p align="center"><strong>경력</strong><strong> </strong></p></td>
                      <td width="105" valign="top"><p align="center">3년 이상 </p></td>
                      <td width="95" valign="top"><p align="center">&nbsp;</p></td>
                      <td width="110" valign="top"><p align="center">5년이상 <br>
                        (신청 표준 관련하여 품질 혹은 환경 분야 경력 최소 2년 이상)</p></td>
                      <td width="96" valign="top"><p align="center">5년이상 <br>
                        (신청 표준 관련하여 품질 혹은 환경 분야 경력 최소 2년 이상)</p></td>
                      <td width="96" valign="top"><p align="center">10년이상 <br>
                        (신청 표준 관련하여 품질 혹은 환경 분야 경력 최소 5년 이상)</p></td>
                    </tr>
                    <tr>
                      <td width="77" valign="middle" bgcolor="#FFFFFF"><p align="center"><strong>수료증</strong><strong> </strong></p></td>
                      <td width="105" valign="top"><p align="center">심사원 교육 수료증 또는 내부심사원 교육 수료증 </p></td>
                      <td width="301" colspan="3" valign="top"><p align="center">심사원 교육 수료증 </p></td>
                      <td width="96" valign="top"><p align="center">&nbsp;</p></td>
                    </tr>
                    <tr>
                      <td width="77" valign="middle" bgcolor="#FFFFFF"><p align="center"><strong>심사이력</strong><strong> </strong></p></td>
                      <td width="105" valign="top"><p align="center">최근 3년 이내 내부심사 5회 이상, 최소 15MD 이상의    내부심사 이력 </p></td>
                      <td width="95" valign="top"><p align="center">지식 및 인성시험 </p></td>
                      <td width="110" valign="top"><p align="center">최근 3년 이내 20MD 이상 <br>
                        (8MD 이상의 ON-Site  심사 및 3회 이상의 심사    포함)</p></td>
                      <td width="96" valign="top"><p align="center">최근 3년 이내 35MD 이상 <br>
                        (15MD 이상의 선임심사원, 8MD 이상의    ON-site 심사 및 3회 이상 심사 포함)</p></td>
                      <td width="96" valign="top"><p align="center">선임심사원 자격 보유 이후 최근 3년    이내의 15MD 이상 </p></td>
                    </tr>
                    <tr>
                      <td width="77" valign="middle" bgcolor="#FFFFFF"><p align="center"><strong>시험</strong><strong> </strong></p></td>
                      <td width="105" valign="top"><p align="center">지식 및 인성시험 </p></td>
                      <td width="95" valign="top"><p align="center">&nbsp;</p></td>
                      <td width="110" valign="top"><p align="center">지식 및 인성시험 </p></td>
                      <td width="96" valign="top"><p align="center">지식 및 인성시험 </p></td>
                      <td width="96" valign="top"><p align="center">지식 및 인성시험 </p></td>
                    </tr>
                   </table>	
                   <br><br>
                   <li>
                       <span style="display:block;padding:20px;font-size:1.3em;text-align:left;">교육 수료증에 대한 요구사항</span>
                       <p>
                        &nbsp; &nbsp;   &#10022; ISO/IEC 17024에 따라 인정을 받은 개인 인증기관의 관련 품질시스템 선임심사원/심사원 교육 과정 수료증<br><br>
                        &nbsp; &nbsp;   &#10022; 공인된 기관으로부터 지정 받은 교육 연수기관이 제공하는 관련 경영시스템 선임 심사원/심사원 교육과정 수료증<br><br>
                       </p>
                   </li>
		
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 13485:2016 심사원 인증</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                         의료기기 산업은 국내, 국제 표준 및 기타 요구 사항의 복잡한 배열의 규제 시스템의 영향을 받고 있습니다. ISO 13485 시스템 인증은 업체가 무엇을 어떻게 해야 국제 시장에 진입할 수 있을지에 대한 도움이 될 수 있습니다.<br><br>
					</span>
					<!----------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span---------->
				</div>
			</li>
			<br>
			<li>
			    <span style="display:block;padding:20px;font-size:1.3em;text-align:left;">ISO 13485:2016 심사원 인증의 목적</span>
                        <span style="display:block;padding:20px;line-height:30px;">ISO 13485 심사원 인증의 주요 목적은 표준화된 의료기기의 법적 요구사항 지정하는 것이며 다음 사항을 포함합니다.<br>
                          &nbsp; &nbsp;  &#10023;개선을 통한 품질경영시스템의 구현<br>
                          &nbsp; &nbsp;  &#10023;위험분석을 통한 제품 개발 및 제품 실현<br>
                          &nbsp; &nbsp;  &#10023;검증 프로세스<br>
                          &nbsp; &nbsp;  &#10023;법령과 규제 요건의 준수<br>
                          &nbsp; &nbsp;  &#10023;효과적 제품 추적성 관리 및 리콜 시스템<br>
                        </span>
			</li>	
		</ul> 
		<br>
		<ul>
			<li style="line-height:30px; list-style:none;padding-left:3%;">

             <span style="display:block;font-size:1.3em;text-align:left;margin-top:20px;margin-left:-10px;">ISO 13485:2016 심사원 요구사항</span><br>
             &#8281; 학력: 대학교(4년제) 졸업 이상<br>
             &#8281; 전공: 생물학, 미생물학, 화학, 생화학, 컴퓨터 및 소프트웨어 기술, 전기, 전자, 기계, 생물 공학, 인간생리학, 약학, 물리학<br>
             &#8281; 또는 경력: 의료기기, 의료 연구 분야에서 4년 이상 정규직으로 일한 사람<br><br><br>
             
             
             <span style="display:block;font-size:1.3em;text-align:left;margin-left:-10px;">특별 요구사항 및 기술적 역량</span><br>
             1. 의료기기에 대한 기본 지식과 다음을 포함한 관련 생산활동의 이해<br>
              &#8281; 사용목적<br>
              &#8281; 위험분석을 포함한 의료기기의 분류<br>
              &#8281; 법적 규제 프레임 워크와 인증기관의 역할<br>
              &#8281; 의료기기 위험평가(ISO 14971)<br>
              &#8281; 의료기기 평가 관련 제품 규격<br>
              &#8281; 인증기관의 ISO 13485 인증<br>
              &#8281; 의료기기 사업/기술에 대한 지식<br><br>

            2. 통계분석<br>
              &#8281; 신뢰성, 표준 편차 등을 고려한 샘플링 및 트렌드 분석에 따른 확률과 통계에 대한 기본 지식<br><br>

            3. 다음사항에 대한 지식<br>
              &#8281; 멸균기술 및 검증 기술<br>
              &#8281; 미생물학 및 BIO-Burden 모니터링<br>
              &#8281; 생체 적합성 및 검증<br>
              &#8281; 클린룸 운영<br>
              &#8281; 환경 모니터링 및 제어<br>
              &#8281; 포장 기술<br>
              &#8281; 안정성 시험<br>
              &#8281; 위험 관리 기반<br>
              &#8281; 세척 및 소독<br>
              &#8281; 의료기기의 생물학적 평가<br>
              &#8281; 의료기기의 임상 평가<br>
              &#8281; 의료기기의 물리적, 화학적 평가<br>
              &#8281; 공정 검증 관행에 대한 지식<br>
              &#8281; 소프트웨어 검증 기술<br><br>

			</li>
			<!------------------------dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd------------------------>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">IGC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt">
					<span style="display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                       &#8284; IGC는 미국의 인정기구인 IAS로부터 ISO 13485:2016에 대한 인정을 받아 의료기기 및 관련 서비스에 대한 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br>
                       &#8284; IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>

                       &#8284; IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 13485는 물론 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다. <br>
                       &#8284; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br> <br>

                       &#8284; IGC인증원은 협력기관인 GPC를 통해 심사원 인증을 지원하고 있습니다.<br> 
                       &#8284; GPC 인증원은 ISO/IEC 17024에 의거하여 개인의 자격을 인증해주는 국제적인 개인인증 평가기관으로 개인인증은 적용되는 표준에 근거하여 능력의 적합성을 평가한 이후 인증서를 발행하고 있습니다. <br>
                       &#8284; GPC 인증원이 발행한 개인인증서는 국제적인 신뢰성을 확보한 인증서입니다.<br><br>
                       &#8284; ㈜IGC인증원은 GPC로부터 승인된 교육 및 연수기관인 IGC Academy에서 ISO 13485심사원에 대한 교육을 지원하고 있습니다.<br>
					</span>
					<!-------------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span------------->
				</div>
			</li>
		</ul>
		<!---------------ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
			</li>
			<li>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</li>
		</ul--------------->
		</div>
		
		
		
		
	</section>
	
 
    
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:50px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
    

    <!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
			<ul>				
				<li><p><em><strong>01</strong></em><span>ISO 13485:2016 심사원 및 선임심사원 인증 지원</span></p></li>
				<li><p><em><strong>02</strong></em><span>ISO 13485:2016 검증심사원 인증 지원</span></p></li>
				<li><p><em><strong>03</strong></em><span>ISO 13485:2016 내부심사원 인증 지원</span></p></li>
				<li><p><em><strong>04</strong></em><span>ISO 13485:2016 심사원보 인증 지원</span></p></li>
				<li><p><em><strong>05</strong></em><span>ISO 13485:2016 심사원 교육</span></p></li>				
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
    </article><!-------+++++++ / article  심사원인증 > ISO 13485 종료  /++++++++++-------------->
    
       
         
         
         
          
    <article><!-------+++++++ / article  심사원인증 > ISO 22000 시작  /++++++++++--------------->   
       <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 22000(식품안전 경영시스템) </span> | 심사원인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		ISO 22000은 식품안전경영시스템으로 ISO 9001 및 HACCP의 주요 내용을 혼합 및 보완하였고, 모든 식품관련조직에 적용 가능한 국제규격입니다. 기업은 ISO 22000 취득을 통해 고객 신뢰성 향상 및 영업 효과를 기대할 수 있습니다.<br><br>
       
        식품 안전 규정이 효력을 갖기 위해서 관리 시스템 방식을 이해하고 이 방식에 대해 유능한 심사원이 필요합니다. GPC ISO 22000 심사원 인증 프로그램은 규제기관, 인정기관, 인증기관, 기업, 산업 및 국민 전반에게 이 프로그램에 인증된 심사원의 유능함과 신뢰를 제공하는데 목적을 하고 있습니다. 인증 과정의 일환으로 심사하는 동안 입증이 필요한 능력(핵심 기술, 지식 및 경험)의 요구사항에 대해서 식품 안전 심사원을 평가합니다.

		
		</h3>
	</section>
	<section class="vision_type8">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 22000 심사원 인증 프로그램 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                        심사원 인증 프로그램은 다음 표준에 기반합니다.<br><br>

                        &#8280; ISO TS 22003:2013, 식품 안전 관리 시스템: 식품 안전 관리 시스템 심사 및 인증 기관에 대한 요구사항<br>
                        &#8280; ISO 22000:2018, 식품 안전 관리 시스템: 식품 체인 조직에 대한 요구사항 및 심사 지침 표준<br>
                        &#8280; ISO 19011:2011, 심사 관리 시스템에 대한 요구사항<br>
                        
                        &#8281; 인증부여는 신청자가 다음 사항을 이해하고 능숙하게 수행(등급에 따름)한다고 GPC에서 인정했음을 의미합니다.<br>
                        
                        &#8278; 올바른 윤리적 행위, 공정한 프리젠테이션 및 적절한 전문적 관리 원칙의 고수<br>
                        &#8278; 조직의 모든 수준에서 직원들과 구두 및 서면으로 명확하게 의사 소통<br>
                        &#8278; FSMS 심사에 대한 계획 및 조직화<br>
                        &#8278; 관련된 업무 과정에 대한 식별과 이해<br><br>
                        
                        특히 다음 사항에 관해서 객관적 증거를 평가하고 식품안전관리 시스템의 유효성을 결정합니다.<br><br>
                        
                        
			             <table border="1" cellspacing="0" cellpadding="0" style="font-size:1.1em;width:80%;margin:0 auto;">
                           <tr>
                             <td width="586" valign="top"><p>위험 평가 시스템을 통해 위험에 대한 조직 관리의 효과 </p></td>
                           </tr>
                           <tr>
                             <td width="586" valign="top"><p>조직에서 법적 요구 사항을 준수하는 능력 </p></td>
                           </tr>
                           <tr>
                             <td width="586" valign="top"><p>조직의 비상 절차 및 대응이 적절한지 여부 </p></td>
                           </tr>
                           <tr>
                             <td width="586" valign="top"><p>위험 관리 및 개선 프로그램의 구현 </p></td>
                           </tr>
                           <tr>
                             <td width="586" valign="top"><p>식품 안전 성과에 대한 지속적인 개선 </p></td>
                           </tr>
                         </table>
					</span>
				</div>
			</li>
			<br>

          </ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">식품 안전 관리 시스템 심사원 제도, 기본 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
						
                    <span style="font-weight:bold;">심사원 등록 제출 서류</span><br><br>
                        &#8281; 경력증명서<br><br>
                        &#8281; 심사원증<br><br>
                        &#8281; 교육수료증<br><br>
                        &#8281; 심사이력 로그시트 작성<br><br>

					</span>
					<!---------------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span--------------->
				</div>
			</li>
			<br>
            <div style="overflow-x:auto;font-size:1.2em;">
            <table border="1" cellspacing="0" cellpadding="0">
            
              <tr>
                <td><p>&nbsp;</p></td>
                <td><p align="center">선임심사원 </p></td>
                <td><p align="center">심사원 </p></td>
                <td><p align="center">검증심사원 </p></td>
                <td><p align="center">내부심사원 </p></td>
                <td><p align="center">심사원보 </p></td>
              </tr>
            
              <tr>
                <td><p>교육 </p></td>
                <td colspan="5"><p>중등교육 이상 </p></td>
              </tr>
              <tr>
                <td><p>업무경력 </p></td>
                <td colspan="2"><p>5년    이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의    경력 포함)</p></td>
                <td><p>10년    이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의    경력 포함)</p></td>
                <td><p>3년    이상( 해당 규격 관련 품질 또는 환경 분야 1년 이상의    경력 포함)</p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>심사경력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 35MD 이상의 심사 이력(그    중 15MD이상은 선임심사원으로서의 심사이력)</p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 20MD 이상의 심사 이력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 15MD 이상의 심사 이력(공인된    개인인증기관으로부터 선임심사원 자격 취득후의 이력만 수용 가능)</p></td>
                <td><p>최근 3년    이내 5회 이상 + 최소 15MD 이상의 심사 이력 </p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>교육훈련 </p></td>
                <td colspan="5"><p align="center">*심사원/선임심사원    교육과정 <br>
                  (공인된 개인인증기관 혹은 그로부터 지정 받은 연수기관의 발행    수료증만 수용 가능)</p></td>
              </tr>
              <tr>
                <td><p>시험 </p></td>
                <td colspan="5"><p align="center">GPC 지식 및 인성시험 합격 </p></td>
              </tr>
            </table>		
            </div>		
		</ul>
		<!----------------ul>
			<li>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
			</li>
			<li>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</li>
		</ul---------------->
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">시험</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                    &#8280; 시험은 지식 시험과 인성 시험의 두 종류 서면 시험으로 구성됩니다.<br>
                    &#8280; 시험은 GPC에서 사전에 평가하여 최종적으로 승인한 장소에서 수행됩니다. (시험 전에 통지)<br>
                    &#8280; 신청자는 시험이 시작되기 최소 10분 전까지 시험 장소에 도착해야 하며 지각하거나 결석할 경우 0점으로 자동 기록됩니다.<br>
                    &#8280; 후보자 확인을 위해 사진이 있는 신분증을 제시해야 하며 시험장에서 금지된 물품은 시험이 시작하기 전에 시험 감독관에게 맡겨야 합니다.<br>
                    &#8280; 부정행위가 발견되면 시험 감독자는 후보자에게 즉시 퇴장하도록 요청하며 더 이상의 시험이 허용되지 않습니다.<br>
                    &#8280; 시험 장소와 연락처 정보에 대한 자세한 내용은 시험 통지서를 참조해주십시오.<br>
					</span>
					<!----------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span---------->
				</div>
			</li>
		</ul>
		<br>
		<ul>
			<li style="line-height:30px; list-style:none;padding-left:5%;">
               <span style="font-weight:bold;">지식 시험</span><br>
               시험 문제는 ISO 22000 2005 표준에 기반하여 작성되며 시험의 목적은 후보자가 신청하는 표준을 통해 심사 활동을 원하는 후보자의 자격과 능력을 평가하는데 있습니다.
               지식 시험은 100개의 문제로 구성되며 4가지 섹션으로 구성됩니다.
			</li>
			<br>
		  <div style="width:60%;margin:0 auto;font-size:1.2em;%">
			    <table border="1" cellspacing="0" cellpadding="0" align="left" >
                 <tr>
                   <td><p>Section I    (ISO 22000:2005): 총 50점 중 최소    20점 이상 </p></td>
                 </tr>
                 <tr>
                   <td><p>Section II    (ISO 19011:2011): 총 30점 중 최소    12점 이상 </p></td>
                 </tr>
                 <tr>
                   <td><p>Section III    (규격특화 문항): 총 10점 중 최소 4점 이상 </p></td>
                 </tr>
                 <tr>
                   <td><p>Section IV    (사례 연구): 총 10점 중 최소 4점 이상 </p></td>
                 </tr>
                 <tr>
                   <td><p>Total: 총 100점 중 최소    70점 이상 </p></td>
                 </tr>
               </table>
          </div>

		</ul>
		
		<br>
		
		<ul>
             <li style="line-height:20px; list-style:none;padding-left:5%;">
              <br>
               문제 당 배점은 1점이며 합격 기준은 다음과 같습니다.<br><br>
              &#8280; 신청자는 합계 점수가 70점 이상 이어도 각 섹션에서 요구하는 최소 점수를 넘지 않으면 시험을 통과할 수 없습니다.<br><br>
              &#8280; 시험 제한 시간은 120분이며 오픈북(GPC가 제공하는 표준 Hard Copy본)으로 진행됩니다.<br><br>
              &#8280; 시험에 불합격한 후보자에게는 시험 기회가 한 번 더 제공된다. 후보자가 시험에 연속해서 불합격하면<br><br>
             </li>
		</ul>
		<br>
		
		<ul>
            <li style="line-height:30px; list-style:none;padding-left:5%;">
               <span style="font-weight:bold;">인성 시험</span><br>
                 인성 시험의 목적은 심사원으로서의 특성과 자격을 평가하는데 있으며 신청자가 질문을 얼마나 이해하는지 묻습니다.<br><br>
                 &nbsp; &nbsp; &#8281; 시험은 ISO 19011:2011에 기반하며 25문항으로 구성됩니다.<br><br>
                 &nbsp; &nbsp; &#8281; 각 문항당 최대 4점까지 주어지며 대답이 정답에서 멀수록 1점씩 공제됩니다. (대답이 없으면 0점)<br><br>
                 &nbsp; &nbsp; &#8281; 통과 기준은 70점입니다.<br><br>
                 &nbsp; &nbsp; &#8281; 시험에 불합격하면 재시험의 기회가 추가로 제공됩니다. 후보자가 재시험에서 불합격하면 1년 간 시험 응시 자격이 박탈됩니다.<br><br>

			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">IGC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 30px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                      &#8284;IGC인증원은 국내 식품 제조 기업의 해외시장 진출을 위한 다양한 인증 및 시험서비스를 제공합니다. 시험, 인증, 심사원 양성까지 수출을 위해 필요한 모든 과정을 One-stop 서비스로 빠르고 정확하게 지원합니다.<br><br>

                      &#8284;IAF 승인 ISO 22000 선임심사원 인증서<br><br>

                      &#8284;IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 22000 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다.<br> <br>

                      &#8284;FSSC 22000 선임 심사원 지정을 위해 FSSC로부터 TO(Training Organization)로 지정을 받아 활발하게 FSSC 22000 심사원 양성 업무를 수행하고 있습니다.<br><br>
					</span>
					<!-------------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span------------->
				</div>
			</li>
		</ul>
		</div>
		
	</section>
	
 
    
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:50px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
    

    <!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
			IGC 인증원은 GPC로부터 승인을 받아 다양한 경영시스템 분야에 대한 심사원 연수과정을 제공하고 있습니다.<br>
				
				<li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
				<li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
				<li><p><em><strong>03</strong></em><span>ISO 13485</span></p></li>
				<li><p><em><strong>04</strong></em><span>ISO 22716</span></p></li>
				<li><p><em><strong>05</strong></em><span>ISO 45001</span></p></li>
				<li><p><em><strong>06</strong></em><span>ISO 37001</span></p></li>
				<li><p><em><strong>07</strong></em><span>ISO 50001</span></p></li>
				<li><p><em><strong>08</strong></em><span>ISO 22301</span></p></li>
				<li><p><em><strong>09</strong></em><span>ISO 22000</span></p></li>
				<li><p><em><strong>10</strong></em><span>FSSC22000</span></p></li>
				
            <span style="display:inline-block;font-weight:bold;margin-top:30px;color:#009999;">
            심사원 양성 및 심사원 자격증 획득지원 </span><br>
           
IGC는 심사원 양성과정 이후 심사 업무 참여를 원하는 신청자에 대하여 심사참여를 통한 심사원 양성 혹은 1자 및 2자 심사를 통한 경험이 충분한 신청자의 경우 검증심사를 통하여 심사원 자격을 확보할 수 있도록 지원하고 있습니다.
			
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   </article><!-------+++++++ / article  심사원인증 > ISO 22000 종료  /++++++++++-------------->   
   
   
            
   
				
  </div><!-----------+++++++ / div class="tab_con" 종료 / ++++++++------------------------>
	
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>