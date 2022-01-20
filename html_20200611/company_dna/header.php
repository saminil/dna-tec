	<?php
		$css_file_url = preg_replace("'\/[^/]*\.php$'i", "/", $_SERVER['PHP_SELF']);
		$css_file_url = preg_replace("'\/[^/]*\.htm$'i", "/", $css_file_url);
		$css_file_url = preg_replace("'\/[^/]*\.html$'i", "/", $css_file_url);
		$css_file_url = preg_replace("'\/[^/]*\.php3$'i", "/", $css_file_url);
	?>
	<link href="<?php echo $css_file_url ?>style<?php if(!$common_css_src) echo ".dt_ori.".substr(str_replace("#",".",$theme_license),0,-11); else echo $common_css_src;?>.css" rel="stylesheet" type="text/css"> <?php //회사소개 관련 css 를 연결합니다. 레이아웃은 한단계 위 css_js/common.css 에서 제어합니다.	?>

	<?php 
		/*
			서브 상단 이미지 theme.subtop.php 에서 설정합니다.
		*/
	?>
	<section id="sub_visual">
		<div class="backgroundimg">
			<div class="visual_area" style="background:url('<?php echo $SUB_BACKGROUND[$tmenu_]?>') no-repeat top center;"></div>
		</div>
	</section>

	<section id="sub_wrapper">
		<div id="sub_menu">		
			<div class="sub_location">
				<div>
					<div class="cen"><a href="<?php echo G5_URL ?>/index.php"><i class="fa fa-home" aria-hidden="true"></i></a></div>
					<ul class="">
						<li>
							<span><?php echo $tmenu_?></span>
							<ul>
								<?php 
									// 1차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.

									while( list($k,$v) = each($first_menu) ){
								?>
									<li><a href="<?php echo $v?>" target="<?php echo $first_menu_target[$k]?>"><?php echo $k?></a></li>
								<?php } 
									reset($first_menu);
								?>
							</ul>
						</li>
					</ul>
					<ul class="dep2">
						<li>
							<span><?php echo $g5['title']?></span>
							<ul>
								<?php 
									// 2차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.

									while( list($k,$v) = @each($second_menu[$tmenu_]) ){
								?>
									<li><a href="<?php echo $v?>" target="<?php echo $second_menu_target[$tmenu_][$k]?>"><?php echo $k?></a></li>

										<?php 
											// 3차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.

											while( list($kkk,$vvv) = @each($third_menu[$tmenu_][$k]) ){
										?>
											<li class="dep3">											
												<a href="<?php echo $vvv?>" target="<?php echo $third_menu_target[$tmenu_][$k][$kkk]?>">└ <?php echo $kkk?></a>
											</li>
										<?php } 
											@reset($third_menu[$tmenu_][$k]);
										?>


								<?php } 
									@reset($second_menu);
								?>
							</ul>
						</li>
					</ul>						
					
				</div>
			</div>
		</div>