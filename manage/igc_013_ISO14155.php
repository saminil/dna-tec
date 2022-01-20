<?php
	include_once('./_common.php');
$g5['title'] = '보건 및 의료 기기';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery로 작동됩니다.	
	*/
?>

<!------ Existing File Codings  시작----->

<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style>
<!------ Existing File Codings  종료----->


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet"> <!-------// 상세 페이지 본문 전체 영문 폰트 정의----------->
<!-----link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"---///퀵메뉴와 충돌-->


<style>
    /* *:lang(en) {font-family: georgia;} */ 
    /* *:lang(ko) {font-family: 'Noto Sans', sans-serif;} */
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
	.business_type5 ul li dl dd{width:60%; padding:50px 0; padding-top:30px; padding-left:5%;}
	.business_type5 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type5 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type5 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}
    
    
    
    /* (주)아이지씨인증원 사업영역 시작  */	
    
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:none; width:100%; list-style:none; margin:10px 0; }
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
	}

	@media all and (max-width:768px){
		.business_type5 h1{font-size:2.3em; }
		.business_type5 h2{font-size:1.9em; }
		.business_type5 h3{font-size:1.6em; padding:0 5px;}
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


</style>




<div class="content_wrap">
	<!---section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">OUR</span> BUSINESS</h1>
		<h2 class="sub_txt">IGC인증원의 다양한 사업영역를 소개합니다.</h2>
	</section---->
	
	<section class="business_type5" class="area">
		<h1><span style="font-family: georgia;">ISO</span>14155</h1>
		<h2>의료기기 임상조사계획 자발적 평가 인증</h2>		
		<p style="display:inline-block;font-family:georgia;display:inline-block;text-align:justify;">
            ISO 14155는 ‘인체 대상 의료기기 임상시험에 대한 국제표준 – GCP(Good Clinical Practice)’으로 임상 시험 원칙, 수행 절차 및 수집할 정보에 대한 가이드라인을 제공합니다. 
            <br>ISO 14155에 따른 임상시험을 진행하면 피험자의 안전 및 보건을 보호하는 한편, 객관적이고 신뢰할 수 있는 과학적 임상 데이터를 수집할 수 있습니다. 또한 EU 뿐만 아니라, 미국, 캐나다, 브라질, 호주, 일본, 중국, 러시아에서도 ISO 14155에 기반한 의료기기 임상시험 및 임상데이터를 인정하고 있기 때문에 그 중요성과 효율성은 날로 더 커질 것입니다.
		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/iso_14155_01.jpg" alt="ISO 14155 요구사항">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 14155 요구사항</strong>
						<span style="font-family:georgia;text-align:justify;margin-right:10px;display:inline-block;">
                         ISO 14155:2011은 임상시험 관리 기준(GCP)뿐 아니라 임상 품질 관리 과정과 관련하여 의뢰자, 연구자, 현장의 연구 심사 개념을 도입한 규격입니다. 이는 윤리적 고려사항과 임상 조사에 대한 단계적 접근으로 정확하고 신뢰가능한 임상데   이터 수집이 가능합니다.
                       <br><br>
                         1. 적용범위<br><br>
                         2. 인용표준<br><br>
                         3. 용어와 정의<br><br>
                         4. 윤리적 고려사항<br><br>
                         5. 임상조사계획<br><br>
                         6. 임상조사실시<br><br>
                         7. 임상 조사 중단, 종료 및 폐쇄<br><br>
                         8. 스폰서의 책임<br><br>
                         9. 주요 조사의 책임<br><br>
                         </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_14155_02.jpg" alt="ISO 14155의 중요성">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 14155의 중요성</strong>
						<span style="font-family:georgia;text-align:justify;margin-right:10px;display:inline-block;">
                       
                       임상 조사 계획의 적절한 설계는 필수적입니다. 데이터 수집을 위한 적절한 규칙과 절차를 밝히지 않는 과정은 의료기기 제조사의 안전 및 성능에 대한 주장을 충분히 뒷받침하지 못하는 결과를 초래할 수 있기 때문에 매우 중요합니다. 또한 이 표준을 준수한다는 것은 시험 대상자의 권리, 안정성, 복리가 보장되며 임상 시험 데이터를 신뢰할 수 있다는 아주 중요한 증거입니다.
                       <br><br>
                        이 규격은 다음 사항들에 도움을 줍니다.<br><br>

                        1. 의료기기와 관련된 모든 위험 가능성 식별<br><br>
                        2. 안전 및 성능과 관련된 임상 데이터 수집가능<br><br>
                        3. 환자의 안전과 복지 보호<br><br>
                        4. 기기의 적합성 평가<br><br>
                        </span> 
					</dd>
				</dl>			
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_14155_03.jpg" alt="ISO 14155의 기대효과">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 14155의 기대효과</strong>
						<span style="font-family:georgia;text-align:justify;margin-right:10px;display:inline-block;">
                            <div >
                               <strong style="font-weight:bold;">1. 품질 경영 시스템 인증 및 심사 스페셜리스트</strong><br>
                                 일반적으로 의료기기 승인에 있어서 품질 경영 시스템 구현이 필요합니다. IGC인증원은 대부분의 국제 규정 및 표준에 따라 품질 경영 시스템 인증, 감사 및 공장 심사를 수행하여 고객이 시간 및 비용을 줄이고 통합 검사 및 심사를 받으실 수 있습니다.<br><br>
                               <strong style="font-weight:bold;">2. 최상의 솔루션 제공</strong><br>
                                 IGC인증원은 국제 표준 및 규정에 따라 주요 의료기기 시장 진입에 필요한 시험 서비스를 제공합니다.<br><br>                       
                               <strong style="font-weight:bold;">3. 전문집단과의 파트너쉽</strong><br>
                                 IGC인증원은 오랜 기간 의료기기에 대한 기술 및 규제에 관한 전문지식을 축적해 왔으며, 글로벌 제조사에서부터 지역 연구소에 이르기까지 다양한 조직으로부터 변함없는 신뢰를 받고 있습니다.<br>
                            </div>
                        </span> 
					</dd>
				</dl>			
			</li>
						
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_03.jpg" alt="IGC의 역량">
					</dt>
					<dd>
						<strong style="font-family:georgia;">IGC의 역량</strong>
						<span style="font-family:georgia;text-align:justify;margin-right:10px;display:inline-block;">
                          MDR이 본격 적용되는 2020년 5월부터는 EU지역으로의 의료기기 수출을 위해 반드시 ISO 14155 기반의 임상데이터와 조사결과가 필요하게 됩니다. IGC의 의료기기 임상 전문가들은 귀하의 임상 시험에 대해 GCP 준수 검토를 시행하고 시정 조치 권고 사항을 제공합니다. <br><br>
                          
                          다음과 같은 최고의 역량을 갖추고 있습니다.<br><br>
                       
                          1. 의료기기 임상 시험 관리 및 모니터링<br><br>
                          2. 의료기기 임상 시험 연구 디자인 및 프로토콜 개발 지원<br><br>
                          3. 임상 조사 보고서 검토<br><br>
                          4. 임상 시험 기본 문서 파일(Trial Master File) 검토<br>
                          </span><br><br>
					</dd>
				</dl>	
			</li>
			
		</ul>
	</section>
<br><br><br>
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;">
        <h2 class="con_arrow">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
		IGC는 다음과 같은 인증 및 관련 서비스를 제공하고 있습니다. 특히, ISO 14155와 관련된 보건 및 의료기기 표준 서비스를 제공합니다.
		<br><br><br>
			<ul style="display:inline-block;text-aling:left;">
				<li><p><em><strong>01</strong></em><span><span style="font-family: georgia;">ISO</span> 13485 : 의료기기 경영시스템</span></p></li>
				<li><p><em><strong>02</strong></em><span><span style="font-family: georgia;">MDSAP</span> : 의료기기 단일 심사 프로그램</span></p></li>
				<li><p><em><strong>03</strong></em><span><span style="font-family: georgia;">ISO</span> 15378 : 의료포장자재 공급사의 품질경영시스템</span></p></li>
				<br>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
	
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>