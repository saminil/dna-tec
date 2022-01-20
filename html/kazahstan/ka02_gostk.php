<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "카자흐스탄"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "GOST K"; //커스텀페이지의 타이틀을 입력합니다.
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


	.business_type2{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type2:after{content:""; display:block; clear:both;}
	.business_type2 .business_info { width:100%; background:#fff; margin-bottom:80px; }
	.business_type2 .business_info:after{content:""; display:block; clear:both;}
	.business_type2 .business_info ul{ padding:0; margin:0;}
	.business_type2 .business_info ul li{ padding:0; margin:0;}
	.business_type2 .business_info ul li.left_box { float:left; width:500px; height:700px; overflow:hidden; }
	.business_type2 .business_info ul li.left_box img{ width:100%; height:100%; }
	.business_type2 .business_info ul li.right_box{position:relative; float:right; width:50%; height:500px;}
	.business_type2 .business_info ul li.right_box .txt03{ position:absolute; left:0; bottom:0; width:100%; border-top:1px solid #ddd; font-size:0.9em; color:#555; line-height:1.5em; text-transform: uppercase; background:#f8f8f8; overflow:hidden;}
	.business_type2 .business_info ul li.right_box .txt03 span {display:block; padding:20px 25px; height:100px; }

	.business_type2 .txt_area { width:100%; padding-top:40px; border-top:2px solid #000; }
	.business_type2 .txt_area:after{content:""; display:block; clear:both;}
	.business_type2 .txt_area .txt01 { float:left; width:100%; word-break: keep-all; }
	.business_type2 .txt_area .txt01 p { padding:0; margin:0; margin-bottom:15px; padding:0;}
	.business_type2 .txt_area .txt01 span.tit { display:block; font-size:2.2em; color:#000; font-weight:700; line-height:1.2em;  }
	.business_type2 .txt_area .txt01 span.txt { display:block; font-size:1.15em; color:#333; font-weight:400; line-height:1.4em; }
	.business_type2 .txt_area .txt02 { float:left; width:100%; margin-top:20px;}
	.business_type2 .txt_area .txt02 ul {margin:0; padding:0; }
	.business_type2 .txt_area .txt02 ul li { position:relative; color:#555; font-weight:400; line-height:1.5em; list-style:none; padding-left:3%; margin-bottom:5px;}
	.business_type2 .txt_area .txt02 ul li:before {position:absolute; top:8px; left:0; content:""; display:inline-block; width:4px; height:4px; background:#555; margin-right:10px; vertical-align:middle;}



	.business_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.business_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.business_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.business_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.business_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.business_type2 .con_box:after{content:""; display:block; clear:both;}
	.business_type2 .con_box ul { padding:0; margin:0; }
	.business_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.business_type2 .con_box ul li p{display:table; width:100%; }
	.business_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.business_type2 .con_box ul li p > em{ width:30px; }
	.business_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.business_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}


	@media screen and (max-width:992px){
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}
		
		.business_type2 .business_info{margin-bottom:0px;}
		.business_type2 .business_info ul li.left_box { width:100%; height:300px;  }
		.business_type2 .business_info ul li.right_box{ width:100%; }
		.business_type2 .business_info ul li.right_box .txt03 {position:relative !important; margin-top:40px;}
		.business_type2 .business_info ul li.right_box .txt03 span {height:auto;}
		.business_type2 .txt_area { width:90%; margin:0 auto; border-top:0;}
		.business_type2 .txt_area .txt01 span.tit {font-size:1.85em;}
		.business_type2 .con_arrow{width:95%; margin:0 auto;}
		.business_type2 .con_box{width:95%; margin:0 auto;}

	}

	@media screen and (max-width:480px){

	
		.business_type2 .con_arrow p{ font-size:1.5em; margin-top:30px;}
		.business_type2 .con_box ul li { width:100%; }

	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<br><br>
<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">GOST K 인증</span>&nbsp;카자흐스탄</h1>
		<h2 class="sub_txt">CIS(Commonwealth of Independent States, 독립국가연합)12개 회원국의 국가 규격</h2>
	</div>

           <li class="left_box">
			    <dt>
				  <div id="eac_CoC">
						<img src="./image/GOST_K_01.jpg" style="display:block;width:30%;margin: 0 auto;"><br>
						 <p style="text-align:center;">GOST K 마크</p><br><br>
				  </div>			
				</dt>
			</li>




	<div class="business_type2">
	
		<div class="business_info">
		<ul>
			<!-----li class="left_box"><img src="./image/company_img1.jpg" alt="카자흐스탄 TRCU EAC"></li----->
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 개요</span></p>
						<p><span class="txt">GGOST는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.
                           현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은 GOST-K 등으로 구분지어 불리고 있습니다.
                           GOST는 지역규격이며, 카자흐스탄의 국가규격은 GOST K입니다.</span></p>
                        <p><span class="txt">TRCU(Technical Regulation of Customs Union)유라시안 관세동맹국가 간 발효 된 통합 인증제도의 도입 후 카자흐스탄 내 GOST K 인증 품목은 크게 줄어들었습니다. 하지만 아직 동맹국 간 협의가 이루어지지 않은 강제 인증 품목에 한해서는 수입통관 시 GOST K 인증이 요구됩니다.</span></p>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="./image/GOST_K_00.jpg" alt="카자흐스탄 TRCU EAC" style="display:block;width:30%;margin: 0 auto;"></li><br>
			
			
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 인증 대상 품목</span></p>
						<p><span class="txt">GOST K는 카자흐스탄 KAZMEMST (Committee for Standardization, Metrology and Certification)에서 승인한 인증기관에서 발행 가능하며 규정 상 다음의 품목이 GOST K 인증 대상입니다.
                </span></p>
					</div>
					<div class="txt02">
					<ul>
						<li>- 카자흐스탄 법령 No 367 “About obligatory confirmation of conformity of products in the Republic of Kazakhstan”에 포함된 품목</li>
						<li>- 카자흐스탄 법령 No 620 “Single list of products subject to mandatory assessment(confirmation) within the Customs Union with issuance of uniform documents”에 포함되지 않은 품목</li>
						<li>- 기타 관세동맹 회원국 간 합의된 “통합 적합성 평가대상 목록”에 포함되지 않은 품목</li>
					</ul>
					</div>
				</div>
				<div class="txt03">
					<span>
						Ex) 전기.전자제품, 건축제품, 의료기기, 가전제품, 공구, 농산물, 식품.음료.담배, 화학물질, 완구 및 아동복, 가구 및 식기류, etc.
					</span>
				</div>
			</li>
		</ul>
		</div>		
		
		<div class="business_info">
		<ul>
		<br>
			<li style=""><img src="./image/GOST_K_02.jpg" alt="카자흐스탄 GOST K" style="display:block;width:30%;margin: 0 auto;"><br></li>
			
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 인증서 유형</span></p>
						<p><span class="txt">GOST K 인증서는 제품군과 세부사항에 따라 두 종류로 구분됩니다.
                </span></p>
					</div>
					<div class="txt02">
					<ul>
                        <li><strong>GOST K CoC (강제 적합성 인증)</strong><br></li>
                        <li><strong></strong>GOST K Voluntary CoC (자발적 적합성 인증)</li><br>
					</ul>
					</div>
				</div>
				
				<div class="txt03">
					<span>
						  -TRCU EAC 인증서 종류<br>
                          -TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다. <br>&nbsp; <br>

					</span>
					<br>
				</div>
			</li>
		</ul>
		</div>
		
		
		
		
		<div class="business_info">
		<ul>
			<li><img src="./image/GOST_K_03.jpg" alt="카자흐스탄 GOST K" style="display:block;width:30%;margin: 0 auto;"><br></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 인증서 유효기간</span></p>
						<p><span class="txt">GOST K 인증서는 유효기간에 따라 One-shipment와 Serial 인증으로 나눠집니다.
                </span></p>
					</div>
					<div class="txt02">
					<ul>
                        <li><strong>단일 선적에 대한 인증(One-Shipment: Single Delivery Certification)</strong><br>
                            단발성(1회성)으로 계약에 적합한 인증으로, 수입자와의 계약서에 표기된 계약이행 기간까지 유효합니다.</li>
                        <li><strong>연속 생산(Serial Production Certification) </strong><br>
                            계속적인 수출이 예상되는 경우에 유리하며 최소 1년에서 최대 3년까지 유효합니다.</li><br>

					</ul>
					</div>
				</div>
				
				<div class="txt03">
					<span>
						  -1년간 유효한 인증서는 1년마다 샘플과 서류 검토 절차를 거친 후 새로 발행됩니다.<br>
                          -3년간 유효한 인증서는 샘플과 서류검토 외에 추가적으로 공장심사가 요구되며, <br>
                           &nbsp; 해당 제품을 제조하고 있는 모든 공장이 검사 대상이 되며,<br>
                           &nbsp; 사후심사 시 중대한 결함이 발견될 경우 제품의 인증서가 취소됩니다.
					</span>
					<br>
				</div>
			</li>
		</ul>
		</div>	

		<div class="business_info">
		<ul>
			<li><img src="./image/GOST_K_04.png" alt="카자흐스탄 TRCU EAC" style="display:block;width:45%;margin: 0 auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 인증 절차</span></p>
					</div>
					<div class="txt02">
					<ul>
                        <li>1. 인증기관에 신청서 및 제품 관련 서류 제출</li>
                        <li>2. 서류 검토</li>
                        <li>3. 적용되는 인증서 유형 확인</li>
                        <li>4. 샘플 시험 및 공장심사 여부 확인</li>
                        <li>5. 견적서 발행 및 계약</li>
                        <li>6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</li>
                        <li>7. 공장심사 필요 시, 심사 진행</li>
                        <li>8. 인증서 초안 발행 및 고객 확인</li>
                        <li>9. 인증서 발행</li>
					</ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="../russia/image/EAC18_Ex_sgr.jpg" alt="카자흐스탄 TRCU EAC" style="display:block;width:30%;margin: 0 auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 인증 제출 서류</span></p>
					</div>
					<div class="txt02">
					<ul>
                        <li>신청서 - (자료실에서 신청서 양식을 다운 받으실 수 있습니다.)</li>
                        <li>HS Code</li>
                        <li>제품 설명서 (러시아어 또는 수출국 언어)</li>
                        <li>기 보유 시험 성적서</li>
                        <li>기 보유 인증서</li>
                        <li>도면 (해당 시)</li>
                        <li>기술문서 (해당 시)</li>
					</ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="business_info">
		<ul>
			<!----li class="left_box"><img src="./image/company_img3.jpg" alt="카자흐스탄 TRCU EAC"></li---->
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">EAC 인증 신청자</span></p>
						<p><span class="txt">TRCU 인증, GOST R 인증 등 경우 러시아 또는 기타 관세동맹 국가에서 위치한 업체만 신청자가 될 수 있습니다. 그 업체는 법적실체 또는 개인사업자여야 하며 일반인은 인증의 신청자가 될 수 없습니다.<br>
                        RUST-TEST PACIFIC은 유라지아 지역 내에 신청자 역할을 할 수 있는 사업자가 없는 고객을 위해 Eurasia Representative 서비스를 제공하고 있습니다.</span></p>
                        <p></p>
                        <p></p>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="business_info">
		  <ul>
		  	<!----li class="left_box"><img src="./image/company_img3.jpg" alt="카자흐스탄 TRCU EAC"></li---->
		  	<li>
		  		<div class="txt_area">
		  			<div class="txt01">
		  				<p><span class="tit">카자흐스탄 국가인증센터 대장(Register)</span></p>
		  				<p><span class="txt">GOST K는 <a href="http://www.rep.nca.kz/kaz/">카자흐스탄 국가인증센터 웹사이트</a>에서 확인 가능합니다.</span></p>
                        <br> <sapan style="color:blue;"><a href="http://www.rep.nca.kz/kaz/">< 웹사이트 바로가기 > 클릭!</웹사이트></a></sapan>
                          <p></p>
                          <p></p>
		  			</div>
		  		</div>
		  	</li>
		  </ul>
		</div>
		
		<h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li><p><em><strong>01</strong></em><span>EAC 및 GOST 인증 서비스</span></p></li>
		  		<li><p><em><strong>04</strong></em><span> Eurasia Representative 서비스</span></p></li>
		  		<li><p><em><strong>02</strong></em><span> 국가위생등록, 위료기기 등록, 계측기기 등록, 사용허가, 호재안전 등의 유라시아 인증 서비스</span></p></li>
		  		<li><p><em><strong>05</strong></em><span> 제품설명,서류검증,기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span></p></li>
		  		<li><p><em><strong>03</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발생 서비스</span></p></li>
		  	</ul>
		  </div>

	</div>

	
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>
<!-----?php
	include "../include/tail.php"; 
?---->