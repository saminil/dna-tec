<?php
	include_once('./_common.php');
$g5['title'] = '심사원인증 3';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다. 
	*/ 
?>
<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
    
    
    /* 신규 테이블 삽입   */
    table{width:80%;min-width:240px;border: 1px solid #444444;overflow-x: auto;}
    th,td{border: 1px solid #444444;font-size:100%;padding:20px;}

    
    
    /*심사원의 종류*/
    .txtBox00, .txtBox01, .txtBox02, .txtBox03, .txtBox04 { 
        border-width: 2px; 
        padding: 12px; 
        margin:20px;
        word-break: break-all; 
        width:250px;
        text-align:center;
        float:left;
        border-radius:15px;
    } 
    .txtBox00 { background-color:LightGray;} 
    .txtBox01 { background-color:#e0ecf3;} 
    .txtBox02 { background-color:#99ffff;} 
    .txtBox03 { clear:both;background-color:#ffcc99;} 
    .txtBox04 { background-color:#ffcccc;}
    
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding-left:10px;}
    td {font-size:96%;padding-left:10px;}
    
</style>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"--->


<style>
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
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
    
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_pcqi_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_pcqi_02.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_pcqi_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_pcqi_04.jpg);}
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
    
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    
    
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

<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:50px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>

	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> PCQI</span> | 심사원인증</h1>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		
		<ul>
		   <li>   
             <h2>
               <span style="display:block;font-size:1.3em;text-align:left;color:#009999;"> <span style="font-size:0.2em;color:#3366ff;">&#9632; </span>
                 PCQI(Preventive Controls Qualified Individual)
               </span> 
             </h2> 
           </li>
        </ul>
		
		<br>
		미국에 식품을 수출하는 업체는 FSMA 요구사항에 기초하여 식품안전예방관리전문가 (PCQI: Preventive Controls Qaulified Individual)를 선임하여 HARPC (위해요소예방관리시스템)을 운영하여야 합니다. <br><br>
		
        FSMA 규정에 따르면 식품제조회사는 전통적인 위해 요소 분석뿐만 아니라 잠재적인 위험성을 사전에 예방관리 하기 위한 식품안전계획을 수립하고 운영하도록 요구하고 있으며 또한 예방관리전문가에 의해 식품안전계획이 수립되어야 하고 예방관리의 유효성이 확인되어야 하며 관련 기록은 정기적으로 재검토할 것을 요구하고 있습니다. <br><br>

        PCQI 자격증은 FSPCA(The food safety preventive Controls Alliance)가 승인한 교육 과정을 성공적으로 수료한 이후 FSPCA를 통해 Certificate를 발급받아야 합니다.<br><br>
		</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">PCQI란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                     <span style="fojnt-weight;bold;color:#009999;">A Preventive controls qualified individual</span><br>
                     최소한 FDA가 적합하다고 인정된 표준화된 커리큘럼에 따라 받은 것과 동등한 위험 기반 예방 통제의 개발 및 적용 교육을 성공적으로 완료했거나, 그렇지 않은 경우 식품 안전 시스템을 개발하고 적용하기 위한 직무 경험을 통해 자격을 갖춘 자격을 갖춘 사람을 의미한다.
					</span>
				</div>
			</li>
			<br>

          </ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">PCQI의 책임</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:15px;">
                    <span style="font-weight:bold;color:#009999;">신청서와 함께 제출해야 할 증빙서류는 아래와 같습니다.</span><br><br>
                       1) 식품안전계획의 작성<br><br>
                       2) 예방조치의 유효성 확인<br><br>
                       3) 기록검토<br><br>
                       4) 식품안전계획의 재분석<br><br>
                       5) 기타 식품에 적합한 활동을 감독 또는 수행<br><br>
					</span>
				</div>
			</li>
			<br>
		</ul>

		</div>


		<div class="vision_area">
		<h2 class="title" style="color:#009999;">PCQI에 대한 교육 여건을 갖추어 식품안전 생산에 관여할 실무자</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                      &#10049; 식품 안전 담당 부사장<br><br>
                      &#10049; 유지보수 관리자<br><br>
                      &#10049; 생산 감독 책임자 및 관리자<br><br>
                      &#10049; 위생 감독자<br><br>
                      &#10049; 품질 보증 책임자 및 관리자<br><br>
                      &#10049; 안전 관리자<br><br>
                      &#10049; 교육 감독자<br><br>
                      &#10049; 기술 책임자<br><br>
                      &#10049; 포장 감독자 및 관리자<br><br>
                      &#10049; 법규 및 규제 담당자<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">PCQI 교육 내용</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 30px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                      &#10046; FSMA 대응을 위한 예방관리 개념 교육<br>   
                      &#10046; 식품 안전 계획 개요<br>
                      &#10046; GMP와 기타 선행요건 프로그램 운영<br>   
                      &#10046; 생물학적 식품안전 위해요소<br> 
                      &#10046; 화학적, 물리적, 경제적 측면에서의 식품안전 위해요소<br>
                      &#10046; 식품안전 계획의 개발을 위한 사전 단계<br> 
                      &#10046; 식품안전 계획의 준비를 위한 지원 (자료)<br>
                      &#10046; 위해요소 분석과 예방관리점의 결정-개요<br>
                      &#10046; 위해요소 분석과 예방관리점의 결정<br>
                      &#10046; 예방관리<br>
                      &#10046; 식품의 알러지원 예방관리<br>
                      &#10046; 위생 예방관리<br>
                      &#10046; 공급망 예방관리<br>
                      &#10046; 검증 및 유효성 확인절차<br>  
                      &#10046; 기록의 보관 및 관리<br>
                      &#10046; 회수계획<br>
                      &#10046; 법규개요 (cGMP, 위험성분석, 위험성 기반의 예방관리)<br>
					</span>

				</div>
			</li>
		</ul>
		</div>
		
	</section>
	
 
    
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:50px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
    

    <!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
			IGC는 개인인증기관인 GPC와의 협력을 통해 아래 분야의 교육 및 심사원 인증 서비스를 제공합니다.<br>
				
				<li><p><em><strong>01</strong></em><span>에너지 경영</span></p></li>
				<li><p><em><strong>02</strong></em><span>정보 보안</span></p></li>
				<li><p><em><strong>03</strong></em><span>보건, 안전 및 환경</span></p></li>
				<li><p><em><strong>04</strong></em><span>품질경영시스템</span></p></li>
				<li><p><em><strong>05</strong></em><span>경영, 위험 및 규정 준수</span></p></li>
				<li><p><em><strong>06</strong></em><span>교통, 통신 및 에너지</span></p></li>
				<li><p><em><strong>07</strong></em><span>연속성, 복원력 및 복구</span></p></li>
				<li><p><em><strong>08</strong></em><span>IT 보안</span></p></li>
				<li><p><em><strong>09</strong></em><span>서비스관리</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>      

	
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>













































