<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- board list Start -->

<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr><td valign="top" align="center">
<table width='<?=$width?>' cellpadding="0" cellspacing="0" border="0">
<tr>
<?php
$sql = " select *
            from {$g5['menu_table']}
            where me_use = '1'
            and length(me_code) = '2'
            order by me_order, me_id ";
$result = sql_query($sql, false);
$gnb_zindex = 999; // gnb_1dli z-index 값 설정용

for ($i=0; $row=sql_fetch_array($result); $i++) {

if($cells%3==0)
echo '</tr><tr>';
?>
<td width='33%' valign='top' align='center'>
     <table width='179' height='100%' cellpadding='0' cellspacing='0' border='0'>
         <tr><td background='<?= $board_skin_url?>/img/sitemap_bg.png' width="179px" height="50px" line-height="50px" class="sitemap_group">&nbsp;&nbsp;<strong  style="padding:0 0 0 15px;"><a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class=""><?php echo $row['me_name'] ?></a></strong></td></tr>

<?php
$cells++;
$sql2 = " select *
             from {$g5['menu_table']}
             where me_use = '1'
             and length(me_code) = '4'
             and substring(me_code, 1, 2) = '{$row['me_code']}'
             order by me_order, me_id ";
$result2 = sql_query($sql2);

for ($k=0; $row2=sql_fetch_array($result2); $k++) {
    if($k == 0)
    echo '<tr>'.PHP_EOL;
?>
<tr><td style='padding-left:9px; height:32px;' class="sitemap_board"><img src="<?=$board_skin_url?>/img/point.png" />&nbsp;<a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class=""><?php echo $row2['me_name'] ?></a><br/></td></tr>
<td height='1' bgcolor='#dddddd'>
<?php
}
 if($k > 0)
 echo '</tr>'.PHP_EOL;
?>
</td></tr>
<?

echo '<tr><td height="20"></td></tr></table>';
echo '</td>';
?>
<?php } ?>
</tr>
</table>
</td></tr>
</table>

<div bo_fx>
    <ul class="btn_bo_user">
    <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">관리자</a></li><?php } ?>
    </ul>
</div>
<!-- board list END -->