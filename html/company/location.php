<?php 	
	include "../../../../common.php";
	$tmenu_ = "회사안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "오시는길"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

<!--<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>-->



<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
    
    <style>
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;font-size: 1.1em;font-weight: 400;line-height: 1.5}

	.page_title{width:100%; margin-bottom:70px;}

	.page_title h1{width:50%; margin:0 auto; text-align:center; font-size:2.6em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:40px auto 0; border:1px solid #000;}
	.page_title h2{width:50%; margin:0 auto; text-align:center; font-size:1.4em; color:#666; margin-top:20px; }
    .point_b1{font-weight: 600;font-size: 1.2em}


     .logo_location img { display: block; margin: 0px auto; width:35%; margin-top:50px;margin-bottom:50px;}/* 로고, 회사안내 타이틀 하단 */
     .scontents{text-align:center;}


	.company_type1 {width:100%; margin:0 auto; }
	.company_type1:after{content:""; clear:both; display:block;}
	.company_type1 .ceo_img {position: relative; float:right; width:400px; text-align:right; padding-left:30px;}
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

	.business_type2 .con_box{ width:100%; padding:0px 0; border-top:1px solid #000; border-bottom:1px solid #000; text-align:left;}
	.business_type2 .con_box:after{content:""; display:block; clear:both;}
	.business_type2 .con_box ul { padding:0; margin:0; }
	.business_type2 .con_box ul li {float:none; width:100%; list-style:none; margin:10px 0; }
	.business_type2 .con_box ul li p{display:table; width:100%; padding-left:10px;}
        .business_type2 .con_box ul li p{display:block;}
        
	.business_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.business_type2 .con_box ul li p > em{ width:30px; }
	.business_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.business_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 10px;}
        

        table {width: 100%;border: 1px solid #444444;border-collapse: collapse;text-align:left;}
        th, td {border: 1px solid #444444; padding: 10px; }
        
        /* 오시는길, 대중교통 이용시 안내 시작 */
        .con_box h2 span{display:block;color:#1F88E5;text-align:left;width:90%;margin: 0 auto;font-size:1.3em;font-weight:bold;margin-bottom:15px;}
        .customStyle_boxContainer_borderTB {padding-left:0; padding-right:0; border-top:1px solid #444; border-bottom:1px solid #eaeaea;}
        
        
        

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
     
</style>




<div class="content_wrap">

<div class="scontents">
    <div class="con_box">
        <h2><span> 카카오 지도찾기 (이동, 확대/축소 기능)</span></h2>      
        <div class="map_wrap">			
            <div class="g_map">
				    <?php 
						//다음지도 안내
						// http://map.daum.net/ 에서 주소로 검색하신 후 지도공유 > 지도 퍼가기로 아래 코드를 넣으시면 됩니다.
						// 코드를 넣으신 후 아래 주석의 1,2,3을 추가 또는 수정하시면 됩니다.
					?>
                    <!-- * 카카오맵 - 지도퍼가기 -->
                    <!-- 1. 지도 노드 -->
                    <div id="daumRoughmapContainer1600330198287" class="root_daum_roughmap root_daum_roughmap_landing"  style="display:block;width:100%;margin:0 auto;"></div>
                    
                    <!--
                    	2. 설치 스크립트
                    	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                    -->
                    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                    
                    <!-- 3. 실행 스크립트 -->
                    <script charset="UTF-8">
                        new daum.roughmap.Lander({
                            "timestamp" : "1600330198287",
                            "key" : "2249i",
                            "mapWidth" : "900",
                            "mapHeight" : "500"
                        }).render();
                    </script>
            </div>
        </div><br><br>   
	</div>
	<div style="width: 90%;margin: 0 auto;text-align: left">
        <p style="margin: 0 0 15px;font-size: 15px;line-height: 1.75">&nbsp;</p>
        <p style="margin: 0 0 15px;font-size: 15px;line-height: 1.75">&nbsp;</p>
        <p class="customStyle_boxContainer_borderTB" style="margin: 0 0 15px;font-size: 15px;line-height: 1.75;padding:20px"><span style="font-size:24px"><strong>회사 위치</strong></span></p>
        <div style="width: 90%;margin:0 auto">
            <p>&nbsp; ▶ &nbsp;주소</p>
            <p>서울특별시 금천구 서부샛길 638, 4층 402-6호(가산동, 대륭테크노타운7차)</p><br>
            <p>&nbsp; ▶ &nbsp;전화</p>
            <p>02) 6749-1161</p><br>
            <p>&nbsp; ▶ &nbsp;팩스</p>
            <p>02) 6749-0711</p><br>
            <p>&nbsp; ▶ &nbsp;이메일</p>
            <p>info@dna-tec.org</p>
            <p style="margin: 0 0 15px;font-size: 15px;line-height: 1.75">&nbsp;</p>
            <p style="margin: 0 0 15px;font-size: 15px;line-height: 1.75">&nbsp;</p>
        </div>
        <p class="customStyle_boxContainer customStyle_boxContainer_borderTB" style="margin: 0 0 15px;font-size: 15px;line-height: 1.75;padding:20px"><span style="font-size:24px"><strong>대중교통 이용시</strong></span></p>
        <div style="width: 90%;margin:0 auto">
            <p>&nbsp; ▶ &nbsp;지하철</p>
            <p>&nbsp;&nbsp;&nbsp; - 1호선 가산디지털단지역 7번 출구 (도보 15분)</p>
            <p>&nbsp;&nbsp;&nbsp; - 7호선 가산디지털단지역 6번 출구 (도보 15분)</p><br>
            <p>&nbsp; ▶ &nbsp;버스</p>
            <p>&nbsp;&nbsp;&nbsp; - 간선버스 : 금천05 (하차 후 도보)</p>
            <p>&nbsp;&nbsp;&nbsp; - 일반버스 : 571, 652 (차하 후 도보)</p><br>
            <p>&nbsp; ▶ &nbsp;자동차</p>
            <p>&nbsp;&nbsp;&nbsp; 주차 가능 / 30분 무료</p>
        </div><br><br><br><br>
	</div>
</div>

</div><!----------- content_wrap 종료 -------------->

<br><br>

<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>