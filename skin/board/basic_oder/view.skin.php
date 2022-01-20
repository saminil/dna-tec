<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->

<article id="bo_v" style="width:<?php echo $width; ?>">
    <header>
        <h2 id="bo_v_title">
            <?php if ($category_name) { ?>
            <span class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 ?></span> 
            <?php } ?>
            <span class="bo_v_tit">
            <?php
            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?></span>
        </h2>
    </header>

    <section id="bo_v_info">
        <h2>페이지 정보</h2>
        <span class="sound_only">작성자</span> <strong><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></strong>
        <span class="sound_only">댓글</span><strong><a href="#bo_vc"> <i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo number_format($view['wr_comment']) ?>건</a></strong>
        <span class="sound_only">조회</span><strong><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view['wr_hit']) ?>회</strong>
        <strong class="if_date"><span class="sound_only">작성일</span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong>

    </section>


				<div class="view-padding">
					<?php
						// 이미지 상단 출력
						$v_img_count = count($view['file']);
						if($v_img_count) {
							echo '<div class="view-img">'.PHP_EOL;
							for ($i=0; $i<=count($view['file']); $i++) {
								if ($view['file'][$i]['view']) {
									echo get_view_thumbnail($view['file'][$i]['view']);
								}
							}
							echo '</div>'.PHP_EOL;
						}
					 ?>


				<style>
				.page {
					width: 21cm;
					min-height: 29.7cm;
					padding: 2cm;
					margin: 1cm auto;
					border: 1px #D3D3D3 solid;
					border-radius: 5px;
					background: white;
					box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
				}
				.subpage {
					padding: 1cm;
					border: 5px red solid;
					height: 256mm;
					outline: 2cm #FFEAEA solid;
				}

				@page {
					size: A4;
					margin: 0;
				}
				@media print {
					.page {
						margin: 0;
						border: initial;
						border-radius: initial;
						width: initial;
						min-height: initial;
						box-shadow: initial;
						background: initial;
						page-break-after: always;
					}
					.a {
						margin: 70px 0px;
						text-align: center;
						font-size: 140px;
						color: #2196F3;
					  }
				}
			
			.jb-wrap {
				width: 40%;
				margin: 10px auto;
				border: 1px solid #000000;
			}
			.jb-wrap img {
				width: 100%;
				vertical-align: middle;
			}
			.jb-text {
				padding: 5px 10px;
				background-color: yellow;
				text-align: center;
			}
				</style>

				<!-- 새창으로 인쇄 -->
				<script type="text/javascript">
				  var win=null;
				  function printIt(printThis)  {
					win = window.open('','offprint','width=900 height=1000');
					self.focus();
					win.document.open();
					win.document.write('<'+'html'+'><'+'head'+'><'+'style'+'>');
					win.document.write('body, td { font-family: Verdana; font-size: 10pt;}');
					win.document.write('<'+'/'+'style'+'><'+'/'+'head'+'><'+'body'+'>');
					win.document.write(printThis);
					win.document.write('<'+'/'+'body'+'><'+'/'+'html'+'>');
					win.document.close();
					win.print();
					win.close();
				  }
				</script>
				<? echo $wr_1; ?>
				<div style="float:right">
					<a href="javascript:printIt(document.getElementById('printme').innerHTML)">
					<span class="btn_print" title='프린트'>
					<a href="javascript:printIt(document.getElementById('printme').innerHTML)"><span class="btn_print" title='프린트'><i class='fa fa-print'></i></span></a><p>
				</div>

				<!-- 본문 내용 시작 { -->
				<div id="printme">
					<table cellspacing="0" style="width:100%;">
						<tbody>
							<tr style="height:30pt;">
								<td colspan="11" height="40" style="height:30pt;font-size:24pt;font-weight:700;text-decoration:underline;font-family:'새굴림', serif;text-align:center;">견 &nbsp;  적 &nbsp;  서</td>
							</tr>
							<tr style="height:19.25pt;">
								<td height="19" style="height:19.25pt;font-family:'새굴림', serif;"></td>
								<td style="font-family:'새굴림', serif;"></td>
								<td style="font-family:'새굴림', serif;"></td>
								<td style="font-family:'새굴림', serif;"></td>
								<td></td>
							</tr>
						</table>
						<br><br/>
						<table cellspacing="0"  width="320" height="200" style="float:right">
							<tr style="height:19.5pt;">

								<td rowspan="5" style="border-width:1pt .5pt 1pt 1pt;border-style:solid;border-color:#000000;font-family:'새굴림', serif;text-align:center;background:rgb(220,230,241);white-space:normal;width:17%">공<br><br><br/>급<br><br><br/>자</td>
								<td style="font-family:'새굴림', serif;text-align:center;border-top:1pt solid;border-right:.5pt solid;border-bottom:.5pt solid;background:rgb(220,230,241);width:30%">등 록  번  호</td>
								<td style="border-right:1pt solid #000000;border-left:none;font-family:'새굴림', serif;text-align:center;border-top:1pt solid;">xxx-xx-xxxxx</td>
							</tr>
							<tr style="height:19.5pt;">
								<td style="border-top:none;border-left:none;font-family:'새굴림', serif;text-align:center;border-right:.5pt solid;border-bottom:.5pt solid;background:rgb(220,230,241);width:30%">상호(법인명)</td>
								<td style="vertical-align:middle; border-right:1pt solid #000000;border-left:none;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;">xxxxxx</td> 
							

							</tr>



							<tr style="height:19.5pt;">
								<td style="border-top:none;border-left:none;font-family:'새굴림', serif;text-align:center;border-right:.5pt solid;border-bottom:none;background:rgb(220,230,241);">사 업 장 주 소</td>
								<td style="border-right:1pt solid #000000;border-left:none;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;">xxxxxxxxxxxxxxxxx 
								</br>
								xxxxxxxxxxx
								</td>

							</tr>
							<tr style="height:19.5pt;">
								<td style="border-left:none;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-right:.5pt solid;border-bottom:1pt solid;background:rgb(220,230,241);">전 화  번  호</td>
								<td style="border-left:none;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-right:.5pt solid;border-bottom:1pt solid;">xxx-xxxx-xxxx</td>
							</tr>
							<tr style="height:19.5pt;">
								<td style="border-top:none;border-left:none;font-family:'새굴림', serif;text-align:center;border-right:.5pt solid;border-bottom:1pt solid;background:rgb(220,230,241);">팩스</td>
								<td style="border-top:none;border-left:none;text-align:center;border-right:1pt solid;border-bottom:1pt solid;">xxxx-xxxx-xxxx</td>
							</tr>

							<tr style="height:19.5pt;">
								<td height="18" style="height:13.5pt;font-family:'새굴림', serif;"></td>
								<td style="font-family:'새굴림', serif;"></td>
								<td style="font-family:'새굴림', serif;"></td>
								<td style="font-family:'새굴림', serif;"></td>
								<td></td>
							</tr>
						</table>
							<tr>
								<td> <string style="font-size:15px; font-weight:700;">"항상 최선을 다하겠습니다."</string></td>
								<br></br>
								<td> <ins><string style="font-size:25px; "> <?php echo $view['wr_subject']; ?></string></ins></td>
								<td><string style="font-size:30px; font-weight:700;">귀하</string>  </td>
								<br></br>
								<td> <string style="font-size:15px; ">DATE / <?php echo date("Y 년", strtotime($view['wr_datetime'])) ?>&nbsp;<?php echo date("m", strtotime($view['wr_datetime'])) ?>&nbsp;월</string>&nbsp;&nbsp;&nbsp; 일</td>
								<br></br>
								<td><string style="font-size:15px; font-weight:700;">아래와 같이 견적 합니다.</string>  </td>
							</tr>

<!--
						<table cellspacing="0" style="width:100%;">

							<tr style="height:23pt;width:100%">
								<td style="font-weight:700;font-family:'새굴림', serif;text-align:center;border-width:1pt .5pt 0pt 1pt;border-style:solid;background:rgb(220,230,241);width:50%">수   주   업  
								체 </td>
								<td style="border-right:1pt solid #000000;border-left:none;font-size:10pt;font-family:'새굴림', serif;text-align:left;border-top:1pt solid;padding-left:30px;">xxxx</td>
							</tr>
							<tr style="height:23pt;width:100%">
								<td style="font-weight:700;font-family:'새굴림', serif;text-align:center;border-width:.5pt .5pt 0pt 1pt;border-style:solid;background:rgb(220,230,241);">발   주   일  
								자</td>
								<td style="border-right:1pt solid #000000;border-left:none;font-size:10pt;font-family:'새굴림', serif;text-align:left;border-top:.5pt solid;padding-left:30px;"><?php echo date("20y-m-d", strtotime($view['wr_datetime'])) ?></td>
							</tr>
							<tr style="height:23pt;width:100%">
								<td style="font-weight:700;font-family:'새굴림', serif;text-align:center;border-width:.5pt .5pt 0pt 1pt;border-style:solid;background:rgb(220,230,241);">납   품   일  
								자</td>
								<td style="border-right:1pt solid #000000;border-left:none;font-size:10pt;font-family:'새굴림', serif;text-align:left;border-top:.5pt solid;padding-left:30px;"><?php echo date("20y-m-d", strtotime($view['wr_datetime'] . " +7 ")) ?></td>
							</tr>
							<tr style="height:23pt;width:100%">
								<td style="font-weight:700;font-family:'새굴림', serif;text-align:center;border-width:.5pt .5pt 1pt 1pt;border-style:solid;background:rgb(220,230,241);">대금  지불  방법</td>
								<td style="border-right:1pt solid #000000;border-left:none;font-size:10pt;font-family:'새굴림', serif;text-align:left;border-top:.5pt solid;border-bottom:1pt solid;padding-left:30px;">송금</td>
								</tr><tr style="height:14.25pt;"><td height="19" style="height:14.25pt;font-family:'새굴림', serif;"></td>

							</tr>
						</table>
-->
						<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;width:100%;">

							<tr style="height:30pt">
								<th colspan="2" style="font-weight:700;font-family:'새굴림', serif;text-align:center;border-top:1pt solid;border-right:.5pt solid;border-bottom:1pt double;border-left:.5pt solid #000000;width:5%;">No</th>
								<th colspan="2" style="font-weight:700;font-family:'새굴림', serif;text-align:center;border-top:1pt solid;border-right:.5pt solid;border-bottom:1pt double;width:25%;">제품명</th>
								<th colspan="2" style="font-weight:700;font-family:'새굴림', serif;text-align:center;border-top:1pt solid;border-right:.5pt solid;border-bottom:1pt double;width:25%;">규격</th>
								<th colspan="2" style="font-weight:700;font-family:'새굴림', serif;text-align:center;border-top:1pt solid;border-right:.5pt solid;border-bottom:1pt double;width:8%;">단위</th>
								<th colspan="2" style="font-weight:700;font-family:'새굴림', serif;text-align:center;border-top:1pt solid;border-right:.5pt solid;border-bottom:1pt double;width:7%;">수량</th>
								<th colspan="2" style="font-weight:700;font-family:'새굴림', serif;text-align:center;border-top:1pt solid;border-right:.5pt solid;border-bottom:1pt double;width:15%;">단가</th>
								<th colspan="2" style="font-weight:700;font-family:'새굴림', serif;text-align:center;border-top:1pt solid;border-right:.5pt solid;border-bottom:1pt double;width:15%;">금액</th>
							</tr>

							<?

							$wr_1 = explode(",", $view[wr_1]);
							$wr_2 = explode(",", $view[wr_2]);
							$wr_3 = explode(",", $view[wr_3]);
							$wr_4 = explode(",", $view[wr_4]);
							$wr_5 = explode(",", $view[wr_5]);
							$wr_6 = explode(",", $view[wr_6]);
							$wr_7 = explode(",", $view[wr_7]);
							$wr_8 = explode(",", $view[wr_8]);
							$wr_9 = explode(",", $view[wr_9]);
							$wr_10 = explode(",", $view[wr_10]);

							?>

							<?php 
							$product=number_format($wr_1[3] * $wr_1[4]);
							$product2=number_format($wr_2[3] * $wr_2[4]);
							$product3=number_format($wr_3[3] * $wr_3[4]);
							$product4=number_format($wr_4[3] * $wr_4[4]);
							$product5=number_format($wr_5[3] * $wr_5[4]);
							$product6=number_format($wr_6[3] * $wr_6[4]);
							$product7=number_format($wr_7[3] * $wr_7[4]);
							$product8=number_format($wr_8[3] * $wr_8[4]);
							$product9=number_format($wr_9[3] * $wr_9[4]);
							$product10=number_format($wr_10[3] * $wr_10[4]);
						
							$sum = number_format($wr_1[3] * $wr_1[4] + $wr_2[3] * $wr_2[4] + $wr_3[3] * $wr_3[4] + $wr_4[3] * $wr_4[4] + $wr_5[3] * $wr_5[4] + $wr_6[3] * $wr_6[4] + $wr_7[3] * $wr_7[4] + $wr_8[3] * $wr_8[4] + $wr_9[3] * $wr_9[4] + $wr_10[3] * $wr_10[4]);

							$sum2 = $wr_1[3] * $wr_1[4] + $wr_2[3] * $wr_2[4] + $wr_3[3] * $wr_3[4] + $wr_4[3] * $wr_4[4] + $wr_5[3] * $wr_5[4] + $wr_6[3] * $wr_6[4] + $wr_7[3] * $wr_7[4] + $wr_8[3] * $wr_8[4] + $wr_9[3] * $wr_9[4] + $wr_10[3] * $wr_10[4];

							$sumproduct = number_format($sum2);
							$sumproduct2 = number_format($sum2 + ($sum2 * 0.1),0);
							?>


							<?if($wr_1){?>
							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-left:.5pt solid #000000;" align="center">1</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;%" align="center"><?=$wr_1[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;%" align="center"><?=$wr_1[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;%" align="center"><?=$wr_1[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;%" align="center"><?=$wr_1[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;%" align="center"><?=$wr_1[4]?></td>
								<?if($product>0){?>
									<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$product;?></td>
								<?} else if($product<=0) {?>
									<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"></td>
								<?}?>
							</tr>
							<?}?>

							<?if($wr_2){?>
							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-left:.5pt solid #000000;" align="center">2</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_2[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_2[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_2[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_2[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_2[4]?></td>
								<?if($product2>0){?>
									<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$product2;?></td>
								<?} else if($product2<=0) {?>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"></td>
								<?}?>
							</tr>
							<?}?>

							<?if($wr_3){?>
							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-left:.5pt solid #000000;" align="center">3</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_3[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_3[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_3[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_3[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_3[4]?></td>
								<?if($product3>0){?>
									<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$product3;?></td>
								<?} else if($product3<=0) {?>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"></td>
							<?}?>
							</tr>
							<?}?>
							<?if($wr_4){?>
							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-left:.5pt solid #000000;" align="center">4</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_4[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_4[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_4[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_4[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_4[4]?></td>
								<?if($product4>0){?>
									<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$product4;?></td>
								<?} else if($product4<=0) {?>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"></td>
							<?}?>
							</tr>
							<?}?>
							<?if($wr_5){?>
							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-left:.5pt solid #000000;" align="center">5</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_5[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_5[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_5[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_5[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_5[4]?></td>
								<?if($product5>0){?>
									<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$product5;?></td>
								<?} else if($product5<=0) {?>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"></td>
							<?}?>
							</tr>
							<?}?>
							<?if($wr_6){?>
							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-left:.5pt solid #000000;" align="center">6</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_6[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_6[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_6[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_6[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_6[4]?></td>
								<?if($product6>0){?>
									<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$product6;?></td>
								<?} else if($product6<=0) {?>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"></td>
							<?}?>
							</tr>
							<?}?>
							<?if($wr_7){?>
							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-left:.5pt solid #000000;" align="center">7</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_7[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_7[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_7[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_7[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_7[4]?></td>
								<?if($product7>0){?>
									<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$product7;?></td>
								<?} else if($product7<=0) {?>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"></td>
							<?}?>
							</tr>
							<?}?>
							<?if($wr_8){?>
							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-left:.5pt solid #000000;" align="center">8</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_8[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_8[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_8[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_8[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_8[4]?></td>
								<?if($product8>0){?>
									<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$product8;?></td>
								<?} else if($product8<=0) {?>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"></td>
							<?}?>
							</tr>
							<?}?>
							<?if($wr_9){?>
							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-left:.5pt solid #000000;" align="center">9</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_9[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_9[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_9[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_9[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$wr_9[4]?></td>
								<?if($product9>0){?>
									<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$product9;?></td>
								<?} else if($product9<=0) {?>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"></td>
							<?}?>
							</tr>
							<?}?>
							<?if($wr_10){?>
							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;border-left:.5pt solid #000000;" align="center">10</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[4]?></td>
								<?if($product10>0){?>
									<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"><?=$product10;?></td>
								<?} else if($product10<=0) {?>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;" align="center"></td>
							<?}?>
							</tr>
							<?}?>


							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;border-left:.5pt solid #000000;" align="center">11</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[4]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"></td>
							</tr>

							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;border-left:.5pt solid #000000;" align="center">12</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[4]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"></td>
							</tr>

							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;border-left:.5pt solid #000000;" align="center">13</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[4]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"></td>
							</tr>

							<tr style="height:25pt;">
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;border-left:.5pt solid #000000;" align="center">14</td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[0]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[1]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[2]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[3]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"><?=$wr_10[4]?></td>
								<td colspan="2" style="border-right:.5pt solid #000000;color:#000000;font-size:10pt;font-family:'새굴림', serif;text-align:center;border-top:.5pt solid;border-bottom:.5pt solid;" align="center"></td>
							</tr>



						</table>


							<div style="margin-top:20px;margin-bottom:80px">
							<div style="width:100%;float:right;">
								<div style="line-height:30px;height:30px;float:right;width:30%;border:1px solid #000000;font-size:14pt;font-weight:700;font-family:'맑은 고딕', monospace;text-align:center;">합계금액
									<div style="height:30px;line-height:30px;float:right;width:50%;border-left:1px solid #000000;font-size:14pt;font-weight:700;font-family:'맑은 고딕', monospace;text-align:center;">
										<?php echo $sumproduct; ?>
									</div>
								</div>
							</div>
							<div style="width:100%;float:right">
							</div>
						</div>

						<br></br>
						<div style="border:1px solid #000;padding:30px">
							<strong>합계는 V.A.T 포함임</strong>
							<li> 상기 품목을 정히 발주하오니 입고일을 준수바랍니다.</li>
							<li> 발주서 확인 후 납기일 및 변동사항이 있을시 담당자에게 즉시 연락바랍니다.</li>
						</div>
					</div>

					<br></br>
					<div itemprop="description" class="view-content">
						<?php echo get_view_thumbnail($view['content']); ?>
					</div>
				</div>



        <!--  추천 비추천 시작 { -->
        <?php if ( $good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($good_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="bo_v_good"><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good"></b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="bo_v_nogood"><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
        <div id="bo_v_act">
            <?php if($board['bo_use_good']) { ?><span class="bo_v_good"><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span class="bo_v_nogood"><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
            }
        }
        ?>
        <!-- }  추천 비추천 끝 -->
    </section>

    <div id="bo_v_share">
        <?php if ($scrap_href) { ?><a href="<?php echo $scrap_href;  ?>" target="_blank" class="btn btn_b03" onclick="win_scrap(this.href); return false;"><i class="fa fa-thumb-tack" aria-hidden="true"></i> 스크랩</a><?php } ?>

        <?php
        include_once(G5_SNS_PATH."/view.sns.skin.php");
        ?>
    </div>

    <?php
    $cnt = 0;
    if ($view['file']['count']) {
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                $cnt++;
        }
    }
     ?>

    <?php if($cnt) { ?>
    <!-- 첨부파일 시작 { -->
    <section id="bo_v_file">
        <h2>첨부파일</h2>
        <ul>
        <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
         ?>
            <li>
                <i class="fa fa-download" aria-hidden="true"></i>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong>
                </a>
                <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 첨부파일 끝 -->
    <?php } ?>

    <?php if(isset($view['link'][1]) && $view['link'][1]) { ?>
    <!-- 관련링크 시작 { -->
    <section id="bo_v_link">
        <h2>관련링크</h2>
        <ul>
        <?php
        // 링크
        $cnt = 0;
        for ($i=1; $i<=count($view['link']); $i++) {
            if ($view['link'][$i]) {
                $cnt++;
                $link = cut_str($view['link'][$i], 70);
            ?>
            <li>
                <i class="fa fa-link" aria-hidden="true"></i> <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    
                    <strong><?php echo $link ?></strong>
                </a>
                <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
            </li>
            <?php
            }
        }
        ?>
        </ul>
    </section>
    <!-- } 관련링크 끝 -->
    <?php } ?>

    <!-- 게시물 상단 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
        ?>

        <ul class="bo_v_left">
            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01 btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 수정</a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01 btn" onclick="del(this.href); return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> 삭제</a></li><?php } ?>
            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;"><i class="fa fa-files-o" aria-hidden="true"></i> 복사</a></li><?php } ?>
            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn_admin btn" onclick="board_move(this.href); return false;"><i class="fa fa-arrows" aria-hidden="true"></i> 이동</a></li><?php } ?>
            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn_b01 btn"><i class="fa fa-search" aria-hidden="true"></i> 검색</a></li><?php } ?>
        </ul>

        <ul class="bo_v_com">
           <li><a href="<?php echo $list_href ?>" class="btn_b01 btn"><i class="fa fa-list" aria-hidden="true"></i> 목록</a></li>
            <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn_b01 btn"><i class="fa fa-reply" aria-hidden="true"></i> 답변</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } ?>
        </ul>

        <?php if ($prev_href || $next_href) { ?>
        <ul class="bo_v_nb">
            <?php if ($prev_href) { ?><li class="btn_prv"><span class="nb_tit"><i class="fa fa-caret-up" aria-hidden="true"></i> 이전글</span><a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject;?></a> <span class="nb_date"><?php echo str_replace('-', '.', substr($prev_wr_date, '2', '8')); ?></span></li><?php } ?>
            <?php if ($next_href) { ?><li class="btn_next"><span class="nb_tit"><i class="fa fa-caret-down" aria-hidden="true"></i> 다음글</span><a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?></a>  <span class="nb_date"><?php echo str_replace('-', '.', substr($next_wr_date, '2', '8')); ?></span></li><?php } ?>
        </ul>
        <?php } ?>
        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
         ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->

    <?php
    // 코멘트 입출력
    include_once(G5_BBS_PATH.'/view_comment.php');
     ?>


</article>
<!-- } 게시판 읽기 끝 -->

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();

    //sns공유
    $(".btn_share").click(function(){
        $("#bo_v_sns").fadeIn();
   
    });

    $(document).mouseup(function (e) {
        var container = $("#bo_v_sns");
        if (!container.is(e.target) && container.has(e.target).length === 0){
        container.css("display","none");
        }	
    });
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->