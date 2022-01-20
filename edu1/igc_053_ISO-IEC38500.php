<?php
	include_once('./_common.php');
$g5['title'] = 'ISO/IEC 38500 / 경험, 위험 및 규정준수';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
		<h1 class="sub_tit">ISO/IEC 38500 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO / IEC 38500은 정보 기술 (IT)의 기업 지배 구조를 안내하기 위해 만들어진 국제 표준</h2>
	</section>
	<section class="vision_type5">

		<div class="vision_area">
		<h2 class="title">ISO/IEC 38500 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso38500_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
						ISO/IEC 38500은 정보 기술 (IT)의 중요성을 이해하는 데 도움이 되는 원칙, 정의 및 모델을 제공합니다. 이 표준은 모든 유형의 조직이 정보 기술 (IT)의 사용을 평가, 지시 및 모니터링하는 데 도움을 주기위한 것입니다.  
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
						IT 사용 정도에 관계없이 현재 및 향후 IT 사용과 관련된 관리 관행 및 의사 결정으로 구성됩니다. 이 표준의 목적은 IT 사용을 관리하고 IT 거버넌스 어휘를 설정하는데 있어 관리 기관에 정보를 제공하고 안내함으로써 모든 조직에서 IT를 효과적이고 효율적이며 수용 가능한 사용을 촉진하는 것입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">Information technology Governance 원칙</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso38500_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span>
                      &#8281; 책임 (Responsibility)<br><br>
                      &#8281; 전략 (Strategy)<br><br>
                      &#8281; 획득 (Acquisition)<br><br>
                      &#8281; 성과 (Performance)<br><br>
                      &#8281; 부합 (Conformance)<br><br>
                      &#8281; 행동 (Human behavior)<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		<div class="vision_area">
		<h2 class="title">ISO/IEC 38500 중요한 이유</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso38500_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
						ISO/IEC 38500은 IT 조직이 조직의 성과에 긍정적으로 기여할 수 있도록 관리 기관을 지원합니다. 따라서 ISO/IEC 38500 요구 사항을 충족함으로써 조직은 IT 사용을 모니터링하고 비즈니스 연속성 및 지속 가능성을 보장하며 IT를 비즈니스 요구에 맞추고 IT 자산의 적절한 구현 및 운영을 보장할 수 있습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
                        또한 이 표준은 ISO/IEC 38500에서 설정 한 우수한 IT 거버넌스를위한 원칙과 모델을 준수하는 프레임 워크를 구축, 구현 및 지속적으로 개선하는 데 필요한 전문 지식과 지식을 얻는 데 도움이 됩니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
					    위험 관리, IT 사용으로 인한 기회 활용 촉진, ISO/IEC 38500 원칙 및 IT 시스템의 부적절한 적용 방지에 필요한 기술. 이 표준을 통해 비즈니스 전략을 이해하고 기술 전략에 맞게 조정하고 회사에 IT 거버넌스 모범 사례를 조언할 수 있습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
                        자격을 갖춘 직원에 대한 요구 사항이 증가함에 따라 조직은 인증을 받고 적절한 경험을 가진 개인에게 훌륭한 경력 기회를 제공하고 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">ISO/IEC 38500을 통한 기대효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>BUSINESS <br> EXTENTION</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
					1.	체계적인 IT 관리체계 구축을 통한 법규 및 책임 준수<br>
                        &nbsp; &nbsp; (보안 표준, 법규 준수, 지적 재산권)<br><br>
                    2.	경영진이 IT 활용을 통해 조직의 성과에 기여할 수 있도록 지원<br>
                        &nbsp; &nbsp; (비즈니스 연속성 확보, 자원의 효율적 배분, 비즈니스 혁신을 통한 비용 절감)<br><br>
                    3.	IT 투자 관리<br><br>
                    4.	IT 위험 최소화<br><br>
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
					<div class="icon"><i class="fas fa-microscope"></i><em>SOLUTIONS</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
					IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO/IEC 38500에 대한 교육서비스를 제공합니다.<br><br> 
					GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. <br><br>
					IGC는 GPC로부터 연수기관으로 공식 지정을 받아 인증 및 교육서비스의 제공이 가능합니다.<br><br>
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
	         		<span >
	         		    IGC는 IT 기술이 발전함에 따라 IT 및 정보보안의 중요성을 인식하여 다양한 국제 표준에 대한 다음과 같은 인증서비스 및 교육을 제공함으로써 인증시장을 선도하고 있습니다.  
	         		</span>
	         		<br><br>
	         			<li><p><em><strong>01</strong></em><span>ISO/IEC 27001</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>ISO 20000-1</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>ISO 22301</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>IT 및 정보보안 교육</span></p></li>
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