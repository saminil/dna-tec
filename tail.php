<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<?php if (!defined("_INDEX_")) { ?>
		</div>
	</div>
</div>
<? } ?>

<script src="<?php echo G5_THEME_URL ?>/js/css3-animate-it.js"></script>


<!-- 하단 시작 { -->
<footer id="footer" <?php if (defined("_INDEX_")) { ?>class="main"<? }?>>
    <h2></h2>
    <div class="wrap2 s_mobile_none">
        <ul class="wrap">
            <li>
                <strong>한국</strong>
                <p>
                    B-402-6, Daeryung techno town,606, Seobusaet-gil, Geumcheon-gu, Seoul, Republic of Korea<br>
                    Tel: +82 2-6749-1161<br>
                    Fax: +82 2-6749-0711
                </p>
                
            </li>
            <li>
                <strong>크로아티아/EU</strong>
                <p>
                    Razgled 18, 10000 Zagreb,Croatia<br>
                    Tel: +385 91 6178 410<br>
                    e-mail: info@dnatech.eu<br>
                    Web site: www.dnatech.eu
                </p>
                
            </li>
            <li>
                <strong>중국</strong>
                <p>
                    No.846, Building 1, Jinguan No.2 North Street, Shunyi District, Beijing City, China<br>
                    Tel: +86 010-61409120
                </p>
                
            </li>
            <li>
                <strong>미국</strong>
                <p>
                    904 E. Windsor Road #102, Glendale, CA 91205
                    Tel: +1 213 626 1544<br>
                    Fax: +1 213 261 0797
                </p>
            </li>
        </ul>
    </div>
	<div class="wrap">
		<h1><a href="/">하단로고</a></h1>
		<nav class="gnb" style="margin-top:-5px;">
			<ul style="position:relative;left:0px;">
			    <li>
			        <a href="<?php echo get_pretty_url('content', 'privacy'); ?>"><span>개인정보보호정책</span></a>
			    </li>
				<li>
				    <a href="<?php echo get_pretty_url('content', 'provision'); ?>"><span>이용약관</span></a>
				</li>
				<!--<li class="sites" style="padding: 10px 5px;clear:both;">
                    <select onchange="copyrtChgUrl(this.value)">
                          <option value=""> 관련사이트 </option>
	                      <option value="http://dna-tec.org">WWW.DNA-TEC.ORG</option>
	                      <option value="http://rus-test.org">WWW.RUS-TEST.ORG</option>
	                      <option value="http://igcert.org">WWW.(구)IGCERT.ORG</option>
	                      <option value="https://www.gicert.org/?l=ko">WWW.GICERT.ORG</option>
	                      <option value="http://www.patscorp.com/">WWW.PATSCORP.COM</option>
	                      <option value="https://www.asiaitc.com/">WWW.ASIAITC.COM</option>
                          <option value="http://aemiworld.com/">WWW.AEMIWORLD.COM</option>
                          <option value="https://data.igcert.org/">WWW.DATACERTORG</option>
                          <option value="https://blog.naver.com/kate_0432">네이버 블로그1</option>
                          <option value="https://blog.naver.com/woheni19">네이버 블로그2</option>
                          <option value="https://blog.naver.com/djrrlforyou">네이버 블로그3</option>
                          <option value="https://blog.naver.com/kate_0432">네이버 블로그4</option>
                    </select>
				</li>-->
			</ul>			
		</nav>
		<br class="s_mobile_only" />
		<div class="f_left">
			<dl style="position: relative">  
				<dt>회사명 : (주)디엔에이테크퍼시픽</dt>&nbsp; &nbsp;<br class="s_mobile_only" />
				<dt>사업자번호 : 895-87-01524</dt>
				<dt>서울특별시 금천구 서부샛길 638, 4층 402-6호(가산동,대륭테크노타운7차)</dt><br />
				<dt>TEL : 02) 6749-1161 &nbsp; Fax : 02) 6749-0711 &nbsp; <br class="s_mobile_only">E-mail : info@dna-tec.org<a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>" class="f_btn_user" title="관리자 로그인">&nbsp;&nbsp;&nbsp;&nbsp;Log In</a></dt><br />				
			</dl>
			<p class="copyright"><strong style="font-weight:300;word-break:keep-all"> Copyright &copy; 2019 (주)디엔에이테크퍼시픽 All Rights Reserved.</strong></p>
			
		</div>
	</div>
    <!--<div class="icon">
        <a href="javascript:" id="top_btn"><i class="fa fa-angle-up" aria-hidden="true"></i><span class="sound_only">상단으로</span> </a>
        <a href="http://rustest.cafe24.com//bbs/login.php" class="f_btn_user" title="회원메뉴">Log In</a>
    </div>-->
    <div id="rightQuick">
	    <header><i class="fa fa-bars" aria-hidden="true"></i> Quick Menu</header>
	    <ul>
		    <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> <span>영문사이트</span></a></li>
		    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> <span>구글</span></a></li>
		    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> <span>유튜브</span></a></li>
		    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> <span>인스타그램</span></a></li>
		    <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> <span>카카오톡</span></a></li>
		    <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> <span>네이버톡톡</span></a></li>
		    <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> <span>페이스북</span></a></li>
		    <li><a href="#" class="top_btn"><i class="fa fa-angle-double-up" aria-hidden="true"></i> <span>TOP</span></a></li>
	    </ul>
    </div>
</footer>
    <script>
    $(function() {
        $(".top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '1000');
            return false;
        });
    });
    </script>
    
    <!---FamilySites 시작------>
    <script>
    function copyrtChgUrl(url){
	if(url){
		window.open(url);
	}
    }
    <!---FamilySites 종료------>
</script>
<!-- } 하단 끝 -->

<!-- 20200402 QuickMenu -->

<!----------
tail.php 60라인~ 추가
head.php 204,207라인 추가
design.css 564라인~ 추가
------>
<?php if (!defined("_INDEX_")) { ?>
<!--
<div id="rightQuick">
	    <header><i class="fa fa-bars" aria-hidden="true"></i> Quick Menu</header>
	    <ul>
		    <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> <span>영문사이트</span></a></li>
		    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> <span>구글1</span></a></li>
		    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> <span>유튜브</span></a></li>
		    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> <span>인스타그램</span></a></li>
		    <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> <span>카카오톡</span></a></li>
		    <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> <span>네이버톡톡</span></a></li>
		    <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i> <span>페이스북</span></a></li>
		    <li><a href="#" class="top_btn"><i class="fa fa-angle-double-up" aria-hidden="true"></i> <span>TOP</span></a></li>
	    </ul>
</div>
-->
<? } ?>
<!-- /20200402 QuickMenu -->

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>