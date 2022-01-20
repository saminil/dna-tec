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
			<li><a href="ru01_trcueac.php"><?php echo $tmenu_?></a></li><!----인증서비스(러시아) 페이지 연결-------->
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
	.business_type2 .business_info ul li.left_box { float:left; width:40%;/* height:500px;*/ overflow:hidden; }
	.business_type2 .business_info ul li.left_box img{ width:100%; height:100%; }
	.business_type2 .business_info ul li.right_box{position:relative; float:right; width:60%; /*height:500px;*/}
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
    
    
    
    /*  TRCU 관계 법령 시작   */
    
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
    
        /*  TRCU 관계 법령 종료   */
    
    
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */    
    
    
    
    
    
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<br><br>
<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">TRCU EAC 인증 카자흐스탄</span>&nbsp;(KAZAHSTKazahstan)</h1>
		<h2 class="sub_txt">TRCU는 Technical Regulation of Customs Union | 관세동맹(Customs Union)의 기술규정</h2>
	</div>





	<div class="business_type2">
	
	
		<div class="business_info">
		
		
		
		<ul>
			<!-----li class="left_box"><img src="./image/company_img1.jpg" alt="카자흐스탄 TRCU EAC"></li----->
			
			
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">TRCU EAC 개요</span></p>
						<p><span class="txt">TRCU는 Technical Regulation of Customs Union의 약어로 러시아를 중심으로 한 관세동맹(Customs Union)의 기술규정을 의미합니다.</span></p>
                        <p>TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시안 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시안 경제연합 “EEU, Eurasian Economic Union”에서 발효 한 통합 인증제도입니다.</p>
                        <p>현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어있으며, TRCU인증은 유라시안 경제 위원회 결정을 따라 규정된 인증절차를 따릅니다. </p>
                        <p>인증서 상에는 EAC 마크가 부착되며 이는 Eurasian Conformity를 뜻합니다.</p>
					</div>
					
					<div class="txt02">
					<!----ul>
						<li>심플하지만 다 갖춘 인덱스</li>
						<li>PC+모바일 반응형 홈페이지</li>
						<li>카자흐스탄 진출을 위한 국내 제조업체 고객님을 위한 필수 아이템</li>
						<li>제품전용 게시판</li>
						<li> CSS기반 반응형</li>
					</ul----->
					</div>
				</div>
				<!----div class="txt03">
					<span>
						TRCU EAC 인증서 종류<br>
                        TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.
					</span>
				</div----->
			</li>
		</ul>
		</div> <!------------/ business_info 종료   /-------------->
		
		
		<a href="#" style="width:25%;display:block;margin:auto;"><img src="../russia/image/eac_mark01.png" alt="EAC 마크"><p style="width:30%;display:block;margin-left:auto;margin-right:auto;">EAC 공식 마크</p></a><br><br><br>
		
		
		
		
		
		
		
		
		
		<div class="business_info">
		
		<ul>
			<!-----li class="left_box"><img src="./image/company_img1.jpg" alt="카자흐스탄 TRCU EAC"></li----->
			
			
			<li>
             <div class="txt_area">
				
					<div class="txt01">
						<p><span class="tit">TRCU 관계 법령</span></p>
						<!----p><span class="txt">TRCU는 Technical Regulation of Customs Union의 약어로 러시아를 중심으로 한 관세동맹(Customs Union)의 기술규정을 의미합니다.</span></p----->
                        <!----p>TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시안 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시안 경제연합 “EEU, Eurasian Economic Union”에서 발효 한 통합 인증제도입니다.</p----->
                        <!----p>현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어있으며, TRCU인증은 유라시안 경제 위원회 결정을 따라 규정된 인증절차를 따릅니다. </p>
                        <!----p>인증서 상에는 EAC 마크가 부착되며 이는 Eurasian Conformity를 뜻합니다.</p----->
					</div>
						
                <div class="txt02">				
                <ul>       
                 <li>
				  <dl>			
                   <!--------------/ TRCU 관계법령 시작 /----------------------->
                    <dd>
                    <strong>TRCU 세부 목록은 다음과 같습니다.<br><br></strong>				    
                    <table border="1" cellspacing="0" cellpadding="0">
                      <col width="165" align="center">
                      <col width="754" align="left">
                      <col width="216" align="center">

                      <tr>
                          <td width="145" rowspan="2"  style="text-align:center;">기술규정 명칭</td>
                          <td width="625"  style="text-align:center;">기술규정 구체적 내용(국문 명)</td>
                          <td width="130" rowspan="2"  style="text-align:center;">품목</td>
                      </tr>
                      <tr>
                          <td style="text-align:center;">(영문 명)</td>
                      </tr>
                      
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;001/2011</td>
                        <td width="625">철도차량 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">철도차량</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    railway rolling stock&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;002/2011</td>
                        <td width="625">고속열차    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">고속열차</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    high-speed railway transport&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;003/2011</td>
                        <td width="625">철도교통    인프라 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">철도교통 인프라</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of railway transport infrastructure&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;004/2011</td>
                        <td width="625">저전압    장비 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">저전압 장비</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    Low-voltage equipment&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;005/2011</td>
                        <td width="625">포장재    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">포장재</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    packages&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;006/2011</td>
                        <td width="625">폭죽    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">폭죽</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    pyrotechnic articles&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;007/2011</td>
                        <td width="625">유아    및 청소년 용품 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">유아 및 청소년 용품</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of products intended for children and adolescents&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;008/2011</td>
                        <td width="625">장난감    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">장난감</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    toys&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;009/2011</td>
                        <td width="625">향수    및 화장품 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">향수 및 화장품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    perfumes and cosmetics&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;010/2011</td>
                        <td width="625">기계    및 설치장비 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">기계 및 장비류</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    machinery and equipment&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;011/2011</td>
                        <td width="625">승강기    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">승강기</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    elevators&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;012/2011</td>
                        <td width="625">폭발가능환경    작업을 위한 장비의 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">폭발가능대비 보호장비</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of equipment in explosion hazardous environments&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;013/2011</td>
                        <td width="625">연료(휘발유,&nbsp;경유,&nbsp;제트연료)에    대한 기술규정</td>
                        <td rowspan="2" width="130">연료(휘발유,&nbsp;경유,&nbsp;제트연료)</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements to motor and aviation petrol, diesel and marine, fuel, reactive    engines fuel and black oil&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;014/2011</td>
                        <td width="625">자동차    도로 안전 기술규정</td>
                        <td rowspan="2" width="130">자동차 도로</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    roads&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;015/2011</td>
                        <td width="625">곡물    안전성 관련 기술규정</td>
                        <td rowspan="2" width="130">곡물</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of grain&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;016/2011</td>
                        <td width="625">가스연료    장치 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">가스연료 장치</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of apparatuses working on gaseous fuel&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;017/2011</td>
                        <td width="625">경공업    제품 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">경공업 제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety    of light industry products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;018/2011</td>
                        <td width="625">차륜    차량 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">차륜 차량</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    wheeled vehicles&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;019/2011</td>
                        <td width="625">개인보호장비    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">개인보호용품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    personal protection equipment&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;020/2011</td>
                        <td width="625">전자제품    전자기 호환성 관련 기술 규정</td>
                        <td rowspan="2" width="130">전자제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    Electromagnetic compatibility of technical devices&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;021/2011</td>
                        <td width="625">식품    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">식품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    food products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;022/2011</td>
                        <td width="625">식품    라벨링 관련 기술규정</td>
                        <td rowspan="2" width="130">식품 라벨링</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of food products in terms of their marking&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;023/2011</td>
                        <td width="625">야채    및 과일음료 기술 규정</td>
                        <td rowspan="2" width="130">야채 및 과일음료</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    juice products made of fruit and vegetables&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;024/2011</td>
                        <td width="625">유지제품    기술규정</td>
                        <td rowspan="2" width="130">유지제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    oil &amp; fat products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;025/2012</td>
                        <td width="625">가구제품    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">가구제품</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&ldquo;On    safety of furniture&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;026/2012</td>
                        <td width="625">소형선박    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">소형선박</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    small-size</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;027/2012</td>
                        <td width="625">건강    기능성 식품 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">건강 기능성 식품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    certain types of specialized food products, including food for dietary    treatment and protective diet&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;028/2012</td>
                        <td width="625">폭발성    물질 및 제품 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">폭발성 물질 및 제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    explosives and products on their basis&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;029/2012</td>
                        <td width="625">식품    첨가물 안전 규격 관련 기술규정</td>
                        <td rowspan="2" width="130">식품 첨가물</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements for food additives, flavoring agents and processing supplements&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;030/2012</td>
                        <td width="625">윤활류    규격 관련 기술규정</td>
                        <td rowspan="2" width="130">윤활류</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements for lubricants, oils and special liquids&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;031/2012</td>
                        <td width="625">농·임업용    트랙터 및 트레일러 안전관련 기술규정</td>
                        <td rowspan="2" width="130">농·임업용 트랙터 및 트레일러</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    agricultural and forestry tractors and trailers thereto&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;032/2013</td>
                        <td width="625">고압장비    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">고압장비</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    pressure equipment&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;033/2013</td>
                        <td width="625">우유    및 유제품 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">우유 및 유제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On the safety    of milk and dairy products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;034/2013</td>
                        <td width="625">육류    및 육류제품 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">육류 및 육류제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    meat and meat products&ldquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR    CU&nbsp;035/2014</td>
                        <td width="625">담배제품    관련 기술규정</td>
                        <td rowspan="2" width="130">담배제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    tobacco products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TP EAEU    036/2016</td>
                        <td width="625">가스연료의    관련 조건</td>
                        <td rowspan="2" width="130">가스연료</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements for liquified petroleum gases foe use as fuel&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TP EAEU    037/2016</td>
                        <td width="625">전기    및 전자 장비에서 특정 유해 물질의 사용 제한에 관련 기술규정</td>
                        <td rowspan="2" width="130">전기 및 전자 장비</td>
                      </tr>
                      <tr>
                        <td>&ldquo;Restricting    usage of hazardous substances in the electrical goods and radio electronics&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TP EAEU    038/2016</td>
                        <td width="625">놀이기구의    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">놀이기구</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    amusement rides&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TP EAEU    039/2016</td>
                        <td width="625">광물비료    관련 기술규정</td>
                        <td rowspan="2" width="130">광물비료</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements for mineral fertilizers&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТP    EAEC&nbsp;040/2016</td>
                        <td width="625">어류    및 어류제품 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">어류 및 어류제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    fish and fish products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TP EAEU    041/2017<br>
                          (2021년 6월 2일 시행될 예정)</td>
                        <td width="625">화학물질    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">화학물질</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    chemical products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TP EAEU    042/2017</td>
                        <td width="625">어린이    놀이터 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">어린이 놀이터</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    chemical products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TP EAEU    043/2017</td>
                        <td width="625">화재지연제    및 소화시스템 관련 기술규정</td>
                        <td rowspan="2" width="130">화재지연제 및 소화시스템</td>
                      </tr>
                      <tr>
                        <td>&rdquo; On safety of    equipment for children&rsquo;s playgrounds&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TP EAEU    044/2017</td>
                        <td width="625">생수    및 천연 미네랄 워터의 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">생수 및 천연 미네랄 워터</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    packaged drinking water, including natural mineral water&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TP EAEU    045/2017</td>
                        <td width="625">미네랄    오일 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">미네랄    오일</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    oil prepared for transportation and(or) use&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TP EAEU 046/2018<br>
                          (2022년 1월 1일 시행될 예정)</td>
                        <td width="625">천연가스    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">천연가스</td>
                      </tr>
                      <tr>
                        <td>&quot;On    safety of natural flammable gas, prepared for transportation or usage&quot;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TP EAEU 047/2018</td>
                        <td width="625">알코올    음료의 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">알코올 음료</td>
                      </tr>
                      <tr>
                        <td>&quot;On    safety of alcohol products&quot;</td>
                      </tr>
                    </table> 
					</dd>
	<!--------------/ TRCU 관계법령 종료 /----------------------->
				</dl>
			   </li>
			 </ul>
			</div> <!----------/ txt02 종료/---------->
         </div>   <!-------/txt_area 종료/----------------->
			
				<!----div class="txt03">
					<span>
						TRCU EAC 인증서 종류<br>
                        TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.
					</span>
				</div----->
		</li>
       </ul>
      </div> <!---------------- /business_info, TRCU 관계 법령 내용 종료 ------->
		
		
		<div class="business_info">
		<ul>
			<li class="left_box">
			    <dt>
				  <div id="eac_CoC" style="width:50%;">
						<img src="http://www.rus-test.org/theme/rustest/html/kazahstan/image/trcu_eac_Doc2.jpg"><br><br>
						 <p style="text-align:center;margin-bottom:30px;margin-top:-20px;">TRCU DoC </p>
				  </div>			
				</dt>
				
				
				
				<dt>
				  <div id="eac_CoC" style="width:50%;">
						<img src="../russia/image/eac_mark03_CoC.png"><br><br>
						 <p style="text-align:center;margin-bottom:30px;margin-top:-20px;">TRCU CoC </p>
				  </div>			
				</dt>
			</li>
			
			<li class="right_box">
				<div class="txt_area">
				
					<div class="txt01">
						<p><span class="tit">TRCU EAC 인증서 유형</span></p>
						<p><span class="txt">TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두 가지로 분류됩니다.</span></p>
                        <!----p>TRCU(Technical Regulation of Customs Union)유라시안 관세동맹국가 간 발효 된 통합 인증제도의 도입 후 카자흐스탄 내 GOST K 인증 품목은 크게 줄어들었습니다. 하지만 아직 동맹국 간 협의가 이루어지지 않은 강제 인증 품목에 한해서는 수입통관 시 GOST K 인증이 요구됩니다.</p--->
					</div>
					
					<div class="txt02">
					   <ul>
				         <span>
                           <p><span style="color:red;">&nbsp; &nbsp;TRCU 인증서</span><br>
                                &nbsp; &nbsp; 세부사항에 따라 적합성인증(CoC, Certification of Conformity)과 적합성선언(DoC, Declaration of Conformity) 두가지로 나눠집니다.</p><br><br>
                           <p><span style="color:red;">&nbsp; &nbsp;TRCU CoC</span><br>
                                &nbsp; &nbsp; 압력 용기류, 수공구류, 크레인, 승강기, 일부 기계류, 시험장비, 전기전자제품 등의 제품군이 해당되며 샘플시험 또는 공장심사가 요구됩니다.</p><br><br>
                               <p><span style="color:red;">&nbsp; &nbsp;TRCU DoC</span><br>
                                &nbsp; &nbsp; 위험성이 비교적 적은 일반 제품에 해당되며 일부 제품은 서류심사로 인증서 발급이 가능합니다.</p><br><br>
					     </span>
					   </ul>
					</div>
					
					<div class="txt01">
						<p><span class="txt">CoC의 경우 지정시험소를 통한 제품 시험을 원칙으로 하고 있으나 다수의 인증기관에서 추가 시험 없이 CB Safety 성적서 등을 인정하여 인증서를 발행하고 있습니다.</span></p>
					</div>
				</div>
				<!---
				<div class="txt03">
					<span>
						Ex) 전기.전자제품, 건축제품, 의료기기, 가전제품, 공구, 농산물, 식품.음료.담배, 화학물질, 완구 및 아동복, 가구 및 식기류, etc.
					</span>
				</div>
				----->
			</li>
		</ul>
		</div>
		
		
		
		<div class="business_info">
		<ul>
			<!----li class="left_box"><img src="./image/company_img3.jpg" alt="카자흐스탄 TRCU EAC"></li---->
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">TRCU EAC 인증서 유효기간</span></p>
						<p><span class="txt">1. ‘단일 선적에 대한 인증’ (One-Shipment: Single Delivery Certification): 주로 플랜트 등 단발성(1회성)으로 수출하는 물품인 경우와 제 3자나 다른 일반적인 소비자에게 재판매가 되지 않는 경우에 해당하며 수입자와의 계약서에 표기된 계약이행 기간까지 유효합니다.</span></p>
                        <p><span class="txt"> 2. '연속 생산' (Serial Production Certification): 계속적인 수출이 예상되는 경우에 유리하며 한 번의 인증을 통해 최대 5년까지 유효한 인증서를 받을 수 있습니다.</span></p>
					</div>
					<div class="txt02">
					<!----ul>
						<li>심플하지만 다 갖춘 인덱스</li>
						<li>PC+모바일 반응형 홈페이지</li>
						<li>카자흐스탄 진출을 위한 국내 제조업체 고객님을 위한 필수 아이템</li>
						<li>제품전용 게시판</li>
						<li> CSS기반 반응형</li>
					</ul------>
					</div>
				</div>
				<!-----div class="txt03">
					<span>
						TRCU EAC 인증서 종류<br>
                        TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.
					</span>
				</div----->
			</li>
		</ul>
		</div>
		
		
        <div class="business_info">
		      <ul>
			      <li class="left_box"><img src="./image/TRCU-EAC-kazahstan01.png" alt="카자흐스탄 TRCU EAC"></li>
			      <li class="right_box">
			      	<div class="txt_area">
			      		<div class="txt01">
			      			<p><span class="tit">TRCU EAC 인증 절차</span></p>
			      			<p><span class="txt">GOST K 인증서는 유효기간에 따라 One-shipment와 Serial 인증으로 나눠집니다.</span></p>
                              <!----p>TRCU(Technical Regulation of Customs Union)유라시안 관세동맹국가 간 발효 된 통합 인증제도의 도입 후 카자흐스탄 내 GOST K 인증 품목은 크게 줄어들었습니다. 하지만 아직 동맹국 간 협의가 이루어지지 않은 강제 인증 품목에 한해서는 수입통관 시 GOST K 인증이 요구됩니다.</p--->
			      		</div>
			      		<div class="txt02">
			      		<ul style="list-style:none !important">
                              <span>1. 인증기관에 신청서 및 제품 관련 서류 제출</span><br><br>
                              <span>2. 서류 검토</span><br><br>
                              <span>3. 적용되는 인증서 유형 확인</span><br><br>
                              <span>4. 샘플 시험 및 공장심사 여부 확인</span><br><br>
                              <span>5. 견적서 발행 및 계약</span><br><br>
                              <span>6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</span><br><br>
                              <span>7. 공장심사 필요 시, 심사 진행</span><br><br>
                              <span>8. 인증서 초안 발행 및 고객 확인</span><br><br>
                              <span>9. 인증서 발행</span><br><br>	
			      		</ul>
			      		</div>
			      	</div>
			      	<!------
			      	<div class="txt03">
			      		<span>
			      			-해당 인증서는 불특정다수를 상태로 무한정 수량에 대한 인증이므로 지속적인 수출이 예상되거나 다수의 수입업자와의 계약이 예상될 때 적합합니다.<br>
                              -1년간 유효한 인증서는 1년마다 샘플과 서류 검토 절차를 거친 후 새로 발행됩니다.<br>
                              -3년간 유효한 인증서는 샘플과 서류검토 외에 추가적으로 공장심사가 요구되며, 해당 제품을 제조하고 있는 모든 공장이 검사 대상이 되며, 사후심사 시 중대한 결함이 발견될 경우 제품의 인증서가 취소됩니다.<br>
			      		</span>
			      	</div>  ----->
			      </li>
		      </ul>
		</div>	
		
		
		<div class="business_info">
		      <ul>
			      <li class="left_box" style="width:35%;"><img src="../russia/image/EAC18_Ex_sgr.jpg" alt="카자흐스탄 TRCU EAC"></li>
			      <li class="right_box">
			      	<div class="txt_area">
			      		<div class="txt01">
			      			<p><span class="tit">TRCU EAC 제출 서류</span></p>
			      			<p><span class="txt">제조업체가 제출해야할 서류는 다음과 같습니다. (이에 국한되지 않으며 필요에 따라 추가될 수 있습니다.)</span></p>
                              <!----p>TRCU(Technical Regulation of Customs Union)유라시안 관세동맹국가 간 발효 된 통합 인증제도의 도입 후 카자흐스탄 내 GOST K 인증 품목은 크게 줄어들었습니다. 하지만 아직 동맹국 간 협의가 이루어지지 않은 강제 인증 품목에 한해서는 수입통관 시 GOST K 인증이 요구됩니다.</p--->
			      		</div>
			      		<div class="txt02">
			      		  <ul style="list-style:none !important">
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
			      	<!------
			      	<div class="txt03">
			      		<span>
			      			-해당 인증서는 불특정다수를 상태로 무한정 수량에 대한 인증이므로 지속적인 수출이 예상되거나 다수의 수입업자와의 계약이 예상될 때 적합합니다.<br>
                              -1년간 유효한 인증서는 1년마다 샘플과 서류 검토 절차를 거친 후 새로 발행됩니다.<br>
                              -3년간 유효한 인증서는 샘플과 서류검토 외에 추가적으로 공장심사가 요구되며, 해당 제품을 제조하고 있는 모든 공장이 검사 대상이 되며, 사후심사 시 중대한 결함이 발견될 경우 제품의 인증서가 취소됩니다.<br>
			      		</span>
			      	</div>  ----->
			      </li>
		      </ul>
		</div>
		
		
		
		
		
		
		
		<div class="business_info">
		<ul>
			<!----li class="left_box"><img src="./image/company_img3.jpg" alt="카자흐스탄 TRCU EAC"></li---->
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">Rosakkreditasiya 대장(Register)</span></p>
						<p><span class="txt">TRCU인증, GOST R인증은 Rosakkreditasiya 웹사이트에 등록됩니다. 현재는 필수적 인증서만 Rosakkreditasiya 웹사이트에서 확인이 가능하며 자발적 인증서는 현재 시점에 확인이 불가능합니다. 상세한 확인 절차는 자료실에 등록된 파일을 통해 확인하실 수 있습니다.</span></p>
                        <!----p> '연속 생산' (Serial Production Certification): 계속적인 수출이 예상되는 경우에 유리하며 한 번의 인증을 통해 최대 5년까지 유효한 인증서를 받을 수 있습니다.</p------>
					</div>
					<div class="txt02">
					<!----ul>
						<li>심플하지만 다 갖춘 인덱스</li>
						<li>PC+모바일 반응형 홈페이지</li>
						<li>카자흐스탄 진출을 위한 국내 제조업체 고객님을 위한 필수 아이템</li>
						<li>제품전용 게시판</li>
						<li> CSS기반 반응형</li>
					</ul------>
					</div>
				</div>
				<!-----div class="txt03">
					<span>
						TRCU EAC 인증서 종류<br>
                        TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.
					</span>
				</div----->
			</li>
		</ul>
		</div>
		  
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
		  
	   </div> <!-------/ business_type2  종료 /--------->
	   
	   
	   
</div>  <!----------/ content_wrap 종료  /------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->





<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>
<!-----?php
	include "../include/tail.php"; 
?---->