<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "고객센터"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "통합검색"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //공통 상단을 연결합니다.
?>

<!-----페이지 상단 글로벌 네비게이션-------->
<div id="sub_tit">
    <div class="path">
        <li><a href="/"><span class="ic-home"><i></i></span></a></li>
        <li><a href="/bbs/board.php?bo_table=notice"><?php echo $tmenu_?></a></li>
        <!----인증서비스(러시아) 페이지 연결-------->
        <?php if($tmenu2_){?><li><a href="search02.php"><?php echo $tmenu2_?></a></li><?php }?>
        <!----러시아 페이지 연결-------->
        <li><a href="search02.php"><?php echo $g5['title']?></a></li>
    </div>
    <div class="title"><?php echo $tmenu_?></div>
    <p class="normal_txt">
        고객님의 방문을 환영합니다.
    </p>
</div>

<!----?php
	include "../include/header.php"; 
?---->

<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다. 
	*/ 
?>
<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:50px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
</style>


<?php
	/*
		CSS파일 로드(25~26라인)
		구매하신 RUS TEST PACIFIC에 사용하신다면 적용하지 않아도 됩니다.
		RUS TEST PACIFIC가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



<?php
	/*
		주의사항 
		그누보드 관리자모드 내용관리등 에디터로 내용을 등록하실 경우, 보안문제로 자바스크립트와 css가 필터될 수 있습니다.
		이럴 경우 공통 css 파일에 아래 style을 별도 추가하고, 내용관리 에디터의 HTML 모드로 태그를 넣으시면 됩니다.(에디터마다 HTML 모드 버튼이 있으니 HTML 모드로 넣어주세요.)
		javascript 를 사용한다면 공통하단 파일 </body> 위에 코드를 복사하여 추가 합니다.	
	
	*/
