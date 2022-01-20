<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "인증서비스"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "러시아"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "의료기기등록"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //공통 상단을 연결합니다.
?>


    <!-----페이지 상단 글로벌 네비게이션-------->
	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><a href="ru01_trcueac.php"><?php echo $tmenu_?></a></li><!----인증서비스(러시아) 페이지 연결-------->
			<?php if($tmenu2_){?><li><a href="ru01_trcueac.php"><?php echo $tmenu2_?></a></li><?php }?><!----러시아 페이지 연결-------->
			<li><a href="ru07_medical_divice.php"><?php echo $g5['title']?></a></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			고객님의 방문을 환영합니다.
		</p>
	</div>


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
		구매하신 러스테스트 퍼스픽에 사용하신다면 적용하지 않아도 됩니다.
		러스테스트 퍼스픽가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
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

		
	.business_type5 h1{font-size:3em; font-weight:700; color:#111; text-align:center;  margin:0 auto; margin-bottom:0px; }
	.business_type5 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
	.business_type5 h2:after{display:block; position:relative; bottom:0; left:50%; margin-left:-2px; content:""; width:2px; height:30px; background-color:#195883; margin-top:20px;}
	.business_type5 h3{font-size:1.1em; color:#666; text-align:center; margin-bottom:50px;}
    
    .business_type5 h4{font-size:1.1em; color:#0071bc; text-align:left; margin-bottom:0px;}
    
    
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
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">의료기기 등록</span> &nbsp; 러시아 (Russia)</h1>
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
		<h2>RUS-TEST PACIFIC 러스테스트 퍼시픽</h2>		
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
						<img src="./image/EAC21_Ex_mdr.jpg" alt="의료기기 등록 Class 분류">
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
						<img src="./image/EAC22_Ex_mdr.jpg" alt="의료기기 등록 진행 시험 종류">
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
						<img src="./image/EAC17_Ex_sgr.jpg" alt="의료기기 등록 유효기간">
					</dt>
					<dd>
						<strong>의료기기 등록 유효기간</strong>
						영구 (인증서에 등록된 해당제품이 단종될 때까지 유효합니다.)
						<!-----
						<p>독성 시험</p>
						<p>기능 시험</p>
						<p>전자파 검사</p>
						<p>임상 시험</p>
						----->
					</dd>
				</dl>	
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/EAC23_Ex_mdr.jpg" alt="의료기기 등록 절차">
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
						<img src="./image/EAC18_Ex_sgr.jpg" alt="의료기기 등록 제출 서류">
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
                        <li>&nbsp; -등록 프로세스에는 GMP (Good Manufacturing Practices) 심사가 필요하지 않습니디. 하지만 이러한 심사를 도입 할 법안은 가까운 시일 내에 시행 될 예정입니다.</li>
                        <li>&nbsp; -일반적으로 등록 비용은 필요한 테스트 범위에 따라 달라집니다.</li>
	
					</dd>
				</dl>				
			</li>
        
			<li>
				<dl>
					<dt>
						<img src="./image/eac_mark09.jpg" alt="의료기기 등록 확인">
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
          <h2 class="con_arrow"><p><strong style="color:#1F88E5;font-size:1.9em;">RUS TEST PACIFIC 고객님께서 받는 혜택</strong></p></h2>
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
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>