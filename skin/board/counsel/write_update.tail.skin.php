<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$wr_1 = $_POST['wr_tel1'].'-'.$_POST['wr_tel2'].'-'.$_POST['wr_tel3']; //전화번호
$wr_2 = $_POST['wr_hp1'].'-'.$_POST['wr_hp2'].'-'.$_POST['wr_hp3']; //휴대폰번호
$wr_3 = $_POST['wr_zip'].'|'.$_POST['wr_addr1'].'|'.$_POST['wr_addr2'].'|'.$_POST['wr_addr3'].'|'.$_POST['wr_addr_jibeon']; //휴대폰번호
$wr_4 = $_POST['wr_comname'];

$sql1 = " update $write_table
		set wr_1 = '{$wr_1}',
		wr_2 = '{$wr_2}',
		wr_3 = '{$wr_3}',
		wr_4 = '{$wr_4}'
		where wr_id = '$wr_id' ";

if(sql_query($sql1)){

	if($w == ''){


		$csconfig['cf_admin_email'] = 'sanno1045@naver.com';

		include_once(G5_LIB_PATH.'/mailer.lib.php');

		$subject = '['.$wr_subject.'] '.$wr_name.'님 상담 메일입니다.';

		ob_start();
		include_once ($board_skin_path.'/write_mail.skin.php');
		$content = ob_get_contents();
		ob_end_clean();

		mailer($wr_name, $wr_email, $csconfig['cf_admin_email'], $subject, $content, 1);

		alert('정상적으로 접수되었습니다.','/');
	}

}else{

	alert('접수 오류 - 관리자에게 문의하세요.','/');

}


?>