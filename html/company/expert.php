<?php 	
	include "../../../../common.php";
	$tmenu_ = "회사안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "전문가그룹"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "전문가그룹"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	//include_once('header.php'); //공통 상단을 연결합니다.
?>

<!--<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>-->


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
        .page_title{width:90%;margin: 0 auto;word-break: keep-all}
	    .page_title h1{width:100%; text-align:center; font-size:2.5em; font-weight:600; color: #2797c8}
	    .page_title h1:after {content:""; clear:both; display:block; width:30px; margin:40px auto 0; border:1px solid #000;}
	    .page_title h2{width:100%; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }
    
        .timeline {display: flex;flex-direction: column;width: 90%;margin: 0 auto 5%;font-size: 1.1em;line-height: 1.8}
        .timeline__event {background: #fff;margin-bottom: 20px;position: relative;display: flex;margin: 20px 0;border-radius: 8px;box-shadow: 0 30px 60px -12px rgba(50, 50, 93, 0.25),0 18px 36px -18px rgba(0, 0, 0, 0.3),0 -12px 36px -8px rgba(0, 0, 0, 0.025);}
        .timeline__event__title {font-size: 1.2em;line-height: 1.8;font-weight: 600;color: #005bab;letter-spacing: 1.5px;}
        .timeline__event__content {padding: 20px}
        .timeline__event__date {color: #71bdff;font-size: 1.6em;font-weight: 600;white-space: nowrap;}
        .timeline__event__icon {border-radius: 8px 0 0 8px;background: #005bab;display: flex;align-items: center;justify-content: center;flex-basis: 20%;font-size: 1rem;color: #71bdff;padding: 20px;}
        .timeline__event__description {flex-basis: 60%;}
        .timeline__event__description p strong {position: relative;margin-left: 30px}
        .timeline__event__description p strong::before {content: "";display: block;width: 8px;height: 8px;background: #525f7f;border-radius: 50%; position: absolute;top: 50%;left: -25px;transform: translate(50%, -50%)}
        .timeline__event--type2 .timeline__event__date {color: #7ce2ff;}
        .timeline__event--type2 .timeline__event__icon {background: #36b1d4;color: #7ce2ff;}
        .timeline__event--type2 .timeline__event__title {color: #36b1d4;}
        .timeline__event--type3 .timeline__event__date {color: #ffc495;}
        .timeline__event--type3 .timeline__event__icon {background: #f48025;color: #ffc495;}
        .timeline__event--type3 .timeline__event__title {color: #f48025;}
    
    
    @media (max-width: 786px) {
          
          .timeline__event {flex-direction: column;}
          .timeline__event__icon {border-radius: 4px 4px 0 0;}
        }
    
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */    
    
</style>


<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="timeline_wrap">
    <div class="page_title">
        <h1 class="sub_tit"><span class="fc_pointer">전문가그룹 안내</span></h1><br><br>
        <h2 class="sub_tit2" style="word-break: keep-all">
            DNA TECHNOLOGIES PACIFIC의 전문가 그룹을 소개합니다.
        </h2><br><br>
    </div>
    <div class="timeline_wrap animatedParent animateOnce" data-sequence="500">
        <div class="timeline">
            <div class="timeline__event timeline__event--type1 animated fadeInUp go" data-id="1">
                <div class="timeline__event__icon ">
                    <i class=""></i>
                    <div class="timeline__event__date">
                        원&nbsp;&nbsp;&nbsp;장
                    </div>
                </div>
                <div class="timeline__event__content">
                    <div class="timeline__event__title">
                        Dr. Martina Rihtar Zanetic
                    </div>
                    <div class="timeline__event__description">
                        <p>
                            <strong>1995.10 ~ 1998.05</strong>&nbsp;&nbsp;Veterinary Faculty, Freie Universität Berlin, Germany
                        </p>
                        <p>
                            <strong>1998.10 ~2004.07</strong>&nbsp;&nbsp;자그레브 대학교, 수의학 박사
                        </p>
                        <p>
                            <strong>2007.02.21</strong>&nbsp;&nbsp;수의학, 농림부, 임업 수자원 관리, 수의학 국가자격시험 자격 취득
                        </p>
                        <p>
                            <strong>2005.11 ~ 2008.04</strong>&nbsp;&nbsp;Production laboratory equipment and glassware factory 의료 대표
                        </p>
                        <p>
                            <strong>2008.10 ~ 2010.03</strong>&nbsp;&nbsp;TLOS d.d., Radnicka cesta 21, 10000 Zagreb 대표
                        </p>
                        <p>
                            <strong>2011.01 ~ 2012.01</strong>&nbsp;&nbsp;임상 시험 연구원
                        </p>
                        <p>
                            <strong>2017.09 ~ 2018.04</strong>&nbsp;&nbsp;Site Identification team 근무
                        </p>
                        <p>
                            <strong>2013.04 ~</strong>&nbsp;&nbsp;Clinical Research 임상 시험 연구원 II
                        </p>
                        <p>
                            <strong>2012.01 ~</strong>&nbsp;&nbsp;Clinical Research 임상 시험 연구원
                        </p>  
                    </div>
                </div>
            </div>
            <div class="timeline__event timeline__event--type2 animated fadeInUpShort go" data-id="2">
                <div class="timeline__event__icon">
                  <i class="lni-burger"></i>
                  <div class="timeline__event__date">
                    부&nbsp;&nbsp;&nbsp;장
                  </div>
                </div>
                <div class="timeline__event__content">
                  <div class="timeline__event__title">
                    손 민 경
                  </div>
                  <div class="timeline__event__description">
                    <p>
                        <strong>2005.03 ~ 2010.02</strong>&nbsp;&nbsp;숙명여대 화학과 졸업
                    </p>
                    <p>
                        <strong>2009.07 ~ 2010.07</strong>&nbsp;&nbsp;서광하이테크㈜ 근무
                    </p>
                    <p>
                        <strong>2010.08 ~ 2019.07</strong>&nbsp;&nbsp;㈜아이지씨인증원 근무
                        <span style="display: block;text-indent: 1.8em;font-size: 14px">: ISO 13485 선임심사원</span>
                        <span style="display: block;text-indent: 1.8em;font-size: 14px">: ISO 22000, FSSC 22000, FDA VQIP 선임 심사원</span>
                        <span style="display: block;text-indent: 1.8em;font-size: 14px">: ISO 22716 선임심사원</span>
                        <span style="display: block;text-indent: 1.8em;font-size: 14px">: 의료기기 CE 선임 심사원</span>
                    </p>
                    <p>
                        <strong>2019.08 ~</strong>&nbsp;&nbsp;㈜디앤에이테크퍼시픽 전문위원
                        <span style="display: block;text-indent: 1.8em;font-size: 14px">: ISO 경영시스템, 의료기기 CE</span>
                    </p>
                  </div>
                </div>
            </div>
            <div class="timeline__event timeline__event--type3 animated fadeInUpShort go" data-id="3">
                <div class="timeline__event__icon">
                  <i class="lni-slim"></i>
                  <div class="timeline__event__date">
                    과&nbsp;&nbsp;&nbsp;장
                  </div>
                </div>
                <div class="timeline__event__content">
                  <div class="timeline__event__title">
                    김 병 욱
                  </div>
                  <div class="timeline__event__description">
                    <p>
                        <strong>2010.03 ~ 2012.02</strong>&nbsp;&nbsp;고려대학교 대학원 생명공학과 식품공학 전공, 이학석사
                    </p>
                    <p>
                        <strong>2012.05 ~ 2014.03</strong>&nbsp;&nbsp;㈜실리콘화일 근무
                    </p>
                    <p>
                        <strong>2014.09 ~ 2016.09</strong>&nbsp;&nbsp;㈜에이뷰 근무
                    </p>
                    <p>
                        <strong>2017.01 ~ 2017.11</strong>&nbsp;&nbsp;㈜평원식품 근무
                    </p>
                    <p>
                        <strong>2018.03 ~ 2019.03</strong>&nbsp;&nbsp;나라통상㈜
                    </p>
                    <p>
                        <strong>2019.08 ~ 2020.12</strong>&nbsp;&nbsp;㈜아이지씨인증원
                        <span style="display: block;text-indent: 1.8em;font-size: 14px">: ISO 13485 선임심사원</span>
                        <span style="display: block;text-indent: 1.8em;font-size: 14px">: ISO 22000, FSSC 22000 선임 심사원</span>
                        <span style="display: block;text-indent: 1.8em;font-size: 14px">: ISO 22716 선임심사원</span>
                    </p>
                    <p>
                        <strong>2021.01 ~</strong>&nbsp;&nbsp;㈜디앤에이테크퍼시픽 전문위원
                        <span style="display: block;text-indent: 1.8em;font-size: 14px">: ISO 경영시스템</span>
                    </p>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>

<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>