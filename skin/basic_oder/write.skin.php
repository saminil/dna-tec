<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//--------------------------------------------------------------------------
// 가변 파일
$file_script = "";
$file_length = -1;
// 수정의 경우 파일업로드 필드가 가변적으로 늘어나야 하고 삭제 표시도 해주어야 합니다.
if ($w == "u") {
    for ($i=0; $i<$file['count']; $i++) {
        if ($file[$i]['source']) {
			$file_script .= "add_file(\"";
			if ($is_file_content) {
				$file_script .= "<div class='col-sm-5'><div class='form-group'><input type='text'name='bf_content[$i]' value='".addslashes(get_text($file[$i]['bf_content']))."' class='form-control input-sm' placeholder='이미지에 대한 내용을 입력하세요.'></div></div>";
			}
			$file_script .= "<div class='col-sm-12'><div class='form-group'><label class='checkbox-inline'><input type='checkbox' name='bf_file_del[$i]' value='1'> {$file[$i]['source']}({$file[$i]['size']}) 파일 삭제</label> | <a href='{$file[$i]['href']}'>열기</a></div></div>";
			$file_script .= "\");\n";
        } else {
            $file_script .= "add_file('');\n";
		}
    }
    $file_length = $file['count'] - 1;
}

if ($file_length < 0) {
    $file_script .= "add_file('');\n";
    $file_length = 0;
}
//--------------------------------------------------------------------------

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/selectric/selectric.custom.css">', 1);
?>

<section id="bo_w">
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
        if ($is_notice) {
            $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
        }

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">HTML</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }

        if ($is_mail) {
            $option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
        }
    }

    echo $option_hidden;
    ?>

    <?php if ($is_category) { ?>
    <div class="bo_w_select write_div">
        <label for="ca_name"  class="sound_only">분류<strong>필수</strong></label>
        <select name="ca_name" id="ca_name" required>
            <option value="">고객구분선택 하세요.</option>
            <?php echo $category_option ?>
        </select>
    </div>
    <?php } ?>
	</br>
   
    <div class="bo_w_info write_div">
    
    <?php if ($is_name) { ?>
        <label for="wr_name" class="sound_only">회사명<strong>필수</strong></label>
        <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" placeholder="회사명">
    <?php } ?>
    

    <?php if ($is_password) { ?>
        <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
        <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" placeholder="비밀번호">
    <?php } ?>
    

    <?php if ($is_email) { ?>
            <label for="wr_email" class="sound_only">이메일</label>
            <input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email " placeholder="이메일">
    <?php } ?>
    
    </div>

    <?php if ($is_homepage) { ?>
    <div class="write_div">
        <label for="wr_homepage" class="sound_only">홈페이지</label>
        <input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input full_input" size="50" placeholder="홈페이지">
    </div>
    <?php } ?>
    

	<div class='form-group clearfix'>
		<label class='col-sm-2 control-label'><th><string style="font-size:15px; font-weight:700;"> 회사명을 입력하세요.</string></label>
		<div class='col-sm-10'>
			</br>
			<div class='input-group'>
				<input type="text" name="wr_subject" value="<?=$write['wr_subject']?>" id="wr_subject" class="frm_input" size="30">
			</div>
		</div>
	</div>

		<?

		$wr_1 = explode(",", $write[wr_1]);
		$wr_2 = explode(",", $write[wr_2]);
		$wr_3 = explode(",", $write[wr_3]);
		$wr_4 = explode(",", $write[wr_4]);
		$wr_5 = explode(",", $write[wr_5]);
		$wr_6 = explode(",", $write[wr_6]);
		$wr_7 = explode(",", $write[wr_7]);
		$wr_8 = explode(",", $write[wr_8]);
		$wr_9 = explode(",", $write[wr_9]);
		$wr_10 = explode(",", $write[wr_10]);

		?>
