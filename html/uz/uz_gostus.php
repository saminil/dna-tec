<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "우즈베키스탄"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "GOST UZ"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>


<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }


	.business_type4 {width:100%; max-width:1200px;  margin:0 auto;}
	.business_type4:after{ content:""; display:block; clear:both;}
	.business_type4 .business_info { position:relative; width:100%; height:500px; margin:150px auto; background:none;}/* 텍스트 영역 높이 */
	.business_type4 .business_info:after{ content:""; display:block; clear:both;}
	.business_type4 .business_info:first-child {margin-top:0px;}
	.business_type4 .business_info .img_left { position:absolute; left:0; top:0; width:500px; height:auto; background:#ffffff; }
	.business_type4 .business_info .img_left img{ width:100%; height:100%;}
	.business_type4 .business_info .img_right { position:absolute; right:0; top:0; width:500px; height:100%; background:#ffffff; }
	.business_type4 .business_info .img_right img{ width:100%; height:100%;}
	.business_type4 .business_info .con_box { position: absolute; right:0; top:25%; width:55%; /*height:1350px;*/ background:rgba(255,255,255,1); box-shadow:10px 10px 5px rgba(0,0,0,0.04); }
	.business_type4 .business_info .con_box .txt_area {padding:10%; }
	.business_type4 .business_info .con_box .txt_area:before { display: block; content: ''; position: absolute; left: -80px; top:23%;  width:20%; height:1px; background:#000;}
	.business_type4 .business_info .con_box .txt_area em { position:relative; display:block; vertical-align:middle; color:#ddd;  font-size:3em;}
	.business_type4 .business_info .con_box .txt_area strong {display:block; color:#333;  font-size:1.5em; font-weight: 600;  line-height:1.5em; margin:30px 0 20px 0;}
	.business_type4 .business_info .con_box .txt_area p.box_txt {display:block; color:#555; font-size:1em;  font-weight: 300;  line-height:1.5em; text-align:justify;  }
	.business_type4 .business_info .type_other { position: absolute; left: 0; top:25%; width:55%; /*height:350px;*/ background:rgba(255,255,255,1);  box-shadow:10px 10px 5px rgba(0,0,0,0.04); }
	.business_type4 .business_info .type_other .txt_area:before {display:none;}
	.business_type4 .business_info .type_other .txt_area:after { display: block; content: ''; position: absolute; right:-80px; top:23%; width:20%; height:1px; background:#000; }

    
    
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
		.business_type4 .business_info .con_box { position:relative; width:90%; left:50%; top:-50px; margin-left:-45%; height:auto; }
		.business_type4 .business_info .con_box .txt_area:before { display: none;}
		.business_type4 .business_info .type_other .txt_area:after {display:none;}
		.business_type4 .business_info .con_box .txt_area{padding:15px;}
		.business_type4 .business_info .con_box .txt_area strong{font-size:1.2em;}

	}
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<br>
<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">GOST UZ</span>&nbsp; 우즈베키스탄 (UZBEKISTAN)</h1>
	</div>
  
     <h1 style="font-size:1.6em;font-weight:bold;">GOST UZ 개요</h1>
		<h3 style="text-align:left;">
			GOST UZ는 우즈베키스탄의 해당 규정에 적합하는지를 증명하는 인증이며, 현재 우즈베키스탄은 유라시안 관세동맹에 가입하지 않은 국가이기 때문에 TR CU 인증서가 아닌 GOST UZ 인증서를 발급받아야 합니다.			
		</h3>  
       
        
         <img src="./image/Logo_GOST UZ.jpg" alt="GOST UZ 인증마크" style="display:block;width:20%;margin-left:auto;margin-right:auto;">
		<h2 class="sub_txt" style="text-align:center;">GOST UZ 인증 마크</h2> <br><br><br><br>



	<div class="business_type4"> 
    <div class="business_info"  style="margin-bottom:100%;">
			<div class="img_left">
			<img src="./image/GOST_Uz02.jpg"><br><br><br><br>
			<!----img src="./image/GOST_Uz03.jpg" style="height:100%"--------->
			</div>
			
			<div class="con_box">
				<div class="txt_area" style="word-break:keep-all;">
				<strong>GOST UZ 인증서 유형</strong>
					GOST UZ 인증서는 품목군과 기타 세부사항에 따라 COC와 DOC로 분류됩니다.<br><br><br><br>
                   
                    <em>01</em> <br><span style="color:#1F88E5;">CoC (Certificate of Conformity) </span> <br><br>
                     Постановление Кабинета Министров (Resolution of the Cabinet of Ministers) No.122, 28.04.2011의 강제인증 대상 품목은 COC를 받아야 합니다.<br>
                    GOST UZ COC에는 아래 사항이 포함됩니다.<br><br>
                    
                    <ul>
					<p class="box_txt" style="word-break:keep-all;">
						- 유효기간 (제품에 대한 기술규정 및 인증제도에 따름; Batch인증서 경우 유효기간 미설치) Expiration date (depending on the technical regulations and certification schemes on the product Batch production periods of validity are not installed)<br></p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 인증서 신청자에 대한 정보 (Information about the initiator (applicant) the certification procedure)</p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 제품 제조업체에 대한 정보 (Information about the manufacturer of products)</p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 인증기관 정보 (인정서 번호 기재) Data certification body (including the number of accreditation certificate)</p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 제품정보 : 무역명, 종류, 제조, 모델, HS코드(수입품) Product Information: trade name, type, make, model, HS code (for imported products).</p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 기술 규정, 적합성 감사 (Technical regulations, compliance audited) </p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 신청자가 제출한 자료 (Evidentiary documents submitted by the applicant)</p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 시험 및 측정 정보 (Information on the tests and measurements)</p>
					<p class="box_txt">
						- CoC도장 및 인증기관의 서명 (Certificate of compliance seal and signature of the certification body)</p>
			     </ul>
			     
			     <br><br><br><br>
			     <em>02</em> <br><span style="color:#1F88E5;">DoC (Declaration of Conformity) </span> <br><br>
                     일부 품목은 강제인증 품목이지만 DOC 인증대상에 해당하여 DOC를 받아야 합니다.<br>
                     GOST UZ DOC에는 아래 사항이 포함됩니다.<br><br>
                     
                    <ul>
					<p class="box_txt" style="word-break:keep-all;">
						- 기업 또는 개인의 생산 적합성 선언 (Data of the enterprise or a person declares the conformity of production)<br></p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 인증 대상 제품의 정보 (Product Information (party or commercially available product) to which the Declaration on the quality)</p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 기술규정, 적합성문서에 대한 참고사항 (Reference to technical regulations, conformity document which states)</p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 근거문서 (Grounds for declaring – documentary evidence)</p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 문서의 날짜 및 만료일 (Date of the document and the date of expiry of the document)</p>
					
					<p class="box_txt" style="word-break:keep-all;">
						- 적합성 선언을 발행한 인증기관에 대한 정보 (Data on the certification body that certified the declaration of conformity)</p>
			     </ul>

				</div>
			</div>
		</div>
		
	 <br><br>		


		<div class="business_info">
			<div class="img_left"><img src="./image/GOST_Uz04.jpg"></div>
			
			<div class="con_box">
				<div class="txt_area">
					<strong>GOST UZ 인증서 유효기간</strong>
					GOST UZ 인증서는 유효기간에 따라 One-shipment와 Serial 인증으로 나눠집니다.<br><br>
					<p class="box_txt">
						<span style="font-weight: bold;">단일 선적에 대한 인증(One Shipment: Single Delivery Certification) </span><br>
						단발성(1회성)에 대하여 인증이 필요할 시 적합하며, 수입업자와 수출업자 간의 계약서를 바탕으로 발행되는 일회성 인증서이므로 수입업자와 수출업자 간의 계약서가 필수로 요구됩니다. 해당 인증서는 선적서류 및 계약서 에 명시된 제품 수량만큼만 유효합니다.
					</p>
					<br>
					<p class="box_txt">
						<span style="font-weight: bold;">연속 생산(Serial Production Certification)</span><br> 
						인증 기간은 최소 1년에서 최대 3년까지 가능하여, 계속적인 수출이 기대되거나 다수의 수입업자와의 계약이 이루어질 경우 적합합니다. 해당 인증서는 매년 사후심사(공장심사)가 필수로 진행되며, 사후심사 시 중대 결함이 발견되면 인증서가 취소됩니다.
					</p>
				</div>
			</div>
		</div>
		
		  <br>

		<div class="business_info">
			<div class="img_left"><img src="./image/GOST_Uz05.jpg"></div>
			<div class="con_box">
				<div class="txt_area" style="text-align:left;">
					<strong>GOST UZ 인증 절차</strong>
					<p class="box_txt">
						-Постановление Кабинета Министров (Resolution of the Cabinet of Ministers) No.318, 06.07.2004 의 절차에 따라 진행됩니다.<br><br>
					</p>
					<p class="box_txt">
						-Постановление Кабинета Министров (Resolution of the Cabinet of Ministers) No.122, 28.04.2011의 강제인증 대상품목에 해당하는 제품은 해당 요건에 따라 적합성 인증서를 발급받아야 우즈베키스탄으로 수출이 가능합니다.<br><br>
					</p>
					<p class="box_txt">
						-인증서는 우즈베키스탄 정부에 의해 승인된 인증기관을 통해 발급받아야 하며, 적합성 인증서를 발급받은 해당 제품에는 적합성 마크를 부착해야 합니다.<br>
					</p>			
				</div>
			</div>
		</div>	
		
		<br>	
			<div class="business_info">
			<div class="img_left" style="height:60%;"><img src="./image/GOST_Uz06.jpg"></div>
			<div class="con_box">
				<div class="txt_area">
					<strong>GOST UZ 인증 제출 서류</strong><br>
                    <p class="box_txt">-신청서 <a href="/bbs/board.php?bo_table=data01&wr_id=5">(자료실에서 신청서 양식을 다운 받으실 수 있습니다. <span style="color:blue;">바로가기 Click!</span>)</a></p>
					<p class="box_txt">
						- HS Code</p>
					<p class="box_txt">
						- 제품 설명서(러시아어 또는 수출국 언어)</p>
					<p class="box_txt">
						- 기 보유 시험 성적서</p>
					<p class="box_txt">
						- 기 보유 인증서</p>
					<p class="box_txt">
						- 도면(해당 시)</p>
					<p class="box_txt">
						- 기술문서 (해당 시)</p>
				</div>
			</div>
		</div>
	
	    <!--------/ 고객님께 드리는 혜택 시작  /-------------->
		<br><br><br><br><br><br>
       
        <div class="business_type4">
          <h2 class="con_arrow" style="color:#1F88E5;font-size:0.8em;"><p><strong style="color:#1F88E5;font-size:0.8em;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li><p><em><strong>01</strong></em><span> EAC 및 GOST 인증 서비스</span></p></li>
		  		<li><p><em><strong>04</strong></em><span> Eurasia Representative 서비스</span></p></li>
		  		<li><p><em><strong>02</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span></p></li>
		  		<li><p><em><strong>05</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span></p></li>
		  		<li><p><em><strong>03</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발행 서비스</span></p></li>
		  	</ul>
		  </div><!--------/ 고객님께 드리는 혜택 종료  /-------------->

        </div> <!-----------div class="business_info" 종료 --------------->		
		
		
	    </div>	<!--------div class="business_type4" 종료---------->
	</div>	<!----------- div class="content_wrap" 종료------------>

<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<?php
     include_once('tail.php');//공통 하단을 연결합니다.
     include_once(G5_THEME_PATH.'/tail.php');//그누보드의 공통 하단을 연결합니다.
?>