<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "카자흐스탄"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "TRCU EAC"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //공통 상단을 연결합니다.
?>

    <!-----페이지 상단 글로벌 네비게이션-------->
	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><a href="../russia/ru01_trcueac.php"><?php echo $tmenu_?></a></li><!----인증서비스(러시아) 페이지 연결-------->
			<?php if($tmenu2_){?><li><a href="ka01_trcueac.php"><?php echo $tmenu2_?></a></li><?php }?><!----러시아 페이지 연결-------->
			<li><a href="ka01_trcueac.php"><?php echo $g5['title']?></a></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			고객님의 방문을 환영합니다.
		</p>
	</div>

<!----?php
	include "../include/header.php"; 
?---->

<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다. 
	*/ 
?>
<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
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
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }


	.business_type2{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type2:after{content:""; display:block; clear:both;}
	.business_type2 .business_info { width:100%; background:#fff; margin-bottom:80px; }
	.business_type2 .business_info:after{content:""; display:block; clear:both;}
	.business_type2 .business_info ul{ padding:0; margin:0;}
	.business_type2 .business_info ul li{ padding:0; margin:0;}
	.business_type2 .business_info ul li.left_box { float:left; width:500px; height:500px; overflow:hidden; }
	.business_type2 .business_info ul li.left_box img{ width:100%; height:100%; }
	.business_type2 .business_info ul li.right_box{position:relative; float:right; width:50%; height:2700px;}
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

<br>
<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">TRCU EAC 인증서</span>&nbsp;카자흐스탄</h1>
		<h2 class="sub_txt">TRCU는 Technical Regulation of Customs Union의 약자로 러시아를 중심으로 한 관세동맹(Customs Union)의 기술규정</h2>
	</div>

        <li class="left_box">
			    <dt>
				  <div id="eac_CoC" style="width:50%;margin-left:auto;margin-right:auto;">
						<img src="../russia/image/eac_mark03_CoC.png"><br><br>
						 <p style="text-align:center;">RCU EAC 인증서</p>
				  </div>			
				</dt>
		</li>





	<div class="business_type2">
	
		<div class="business_info">
		<ul>
			<li class="left_box"><img src="./image/company_img1.jpg" alt="이미지"></li>
			<li class="right_box">
				<div class="txt_area">
				
					<div class="txt01" style="word-break:keep-all;">
						<p><span class="tit">TRCU EAC 인증서 개요</span></p>
						<!---p><span class="txt">현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어있으며, TRCU인증은 유라시안 경제 위원회 결정을 따라 규정된 인증절차를 따릅니다. </span></p---->
                        <p>TRCU는 Technical Regulation of Customs Union의 약자로 러시아를 중심으로 한 관세동맹(Customs Union)의 기술규정을 의미합니다.</p>
                        <p>TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시안 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시안 경제연합 “EEU, Eurasian Economic Union”에서 발효 한 통합 인증제도입니다.</p>
                        <p>현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어있으며, TRCU인증은 유라시안 경제 위원회 결정을 따라 규정된 인증절차를 따릅니다. </p>
                        <p>인증서 상에는 EAC 마크가 부착되며 이는 Eurasian Conformity를 뜻합니다.</p>
					</div>
					
					
					
					
					
					
		
			</li>	
		</ul>
				
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="business_info">
		<ul>
			<li class="left_box"><img src="./image/company_img2.jpg" alt="이미지"></li>
			<li class="right_box">
				<div class="txt_area">

					<div class="txt02">
					<ul>
						[ TRCU 관계 법령 ]<br>
                        <li>TRCU 세부 목록은 다음과 같습니다.</li>
                        <li>TRCU 001/2011 “On safety of railway rolling stock”</li>
                        <li>TRCU 002/2011 “On safety of high-speed railway transport”</li>
                        <li>TRCU 003/2011 “On safety of railway transport infrastructure”</li>
                        <li>TRCU 004/2011 “On safety of Low-voltage equipment”</li>
                        <li>TRCU 005/2011 “On safety of packages”</li>
                        <li>TRCU 006/2011 “On safety of pyrotechnic articles”</li>
                        <li>TRCU 007/2011 “On safety of products intended for children and adolescents”</li>
                        <li>TRCU 008/2011 “On safety of toys”</li>
                        <li>TRCU 009/2011 “On safety of perfumes and cosmetics”</li>
                        <li>TRCU 010/2011 “On safety of machinery and equipment”</li>
                        <li>TRCU 011/2011 “On safety of elevators”</li>
                        <li>TRCU 012/2011 “On safety of equipment in explosion hazardous environments”</li>
                        <li>TRCU 013/2011 “0n requirements to motor and aviation petrol, diesel and marine, fuel, reactive engines fuel and black oil”</li>
                        <li>TRCU 014/2011 “On safety of roads”</li>
                        <li>TRCU 015/2011 “On safety of grain”</li>
                        <li>TRCU 016/2011 “On safety of apparatuses working on gaseous fuel”</li>
                        <li>TRCU 017/2011 “On safety of light industry products”</li>
                        <li>TRCU 018/2011 “On safety of wheeled vehicles”</li>
                        <li>TRCU 019/2011 “On safety of personal protection equipment”</li>
                        <li>TRCU 020/2011 “On safety of Electromagnetic compatibility of technical devices”</li>
                        <li>TRCU 021/2011 “On safety of food products”</li>
                        <li>TRCU 022/2011 “On safety of food products in terms of their marking”</li>
                        <li>TRCU 023/2011 “On safety of juice products made of fruit and vegetables”</li>
                        <li>TRCU 024/2011 “On safety of oil & fat products”</li>
                        <li>TRCU 025/2011 “On safety of furniture”</li>
                        <li>TRCU 026/2011 “On safety of small-sized vessels”</li>
                        <li>TRCU 027/2011 “On safety of certain types of specialized food products, including food for dietary treatment and protective diet”</li>
                        <li>TRCU 028/2012 “On safety of explosives and products on their basis”</li>
                        <li>TRCU 029/2012 “On requirements for food additives, flavoring agents and processing supplements”</li>
                        <li>TRCU 030/2012 “On requirements for lubricants, oils and special liquids”</li>
                        <li>TRCU 031/2012 “On safety of agricultural and forestry tractors and trailers thereto”</li>
                        <li>TRCU 032/2013 “On safety of pressure equipment”</li>
                        <li>TRCU 033/2013 “On the safety of milk and dairy products”</li>
                        <li>TRCU 034/2013 “On safety of meat and meat products“</li>
                        <li>TRCU 035/2014 “On safety of tobacco products”</li>
                        <li>TRCU 036/2016 “On requirements for liquified petroleum gases foe use as fuel”</li>
                        <li>TRCU 037/2016 “Restricting usage of hazardous substances in the electrical goods and radio electronics” </li>
                        <li>TRCU 038/2016 “On safety of amusement rides”</li>
                        <li>TRCU 039/2016 “On requirements for mineral fertilizers”</li>
                        <li>TRCU 040/2016 “On safety of fish and fish products”</li>
                        <li>TRCU 041/2017 “On safety of chemical products”</li>
                        <li>TRCU 042/2017 “On safety of chemical products”</li>
                        <li>TRCU 043/2017” On safety of equipment for children’s playgrounds”</li>
                        <li>TRCU 044/2017 “On safety of packaged drinking water, including natural mineral water”</li>
                        <li>TRCU 045/2017 “On safety of oil prepared for transportation and(or) use”</li>
                        <li>TRCU 046/2018 "On safety of natural flammable gas, prepared for transportation or usage"</li>
                        <li>TRCU 047/2018 "On safety of alcohol products"</li>
					</ul>
					</div>	
				</div>
				
				<br><br>
				<!----div class="txt03">
					<span>
					TRCU EAC 인증서 종류<br>
                        <p>TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.</p>
                        <p>TRCU CoC는 압력 용기류, 수공구류, 크레인, 승강기, 일부 기계류, 시험장비, 전기전자제품 등의 제품군이 해당되며 샘플시험 또는 공장심사가 요구됩니다.</p>
                        <p>TRCU DoC는 위험성이 비교적 적은 일반 제품에 해당되며 일부 제품은 서류심사로 인증서 발급이 가능합니다.</p>
                        <p>CoC의 경우 지정시험소를 통한 제품 시험을 원칙으로 하고 있으나 다수의 인증기관에서 추가 시험 없이 CB Safety 성적서 등을 인정하여 인증서를 발행하고 있습니다.   </p>
					</span>
				</div----->
				
				
				<div class="txt04">
					<span>
						<strong>TRCU EAC 인증서 유형</strong><br>
                        <p><span style="color:red;">&nbsp; &nbsp;TRCU 인증서</span><br>
                             &nbsp; &nbsp; 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.</p>
                        <p><span style="color:red;">&nbsp; &nbsp;TRCU CoC</span><br>
                             &nbsp; &nbsp; 압력 용기류, 수공구류, 크레인, 승강기, 일부 기계류, 시험장비, 전기전자제품 등의 제품군이 해당되며 샘플시험 또는 공장심사가 요구됩니다.</p>
                            <p><span style="color:red;">&nbsp; &nbsp;TRCU DoC</span><br>
                             &nbsp; &nbsp; 위험성이 비교적 적은 일반 제품에 해당되며 일부 제품은 서류심사로 인증서 발급이 가능합니다.</p>
                        <p>-CoC의 경우 지정시험소를 통한 제품 시험을 원칙으로 하고 있으나 다수의 인증기관에서 추가 시험 없이 CB Safety 성적서 등을 인정하여 인증서를 발행하고 있습니다. </p>  
					</span>
				</div>
      
                <br><br>
				
				<div class="txt04">
					<span>
						<strong>TRCU EAC 인증서 유효기간</strong><br>
                        <p>‘단일 선적’에 대한 인증’ (One-Shipment: Single Delivery Certification)의 경우 주로 플랜트 등 단발성으로 수출하는 물품인 경우와 제 3자나 다른 일반적인 소비자에게 재판매가 되지 않는 경우에 해당하며 수입자와의 계약서에 표기된 계약이행 기간까지 유효합니다.</p>
                        <p>'연속 생산' (Serial Production Certification)의 경우 한번의 인증으로 유효기간 안에 추가적인 인증이 필요 없습니다. 일정한 기간 안에 계속적인 수출이 예상되는 경우에 유리하며 1년, 3년 또는 5년까지 원하는 기간동안 유효한 인증서를 받을 수 있습니다.  </p>
					</span>
				</div>
				
				<br><br>
				
				<div class="txt04">
					<span>
						<strong>TRCU EAC 인증 절차</strong><br>
                       
                        <p>1. 인증기관에 신청서 및 제품 관련 서류 제출</p>
                        <p>2. 서류 검토</p>
                        <p>3. 적용되는 인증서 유형 확인</p>
                        <p>4. 샘플 시험 및 공장심사 여부 확인</p>
                        <p>5. 견적서 발행 및 계약</p>
                        <p>6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</p>
                        <p>7. 공장심사 필요 시, 심사 진행</p>
                        <p>8. 인증서 발행</p>

					</span>
				</div>
				
				<br><br>
				
				<div class="txt04">
					<span>
						<strong>TRCU EAC 제출서류</strong><br>
                        <p>제출서류는 다음과 같습니다. (국한되지 않으며 필요에 따라 추가될 수 있습니다.)</p>
                        <p>신청서 (HS Code 포함)</p>
                        <p>기 보유 시험 성적서</p>
                        <p>기 보유 인증서</p>
                        <p>회로도 (해당 시)</p>
                        <p>기술문서</p>
                        <p>제품설명서 (러시아어 또는 수출국 언어)</p>

					</span>
				</div>
			</li>	
		</ul>
				
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		


		<h3 class="con_arrow">
			<p>심플하지만 다 갖춘 RUS TEST PACIFIC</p>
		</h3>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>이곳은 간략한 설명글이 들어갈 자리입니다. 이곳은 간략한 설명글이 들어갈 자리입니다.</span></p></li>
				<li><p><em><strong>02</strong></em><span>이곳은 간략한 설명글이 들어갈 자리입니다. 이곳은 간략한 설명글이 들어갈 자리입니다.</span></p></li>
				<li><p><em><strong>03</strong></em><span>이곳은 간략한 설명글이 들어갈 자리입니다. 이곳은 간략한 설명글이 들어갈 자리입니다.</span></p></li>
				<li><p><em><strong>04</strong></em><span>이곳은 간략한 설명글이 들어갈 자리입니다. 이곳은 간략한 설명글이 들어갈 자리입니다.</span></p></li>
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