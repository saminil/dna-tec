<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "카자흐스탄"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "카자흐스탄"; //커스텀페이지의 타이틀을 입력합니다.
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

	.business_type2 .txt_area { width:100%; padding-top:40px; border-top:2px solid #000; text-align:justify;padding-right:5%;}
	.business_type2 .txt_area:after{content:""; display:block; clear:both;}
	.business_type2 .txt_area .txt01 { float:left; width:100%; word-break: keep-all; }
	.business_type2 .txt_area .txt01 p { padding:0; margin:0; margin-bottom:15px; padding:0;}
	.business_type2 .txt_area .txt01 span.tit { display:block; font-size:2.2em; color:#000; font-weight:700; line-height:1.2em;  }
	.business_type2 .txt_area .txt01 span.txt { display:block; font-size:1.15em; color:#333; font-weight:400; line-height:1.4em; }
	.business_type2 .txt_area .txt02 { float:left; width:100%; margin-top:20px;}
	.business_type2 .txt_area .txt02 ul {margin:0; padding:0; }
	.business_type2 .txt_area .txt02 ul li { position:relative; color:#555; font-weight:400; line-height:1.5em; list-style:none; padding-left:3%; margin-bottom:5px;}
	.business_type2 .txt_area .txt02 ul li:before {position:absolute; top:8px; left:0; content:""; display:inline-block; width:4px; height:4px; background:#0263ac; margin-right:10px; vertical-align:middle;}

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

<br><br>
<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">

<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">TRCU EAC</a></li>
			<li><a href="javascript:;">GOST K</a></li>
			<li><a href="javascript:;">방폭인증</a></li>
			<li><a href="javascript:;">ISE K</a></li>
			<li><a href="javascript:;">화재안전 K</a></li>
			<li><a href="javascript:;">계측기기 K</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
<!--+++ Mark 20.06.09 탭 컨텐츠 영역 +++-->
<div class="tab_con">
		
 <article style="display:block"> <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 시작 +++++-->

	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">TRCU EAC 인증 카자흐스탄</span>&nbsp;(KAZAKHSTAN)</h1>
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
				</div>
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
                        <td rowspan="2" width="145">TR EAEU    036/2016</td>
                        <td width="625">가스연료의    관련 조건</td>
                        <td rowspan="2" width="130">가스연료</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements for liquified petroleum gases foe use as fuel&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TR EAEU    037/2016</td>
                        <td width="625">전기    및 전자 장비에서 특정 유해 물질의 사용 제한에 관련 기술규정</td>
                        <td rowspan="2" width="130">전기 및 전자 장비</td>
                      </tr>
                      <tr>
                        <td>&ldquo;Restricting    usage of hazardous substances in the electrical goods and radio electronics&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TR EAEU    038/2016</td>
                        <td width="625">놀이기구의    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">놀이기구</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    amusement rides&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TR EAEU    039/2016</td>
                        <td width="625">광물비료    관련 기술규정</td>
                        <td rowspan="2" width="130">광물비료</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On    requirements for mineral fertilizers&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">ТR EAEC&nbsp;040/2016</td>
                        <td width="625">어류    및 어류제품 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">어류 및 어류제품</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    fish and fish products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TR EAEU    041/2017<br>
                          (2021년 6월 2일 시행될 예정)</td>
                        <td width="625">화학물질    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">화학물질</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    chemical products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TR EAEU    042/2017</td>
                        <td width="625">어린이    놀이터 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">어린이 놀이터</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    chemical products&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TR EAEU    043/2017</td>
                        <td width="625">화재지연제    및 소화시스템 관련 기술규정</td>
                        <td rowspan="2" width="130">화재지연제 및 소화시스템</td>
                      </tr>
                      <tr>
                        <td>&rdquo; On safety of    equipment for children&rsquo;s playgrounds&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TR EAEU    044/2017</td>
                        <td width="625">생수    및 천연 미네랄 워터의 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">생수 및 천연 미네랄 워터</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    packaged drinking water, including natural mineral water&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TR EAEU    045/2017</td>
                        <td width="625">미네랄    오일 안전 관련 기술규정</td>
                        <td rowspan="2" width="130">미네랄    오일</td>
                      </tr>
                      <tr>
                        <td>&ldquo;On safety of    oil prepared for transportation and(or) use&rdquo;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TR EAEU 046/2018<br>
                          (2022년 1월 1일 시행될 예정)</td>
                        <td width="625">천연가스    안전 관련 기술규정</td>
                        <td rowspan="2" width="130">천연가스</td>
                      </tr>
                      <tr>
                        <td>&quot;On    safety of natural flammable gas, prepared for transportation or usage&quot;</td>
                      </tr>
                      <tr>
                        <td rowspan="2" width="145">TR EAEU 047/2018</td>
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
				</div>
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
			      		</div>
			      		<div class="txt02">
			      		<ul style="list-style:none">
                              1. 인증기관에 신청서 및 제품 관련 서류 제출<br><br>
                              2. 서류 검토<br><br>
                              3. 적용되는 인증서 유형 확인<br><br>
                              4. 샘플 시험 및 공장심사 여부 확인<br><br>
                              5. 견적서 발행 및 계약<br><br>
                              6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행<br><br>
                              7. 공장심사 필요 시, 심사 진행<br><br>
                              8. 인증서 초안 발행 및 고객 확인<br><br>
                              9. 인증서 발행<br><br>	
			      		</ul>
			      		</div>
			      	</div>
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
			      </li>
		      </ul>
		</div>
		
		
		<div class="business_info">
		      <ul>
			      <li class="left_box" style="width:35%;"><img src="../russia/image/eac_mark08.jpg" alt="카자흐스탄 TRCU EAC"></li>
			      <li class="right_box">
			      	<div class="txt_area">
			      		<div class="txt01">
			      			<p><span class="tit">유라시아 인증 신청자</span></p>
			      			<p><span class="txt">TRCU인증 등을 신청할 경우 러시아 또는 기타 관세동맹 국가에서 위치한 업체만 신청자가 될 수 있습니다. 해당 업체는 법적실체 또는 개인사업자여야 하며 일반인은 인증의 신청자가 될 수 없습니다.</span></p>
			      		</div>
			      		<div class="txt02">
                             <p><span class="txt">RUS-TEST PACIFIC은 유라지아 지역 내에 신청자 역할을 할 수 있는 사업자가 없는 고객을 위해 Eurasia Representative 서비스를 제공하고 있습니다.</span></p>
			      		</div>
			      	</div>
			      </li>
		      </ul>
		</div>
		
		
		
		<div class="business_info">
		<ul>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">Rosakkreditasiya 대장(Register)</span></p>
						<p><span class="txt">TRCU인증, GOST R인증은 Rosakkreditasiya 웹사이트에 등록됩니다. 현재는 필수적 인증서만 Rosakkreditasiya 웹사이트에서 확인이 가능하며 자발적 인증서는 현재 시점에 확인이 불가능합니다. 상세한 확인 절차는 자료실에 등록된 파일을 통해 확인하실 수 있습니다.<br><br>
						
						<a href="https://www.fsa.gov.ru/" style="color:#3da8ef;">Rosakkreditasiya(www.fsa.gov.ru) 웹사이트 바로가기</a>
						
						</span></p>
					</div>
				</div>
			</li>
		</ul>
		</div>
		  
		  <h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS-TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
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
	    
    </article> <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
	   
	   
	   
	   
	   
	 <article><!--+++++ 컨텐츠 02 GOST K 시작 +++++-->
           
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">GOST K 인증</span> 카자흐스탄 (KAZAKHSTAN)</h1>
		<h2 class="sub_txt">CIS(Commonwealth of Independent States, 독립국가연합)12개 회원국의 국가 규격</h2>
	</div>

           <li class="left_box">
			    <dt>
				  <div id="eac_CoC">
						<img src="./image/GOST_K_01.jpg" style="display:block;width:30%;margin: 0 auto;"><br>
						 <p style="text-align:center;">GOST K 마크</p><br><br>
				  </div>			
				</dt>
			</li>


	<div class="business_type2">
	
		<div class="business_info">
		<ul>
			<!-----li class="left_box"><img src="./image/company_img1.jpg" alt="카자흐스탄 TRCU EAC"></li----->
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 개요</span></p>
						<p><span class="txt">GGOST는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.
                           현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은 GOST-K 등으로 구분지어 불리고 있습니다.
                           GOST는 지역규격이며, 카자흐스탄의 국가규격은 GOST K입니다.</span></p>
                        <p><span class="txt">TRCU(Technical Regulation of Customs Union)유라시안 관세동맹국가 간 발효 된 통합 인증제도의 도입 후 카자흐스탄 내 GOST K 인증 품목은 크게 줄어들었습니다. 하지만 아직 동맹국 간 협의가 이루어지지 않은 강제 인증 품목에 한해서는 수입통관 시 GOST K 인증이 요구됩니다.</span></p>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="./image/GOST_K_00.jpg" alt="카자흐스탄 TRCU EAC" style="display:block;width:30%;margin: 0 auto;"></li><br>
			
			
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 인증 대상 품목</span></p>
						<p><span class="txt">GOST K는 카자흐스탄 KAZMEMST (Committee for Standardization, Metrology and Certification)에서 승인한 인증기관에서 발행 가능하며 규정 상 다음의 품목이 GOST K 인증 대상입니다.
                </span></p>
					</div>
					<div class="txt02">
					<ul>
						<li>- 카자흐스탄 법령 No 367 “About obligatory confirmation of conformity of products in the Republic of Kazakhstan”에 포함된 품목</li>
						<li>- 카자흐스탄 법령 No 620 “Single list of products subject to mandatory assessment(confirmation) within the Customs Union with issuance of uniform documents”에 포함되지 않은 품목</li>
						<li>- 기타 관세동맹 회원국 간 합의된 “통합 적합성 평가대상 목록”에 포함되지 않은 품목</li>
					</ul>
					</div>
				</div>
				<div class="txt03">
					<span>
						Ex) 전기.전자제품, 건축제품, 의료기기, 가전제품, 공구, 농산물, 식품.음료.담배, 화학물질, 완구 및 아동복, 가구 및 식기류, etc.
					</span>
				</div>
			</li>
		</ul>
		</div>		
		
		<div class="business_info">
		<ul>
		<br>
			<li style=""><img src="./image/GOST_K_02.jpg" alt="카자흐스탄 GOST K" style="display:block;width:30%;margin: 0 auto;"><br></li>
			
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 인증서 유형</span></p>
						<p><span class="txt">GOST K 인증서는 제품군과 세부사항에 따라 두 종류로 구분됩니다.
                </span></p>
					</div>
					<div class="txt02">
					<ul>
                        <li><strong>GOST K CoC (강제 적합성 인증)</strong><br></li>
                        <li><strong></strong>GOST K Voluntary CoC (자발적 적합성 인증)</li><br>
					</ul>
					</div>
				</div>
				
				<div class="txt03">
					<span>
						  -TRCU EAC 인증서 종류<br>
                          -TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다. <br>&nbsp; <br>

					</span>
					<br>
				</div>
			</li>
		</ul>
		</div>
		
		
		
		
		<div class="business_info">
		<ul>
			<li><img src="./image/GOST_K_03.jpg" alt="카자흐스탄 GOST K" style="display:block;width:30%;margin: 0 auto;"><br></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 인증서 유효기간</span></p>
						<p><span class="txt">GOST K 인증서는 유효기간에 따라 One-shipment와 Serial 인증으로 나눠집니다.
                </span></p>
					</div>
					<div class="txt02">
					<ul>
                        <li><strong>단일 선적에 대한 인증(One-Shipment: Single Delivery Certification)</strong><br>
                            단발성(1회성)으로 계약에 적합한 인증으로, 수입자와의 계약서에 표기된 계약이행 기간까지 유효합니다.</li>
                        <li><strong>연속 생산(Serial Production Certification) </strong><br>
                            계속적인 수출이 예상되는 경우에 유리하며 최소 1년에서 최대 3년까지 유효합니다.</li><br>

					</ul>
					</div>
				</div>
				
				<div class="txt03">
					<span>
						  -1년간 유효한 인증서는 1년마다 샘플과 서류 검토 절차를 거친 후 새로 발행됩니다.<br>
                          -3년간 유효한 인증서는 샘플과 서류검토 외에 추가적으로 공장심사가 요구되며, <br>
                           &nbsp; 해당 제품을 제조하고 있는 모든 공장이 검사 대상이 되며,<br>
                           &nbsp; 사후심사 시 중대한 결함이 발견될 경우 제품의 인증서가 취소됩니다.
					</span>
					<br>
				</div>
			</li>
		</ul>
		</div>	

		<div class="business_info">
		<ul>
			<li><img src="./image/GOST_K_04.png" alt="카자흐스탄 TRCU EAC" style="display:block;width:45%;margin: 0 auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 인증 절차</span></p>
					</div>
					<div class="txt02">
					<ul>
                        <span>1. 인증기관에 신청서 및 제품 관련 서류 제출</span><br><br>
                        <span>2. 서류 검토</span><br><br>
                        <span>3. 적용되는 인증서 유형 확인</span><br><br>
                        <span>4. 샘플 시험 및 공장심사 여부 확인</span><br><br>
                        <span>5. 견적서 발행 및 계약</span><br><br>
                        <span>6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</span><br><br>
                        <span>7. 공장심사 필요 시, 심사 진행</span><br><br>
                        <span>8. 인증서 초안 발행 및 고객 확인</span><br><br>
                        <span>9. 인증서 발행</span>
					</ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="../russia/image/EAC18_Ex_sgr.jpg" alt="카자흐스탄 TRCU EAC" style="display:block;width:30%;margin: 0 auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">GOST K 인증 제출 서류</span></p>
					</div>
					<div class="txt02">
					<ul>
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
			</li>
		</ul>
		</div>
		
		
		
		<div class="business_info">
		  <ul>
		  	<!----li class="left_box"><img src="./image/company_img3.jpg" alt="카자흐스탄 TRCU EAC"></li---->
		  	<li>
		  		<div class="txt_area">
		  			<div class="txt01">
		  				<p><span class="tit">카자흐스탄 국가인증센터 대장(Register)</span></p>
		  				<p><span class="txt">GOST K는 <a href="http://www.rep.nca.kz/kaz/">카자흐스탄 국가인증센터 웹사이트</a>에서 확인 가능합니다.</span></p>
                        <br> <sapan style="color:blue;"><a href="http://www.rep.nca.kz/kaz/">< 웹사이트 바로가기 > 클릭!</웹사이트></a></sapan>
                          <p></p>
                          <p></p>
		  			</div>
		  		</div>
		  	</li>
		  </ul>
		</div>
		
		<h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS-TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
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
     </article><!--+++++ 컨텐츠 02 GOST K 종료 +++++-->
     
     
     
     
     <article><!--+++++ 컨텐츠 03 방폭인증 시작 +++++-->
           
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">TRCU EAC Ex 방폭인증</span> 카자흐스탄 (KAZAKHSTAN) </h1>
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
						<p><span class="tit">TRCU EAC Ex 방폭인증 인증 유효기간</span></p>
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
						<p><span class="tit">TRCU EAC Ex 방폭인증 스킴</span></p>
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
			<li style="height:50%;"><img src="./image/EAC06_Ex_CoC.png" alt="이미지" style="width:50%;display:block;margin:auto;"></li>
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
						<p><span class="tit">TRCU-EAC Ex 방폭인증 제출 서류 </span></p>
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
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS-TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
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
     </article><!--+++++ 컨텐츠 03 방폭인증 종료 +++++-->
     
     
     
     <article><!--+++++ 컨텐츠 04 ISE K 시작 +++++-->
           
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">ISE K </span>업안전평가 카자흐스탄 (KAZAKHSTAN) </h1>
		<h2 class="sub_txt">ISE K(Industrial Safety Expertise Kazakhstan)</h2>
	</div>

	<div class="business_type2">
	
		<div>
		<ul>
			<!-----li class="left_box"><img src="./image/ISE_K.jpg" alt="이미지"></li----->
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">ISE K 개요 </span></p>
						<p><span class="txt">ISE K는 Industrial Safety Expertise Kazakhstan의 약어로, ISE검토 기관의 산업 안전 전문가가 건물 또는 시설물 완공 후 진행하는 평가절차입니다.<br>
                         카자흐스탄에서 Industrial Safety Expertise(ISE)는 카자흐스탄 법 No. 188-V, 11.04.2014 "On Civil Protection"에 따라 Комитет индустриального развития и промышленной безопасности Министерства по инвестициям и развитию Республики Казахстан에서 안전평가항목을 확인한 후 보고서를 발행합니다.  <br>
                         이전 카자흐스탄 내에서의 GGTN은 러시아의 RTN과 같은 역할을 했습니다.  그러나  카자흐스탄 법 No. 188-V, 11.04.2014 "On Civil Protection"에 따라 GGTN은 취소되었으며 ISE K가 그 역할을 대신합니다.</span></p>
                <br><br><br><br>
					</div>
				</div>

			</li>
		</ul>
		</div>
		
		
		<div class="business_info">
		<ul>
			<li><img src="./image/ise_k01.jpg" alt="TRCU EAC Ex 대상 품목" style="width:40%;display:block;margin:auto;"></li><br>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">ISE K 절차</span></p>
						<p><span class="txt">카자흐스탄 법 Procedure for harmonization of Regulatory Documents on Standardization with the Bodies of the State Fire Service, ПРРК64.1.01-97에 따른 화재안전 시험성적서가 필요한 대표적인 인증 대상은 다음과 같습니다. </span></p>
					</div>
					
					<div class="txt02">
					<ul>						                
                        ISE는 산업안전전문가로 등록된 전문가가 아래의 항목에 대한 평가를 진행합니다.
                        &#10020;  PJT의 범위 및 과정 검토 (Examination of scope and course of the PJT)<br>
                        &#10020;  현장 검사 준비 (Preparation of examining spots)<br>
                        &#10020;  스케쥴, 재료 및 준비 사전 문서 작업에 대한 전문가 평가 (Schedule the timeline)<br>
                        &#10020;  다음 사항의검토 및 분석 (Review and analysis of) <br>
                           <ul>
                             &nbsp; &nbsp;  &#8278; PJT 범위 및 작업 흐름 (PJT scope and work flow)<br>
                             &nbsp; &nbsp;  &#8278; 시공, 운영, 유지보수 (Construction, operation, maintenance)<br>
                             &nbsp; &nbsp;  &#8278; 위험 지역에 대한 안전 설명 (Safety statement on hazardous areas)<br>
                             &nbsp; &nbsp;  &#8278; 기술 문서 및 인증서 (Technical passports and certificates)<br>
                             &nbsp; &nbsp;  &#8278; 테스트 프로토콜 및 보고서 (Test protocols and reports)<br>
                             &nbsp; &nbsp;  &#8278; 라벨링 및 식별 시스템 (Labeling and identification systems)<br>
                             &nbsp; &nbsp;  &#8278; 기술 규정, 지침 및 PJT 운영 정책 (Technical standards, guidelines, PJT management policies)<br>
                             &nbsp; &nbsp;  &#8278; 설계 보고서 및 검사 결과의 역량 (Competence of design reports and inspection results)<br>
                             &nbsp; &nbsp;  &#8278; 직원 및 경영진의 역량 (Competence of employees and managements)<br>
                             &nbsp; &nbsp;  &#8278; 장치 및 기기의 성능 (Competence of devices and instruments)<br>      
                           </ul>  
                        &#10020; &nbsp; 기타 (Others)<br>
					</ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		
		<h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS-TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li><p><em><strong>01</strong></em><span> EAC 및 GOST 인증 서비스</span></p></li>
		  		<li><p><em><strong>04</strong></em><span> Eurasia Representative 서비스</span></p></li>
		  		<li><p><em><strong>02</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span></p></li>
		  		<li><p><em><strong>05</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span></p></li>
		  		<li><p><em><strong>03</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발행 서비스</span></p></li>
		  	</ul>
		  </div>
	</div>
     </article><!--+++++ 컨텐츠 04 ISE K 종료 +++++-->
     
     
     
     <article><!--+++++ 컨텐츠 05 화재안전K 시작 +++++-->
           
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">화재안전 인증</span>&nbsp;카자흐스탄(Kazahstan)</h1>
		<h2 class="sub_txt">카자흐스탄 비상사태위원회(Committee for Emergency Situations of Kazakhstan) 허가서 제출 <br></h2>
	</div>

	<div class="business_type2">
	
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="./image/firesafe02.jpg" alt="화재안전 K" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">화재안전 K 개요</span></p>
						<p><span class="txt">카자흐스탄에서는 별도의 화재안전 인증서가 존재하지 않지만, 각 제품에 대한 GOST K 또는 TR CU 인증서 발급 시, 화재안전시험이 필요한 제품에 대해서는 시험성적서가 카자흐스탄 비상사테위원회(Committee for Emergency Situations of Kazakhstan)에 제출되어야 하며 허가를 받아야 합니다.<br>
						또한 화재안전 시험성적서는 카자흐스탄 내 공인된 시험소에서 발행되어야 합니다.
						<br><br><br> </span></p>
					</div>
				</div>
			</li>
		</ul>
		</div>
	
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="../russia/image/EAC10_Ex_trcueac.jpg" alt="화재안전 K" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">화재안전 K 대상 품목</span></p>
						<p><span class="txt">카자흐스탄 법 Procedure for harmonization of Regulatory Documents on Standardization with the Bodies of the State Fire Service, ПРРК64.1.01-97에 따른 화재안전 시험성적서가 필요한 대표적인 인증 대상은 다음과 같습니다.</span></p>
					</div>
					<div class="txt02">
					<ul>
                        <li>액체 그리고 가스</li>
                        <li>부드러운 가구 및 가구 제품</li>
                        <li>빌딩 및 건물의 평평하고 경사가 있는 지붕</li>
                        <li>인테리어 마감용 건축 자재 및 소재</li>
                        <li>소방 장비</li>
                        <li>케이블 제품</li>
                        <li>가구 및 이와 유사한 전기기기</li>
                        <li>방화문</li>
                        <li>단열재 및 제품</li>  
					</ul>
					</div>
				</div>
			</li>
		</ul>
		</div>

        <h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS-TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
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
     </article><!--+++++ 컨텐츠 05 화재안전K 종료 +++++-->
     
     
     
     
     <article><!--+++++ 컨텐츠 06 계측기기 K시작 +++++-->
           
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">계측기기 K 인증(PAC K)</span> 개요 </h1>
		<h2 class="sub_txt">Pattern Approval Certificate for Measuring Device - Kazakhstan</h2>
	</div>

	<div class="business_type2">
	
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="./image/pac_k07.jpg" alt="PAC(계측기기) K 개요" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">PAC(계측기기) K 개요 </span></p>
						
						<p><span class="txt">PAC K 인증은 Pattern Approval Certificate for Measuring Device - Kazakhstan의 약어로, 계측 및 시험장비 기기류에 대한 인증서를 뜻하며 Pattern Approval Certificate (Certificate of Metrology) 로도 알려져 있습니다. </span></p>
						<p><span class="txt">현재 카자흐스탄 내 계측기기등록은 “Committee for Technical Regulation and Metrology of the Ministry of Industry and New Technologies of the Republic of Kazakhstan” 에서 관리, 감독한다. 카자흐스탄 계측관청은 등록 신청 된 계측기기를 검토, 시험 후 인증서를 발행합니다. </span></p> <br><br><br><br><br>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="business_info">
		<ul>
			<li style="height:50%;"><img src="../russia/image/EAC24_Ex_PAC1.jpg" alt="계측기기 K인증(PAC K) 적용 범위" style="width:40%;display:block;margin:auto;"></li>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">계측기기 K인증(PAC K) 적용 범위</span></p>
						<!------p><span class="txt">현재 카자흐스탄 내 계측기기등록은 “Committee for Technical Regulation and Metrology of the Ministry of Industry and New Technologies of the Republic of Kazakhstan” 에서 관리, 감독한다.카자흐스탄 계측관청은 등록 신청 된 계측기기를 검토,시험 후 인증서를 발행합니다. </span></p----->
					</div>
					<div class="txt02">
					<ul>
                        <li> 의약품</li>
                        <li> 수의학</li>
                        <li> 환경 보호</li>
                        <li> 비상 상황의 비즈니스 관리</li>
                        <li> 작업장 내 예방</li>
                        <li> 산업 활동에서의 예방</li>
                        <li> 상품 교역 및 교환</li>
                        <li> 제품의 포장 및 중량</li>
                        <li> 공공회계</li>
                        <li> 우편 서비스</li>
                        <li> 급수 서비스, 전기 및 가스 공급</li>
                        <li> 안보 및 국방</li>
                        <li> 측지 및 지도 제작</li>
                        <li>기상 관측 서비스</li> 
                    </ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div>
		<ul>
			<!------li class="left_box"><img src="./image/measure_divices_kazahstan.jpg" alt="이미지"></li------>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">계측기기 K 인증(PAC K) 등록 대상 품목</span></p>
					</div>
					<div class="txt02">
					<ul>			
                        <li> 수량, 질량 등을 계량하는 기기</li>
                        <li> 산업용 측정기기, 기구 및 장비류</li>
                        <li> 육상 및 해양 관련 조사/측량 관련 기기</li>
                        <li> 각종 노동현장 안전 관련 기기</li>	<br><br><br><br><br><br>
					</ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div>
		<ul>
			<!------li class="left_box"><img src="./image/measure_divices_kazahstan.jpg" alt="이미지"></li------>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">계측기기 K 인증(PAC K) 유효기간</span></p>
						<p><span class="txt">계측장비 인증서의 최대 유효 기간은 5 년입니다. </span></p>   <br><br><br><br><br><br>
					</div>
				</div>
				
			</li>
		</ul>
		</div>
		
		
		
		<div>
		<ul>
			<!------li class="left_box"><img src="./image/measure_divices_kazahstan.jpg" alt="이미지"></li------>
			<li>
				<div class="txt_area">
					<div class="txt01">
						<p><span class="tit">계측기기 K 인증(PAC K) 제출 서류</span></p>
					</div>
					<div class="txt02">
					<ul>			
                        <li> 테스트용 샘플 장비</li>
                        <li> 제품설명서</li>
                        <li> 내부 테스트 보고서</li>
                        <li> 기존 인증서</li>       <br><br><br><br><br><br>  
					</ul>
					</div>
				</div>
			</li>
		</ul>
		</div>
		

	      <h2 class="con_arrow"><p><strong style="color:#1F88E5;">RUS-TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
		  <div class="con_box">
		  	<ul>
		  		<li><p><em><strong>01</strong></em><span>EAC 및 GOST 인증 서비스</span></p></li>
		  		<li><p><em><strong>04</strong></em><span> Eurasia Representative 서비스</span></p></li>
		  		<li><p><em><strong>02</strong></em><span> 국가위생등록, 의료기기 등록, 계측기기 등록, 사용허가, 화재안전 등의 유라시아 인증 서비스</span></p></li>
		  		<li><p><em><strong>05</strong></em><span> 제품설명, 서류검증, 기술문서 등 인증에 필요한 서류의 러시아어 번역 및 심사에 따른 통역지원</span></p></li>
		  		<li><p><em><strong>03</strong></em><span> 인증에 필요한 시험 및 시험 성적서 발생 서비스</span></p></li>
		  	</ul>
		  </div>
		  
	</div>
     </article><!--+++++ 컨텐츠 06 계측기기 K종료 +++++-->

   </div><!-------div class="tab_con" 종료------>               
	            
	                  
	   
</div>  <!----------/ content_wrap 종료  /------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->





<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>
<!-----?php
	include "../include/tail.php"; 
?---->