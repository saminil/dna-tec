<?php
	include_once('./_common.php');
$g5['title'] = '연속성, 복원력 및 복구';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;}   
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
    
    
    
    /* 연속성, 복원력 및 복구 시작 ISO 22301 시작  */
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
    /* 연속성, 복원력 및 복구 시작 ISO 22301 종료  */
    
    /* 연속성, 복원력 및 복구 시작 ISO 22320 시작  */
    7vision_type7 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type7:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type7 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type7 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type7 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type7 .vision_area ul {margin:0; padding:0; }
	.vision_type7 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type7 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle; }
	/*.vision_type7 .vision_area:nth-child(1) ul li .i_box {background:#005bab;}
	.vision_type7 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}
	.vision_type7 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}
    .vision_type7 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}   */
    .vision_type7 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
    .vision_type7 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type7 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
	.vision_type7 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type7 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type7 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type7 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type7 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; text-align:justify;text-justify:inter-word;}
	.vision_type7 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type7 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type7 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type7 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;} 
    /* 연속성, 복원력 및 복구 시작 ISO 22320 종료  */
    
    
    
    
    /* 연속성, 복원력 및 복구 시작 ISO 22316 시작  */
    .vision_type8 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type8:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type8 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type8 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type8 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type8 .vision_area ul {margin:0; padding:0; }
	.vision_type8 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type8 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle; }
  /*.vision_type8 .vision_area:nth-child(1) ul li .i_box {background:#005bab;}*/
	.vision_type8 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}
	.vision_type8 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}
    .vision_type8 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}
    .vision_type8 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
    .vision_type8 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type8 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
	.vision_type8 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type8 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type8 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type8 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type8 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; text-align:justify;text-justify:inter-word;}
	.vision_type8 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type8 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type8 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type8 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    /* 연속성, 복원력 및 복구 시작 ISO 22316 종료  */
    
    
    
    /* 연속성, 복원력 및 복구 시작 ISO 22317 시작  */
    .vision_type9 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type9:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type9 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type9 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type9 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type9 .vision_area ul {margin:0; padding:0; }
	.vision_type9 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type9 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle; }
  /*.vision_type9 .vision_area:nth-child(1) ul li .i_box {background:#005bab;}
	.vision_type9 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}
	.vision_type9 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}*/
    .vision_type9 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}
    .vision_type9 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
    .vision_type9 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type9 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
	.vision_type9 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type9 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type9 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type9 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type9 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; text-align:justify;text-justify:inter-word;}
	.vision_type9 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type9 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type9 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type9 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    
    
     
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

		/*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type5 .vision_area h2.title { font-size:1.5em; }
		.vision_type5 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type5 .vision_area ul li {width:100%;}
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃 설정  */
        
        
        /*  모바일 레ㅇㅣ아웃 디자인 ISO 22301 설정 시작 */
        .vision_type6 .vision_area h2.title { font-size:1.5em; }
		.vision_type6 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type6 .vision_area ul li {width:100%;}
		.vision_type6 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type6 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type6 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        /*  모바일 레ㅇㅣ아웃 디자인 ISO 22320 설정 시작 */
        .vision_type7 .vision_area h2.title { font-size:1.5em; }
		.vision_type7 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type7 .vision_area ul li {width:100%;}
		.vision_type7 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type7 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type7 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        /*  모바일 레ㅇㅣ아웃 디자인 ISO 22316 설정 시작 */
        .vision_type8 .vision_area h2.title { font-size:1.5em; }
		.vision_type8 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type8 .vision_area ul li {width:100%;}
		.vision_type8 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type8 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type8 .vision_area ul li .con_txt span { padding:0 30px; }
        
        
        
        
         /*  모바일 레ㅇㅣ아웃 디자인 ISO 22317 설정 시작 */
        .vision_type9 .vision_area h2.title { font-size:1.5em; }
		.vision_type9 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type9 .vision_area ul li {width:100%;}
		.vision_type9 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type9 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type9 .vision_area ul li .con_txt span { padding:0 30px; }
	}

