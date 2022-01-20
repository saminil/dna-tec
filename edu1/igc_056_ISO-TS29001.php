<?php
	include_once('./_common.php');
$g5['title'] = '교통, 통신 및 에너지';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#339999;}  
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}  
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#005bab;}  
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
    
    
    /* 교통, 통신 및 에너지 ISO 50001 국제에너지 경영시스템 심사원 교육 시작 */
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
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background:#339999;}  
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
    /* 교통, 통신 및 에너지 ISO 50001 국제에너지 경영시스템 심사원 교육 종료 */
    
    
    /* 교통, 통신 및 에너지 ISO 39001 도로교통안전관리 심사원 교육 시작 */
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
    .vision_type7 .vision_area:nth-child(4) ul li .i_box {background:#339999;}  
    .vision_type7 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}  
    .vision_type7 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
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
    /* 교통, 통신 및 에너지 ISO 39001 도로교통안전관리 심사원 교육 종료 */
    
    
    
    
    
    
    
    
    
    
    
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
    
    /*table */
    td,tr{padding:6px;}
    table{border-spacing:10px;}
    
    
    
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
 
	}

</style>



<div class="content_wrap">


		<!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
		<div class="tab_menu tab01">
			<ul style="display:inline-block;position:relative;text-align:center;">
				<!-- 처음 활성화 메뉴에 class="on" -->
				<li class="on"><a href="javascript:;">ISO/TS 29001</a></li>
				<li><a href="javascript:;">ISO 50001</a></li>
				<li><a href="javascript:;">ISO 39001</a></li>
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
		<h1 class="sub_tit">ISO/TS290001 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">석유 및 천연가스산업 / 특정분야 품질경영시스템 / 제품 및 서비스 제공 조직의 요구사항</h2>
	</section>
	<section class="vision_type5">
	
		<div class="vision_area">
		<h2 class="title">ISO/TS290001의 소개</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso29001_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO/TS 29001은 국제표준화기구(ISO)와 미국석유협회(API)가 공동으로 제정한 품질경영시스템(QMS)으로 석유, 석유화학 및 천연가스 분야의 국제 규격입니다. 즉 오일 및 가스 공급망에서 운영 중인 기업은 ISO/TS 29001 품질 경영 시스템 표준을 충족해야 합니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						표준의 목적은 공급사슬에서 또한 서비스 제공자로부터 지속적 개선, 결합 예방 강조 및 변경과 낭비 감소를 제공하기 위한 품질경영시스템의 개발을 돕는 것과 인증심사가 중복되는 것을 피하고자 하며 석유 및 천연가스 산업분야를 위하여 품질경영시스템에 일반적 접근방법을 제공하고자 합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/TS290001의 특징</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso29001_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 9001 품질경영시스템 표준이 전 산업계에 공통으로 적용되는 일반적인 품질경영시스템 표준이라면, ISO/TS 29001은 석유화학 및 가스 플랜트 산업에 특화된 표준이며 요건이 보다 강화되고 구체적인 것이 특징입니다. 즉 ISO/TS 29001 표준은 국제적으로 인정받는 ISO 9001 품질 경영 표준의 확장입니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						이 표준은 환경경영, 보건안전경영, 재정경영 또는 위험경영 등과 같은 다른 경영시스템에 해당하는 요구사항을 포함하지 않지만 조직이 자체의 품질경영시스템과 관련된 경영 시스템 요구사항과 배열을 맞추거나 통합하는 것을 가능하게 합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/TS290001의 기대효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso29001_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						&#10049; ISO 29001은 전 세계 석유 및 가스 산업의 품질 경영시스템 요구사항에 대한 공통적인 토대가 될 것입니다. 따라서 복수의 심사를 최소화할 수 있습니다. 이는 서류 작업 및 비용 등 비즈니스에 방해가 되는 요소를 줄일 수 있는 추가적인 이점을 제공합니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						&#10049; 공급망 및 서비스 제공자로부터의 제품 결함을 방지하고 편차와 낭비를 감소시키며, 지속적인 개선 모델을 제공합니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    &#10049; 서비스 제공업체를 비롯해 공급망 내에서 결함 방지와 변형 및 폐기물 감소를 강조함으로써 지속적인 개선 또는 비용절감, 비즈니스 위험 관리 등을 통해 석유, 석유화학 및 천연가스 산업분야에서의 국제적인 경쟁력을 확보하게 도와줍니다.
					</span>
				</div>
			</li>
		</ul>
		</div>		
		
		<div class="vision_area">
		<h2 class="title">ISO/TS29001의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>SAFETY</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
						석유 및 가스 산업이 재앙적인 위협에 가장 많이 노출되어 있다는 것을 감안할 때 품질 관리 프로세스와 자격을 갖춘 전문가가 이 분야에서 매우 중요합니다.                         
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
						유해한 액체 및 가스를 잘못 취급하는 경우 사람들과 환경에 심각한 피해를 줄 수 있습니다. 따라서, 매끄러운 운영에 대한 안전과 유지를 보장하기 위해서는 높은 수준의 작동신뢰성이 업계에 필수적입니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
					    이는 품질 및 안전 측면에서 최고의 제품 / 서비스를 제공하는 기업으로 인정받기 때문에 조직에 유리합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">표준 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>STANDARD <br> REQUIREMENTS</em></div>
				</div>
				
				<!------// 테이블 시작--------->
				<div class="con_txt">
					<table border="1" cellpadding="0" cellspacing="0">
                        <col width="412">
                        <tr>
                          <td width="412">1. 적용범위</td>
                        </tr>
                        <tr>
                          <td width="412">    1.1 일반사항</td>
                        </tr>
                        <tr>
                          <td width="412">    1.2&nbsp; 적     용</td>
                        </tr>
                        <tr>
                          <td width="412">2. 인용표준</td>
                        </tr>
                        <tr>
                          <td width="412">3. 용어와 정의</td>
                        </tr>
                        <tr>
                          <td width="412">    3.1 석유, 석유화학 및 천연가스 산업의    용어와 정의</td>
                        </tr>
                        <tr>
                          <td width="412">4. 불만처리 기본 원칙</td>
                        </tr>
                        <tr>
                          <td width="412">    4.1 일반 요구사항</td>
                        </tr>
                        <tr>
                          <td width="412">    4.2 문서화 요구사항</td>
                        </tr>
                        <tr>
                          <td width="412">5. 경영자 책임</td>
                        </tr>
                        <tr>
                          <td width="412">    5.1 경영자 의지</td>
                        </tr>
                        <tr>
                          <td width="412">    5.2 고객중심</td>
                        </tr>
                        <tr>
                          <td width="412">    5.3 품질방침</td>
                        </tr>
                        <tr>
                          <td width="412">    5.4 기획</td>
                        </tr>
                        <tr>
                          <td width="412">    5.5 책임, 권한 및 의사소통</td>
                        </tr>
                        <tr>
                          <td width="412">    5.6 경영검토</td>
                        </tr>
                        <tr>
                          <td width="412">6. 자원관리</td>
                        </tr>
                        <tr>
                          <td width="412">    6.1 자원 확보</td>
                        </tr>
                        <tr>
                          <td width="412">    6.2 인적 자원</td>
                        </tr>
                        <tr>
                          <td width="412">    6.3 기반구조</td>
                        </tr>
                        <tr>
                          <td width="412">    6.4&nbsp; 업무환경</td>
                        </tr>
                        <tr>
                          <td width="412">7. 제품 실현</td>
                        </tr>
                        <tr>
                          <td width="412">    7.1 제품실현 기획</td>
                        </tr>
                        <tr>
                          <td width="412">    7.2 고객 관련 프로세스</td>
                        </tr>
                        <tr>
                          <td width="412">    7.3 설계 및 개발</td>
                        </tr>
                        <tr>
                          <td width="412">    7.4 구매</td>
                        </tr>
                        <tr>
                          <td width="412">    7.5 생산 및 서비스 제공</td>
                        </tr>
                        <tr>
                          <td width="412">    7.6&nbsp; 모니터링 장비 및 측정 장비의 관리</td>
                        </tr>
                        <tr>
                          <td width="412">8. 측정, 분석 및 개선</td>
                        </tr>
                        <tr>
                          <td width="412">    8.1 일반사항</td>
                        </tr>
                        <tr>
                          <td width="412">    8.2 모니터링 및 측정</td>
                        </tr>
                        <tr>
                          <td width="412">    8.3 부적합 제품의 관리</td>
                        </tr>
                        <tr>
                          <td width="412">    8.4 데이터의 분석</td>
                        </tr>
                        <tr>
                          <td width="412">    8.5 개  선</td>
                        </tr>
                      </table>
                    
                  <!--------// 테이블 종료---------->  
                    
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
	         		IGC인증원의 전문가를 통하여 석유 및 가스산업의 국제 요구사항에 대해 학습하여 보다 폭 넓은 이해를 가질 수 있습니다. <br>
	         		이는 귀사의 자원과 가능성이 국제 무대에서 보다 한 단계 도약할 수 있는 발판이 될 것입니다.  뿐만 아니라 IGC인증원 품질시스템과 관련한 다양한 교육과 인증서비스도 함께 제공하고 있습니다.</span><br><br>
	         			<li><p><em><strong>01</strong></em><span>ISO 9001: 품질경영시스템 심사원 교육 및 인증</span></p></li>
	         			<li style="float:none;"><p><em><strong>02</strong></em><span>ISO 14001: 환경경영시스템 심사원 교육 및 인증</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>ISO 45001: 안전보건시스템 심사원 교육 및 인증</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
