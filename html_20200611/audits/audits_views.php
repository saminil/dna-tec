<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증사례"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "인증사례"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //공통 상단을 연결합니다.
?>

    <!-----페이지 상단 글로벌 네비게이션-------->
	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><a href="../russia/ru01_trcueac.php"><?php echo $tmenu_?></a></li><!----1Depth 인증서비스(러시아) 페이지 연결-------->
			<?php if($tmenu2_){?><li><a href="azs_audits.php"><?php echo $tmenu2_?></a></li><?php }?><!----2Depth 러시아 페이지 연결-------->
			<li><a href="azs_audits.php"><?php echo $g5['title']?></a></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			고객님의 방문을 환영합니다.
		</p>
	</div>


<!----?php
	include "../include/header.php"; 
	/*	
		이 페이지는 jquery 로 작동됩니다.	
	*/
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
		CSS파일 로드(26~28라인)
		구매하신 RUS TEST PACIFIC에 사용하신다면 적용하지 않아도 됩니다.
		RUS TEST PACIFIC가 아닌 다른 곳에 적용하신다면 27번 라인은 공통 상단파일 </head> 위에 적용합니다.	
		jquery를 사용하지 않는 인증 | 심사라면 28번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="http://code.jquery.com/jquery-latest.min.js" language="javascript"></script>



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


	.business_type1 {width:100%; max-width:1200px; margin:0 auto; }
	.business_type1:after{content:""; display:block; clear:both;}
	.business_type1 .con_img {width:100%; }
	.business_type1 .con_img img {width:100%; height:auto; }
	.business_type1 .txt_area {width:100%; padding:0px; padding-bottom:50px; margin-top:0px; word-break: keep-all;}
	.business_type1 .txt_area:after{content:""; display:block; clear:both;}
	.business_type1 .txt_area .txt01 { position:relative; float:left; width:50%;  }
	.business_type1 .txt_area .txt01:after { position:absolute; left:5%; top:0;  content:""; display:inline-block; width:1px; height:100%; background:#222; }/* 인증사례 이미지 좌측, 세로 선 두께 */
	.business_type1 .txt_area .txt01 p { padding:0; margin:0; padding-left:10%; padding-right:20px;}
	.business_type1 .txt_area .txt01 span.tit { display:block; font-size:2.2em; color:#000; font-weight:700; line-height:1.2em; margin-bottom:20px; }
	.business_type1 .txt_area .txt01 span.txt { display:block; font-size:1.15em; color:#333; font-weight:400; }
	.business_type1 .txt_area .txt02 { float:left; width:50%; }
	.business_type1 .txt_area .txt02 ul {margin:0; padding:0;}
	.business_type1 .txt_area .txt02 ul li { position:relative; font-size:1em; color:#555; font-weight:400; line-height:1.4em; list-style:none; padding-left:3%; margin-bottom:10px; }
	.business_type1 .txt_area .txt02 ul li:before {position:absolute; top:8px; left:0; content:""; display:inline-block; width:4px; height:4px; background:#555; margin-right:10px;vertical-align:middle;} /* 페이지 내 우측 텍스트 블릿 모양 */
	.business_type1 .business_info { width:100%; margin-bottom:50px;}
	.business_type1 .business_info:after { content:""; display:block; clear:both;}
	.business_type1 .business_info li {float:left; overflow:hidden; position:relative; width:25%; height:450px; text-align:center; box-sizing:border-box; border-right:1px solid #fff;}
	.business_type1 .business_info li:nth-child(1) {background:url('./image/001_rustest.jpg')no-repeat 40% 0;  background-size:cover;}
	.business_type1 .business_info li:nth-child(2) {background:url('./image/002_rustest.jpg')no-repeat 40% 0;  background-size:cover;}
	.business_type1 .business_info li:nth-child(3) {background:url('./image/003_rustest.jpg')no-repeat 40% 0;  background-size:cover;}
	.business_type1 .business_info li:nth-child(4) {background:url('./image/004_rustest.jpg')no-repeat 40% 0;  background-size:cover; border-right:0px;}
	.business_type1 .business_info li .summary {position:absolute; width:100%; height:100%; cursor:pointer; z-index:10; transition:all .5s ease; -moz-transition:all .5s ease; -ms-transition:all .5s ease; -webkit-transition:all .5s ease; -o-transition:all .5s ease;}
	.business_type1 .business_info li .summary:after{ content:""; display:block; clear:both;}
	.business_type1 .business_info li .summary p.title {position:absolute; top:45%; width:100%;  color:#fff; font-size:1.5em; text-shadow: 0px 0px 2px #000; }
	.business_type1 .business_info li .summary p.title:after { display: block; content: ""; width:7%; height:1px; margin:10px auto; background: #eee; }
	.business_type1 .business_info li .summary span.txt { display:none;}
	.business_type1 .business_info li .summary a { display:none; }
	.business_type1 .business_info li:hover .summary, .business_type1 .business_info li.on .summary { position:absolute; width:100%; height:100%; background:rgba(0,0,0,.7); }
	.business_type1 .business_info li:hover .summary p.title, .business_type1 .business_info li.on .summary p.title { display:block; top:10%; left:5%; margin-left:0; text-align:left; text-shadow:none; }
	.business_type1 .business_info li:hover .summary p.title:after, .business_type1 .business_info li.on .summary p.title:after { display: block; content: ""; width:90%; height:1px; margin:10px 0; background: #eee; text-align:left; }
	.business_type1 .business_info li:hover .summary span.txt, .business_type1 .business_info li.on .summary span.txt { position:absolute; display:inline-block; left:5%; top:25%; width:100%; color:#fff; font-size:0.95em; text-align:left;  }
	.business_type1 .business_info li:hover .summary a, .business_type1 .business_info li.on .summary a{position:absolute; display:inline-block; left:5%; bottom:5%; width:40%; height:40px; line-height:40px; font-size:1em; color:#fff;  text-decoration:none; background:rgba(0,0,0,0);  border:1px solid #fff;  margin:20px auto; transition: 0.5s all ease;   }
	.business_type1 .business_info li:hover .summary a:hover, .business_type1 .business_info li.on .summary a:hover{color:#000; background:#fff; border:1px solid #fff;}

		
	@media screen and (max-width:992px){
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.business_type1 .txt_area .txt01 { width:100%; }
		.business_type1 .txt_area .txt02 { width:100%; margin-top:40px;}
		.business_type1 .txt_area .txt02 li {padding:0 5%;}
		.business_type1 .txt_area .txt02 ul li {padding-left:7%;}
		.business_type1 .txt_area .txt02 ul li:before { left:5%;  }

		.business_type1 .txt_area .txt01 span.tit  { display:inline-block; font-size:1.85em; }
		.business_type1 .txt_area .txt01 span.txt { display:inline-block; }
		.business_type1 .business_info li { width:50%; height:400px; border-top:1px solid #fff;}
		.business_type1 .business_info li:nth-child(2n){border-right:0px !important;}
		.business_type1 .business_info li:nth-child(3){border-top:1px solid #fff;}
		.business_type1 .business_info li:nth-child(4){border-top:1px solid #fff;}

	}

	@media screen and (max-width:480px){

		.business_type1 .txt_area {width:100%; padding-top:20px; }
		.business_type1 .txt_area .txt02 ul li {padding-left:9%;}
		.business_type1 .business_info li { width:100%; height:350px;}
		.business_type1 .business_info li:hover .summary span.txt { top:30%;}

	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">인증샘플
</span> RUS-TEST PACIFIC  </h1>
		<h2 class="sub_txt">RUS-TEST PACIFIC의 유라시아 인증 대표 사례입니다.</h2>
	</div>

	<div class="business_type1">	

		<div class="business_info">
			<ul>
				<li class="on">
					<div class="summary">
						<p class="title">사례 01-기계(Equipment)</p><br><br>
						<span class="txt">
							인증서 종류 : EAC DoC (적합성 선언서)<br>
							인증서 규격 : TR CU 004/2011,<br> TR CU 020/2011 및 해당 GOST규격<br>
						</span>
						<!------a href="#none">자세히보기</a------->
					</div>
				</li>
				
				<li>
					<div class="summary">
						<p class="title">사례 02-기계(Equipment)</p><br><br>
						<span class="txt">
							인증서 종류 : EAC CoC (적합성 인증서)<br>
							인증서 규격 : TR CU 004/2011 및 해당<br> GOST규격<br>
						</span>
						<!------a href="#none">자세히보기</a------>
					</div>
				</li>
				
				<li>
					<div class="summary">
						<p class="title">사례 03-기계(Equipment)</p><br><br>
						<span class="txt">
							인증서 종류 : Voluntary GOST<br> (자발적 GOST 인증서)<br>
							인증서 규격 : GOST 12.2.007.0-75,<br> GOST 30804.6.2-2013,<br>
							GOST 30804.6.4-2013 <br>
						</span>
						<!------a href="#none">자세히보기</a------->
					</div>
				</li>
				<li>
					<div class="summary">
						<p class="title">사례 04-화장품(Cosmetics)</p><br><br>
						<span class="txt">
							인증서 종류 : EAC DoC<br> (적합성 선언서)<br>
							인증서 규격 : TR CU 009/2011 <br>
							상담 전화 : 02) 674 9- 1160<br>
							이메일 : info@rus-test.org<br>
						</span>
						<!------a href="#none">자세히보기</a------->
					</div>
				</li>
			</ul>
		</div>
		
		
		
		<div class="txt_area">
			<div class="txt01">
				<p><span class="tit">인증사례&nbsp; :&nbsp; 기계 (Equipment) </span></p>
				<p><span class="txt"> TR CU 004/2011,TR CU 020/2011 및 해당 GOST규격</span></p>
				<p><span class="txt"><img src="./image/001_rustest.jpg" style="width:50%;"></span></p>
			</div>
			<div class="txt02">
			<ul>
                <li>국 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;가 : 유라시아 </li>
                <li>제 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;품 : 기계(Equipment) </li>
                <li>적 &nbsp; 용&nbsp; &nbsp; &nbsp;규&nbsp; 격 : TR CU 004/2011,<br> TR CU 020/2011 및 해당 GOST규격</li>
                <li>인&nbsp;증&nbsp;서&nbsp; &nbsp;종&nbsp;류 : EAC DoC (적합성 선언서)</li>
                <li>프로젝트 &nbsp;시&nbsp;기 : 2020년 00월</li>
                <li>소&nbsp; &nbsp;요&nbsp; &nbsp;기&nbsp; &nbsp;간 : 약 2주</li>
			</ul>
			</div>
		</div>
		
		<br><br>
		
		
		
		
		
		<div class="txt_area">
			<div class="txt01">
				<p><span class="tit">인증사례 : 기계(Equipment) </span></p>
				<p><span class="txt"> TR CU 004/2011 및 해당 GOST규격</span></p>
				<p><span class="txt"><img src="./image/002_rustest.jpg" style="width:50%;"></span></p>
			</div>
			<div class="txt02">
			<ul>
				<li>국 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;가 : 유라시아 </li>
                <li>제 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;품 : 기계(Equipment) </li>
                <li>적 &nbsp; 용&nbsp; &nbsp; &nbsp;규&nbsp; 격 : TR CU 004/2011 및 해당 GOST규격</li>
                <li>인&nbsp;증&nbsp;서&nbsp; &nbsp;종&nbsp;류 : EAC CoC (적합성 인증서)</li>
                <li>프로젝트 &nbsp;시&nbsp;기 : 2020년 00월</li>
                <li>소&nbsp; &nbsp;요&nbsp; &nbsp;기&nbsp; &nbsp;간 : 약 3주</li>
			</ul>
			</div>
		</div>
		
		<br><br>
		
		
		
		
		<div class="txt_area">
			<div class="txt01">
				<p><span class="tit">인증사례 : EAC DoC (적합성 선언서) </span></p>
				<p><span class="txt">GOST 12.2.007.0-75, GOST 30804.6.2-2013, <br>GOST 30804.6.4-2013</span></p>
				<p><span class="txt"><img src="./image/003_rustest.jpg" style="width:50%;"></span></p>
			</div>
			<div class="txt02">
			<ul>
				<li>국 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;가 : 유라시아 </li>
                <li>제 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;품 : 기계(Equipment) </li>
                <li>적 &nbsp; 용&nbsp; &nbsp; &nbsp;규&nbsp; 격 : GOST 12.2.007.0-75, GOST 30804.6.2-2013, GOST 30804.6.4-2013</li>
                <li>인&nbsp;증&nbsp;서&nbsp; &nbsp;종&nbsp;류 : EAC DoC (적합성 선언서)</li>
                <li>프로젝트 &nbsp;시&nbsp;기 : 2019년 00월</li>
                <li>소&nbsp; &nbsp;요&nbsp; &nbsp;기&nbsp; &nbsp;간 : 약 2주</li>
			</ul>
			</div>
		</div>
		
		<br><br>
		
		
		
		
		<div class="txt_area">
			<div class="txt01">
				<p><span class="tit">인증사례 : 화장품 (Cosmetics) </span></p>
				<p><span class="txt">TR CU 009/2011 인증</span></p>
				<p><span class="txt"><img src="./image/004_rustest.jpg" style="width:50%;"></span></p>
			</div>
			<div class="txt02">
			<ul>
				<li>국 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;가 : 유라시아 </li>
                <li>제 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;품 : 화장품(cosmetics) </li>
                <li>적 &nbsp; 용&nbsp; &nbsp; &nbsp;규&nbsp; 격 : TR CU 009/2011 </li>
                <li>인&nbsp;증&nbsp;서&nbsp; &nbsp;종&nbsp;류 : EAC DoC (적합성 선언서)</li>
                <li>프로젝트 &nbsp;시&nbsp;기 : 2020년 00월</li>
                <li>소&nbsp; &nbsp;요&nbsp; &nbsp;기&nbsp; &nbsp;간 : 약 2주</li>
			</ul>
			</div>
		</div>

	</div>	
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<?php 

/*	

공통하단 파일 </body> 위에 코드를 복사하여 추가 합니다.	
아래 스크립트에서 수정가능 이외에는 수정하지 마세요.	
business_roll_time 자동롤링시간 수정가능 : 원하시는 시간을 입력하세요.	1초=1000	3초=3000

*/?>
<script>
	var business_roll_time = 3000; /*수정가능*/
	var business_info_co = 2;
	var business_info_length = $(".business_info ul li").length;
	function tick(){		
		$('.business_info ul li').removeClass("on");
		$('.business_info ul li:nth-child('+business_info_co+')').addClass("on");		
		business_info_co++;
		if(business_info_co == (business_info_length+1)){
			business_info_co=1;	
		}
	}
	myVar = setInterval(function(){ tick () }, 3000);

	$( ".business_info ul li" ).mouseover(function(){
		$('.business_info ul li').removeClass("on");
		clearInterval(myVar);
	});
	$( ".business_info ul li" ).mouseleave(function(){
		business_info_co = 1;
		myVar = setInterval(function(){ tick () }, 3000);
	});
</script>

<!-----?php
	include "../include/tail.php"; 
?---->

<?php
     include_once('tail.php');//공통 하단을 연결합니다.
     include_once(G5_THEME_PATH.'/tail.php');//그누보드의 공통 하단을 연결합니다.
?>


