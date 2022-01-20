<?php
	include_once('./_common.php');
$g5['title'] = 'FDA FSMA / 식품안전 심사원 교육';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
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
        
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; }
	}

</style>



<div class="content_wrap">




	<section class="page_title">
		<h1 class="sub_tit">FDA FSMA <span class="fc_pointer"> 교육</span> </h1>
		<h2 class="sub_txt">식품안전 현대화 심사원 교육</h2>
	</section>
	<section class="vision_type5">
	
	
		<div class="vision_area">
		<h2 class="title">FSMA(식품안전현대화법, FOOD SAFETY MODERNIZATION ACT) 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_fda-fsma_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						FDA는 FSMA법을 통해 미국으로 수출하는 모든 식품 관련 기업이 식품안전시스템을 구비하고 위해요소가 있는 식품에 대해 리콜 조치를 취할 수 있는 권한을 갖게 되어, 식품 안전문제를 효과적으로 예방할 수 있게 되었습니다.

					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                        미국 식품 공급망에 관련된 모든 국가와 기업이 FSMA의 대상이 될 수 있습니다. 따라서 FSMA에 대응해 미국으로의 식품 수출을 원활히 추진하기 위해서는 미국으로 식품을 수출하는 기업들의 준비가 필요합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">FSMA (식품안전현대화법, FOOD SAFETY MODERNIZATION ACT)란 ?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_fda-fsma_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						FDA FSMA 3자 인증은 미국 이외의 지역에 위치한 식품 생산 시설에 대하여 FSMA 규정 준수 여부를 제 3의 공인된 인증기관이 심사를 실시하여 요구사항에 부합할 경우 인증서를 발행하는 제도입니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						FSMA는 미국 정부에서 2011년 1월 4일 ‘사전 예방을 통한 식품 공급 안정성 및 국민건강 보호’를 목적으로 제정되었습니다.
                        FDA는 FSMA법을 통해 미국으로 수출하는 모든 식품 관련 기업이 식품안전시스템을 구비하고 위해요소가 있는 식품에 대해 리콜 조치를 취할 수 있는 권한을 갖게 되어, 식품 안전문제를 효과적으로 예방할 수 있게 되었습니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                        미국 식품 공급망에 관련된 모든 국가와 기업이 FSMA의 대상이 될 수 있습니다. 따라서 FSMA에 대응해 미국으로의 식품 수출을 원활히 추진하기 위해서는 미국으로 식품을 수출하는 기업들의 준비가 필요합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">PCQI란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_fda-fsma_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						PCQI는 식품안전예방관리전문가 (PCQI: Preventive Controls Qaulified Individual)입니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						FSMA 규정에 따르면 식품제조회사는 위해 요소 분석 뿐만 아니라 잠재적인 위험성을 사전에 예방관리 하기 위한 식품안전계획을 수립하고 운영하도록 요구하고 있으며 또한 식품안전예방관리전문가에 의해 식품안전계획이 수립되어야 하고 예방관리의 유효성이 확인되어야 하며 관련 기록은 정기적으로 재검토할 것을 요구하고 있습니다.<br>
					</span>
				</div>
			</li>
		</ul>
		<dl>
			<dd>
				<span style="font-weight:bold;">PCQI 교육 내용은 다음과 같습니다.</span><br><br>		
                &#8280;	FSMA 대응을 위한 예방관리 개념 교육  <br> 
                &#8280;	식품 안전 계획 개요<br>
                &#8280;	GMP와 기타 선행요건 프로그램 운영<br>   
                &#8280;	생물학적 식품안전 위해요소<br> 
                &#8280;	화학적, 물리적, 경제적 측면에서의 식품안전 위해요소<br>
                &#8280;	식품안전 계획의 개발을 위한 사전 단계<br> 
                &#8280;	식품안전 계획의 준비를 위한 지원 (자료)<br>
                &#8280;	위해요소 분석과 예방관리점의 결정-개요<br>
                &#8280;	위해요소 분석과 예방관리점의 결정<br>
                &#8280;	예방관리<br>
                &#8280;	식품의 알러지원 예방관리<br>
                &#8280;	위생 예방관리<br>
                &#8280;	공급망 예방관리<br>
                &#8280;	검증 및 유효성 확인절차<br>  
                &#8280;	기록의 보관 및 관리<br>
                &#8280;	회수계획<br>
                &#8280;	법규개요 (cGMP, 위험성분석, 위험성 기반의 예방관리)<br>	
			</dd>
		</dl>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">IGC 인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>SOLUTION</em></div>
				</div>
				<div class="con_txt">
					<span>
						IGC인증원은 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 3자 인증기관으로 인정받았습니다.
                        (인정정보 확인_FDA 사이트 https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification)

					</span>
					<span>
						FDA FSMA 3자 인증을 위하여 식품 생산기업은 필히 한 명 이상의 PCQI 전문가를 확보하여야 합니다. IGC는 FSPCA로부터 PCQI 양성과정과 FSVP 전문가 양성에 대한 교육권한 (Lead Instructor 지정)을 부여받아 FSMA 및 PCQI, FSVP 전문가 양성 교육 서비스를 제공합니다.
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