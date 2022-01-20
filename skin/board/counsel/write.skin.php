<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css" media="screen">', 0);

function single_selectbox($options_name, $options_array, $options_values, $option_value, $class, $title, $script)
{
	$select_item = $human_text;

	$class = ($class)?$class:'';
	$title = ($title)?$title:'';

	$select_item .= '<select name="'.$options_name.'" id="'.$options_name.'" class="'.$class.'" title="'.$title.'" '.$script.'>';
	for( $i = 0; $i < count( $options_array ); $i++ )
	{
		$options_values[$i] = ($options_values[$i] == '직접입력')?'':$options_values[$i];

		if ( $options_values[$i] == $option_value )
		{
			$select_item .= '<option value="'.$options_values[$i].'" selected>' . $options_array[ $i ];
		} else {
			$select_item .= '<option value="'.$options_values[$i].'">' . $options_array[ $i ];
		}
	}
	$select_item .= '</select>';

	return $select_item;
}

if($w == ''){
	$privacy = '';
	// 개인정보처리방침
	$row = sql_fetch(" select co_id, as_file from {$g5['apms_page']} where html_id = 'privacy' and as_html = '1' ", false);
	if($row['as_file'] && is_file(G5_PATH.'/page/'.$row['as_file'])) {
		$page_file = G5_PATH.'/page/'.$row['as_file'];
		$page_path = str_replace("/".basename($page_file), "", $page_file);
		$page_url = str_replace(G5_PATH, G5_URL, $page_path);
		ob_start();
		@include_once($page_file);
		$privacy = ob_get_contents();
		ob_end_clean();
		$privacy = str_replace("./", $page_url."/", $privacy);
	}
}

$is_email = (isset($boset['email']) && $boset['email']) ? true : false;
$is_homepage = (isset($boset['homepage']) && $boset['homepage']) ? true : false;
$is_tel = (isset($boset['tel']) && $boset['tel']) ? true : false;
$is_hp = (isset($boset['hp']) && $boset['hp']) ? true : false;
$is_comname = (isset($boset['comname']) && $boset['comname']) ? true : false;
$is_addr = (isset($boset['addr']) && $boset['addr']) ? true : false;

if ($is_email) list($write['emailid'], $write['emailserver']) = explode('@', $email);

$is_req_email = (isset($boset['req_email']) && $boset['req_email']) ? true : false; //이메일 필수,선택

$is_req_tel = (isset($boset['req_tel']) && $boset['req_tel']) ? true : false; //전화번호 필수,선택
list($write['wr_tel1'], $write['wr_tel2'], $write['wr_tel3']) = explode('-', $write['wr_1']);

$is_req_hp = (isset($boset['req_hp']) && $boset['req_hp']) ? true : false; //휴대폰번호 필수,선택
list($write['wr_hp1'], $write['wr_hp2'], $write['wr_hp3']) = explode('-', $write['wr_2']);

$is_req_addr = (isset($boset['req_addr']) && $boset['req_addr']) ? true : false; //주소 필수,선택
list($write['wr_zip'], $write['wr_addr1'], $write['wr_addr2'], $write['wr_addr3'], $write['wr_addr_jibeon']) = explode('|', $write['wr_3']);

if ($is_addr)
    add_javascript(G5_POSTCODE_JS, 0);    //다음 주소 js 로드

$is_req_comname = (isset($boset['req_comname']) && $boset['req_comname']) ? true : false; //업체명 필수,선택

$write['wr_comname'] = $write['wr_4'];

$ph_first_array = Array("010", "011", "016", "017", "018", "019", "070", "0130", "0303", "0502", "0504", "0505", "0506");
$tel_first_array = Array("02", "031", "032", "051", "033", "053", "054", "055", "052", "042", "041", "043", "062", "061", "063");

$domain_array = Array("직접입력","naver.com", "hanmail.net", "nate.com", "hotmaiil.com", "paran.com", "yahoo.com", "chol.com", "dreamwiz.com", "empal.com", "freechal.com", "gmail.com", "hanafos.com", "hanmir.com", "hitel.net", "korea.com", "lycos.co.kr", "netian.com");

?>

<style>
<?php if($is_dhtml_editor) { ?>
	#wr_content { border:0; display:none; }
<?php } ?>
	.write-wrap label { margin-top:0px; }
	.item-label label { font-weight: normal !important; }
</style>


