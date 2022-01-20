<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "이제르바이잔"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "AZS인증"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>


<?php
	/*
		CSS파일 로드(25~26라인)
		구매하신 RUS TEST PACIFIC에 사용하신다면 적용하지 않아도 됩니다.
		RUS TEST PACIFIC가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



<?php
	/*
		주의사항 
		그누보드 관리자모드 내용관리등 에디터로 내용을 등록하실 경우, 보안문제로 자바스크립트와 css가 필터될 수 있습니다.
		이럴 경우 공통 css 파일에 아래 style을 별도 추가하고, 내용관리 에디터의 HTML 모드로 태그를 넣으시면 됩니다.(에디터마다 HTML 모드 버튼이 있으니 HTML 모드로 넣어주세요.)
		javascript 를 사용한다면 공통하단 파일 </body> 위에 코드를 복사하여 추가 합니다.	
	
	*/
?>
<style>
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}  /* 최상위 타이틀 하단 선,  -(대쉬 기호)  */
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }


	.business_type4 {width:100%; max-width:1200px;  margin:0 auto;}
	.business_type4:after{ content:""; display:block; clear:both;}
	.business_type4 .business_info { position:relative; width:100%; height:600px; margin:150px auto; background:none;} <!-----/텍스트 영역 높이/--------->
	.business_type4 .business_info:after{ content:""; display:block; clear:both;}
	.business_type4 .business_info:first-child {margin-top:0px;}
	.business_type4 .business_info .img_left { position:absolute; left:0; top:0; width:650px; height:400px; background:blue; }
	.business_type4 .business_info .img_left img{ width:100%; height:100%;}
	.business_type4 .business_info .img_right { position:absolute; right:0; top:0; width:650px; height:400px; background:blue; }
	.business_type4 .business_info .img_right img{ width:100%; height:100%;}
	.business_type4 .business_info .con_box { position: absolute; right:0; top:25%; width:55%; height:350px; background:rgba(255,255,255,1); box-shadow:10px 10px 5px rgba(0,0,0,0.04); }
	.business_type4 .business_info .con_box .txt_area {padding:10%; }
	.business_type4 .business_info .con_box .txt_area:before { display: block; content: ''; position: absolute; left: -80px; top:23%;  width:20%; height:0px; background:#000;}/* 텍스트 박스 우측 선 */
	.business_type4 .business_info .con_box .txt_area em { position:relative; display:block; vertical-align:middle; color:#ddd;  font-size:3em;}
	.business_type4 .business_info .con_box .txt_area strong {display:block; color:#333;  font-size:1.5em; font-weight: 600;  line-height:1.5em; margin:30px 0 20px 0;}
	.business_type4 .business_info .con_box .txt_area p.box_txt {display:block; color:#555; font-size:1em;  font-weight: 300;  line-height:1.5em; text-align:justify;  }
	.business_type4 .business_info .type_other { position: absolute; left: 0; top:25%; width:55%; height:500px; background:rgba(255,255,255,1);  box-shadow:10px 10px 5px rgba(0,0,0,0.04); } <!------//좌측 텍스트 영역------->
	.business_type4 .business_info .type_other .txt_area:before {display:none;}
	.business_type4 .business_info .type_other .txt_area:after { display: block; content: ''; position: absolute; right:-80px; top:23%; width:20%; height:0px; background:#000; } /* 텍스트 박스 우측 선 */
    
    
    <!----------고객님께 드리는 혜택 시작 ------------------>
    .business_type4 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.business_type4 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.business_type4 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.business_type4 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.business_type4 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.business_type4 .con_box:after{content:""; display:block; clear:both;}
	.business_type4 .con_box ul { padding:0; margin:0; }
	.business_type4 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.business_type4 .con_box ul li p{display:table; width:100%; }
	.business_type4 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.business_type4 .con_box ul li p > em{ width:30px; }
	.business_type4 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.business_type4 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
  <!----------고객님께 드리는 혜택 종료 ------------------>
    
    


	@media screen and (max-width:992px){
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

	}

	@media screen and (max-width:768px){

		.business_type4 .business_info { height:auto; margin:50px auto;}
		.business_type4 .business_info .img_left { position:relative; width:100%; height:auto;  background:#000; }
		.business_type4 .business_info .img_left img{ height:auto;}
		.business_type4 .business_info .img_right { position:relative; width:100%; height:auto;  background:#000; }
		.business_type4 .business_info .img_right img{ height:auto;}
		.business_type4 .business_info .con_box { position:relative; width:90%; left:50%; top:-50px; margin-left:-45%; height:auto;}
		.business_type4 .business_info .con_box .txt_area:before { display: none;}
		.business_type4 .business_info .type_other .txt_area:after {display:none;}
		.business_type4 .business_info .con_box .txt_area{padding:15px;}
		.business_type4 .business_info .con_box .txt_area strong{font-size:1.2em;}
        #space001{margin-bottom:30%;} /* 상,하단 간격, 고객님께 드리는 혜택 시작 -------------->   */

	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">AZS인증</span>&nbsp;아제르바이잔 (AZERBAIJAN CERTIFICATION) </h1>
		<h2 class="sub_txt">아제르바이잔 국가 적합성 인증서 "AZS Certificate" </h2>
	</div>
	<div class="business_type4">

		<div> <!----------/ div class="business_info" 에서 삭제 처리 /------------>
			<!---------div class="img_left"><img src="./image/business_img4.jpg"></div-------->
			<div class="con_box">
				<div class="txt_area">
					<!------em style="font-size:2.6em;">01</em-------->
					<strong><span style="font-size:1.6em;">AZS인증 아제르바이잔 (AZERBAIJAN CERTIFICATION) 개요  </span></strong><br><br>
					<p class="box_txt">
                       아제르바이잔은 아제르바이잔 국가 적합성 인증서인 "AZS Certificate"라는 자국 인증을 보유하고 있습니다. AZS인증은 아제르바이잔 표준화ㆍ도량ㆍ특허 위원회(The State Committee for Standardization, Metrology and Patent of the Republic of Azerbaijan)에서 발행하며 인증서는 통관 시 필요서류 중 하나입니다. 
					</p>
				</div>
			</div>
		</div>
		
		
		<img src="./image/AZS01_mark.jpg" alt="GOST UZ 인증마크" style="display:block;width:25%;margin-left:auto;margin-right:auto;">
		<h2 class="sub_txt" style="text-align:center;">AZS 인증 마크</h2>
		
		

		<div class="business_info">
			<div class="img_right" style="height:50%;"><img src="./image/AZS03.jpg"></div>
			<div class="con_box type_other" style="height:70%;">
				<div class="txt_area">
					<strong>AZS인증 대상 품목</strong>
					<p class="box_txt">
						인증대상품목 리스트에 따라 인증이 필요한 제품의 인증이 진행되며 제품별로 AZS 인증을 받기 위한 제출 서류는 다릅니다. (해당 리스트는 아제르바이잔 관세청 사이트에서 조회 가능합니다). 
                         <a href="http://azstand.gov.az/az" style="color:blue;">   (참고 사이트 바로가기 클릭!) </a></p><br>
				    <p class="box_txt">
				        아제르바이잔 인증 중 전문가 판단에 따라 현장 설치 후 인증서가 발행되는 경우가 있으며 이 때 통관은 조건부 통관으로 관련서류 제출 후 가능하지만, 위험품목으로 분류된 제품의 경우 설치 후 사용허가를 필요로 하며, 이 경우 인증기관 또는 규격청에서 발급하는 형태가 아닌 그 상위기관인 비상위원회에서 주체적으로 발급하게 되어 있습니다.<br><br>
					</p>
				</div> <!-------/ class="txt_area" 종료 /---------------------------------------------------------->
			</div> <!----------/ class="con_box type_other" 시작(좌측 텍스트+우측 이미지) 종료 /------------------>
		</div> <!-------------/  class="business_info" style="height:1200px;" 종료 /------------>
		
		
            <div class="business_info" style="height:1100px;">
			<div class="img_right" style="height:85%;"><img src="./image/AZS02_sample.jpg"></div>
			<div class="con_box type_other" style="height:900px;">
				<div class="txt_area">
					<strong>AZS인증 유형</strong>
					<p class="box_txt">
						인증은 의무인증(Mandatory Certification)과 자율인증 (Voluntary Certification) 2가지로 나눠집니다.<br>
                        - 의무 인증(Mandatory Certification): 제품 생산공정, 서비스 등을 포함한 제품의 적합성을 아제르바이잔 정부로부터 확인 받는 것입니다.<br><br>
					</p>
					<p class="box_txt">
						- 자율 인증(Voluntary Certification): 생산자 또는 판매가가 제품의 수입과 판매를 용이하게 하기 위해 자율적으로 인증를 받는 것입니다.<br><br>
					</p>
					<p class="box_txt">
						아제르바이잔에서 사용되는 인증(Certification)은 원산지 증명서, 품질 증명서, 위생 증명서입니다. AZS 인증은 수입되는 거의 모든 제품에 요구되어지며 원산지 증명서, 품질 증명서 등의 기타 인증은 AZS 인증 획득 또는 통관 시 구비 서류로서 요구되기도 합니다.<br><br>
					</p>
					<p class="box_txt">
						-기본 인증서: 국가 적합성 인증서: AZS Certificate<br><br>
					</p>
					<p class="box_txt">
						-기타 인증서<br><br>
					</p>
					<p class="box_txt">
						1. 국제 인증서: ISO, CE, GMP, GOST, TY(TS)<br><br>
					</p><p class="box_txt">
						2. 원산지 증명서(Certification of origin)<br><br>
					</p><p class="box_txt">
						3. 품질 증명서(Certification of quality)<br><br>
					</p><p class="box_txt">
						4. 적합성 증명서(Certification of Conformity)<br><br>
					</p><p class="box_txt">
						5. 위생 증명서(Certification of hygiene)<br><br>
					</p><p class="box_txt">
						6. 식물위생 증명서(Certification of phytosanitary)	<br><br>
					</p>
				</div> <!-------/ class="txt_area" 종료 /---------------------------------------------------------->
			</div> <!----------/ class="con_box type_other" 시작(좌측 텍스트+우측 이미지) 종료 /------------------>
		    </div> <!-------------/  class="business_info" style="height:1200px;" 종료 /------------>


		<div class="business_info" style="height:1000px;">
			<div class="img_right"><img src="./image/GOST_Uz07.jpg"></div>
			<div class="con_box type_other" style="height:90%;">
				<div class="txt_area">
					<strong>제품별 수출을 위해 필요한 인증 종류</strong>
					-자동차부품: 적합성인증서, 제품 안전증명서 등<br>
					<p class="box_txt">
						1. 자동차부품 수출을 위해서는 원산지증명서(Certificate of Origin)을 포함한 선적서류와 적합성 인증서(Certificate of Conformity)와 안전증명서(List of Product Safety)가 필요합니다.
					</p>
					<p class="box_txt">
						2. 법적으로는 적합성인증서, 안전증명서도 구비돼야 하나 바이어 확인 결과 세관에서 요구하지 않는 경우도 많습니다.
					</p>
					<p class="box_txt">
						3. 단, 안전증명서는 밧데리, 윤활유 등 발화성 제품인 경우 반드시 구비되어야 합니다.
					</p>
					<p class="box_txt">
						4. 적합성 인증서을 발급받기 위해서는 신청서, 샘플, 원산지증명서, 인보이스 등이 필요합니다.
					</p>
					<br>
					
					-의료기기 <br>
					<p class="box_txt">
						AZS인증, 원산지증명서, 품질증명서, ISO, CE, GMO 관련 인증서 필요<br>
						(피부 관련 기기인 경우 위생증명서도 추가로 필요)
					</p>
					<br>
					-의약품 : 수출을 위해서는 현지에 의약품 등록 선행되어야 합니다. <br>
					<p class="box_txt">
                          1. 현지에 의약품 등록은 현지 바이어 외에 외국기업들도 가능합니다.<br>
                          2. 등록 단계는 크게 ① 예비 심사(Preliminary expert) ② 전문심사(Specialized expertise)로 나눠짐.<br>
                          3. 현지 등록은 통상 6~8개월 정도가 소요<br>
                          4. 현지 수입을 위해서는 약 12개의 서류가 필요함(위임장, 원산지증명서, GMO 인증서 등).<br>
					</p>
					<br>
					-보일러 <br>
					<p class="box_txt">
						AZS인증, 원산지 증명서 등: 수출자의 의무는 아니나 현지에 가스 보일러 설치를 위해서는 아제르바이잔 비상사태부와 가스공사 Azerigas의 기술표준에 따라야 합니다.
					</p>
					<br>
					-계면활성제(세제 등) <br>
					<p class="box_txt">
						1. AZS 인증, 위생증명서, 적합성증명서(이상 아제르바이잔 관계당국에서 발행)<br>
                        2. 원산지증명서, 품질증명서(이상 한국에서 발행) 필요<br>
                        3. 적합성 증명서의 현지 발행을 위해 관계 당국은 MSDS(Material Safety Data Sheet) 인증서를 요구할 수 있습니다.<br>
					</p>
				</div> <!-------/ class="txt_area" 종료 /---------------------------------------------------------->
			</div> <!----------/ class="con_box type_other" 시작(좌측 텍스트+우측 이미지) 종료 /------------------>
		</div> <!-------------/  class="business_info" style="height:1200px;" 종료 /------------>

	
		<div id="space001"></div>	
<!--------/ 고객님께 드리는 혜택 시작  /-------------->
		<br>
       
        <div class="business_type4" style="margin-top:10%;">
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li><p><em><strong>01</strong></em><span> EAC 및 GOST 인증 서비스</span></p></li>
		  		<li><p><em><strong>04</strong></em><span> Eurasia Representative 서비스</span></p></li>
		  		<li><p><em><strong>02</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span></p></li>
		  		<li><p><em><strong>05</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span></p></li>
		  		<li><p><em><strong>03</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발행 서비스</span></p></li>
		  	</ul>
		  </div><!--------/ 고객님께 드리는 혜택 종료  /-------------->
		
        </div>	
		
	</div>	<!----------/ <class="business_type4"  종료 > /----------------->
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<br><br>
<?php
     include_once('tail.php');//공통 하단을 연결합니다.
     include_once(G5_THEME_PATH.'/tail.php');//그누보드의 공통 하단을 연결합니다.
?>