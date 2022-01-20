<?php
	include_once('./_common.php');
$g5['title'] = '서비스관리 | ISO 55001';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}*/
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
		<h1 class="sub_tit">ISO 55001 <span class="fc_pointer"> 심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 55001 : 자산 경영 관리 시스템 심사원 교육/연수</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO 55001 : 자산 경영 관리 시스템의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso55001_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;" ><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span> Asset Management System (AMS)은 자산 경영 관리 시스템을 의미합니다. </span>
                    <span> 자산관리의 사전적인 의미는, 조직의 재무, 운영, 유지관리 및 기타 자산 관련 활동을 조정하여 자산에서 더 많은 가치를 실현하도록 하는 것입니다. </span>
                    <span> 자산 라이프 사이클 전반에 대해 계획적으로 관리하고 그 가치를 최대화하는 것을 목적으로 하는 국제 표준입니다. (기존 다른 규격의 수행 단계인 PDCA 순서와 동일)</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 55001란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso55001_02.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;" ><i class="fas fa-microscope"></i></div>
				</div>
				<div class="con_txt">
					<span>
                        경쟁력과 능력을 갖추기 위하여 기업과 산업체는 적격성을 갖춘 심사원을 필요로 합니다. 
                    </span>
                    <span>
                        ISO 55001 심사원 교육은 널리 인정된 감사 원칙, 절차 및 기법을 적용하여 ISO 55001 자산관리시스템(AMS) 감사를 수행하는 데 필요한 전문 지식을 개발할 수 있도록 진행합니다. 본 교육 과정 동안 ISO 19011 및 ISO/IEC 17021-1 인증 프로세스에 따라 내부 및 외부 감사를 계획하고 수행할 수 있는 지식과 기술을 습득하실 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

	
		<div class="vision_area">
		<h2 class="title">ISO 55001 인증의 이해</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso55001_03.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;" ><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span style="border-bottom: 1px solid #ccc; display: inline-block; ">ISO 55001 제정일</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9818; ISO 55001은 2014년 1월에 국제 표준으로 제정되었습니다. <br><br>
                    &#9818; ISO 50000 자산경영(Asset management): 개요 원칙 및 용어정의 2014.01.15 발행<br><br>
                    &#9818; ISO 55001 자산경영, 경영 시스템 요구사항 2014.01.15 발행<br><br>
                    &#9818; ISO 55002 자산경영 55001 적용하기 위한 가이드라인 이하 동일<br><br>

					</span>
					<span style="border-bottom: 1px solid #ccc; display: inline-block; ">ISO 55001 적용 대상</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9819; 자산경영시스템의 수립, 실행, 유지 및 개선과 관련된 자<br><br>
                    &#9819; 자산경영 활동의 계획, 설계 및 실행, 검토와 관련된 자와 서비스 제공자<br><br>
                    &#9819; 조직 자체의 요구사항 및 법적, 규제적, 계약 요구사항을 충족시키는지에 대해 조직의 능력을 평가하고자 하는 내부 및 외부당사자<br><br>

					</span>
					<span style="border-bottom: 1px solid #ccc; display: inline-block; ">ISO 55001 학습목표</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9820; ISO 55001 기반 자산관리시스템(AMS) 운영 및 주요 프로세스 이해<br><br>
                    &#9820; ISO 55001, ISO 55002와 기타 표준 및 규제 프레임워크 간의 목표, 내용 및 상관 관계 이해<br><br>
                    &#9820; ISO 19011에 따른 관리 시스템 심사 계획, 주도 및 후속 조치에서 심사원의 역할 이해<br><br>
                    &#9820; 자산관리시스템(AMS) 심사에서 ISO 55001의 요구사항 해석, 시뮬레이션<br><br>
                    &#9820; ISO 19011에 따라 심사 계획, 심사 주도, 보고서 초안 작성, 심사 후속 조치 역량 확보<br><br>
                    &#9820; 심사 시 필요한 개인 및 전문적인 실력 강화<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">자산 경영 관리의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>DEDICATION</em></div>
				</div>
				<div class="con_txt">
					<span>
						국내의 경우, 국내 여러 제조 산업의 산업설비 및 사회 인프라 시설의 노후화로 인한 막대한 비용투자로 인해 수리 및 교체 시기에 대한 의사결정의 어려울 수 있습니다. 따라서, 산업 전반 생산활동에 사용되는 모든 공장과 설비 등 산업 자산에 대한 활용도/생산성/비용대비 투자/안전과 환경 검토에 대한 중요성이 부각되고 있습니다. 이것을, 조직 내부에서 결정하고 실행하는 것 보다는 이 규격을 구축하는 과정에서 효율적인 자산관리 및 운영관리를 확보해 낸다면 이는 조직 자산의 경제성과 효율성 향상에 기여해 비단 매출 뿐만 아니라 규격을 확보한 업체의 고객들에게 신뢰성을 확보할 수 있고, 이에 더해 조직 내부 자산 경영 관리가 효과적으로 운영되고 있음을 대내외적으로 인정을 받을 수 있다는 점에 그 의의가 있습니다.
					</span>
					<span style="border-bottom: 1px solid #ccc; display: inline-block; ">ISO 55001 인증을 받은 업체의 성과</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    &#9822; 성과 개선 <br><br>
                    &#9822; 비용 개선<br><br>
                    &#9822; 위험 관리 <br><br>
                    &#9822; 비즈니스 성장 및 개선 보장  <br><br>
                    &#9822; 안정적인 의사 결정<br><br>
                    &#9822; 규정 준수 및 평판 개선을 통한 이해 관계자 신뢰 강화
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">IGC 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt">
					<span>
						IGC는 IPC MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 55001 Asset Management System 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다.
					</span>
					<span>
						GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인인증기관입니다. 또한, GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.
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