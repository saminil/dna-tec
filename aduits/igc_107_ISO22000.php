<?php
	include_once('./_common.php');
$g5['title'] = 'ISO 22000심사원인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

	table,td p {font-size:0.9em;margin-left:0px;padding-left:20px;}
    td {font-size:96%;padding-left:20px;}
    
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
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso22000_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso22000_02.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso22000_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso22000_04.jpg);}
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



	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 22000(식품안전 경영시스템) </span> | 심사원인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		ISO 22000은 식품안전경영시스템으로 ISO 9001 및 HACCP의 주요 내용을 혼합 및 보완하였고, 모든 식품관련조직에 적용 가능한 국제규격입니다. 기업은 ISO 22000 취득을 통해 고객 신뢰성 향상 및 영업 효과를 기대할 수 있습니다.<br><br>
       
        식품 안전 규정이 효력을 갖기 위해서 관리 시스템 방식을 이해하고 이 방식에 대해 유능한 심사원이 필요합니다. GPC ISO 22000 심사원 인증 프로그램은 규제기관, 인정기관, 인증기관, 기업, 산업 및 국민 전반에게 이 프로그램에 인증된 심사원의 유능함과 신뢰를 제공하는데 목적을 하고 있습니다. 인증 과정의 일환으로 심사하는 동안 입증이 필요한 능력(핵심 기술, 지식 및 경험)의 요구사항에 대해서 식품 안전 심사원을 평가합니다.

		
		</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 22000 심사원 인증 프로그램 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                        심사원 인증 프로그램은 다음 표준에 기반합니다.<br><br>

                        &#8280; ISO TS 22003:2013, 식품 안전 관리 시스템: 식품 안전 관리 시스템 심사 및 인증 기관에 대한 요구사항<br>
                        &#8280; ISO 22000:2018, 식품 안전 관리 시스템: 식품 체인 조직에 대한 요구사항 및 심사 지침 표준<br>
                        &#8280; ISO 19011:2011, 심사 관리 시스템에 대한 요구사항<br>
                        
                        &#8281; 인증부여는 신청자가 다음 사항을 이해하고 능숙하게 수행(등급에 따름)한다고 GPC에서 인정했음을 의미합니다.<br>
                        
                        &#8278; 올바른 윤리적 행위, 공정한 프리젠테이션 및 적절한 전문적 관리 원칙의 고수<br>
                        &#8278; 조직의 모든 수준에서 직원들과 구두 및 서면으로 명확하게 의사 소통<br>
                        &#8278; FSMS 심사에 대한 계획 및 조직화<br>
                        &#8278; 관련된 업무 과정에 대한 식별과 이해<br><br>
                        
                        특히 다음 사항에 관해서 객관적 증거를 평가하고 식품안전관리 시스템의 유효성을 결정합니다.<br><br>
                        
                        
			             <table border="1" cellspacing="0" cellpadding="0" style="font-size:1.1em;width:80%;margin:0 auto;">
                           <tr>
                             <td width="586" valign="top"><p>위험 평가 시스템을 통해 위험에 대한 조직 관리의 효과 </p></td>
                           </tr>
                           <tr>
                             <td width="586" valign="top"><p>조직에서 법적 요구 사항을 준수하는 능력 </p></td>
                           </tr>
                           <tr>
                             <td width="586" valign="top"><p>조직의 비상 절차 및 대응이 적절한지 여부 </p></td>
                           </tr>
                           <tr>
                             <td width="586" valign="top"><p>위험 관리 및 개선 프로그램의 구현 </p></td>
                           </tr>
                           <tr>
                             <td width="586" valign="top"><p>식품 안전 성과에 대한 지속적인 개선 </p></td>
                           </tr>
                         </table>
					</span>
				</div>
			</li>
			<br>

          </ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">식품 안전 관리 시스템 심사원 제도, 기본 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
						
                    <span style="font-weight:bold;">심사원 등록 제출 서류</span><br><br>
                        &#8281; 경력증명서<br><br>
                        &#8281; 심사원증<br><br>
                        &#8281; 교육수료증<br><br>
                        &#8281; 심사이력 로그시트 작성<br><br>

					</span>
					<!---------------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span--------------->
				</div>
			</li>
			<br>
            <div style="overflow-x:auto;font-size:1.2em;">
            <table border="1" cellspacing="0" cellpadding="0">
            
              <tr>
                <td><p>&nbsp;</p></td>
                <td><p align="center">선임심사원 </p></td>
                <td><p align="center">심사원 </p></td>
                <td><p align="center">검증심사원 </p></td>
                <td><p align="center">내부심사원 </p></td>
                <td><p align="center">심사원보 </p></td>
              </tr>
            
              <tr>
                <td><p>교육 </p></td>
                <td colspan="5"><p>중등교육 이상 </p></td>
              </tr>
              <tr>
                <td><p>업무경력 </p></td>
                <td colspan="2"><p>5년    이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의    경력 포함)</p></td>
                <td><p>10년    이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의    경력 포함)</p></td>
                <td><p>3년    이상( 해당 규격 관련 품질 또는 환경 분야 1년 이상의    경력 포함)</p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>심사경력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 35MD 이상의 심사 이력(그    중 15MD이상은 선임심사원으로서의 심사이력)</p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 20MD 이상의 심사 이력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 15MD 이상의 심사 이력(공인된    개인인증기관으로부터 선임심사원 자격 취득후의 이력만 수용 가능)</p></td>
                <td><p>최근 3년    이내 5회 이상 + 최소 15MD 이상의 심사 이력 </p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>교육훈련 </p></td>
                <td colspan="5"><p align="center">*심사원/선임심사원    교육과정 <br>
                  (공인된 개인인증기관 혹은 그로부터 지정 받은 연수기관의 발행    수료증만 수용 가능)</p></td>
              </tr>
              <tr>
                <td><p>시험 </p></td>
                <td colspan="5"><p align="center">GPC 지식 및 인성시험 합격 </p></td>
              </tr>
            </table>		
            </div>		
		</ul>
		<!----------------ul>
			<li>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
			</li>
			<li>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</li>
		</ul---------------->
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">시험</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                    &#8280; 시험은 지식 시험과 인성 시험의 두 종류 서면 시험으로 구성됩니다.<br>
                    &#8280; 시험은 GPC에서 사전에 평가하여 최종적으로 승인한 장소에서 수행됩니다. (시험 전에 통지)<br>
                    &#8280; 신청자는 시험이 시작되기 최소 10분 전까지 시험 장소에 도착해야 하며 지각하거나 결석할 경우 0점으로 자동 기록됩니다.<br>
                    &#8280; 후보자 확인을 위해 사진이 있는 신분증을 제시해야 하며 시험장에서 금지된 물품은 시험이 시작하기 전에 시험 감독관에게 맡겨야 합니다.<br>
                    &#8280; 부정행위가 발견되면 시험 감독자는 후보자에게 즉시 퇴장하도록 요청하며 더 이상의 시험이 허용되지 않습니다.<br>
                    &#8280; 시험 장소와 연락처 정보에 대한 자세한 내용은 시험 통지서를 참조해주십시오.<br>
					</span>
					<!----------span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span---------->
				</div>
			</li>
		</ul>
		<br>
		<ul>
			<li style="line-height:30px; list-style:none;padding-left:5%;">
               <span style="font-weight:bold;">지식 시험</span><br>
               시험 문제는 ISO 22000 2005 표준에 기반하여 작성되며 시험의 목적은 후보자가 신청하는 표준을 통해 심사 활동을 원하는 후보자의 자격과 능력을 평가하는데 있습니다.
               지식 시험은 100개의 문제로 구성되며 4가지 섹션으로 구성됩니다.
			</li>
			<br>
		  <div style="width:60%;margin:0 auto;font-size:1.2em;%">
			    <table border="1" cellspacing="0" cellpadding="0" align="left" >
                 <tr>
                   <td><p>Section I    (ISO 22000:2005): 총 50점 중 최소    20점 이상 </p></td>
                 </tr>
                 <tr>
                   <td><p>Section II    (ISO 19011:2011): 총 30점 중 최소    12점 이상 </p></td>
                 </tr>
                 <tr>
                   <td><p>Section III    (규격특화 문항): 총 10점 중 최소 4점 이상 </p></td>
                 </tr>
                 <tr>
                   <td><p>Section IV    (사례 연구): 총 10점 중 최소 4점 이상 </p></td>
                 </tr>
                 <tr>
                   <td><p>Total: 총 100점 중 최소    70점 이상 </p></td>
                 </tr>
               </table>
          </div>

		</ul>
		
		<br>
		
		<ul>
             <li style="line-height:20px; list-style:none;padding-left:5%;">
              <br>
               문제 당 배점은 1점이며 합격 기준은 다음과 같습니다.<br><br>
              &#8280; 신청자는 합계 점수가 70점 이상 이어도 각 섹션에서 요구하는 최소 점수를 넘지 않으면 시험을 통과할 수 없습니다.<br><br>
              &#8280; 시험 제한 시간은 120분이며 오픈북(GPC가 제공하는 표준 Hard Copy본)으로 진행됩니다.<br><br>
              &#8280; 시험에 불합격한 후보자에게는 시험 기회가 한 번 더 제공된다. 후보자가 시험에 연속해서 불합격하면<br><br>
             </li>
		</ul>
		<br>
		
		<ul>
            <li style="line-height:30px; list-style:none;padding-left:5%;">
               <span style="font-weight:bold;">인성 시험</span><br>
                 인성 시험의 목적은 심사원으로서의 특성과 자격을 평가하는데 있으며 신청자가 질문을 얼마나 이해하는지 묻습니다.<br><br>
                 &nbsp; &nbsp; &#8281; 시험은 ISO 19011:2011에 기반하며 25문항으로 구성됩니다.<br><br>
                 &nbsp; &nbsp; &#8281; 각 문항당 최대 4점까지 주어지며 대답이 정답에서 멀수록 1점씩 공제됩니다. (대답이 없으면 0점)<br><br>
                 &nbsp; &nbsp; &#8281; 통과 기준은 70점입니다.<br><br>
                 &nbsp; &nbsp; &#8281; 시험에 불합격하면 재시험의 기회가 추가로 제공됩니다. 후보자가 재시험에서 불합격하면 1년 간 시험 응시 자격이 박탈됩니다.<br><br>

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
			IGC 인증원은 GPC로부터 승인을 받아 다양한 경영시스템 분야에 대한 심사원 연수과정을 제공하고 있습니다.<br>
				
				<li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
				<li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
				<li><p><em><strong>03</strong></em><span>ISO 13485</span></p></li>
				<li><p><em><strong>04</strong></em><span>ISO 22716</span></p></li>
				<li><p><em><strong>05</strong></em><span>ISO 45001</span></p></li>
				<li><p><em><strong>06</strong></em><span>ISO 37001</span></p></li>
				<li><p><em><strong>07</strong></em><span>ISO 50001</span></p></li>
				<li><p><em><strong>08</strong></em><span>ISO 22301</span></p></li>
				<li><p><em><strong>09</strong></em><span>ISO 22000</span></p></li>
				<li><p><em><strong>10</strong></em><span>FSSC22000</span></p></li>
				
            <span style="display:inline-block;font-weight:bold;margin-top:30px;color:#009999;">
            심사원 양성 및 심사원 자격증 획득지원 </span><br>
           
IGC는 심사원 양성과정 이후 심사 업무 참여를 원하는 신청자에 대하여 심사참여를 통한 심사원 양성 혹은 1자 및 2자 심사를 통한 경험이 충분한 신청자의 경우 검증심사를 통하여 심사원 자격을 확보할 수 있도록 지원하고 있습니다.
			
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>      

	
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>













































