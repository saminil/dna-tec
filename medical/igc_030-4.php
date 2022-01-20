<?php
	include_once('./_common.php');
$g5['title'] = '생물학적 시험';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	/*.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; } */
    .vision_type5 .vision_area h2.title:before{position:absolute; top:15px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #009999; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/clinicaltest_Nutrition&analysis_03.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/clinicaltest_Nutrition&analysis_04.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/clinicaltest_Nutrition&analysis_05.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/clinicaltest_Nutrition&analysis_04.jpg);}
    .vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
    
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    
    /*제공서비스 > 시험 > 생물학적 시험> 위생 테스트 sanitation text 시작*/
    .vision_type6 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type6:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type6 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type6 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type6 .vision_area h2.title:before{position:absolute; top:15px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #009999; background:#fff; }
	.vision_type6 .vision_area ul {margin:0; padding:0; }
	.vision_type6 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type6 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */

    .vision_type6 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/clinicaltest_Sanitationtest_02.jpg);}
    .vision_type6 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/clinicaltest_Sanitationtest_03.jpg);}
    .vision_type6 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/clinicaltest_Sanitationtest_04.jpg);}
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/clinical_06constructionmaterials_01.jpg);}

	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
    
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
    
    
    
    
    
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

		/*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type5 .vision_area h2.title { font-size:1.5em; }
        .vision_type5 .vision_area span.stitle{font-size:1em; width:100%;}
        .vision_type5 .vision_area ul li {width:100%;}
        .vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */
	}

</style>



<div class="content_wrap">


