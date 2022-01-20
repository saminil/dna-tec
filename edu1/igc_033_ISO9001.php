<?php
	include_once('./_common.php');
$g5['title'] = '품질';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

	.vision_type5 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; text-align:justify; }
	.vision_type5:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type5 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type5 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; } /* 컨텐츠, 내용 이미지 박스 이론, 크기  */
    
	.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:#ffffff;}
      
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px;}
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
	.partner_type2 .con_box ul li {float:none; width:50%; list-style:none; margin:10px 0; }
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
        
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; }
	}

</style>


<div class="content_wrap">
	<section class="page_title">
		<h1 class="sub_tit"><span style="font-family:georgia;">ISO</span> 9001 물질 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">감사, 사전 평가 감사 및 예정된 프로젝트 완료 기간 내에 <br> 100 % 성공적인 ISO 9001 인증 감사를 보장하는 데 필요한 교육</h2>
	</section>
	<section class="vision_type5">
	
	
		<div class="vision_area">
		<h2 class="title"><span style="font-family:georgia;">ISO</span> 9001 인증 교육 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="display:inline-block;background-image:url(./images/edu_iso9001_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
						9001 인증 상담 서비스에는 인식 교육, 품질 정책-목표 워크샵, 갭 분석, 매뉴얼, 절차, 작업 지침, 형식 등을 포함한 문서 디자인, 구현 지원 및 교육, 내부 감사 교육, 수석 감사 교육, 내부 수행 지원 등이 있습니다. 
					</span>
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
						조직이 ISO 9001에서 얻는 가장 큰 이점 QMS는 프로세스 표준화를 통한 비즈니스 프로세스 제어 개선입니다. ISO 9001 인증에서 어떤 혜택을 찾고 있든, 귀사에서는 ISO 9001 구현 및 인증을 통해 혜택을 얻을 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		
		
		<dl>
			<dd style="margin:0 auto;display:inline-block;text-align:justify;">
				ISO 9001 : 2008 버전의 ISO 9001 : 2015 표준 업그레이드… .. 조직이 최신 ISO 9001 버전으로 빠르고 쉽고 가장 효과적인 방식으로 마이그레이션하는 데 어떻게 도움이되는지 알아 보려면 클릭하십시오.
			</dd>
			<dd style="margin:0 auto;display:inline-block;text-align:justify;">
				ISO 9000은 품질 관리 시스템을위한 표준 제품군입니다. ISO 9000은 국제 표준화기구 인 ISO에 의해 유지되며 인증 및 인증 기관에 의해 관리됩니다.
			</dd>
		</dl>
		</div>



		<div class="vision_area">
		<h2 class="title"><span style="font-family:georgia;">ISO</span> 9001 이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="display:inline-block;background-image:url(./images/edu_iso9001_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-microscope"></i><em><!------ EDUCATION ---------></em></div>
				</div>
				<div class="con_txt">
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
						제 2 차 세계 대전 동안, 탄약과 같은 많은 영국 산업에서 품질 문제가 발생하여 조립 중에 공장에서 폭탄이 폭발했습니다. 채택 된 솔루션은 공장에서 제조 절차를 문서화하고 절차를 준수하고 있음을 기록으로 증명해야했습니다. 이 표준의 이름은 BS 5750이며, 제조 대상뿐만 아니라 제조 공정 관리 방법을 지정했기 때문에 관리 표준으로 알려져 있습니다. 세드 돈에 따르면, 1987 년 영국 정부는 국제 표준화기구로 BS 5750을 국제 표준으로 채택하도록 설득했다. BS 5750은 ISO 9000이되었다.
					</span>
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
						세드 돈에 따르면, 1987 년 영국 정부는 국제 표준화기구로 BS 5750을 국제 표준으로 채택하도록 설득했다. BS 5750은 ISO 9000이되었다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title"><span style="font-family:georgia;">ISO</span> 9001의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="display:inline-block;background-image:url(./images/edu_iso9001_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-hands-helping"></i><em><!------ EDUCATION ---------></em></div>
				</div>
				<div class="con_txt">
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
						적절한 품질 관리는 비즈니스를 향상 시키며, 종종 투자, 시장 점유율, 매출 성장, 매출 마진, 경쟁 우위 및 소송 회피에 긍정적 인 영향을 미칩니다. 웨이드 (Wade)에 따르면 ISO 9000 : 2000의 품질 원칙은 적절하다. "ISO 9000 가이드 라인은 회사의 경쟁력을 높일 수있는 품질 관리 시스템을위한 포괄적 인 모델을 제공한다"고 말했다. 
					</span>
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
						Barnes는 또한 Lloyd 's Register Quality Assurance의 조사에 따르면 ISO 9000은 순이익이 증가한 것으로 나타 났으며 Deloitte-Touche는 등록 비용이 3 개월 이내에 회수되었다고보고했습니다. 프로비던스 비즈니스 뉴스에 따르면 ISO를 구현하면 종종 다음과 같은 이점이 있습니다.
						
						
						<br><br>
						<dd>
                            &#10056;	보다 효율적이고 효과적인 운영<br><br>
                            &#10056;	고객 만족도 및 유지력 향상<br><br>
                            &#10056;	감사 감소<br><br>
                            &#10056;	마케팅 강화<br><br>
                            &#10056;	직원 동기 부여, 인식 및 사기 개선<br><br>
                            &#10056;	국제 무역 촉진<br><br>
                            &#10056;	이익 증가<br><br>
                            &#10056;	폐기물 감소 및 생산성 향상<br><br>
			            </dd>
					</span>
				</div>
			</li>
		</ul>
		
		<dl>
		</dl>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">IGC 인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="display:inline-block;background-image:url(./images/edu_iso9001_04.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-hands-helping"></i><em><!------ EDUCATION ---------></em></div>
				</div>
				<div class="con_txt">
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
						IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 9001 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다. <br><br>
						GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인인증기관입니다. <br><br>
						GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
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
	         		IGC는 ISO 9001 에 대한 전 과정에 대한 서비스를 제공합니다.<br><br><br>
	         			<li><p><em><strong>01</strong></em><span>ISO 9001 시스템 인증</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>ISO 9001 교육 가능 연수기관 안내</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>ISO 9001 심사원 인증</span></p></li>

	         		</ul>
	         		<br><br><br>
	         		또한, 개인인증기관인 GPC와의 협력을 통해 다음과 같은 여러 분야에 관련된 교육 관련 서비스를 제공하고 있습니다.
	         		
	         		<br><br>
	         		&#10045;  정보 보안<br><br>
                    &#10045;  보건, 안전 및 환경<br><br>
                    &#10045;  품질경영시스템<br><br>
                    &#10045;  경영, 위험 및 규정 준수<br><br>
                    &#10045;  교통, 통신 및 에너지<br><br>
                    &#10045;  연속성, 복원력 및 복구<br><br>
                    &#10045;  IT 보안<br><br>
                    &#10045;  서비스 관리<br><br>
	         	</div>
            </section>
         <!---------(주)아이지씨인증원 사업영역 종료 ------>
		
	
	</section>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>