<div style="line-height:2.3em ">
		<table width="100%" cellpadding="0" cellspacing="0" border="0" class="product_name" border-spacing="10px">

			<tr height="50">
				<th><string style="font-size:15px; font-weight:700;">제품명</string></th>
				<th><string style="font-size:15px; font-weight:700;">규격</string></th>
				<th><string style="font-size:15px; font-weight:700;">단위</string></th>
				<th><string style="font-size:15px; font-weight:700;">수량</string></th>
				<th><string style="font-size:15px; font-weight:700;">단가</string></th>
			</tr>
			</br>
			<tr>				
			<!-- 제품명 -->
				<td><input id="" type="text" name="wr_1_0" value="<?=$wr_1[0]?>"/></td>

			<!-- 규격 -->
				<td><input id="" type="text" name="wr_1_1" value="<?=$wr_1[1]?>"/></td>

			<!-- 단위 -->
				<td  >
					<select  style="width:130px;height:20px;" name="wr_1_2">
						<option <? if($wr_1[2] == "") echo "selected";?> ></option>
						<option <? if($wr_1[2] == "EA") echo "selected";?> >EA</option>
						<option <? if($wr_1[2] == "SET") echo "selected";?> >SET</option>
					</select>
				</td>
			<!-- 수량 -->
				<td><input id="" type="text" name="wr_1_3" value="<?=$wr_1[3]?>"/></td>

			<!-- 단가 -->
				<td><input id="" type="text" name="wr_1_4" value="<?=$wr_1[4]?>"/></td>

			</tr>
			<tr >
				<td><input id="" type="text" name="wr_2_0" value="<?=$wr_2[0]?>"/></td>
				<td><input id="" type="text" name="wr_2_1" value="<?=$wr_2[1]?>"/></td>
				<td>
					<select  style="width:130px;height:20px;" name="wr_2_2">
						<option <? if($wr_2[2] == "") echo "selected";?> ></option>
						<option <? if($wr_2[2] == "EA")  echo "selected";?> >EA</option>
						<option <? if($wr_2[2] == "SET") echo "selected";?> >SET</option>
					</select>
				</td>
				<td><input id="" type="text" name="wr_2_3" value="<?=$wr_2[3]?>"/></td>
				<td><input id="" type="text" name="wr_2_4" value="<?=$wr_2[4]?>"/></td>

			</tr>
	
			<tr>
				<td><input id="" type="text" name="wr_3_0" value="<?=$wr_3[0]?>"/></td>
				<td><input id="" type="text" name="wr_3_1"  value="<?=$wr_3[1]?>"/></td>
				<td>
					<select  style="width:130px;height:20px;" name="wr_3_2">
						<option <? if($wr_3[2] == "") echo "selected";?> ></option>
						<option <? if($wr_3[2] == "EA")  echo "selected";?> >EA</option>
						<option <? if($wr_3[2] == "SET") echo "selected";?> >SET</option>
					</select>
				</td>
				<td><input id="" type="text" name="wr_3_3" value="<?=$wr_3[3]?>"/></td>
				<td><input id="" type="text" name="wr_3_4" value="<?=$wr_3[4]?>"/></td>
			</tr>

			<tr>
				<td><input id="" type="text" name="wr_4_0" value="<?=$wr_4[0]?>"/></td>
				<td><input id="" type="text" name="wr_4_1" value="<?=$wr_4[1]?>"/></td>
				<td>
					<select  style="width:130px;height:20px;" name="wr_4_2">
						<option <? if($wr_4[2] == "") echo "selected";?> ></option>
						<option <? if($wr_4[2] == "EA")  echo "selected";?> >EA</option>
						<option <? if($wr_4[2] == "SET") echo "selected";?> >SET</option>
					</select>
				</td>				

				<td><input id="" type="text" name="wr_4_3" value="<?=$wr_4[3]?>"/></td>
				<td><input id="" type="text" name="wr_4_4" value="<?=$wr_4[4]?>"/></td>
			</tr>

			<tr>
				<td><input id="" type="text" name="wr_5_0" value="<?=$wr_5[0]?>"/></td>
				<td><input id="" type="text" name="wr_5_1" value="<?=$wr_5[1]?>"/></td>
				<td>
					<select  style="width:130px;height:20px;" name="wr_5_2">
						<option <? if($wr_5[2] == "") echo "selected";?> ></option>
						<option <? if($wr_5[2] == "EA")  echo "selected";?> >EA</option>
						<option <? if($wr_5[2] == "SET") echo "selected";?> >SET</option>
					</select>
				</td>				

				<td><input id="" type="text" name="wr_5_3" value="<?=$wr_5[3]?>"/></td>
				<td><input id="" type="text" name="wr_5_4" value="<?=$wr_5[4]?>"/></td>
			</tr>

			<tr>
				<td><input id="" type="text" name="wr_6_0" value="<?=$wr_6[0]?>"/></td>
				<td><input id="" type="text" name="wr_6_1" value="<?=$wr_6[1]?>"/></td>
				<td>
					<select  style="width:130px;height:20px;" name="wr_6_2">
						<option <? if($wr_6[2] == "") echo "selected";?> ></option>
						<option <? if($wr_6[2] == "EA")  echo "selected";?> >EA</option>
						<option <? if($wr_6[2] == "SET") echo "selected";?> >SET</option>
					</select>
				</td>				

				<td><input id="" type="text" name="wr_6_3" value="<?=$wr_6[3]?>"/></td>
				<td><input id="" type="text" name="wr_6_4" value="<?=$wr_6[4]?>"/></td>
			</tr>

			<tr>
				<td><input id="" type="text" name="wr_7_0" value="<?=$wr_7[0]?>"/></td>
				<td><input id="" type="text" name="wr_7_1" value="<?=$wr_7[1]?>"/></td>
				<td>
					<select  style="width:130px;height:20px;" name="wr_7_2">
						<option <? if($wr_7[2] == "") echo "selected";?> ></option>
						<option <? if($wr_7[2] == "EA")  echo "selected";?> >EA</option>
						<option <? if($wr_7[2] == "SET") echo "selected";?> >SET</option>
					</select>
				</td>				
				<td><input id="" type="text" name="wr_7_3" value="<?=$wr_7[3]?>"/></td>
				<td><input id="" type="text" name="wr_7_4" value="<?=$wr_7[4]?>"/></td>
			</tr>

			<tr>
				<td><input id="" type="text" name="wr_8_0" value="<?=$wr_8[0]?>"/></td>
				<td><input id="" type="text"  name="wr_8_1" value="<?=$wr_8[1]?>"/></td>
				<td>
					<select  style="width:130px;height:20px;" name="wr_8_2">
						<option <? if($wr_8[2] == "") echo "selected";?> ></option>
						<option <? if($wr_8[2] == "EA")  echo "selected";?> >EA</option>
						<option <? if($wr_8[2] == "SET") echo "selected";?> >SET</option>
					</select>
				</td>
				<td><input id="" type="text"  name="wr_8_3" value="<?=$wr_8[3]?>"/></td>
				<td><input id="" type="text"  name="wr_8_4" value="<?=$wr_8[4]?>"/></td>
			</tr>

			<tr>
				<td><input id="" type="text" name="wr_9_0" value="<?=$wr_9[0]?>"/></td>
				<td><input id="" type="text" name="wr_9_1" value="<?=$wr_9[1]?>"/></td>
				<td>
					<select  style="width:130px;height:20px;" name="wr_9_2">
						<option <? if($wr_9[2] == "") echo "selected";?> ></option>
						<option <? if($wr_9[2] == "EA")  echo "selected";?> >EA</option>
						<option <? if($wr_9[2] == "SET") echo "selected";?> >SET</option>
					</select>
				</td>
				<td><input id="" type="text" name="wr_9_3" value="<?=$wr_9[3]?>"/></td>
				<td><input id="" type="text" name="wr_9_4" value="<?=$wr_9[4]?>"/></td>
				
			</tr>

			<tr>
				<td><input id="" type="text" name="wr_10_0" value="<?=$wr_10[0]?>"/></td>
				<td><input id="" type="text"  name="wr_10_1"  value="<?=$wr_10[1]?>"/></td>
				<td>
					<select  style="width:130px;height:20px;" name="wr_10_2">
						<option <? if($wr_10[2] == "") echo "selected";?> ></option>
						<option <? if($wr_10[2] == "EA")  echo "selected";?> >EA</option>
						<option <? if($wr_10[2] == "SET") echo "selected";?> >SET</option>
					</select>
				</td>
				<td><input id="" type="text"  name="wr_10_3" value="<?=$wr_10[3]?>"/></td>
				<td><input id="" type="text"  name="wr_10_4" value="<?=$wr_10[4]?>"/></td>

				<!--<td>
					<select  name="wr_10_0">
						<option <? if($wr_10[0] == "H형강") echo "selected";?> >H형강</option>
						<option <? if($wr_10[0] == "철판") echo "selected";?>>철판</option>
						<option <? if($wr_10[0] == "각관") echo "selected";?>>각관</option>
						<option <? if($wr_10[0] == "SPP흑관") echo "selected";?>>SPP흑관</option>
						<option <? if($wr_10[0] == "SPP백관") echo "selected";?>>SPP백관</option>
						<option <? if($wr_10[0] == "SPS흑관") echo "selected";?>>SPS흑관</option>
						<option <? if($wr_10[0] == "I형강") echo "selected";?>>I형강</option>
						<option <? if($wr_10[0] == "평철") echo "selected";?>>평철</option>
						<option <? if($wr_10[0] == "SPPS흑관") echo "selected";?>>SPPS흑관</option>
						<option <? if($wr_10[0] == "SPPS백관") echo "selected";?>>SPPS백관</option>
						<option <? if($wr_10[0] == "SPS백관") echo "selected";?>>SPS백관</option>
						<option <? if($wr_10[0] == "잔넬") echo "selected";?>>잔넬</option>
						<option <? if($wr_10[0] == "칼라각관") echo "selected";?>>칼라각관</option>
						<option <? if($wr_10[0] == "GI각관") echo "selected";?>>GI각관</option>
						<option <? if($wr_10[0] == "앵글") echo "selected";?>>앵글</option>
						<option <? if($wr_10[0] == "C-C형강") echo "selected";?>>C-C형강</option>
						<option <? if($wr_10[0] == "환봉") echo "selected";?>>환봉</option>
						<option <? if($wr_10[0] == "철근") echo "selected";?>>철근</option>
						<option <? if($wr_10[0] == "구조관") echo "selected";?>>구조관</option>
						<option <? if($wr_10[0] == "마환봉") echo "selected";?>>마환봉</option>
						<option <? if($wr_10[0] == "마각철") echo "selected";?>>마각철</option>
						<option <? if($wr_10[0] == "파이프") echo "selected";?>>파이프</option>
						<option <? if($wr_10[0] == "무늬철판") echo "selected";?>>무늬철판</option>
						<option <? if($wr_10[0] == "레일") echo "selected";?>>레일</option>
						<option <? if($wr_10[0] == "EX철판") echo "selected";?>>EX철판</option>
						<option <? if($wr_10[0] == "DECK PLATE") echo "selected";?>>DECK PLATE</option>
						<option <? if($wr_10[0] == "경량빔") echo "selected";?>>경량빔</option>
						<option <? if($wr_10[0] == "G-C형강") echo "selected";?>>G-C형강</option>
					</select>
				</td>
				<td><input id="" type="text"  name="wr_10_1"  value="<?=$wr_10[1]?>"/></td>
				<td><input id="" type="text"  name="wr_10_2" value="<?=$wr_10[2]?>"/></td>
				<td><input id="" type="text"  name="wr_10_3" value="<?=$wr_10[3]?>"/></td>
				<td><input id="" type="text"  name="wr_10_4" value="<?=$wr_10[4]?>"/></td>
				<td><input id="" type="text"  name="wr_10_5" value="<?=$wr_10[5]?>"/></td> -->
			</tr>
		</table>
