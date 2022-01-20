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
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/audit_FSMA_011.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/audit_FSMA_012.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/audit_FSMA_013.jpg);}

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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> FDA FSMA </span> | 연수기관 심사원인증</h1>

        <ul>
		   <li>   
             <h2>
               <span style="display:block;padding:20px;font-size:1.3em;text-align:left;margin-bottom:-25px;color:#009999;"> <span style="font-size:0.2em;color:#3366ff;">&#9632; </span>
                 FSMA (식품안전현대화법, Food Safety Modernization Act)
               </span> 
             </h2> 
           </li>
        </ul>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;"><br>
		2011년 01월 04일, 미국정부는 사전예방을 통한 식품공급 안전성 및 국민건강 보호를 목적으로 식품안전현대화법 (Food Safety Modernization Act, FSMA)를 제정하였습니다. 이에 따라 FDA는 FSMA 제정으로 식품안전문제를 예방하는데 초점을 맞출 수 있게 되었습니다. FSMA의 적용대상은 식품이나 사료를 제조, 가공, 포장 또는 보관하는 시설입니다. <br><br>
		
		또한 생산농가, US 수입업체, 화주업체, 수취업체, 선적업체, 운송업체 등 미국으로 식품을 보내는 업체도 FSMA를 준수해야 합니다. 따라서 업체들은 FSMA에 따라 위해요소 분석에 기반한 예방관리가 포함된 식품안전시스템을 구축하고, 문서화된 식품안전계획서를 작성하는 등의 각종 준비가 필요합니다.
		</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title"  style="color:#009999;">FSMA 심사원 인증의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                     미국은 한국의 중요한 수출 대상국으로 매우 중요한 식품 수출시장입니다. 따라서 FSMA 제 3자 인증은 식품업체의 미국 수출 확대의 기회로 작용하고 있습니다. 따라서 FSMA에서 요구하는 규정을 잘 준수하고 있는지 공인된 제 3의 기관이 심사를 수행하기 위하여 FSMA 심사원 인증이 필요합니다.
					</span>
				</div>
			</li>
		</ul>
		
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">FSMA 심사원 교육과정</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                        <span style="font-weight;bold;color:#009999;">IGC의 FSMA 제 3자 인증 심사원 교육과정 내용</span><br><br>
                        &#8281; FDA FSMA 3자 인증 프로그램<br><br>
                        &#8281; 심사원 적격성 기준<br><br>
                        &#8281; FSMA 3자 인증 심사 점검항목<br><br>
                        &#8281; FSMA Human Food Category 별 특징 및 심사적용 방법<br>
                            &nbsp; &nbsp; &#8278; Low Acid and Acidified Foods (산성식품)<br>
                            &nbsp; &nbsp; &#8278; Fisheries/Seafood Products (수산식품)<br>
                            &nbsp; &nbsp; &#8278; Fruit or Vegetable Juices, Other Beverages Including Water (과채주스)<br>
                            &nbsp; &nbsp; &#8278; Starch Products (전분, 밀가루식품)<br>
                            &nbsp; &nbsp; &#8278; Food Additives (식품 첨가제)<br>
                            &nbsp; &nbsp; &#8278; Nuts and Edible Seed Products (견과, 씨앗류)<br>
					</span>
					<span></span>
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
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                  &#8284; FSMA 심사원 교육과정은 미국 FDA에서 승인한 FSMA 제 3자 인증기관이자, FSPCA로부터 PCQI 양성과정과 FSVP 전문가 양성에 대한 교육권한을 받은 IGC에서 직접 준비한 교육과정입니다.<br><br> 
                  &#8284; FSMA 심사원 교육과정은 FSMA 제 3자 인증을 위한 심사원 양성을 위해 체계적이고 심도 있게 구성되었습니다.<br><br>
                  &#8284; IGC만의 풍부한 경험을 바탕으로 양질의 심사 스킬을 습득할 수 있도록 준비된 교육과정입니다. <br><br>
                  &nbsp; &nbsp; &#8278; FSMA 제 3자 인증 심사원 활동을 위해서는 PCQI 양성과정과 FSAM 제 3자 인증 심사원 과정을 모두 수료하여야 합니다.<br><br>
                  &nbsp; &nbsp; &#8278; PCQI 자격이 있으시거나, 사전에 교육을 수료하신 경우 FSMA 제 3자 인증 심사원 과정만 선택하실 수 있습니다.<br><br>
                  &#8284; IGC는 식품 시험소 운영 및 다양한 식품 관련 인증을 진행함으로써 식품 안전에 관한 광범위한 지식을 보유하고 있습니다. <br><br>
                  &#8284; IGC인증원은 수년 간의 경험을 바탕으로 해당 분야 전문가들이 가르치는 과정과 전문 교육을 제공합니다. 또한, 수년 간의 글로벌 경험을 바탕으로 효과적인 학습과 개발의 기회를 제공합니다.
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