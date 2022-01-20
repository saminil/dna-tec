<?php
	include_once('./_common.php');
$g5['title'] = '화장품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.
	*/
?>

<!------ Existing File Codings  시작----->

<!-------style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style -------->
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

	
	<section class="business_type5" class="area">
		<h1><span style="font-family: georgia;">ISO</span> 22716 </h1>
		<h2>화장품 GMP 우수 화장품 제조 및 품질관리 기준에 대한 가이드라인</h2>		
		<p style="font-family:georgia;display:inline-block;text-align:justify;font-size:1.2em">
            ISO 22716에 규정된 이 가이드라인은 화장품 제품을 위한 GMP(Good Manufacturing Practices) 안내서를 제공하는 목적이 있다. 가이드라인은 화장품 산업에 의해, 제조업의 화장품분야의 특정요구를 고려하여 마련되었다.<br><br>
            ISO22716 은 제품의 품질에 영향을 미치는 인적, 기술 및 경영상의 요인들의 관리에 있어서 조직적이고 실질적인 조언을 제공한다. 가이드라인은 각 섹션이 가지는 특정 “원칙”과 함께 원료의 수령에서부터 출하까지 제품의 흐름을 따른다.<br><br>
            GMP는 올바른 과학적 판단과 위험평가에 기초한 공장 내 활동을 통한 품질보증의 실제적인 발전으로 구성된다. ISO22716은 조직이 규정된 특성에 부합하는 제품을 만들 수 있게 하는 활동을 정의한다. <br><br>

		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/iso_22716_01.jpg" alt="ISO 22716 요구사항 구성">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 22716의 요구사항 구성</strong>
						<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
     
                        <table border="1" cellspacing="0" cellpadding="0" style="width:85%;font-family:georgia;">
                             <tr>
                               <td width="293" valign="top"><p style="margin:7px;"><strong>인적자원 </strong></p></td>
                               <td width="293" valign="top"><p style="margin:7px;"><strong>폐기물 </strong></p></td>
                             </tr>
                             <tr>
                               <td width="293" valign="top" bgcolor="#E0F3F8"><p style="margin:7px;"><strong>건물 </strong></p></td>
                               <td width="293" valign="top" bgcolor="#E0F3F8"><p style="margin:7px;">도급    계약 </p></td>
                             </tr>
                             <tr>
                               <td width="293" valign="top"><p style="margin:7px;"><strong>설비 </strong></p></td>
                               <td width="293" valign="top"><p style="margin:7px;">일탈 </p></td>
                             </tr>
                             <tr>
                               <td width="293" valign="top" bgcolor="#E0F3F8"><p style="margin:7px;"><strong>원재료    포장재 </strong></p></td>
                               <td width="293" valign="top" bgcolor="#E0F3F8"><p style="margin:7px;">불만과    리콜 </p></td>
                             </tr>
                             <tr>
                               <td width="293" valign="top"><p style="margin:7px;"><strong>생산 </strong></p></td>
                               <td width="293" valign="top"><p style="margin:7px;">변경관리 </p></td>
                             </tr>
                             <tr>
                               <td width="293" valign="top" bgcolor="#E0F3F8"><p style="margin:7px;"><strong>완제품 </strong></p></td>
                               <td width="293" valign="top" bgcolor="#E0F3F8"><p style="margin:7px;">내부심사 </p></td>
                             </tr>
                             <tr>
                               <td width="293" valign="top"><p style="margin:7px;"><strong>품질관리 </strong></p></td>
                               <td width="293" valign="top"><p style="margin:7px;">문서관리 </p></td>
                             </tr>
                             <tr>
                               <td width="293" valign="top" bgcolor="#E0F3F8"><p style="margin:7px;"><strong>규격    외 제품의 처리 </strong></p></td>
                               <td width="293" valign="top" bgcolor="#E0F3F8"><p style="margin:7px;">&nbsp;</p></td>
                             </tr>
                        </table>
                        
                       </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_22716_02.jpg" alt="ISO 22716 중요성">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 22716의 중요성</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                          ISO 22716은 화장품 수출을 위한 필수 조건으로 변화하고 있습니다.
                          특히 유럽의 새로운 화장품 EU regulation에서는 화장품 제조사에게 harmonized standard를 준수하도록 요구하고 있는데 이 harmonized standard가 ISO 22716입니다.
                        <br><br>
                        <span style="font-family: georgia;">ISO</span> 9001을 비즈니스 도구로 사용한다면 다음과 같은 이점이 있습니다.
                        
                        <br><br><br>
                        <strong style="font-weight:bold;">인증의 추세 및 경향</strong><br><br>
                           <table border="0" cellspacing="0" cellpadding="0" width="396" style="width:85%;font-family:georgia;">
                             <tr>
                               <td width="68" align="center" valign="top" bgcolor="#7B90D7"><p style="margin:7px;text-align:left;"><strong>국가</strong></p></td>
                               <td width="327" align="center" valign="top" bgcolor="#7B90D7"><p style="margin:7px;text-align:left;"><strong>인증 추세 및 경향</strong></p></td>
                             </tr>
                             <tr>
                               <td width="68" valign="top" bgcolor="#B1BFD5"><p style="margin:7px;">유럽 </p></td>
                               <td width="327" valign="top" bgcolor="#B1BFD5"><p style="margin:7px;">화장품 제조사는 ISO 22716을 반드시 적용 </p></td>
                             </tr>
                             <tr>
                               <td width="68" valign="top" bgcolor="#F1F0F0"><p style="margin:7px;">미국 </p></td>
                               <td width="327" valign="top" bgcolor="#F1F0F0"><p style="margin:7px;">ISO22716    참작과 현행 FDA지침서의 수정 </p></td>
                             </tr>
                             <tr>
                               <td width="68" valign="top" bgcolor="#B1BFD5"><p style="margin:7px;">캐나다 </p></td>
                               <td width="327" valign="top" bgcolor="#B1BFD5"><p style="margin:7px;">자발적 화장품 GMP 지시서로 채택 </p></td>
                             </tr>
                             <tr>
                               <td width="68" valign="top" bgcolor="#F1F0F0"><p style="margin:7px;">일본 </p></td>
                               <td width="327" valign="top" bgcolor="#F1F0F0"><p style="margin:7px;">자발적 지시서로써 ISO 22716 채택 </p></td>
                             </tr>
                             <tr>
                               <td width="68" valign="top" bgcolor="#B1BFD5"><p style="margin:7px;">대한민국 </p></td>
                               <td width="327" valign="top" bgcolor="#B1BFD5"><p style="margin:7px;">CGMP 인증의 의무화 추진중 </p></td>
                             </tr>
                           </table>
                          
                       </span>
					</dd>
				</dl>			
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_22716_03.jpg" alt="ISO 22716 인증의 개대 효과">
					</dt>
					<dd>
						<strong><span style="font-family:georgia;">ISO</span> 22716 인증의 기대효과</strong><br>
						<span style="font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                     <!--------
                      IGC는 미국의 인정기구인 IAS로부터 <span style="font-family: georgia;">ISO</span> 9001에 대한 인정을 받아 품질경영시스템에 대한 인증 서비스를 제공하고 있습니다. ------>
                        
                        &#10045; <span style="font-weight:bold;">고객</span><br><br>
                        1. 신뢰할 수 있는 브랜드를 통해 신뢰구축<br><br>
                        2. 품질과 순도에 부합하는 제품<br><br><br>
                        &#10045; <span style="font-weight:bold;">판매자</span><br><br>
                        1. GMP 요구사항, 품질, 안전 등의 기준에 부합함<br><br>
                        2. 배치의 일관성으로 공정의 재현성/ 안정성 보증<br><br>
                        3. 오염과 오류의 위험 최소화<br><br>
                        4. 브랜드 & 명성의 보호<br><br>

                        </span>
					</dd>
				</dl>	
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_03.jpg">
					</dt>
					<dd>
						<strong>IGC 인증원의 역량</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                     
                         &#10057; IGC는 전 세계의 조직이 ISO 22716 인증을 구현하고 달성하도록 지원합니다. <br><br>
                         &#10057; IGC의 풍부한 경험을 보유한 전문가들은 현장 심사에서 인증까지의 프로세스에 걸쳐 조직의 생산 라인을 ISO 22716 지침에 따라 잠재적 위험을 최소화할 수 있도록 지원하고 있습니다.<br><br>
                         &#10057; IGC는 인증 이외에도 기존 절차를 개선하고 조직의 기존 능력을 강화하기 위한 가장 효과적인 방법인 정기적 피드백을 제공합니다.<br><br>
                         &#10057; 조직은 이를 통해 최고 수준의 품질에 대한 의지와 노력을 고객에게 인정을 받을 수 있습니다. <br>

                       </span><br><br>
					</dd>
				</dl>	
			</li>
			
			
		</ul>
	</section>
<br><br><br><br><br><br>
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;">
        <h2 class="con_arrow" style="font-size:0.7em;">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
		<br>
			<ul style="font-family:georgia;display:inline-block;text-aling:left;">
				<li><p><em><strong>01</strong></em><span>IGC는 심사 후 조직의 GMP 우수 화장품 제조 및 품질관리를 객관적 분석을 합니다. 그 결과로 기업의 강점 및 약점 평가하여 조직이 성과를 높일 수 있도록 지원하고 이를 통해 수익을 증대시킵니다. </span></p></li>
				
				<li><p><em><strong>02</strong></em><span>IGC가 제공하는 프로세스에 대한 상세한 보고서와 분석을 통해 조직은 CGMP 도입을 수월하게 할 수 있습니다.</span></p></li>
				<br>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
	
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>