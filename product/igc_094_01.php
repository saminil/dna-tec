<?php
	include_once('./_common.php');
$g5['title'] = '중국 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
        table tr td {
            border:1px solid;
            text-align:left;
            padding-left:10px;
            font-size:0.9em;
    }
    
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_china_registration_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_china_registration_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_china_registration_03.jpg') no-repeat center top; }

    
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">식품위생 등록</span> / 중국 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
                해마다 중국으로의 식품 수출이 증가하면서 중국으로 식품 수출 시 통관 문제가 매우 중요해지고 있다.<br><br>
                현재 한국 건강기능식품 뿐만 아니라 과자류 및 라면 류 등 다양한 식품의 중국 수출이 지속적인 성장세를 보이고 있다.<br><br>
                해마다 중국 식품 수출이 늘어나면서 중국으로 식품 통관하는 문제가 매우 중요해지고 있다. (CIQ检验检疫证明, CIQ 검사검역 증명서=위생허가)<br><br>
            </span></h2>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">수입수출구(进出口) 란 무엇인가?</p>
					<ul style="display:block;text-align:justify;">
                        한국 역시 1980년대에는 갑종무역업 등록 이란 제도를 통해서 수출 수입을 일정한 허가를 받은 업체만 할 수 있었습니다. 이는 해외 거래처에 대한 신뢰도 확보 및 외환을 효율적으로 관리 하기 위한 제도 였습니다. 현재는 일반 사업자 등록증만 보유 하고 있으면 언제든지 수출입을 할 수 있도록 제도가 변경 되었다.<br><br>
                        현재의 중국은 한국의 사업자등록증 에 해당 되는 사업자등록증를 가지고 있다고 하더라도 수입 수출을 할 수 있는 수입 수출구 허가를 추가로 받아야만 수출 수입을 할 수 있다. <br><br>
                        수입 수출구 대행 제도는 중국 정부에서 인정 하는 공식적인 제도 입니다. 전혀 불법이 아니며 수입 하는 사람이 진출구 허가가 없을 때 수입수출을 허가 받은 업체로 통관 하고 실제 납세 의무자는 실수입자 회사 이름으로 수입이 가능한 제도이다.<br><br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">수출 자 준비 서류</p>
					<ul  style="display:block;text-align:justify;">
                      <table cellspacing="0" cellpadding="0">
                        <col width="72">
                        <col width="167" span="2">
                        <col width="162">
                        <col width="66">
                        <col width="136">
                        <tr>
                          <td width="72" align="center">번호</td>
                          <td width="167" align="center">서류명(한국어)</td>
                          <td width="167" align="center">서류명(중국어)</td>
                          <td width="162" align="center">서류명(영어)</td>
                          <td width="66" align="center">발급</td>
                          <td width="136" align="center">발급 기관</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">1</td>
                          <td width="167">제조증명서(영문)</td>
                          <td width="167">制作证明书（英文）</td>
                          <td width="162">CERTIFICATE OF    MANUFACTURE</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">식품의약품안전처</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">2</td>
                          <td width="167">자유판매 증명서(영문)</td>
                          <td width="167">自由贩卖证明书（英文）</td>
                          <td width="162">CERTIFICATE OF    FREE SALES</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">식품의약품안전처</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">3</td>
                          <td width="167">위생증명서(영문)</td>
                          <td width="167">卫生证明（英文）</td>
                          <td width="162">HEALTH    CERTIFICATE</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">식품의약품안전처</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">4</td>
                          <td width="167">영문 사업자등록증</td>
                          <td width="167">英文营业执照</td>
                          <td width="162">CERTIFICATE OF    BUSINESS REGISTRATION</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">국세청</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">5</td>
                          <td width="167">공장신고증(영문)</td>
                          <td width="167">工厂申报证</td>
                          <td width="162">REGISTRATION    CERTIFICATION FORM</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">관할관청 or 자체제작</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">6</td>
                          <td width="167">영양성분 검사성적서</td>
                          <td width="167">营养成分 检测书</td>
                          <td width="162">PRODUCT    INSPECTION CERTIFICATION</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">제조공장</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">7</td>
                          <td width="167">제품포장지 도면</td>
                          <td width="167">产品包装纸 图面</td>
                          <td width="162">WRAPPING PAPER    MAP</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">수출자 또는 제조자</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">8</td>
                          <td width="167">품질 표시 스티커(중국어)</td>
                          <td width="167">食品品种标签</td>
                          <td width="162">LABEL STICKER</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">수출자 또는 제조자</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">9</td>
                          <td width="167">원산지 증명서</td>
                          <td width="167">原产地证明</td>
                          <td width="162">CERTIFICATION    OF ORIGIN</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">대한상공회의소</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">10</td>
                          <td width="167">인보이스</td>
                          <td width="167">发票</td>
                          <td width="162">COMMERCIAL    INVOICE</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">수출자</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">11</td>
                          <td width="167">패킹리스트</td>
                          <td width="167">箱单</td>
                          <td width="162">PACKING LIST</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">수출자</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">12</td>
                          <td width="167">업체별 제품정보리스트</td>
                          <td width="167">货物明细</td>
                          <td width="162">DETAIL PACKING    LIST</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">수출자</td>
                        </tr>
                      </table>
						<br>
						
						<li>이외에도 상품 특성에 따라 몇가지 서류가 더 추가될 수 있다.</li>
					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC의 역량 및 관련 제공 서비스</p>
					<ul style="display:block;text-align:justify;">
                       IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다. IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>


                       기본적으로 중국에 수출을 할 경우에는 현지 바이어회사가 중국 해관에 등록된 수입 라이센스가 있는 회사인지를 확인해야 합니다. 만약 라이선스가 없다면 정상통관이 이루어 지지 않는다. <br><br>

                       이런 상황에서 저희 IGC는 수입 수출구 회사를 Contact 하여 수입 수출구 대행 통관을 진행하고 수출에 필요한 무역 실무업무, 바이어와의 커뮤니케이션, 무역서류작성과 무역 업무 전반에 걸친 컨설팅, 배송, 통관 업무 등을 지원 할 수 있다. <br>
                       또 상품의 특성에 맞게 가장 적합한 비용과 신속하게 통관 하는 방법을 사전에 교류 하여  준비할 수 있다.<br><br>

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