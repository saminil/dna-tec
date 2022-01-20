<?php
	include_once('./_common.php');
$g5['title'] = '심사원인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso14001_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso14001_02.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso14001_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso14001_04.jpg);}
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 14001 </span> | 환경경영시스템(EMS) 심사원 인증</h1>
		
		<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:10px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
		
	<section class="vision_type5">	
		<div class="vision_area">
		<h2 class="title" style="color:#009999;display:block;text-align:left;">심사원 인증 개요</h2>
                 <ul>
                     <li>
                     <span  style="display:block;margin:3%;">
                     인증이란? 결국 귀사가 심사 등급에 따른 이해를 하고 있으며 적격성이 있다는 것을 당사가 인식하고 있다는 것입니다.<br><br>
                     &#10021;  적절한 윤리적 행동, 공정한 발표 그리고 전문적인 관심의 원칙을 유지.<br>
                     &#10021;  조직의 모든 수준에서 인원들과 명확하게 구두 및 서면으로 의사소통 함.<br>
                     &#10021;  환경경영시스템 심사를 계획하고 구성함.<br>
                     &#10021;  관련 비즈니스 프로세스를 인지하고 이해함.<br>
                     &#10021;  객관적 증거물을 평가하고 환경경영시스템의 효과성을 결정함.<br>
                     &#10021;  심사발견사항과 결론을 정확하게 보고함.<br>
                     &#10021;  심사팀을 이끌고 심사 프로세스를 경영함.<br>
                     &#10021;  경영 프로세스를 심사함.<br>
                     &#10021;  환경측면과 영향 그리고 그들의 중요성을 판단하는 능력의 기본 지식<br>
                     &#10021;  관련 법규의 지식<br>
                     &#10021;  평가되는 산업 프로세스의 지식<br>
                     
                     </span>
                     </li>
                 </ul>
        </div>
    </section>
		
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 14001 심사원 인증 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!------CHALLENGE-----></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
					<span style="font-weight:bold;">1) 기본 요구사항</span><br><br>
						&#10022; 교육 수료증 요구사항은 다음과 같습니다.<br><br>

                        &nbsp; &nbsp; &#8278; 교육연수원 절차의 요구사항을 충족하여 GPC가 승인한 경영시스템 선임심사원 교육 수료증<br><br>
                        &nbsp; &nbsp; &#8278; ISO/IEC 17024에 의해 승인된 개인인증기관으로부터 지정받은 교육연수기관이 제공하는 경영시스템 선임심사원 교육수료증<br><br>
                        &nbsp; &nbsp; &#8278; 공인된 기관으로부터 지정받은 교육연수기관이 제공한 경영시스템 선임심사원 교육 수료증<br><br>
 
					</span>
					<!----span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span----->
				</div>
			</li>
		</ul>
		<br><br>
		<table cellspacing="0" cellpadding="0">
            <col width="115">
            <col width="303" span="4">
            <col width="193">
            <tr>
              <td width="86" align="center" bgcolor="#BBEFF0">　</td>
              <td width="191" align="center" bgcolor="#BBEFF0">심사원</td>
              <td width="190" align="center" bgcolor="#BBEFF0">선임심사원</td>
              <td width="252" align="center" bgcolor="#BBEFF0">검증 심사원</td>
              <td width="198" align="center" bgcolor="#BBEFF0">내부심사원</td>
              <td width="217" align="center" bgcolor="#BBEFF0">심사원보</td>
            </tr>
            <tr>
              <td width="86" align="center">교육</td>
              <td colspan="5">중등    교육 이상</td>
            </tr>
            <tr>
              <td width="86" align="center">업무 경력</td>
              <td colspan="2" align="center">5년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</td>
              <td width="252" align="center">10년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 5년 이상의 경력 포함)</td>
              <td width="198" align="center">3년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</td>
              <td width="217" align="center">해당    사항 없음</td>
            </tr>
            <tr>
              <td width="86" align="center">심사 경력</td>
              <td width="191" align="center">최근    3년 이내에 심사원 또는 선임심사원으로서 20 M/D 이상의 심사 이력)</td>
              <td width="190" align="center">최근    3년 이내에 심사원 또는 선임심사원으로서 35 MD 이상의 심사 이력(그 중 15 M/D 이상은 선임심사원으로서 심사 이력)</td>
              <td width="252" align="center">최근    3년 이내 선임심사원으로서 15 M/D 이상의  심사 이력(공인된 개인    인증 기관으로부터 선임 심사원 자격 취득 후의 이력만 수용 가능)</td>
              <td width="198" align="center">최근    3년 이내 5회 시상 + 최소 15 M/D 이상의  심사 이력</td>
              <td width="217" align="center">해당    사항 없음</td>
            </tr>
            <tr>
              <td width="86" align="center">교육 훈련</td>
              <td colspan="5" align="center">*심사원/선임심사원    교육 과정<br>
                (공인된 개인 인증 기관 혹은 그로부터 지정 받은 연수 기관의 발행 수료증만 수용 가능)</td>
            </tr>
            <tr>
              <td width="86" align="center">시험</td>
              <td colspan="5" align="center">GPC    지식 및 인성 시험 합격</td>
            </tr>
        </table>
		<br><br>
		<ul>
		    <span style="font-weight:bold;">2) 환경경영시스템 심사원 제도, 지정요구사항</span><br><br>

               조직의 활동, 제품, 서비스 그리고 운영이 환경과의 상호작용을 이해하는 것은 환경경영시스템 심사원으로서 가장 중요한 적격성 부분입니다. 환경과학과 기술은 심사원으로 하여금 인간의 활동과 환경측면의 주요관계를 이해할 수 있도록 도와줄 수 있습니다. 환경심사원은 환경경영시스템을 심사하고 적절한 심사발견 사항을 도출하며 결정을 내릴 수 있는 능력을 부여할 수 있도록 환경경영기법과 기술에 대한 지식을 보유하고 있어야 합니다.<br><br>
               
               환경심사팀은 심사일원으로써 다음의 10 가지 지식 적격성을 보유하고 있어야 합니다.<br><br>
               
               &#8281; 환경용어<br>
               &#8281; 환경메트릭스<br>
               &#8281; 환경 모니터링 그리고 측정 기술<br>
               &#8281; 환경측면과 영향 그리고 환경중요성을 인식하고 평가하기 위한 기술<br>
               &#8281; 디자인의 환경측면<br>
               &#8281; 환경수행평가<br>
               &#8281; 법적 및 그 밖의 요구사항<br>
               &#8281; 비상사태 대비 및 대응<br>
               &#8281; 운영관리<br>
               &#8281; 장소관련 사항<br>
               &#8281; 이전 환경검토 이해<br><br>
                
               심사팀은 또한 다음의 환경관련 분야에서 측면, 모니터링, 측정 그리고 운영관리의 철저한 이해를 필요로 합니다.<br><br>
               
               &#8281; 대기로 배출<br>
               &#8281; 토양으로 배출<br>
               &#8281; 수질로 배출<br>
               &#8281; 원재료, 에너지 그리고 천연자원의 배출<br>
               &#8281; 에너지 방출<br>
               &#8281; 수질<br>
               &#8281; 물리적 특성<br><br>
                
               심사의 일환으로 GPC는 능력을 보유하고 있어 심사동안 증명할 필요성이 있는 적격성을 정의하는 주요 능력, 지식 그리고 경험 요구사항에 대비하여 신청자를 평가할 것입니다.<br><br>

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
		<h2 class="title" style="color:#009999;">ISO 14001 심사원 인증 신청절차</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                       신청자는 신청할 심사원의 등급을 결정합니다.<br><br>
                       &#8284; 신청서를 작성하고 자격을 증명하기위해 아래의 증빙서류를 GPC에 제출해야 합니다.<br>
                       (증빙자료가 충분하지 않을 경우 GPC는 추가 자료를 요청할 수 있음)<br><br>
                       
                       &nbsp; &nbsp; &#8278; 졸업증명서<br><br>
                       &nbsp; &nbsp; &#8278; 경력증명서<br><br>
                       &nbsp; &nbsp; &#8278; 심사이력<br><br>
                       &nbsp; &nbsp; &#8278; 교육수료증<br><br>
                       &nbsp; &nbsp; &#8278; 검증심사 평가기록<br><br>
					</span>
				</div>
			</li>
		</ul>
		
		<br>
		
		<ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
				<span >
                      &#8284; 신청서가 접수되고 자격요건을 충족하면 신청자는 평가대상자로서 GPC의 지식, 인성시험을 치를 수 있는 자격이 부여됩니다.<br>
                      &#8284; 모든 평가대상자는 두 시험을 합격하여야 인증서를 받을 수 있습니다.<br>
                      &#8284; GPC에서 수용할 수 있는 교육 수료증의 요구기준은 아래와 같습니다.<br>
                      
                       &nbsp; &nbsp;  &#8278; 교육연수기관 절차의 요구사항을 충족하는 GPC가 승인한 관련 경영시스템 선임심사원 교육과정 수료증<br>
                       &nbsp; &nbsp;  &#8278; ISO/IEC 17024에 따라 인정을 받은 개인인증기관의 관련 품질시스템 선임심사원 교육과정 수료증<br>
                       &nbsp; &nbsp;  &#8278; 공인된 기관으로부터 지정받은 교육연수기관이 제공하는 관련 경영시스템 선임심사원 교육과정 수료증<br>
                      &#8284; 인증은 발행일로부터 3년간 유효하며, 매년 인증받은 주기마다 유지비용을 지불하여야 합니다.<br>
					</span>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">심사원 시험</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>TRUST</em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                      <span style="font-weight:bold;margin-bottom:3%;margin-top:5%;">1) 본 시험은 서면의 두 가지 방식으로 지식시험 및 인성시험으로 구성이 됩니다.</span>
 
                       &#8278; 시험은 GPC가 사전에 평가하고 최종 승인한 장소에서 수행됩니다. (시험과 관련한 정보는 사전에 통보될 것입니다.) <br>
                       &#8278; 시험자는 반드시 시험이 실시되기 적어도 10분전에 입실해야 합니다. 만약 지각 또는 결석의 경우, 자동적으로 0점 처리가 됩니다.<br>
                       &#8278; 평가대상자는 자신의 신분을 확인하기 위해 사진이 부착된 신분증을 보여주어야 합니다. <br>
                       &#8278; 시험장에서 반입이 금지된 물품은 시험이 시작되기 전에 시험감독관에게 보관해야 합니다.<br><br>
                        
                       만약 부정행위가 발견되면, 시험감독관은 바로 퇴장명령을 요구할 것이며 더 이상 시험은 허용될 수 없습니다. 시험장소 및 정보를 확인하기 위해서 자세한 시험통보를 확인해 주시기 바랍니다.<br><br>

                         

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
			<li style="line-height:40px; list-style:none;padding-left:5%;">
                <span style="font-weight:bold;margin-bottom:3%;margin-top:5%;">2) 지식시험</span><br>
 
                     본 시험 질문은 ISO 14001:2015 규격에 출처를 두고 있으며 시험의 목적은 지원하고자 하는 규격에서 심사활동을 하고자 하는 평가대상자의 자질과 적격성을 평가하는데 있습니다.
                      
                     지식시험은 총 100 문제로 구성되어 있으며 4가지 영역으로 구분되어 있습니다.<br>
                      
                     한문제당 1점이며 합격기준은 다음과 같습니다.<br>
                      
                     &#8280; Section I (ISO 14001:2015): 총 50 점 중 최소 20 점 이상.<br>
                     &#8280; Section II (ISO 19011:2011): 총 30 점 중 최소 12 점 이상.<br>
                     &#8280; Section III (규격특화 문항): 총 10 점 중 최소 4 점 이상.<br>
                     &#8280; Section IV (사례 연구): 총 10 점 중 최소 4 점 이상.<br>
                     &#8280; Total: 총 100 점 중 최소 70 점 이상.<br>
                     * 총점이 70점을 넘을지라도, 각 영역에서 요구되는 최소한의 점수를 충족하지 못하면 시험에 통과할 수 없습니다.<br>
                      
                     시험을 위해 주어진 시간은 120분이며 오픈북(GPC가 제공하는 표준 Hard Copy본)으로 진행됩니다. 시험에 통과하지 못할 시 재 시험의 기회가 있습니다. 재 시험에서 합격하지 못하면 평가대상자는 1 년간 시험 응시 자격이 박탈됩니다.<br><br>
                      
                                     <span style="font-weight:bold;margin-bottom:3%;margin-top:5%;">3) 인성시험</span><br>
                      
                     &#8278; 인성 시험의 목적은 심사원으로서 특성과 자질을 파악하고 평가대상자가 질문에 얼마만큼 이해를 하는지 평가하는데 있습니다.<br>
                      
                     &#8278; 인성시험은 ISO 19011:2011 출처를 두고 있으며 25문항으로 구성되어 있습니다.<br> 
                      
                     &#8278; 각 문항은 최대 4점까지 주어지며 올바른 답변에서 멀어질수록 1점씩 차감이 됩니다. (무응답 0점)<br>
                      
                     &#8278; 통과 기준은 70점입니다.<br>
                      
                     &#8278; 시험을 통과하지 못하면 재시험의 기회가 부여됩니다. 재시험에서 통과하지 못하면 평가대상자는 1년 간 시험 응시 자격이 박탈됩니다.<br>

			</li>
			<!------------------------dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd------------------------>
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
			IGC는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다. 특히, IAF 공식 인정 심사원 등록가능 표준에 대한 심사원 인증을 제공합니다.<br>
				
				<li><p><em><strong>01</strong></em><span>ISO 9001 : 2015</span></p></li>
				<li><p><em><strong>02</strong></em><span>ISO 14001 : 2015</span></p></li>
				<li><p><em><strong>03</strong></em><span>ISO 22000 : 2018</span></p></li>
				<li><p><em><strong>04</strong></em><span>ISO 13485 : 2016</span></p></li>
				<li><p><em><strong>05</strong></em><span>OSHAS 18001(만료일: 2021.03.01)</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>      


	
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>