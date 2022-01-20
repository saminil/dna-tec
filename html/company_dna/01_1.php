<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "회사소개"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = "인사말"; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "3차메뉴페이지1"; //커스텀페이지의 타이틀을 입력합니다.
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
		<p class="eng"><em>3차메뉴</em> 페이지</p>
		<p class="stitle">고객을 가장 먼저 생각하는 기업, <br class="sview">고객이 먼저 자랑하는 기업이 되겠습니다.</p>

				

		<div class="company">
			<div class="ceo_img"><img src="<?php echo G5_THEME_URL;?>/html/company/image/01.jpg"></div>
			<div class="ceo_txt">
				<h2>
					안녕하십니까?<br>
					다온테마에 오신 것을 진심으로 환영합니다.
				</h2>
				<p>
					<strong class="point_b1">CSS기반 모든 기기 풀 반응형 다온테마 기업형</strong>
					
					다온테마는 CSS기반 모든 기기 풀 반응형으로 심플하지만 다 갖춘 테마입니다.<br>
					이곳은 인사말 내용이 들어갈 자리입니다.이곳은 인사말 내용이 들어갈 자리입니다.<br>
					이곳은 인사말 내용이 들어갈 자리입니다.이곳은 인사말 내용이 들어갈 자리입니다.이곳은 인사말 내용이 들어갈 자리입니다.이곳은 인사말 내용이 들어갈 자리입니다.<br>
					다온테마는 CSS기반 모든 기기 풀 반응형으로 심플하지만 다 갖춘 테마입니다.<br>
					이곳은 인사말 내용이 들어갈 자리입니다.이곳은 인사말 내용이 들어갈 자리입니다.<br>
					이곳은 인사말 내용이 들어갈 자리입니다.이곳은 인사말 내용이 들어갈 자리입니다.이곳은 인사말 내용이 들어갈 자리입니다.이곳은 인사말 내용이 들어갈 자리입니다.
				</p>
				<p>
					앞으로도 지속적인 관심과 참여, 그리고 많은 활용을 부탁드립니다.<br>
					감사합니다.
				</p>
				<p class="ceo_sign">다온테마 대표 <b>홍 길 동</b></p>
			</div>

			<div class="summary">
				<div class="con_arrow">회사개요</div>
				<div class="lview">
					<table class="tbl_type1">
					<colgroup>
						<col width="15%" />
						<col width="35%" />
						<col width="15%" />
						<col width="35%" />
					</colgroup>

					<tbody>
					<tr>
						<th>회사명</th>
						<td>다온테마</td>
						<th>대표</th>
						<td>홍길동</td>
					</tr>
					<tr>
						<th>설립일</th>
						<td>2010년</td>
						<th>사업영역</th>
						<td>홈페이지제작, 쇼핑몰제작, 웹컨텐츠제작</td>
					</tr>
					<tr>
						<th>사업장규모</th>
						<td>대지 00평 / 건평 00평</td>
						<th>주거래처</th>
						<td>(주)</td>
					</tr>
					</tbody>
					</table>
				</div>
				<div class="sview">
					<table class="tbl_type1">
					<colgroup>
						<col width="30%" />
						<col width="70%" />
					</colgroup>

					<tbody>
					<tr>
						<th>회사명</th>
						<td>다온테마</td>
					</tr>
					<tr>
						<th>대표</th>
						<td>홍길동</td>
					</tr>
					<tr>
						<th>설립일</th>
						<td>2010년</td>
					</tr>
					<tr>
						<th>사업영역</th>
						<td></td>
					</tr>
					<tr>
						<th>사업장규모</th>
						<td>대지 00평 / 건평 00평</td>
					</tr>
					<tr>
						<th>주거래처</th>
						<td>(주)</td>
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