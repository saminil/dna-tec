<?php
	include_once('./_common.php');
$g5['title'] = '임상평가';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
	.business_type3 .business_info .backImg:nth-child(2n+1){margin:0 auto;}/*  홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */

	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_evalu_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_evalu_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_evalu_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_evalu_04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_evalu_05.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(6){background:url('images/product_evalu_06.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(7){background:url('images/product_evalu_07.jpg') no-repeat center top; }
    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">임상평가</span> / 유럽제품인증 개요</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">임상평가는 의료기기와 관련된 임상 데이터를 수집하고 평가하여 안전성, 효과 및 성   능을 검증하고 관련 규제 요건에 대한 적합성을 입증하는 과정입니다.<br>
              임상평가는 의료기기의 수명 주기 전체에 걸쳐 실시하는 과정으로, 제조 업체가 연구해야 할 데이터를 승인하기 위해 의료기기를 개발하는 과정 및 기기의 안전성, 효과 및 성능에 관한 새로운 정보를 얻기 위한 과정에서 임상평가를 실시하여야 합니다.<br>
              의료기기 생산 기업은 제품의 안전성 및 사용 목적에 따른 효과성을 입증하기 위하여 임상시험을 진행할 때 ISO 14155 규격의 요구사항을 충족하여야 합니다.<br>
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		<!----// 1st ----->
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">MDR과 임상</p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">MDR(Medical Device Regulation, 유럽 의료기기 규정)이란 유럽시장에 진출하고자 하는 모든 의료기기 제조업체가 준수해야 되는 새로운 의료기기 규정을 말합니다. MDR은 임상과 관련한 데이터 및 평가 과정을 강화하는 프로세스를 요구하며 제조업체는 의료기기의 안전성 및 성능을 입증하기 위해 임상 평가 보고서를 제공하여야 합니다.</li> <br>
						
						<li style="margin:0 auto;text-align:justify;"> Class III, Class IIb 제품은 임상평가를 필수로 진행하여야 하며, 임상평가 사용 설명서, PMCF 계획을 포함하는 대상이 됩니다.</li><br>
						
						<li style="margin:0 auto;text-align:justify;"> 동등한 의료기기의 임상 경험에 대한 데이터 수집, 임상 평가 보고서를 통한 임상 결과 도출, 유사한 기기를 사용한 임상평가를 통해 임상 데이터를 습득할 수 있습니다.</li>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			<!----// 2nd ----->
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">임상평가 수행 단계</p>
					<ul>
                         <span style="display:block;text-align:left;font-weight:300;">
                           1. 임상 평가 계획의 수립<br><br>
                           2. 임상 데이터 생성 및 식별 (문헌 검색, 임상 경험, 임상 조사)<br><br>
                           3. 임상 데이터의 적합성 평가<br><br>
                           4. 전체 데이터 분석 및 결론 도출<br><br>
                           5. 임상평가 보고서 작성<br><br>
                         </span>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<!----// 3rd ----->
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">임상시험 자료 필수 사항</p>
					<ul>
						<li>
						임상 시험 평가 자료는 다음을 포함하여야 합니다.<br>
						&#10020; 위험평가, 설계된 임상시험에 대한 정당성 평가, 임상 시험단계, 임상시험 브로셔, 임상시험 <br>
						</li>
						<li>
						진행보고서, 모니터링 계획, 임상시험 장소 선정 이유, 임상 참가자 동의서, 임상 참가자 식별 방법 등에 대한 항목을 포함하여야 합니다.<br>
                        &#10020; 초기 임상 시험 장소에 대한 정보가 있어야 합니다.<br>
                        &#10020; 임상 시험 장소에 대한 주기적인 모니터링이 필요합니다.<br>
                        &#10020; 부작용이나 기기의 결함 등에 대한 자료를 포함하여야 합니다.<br>
						</li>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<!----// 4th ----->
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">PMS란?</p>
					<ul>
						<li style="display:block;text-align:justify;font-weight:400;">‘PMS’란 시판 후 감시 시스템이라고도 하며, 제조업체가 EU 시장에 출시한 의료기기에서 얻은 경험을 사전에 수집하고 검토하기 위해 체계적인 절차를 수립하고, 수집된 자료를 최신 상태로 유지하기 위해 제조업체가 수행하는 모든 활동을 의미합니다.</li>
						<li style="display:block;text-align:justify;font-weight:400;">제조업체는 각 기기에 대해 위험 등급에 비례하고 기기 유형에 적합한 방식으로 시판 후 감시 시스템을 계획, 수립, 문서화, 구현, 유지 및 업데이트하여야 합니다. 시판 후 감시 시스템은 전체 수명 동안 기기의 품질, 성능 및 안정성에 관한 데이터를 능동적이고 체계적으로 수집, 기록 및 분석하고 필요한 결론을 도출하고 예방 및 시정조치의 결정, 실행 및 모니터링에 적합하여야 합니다.</li>
						<li style="display:block;text-align:justify;font-weight:400;">MDR에서는 제조업체에 대한 시판 후 요구 사항과 데이터를 사전에 수집하고 이러한 시판 후 활동 및 데이터의 분석을 문서화하고 보고 할 의무가 강화되었습니다.</li>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<!----// 6th ----->
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">PMS 보고서 작성</p>
					<ul style="display:block;text-align:left;font-weight:300;">
						<li style="font-weight:bold;">시판 후 감시 보고서 (Post-Market Surveillance Report, PMSR)</li>
						Class I 기기의 제조업체는 시판 후 감시 계획의 결과로 수집된 시판 후 감시 데이터의 분석 결과 및 결론을 요약 한 시판 후 감시 보고서를 준비하여 예방 및 시정에 대한 이론적 근거 및 설명을 작성해야 합니다. 필요한 경우 보고서를 업데이트하고 요청 시 관할 기관에 제공해야합니다.<br><br>
						<li style="font-weight:bold;">주기적 안전 업데이트 보고서 (Periodic Safety Update Report, PSUR)</li>
						Class IIa, Class IIb 및 Class III 기기의 제조업체는 각 기기에 대한 주기적인 안전 관리에 따른 결과 보고서 ('PSUR') 및 각 범주 또는 기기 그룹과 관련하여 사후 분석 결과 및 결론을 요약해야 합니다. 시장 감시 데이터는 시판 후 감시 계획의 결과로 취해진 예방 및 시정 조치에 대한 이론적 근거와 설명으로 수집됩니다.
                   	</ul>
                    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">PMCF & PSUR</p>
					<ul>
						<li style="display:block;text-align:justify;font-weight:300;">PMCF(Post-Market Clinical Follow-up)이란, PMS의 한 종류로 임상 평가에 대한 자료를 수집하고 업데이트 하는 프로세스로 MDR의 필수 요구사항입니다. 의료기기의 성능과 안전, 잔류위험에 대한 장기적인 데이터를 수집하고 입증하기 위해 고안되었습니다. 제조업체는 PMCF를 통해 얻은 임상 데이터와 PMS 보고서, 임상 평가 보고서, 리스크 평가 보고서 등의 데이터를 제출하여야 합니다.</li>
						
						<li style="display:block;text-align:justify;font-weight:300;">의료기기의 안전 및 임상 성능을 확인하고, 식별된 위험을 지속적으로 관리하며, 사실적인 증거에 입각한 위험을 감지하는 것이 PMCF의 목적입니다.
                        PMCF는 새로운 임상 연구, 의료기기 레지스트리에서 파생된 데이터 검토, 시판 전 임상시험을 진행한 고객의 후속조치 또는 이전에 의료기기를 사용했던 환자의 후속조치 등을 통해 이루어질 수 있습니다.
                        </li>
						
						<li style="display:block;text-align:justify;font-weight:300;">PSUR(Periodic Safety Update Report)이란, 승인된 의료기기에 대한 안전성 및 성능에 대한 평가를 제공하기 위한 문서입니다. 안정성 및 성능에 대한 새로운 위험 등을 식별하여 포괄적이고 비판적인 분석을 제시하는 것이 PSUR의 목적입니다.</li>
						
						<li style="display:block;text-align:justify;font-weight:300;">PClass IIb, Class III 등급의 의료기기를 제조하는 업체는 매년 PSUR을 제출해야 하며, Class IIa 등급의 의료기기를 제조하는 업체는 최소 2년에 한번 PSUR을 제출해야 합니다.</li>
						
						<li style="display:block;text-align:justify;font-weight:300;">업체는 PMS 데이터 분석에 대한 보고서를 인증기관에 제출해야 하며, 인증기관은 보고서를 검토한 이후 그 결과를 EUDAMED에 등재하여야 합니다.</li>
					</ul>
                    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC의 역량</p>
					<ul>
						<li style="display:block;text-align:justify;font-weight:300;">
						    IGC는 유럽의 크로아티아에 본사를 두고 있는 DNA Technologies Pacific과의 협력을 바탕으로 임상시험 실시에 대한 서비스를 제공합니다.
						</li>
						
						<li style="display:block;text-align:justify;font-weight:300;">
                        DNA Technologies Pacific은 임상시험 수탁기관으로서 CRO 업무를 수행하며, 조사에 따른 연구의 결과를 접목시켜 평가에 따른 임상 평가 보고서, PMCF 계획, PMCF 보고서 및 정기 안전 업데이트 보고서 작성을 지원하여 인증 획득 및 인증 유지를 효과적으로 수행할 수 있도록 돕고 있습니다.
                        </li>
						
					</ul>
                    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			
		</div>  <!--------//  div class="business_info" 종료  --------------->
		
	</div>
					

	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
			IGC는 임상시험 진행과 시스템 인증 및 CE인증 취득까지 의료기기 전반에 대한 다양한 서비스를 제공합니다.<br>
				<li><p><em><strong>01</strong></em><span>의료기기 CE 인증을 위한 임상시험 지원</span></p></li>
				<li><p><em><strong>02</strong></em><span>PMS 및 PMCF 진행을 위한 기술 지원</span></p></li>
				<li><p><em><strong>03</strong></em><span>임상시험 데이터 관리 지원</span></p></li>
				<li><p><em><strong>04</strong></em><span>의료기기 ISO 13485 시스템 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>의료기기 CE 인증</span></p></li>
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