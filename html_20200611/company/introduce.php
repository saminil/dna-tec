<?php 	
	include "../../../common.php";
	$tmenu_ = "회사안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "회사소개"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //공통 상단을 연결합니다.
?>

<!-----페이지 상단 글로벌 네비게이션-------->
	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><a href="introduce.php"><?php echo $tmenu_?></a></li>
			<?php if($tmenu2_){?><li><?php echo $tmenu2_?></li><?php }?>
			<li><a href="introduce.php"><?php echo $g5['title']?></a></li>
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
		구매하신 RUS-TEST PACIFIC에 사용하신다면 적용하지 않아도 됩니다.
		RUS-TEST PACIFIC가 아닌 다른 곳에 적용하신다면 26번 라인은 공통 상단파일 </head> 위에 적용합니다.	
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

	.company_type1 {width:100%; margin:0 auto; }
	.company_type1:after{content:""; clear:both; display:block;}
	.company_type1 .ceo_img {position: relative; float:right; width:500px; text-align:right; padding-left:30px;}
	.company_type1 .ceo_img img {width:100%; height:auto; }
	.company_type1 .ceo_area{ float:left; width:50%;} 
	.company_type1 .ceo_area .ceo_tit { position:relative; float:left; width:100%; font-size:2em; line-height:1.4em; letter-spacing:-0.05em;  }
	.company_type1 .ceo_area .ceo_txt { float:right; width:100%; padding-top:50px; }
	.company_type1 .ceo_area .ceo_txt p {margin-top:20px; line-height:1.5em; color: #000; word-break: keep-all; }
	.company_type1 .ceo_area .ceo_txt span.ceo_sign{ display:block; font-size:1.1em; color:#000; margin-top:50px; font-family: 'Satisfy', 'Noto Sans KR', sans-serif;}
    
    
    
    /*------RUS-TEST PACIFIC이 유라시아 지역의 인증에 대하여 제공하는 서비스 시작------*/
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
	.business_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 0px;}


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
    /*------RUS-TEST PACIFIC이 유라시아 지역의 인증에 대하여 제공하는 서비스 종료------*/
    
    

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
	.tbla{width:100%; border-collapse: collapse; margin:0 auto; border:1px solid #ddd; border-bottom:0px;}
	.tbla tr th{width:20%; height:45px; padding:15px 0; text-align:center; border-bottom:1px solid #666; font-size:1em;}
	.tbla tr td{width:80%; border-bottom:1px solid #ddd; padding-left:15px; height:45px; text-align:left;}

		
	@media screen and (max-width:992px){
		
		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.company_type1 .ceo_img {width:100%; text-align:center; margin-bottom:30px; padding-left:0; }
		.company_type1 .ceo_img img{width:100%;}
		.company_type1 .ceo_area{ float:none; width:95%; margin:0 auto; } 
		.company_type1 .ceo_area .ceo_tit { font-size:1.8em; text-align:center;}
		.company_type1 .ceo_area .ceo_txt{padding-top:10px;}

		.tbla tr th{width:30%; font-size:0.9em;}
		.tbla tr td{width:70%; font-size:0.9em;}
        
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
    
    
    .logo_location img { display: block; margin: 0px auto; width:400px; }/* 로고, 회사안내 타이틀 하단 */
</style>

<br>
<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">회사소개</span>&nbsp; RUS-TEST PACIFIC</h1>
		<h2 class="sub_txt">제조업체의 유라시아 진출, 새로운 미래를 열어가는 러스테스트 퍼시픽입니다. </h2>
		<br><br>
		<p class="logo_location"><img src="http://rus-test.org/img/main_imgs/logo_rustest_location.png"></p>
        <br>
		
	</div>

	<div class="company_type1">
		<div class="ceo_img"><img src="../image/img_900.jpg"></div>
		<div class="ceo_area">
			<div class="ceo_tit">RUS-TEST PACIFIC은 국내 기업의 경쟁력 향상을 위한 <span class="fc_pointer">유라시아 제품인증 서비스를 제공하는</span><br><span class="fc_pointer">국제인증기관입니다.</span><!----가 만들어 가겠습니다.---><!-- 고객을 먼저 생각하는기업<br>고객이 먼저 자랑하는기업 --></div>
			<div class="ceo_txt">		
				<p>
				RUS-TEST PACIFIC은 다음을 준수합니다.<br><br>
                </p>
				
				<ul>
				    <li>• 법적 요구사항 준수</li>
				    <li>• 팀워크 및 조직원간의 연대</li>
				    <li>• 성실성과 공정성</li>
				    <li>• 사회적 및 환경적 책임</li>
				    <li>• 인증 및 등록 서비스 제공 업체로서의 지식과 학습을 통한 지속적인 발전과 개선활동</li>
				</ul>
		         <br><br>
			</div>
		</div>	
	</div>
	
	
	<div class="business_type2"><!-----class="company 시작-------->
				<span class="ceo_sign" style="font-size:1.5em;"><strong><a href="/theme/rustest/html/russia/ru01_trcueac.php" style="color:#1F88E5;">RUS-TEST PACIFIC이 유라시아 지역의 인증에 대하여 제공하는 서비스는 아래와 같습니다.</a></strong></span>	<br>
			      <h3 class="con_arrow"><!-----RUS-TEST PACIFIC이 유라시아 지역의 인증에 대하여 제공하는 서비스는 아래와 같습니다.-----></h3>
		          <div class="con_box">
			          <ul>
				          <li><p><em><strong>01</strong></em><span>&nbsp; EAC 및 GOST 인증 서비스</span></p></li>
				          <li><p><em><strong>02</strong></em><span>&nbsp; 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span></p></li>
				          <li><p><em><strong>03</strong></em><span>&nbsp; 인증에 필요한 시험 및 시험 성적서 발행 서비스</span></p></li>
				          <li><p><em><strong>04</strong></em><span>&nbsp; Eurasia Representative 서비스</span></p></li>
				          <li><p><em><strong>05</strong></em><span>&nbsp; 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역 지원</span></p></li>
			          </ul>
		          </div>
		         </div><!-----class="company 종료-------->  
	
	<br>
	<br>

    <h1 class="s_tit">&nbsp; RUS-TEST PACIFIC은 여러<span style="color:#1F88E5"> 강점</span>을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.</h1><br>
	<table class="tbla">
		<tbody>
			<tr>
				<th>경&nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; 험</th>
				<td>다양한 분야의 인증 사업을 통해 확보한 지식과 기술력을 바탕으로 한 경쟁력 있는 서비스 제공</td>
			</tr>
			<tr>
				<th>비&nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;용</th>
				<td>경쟁력 있는 인증 비용</td>
			</tr>
			<tr>
				<th>신속 &nbsp;| &nbsp; 정확</th>
				<td>신속한 인증 서비스 진행을 통한 최소한의 기간 소요</td>
			</tr>
			<tr>
				<th>One-Stop Service</th>
				<td>자회사를 통한 유라시아 이외 분야의 각종 시스템 및 제품 인증에 대하여 One Stop Service 제공</td>
			</tr>
			
		</tbody>
	</table>
	
    <br><br>
	
	<hr style="border:1px solid #1F88E5; height: 1px !important; display: block !important; width: 100% !important;"/>

    <h1 class="s_tit">&nbsp; <span style="color:#1F88E5"  id="contactus1">회사 정보 | Contact Us</span><!----span style="color:#1F88E5"> 강점</span----><!------을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.-----></h1><br>
	<table class="tbla">
		<tbody>
			<tr>
				<th>주&nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; 소</th>
				<td>(08504) 서울특별시 금천구 서부샛길 638, 대륭테크노타운7차 502</td>
			</tr>
			<tr>
				<th>전&nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;화</th>
				<td>02-6749-1160~1</td>
			</tr>
			<tr>
				<th>펙&nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;스</th>
				<td>02-6749-0711</td>
			</tr>
			<tr>
				<th>메&nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;일</th>
				<td>info@rus-test.org</td>
			</tr>
			
		</tbody>
	</table>
	
	
	
	
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<!---?php
	include "../include/tail.php"; 
?---->
<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>