</div>
    <div class="write_div">
        <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
        <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
            <?php } ?>
            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
            <?php } ?>
        </div>
        
    </div>

    <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
    <div class="bo_w_link write_div">
        <label for="wr_link<?php echo $i ?>"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 링크  #<?php echo $i ?></span></label>
        <input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
    </div>
    <?php } ?>

    <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
    <div class="bo_w_flie write_div">
        <div class="file_wr write_div">
            <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
            <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
        </div>
        <?php if ($is_file_content) { ?>
        <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
        <?php } ?>

        <?php if($w == 'u' && $file[$i]['file']) { ?>
        <span class="file_del">
            <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
        </span>
	<script>
	var flen = 0;
	function add_file(delete_code) {
		var upload_count = <?php echo (int)$board['bo_upload_count']; ?>;
		if (upload_count && flen >= upload_count) {
			alert("이 게시판은 "+upload_count+"개 까지만 파일 업로드가 가능합니다.");
			return;
		}

		var objTbl;
		var objNum;
		var objRow;
		var objCell;
		var objContent;
		if (document.getElementById)
			objTbl = document.getElementById("variableFiles");
		else
			objTbl = document.all["variableFiles"];

		objNum = objTbl.rows.length;
		objRow = objTbl.insertRow(objNum);
		objCell = objRow.insertCell(0);

		objContent = "<div class='row'>";
		objContent += "<div class='col-sm-7'><div class='form-group'><div class='input-group input-group-sm'><span class='input-group-addon'>파일 "+(objNum+1)+"</span><input type='file' class='form-control input-sm' name='bf_file[]' title='파일 용량 <?php echo $upload_max_filesize; ?> 이하만 업로드 가능'></div></div></div>";
		if (delete_code) {
			objContent += delete_code;
		} else {
			<?php if ($is_file_content) { ?>
			objContent += "<div class='col-sm-5'><div class='form-group'><input type='text'name='bf_content[]' class='form-control input-sm' placeholder='이미지에 대한 내용을 입력하세요.'></div></div>";
			<?php } ?>
			;
		}
		objContent += "</div>";

		objCell.innerHTML = objContent;

		flen++;
	}

	<?php
		echo $file_script; //수정시에 필요한 스크립트
	?>

	function del_file() {
		// file_length 이하로는 필드가 삭제되지 않아야 합니다.
		var file_length = <?php echo (int)$file_length; ?>;
		var objTbl = document.getElementById("variableFiles");
		if (objTbl.rows.length - 1 > file_length) {
			objTbl.deleteRow(objTbl.rows.length - 1);
			flen--;
		}
	}
	</script>
	<?php } ?>
        
    </div>
    <?php } ?>


    <?php if ($is_use_captcha) { //자동등록방지  ?>
    <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
    <?php } ?>


    <div class="btn_confirm write_div">
	<a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel btn">취소</a>
	<input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_submit btn">
    </div>
	
    </form>

    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->