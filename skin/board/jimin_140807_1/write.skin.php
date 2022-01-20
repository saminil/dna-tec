<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<section id="bo_w">
    <h2 id="container_title"><?php echo $g5['title'] ?></h2>

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
                $option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">html</label>';
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

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <tbody>
        
        <tr style="border-top:2px solid #e12b2e;">
        	<?php if ($is_name) { ?>
        	<th scope="row"><label for="wr_name">상담작성자<strong class="sound_only">필수</strong></label></th>
            <td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" size="10" maxlength="20"></td>
            <?php } ?>
            <?php if ($is_password) { ?>
            <th scope="row"><label for="wr_password">비밀번호<strong class="sound_only">필수</strong></label></th>
            <td><input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" maxlength="20"></td>
            <?php } ?>
        </tr>
       
        

        <?php if ($option) { ?>
        <tr>
            <th scope="row">옵션</th>
            <td colspan="3"><?php echo $option ?></td>
        </tr>
        <?php } ?>

		
        
        <?php if ($is_category) { ?>
        <tr>
            <th scope="row"><label for="ca_name">분류<strong class="sound_only">필수</strong></label></th>
            <td colspan="3">
                <select name="ca_name" id="ca_name" required class="required" >
                    <option value="">선택하세요</option>
                    <?php echo $category_option ?>
                </select>
            </td>
        </tr>
        <?php } ?>
    	
        <tr><th colspan="4" style="background:#ffffff; border:0px;"></th></tr>
        
        

		<tr style="border-top:2px solid #e12b2e;margin-bottom:10px;">
        	<th>회사명</th>
            <td><input name=wr_1 id="wr_1" itemname="회사명" class="frm_input required" required value="<?=$write[wr_1]?>" placeholder="회사명(필수)">
            </td>
            <th>담당자</th>
            <td><input name=wr_2 id="wr_2" itemname="담당자" class="frm_input required" required value="<?=$write[wr_2]?>" placeholder="담당자(필수)"></td>
        
        </tr>
        
        <tr>
        	<th>분야</th>
            <td><input name=wr_3 id="wr_3" itemname="분야" class="frm_input required" required value="<?=$write[wr_3]?>" placeholder="분야(필수)"> </td>
            <th>제품명</th>
            <td><input name=wr_4 id="wr_4" itemname="제품명" class="frm_input required" required value="<?=$write[wr_4]?>" placeholder="제품명(필수)"></td>
        </tr>
        
        <tr>
        	<th>HS코드</th>
            <td><input name=wr_7 id="wr_7" itemname="HS코드" class="frm_input required" required value="<?=$write[wr_7]?>" placeholder="HS코드(필수)"></td>
            
            <th>모델명</th>
            <td><input name=wr_8 id="wr_8" itemname="모델명" class="frm_input required" required value="<?=$write[wr_8]?>" placeholder="모델명(필수)"></td>
        </tr>
        
        
        <tr>
        	<th>연락처</th>
            <td><input name=wr_5 id="wr_5" itemname="연락처" class="frm_input required" required value="<?=$write[wr_5]?>" placeholder="연락처(필수)"> </td>
            
            <th>이메일</th>
            <td><input name=wr_6 id="wr_6" itemname="이메일" class="frm_input required" required value="<?=$write[wr_6]?>" placeholder="이메일(필수)"></td>
        
        </tr>
        <tr>
        	<th>웹사이트</th>
            <td><input name=wr_9 id="wr_9" itemname="웹사이트" class="frm_input" value="<?=$write[wr_9]?>" placeholder="웹사이트"> </td>
            
            <th>연락받기 원하시는 방법</th>
            <td><input name=wr_10 id="wr_10" itemname="연락받기 원하시는 방법" class="frm_input required" required value="<?=$write[wr_10]?>" placeholder="전화 / 이메일 / 기타 중 입력해주세요."></td>
        </tr>
        <!-------
        <tr>
        	<th>인증규격</th>
            <td><input name=wr_11 id="wr_11" itemname="인증규격" class="frm_input" value="<?=$write[wr_11]?>" placeholder="인증규격"> </td>
        </tr>
        ------->
        
        <tr style="border-top:2px solid #e12b2e;">
            <th scope="row"><label for="wr_subject">상담제목<strong class="sound_only">필수</strong></label></th>
            <td colspan="3">
                <div id="autosave_wrapper">
                    <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="50" maxlength="255" placeholder="상담제목(필수)">
                    <?php if ($is_member) { // 임시 저장된 글 기능 ?>
                    <script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
                    <button type="button" id="btn_autosave" class="btn_frmline">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
                    <div id="autosave_pop">
                        <strong>임시 저장된 글 목록</strong>
                        <div><button type="button" class="autosave_close"><img src="<?php echo $board_skin_url; ?>/img/btn_close.gif" alt="닫기"></button></div>
                        <ul></ul>
                        <div><button type="button" class="autosave_close"><img src="<?php echo $board_skin_url; ?>/img/btn_close.gif" alt="닫기"></button></div>
                    </div>
                    <?php } ?>
                </div>
            </td>
        </tr>
        
        
        

        <tr>
            <th scope="row"><label for="wr_content">내용<strong class="sound_only">필수</strong></label></th>
            <td colspan="3" class="wr_content">
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 -->
                <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
                <?php } ?>
                <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 -->
                <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                <?php } ?>
            </td>
        </tr>

        <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
        <tr>
            <th scope="row"><label for="wr_link<?php echo $i ?>">링크 #<?php echo $i ?></label></th>
            <td colspan="3"><input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input" size="50"></td>
        </tr>
        <?php } ?>

        <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
        <tr>
            <th scope="row">파일 #<?php echo $i+1 ?></th>
            <td colspan="3">
                <input type="file" name="bf_file[]" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file frm_input">
                <?php if ($is_file_content) { ?>
                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input" size="50">
                <?php } ?>
                <?php if($w == 'u' && $file[$i]['file']) { ?>
                <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>

        <?php if ($is_guest) { //자동등록방지  ?>
        <tr>
            <th scope="row">자동등록방지</th>
            <td colspan="3">
                <?php echo $captcha_html ?>
            </td>
        </tr>
        <?php } ?>
        
        </tbody>
        </table>
        
        <br><br>

    <div id="st-join" class="st-mbr"  style="border-top:2px solid #e12b2e;"><br>
	<ul class="nav nav-tabs">
		<li class="active st-font1 bold"><a href="javascript:void();"><i class="glyphicon glyphicon-check"></i> 개인정보취급방침</a></li>
	</ul>
	<div class="write_div">
		<textarea class="form-control" readonly="readonly">
■ 수집하는 개인정보 항목
  -회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다.
  -수집항목 : 이름, 성별, 로그인ID, 비밀번호, 비밀번호 질문과 답변, 자택 전화번호, 자택 주소, 휴대전화번호, 이메일, 결제기록
  -개인정보 수집방법 : 홈페이지(회원가입)
      
■ 개인정보의 수집 및 이용목적
  -회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.
  -서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산
  -콘텐츠 제공 , 구매 및 요금 결제 , 물품배송 또는 청구지 등 발송 , 금융거래 본인 인증 및 금융 서비스
  -회원 관리
  -회원제 서비스 이용에 따른 본인확인 , 개인 식별 , 불량회원의 부정 이용 방지와 비인가 사용 방지 , 가입 의사 확인 , 연령확인 , 불만처리 등 민원처리 , 고지사항 전달
  -마케팅 및 광고에 활용
  -이벤트 등 광고성 정보 전달 , 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계
      
■ 개인정보의 보유 및 이용기간
  -원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다.
  -보존 항목 : 결제기록
  -보존 근거 : 계약 또는 청약철회 등에 관한 기록
  -보존 기간 : 3년
  -계약 또는 청약철회 등에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률)
  -대금결제 및 재화 등의 공급에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률)
  -소비자의 불만 또는 분쟁처리에 관한 기록 : 3년 (전자상거래등에서의 소비자보호에 관한 법률)	
		</textarea>
	</div>
	<br>
	<div class="agree-box">
		<label class="input"><input type="checkbox" name="agree2" value="1" placeholder="개인정보취급방침에 동의해 주세요!" required> 개인정보취급방침에 동의합니다.</label> 
	</div>
  </div>

        
        
        
    </div>
    
    

    <div class="btn_confirm">
        <input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_design1">
        <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_design2">취소</a>
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