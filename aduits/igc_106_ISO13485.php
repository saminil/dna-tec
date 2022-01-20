<?php
	include_once('./_common.php');
$g5['title'] = 'ISO 13485 심사원인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
    
    table{width:100%;border: 1px solid #66ccff;}
    
    th,td{border: 1px solid #66ccff;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding-left:0px;}
    
    td {font-size:100%;padding-left:0px;}
    
    
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
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso13485_02.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso13485_01.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso13485_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso13485_04.jpg);}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background-image:url(images/audit_iso13485_06.jpg);}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background-image:url(images/audit_iso13485_04.jpg);}
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


	
	<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:00px;width:100%;">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
	

	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 13485:2016 </span> | 심사원인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		ISO 13485:2016은 의료기기 및 관련 서비스에 대한 품질관리시스템 요구사항입니다. 조직은 의료기기 및 관련 서비스 제조와 관련된 고객 및 법적 요구사항을 충족하여야 합니다. ISO 13485:2016은 의료기기의 설계, 개발, 생산, 설치, 서비스, 판매를 하는 조직을 위해 고안되었습니다.
		</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title"  style="color:#009999;">ISO 13485:2016 심사원 인증 기대효과</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                      ISO 13485:2016 인증의 기대 효과는 다음과 같습니다.<br><br>
                      1. 품질, 안전 및 법적 요구사항을 포함한 고객의 요구사항을 지속적으로 충족하는 제품을 제공함으로써 고객의 만족도를 향상시킬 수 있습니다.<br>
                      2. 법적/규제적 요구사항을 준수할 수 있습니다.<br>
                      3. 제품의 일관성 및 추적성을 증가시키고 리스크 관리 기법을 통해 리스크를 최소화하도록 도움을 줄 수 있습니다.<br>
                      4. 인정된 검증에 대한 독립적인 검증을 통해 신뢰도를 향상시킬 수 있습니다.<br>
					</span>
					<!----span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span----->
				</div>
			</li>
		</ul>
		
		<!----------------
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
		---------------->
		
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">심사원 인증의 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                       심사원 인증은 자격 인증기관에 대한 국제적으로 통용되는 기준을 달성하고 촉진하기 위한 목적으로 개발되었습니다. 인원에 대한 자격인증은 규격의 요구사항을 준수하고 있음을 보장하는 방법 중 하나입니다. 인원에 대한 각 인증 제도의 신뢰성은 인증을 받은 사람의 적격성을 평가하고 주기적으로 재평가하는 국제적으로 통용되는 프로세스를 통해 달성됩니다.<br><br>
                       심사원 인증은 인원에 대한 인증 제도를 운영하는 자격인증기관이 일관적이고 비교 가능하며 신뢰할 수 있는 방식으로 운영됨을 보장하는 요구사항을 명시하고 있습니다. 심사원 인증의 요구사항은 자격인증기관에 대한 일반 요구사항으로 고려되어야 합니다. 
					</span>
					<span></span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
			<li>
               
                <span style="display:block;padding:20px;font-size:1.3em;text-align:left;margin-bottom:-25px;">심사원의 종류</span>
					<div class="txtBox00">내부심사원(Internal Auditor)</div>
					<div class="txtBox01">심사원보(Provisional Auditor)</div>
					<div class="txtBox02">심사원(Auditor)</div>
					<div class="txtBox03">선임심사원(Lead Auditor)</div>
					<div class="txtBox04">검증심사원(Senior Auditor)</div>
			</li>
			<br>

			<span style="display:block;padding:20px;font-size:1.3em;text-align:left;margin-bottom:-12px;">심사원 등급에 따른 자격 요구사항</span>
               
                <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="77" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p></td>
                      <td width="105" valign="top"><p align="center"><strong>내부심사원</strong><strong> </strong></p></td>
                      <td width="95" valign="top"><p align="center"><strong>심사원보</strong><strong> </strong></p></td>
                      <td width="110" valign="top"><p align="center"><strong>심사원</strong><strong> </strong></p></td>
                      <td width="96" valign="top"><p align="center"><strong>선임심사원</strong><strong> </strong></p></td>
                      <td width="96" valign="top"><p align="center"><strong>검증심사원</strong><strong> </strong></p></td>
                    </tr>
                    <tr>
                      <td width="77" valign="middle" bgcolor="#FFFFFF"><p align="center"><strong>학력</strong><strong> </strong></p></td>
                      <td width="502" colspan="5" valign="top"><p align="center">고등학교 졸업 </p></td>
                    </tr>
                    <tr>
                      <td width="77" valign="middle" bgcolor="#FFFFFF"><p align="center"><strong>경력</strong><strong> </strong></p></td>
                      <td width="105" valign="top"><p align="center">3년 이상 </p></td>
                      <td width="95" valign="top"><p align="center">&nbsp;</p></td>
                      <td width="110" valign="top"><p align="center">5년이상 <br>
                        (신청 표준 관련하여 품질 혹은 환경 분야 경력 최소 2년 이상)</p></td>
                      <td width="96" valign="top"><p align="center">5년이상 <br>
                        (신청 표준 관련하여 품질 혹은 환경 분야 경력 최소 2년 이상)</p></td>
                      <td width="96" valign="top"><p align="center">10년이상 <br>
                        (신청 표준 관련하여 품질 혹은 환경 분야 경력 최소 5년 이상)</p></td>
                    </tr>
                    <tr>
                      <td width="77" valign="middle" bgcolor="#FFFFFF"><p align="center"><strong>수료증</strong><strong> </strong></p></td>
                      <td width="105" valign="top"><p align="center">심사원 교육 수료증 또는 내부심사원 교육 수료증 </p></td>
                      <td width="301" colspan="3" valign="top"><p align="center">심사원 교육 수료증 </p></td>
                      <td width="96" valign="top"><p align="center">&nbsp;</p></td>
                    </tr>
                    <tr>
                      <td width="77" valign="middle" bgcolor="#FFFFFF"><p align="center"><strong>심사이력</strong><strong> </strong></p></td>
                      <td width="105" valign="top"><p align="center">최근 3년 이내 내부심사 5회 이상, 최소 15MD 이상의    내부심사 이력 </p></td>
                      <td width="95" valign="top"><p align="center">지식 및 인성시험 </p></td>
                      <td width="110" valign="top"><p align="center">최근 3년 이내 20MD 이상 <br>
                        (8MD 이상의 ON-Site  심사 및 3회 이상의 심사    포함)</p></td>
                      <td width="96" valign="top"><p align="center">최근 3년 이내 35MD 이상 <br>
                        (15MD 이상의 선임심사원, 8MD 이상의    ON-site 심사 및 3회 이상 심사 포함)</p></td>
                      <td width="96" valign="top"><p align="center">선임심사원 자격 보유 이후 최근 3년    이내의 15MD 이상 </p></td>
                    </tr>
                    <tr>
                      <td width="77" valign="middle" bgcolor="#FFFFFF"><p align="center"><strong>시험</strong><strong> </strong></p></td>
                      <td width="105" valign="top"><p align="center">지식 및 인성시험 </p></td>
                      <td width="95" valign="top"><p align="center">&nbsp;</p></td>
                      <td width="110" valign="top"><p align="center">지식 및 인성시험 </p></td>
                      <td width="96" valign="top"><p align="center">지식 및 인성시험 </p></td>
                      <td width="96" valign="top"><p align="center">지식 및 인성시험 </p></td>
                    </tr>
                   </table>	
                   <br><br>
                   <li>
                       <span style="display:block;padding:20px;font-size:1.3em;text-align:left;">교육 수료증에 대한 요구사항</span>
                       <p>
                        &nbsp; &nbsp;   &#10022; ISO/IEC 17024에 따라 인정을 받은 개인 인증기관의 관련 품질시스템 선임심사원/심사원 교육 과정 수료증<br><br>
                        &nbsp; &nbsp;   &#10022; 공인된 기관으로부터 지정 받은 교육 연수기관이 제공하는 관련 경영시스템 선임 심사원/심사원 교육과정 수료증<br><br>
                       </p>
                   </li>
		
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 13485:2016 심사원 인증</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                         의료기기 산업은 국내, 국제 표준 및 기타 요구 사항의 복잡한 배열의 규제 시스템의 영향을 받고 있습니다. ISO 13485 시스템 인증은 업체가 무엇을 어떻게 해야 국제 시장에 진입할 수 있을지에 대한 도움이 될 수 있습니다.<br><br>
					</span>
					<!----------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span---------->
				</div>
			</li>
			<br>
			<li>
			    <span style="display:block;padding:20px;font-size:1.3em;text-align:left;">ISO 13485:2016 심사원 인증의 목적</span>
                        <span style="display:block;padding:20px;line-height:30px;">ISO 13485 심사원 인증의 주요 목적은 표준화된 의료기기의 법적 요구사항 지정하는 것이며 다음 사항을 포함합니다.<br>
                          &nbsp; &nbsp;  &#10023;개선을 통한 품질경영시스템의 구현<br>
                          &nbsp; &nbsp;  &#10023;위험분석을 통한 제품 개발 및 제품 실현<br>
                          &nbsp; &nbsp;  &#10023;검증 프로세스<br>
                          &nbsp; &nbsp;  &#10023;법령과 규제 요건의 준수<br>
                          &nbsp; &nbsp;  &#10023;효과적 제품 추적성 관리 및 리콜 시스템<br>
                        </span>
			</li>	
		</ul> 
		<br>
		<ul>
			<li style="line-height:30px; list-style:none;padding-left:3%;">

             <span style="display:block;font-size:1.3em;text-align:left;margin-top:20px;margin-left:-10px;">ISO 13485:2016 심사원 요구사항</span><br>
             &#8281; 학력: 대학교(4년제) 졸업 이상<br>
             &#8281; 전공: 생물학, 미생물학, 화학, 생화학, 컴퓨터 및 소프트웨어 기술, 전기, 전자, 기계, 생물 공학, 인간생리학, 약학, 물리학<br>
             &#8281; 또는 경력: 의료기기, 의료 연구 분야에서 4년 이상 정규직으로 일한 사람<br><br><br>
             
             
             <span style="display:block;font-size:1.3em;text-align:left;margin-left:-10px;">특별 요구사항 및 기술적 역량</span><br>
             1. 의료기기에 대한 기본 지식과 다음을 포함한 관련 생산활동의 이해<br>
              &#8281; 사용목적<br>
              &#8281; 위험분석을 포함한 의료기기의 분류<br>
              &#8281; 법적 규제 프레임 워크와 인증기관의 역할<br>
              &#8281; 의료기기 위험평가(ISO 14971)<br>
              &#8281; 의료기기 평가 관련 제품 규격<br>
              &#8281; 인증기관의 ISO 13485 인증<br>
              &#8281; 의료기기 사업/기술에 대한 지식<br><br>

            2. 통계분석<br>
              &#8281; 신뢰성, 표준 편차 등을 고려한 샘플링 및 트렌드 분석에 따른 확률과 통계에 대한 기본 지식<br><br>

            3. 다음사항에 대한 지식<br>
              &#8281; 멸균기술 및 검증 기술<br>
              &#8281; 미생물학 및 BIO-Burden 모니터링<br>
              &#8281; 생체 적합성 및 검증<br>
              &#8281; 클린룸 운영<br>
              &#8281; 환경 모니터링 및 제어<br>
              &#8281; 포장 기술<br>
              &#8281; 안정성 시험<br>
              &#8281; 위험 관리 기반<br>
              &#8281; 세척 및 소독<br>
              &#8281; 의료기기의 생물학적 평가<br>
              &#8281; 의료기기의 임상 평가<br>
              &#8281; 의료기기의 물리적, 화학적 평가<br>
              &#8281; 공정 검증 관행에 대한 지식<br>
              &#8281; 소프트웨어 검증 기술<br><br>

			</li>
			<!------------------------dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd------------------------>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">IGC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt">
					<span style="display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                       &#8284; IGC는 미국의 인정기구인 IAS로부터 ISO 13485:2016에 대한 인정을 받아 의료기기 및 관련 서비스에 대한 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br>
                       &#8284; IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>

                       &#8284; IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 ISO 13485는 물론 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다. <br>
                       &#8284; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br> <br>

                       &#8284; IGC인증원은 협력기관인 GPC를 통해 심사원 인증을 지원하고 있습니다.<br> 
                       &#8284; GPC 인증원은 ISO/IEC 17024에 의거하여 개인의 자격을 인증해주는 국제적인 개인인증 평가기관으로 개인인증은 적용되는 표준에 근거하여 능력의 적합성을 평가한 이후 인증서를 발행하고 있습니다. <br>
                       &#8284; GPC 인증원이 발행한 개인인증서는 국제적인 신뢰성을 확보한 인증서입니다.<br><br>
                       &#8284; ㈜IGC인증원은 GPC로부터 승인된 교육 및 연수기관인 IGC Academy에서 ISO 13485심사원에 대한 교육을 지원하고 있습니다.<br>
					</span>
					<!-------------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span------------->
				</div>
			</li>
		</ul>
		<!---------------ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
			</li>
			<li>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</li>
		</ul--------------->
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
				<li><p><em><strong>01</strong></em><span>ISO 13485:2016 심사원 및 선임심사원 인증 지원</span></p></li>
				<li><p><em><strong>02</strong></em><span>ISO 13485:2016 검증심사원 인증 지원</span></p></li>
				<li><p><em><strong>03</strong></em><span>ISO 13485:2016 내부심사원 인증 지원</span></p></li>
				<li><p><em><strong>04</strong></em><span>ISO 13485:2016 심사원보 인증 지원</span></p></li>
				<li><p><em><strong>05</strong></em><span>ISO 13485:2016 심사원 교육</span></p></li>				
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>      
 
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>