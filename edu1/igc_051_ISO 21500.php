<?php
	include_once('./_common.php');
$g5['title'] = 'ISO 21500 심사원 교육';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
		<h1 class="sub_tit">ISO 21500  <span class="fc_pointer"> 프로젝트관리 교육</span> </h1>
		<h2 class="sub_txt">ISO 21500 은 프로젝트의 성능에 중요하고 영향을 미치는 프로젝트 관리의 개념과 프로세스에 대한 지침을 제공한다</h2>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title">ISO 21500이란? </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso21500_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						 ISO 21500 은 프로젝트의 성능에 중요하고 영향을 미치는 프로젝트 관리의 개념과 프로세스에 대한 지침을 제공한다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						본 가이드는 간단한 소개를 통해서 이해하고 프로젝트를 성공적으로 수행하고 지속 가능한 미래를 보장하는 방법에 대한 실질적인 적용 방법을 설명한다. ISO 21500은 프로젝트 관리 모범 사례를 결합하고 이를 집합적으로 전달하는 전문적 방법론이다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    공공, 민간 또는 지역사회 조직을 포함한 모든 유형의 조직에서 사용할 수 있으며, 복잡성, 규모 또는 기간에 관계없이 모든 유형의 프로젝트에 사용할 수 있다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">왜 중요한가?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso21500_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 21500은 나머지 비즈니스 운영의 중단을 최소화하면서 예산 및 시간 제약 내에서 프로젝트를 완료할 수 있도록 함으로써 중요한 프로젝트 개선을 안내해 줄 것이다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    ISO 21500은 나머지 사업 운영에 대한 중단을 최소화하면서 예산과 시간 제약 내에서 프로젝트를 완료함으로써 상당한 프로젝트 개선을 이끌어 줄 것이다. 또한 조직이 모든 프로젝트 관리 요구사항을 충족하고 프로젝트 실패의 가능성을 최소화할 수 있도록 할 것이다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 21500 인증을 획득하면 프로젝트의 진행 상황을 충분히 계획, 관리 및 모니터링 할 수 있으며, 동시에 작업을 완료하고 기한을 맞추는 데 필요한 시간을 적절하게 할당할 수 있는 기본적 기술을 보유할 수 있다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    가장 중요한 것은 베스트 프랙티스에 기초한 이 방법론은 결과를 생산적으로 문서화하는 방법에 대한 지식과 지침을 제공한다. 이 인증은 프로젝트를 이끌고 팀을 관리하는 데 필요한 기술을 보유하고 있음을 증명한다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">GPC 교육 과정 소개 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso21500_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 21500 전문가 교육을 통해 프로젝트 관리를 위한 모범 사례를 배울 수 있고, 이 교육 과정 동안 프로젝트 관리의 주요 개념과 프로세스를 이해할 수 있습니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						이 과정을 마치면 시험에 응시하여“GPC Certified ISO 21500”자격 증명을 신청할 수 있습니다. Certificate는 기본 도구, 기술, 프로세스 및 관리 방법을 이해했음을 나타냅니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">누가 참석해야 합니까?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso21500_04.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
                            &#8281; 프로젝트 관리에 관련된 개인<br><br>
                            &#8281; 프로젝트 관리의 주요 프로세스에 대한 지식을 얻으려는 개인<br><br>
                            &#8281; 프로젝트 관리 경력을 쌓고자 하는 개인<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">학습 목표</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i>
					<em>
                        PROCESS<br> 
                        METHOD<br>
                        TECHNOLOGY<br>
					
					</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
                            &#8281; 프로젝트 관리의 기본 개념 이해<br><br>
                            &#8281; 프로젝트 관리의 기본 프로세스 이해<br><br>
                            &#8281; 프로젝트 관리에 사용되는 접근법, 방법 및 기술 이해<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">교육적 접근</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>SOLUTIONS</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
				      &#8281; 강의 세션은 실제적인 질문과 예제로 설명됩니다<br><br>
                      &#8281; 실습에는 예제와 토론이 포함됩니다<br><br>
                      &#8281; 연습 시험은 인증 시험과 유사합니다<br><br>
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
	
	
	
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>