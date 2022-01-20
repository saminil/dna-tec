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
    
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding:5px;}
    td {font-size:96%;padding:5px;}
    
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
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_ohsas18001_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_ohsas18001_02.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_ohsas18001_03.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/audit_ohsas18001_04.jpg);}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background-image:url(images/audit_ohsas18001_05.jpg);}
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> OHSAS 18001 교육 </span> | 심사원 인증</h1>
		
		<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:10px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
		
	<section class="vision_type5">	
		<div class="vision_area">
		<h2 class="title" style="color:#009999;display:block;text-align:left;">OHSAS 18001 심사원 인증 개요</h2>
                 <ul>
                     <li>
                     <span  style="display:block;margin:3%;">
                     신뢰성을 얻기 위하여, 인정받은 인증원은 적격성을 갖춘 심사원을 필요로 합니다. 경쟁력과 능력을 갖추기 위하여 기업과 산업체는 적격성을 갖춘 심사원을 필요로 합니다. OHSAS 경영 시스템 심사원 인증 프로그램 (OHSAS 18001 프로그램)의 목적은 이 프로그램을 통해 인증 받은 심사원이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공하기 위함입니다. 인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. OHSAS 교육 프로그램은 BS OHSAS 18001 시리즈 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
                     
                     </span>
                     </li>
                 </ul>
        </div>
    </section>
		
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">OHSAS 18001이란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!------CHALLENGE-----></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
					OHSAS 18001은 안전보건경영시스템으로, 모든 리스크 관리 측면 미 법규 준수를 포함한 보건 및 안전의 효율적 관리를 위한 프레임워크를 제공합니다. 귀사의 조직에 필요한 정책 절차 및 통제를 통해 국제적으로 인정된 모범 사례에 부합하는 최상의 근로 조건 및 근로 환경 상의 건강과 안전을 달성할 수 있도록 지원합니다. OHSAS 18001이 2021년 3월 만료됨에 따라, ISO 45001로 인증이 전환되어야 합니다.
					</span>

				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">OHSAS 18001의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                      OHSAS 18001은 품질, 환경 및 기타 경영시스템과 더불어 핵심적인 경영시스템 중 하나입니다. 조직 전체에 최적의 작업 환경을 만들어 위험요소를 파악하고 이를 제대로 통제할 수 있도록 관리할 수 있습니다. 이는 작업장에서의 부상을 예방하는 동시에 기업의 직접 및 간접 비용을 줄이는데 도움을 줍니다. OHSAS 18001을 준수함으로써, 더 안전하고 나은 작업 환경을 통해 기업은 종업원, 공급자 및 고객 등과 같은 이해 관계자들을 위험으로부터 보호할 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">GPC의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                      <span style="font-weight:bold;margin-bottom:3%;margin-top:5%;">1) 본 시험은 서면의 두 가지 방식으로 지식시험 및 인성시험으로 구성이 됩니다.</span>
                         GPC는 IAF MLA 개인인증 승인 기관이며 OHSAS 18001 선임심사원 교육 및 인증서 발행에 대한 서비스를 제공합니다. GPC는 인증분야 최상위 기관인 IAF(International Accreditation Forum)로부터 국제적 상호인정 협약을 체결한 미국 소재의 인정기관인 IAS(International Accreditation Service)로부터 ISO/IEC 17024를 기준으로 인정을 받은 개인 인증기관입니다. 또한, GPC는 IAF로부터 개인인증에 대한 업무를 인정받은 최초의 기관인 IPC와 MLA를 체결한 정회원 기관으로, IAS 인정 스킴과 별개로 자체적인 인증서 발행이 가능하게 되었습니다.
					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
		    <li style="line-height:40px; list-style:none;padding-left:5%;">
		        GPC 인증을 받았다는 것은 GPC가 신청자가 (수여된 등급에 따라서) 하기 사항을 이해하고 그에 대한 적격성을 갖추었음을 인정했다는 것을 의미합니다.<br>
 
                &#9884; 적절한 윤리적 행동, 공정한 발표 그리고 전문적인 관심의 원칙을 유지<br>
                &#9884; 조직 내 모든 레벨의 인원들과 명확하게 구두 및 서면으로 의사소통<br>
                &#9884; 안전보건경영시스템의 심사를 계획하고 구성<br>
                &#9884; 관련 비즈니스 프로세스를 인지하고 이해함<br>
                &#9884; 객관적 증거를 평가하고 안전보건 경영시스템의 효과성을 판단<br>
                &#9884; 심사발견사항과 결론을 정확하게 보고<br>
                &#9884; 심사팀을 이끌고 심사 프로세스를 관리<br>
                &#9884; 경영시스템을 심사<br><br>

		    </li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">안전보건시스템 심사원 요구 사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                         교육 훈련 및 경력을 통하여 심사활동을 수행하기위한 필요한 적격성 및 능력을 갖출 수 있습니다. 심사원의 적격성은 올바른 심사를 수행하고 심사 결과를 도출하는데 필수적입니다.<br><br>
                         GPC의 안전보건 경영시스템 심사원 인증 프로그램 (OH&S 18001프로그램)의 목적은 이 프로그램을 통해 인증 받은 심사원이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공한다는 것입니다. 인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다.<br><br>
                         
                         선임심사원은 심사를 계획하고, 자원을 효율적으로 활용하며, 피심사자와 상호작용 시 심사팀을 대표하고, 심사팀을 조직하고 운영, 분쟁을 예방 및 해결하고 심사보고서를 준비 및 완결하기 위하여 추가적인 지식 및 능력을 갖추어야 합니다.<br>
                         전문가는 운영 혹은 법적 요구사항, 규격 등 특정 기술 분야에 대하여 심사원과 협의하고 조언을 줍니다.

					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
		    <li style="line-height:40px; list-style:none;padding-left:5%;font-weight:bold;">
		        1. 기본요구사항<br>
            </li>
		</ul>
		
		<div style="overflow-x:auto;font-size:1.2em;margin-top:10px;">
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
        
		<br>
		
		<ul>
            <li style="line-height:40px; list-style:none;padding-left:5%;">
                
                훈련 인증서 요구 사항은 다음과 같습니다. <br>
                 &#9882; 훈련 제공자의 절차를 만족시키는 인가된 GPC에서 신청된 관리 시스템 수석 심사원 훈련 과정 이수 증명서<br>
                 &#9882; 직원 인증 기관으로 인정된 ISO 17024에서 제공하는 신청된 관리 시스템 수석 심사원 훈련 과정 이수 증명<br>
                 &#9882; 훈련 제공자로 인가된 GPC에서 신청된 관리 시스템 수석 심사원 훈련 과정 이수 증명서<br>
                 &#9882; 훈련 제공자는 훈련 제공자로서 품질 관리를 유지하기 위해 ISO 9001 또는 ISO 29990 요구 사항을 시행해야 한다.<br>

		    </li>
		</ul>
		
		<br>
		
		<ul>
		    <li style="line-height:40px; list-style:none;padding-left:5%;font-weight:bold;">
		         2)	안전보건 시스템 심사원 스킴, 특별(추가적인) 요구사항
            </li>
            <li style="line-height:40px; list-style:none;padding-left:5%;padding-top:2%;padding-bottom;2%;margin-top:10px;">
              특정 업무를 달성하기 위하여 심사원은 심사 시 위의 사항을 적용할 수 있게 하는 개인 자질, 지식 및 능력을 갖추어야 한다.<br><br>
 
              안전보건 경영시스템 심사원은 하기 분야에 대한 지식과 능력을 보유해야 합니다 :<br>
              &#9881; 예방 및 법적 요구사항의 원리<br>
              &#9881; 보건과 안전에 관한 기타 요구사항, 예) 업무환경, 업무장비 및 개인보호장구에 대한 계약 상태, 규격 혹은 비규제적 가이드라인<br>
              &#9881; 적용되는 안전보건 규격 및 절차, 업무지침, 계획 및 프로그램을 포함한 그것을 적용하기 위한 가이드라인의 요구사항<br>
              &#9881; 노출된 인원 (부상 혹은 질병)에 대한 안전보건 위험 및 영향의 식별, 위험 평가 방법론, 사고위험 관리 방법, 재해 통계, 모범 관행, 연구 및 조사 결과<br>
              &#9881; 작업 영역, 프로세스, 설비, 기계/업무장비 및 운영 프로세스의 설계<br>
              &#9881; 심사 원리, 절차 및 테크닉<br><br>

              안전보건 심사원 신청자는 아래의 지식 및 적격성을 증빙하도록 요구됩니다 :<br>
              &#9881; 일반적인 심사 기술<br>
              &#9881; OH&S 경영시스템을 평가하고 적합한 심사 발견과 결론을 도출할 수 있는 안전보건 경영 방법 및 테크닉<br>
              &#9881; OH&S 기술적 적격성, 예를 들어 화학/물리/생물학적 위험을 포함한 작업장에서의 위험, 안전 및 보건 활동 관리, 운영 국가 혹은 영역 내의 법적 및 조직적 요소 등<br>
              &#9881; 용인되는 업무<br>
		    </li>
		</ul>	
     </div>
     
     
     
     
     <div class="vision_area">
		<h2 class="title" style="color:#009999;">심사</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                         시험은 지식 시험과 자질 시험의 두 종류 서면 시험으로 구성됩니다. <br><br>
                         기본 사항은 다음과 같습니다:<br>
                         &nbsp; &nbsp;  &#9905; 시험은 GPC에서 사전에 평가하여 최종적으로 승인한 장소에서 수행하며 일반적으로 토요일 오전 10:00에 시작합니다(시험 전에 통지).<br>
                         &nbsp; &nbsp;  &#9905; 신청자는 시험이 시작되기 최소 10분 전까지 시험 장소에 도착해야 하며 지각하거나 결석할 경우 0점으로 자동 기록됩니다. <br>
                         &nbsp; &nbsp;  &#9905; 후보자 확인을 위해 사진이 있는 신분증을 제시해야 하며 시험장에서 금지된 물품은 시험이 시작되기 전에 시험 감독자에게 맡겨야 합니다.<br>
                         &nbsp; &nbsp;  &#9905; 컨닝이 발견되면 시험 감독자는 후보자에게 즉시 퇴장하도록 요청하며 더 이상의 시험이 허용되지 않습니다.<br>
                         &nbsp; &nbsp;  &#9905; 시험 장소와 연락처 정보에 대한 자세한 내용은 시험 통지서를 참조하시면 됩니다.<br>
					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
		    <li style="line-height:40px; list-style:none;padding-left:5%;font-weight:bold;">
		        1) 지식 시험<br>
            </li>
		</ul>
		<ul>
            <li style="line-height:40px; list-style:none;padding-left:5%;margin-top:10px;">
             시험 문제는 OHSAS 18001:2007 표준에 기반하여 작성되며 시험의 목적은 후보자가 신청하는 표준을 통해 심사 활동을 원하는 후보자의 자격과 능력을 평가하는데 있습니다.<br>
             자세한 내용은 다음과 같습니다:<br>
               &#9883; 지식 시험은 100개의 문제로 구성되며 4가지 섹션으로 구성됩니다.<br>
               &#9883; 정답 하나에 1점씩이며 합격 기준은 다음과 같다.<br>
	                 &nbsp; &nbsp;  &#9967; Section I (OHSAS 18001:2007): 총 50 점 중 최소 20 점 이상.<br>
	                 &nbsp; &nbsp;  &#9967; Section II (ISO 19011:2011): 총 30 점 중 최소 12 점 이상.<br>
	                 &nbsp; &nbsp;  &#9967; Section III (규격특화 문항): 총 10 점 중 최소 4 점 이상.<br>
	                 &nbsp; &nbsp;  &#9967; Section IV (사례 연구): 총 10 점 중 최소 4 점 이상.<br>
	                 &nbsp; &nbsp;  &#9967; Total: 총 100 점 중 최소 70 점 이상<br>
               &#9883; 신청자는 합계 점수가 70점 이상이어도 각 섹션에서 요구하는 최소 점수를 넘지 않으면 시험을 통과할 수 없습니다.<br>
               &#9883; 시험 제한 시간은 120분이며 오픈북 시험입니다.<br>
               &#9883; 시험에 불합격한 후보자에게는 시험 기회가 한 번 더 제공됩니다. 후보자가 시험에 연속해서 불합격하면 1년 뒤에 시험 자격이 생깁니다.<br>
		    </li>
		</ul>
		
		<br>
		
		<ul>
		    <li style="line-height:40px; list-style:none;padding-left:5%;font-weight:bold;">
		        2)자질시험
            </li>
            <li style="line-height:40px; list-style:none;padding-left:5%;padding-top:2%;padding-bottom;2%;margin-top:10px;">
              자질 시험의 목적은 심사원으로서의 특성과 자격을 평가하는데 있으며 신청자가 질문을 얼마나 이해하는지 묻습니다.<br>
 
              자세한 내용은 다음과 같습니다: <br>
              &nbsp; &nbsp;  &#9883; 시험은 ISO 19011:2011에 기반하며 25문항으로만 구성됩니다. 후보자는 제일 먼저 떠오르는 대답을 선택해야 한다.<br>
              &nbsp; &nbsp;  &#9883; 각 문항당 최대 4점까지 주어지며 대답이 정답에서 멀수록 1점씩 공제된다. (대답이 없으면 0점)<br>
              &nbsp; &nbsp;  &#9883; 통과 기준은 70점이다.<br>
              &nbsp; &nbsp;  &#9883; 시험에 불합격하면 자질 인터뷰 기회가 추가로 제공된다. 후보자가 자질 인터뷰에서 불합격하면 1년 뒤에 시험 자격이 생긴다.<br>

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