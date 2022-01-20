<?php
	include_once('./_common.php');
$g5['title'] = '유럽 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다. 
	*/ 
?>
<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
    
    table,td p {margin-left:0px;width:90%;}
    td {font-size:96%;padding:10px;}
</style>


<?php
	/*
		CSS파일 로드(25~26라인)
		구매하신 (주)아이지씨인증원에 사용하신다면 적용하지 않아도 됩니다.
		(주)아이지씨인증원가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!----link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet"---->
<!-----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"----->



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
	.business_type3 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_hotwaterBoiler_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_hotwaterBoiler_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_hotwaterBoiler_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_hotwaterBoiler_05.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_hotwaterBoiler_04.jpg') no-repeat center top; }
    
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    
    
    /* (주)아이지씨인증원 사업영역 시작  */	
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.partner_type2 .con_box ul li p{display:table; width:100%; }
	.partner_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.partner_type2 .con_box ul li p > em{ width:30px; }
	.partner_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.partner_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    /* (주)아이지씨인증원 사업영역 종료  */
    
    
    

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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">Hot-water Boiler (92/42/EEC)</span> / 유럽 제품인증 개요</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            기92/42/EEC는 정격 출력이 4 kW 이상 400 kW 이하인 액체 또는 기체 연료로 연소되는 새로운 온수 보일러의 효율성 요건에 대한 지침으로, 유럽 연합의 에너지 효율 촉진에 관한 SAVE 프로그램의 일부에 의거합니다.<br><br>
            이 지침의 목적은 액체 또는 가스로 연소되는 온수 보일러에 효율 요건을 설정함으로써 에너지 효율을 개선하기 위해 만들어졌습니다.
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">적용 품목</p>
					<ul style="display:block;text-align:left;">
						4 Kw이상 400 Kw 이하의 정격 출력을 가지며 액체 또는 기체 연료를 사용하는 온수 용 보일러 (표준 보일러, 저온 보일러, 가스 콘덴싱 보일러)
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">적용 제외 품목</p>
					<ul style="display:block;text-align:justify;">
                      &#9881; 고체연료를 포함한 다양한 연료에 의해 연소될 수 있는 온수 보일러<br><br>
                      &#9881; 온수 즉석 조제 장비<br><br>
                      &#9881; 일반적으로 판매되는 액체 및 가스 연료(산업 폐기물 가스, 바이오가스 등)의 특징과는 다른 특성을 가진 연료에 의해 연소되도록 설계된 보일러<br><br>
                      &#9881; 구내 난방이 주목적이며 중앙난방 및 위생온수를 공급하기 위해 건물에 설치된 조리기구 및 기기<br><br>
                      &#9881; 중력순환을 사용하여 6kW 미만인 정격 출력을 가지며 보관된 위생온수 생산을 위해 설계된 기기<br><br>
                      &#9881; 일회용으로 제조된 보일러<br><br>
					</ul>
                
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">효율성 요구사항</p>
					<ul style="display:block;text-align:justify;">
						&#9965; 정격 출력: kW로 표시되는 정격 출력(Pn)에서 평균 70 °C의 보일러 수온으로 작동<br>
                        &#9965; 부분 하중: 보일러 유형에 따라 달라지는 보일러의 평균 수온에서 30%의 하중으로 작동<br><br>
                        
                        <table cellspacing="0" cellpadding="0" border="1">
                           <col width="166" span="2">
                           <col width="184" span="4">
                           <tr>
                             <td width="166" align="center" bgcolor="#A4C9D0">보일러 종류</td>
                             <td width="166" align="center" bgcolor="#A4C9D0">출력 범위</td>
                             <td width="368" colspan="2" align="center" bgcolor="#A4C9D0">정격    출력에서의 효율성</td>
                             <td width="368" colspan="2" align="center" bgcolor="#A4C9D0">부분    하중에서의 효율성</td>
                           </tr>
                           <tr>
                             <td align="center" bgcolor="#A4C9D0">　</td>
                             <td align="center" bgcolor="#A4C9D0">Kw</td>
                             <td align="center" bgcolor="#A4C9D0">평균 보일러 수온(in  ℃)</td>
                             <td align="center" bgcolor="#A4C9D0">효율성 요구사항(in %)</td>
                             <td align="center" bgcolor="#A4C9D0">평균 보일러 수온(in  ℃)</td>
                             <td align="center" bgcolor="#A4C9D0">효율성 요구사항(in %)</td>
                           </tr>
                           <tr>
                             <td align="center">표준 보일러</td>
                             <td align="center">4 - 400</td>
                             <td align="center">70</td>
                             <td width="184" align="center">≥    84 + 2<br>
                             logPn</td>
                             <td align="center">≥ 50</td>
                             <td align="center">≥ 80 + 3</td>
                           </tr>
                           <tr>
                             <td align="center">저온 보일러 +</td>
                             <td align="center">4 - 400</td>
                             <td align="center">70</td>
                             <td width="184" align="center">≥    87.5 + 1.5<br>
                             logPn</td>
                             <td align="center">40</td>
                             <td align="center">≥ 87.5 + 1.5</td>
                           </tr>
                           <tr>
                             <td align="center">가스 콘덴싱 보일러</td>
                             <td align="center">4 - 400</td>
                             <td align="center">70</td>
                             <td width="184" align="center">≥91    + 1<br>
                             logPn</td>
                             <td align="center">30(**)</td>
                             <td width="184" align="center">≥    97 + 1<br>
                             logPn</td>
                           </tr>
                        </table>
                         (*) 액체 연료를 사용하는 콘덴싱 보일러를 포함<br>
                         (**) 보일러 급수 온도<br>
                         
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">적합성 평가 절차</p>
					<ul>
                        <table cellspacing="0" cellpadding="0" border="1">
                          <col width="116">
                          <col width="115">
                          <col width="454">
                          <tr>
                            <td width="116" rowspan="3" align="center" bgcolor="#A8C8D5">Module B +</td>
                            <td width="115" align="center" bgcolor="#A8C8D5">Module C</td>
                            <td width="454">EU-형식검사 + 유형    적합성</td>
                          </tr>
                          <tr>
                            <td align="center" bgcolor="#A8C8D5">Module D</td>
                            <td width="454">EU-형식검사    + 생산 품질 보증</td>
                          </tr>
                          <tr>
                            <td align="center" bgcolor="#A8C8D5">Module E</td>
                            <td width="454">EU-형식검사    + 제품 품질 보증</td>
                          </tr>
                        </table>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC의 역량</p>
					<ul style="display:block;text-align:justify;">
					&#9967; IGC는 미국의 인정기구인 IAS로부터 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. <br><br>
					&#9967; IGC의 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                    &#9967; IGC는 경영시스템 인증의 신뢰할 수 있는 글로벌 리더로서 품질, 환경 및 기타 경영시스템에 대한 인증을 제공하고 있습니다. <br><br>
                    &#9967; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있습니다.<br><br>
                    &#9967; IGC는 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>

					</ul>

				</div>
			</div>
			
		</div>  <!--------//  div class="business_info" 종료  --------------->
		
	</div>
	
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>(주)아이지씨인증원 사업영역</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
				<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>

	
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>

<!-----?php
	include "../include/tail.php"; 
?----->