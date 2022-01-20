<?php 	
	include "../../../../common.php";
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "러시아"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "러시아"; //커스텀페이지의 타이틀을 입력합니다.
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
<!----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"---->

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
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
	.business_type5 ul li dl dd{width:60%; padding:50px 0; padding-top:30px; padding-left:5%;padding-right:3%;text-align:justify;}
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
	}
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */    
</style>

<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
    <!--------------
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">TRCU EAC</span> 인증 러시아(RUSSIA)</h1>
		<h2 class="sub_txt">러스테스트 퍼스픽의 다양한 사업영역을 소개합니다.</h2>
	</div>
    -------------->
    
    
    <!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">TRCU EAC</a></li>
			<li><a href="javascript:;">GOST R</a></li>
			<li><a href="javascript:;">방폭인증</a></li>
			<li><a href="javascript:;">ISE산업안전평가</a></li>
			<li><a href="javascript:;">화재안전</a></li>
			<li><a href="javascript:;">위생등록</a></li>
			<li><a href="javascript:;">의료기기 등록</a></li>
			<li><a href="javascript:;">계측기기 인증(PAC)</a></li>
			<li><a href="javascript:;">러시아 통신인증</a></li>
			<li><a href="javascript:;">Rejection Letter</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
<!--+++ Mark 20.06.09 탭 컨텐츠 영역 +++-->
<div class="tab_con">
		
 <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
 <article style="display:block">
 
	<div class="business_type5" class="area">
	     <h1 class="sub_tit"><span class="fc_pointer">TRCU EAC</span> 러시아 (RUSSIA)</h1>
		<!----h1>TRCU EAC 인증서 개요</h1---------->
		<!------h2>RUS-TEST PACIFIC 러스테스트 퍼시픽</h2----->		
		<h3 style="text-align:justify;">
			TRCU는 Technical Regulation of Customs Union의 약어로  <br class="sn">러시아를 중심으로 한 관세동맹(Customs Union)의 기술규정을 의미합니다.
			TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시안 관세동맹 “EACU, Eurasian Customs Union”을 시작으로,<br class="sn"> 2015년 유라시안 경제연합 “EEU, Eurasian Economic Union”에서 발효 한 통합 인증제도입니다.
			현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어있으며, TRCU인증은  <br class="sn">유라시안 경제 위원회 결정을 따라 규정된 인증절차를 따릅니다.
            <br>
			인증서 상에는 EAC 마크가 부착되며 <br class="sn">이는 Eurasian Conformity를 뜻합니다. 
		</h3>
		
		<a href="#" style="width:30%;display:block;margin:auto;"><img src="./image/eac_mark01.png" alt="EAC마크"><p style="width:30%;display:block;margin-left:auto;margin-right:auto;">EAC 공식 마크</p></a><br><br><br>

		<ul>
			<li style="display:block;padding:20px;">
				<dl>
					
                  
                   <!--------------/ TRCU 관계법령 시작 /----------------------->
                    <!----dd> </dd---->
                    <strong style="display:block;font-size:2em;padding:10px;">TRCU 관계 법령</strong><br>
                    [TRCU 세부 목록은 다음과 같습니다.]<br><br>				    
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
                    </table> <!--------------/ TRCU 관계법령 테이블 종료 /----------------------->
				</dl>
			</li>
