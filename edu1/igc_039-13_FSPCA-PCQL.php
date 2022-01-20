<?php
	include_once('./_common.php');
$g5['title'] = 'FSPCA 승인 PCQI 양성과정';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#005bab;}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
    
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
        
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역, 우리가 제공하는 서비스 모바일 View */
	}

</style>


<div class="content_wrap">



	<section class="page_title">
		<h1 class="sub_tit">FSPCA 승인 PCQI <span class="fc_pointer"> 양성과정</span> </h1>
		<h2 class="sub_txt">FDA FSMA 3자 인증을 위하여 식품 생산시설은 필히 한 명 이상의 PCQI 전문가 확보</h2>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title">FSPCA 승인 PCQI 양성과정 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/EDU_FSPCA_PCQI_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
					
						FDA FDMA법에 의거해 FDA FSMA 3자 인증을 위하여 식품 생산시설은 필히 한 명 이상의 PCQI 전문가를 확보하여야 합니다.  

					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						PCQI란 각 기업 내, Food Safety Plan(식품안전 계획)을 수립하는 인원이며, 각 기업은 적정 인원의 Preventive Control Qualified Individual (PCQI: 자격을 가진 예방관리 담당자)을 통해 Food Safety Plan을 수립하여 FSMA법을 준수할 수 있습니다.
					</span>
					
					<span style="text-align:justify;text-justify: inter-word;">
                        이 자격은 PCQI 교육 수행을 미국 FDA로부터 위탁 받아 수행하는 미국 내, 지정 기관인 FSPCA(Food Safety Preventive Control Alliance : 식품 안전 예방 관리 협회)가 주관하는 PCHF(Preventive Controls for Human Food) Lead Instructor 교육 과정을 이수한 이후 certificate을 획득한 인원에게 부여됩니다.
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
					<div class="icon" style="background-image:url(./images/EDU_FSPCA_PCQI_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						PCQI(Preventive controls qualified individual) 예방관리(통제)에 관해 자격을 갖춘 자는 위해에 기반을 둔 예방관리의 개발 및 적용을 통해 FDA가 적합하다고 인정하는 표준화된 커리큘럼과 동등한 트레이닝을 성공적으로 이수하여 자격이 주어지거나 또는 그렇지 않으면 식품안전시스템의 개발 및 적용 경력을 통해 자격이 주어진 개인을 뜻합니다.

					</span>
					<span style="text-align:justify;text-justify: inter-word;">			
                        식품에 대한 예방적 방제규정에는 특정 식품안전 관련업무는 반드시 PCQI에 의해 수행되거나 관리감독을 받아야 한다고 명시되어 있어, 해당 식품시설에서 PCQI를 고용하거나 기술적 자                        문을 받는 것을 의무로 규정하고 있습니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">			
                        PCQI의 자격을 취득하기 위해서 식품안전 관련 종사자는 FSPCA에서 실시하는 US FDA 공인 표준 교과과정을 성공적으로 이수해야 합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">PCQI의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						식품에 대한 예방적 방제규정에 의하면, PCQI는 첫째, 식품안전계획을 수립하고 둘째, 예방적 방제에 대해 검증하고 셋째, 기록을 검토하고 넷째, 식품안전계획을 재분석하는 업무를 수행하거나 관리감독하도록 되어있습니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						이와 같이 PCQI의 고용은 현재 식품에 대한 예방적 방제규정 요건을 충족시키기 위한 필수요건입니다. PCQI는 해당 식품관련시설의 고용인일 수도 있으며, 또는 식품안전계획 수립 시 외부 PCQI의 자문을 받을 수도 있고, 경우에 따라서는 2명 이상의 PCQI들이 식품안전계획을 수립하는데 효과적일 수도 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
			
		<div class="vision_area">
		<h2 class="title">PCQI의 요건</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>CHALLENGE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						한 명 또는 그 이상의 예방관리에 대해 자격을 갖춘 자는 반드시 다음을 실행하거나 감독해야 합니다
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                        <p>&#9640; 식품안전계획의 준비</p>
                        <p>&#9640; 예방관리의 검증</p>
                        <p>&#9640; 적용되는 식품의 생산 첫 90일 이후 실행된 검증에 대한 타당한 이유의 증명서류</p>
                        <p>&#9640; 검증이 요구되지 않는다는 결정</p>
                        <p>&#9640; 기록 검토</p>
                        <p>&#9640; 모니터링 및 시정조치 기록의 검토가 7일 이내에 이루어지지 않은 것에 대한 타당한 이유의 증명서류</p>
                        <p>&#9640; 식품안전계획의 재분석</p>
                        <p>&#9640; 적용식품의 생산 후 90일 이후, 예방관리의 특성과 해당시설의 식품안전시스템에서의 역할에 적합하게 재분석이 완료되며, 추가적 예방관리가 검증될 수 있다는 결정</p>

					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">IGC ACADEMY의 PCQI 교육 및 목적</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>DEDICATION</em></div>
				</div>
				<div class="con_txt">
					<span>
						IGC Academy는 FSPCA로부터 PCQI 양성과정에 대한 교육권한을 부여받은 교육기관으로써 PCQI 교육을 제공합니다.
					</span>
					<span>
						IGC의 교육과정은 PCQI 양성을 위해 체계적이고 심도 있게 구성되었으며, IGC인증원만의 풍부한 경험을 바탕으로 양질의 심사 스킬을 습득할 수 있도록 준비되었습니다.
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