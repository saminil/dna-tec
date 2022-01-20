<?php
	include_once('./_common.php');
$g5['title'] = '생물학적 시험 > 위생 테스트';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area h2.title:before{position:absolute; top:15px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #009999; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */

    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/clinicaltest_Sanitationtest_02.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/clinicaltest_Sanitationtest_03.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/clinicaltest_Sanitationtest_04.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/clinical_06constructionmaterials_01.jpg);}

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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> 생물학적 시험 > 위생테스트</span> | 임상 시험</h1>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		<!------------
		 <ul>
		   <li>   
             <h2>
               <span style="display:block;font-size:1.3em;text-align:left;color:#009999;"> <span style="display:block;font-size:0.2em;color:#009999;line-height:90px;height:30px;">&#9632; </span>
                 &nbsp; &nbsp; 위생 테스트 개요
               </span> 
             </h2> 
           </li>
        </ul>
		--------------->
		<br>
		미국으로 식품을 수출하는 해외 업체는 미국 FDA 식품안전현대화법(FSMA) 요구사항에 따라 식품 안전 시스템을 운용하고 있음을 입증해야 합니다.<br><br>
        이러한 요구사항은 ‘FSMA 인증을 받으려는 식품 생산 시설은 FDA 또는 ISO 17025 인정받은 시험소에서 현장 위생 테스트를 진행해야 한다’는 요구사항을 포함합니다.<br><br>
        ISO 17025 인정 시험소인 IGCLAB에서 제공하는 위생 테스트를 통해 미국 FDA 규정을 준수함을 입증할 수 있습니다.<br><br>
        <ul>
               <li>
                   <h2><img src="images/clinicaltest_Sanitationtest_01.jpg" alt="새로운 영양 성분표 구분"></h2><br>
               </li>
           </ul>

		</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">위생 테스트 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                     해외 식품 시설이 미국으로 수출시, 수입하려는 식품의 안전성을 보장하기 위하여 수입업자가 미국 내에서 요구하는 기준에 따라 생산함을 입증하는 필요요건 및 내용을 규정하고 있습니다.<br><br>
                     
                     경우에 따라 미국 FDA 실사단에 의해 실사 진행시 environment swab test의 방법, 조사 균, 빈도 / 살모넬라, 리스테리아 등 미생물학적 검사방법, 빈도 등을 점검하기 때문에 수출업체는 그 중요도를 인지하고 위생 테스트를 실시하여야 합니다.
					</span>
				</div>
			</li>
			<br>
          </ul>
		</div>



		<div class="vision_area">
		<h2 class="title" style="color:#009999;">검사항목 – 미생물학적 시험</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:15px;">
                      &#10054; E. coli<br><br>
                      &#10054; E. coli / Total Coliform Counts <br><br>
                      &#10054; Salmonella Sp.<br><br>
                      &#10054; Listeria Sp. / Listeria monocytogenes<br><br>
                      &#10054; Staphylococcus aureus<br><br>
                      &#10054; Aerobic Plate Counts<br><br>
                      &#10054; Yeast and Mold<br><br>
                      &#10054; Bacillus cereus<br><br>

					</span>
				</div>
			</li>
			<br>
		</ul>

		</div>


		<div class="vision_area">
		<h2 class="title" style="color:#009999;">위생 테스트의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                     2011년 미국에서 제정되어 2018년부터 본격적으로 시행한 FSMA는 식품에 영향을 끼치는 위해요소 중 생물학적 위해요소의 관리를 특히 강조하고 있습니다.<br><br>
                     그동인 미국 내에서 HACCP 적용 대상범위에서 벗어나 모든 식품제조기업에 대해 식품예방관리(HARPC)를 적용합니다.<br><br>
                     HARPC는 식품공급에 대한 잠재적 위험을 식별하고 방지하기 위해 기존 GMP와 HACCP 과는 다른 접근방식을 취하며, 특히 식품 제조과정에서의 생물학적 위해요소 관리를 강조하고 있습니다.<br><br>
                     또한 FSMA요구사항 중 예방관리에서 알레르기 유발물질 관리, 위생관리 등을 규정하고 있으며 이에 따라 위생 테스트에 대한 철저한 준비가 요구되는 상황입니다.<br><br>
                     IGC는 다양한 인증 및 시험 서비스를 제공한 경험과 전문성을 바탕으로 식품업계에게 요구되는 모든 사항들을 고려하고 맞춤 지원서비스를 제공하고 있습니다.<br><br>

					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 30px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                      &#10054; IGCLAB은 고객사의 해외시장 진출을 지원하기 위한 다양한 서비스를 지원하고 있습니다.<br><br>
                      &#10054; IGCLAB에서 발행하는 성적서는 ILAC과 MRA가 체결된 인정기관인 IAS로부터 인정을 받은 시험기관의 성적서로 전 세계 어디에서도 통용될 수 있습니다.<br><br>
                      &#10054; IGC의 FSMA 제 3자 인증 또는 FSVP 인증 진행 시 제품에 대한 적격성 제시로서 성적서를 활용함으로써 식품 시설의 해외 진출을 위한 서비스를 편리하게 제공받을 수 있습니다.<br><br>

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













































