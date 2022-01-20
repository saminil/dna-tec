<?php
	include_once('./_common.php');
$g5['title'] = 'ISO 26000-사회적 책임/심사원교육';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#005bab;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#339999;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
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
		<h1 class="sub_tit">ISO 26000<span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 26000: 사회적 책임/심사원 교육</h2>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title">ISO 26000: 사회적 책임 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_26000_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">  
					<span style="text-align:justify;text-justify: inter-word;">
						국제표준화기구(ISO)가 2010년 11월 1일 발표한 기업의 사회적 책임(CSR : corporate social responsibility)에 대한 국제표준이다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						이는 사회의 모든 조직이나 기업이 의사결정 및 활동 등을 할 때 소속된 사회에 이익이 될 수 있도록 하는 책임을 규정한 것이다.				
				    </span>
				    <span style="text-align:justify;text-justify: inter-word;">
						구체적으로 산업계, 정부, 소비자, 노동계, 비정부기구(NGO) 등 7개 경제주체를 대상으로 지배구조, 인권, 노동관행, 환경, 공정거래, 소비자 이슈, 공동체 참여 및 개발 등 7대 의제를 사회적 책임 이슈로 규정하고, 이에 대한 실행지침과 권고사항 등을 담고 있다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 26000의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_26000_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						우리가 살고 있는 21세기는 기업이 단순하게 이윤추구를 넘어서 더 나은 사회를 만들기 위한 책임을 가지고 경영활동을 해야 하는 시대입니다. 
                        기업의 사회적 책임(CSR, Corporate Social Responsibility)이란, 기업이 사회에 대해 가지고 있는 책임을 뜻한다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">	
                        기업의 활동 과정에서 뇌물수수를 금지하고 회계 관리를 투명하게 관리하는 등 윤리경영과 환경이나 인권보호, 사회 공헌의 가치를 개선하는 것이다. 이해관계자뿐만 아니라 지역사회, 더 나아가 인류 사회 전체에 이익이 되도록 하기 위한 기업의 책무랍니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">	
                        ISO 26000은 국제표준화기구가 제정한 기업의 사회적 책임에 대한 국제표준입니다. 이는 사회의 모든 조직이나 기업이 의사결정이나 활동을 할 때 소속된 사회에 이익이 될 수 있도록 하는 책임을 규정한 것입니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">	
                        기업이 더 많은 사회적 책임을 하도록 국제 권장 사항을 설명하는 역할도 하고 있다. 환경 정책을 위한 작업 관행, 지속 가능한 발전 및 지역 사회에 미치는 영향에 이르기까지 모든 것을 해결할 수 있다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">	
                        기업이 더 많은 사회적 책임을 하도록 국제 권장 사항을 설명하는 역할도 하고 있다. 환경 정책을 위한 작업 관행, 지속 가능한 발전 및 지역 사회에 미치는 영향에 이르기까지 모든 것을 해결할 수 있다. 
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 26000의 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_26000_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span>
                       &#10056; 책임성<br><br>
                       &#10056; 투명성<br><br>
                       &#10056; 윤리적 행동<br><br>
                       &#10056; 이해 관계자의 이익 존중<br><br>
                       &#10056; 법규 준수<br><br>
                       &#10056; 국제 행동 규범존중<br><br>
                       &#10056; 인권 존중<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">ISO 26000 기대효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>CHALLENGE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
                      &#10057; ISO 26000 지침을 준수하는 기업은 다음과 같은 혜택을 받을 수 있다.<br><br> 
                      &#10057; 기존 법률이나 규제를 준수하고, 향후 법률이나 규제를 파악하는 등 체계적인 접근법을 통해 법률 및 규제 요건에 대한 준수 체계 개선<br><br>
                      &#10057; 기업의 사회적 책임을 국제 규범 및 표준에 의거하여 이행하고 있음을 입증<br><br>
                      &#10057; 정부가 ISO 26000 준수 여부를 중요한 자격 기준으로 간주하고 있기 때문에 정부 입찰 참여시 경쟁업체 대비 경쟁력 확보<br><br>
                      &#10057; 주요 인력, 고객, 클라이언트, 사용자를 유지하고 새롭게 확보할 수 있는 능력<br><br>
                      &#10057; 직원의 사기, 헌신, 생산성 확보<br><br>
                      &#10057; 투자자, NGO, 기타 활동가, 정부가 기업을 바라보는 관점 개선<br><br>
                      &#10057; 지속 가능성 관련 위험에 대한 경영진의 인식 제고<br><br>
                      &#10057; 기업의 비즈니스 관행에 CSR 반영<br><br>
                      &#10057; 인식 제고, 지식 향상, 비즈니스 의사 결정 개선<br><br>
                      &#10057; 자원의 효율적 사용, 비용 감소에 관한 비즈니스 의사 결정 개선<br><br>
                      &#10057; 브랜드 이미지/명성 제고, 소비자 만족도 향상으로 인한 소비자 선호도 증가, 지역사회 및 환경 운동가들과의 관계 개선, 공정 거래 기업으로서의 이미지 구축 등 다양한 혜택<br><br>
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