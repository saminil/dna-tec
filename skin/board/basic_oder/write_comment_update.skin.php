<?
$sql = " select * from $write_table ";
$row = sql_fetch($sql);

if (!isset($row['wr_comment_reply_name'])) {
    sql_query(" ALTER TABLE `{$write_table}` ADD `wr_comment_reply_name` VARCHAR(255) NOT NULL DEFAULT '' AFTER `wr_10` ", false);
}

if($reply_array[wr_id]){
	$sql = " select wr_name from $write_table where wr_id = '$reply_array[wr_id]' ";
	$reply_array = sql_fetch($sql);

	sql_query("UPDATE $write_table set wr_comment_reply_name='$reply_array[wr_name]' where wr_id='$comment_id'");
}
?>