<br>
			<li>
				<dl>
					<dt>
					<br>
					    <div id="eac_CoC" style="width:50%;margin-left:auto;margin-right:auto;padding-top:30px;">
						 <img src="./image/eac_mark03_CoC.png"><br>
						 <span style="display:block;text-align:center;margin-bottom:20px;">TRCU EAC 인증서 유형 1 - TRCU CoC</span>
				        </div>
					
						<div id="eac_Doc" style="width:50%;margin-left:auto;margin-right:auto;">
						 <img src="./image/eac_mark04_DoC.png">
						 <span style="display:block;text-align:center;margin-bottom:20px;">TRCU EAC 인증서 유형 2 - TRCU DoC</span>
						</div>
					</dt>
					
					<dd>
						<strong>TRCU EAC 인증서 유형</strong>
                        <p>TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두가지로 나눠집니다.</p>
 
                            <li><span style="color:red;">&nbsp; &nbsp;TRCU CoC</span>&nbsp;<br> 
                                    &nbsp; &nbsp; 압력 용기류, 수공구류, 크레인, 승강기, 일부 기계류, 시험장비, 전기전자제품 등의 제품군이 해당되며 샘플시험 또는 공장심사가 요구됩니다.</li>
                                     <br>
                                     
                                     
                            <li><span style="color:red;">&nbsp; &nbsp;TRCU DoC</span>&nbsp;<br>
                                    &nbsp; &nbsp; 위험성이 비교적 적은 일반 제품에 해당되며 일부 제품은 서류심사로 인증서 발급이 가능합니다.</li>
                                     <br>
 
                        <p>CoC의 경우 지정시험소를 통한 제품 시험을 원칙으로 하고 있으나 다수의 인증기관에서 추가 시험 없이 CB Safety 성적서 등을 인정하여 인증서를 발행하고 있습니다.   
					</dd>
				</dl>			
			</li>
			<br><br>
			<li>
				<dl>
				
					<dt>
					<div>
						<img src="./image/eac_mark05.jpg" alt="인증서 유효기간"  style="width:100%;margin-left:auto;margin-right:auto;">
				    </div>
					</dt>
					<dd >
						<strong>TRCU EAC 인증서 유효기간</strong>
                        <p><span  style="font-weight:bold;">단일 선적에 대한 인증(One-Shipment: Single Delivery Certification)</span><br>
                         주로 플랜트 등 단발성(1회성)으로 수출하는 물품인 경우와 제 3자나 다른 일반적인 소비자에게 재판매가 되지 않는 경우에 해당하며 수입자와의 계약서에 표기된 계약이행 기간까지 유효합니다.</p>
                        <p><span  style="font-weight:bold;">연속 생산(Serial Production Certification)</span><br>
                         계속적인 수출이 예상되는 경우에 유리하며 한 번의 인증을 통해 최대 5년까지 유효한 인증서를 받을 수 있습니다.</p>
					</dd>
				</dl>	
			</li>

			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark08.png" alt="TRCU EAC 인증 절차" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>TRCU EAC 인증 절차</strong>
                        1. 인증기관에 신청서 및 제품 관련 서류 제출<br><br>
                        2. 서류 검토<br><br>
                        3. 적용되는 인증서 유형 확인<br><br>
                        4. 샘플 시험 및 공장심사 여부 확인<br><br>
                        5. 견적서 발행 및 계약<br><br>
                        6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행<br><br>
                        7. 공장심사 필요 시, 심사 진행<br><br>
                        8. 인증서 초안 발행 및 고객 확인<br><br>
                        9. 인증서 발행<br><br>
					</dd>
				</dl>				
			</li>

			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark07.jpg" alt="TRCU EAC 제출서류" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>TRCU EAC 제출서류</strong>
						제출서류는 다음과 같습니다. (국한되지 않으며 필요에 따라 추가될 수 있습니다.)
                        <p>HS Code</p>
                        <p>제품 설명서 (러시아어 또는 수출국 언어)</p>
                        <p>기 보유 시험 성적서</p>
                        <p>기 보유 인증서</p>
                        <p>도면 (해당 시)</p>
                        <p>기술문서 (해당 시)</p>
                        
					</dd>
				</dl>				
			</li>
	
			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark08.jpg"alt="EAC인증신청서"  style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong> 유라시아 인증 신청자</strong>
                        <p>TRCU인증, GOST R인증 등을 신청할 경우 러시아 또는 기타 관세동맹 국가에서 위치한 업체만 신청자가 될 수 있습니다. 해당 업체는 법적실체 또는 개인사업자여야 하며 일반인은 인증의 신청자가 될 수 없습니다.</p>
                        <p>RUS-TEST PACIFIC은 유라지아 지역 내에 신청자 역할을 할 수 있는 사업자가 없는 고객을 위해 Eurasia Representative 서비스를 제공하고 있습니다.</p>
					</dd>
				</dl>				
			</li>
	
			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark09.jpg" alt="Rosakkreditasiya 대장(Register)" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>Rosakkreditasiya 대장(Register)</strong>
                        <p>TRCU인증, GOST R인증은 <a href="https://www.fsa.gov.ru" style="color:blue;">Rosakkreditasiya 웹사이트</a>에 등록됩니다. 현재는 필수적 인증서만 Rosakkreditasiya 웹사이트에서 확인이 가능하며 자발적 인증서는 현재 시점에 확인이 불가능합니다. &nbsp;상세한 확인 절차는 자료실에 등록된 파일을 통해 확인하실 수 있습니다.<br>
                        
                        <a href="https://www.fsa.gov.ru" style="color:blue;">Rosakkreditasiya 웹사이트 바로가기</a>
                        </p>
					</dd>
				</dl>				
			</li>
			
			<br><br><br>
			
          <!-------고객 혜택 시작 -------------->
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">고객님께 드리는 혜택</strong></p></h2>
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
        
	  </div> <!-------/business_type5 종료/------------->
    
     </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   
       
       
       
    <article><!--+++++ 컨텐츠 02 시작 +++++--> 
     <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">GOST R</span>&nbsp; 인증 러시아 (RUSSIA)</h1><br><br>
		
			    <h1>GOST R 인증서 개요</h1>
		        <h2>RUS-TEST PACIFIC 러스테스트 퍼시픽</h2>		
		
		<h2 class="sub_txt" style="text-align:left;">GOST는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.<br>
        현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은 GOST-K 등으로 구분지어 불리고 있습니다.</h2>
		<h2 class="sub_txt" style="text-align:left;">GOST-R은 러시아에서 발행하는 러시아기술표준 인증서입니다. 관세동맹국가 간 발효된 통합 인증제도의 도입 이후 러시아 내에서 GOST-R 인증 비중은 예전에 비하여 크게 줄었습니다. 하지만 아직 관세동맹국간에 협의가 이루지지 않은 강제인증 품목들에 한해서는 여전히 수입통관 시 GOST-R 인증이 요구됩니다.</h2>	
	</div>

	<div class="business_type5" class="area">
		<br>
		<ul>
			<li>
				<dl>
					<dt>
					<br>
					<div id="eac_CoC" style="width:80%;margin-left:auto;margin-right:auto;">
						<img src="./image/eac_mark03_2_CoC.png"  style="width:95%;margin-left:auto;margin-right:auto;">
						 <p style="text-align:center;">GOST R CoC</p>
						</div>
					<br><br><br>
						<div id="eac_Doc" style="width:80%;margin-left:auto;margin-right:auto;">
						<img src="./image/eac_mark04_2_DoC.png"  style="width:95%;margin-left:auto;margin-right:auto;">
						 <p style="text-align:center;">GOST R DoC</p><br>
						</div>
						<br><br><br>
						<div id="eac_Doc" style="width:80%;margin-left:auto;margin-right:auto;">
						<img src="./image/eac_mark04_3_voluntary.png" style="width:95%;margin-left:auto;margin-right:auto;">
						 <p style="text-align:center;">GOST Voluntary(자발적 GOST)</p><br>
						</div>
						<br>				
					</dt>
					<br>
					<dd>
						<strong>GOST R 인증서 유형</strong>
						<p>GOST R CoC</p>
						<span>의무적으로 적합성 인증을 받아야하는 대상에 대해 발급됩니다. GOST R CoC는 러시아로 수입되는 물품에 대해 아이템 및 제조공정라인이 러시아 안전 규정에 따라 적합함을 인증해주는 인증서이며, GOST R CoC의 발행은 인정을 받은 인증기관(Accredited Certification Body) 에서 이루어져야 합니다.</span><br><br><br><br><br><br><br><br><br><br><br>
						
						<p>GOST R DoC</p>
						<span>의무적으로 적합성 선언을 받아야하는 대상에 대해 발급됩니다. 적합성 선언(GOST R DoC)은 의무적인 적합성인증(GOST R CoC)에 비해 간소화된 유형의 인증서입니다.</span> <br><br><br><br><br><br><br><br><br><br><br><br>
						
						<p>GOST Voluntary(자발적 GOST)</p>
						<span>GOST Voluntary는 의무적으로 GOST 인증을 받아야 하는 제품은 아니지만 제품이 적용 규정과 지침에 따라 만들어 졌음을 증명하는 인증서로, EAC 인증을 받는 기업이 GOST Voluntary를 추가적으로 신청하여 받을 경우 기업의 홍보, 신뢰 확보 등의 효과가 있습니다.</span><br><br><br><br><br><br><br>
						
					</dd>
				</dl>
			</li>
			<br><br>
			<li>
				<dl>
					<dt>
						<img src="./image/GOST05_R.jpg" alt="GOST 인증 유효기간" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<br>
					<dd>
						<strong>GOST R 인증 유효기간</strong>
						<p>GOST R 인증은 최소 1년에서 최대 3년까지 유효합니다.  </p>

					</dd>
				</dl>			
			</li>
			<br><br>
			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark04_3_voluntary.png" alt="TRCU EAC 인증 절차" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>GOST R 인증 절차</strong>
                        <li>1. 인증기관에 신청서 및 제품 관련 서류 제출</li><br>
                        <li>2. 서류 검토</li><br>
                        <li>3. 적용되는 인증서 유형 확인</li><br>
                        <li>4. 샘플 시험 및 공장심사 여부 확인</li><br>
                        <li>5. 견적서 발행 및 계약</li><br>
                        <li>6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</li><br>
                        <li>7. 공장심사 필요 시, 심사 진행</li><br>
                        <li>8. 인증서 초안 발행 및 고객 확인</li><br>
                        <li>9. 인증서 발행</li>
					</dd>
				</dl>	
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/02_1.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>GOST R 인증 제출서류</strong>
                        <p>신청서 - (자료실에서 신청서 양식을 다운 받으실 수 있습니다.)</p>
                        <p>HS Code</p>
                        <p>제품 설명서&nbsp; (러시아어 또는 수출국 언어)</p>
                        <P>기 보유 시험 성적서</P>
                        <P>기 보유 인증서</P>
                        <P>도면 (해당 시)</P>
                        <P>기술문서 (해당 시)</P> 
					</dd>
				</dl>				
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark11.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong> 러시아 인증 신청자</strong>
                        <p>TRCU인증, GOST R인증 등을 신청할 경우 러시아 또는 기타 관세동맹 국가에서 위치한 업체만 신청자가 될 수 있습니다. 그 업체는 법적실체 또는 개인사업자여야 하며 일반인은 인증의 신청자가 될 수 없습니다.</p>
                        <p>RUS-TEST PACIFIC은 유라지아 지역 내에 신청자 역할을 할 수 있는 사업자가 없는 고객을 위해 Eurasia Representative 서비스를 제공하고 있습니다.</p>
					</dd>
				</dl>				
			</li>
			
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark09.jpg" alt="Rosakkreditasiya 대장(Register)" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>Rosakkreditasiya 대장(Register)</strong>
                        <p>TRCU인증, GOST R인증은 <a href="https://www.fsa.gov.ru/">Rosakkreditasiya 웹사이트</a>에 등록됩니다. 현재는 필수적 인증서만 Rosakkreditasiya 웹사이트에서 확인이 가능하며 자발적 인증서는 현재 시점에 확인이 불가능합니다. &nbsp;상세한 확인 절차는 자료실에 등록된 파일을 통해 확인하실 수 있습니다.<br>
                        
                        <a href="https://www.fsa.gov.ru/" style="color:blue;">Rosakkreditasiya 웹사이트 바로가기</a>
                        </p>
					</dd>
				</dl>				
			</li>
			
		  <!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
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
    </article><!--+++++ 컨텐츠 02 종료 +++++--> 
       
       
       
  <article><!--+++++ 컨텐츠 03 방폭인증 시작 +++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">방폭인증</span>&nbsp;러시아 (RUSSIA)</h1>
		<h2 class="sub_txt">TR CU 012/2011 폭발 위험 환경에서의 장비 안전</h2>
	</div>
	
	<div>
	<a href="#" style="width:30%;display:block;margin:auto;"><img src="./image/EAC01_Ex_mark.jpg" alt="EAC마크"><p style="width:30%;display:block;margin-left:auto;margin-right:auto;">TRCU EAC Ex</p></a><br><br>
	</div>
	
	
	<div class="business_type5" class="area">
		<h2>TRCU EAC Ex 방폭인증 개요</h2>
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
						<img src="./image/EAC03_Ex_CoC.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
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
						<img src="./image/EAC02_Ex_CoC.png" style="width:95%;margin-left:auto;margin-right:auto;">
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
						<img src="./image/EAC04_Ex_CoC.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
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
						<img src="./image/EAC05_Ex_CoC.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
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
						<img src="./image/EAC06_Ex_CoC.png" style="width:95%;margin-left:auto;margin-right:auto;">
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
						<img src="./image/EAC07_Ex_CoC.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
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
						<img src="./image/EAC08_Ex_CoC.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
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
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
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
    </article><!--+++++ 컨텐츠 03 방폭인증 종료 +++++--> 
       
         
    <article><!--+++++ 컨텐츠 04 시작 +++++-->     
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">ISE 산업안전평가</span>&nbsp; 러시아 (RUSSIA) </h1>
		<h2 class="sub_txt">ISE는 Industrial Safety Expertise의 약어로, 건물 또는 시설물 완공 후 산업전문평가원이 진행하는 평가절차를 의미합니다.</h2>
	</div>
	
	<div class="business_type5" class="area">
		<h1>ISE 개요</h1>
		<h3 style="text-align:left;">
			평가 결과는 하나의 보고서로 작성되며, 평가는 No.116-ФЗ, 21.07.1997 “Industrial Safety in Hazardous Industrial Facilities”에 따라 Rostechnadzor에서 규정 한 안전평가항목을 확인한 보고서입니다. <br>
			기존 RTN 사용허가(RTN permit to use)를 대체하여 도입된 ISE는 위험산업군이나 품목으로 분류된 기계, 설비, 장비, 시설에 대해 인간에 유해하거나 생태학적 위험을 초래할 수 있는 요소를 평가하고, 이는 Law of Rostechnadzor No. 538, 14.11.2013 가이드라인에 따라 작성됩니다.<br class="sn">
			ISE는 위험산업군으로 분류된 기계, 설비, 시설 등의 디자인 도면, 공준비단계부터 건설, 증축, 재건축, 프로젝트 비활성화, 폐기 등의 단계 때에도 필요 한 절차입니다.<br>
            주요 대상 산업군으로는 유해물질 운수송시설, 석유, 화학, 정유공장, 발전시설 등이 있습니다.<br class="sn">

		</h3>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/EAC09_Ex_CoC.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>ISE 절차 </strong>
						2014년 부로, 기존 Rostechnadzor의 심사를 거쳐 발급되던 사용허가증은 Order of Rostekhnadzor No.538, 14.11.2013 (registered Ministry of Justice of Russia 26.12.2013, reg. no. 30855) 에 따라 산업전문평가요원으로 등록 된 전문가가 진행 한 Industrial Safety Expertise 보고서로 대체 되었습니다.

						<p>산업안전을 평가하는 주체가 정부기관에서 등록된 전문가로 바뀌었을 뿐 연방법 No.116-ФЗ, 21.07.1997에서 명시한 안전법규 검토사항 및 준비자료, 기본절차 등은 기본적으로 동일합니다.</p>
						<p>PJT의 범위 및 과정 검토 (Examination of scope and course of the PJT)</p>
						<p>현장 검사 준비 (Preparation of examining spots)</p>
						<p>스케쥴, 재료 및 준비 사전 문서 작업에 대한 전문가 평가 (Schedule the timeline)</p>
						<p>다음 사항의 검토 및 분석 (Review and analysis of) </p>
						<li>&nbsp; &nbsp; *PJT 범위 및 작업 흐름 (PJT scope and work flow)
                        <li>&nbsp; &nbsp; *시공, 운영, 유지보수 (Construction, operation, maintenance)</li>
                        <li>&nbsp; &nbsp; *위험 지역에 대한 안전 설명 (Safety statement on hazardous areas)</li>
                        <li>&nbsp; &nbsp; *기술 문서 및 인증서 (Technical passports and certificates)</li>
                        <li>&nbsp; &nbsp; *테스트 프로토콜 및 보고서 (Test protocols and reports)</li>
                        <li>&nbsp; &nbsp; *라벨링 및 식별 시스템 (Labeling and identification systems)</li>
                        <li>&nbsp; &nbsp; *기술 규정, 지침 및 PJT 운영 정책 (Technical standards, guidelines, PJT management policies)</li>
                        <li>&nbsp; &nbsp; *설계 보고서 및 검사 결과의 역량 (Competence of design reports and inspection results)</li>
                        <li>&nbsp; &nbsp; *직원 및 경영진의 역량 (Competence of employees and managements)</li>
                        <li>&nbsp; &nbsp; *장치 및 기기의 성능 (Competence of devices and instruments)</li>
						<p>기타 (Others)</p>
					</dd>
				</dl>
			</li>

         <!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
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
    </article><!--+++++ 컨텐츠 04 종료 +++++--> 
       
       
       
       
       <article><!--+++++ 컨텐츠 05 회재안전 시작 +++++-->
           <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">화재안전 인증</span> 러시아 (RUSSIA)</h1>
		<h2 class="sub_txt">제품의 “화재 안전성”에 관한 증명을 받는 인증</h2>
	</div>
	
	<div class="business_type5" class="area">
		<h1>화재안전 개요</h1>
		<h3 style="text-align:justify;"> 
           화재안전인증은 러시아 연방법 Federal Law No.123 of 22.06.2008에서 승인한 “Technical Regulation on Fire Safety, entered into force on 01.05.2009”에 따라 제품의 적합성 인증 (GOST R 또는 TRCU)을 받기 전 제품의 “화재 안전성”에 관한 증명을 받는 인증입니다. <br class="sn"><br>
            특정 제품의 경우 러시아 세관 영토에 수출하기 위해 세관 당국이 요구하는 화재 안전 증명서가 있습니다. 화재안전증명서는 화재규정 준수 여부를 확인하는 공식증명입니다. <br class="sn"><br>
            화재안전증명서 요건은 러시아 국내 제품과 수입되는 제품 모두에 적용됩니다. 인증은 "기술 규정"의 규정에 따라 실시합니다. 화재 안전 인증은 러시아에 대한 특정 유형의 물품의 수입과 러시아 시장에 대한 보급을 위해 필요합니다.<br class="sn"><br>
            러시아에서는 화재안전인증을 의무적 또는 자발적 방법으로,<br class="sn"> 선언 형태로 실시할 수 있습니다.
		</h3>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/EAC10_Ex_trcueac.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>화재안전 대상 품목</strong>
						이 규정은 다음과 같은 제품군을 포함합니다.<br>
						<p>소방장비: 소화기, 소방호스 등</p>
						<p>전원 케이블</p>
						<p>가스난방시스템</p>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC11_Ex_trcueac.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>화재안전 인증서 유효기간</strong>
						<p>화재안전 증명서는 5년간 유효합니다.</p>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC12_Ex_trcueac.png" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>화재안전 인증 절차</strong>
                        <span>1. 인증기관에 신청서 및 제품 관련 서류 제출</span><br><br>
                        <span>2. 서류 검토</span><br><br>
                        <span>3. 적용되는 인증서 유형 확인</span><br><br>
                        <span>4. 샘플 시험 및 공장심사 여부 확인</span><br><br>
                        <span>5. 견적서 발행 및 계약</span><br><br>
                        <span>6. 샘플 발송 후 시험 및 시험 성적서 발행</span><br><br>
                        <span>7. 공장심사 필요 시, 심사 진행</span><br><br>
                        <span>8. 인증서 초안 발행 및 고객 확인</span><br><br>
                        <span>9. 인증서 발행</span><br><br>
					</dd>
				</dl>	
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC07_Ex_CoC.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
                        <strong>화재안전 인증 제출 서류</strong>
                        <p>신청서 - (자료실에서 신청서 양식을 다운 받으실 수 있습니다.)</p>
                        <p>HS Code </p>
                        <p>제품 설명서 (러시아어 또는 수출국 언어)</p>
                        <p>기술문서: 작동 지침, 기술 도면 </p>
                        <p>기 보유 인증서</p>
                        <p>기타 필요 문서</p>
					</dd>
				</dl>				
			</li>
			
			<!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
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
       </article><!--+++++ 컨텐츠 05 화재안전 종료 +++++--> 
       
       
       
       
       <article><!--+++++ 컨텐츠 06 위생등록 시작 +++++-->
           
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">위생등록</span> 러시아 (RUSSIA)</h1>
	</div>
	
	<div class="business_type5" class="area">
		<h1>국가위생등록 (SGR) 개요 </h1>
		<h2> State Registration Certificate</h2>		
		<h3 style="text-align:justify;">
			기존 국가별로 발행되던 위생등록증이 관세동맹국에 의해 2010년 채택된 Decision of CU commission No.299에 의거하여 하나로 통합되었습니다.<br class="sn"> <br>
            하나의 인증서로 유라시아 관세동맹 5개국 (러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)에서 모두 사용 가능합니다.<br class="sn"> <br>
            규정에 해당하는 제품은 State Registration Certificate를 받아야 EAC 인증이 가능하며 관세동맹 국가로 수출이 가능합니다. <br class="sn"> <br>
            국가위생등록은 식품과 화장품의 경우 발행 요구대상이 될 수 있습니다.<br class="sn"> <br><br><br>

			<li>
				<dl>
					<dt> 
						<img src="./image/EAC13_Ex_trcueacSGR.png" style="display:block;width:30%;position:relative;margin-right:auto;margin-left:auto;">
				        <p style="text-align:center;">State Registration Certificate 샘플</p><br>
						
					</dt>
                        <br>
                </dl>
            </li>
		</h3>
		
		<ul>
		
			<li>
				<dl>
					<dt>
						<img src="./image/EAC15_Ex_sgr.jpg" style="width:95%;margin-left:auto;margin-right:auto;">
						
					</dt>
					<dd>
						<strong>국가위생등록 (SGR) 적용 품목 (식품)</strong>
                        <p>미네랄 워터, 생수, 청량 음료, 주류 – 저 알코올 및 토닉 음료 포함</p>
                        <p>이유식, 임산부 및 모유 수유 여성을 위한 음식, 식이 제품, 운동 선수를 위한 음식, 생물학적 활성 
                           식품 첨가물, 유기농 제품, 보충제를 포함한 특수 식품</p>
                        <p>식품 첨가제 (식물 추출물, 아로마 등)</p>
                        <p>유전자 변형 (형질 전환) 유기체를 사용하여 생산된 식품</p>
                        <p>식수 공급용 물 사용을 위한 재료, 기기, 장비 및 기타 기술 제품</p>
                        <p>식품 접촉용 제품 (수저류, 식기류, 제조 장비 제외)</p>
						
						
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC14_Ex_sgr.jpg" style="width:95%;margin-left:auto;margin-right:auto;" alt="국가 위생등록-식품">
					</dt>
					<dd>
						<strong>국가위생등록 (SGR) 적용 품목 (화장품)</strong>
						성분, 기능, 목적에 따라 특수 화장품으로 분류되는 화장품은 국가위생등록증을 필수로 받아야 합니다.
                        <p>태닝을 위한 제품</p>
                        <p>미백 제품</p>
                        <p>타투용 제품</p>
                        <p>인티메이트 케어</p>
                        <p>개인이 유해 인자의 영향으로 부터 피부를 보호하기 위한 용도의 향수나 화장품</p>
                        <p>유아용 화장품 (14세 이하의 어린이를 위한 제품)</p>
                        <p>염색, 탈색 제품</p>
                        <p>파마, 헤어 스트레이트를 위한 제품</p>
                        <p>나노물질을 사용한 향수 및 화장품 (나노물질: 불용성 또는 체내 안정성 물질이며, 내부 또는
                           외부의 입자 크기가 1~100nm의 범위 내로 특별히 제조된 것)
                        <p>제모 제품</p>
                        <p>필링제 (화학적 필링. 각질 제거제를 사용하여 표피의 표면 세포를 제거하기 위한 제품)</p>
                        <p>불소 함량이 0.15% 이상인 불소 구강 위생 제품 (구강위생용 액상제품은 0.05% 이상)</p>
                        <p>산화 수소가 들어간 치아 미백 제품 또는 과산화수소로 농축된 과산화 아연과 과산화 요소를 함유하며,
                             과산화 수소를 생성하는 다른 구성품들 (0.1~6.0%)</p>
						
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC17_Ex_sgr.jpg" style="width:95%;margin-left:auto;margin-right:auto;" alt="국가 위생등록-식품">
					</dt>
					<dd>
						<strong>국가위생등록 (SGR) 유효기간</strong>
						<p>5년 (인증서에 등록된 해당제품이 단종될 때까지 유효합니다.)</p>
				</dl>	
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC16_Ex_sgr.png" style="width:95%;margin-left:auto;margin-right:auto;" alt="국가 위생등록-식품">
					</dt>
					<dd>
						<strong>국가위생등록 (SGR) 절차</strong>
						<span>1. 인증기관에 신청서 및 제품 관련 서류 제출</span><br><br>
                        <span>2. 서류 검토</span><br><br>
                        <span>3. 적용되는 인증서 유형 확인</span><br><br>
                        <span>4. 공장심사 여부 확인</span><br><br>
                        <span>5. 견적서 발행 및 계약</span><br><br>
                        <span>6. 샘플 발송 후 시험 및 시험 성적서 발행</span><br><br>
                        <span>7. 공장심사 필요 시, 심사 진행</span><br><br>
                        <span>8. 위생등록증 발행</span><br><br>
					</dd>
				</dl>	
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC18_Ex_sgr.jpg" style="width:95%;margin-left:auto;margin-right:auto;" alt="국가 위생등록-식품">
					</dt>
					<dd>
						<strong>국가위생등록 (SGR) 제출 서류</strong>
						<p>신청서 - (자료실에서 신청서 양식을 다운 받으실 수 있습니다.)</p>
                        <p>HS Code</p>
                        <p>제품 설명서 (러시아어)</p>
                        <p>MSDS</p>
                        <p>제품 및 라벨 사본 (사진)</p>
                        <p>기 보유 시험 성적서</p>
                        <p>기 보유 인증서</p>
		
					</dd>
				</dl>	
			</li>

			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark09.jpg" style="width:95%;margin-left:auto;margin-right:auto;" alt="국가 위생등록-식품">
					</dt>
					<dd>
						<strong>Rospotrebnadzor 대장(Register) </strong>
                        <p>위생등록증(SGR) 인증서번호는 <a href="http://www.fp.crc.ru/">www.fp.crc.ru 웹사이트</a>에서 확인 가능하며, 또는 관세동맹 웹사이트에서도 확인이 가능합니다. 자세한 정보는 자료실에서 확인하시면 됩니다.</p>
                        <a href="http://www.fp.crc.ru/" style="color:blue;">www.fp.crc.ru 웹사이트 바로가기</a>
					</dd>
				</dl>	
			</li>

		<!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
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
       </article><!--+++++ 컨텐츠 06 위생등록 종료 +++++--> 
       
  
    <article><!--+++++ 컨텐츠 07 의료기기 등록 시작 +++++-->     
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">의료기기 등록</span> 러시아 (Russia)</h1>
		<h2 class="sub_txt">러시아에서 생산되거나 또는 러시아로 수출하려는 의료기기는 모두 등록이 되어야합니다.</h2>
	</div>
            <li>
				<dl>
					<dt> 
						<img src="./image/EAC20_Ex_mdr.jpg" style="display:block;width:50%;position:relative;margin-right:auto;margin-left:auto;">
				        <p style="text-align:center;">State Registration Certificate 의료기기 등록</p><br>
						
					</dt>
                        <br>
                </dl>
            </li>
            
	<div class="business_type5" class="area">
		<h1>의료기기 등록 개요</h1>	
		<h3 style="text-align:left;">			
			러시아에 의료기기를 등록시키기 위해선 비록 CE 혹은 FDA등의 승인을 위하여 시험 등이 이루어 졌더라도 강제적인 요구 사항에 의하여 별도의 시험 등이 이루어 져야 하는 시간과 비용이 많이 소요됩니다. 러시아는 EU 또는 미국과 인증과 관련한 협약을 맺지 않았기 때문에 EU의 CE 인증 또는 미국 FDA승인 등과 같은 국제적으로 인정된 인증서를 인정하지 않습니다.<br class="sn"><br><br>
            2002년 이후로 러시아 정부는 시험에 대한 부분을 제품안전 보장 등의 다른 형태인 생산현장 심사, 품질시스템 확인 및 시판 이후의 지속적 관리로 변경을 시작하였습니다. 하지만 그러한 시도는 성공을 거두지 못하였고 따라서 2013년 1월 1일부터 이러한 절차는 보다 강력하면서 현실적인 형태로 운영되게 되었습니다.<br class="sn"><br>
		</h3>

		<ul>
			<li>
				<dl>
					<dt> <br>
						<img src="./image/EAC19_Ex_mdr.jpg" style="display:block;width:70%;position:relative;margin-right:auto;margin-left:auto;" Class 분류 alt="의료기기 등록증">
				        <p style="text-align:center;">의료기기등록증 샘플</p><br>	
					</dt>
					<dd>
						<strong>러시아 의료기기 등록증</strong>
						<p>건강 및 사회 발전 서비스를 제공하는 러시아 연방 보건 감독청인 Roszdravnadzor가 발행하는 공식 문서인 의료기기등록 인증서가 관련 의료기기에 대한 사전 평가를 통과하였기에 생산, 수입, 판매 및 러시아 내에서의 사용에 적합함을 승인하는 것입니다. 러시아에서 생산이 되었든 아니면 해외에서 러시아로 수입이 되었든 모든 의료기기는 등록이 되어야 합니다.</p>
						<p>등록 인증서에는 제조업체, 유통업자 또는 법정 대리인의 명칭이 포함됩니다. 암약 등록을 하고자 하는 의료기기가 다른 생산자가 제조 한 모듈/블록으로 구성되어 있지만 상표가 부착된 제품이 아닌 경우 각 모듈/블록은 개별적으로 등록하여야 합니다. 정부 법령 Jan. 17, 2002 N 19에 등재되어 있는 의료기기에 대하여 등록인증서가 있을 경우 생산 기업에게 부가세를 징수하지 않습니다.</p>
					</dd>
				</dl>
			</li>
	
			<li>
				<dl>
					<dt>
						<img src="./image/EAC21_Ex_mdr.jpg" alt="의료기기 등록 Class 분류" style="width:95%;margin-left:auto;margin-right:auto;" alt="국가 위생등록-식품">
					</dt>
					<dd>
						<strong>의료기기 Class 분류</strong>
						러시아에서 운영중인 의료기기에 대한 명명 및 등급은 Order N4H “About Conformation of Nomenclature Classification of Medical Devices”에 정리되어 있으면 이에는 체외진단 장비는 포함이 되지 않습니다.
						<p>Class 1 – 낮은 위험</p>
						<p>Class 2a – 중간 위험</p>
						<p>Class 2b – 높은 위험</p>
						<p>Class 3 – 최상위 위험</p>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC22_Ex_mdr.jpg" alt="의료기기 등록 진행 시험 종류" style="width:95%;margin-left:auto;margin-right:auto;" alt="국가 위생등록-식품">
					</dt>
					<dd>
						<strong>의료기기 등록 진행 시험 종류</strong>
						의료기기 등록에 따른 시험은 5월 06자의 2011 N 352법령에 따라 등록된 시험소에서만 진행이 가능하고, 임상 시험에 관해서는 이 기능을 수행할 수 있는 기관 목록이 Roszdravnadzor 웹 사이트에 게시되어 있습니다.
						<p>독성 시험</p>
						<p>기능 시험</p>
						<p>전자파 검사</p>
						<p>임상 시험</p>
					</dd>
				</dl>	
			</li>
	
			<li>
				<dl>
					<dt>
						<img src="./image/EAC17_Ex_sgr.jpg" alt="의료기기 등록 유효기간" style="width:95%;margin-left:auto;margin-right:auto;" alt="국가 위생등록-식품">
					</dt>
					<dd>
						<strong>의료기기 등록 유효기간</strong>
						영구 (인증서에 등록된 해당제품이 단종될 때까지 유효합니다.)
					</dd>
				</dl>	
			</li>
	
			<li>
				<dl>
					<dt>
						<img src="./image/EAC23_Ex_mdr.jpg" alt="의료기기 등록 절차" style="width:95%;margin-left:auto;margin-right:auto;" alt="국가 위생등록-식품">
					</dt>
					<dd>
						<strong>의료기기 등록 절차</strong>
						<span><h4>1단계</h4> 기업의 대리인은 Rosdravnadzor가 러시아로 샘플을 보내는 것에 동의하는 허가 신청을 해야 하며, 이 권한은 6 개월 동안 유효합니다. 또한 대리인은 신청 제품에 대한 설명, 시험소와의 계약서, 변호사 또는 제조업체와의 계약서 등을 제공하여야 합니다.</span><br><br>
                        <span><h4>2단계</h4> 대리인은 샘플이 세관을 통과할 수 있도록 수속을 하여야 합니다. 또한 대표자는 샘플 외에도 계약서, 세관 공무원에게 제출할 문서 및 송장을 제공하여야 합니다.</span><br><br>
                        <span><h4>3단계</h4> 인정을 받은 실험소에서 독성시험, 기술시험 및 전기제품의 경의 전자파 시험을 실시합니다.</span><br><br>
                        <span><h4>4단계</h4> (3단계와 동시 진행) 기업은 등록에 필요한 기술문서 전체를 준비하여야 합니다.</span><br><br>
                        <span><h4>5단계</h4> 의료 기기의 등급을 확정하고, 러시아에 등록된 유사 의료기기가 없는 경우 첫 번째 단계로 품질 평가, 효율성 및 안전성 시험이 실시되고, 그 이후 두 곳의 다른 의료기관에서 임상평가가 실시되어 두 번째 단계의 품질 평가, 효율성 및 안전성 평가가 수행됩니다.  </span><br><br>
                        <span><h4>6단계</h4> 기업은 전체 기술문서를 Rospotrebnadzor에 제출합니다. 의료기기등록을 마친 후, 등록증을 근거로 GOST-R 인증서와 품목에 따른 위생인증서 및 제품의 특성에 따라 계측기 인증서를 확보하여야 합니다.</span><br><br>
					</dd>
				</dl>	
			</li>

			<li>
				<dl>
					<dt>
						<img src="./image/EAC18_Ex_sgr.jpg" alt="의료기기 등록 제출 서류" style="width:95%;margin-left:auto;margin-right:auto;" alt="국가 위생등록-식품">
					</dt>
					<dd>
						<strong>의료기기 등록 제출 서류</strong>
                        <p> 등록 및 인증 절차 진행에 따른 제조자의 위임장 (공증 요망)</p>
                        <p> 본국의 회사 등록 증빙 자료 (예로서 상공회의소 자료, 내면 FDA 등록에 따른 증빙 자료 혹은 회사 등록 인증서, 사업 허가증)들은 공증이 되어 제출하여야 합니다.</p>
                        <p> 의료기기 적용 가능한 국내 혹은 국제 기관 발행의 ISO 9001 혹은 ISO 13485 인증서 </p> 
                        <p>  93/42/EEC의 요구 사항에 따른 적합성 인증서, 적합성 선언서, 자유판매 증명서, FDA 인증 증빙 자료, 자국 혹은 기타 국에 대한 의료기기 인증 증빙 자료. (공증하여 제출하여야 함)</p>
                        <p> 안전을 입증하는 시험 성적서 (IEC 60601-1, IEC 60601-1-2, ISO 10993 등) – 정확한 성적서는 시험소에서의 기술검사시 업무를 간략히 하는데 도움을 줄 수 있습니다.</p>
                        <p> 독성안전 / 생체적합성에 대한 안전성 시험 성적서 </p> 
                        <p> 기술 및 독성 시험 진행을 위한 셈플 제공</p>
                        <p> 의료기기 신규 등록 신청서 혹은 갱신 등록 신청서. 신청서는 반드시 신청자 (러시아에서 등록을 수행할 권한이 있는 법인) 레터 헤드를 사용하여야 합니다. 신청은 해당 의료기기 혹은 장비에 포함되는 모든 구성품 및 부품에 대한 설명을 포함하여야 합니다. 신청은 러시아어로 제출하여야 합니다.</p>
                        <p> 신청 업무를 수행할 법적 대리인 선임에 대한 위임장을 제출합니다. 제조 회사는 등록 권한이 있는 법인 (법인 책임자에게 주소 지정)에게 위임장을 발급해 주어야 하며 제조업체의 원산지 국가에서 공증을 받아야합니다. 또한 러시아어로 번역되어야 하며 자국 소재의 러시아 영사관에서 공증을 받아야 합니다. 위임장은 제조업체가 신청자가 의료 기기/장비의 등록을 수행하고 상담 및 전문 작업을 수행한다는 계약에 서명하고 등록 인증서를 받도록 위임해야 한다고 명시해야 합니다.</p>
                        <li>-등록 프로세스에는 GMP (Good Manufacturing Practices) 심사가 필요하지 않습니다. 하지만 이러한 심사를 도입 할 법안은 가까운 시일 내에 시행 될 예정입니다.</li>
                        <li>-일반적으로 등록 비용은 필요한 테스트 범위에 따라 달라집니다.</li>
	
					</dd>
				</dl>				
			</li>
        
			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark09.jpg" alt="의료기기 등록 확인" style="width:95%;margin-left:auto;margin-right:auto;" alt="국가 위생등록-식품">
					</dt>
					<dd>
						<strong>의료기기 등록 확인</strong>
                         <p>러시아어 버전의  Roszdravnadzor 웹 사이트에서 의료 기기의 등록 상태를 확인할 수 있습니다. <br>( <a href=http://roszdravnadzor.ru/registration/mi/login> 바로가기 &nbsp; http://roszdravnadzor.ru/registration/mi/login</a> )</p>
                         <p>Class 1 및 2a의 의료기기의 경우 유사한 제품일 경우 (동일한 등급, 동일한 방법으로 적용, 동일한 효율) 두 제품이 동등하거나 기술 테스트, 안전을 기반으로 한다는 제조업체의 문서를 기반으로 등록되며 이는 작은 차이 만 있음을 확인하는 평가입니다.</p>
                         <p>Class 2b, 3, 1 및 2a 를 포함한 다른 모든 제품 (이미 등록을 마친 유사제품이 존재하지 않을 경우) 들은 효과 및 안전성을 확인하는 기술 테스트, 안전성 평가, 임상 및 의료 테스트를 기반으로 등록됩니다.</p>
                         <p>의료 기기의 등록 번호 및 등록 날짜는 최종 사용자가 이 정보를 확인할 수 있도록 포장에 표시되어야 합니다.</p>
					</dd>
				</dl>				
			</li>
	
         <!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
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
    </article><!--+++++ 컨텐츠 07 의료기기 등록 종료 +++++--> 
       
       
    <article><!--+++++ 컨텐츠 08 시작 +++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">계측기기 인증(PAC)</span> 러시아 (RUSSIA) </h1>
		<h2 class="sub_txt">THE PATTERN APPROVAL CERTIFICATE OF MEASURING INSTRUMENTS </h2>
	</div>
	

	<div class="business_type5" class="area">
		<h2 style="font-size:1.9em;color:#000;">계측기기 인증(PAC) 개요</h2>
		<h3>계측기기인증의 경우 측정 및 시험,<br> 분석장비의 모니터링 상태를 확인하는 프로세스</h3>		
		<h3 style="text-align:justify;">			
			PAC 인증은 The Pattern Approval Certificate of Measuring Instruments의 약어로 측정 및 시험, 분석장비의 모니터링 상태를 확인하는 프로세스입니다.<br class="sn"><br>
            계측기기인증서는 이러한 장비가 러시아에서 요구하는 기술 요구사항의 최소한의 요구사항을 충족하는 것을 의미합니다. 측정 테스트를 성공적으로 통과한 후 에는 러시아 영토내에서 승인된 측정기로써 정부에 등록(Rossrandart)되며 승인일자로부터 러시아에서 사용될 수 있습니다.<br class="sn"><br>
            필수 계측기기인증은 러시아 연방의 연방법률 “the Russian Federation № 102 "On Assurance of Measurement Uniformity(측정의 균일성의 보장)" of 26.06.2008”에 의해서 시행되고 있으며 오직 인증 및 승인된 계측장비만 사용될 수 있습니다.<br class="sn"><br>
		</h3>
		
		<li>
				<dl>
					<dt> 
						<img src="./image/EAC24_Ex_PAC.jpg" style="display:block;width:30%;position:relative;margin-right:auto;margin-left:auto;">
				        <p style="text-align:center;">PAC(The Pattern Approval Certificate of Measuring Instruments) 인증서</p><br>
						
					</dt>
                        <br>
                </dl>
            </li>
		
		
		
		
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/EAC26_Ex_PAC.jpg"  alt="계측기기 인증(PAC) 적용 범위" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>계측기기 인증(PAC) 적용 범위</strong>
                        <!------li>1. 필수적 인증</li>	
                        <li>2. 자발적 인증 - 자발적 도량형 인증서는 필수 계측기의 모니터링 및 인증 대상이 아닌 계측기의 품질 증명으로 사용됩니다. 그러나 자발적인 측정기 인증서는 특정 유형의 측정기에 대한 법률에서 요구하는 경우 의무 등록을 대체할 수 없습니다. 자발적인 도량형 인증 방법은 " On Assurance of Measurement Uniformity"러시아 연방 연방법에 의해 정의됩니다. 측정 장비의 자발적 인증은 Rosstandart에서 인증 한 인증 기관에 의해서만 수행될 수 있습니다. 자발적인 도량형 인증은 기술 규정의 요구 사항에 대한 기기의 적합성을 확인하고 소비자의 신뢰를 확보하기 위해 제조업체 또는 배포자의 주도에 따라 수행되어야 합니다.</li----->                         
                        <p> 보건 의료 (Healthcare)</p>
                        <p> 수의학 (Veterinary medicine)</p>
                        <p> 작업 안전 (Work safety)</p>
                        <p> 환경 보호 (Environmental protection)</p>
                        <p> 무기 산업 (Arms industry)</p>
                        <p> 운영 안전 (Operational safety)</p>
                        <p> 무역 (Trade)</p>
                        <p> 지도 제작 및 측지학 (Cartography and geodesy) 등</p>
					</dd>
				</dl>
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC24_Ex_PAC1.jpg"  alt="PAC(계측기기) 등록 대상 품목" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>계측기기 인증(PAC) 등록대상 품록</strong>                       
                        <p> 압력 게이지 (Pressure gauge)</p>
                        <p> 압력센서 및 스위치 (Pressure sensor and switch)</p>
                        <p> 온도 게이지 (Temperature gauge)</p>
                        <p> 온도 센서(열전대 & RTD) (Temperature sensor(Thermocouple & RTD))</p>
                        <p> 유량계기 (Flow gauge)</p>
                        <p> 이 외의 계측장비 (Other measuring devices)</p>
					</dd>
				</dl>
			</li>
				
			<li>
				<dl>
					<dt>
						<img src="./image/EAC27_Ex_PAC.jpg"  alt="계측기기(PAC) 인증서 유형" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>계측기기(PAC) 인증 유형</strong>
                        <!------li>1. 필수적 인증</li>	
                        <li>2. 자발적 인증 - 자발적 도량형 인증서는 필수 계측기의 모니터링 및 인증 대상이 아닌 계측기의 품질 증명으로 사용됩니다. 그러나 자발적인 측정기 인증서는 특정 유형의 측정기에 대한 법률에서 요구하는 경우 의무 등록을 대체할 수 없습니다. 자발적인 도량형 인증 방법은 " On Assurance of Measurement Uniformity"러시아 연방 연방법에 의해 정의됩니다. 측정 장비의 자발적 인증은 Rosstandart에서 인증 한 인증 기관에 의해서만 수행될 수 있습니다. 자발적인 도량형 인증은 기술 규정의 요구 사항에 대한 기기의 적합성을 확인하고 소비자의 신뢰를 확보하기 위해 제조업체 또는 배포자의 주도에 따라 수행되어야 합니다.</li----->                         
                        <p>필수적 인증</p>
                        <p style="text-align:justify;">자발적 인증: 자발적 도량형 인증서는 필수 계측기의 모니터링 및 인증 대상이 아닌 계측기의 품질 증명으로 사용됩니다. 그러나 자발적인 측정기 인증서는 특정 유형의 측정기에 대한 법률에서 요구하는 경우 의무 등록을 대체할 수 없습니다. 자발적인 도량형 인증 방법은 " On Assurance of Measurement Uniformity"러시아 연방 연방법에 의해 정의됩니다. 측정 장비의 자발적 인증은 Rosstandart에서 인증 한 인증 기관에 의해서만 수행될 수 있습니다. 자발적인 도량형 인증은 기술 규정의 요구 사항에 대한 기기의 적합성을 확인하고 소비자의 신뢰를 확보하기 위해 제조업체 또는 배포자의 주도에 따라 수행되어야 합니다.</p>
					</dd>
				</dl>
			</li>
	
			<li>
				<dl>
					<dt>
						<img src="./image/EAC17_Ex_sgr.jpg"  alt="계측기기(PAC) 인증서 유효기간" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>계측기기(PAC) 인증 유효기간</strong>
						<!-----계측장비 인증서의 최대 유효 기간은 5 년입니다. <br>  ------>
                        <p>계측장비 인증서의 최대 유효 기간은 5 년입니다. </p>

					</dd>
				</dl>			
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC18_Ex_sgr.jpg"  alt="PAC (계측기기) 인증 제출 서류" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>계측기기 인증(PAC) 제출 서류</strong>
						<!-----계측장비 인증서의 최대 유효 기간은 5 년입니다. <br>  ------>
                        <p> 테스트용 샘플 장비</p>
                        <p> 제품설명서</p>
                        <p> 내부 테스트 보고서</p>
                        <p> 기존 인증서</p>	
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC28_Ex_PAC.jpg"  alt="마킹 요구사항" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>마킹 요구사항</strong>
						측정 기기가 필요한 모든 측정 테스트를 통과하고 Rosstandart 결정에 따라 승인된 측정 기기의 상태 레지스터에 입력된 후에는 측정 기기에 "СТ"교정 마크 및 승인된 측정 기기 심볼이 식별 되어야합니다.<br>
                        <p>"СТ"마킹의 표시는 계측기의 인증서가 유효한 기간 동안에 허용됩니다.</p>
                        <p>인증서가 만료된 후에는 마킹이 더 이상 허용되지 않습니다.</p>
                        <p>"СТ"마킹은 각 측정장비에 위치해야 하며 반드시 알기 쉽게 나타나야 합니다.</p>
                        <p>기술문서에는 인증 및 등록에 대한 정보가 포함 되어야합니다. 계측장비 마킹을 잘못 사용하면 법적 결과를 초래할 수 있습니다.</p>
                        <p>모든 문서는 정식 번역가에 의해 러시아어로 번역되어야 합니다. 모든 문서 사본에는 법정 대리인의 도장과 서명이 있어야합니다.</p>
					</dd>
				</dl>	
			</li>

			<!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
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
    </article><!--+++++ 컨텐츠 08 종료 +++++--> 
       
       
       
       
    <article><!--+++++ 컨텐츠 09 시작 +++++-->
           
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">러시아 통신인증 (FAC/FCA 및 FSS/FSB)</span>&nbsp;러시아 (RUSSIA)</h1>
		<h2 class="sub_txt">FAC/FCA (Federal Agency of Communication / Federal Communication Agency)<br>
FSS/FSB (Federal Security Service / Federal Security Bureau), RFC(Radio Frequency Conclusion) 
</h2>
	</div>
	<br>
	
	
	<div class="business_type5" class="area">
		<h2>러시아 통신 인증 개요 </h2>
		<span style="font-weight:bold;color:#3399cc;">FAC/FCA (Federal Agency of Communication / Federal Communication Agency) 인증</span><br>		
			FAC 인증서와 선언서는 공용 네트워크에서 사용되거나 네트워크에 연결되고 있는 장비에 대한 러시아 텔레콤 및 무선 규칙의 제품 준수를 확인하는 문서입니다. 연방 통신법 №126 «On Telecommunications»을 따릅니다.
		<br><br>
		
		
		<span style="font-weight:bold;color:#3399cc;">FSS/FSB (Federal Security Service / Federal Security Bureau) 인증</span><br>		
			통신에 암호화 요소가 포함된 장비를 세관 연합(EAEC) 영역으로 수입하거나 수출하기 위한 필수 조건입니다. 
		<br><br>
		
		
		<span style="font-weight:bold;color:#3399cc;">RFC(Radio Frequency Conclusion)인증</span><br>		
			RFC인증은 인증은 무선전자 장비(RED), 고주파 장비(HFD), 및 그를 구성하는 요소인 경우 받아야 하는 주파수 인증입니다.
		<br><br>
		

        <span style="font-weight:bold;">하나의 제품에 대하여 인증 대상 규격은 1개일 수도 있지만, 제품에 따라 2개 이상의 통신 규격에 대한 인증이 필요할 수도 있습니다. 네트워크에 연결되는 장치나 통신 장치 대부분은 EAC, FSB/FSS 및 FAC/FCA인증의 대상입니다.</span><br> 		
				
			- FAC 인증은 대부분의 텔레콤, 무선 장치 및 Ethernet으로 연결하는 장치에(Ethernet to Wi-Fi) 적용됩니다. <br>
		
       			
			- 통신장비에 무선기능이 암호화되어 있을 경우 추가로 FSB 인증을 받아야 합니다. 
		
        <br><br><br>		
		
		<ul>
			<li>
				<dl>
					<dt> <br>
						<img src="./image/EAC30_Ex_PAC.jpg" alt="인증절차" style="width:95%;margin-left:auto;margin-right:auto;"><br><br>
						<!-----img src="./image/02_FAC CoC.jpg"---> <br> <br>
					</dt>
					<dd>
						<strong style="color:#3399cc;">통신인증 대상 품목</strong>	
                         					
                        <li><strong style="color:#3399cc;">FAC/FCA 인증</strong></li>
                       &#10020; 이동 전화선과 고정 전화선의 자동 전화국 (ATS)<br>
                       &#10020; 스위치, 라우터, 방화벽, 장거리 전송 시스템<br>
                       &#10020; 공공 통신에서 통신 서비스 계측에 사용되는 장비 (자동 결제 시스템 – APS)<br>
                       &#10020; 기타 무선 전자 장비 <br><br>
                        
                        <li><strong style="color:#3399cc;">FSS/FSB인증</strong></li>
                       &#10020; 암호화 알고리즘 포함하는 장비<br>
                       &#10020; 개인 스마트 카드<br>
                       &#10020; 라디오 및 TV방송 수신 장비<br>
                       &#10020; 이동형 및 휴대용 무선 전자 수단<br>
                       &#10020; 기타 암호화 되어 있는 장비<br><br>
                        
                        
                        <li><strong style="color:#3399cc;">RFC인증</strong></li>
                        &#10020; 무선전자 장비(RED)<br> 
                        &#10020; 고주파 장비(HFD)<br> 
                        &#10020; RED 및 HFD 구성하는 요소 
                        
					</dd>
				</dl>
			
			
			<li>
				<dl>
					<!-----dt> <br>
						<img src="./image/04_FSS.jpg"> <br>
					</dt---->
					<dd>
						<strong>통신인증 인증서 유형</strong>
						<div class="image_paper1" style="width:25%;float:left;">
						   <img src="./image/002_FAC DoC.jpg" alt="인증절차" style="width:95%;margin-left:auto;margin-right:auto;"> <br>
						   <p style="display:block;text-align:center;">FAC CoC</p>
						</div>
						
						
						<div class="image_paper2" style="width:25%;float:left;">
						    <img src="./image/001_FAC DoC.jpg" alt="인증절차" style="width:95%;margin-left:auto;margin-right:auto;"> <br>
						    <p style="display:block;text-align:center;">FAC DoC</p>
						</div>
						
						
						<div class="image_paper3" style="display:block;width:25%;float:left;word-break:keep all;">
						    <img src="./image/003_FSB_Notification.jpg" alt="인증절차" style="width:95%;margin-left:auto;margin-right:auto;">
						    <p style="display:block;text-align:center;">FSB Notification.</p>
						</div>
						
						<div class="image_paper4" style="width:25%;float:left;">
						    <img src="./image/004_RFC.png" alt="인증절차" style="width:95%;margin-left:auto;margin-right:auto;">
						    <p style="display:block;text-align:center;">RFC</p><br>
						</div>
						
						<li>FAC CoC 및 DoC의 차이점은 DoC를 발행하기 위하여 제조사가(해외업체경우 신청자/대리인)이 시험소에서 시험을 진행하고 ROSSVYAZ 기관에 DoC를 신청합니다. CoC발행 경우, 샘플시험, 적합성 평가, 보험 등은 공인 인증기관이 진행하고 있습니다.</li>
					</dd>
				</dl>			
			</li>
			
			 <br>
			
			<li>
				<dl>
					<dt> <br>
						<img src="./image/EAC17_Ex_sgr.jpg" alt="인증절차" style="width:95%;margin-left:auto;margin-right:auto;"> <br>
					<dd>
						<strong>인증서 유효기간 </strong>
						<p>FAC CoC – 최대 3년까지 유효한 인증서입니다. </p>
						<p>FAC DoC – 최대 10년까지 유효한 인증서입니다. </p>
						<p>FSS/FSB Notification – 유효기간은 정해져 있지 않으며 신청자가 원하는 기간을 직접 선택할 수 있습니다</p>
						<p>RFC 인증 – 1년 유효한 인증서입니다. </p>
					</dd>
				</dl>			
			</li>

			<li>
				<dl>
					<dt><br>
						<img src="./image/russia_FAC_etcs_20200312.png" alt="인증절차" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt><br>
					<dd>
						<strong>통신인증 절차</strong>						
                        <span>1. 인증기관에 신청서 및 제품 관련 서류 제출</span><br><br>
                        <span>2. 서류 검토</span><br><br>
                        <span>3. 적용되는 인증서 유형 확인</span><br><br>
                        <span>4. 견적서 발행 및 계약</span><br><br>
                        <span>5. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행</span><br><br>
                        <span>6. 제품에 따라 RF 수입허가 요구될 경우 진행</span><br><br>
                        <span>7. 인증서 초안 발행 및 고객 확인</span><br><br>
                        <span>8. 인증서 발행</span><br><br>
					</dd>
				</dl>
			</li>

			<li>
				<dl>
					<dt><br>
						<img src="./image/fac_fsb01.jpg" alt="인증절차" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>FAC 및 FSB 통신인증</strong>
						<p>러시아 지역에 등록되어 있는 법인이 신청자/대리인 역할을 할 수 있습니다.</p>
						<p>인증진행 및 발행은 공인 인증기관에서만 가능합니다</p>
						<p>인증스킴에 따라 제품은 단일(1회) 수출용 또는 연속생산용 인증서로 발행 가능합니다.</p>
						<p>FAC 인증은 ROSSVYAZ 러시아 정부 기관에 등록 대상입니다. </p>
						<p>RFC 인증은 «정부 무선 주파수 센터»에서 발행됩니다.  </p> 
					</dd>
				</dl>	<br>		
			</li>
			<br><br>

			<!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.2em;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
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
    </article><!--+++++ 컨텐츠 09 종료 +++++--> 
       
       
       
       
    <article><!--+++++ 컨텐츠 10 시작 +++++-->
           
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">Rejection Letter </span>러시아 (RUSSIA)</h1>
	</div>
	
	<div class="business_type5" class="area">
		<h1>Rejection Letter 개요</h1>
		<!----h2> FSS Notification</h2---->		
		<h3 style="text-align:justify;">			
			Rejection Letter은 공인된 기관이 발행한 공식 문서로, 해당 제품이 러시아 GOST 또는 관세동맹 TRCU 규정에 따른 적합성인증서 또는 선언서의 대상이 아니란 것을 증빙합니다. <br class="sn"><br> Rejection Letter은 정해져 있는 양식은 없지만 필수로 포함하여야 하는 제품에 대한 정보가 정해져 있습니다. 문서는 발행하는 인증기관 문서양식에 발행되며 인증기관의 도장 및 인증기관 CEO의 서명이 포함되어야 합니다. 
		</h3>
		<ul>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC31_01_Ex_PAC.jpg" alt="문서 필수포함 정보" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>문서 필수포함 정보</strong>		<br>				
                        <span>1. 제품명</span> <br><br>
                        <span>2. HS 코드 (러시아)</span><br><br>
                        <span>3. ОКПД2코드 (러시아 제품분류 코드) </span><br><br>
                        <span>4. 법률 규정 등</span>  <br>
					</dd>
				</dl>
			</li>

			<li>
				<dl>
					<dt>
						<img src="./image/EAC32_Ex_PAC.jpg" alt="Rejection Letter의 필요성" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>Rejection Letter의 필요성</strong>
						<p>수입자가 러시아 지역으로 제품을 수출 하기 위하여 제품 통관 시 세관에서 적합성 인증서 (CoC) 또는 적합성 선언서 (DoC)를 확인해야만 정상적인 통관이 가능합니다. 그러나 일부 제품은 GOST 및 TRCU인증 제도 또는 다른 인증제도의 대상이 아니기 때문에 인증서 발행이 불가능합니다. 이 경우 공인기관이 해당 제품은 인증서 발행 대상에 포함되지 않는다는 공식적인 Rejection Letter를 발행할 수 있으며 Rejection Letter을 통해 통관이 가능합니다. </p>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC33_Ex_PAC.jpg" alt="Rejection Letter 발행 절차" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>Rejection Letter 발행 절차</strong><br><br>		
                        <span>1. 제품 관련 서류 제출</span><br><br>
                        <span>2. 서류 검토</span><br><br>
                        <span>3. 적용되는 인증제도 없음을 확인하여 Rejection Letter 발행 필요 결정 </span><br><br>
                        <span>4. 견적서 발행 및 계약</span><br><br>
                        <span>5. Letter 초안 발행 및 고객확인</span><br><br>
                        <span>6. Letter 발행</span><br><br>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/RejectionLetter_document02.jpg" alt="Rejection Letter 제출 서류" style="width:95%;margin-left:auto;margin-right:auto;">
					</dt>
					<dd>
						<strong>Rejection Letter 제출 서류</strong>	<br>
                       제출서류는 다음과 같습니다. (국한되지 않으며 필요에 따라 추가될 수 있습니다.)					
                        <p>제품설명서 (러시아어 또는 수출국 언어)</p>
                        <p>HS Code 포함</p>
                        <p>기술문서  </p>
					</dd>
				</dl>
			</li>
			
			
			<!-------고객 혜택 시작 -------------->
         <br><br><br>
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS-TEST PACIFIC 고객님께 드리는 혜택</strong></p></h2>
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
    </article><!--+++++ 컨텐츠 10 종료 +++++-->
       
       
    </div><!-------div class="tab_con" 종료------>
      
          
	</div>	<!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>