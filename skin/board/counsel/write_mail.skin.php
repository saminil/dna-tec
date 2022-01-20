<?php
// E-mail 수정시 인증 메일 (회원님께 발송)
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$is_email		= (isset($boset['email']) && $boset['email']) ? true : false;
$is_homepage	= (isset($boset['homepage']) && $boset['homepage']) ? true : false;
$is_tel			= (isset($boset['tel']) && $boset['tel']) ? true : false;
$is_hp			= (isset($boset['hp']) && $boset['hp']) ? true : false;
$is_comname		= (isset($boset['comname']) && $boset['comname']) ? true : false;
$is_addr		= (isset($boset['addr']) && $boset['addr']) ? true : false;

$view['wr_tel']			= $_POST['wr_1']; //전화번호
$view['wr_hp']			= $_POST['wr_2']; //모바일
list($view['wr_zip'], $view['wr_addr1'], $view['wr_addr2'], $view['wr_addr3'], $view['wr_addr_jibeon']) = explode('|', $_POST['wr_3']); //주소
$view['wr_comname']		= $view['wr_4']; //업체명

?>

<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>상담 메일</title>
</head>

<body>

<div style="margin:30px auto;width:600px;border:10px solid #f7f7f7">
    <div style="border:1px solid #dedede">
		<table>
			<tbody>
				<tr>
					<th scope="row" style="width:150px;height:35px;border-right:1px solid #e7f1ed;border-bottom:1px solid #e7f1ed;"><label for="wr_name">이름</label></th>
					<td style="width:450px;margin-left:10px;border-bottom:1px solid #e7f1ed;"><?php echo $wr_name; ?></td>
				</tr>
				<?php if ($is_homepage) { ?>
				<tr>
					<th scope="row" style="width:150px;height:35px;border-right:1px solid #e7f1ed;border-bottom:1px solid #e7f1ed;"><label for="wr_homepage">홈페이지</label></th>
					<td style="width:450px;margin-left:10px;border-bottom:1px solid #e7f1ed;"><?php echo $wr_homepage; ?></td>
				</tr>
				<?php } ?>
				<?php if ($is_comname) { ?>
				<tr>
					<th scope="row" style="width:150px;height:35px;border-right:1px solid #e7f1ed;border-bottom:1px solid #e7f1ed;"><label for="wr_comname">업체명</label></th>
					<td style="width:450px;margin-left:10px;border-bottom:1px solid #e7f1ed;"><?php echo $view['wr_comname']; ?></td>
				</tr>
				<?php } ?>
				<tr>
					<th scope="row" style="width:150px;height:35px;border-right:1px solid #e7f1ed;border-bottom:1px solid #e7f1ed;"><label for="wr_email">E-mail</label></th>
					<td style="width:450px;margin-left:10px;border-bottom:1px solid #e7f1ed;"><?php echo $wr_email; ?></td>
				</tr>
				<?php if ($is_tel) { ?>
				<tr>
					<th scope="row" style="width:150px;height:35px;border-right:1px solid #e7f1ed;border-bottom:1px solid #e7f1ed;"><label for="wr_tel">전화번호</label></th>
					<td style="width:450px;margin-left:10px;border-bottom:1px solid #e7f1ed;"><?php echo $view['wr_tel']; ?></td>
				</tr>
				<?php } ?>
				<?php if ($is_hp) { ?>
				<tr>
					<th scope="row" style="width:150px;height:35px;border-right:1px solid #e7f1ed;border-bottom:1px solid #e7f1ed;"><label for="wr_hp">모바일</label></th>
					<td style="width:450px;margin-left:10px;border-bottom:1px solid #e7f1ed;"><?php echo $view['wr_hp']; ?></td>
				</tr>
				<?php } ?>
				<?php if ($is_addr) { ?>
				<tr>
					<th scope="row" style="width:150px;height:35px;border-right:1px solid #e7f1ed;border-bottom:1px solid #e7f1ed;"><label for="wr_addr">주소</label></th>
					<td style="width:450px;margin-left:10px;border-bottom:1px solid #e7f1ed;"><?php echo $view['wr_addr1'].' '.$view['wr_addr2'].' '.$view['wr_addr3']; ?></td>
				</tr>
				<?php } ?>
				<tr>
					<th scope="row" style="width:150px;height:35px;border-right:1px solid #e7f1ed;border-bottom:1px solid #e7f1ed;"><label for="wr_subject">제목</label></th>
					<td style="width:450px;margin-left:10px;border-bottom:1px solid #e7f1ed;"><?php echo $wr_subject; ?></td>
				</tr>
				<tr>
					<td colspan="2" style="padding:15px;"><?php echo $wr_content; ?></td>
				</tr>
			</tbody>
		</table>
    </div>
</div>

</body>
</html>
