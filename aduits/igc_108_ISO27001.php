<?php
	include_once('./_common.php');
$g5['title'] = '심사원인증 2';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

	table,td p {font-size:0.9em;margin-left:0px;padding:5px;}
    td {font-size:96%;padding:5px;}
    
    
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
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso27001_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso27001_02.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso27001_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso27001_04.jpg);}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background-image:url(images/audit_iso27001_05.jpg);}

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
    
    
    
    /*심사원인증 > OHSAS 18001 시작*/
    .vision_type6 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type6:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type6 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type6 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type6 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type6 .vision_area ul {margin:0; padding:0; }
	.vision_type6 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type6 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type6 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_ohsas18001_01.jpg);}
    .vision_type6 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_ohsas18001_02.jpg);}
    .vision_type6 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_ohsas18001_03.jpg);}
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_ohsas18001_04.jpg);}
    .vision_type6 .vision_area:nth-child(5) ul li .i_box {background-image:url(images/audit_ohsas18001_05.jpg);}
    
	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}


    
    
    /* 심사원 인증 > ISO 22716:2007 시작  */
    .vision_type7 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type7:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type7 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type7 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type7 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type7 .vision_area ul {margin:0; padding:0; }
	.vision_type7 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type7 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type7 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso27716_01.jpg);}
    .vision_type7 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso27716_02.jpg);}
    .vision_type7 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso27716_03.jpg);}
    .vision_type7 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso27716_04.jpg);}

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
    
    
    
    /* 심사원인증 > ISO 50001 에너지경영시스템 */
    .vision_type8 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type8:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type8 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type8 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type8 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type8 .vision_area ul {margin:0; padding:0; }
	.vision_type8 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type8 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type8 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso50001_01.jpg);}
    .vision_type8 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso50001_02.jpg);}
    .vision_type8 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso50001_03.jpg);}
    .vision_type8 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso50001_04.jpg);}
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
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px; } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:30px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type6 .vision_area h2.title { font-size:1.5em; }
        .vision_type6 .vision_area span.stitle{font-size:1em; width:100%;}
        .vision_type6 .vision_area ul li {width:100%;}
        .vision_type6 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type6 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type6 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */
        
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type7 .vision_area h2.title { font-size:1.5em; }
        .vision_type7 .vision_area span.stitle{font-size:1em; width:90%;}
        .vision_type7 .vision_area ul li {width:100%;}
        .vision_type7 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type7 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type7 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type8 .vision_area h2.title { font-size:1.5em; }
        .vision_type8 .vision_area span.stitle{font-size:1em; width:90%;}
        .vision_type8 .vision_area ul li {width:100%;}
        .vision_type8 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type8 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 30px; margin:0;}
        .vision_type8 .vision_area ul li .con_txt span { padding:0 30px; }


	}

</style>



<div class="content_wrap">

