<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "이제르바이잔"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "AZS인증"; //커스텀페이지의 타이틀을 입력합니다.
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


	.business_type4 {width:100%; max-width:1200px;  margin:0 auto;}
	.business_type4:after{ content:""; display:block; clear:both;}
	.business_type4 .business_info { position:relative; width:100%; height:400px; margin:150px auto; background:none;}
	.business_type4 .business_info:after{ content:""; display:block; clear:both;}
	.business_type4 .business_info:first-child {margin-top:0px;}
	.business_type4 .business_info .img_left { position:absolute; left:0; top:0; width:650px; height:400px; background:blue; }
	.business_type4 .business_info .img_left img{ width:100%; height:100%;}
	.business_type4 .business_info .img_right { position:absolute; right:0; top:0; width:650px; height:400px; background:blue; }
	.business_type4 .business_info .img_right img{ width:100%; height:100%;}
	.business_type4 .business_info .con_box { position: absolute; right:0; top:25%; width:55%; height:350px; background:rgba(255,255,255,1); box-shadow:10px 10px 5px rgba(0,0,0,0.04); }
	.business_type4 .business_info .con_box .txt_area {padding:10%; }
	.business_type4 .business_info .con_box .txt_area:before { display: block; content: ''; position: absolute; left: -80px; top:23%;  width:20%; height:1px; background:#000;}
	.business_type4 .business_info .con_box .txt_area em { position:relative; display:block; vertical-align:middle; color:#ddd;  font-size:3em;}
	.business_type4 .business_info .con_box .txt_area strong {display:block; color:#333;  font-size:1.5em; font-weight: 600;  line-height:1.5em; margin:30px 0 20px 0;}
	.business_type4 .business_info .con_box .txt_area p.box_txt {display:block; color:#555; font-size:1em;  font-weight: 300;  line-height:1.5em; text-align:justify;  }
	.business_type4 .business_info .type_other { position: absolute; left: 0; top:25%; width:55%; height:350px; background:rgba(255,255,255,1);  box-shadow:10px 10px 5px rgba(0,0,0,0.04); }
	.business_type4 .business_info .type_other .txt_area:before {display:none;}
	.business_type4 .business_info .type_other .txt_area:after { display: block; content: ''; position: absolute; right:-80px; top:23%; width:20%; height:1px; background:#000; }


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
		<h1 class="sub_tit"><span class="fc_pointer">AZS인증(Azerbaijan Certification)</span>&nbsp;이제르바이잔</h1>
		<h2 class="sub_txt" style="text-align:left;">
아제르바이잔은 아제르바이잔 국가 적합성 인증서인 "AZS Certificate"라는 자국 인증을 보유하고 있습니다. <br> 
AZS인증은 아제르바이잔 표준화ㆍ도량ㆍ특허 위원회(The State Committee for Standardization, Metrology and Patent of the Republic of Azerbaijan)에서 <br>발행하며 인증서는 통관 시 필요서류 중 하나입니다.<br>
아제르바이잔 인증은 러시아 또는 카자흐스탄과 같이 일반 인증기관에서 정부 규격청으로부터 권한을 부여 받아 인증서를 발급하는 시스템으로 진행 됩니다. </h2>
	</div>


	<div class="business_type4">

		<div class="business_info">
			<div class="img_left"><img src="./image/business_img4.jpg"></div>
			<div class="con_box">
				<div class="txt_area">
					<em>01</em>
					<strong>기본 인증서 : 국가 적합성 인증서(AZS Certificate)</strong>
					<p class="box_txt">
                       1. 국제 인증서: ISO, CE, GMP, GOST, TY(TS)<br>
                       2. 원산지 증명서(Certification of origin)<br>
                       3. 품질 증명서(Certification of quality)<br>
                       4. 적합성 증명서(Certification of Conformity)<br>
                       5. 위생 증명서(Certification of hygiene)<br>
                       6. 식물위생 증명서(Certification of phytosanitary)<br>
					</p>
				</div>
			</div>
		</div>

		<div class="business_info">
			<div class="img_right"><img src="./image/business_img2.jpg"></div>
			<div class="con_box type_other">
				<div class="txt_area">
					<em>02</em>
					<strong>AZS 인증 절차</strong>
					<p class="box_txt">
						간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다.
					</p>
				</div>
			</div>
		</div>

		<div class="business_info">
			<div class="img_left"><img src="./image/business_img3.jpg"></div>
			<div class="con_box">
				<div class="txt_area">
					<em>03</em>
					<strong>AZS인증서 종류</strong>
					<p class="box_txt">
						간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다.
					</p>
				</div>
			</div>
		</div>

		<div class="business_info">
			<div class="img_right"><img src="./image/business_img1.jpg"></div>
			<div class="con_box type_other">
				<div class="txt_area">
					<em>04</em>
					<strong>AZS인증서 유효기간</strong>
					<p class="box_txt">
						간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다.
					</p>
				</div>
			</div>
		</div>
		
		
				<div class="business_info">
			<div class="img_left"><img src="./image/business_img3.jpg"></div>
			<div class="con_box">
				<div class="txt_area">
					<em>05</em>
					<strong>AZS인증서 종류</strong>
					<p class="box_txt">
						간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다. 간략한 설명글이 들어갈 자리입니다.
					</p>
				</div>
			</div>
		</div>
		
		
		
	</div>	
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<?php
     include_once('tail.php');//공통 하단을 연결합니다.
     include_once(G5_THEME_PATH.'/tail.php');//그누보드의 공통 하단을 연결합니다.
?>