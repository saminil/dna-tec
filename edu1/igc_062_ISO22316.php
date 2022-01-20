<?php
	include_once('./_common.php');
$g5['title'] = 'ISO 22316 / 연속성, 복원력 및 복구';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	/*.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#005bab;}*/
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}
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


	<section class="page_title">
		<h1 class="sub_tit">ISO 22316 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 22316 : 회복탄력성, 조직 레질리언스, 원리와 속성 심사원 교육/연수</h2>
	</section>
	<section class="vision_type5">
	
	
	
	
		
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
	
	
	
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>