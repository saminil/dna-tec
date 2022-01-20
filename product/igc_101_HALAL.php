<?php
	include_once('./_common.php');
$g5['title'] = '할랄 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:13px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
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
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_HALAL_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_HALAL_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_HALAL_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_HALAL_04.jpg') no-repeat center top; }
    
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
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */


	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">HALAL</span> / 할랄 제품인증 소개</h1>
		<ul style="display:block;text-align:justify;line-height:2.5em;">
            &#10046; 할랄(HALAL)의 사전적 의미는 ‘허용되는 것’을 의미합니다.<br>        		    
            &#10046; 할랄은 생활 전반에 걸쳐 이슬람법에 따라 사용이 허용되는 것을 의미하며, 음식, 화장품 과 의약품 등 생활 전반에 걸친 모든 것이 해당됩니다.<br>
            &#10046; 무슬림이 먹을 수 있는 음식은 ‘할랄식품’이라 하여 별도로 규정하고 있으며 공산품의 경우 할랄 식품에는 할랄 인증마크를 붙이고 있습니다. <br>
            &#10046; 할랄 인증과정의 철저한 위생검사를 통해 할랄인증은 이슬람권에서 일종의 품질보증 마크로 여겨지고 있습니다.<br>
            &#10046; 인도네시아의 경우 ‘신할랄인증법’을 시행하고 있습니다<br>
            &#10174; 이에 따라 이전에는 할랄 인증이 없더라도 제품 유통이 가능했으나 19년 10월 17일부터 일정 계도기간을 거친 후, 할랄 인증이 본격적으로 의무화 될 예정이므로 할랄 인증의 중요성은 더욱 커지고 있습니다.<br>
		</ul>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">할랄 인증 -MUI 할랄 인증</p>
					<ul style="display:block;text-align:justify;">
                      MUI인증은 인도네시아의 할랄인증으로, 타 국가의 할랄 인증보다도 받기가 어려운 제품으로 인지되고 있으며, 해외 기업들도 이 인증은 획득 절차가 까다로운 만큼 공신력이 있다고 판단되는 인증입니다. 인도네시아로 수출하고 있는 제품에 대해서 자국의 할랄 인증 기관을 통한 인증 마크를 부착하는 대신 인도네시아 MUI 할랄 인증을 받아 진행하는 경우도 발생하고 있습니다. 수요 또한 2014년 이후 MUI 할랄 인증을 제품 수가 급속도로 증가세를 보이고 있어 공신력과 인지도를 모두 확보한 인증입니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
	
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">할랄(Halal)과 하람(Haram)</p>
					<ul style="display:block;text-align:justify;">
                        할랄이란 사전적 의미뿐만 아니라 제품의 전 생산과정에서 철저한 검증을 거쳤다는 의미를 가지므로 비 이슬람 사이에서도 인기가 높아지고 있습니다.<br>
                        
                        할랄은 의무도에 따라 아래 세가지로 나뉩니다.<br>
                        <span style="line-height;2.5em;">
                        &nbsp; &nbsp; &#10044; 파르드 : 반드시 해야 할 의무<br>
                        &nbsp; &nbsp; &#10044; 만두브 : 하도록 권장되는 것<br>
                        &nbsp; &nbsp; &#10044; 무바흐 : 법과 무관한 행위<br><br>
                        </span>

                        하람은 할랄의 반대 개념으로 ‘금지된’ 이라는 의미를 가지고 있습니다. 대표적인 하람은 돼지, 피, 알코올 등이 있으며 이러한 재료를 사용한 제품을 하람이 됩니다.<br>

					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">할랄 인증 제품 요구사항</p>
					<ul style="display:block;text-align:justify;line-height:2.5em;">
                      &#10050; 제품의 브랜드 또는 명칭은 하람인 것 또는 이슬람 율법에서 부적절한 행위를 연상시키는 이름을 절대로 사용해서는 안 된다.<br> 
                      &#10050; 제품의 특성 또는 감각적 설명은 하람 제품 또는 MUI 파트와에서 하람 제품으로 명시<br>
                      &#10050; 하고 있는 것을 절대로 연상시켜서는 안 된다.<br>
                      &#10050; 모든 소매 식품에 대해, 모든 제품은 인도네시아 내에서 동일 브랜드로 유통되어야 하며, 모든 제품은 반드시 할랄 인증 등록을 해야 한다. 동일 브랜드의 일부 제품만을 등록하는 것은 허용되지 않는다.<br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">할랄 인증 절차 및 제출 서류</p>
					<ul style="display:block;text-align:justify;">
					<span style="font-weight:bold;color:#999933;"> &#10049; 인증 절차</span><br>
					<span style="line-height:2.5em;">
                       1.	할랄 인증 문의<br>
                       2.	신청 접수완료 및 예비심사<br>
                       3.	계약<br>
                       4.	서류 및 현장 심사<br>
                       5.	검토 및 시정조치 확인<br>
                       6.	인증서 발행<br>
                    </span>
                       <br>
                       할랄 인증을 위하여 아래와 같은 관련 서류가 제출되어야 하며 필요에 따라 추가 서류가 요구됩니다.<br>
                       <br>
                       <span style="font-weight:bold;color:#999933;"> &#10049; 제출 서류</span><br>
                    <span style="line-height:2.5em;">
                       1.	제조공정도<br>
                       2.	원산지 증명서<br>
                       3.	돼지 미 사용시설 증명서<br>
                       4.	에탄올 증명서<br>
                       5.	각종 출처를 확인할 수 있는 문서<br> 
                    </span>
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
