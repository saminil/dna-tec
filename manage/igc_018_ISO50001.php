<?php
	include_once('./_common.php');
$g5['title'] = '에너지 경영인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

<!-------style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style------>


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
		<h1><span style="font-family: georgia;">ISO</span> 50001</h1>
		<h2>에너지 경영시스템 인증</h2>		
		<p style="font-family:georgia;display:inline-block;text-align:justify;font-size:1.2em">
           
             <span style="font-weight:bold;">ISO</span>  50001의 소개<br><br>
            이 표준의 목적은 조직이 에너지 효율, 이용 및 사용량을 포함한 에너지 성과를 개선하기 위하여 필요한 시스템과 프로세스를 수립할 수 있도록 하는 것입니다. 이 표준의 실행은 체계적인 에너지 관리를 통하여 온실가스 배출량, 에너지 비용 및 그 밖의 관련된 환경영향을 저감시킬 수 있도록 의도되었습니다. 이 표준은 지역적, 문화적, 사회적 조건에 무관하게 모든 종류 및 규모의 조직에 적용될 수 있습니다. 성공적인 실행은 조직의 모든 계층과 기능, 특히 최고경영자의 의지에 의존합니다.<br><br>
 
            조직은 이 요구사항을 바탕으로 에너지방침을 개발하고 실행할 수 있으며, 중요에너지 이용과 관련된 법적 요구사항 및 정보를 고려한 목표, 세부목표 및 실행계획을 수립할 수 있습니다. EnMS는 조직이 조직의 방침 의지를 달성하고 에너지성과 개선에 필요한 활동을 하고 이 표준의 요구사항에 그 시스템의 적합성을 실증하는 것을 가능하게 합니다. 이 표준은 조직의 관리하에 있는 활동들에 대하여 적용되며, 이 표준의 적용은 시스템 복잡성, 문서화 정도 및 자원을 포함하는 조직의 특정 요구사항에 맞도록 조정될 수 있습니다.<br>
		</p>
		<br><br><br><br>
		
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/iso_50001_01.jpg" alt="ISO 5001의 목적">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 50001의 목적</strong>
						
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                      <!-----
                       조직의 목적과 목표를 뒷받침하는 <span style="font-family: georgia;">ISO</span> 9001은 품질 방침과 목표를 달성하기 위한 프로세스, 절차 및 책임사항을 문서화합니다. 8가지 품질 경영 원칙을 기반으로 한 <span style="font-family: georgia;">ISO</span> 9001:2015 표준은 고객과 이해관계자의 요구사항을 충족하는 조직 운영 방식을 정의합니다.
                       ----->
                       <br><br>
                       
                        &#10017; 조직이 에너지 효율성, 에너지 사용과 소비를 개선<br><br>
                        &#10017; 에너지 자원의 관리에 있어 보다 투명하고 효과적인 의사소통<br><br>
                        &#10017; 에너지 관리의 우수사례가 확산되도록 촉진<br><br>
                        &#10017; 시설에 대한 새로운 에너지 효율성 기술을 적용하기 위한 평가 및 우선순위 검토를 지원<br><br>
                        &#10017; 공급망 내의 에너지 효율성을 높이기 위한 프레임워크를 제공<br><br>
                        &#10017; 온실가스 배출 저금 프로젝트에 대한 에너지 관리 개선을 실행<br><br>
                        </span>
					</dd>
				</dl>
			</li>
			
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_50001_02.jpg" alt="ISO 5001의 활용">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span> 50001의 활용</strong>
						
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                      
                          이 표준의 국제적인 활용은 가용 에너지원의 보다 효율적인 이용, 경쟁력 향상, 온실가스 배출량 및 그 밖의 환경영향의 저감에 기여합니다. 이 표준은 사용되는 에너지의 종류에 무관하게 적용될 수 있는 장점이 있습니다.<br><br>
                          이는, 에너지의 효율적인 활용을 통하여 조직의 경제적 이익에도 기여할 뿐만 아니라 세계적인 화두로 급부상하고 있는 환경문제에 대하여 긍정적인 영향을 끼칠 수 있습니다.<br>                       
                       <br><br>
                       <!------
                        &#10017; 조직이 에너지 효율성, 에너지 사용과 소비를 개선<br><br>
                        ----->
                        </span>
					</dd>
				</dl>
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_50001_03.jpg" alt="ISO 5001 인증과정">
					</dt>
					<dd>
						<strong><span style="font-family: georgia;">ISO</span>  50001 인증과정</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                          제도 검사의 가장 큰 목적은 조직의 에너지 측면들의 잠재적인 개선을 찾는 것입니다.
                        <br><br>
                        
                         인증과정은 두 단계로 이루어져 있습니다:<br><br>
                        
                         &#10003; 단계1은 일반적으로 조직의 현황, 시스템 기록문서, 기반시설들 등을 검토하기 위한 업체방문으로 이루어져 있습니다. 이것은 에너지 경영 시스템의 성숙도를 평가합니다.<br><br>
                         
                         &#10003; 단계 2는 시스템 기록 문서가 ISO 50001 표준의 요구사항들을 충족하는지 평가하기 위한 인증 심사입니다. 인증심사는 표준의 요건에 충족하지 않는 것들과 인증서가 발급되기 전 고쳐야 할 점들에 대해 기관에 피드백을 줄 것입니다.  <br><br>

                         이 인증서는 승인을 받은 후 3년의 유효기간을 갖습니다. 이 기간 동안, 매년 사후 심사를 받아야 합니다.<br>
                         
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
						<strong><span style="font-family:georgia;">ISO</span> 50001 요구사항</strong>
						<span style="font-family:georgia;font-size:1.2em;text-align:justify;margin-right:10px;display:inline-block;">
                         <!--------
                          IGC는 미국의 인정기구인 IAS로부터 <span style="font-family: georgia;">
                          ------>
                       <br><br>
                        1.	적용범위<br><br>
                        2.	인용표준<br><br>
                        3.	용어와 정의<br><br>
                        4.	조직의 환경<br><br>
                        5.	리더쉽<br><br>
                        6.	계획<br><br>
                        7.	지원<br><br>
                        8.	운영<br><br>
                        9.	성과 평가<br><br>
                        10.	개선<br><br>
                        </span>
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
		
		<span style="font-family:georgia;">ISO</span> 50001은 에너지 경영 모범 사례를 다루어 체계적으로 귀사의 품질시스템에 접근할 수 있으며 에너지 효율성에 대한 벤치마킹, 측정, 문서화 및 보고 등 에너지 저감에 도움이 되는 관리 방안을 모색할 수 있게 합니다.<br><br>
		에너지경영시스템 인증 및 교육 분야에서 다양한 경험을 갖고 있는 <span style="font-family:georgia;">IGC</span>인증원을 통해 효과적인 에너지 경영시스템을 구현할 수 있는 다음과 같은 서비스를 제공합니다.
		<br><br><br>
			<ul style="display:inline-block;text-aling:left;">
				<li><p><em><strong>01</strong></em><span><span style="font-family: georgia;">ISO</span> 50001 : 교육</span></p></li>
				<li><p><em><strong>02</strong></em><span><span style="font-family: georgia;">ISO</span> 50001 : 갭 분석</span></p></li>
				<li><p><em><strong>03</strong></em><span><span style="font-family: georgia;">ISO</span> 50001 : 심사</span></p></li>
				<li><p><em><strong>04</strong></em><span><span style="font-family: georgia;">ISO</span> 50001 : 인증 서비스</span></p></li>
				<!------
				<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
				<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
				----->
				<br>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
	
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>