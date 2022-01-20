<?php
	include_once('./_common.php');
$g5['title'] = 'ISO 39001 / 교통, 통신 및 에너지 ';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<!-----style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style------>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<!--------link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"------->

<style>
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto; font-family:georgia; font-size:1.2em;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type5 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type5:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type5 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type5 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
	.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}  
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}  
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}  
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#339999;}  
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}  
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
	.partner_type2 .con_area .txtArea ul li{margin-top:15px;}
	.partner_type2 .con_area .txtArea ul li:first-child{margin-top:0}
	.partner_type2 .con_area .txtArea ul li span{font-weight:700; margin-right:10px; }
	.partner_type2 .con_area .txtArea ul li p{display:inline-block; }
        
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
    
	@media screen and (max-width:768px){
		
		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		/*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type5 .vision_area h2.title { font-size:1.5em; }
		.vision_type5 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type5 .vision_area ul li {width:100%;}
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃 설정  */
	}

</style>

<div class="content_wrap">


	<section class="page_title">
		<h1 class="sub_tit">ISO 39001 <span class="fc_pointer">심사원 교육</span> </h1>
		<h2 class="sub_txt">ISO 39001 도로 교통 안전관리 교육</h2>
	</section>
	<section class="vision_type5">

		<div class="vision_area">
		<h2 class="title">ISO 39001 도로 교통 안전관리 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso39001_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:12%;">
                      ISO 39001:2012 Road Traffic Safety(RTS) management system
                      ISO 39001 은 도로 교통 안전 관리 시스템에 대한 최소 요구사항을 설정하며, 도로, 교통 사고와 관련한 심각한 부장 발생 및 리스크를 감소 하고, 정부, 도로 교통 당국, 안전 단체 및 민간 기업은 매년 도로에서 사망 또는 부상 당한 사람들의 수 증가로 인하여 이 표준이 개발되었습니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:12%;">				
                      또한, 도로 교통 안전 관리는 기업에 업계 인식 방법을 제공하고 위험을 줄일 수 있으며, 중소기업이 모두 도로 교통 안전에 대한 구조적인 적은에서 최상의 결과를 얻을 수 있다는 것을 의미합니다
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 39001 이란? </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso39001_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
                        ISO 39001:2012 Road Traffic Safety(RTS) management system은 세계 각국이 참여한 ISO/TC 241에 의해 제정된 도로교통안전 경영시스템 국제 표준입니다. 
                     </span>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
                        ISO 39001은 교통사고 사망자나 심각한 부상자를 줄이는 것을 목적으로 개발되었으며, 조직의 도로 교통안전을 위한 경영시스템의 요구사항을 정하고 있습니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
						ISO 39001 은 조직이 도로교통 사고로 인한 사망 및 심각한 부상의 발생률과 위험을 줄이고 궁극적으로 제거하는데 도움이 되는 표준입니다. 
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
					    ISO 39001을 기반으로 하는 도로 교통 안전 관리 시스템은 도로 교통 시스템과 상호 작용하는 공공 기관과 민간 기업 모두에 적용 됩니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 39001의 중요성 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso39001_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        도로 교통 안전 무시의 결과는 사소한 사고가 끔찍한 사고로 되는 것과 관련되어 비극이 될 수 있습니다. 
                    </span>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        ISO 39001은 도로 교통 안전에 대한 위협을 확인하고 운영 리스크를 최소화하기 위해 모든 규모의 기업에 적용할 수 있습니다. 
                    </span>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        표준은 법률, 산업 및 이해 관계자의 요구사항을 충족시키는 동시에 지역 사회와 환경에 미치는 영향을 줄이기 위함입니다. 
                    </span>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">   
                        ISO 39001의 장점은 조직 안전 및 사회적 책임 목표를 충족시킬 수 있으며, 더 나은 관리를 통해 효율성을 향상시키는 방법을 확인할 수 있습니다. 
                    </span>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                         ISO 39001은 도로 교통 안전 리스크를 파악하고 관리하고, 사고를 줄일 수 있고, 안전한 노동 조건을 제공하며 이해 관계자의 기대를 충족할 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		
		<div class="vision_area">
		<h2 class="title">ISO 39001 적용대상</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>PEOPLE</em></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">			
                      <p style="font-weight:bold;">&#10051;  ISO 39001 표준에 정의되어 있는 적용 대상</p><br>
                      1.	도로교통안전 성과를 증진하고자 하는 조직<br> 
                      2.	도로교통안전경영시스템의 수립 및 실행, 유지, 개선을 하고자 하는 조직<br>
                      3.	조직 내 도로교통안전방침의 적합성을 확립하고자 하는 조직<br>
                      조직 내 도로교통안전방침과 이 국제표준과의 적합성을 입증하고자 하는 조직<br><br>
                    </span>
                    
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
                      <p style="font-weight:bold;">&#10051;  ISO 39001 적용 대상 예시</p><br>
                      1. 승객ㆍ화물운송과 관련된 조직(버스, 택시, 트럭운송, 렌터카 등)<br> 
                      2. 손해보험사<br>
                      3. 도로교통 관련법규의 제정ㆍ규제와 관련된 조직(국가, 자치단체)<br>
                      4. 도로설계ㆍ시공ㆍ운용ㆍ보수와 관련된 조직(도로운영, 관리회사)<br>
                      5. 물류ㆍ영업ㆍ통근 시 자동차를 사용하는 조직(공장, 창고, 물류서비스, 금융서비스 업 등)<br>
                      6. 운송수요가 발생되는 설비운영과 관련된 조직(주차장설계ㆍ관리회사 등)<br>
                      7. 자동차ㆍ자동차부품 설계ㆍ제조ㆍ보수ㆍ검사와 관련된 조직(자동차회사, 부품회사, 정비공장 등)<br>
                      8. 구급 구명 의료 준비와 관련된 조직(구급의료기관, 병원 등)<br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">왜 IGC 인가? </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>SOLUTIONS</em></div>
				</div>
				<div class="con_txt">
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
                     ISO 39001은 기업 내에서 안주하지 않고, 향상된 일관성, 도로 교통 안전 관리 모범 사례에 대한 요구사항을 설정합니다. 기업이 도로 교통 안전 리스크를 관리하기 위해 빠듯한 예산과 시간이 넉넉하지 않다는 것을 잘 알고 있습니다. 리스크 또한 운영하는 비즈니스 만큼이나 고유하다는 것을 잘 알고 있습니다. 
                    </span>
                    
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
                     ISO 39001 규정 준수에 불 필요한 비용과 복잡성을 제거하여 필요한 서비스만 포함하는 맞춤형 패키지 서비스를 제공합니다. 
                     따라서 저희 IGC는 보건 및 안전 관리를 향상시킬 수 있도록 사업부에 맞게 맞춤 설정 가능한 패키지를 제공하며 이를 통해 불필요한 서비스 비용을 제거할 수 있습니다.
                    </span>
                   <span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
                    하나의 관리 시스템에 모든 관련 관리 방법과 프로세스를 접목하여 귀하의 기업만의 도로 교통 안전 프레임워크를 설계하기 위한 지침을 제공합니다.
                    </span>
				</div>
			</li>
		</ul>
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
	</section>
	
	
	
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>