<!--+++ 20.05.11 탭메뉴/ 심사원인증2 > ISO 27001 시작 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 27001</a></li>
			<li><a href="javascript:;">OHSAS 18001</a></li>
			<li><a href="javascript:;">ISO 22716</a></li>
			<li><a href="javascript:;">ISO 50001</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 심사원인증2 > ISO 27001 종료  +++-->
	
	<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:00px;width:100%;">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
	
	<!--+++ 20.05.15 탭컨텐츠 영역 시작 +++-->
  <div class="tab_con">

   <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<article style="display:block">


	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 27001 </span> | 정보보안 경영시스템 심사원인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">ISO 27001 규격은 정보의 지속적 접근성, 기밀성 및 무결성 뿐만 아니라 법규 준수 또한 가능하게 하는 정보보안경영시스템 (ISMS)의 프레임워크를 제공합니다. ISO 27001 인증은 가장 중요한 자산을 보호하는데 필수적 입니다.</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 27001 심사원인증 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
						ISO 27001 실행은 데이터 보호법과 같은 고객 및 법규 요구사항과, 다음을 포함한 잠재적 보안 위협에의 이상적인 반응입니다.<br><br>
 
                        &nbsp; &nbsp; &#9672; 사이버 범죄<br><br>
                        &nbsp; &nbsp; &#9672; 개인 데이터 결함<br><br>
                        &nbsp; &nbsp; &#9672; 기물 파손/테러리즘<br><br>
                        &nbsp; &nbsp; &#9672; 화재/손실<br><br>
                        &nbsp; &nbsp; &#9672; 오용<br><br>
                        &nbsp; &nbsp; &#9672; 절도<br><br>
                        &nbsp; &nbsp; &#9672; 바이러스 공격<br><br>

					</span>
				</div>
				
			</li>
		</ul>
		<br>
		<ul>
		  <li style="height:100px; display: table-cell; vertical-align: middle;text-align:justify; padding:20px;">
		     <div> 
				ISO 27001 규격은 또한 ISO 9001과 같은 기타 경영시스템과 호환 가능하도록 구조화 되었습니다. 그리고, 기술 및 판매자는 중립적이며, 이는 모든 IT 플랫폼으로부터 독립적이라는 의미입니다. 이와 같이, 조직 내 모든 직원들은 규격이 무엇을 의미하고 조직 내 어떻게 적용되는지에 대해 교육을 받아야 합니다.

              </div>
          </li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 27001의 요구사항 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:left;">
                      1. 일반요구사항 General Requirement<br><br>
                      &nbsp; &nbsp; &#9673; ISMS 수립 (establish the ISMS)<br><br>
                      &nbsp; &nbsp; &#9673; ISMS 구현 및 운영 (Implement and operate the ISMS)<br><br>
                      &nbsp; &nbsp; &#9673; ISMS 모니터링 및 검토 (Monitor and Review the ISMS)<br><br>
                      &nbsp; &nbsp; &#9673; ISMS 유지 및 개선 (Maintain and Improve the ISMS)<br><br>
                      &nbsp; &nbsp; &#9673; 문서 및 기록관리 (Control of Documents and Records)<br><br><br>

                      2. 경영진 책임 (Management Responsibilities)<br><br>
                      &nbsp; &nbsp; &#9673; 경영진 의지 (Management Commitment)<br><br>
                      &nbsp; &nbsp; &#9673; 자원의 경영 (Resource Management)<br><br><br>
                      3. 내부 ISMS 심사 (Internal ISMS Audits)<br><br><br>
                      4. ISMS 경영진 검토 (Management Review of the ISMS)<br><br><br>
                      5. ISMS 개선 (ISMS Improvement)<br><br> 
					</span>

				</div>
			</li>
		</ul>

		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 27001의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                         ISO 보안규격은 조직으로 하여금 다양한 방법으로 여러 중요한 이슈들을 다루는데 도울 수 있습니다.                  
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
                &#9745; <span style="font-weight:bold;color:#009999;">규정 준수</span><br> 
                 영국 데이터 보호법은 현재 영국 내 정보 보안에 관계된 많은 규정 중 하나입니다. ISO 27001 실행은 모든 적용 가능한 법률 및 규정 준수를 보장하는데 도움을 줍니다. 이는 데이터 결함으로 인한 미 준수로 인한 벌금 및 기타 페널티 부과 가능성을 감소시킵니다.<br><br>
    
                &#9745; <span style="font-weight:bold;color:#009999;">데이터 결함</span><br> 
                 단 하나의 데이터 결함으로 인해 귀사의 평판에 영원히 금이 갈 것입니다. ISO 27001은 가장 취약한 부분을 파악하여 결함 가능성을 억제하는데 도움을 줍니다. 이는 또한 견실한 정보관리 보안 리스크 프레임워크를 제공합니다. 언급한 바와 같이, ISO 27001인증을 받게 되면 모든 적용 가능한 법률 및 규정 미 준수로 인한 벌금 또는 형사 고소 가능성을 감소시킵니다.<br><br>
    
                &#9745; <span style="font-weight:bold;color:#009999;">낮은 리스크 관리에 대한 자신감</span><br>
                 귀사 조직의 역량이 데이터/정보 보안 리스크를 얼마나 효과적으로 관리하는지 자신이 있으십니까? ISO 27001은 리스크 및 위협 요소 파악을 위한 효과적인 프레임워크를 조직에 제공하며, 이러한 리스크 및 위협 요소 최소화 또는 제거를 위해 적절한 내부 관리를 하게 합니다. 이는 주주들에게 조직의 중요한 정보를 방어하는데 가능한 모든 방법을 동원하고 있다는 커다란 자신감을 갖게 합니다.<br><br>
    
                &#9745; <span style="font-weight:bold;color:#009999;">정보 접근</span><br> 
                모든 데이터 보안 노력을 위한 중요한 요소는 모든 주어진 시간에 정보에 접근 가능한 사람을 효과적으로 관리하는 것입니다. ISO 27001 인증은 모든 권한을 가진 유저들이 정보가 필요할 때 정보를 얻을 수 있도록 보장하는 프레임워크를 제공하며, 반면에 권한이 없는 유저들이 사적 또는 기밀 데이터에 접근 하는 것을 방지합니다. 이는 또한 주주들이 믿음 및 신뢰를 쌓을 수 있게 하며, 결함 또는 기타 대규모 고장 시 귀사의 복구 작업을 향상시킵니다.<br><br>
    
                &#9745; <span style="font-weight:bold;color:#009999;">높은 고객 기대치 충족</span><br> 
                 당연하게도, 귀사의 고객은 그들의 사적 또는 기밀 데이터 보호하는데 있어서 높은 기대치를 가지고 있을 것 입니다. ISO 27001은 고객-친화적 정책 설립 및 귀사의 결함 리스크를 감소시키는 절차를 위한 청사진을 제시하며, 고객의 마음을 평안하게 하는데 도움을 줍니다. 이는 고객 보유 및 신규 사업 창출을 하는데 있어 유리할 수 있습니다. 이는 또한 귀사의 정보 보안 실행에 관한 제 3자의 정밀검사 수준을 낮출 수 있습니다.<br><br>
    
                &#9745; <span style="font-weight:bold;color:#009999;">보안 사고방식 생성</span><br> 
                 정보보안은 조직의 모든 멤버에게 집중할 분야이어야 합니다. ISO 27001 실행은 보안이 최우선이라는 조직에 명백한 메시지를 전달합니다. 이러한 인식의 증가로, 귀사의 모든 직급으로 스며드는 보안 사고방식을 성하는데 도움을 줍니다. 이는 또한 직원 관련 보안 결함을 감소시킬 수 있습니다.<br><br>

			</li>
			<!------------------------dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd------------------------>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 27001의 필요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                      가장 중요한 자산을 남용, 부패 또는 손실로부터 보호하기 위한 증거 또는 보증을 원한다면 ISO 27001이 맞을 것입니다.<br>
                      우리는 관공서, 제조업, 서비스업, 식품회사, 프랜차이즈점을 포함한 다양한 분야의 조직들에게 인증을 부여하고 있습니다.<br>
                      “ISO 27001 인증은 널리 인정되었으며, 우리는 이 규격을 상업적으로 필수라고 여기고 있습니다.”<br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">기대 효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                      &#9752; 외부 위협으로부터의 정보보호를 통한 안정적인 사업운영의 보장 및 비용손실의 최소화<br>
                      &#9752; 기업의 노하우 외부유출 방지<br>
                      &#9752; 기업내의 정보보안 의식 증대<br>
                      &#9752; 직원의 실수 및 장비의 사용상의 실수로 인한 정보손실의 위협감소<br>
                      &#9752; 업무 파트너간의 신뢰구축을 통한 기업 경쟁력 확보<br>
                      &#9752; ISMS 평가를 위한 EMT 기준제시로 정보보안체계 구축 효율화<br>
					</span>
				</div>
			</li>
		</ul>
		
		<br>
		
		<ul>
		    <li style="line-height:40px; list-style:none;padding-left:5%;">
                 <span style="font-weight:bold;">&#9831; 고객 만족</span><br> 
                         고객들에게 개인 정보가 보호되며 비밀리에 유지되고 있다는 자신감 부여<br><br>
    
                 <span style="font-weight:bold;">&#9831; 비즈니스 연속성</span><br> 
                         리스크 관리, 법규 준수 및 미래 보안 이슈 및 우려사항에 대한 경계를 통해 고장 시간 회피<br><br>
    
                <span style="font-weight:bold;">&#9831; 법규 준수</span><br> 
                         법적/규제적 요구사항이 어떻게 귀사 및 고객에 영향을 끼치며, 기소 및 벌금 부과 리스크 감소를 어떻게 하는지 이해<br><br>
    
                 <span style="font-weight:bold;">&#9831; 리스크 관리 증대</span><br> 
                         고객 기록, 회계 정보 및 지적재산권이 체계적인 프레임워크를 통해 손실, 절도 및 손상으로부터 보호됨을 보장<br><br>
    
                 <span style="font-weight:bold;">&#9831; 증명된 사업 신뢰도</span><br> 
                         인정된 글로벌 산업 규격에 대한 독립적 검증은 많은 것을 보여줍니다.<br><br>
    
                 <span style="font-weight:bold;">&#9831; 사업 확대</span><br> 
                         고객은 종종 납품 조건으로 인증서를 요구하기 때문에 인증을 통한 사업 확대.<br><br>

		    </li>
		</ul>
		
		
		
		
		<br><br>
		
		<h2 class="title" style="color:#009999;">IGC의 역량</h2>
		<ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
               <span style="color:#ff6666;font-weight:bold;">등록 신청</span>은 ISO 27001 질의서 양식 작성을 통해 이루어집니다. 이는 귀사의 정보 제공을 통해 인증범위를 명확히 정의할 수 있습니다.<br>
               <span style="color:#ff6666;font-weight:bold;">ISO 27001 심사</span>는 IGC에 의해 진행됩니다. 이는 2단계에 걸쳐 이루어지는 최초인증심사 (아래 설명)로 구성됩니다. 하지만, 이를 위해 귀사의 품질경영시스템이 최소 3개월 이상 완전히 운영 중임을 보여야 하며, 최소 1년 이내 내부심사를 실시하였음을 보여야 합니다.<br>
               <span style="color:#ff6666;font-weight:bold;">인증서</span>는 IGC에 의해 발행되며, 연간 사후심사 및 3년에 1번 갱신심사 프로그램을 통해 유지하게 됩니다.<br>
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
			IGC는 ISO 27001: 정보보안 경영시스템 이외에도 기업이 필요한 다양한 인증 및 관련 서비스를 제공하고 있습니다.<br>
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
   
   
   
   
   
 
   <article><!-------+++++++ / article  심사원인증 >  OHSAS 18001 시작  /++++++++++--------------->   
       <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> OHSAS 18001 교육 </span> | 심사원 인증</h1>
				
	<section class="vision_type6">	
		<div class="vision_area">
		<h2 class="title" style="color:#009999;display:block;text-align:left;">OHSAS 18001 심사원 인증 개요</h2>
                 <ul>
                     <li>
                     <span  style="display:block;margin:3%;">
                     신뢰성을 얻기 위하여, 인정받은 인증원은 적격성을 갖춘 심사원을 필요로 합니다. 경쟁력과 능력을 갖추기 위하여 기업과 산업체는 적격성을 갖춘 심사원을 필요로 합니다. OHSAS 경영 시스템 심사원 인증 프로그램 (OHSAS 18001 프로그램)의 목적은 이 프로그램을 통해 인증 받은 심사원이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공하기 위함입니다. 인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. OHSAS 교육 프로그램은 BS OHSAS 18001 시리즈 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
                     
                     </span>
                     </li>
                 </ul>
        </div>
    </section>
		
	</section>
	<section class="vision_type6">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">OHSAS 18001이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!------CHALLENGE-----></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
					OHSAS 18001은 안전보건경영시스템으로, 모든 리스크 관리 측면 미 법규 준수를 포함한 보건 및 안전의 효율적 관리를 위한 프레임워크를 제공합니다. 귀사의 조직에 필요한 정책 절차 및 통제를 통해 국제적으로 인정된 모범 사례에 부합하는 최상의 근로 조건 및 근로 환경 상의 건강과 안전을 달성할 수 있도록 지원합니다. OHSAS 18001이 2021년 3월 만료됨에 따라, ISO 45001로 인증이 전환되어야 합니다.
					</span>

				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">OHSAS 18001의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                      OHSAS 18001은 품질, 환경 및 기타 경영시스템과 더불어 핵심적인 경영시스템 중 하나입니다. 조직 전체에 최적의 작업 환경을 만들어 위험요소를 파악하고 이를 제대로 통제할 수 있도록 관리할 수 있습니다. 이는 작업장에서의 부상을 예방하는 동시에 기업의 직접 및 간접 비용을 줄이는데 도움을 줍니다. OHSAS 18001을 준수함으로써, 더 안전하고 나은 작업 환경을 통해 기업은 종업원, 공급자 및 고객 등과 같은 이해 관계자들을 위험으로부터 보호할 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">GPC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                      <span style="font-weight:bold;margin-bottom:3%;margin-top:5%;">1) 본 시험은 서면의 두 가지 방식으로 지식시험 및 인성시험으로 구성이 됩니다.</span>
                         GPC는 IAF MLA 개인인증 승인 기관이며 OHSAS 18001 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다. GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인 인증기관입니다. 또한, GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.
					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
		    <li style="line-height:40px; list-style:none;padding-left:5%;">
		        GPC 인증을 받았다는 것은 GPC가 신청자가 (수여된 등급에 따라서) 하기 사항을 이해하고 그에 대한 적격성을 갖추었음을 인정했다는 것을 의미합니다.<br>
 
                &#9884; 적절한 윤리적 행동, 공정한 발표 그리고 전문적인 관심의 원칙을 유지<br>
                &#9884; 조직 내 모든 레벨의 인원들과 명확하게 구두 및 서면으로 의사소통<br>
                &#9884; 안전보건경영시스템의 심사를 계획하고 구성<br>
                &#9884; 관련 비즈니스 프로세스를 인지하고 이해함<br>
                &#9884; 객관적 증거를 평가하고 안전보건 경영시스템의 효과성을 판단<br>
                &#9884; 심사발견사항과 결론을 정확하게 보고<br>
                &#9884; 심사팀을 이끌고 심사 프로세스를 관리<br>
                &#9884; 경영시스템을 심사<br><br>

		    </li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">안전보건시스템 심사원 요구 사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                         교육 훈련 및 경력을 통하여 심사활동을 수행하기위한 필요한 적격성 및 능력을 갖출 수 있습니다. 심사원의 적격성은 올바른 심사를 수행하고 심사 결과를 도출하는데 필수적입니다.<br><br>
                         GPC의 안전보건 경영시스템 심사원 인증 프로그램 (OH&S 18001프로그램)의 목적은 이 프로그램을 통해 인증 받은 심사원이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공한다는 것입니다. 인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다.<br><br>
                         
                         선임심사원은 심사를 계획하고, 자원을 효율적으로 활용하며, 피심사자와 상호작용 시 심사팀을 대표하고, 심사팀을 조직하고 운영, 분쟁을 예방 및 해결하고 심사보고서를 준비 및 완결하기 위하여 추가적인 지식 및 능력을 갖추어야 합니다.<br>
                         전문가는 운영 혹은 법적 요구사항, 규격 등 특정 기술 분야에 대하여 심사원과 협의하고 조언을 줍니다.

					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
		    <li style="line-height:40px; list-style:none;padding-left:5%;font-weight:bold;">
		        1. 기본요구사항<br>
            </li>
		</ul>
		
		<div style="overflow-x:auto;font-size:1.2em;margin-top:10px;">
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
        
		<br>
		
		<ul>
            <li style="line-height:40px; list-style:none;padding-left:5%;">
                
                훈련 인증서 요구 사항은 다음과 같습니다. <br>
                 &#9882; 훈련 제공자의 절차를 만족시키는 인가된 GPC에서 신청된 관리 시스템 수석 심사원 훈련 과정 이수 증명서<br>
                 &#9882; 직원 인증 기관으로 인정된 ISO 17024에서 제공하는 신청된 관리 시스템 수석 심사원 훈련 과정 이수 증명<br>
                 &#9882; 훈련 제공자로 인가된 GPC에서 신청된 관리 시스템 수석 심사원 훈련 과정 이수 증명서<br>
                 &#9882; 훈련 제공자는 훈련 제공자로서 품질 관리를 유지하기 위해 ISO 9001 또는 ISO 29990 요구 사항을 시행해야 한다.<br>

		    </li>
		</ul>
		
		<br>
		
		<ul>
		    <li style="line-height:40px; list-style:none;padding-left:5%;font-weight:bold;">
		         2)	안전보건 시스템 심사원 스킴, 특별(추가적인) 요구사항
            </li>
            <li style="line-height:40px; list-style:none;padding-left:5%;padding-top:2%;padding-bottom;2%;margin-top:10px;">
              특정 업무를 달성하기 위하여 심사원은 심사 시 위의 사항을 적용할 수 있게 하는 개인 자질, 지식 및 능력을 갖추어야 한다.<br><br>
 
              안전보건 경영시스템 심사원은 하기 분야에 대한 지식과 능력을 보유해야 합니다 :<br>
              &#9881; 예방 및 법적 요구사항의 원리<br>
              &#9881; 보건과 안전에 관한 기타 요구사항, 예) 업무환경, 업무장비 및 개인보호장구에 대한 계약 상태, 규격 혹은 비규제적 가이드라인<br>
              &#9881; 적용되는 안전보건 규격 및 절차, 업무지침, 계획 및 프로그램을 포함한 그것을 적용하기 위한 가이드라인의 요구사항<br>
              &#9881; 노출된 인원 (부상 혹은 질병)에 대한 안전보건 위험 및 영향의 식별, 위험 평가 방법론, 사고위험 관리 방법, 재해 통계, 모범 관행, 연구 및 조사 결과<br>
              &#9881; 작업 영역, 프로세스, 설비, 기계/업무장비 및 운영 프로세스의 설계<br>
              &#9881; 심사 원리, 절차 및 테크닉<br><br>

              안전보건 심사원 신청자는 아래의 지식 및 적격성을 증빙하도록 요구됩니다 :<br>
              &#9881; 일반적인 심사 기술<br>
              &#9881; OH&S 경영시스템을 평가하고 적합한 심사 발견과 결론을 도출할 수 있는 안전보건 경영 방법 및 테크닉<br>
              &#9881; OH&S 기술적 적격성, 예를 들어 화학/물리/생물학적 위험을 포함한 작업장에서의 위험, 안전 및 보건 활동 관리, 운영 국가 혹은 영역 내의 법적 및 조직적 요소 등<br>
              &#9881; 용인되는 업무<br>
		    </li>
		</ul>	
     </div>
     
     
     
     
     <div class="vision_area">
		<h2 class="title" style="color:#009999;">심사</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                         시험은 지식 시험과 자질 시험의 두 종류 서면 시험으로 구성됩니다. <br><br>
                         기본 사항은 다음과 같습니다:<br>
                         &nbsp; &nbsp;  &#9905; 시험은 GPC에서 사전에 평가하여 최종적으로 승인한 장소에서 수행하며 일반적으로 토요일 오전 10:00에 시작합니다(시험 전에 통지).<br>
                         &nbsp; &nbsp;  &#9905; 신청자는 시험이 시작되기 최소 10분 전까지 시험 장소에 도착해야 하며 지각하거나 결석할 경우 0점으로 자동 기록됩니다. <br>
                         &nbsp; &nbsp;  &#9905; 후보자 확인을 위해 사진이 있는 신분증을 제시해야 하며 시험장에서 금지된 물품은 시험이 시작되기 전에 시험 감독자에게 맡겨야 합니다.<br>
                         &nbsp; &nbsp;  &#9905; 컨닝이 발견되면 시험 감독자는 후보자에게 즉시 퇴장하도록 요청하며 더 이상의 시험이 허용되지 않습니다.<br>
                         &nbsp; &nbsp;  &#9905; 시험 장소와 연락처 정보에 대한 자세한 내용은 시험 통지서를 참조하시면 됩니다.<br>
					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
		    <li style="line-height:40px; list-style:none;padding-left:5%;font-weight:bold;">
		        1) 지식 시험<br>
            </li>
		</ul>
		<ul>
            <li style="line-height:40px; list-style:none;padding-left:5%;margin-top:10px;">
             시험 문제는 OHSAS 18001:2007 표준에 기반하여 작성되며 시험의 목적은 후보자가 신청하는 표준을 통해 심사 활동을 원하는 후보자의 자격과 능력을 평가하는데 있습니다.<br>
             자세한 내용은 다음과 같습니다:<br>
               &#9883; 지식 시험은 100개의 문제로 구성되며 4가지 섹션으로 구성됩니다.<br>
               &#9883; 정답 하나에 1점씩이며 합격 기준은 다음과 같다.<br>
	                 &nbsp; &nbsp;  &#9967; Section I (OHSAS 18001:2007): 총 50 점 중 최소 20 점 이상.<br>
	                 &nbsp; &nbsp;  &#9967; Section II (ISO 19011:2011): 총 30 점 중 최소 12 점 이상.<br>
	                 &nbsp; &nbsp;  &#9967; Section III (규격특화 문항): 총 10 점 중 최소 4 점 이상.<br>
	                 &nbsp; &nbsp;  &#9967; Section IV (사례 연구): 총 10 점 중 최소 4 점 이상.<br>
	                 &nbsp; &nbsp;  &#9967; Total: 총 100 점 중 최소 70 점 이상<br>
               &#9883; 신청자는 합계 점수가 70점 이상이어도 각 섹션에서 요구하는 최소 점수를 넘지 않으면 시험을 통과할 수 없습니다.<br>
               &#9883; 시험 제한 시간은 120분이며 오픈북 시험입니다.<br>
               &#9883; 시험에 불합격한 후보자에게는 시험 기회가 한 번 더 제공됩니다. 후보자가 시험에 연속해서 불합격하면 1년 뒤에 시험 자격이 생깁니다.<br>
		    </li>
		</ul>
		
		<br>
		
		<ul>
		    <li style="line-height:40px; list-style:none;padding-left:5%;font-weight:bold;">
		        2)자질시험
            </li>
            <li style="line-height:40px; list-style:none;padding-left:5%;padding-top:2%;padding-bottom;2%;margin-top:10px;">
              자질 시험의 목적은 심사원으로서의 특성과 자격을 평가하는데 있으며 신청자가 질문을 얼마나 이해하는지 묻습니다.<br>
 
              자세한 내용은 다음과 같습니다: <br>
              &nbsp; &nbsp;  &#9883; 시험은 ISO 19011:2011에 기반하며 25문항으로만 구성됩니다. 후보자는 제일 먼저 떠오르는 대답을 선택해야 한다.<br>
              &nbsp; &nbsp;  &#9883; 각 문항당 최대 4점까지 주어지며 대답이 정답에서 멀수록 1점씩 공제된다. (대답이 없으면 0점)<br>
              &nbsp; &nbsp;  &#9883; 통과 기준은 70점이다.<br>
              &nbsp; &nbsp;  &#9883; 시험에 불합격하면 자질 인터뷰 기회가 추가로 제공된다. 후보자가 자질 인터뷰에서 불합격하면 1년 뒤에 시험 자격이 생긴다.<br>

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
   </article><!-------+++++++ / article  심사원인증 >  OHSAS 18001 종료  /++++++++++-------------->   
   
   
   
   
   
   
   
   <article><!-------+++++++ / article  심사원인증 >ISO 22716 시작  /++++++++++--------------->   
      	

	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 22716:2007 화장품 </span> | 심사원인증</h1>

        <ul>
		   <li>   
             <h2>
               <span style="display:block;padding:20px;font-size:1.3em;text-align:left;margin-bottom:-25px;color:#009999;"> <span style="font-size:0.2em;color:#3366ff;">&#9632; </span>
                 ISO22716:2007 Cosmetics - Good Manufacturing Practices(GMP) - Guideline on Good Manufacturing Practices
               </span> 
             </h2> 
           </li>
        </ul>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;"><br>
		ISO 22716에 규정된 이 가이드라인은 화장품 제품을 위한 GMP(Good Manufacturing Practices) 안내서를 제공하는 목적이 있다. 가이드라인은 화장품 산업에 의해, 제조업의 화장품분야의 특정요구를 고려하여 마련되었다.<br><br>

        ISO22716 은 제품의 품질에 영향을 미치는 인적, 기술 및 경영상의 요인들의 관리에 있어서 조직적이고 실질적인 조언을 제공한다. 가이드라인은 각 섹션이 가지는 특정 “원칙”과 함께 원료의 수령에서부터 출하까지 제품의 흐름을 따른다.<br><br>

        GMP는 올바른 과학적 판단과 위험평가에 기초한 공장 내 활동을 통한 품질보증의 실제적인 발전으로 구성된다. ISO22716은 조직이 규정된 특성에 부합하는 제품을 만들 수 있게 하는 활동을 정의한다. <br><br>
        
        화장품 안전 규정이 효력을 갖기 위해서 관리 시스템 방식을 이해하고 이 방식에 대해 유능한 심사원이 필요하다. GPC ISO 22716 심사원 인증 프로그램은 규제 기관, 인정 기관, 인증 기관, 기업 및 산업 및 직접적으로는 국민 전반에게 이 프로그램에 인증된 심사원이 유능하다는 신뢰를 제공하는데 목적이 있다.<br><br> 
        
        인증 과정의 일환으로 심사하는 동안 입증이 필요한 능력을 정의하는 핵심 기술, 지식 및 경험을 반영하는 요구 사항에 대해서 화장품 안전 심사원을 평가한다.<br>
		</h3>
	</section>
	<section class="vision_type7">
		
		<div class="vision_area">
		<h2 class="title"  style="color:#009999;">ISO 27716 인증의 추세 및 경향</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                     <table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="80"><p align="center">유럽 </p></td>
                        <td width="600px"><p align="left">ISO22716 수행 </p></td>
                      </tr>
                      <tr>
                        <td width="80"><p align="center">미국 </p></td>
                        <td width="600px"><p align="left">ISO22716 참작과    현행 FDA지침서의 수정에 동의 </p></td>
                      </tr>
                      <tr>
                        <td width="80"><p align="center">캐나다 </p></td>
                        <td width="600px"><p align="left">ISO22716 고려예정. 그에 따른 GMP지시서 제작 및 채택예정 </p></td>
                      </tr>
                      <tr>
                        <td width="80"><p align="center">일본 </p></td>
                        <td width="600px"><p align="left">자발적 지시서로써 ISO22716 채택 </p></td>
                      </tr>
                      <tr>
                        <td width="80"><p align="center">대한민국 </p></td>
                        <td width="600px"><p align="left">CGMP 인증의    의무화 추진중 </p></td>
                      </tr>
                    </table>
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
		<h2 class="title" style="color:#009999;">Standards</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                        <table border="0" cellspacing="1" cellpadding="0">
                          <tr>
                            <td width="65"><p align="center">지역 </p></td>
                            <td width="131"><p align="center">규제기관 </p></td>
                            <td width="313"><p align="center">표준명 </p></td>
                            <td><p align="center">개정 </p></td>
                          </tr>
                          <tr>
                            <td width="65"><p align="center">EU</p></td>
                            <td width="131"><p align="center">COLIPA<br>
                              유럽 화장품 협회 </p></td>
                            <td width="313"><p align="left">Cosmetic    GMP Guidelines for the Manufactures of Cosmetic Products<br>
                              화장품 제조자를 위한 화장품 GMP 지시서 </p></td>
                            <td><p align="center">JUL    1994</p></td>
                          </tr>
                          <tr>
                            <td width="65"><p align="center">US</p></td>
                            <td width="131"><p align="center">FDA    CFSAN<br>
                              (FDA-Center for<br>
                              Food Safety and<br>
                              Applied Nutrition)</p></td>
                            <td width="313"><p align="left">Cosmetic    Good Manufacturing Practice Guidelines<br>
                              화장품 GMP 지시서 </p></td>
                            <td><p align="center">24    APR 2008</p></td>
                          </tr>
                          <tr>
                            <td width="65"><p align="center">ASEAN</p></td>
                            <td width="131"><p align="center">ACC<br>
                              (ASEAN Cosmetic<br>
                              Committee)</p></td>
                            <td width="313"><p align="left">Cosmetic    GMP Guidelines<br>
                              화장품 GMP 지시서 </p></td>
                            <td><p align="center">SEP    2002<br>
                              (date signed<br>
                              by ASEAN<br>
                              trade ministers)</p></td>
                          </tr>
                          <tr>
                            <td width="65"><p align="center">ISO</p></td>
                            <td width="131"><p align="center">ISO<br>
                              (International<br>
                              Standard<br>
                              Organization)</p></td>
                            <td width="313"><p align="left">ISO22716:2007<br>
                              Cosmetics GMP Guidelines on Good Manufacturing Practices<br>
                              화장품 GMP 지시서 </p></td>
                            <td><p align="center">15    NOV 2007</p></td>
                          </tr>
                        </table>
					</span>
					<span></span>
				</div>
			</li>
		</ul>
		<br><br>
		
		
		<li>   
           <h2>
             <span style="display:block;font-size:1.3em;text-align:left;margin-bottom:-25px;color:#009999;"> <span style="font-size:0.5em;color:#3366ff;">&#9632; </span>
               화장품 안전 관리 시스템 심사원 제도, 특정한 요구 사항
             </span> <br>
           </h2> 
           </li>
		<ul>
			<li style="padding:10px;">
                  
                   1) 기본 요구사항<br><br>
                    <table cellspacing="0" cellpadding="0" style="text-align:center;">
                      <col width="102">
                      <col width="224" span="2">
                      <col width="305">
                      <col width="246">
                      <col width="224">
                      <tr>
                        <td width="86">　</td>
                        <td width="167">심사원</td>
                        <td width="192">선임심사원</td>
                        <td width="366">검증 심사원</td>
                        <td width="175">내부심사원</td>
                        <td width="131">심사원보</td>
                      </tr>
                      <tr>
                        <td width="86">교육</td>
                        <td colspan="5">중등    교육 이상</td>
                      </tr>
                      <tr>
                        <td width="86">업무 경력</td>
                        <td colspan="2">5년    이상<br>
                          (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</td>
                        <td width="366">10년    이상<br>
                          (해당 규격 관련 품질 또는 환경 분야 5년 이상의 경력 포함)</td>
                        <td width="175">3년    이상<br>
                          (해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</td>
                        <td width="131">해당    사항 없음</td>
                      </tr>
                      <tr>
                        <td width="86">심사 경력</td>
                        <td width="167">최근    3년 이내에 심사원 또는 선임심사원으로서 20 M/D 이상의 심사 이력)</td>
                        <td width="192">최근    3년 이내에 심사원 또는 선임심사원으로서 35 MD 이상의 심사 이력(그 중 15 M/D 이상은 선임심사원으로서 심사 이력)</td>
                        <td width="366">최근    3년 이내 선임심사원으로서 15 M/D 이상의  심사 이력(공인된 개인    인증 기관으로부터 선임 심사원 자격 취득 후의 이력만 수용 가능)</td>
                        <td width="175">최근    3년 이내 5회 시상 + 최소 15 M/D 이상의  심사 이력</td>
                        <td width="131">해당    사항 없음</td>
                      </tr>
                      <tr>
                        <td width="86">교육 훈련</td>
                        <td colspan="5">*심사원/선임심사원    교육 과정<br>
                          (공인된 개인 인증 기관 혹은 그로부터 지정 받은 연수 기관의 발행 수료증만 수용 가능)</td>
                      </tr>
                      <tr>
                        <td width="86">시험</td>
                        <td colspan="5">GPC    지식 및 인성 시험 합격</td>
                      </tr>
                    </table><br>
                                    <span style="font-weight:bold;">&#9672;  교육 수료증의 요구 사항은 다음과 같다.</span><br>
               &nbsp; &nbsp; &#9673; 교육연수기관 절차의 요구사항을 충족하는 GPC가 승인한 관련 경영시스템 선임심사원 교육과정 수료증<br>
               &nbsp; &nbsp; &#9673; ISO/IEC 17024에 따라 인정을 받은 개인인증기관의 관련 품질시스템 선임심사원 교육과정 수료증<br>
               &nbsp; &nbsp; &#9673; 공인된 기관으로부터 지정받은 교육연수기관이 제공하는 관련 경영시스템 선임심사원 교육과정 수료증<br>
			</li>
			
			<br><br>
           
           <li>   
           <h2>
             <span style="display:block;padding:20px;font-size:1.3em;text-align:left;margin-bottom:-25px;color:#009999;"> <span style="font-size:0.5em;color:#3366ff;">&#9632; </span>
               시험
             </span> <br>
           </h2> 
           </li>
           <br>
            <ul>
                <li style="padding:10px;">
                      
                           <span style="font-weight:bold;">
                            1) 시험 소개<br>
                           </span>
                               &nbsp; &nbsp; &#9673; 시험은 지식 시험과 인성 시험의 두 종류 서면 시험으로 구성된다.<br>
                               &nbsp; &nbsp; &#9673; 시험은 GPC에서 사전에 평가하여 최종적으로 승인한 장소에서 수행됩니다. (시험 전에 통지)<br>
                               &nbsp; &nbsp; &#9673; 신청자는 시험이 시작되기 최소 10분 전까지 시험 장소에 도착해야 하며 지각하거나 결석할 경우 0점으로 자동 기록된다.<br>
                               &nbsp; &nbsp; &#9673; 후보자 확인을 위해 사진이 있는 신분증을 제시해야 하며 시험장에서 금지된 물품은 시험이 시작하기 전에 시험 감독관에게 맡겨야 한다.<br>
                               &nbsp; &nbsp; &#9673; 부정행위가 발견되면 시험 감독자는 후보자에게 즉시 퇴장하도록 요청하며 더 이상의 시험이 허용되지 않는다.<br>
                               &nbsp; &nbsp; &#9673; 시험 장소와 연락처 정보에 대한 자세한 내용은 시험 통지서를 참조한다.<br><br>
                               
                            <span style="font-weight:bold;">   
                            2) 지식 시험<br>
                           </span>
                               &nbsp; &nbsp; &#9673; 시험 문제는 ISO 22716:2007 표준에 기반하여 작성되며 시험의 목적은 후보자가 신청하는 표준을 통해 심사 활동을 원하는 후보자의 자격과 능력을 평가하는데 있다.<br>
                               &nbsp; &nbsp; &#9673; 지식 시험은 100개의 문제로 구성되며 4가지 섹션으로 구성된다.<br>
                               &nbsp; &nbsp; &#9673; 한 문제 당 배점은 1점이며 합격 기준은 다음과 같다.<br>
                               &nbsp; &nbsp;          &nbsp; &nbsp; &#9678;	Section I (ISO 22716:2007): 총 50 점 중 최소 20 점 이상.<br>
                               &nbsp; &nbsp;          &nbsp; &nbsp; &#9678;	Section II (ISO 19011:2011): 총 30 점 중 최소 12 점 이상.<br>
                               &nbsp; &nbsp;          &nbsp; &nbsp; &#9678;	Section III (규격특화 문항): 총 10 점 중 최소 4 점 이상.<br>
                               &nbsp; &nbsp;          &nbsp; &nbsp; &#9678;	Section IV (사례 연구): 총 10 점 중 최소 4 점 이상.<br>
                               &nbsp; &nbsp;          &nbsp; &nbsp; &#9678;	Total: 총 100 점 중 최소 70 점 이상.<br>
                               &nbsp; &nbsp;                                &nbsp; &nbsp;  &#9656; 신청자는 합계 점수가 70점 이상이어도 각 섹션에서 요구하는 최소 점수를 넘지 않으면 시험을 통과할 수 없다.<br>
                               &nbsp; &nbsp; &#9673; 시험 제한 시간은 120분이며 오픈북(GPC가 제공하는 표준 Hard Copy본)으로 진행됩니다.<br>
                               &nbsp; &nbsp; &#9673; 시험에 불합격한 후보자에게는 시험 기회가 한 번 더 제공된다. 후보자가 시험에 연속해서 불합격하면 1년 간 시험 응시 자격이 박탈됩니다.<br><br>
                             
                            <span style="font-weight:bold;"> 
                            3) 인성 시험<br>
                           </span>
                               &nbsp; &nbsp; 인성 시험의 목적은 심사원으로서의 특성과 자격을 평가하는데 있으며 신청자가 질문을 얼마나 이해하는지 묻는다.<br>  
                               &nbsp; &nbsp; 시험은 ISO 19011:2011에 기반하며 25문항으로 구성된다.<br>  
                               &nbsp; &nbsp; 각 문항당 최대 4점까지 주어지며 대답이 정답에서 멀수록 1점씩 공제된다. (대답이 없으면 0점)<br>  
                               &nbsp; &nbsp; 통과 기준은 70점이다.<br>  
                               &nbsp; &nbsp; 시험에 불합격하면 재시험의 기회가 추가로 제공된다. 후보자가 재시험에서 불합격하면 1년 간 시험 응시 자격이 박탈됩니다.<br>
                </li>
            </ul>
		</ul>
		</div>

		<div class="vision_area">
		<ul>
		  <li>
		   <h2 class="title" style="color:#009999;margin: 20px;">IGC의 역량</h2>
		  </li>
		</ul>
		<br>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                     &#9813; IGC는 미국의 인정기구인 IAS로부터 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br><br>
                     &#9813; IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                     &#9813; IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.<br><br> 
                     &#9813; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있습니다.<br><br>
                     &#9813; IGC는 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
					</span>
				</div>
			</li>
			<br>

		</ul> 
		<br>
        </div>
		
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">GPC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                     &#9812; GPC는 IAF MLA 개인인증 승인기관으로 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다. <br><br>
                     
                     &#9812; GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인인증기관입니다.<br><br>
                     
                     &#9812; GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
					</span>
				</div>
			</li>
			<br>
		</ul> 
		
		</div> <!----++++++++++/  div class="vision_area" 종료   /+++++++++++++++-------->
		
	</section>  <!-----------+++++++++/ section class="vision_type5" 종료   /+++++++++++++++-------------------->
	
 
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
   </article><!-------+++++++ / article  심사원인증 >ISO 22716 종료  /++++++++++-------------->   
   
   
   
   
   
   
          
   <article><!-------+++++++ / article  심사원인증 > ISO 50001 시작  /++++++++++--------------->   
       <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 50001: 에너지경영시스템</span> | 심사원인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		개인 인증은 인증이 부여되는 분야에 적용가능한 교육, 훈련, 경험, 검증된 지식에 대한 독립적인 평가를 통해 적격성을 갖춘 인원에게 그 분야의 인증을 부여하는 것입니다. 이는 관련 표준에 근거한 국제적으로 통용되는 프로세스를 통해 달성되며, 개인 능력의 적합성을 평가한 이후 인증서가 발급되고 있습니다.<br><br>
		
        'ISO 50001'은 국제표준화기구(ISO)가 2011년 6월 발효한 에너지경영시스템 국제표준으로, 에너지 효율화와 절감을 위한 프로세스와 요구사항을 규정하고 있습니다. 고유가 체제의 장기화와 국제적인 에너지 환경변화의 대응으로 효율적인 에너지 경영이 중요한 이슈로 대두되고 있습니다. 이러한 산업의 요구와 필요성으로 ISO 50001인증 수요가 지속적으로 증가하고 있으며 이에 따라 ISO 50001에 대한 전문가와 심사원의 수요 또한 증가하고 있습니다.


		
		</h3>
	</section>
	<section class="vision_type8">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 50001 심사원 인증 개요 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                        에너지경영시스템이란 기업이 에너지이용효율 향상을 위해 인적, 물적자원과 경영적 사항 및 기술적 사항 등에 대한 관리를 일정한 절차와 기법에 따라 행하는 체계적, 전사적, 지속적인 에너지관리시스템으로, 이것은 에너지이용의 효율 향상 수단일 뿐만 아니라 조직의 운영 변화를 유도하는 제도로 인식되어 선진국을 중심으로 확산되어 오고 있습니다.<br><br>
                        
                        산업의 요구와 필요성 증가에 따라 ISO 50001에 대한 심사원, 선임 심사원, 검증 심사원, 내부 심사원, 심사원보 개인 자격 인증을 갖춘 인원의 수요가 지속적으로 증가하고 있습니다.
					</span>
				</div>
			</li>
			<br>

          </ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">심사원 등급에 따른 자격 요건</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:15px;">
                    <span style="font-weight:bold;color:#009999;">신청서와 함께 제출해야 할 증빙서류는 아래와 같습니다.</span><br><br>
                      &nbsp; &nbsp; &#9672; 졸업증명서<br><br>
                      &nbsp; &nbsp; &#9672; 경력증명서<br><br>
                      &nbsp; &nbsp; &#9672; 심사이력<br><br>
                      &nbsp; &nbsp; &#9672; 교육수료증<br><br>
                      &nbsp; &nbsp; &#9672; 검증심사 평가기록<br><br><br>
                       
                    <span style="display:block;font-weight:bold;color:#009999;">수용 가능한 교육수료증의 요구기준은 아래와 같습니다.</span><br><br>
                       &nbsp; &nbsp; <p> &#9672; 교육연수기관 절차의 요구사항을 충족하는 GPC가 승인한 관련 경영시스템 선임심사원 교육과정 수료증</p>
                       &nbsp; &nbsp; <p> &#9672; ISO/IEC 17024에 따라 인정을 받은 개인인증기관의 관련 품질시스템 선임심사원 교육과정 수료증</p>
                       &nbsp; &nbsp; <p> &#9672; 공인된 기관으로부터 지정받은 교육연수기관이 제공하는 관련 경영시스템 선임심사원 교육과정 수료증</p>
					</span>
					<!---------------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span--------------->
				</div>
			</li>
			<br>
            <div style="overflow-x:auto;font-size:1.2em;">
            
            <table width="851" height="370" border="1" cellpadding="0" cellspacing="0">
               <tr>
                 <td width="82" height="44" align="center" valign="middle" bgcolor="#F7AF85"><p>&nbsp;</p></td>
                 <td width="148" align="center" valign="middle" bgcolor="#F7AF85"><p align="center"><strong>내부심사원</strong><strong> </strong></p></td>
                 <td width="89" align="center" valign="middle" bgcolor="#F7AF85"><p align="center"><strong>심사원보</strong><strong> </strong></p></td>
                 <td width="147" align="center" valign="middle" bgcolor="#F7AF85"><p align="center"><strong>심사원</strong><strong> </strong></p></td>
                 <td width="157" align="center" valign="middle" bgcolor="#F7AF85"><p align="center"><strong>선임심사원</strong><strong> </strong></p></td>
                 <td width="214" align="center" valign="middle" bgcolor="#F7AF85"><p align="center"><strong>검증심사원</strong><strong> </strong></p></td>
               </tr>
               <tr>
                 <td width="82" height="34" align="center" valign="middle" bgcolor="#F9F8CA"><p align="center"><strong>학력</strong><strong> </strong></p></td>
                 <td colspan="5" align="center" valign="middle"><p align="center">고등교육 이상 </p></td>
               </tr>
               <tr>
                 <td width="82" align="center" valign="middle" bgcolor="#F9F8CA"><p align="center"><strong>경력</strong><strong> </strong></p></td>
                 <td width="148" align="center" valign="middle"><p align="center">총 3년 이상의 업무 경력 (신청 표준과 관련된 1년 이상의 업무경력 포함)</p></td>
                 <td width="89" align="center" valign="middle"><p align="center">-</p></td>
                 <td width="147" align="center" valign="middle"><p align="center">총 5년 이상의 업무 경력 (신청 표준과 관련된 2년 이상의 업무경력 포함)</p></td>
                 <td width="157" align="center" valign="middle"><p align="center">총 5년 이상의 업무 경력 (신청 표준과 관련된 2년 이상의 업무경력 포함)</p></td>
                 <td width="214" align="center" valign="middle"><p align="center">총 10년 이상의 업무 경력 (신청 표준과 관련된 5년 이상의 업무경력 포함)</p></td>
               </tr>
               <tr>
                 <td width="82" height="70" align="center" valign="middle" bgcolor="#F9F8CA"><p align="center"><strong>수료증</strong><strong> </strong></p></td>
                 <td colspan="4" align="center" valign="middle"><p align="center">심사원 교육 수료증 </p></td>
                 <td width="214" align="center" valign="middle"><p align="center">ISO/IEC 17024 기반의 자격인증기관에서 선임심사원    자격 유지 </p></td>
               </tr>
               <tr>
                 <td width="82" align="center" valign="middle" bgcolor="#F9F8CA"><p align="center"><strong>심사이력</strong><strong> </strong></p></td>
                 <td width="148" align="center" valign="middle"><p align="center">최근 3년 이내 내부심사 5회 이상, 최소 15MD 이상의    내부심사 이력 </p></td>
                 <td width="89" align="center" valign="middle"><p align="center">-</p></td>
                 <td width="147" align="center" valign="middle"><p align="center">최근 3년 이내 20MD 이상의 심사원 혹은 선임심사원으로서의 심사 경력 </p></td>
                 <td width="157" align="center" valign="middle"><p align="center">최근 3년 이내 35MD 이상의 심사원 혹은 선임심사원으로서의 심사 경력 </p></td>
                 <td width="214" align="center" valign="middle"><p align="center">선임심사원 자격 보유 이후 최근 3년    이내의 15MD 이상 </p></td>
               </tr>
               <tr>
                 <td width="82" align="center" valign="middle" bgcolor="#F9F8CA"><p align="center"><strong>시험</strong><strong> </strong></p></td>
                 <td width="148" align="center" valign="middle"><p align="center">GPC 지식 및 인성시험 </p></td>
                 <td width="89" align="center" valign="middle"><p align="center">GPC 지식 및 인성시험 </p></td>
                 <td width="147" align="center" valign="middle"><p align="center">GPC 지식 및 인성시험 </p></td>
                 <td width="157" align="center" valign="middle"><p align="center">GPC 지식 및 인성시험 </p></td>
                 <td width="214" align="center" valign="middle"><p align="center">GPC 지식 및 인성시험 </p></td>
               </tr>
             </table>		
            </div>		
		</ul>

		</div>


		<div class="vision_area">
		<h2 class="title" style="color:#009999;">IGC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                      &#9640; IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 50001에 대한 개인인증 서비스를 제공합니다. <br><br>
                      &#9640; GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. <br><br>
                      &#9640; IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다.<br><br>
                      &#9640; IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
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
			IGC는 개인인증기관인 GPC와의 협력을 통해 아래 분야의 교육 및 심사원 인증 서비스를 제공합니다.<br>
				
				<li><p><em><strong>01</strong></em><span>에너지 경영</span></p></li>
				<li><p><em><strong>02</strong></em><span>정보 보안</span></p></li>
				<li><p><em><strong>03</strong></em><span>보건, 안전 및 환경</span></p></li>
				<li><p><em><strong>04</strong></em><span>품질경영시스템</span></p></li>
				<li><p><em><strong>05</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
				<li><p><em><strong>06</strong></em><span>교통, 통신 및 에너지</span></p></li>
				<li><p><em><strong>07</strong></em><span>연속성, 복원력 및 복구</span></p></li>
				<li><p><em><strong>08</strong></em><span>IT 보안</span></p></li>
				<li><p><em><strong>09</strong></em><span>서비스관리</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------> 
   </article><!-------+++++++ / article  심사원인증 > ISO 50001 종료  /++++++++++-------------->          
          
          
          
           
   
				
  </div><!-----------+++++++ / div class="tab_con" 종료 / ++++++++------------------------>
	
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>