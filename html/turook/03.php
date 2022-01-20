<?php
	include "../include/header.php"; 
?>

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
		구매하신 다온테마에 사용하신다면 적용하지 않아도 됩니다.
		다온테마가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
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


	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:580px; margin-top:0; float:left; margin-left:40px; padding-top:200px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin-left:0}
	.business_type3 .business_info .backImg:nth-child(1){background:url('../image/business_img5.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('../image/business_img5.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('../image/business_img5.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('../image/business_img5.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg .txt_area{width:90%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:280px; background:#fff; }
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }

	@media screen and (max-width:992px){
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.business_type3 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type3 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
	}

	@media screen and (max-width:480px){

		.business_type3 .business_info .backImg {width:100%;}
		.business_type3 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type3 .business_info .backImg .txt_area{ height:auto; padding:15px;}


	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">OUR</span> BUSINESS</h1>
		<h2 class="sub_txt">다온테마의 다양한 사업영역를 소개합니다.</h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">심플하지만 다 갖춘 인덱스</p>
					<ul>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
					</ul>
				</div>
			</div>
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">PC+모바일 반응형 디자인</p>
					<ul>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
					</ul>
				</div>
			</div>
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">홈페이지에 꼭 필요한 기본 디자인 6종</p>
					<ul>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
					</ul>
				</div>
			</div>
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">부트스트랩이 아닌 CSS기반 반응형</p>
					<ul>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
						<li>이곳은 간략한 설명글이 들어갈 자리입니다.</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->




<?php
	include "../include/tail.php"; 
?>