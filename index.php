<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
 

   
    <!-----//메인 비주얼 시작------>
    <div id="main_visual">	
        <h3><a href="/bbs/write.php?bo_table=qa">견적받기</a></h3>
	    <div class="slider">
	
		    <div class="roll roll01">
			    <div class="sliderkit_text">
			        <h2>시스템 인증</h2>
			        <hr>
			    </div>
	        </div>		
	        <div class="roll roll02">
			    <h2>제품 인증</h2>
			    <hr>
            </div>
		
            <div class="roll roll03">
			    <h2>CE 인증 의료기기 PMCF 진행</h2>
			    <hr>
            </div>
            <div class="roll roll04">
			    <h2>임상시험 데이터 관리</h2>
			    <hr>
                <!---div id="background" class="player" data-property="{videoURL:'http://youtu.be/ehosYXD28WU',mute: true,showControls: false,useOnMobile: true,quality: 'highres',containment: '#background',loop: true,autoPlay: true,stopMovieOnBlur: false,startAt: 0,opacity: 1}" --->
                    <!--<iframe id="iframe_bgndVideo" class="playerBox" width="640" height="360" style="position: absolute; z-index: 0; width: 2134px; height: 1200px; top: 0px; left: 0px; overflow: hidden; opacity: 1; user-select: none; margin-top: -112.5px; margin-left: -245px; max-width: initial;" src="https://www.youtube.com/embed/ehosYXD28WU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="1" unselectable="on"></iframe>-->
                </div>
            </div>
         </div><!------++++++div class="slider" 종료 ++++++---->
	    <!---script src="http://rustest.cafe24.com/theme/dna/html/css_js/main.js"></script>   
            <script>
                $("#background").YTPlayer();
                $("#background").YTPPause();
            </script --->
    </div>

    <!-----//메인 공지사항 시작------>
    <section class="main_sec main_bbs">
	    <div class="wrap">
            <!-- 일반 최근글 /theme/구매테마/skin/latest/basic/latest.skin.php -->
            <section><?php echo latest('theme/basic', 'notice', 5, 40); ?></section>
            <!-- 일반 최근글 /theme/구매테마/skin/latest/basic/latest.skin.php -->
            <section><?php echo latest('theme/basic', 'free', 5, 40); ?></section>
            <!-- 질문과답변 최근글 /theme/구매테마/skin/latest/qna/latest.skin.php -->
            <section><?php echo latest('theme/qna', 'qa', 5, 40); ?></section>
	    </div>
    </section>

    <!-----//메인 DNA테크놀리지퍼시픽 회사소개 시작------>
    <section class="main_sec main_about">
        <div class="bg"></div>
        <div class="wrap animatedParent animateOnce" data-sequence="500">
            <div class="img animated fadeInRightShort" data-id="1">
                <img src="<?php echo G5_THEME_URL ?>/img/dna_main_about_img1.png" alt="회사소개_이미지1">
                <img src="<?php echo G5_THEME_URL ?>/img/dna_main_about_img2.png" alt="회사소개_이미지2">
            </div>
            <div class="text animated fadeInUpShort" data-id="2">
                <div class="animatedParent animateOnce" data-sequence="250">
                    <h2 class="animated fadeInUpShort" data-id="1"><!---about----> <strong>DNA테크놀리지퍼시픽</strong></h2>
                    <h3 class="animated fadeInUpShort" data-id="2">고객님의 성공을 위한 큰 힘이 되겠습니다.</h3>
                    <p class="animated fadeInUpShort" data-id="3">전문화된 컨설팅, 인증프로젝트를 통한<br class="pc_only" /> 고도화된 인사이트를 구축해 드립니다.</p>
                    <p class="animated fadeInUpShort" data-id="4">기업의 Identity와<br class="pc_only" /> 효과적인 해외진출을 고려한 최적의 제품&amp;시스템<br class="pc_only" /> 인증기관입니다.</p>
                    <div class="btn_area animated fadeInUpShort" data-id="5">
                        <a href="<?php echo G5_THEME_URL ?>/html/company/introduce.php">회사소개</a>
                        <a href="<?php echo G5_THEME_URL ?>/html/company/location.php">오시는길</a>
                    </div>
                    <dl class="cs animated fadeInUpShort" data-id="6">
                        <dt>고객행복센터</dt>
                        <dd>02.6749.1161 <small>평일 AM 09:00 ~ PM 6:00</small></dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    
    <!-----//메인 사업 핵심영역 시작------>
    <section class="main_sec main_product">
        <div class="wrap">
            <div class="product_tit">
                <h2>사업 핵심영역</h2>
                <p>고객님을 위한 DNA Technologies Pacific 핵심 가치</p>
            </div>
            <div class="product_con">
                <ul>
                    <li>
                        <div class="con_box bg1">
                            <a href="http://dnatec1.cafe24.com/theme/dna/html/manage/01_qual_envirn_safe.php">
                                <p class="cell" style="word-break:keep-all">
                                    <span class="more">시스템 인증</span>
                                    <i class="fa fa-plus"></i>
                                </p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="con_box bg2">
                            <a href="http://dnatec1.cafe24.com/theme/dna/html/product/07_ce_product.php">
                                <p class="cell" style="word-break:keep-all">
                                    <span class="more">제품 인증</span>
                                    <i class="fa fa-plus"></i>
                                </p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="con_box bg3">
                            <a href="http://dnatec1.cafe24.com/theme/dna/html/medical/24_mdr_pmcf.php">
                                <p class="cell" style="word-break:keep-all">
                                    <span class="more">CE 인증 의료기기 PMCF<br>진행</span>
                                    <i class="fa fa-plus"></i>
                                </p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="con_box bg4">
                            <a href="http://dnatec1.cafe24.com/theme/dna/html/medical/18_mdr_clinical.php">
                                <p class="cell" style="word-break:keep-all">
                                    <span class="more">임상시험 데이터 관리</span>
                                    <i class="fa fa-plus"></i>
                                </p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    
    </section>

    <!-----//메인 우리의 경쟁력 시작------>
    <section id="company_wrap">
        <div class="main_sec main_company clearfix">
            <div class="con_title clearfix">
                <p style="word-break:keep-all;">우리의 경쟁력</p>
                <span>분야별 전문가 그룹과 특화된 서비스 수행 능력</span>	
            </div>
            <div class="con_area">
                <ul>
                    <li class="larg">
                        <a href="http://dnatec1.cafe24.com/theme/dna/html/company/introduce.php">
                            <div class="img">
                                <img src="/theme/dna/img/company_img1.jpg" alt="가격경쟁력_국내 제조업체의 임상시험, 임상평가, MDR, PMS, PMCF 서비스를 최적의 비용으로 제공합니다." class="view_pc">
                                <img src="/theme/dna/img/company_img1_mobile.jpg" alt="가격경쟁력_국내 제조업체의 임상시험, 임상평가, MDR, PMS, PMCF 서비스를 최적의 비용으로 제공합니다." class="view_mobile">
                            </div>
                            <div class="tit">
                                <strong>가격경쟁력 </strong>
                                <span>
                                    국내 제조업체의 <br>
                                    임상시험, 임상평가, MDR, PMS, PMCF 서비스를 <br>
                                    최적의 비용으로 제공합니다.
                                </span>
                            </div>								
                        </a>
                    </li>
                    <li class="small">
                        <a href="http://dnatec1.cafe24.com/theme/dna/html/company/expert.php">
                            <div class="img">
                                <img src="/theme/dna/img/company_img3.jpg" alt="전문가 그룹_각 분야의 전문가 분들이 오랜 경험과 노하우로 빠르고 안정적인 서비스를 지원합니다.">
                            </div>
                            <div class="tit">
                                <strong>전문가 그룹</strong>
                                    <span>
                                        각 분야의 전문가 분들이<br class="s_mobile_none">
                                        오랜 경험과 노하우로<br>
                                        빠르고 안정적인 서비스를 지원합니다.</span>
                            </div>
                        </a>
                    </li>
                    <li class="small">
                        <a href="http://dnatec1.cafe24.com/theme/dna/html/company/service.php">
                            <div class="img">
                                <img src="/theme/dna/img/company_img2.jpg" alt="신속대응 능력_우리는 고객님의 핵심가치를 높이기 위해 항상 준비되어 있습니다. 언제든지 연락주시기 바랍니다.">
                            </div>
                            <div class="tit">
                                <strong style="color:#fff !important">신속대응 능력</strong>
                                <span style="color:#fff !important">
                                    우리는 고객님의 핵심가치를 높이기 위해<br> 
                                    항상 준비되어 있습니다.<br class="s_mobile_none"> 
                                    언제든지 연락주시기 바랍니다.</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>			
    </section>
    
  


<script>
$(document).ready(function(){
	$('#main_visual .slider').bxSlider({
		mode: 'fade',
		auto: true,
		autoControls: true,
		stopAutoOnClick: false,
		speed: 800, 
		pager: true,
		touchEnabled: true,		
		pause: 8000
	});

        
});

</script>


<script>
$(document).ready(function(){
	
});
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>