</article> <!--------+++++++/ <article style="display:block"> 종료 /++++++++----------->



<article><!--------+++++++/ 컨텐츠 02 시스템인증 > 교통,통신 및 에너지 인증 > ISO 50001  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 50001 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt"> ISO 50001은 국제 에너지경영시스템의 기준으로서 <br>EN 16001과 같은 국제적이고 지역적인 기준이 따르고 있는 첫 번째 글로벌 규격(EnMS) </h2>
	</section>
	<section class="vision_type6">

				<div class="vision_area">
		<h2 class="title">ISO 50001 인증이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso50001_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
					ISO 50001은 국제 에너지경영시스템의 기준으로서 EN 16001과 같은 국제적이고 지역적인 기준이 따르고 있는 첫 번째 글로벌 규격(EnMS) 입니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
						조직이 구축ㆍ운영하는 에너지경영시스템에 대하여 공인기관이 그 EnMS 표준 요구사항 이행에 대한 제 3자 적합성 평가ㆍ인증이며, 조직이 원가절감을 위해 에너지효율 향상 활동을 통합적이고 체계적인 경영전략으로 구축하여 전사적 지속적으로 추진할 수 있는 기술측면과 경영측면이 조화된 에너지관리 시스템 표준입니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
					    ISO 50001의 인증목적은 과학적인 에너지 절감/효율개선을 통한 Cost Leadership을 창출하는 것에 있습니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 50001의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso50001_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
                    효과적인 에너지경영 시스템의 실행은 조직이 에너지 개선을 도모할 수 있도록 도와줍니다.<br><br>
                    &#10051; 에너지 자산 즉 효율적인 에너지 사용을 위한 지원<br><br>
                    &#10051; 에너지원의 관리에 투명성과 의사소통 체계확보<br><br>
                    &#10051; 최적화된 에너지 경영을 도모<br><br>
                    &#10051; 새로운 에너지 효율 기술의 적용을 평가하고 우선순위를 설정하기 위한 지원<br><br>
                    &#10051; 전반적인 공급체계에 에너지 효율을 위한 프레임워크 제공<br><br>
                    &#10051; 온실가스 감축을 위한 에너지 경영 개선 체계 확보<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO 50001의 기대효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso50001_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
                        &#10043; 비용 감소: 효율적인 에너지 사용은 비용 절감<br><br>
                        &#10043; 법규와 생산성: 생산성을 향상 및 에너지 법규준수<br><br>
                        &#10043; 위험 감소: 지속적인 에너지 성과 개선 및 에너지 보안 위험 감소<br><br>
                        &#10043; 브랜드 가치: 이해관계자의 신뢰성, 노사관계 및 브랜드 가치의 증가<br><br>
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
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#10031; IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 50001에 대한 교육서비스를 제공합니다. <br><br>
                    &#10031; GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. <br><br>
                    &#10031; IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다.<br><br> 
                    &#10031; IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
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
	         		IGC는 ISO 50001에 대한 전 과정에 대한 서비스를 제공합니다.</span><br><br>
	         			<li style="float:none;"><p><em><strong>01</strong></em><span>ISO 50001 시스템 인증</span></p></li>
	         			<li style="float:none;"><p><em><strong>02</strong></em><span>ISO 50001 교육 가능 연수기관 안내</span></p></li>
	         			<li style="float:none;"><p><em><strong>03</strong></em><span>ISO 50001 심사원 인증</span></p></li>
	         			<br><br>
	         		<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
                        또한, 개인인증기관인 GPC와의 협력을 통해 다음과 같은 여러 분야에 관련된 교육 관련 서비스를 제공하고 있습니다.</span><br><br>	
	         			
	         			<li><p><em><strong>1</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>2</strong></em><span>보건, 안전 및 환경</span></p></li>
	         			<li><p><em><strong>3</strong></em><span>품질경영시스템</span></p></li>
	         			<li><p><em><strong>4</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
	         			<li><p><em><strong>5</strong></em><span>연속성, 복원력 및 복구</span></p></li>
	         			<li><p><em><strong>6</strong></em><span>IT 보안</span></p></li>
	         			<li><p><em><strong>7</strong></em><span>서비스관리</span></p></li>
	         			<li><p><em><strong>8</strong></em><span>-	서비스관리</span></p></li>
	         		
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
    