</style>



<div class="content_wrap">

	<!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
		<div class="tab_menu tab01">
			<ul style="display:inline-block;position:relative;text-align:center;">
				<!-- 처음 활성화 메뉴에 class="on" -->
				<li class="on"><a href="javascript:;">ISO 28000</a></li>
				<li><a href="javascript:;">ISO 22301</a></li>
				<li><a href="javascript:;">ISO 22320</a></li>
				<li><a href="javascript:;">ISO 22316</a></li>
				<li><a href="javascript:;">ISO 22317</a></li>
			</ul>
		</div>
		<!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->
	
	<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

<!--+++ 20.0526.13 탭컨텐츠 영역 시작 +++-->
<div class="tab_con">	  
	  
<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
<article style="display:block">


	<section class="page_title">
		<h1 class="sub_tit">ISO 28000 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 28000 공급망에 대한 보안 관리 시스템 (SMS)의 요구 사항을 해결하는 국제 표준</h2>
	</section>
	<section class="vision_type5">
	
	
		<div class="vision_area">
		<h2 class="title">ISO 28000 교육 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso28000_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                     &#10053; ISO 28000은 공급망에 대한 보안 관리 시스템 (SMS)의 요구 사항을 해결하는 국제 표준입니다. <br><br>
                     &#10053; 조직이 보안 위협을 평가하고 공급망에서 발생할 때 이를 관리하는 데 도움이 되는 측면을 지정합니다.<br> <br>
                     &#10053; 보안 관리는 비즈니스 관리의 다른 측면과 관련이 있습니다. <br><br>
                     &#10053; ISO 28000을 통해 조직은 적절한 보안 조치가 마련되어 있는지 파악하고 다양한 위협으로부터 자산을 보호 할 수 있습니다.<br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 28000 이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso28000_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                      공급망은 원자재 소싱으로 시작하고 운송, 적재 정보 및 관련 활동을 포함하여 운송 모드 전반에 걸쳐 최종 사용자에게 제품 또는 서비스를 제공함으로써 확장되는 일련의 자원과 프로세스로 연결됩니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                      공급망에는 원료 제조업체, 중간 제품 제조업체, 제품 제조업체, 도매 업체, 유통 업체, 공급 업체, 물류 제공 업체, 운송 산업, 기차 운송, 항공 운송, 항구 터미널 운영자, 운송 운송, 운송업자, 관세청, 회계사 및 정보 기관이 포함될 수 있습니다. 수입 사업.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 28000의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso28000_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                       ISO 28000 : 2007의 프레임 워크는 구조적으로 ISO 14001 : 2004 환경 관리 시스템 (EMS) 표준과 매우 유사합니다. EMS의 환경 적 측면 식별 및 평가 프로세스는 보안 관리의 보안 위험 평가와 유사합니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                       &#10049;	보안 관리의 효율성을 측정하고 개선 할 수 있도록 프로세스로 보안을 관리 할 수 있습니다.<br><br>
                       &#10049;	경영진이 보안 위험 평가를 통해 위험이 높은 영역에 리소스와 노력을 집중할 수 있습니다.<br><br>
                       &#10049;	경영진이 국제 표준으로 보안 관리 노력을 벤치마킹 할 수 있습니다.<br><br>
                       &#10049;	체계적인 보안 관리를 시행하겠다는 약속을 이해 관계자에게 보여줍니다.<br><br>
                       &#10049;	ISO 28000 : 2007은 공급망 운영의 위험 수준을 식별하는보다 실용적인 접근 방식을 사용합니다. 이를 통해 조직은 지원 관리 도구
                (예 : 문서 제어, 핵심 성과 지표, 내부 감사 및 교육)를 통해 위험 평가를 수행하고 관련 위험에 따라 제어를 적용 할 수 있습니다.<br><br>
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
					<div class="icon" style="background-image:url(./images/edu_iso28000_04.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                       &#9819; IGC는 IPC MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 28000 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다. <br><br>
                       &#9819; GPC는 인증분야 최상위 기관인 IAF로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인인증기관입니다. <br><br>
                       &#9819; GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
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
	         		<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        IGC는 ISO 28000 에 대한 전 과정에 대한 서비스를 제공합니다.</span><br>
	         			<li style="float:none;"><p><em><strong>01</strong></em><span>ISO 28000 시스템 인증</span></p></li>
	         			<li style="float:none;"><p><em><strong>02</strong></em><span>ISO 28000 교육 가능 연수기관 안내</span></p></li>
	         			<li style="float:none;"><p><em><strong>03</strong></em><span>ISO 28000 심사원 인증</span></p></li>
	         			<br><br>
	         			<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
	         			또한, 개인인증기관인 GPC와의 협력을 통해 다음과 같은 여러 분야에 관련된 교육 관련 서비스를 제공하고 있습니다.</span><br>
	         			<li><p><em><strong>1</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>2</strong></em><span>보건, 안전 및 환경</span></p></li>
	         			<li><p><em><strong>3</strong></em><span>품질경영시스템</span></p></li>
	         			<li><p><em><strong>4</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
	         			<li><p><em><strong>5</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>6</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>7</strong></em><span>IT 보안</span></p></li>
	         			<li><p><em><strong>8</strong></em><span>서비스 관리</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