?>
<style>
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }


	.business_type2{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type2:after{content:""; display:block; clear:both;}
	.business_type2 .business_info { width:100%; background:#fff; margin-bottom:80px; }
	.business_type2 .business_info:after{content:""; display:block; clear:both;}
	.business_type2 .business_info ul{ padding:0; margin:0;}
	.business_type2 .business_info ul li{ padding:0; margin:0;}
	.business_type2 .business_info ul li.left_box { float:left; width:500px; height:500px; overflow:hidden; }
	.business_type2 .business_info ul li.left_box img{ width:100%; height:100%; }
	.business_type2 .business_info ul li.right_box{position:relative; float:right; width:50%; height:500px;}
	.business_type2 .business_info ul li.right_box .txt03{ position:absolute; left:0; bottom:0; width:100%; border-top:1px solid #ddd; font-size:0.9em; color:#555; line-height:1.5em; text-transform: uppercase; background:#f8f8f8; overflow:hidden;}
	.business_type2 .business_info ul li.right_box .txt03 span {display:block; padding:20px 25px; height:100px; }

	.business_type2 .txt_area { width:100%; padding-top:40px; border-top:2px solid #000; }
	.business_type2 .txt_area:after{content:""; display:block; clear:both;}
	.business_type2 .txt_area .txt01 { float:left; width:100%; word-break: keep-all; }
	.business_type2 .txt_area .txt01 p { padding:0; margin:0; margin-bottom:15px; padding:0;}
	.business_type2 .txt_area .txt01 span.tit { display:block; font-size:2.2em; color:#000; font-weight:700; line-height:1.2em;  }
	.business_type2 .txt_area .txt01 span.txt { display:block; font-size:1.15em; color:#333; font-weight:400; line-height:1.4em; }
	.business_type2 .txt_area .txt02 { float:left; width:100%; margin-top:20px;}
	.business_type2 .txt_area .txt02 ul {margin:0; padding:0; }
	.business_type2 .txt_area .txt02 ul li { position:relative; color:#555; font-weight:400; line-height:1.5em; list-style:none; padding-left:3%; margin-bottom:5px;}
	.business_type2 .txt_area .txt02 ul li:before {position:absolute; top:8px; left:0; content:""; display:inline-block; width:4px; height:4px; background:#555; margin-right:10px; vertical-align:middle;}



	.business_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.business_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.business_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.business_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.business_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.business_type2 .con_box:after{content:""; display:block; clear:both;}
	.business_type2 .con_box ul { padding:0; margin:0; }
	.business_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.business_type2 .con_box ul li p{display:table; width:100%; }
	.business_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.business_type2 .con_box ul li p > em{ width:30px; }
	.business_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.business_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}


	@media screen and (max-width:992px){
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}
		
		.business_type2 .business_info{margin-bottom:0px;}
		.business_type2 .business_info ul li.left_box { width:100%; height:300px;  }
		.business_type2 .business_info ul li.right_box{ width:100%; }
		.business_type2 .business_info ul li.right_box .txt03 {position:relative !important; margin-top:40px;}
		.business_type2 .business_info ul li.right_box .txt03 span {height:auto;}
		.business_type2 .txt_area { width:90%; margin:0 auto; border-top:0;}
		.business_type2 .txt_area .txt01 span.tit {font-size:1.85em;}
		.business_type2 .con_arrow{width:95%; margin:0 auto;}
		.business_type2 .con_box{width:95%; margin:0 auto;}

	}

	@media screen and (max-width:480px){

	
		.business_type2 .con_arrow p{ font-size:1.5em; margin-top:30px;}
		.business_type2 .con_box ul li { width:100%; }

	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<br><br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
    <div class="page_title">
        <h1 class="sub_tit"><span class="fc_pointer">통합검색</span>&nbsp; RUS TEST PACIFIC</h1>
        <h2 class="sub_txt">키워드를 입력하시면 검색이 가능합니다.</h2>
    </div>

    <div class="business_type2">
        <div class="business_info" style="text-align:center;">


<!----검색 프로그램 시작 ------------>
<?php
include_once('./_common.php');
$g5['title'] = '전체검색 결과';
include_once('./_head.php');

$search_table = Array();
$table_index = 0;
$write_pages = "";
$text_stx = "";
$srows = 0;

$stx = strip_tags($stx);
//$stx = preg_replace('/[[:punct:]]/u', '', $stx); // 특수문자 제거
$stx = get_search_string($stx); // 특수문자 제거
if ($stx) {
    $stx = preg_replace('/\//', '\/', trim($stx));
    $sop = strtolower($sop);
    if (!$sop || !($sop == 'and' || $sop == 'or')) $sop = 'and'; // 연산자 and , or
    $srows = isset($_GET['srows']) ? (int)preg_replace('#[^0-9]#', '', $_GET['srows']) : 10;
    if (!$srows) $srows = 10; // 한페이지에 출력하는 검색 행수

    $g5_search['tables'] = Array();
    $g5_search['read_level'] = Array();
    $sql = " select gr_id, bo_table, bo_read_level from {$g5['board_table']} where bo_use_search = 1 and bo_list_level <= '{$member['mb_level']}' ";
    if ($gr_id)
        $sql .= " and gr_id = '{$gr_id}' ";
    $onetable = isset($onetable) ? $onetable : "";
    if ($onetable) // 하나의 게시판만 검색한다면
        $sql .= " and bo_table = '{$onetable}' ";
    $sql .= " order by bo_order, gr_id, bo_table ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++)
    {
        if ($is_admin != 'super')
        {
            // 그룹접근 사용에 대한 검색 차단
            $sql2 = " select gr_use_access, gr_admin from {$g5['group_table']} where gr_id = '{$row['gr_id']}' ";
            $row2 = sql_fetch($sql2);
            // 그룹접근을 사용한다면
            if ($row2['gr_use_access']) {
                // 그룹관리자가 있으며 현재 회원이 그룹관리자라면 통과
                if ($row2['gr_admin'] && $row2['gr_admin'] == $member['mb_id']) {
                    ;
                } else {
                    $sql3 = " select count(*) as cnt from {$g5['group_member_table']} where gr_id = '{$row['gr_id']}' and mb_id = '{$member['mb_id']}' and mb_id <> '' ";
                    $row3 = sql_fetch($sql3);
                    if (!$row3['cnt'])
                        continue;
                }
            }
        }
        $g5_search['tables'][] = $row['bo_table'];
        $g5_search['read_level'][] = $row['bo_read_level'];
    }

    $op1 = '';

    // 검색어를 구분자로 나눈다. 여기서는 공백
    $s = explode(' ', strip_tags($stx));
    
    if( count($s) > 1 ){
        $s = array_slice($s, 0, 2);
        $stx = implode(' ', $s);
    }

    $text_stx = get_text(stripslashes($stx));
    
    $search_query = 'sfl='.urlencode($sfl).'&amp;stx='.urlencode($stx).'&amp;sop='.$sop;

    // 검색필드를 구분자로 나눈다. 여기서는 +
    $field = explode('||', trim($sfl));

    $str = '(';
    for ($i=0; $i<count($s); $i++) {
        if (trim($s[$i]) == '') continue;

        $search_str = $s[$i];

        // 인기검색어
        insert_popular($field, $search_str);

        $str .= $op1;
        $str .= "(";

        $op2 = '';
        // 필드의 수만큼 다중 필드 검색 가능 (필드1+필드2...)
        for ($k=0; $k<count($field); $k++) {
            $str .= $op2;
            switch ($field[$k]) {
                case 'mb_id' :
                case 'wr_name' :
                    $str .= "$field[$k] = '$s[$i]'";
                    break;
                case 'wr_subject' :
                case 'wr_content' :
                    if (preg_match("/[a-zA-Z]/", $search_str))
                        $str .= "INSTR(LOWER({$field[$k]}), LOWER('{$search_str}'))";
                    else
                        $str .= "INSTR({$field[$k]}, '{$search_str}')";
                    break;
                default :
                    $str .= "1=0"; // 항상 거짓
                    break;
            }
            $op2 = " or ";
        }
        $str .= ")";

        $op1 = " {$sop} ";
    }
    $str .= ")";

    $sql_search = $str;

    $str_board_list = "";
    $board_count = 0;

    $time1 = get_microtime();

    $total_count = 0;
    for ($i=0; $i<count($g5_search['tables']); $i++) {
        $tmp_write_table   = $g5['write_prefix'] . $g5_search['tables'][$i];

        $sql = " select wr_id from {$tmp_write_table} where {$sql_search} ";
        $result = sql_query($sql, false);
        $row['cnt'] = @sql_num_rows($result);

        $total_count += $row['cnt'];
        if ($row['cnt']) {
            $board_count++;
            $search_table[] = $g5_search['tables'][$i];
            $read_level[]   = $g5_search['read_level'][$i];
            $search_table_count[] = $total_count;

            $sql2 = " select bo_subject, bo_mobile_subject from {$g5['board_table']} where bo_table = '{$g5_search['tables'][$i]}' ";
            $row2 = sql_fetch($sql2);
            $sch_class = "";
            $sch_all = "";
            if ($onetable == $g5_search['tables'][$i]) $sch_class = "class=sch_on";
            else $sch_all = "class=sch_on";
            $str_board_list .= '<li><a href="'.$_SERVER['SCRIPT_NAME'].'?'.$search_query.'&amp;gr_id='.$gr_id.'&amp;onetable='.$g5_search['tables'][$i].'" '.$sch_class.'><strong>'.((G5_IS_MOBILE && $row2['bo_mobile_subject']) ? $row2['bo_mobile_subject'] : $row2['bo_subject']).'</strong><span class="cnt_cmt">'.$row['cnt'].'</span></a></li>';
        }
    }

    $rows = $srows;
    $total_page = ceil($total_count / $rows);  // 전체 페이지 계산
    if ($page < 1) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
    $from_record = ($page - 1) * $rows; // 시작 열을 구함

    for ($i=0; $i<count($search_table); $i++) {
        if ($from_record < $search_table_count[$i]) {
            $table_index = $i;
            $from_record = $from_record - $search_table_count[$i-1];
            break;
        }
    }

    $bo_subject = array();
    $list = array();

    $k=0;
    for ($idx=$table_index; $idx<count($search_table); $idx++) {
        $sql = " select bo_subject, bo_mobile_subject from {$g5['board_table']} where bo_table = '{$search_table[$idx]}' ";
        $row = sql_fetch($sql);
        $bo_subject[$idx] = ((G5_IS_MOBILE && $row['bo_mobile_subject']) ? $row['bo_mobile_subject'] : $row['bo_subject']);

        $tmp_write_table = $g5['write_prefix'] . $search_table[$idx];

        $sql = " select * from {$tmp_write_table} where {$sql_search} order by wr_id desc limit {$from_record}, {$rows} ";
        $result = sql_query($sql);
        for ($i=0; $row=sql_fetch_array($result); $i++) {
            // 검색어까지 링크되면 게시판 부하가 일어남
            $list[$idx][$i] = $row;
            $list[$idx][$i]['href'] = get_pretty_url($search_table[$idx], $row['wr_parent']);

            if ($row['wr_is_comment'])
            {
                $sql2 = " select wr_subject, wr_option from {$tmp_write_table} where wr_id = '{$row['wr_parent']}' ";
                $row2 = sql_fetch($sql2);
                //$row['wr_subject'] = $row2['wr_subject'];
                $row['wr_subject'] = get_text($row2['wr_subject']);
            }

            // 비밀글은 검색 불가
            if (strstr($row['wr_option'].$row2['wr_option'], 'secret'))
                $row['wr_content'] = '[비밀글 입니다.]';

            $subject = get_text($row['wr_subject']);
            if (strstr($sfl, 'wr_subject'))
                $subject = search_font($stx, $subject);

            if ($read_level[$idx] <= $member['mb_level'])
            {
                //$content = cut_str(get_text(strip_tags($row['wr_content'])), 300, "…");
                $content = strip_tags($row['wr_content']);
                $content = get_text($content, 1);
                $content = strip_tags($content);
                $content = str_replace('&nbsp;', '', $content);
                $content = cut_str($content, 300, "…");

                if (strstr($sfl, 'wr_content'))
                    $content = search_font($stx, $content);
            }
            else
                $content = '';

            $list[$idx][$i]['subject'] = $subject;
            $list[$idx][$i]['content'] = $content;
            $list[$idx][$i]['name'] = get_sideview($row['mb_id'], get_text(cut_str($row['wr_name'], $config['cf_cut_name'])), $row['wr_email'], $row['wr_homepage']);

            $k++;
            if ($k >= $rows)
                break;
        }
        sql_free_result($result);

        if ($k >= $rows)
            break;

        $from_record = 0;
    }

    $write_pages = get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?'.$search_query.'&amp;gr_id='.$gr_id.'&amp;srows='.$srows.'&amp;onetable='.$onetable.'&amp;page=');
}

$group_select = '<label for="gr_id" class="sound_only">게시판 그룹선택</label><select name="gr_id" id="gr_id" class="select"><option value="">전체 분류';
$sql = " select gr_id, gr_subject from {$g5['group_table']} order by gr_id ";
$result = sql_query($sql);
for ($i=0; $row=sql_fetch_array($result); $i++)
    $group_select .= "<option value=\"".$row['gr_id']."\"".get_selected($_GET['gr_id'], $row['gr_id']).">".$row['gr_subject']."</option>";
$group_select .= '</select>';

if (!$sfl) $sfl = 'wr_subject';
if (!$sop) $sop = 'or';

include_once($search_skin_path.'/search.skin.php');
?>
</div>

<!----검색 프로그램 종료 ------------>


        <h3 class="con_arrow">
            <p> RUS TEST PACIFIC</p>
        </h3>
        <div class="con_box">
            <ul>
                <li>
                    <p><em><strong>01</strong></em><span>이곳은 간략한 설명글이 들어갈 자리입니다. 이곳은 간략한 설명글이 들어갈 자리입니다.</span></p>
                </li>
                <li>
                    <p><em><strong>02</strong></em><span>이곳은 간략한 설명글이 들어갈 자리입니다. 이곳은 간략한 설명글이 들어갈 자리입니다.</span></p>
                </li>
                <li>
                    <p><em><strong>03</strong></em><span>이곳은 간략한 설명글이 들어갈 자리입니다. 이곳은 간략한 설명글이 들어갈 자리입니다.</span></p>
                </li>
                <li>
                    <p><em><strong>04</strong></em><span>이곳은 간략한 설명글이 들어갈 자리입니다. 이곳은 간략한 설명글이 들어갈 자리입니다.</span></p>
                </li>
            </ul>
        </div>


    </div>


</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->



<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>
<!-----?php
	include "../include/tail.php"; 
?---->