</article><!--------+++++++/ 컨텐츠 02  시스템인증 > 교통,통신 및 에너지 인증 > ISO 50001  종료 /++++++++----------->



<article><!--------+++++++/ 컨텐츠 03 교육 > 교통, 통신 및 에너지 인증 > ISO 39001 시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 39001 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 39001 도로 교통 안전관리 교육</h2>
	</section>
	<section class="vision_type7">

		<div class="vision_area">
		<h2 class="title">ISO 39001 도로 교통 안전관리 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso39001_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:12%;">
                      ISO 39001:2012 Road Traffic Safety(RTS) management system
                      ISO 39001 은 도로 교통 안전 관리 시스템에 대한 최소 요구사항을 설정하며, 도로, 교통 사고와 관련한 심각한 부장 발생 및 리스크를 감소 하고, 정부, 도로 교통 당국, 안전 단체 및 민간 기업은 매년 도로에서 사망 또는 부상 당한 사람들의 수 증가로 인하여 이 표준이 개발되었습니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:12%;">				
                      또한, 도로 교통 안전 관리는 기업에 업계 인식 방법을 제공하고 위험을 줄일 수 있으며, 중소기업이 모두 도로 교통 안전에 대한 구조적인 적은에서 최상의 결과를 얻을 수 있다는 것을 의미합니다
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 39001 이란? </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso39001_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
                        ISO 39001:2012 Road Traffic Safety(RTS) management system은 세계 각국이 참여한 ISO/TC 241에 의해 제정된 도로교통안전 경영시스템 국제 표준입니다. 
                     </span>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
                        ISO 39001은 교통사고 사망자나 심각한 부상자를 줄이는 것을 목적으로 개발되었으며, 조직의 도로 교통안전을 위한 경영시스템의 요구사항을 정하고 있습니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
						ISO 39001 은 조직이 도로교통 사고로 인한 사망 및 심각한 부상의 발생률과 위험을 줄이고 궁극적으로 제거하는데 도움이 되는 표준입니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
					    ISO 39001을 기반으로 하는 도로 교통 안전 관리 시스템은 도로 교통 시스템과 상호 작용하는 공공 기관과 민간 기업 모두에 적용 됩니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 39001의 중요성 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso39001_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        도로 교통 안전 무시의 결과는 사소한 사고가 끔찍한 사고로 되는 것과 관련되어 비극이 될 수 있습니다. 
                    </span>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        ISO 39001은 도로 교통 안전에 대한 위협을 확인하고 운영 리스크를 최소화하기 위해 모든 규모의 기업에 적용할 수 있습니다. 
                    </span>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        표준은 법률, 산업 및 이해 관계자의 요구사항을 충족시키는 동시에 지역 사회와 환경에 미치는 영향을 줄이기 위함입니다. 
                    </span>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">   
                        ISO 39001의 장점은 조직 안전 및 사회적 책임 목표를 충족시킬 수 있으며, 더 나은 관리를 통해 효율성을 향상시키는 방법을 확인할 수 있습니다. 
                    </span>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                         ISO 39001은 도로 교통 안전 리스크를 파악하고 관리하고, 사고를 줄일 수 있고, 안전한 노동 조건을 제공하며 이해 관계자의 기대를 충족할 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">ISO 39001 적용대상</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>PEOPLE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">			
                      <p style="font-weight:bold;">&#10051;  ISO 39001 표준에 정의되어 있는 적용 대상</p><br>
                      1.	도로교통안전 성과를 증진하고자 하는 조직<br> 
                      2.	도로교통안전경영시스템의 수립 및 실행, 유지, 개선을 하고자 하는 조직<br>
                      3.	조직 내 도로교통안전방침의 적합성을 확립하고자 하는 조직<br>
                      조직 내 도로교통안전방침과 이 국제표준과의 적합성을 입증하고자 하는 조직<br><br>
                    </span>
                    
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
                      <p style="font-weight:bold;">&#10051;  ISO 39001 적용 대상 예시</p><br>
                      1. 승객ㆍ화물운송과 관련된 조직(버스, 택시, 트럭운송, 렌터카 등)<br> 
                      2. 손해보험사<br>
                      3. 도로교통 관련법규의 제정ㆍ규제와 관련된 조직(국가, 자치단체)<br>
                      4. 도로설계ㆍ시공ㆍ운용ㆍ보수와 관련된 조직(도로운영, 관리회사)<br>
                      5. 물류ㆍ영업ㆍ통근 시 자동차를 사용하는 조직(공장, 창고, 물류서비스, 금융서비스 업 등)<br>
                      6. 운송수요가 발생되는 설비운영과 관련된 조직(주차장설계ㆍ관리회사 등)<br>
                      7. 자동차ㆍ자동차부품 설계ㆍ제조ㆍ보수ㆍ검사와 관련된 조직(자동차회사, 부품회사, 정비공장 등)<br>
                      8. 구급 구명 의료 준비와 관련된 조직(구급의료기관, 병원 등)<br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">왜 IGC 인가? </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>SOLUTIONS</em></div>
				</div>
				<div class="con_txt">
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
                     ISO 39001은 기업 내에서 안주하지 않고, 향상된 일관성, 도로 교통 안전 관리 모범 사례에 대한 요구사항을 설정합니다. 기업이 도로 교통 안전 리스크를 관리하기 위해 빠듯한 예산과 시간이 넉넉하지 않다는 것을 잘 알고 있습니다. 리스크 또한 운영하는 비즈니스 만큼이나 고유하다는 것을 잘 알고 있습니다. 
                    </span>
                    
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
                     ISO 39001 규정 준수에 불 필요한 비용과 복잡성을 제거하여 필요한 서비스만 포함하는 맞춤형 패키지 서비스를 제공합니다. 
                     따라서 저희 IGC는 보건 및 안전 관리를 향상시킬 수 있도록 사업부에 맞게 맞춤 설정 가능한 패키지를 제공하며 이를 통해 불필요한 서비스 비용을 제거할 수 있습니다.
                    </span>
                   <span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
                    하나의 관리 시스템에 모든 관련 관리 방법과 프로세스를 접목하여 귀하의 기업만의 도로 교통 안전 프레임워크를 설계하기 위한 지침을 제공합니다.
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
    
</article><!--------+++++++/ 컨텐츠 03  교육 > 교통, 통신 및 에너지 인증 ISO 39001 종료 /++++++++----------->




	
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->

</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>