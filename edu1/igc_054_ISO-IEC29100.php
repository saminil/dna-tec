<?php
	include_once('./_common.php');
$g5['title'] = 'ISO 29100 / 경험, 위험 및 규정 준수';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

	<section class="page_title">
		<h1 class="sub_tit">ISO 29100 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 29100 개인정보 프레임워크(Privacy Framework) / 경험, 위험 및 규정 준수</h2>
	</section>
	<section class="vision_type5">
		
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
	
	
	
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>