<!--+++ 20.05.19 탭메뉴/    시험 /식품영양 분석 시작 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">식품영양 분석</a></li>
			<li><a href="javascript:;">Sanitation test</a></li>
		</ul>
	</div>
	<!--+++ 20.05.19 탭메뉴/ 시험 /식품영양 분석  종료  +++-->
 
	
	<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:00px;width:100%;">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
	
	
	
	
	<!--+++ 20.05.19 탭컨텐츠 영역 시작 +++-->
  <div class="tab_con">

   <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<article style="display:block">


	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> 식품영양분석</span> | 임상 시험</h1>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
        
        <ul>
		   <li>   
             <h2>
               <span style="display:block;font-size:1.3em;text-align:left;color:#009999;"> <span style="display:block;font-size:0.2em;color:#009999;line-height:90px;height:30px;">&#9632; </span>
                 &nbsp; &nbsp; 식품 영양 분석 개요
               </span> 
             </h2> 
           </li>
        </ul>
		
		<br>
           1993년 이후 23년만에 새롭게 영양분석표 양식이 변경되었습니다.<br><br>
           
           식품 제조업체들에 대한 의무 적용은 2018년 7월 26일 시작되지만 연 매출 1000만 달러 미만 업체는 이보다 1년 후부터 의무 적용됩니다.<br><br>
           
           새롭게 변경된 영양분석표 양식의 가장 두드러진 특징은 칼로리 함량, 1인분의 양(serving size), 몇 인분용 포장인지를 크고 굵게 표기해 소비자들이 잘 볼 수 있도록 한 점입니다.<br><br>
            
           그 이외에 자연적 당분 외에 추가된 설탕(added sugars) 함량과 이 성분이 하루 권장 칼로리 섭취량(2000칼로리)에서 차지하는 비율도 별도 항목으로 명시하도록 하였습니다.<br><br>
           
           <ul>
               <li>
                   <h2><img src="images/clinicaltest_Nutrition&analysis_01.jpg" alt="새로운 영양 성분표 구분"></h2><br>
               </li>
           </ul>
           
           FDA는 추가 설탕 섭취로 인한 칼로리가 전체 섭취 칼로리의 10%를 넘길 경우 하루 섭취 허용 기준인 2000칼로리 이하를 유지하기 어려운 것으로 파악했는데, 그 이유는 연구 결과 미국인의 평균 하루 섭취 칼로리의 약 13%를 추가 설탕에서 섭취하는 것으로 나타났기 때문입니다.<br><br>
           
           
           
           반면 현재 지방 섭취 자체보다 칼로리 섭취량과 당분 섭취량이 비만과 심장병 등 만성질환의 주 원인이라는 최근 연구결과들을 적극 반영하여 레이블에서 강조되고 있는 지방 성분 함량 표시의 비중은 줄었습니다. 이는 섭취하는 지방의 양보다는 종류가 더 중요하다는 연구결과에 따라 '지방 섭취에 따른 칼로리(calories from fat)' 항목은 제외시키고 지금처럼 총 지방, 포화지방(saturated fat), 트랜스 지방(trans fat)을 구분해서 표시하도록 하였습니다.<br><br>
           
           <ul>
               <li>
                   <h2><img src="images/clinicaltest_Nutrition&analysis_02.jpg" alt="새로운 영양 성분표 구분"></h2><br>
               </li>
           </ul>
            
           또 새 영양성분표에는 부족하면 만성질환 발병 위험이 커지는 비타민D와 포타슘(Potassium) 함량이 표기되는 대신 비타민A와 비타민C 함량 표기는 없어집니다. FDA 측은 미국인들의 비타민D와 포타슘 섭취량이 부족한 대신 비타민A, C 섭취가 부족한 경우는 드물기 때문이라고 설명했습니다. 다만 제조업체가 자율적으로 비타민A, C 함량 등을 표시할 수는 있고, 칼슘과 철분 함량은 현행과 같이 표시됩니다.<br><br>
           
           영양성분표 규정은 포장된 거의 모든 식품에 적용되지만 농무부 관할인 일부 육류 및 가금류 등은 제외됩니다.<br><br>

		</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">화학/생물학적 시험</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em><!---CHALLENGE------></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                         FDA는 식품 개별적으로 요구하는 사항이 모두 다르기 때문에 식품마다 개별적으로 FDA에서 요구하는 사항을 잘 파악하여 FSVP (Foreign Supplier Verification Program) 활동과 상호 보완적으로 위해요소 분석을 하여야 합니다. 예로서 농산물을 수입하는 경우 해외공급자가 FSMA의 생산 규정을 시행하는지 확인해야 하며, 생산 규정에서 다루지 않는 화학적, 물리적 위해요소를 분석, 통제해야 합니다.<br><br>

                         저산성 식품은 21 CFR 113 규정에 의해 저산성 식품 등록(FCE & SID) 신고를 하여야 하고, 생물학적 위해요소를 제외한 화학적, 물리적 위해요소를 분석해야 합니다.<br><br>

                         미국 「연방 식품의약품화장품법(FD&C Act)」 415조 ‘식품업체 등록’에 따라 미국에 의무 등록된 국내·외 식품업체는 위해요인 분석과 위해기반 예방관리를 다룬 식품안전체계를 반드시 구축·시행하여야 하며, 다음의 항목을 구성으로 ‘식품안전계획’을 서면으로 구비해야 합니다.
					</span>
				</div>
			</li>
          </ul>
          <br>
          <ul>
              <li>
                 <span style="display:block;height:auto ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;padding:20px;">
                     <p style="font-weight:bold;color:#009999;">&#10070;  위해요인 분석</p>
                       위해요인을 분석하기에 앞서 알려져 있거나 합리적으로 예측 가능한 생물학적, 화학적· 및 물리적 (방사성 물질 포함) 위해요인을 확인하는 단계를 거쳐야 합니다. 이러한 위해요인은 자연적으로 생성되거나 의도하지 않게 유입될 수 있으며 또한, 경제적 이익을 취하기 위해 의도적으로 유입될 수 있습니다. (단, 경제적 이익을 목적으로 한 경우 식품안전이 아닌 제품의 온전함과 품질에 영향을 주는 경제적 동기 부여 요소는 제외됩니다.)<br><br>
                     <p style="font-weight:bold;color:#009999;">&#10070;  예방관리</p>
                       업체는 확인된 위해요인을 최소화하거나 예방하기 위해 필요한 예방관리를 시행해야 하며 공정관리, 알레르기 유발성분 관리, 위생관리, 공급망 관리, 회수계획이 포함됩니다. 위해요인이 공급망에서 후속업체에 의해 관리될 경우, 해당식품이 추가 가공 대상이라는 사실을 공개하고 나서 위해요소 관리가 이루어질 것이라는 보증을 받아야 합니다.<br><br>
                     <p style="font-weight:bold;color:#009999;">&#10070;  모니터링</p>
                       모니터링은 지속적인 사전 예방관리가 이루어지고 있음을 보장하기 위함입니다.<br><br>
                     <p style="font-weight:bold;color:#009999;">&#10070;  개선조치 및 개선</p>
                       식품 생산과정 중에 경미하고도 개별적으로 발생하는 문제를 적시에 파악하고 바로잡기 위한 조치를 의미합니다. 개선조치에는 추후 재발 소지를 줄이기 위해 사전 예방관리를 시행함으로써 문제점을 파악하기 위한 조치, 식품안전에 문제가 있는 식품을 평가하기 위한 조치, 그리고 이러한 식품의 시장유입을 방지하기 위한 조치가 있습니다.<br><br>
                     <p style="font-weight:bold;color:#009999;">&#10070;  검증</p>
                       검증은 사전 예방관리의 지속성과 효율성을 보장하는데 필요한 과정으로 공정을 모니터링하고 검증하는 수단 보정, 제품검사, 환경 모니터링, 일정 시한 내 기록에 관한 검토, 보정, 제품 및 환경 검사, 공급업체 및 유통망 검증활동에 관한 기록 검토 등이 검증 요건에 포함됩니다.<br><br>
                 </span>
              </li>
          </ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">미국 식품 시험소 인정 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                     미국 시장 진출을 위한 식품 시험 중 영양 분석 시험의 경우 AOAC 검증 방법이 있을 경우 AOAC 방법의 사용을 요구하고 있습니다.<br><br>
                     영양분석 이외에 식품의 안전성 검증 시험 및 식품 생산 현장의 위생 시험에 대하여 미국의 시험소 인정기관인 IAS는 식품 시험소 인정의 요구사항을 언급한 별도의 Guideline을 발간하였고, Guideline의 주요 내용은 ISO 17025에 따른 인정 획득과 인정 시 사용하는 시험규격을 미국 국가 규격 및 국제 공인규격의 사용을 요청하고 있습니다. 이에는 AOAC, BAM 등이 사용됩니다.
					</span>
				</div>
			</li>
			<br>
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
                       &#10046; IGC는 고객사의 인증 획득에 필요한 시험검사 업무를 지원하고자 시험소를 운영하고 있습니다.<br><br>
                       &#10046; 의료기기, 전기전자 제품 및 기계류에 대한 시험업무를 시작으로 지속적인 발전을 달성하여 식품에 대한 시험 업무로 영역을 확대하였습니다. <br><br>
                       &#10046; IGC 식품 시험소는 ISO 17025 인정을 기반으로 FDA FSMA 3자 인증을 위한 식품 안전 및 생산현장 안정성에 대한 시험이 가능하며, 미국 식품안전규격 AOAC 및 BAM에 따라 적법한 시험 서비스를 제공하고 있습니다. <br><br>
                       &#10046; IGC LAB에서 발행하는 성적서는 ilac과 MRA가 체결된 인정기관인 IAS로부터 인정을 받은 시험기관의 성적서이므로, IGC LAB의 성적서는 전 세계 어디에서도 통용될 수 있습니다.
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
			<p style="font-weight:bold;color:#009999;">IGC LAB에서 발행하는 성적서는 다양한 식품 관련 분야에 활용될 수 있습니다.</p><br>
				<li style="float:none;width:100%;"><p><em><strong>01</strong></em><span>
				FDA FSMA 3자 인증: IGC LAB 성적서를 통해 FSMA 3자 인증 진행 시 제품에 대한 적격성을 제시하는 데 사용이 가능합니다.</span></p>
				</li>
				<li style="float:none;width:100%;"><p><em><strong>02</strong></em><span>
				FDA 식품 시설 등록 (FFR): 미국에서 상업적으로 유통되는 식품의 생산과 유통과 관련된 시설은 FDA에 등록되어야 합니다. IGC는 식품 업체가 원활하게 시설등록을 할 수 있도록 지원합니다.</span></p>
				</li>
			</ul>
			<br>
			<ul>
			<p style="font-weight:bold;color:#009999;">또한, IGC는 식품 분야에 관련된 다양한 서비스를 제공하고 있습니다.</p><br>
				<li><p><em><strong>01</strong></em><span>ISO 22000 / FSSC 22000 경영시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>ISO 22000 / FSSC 22000 심사원 인증 및 교육</span></p></li>
				<li><p><em><strong>03</strong></em><span>PCQI 및 FSVP 전문가 양성 과정</span></p></li>
				<li><p><em><strong>04</strong></em><span>비건, 할랄 등 기타 식품 관련 인증</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>      
   </article><!-------+++++++ / article  시험 /식품영양 분석  종료  /++++++++++-------------->  
   
    
      
   
      <article><!-------+++++++ / article  심사원인증 > Sanitation test [ Insert ] 시작  /++++++++++--------------> 
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
      </article><!-------+++++++ / article  심사원인증 > Sanitation test [ Insert ] 종료  /++++++++++--------------> 
      
      
      
      
      
				
  </div><!-----------+++++++ / div class="tab_con" 종료 / ++++++++------------------------>
	
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>













































