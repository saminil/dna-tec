<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "회사소개"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "비전"; //커스텀페이지의 타이틀을 입력합니다.
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
			홈페이지를 방문해주셔서 감사합니다.
		</p>
	</div>



	<div class="scontents">
		

		
		<div class="bg_vline"></div>
		<p class="eng"><em>DAON</em> VISION</p>
		<p class="stitle"> 세계 초일류의 반도를 선도하는 글로벌 리딩기업으로 도약하겠습니다</p>


		<div class="company">



			<div class="vision">
				<div class="vision_tit">
					" <font>고객</font>과 함께 <font>상생</font>하는 기업 "
				</div>
				<div class="vision_area">
				<ul>
					<li class="detail01">						
						<div class="txtWrap">
							<i class="far fa-smile"></i>
							<p class="tit"><span>01</span>고객만족 친절서비스</p>
							<p class="txt">고객 최우선주의로 행동하고 실천하는 고객지향 정신</p>
						</div>
					</li>
					<li class="detail02">						
						<div class="txtWrap">
							<i class="fas fa-cogs"></i>
							<p class="tit"><span>02</span>끊임없는 연구개발과 투자</p>
							<p class="txt">전문기술력을 바탕으로 엄격한 품질관리를 통해 생산</p>
						</div>
					</li>
					<li class="detail03">
						<div class="txtWrap">
							<i class="fas fa-rss"></i>
							<p class="tit"><span>03</span>지속적인 사업다각화</p>
							<p class="txt">품질 혁신 생산능력 향상을 통해 산업 발전에 기여</p>
						</div>
					</li>
					<li class="detail04">
						<div class="txtWrap">
							<i class="fas fa-users"></i>
							<p class="tit"><span>04</span>글로벌 인재경영</p>
							<p class="txt">전세계를 향해 도전할 수 있는 글로벌 인재양성</p>
						</div>
					</li>
				</ul>
				</div>
			</div>


	</div>



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>