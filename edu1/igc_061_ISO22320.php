<?php
	include_once('./_common.php');
$g5['title'] = 'ISO 22320 / 연속성, 복원력 및 복구';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}   */
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
		<h1 class="sub_tit">ISO 22320 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 22320 : 재난 사고 관리 표준 심사원 교육/연수</h2>
	</section>
	<section class="vision_type5">
	
	
	
	
		
		<div class="vision_area">
		<h2 class="title">ISO 22320 : 재난 사고 관리 표준의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22320_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						전세계에서 발생할 수 있는 각종 재난 및 사고에 대하여 각 나라, 각 지역의 사회적 상황뿐 아니라 인구 등의 각각의 영향에 맞는 재난대응조치와 이에 상응하는 관리를 위해 국제적으로 통용 가능한 표준이 필요시 되었습니다.
					</span>
					<span>
						이에 따라 재해, 테러 및 재난의 규모를 최소화하고 비상재난 상황 시 이를 관리 및 대응하기 위한 ISO 국제표준이 제정되었습니다.
					</span>
					<span>ISO 22320 (Security and resilience – Emergency management – Guidelines for incident management 비상 – 재난, 사고 관리) 표준의 적용을 통해 조직은 효과적으로 사고에 대응하며  체계적으로 관리할 수 있습니다.</span>
				</div>
			</li>
		</ul>
		
		</div>



		<div class="vision_area">
		<h2 class="title">ISO 22320이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22320_02.jpg);background-size:auto 100%;background-repeat:no-repeat;background-position:center center; overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-microscope"></i></div>
				</div>
				<div class="con_txt">
					<span>
						ISO 22320은 사고대응 요구 사항을 정의하는 국제 표준입니다. 재해, 테러 및 기타 주요 사건의 재난을 최소화하고 비상재난 상황관리 및 재난대응을 위해 제정된 규격으로 물 공급 및 식량 공급, 건강, 구조 서비스, 연료 공급 및 전기 등이 포함됩니다.
					</span>
					<span>
						ISO 22320은 효과적인 사고대응을 위한 최소한의 요구사항을 규정하며 사고대응 조직의 내부에서 지휘통제, 운영정보, 조정 및 협력을 위한 기본사항을 제공합니다. 이것은 지휘통제 조직체계 및 절차, 의사결정 지원, 추적가능성, 정보 관리와 상호운영을 포함하고 있습니다.
					</span>
					<span>
					    사고대응을 위한 운영정보 요구사항이 정의되어 있으며, 이 요구사항은 시의 적절하고 관련성 있는 정확한 정보를 산출하기 위한 프로세스와 작업체계, 데이터 수집 및 관리가 규정되어 있습니다. 또한 조직 내ㆍ외부적으로 다른 참여 조직들과의 조정 및 협력뿐 아니라 지휘통제 프로세스를 지원하고 다른 조직들 간의 조정 및 협력을 위한 요구사항이 규정되어 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO 22320의 적용 범위</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22320_03.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-hands-helping"></i></div>
				</div>
				<div class="con_txt">
					<span>
						ISO 22320은 국제적, 국가적, 지역적 또는 지방 차원에서 사고에 대한 대비 또는 대응에 참여하는 어느 조직(민간, 공공, 정부 또는 비영리)에라도 적용 가능하며 다음의 분야와 관련된 조직들을 포함합니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9812; 사고 예방과 회복력 대비에 대한 책임 및 참여<br><br>
                    &#9812; 사고 대응에 대한 지침과 관리 제공<br><br>
                    &#9812; 지휘통제를 위한 규정과 계획 개발<br><br> 
                    &#9812; 사고 대응을 위하여 다수 기관/조직의 조정 및 협력 개발<br><br>
                    &#9812; 사고 대응을 위한 정보 및 커뮤니케이션 체계 개발<br><br>
                    &#9812; 사고 대응,정보와 통신 및 데이터 상호운용성 모델 분야 연구<br><br>
                    &#9812; 사고 대응에서 인적 요소(human factor)분야 연구<br><br> 
                    &#9812; 공공과의 커뮤니케이션 및 상호작용에 대한 책임<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">ISO 22320의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22320_04.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						ISO 22320은 재난발생 시 이에 대한 체계를 수립 가능하도록 도와줄 수 있게 조직구조 및 절차, 의사결정 지원, 정보관리 등 재난관리에 대한 표준을 국제표준화 한 것으로 관련 기관들의 상호 협조를 통해 대응하기 위해 필수적입니다.
					</span>
					<span>
						ISO 22320에 대한 인증을 획득함으로써 조직은 구조 및 명령 및 제어 프로세스를 수립할 수 있도록 도와주는 고급 수준의 응급 관리를 달성하게 됩니다.
					</span>
					<span>
						공공 및 민간 조직이 ISO 22320의 중요성에 관계없이 모든 종류의 응급 상황에 대응할 수 있는 능력을 확립하고 강화할 수 있게 함으로써 위협, 혼란 및 피해를 최소화하고 기본 시설의 연속성을 보장할 수 있습니다. 또한 프로세스를 통한 작업, 데이터 관리, 정보 운영관리 등에 도움을 주어 통합시스템을 통한 효율적인 운영이 가능하도록 도움을 줍니다.
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
						IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 22320에 대한 교육서비스를 제공합니다.
					</span>
					<span>
						GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다.
					</span>
					<span>
						IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.
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
	
	
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>