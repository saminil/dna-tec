<?php
	include_once('./_common.php');
$g5['title'] = '심사원인증 3';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso20000_02.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso20000_01.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso20000_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso20000_04.jpg);}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background-image:url(images/audit_iso20000_05.jpg);}

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
    
    
    
    /*심사원인증 > FSSC 22000 시작*/
    .vision_type6 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type6:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type6 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type6 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type6 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type6 .vision_area ul {margin:0; padding:0; }
	.vision_type6 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type6 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type6 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_fssc22000_01.jpg);}
    .vision_type6 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_fssc22000_02.jpg);}
    .vision_type6 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_fssc22000_05.jpg);}
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_fssc22000_04.jpg);}
    .vision_type6 .vision_area:nth-child(5) ul li .i_box {background-image:url(images/audit_fssc22000_05.jpg);}
    
	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    
    
    /*  심사원인증 > FDA FSMA 시작   */
    .vision_type7 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type7:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type7 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type7 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type7 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type7 .vision_area ul {margin:0; padding:0; }
	.vision_type7 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type7 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type7 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_FSMA_011.jpg);}
    .vision_type7 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_FSMA_012.jpg);}
    .vision_type7 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_FSMA_013.jpg);}

	.vision_type7 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type7 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type7 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
    
	.vision_type7 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type7 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type7 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type7 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type7 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type7 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    
    /* 심사원인증 > PCQI 시작  */
    .vision_type8 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type8:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type8 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type8 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type8 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type8 .vision_area ul {margin:0; padding:0; }
	.vision_type8 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type8 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type8 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_pcqi_01.jpg);}
    .vision_type8 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_pcqi_02.jpg);}
    .vision_type8 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_pcqi_03.jpg);}
    .vision_type8 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_pcqi_04.jpg);}
	.vision_type8 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type8 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type8 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
    
	.vision_type8 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type8 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type8 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type8 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type8 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type8 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
        

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

		/*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type5 .vision_area h2.title { font-size:1.5em; }
        .vision_type5 .vision_area span.stitle{font-size:1em; width:100%;}
        .vision_type5 .vision_area ul li {width:100%;}
        .vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */
        
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type6 .vision_area h2.title { font-size:1.5em; }
        .vision_type6 .vision_area span.stitle{font-size:1em; width:100%;}
        .vision_type6 .vision_area ul li {width:100%;}
        .vision_type6 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type6 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type6 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type7 .vision_area h2.title { font-size:1.5em; }
        .vision_type7 .vision_area span.stitle{font-size:1em; width:100%;}
        .vision_type7 .vision_area ul li {width:100%;}
        .vision_type7 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type7 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type7 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type8 .vision_area h2.title { font-size:1.5em; }
        .vision_type8 .vision_area span.stitle{font-size:1em; width:100%;}
        .vision_type8 .vision_area ul li {width:100%;}
        .vision_type8 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type8 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type8 .vision_area ul li .con_txt span { padding:0 30px; }


	}

</style>



<div class="content_wrap">

