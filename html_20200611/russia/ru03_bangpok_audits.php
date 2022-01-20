<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "러시아"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "방폭인증"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //공통 상단을 연결합니다.
?>

    <!-----페이지 상단 글로벌 네비게이션-------->
	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><a href="ru01_trcueac.php"><?php echo $tmenu_?></a></li><!----인증서비스(러시아) 페이지 연결-------->
			<?php if($tmenu2_){?><li><a href="ru01_trcueac.php"><?php echo $tmenu2_?></a></li><?php }?><!----러시아 페이지 연결-------->
			<li><a href="ru03_bangpok_audits.php"><?php echo $g5['title']?></a></li>
			<!----?php if($tmenu3_){?---><!----li><!---?php echo $tmenu3_?---><!---/li---><!---?php }?--->
			<!----li><a href="ru01_trcueac.php"><//?php echo $g5['title']?></a></li------>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			고객님의 방문을 환영합니다.
		</p>
	</div>




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
		구매하신 러스테스트 퍼스픽에 사용하신다면 적용하지 않아도 됩니다.
		러스테스트 퍼스픽가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
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

		
	.business_type5 h1{font-size:3em; font-weight:700; color:#111; text-align:center;  margin:0 auto; margin-bottom:0px; }
	.business_type5 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
	.business_type5 h2:after{display:block; position:relative; bottom:0; left:50%; margin-left:-2px; content:""; width:2px; height:30px; background-color:#195883; margin-top:20px;}
	.business_type5 h3{font-size:1.1em; color:#666; text-align:center; margin-bottom:50px;}
	.business_type5 h3 br.sn{display:none;}
	.business_type5 ul{width:100%;}
	.business_type5 ul > li{width:100%; border-bottom:1px solid #d1d1d1; overflow:hidden;}
	.business_type5 ul > li:first-child{border-top:1px solid #d1d1d1;}
	.business_type5 ul > li:nth-child(odd){background-color:#f4f4f4;}
	.business_type5 ul li dl{display:table;}
	.business_type5 ul li dl dt, .business_type5 ul li dl dd{display:table-cell; vertical-align:middle;}
	.business_type5 ul li dl dt{width:40%; padding-left:5%;}
	.business_type5 ul li dl dt img{max-width:100%; margin:0 auto;}	
	.business_type5 ul li dl dd{display:block;width:90%; padding:50px 0; padding-top:30px; padding-left:5%;}
	.business_type5 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type5 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type5 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}

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
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
    
    
</style>


<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">방폭인증</span>&nbsp;러시아 (RUSSIA)</h1>
		<h2 class="sub_txt">TR CU 012/2011 폭발 위험 환경에서의 장비 안전</h2>
	</div>
	
	<div>
	<a href="#" style="width:30%;display:block;margin:auto;"><img src="./image/EAC01_Ex_mark.jpg" alt="EAC마크"><p style="width:30%;display:block;margin-left:auto;margin-right:auto;">TRCU EAC Ex</p></a><br><br>
	</div>
	
	
	<div class="business_type5" class="area">
		<h1>TRCU EAC Ex 방폭인증 개요</h1>
		<h2>RUS-TEST PACIFIC 러스테스트 퍼시픽</h2>		
		<h3 style="text-align:left;">
			러시아, 벨라루스, 카자흐스탄 3개 국에서 관세동맹위원회  <br class="sn">제825호령으로 발효된 폭발위험환경의 장비 안전에 관한 기술규정(TR CU 012/2011)입니다.
			EAC Ex 인증은 지침 2014/34/EU 또는  <br class="sn">지침 94/9/EC에 따른 유럽 ATEX 인증 시스템과
			많은 점에서 유사하지만 상당한 차이가 있습니다.<br class="sn">
			<!------깊은 감사의 말씀 드리며, <br class="sn">앞으로도 객님의 말씀에 귀 기울이며<br>
			웹기술을 선도하는 러스테스트 퍼스픽가 되도록 <br class="sn">최선을 다하겠습니다.
			----->
		</h3>
		<ul>
		
			<li>
				<dl>
					<dt>
						<img src="./image/EAC03_Ex_CoC.jpg">
					</dt>
					<dd>
						<strong>TRCU EAC Ex 대상 품목</strong>
						TR CU 012/2011은 폭발 가능성이 있는 환경에서 사용하기 위한 EX 보호 구성요소를 포함하여 모든 폭발 방지 전기 및 비전기 장비 및 기계에 적용됩니다. 기술 규정의 적합성 평가는 EAC Ex 인증의 형태로 제공됩니다. <br>
						<br>
						TRCU EAC Ex 제외품목
						<p>의료 기술</p>
						<p>폭발물이나 불안정한 화학적 연결로 인해 폭발할 수 있는 장치</p>
						<p>가정 용품</p>
						<p>개인 보호 장비</p>
						<p>선박과 바지선, 이동식 연안 플랫폼 및 석유 굴착기</p>
						<p>공기, 육지, 철도 또는 해상 선박</p>
						<p>핵무기와 핵 연구 시설</p>
                        
					</dd>
				</dl>			
			</li>
			<br><br>
			<li>
				<dl>
					<dt>
						<img src="./image/EAC02_Ex_CoC.png">
					</dt>
					<dd>
						<strong>TRCU EAC Ex 방폭인증 유형</strong>
						이 규정은 CoC(Certification of Conformity)로 인증이 가능하며, DoC로 대체될 수 없습니다.<br>
                        인증대상 방폭기계 2가지 그룹으로 분류됩니다.<br>
						
						<p>I 그룹: 가스먼지 가스로 인해 유해한 광산 및 토지구조물에 사용되는 장비</p>
						<p>II 그룹: 내부 및 외부 설비를 위한 폭발 방지 전기 장비. 지하 생성 광산과 그 지하 구조, 광산 가스 및/또는 먼지 연료 외에 폭발성이 높은 지역을 목표로 한다.</p>					
					</dd>
				</dl>
			</li>
			<br><br>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC04_Ex_CoC.jpg">
					</dt>
					<dd>
						<strong>TRCU EAC Ex 방폭인증 유효기간</strong>		
						<p>방폭인증은 최대 3년까지 유효합니다.</p>			
					</dd>
				</dl>
			</li>
			
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC05_Ex_CoC.jpg">
					</dt>
					<dd>
						<strong>TRCU EAC Ex 방폭인증 스킴</strong>
                            <p>Serial Production (연속생산) <br>
                                &nbsp; 1c – Ex 인증서 : 샘플 공인시험소에서 시험실시 및 공장심사 필수</p>

                            <p>Single Supply (일회성)<br>
                                &nbsp; 3c – Ex 인증서 : 일괄적으로 발송되는 제품 샘플 공인시험소에서 시험실시 필수<br>
                                &nbsp; 4c – Ex 인증서 : 일괄적으로 발송돠는 1가지의 제품의 샘플 공인시험소에서 시험실시 필수</p>	
					</dd>
				</dl>	
			</li>
			

			
			<br><br>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC06_Ex_CoC.png">
					</dt>
					<dd>
						<strong>TRCU EAC Ex 방폭인증 절차</strong><br><br>
                        <span>1. 인증기관에 신청서 및 제품 관련 서류 제출</span><br><br>
                        <span>2. 서류 검토</span><br><br>
                        <span>3. 견적 발행 및 계약</span><br><br>
                        <span>4. 계약체결</span><br><br>
                        <span>5. 신청서 접수 (Representative sign 필)</span><br><br>
                        <span>6. 제품 시료 접수 (-> 샘플 발송 후 시험 및 시험 성적서 발행)</span><br><br>
                        <span>7. 공장심사</span><br><br>
                        <span>8. 인증서 초안 발행 및 고객 확인</span><br><br>
                        <span>9. 러시아 인정(accreditation) 정부 웹사이트 등록</span><br><br>
                        <span>10. 인증서 발행</span>
					</dd>
				</dl>				
			</li>
			
			
			<br><br>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC07_Ex_CoC.jpg">
					</dt>
					<dd>
						<strong>TRCU EAC Ex 방폭인증 제출 서류</strong>
                        <p>신청서 - (자료실에서 신청서 양식을 다운 받으실 수 있습니다.)</p>
                        <p>HS Code</p>
                        <p>제품설명서</p>
                        <p>제품도면</p>
                        <p>기 보유 인증서</p>
                        <p>기술여권</p>
                        <p>EX 장비에 대한 점화 위험 평가</p>
                        <p>지침</p>
                        <p>테스트 보고서</p>
                        <p>기술 데이터 시트</p>
                        <p>ATEX 인증서</p>                        
                        
                        
                        
                        
					</dd>
				</dl>				
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC08_Ex_CoC.jpg">
					</dt>
					<dd>
						<strong>마킹 요구사항</strong>
						Ex &nbsp;마킹<br>
						<p>마크는 모든 제품 포장 또는 동봉 된 문서에 부착해야 합니다. </p>
						<p>마크가 분명하게 보여야 합니다. </p>
						<p>마크는 단색으로 표시되어야 합니다. </p>
						<p>마크는 배경 색상과 대조해야 합니다. </p>
						<p>마크는 영구적으로 부착되어야 합니다. </p>
						<p>마크의 크기는 5mm 이상이어야 하며, 비율이 고정되어야 합니다.</p>
					</dd>
				</dl>				
			</li>	
			
			<!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li>&nbsp;<p style="font-size:1.3em;">&nbsp; &nbsp;<em><strong>01.</strong></em><span> EAC 및 GOST 인증 서비스</span><br><br></p></li>
		  		<li>&nbsp;<p style="font-size:1.3em;">&nbsp; &nbsp;<em><strong>02.</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span><br><br></p></li>
		  		<li>&nbsp;<p style="font-size:1.3em;">&nbsp; &nbsp;<em><strong>03.</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발행 서비스</span><br><br></p></li>
		  		<li>&nbsp;<p style="font-size:1.3em;">&nbsp; &nbsp;<em><strong>04.</strong></em><span> Eurasia Representative 서비스</span><br><br></p></li>
		  		<li>&nbsp;<p style="font-size:1.3em;">&nbsp; &nbsp;<em><strong>05.</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span><br><br></p></li>
		  	</ul>
		  </div> <!-------고객 혜택 종료 -------------->		
						
			
		</ul>
	</div>	
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>