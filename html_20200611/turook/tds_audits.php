<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "투르크메이스탄"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "TDS인증"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //공통 상단을 연결합니다.
?>

    <!-----페이지 상단 글로벌 네비게이션-------->
	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><a href="../russia/ru01_trcueac.php"><?php echo $tmenu_?></a></li><!----1Depth 인증서비스(러시아) 페이지 연결-------->
			<?php if($tmenu2_){?><li><a href="tds_audits.php"><?php echo $tmenu2_?></a></li><?php }?><!----2Depth 러시아 페이지 연결-------->
			<li><a href="tds_audits.php"><?php echo $g5['title']?></a></li>
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
	.business_type1 .txt_area .txt01:after { position:absolute; left:5%; top:0;  content:""; display:inline-block; width:4px; height:100%; background:#222; }
	.business_type1 .txt_area .txt01 p { padding:0; margin:0; padding-left:10%; padding-right:20px;}
	.business_type1 .txt_area .txt01 span.tit { display:block; font-size:1.2em; color:#000; font-weight:700; line-height:1.2em; margin-bottom:20px; }
	.business_type1 .txt_area .txt01 span.txt { display:block; font-size:1.15em; color:#333; font-weight:400; }
	.business_type1 .txt_area .txt02 { float:left; width:50%; }
	.business_type1 .txt_area .txt02 ul {margin:0; padding:0;}
	.business_type1 .txt_area .txt02 ul li { position:relative; font-size:1em; color:#555; font-weight:400; line-height:1.4em; list-style:none; padding-left:3%; margin-bottom:10px; }
	.business_type1 .txt_area .txt02 ul li:before {position:absolute; top:8px; left:0; content:""; display:inline-block; width:4px; height:4px; background:#555; margin-right:10px;vertical-align:middle;}
	.business_type1 .business_info { width:100%; margin-bottom:50px;}
	.business_type1 .business_info:after { content:""; display:block; clear:both;}
	.business_type1 .business_info li {float:left; overflow:hidden; position:relative; width:25%; height:450px; text-align:center; box-sizing:border-box; border-right:1px solid #fff;}
	.business_type1 .business_info li:nth-child(1) {background:url('../image/business_img1.jpg')no-repeat 50% 0;  background-size:cover;}
	.business_type1 .business_info li:nth-child(2) {background:url('../image/business_img2.jpg')no-repeat 50% 0;  background-size:cover;}
	.business_type1 .business_info li:nth-child(3) {background:url('../image/business_img3.jpg')no-repeat 50% 0;  background-size:cover;}
	.business_type1 .business_info li:nth-child(4) {background:url('../image/business_img4.jpg')no-repeat 50% 0;  background-size:cover; border-right:0px;}
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

		.business_type1 .txt_area .txt01 { width:100%; }
		.business_type1 .txt_area .txt02 { width:100%; margin-top:40px;}
		.business_type1 .txt_area .txt02 li {padding:0 5%;}
		.business_type1 .txt_area .txt02 ul li {padding-left:7%;}
		.business_type1 .txt_area .txt02 ul li:before { left:5%;  }

		.business_type1 .txt_area .txt01 span.tit  { display:inline-block; font-size:1.2em; }
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
		<h1 class="sub_tit"><span class="fc_pointer">TDS인증</span>&nbsp; 투르크메이스탄 (TURKMENISTAN CERTIFICATION)</h1>
		<h2 class="sub_txt">RUS-TEST PACIFIC의 투르크메이스탄 TDS인증 사업</h2>
	</div>
	
	
	<img src="./image/TDS01.jpg" alt="쿠르크메이스탄 인증마크" style="display:block;width:50%;margin-left:auto;margin-right:auto;">
		<h2 class="sub_txt" style="text-align:center;margin-bottom:10%;">TDS(투르크메이스탄) 인증 마크</h2>
	
	

	<div class="business_type1">	
			<div class="txt_area">
			
			<div class="txt01">
				<p><span class="tit">TDS 인증 개요 </span></p>
				<!-----p><span class="txt">인증 | 심사제작관련 궁금하신 사항은 언제든지 문의바랍니다.</span></p---->
			</div>
			
			<div class="txt02">
			<ul>
				<li>투르크메니스탄의 기술규제 체계는 EAEU와 러시아 연방의 기술규제 체계와는 다릅니다. 당국의 문서, 그리고 투르크메니스탄의 법률에 따라 의무적인 제품 요건을 설정하는 기술 규정의 기능을 수행하는 일련의 의무 국가 표준에 근거합니다.</li>
				<li>표준화 분야의 국가 통제 및 감독(State control and supervision)은 투르크메니스탄의 내각이 "Cabinet of Ministers of Turkmenistan" 조직하고, 표준 구현에 대한 통제 및 감독을 인가된 기관 "Turkmenstandardarary"가 수행합니다.</li>
				<li>투르크메니스탄의 "인증에 관하여"의 법에 따르면, 투르크메니스탄의 영토로 수입된 모든 제품들은 국가요건의 준수를 확립하기 위하여 의무적인 인증을 받아야 합니다. </li>
				<li>CIS 국가의 다른 인증제도와 달리 증명서를 발행한 후에는 만료 없이 유효하므로, 최초 발급된 인증서로 동일한 제품을 수입할 수 있다는 의미입니다. 투르크메니스탄의 TDS 인증서(GOST TDS라고도 함)는 필요한 경우 실험소에서 시험진행 이후에 발급됩니다.</li>
				<!----li>부트스트랩이 아닌 CSS기반 반응형</li---->
			</ul>
			</div>
		</div>
				
		<div class="txt_area">
			<div class="txt01">
				<p><span class="tit">TDS인증 개요 및 TDS인증 유형 </span></p>
			</div>
			<div class="txt02">
			<ul>
				<li>- 필수적 인증</li>
				<li>- 제품등록 (약물, 의료 목적의 제품, 새로운 음식, 살충제, 비료)</li><br>
				                <img src="./image/TDS02.jpg" alt="투르크메이스탄" style="width:50%;">

			</ul>
			</div>
		</div>
		
		
		<div class="txt_area">
			<div class="txt01">
				<p><span class="tit">인증이 요구되지 않는 케이스 </span></p>
				<p><span class="txt">투르크메니스탄의 영토로 수입되는 모든 제품들은 인증을 받아야 하지만<br> 다음과 같은 경우에 면제됩니다.</span></p>
			</div>
			<div class="txt02">
			<ul>
				<li>실험실 시험(연구)을 위한 샘플</li>
				<li>전시용 제품, 판매 또는 사용을 위한 아닌 제품</li>
				<li>투르크메니스탄의 외국 국가 및 국제기구의 공식 대표단, 외교 및 기타 동등한 대표단</li>
			</ul>
			</div>
		</div>
		


		
		<div class="txt_area">
			<div class="txt01">
				<p><span class="tit">외국에서 발행한 인증 문서의 인식</span></p>
				<!-----p><span class="txt">인증 | 심사제작관련 궁금하신 사항은 언제든지 문의바랍니다.</span></p------>
			</div>
			<div class="txt02">
			<ul>
				<li>외국에서 발행한 일증은 규격청에서 발행 시 적용된 규격을 검토하여,투르크메니스탄 적용여부를 판단,투르크메니스탄 인증서로 변환하여 인증서 발급이 가능합니다. </li>
			</ul>
			</div>
		</div>
		
		
		<div class="txt_area">
			<div class="txt01">
				<p><span class="tit">마킹 </span></p>
				<!---p><span class="txt">인증 | 심사제작관련 궁금하신 사항은 언제든지 문의바랍니다.</span></p---->
			</div>
			<div class="txt02">
			<ul>
				<li>법에 따르면, 제품과 서비스에 대해 강제 인증이 적용되며 인증된 제품에는 적합성 마크가 표시됩니다. </li>
			</ul>
			</div>
		</div>
		
		
		<!--------/ 고객님께 드리는 혜택 시작  /-------------->
		<br><br><br><br><br><br>
       
        <div class="business_type4">
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li><p><em><strong>01</strong></em><span> EAC 및 GOST 인증 서비스</span></p></li>
		  		<li><p><em><strong>04</strong></em><span> Eurasia Representative 서비스</span></p></li>
		  		<li><p><em><strong>02</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span></p></li>
		  		<li><p><em><strong>05</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span></p></li>
		  		<li><p><em><strong>03</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발행 서비스</span></p></li>
		  	</ul>
		  </div><!--------/ 고객님께 드리는 혜택 종료  /-------------->
		
		
		
	</div>	 <!------/ class="business_type1" 종료 /----------->
</div> <!--------/ class="content_wrap" 종료 /------------->
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


