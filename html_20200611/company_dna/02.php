<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "회사소개"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "연혁"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //공통 상단을 연결합니다.

	
?>


	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><?php echo $tmenu_?></li>
			<?php if($tmenu2_){?><li><?php echo $tmenu2_?></li><?php }?>
			<li><?php echo $g5['title']?></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			다온테마의 발자취를 소개합니다.
		</p>
	</div>



	<div class="scontents">

		
		<div class="bg_vline"></div>
		<p class="eng"><em>DAON</em> HISTORY</p>
		<p class="stitle">지난 00년간 걸어온 발자취입니다.</p>

		<h3 class="history_top">현재<br> ~  <br>2010</h3>

		<div class="timeline timeline-alternating timeline-collapsing">
			<div class="timeline-block wow fadeInLeft">
				<div class="timeline-icon"></div>
				<div class="timeline-content">
					<p class="bar_count">2018.01 - 2018.06</p>
					<ul>
						<li>내용들어갈자리내용들어갈자리내용들어갈자리 </li>
						<li><img src="<?php echo G5_THEME_URL;?>/html/company/image/his01.jpg"></li>
					</ul>
				</div>
			</div>
			<div class="timeline-block wow fadeInRight">
				<div class="timeline-icon"></div>
				<div class="timeline-content">
					<p class="bar_count">2014 - 2017.10</p>
					<ul>
						<li>내용들어갈자리<br>내용들어갈자리</li>
						<li><img src="<?php echo G5_THEME_URL;?>/html/company/image/his01.jpg"></li>
					</ul>
				</div>
			</div>
			<div class="timeline-block wow fadeInLeft">
				<div class="timeline-icon"></div>
				<div class="timeline-content">
					<p class="bar_count">2013</p>
					<ul>
						<li>내용들어갈자리<br>내용들어갈자리내용들어갈자리내용들어갈자리<br>내용들어갈자리내용들어갈자리내용들어갈자리</li>
					</ul>
				</div>
			</div>
			<div class="timeline-block wow fadeInRight">
				<div class="timeline-icon"></div>
				<div class="timeline-content">
					<p class="bar_count">2011 - 2012.05</p>
					<ul>
						<li>내용들어갈자리내용들어갈자리내용들어갈자리</li>
					</ul>
				</div>
			</div>
			<div class="timeline-block wow fadeInLeft">
				<div class="timeline-icon"></div>
				<div class="timeline-content">
					<p class="bar_count">2010</p>
					<ul>
						<li>내용들어갈자리내용들어갈자리내용들어갈자리</li>
						<li><img src="<?php echo G5_THEME_URL;?>/html/company/image/his01.jpg"></li>
					</ul>
				</div>
			</div>
			<div class="timeline-block wow fadeInRight">
				<div class="timeline-icon"></div>
				<div class="timeline-content">
					<p class="bar_count">2011 - 2012.05</p>
					<ul>
						<li>내용들어갈자리내용들어갈자리내용들어갈자리</li>
					</ul>
				</div>
			</div>
		</div>

	</div>



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>