</article> <!--------+++++++/ <article style="display:block"> 종료 /++++++++----------->




<article><!--------+++++++/ 컨텐츠 02 심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22301  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 22301 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 22301 : 비즈니스 연속성 경영시스템 심사원 교육/연수</h2>
	</section>
	<section class="vision_type6">
	
		<div class="vision_area">
		<h2 class="title">ISO 22301: 비즈니스 연속성 경영시스템 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22301_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        각종 테러와 자연재해와 같은 사업의 중단을 초래할 수 있는 예기치 못한 사고가 발생했을 때, 조직은 효과적으로 대응하고 사전에 계획한대로 제품과 서비스 공급을 지속할 수 있도록 해야 합니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
						ISO 22301은 기업의 핵심적인 비즈니스 기능에 잠재적인 위협을 식별하여 비즈니스를 돕고 효과적인 백업 시스템 및 프로세스를 구축하기 위해 개발된 비즈니스 연속성 경영시스템입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 22301란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22301_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        ISO 22301은 기업의 비즈니스 연속성 경영시스템을 계획하고, 수행하며, 모니터링하고, 검토하며, 개선하기 위한 요구사항을 규정하고 있으며 그렇게 함으로써 중단의 영향을 최소화합니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
						ISO 22301은 비즈니스 운영을 지속하기 위한 공식적인 비즈니스 지침을 제공하며, 이를 통해 조직은 각종 위협에 대해 보다 효과적인 대응과 신속한 복구 시스템을 갖추어 사람, 제품 및 조직의 수익에 미치는 영향을 줄일 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 22301의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22301_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        ISO 22301에 대한 신뢰성을 가지기 위해서 인증원은 적격한 심사원을 필요로 합니다. 비즈니스 연속성 경영시스템 심사원 인증 프로그램의 목적은 심사원으로서 필요한 지식을 제공하는 것이며 본 프로그램을 통해 인증된 심사원은 적격성이 있다 라는 것을 산업계에 제공하는데 있습니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
						인증 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 비즈니스 연속성 경영시스템 프로그램은 심사 주요 표준에 기초합니다.
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
					<div class="icon" style="background-image:url(./images/edu_iso22301_04.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
				<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9812; IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 22301에 대한 교육서비스를 제공합니다. <br><br>
                    &#9812; GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. <br><br>
                    &#9812; IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다.<br><br> 
                    &#9812; IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
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
	         		    IGC는 ISO 22301 전 과정에 대한 서비스를 제공합니다.<br><br>
	         			<li><p><em><strong>01</strong></em><span>ISO 22301 시스템 인증</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>ISO 22301 시스템 인증</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>ISO 22301 교육 가능 연수기관 안내</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>ISO 22301 심사원 인증<br><br><br></span></p></li>
	         			
	         			
	         			또한, 개인인증기관인 GPC와의 협력을 통해 다음과 같은 여러 분야에 관련된 교육 관련 서비스를 제공하고 있습니다.<br><br>
	         			<li><p><em><strong>1</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>2</strong></em><span>보건, 안전 및 환경</span></p></li>
	         			<li><p><em><strong>3</strong></em><span>품질경영 시스템</span></p></li>
	         			<li><p><em><strong>4</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
	         			<li><p><em><strong>5</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>6</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>7</strong></em><span>IT 보안</span></p></li>
	         			<li><p><em><strong>8</strong></em><span>서비스 관리</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
    
