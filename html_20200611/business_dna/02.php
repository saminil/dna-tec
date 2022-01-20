<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "사업영역"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "Type02"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); // 공통 상단을 연결합니다.

	
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



	<section class="scontents">


		<div class="bg_vline"></div>
		<p class="eng"><em>BUSINESS</em> AREAS</p>
		<p class="stitle">주요사업내역을 안내해드립니다.</p>


		<div class="cross">
		<ul>
			<li class="wow fadeInLeft">
				<div class="cross_img"><img src="<?php echo G5_THEME_URL;?>/html/business/image/02_1.jpg"></div>
				<div class="cross_right">
					<h3 class="cross_tit">홈페이지 제작</h3>
					<p class="cross_txt">
						이곳은 사업영역 간략설명글이 들어갈자리입니다.<br>
						이곳은 사업영역 간략설명글이 들어갈자리입니다.<br>
					</p>
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=product2"><span class="btn_go">제품바로가기</span></a>
				</div>
				<table class="tbl" style="margin-top:0px;">
					<tbody>
						<tr>
							<th>방식</th>
							<td>전후진입형</td>
						</tr>					
						<tr>
							<th>펌프</th>
							<td>130 w</td>
						</tr>
						<tr>
							<th>구동모터</th>
							<td>220 V / 400 W</td>
						</tr>
						<tr>
							<th>탱크</th>
							<td>50 L</td>
						</tr>
						<tr>
							<th>정격 소비전력<br>(히타3Kw 제외시)</th>
							<td>1.6Kw</td>
						</tr>
						<tr>
							<th>제품규격(L x W x H)</th>
							<td>850 x 500 x 1,420</td>
						</tr>
						<tr>
							<th>사용전력</th>
							<td>단상 220 V / 60 Hz</td>
						</tr>
					</tbody>
				</table>
			</li>
			<li class="other_type wow fadeInRight">
				<div class="cross_img"><img src="<?php echo G5_THEME_URL;?>/html/business/image/02_2.jpg"></div>
				<div class="cross_right">
					<h3 class="cross_tit">쇼핑몰 제작</h3>
					<p class="cross_txt">
						이곳은 사업영역 간략설명글이 들어갈자리입니다.<br>
						이곳은 사업영역 간략설명글이 들어갈자리입니다.<br>
					</p>
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=product2"><span class="btn_go">제품바로가기</span></a>
				</div>
				<table class="tbl">
					<tbody>
						<tr>
							<th>방식</th>
							<td>전후진입형</td>
						</tr>					
						<tr>
							<th>펌프</th>
							<td>130 w</td>
						</tr>
						<tr>
							<th>구동모터</th>
							<td>220 V / 400 W</td>
						</tr>
						<tr>
							<th>탱크</th>
							<td>50 L</td>
						</tr>
						<tr>
							<th>정격 소비전력<br>(히타3Kw 제외시)</th>
							<td>1.6Kw</td>
						</tr>
						<tr>
							<th>제품규격(L x W x H)</th>
							<td>850 x 500 x 1,420</td>
						</tr>
						<tr>
							<th>사용전력</th>
							<td>단상 220 V / 60 Hz</td>
						</tr>
					</tbody>
				</table>
			</li>
			<li class="wow fadeInLeft">
				<div class="cross_img"><img src="<?php echo G5_THEME_URL;?>/html/business/image/02_3.jpg"></div>
				<div class="cross_right">
					<h3 class="cross_tit">웹컨텐츠 제작</h3>
					<p class="cross_txt">
						이곳은 사업영역 간략설명글이 들어갈자리입니다.<br>
						이곳은 사업영역 간략설명글이 들어갈자리입니다.<br>
					</p>
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=product2"><span class="btn_go">제품바로가기</span></a>
				</div>
				<table class="tbl">
					<tbody>
						<tr>
							<th>방식</th>
							<td>전후진입형</td>
						</tr>					
						<tr>
							<th>펌프</th>
							<td>130 w</td>
						</tr>
						<tr>
							<th>구동모터</th>
							<td>220 V / 400 W</td>
						</tr>
						<tr>
							<th>탱크</th>
							<td>50 L</td>
						</tr>
						<tr>
							<th>정격 소비전력<br>(히타3Kw 제외시)</th>
							<td>1.6Kw</td>
						</tr>
						<tr>
							<th>제품규격(L x W x H)</th>
							<td>850 x 500 x 1,420</td>
						</tr>
						<tr>
							<th>사용전력</th>
							<td>단상 220 V / 60 Hz</td>
						</tr>
					</tbody>
				</table>
			</li>
		</ul>
		</div>



	</section>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>