<?php
	include_once('./_common.php');
$g5['title'] = 'IT 보안';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle; }
    
	/*.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#005bab;}
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}*/
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px;  text-align:justify;text-justify:inter-word;}
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    
    /* 심사원 교육 > IT보안 > ISO 27034 STARTY  */
    .vision_type6 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type6:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type6 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type6 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type6 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type6 .vision_area ul {margin:0; padding:0; }
	.vision_type6 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type6 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle; }
  /*.vision_type6 .vision_area:nth-child(1) ul li .i_box {background:#005bab;}
	.vision_type6 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}*/
	.vision_type6 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}
    .vision_type6 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
    .vision_type6 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type6 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; text-align:justify;text-justify:inter-word;}
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    /* 심사원 교육 > IT보안 > ISO 27035 STARTY  */
    .vision_type7 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type7:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type7 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type7 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type7 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type7 .vision_area ul {margin:0; padding:0; }
	.vision_type7 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type7 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle; }
	/*.vision_type7 .vision_area:nth-child(1) ul li .i_box {background:#005bab;}
	.vision_type7 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}
	.vision_type7 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}*/
    .vision_type7 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}
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
        
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 IT보안 > ISO 27034 시작 */
        .vision_type6 .vision_area h2.title { font-size:1.5em; }
        .vision_type6 .vision_area span.stitle{font-size:1em; width:90%;}
        .vision_type6 .vision_area ul li {width:100%;}
        .vision_type6 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
        .vision_type6 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type6 .vision_area ul li .con_txt span { padding:0 30px; }
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 IT보안 > ISO 27035 시작 */
        .vision_type7 .vision_area h2.title { font-size:1.5em; }
        .vision_type7 .vision_area span.stitle{font-size:1em; width:90%;}
        .vision_type7 .vision_area ul li {width:100%;}
        .vision_type7 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
        .vision_type7 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type7 .vision_area ul li .con_txt span { padding:0 30px; }
	}

</style>

