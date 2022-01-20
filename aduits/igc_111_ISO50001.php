<?php
	include_once('./_common.php');
$g5['title'] = '심사원인증 2';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso50001_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso50001_02.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso50001_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso50001_04.jpg);}
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 50001: 에너지경영시스템</span> | 심사원인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		개인 인증은 인증이 부여되는 분야에 적용가능한 교육, 훈련, 경험, 검증된 지식에 대한 독립적인 평가를 통해 적격성을 갖춘 인원에게 그 분야의 인증을 부여하는 것입니다. 이는 관련 표준에 근거한 국제적으로 통용되는 프로세스를 통해 달성되며, 개인 능력의 적합성을 평가한 이후 인증서가 발급되고 있습니다.<br><br>
		
        'ISO 50001'은 국제표준화기구(ISO)가 2011년 6월 발효한 에너지경영시스템 국제표준으로, 에너지 효율화와 절감을 위한 프로세스와 요구사항을 규정하고 있습니다. 고유가 체제의 장기화와 국제적인 에너지 환경변화의 대응으로 효율적인 에너지 경영이 중요한 이슈로 대두되고 있습니다. 이러한 산업의 요구와 필요성으로 ISO 50001인증 수요가 지속적으로 증가하고 있으며 이에 따라 ISO 50001에 대한 전문가와 심사원의 수요 또한 증가하고 있습니다.


		
		</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 50001 심사원 인증 개요 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                        에너지경영시스템이란 기업이 에너지이용효율 향상을 위해 인적, 물적자원과 경영적 사항 및 기술적 사항 등에 대한 관리를 일정한 절차와 기법에 따라 행하는 체계적, 전사적, 지속적인 에너지관리시스템으로, 이것은 에너지이용의 효율 향상 수단일 뿐만 아니라 조직의 운영 변화를 유도하는 제도로 인식되어 선진국을 중심으로 확산되어 오고 있습니다.<br><br>
                        
                        산업의 요구와 필요성 증가에 따라 ISO 50001에 대한 심사원, 선임 심사원, 검증 심사원, 내부 심사원, 심사원보 개인 자격 인증을 갖춘 인원의 수요가 지속적으로 증가하고 있습니다.
					</span>
				</div>
			</li>
			<br>

          </ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">심사원 등급에 따른 자격 요건</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:15px;">
                    <span style="font-weight:bold;color:#009999;">신청서와 함께 제출해야 할 증빙서류는 아래와 같습니다.</span><br><br>
                      &nbsp; &nbsp; &#9672; 졸업증명서<br><br>
                      &nbsp; &nbsp; &#9672; 경력증명서<br><br>
                      &nbsp; &nbsp; &#9672; 심사이력<br><br>
                      &nbsp; &nbsp; &#9672; 교육수료증<br><br>
                      &nbsp; &nbsp; &#9672; 검증심사 평가기록<br><br><br>
                       
                    <span style="display:block;font-weight:bold;color:#009999;">수용 가능한 교육수료증의 요구기준은 아래와 같습니다.</span><br><br>
                       &nbsp; &nbsp; <p> &#9672; 교육연수기관 절차의 요구사항을 충족하는 GPC가 승인한 관련 경영시스템 선임심사원 교육과정 수료증</p>
                       &nbsp; &nbsp; <p> &#9672; ISO/IEC 17024에 따라 인정을 받은 개인인증기관의 관련 품질시스템 선임심사원 교육과정 수료증</p>
                       &nbsp; &nbsp; <p> &#9672; 공인된 기관으로부터 지정받은 교육연수기관이 제공하는 관련 경영시스템 선임심사원 교육과정 수료증</p>
					</span>
					<!---------------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span--------------->
				</div>
			</li>
			<br>
            <div style="overflow-x:auto;font-size:1.2em;">
            
            <table width="851" height="370" border="1" cellpadding="0" cellspacing="0">
               <tr>
                 <td width="82" height="44" align="center" valign="middle" bgcolor="#F7AF85"><p>&nbsp;</p></td>
                 <td width="148" align="center" valign="middle" bgcolor="#F7AF85"><p align="center"><strong>내부심사원</strong><strong> </strong></p></td>
                 <td width="89" align="center" valign="middle" bgcolor="#F7AF85"><p align="center"><strong>심사원보</strong><strong> </strong></p></td>
                 <td width="147" align="center" valign="middle" bgcolor="#F7AF85"><p align="center"><strong>심사원</strong><strong> </strong></p></td>
                 <td width="157" align="center" valign="middle" bgcolor="#F7AF85"><p align="center"><strong>선임심사원</strong><strong> </strong></p></td>
                 <td width="214" align="center" valign="middle" bgcolor="#F7AF85"><p align="center"><strong>검증심사원</strong><strong> </strong></p></td>
               </tr>
               <tr>
                 <td width="82" height="34" align="center" valign="middle" bgcolor="#F9F8CA"><p align="center"><strong>학력</strong><strong> </strong></p></td>
                 <td colspan="5" align="center" valign="middle"><p align="center">고등교육 이상 </p></td>
               </tr>
               <tr>
                 <td width="82" align="center" valign="middle" bgcolor="#F9F8CA"><p align="center"><strong>경력</strong><strong> </strong></p></td>
                 <td width="148" align="center" valign="middle"><p align="center">총 3년 이상의 업무 경력 (신청 표준과 관련된 1년 이상의 업무경력 포함)</p></td>
                 <td width="89" align="center" valign="middle"><p align="center">-</p></td>
                 <td width="147" align="center" valign="middle"><p align="center">총 5년 이상의 업무 경력 (신청 표준과 관련된 2년 이상의 업무경력 포함)</p></td>
                 <td width="157" align="center" valign="middle"><p align="center">총 5년 이상의 업무 경력 (신청 표준과 관련된 2년 이상의 업무경력 포함)</p></td>
                 <td width="214" align="center" valign="middle"><p align="center">총 10년 이상의 업무 경력 (신청 표준과 관련된 5년 이상의 업무경력 포함)</p></td>
               </tr>
               <tr>
                 <td width="82" height="70" align="center" valign="middle" bgcolor="#F9F8CA"><p align="center"><strong>수료증</strong><strong> </strong></p></td>
                 <td colspan="4" align="center" valign="middle"><p align="center">심사원 교육 수료증 </p></td>
                 <td width="214" align="center" valign="middle"><p align="center">ISO/IEC 17024 기반의 자격인증기관에서 선임심사원    자격 유지 </p></td>
               </tr>
               <tr>
                 <td width="82" align="center" valign="middle" bgcolor="#F9F8CA"><p align="center"><strong>심사이력</strong><strong> </strong></p></td>
                 <td width="148" align="center" valign="middle"><p align="center">최근 3년 이내 내부심사 5회 이상, 최소 15MD 이상의    내부심사 이력 </p></td>
                 <td width="89" align="center" valign="middle"><p align="center">-</p></td>
                 <td width="147" align="center" valign="middle"><p align="center">최근 3년 이내 20MD 이상의 심사원 혹은 선임심사원으로서의 심사 경력 </p></td>
                 <td width="157" align="center" valign="middle"><p align="center">최근 3년 이내 35MD 이상의 심사원 혹은 선임심사원으로서의 심사 경력 </p></td>
                 <td width="214" align="center" valign="middle"><p align="center">선임심사원 자격 보유 이후 최근 3년    이내의 15MD 이상 </p></td>
               </tr>
               <tr>
                 <td width="82" align="center" valign="middle" bgcolor="#F9F8CA"><p align="center"><strong>시험</strong><strong> </strong></p></td>
                 <td width="148" align="center" valign="middle"><p align="center">GPC 지식 및 인성시험 </p></td>
                 <td width="89" align="center" valign="middle"><p align="center">GPC 지식 및 인성시험 </p></td>
                 <td width="147" align="center" valign="middle"><p align="center">GPC 지식 및 인성시험 </p></td>
                 <td width="157" align="center" valign="middle"><p align="center">GPC 지식 및 인성시험 </p></td>
                 <td width="214" align="center" valign="middle"><p align="center">GPC 지식 및 인성시험 </p></td>
               </tr>
             </table>		
            </div>		
		</ul>

		</div>


		<div class="vision_area">
		<h2 class="title" style="color:#009999;">IGC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                      &#9640; IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 50001에 대한 개인인증 서비스를 제공합니다. <br><br>
                      &#9640; GPC는 IAF(International Accreditation Forum)로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관입니다. <br><br>
                      &#9640; IPC는 IAF로부터 IPC의 개인인증에 관한 절차를 인정받았습니다.<br><br>
                      &#9640; IPC와 개인인증 및 연수기관 지정에 대해 MLA를 체결한 GPC의 경우, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
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
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 30px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                      &#8284;IGC인증원은 국내 식품 제조 기업의 해외시장 진출을 위한 다양한 인증 및 시험서비스를 제공합니다. 시험, 인증, 심사원 양성까지 수출을 위해 필요한 모든 과정을 One-stop 서비스로 빠르고 정확하게 지원합니다.<br><br>

                      &#8284;IAF 승인 ISO 22000 선임심사원 인증서<br><br>

                      &#8284;IGC는 IAF MLA 개인인증 승인기관인 GPC와의 협력을 바탕으로 ISO 22000 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다.<br> <br>

                      &#8284;FSSC 22000 선임 심사원 지정을 위해 FSSC로부터 TO(Training Organization)로 지정을 받아 활발하게 FSSC 22000 심사원 양성 업무를 수행하고 있습니다.<br><br>
					</span>
					<!-------------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span------------->
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













