</article><!--------+++++++/ 컨텐츠 02  심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22301  종료 /++++++++----------->





<article><!--------+++++++/ 컨텐츠 03 심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22320  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 22320 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 22320 : 재난 사고 관리 표준 심사원 교육/연수</h2>
	</section>
	<section class="vision_type7">
	
	
	
	
		
		<div class="vision_area">
		<h2 class="title">ISO 22320 : 재난 사고 관리 표준의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22320_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						전세계에서 발생할 수 있는 각종 재난 및 사고에 대하여 각 나라, 각 지역의 사회적 상황뿐 아니라 인구 등의 각각의 영향에 맞는 재난대응조치와 이에 상응하는 관리를 위해 국제적으로 통용 가능한 표준이 필요시 되었습니다.
					</span>
					<span>
						이에 따라 재해, 테러 및 재난의 규모를 최소화하고 비상재난 상황 시 이를 관리 및 대응하기 위한 ISO 국제표준이 제정되었습니다.
					</span>
					<span>ISO 22320 (Security and resilience – Emergency management – Guidelines for incident management 비상 – 재난, 사고 관리) 표준의 적용을 통해 조직은 효과적으로 사고에 대응하며  체계적으로 관리할 수 있습니다.</span>
				</div>
			</li>
		</ul>
		
		</div>



		<div class="vision_area">
		<h2 class="title">ISO 22320이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22320_02.jpg);background-size:auto 100%;background-repeat:no-repeat;background-position:center center; overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-microscope"></i></div>
				</div>
				<div class="con_txt">
					<span>
						ISO 22320은 사고대응 요구 사항을 정의하는 국제 표준입니다. 재해, 테러 및 기타 주요 사건의 재난을 최소화하고 비상재난 상황관리 및 재난대응을 위해 제정된 규격으로 물 공급 및 식량 공급, 건강, 구조 서비스, 연료 공급 및 전기 등이 포함됩니다.
					</span>
					<span>
						ISO 22320은 효과적인 사고대응을 위한 최소한의 요구사항을 규정하며 사고대응 조직의 내부에서 지휘통제, 운영정보, 조정 및 협력을 위한 기본사항을 제공합니다. 이것은 지휘통제 조직체계 및 절차, 의사결정 지원, 추적가능성, 정보 관리와 상호운영을 포함하고 있습니다.
					</span>
					<span>
					    사고대응을 위한 운영정보 요구사항이 정의되어 있으며, 이 요구사항은 시의 적절하고 관련성 있는 정확한 정보를 산출하기 위한 프로세스와 작업체계, 데이터 수집 및 관리가 규정되어 있습니다. 또한 조직 내ㆍ외부적으로 다른 참여 조직들과의 조정 및 협력뿐 아니라 지휘통제 프로세스를 지원하고 다른 조직들 간의 조정 및 협력을 위한 요구사항이 규정되어 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO 22320의 적용 범위</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22320_03.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-hands-helping"></i></div>
				</div>
				<div class="con_txt">
					<span>
						ISO 22320은 국제적, 국가적, 지역적 또는 지방 차원에서 사고에 대한 대비 또는 대응에 참여하는 어느 조직(민간, 공공, 정부 또는 비영리)에라도 적용 가능하며 다음의 분야와 관련된 조직들을 포함합니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9812; 사고 예방과 회복력 대비에 대한 책임 및 참여<br><br>
                    &#9812; 사고 대응에 대한 지침과 관리 제공<br><br>
                    &#9812; 지휘통제를 위한 규정과 계획 개발<br><br> 
                    &#9812; 사고 대응을 위하여 다수 기관/조직의 조정 및 협력 개발<br><br>
                    &#9812; 사고 대응을 위한 정보 및 커뮤니케이션 체계 개발<br><br>
                    &#9812; 사고 대응,정보와 통신 및 데이터 상호운용성 모델 분야 연구<br><br>
                    &#9812; 사고 대응에서 인적 요소(human factor)분야 연구<br><br> 
                    &#9812; 공공과의 커뮤니케이션 및 상호작용에 대한 책임<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">ISO 22320의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22320_04.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						ISO 22320은 재난발생 시 이에 대한 체계를 수립 가능하도록 도와줄 수 있게 조직구조 및 절차, 의사결정 지원, 정보관리 등 재난관리에 대한 표준을 국제표준화 한 것으로 관련 기관들의 상호 협조를 통해 대응하기 위해 필수적입니다.
					</span>
					<span>
						ISO 22320에 대한 인증을 획득함으로써 조직은 구조 및 명령 및 제어 프로세스를 수립할 수 있도록 도와주는 고급 수준의 응급 관리를 달성하게 됩니다.
					</span>
					<span>
						공공 및 민간 조직이 ISO 22320의 중요성에 관계없이 모든 종류의 응급 상황에 대응할 수 있는 능력을 확립하고 강화할 수 있게 함으로써 위협, 혼란 및 피해를 최소화하고 기본 시설의 연속성을 보장할 수 있습니다. 또한 프로세스를 통한 작업, 데이터 관리, 정보 운영관리 등에 도움을 주어 통합시스템을 통한 효율적인 운영이 가능하도록 도움을 줍니다.
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
					<div class="icon"><i class="fas fa-microscope"></i><em>DEDICATION</em></div>
				</div>
				<div class="con_txt">
					<span>
						IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 22320에 대한 교육서비스를 제공합니다.
					</span>
					<span>
						GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다.
					</span>
					<span>
						IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.
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
	         	<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
	         			IGC는 개인인증기관인 GPC와의 협력을 통해 여러 분야에 관련된 교육 및 심사원 인증 서비스를 제공합니다.</span><br><br>
	         		<ul>
	         			<li><p><em><strong>1</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>2</strong></em><span>보건, 안전 및 환경</span></p></li>
	         			<li><p><em><strong>3</strong></em><span>품질경영시스템</span></p></li>
	         			<li><p><em><strong>4</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
	         			<li><p><em><strong>5</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>6</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>7</strong></em><span>IT 보안</span></p></li>
	         			<li><p><em><strong>8</strong></em><span>서비스 관리</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
    