<div id="bo_w" class="write-wrap<?php echo (G5_IS_MOBILE) ? ' font-14' : '';?>">
    <div class="well">
		<h2><?php echo $g5['title'] ?></h2>
	</div>

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" role="form" class="form-horizontal">
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

		<div id="content">
			<article class="page_cont">
				<div class="article">
					<div class="bd_box">
						<div class="bb_counsel">
							<div class="tb_wt">
								<table>
									<colgroup>
										<col style="width:20%;">
										<col style="width:auto;">
									</colgroup>
									<tbody>
										<?php if ($is_name) { ?>
										<tr>
											<th scope="row"><label for="wr_name">이름</label> <em>*</em></th>
											<td>
												<div class="hidden_div">이름 <em>*</em></div>
												<input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" size="10" maxlength="20">
											</td>
										</tr>
										<?php } ?>

										<?php if ($is_password) { ?>
										<tr>
											<th scope="row"><label for="wr_password">비밀번호</label> <em>*</em></th>
											<td>
												<div class="hidden_div">비밀번호 <em>*</em></div>
												<input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" maxlength="20">
											</td>
										</tr>
										<?php } ?>

										<?php if ($is_comname) { ?>
										<tr>
											<th scope="row"><label for="wr_comname">업체명</label> <?php echo ($is_req_comname)?'<em>*</em>':'';?></th>
											<td>
												<div class="hidden_div">업체명 <?php echo ($is_req_comname)?'<em>*</em>':'';?></div>
												<input type="text" name="wr_comname" value="<?php echo $write['wr_comname']; ?>" id="wr_comname" size="50" class="frm_input <?php echo $is_req_comname?"required":""; ?>" <?php echo $is_req_comname?"required":""; ?>>
											</td>
										</tr>
										<?php } ?>

										<?php if ($is_email) { ?>
										<tr>
											<th scope="row"><label for="wr_email">이메일</label> <?php echo ($is_req_email)?'<em>*</em>':'';?></th>
											<td>
												<div class="hidden_div">이메일 <?php echo ($is_req_email)?'<em>*</em>':'';?></div>
												<span class="select w100">
												<input type="text" name="emailid" id="emailid" value="<?php echo $write['emailid'];?>" title="아이디" class="frm_input <?php echo ($is_req_email)?"required":""; ?>" maxlength="20" <?php echo ($is_req_email)?"required":""; ?> />
												</span>
												<span class="symbol">@</span>
												<span class="input_txt w100">
												<input type="text" name="emailserver" id="emailserver" value="<?php echo $write['emailserver'];?>" title="아이디" class="frm_input <?php echo ($is_req_email)?"required":""; ?>" maxlength="20" <?php echo ($is_req_email)?"required":""; ?> />
												</span>
												<span class="input_txt w100">
												<?php echo single_selectbox('domain', $domain_array, $domain_array, '', 'frm_input', '', 'onChange="domainChange(this.form);"'); ?>
												</span>
												<input type="hidden" name="wr_email" value="<?php echo $email ?>">
											</td>
										</tr>
										<?php } ?>

										<?php if ($is_homepage) { ?>
										<tr>
											<th scope="row"><label for="wr_homepage">홈페이지</label></th>
											<td>
												<div class="hidden_div">홈페이지</div>
												<input type="text" name="wr_homepage" id="wr_homepage" value="<?php echo $homepage ?>" class="frm_input" size="50">
											</td>
										</tr>
										<?php } ?>

										<?php if ($is_category || $option) { ?>
										<tr>
											<th scope="row"><label for="wr_category"><?php echo ($is_category) ? '분류' : '옵션';?></label></th>
											<td>
												<div class="hidden_div"><?php echo ($is_category) ? '분류' : '옵션';?></div>
												<?php if ($is_category) { ?>
												<select name="ca_name" id="ca_name" required class="frm_input">
													<option value="">선택하세요</option>
													<?php echo $category_option ?>
												</select>
												<?php } ?>
												<?php if ($option) { echo $option; } ?>
											</td>
										</tr>
										<?php } ?>



										<?php if ($is_tel) { ?>
										<tr>
											<th scope="row"><label for="reg_wr_tel">전화번호</label> <?php echo ($is_req_tel)?'<em>*</em>':'';?></th>
											<td>
												<div class="hidden_div">전화번호 <?php echo ($is_req_tel)?'<em>*</em>':'';?></div>
												<span class="select w100">
													<?php echo single_selectbox('wr_tel1', $tel_first_array, $tel_first_array, $write['wr_tel1'], 'frm_input', '전화 앞자리 선택'); ?>
												</span>
												<span class="symbol">-</span>
												<span class="input_txt w100">
													<input type="text" class="frm_input <?php echo ($is_req_tel)?"required":""; ?>" title="전화 중간자리 입력" name="wr_tel2" id="wr_tel2" <?php echo ($is_req_tel)?"required":""; ?> maxlength="4" value="<?php echo $write['wr_tel2'];?>">
												</span>
												<span class="symbol">-</span>
												<span class="input_txt w100">
													<input type="text" class="frm_input <?php echo ($is_req_tel)?"required":""; ?>" title="전화 끝자리 입력" name="wr_tel3" id="wr_tel3" <?php echo ($is_req_tel)?"required":""; ?> maxlength="4" value="<?php echo $write['wr_tel3'];?>">
												</span>
											</td>
										</tr>
										<?php } ?>

										<?php if ($is_hp) { ?>
										<tr>
											<th scope="row"><label for="reg_wr_hp">휴대폰번호</label> <?php echo ($is_req_hp)?'<em>*</em>':'';?></th>
											<td>
												<div class="hidden_div">휴대폰번호 <?php echo ($is_req_hp)?'<em>*</em>':'';?></div>
												<span class="select w100">
													<?php echo single_selectbox('wr_hp1', $ph_first_array, $ph_first_array, $write['wr_hp1'], 'frm_input', '전화 앞자리 선택'); ?>
												</span>
												<span class="symbol">-</span>
												<span class="input_txt w100">
													<input type="text" class="frm_input <?php echo ($is_req_hp)?"required":""; ?>" title="전화 중간자리 입력" name="wr_hp2" id="wr_hp2" <?php echo ($is_req_hp)?"required":""; ?> maxlength="4" value="<?php echo $write['wr_hp2'];?>">
												</span>
												<span class="symbol">-</span>
												<span class="input_txt w100">
													<input type="text" class="frm_input <?php echo ($is_req_hp)?"required":""; ?>" title="전화 끝자리 입력" name="wr_hp3" id="wr_hp3" <?php echo ($is_req_hp)?"required":""; ?> maxlength="4" value="<?php echo $write['wr_hp3'];?>">
												</span>
											</td>
										</tr>
										<?php } ?>

										<?php if ($is_addr) { ?>
										<tr>
											<th scope="row"><label for="reg_wr_addr">주소</label> <?php echo ($is_req_addr)?'<em>*</em>':'';?></th>
											<td>
												<div class="hidden_div">주소 <?php echo ($is_req_addr)?'<em>*</em>':'';?></div>
												<input type="text" name="wr_zip" value="<?php echo $write['wr_zip']; ?>" id="reg_wr_zip"<?php echo $is_req_addr?' required':''; ?> class="frm_input<?php echo $is_req_addr?' required':''; ?>" style="width:60px;" maxlength="6">
												<button type="button" class="btn_frmline" style="padding:0 15px;" onclick="win_zip('fwrite', 'wr_zip', 'wr_addr1', 'wr_addr2', 'wr_addr3', 'wr_addr_jibeon');">주소 검색</button>

												<p><input type="text" name="wr_addr1" value="<?php echo get_text($write['wr_addr1']) ?>" id="reg_wr_addr1" <?php echo $is_req_addr?"required":""; ?> class="frm_input <?php echo $is_req_addr?"required":""; ?>" size="50" placeholder="기본주소"></p>
												<p><input type="text" name="wr_addr2" value="<?php echo get_text($write['wr_addr2']) ?>" id="reg_wr_addr2" class="frm_input <?php echo $is_req_addr?"required":""; ?>" size="50" placeholder="상세주소"></p>
												<input type="hidden" name="wr_addr3" value="<?php echo get_text($write['wr_addr3']) ?>">
												<input type="hidden" name="wr_addr_jibeon" value="<?php echo get_text($write['wr_addr_jibeon']); ?>">

											</td>
										</tr>
										<?php } ?>



										<tr>
											<th scope="row"><label for="wr_category">상담제목</label> <em>*</em></th>
											<td>
												<div class="hidden_div">상담제목 <em>*</em></div>
												<input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input" size="50" maxlength="255">
											</td>
										</tr>
										<tr>
											<th scope="row">
												<label for="explanation">상담내용</label>
												<?php
												if ($is_html) {
													if ($is_dhtml_editor) {
														$html_option_hidden = '<input type="hidden" value="html1" name="html">';
													} else {
														$html_option = "\n".'<br /><label class="checkbox-inline padding-top-0"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'> HTML</label>';
													}
													echo $html_option;
													echo $html_option_hidden;
												}
												?>
											</th>
											<td>
												<div class="hidden_div">상담내용</div>

												<?php if($write_min || $write_max) { ?>
													<!-- 최소/최대 글자 수 사용 시 -->
													<div class="well well-sm" style="margin-bottom:15px;">
														현재 <strong><span id="char_count"></span></strong> 글자이며, 최소 <strong><?php echo $write_min; ?></strong> 글자 이상, 최대 <strong><?php echo $write_max; ?></strong> 글자 이하까지 쓰실 수 있습니다.
													</div>
												<?php } ?>
												<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>

											</td>
										</tr>

										<?php if ($is_file) { ?>
										<tr>
											<th scope="row"><label for="wr_file">첨부파일</label></th>
											<td>
												<div class="hidden_div">첨부파일</div>
												<p class="form-control-static text-muted" style="padding:0px; padding-top:4px;">
													<span class="cursor" onclick="add_file();"><i class="fa fa-plus-circle fa-lg"></i> 파일추가</span>
													&nbsp;
													<span class="cursor" onclick="del_file();"><i class="fa fa-times-circle fa-lg"></i> 파일삭제</span>
												</p>
												<table id="variableFiles"></table>

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
														objContent += "<div class='col-sm-12'><div class='form-group'><div class='input-group input-group-sm'><span class='input-group-addon'>파일 "+objNum+"</span><input type='file' class='frm_input' name='bf_file[]' size='35' title='파일 용량 <?php echo $upload_max_filesize; ?> 이하만 업로드 가능'></div></div></div>";
														if (delete_code) {
															objContent += delete_code;
														} else {
															<?php if ($is_file_content) { ?>
															objContent += "<div class='col-sm-12'><div class='form-group'><input type='text' name='bf_content[]' size='60' class='frm_input' placeholder='이미지에 대한 내용을 입력하세요.'></div></div>";
															<?php } ?>
															;
														}
														objContent += "</div>";

														objCell.innerHTML = objContent;

														flen++;
													}

													<?php echo $file_script; //수정시에 필요한 스크립트?>

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

											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<br>
							<?php if($w == ''){ ?>
							<p class="fs-big2 letter-spacing">
							개인정보처리방침안내
							<?php if($privacy) { ?>
								<a data-toggle="collapse" href="#privacy" aria-expanded="false" aria-controls="privacy" class="btn btn-white btn-small pull-right">전문보기</a>
							<?php } ?>
							</p>
							<div class="panel panel-default" style="margin-top:20px;">
								<?php if($privacy) { ?>
									<div class="panel-body collapse" id="privacy" style="border-bottom:1px solid #ddd;">
										<div class="register-term">
											<?php echo $privacy; ?>
										</div>
									</div>
								<?php } ?>
								<table class="table hidden-xs" style="border-top:0px;">
									<colgroup>
										<col width="40%">
										<col width="30%">
									</colgroup>
									<tbody>
									<tr>
										<th style="border-top:0px;">목적</th>
										<th style="border-top:0px;">항목</th>
										<th style="border-top:0px;">보유기간</th>
									</tr>
									<tr>
										<td>이용자 식별 및 본인여부 확인</td>
										<td>아이디, 이름, 비밀번호</td>
										<td>회원 탈퇴 시까지</td>
									</tr>
									<tr>
										<td>고객서비스 이용에 관한 통지, CS대응을 위한 이용자 식별</td>
										<td>기본정보 (업체명,이름,연락처,이메일)</td>
										<td>회원 탈퇴 시까지</td>
									</tr>
									</tbody>
								</table>
								<div class="panel-footer">
									<label><input type="checkbox" name="agree" value="1" id="agree21"> 동의합니다.</label>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<br />
				<?php if ($is_guest) { //자동등록방지  ?>
					<div class="well well-sm text-center">
						<?php echo $captcha_html; ?>
					</div>
				<?php } ?>
				<br />
				<div class="text-center">
					<button type="submit" id="btn_submit" accesskey="s" class="btn btn-blue btn-large">문의하기</button>&nbsp;
					<button type="button" class="btn btn-gray btn-large" onclick="location.href='./board.php?bo_table=<?php echo $bo_table ?>'">취소</button>
				</div>

			</article>
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

	/***************************************
	*  이메일서버 선택관련
	***************************************/
	function domainChange(form) {
		var value = form.domain[form.domain.selectedIndex].value;
		if (value != "") {
			form.emailserver.disabled = true;
			form.emailserver.value = value;
		} else {
			form.emailserver.disabled = false;
		}
		form.emailserver.value = value;
		form.emailid.focus();
		return;
	}

	function html_auto_br(obj) {
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

    function fwrite_submit(f) {

		<?php if($w == ''){ ?>
		if (!f.agree.checked) {
			alert("개인정보처리방침안내의 내용에 동의하셔야 상담이 가능합니다.");
			f.agree.focus();
			return false;
		}
		<?php } ?>

		<?php if ($is_email) { ?>
		f.wr_email.value = f.emailid.value + '@' + f.emailserver.value;
		<?php } ?>

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

	$(function(){
		$("#wr_content").addClass("form-control input-sm write-content");
	});
    </script>
</div>
<!-- } 게시물 작성/수정 끝 -->