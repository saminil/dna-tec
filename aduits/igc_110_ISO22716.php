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
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:13px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
    
    
    table{width:100%;border: 1px solid #009999;}
    
    th,td{border: 1px solid #009999;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding:10px;}
    
    td {font-size:100%;padding:10px;}
    
    
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
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_iso27716_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_iso27716_02.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_iso27716_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_iso27716_04.jpg);}

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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 22716 </span> | 심사원인증</h1>

        <ul>
		   <li>   
             <h2>
               <span style="display:block;padding:20px;font-size:1.3em;text-align:left;margin-bottom:-25px;color:#009999;"> <span style="font-size:0.2em;color:#3366ff;">&#9632; </span>
                 ISO22716:2007 Cosmetics - Good Manufacturing Practices(GMP) - Guideline on Good Manufacturing Practices
               </span> 
             </h2> 
           </li>
        </ul>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;"><br>
		ISO 22716에 규정된 이 가이드라인은 화장품 제품을 위한 GMP(Good Manufacturing Practices) 안내서를 제공하는 목적이 있다. 가이드라인은 화장품 산업에 의해, 제조업의 화장품분야의 특정요구를 고려하여 마련되었다.<br><br>

        ISO22716 은 제품의 품질에 영향을 미치는 인적, 기술 및 경영상의 요인들의 관리에 있어서 조직적이고 실질적인 조언을 제공한다. 가이드라인은 각 섹션이 가지는 특정 “원칙”과 함께 원료의 수령에서부터 출하까지 제품의 흐름을 따른다.<br><br>

        GMP는 올바른 과학적 판단과 위험평가에 기초한 공장 내 활동을 통한 품질보증의 실제적인 발전으로 구성된다. ISO22716은 조직이 규정된 특성에 부합하는 제품을 만들 수 있게 하는 활동을 정의한다. <br><br>
        
        화장품 안전 규정이 효력을 갖기 위해서 관리 시스템 방식을 이해하고 이 방식에 대해 유능한 심사원이 필요하다. GPC ISO 22716 심사원 인증 프로그램은 규제 기관, 인정 기관, 인증 기관, 기업 및 산업 및 직접적으로는 국민 전반에게 이 프로그램에 인증된 심사원이 유능하다는 신뢰를 제공하는데 목적이 있다.<br><br> 
        
        인증 과정의 일환으로 심사하는 동안 입증이 필요한 능력을 정의하는 핵심 기술, 지식 및 경험을 반영하는 요구 사항에 대해서 화장품 안전 심사원을 평가한다.<br>
		</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title"  style="color:#009999;">ISO 27716 인증의 추세 및 경향</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                     <table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="80"><p align="center">유럽 </p></td>
                        <td width="600px"><p align="left">ISO22716 수행 </p></td>
                      </tr>
                      <tr>
                        <td width="80"><p align="center">미국 </p></td>
                        <td width="600px"><p align="left">ISO22716 참작과    현행 FDA지침서의 수정에 동의 </p></td>
                      </tr>
                      <tr>
                        <td width="80"><p align="center">캐나다 </p></td>
                        <td width="600px"><p align="left">ISO22716 고려예정. 그에 따른 GMP지시서 제작 및 채택예정 </p></td>
                      </tr>
                      <tr>
                        <td width="80"><p align="center">일본 </p></td>
                        <td width="600px"><p align="left">자발적 지시서로써 ISO22716 채택 </p></td>
                      </tr>
                      <tr>
                        <td width="80"><p align="center">대한민국 </p></td>
                        <td width="600px"><p align="left">CGMP 인증의    의무화 추진중 </p></td>
                      </tr>
                    </table>
					</span>
					<!----span>
						이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.이곳은 간략한 내용이 들어갈 자리입니다.
						이곳은 간략한 내용이 들어갈 자리입니다.
					</span----->
				</div>
			</li>
		</ul>
		
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">Standards</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                        <table border="0" cellspacing="1" cellpadding="0">
                          <tr>
                            <td width="65"><p align="center">지역 </p></td>
                            <td width="131"><p align="center">규제기관 </p></td>
                            <td width="313"><p align="center">표준명 </p></td>
                            <td><p align="center">개정 </p></td>
                          </tr>
                          <tr>
                            <td width="65"><p align="center">EU</p></td>
                            <td width="131"><p align="center">COLIPA<br>
                              유럽 화장품 협회 </p></td>
                            <td width="313"><p align="left">Cosmetic    GMP Guidelines for the Manufactures of Cosmetic Products<br>
                              화장품 제조자를 위한 화장품 GMP 지시서 </p></td>
                            <td><p align="center">JUL    1994</p></td>
                          </tr>
                          <tr>
                            <td width="65"><p align="center">US</p></td>
                            <td width="131"><p align="center">FDA    CFSAN<br>
                              (FDA-Center for<br>
                              Food Safety and<br>
                              Applied Nutrition)</p></td>
                            <td width="313"><p align="left">Cosmetic    Good Manufacturing Practice Guidelines<br>
                              화장품 GMP 지시서 </p></td>
                            <td><p align="center">24    APR 2008</p></td>
                          </tr>
                          <tr>
                            <td width="65"><p align="center">ASEAN</p></td>
                            <td width="131"><p align="center">ACC<br>
                              (ASEAN Cosmetic<br>
                              Committee)</p></td>
                            <td width="313"><p align="left">Cosmetic    GMP Guidelines<br>
                              화장품 GMP 지시서 </p></td>
                            <td><p align="center">SEP    2002<br>
                              (date signed<br>
                              by ASEAN<br>
                              trade ministers)</p></td>
                          </tr>
                          <tr>
                            <td width="65"><p align="center">ISO</p></td>
                            <td width="131"><p align="center">ISO<br>
                              (International<br>
                              Standard<br>
                              Organization)</p></td>
                            <td width="313"><p align="left">ISO22716:2007<br>
                              Cosmetics GMP Guidelines on Good Manufacturing Practices<br>
                              화장품 GMP 지시서 </p></td>
                            <td><p align="center">15    NOV 2007</p></td>
                          </tr>
                        </table>
					</span>
					<span></span>
				</div>
			</li>
		</ul>
		<br><br>
		
		
		<li>   
           <h2>
             <span style="display:block;font-size:1.3em;text-align:left;margin-bottom:-25px;color:#009999;"> <span style="font-size:0.5em;color:#3366ff;">&#9632; </span>
               화장품 안전 관리 시스템 심사원 제도, 특정한 요구 사항
             </span> <br>
           </h2> 
           </li>
		<ul>
			<li style="padding:10px;">
                  
                   1) 기본 요구사항<br><br>
                    <table cellspacing="0" cellpadding="0" style="text-align:center;">
                      <col width="102">
                      <col width="224" span="2">
                      <col width="305">
                      <col width="246">
                      <col width="224">
                      <tr>
                        <td width="86">　</td>
                        <td width="167">심사원</td>
                        <td width="192">선임심사원</td>
                        <td width="366">검증 심사원</td>
                        <td width="175">내부심사원</td>
                        <td width="131">심사원보</td>
                      </tr>
                      <tr>
                        <td width="86">교육</td>
                        <td colspan="5">중등    교육 이상</td>
                      </tr>
                      <tr>
                        <td width="86">업무 경력</td>
                        <td colspan="2">5년    이상<br>
                          (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</td>
                        <td width="366">10년    이상<br>
                          (해당 규격 관련 품질 또는 환경 분야 5년 이상의 경력 포함)</td>
                        <td width="175">3년    이상<br>
                          (해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</td>
                        <td width="131">해당    사항 없음</td>
                      </tr>
                      <tr>
                        <td width="86">심사 경력</td>
                        <td width="167">최근    3년 이내에 심사원 또는 선임심사원으로서 20 M/D 이상의 심사 이력)</td>
                        <td width="192">최근    3년 이내에 심사원 또는 선임심사원으로서 35 MD 이상의 심사 이력(그 중 15 M/D 이상은 선임심사원으로서 심사 이력)</td>
                        <td width="366">최근    3년 이내 선임심사원으로서 15 M/D 이상의  심사 이력(공인된 개인    인증 기관으로부터 선임 심사원 자격 취득 후의 이력만 수용 가능)</td>
                        <td width="175">최근    3년 이내 5회 시상 + 최소 15 M/D 이상의  심사 이력</td>
                        <td width="131">해당    사항 없음</td>
                      </tr>
                      <tr>
                        <td width="86">교육 훈련</td>
                        <td colspan="5">*심사원/선임심사원    교육 과정<br>
                          (공인된 개인 인증 기관 혹은 그로부터 지정 받은 연수 기관의 발행 수료증만 수용 가능)</td>
                      </tr>
                      <tr>
                        <td width="86">시험</td>
                        <td colspan="5">GPC    지식 및 인성 시험 합격</td>
                      </tr>
                    </table><br>
                                    <span style="font-weight:bold;">&#9672;  교육 수료증의 요구 사항은 다음과 같다.</span><br>
               &nbsp; &nbsp; &#9673; 교육연수기관 절차의 요구사항을 충족하는 GPC가 승인한 관련 경영시스템 선임심사원 교육과정 수료증<br>
               &nbsp; &nbsp; &#9673; ISO/IEC 17024에 따라 인정을 받은 개인인증기관의 관련 품질시스템 선임심사원 교육과정 수료증<br>
               &nbsp; &nbsp; &#9673; 공인된 기관으로부터 지정받은 교육연수기관이 제공하는 관련 경영시스템 선임심사원 교육과정 수료증<br>
			</li>
			
			<br><br>
           
           <li>   
           <h2>
             <span style="display:block;padding:20px;font-size:1.3em;text-align:left;margin-bottom:-25px;color:#009999;"> <span style="font-size:0.5em;color:#3366ff;">&#9632; </span>
               시험
             </span> <br>
           </h2> 
           </li>
           <br>
            <ul>
                <li style="padding:10px;">
                      
                           <span style="font-weight:bold;">
                            1) 시험 소개<br>
                           </span>
                               &nbsp; &nbsp; &#9673; 시험은 지식 시험과 인성 시험의 두 종류 서면 시험으로 구성된다.<br>
                               &nbsp; &nbsp; &#9673; 시험은 GPC에서 사전에 평가하여 최종적으로 승인한 장소에서 수행됩니다. (시험 전에 통지)<br>
                               &nbsp; &nbsp; &#9673; 신청자는 시험이 시작되기 최소 10분 전까지 시험 장소에 도착해야 하며 지각하거나 결석할 경우 0점으로 자동 기록된다.<br>
                               &nbsp; &nbsp; &#9673; 후보자 확인을 위해 사진이 있는 신분증을 제시해야 하며 시험장에서 금지된 물품은 시험이 시작하기 전에 시험 감독관에게 맡겨야 한다.<br>
                               &nbsp; &nbsp; &#9673; 부정행위가 발견되면 시험 감독자는 후보자에게 즉시 퇴장하도록 요청하며 더 이상의 시험이 허용되지 않는다.<br>
                               &nbsp; &nbsp; &#9673; 시험 장소와 연락처 정보에 대한 자세한 내용은 시험 통지서를 참조한다.<br><br>
                               
                            <span style="font-weight:bold;">   
                            2) 지식 시험<br>
                           </span>
                               &nbsp; &nbsp; &#9673; 시험 문제는 ISO 22716:2007 표준에 기반하여 작성되며 시험의 목적은 후보자가 신청하는 표준을 통해 심사 활동을 원하는 후보자의 자격과 능력을 평가하는데 있다.<br>
                               &nbsp; &nbsp; &#9673; 지식 시험은 100개의 문제로 구성되며 4가지 섹션으로 구성된다.<br>
                               &nbsp; &nbsp; &#9673; 한 문제 당 배점은 1점이며 합격 기준은 다음과 같다.<br>
                               &nbsp; &nbsp;          &nbsp; &nbsp; &#9678;	Section I (ISO 22716:2007): 총 50 점 중 최소 20 점 이상.<br>
                               &nbsp; &nbsp;          &nbsp; &nbsp; &#9678;	Section II (ISO 19011:2011): 총 30 점 중 최소 12 점 이상.<br>
                               &nbsp; &nbsp;          &nbsp; &nbsp; &#9678;	Section III (규격특화 문항): 총 10 점 중 최소 4 점 이상.<br>
                               &nbsp; &nbsp;          &nbsp; &nbsp; &#9678;	Section IV (사례 연구): 총 10 점 중 최소 4 점 이상.<br>
                               &nbsp; &nbsp;          &nbsp; &nbsp; &#9678;	Total: 총 100 점 중 최소 70 점 이상.<br>
                               &nbsp; &nbsp;                                &nbsp; &nbsp;  &#9656; 신청자는 합계 점수가 70점 이상이어도 각 섹션에서 요구하는 최소 점수를 넘지 않으면 시험을 통과할 수 없다.<br>
                               &nbsp; &nbsp; &#9673; 시험 제한 시간은 120분이며 오픈북(GPC가 제공하는 표준 Hard Copy본)으로 진행됩니다.<br>
                               &nbsp; &nbsp; &#9673; 시험에 불합격한 후보자에게는 시험 기회가 한 번 더 제공된다. 후보자가 시험에 연속해서 불합격하면 1년 간 시험 응시 자격이 박탈됩니다.<br><br>
                             
                            <span style="font-weight:bold;"> 
                            3) 인성 시험<br>
                           </span>
                               &nbsp; &nbsp; 인성 시험의 목적은 심사원으로서의 특성과 자격을 평가하는데 있으며 신청자가 질문을 얼마나 이해하는지 묻는다.<br>  
                               &nbsp; &nbsp; 시험은 ISO 19011:2011에 기반하며 25문항으로 구성된다.<br>  
                               &nbsp; &nbsp; 각 문항당 최대 4점까지 주어지며 대답이 정답에서 멀수록 1점씩 공제된다. (대답이 없으면 0점)<br>  
                               &nbsp; &nbsp; 통과 기준은 70점이다.<br>  
                               &nbsp; &nbsp; 시험에 불합격하면 재시험의 기회가 추가로 제공된다. 후보자가 재시험에서 불합격하면 1년 간 시험 응시 자격이 박탈됩니다.<br>
                </li>
            </ul>
		</ul>
		</div>

		<div class="vision_area">
		<ul>
		  <li>
		   <h2 class="title" style="color:#009999;margin: 20px;">IGC의 역량</h2>
		  </li>
		</ul>
		<br>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                     &#9813; IGC는 미국의 인정기구인 IAS로부터 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br><br>
                     &#9813; IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                     &#9813; IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다.<br><br> 
                     &#9813; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있습니다.<br><br>
                     &#9813; IGC는 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
					</span>
				</div>
			</li>
			<br>

		</ul> 
		<br>
        </div>
		
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">GPC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                     &#9812; GPC는 IAF MLA 개인인증 승인기관으로 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다. <br><br>
                     
                     &#9812; GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인인증기관입니다.<br><br>
                     
                     &#9812; GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.<br><br>
					</span>
				</div>
			</li>
			<br>
		</ul> 
		
		</div> <!----++++++++++/  div class="vision_area" 종료   /+++++++++++++++-------->
		
	</section>  <!-----------+++++++++/ section class="vision_type5" 종료   /+++++++++++++++-------------------->
	
 
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