</article><!--------+++++++/ 컨텐츠 032  심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22320  종료 /++++++++----------->


<article><!--------+++++++/ 컨텐츠 04 심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22316  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 22316 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 22316 : 회복탄력성, 조직 레질리언스, 원리와 속성 심사원 교육/연수</h2>
	</section>
	<section class="vision_type8">
		
		<div class="vision_area">
		<h2 class="title">ISO 22316 : 회복탄력성, 조직 레질리언스, 원리와 속성의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22316_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						‘Resilience (회복 탄력성)’는 지속적 번영을 바라는 조직이라면 갖추어야 할 비즈니스의 핵심입니다. 이 국제표준은 조직이 문제점을 마주하게 되었을 때, 더 유리한 입장에서 이를 대응할 수 있도록 합니다. 또한 이 표준은 강력하고 자율적 리더십을 바탕으로, 기존의 리스크 관리 형태에 더하여 이를 구축하는 것을 포함하며 조직원들이 공유가치 및 변화하는 상황에 대한 인식을 가지는 내용도 포함하고 있습니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 22316의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>DEDICATION</em></div>
				</div>
				<div class="con_txt">
					<span>
						ISO 22316 (보안 및 탄력성, 조직 레질리언스, 원리와 속성/Security and Resilience, Organizational Resilience, Principles and Attributes)는 조직이 미래의 비즈니스를 보장하는데 도움을 줍니다. 이 표준은 조직 내에 레질리언스를 강화 시킬 수 있는 요소들을 폭넓게 다루고 있습니다. 또한 이 표준은 강력하고 자율적인 리더십을 바탕으로 기존의 리스크 관리 형태에 더하여 이를 구축하는 것을 포함하며, 조직원들이 공유 가치 및 변화하는 상황에 대한 인식을 가지는 내용도 포함하고 있습니다. 따라서 조직이 목표를 달성하고 실현하기 위해 노력함과 동시에 예측 불가능한 요소들을 받아들이고 적응할 수 있도록 하기위해 ISO 22316은 필요합니다.
					</span>
					<span style="border-bottom: 1px solid #ccc; display: inline-block; ">ISO 22316 구현의 이점</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9813; 직원이 위협과 기회를 식별하고 전달할 수 있도록 지원<br><br>
                    &#9813; 조직 회복 탄력성에 영향<br><br>
                    &#9813; 다양화와 재생을 촉진<br><br> 
                    &#9813; 혁신적인 아이디어 후속조치<br><br>
                    &#9813; 현재 활동을 뛰어 넘는 생각
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
					<span>
						GPC는 IPC와 MLA 체결을 통하여 연수기관 지정에 대한 권한을 받았습니다. 또한 GPC는 국내외 많은 연수기관을 지정함으로써 수준 높은 수료생들을 배출하고 있습니다. IGC는 GPC에서 연수기관으로 지정을 받았으며, 이에 따라 ISO 22316에 대한 교육 서비스를 제공하고 있습니다. IGC는 수년 간의 경험을 바탕으로 해당 분야 전문가들이 가르치는 전문 교육을 제공합니다. 또한, 수년 간의 글로벌 경험을 바탕으로 효과적인 학습과 개발 기회를 제공합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO 22316 교육과정 소개</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>DEDICATION</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9814; ISO 22316의 요건의 이해<br><br>
                    &#9814; 조직의 탄력성, 원리 및 이를 지원하는 메커니즘의 이해<br><br>
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
	         		<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
	         		IGC는 Continuity, Resilience and Recovery와 관련하여 다양한 교육 서비스를 제공하고 있습니다. 따라서 ISO 22316 교육 이외에 다음의 교육은 조직에서 고유한 문화를 달성하는데 도움을 줄 수 있으므로 예기치 못한 사건이 발생한 후에도 귀사가 생존하고 성공할 수 있습니다. 또한 이를 통해 취약점을 식별할 수 있는 능력을 갖추고 있다면 시장에서 경쟁 우위를 보장할 수 있습니다. </span><br><br>
	         		<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">IGC는 전문적인 지식을 갖춘 전문가가 방대한 네트워크를 활용하여 최고의 교육 서비스를 제공합니다.</span><br><br>	
	         			<li style="float:none;"><p><em><strong>01</strong></em><span>ISO 28000 교육</span></p></li>
	         			<li style="float:none;"><p><em><strong>02</strong></em><span>ISO 22301 교육</span></p></li>
	         			<li style="float:none;"><p><em><strong>03</strong></em><span>ISO 22320 교육</span></p></li>
	         			<li style="float:none;"><p><em><strong>04</strong></em><span>ISO 22317 교육</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
    