<!--+++ 20.05.11 탭메뉴/ 심사원인증2 > ISO 27001 시작 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 20000</a></li>
			<li><a href="javascript:;">FSSC 22000</a></li>
			<li><a href="javascript:;">FDA FSMA</a></li>
			<li><a href="javascript:;">PCQI</a></li>
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO / IEC 20000 </span> | 정보기술서비스관리 심사원인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		ISO / IEC 20000이란?<br>
		ISO/IEC 20000은 서비스 제공자가 SMS를 계획, 수립, 구현, 운용, 감시, 검토, 유지, 개선하기 위한 요건을 명시하고 있는 서비스 관리를 위한 최초의 국제 표준이다.  이 표준은 서비스 제공자가 고객에게 제공하는 서비스의 품질을 개발하는 방법을 식별할 수 있도록 하는 두 가지 주요 부분을 포함한다.<br><br>
        Part 1은 서비스 관리 시스템의 개발 및 구현에 대한 요구사항을 명시하고 있으며,<br>
        part 2는 ISO/ IEC 20000-1의 범위 내에서 서비스 관리 시스템의 적용에 관한 지침이 포함되어 있다.<br><br>
        
        IT Infrastructure Library (ITIL)에서는 ISO/IEC 20000에서 필요로 하는 동일한 서비스 품질 수준을 달성할 수 있는 모범사례를 설명하고 있지만, <br>ITL 인증은 보통 개인에 적용되는데 반해 ISO/IEC 20000은 전체 기업에 대한 인증을 가능하게 합니다.<br>

		</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">IT 서비스 관리가 중요한 이유</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
						&#9640; 조직이 ISO/IEC 20000 절차와 효과적인 서비스 관리 시스템의 구현을 성공적으로 수행할 수 있도록 지원합니다.<br><br>
						&#9640; 효과적인 ISO/IEC 20000을 구현하므로써 서비스 설계, 제공 및 개선할 수 있는 능력을 입증하는 것입니다. <br><br>
						&#9640; ISO/IEC 20000 인증서는 높은 수준의 전문성과 신뢰도를 달성하려는 귀사의 의지를 표방하는 것입니다. <br><br>
						<span style="color:#009999;">&#9640; ISO/IEC 20000 인증은 내부 및 외부 고객에게 기업이 만족할 만한 품질 수준의 IT 서비스를 제공하고 있음을 보장합니다.</span>
					</span>
				</div>
				
			</li>
		</ul>
		<br>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">참여 대상  </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:left;line-height:30px;">
                     이 ISO  IEC 20000 Auditor 과정은 ISO 표준을 준수하기 위해 IT 서비스 관리 시스템 감사의 특정 요구 사항을 이해하려는 기존의 타사 또는 내부 감사원을 대상으로합니다.<br><br>
                      &#9671; SMS(서비스 관리 시스템) 인증 심사를 수행하고 하는 심사원<br> 
                      &#9671; 서비스 관리 시스템 감사 프로세스에 숙달하고자 하는 관리자 또는 컨설턴트<br>
                      &#9671; SMS 요구 사항을 준수 할 책임이있는 개인<br>
                      &#9671; 서비스 관리 시스템 감사를 준비하려는 기술 전문가<br>
                      &#9671; 서비스 관리 전문가 컨설턴트<br> 

					</span>

				</div>
			</li>
		</ul>

		</div>
		
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO/IEC 20000 IT 서비스 관리의 이점 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:left;line-height:15px;">
                     ISO/IEC 20000 교육 과정을 성공적으로 이수하면 얻을 수 있는 이점은 다음과 같다.<br><br><br>
                     
                       &#9672; 신뢰도 향상<br><br>
                       &#9672; 고객 만족도 향상<br><br>
                       &#9672; 비즈니스 목표에 대한 이해도 향상<br><br>
                       &#9672; 브랜드 평판 향상<br><br>
                       &#9672; 새로운 역량 개발<br><br>
                       &#9672; ITIL 환경 활용<br><br>
                       &#9672; 계획 및 제어 능력 향상<br><br>
                       &#9672; 응답 시간 단축<br><br>
                       &#9672; 사건의 감소<br><br> 
                       &#9672; 지속적인 개선의 문화 창출<br><br>
                       &#9672; 경쟁 우위 확보<br><br>
					</span>

				</div>
			</li>
		</ul>

		</div>
		
		
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 20000 심사원인증서  </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:left;line-height:20px;text-align:justify;">
                     ISO / IEC 20000 Auditor 인증은 서비스 관리 시스템 (SMS)을 감사해야 하는 전문가를 위한 자격 증명이며 "ISO 20000 Lead Auditor"인증의 경우 감사 팀을 관리 할 수 있습니다.<br><br>
                     시장에서 필요로 하는 주요 역량 및 지식 기술은 ISO / IEC 20000: 2018 표준의 인증 프로세스를 준수하여 감사를 능숙하게 계획 및 수행하고 감사 기법을 숙달하고 감사 팀을 관리 (또는 참여)하는 능력입니다

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
   
   
   
   
   
 
   <article><!-------+++++++ / article  심사원인증3 >  FSSC 22000 시작  /++++++++++--------------->   
       <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> FSSC 22000(연수기관) </span> | 심사원 인증</h1>
		

		
	<section class="vision_type6">	
		<div class="vision_area">
		<h2 class="title" style="color:#009999;display:block;text-align:left;">FSSC 22000 심사원 인증 개요</h2>
                 <ul>
                     <li>
                     <span  style="display:block;margin:3%;">
                     FSSC 22000 교육 기관은 Scheme Version 5 Part 6 요구 사항을 준수해야합니다. 라이센스 교육 기관은 FSSC 22000 무결성 프로그램에 따라 모니터링됩니다. 이 프로그램은 교육 기관이 FSSC 22000 요구 사항을 충족한다는 확신을 제공합니다. 라이선스가 있는 교육 기관은 FSSC 22000 웹 사이트에 나열되어 있으며 해당 재료 및 인증서에 FSSC 22000 브랜드를 사용할 수 있습니다.
                     
                     </span>
                     </li>
                 </ul>
        </div>
    </section>
		
	</section>
	<section class="vision_type6">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">FSSC 22000 심사원 자격부여 프로세스</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!------CHALLENGE-----></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
					<span style="font-weight:bold;color:#009999;">실무경력</span>
                    &#10057;	식품생산 또는 제조업, 소매업, 식품검사 또는 식품 관련법 집행 또는 이와 동등한 분야에서 품질보증 또는<br>
                    &#10057;	식품안전기능과 관련하여 상근으로 최소 2 년의 근무경력을 포함하는 식품 또는 관련 산업분야의 경력<br><br>
    
                    <span style="font-weight:bold;">학력</span>
                    &#10057;	학력: 식품관련 또는 생명과학 분야의 학위, 또는<br>
                    &#10057;	최소한 식품 관련 또는 생명과학 고등 교육 과정이나<br>
                    &#10057;	이와 동등한 과정에 대한 성공적 이수<br>
					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
		    <li style="padding:10px;line-height:30px;">
            <span style="font-weight:bold;color:#009999;">교육훈련</span><br>
                &#10057;  FSMS 또는 QMS 선임심사원 과정- 시험을 포함하여 최소 40 시간<br>
                &#10057;  HACCP 교육훈련 - 시험을 포함하여 최소 16 시간<br>
                &#10057;  ISO 22000 표준 – 시험을 포함하여 최소 8 시간(선임심사원 과정에 ISO 22000 표준에 대한 부분이 포함되지 않은 경우)<br>
                &#10057;  식품 방어 리스크의 평가 방법 및 가능한 완화 조치를 다루는 식품 방어 교육훈련(시험 포함)<br>
                &#10057;  식품 사기 취약성의 평가 방법 및 가능한 완화 조치를 다루는 식품 사기 교육훈련 (시험 포함)<br>
                &#10057;  표준 – 스킴과 관련된 모든 요구사항(시험 포함): ISO/TS 22003 (부속서 C), ISO 19011 및 ISO/IEC 17021-1 (시험을 포함하여 인증기관 심사 프로세스에 적용 가능한 표준 들)<br>
                &#10057;  관련 PRP 표준에 대한 교육훈련
		    </li>
		</ul>
		<br>
		<ul>
		    <li style="padding:10px;line-height:30px;">
            <span style="font-weight:bold;color:#009999;">기타</span><br>
               &#10057; 심사: 최소 10 일의 심사경력과 5 회의 ISO 22000 심사<br>
               &#10057; 또는 최소 1 회의 FSSC 22000 심사를 포함하여 특정 산업분야와 관련된 GFSI의 인정된 스킴 심사<br>
               &#10057; GFSI 시험: 모든 심사원은 재단이 규정한 기한 내에 GFSI 시험을 통과하여야 한다. 새로운 심사원들은 FSSC 22000에 대한 자격을 부여 받기전에 GFSI 시험을 통과하여야 한다.<br>
               &#10057; 범주 I 관련: 포장관련 기본 자격증, 포장기술 관련 학위<br>
               &#10057; 또는 상위 자격증과 식품기술, 식품위생 또는 관련 과학분야 자격증 또는 식품기술, 식품안전/위생 또는 관련 과학 분야 기본 자격증 및 세계포장협회의 교육훈련(최소 30 시간)과 세계포장협회가 규정한 요구사항을 충족하는 포장기술에 대한 자격증<br>
               &#10057; FSSC 22000-품질: ISO/TS 22003 범주 및 ISO 9001 식품분야 코드에 따라 인정된 ISO 9001 인증과 관련하여 ISO/IEC 17021-1에 대한 자격이 부여된 심사원<br>
		    </li>
		</ul>
		
		<br>
		
		<h2>		
		<img src="images/audit_fssc22000_03.jpg" alt="심사원의 최초 평가 승인 이미지" style="display:block;margin:0 auto;">
		</h2>
		
		<br>
		
		<ul>
		    <li style="padding:10px;line-height:30px;">
            <span style="font-weight:bold;color:#009999;">심사원의 최초 평가 및 승인</span><br>
		  
               &#10057; 적격성이 달성되었음을 확인하기 위해 심사원에 대한 FSSC 22000 입회심사<br>
               &#10057; 모든 FSSC 22000 심사원은(교육훈련 중에 있는 심사원포함) 재단 지침에 따라 포탈에 등록되어야 한다.
		    </li>
		</ul>
		
		<br>
		<ul>
		    <li style="padding:10px;line-height:30px;">
            <span style="font-weight:bold;color:#009999;">소분류에 대한 인증수행범위 부여(최초 및 확대)</span><br>
		  
               최초 심사원 자격을 부여받은 후, 심사원은 각각의 Category와 관련하여 자격을 부여/승인받아야 한다. 인증기관은 심사원에 대하여 Category code를 부여하기 위해 심사원이 다음 요구사항에 적합함을 실증하여야 한다.<br><br>
            
               <br>
		
		<h2>		
		<img src="images/audit_fssc22000_04.jpg" alt="심사원의 최초 평가 승인 이미지" style="display:block;margin:0 auto;">
		</h2>
		
		<br>
                     
               &#10057;  해당 소분류에 대한 6 개월 실무경력 또는 해당 소분류에 대하여 자격을 보유한 심사원의 감독 하에 훈련자로 또는 심사반원으로서 부여받고자 하는 새로운 Category(post-farm gate only except for food chain category A)와 관련하여 GFSI 가 인정한 스킴에 대한 심사 5 회. 5 회의 심사 중 최소 1 회의 심사는 FSSC 22000 심사이어야 한다(사후 또는 갱신심사 2 단계) 실무경력을 입증하기 위해 자문업무가 활용되는 경우, 총 자문 일수는 6 개월 실무경력에 합산되어야 한다.<br>
               &#10057;  소분류에 대한 구체적인 적격성 실증<br>
               &#10057;  소분류에 대한 인증기관 자체 적격성 기준 충족<br>
		    </li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">제공하는 교육</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                     <span style="font-weight:bold;color:#009999;">FSSC 22000 이해</span>
                     이 과정은 조직, 인증 기관, 컨설턴트 및 FSSC 22000 요구 사항에 대한 일반적인 지식에 관심이 있고 다른 식품 사슬 조직에 적용할 수 있는 방법을 이해하는 사람들을 대상으로 합니다.<br><br>
 
                     <span style="font-weight:bold;color:#009999;">FSSC 22000 실행</span>
                     위의 과정을 기반으로 하는 조직, 컨설턴트 및 기타의 경우 다양한 식품 사슬 범주 내에서 FSSC 22000을 구현할 수 있는 방법을 보여줍니다.<br><br>
 
                     <span style="font-weight:bold;color:#009999;">FSSC 22000 내부 심사원 과정</span>
                     내부 심사원의 교육 요구 사항을 충족하도록 FSSC 22000을 구현하는 조직을 위해 설계되었습니다. 교육은 ISO 19011:2018에 지정된 모든 요소를 다룹니다.<br><br>
 
                     <span style="font-weight:bold;color:#009999;">FSSC 22000 선임 심사원 과정</span>
                     선임 심사원 등록을 원하시는 분을 위하여 개최되는 과정입니다. 또한 내부 심사원 및 컨설턴트에도 적용될 수 있습니다. 교육의 구성은 FSSC 22000 요구사항, ISO 19011 : 2018, ISO / IEC 17021-1 : 2015 및 ISO / TS 22003 : 2013을 다루며 연습 과정 (예 : Case study) 및 필기 시험을 포함합니다. 총 교육 시간은 40 시간입니다.<br>

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
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">

                     &#10047; IGC인증원은 국내 식품 제조 기업의 해외시장 진출을 위한 다양한 인증 및 시험서비스를 제공합니다.<br><br> 
                     &#10047; IGC인증원은 시험, 인증, 심사원 양성까지 수출을 위해 필요한 모든 과정을 One-stop 서비스로 빠르고 정확하게 지원합니다.<br><br>
                     &#10047; IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 22000 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다.<br><br> 
                     &#10047; FSSC 22000 선임 심사원 지정을 위해 FSSC로부터 TO(Training Organization)로 지정을 받아 활발하게 FSSC 22000 심사원 양성 업무를 수행하고 있습니다.<br><br>

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
			IGC 인증원은 GPC로부터 승인을 받아 다양한 경영시스템 분야에 대한 심사원 연수과정을 제공하고 있습니다.<br>
				
				<li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
				<li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
				<li><p><em><strong>03</strong></em><span>ISO 23485</span></p></li>
				<li><p><em><strong>04</strong></em><span>ISO 22716</span></p></li>
				<li><p><em><strong>05</strong></em><span>ISO 45001</span></p></li>
				<li><p><em><strong>06</strong></em><span>ISO 37001</span></p></li>
				<li><p><em><strong>07</strong></em><span>ISO 50001</span></p></li>
				<li><p><em><strong>08</strong></em><span>ISO 22301</span></p></li>
				<li><p><em><strong>09</strong></em><span>ISO 22000</span></p></li>
				<li><p><em><strong>10</strong></em><span>FSSC 22000</span></p></li>
			</ul>
			
			<br>
			<ul>
            <span style="font-weight:bold;color:#009999;">심사원 양성 및 심사원 자격증 획득지원</span><br>
            IGC는 심사원 양성과정 이후 심사 업무 참여를 원하는 신청자에 대하여 심사참여를 통한 심사원 양성 혹은 1자 및 2자 심사를 통한 경험이 충분한 신청자의 경우 검증심사를 통하여 심사원 자격을 확보할 수 있도록 지원하고 있습니다.
			</ul>
			
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   </article><!-------+++++++ / article  심사원인증3 >  FSSC 22000 종료  /++++++++++-------------->   
   
   
   
   
   
   
   
   <article><!-------+++++++ / article  심사원인증3 >  FDA FSMA 시작  /++++++++++--------------->   
       <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> FDA FSMA </span> | 연수기관 심사원인증</h1>

        <ul>
		   <li>   
             <h2>
               <span style="display:block;padding:20px;font-size:1.3em;text-align:left;margin-bottom:-25px;color:#009999;"> <span style="font-size:0.2em;color:#3366ff;">&#9632; </span>
                 FSMA (식품안전현대화법, Food Safety Modernization Act)
               </span> 
             </h2> 
           </li>
        </ul>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;"><br>
		2011년 01월 04일, 미국정부는 사전예방을 통한 식품공급 안전성 및 국민건강 보호를 목적으로 식품안전현대화법 (Food Safety Modernization Act, FSMA)를 제정하였습니다. 이에 따라 FDA는 FSMA 제정으로 식품안전문제를 예방하는데 초점을 맞출 수 있게 되었습니다. FSMA의 적용대상은 식품이나 사료를 제조, 가공, 포장 또는 보관하는 시설입니다. <br><br>
		
		또한 생산농가, US 수입업체, 화주업체, 수취업체, 선적업체, 운송업체 등 미국으로 식품을 보내는 업체도 FSMA를 준수해야 합니다. 따라서 업체들은 FSMA에 따라 위해요소 분석에 기반한 예방관리가 포함된 식품안전시스템을 구축하고, 문서화된 식품안전계획서를 작성하는 등의 각종 준비가 필요합니다.
		</h3>
	</section>
	<section class="vision_type7">
		
		<div class="vision_area">
		<h2 class="title"  style="color:#009999;">FSMA 심사원 인증의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                     미국은 한국의 중요한 수출 대상국으로 매우 중요한 식품 수출시장입니다. 따라서 FSMA 제 3자 인증은 식품업체의 미국 수출 확대의 기회로 작용하고 있습니다. 따라서 FSMA에서 요구하는 규정을 잘 준수하고 있는지 공인된 제 3의 기관이 심사를 수행하기 위하여 FSMA 심사원 인증이 필요합니다.
					</span>
				</div>
			</li>
		</ul>
		
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">FSMA 심사원 교육과정</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                        <span style="font-weight;bold;color:#009999;">IGC의 FSMA 제 3자 인증 심사원 교육과정 내용</span><br><br>
                        &#8281; FDA FSMA 3자 인증 프로그램<br><br>
                        &#8281; 심사원 적격성 기준<br><br>
                        &#8281; FSMA 3자 인증 심사 점검항목<br><br>
                        &#8281; FSMA Human Food Category 별 특징 및 심사적용 방법<br>
                            &nbsp; &nbsp; &#8278; Low Acid and Acidified Foods (산성식품)<br>
                            &nbsp; &nbsp; &#8278; Fisheries/Seafood Products (수산식품)<br>
                            &nbsp; &nbsp; &#8278; Fruit or Vegetable Juices, Other Beverages Including Water (과채주스)<br>
                            &nbsp; &nbsp; &#8278; Starch Products (전분, 밀가루식품)<br>
                            &nbsp; &nbsp; &#8278; Food Additives (식품 첨가제)<br>
                            &nbsp; &nbsp; &#8278; Nuts and Edible Seed Products (견과, 씨앗류)<br>
					</span>
					<span></span>
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
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                  &#8284; FSMA 심사원 교육과정은 미국 FDA에서 승인한 FSMA 제 3자 인증기관이자, FSPCA로부터 PCQI 양성과정과 FSVP 전문가 양성에 대한 교육권한을 받은 IGC에서 직접 준비한 교육과정입니다.<br><br> 
                  &#8284; FSMA 심사원 교육과정은 FSMA 제 3자 인증을 위한 심사원 양성을 위해 체계적이고 심도 있게 구성되었습니다.<br><br>
                  &#8284; IGC만의 풍부한 경험을 바탕으로 양질의 심사 스킬을 습득할 수 있도록 준비된 교육과정입니다. <br><br>
                  &nbsp; &nbsp; &#8278; FSMA 제 3자 인증 심사원 활동을 위해서는 PCQI 양성과정과 FSAM 제 3자 인증 심사원 과정을 모두 수료하여야 합니다.<br><br>
                  &nbsp; &nbsp; &#8278; PCQI 자격이 있으시거나, 사전에 교육을 수료하신 경우 FSMA 제 3자 인증 심사원 과정만 선택하실 수 있습니다.<br><br>
                  &#8284; IGC는 식품 시험소 운영 및 다양한 식품 관련 인증을 진행함으로써 식품 안전에 관한 광범위한 지식을 보유하고 있습니다. <br><br>
                  &#8284; IGC인증원은 수년 간의 경험을 바탕으로 해당 분야 전문가들이 가르치는 과정과 전문 교육을 제공합니다. 또한, 수년 간의 글로벌 경험을 바탕으로 효과적인 학습과 개발의 기회를 제공합니다.
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
   </article><!-------+++++++ / article  심사원인증3 >  FDA FSMA 종료  /++++++++++-------------->
           
   
      
      
   <article><!-------+++++++ / article  심사원인증3 >  FPCQI 시작  /++++++++++--------------->   
       <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> PCQI</span> | 심사원인증</h1>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		
		<ul>
		   <li>   
             <h2>
               <span style="display:block;font-size:1.3em;text-align:left;color:#009999;"> <span style="font-size:0.2em;color:#3366ff;">&#9632; </span>
                 PCQI(Preventive Controls Qualified Individual)
               </span> 
             </h2> 
           </li>
        </ul>
		
		<br>
		미국에 식품을 수출하는 업체는 FSMA 요구사항에 기초하여 식품안전예방관리전문가 (PCQI: Preventive Controls Qaulified Individual)를 선임하여 HARPC (위해요소예방관리시스템)을 운영하여야 합니다. <br><br>
		
        FSMA 규정에 따르면 식품제조회사는 전통적인 위해 요소 분석뿐만 아니라 잠재적인 위험성을 사전에 예방관리 하기 위한 식품안전계획을 수립하고 운영하도록 요구하고 있으며 또한 예방관리전문가에 의해 식품안전계획이 수립되어야 하고 예방관리의 유효성이 확인되어야 하며 관련 기록은 정기적으로 재검토할 것을 요구하고 있습니다. <br><br>

        PCQI 자격증은 FSPCA(The food safety preventive Controls Alliance)가 승인한 교육 과정을 성공적으로 수료한 이후 FSPCA를 통해 Certificate를 발급받아야 합니다.<br><br>
		</h3>
	</section>
	<section class="vision_type8">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">PCQI란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                     <span style="fojnt-weight;bold;color:#009999;">A Preventive controls qualified individual</span><br>
                     최소한 FDA가 적합하다고 인정된 표준화된 커리큘럼에 따라 받은 것과 동등한 위험 기반 예방 통제의 개발 및 적용 교육을 성공적으로 완료했거나, 그렇지 않은 경우 식품 안전 시스템을 개발하고 적용하기 위한 직무 경험을 통해 자격을 갖춘 자격을 갖춘 사람을 의미한다.
					</span>
				</div>
			</li>
			<br>

          </ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">PCQI의 책임</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:15px;">
                    <span style="font-weight:bold;color:#009999;">신청서와 함께 제출해야 할 증빙서류는 아래와 같습니다.</span><br><br>
                       1) 식품안전계획의 작성<br><br>
                       2) 예방조치의 유효성 확인<br><br>
                       3) 기록검토<br><br>
                       4) 식품안전계획의 재분석<br><br>
                       5) 기타 식품에 적합한 활동을 감독 또는 수행<br><br>
					</span>
				</div>
			</li>
			<br>
		</ul>

		</div>


		<div class="vision_area">
		<h2 class="title" style="color:#009999;">PCQI에 대한 교육 여건을 갖추어 식품안전 생산에 관여할 실무자</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                      &#10049; 식품 안전 담당 부사장<br><br>
                      &#10049; 유지보수 관리자<br><br>
                      &#10049; 생산 감독 책임자 및 관리자<br><br>
                      &#10049; 위생 감독자<br><br>
                      &#10049; 품질 보증 책임자 및 관리자<br><br>
                      &#10049; 안전 관리자<br><br>
                      &#10049; 교육 감독자<br><br>
                      &#10049; 기술 책임자<br><br>
                      &#10049; 포장 감독자 및 관리자<br><br>
                      &#10049; 법규 및 규제 담당자<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">PCQI 교육 내용</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 30px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                      &#10046; FSMA 대응을 위한 예방관리 개념 교육<br>   
                      &#10046; 식품 안전 계획 개요<br>
                      &#10046; GMP와 기타 선행요건 프로그램 운영<br>   
                      &#10046; 생물학적 식품안전 위해요소<br> 
                      &#10046; 화학적, 물리적, 경제적 측면에서의 식품안전 위해요소<br>
                      &#10046; 식품안전 계획의 개발을 위한 사전 단계<br> 
                      &#10046; 식품안전 계획의 준비를 위한 지원 (자료)<br>
                      &#10046; 위해요소 분석과 예방관리점의 결정-개요<br>
                      &#10046; 위해요소 분석과 예방관리점의 결정<br>
                      &#10046; 예방관리<br>
                      &#10046; 식품의 알러지원 예방관리<br>
                      &#10046; 위생 예방관리<br>
                      &#10046; 공급망 예방관리<br>
                      &#10046; 검증 및 유효성 확인절차<br>  
                      &#10046; 기록의 보관 및 관리<br>
                      &#10046; 회수계획<br>
                      &#10046; 법규개요 (cGMP, 위험성분석, 위험성 기반의 예방관리)<br>
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
   </article><!-------+++++++ / article  심사원인증3 >  FPCQI 종료  /++++++++++-------------->     
      
      
      
				
  </div><!-----------+++++++ / div class="tab_con" 종료 / ++++++++------------------------>
	
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>



