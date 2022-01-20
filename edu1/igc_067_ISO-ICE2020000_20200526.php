<?php
	include_once('./_common.php');
$g5['title'] = '서비스관리 | ISO/IEC 20000';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}*/
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; text-align:justify;text-justify:inter-word;}
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    
    
     
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
        
        
        
	}

</style>



<div class="content_wrap">



	<!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
		<div class="tab_menu tab01">
			<ul style="display:inline-block;position:relative;text-align:center;">
				<!-- 처음 활성화 메뉴에 class="on" -->
				<li class="on"><a href="javascript:;">ISO/IEC 20000</a></li>
				<li><a href="javascript:;">ISO 55001</a></li>
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
		<h1 class="sub_tit">ISO/IEC 20000 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO/IEC 20000: IT 서비스 관리  심사원 교육/연수</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO/IEC 20000: IT 서비스 관리의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso20000_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;" ><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						오늘날 정보 기술은 기업의 규모에 관계없이 가장 중요한 영역으로 발전하고 있습니다. 그러므로 모든 기업은 비용에 있어 효율적이고, 신뢰할 수 있고, 효과적인 IT 서비스 관리를 필요로 합니다. 기업 내부에서 IT 서비스를 관리하는 조직 또는 아웃소싱을 통해 IT 서비스를 제공하는 조직은 ISO/IEC 20000을 통해 고객에게 효과적이고 효율적인 IT 프로세스 운영을 제공할 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO/IEC 20000란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso20000_02.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;" ><i class="fas fa-microscope"></i></div>
				</div>
				<div class="con_txt">
					<span>
						ISO/IEC 20000은 IT 서비스 조직이 서비스 관리 시스템을 계획, 수립, 구현, 운영, 모니터링, 검토, 유지 및 개선하기 위한 요구 사항을 명시한 국제 표준입니다. 이 규격은 BSI(영국왕립표준협회)에 의해 제정된 영국 표준 BS 15000 규격을 국제표준화기구에서 표준화한 것으로, ISO/IEC 20000-1의 범위 내에서 서비스 관리 시스템의 적용에 대한 지침을 포함하고 있습니다.<br>
                        ISO/IEC 20000의 목적은 다음과 같습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9817; 고객에게 제공하는 IT서비스의 수준을 객관적으로 평가<br><br>
                    &#9817; 고객 요구사항을 신속하게 대응하고 만족하기 위한 서비스 중심의 프로세스 제공<br><br>
                    &#9817; IT 조직 기능에 부합하는 견고하고 통합화된 프로세스의 틀을 제공<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">IT 서비스 관리의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt">
					<span>
						ISO/IEC 20000을 통해 조직은 IT 서비스 관리 시스템을 체계적으로 구축합니다. 공식 체계의 구축으로 조직의 서비스 및 프로세스를 개선하여 시간과 비용이 절감되고, 반복되는 오류와 사고를 예방합니다. 이를 통해 조직은 고객에게 IT 시스템에 대한 확신을 주고 서비스 품질을 개선하여 경쟁력을 확보합니다. 
                   </span>
                    <span>
                        ISO/IEC 20000은 개인이 ISO/IEC 20000의 목적 및 요구사항을 이해하게 되고, 이를 기반으로 IT 서비스 경영시스템을 관리하여 기업의 IT 서비스 관리 수준을 향상시킬 수 있도록 지원합니다. 또한 ISO/IEC 20000 교육을 통해 모든 개인은 심사 시 필요한 기술 및 지식을 습득하여 ITSM 심사를 수행하고 대응할 수 있도록 지원합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">수강대상</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>CHALLENGE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9818; IT service management 관리 책임자<br><br>
                    &#9818; IT service management 컨설턴트<br><br>
                    &#9818; 기업의 IT system 관리 담당자<br><br>
                    &#9818; ISO/IEC 20000 인증을 취득하였거나 준비중인 기업의 실무자
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
						IGC는 IPC MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO/IEC 20000에 대한 교육서비스를 제공합니다. GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다. IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.
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



<article><!--------+++++++/ 컨텐츠 02 심사원 교육 > 서비스관리 > ISO 55001 자산경영관리 시스템  인증 > ISO 55001  시작 /++++++++----------->
   
   컨텐츠 02 심사원 교육 > 서비스관리 > ISO 55001 자산경영관리 시스템  인증  ISO 55001 영역입니다.
    
</article><!--------+++++++/ 컨텐츠 02  심사원 교육 > 서비스관리 > ISO 55001 자산경영관리 시스템  인증 > ISO 55001  종료 /++++++++----------->



	
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->

</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>