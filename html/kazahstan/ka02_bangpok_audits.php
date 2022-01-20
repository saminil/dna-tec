<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "카자흐스탄"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "방폭인증"; //커스텀페이지의 타이틀을 입력합니다.
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
	.business_type2 .business_info ul li{ padding:0; margin:0;padding-right;5%;text-align:justify;}
	.business_type2 .business_info ul li.left_box { float:left; width:40%;/* height:500px;*/ overflow:hidden; }
	.business_type2 .business_info ul li.left_box img{ width:100%; height:100%; }
	.business_type2 .business_info ul li.right_box{position:relative; float:right; width:60%; /*height:500px;*/padding-right;5%;text-align:justify;}
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
		.business_type2 .txt_area { width:90%; margin:0 auto; border-top:0;}
		.business_type2 .txt_area .txt01 span.tit {font-size:1.85em;}
		.business_type2 .con_arrow{width:95%; margin:0 auto;}
		.business_type2 .con_box{width:95%; margin:0 auto;}

	}

	@media screen and (max-width:480px){

	
		.business_type2 .con_arrow p{ font-size:1.5em; margin-top:30px;}
		.business_type2 .con_box ul li { width:100%; }

	}

    /*  TRCU 관계 법령 시작,table  */
    
    .business_type5 ul li dl{display:table;}
	.business_type5 ul li dl dt, .business_type5 ul li dl dd{display:table-cell; vertical-align:middle;}
	.business_type5 ul li dl dt{width:40%; padding-left:5%;}
	.business_type5 ul li dl dt img{max-width:100%; margin:0 auto;}	
	.business_type5 ul li dl dd{width:60%; padding:50px 0; padding-top:30px; padding-left:5%;}
	.business_type5 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type5 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type5 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}
    
    
    table {width: 100%;border: 1px solid #444444;border-collapse: collapse;}
    th, td {border: 1px solid #444444;padding: 10px;}
    
    /*  TRCU 관계 법령 종료 table  */

	@media screen and (max-width:992px){		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}
	}

	@media all and (max-width:768px){
		.business_type5 h1{font-size:1.8em; }
		.business_type5 h2{font-size:1.4em; }
		.business_type5 h3{font-size:0.9em; padding:0 5px;}
		.business_type5 ul li dl, .business_type5 ul li dl dt, .business_type5 ul li dl dd{display:block; width:100%;}
		.business_type5 ul li dl dt{padding:5%;}
		.business_type5 ul li dl dt img{width:91%;}
		.business_type5 ul li dl dd > strong{line-height:30px; font-size:1.3em;}
		.business_type5 ul li dl dd{width:90%; padding:5%; padding-top:0;}
		.business_type5 ul li dl dd > p{line-height:24px; font-size:0.95em;}
		.business_type5 ul li dl dd > p:before{top:10px;}
	}

	@media all and (max-width:480px){
		.business_type5 h3 br.sn{display:inline;}
        .business_type2 .business_info ul li.left_box { width:20%; }
		.business_type2 .business_info ul li.right_box{ width:80%; }
		.business_type2 .business_info ul li.right_box .txt03 {position:relative !important; margin-top:600px;}
		.business_type2 .business_info ul li.right_box .txt03 span {height:auto;}
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */    
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">TRCU EAC Ex 방폭인증</span>&nbsp;카자흐스탄(Kazahstan)</h1>
		<h2 class="sub_txt">TR CU 012/2011 폭발 위험 환경에서의 장비 안전</h2>
	</div>


<div>
	<a href="#" style="width:25%;display:block;margin:auto;"><img src="../russia/image/EAC01_Ex_mark.jpg" alt="EAC마크"><p style="width:50%;display:block;margin-left:auto;margin-right:auto;">방폭인증 카자흐스탄</p></a><br><br>
	</div>


	<div class="business_type2">
	
		<div>
		<ul>
			<!----li class="left_box"><img src="./image/bangpok_kazahstan.jpg" alt="이미지"></li----->
			<li>
				<div class="txt_area">
					<div class="txt01">
					
						<p><span class="tit">TRCU EAC Ex 방폭인증 개요 </span></p>
						<!----------------
						<p><span class="txt">BLANK <br><br>
                        BLANK2 </span></p>
                        -------->
					</div>
					<div class="txt02">
					<ul>
						<li>러시아, 벨라루스, 카자흐스탄 3개 국에서 관세동맹위원회 제825호령으로 발효된 폭발위험환경의 장비 안전에 관한 기술규정입니다. (TR 012/2011).<br>
                        인증대상 방폭기계 2가지 그룹으로 분류되어 있습니다. </li>
						<li>EAC Ex 인증은 지침 2014/34/EU 또는 지침 94/9/EC에 따른 유럽 ATEX 인증 시스템과 많은 점에서 유사하지만 상당한 차이가 있습니다. 이미 장비에 대한 ATEX 인증서가 있는 경우, 러시아 시장에 대한 EX 인증 절차를 간소화할 수 있지만 대체하지는 않습니다.<br><br></li>
					</ul>
					</div>
				</div>
				<div class="txt03">
					<!----span>
						TRCU EAC 인증서 종류<br>
                        TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.
					</span----->
				</div>
			</li>
		</ul>
		</div>
		
		
		
		<div class="business_info">
		<ul>
			<li style="height:40%;"><img src="../russia/image/EAC03_Ex_CoC.jpg" alt="TRCU EAC Ex 대상 품목" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">TRCU EAC Ex 대상 품목</span></p>
						<p><span class="txt">
						    <!-----BLANK 03------->
						</span></p>
					</div>
					<div class="txt02">
					<ul>
						<li>TR CU 012/2011은 폭발 가능성이 있는 환경에서 사용하기 위한 EX 보호 구성요소를 포함하여 모든 폭발 방지 전기 및 비전기 장비 및 기계에 적용됩니다. 기술 규정의 적합성 평가는 EAC EX 인증의 형태로 제공됩니다.<br><br> </li>
			
					</ul>
					</div>
				</div>
				<div class="txt03">
					<!----span>
						TRCU EAC 인증서 종류<br>
                        TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.
					</span----->
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="business_info">
		<ul>
			<li><img src="./image/02_2.jpg" alt="이미지" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">TRCU EAC Ex 제외 품목</span></p>
						<p><span class="txt">TR CU 012/2011은 폭발 가능성이 있는 환경에서 사용하기 위한 EX 보호 구성요소를 포함하여 모든 폭발 방지 전기 및 비전기 장비 및 기계에 적용됩니다. 기술 규정의 적합성 평가는 EAC EX 인증의 형태로 제공됩니다. 
						   </span></p>
					</div>
					<div class="txt02">
					<ul>
                        <p>제외품목</p>
                        <li>의료 기술</li>
                        <li>폭발물이나 불안정한 화학적 연결로 인해 폭발할 수 있는 장치</li>
                        <li>가정용품</li>
                        <li>개인 보호 장비</li>
                        <li>선박과 바지선, 이동식 연안 플랫폼 및 석유 굴착기</li>
                        <li>공기, 육지, 철도 또는 해상 선박</li>
                        <li>군비</li>
                        <li>핵무기와 핵 연구 시설</li>	
					</ul>
					</div>
				</div>
				<div class="txt03">
					<!-----span>
						TRCU EAC 인증서 종류<br>
                        TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.
					</span----->
				</div>
			</li>
		</ul>
		</div>
		
		
		
		
		<div class="business_info" style="height:30%;">
		<ul>
			<li style="height:30%;"><img src="../kazahstan/image/EAC02_Ex_CoC.png" alt="이미지" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">TRCU EAC Ex 방폭인증 유형 </span></p>
						<p><span class="txt">이 규정은 Certification of Conformity 형태로만 가능하며, 자가 적합성 선언으로 대체될 수 없습니다.<br><br>
						인증대상 방폭기계 2가지 그룹으로 분류되어 있습니다. 
						   </span></p>
					</div>
					<div class="txt02">
					<ul>
						<li>I 그룹: 가스먼지 가스로 인해 유해한 광산 및 토지구조물에 사용되는 장비</li>
						<li>II 그룹: 내부 및 외부 설비를 위한 폭발 방지 전기 장비. 이 단체는 지하 생성 광산과 그 지하 구조, 광산 가스 및/또는 먼지 연료 외에 폭발성이 높은 지역을 목표로 한다.</li>
					</ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		
		
		<div class="business_info">
		<ul>
			<li style="height:30%;">
			   <img src="../russia/image/EAC04_Ex_CoC.jpg" alt="이미지" style="width:40%;display:block;margin:auto;">
            </li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">TRCU EAC Ex 방폭인증 인증스킴 및 유효기간</span></p>
						<p><span class="txt">방폭인증은 최대 3년까지 유효합니다. </span></p>
					</div>
				</div>
			</li>
		</ul>
		</div>

		<div class="business_info">
		<ul>
			<li style="height:40%;"><img src="./image/02_1.jpg" alt="이미지" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">TRCU EAC Ex 방폭인증 유효기간 </span></p>
						<!------p><span class="txt">인증스킴: 1a, 3a, 5, 7 & 8.  <br>방폭인증은 최대 3년까지 유효합니다. </span></p----->
					</div>
					
					<div class="txt02">
					   <ul>
                        <li>Serial Production(연속생산)<br>
                            &nbsp; &nbsp; 1c – Ex 인증서 : 샘플 공인시험소에서 시험실시 및 공장심사 필수</li>
                        <li>Single Supply(일회성)<br>
                            &nbsp; &nbsp; 3c – Ex 인증서 : 일괄적으로 발송되는 제품 샘플 공인시험소에서 시험실시 필수<br>
                            &nbsp; &nbsp; 4c – Ex 인증서 : 일괄적으로 발송돠는 1가지의 제품의 샘플 공인시험소에서 시험실시 필수</li><br><br>
					   </ul>
					</div>
				</div>
				
			</li>
		</ul>
		</div>
		
		
		
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="../russia/image/EAC06_Ex_CoC.png" alt="이미지" style="width:50%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">TRCU EAC Ex 방폭 인증 절차 </span></p>
						<p><span class="txt">TR CU 012/2011은 폭발 가능성이 있는 환경에서 사용하기 위한 EX 보호 구성요소를 포함하여 모든 폭발 방지 전기 및 비전기 장비 및 기계에 적용됩니다. 기술 규정의 적합성 평가는 EAC EX 인증의 형태로 제공됩니다. 
						   </span></p>
					</div>
					<div class="txt02">
					<ul>	
                        <span>1. 인증기관에 신청서 및 제품 관련 서류 제출</span><br><br>
                        <span>2. 서류 검토</span><br><br>
                        <span>3. 견적 발행 및 계약</span><br><br>
                        <span>4. 신청서 접수 (Representative sign 필)</span><br><br>
                        <span>5. 샘플 발송 후 시험 및 시험 성적서 발행)</span><br><br>
                        <span>6. 공장심사</span><br><br>
                        <span>7. 러시아 인정(accreditation) 정부 웹사이트 등록</span><br><br>
                        <span>8. 인증서 초안 발행 및 고객 확인</span><br><br>
                        <span>9. 인증서 발행</span><br><br>	   				
					</ul>
					</div>
				</div>
				<div class="txt03">
					<!-----span>
						TRCU EAC 인증서 종류<br>
                        TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.
					</span----->
				</div>
			</li>
		</ul>
		</div>
		
		
		
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="../russia/image/EAC18_Ex_sgr.jpg" alt="이미지" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">TRCU EAC Ex 방폭인증 제출 서류 </span></p>
						<!--------p><span class="txt">TR CU 012/2011은 폭발 가능성이 있는 환경에서 사용하기 위한 EX 보호 구성요소를 포함하여 모든 폭발 방지 전기 및 비전기 장비 및 기계에 적용됩니다. 기술 규정의 적합성 평가는 EAC</span></p--------->
					</div>
					<div class="txt02">
					<ul>
                        <li>신청서 - (자료실에서 신청서 양식을 다운 받으실 수 있습니다.)</li>
                        <li>HS Code</li>
                        <li>제품설명서</li>
                        <li>제품도면</li>
                        <li>기 보유 인증서</li>
                        <li>기술여권</li>
                        <li>EX 장비에 대한 점화 위험 평가</li>
                        <li>지침</li>
                        <li>테스트 보고서</li>
                        <li>기술 데이터 시트</li>
                        <li>ATEX 인증서</li>			
					</ul>
					</div>
				</div>
				<div class="txt03">
					<!-----span>
						TRCU EAC 인증서 종류<br>
                        TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.
					</span----->
				</div>
			</li>
		</ul>
		</div>
		
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="../russia/image/EAC08_Ex_CoC.jpg" alt="이미지" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">마킹 요구사항 </span></p>
						<p><span class="txt">Ex 마킹
						   </span></p>
					</div>
					<div class="txt02">
					<ul>
                        <li>마크는 모든 제품 포장 또는 동봉 된 문서에 부착해야 합니다. </li>
                        <li>마크가 분명하게 보여야 합니다. </li>
                        <li>마크는 단색으로 표시되어야 합니다. </li>
                        <li>마크는 배경 색상과 대조해야 합니다. </li>
                        <li>마크는 영구적으로 부착되어야 합니다. </li>
                        <li>마크의 크기는 5mm 이상이어야 하며, 비율이 고정되어야 합니다.	</li>		
					</ul>
					</div>
				</div>
				<div class="txt03">
					<!-----span>
						TRCU EAC 인증서 종류<br>
                        TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.
					</span----->
				</div>
			</li>
		</ul>
		</div>
		
		<br><br>
          style="width:25%;display:block;margin:auto;"
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li><p><em><strong>01</strong></em><span>EAC 및 GOST 인증 서비스</span></p></li>
		  		<li><p><em><strong>04</strong></em><span> Eurasia Representative 서비스</span></p></li>
		  		<li><p><em><strong>02</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span></p></li>
		  		<li><p><em><strong>05</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span></p></li>
		  		<li><p><em><strong>03</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발행 서비스</span></p></li>
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