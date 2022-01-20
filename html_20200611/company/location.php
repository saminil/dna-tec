<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "회사안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "오시는길"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //공통 상단을 연결합니다.

	
?>
    <style>
			.logo_location img { display: block; margin: 0px auto; width:400px; }
	</style>

    <!-----페이지 상단 글로벌 네비게이션-------->
	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><a href="introduce.php"><?php echo $tmenu_?></a></li>
			<?php if($tmenu2_){?><li><?php echo $tmenu2_?></li><?php }?>
			<li><a href="location.php"><?php echo $g5['title']?></a></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			고객님의 방문을 환영합니다.
		</p>
	</div>


	<div class="scontents" style="text-aling:center;">
			<div class="bg_vline"></div>
			
			<p class="eng"><em>RUS-TEST PACIFIC</em>&nbsp; 찾아오시는길</p>
			<p class="stitle">찾아오시는 길을 자세히 알려드립니다.</p>
			
			<p class="logo_location"><img src="http://rus-test.org/img/main_imgs/logo_rustest_location.png"></p>
			<br><br>
			
			<div class="map_wrap wow fadeInUp">			
				<div class="g_map">
					<?php 
						//다음지도 안내
						// http://map.kakao.com/ 에서 주소로 검색하신 후 지도공유 > 지도 퍼가기로 아래 코드를 넣으시면 됩니다.
						// 코드를 넣으신 후 아래 주석의 1,2,3을 추가 또는 수정하시면 됩니다.
					?>

					<div id="daumRoughmapContainer1583103802736" class="root_daum_roughmap root_daum_roughmap_landing"></div>
					<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>				
					<script charset="UTF-8">
						daum_width = ($(".g_map").width()); // 1.추가
						if(daum_width == "") daum_width = 360; // 2.추가
						new daum.roughmap.Lander({
							"timestamp" : "1583103802736",
							"key" : "xabq",
							"mapWidth" : daum_width, // 3.수정
							"mapHeight" : "400"
						}).render();
					</script>
				</div>
						
<br>							
								
										
				<div class="map_info">
					<div class="con_box">
                        <h2><span style="color:#1F88E5"> 오시는길</span></h2>
						<table>
						<tbody>
							<tr>
								<th>주소</th>
								<td>(08504) 서울특별시 금천구 서부샛길 638, 대륭테크노타운7차 502</td>
							</tr>
							<tr>
								<th>전화</th>
								<td>02-6749-1160~1</td>
							</tr>
							<tr>
								<th>팩스</th>
								<td>02-6749-0711</td>
							</tr>
							<tr>
								<th>이메일</th>
								<td><a href="info@rus-test.org">info@rus-test.org</a></td>
							</tr>
						</tbody>
						</table>
					</div>
					
					<br>
					
					<div class="con_box">
                        <h2><span style="color:#1F88E5"> 대중교통 이용시</span></h2>
						<table>
						<tbody>
							<tr>
								<th>지하철</th>
								<td>&nbsp; 1호선 : 가산디지털역 6번출구 (도보 17분소요, 약 1km)<br>
								    &nbsp; 7호선 : 가산디지털역 6번출구 (도보 14분소요, 약 1km)</td>
							</tr>
							<tr>
								<th>버스</th>
								<td>
									① 간선버스 : 금천05(하차 후 도보)<br>
									② 일반버스 : 571, 652(차하 후 도보)
								</td>
							</tr>
							<tr>
								<th>자동차</th>
								<td>주차 가능/30분 무료</td>
							</tr>
						</tbody>
						</table>
					</div>
				</div>

		</div>
	</div>

<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>