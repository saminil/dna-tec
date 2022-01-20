<?php
	include_once('./_common.php');
$g5['title'] = '의료기기';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; } /* 이미지 박스 설정: 널비===>32   */
    
	.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#66cccc;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:#ffffff;}
    
    
    
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
		<h1 class="sub_tit">ISO 13485 <span class="fc_pointer">교육</span> </h1>
		<h2 class="sub_txt">IAS 인정범위 / 의료기기</h2>
	</section>
	<section class="vision_type5">
	

		<div class="vision_area">
		<h2 class="title">ISO 13485 교육 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_13485_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
						의료기기의 품질 경영 시스템에 대한 요구사항을 다루고 있는 ISO 13485는 의료기기 제조사 및 공급사가 사용할 수 있도록 제정된 국제 표준입니다.
                       <br><br>
                        ISO 13485 교육 프로그램은 규격 요구사항에 대하여 이해를 돕고 효과적인 실무 적용과 적격성을 갖춘 심사원을 양성하기 위한 목적을 가지고 운영되고 있습니다. 개인 또는 기업은 이 교육 프로그램을 통해 ISO 13485에 대한 이해도를 높일 수 있으며, 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가를 받은 후 심사원 인증 과정에 활용할 수 있습니다.

					</span>
					<!-------
					<span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span>
					----->
				</div>
			</li>
		</ul>
		<!-----
		<dl>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
			</dd>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd>
		</dl>
		----->
		</div>



		<div class="vision_area">
		<h2 class="title">ISO 13485란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="display:inline-block;background-image:url(./images/edu_iso_13485_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
						ISO 13485:2016은 의료기기 제조를 위해 개발된 경영시스템 규격으로, ISO 9001:2008 프로세스 모델 접근방법에 기반하고 있습니다. 이 규격의 주 목적은 조화로운 의료기기 규정 요구사항을 촉진하는 것입니다.
						<br><br>
					</span>
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
                        ISO 13485는 제조, 설치 및 서비스에 관한 특정 요구사항을 포함하며, 다음을 위해 제정된 규격입니다.<br><br>
                        &#10049; 여러 개선사항을 포함한 품질경영시스템 수행<br><br>
                        &#10049; 제품 개발 및 제품 실현에 관한 리스크 관리 접근방법<br><br>
                        &#10049; 프로세스 검증<br><br>
                        &#10049; 법적 및 규제 요구사항의 준수<br><br>
                        &#10049; 효과적인 제품 추적성 및 리콜 시스템<br><br>
					</span>
				</div>
			</li>
		</ul>
		<!-----
		<dl>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
			</dd>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd>
		</dl>
		----->
		</div>



		<div class="vision_area">
		<h2 class="title">ISO 13485의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="display:inline-block;background-image:url(./images/edu_iso_13485_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
						의료기기 산업은 국내, 국제 표준 및 기타요구 사항의 복잡한 배열의 규제시스템의 영향을 받고 있습니다. 의료기기는 사용자, 특히 환자에게 사용되며 그 역할이 사람의 생명, 건강에 직접적으로 영향을 미치므로 다른 제품에 비해 훨씬 높은 수준의 안정성이 요구되며 제품에 대한 품질관리는 체계적이고 지속적으로 이루어져야 합니다.<br><br>
					</span>
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
                        ISO 13485 시스템 인증은 의료기기 제조사가 설계부터 생산 및 유통까지 전 과정에 있어 프로세스의 적합성을 인증 받음으로써 품질 관리를 증명하는 것이며, 의료기기 국제시장 진입 및 기업의 신뢰도 상승에 있어 도움이 될 것입니다.
					</span>
				</div>
			</li>
		</ul>
		<!------
		<dl>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
			</dd>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd>
		</dl>
		------>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">ISO 13485 심사원 인증</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="display:inline-block;background-image:url(./images/edu_iso_13485_04.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
                      ISO 13485 의료기기 품질경영시스템 심사원 인증 프로그램의 목적은 인정받은 인증기관과 사업 및 산업체에 본 프로그램을 통해 인증된 심사원은 적격성이 있다는 신뢰를 제공하는데 있습니다.<br><br>
					</span>
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
                      주요 목적은 표준화된 의료기기 법적 요구사항의 지정을 위함이며, 본 규격은 제조사에게 설치 및 서비스 등 다음과 같은 특별요구사항을 포함합니다.<br><br>
                      &#10057; 개선을 통한 품질경영시스템의 구현<br><br>
                      &#10057; 위험분석을 통한 제품 개발 및 제품 실현<br><br>
                      &#10057; 검증 프로세스<br><br>
                      &#10057; 법령과 규제 요건의 준수<br><br>
                      &#10057; 효과적 제품 추적성 관리 및 리콜 시스템<br><br>
                      ISO 13485 심사원에 대한 기본 및 추가 요구사항에 대해서는 심사원 인증 카테고리에서 상세히 확인하실 수 있습니다<br><br>
					</span>
				</div>
			</li>
		</ul>
		<!-------
		<dl>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
			</dd>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd>
		</dl>
		------>
		</div>



		<div class="vision_area">
		<h2 class="title">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>SOLUTION</em></div>
				</div>
				<div class="con_txt">
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
                       IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 13485에 대한 교육서비스를 제공합니다.<br><br>
                       GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다.<br><br>
                       IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
					</span>
					<!----------
					<span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span>
					----->
				</div>
			</li>
		</ul>
		<!-------
		<dl>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
			</dd>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd>
		</dl>
		----->
		</div>

		<!----(주)아이지씨인증원 사업영역 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         		IGC는 ISO 13485에 대한 전 과정에 대한 서비스를 제공합니다.<br><br>
	         			<li><p><em><strong>01</strong></em><span style="font-family:georgia;">ISO</span> 13485 : 시스템 인증</p></li>
	         			<li style="float:none"><p><em><strong>02</strong></em><span style="font-family:georgia;">ISO</span> 13485 : 교육 가능 연수기관 안내</p></li>
	         			<li><p><em><strong>03</strong></em><span style="font-family:georgia;">ISO</span> 13485 : 심사원 인증</p></li>
	         			<br><br>
	         		</ul>
	         	</div>
	         	<div class="con_box">
	         		<ul><br><br>
	         		또한, 개인인증기관인 GPC와의 협력을 통해 다음과 같은 여러 분야에 관련된 교육 관련 서비스를 제공하고 있습니다.
	         		<br><br>
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