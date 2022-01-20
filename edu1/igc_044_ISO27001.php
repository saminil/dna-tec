<?php
	include_once('./_common.php');
$g5['title'] = 'ISO/IEC 27001:2013 / 교육과정';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#005bab;}
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#36b1d4;}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#f48025;}
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
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:50px 0; }
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:30px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
	}

</style>



<div class="content_wrap">

	<section class="page_title">
		<h1 class="sub_tit">ISO/IEC 27001:2013 <span class="fc_pointer">심사원 교육 과정</span> </h1>
		<h2 class="sub_txt">ISO/IEC 27001:2013 / 정보보안 관리시스템 교육과정</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001:2013 / 정보보안 관리시스템 교육과정</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_iec_27001-2013_00.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27001은 정보 보안 경영시스템(ISMS: Information Security Management System)의 요구사항을 정의한 국제표준으로 품질시스템 관리를 통해 정보 시스템의 보안을 촉진하기 위해 개발되었습니다. 정보보안을 설정, 구현, 운영, 모니터링, 검토, 유지관리 및 개선하기 위한 체계적인 비즈니스 위험 접근 방식을 기반으로 하는 관리 시스템입니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						정보 보안 경영시스템은 다음 사항을 보장하여야 합니다.<br><br>
                        1.기밀성(Confidentiality): 정보에 액세스 할 권한이 있는 사용자만이 접근할 수 있도록 합니다.<br><br>
                        2. 무결성(Integrity): 정보가 정확하고 완전하며 권한없이 수정되지 않도록 합니다.<br><br>
                        3. 가용성(Availability): 필요한 경우 권한이 있는 사용자가 정보에 접근할 수 있도록 하며 정보 보안은 정책, 프로세스, 절차, 조직 구조, 소프트웨어 및 하드웨어 기능을 적용하여야 합니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		<br><br>
		<dl>
			<dd>
				정보 보안 경영시스템의 모델은 다음과 같습니다.<br><br>
						<img src="./images/edu_iso_iec_27001-2013_01.jpg" alt="정보보안 관리시스템 모델" style="display:block;margin: 0 auto;">
			</dd>
			<br><br>
			<dd>
                정보보안경영시스템의 프로세스는 다음과 같습니다.<br><br>
						<img src="./images/edu_iso_iec_27001-2013_02_process.jpg" alt="정보보안 관리시스템 프로세스" style="display:block;margin: 0 auto;">
			</dd>
		</dl>
		</div>



		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001:2013 인증의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>DEDICATION</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						오늘날의 정보는 비즈니스 환경에서 중요한 역할을 담당합니다. 점점 더 많은 조직과 정보시스템이 컴퓨터 사이버 사기, 해킹, 바이러스 등 광범위한 출처로 인해 정보 보안 안전에 위협을 받고 있습니다. 따라서 정보보안을 설정하고 구현하며 운영하는 정보보안경영시스템의 중요성이 더욱 부각되고 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001:2013 인증의 기대효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
                      1. 외부로부터 발생하는 리스크를 최소화하고 비즈니스 연속성을 보장합니다.<br><br>
                      2. 기업 내 정보보안에 대한 의식 높이는 역할을 합니다.<br><br>
                      3. 정보보안에 대한 법적 규제사항 준수를 보장합니다.<br><br>
                      4. 인증을 통한 객관적인 평가로 인한 신뢰성을 향상시킵니다.<br><br>
                      5. 정보보안 리스크 관리 체계 개선을 통한 정보보안경영시스템의 수준을 향상시킵니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001:2013 심사원 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>CHALLENGE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
                     정보보안경영시스템의 심사원들은 다음과 같은 지식 및 이해를 필요로 합니다.<br><br>
                     1. 지적재산권<br><br>
                     2. 조직 기록물의 내용, 보호 및 유지<br><br>
                     3. 데이터 보호 및 프라이버시<br><br>
                     4. 암호화 통제에 관한 규제사항<br><br>
                     5. 전자상거래<br><br>
                     6. 전자 및 디지털서명<br><br>
                     7. 업무현장 관찰<br><br>
                     8. 정보통신 도청 및 데이터 감시<br><br>
                     9. 컴퓨터(시스템) 부정이용과 관련한 지식<br><br>
                     10. 국제 및 국내 분야별 특정 요구사항<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001:2013 교육의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>DEDICATION</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						IGC Academy는 GPC로부터 ‘ISO/IEC 27001 인증심사원 교육기관’으로 승인된 기관입니다.<br><br>
                        ISO/IEC 27001 인증 심사원 과정은 다음과 같습니다.<br><br>
                          &#8280; 정보보호관리체계 수립 및 구축 전문가 양성, 내부보안감사자 양성, 국제표준 심사활동 자질(스킬) 향상, 정보보호교육 전문가 양성<br><br>
                          &#8280; 국제 표준 ISO 27001 인증 심사원 양성<br><br>
                          &#8280; 국제 표준 심사원 승인기관인 GPC의 절차에 따른 정식 심사원 취득을 목표로 과정을 진행합니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		<dl>
			<dd>
               <span style="font-weight:bold;text-align:justify;text-justify: inter-word;">[ISO/IEC 27001:2013 교육의 목적]<br></span>
               ISO/IEC 27001 국제심사원 양성과정은 교육의 참가자가 정보보안경영 시스템에 대해 국내 또는 국제 수준의 설명서, 표준, 법률 요구 및 규정사항을 ISO 19011의 원칙을 근거하여 심사를 수행할 수 있도록 하는 지식을 습득하는데 그 목적이 있습니다.<br>
			</dd>
			<dd>
               <span style="font-weight:bold;text-align:justify;text-justify: inter-word;">[참가 대상 및 자격]<br></span>
               -품질경영 담당자, 내부보안 감사자, 정보 보안 책임자, 정보보호 담당자, 정보보호교육 담당자<br>
               -ISMS 심사원 등록 희망자 및 정보 보호 컨설턴트 활동 희망자, 품질 경영 컨설턴트, 정보 보호 교육 코디네이터 등<br>
			</dd>
			<dd>
               <span style="font-weight:bold;text-align:justify;text-justify: inter-word;">[교육 프로그램]<br></span>
               *정보보호관리체계(ISMS) 개요<br>
               *ISMS Framework 및 필수 통제 항<br>
               *심사원의 책임 및 역할 정의, 심사 계획 정의<br>
               *의사소통 및 체크리스트 작성을 통한 심사계획 작성<br>
               *사례연구 및 모의 심사 수행<br>
               *심사 결과 기준 정의 → 부적합<br>
               *사례연구 및 시정조치 활동, 심사보고서 사후 활동<br>
               *시험 및 설문조사<br><br>
			</dd>
		</dl>
		</div>

		<div class="vision_area">
		<h2 class="title">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>SOLUTION</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						&#8281; IGC는 GPC로부터 ‘ISO/IEC 27001 인증심사원 교육기관’으로 승인된 기관인 IGC Academy를 통해 교육을 진행하고 있습니다.<br><br>
						&#8281; GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인 인증 기관입니다. <br><br>
						&#8281; GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
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
	         			<li style="float:none;width:100%;"><p><em><strong>01</strong></em><span>정보보호관리체계 수립 및 구축 전문가 양성</span></p></li>
	         			<li style="float:none;width:100%;"><p><em><strong>02</strong></em><span>내부보안감사자 양성</span></p></li>
	         			<li style="float:none;width:100%;"><p><em><strong>03</strong></em><span>정보보호교육 전문가 양성</span></p></li>
	         			<li style="float:none;width:100%;"><p><em><strong>04</strong></em><span>국제 표준 ISO 27001 인증 심사원 양성<br>
	         			 : 국제 표준 심사원 승인기관인 GPC의 절차에 따른 정식 심사원 취득을 목표
	         			</span></p></li>
	         			<li style="float:none;width:100%;"><p><em><strong>05</strong></em><span>ISO/IEC 27001:2013 정보보안경영시스템 인증</span></p></li>
	         		</ul>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>		
	</section>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>