<div class="content_wrap">

	<!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
		<div class="tab_menu tab01">
			<ul style="display:inline-block;position:relative;text-align:center;">
				<!-- 처음 활성화 메뉴에 class="on" -->
				<li class="on"><a href="javascript:;">ISO/IEC 27032</a></li>
				<li><a href="javascript:;">ISO/IEC 27034</a></li>
				<li><a href="javascript:;">ISO/IEC 27035</a></li>
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
		<h1 class="sub_tit">ISO/IEC 27032 <span class="fc_pointer"> 심사원 교육</span></h1>
		<h2 class="sub_txt">ISO/IEC 27032 : 정보-보안기술-사이버보안 심사원 교육</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO/IEC 27032 : 정보 기술-보안기술-사이버보안 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso27032_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;" ><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						사이버 공간은 인터넷 상에서 사람, 소프트웨어 및 서비스가 상호작용하는 복잡한 환경으로, 전 세계적으로 분산된 정보통신기술 장치와 연결된 네트워크의 지원을 받고 있습니다. 그러나 사이버 공간에서 조직과 정보 제공자 간의 커뮤니케이션이 부족하고 이들 영역 사이의 격차가 있기 때문에 보안 문제가 발행할 수 있습니다. 국제 표준인 ISO / IEC 27032는 신뢰성, 협력, 정보 교환 및 사이버 공간 내 이해 관계자 간의 시스템 통합을 위한 기술 지침의 수립을 다루는 정책 프레임 워크를 제공합니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO/IEC 27032 란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso27032_02.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-microscope"></i></div>
				</div>
				<div class="con_txt">
				    <span>
                       ISO/IEC 27032:2012 정보 기술-보안기술-사이버보안에 대한 가이드라인
                    </span>
					<span>
						국제 표준 ISO / IEC 27032는 정보 보안, 네트워크 및 인터넷 보안, 중요한 정보 인프라 보호 (CIIP)와 관련하여 사이버 공간에서 다양한 보안들의 역할을 강조하기 위한 것입니다. ISO/IEC 국제 표준은 사이버 공간의 서로 다른 보안 도메인 사이의 격차를 해소하고, 해킹, 사이버 공격, 악성 소프트웨어 같은 사이버 보안 위험을 해결하기 위한 기술적 지침을 제공합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO/IEC 27032의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"  style="background-image:url(./images/edu_iso27032_03.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-hands-helping"></i></div>
				</div>
				<div class="con_txt">
					<span>
						우리가 사이버 공간에 더욱 의존함에 따라 보안 위협의 위험이 매일 증가하고 있습니다. ISO / IEC 27032 표준은 비즈니스 프로세스의 보호 및 장기 지속 가능성과 관련된 지침을 제공합니다. 또한 사이버 공격에 가장 취약한 프로세스를 식별 할 수 있는 정책 프레임 워크를 개발할 수 있는 능력을 개인에게 부여합니다. 비즈니스와 고객이 위험에 처하지 않도록 하기 위해서는 이를 고려해야 합니다.
					</span>
					<span>
						ISO / IEC 27032는 피싱 사기, 사이버 공격, 해킹, 데이터 유출, 스파이웨어, 간첩, 방해행위 및 기타 사이버 위협으로부터 개인 정보 및 조직 데이터를 보호하는 개인에게 실제 솔루션을 제공합니다. ISO / IEC 27032 인증을 받으면 고객 및 이해 관계자에게 사이버 보안 문제를 해결하고 해결책을 제공 할 수 있음을 입증합니다.
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
						IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO/IEC 27032에 대한 교육서비스를 제공합니다. GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다. IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.
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
</article> <!--------+++++++/ <article style="display:block"> 종료 /++++++++----------->



<article><!--------+++++++/ 컨텐츠 02 IT보안 > 식품 인증 > ISO 27034  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO/IEC 27034 <span class="fc_pointer"> 심사원 교육</span></h1>
		<h2 class="sub_txt">ISO/IEC 27034 : 응용 프로그램 보안 심사원 교육/연수</h2>
	</section>
	<section class="vision_type6">

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27034 : 응용 프로그램 보안의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso27034_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						응용 프로그램 보안이란 정보 보안 프레임 워크를 지원하고 조직이 운영 중에 견고한 정보 보안 구조를 달성할 수 있도록 안내하는 국제적인 개념입니다.
                    </span>
                   <span>
                        ISO/IEC 27034는 응용 프로그램을 개발할 시 보안을 고려해 체계적으로 개발하는 문제를 다루는 응용 보안 표준입니다.
                    </span>
                    <span>
                       이 표준은 응용 시스템에서 보안 제어 및 기능을 설계, 지정, 개발, 구현, 테스트 및 유지 관리하는데 대한 명확하고 포괄적인 지침을 제공합니다.
                    </span>
                   <span>
                        조직이 ISO/IEC 27034를 만족한다면 응용 프로그램 보안 구조에서 보안 개념, 원칙 및 프로세스를 구현할 수 있도록 체계적인 접근이 가능합니다.
                    </span>
                   <span>
                        ISO/IEC 27034는 여러 비즈니스 산업에 적용되며 조직의 정보 기술, 데이터, 이해 관계자의 행동 및 응용 시스템 개발의 보안 기능에 기여합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO/IEC 27034의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso27034_02.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-microscope"></i></div>
				</div>
				<div class="con_txt">
					<span>
						응용 프로그램 보안의 목적은 조직의 보안 수준이 보호 수단의 필요한 요구 사항을 충족하는지 확인하는 것입니다. 
                   </span>
                    <span>
                        ISO/IEC 27034 표준은 전문 경력을 향상시키고 조직의 보안 방법론적 접근 방법을 향상시키는 데 중요한 기능을 합니다.
                    </span>
                   <span>
                        ISO/IEC 27034를 실행함으로써 조직은 보안 취약성을 식별하고, 복구하고, 보호 제한을 설정하기 위한 적절한 지침을 수립할 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO/IEC 27034 관련 규격</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        &#9815; ISO/IEC 27034-1:2011 <div style="padding-left:10px;">&#9816; Information technology<br>&#9816; Security techniques<br>&#9816; Application security<br>&#9816; Overview and concepts</div><br>
                        &#9815; ISO/IEC 27034-2:2015 <div style="padding-left:10px;">&#9816; Information technology <br>&#9816; Security techniques<br>&#9816; Application security <br>&#9816; Organization normative framework</div><br>
                        &#9815; ISO/IEC 27034-3:2018 <div style="padding-left:10px;">&#9816; Information technology <br>&#9816; Security techniques <br>&#9816; Application security <br>&#9816; Application security management process</div><br>
                        &#9815; ISO/IEC 27034-5:2017  <div style="padding-left:10px;">&#9816; Information technology <br>&#9816; Security techniques <br>&#9816; Application security <br>&#9816; Protocols and application security control data structure</div><br>
                        &#9815; ISO/IEC TR 27034-5-1:2018  <div style="padding-left:10px;">&#9816; Information technology <br>&#9816; Security techniques <br>&#9816; Application security <br>&#9816; Protocols and application security control data structure, XML schemas</div><br>
                        &#9815; ISO/IEC 27034-6:2016  <div style="padding-left:10px;">&#9816; Information technology <br>&#9816; Security techniques <br>&#9816; Application security <br>&#9816; Case studies</div><br>
                        &#9815; ISO/IEC 27034-7:2018  <div style="padding-left:10px;">&#9816; Information technology <br>&#9816; Security techniques <br>&#9816; Application security <br>&#9816; Assurance prediction framework</div>
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
						IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO/IEC 27035에 대한 교육서비스를 제공합니다. GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다. IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.
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
    
</article><!--------+++++++/ 컨텐츠 02  시스템인증 > 식품 인증 > ISO 27034  종료 /++++++++----------->



<article><!--------+++++++/ 컨텐츠 03 시스템인증 > 식품 인증 > FDA FSMA 시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO/IEC 27035 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO/IEC 27035 :정보 보안 사고 관리 심사원 교육/연수</h2>
	</section>
	<section class="vision_type7">

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27035 :정보 보안 사고 관리의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso27035_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						오늘날 비즈니스 세계에서 정보 보안 사고는 비즈니스를 심각하게 손상시킬 수 있는 예기치 않은 위험으로 간주됩니다. 따라서, 조직은 즉시 사건을 식별, 평가 및 효과적으로 관리하기 위한 조치를 취해야 합니다. ISO/IEC 27035 정보 보안 사고 관리는 전략적 사고 관리 계획을 수행하고 사고 대응을 준비하기 위한 모범 사례와 지침을 제공하는 국제 표준입니다.
					</span>
				</div>
			</li>
		</ul>		
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27035란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso27035_02.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-microscope"></i><em>DEDICATION</em></div>
				</div>
				<div class="con_txt">
					<span>
						ISO/IEC 27035는 정보 보안 사고를 효과적으로 방지하고 대응하기 위해 보안의 주요 원칙을 제공합니다. 또한 ISO/IEC 27035에는 정보 보안 사고, 이벤트 및 잠재적 취약성을 관리하기 위한 특정 프로세스가 통합되어 있습니다. ISO/IEC 27035는 2016년 3개의 규격으로 분리되어 관리됩니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9816; ISO/IEC 27035-1:2016: 사고 관리의 원리<br><br>
                    &#9816; ISO/IEC 27035-2:2016: 사고 대응 계획 및 준비에 대한 지침<br><br>
                    &#9816; ISO/IEC 27035-3: ICT 사고 대응 작업에 대한 지침 (개발 중)<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">정보 보안 사고 관리의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso27035_03.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-hands-helping"></i></div>
				</div>
				<div class="con_txt">
					<span>
						정보 보안 사고 관리 기능을 갖춘 조직은 비즈니스 위험을 관리할 수 있습니다. 마찬가지로 ISO/IEC 27035 프레임 워크는 효과적인 정보 보안 관리, 사고 완화 및 지속 가능한 비즈니스 프로세스 구축 능력을 갖춘 조직의 보안 구조에서 중요한 기능입니다. ISO/IEC 27035 정보 보안 사고 관리는 포괄적인 전문 지식을 갖춘 개인이 정보 보안 사고를 탐지, 보고 및 평가할 수 있도록 지원합니다.
					</span>
					<span>
						ISO/IEC 27035는 개인이 전 세계적으로 인정받는 보안 전문가가 되어 조직에서 사고의 영향을 최소화할 수 있도록 도와줍니다. 이 국제 표준은 정보 기술 보안에 관심이 있고 보안 사고로부터 조직을 보호하고 비즈니스 재정적 영향을 줄이기 위해 최대한의 기술과 지식을 배우고자 하는 모든 개인에게 적용됩니다.
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
						IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO/IEC 27035에 대한 교육서비스를 제공합니다. GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다. IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.
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
    
</article><!--------+++++++/ 컨텐츠 03  시스템인증 > 식품 인증  종료 /++++++++----------->





	
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->

</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>