</article><!--------+++++++/ 컨텐츠 04  심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22316  종료 /++++++++----------->






<article><!--------+++++++/ 컨텐츠 05 심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22317  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 22317 <span class="fc_pointer"> 심사원 교육</span></h1>
		<h2 class="sub_txt">ISO 22317 : 비즈니스 영향 분석 (BIA) 프로세스 심사원 교육/연수</h2>
	</section>
	<section class="vision_type9">
		<div class="vision_area">
		<h2 class="title">ISO 22317 : 비즈니스 영향 분석 (BIA) 프로세스의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22317_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						2019년 12월 시작된 COVID-19 인한 각국이 여행제한과 봉쇄 조치를 통하여 세계 경제적 불황이 기정 사실화 되었고, 불과 한달 만에 세계 경제에 심각한 경제적 영향을 주게 되었습니다. 실제로 크고 작은 많은 기업들이 심각한 타격을 입었습니다. 이렇듯 모든 조직은 붕괴될 가능성이 있습니다. 이는 기술장애, 홍수, 유틸리티 중단, 화재, 테러공격을 포함합니다. 이 규격은 조직의 규모, 범위 또는 복잡성에 상관없이 전반적인 사업 위기를 관리하고 사고 및 사건이나 사업중단을 대응하고 계획할 수 있는 능력을 개발하길 원하는 조직에게 적합합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 22317 란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22317_02.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-microscope"></i></div>
				</div>
				<div class="con_txt">
					<span>
						이 국제 표준은 비즈니스 영향 분석 (BIA) 프로세스를 수립, 구현 및 유지하는 방법에 대한 자세한 지침을 제공하는 기술 사양입니다. 비즈니스 영향 분석을 수행하는데 있어 획일적인 프로세스는 아니지만 조직이 요구사항을 충족하는 BIA 프로세스를 설계하도록 지원합니다. 조직은 BIA를 ISO 22317로 인증 할 수 없습니다. 하지만, BIA 프로세스를 효과적으로 구현하기 위한 지침으로 사용할 수 있습니다. ISO 22317은 비즈니스 영향 분석만을 다루는 유일한 표준입니다. ISO 22301을 보완하도록 설계되었음에도 불구하고 독립 실행 형 표준으로 사용할 수 있습니다. 비즈니스 영향 분석 프로세스의 목표는 조직에서 지장을 주는 일들의 실제 영향을 분석하는 것입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">비즈니스 영향 분석의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22317_03.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-hands-helping"></i></div>
				</div>
				<div class="con_txt">
					<span>
						예기치 않은 사업중단의 결과는 지대한 영향을 가져오며, 생명 손실, 자산이나 소득 손실 또는 조직의 생존이 달린 제품이나 서비스 제공의 무능력함을 이끌어 냅니다.
					</span>
					<span>
						하지만 비즈니스 영향 분석을 효과적으로 수행하는 방법에 대한 자세한 프로세스를 설명하는 데 필요한 지식이 있으면 전문 지식을 더욱 발전시킬 수 있습니다. 인증된 ISO 22317 전문가로서 귀하는 조직 및 이해 관계자에게 중요한 비즈니스 연속성 요구 사항을 파악하는 데 도움을 줄 수 있습니다. 조직내의 지장을 주는 일들이 발생한 후 조직을 복원하고 재해 발생 후 비즈니스를 복구하는 방법의 필수 사항을 결정할 수 있는 시간대를 설정할 수도 있습니다.
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
	         	    <span>IGC는 개인인증기관인 GPC와의 협력을 통해 ISO 22317 비즈니스 영향 분석(BIA)과 함께 연관  국제표준인 ISO 22316 조직 탄력성 (Organizational Resilience) 및 ISO 22301인 비즈니스 연속성 관리 시스템의 교육 서비스를 제공하고 있습니다.</span>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
    
</article><!--------+++++++/ 컨텐츠 05  심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22317  종료 /++++++++----------->







	
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->

</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>