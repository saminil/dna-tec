<div id="snb" class="left_snb">
<?php
	################################################################################################
	##### 관리자 메뉴설정을 아래와 같이 한다고 가정하에 왼쪽 메뉴 설정  (bo_table 기준으로 작업)
	################################################################################################
	##### 게시판이 아닐때 : /theme/a01/sub01/sub01.php
	##### 게시판 일때 : /bbs/board.php?bo_table=product01
    ##### head.php : 대메뉴 파일 경로 설정
	################################################################################################

	// 게시판이 아니고 co_id 값이 없을 때
	if($bo_table == "" && $co_id == "") {
		$url = preg_replace('/(qawrite\.php|qaview\.php)/i', 'qalist.php', $_SERVER['SCRIPT_NAME']); // 일대일상대 적용
	// 게시판일때
	}else{
		$base_url = preg_replace('/write\.php/i', 'board.php', $_SERVER['SCRIPT_NAME']);
		// 인터넷 주소창에 "&" 없는 경우 - 글목록/글등록/글수정
		if(strpos($_SERVER['QUERY_STRING'], "&") === false) {
    		$url = $base_url."?".$_SERVER['QUERY_STRING'];
		// 인터넷 주소창에 "&" 있는 경우 - 글보기, 글검색
		}else{
			$query_string = preg_replace('/(w=u&)/i', '', $_SERVER['QUERY_STRING']);
			$url = $base_url."?".substr($query_string, 0, strpos($query_string, "&"));
		}
	}

    $sql = " select * from {$g5['menu_en_table']} where length(me_code) = '4' and me_link like '%".$url."%' and me_use = '1' order by me_order, me_id ";
	$query = sql_query($sql, false) ;
	$total  = sql_num_rows($query) ;
	$list = array() ;
	if($total > 0) {
		$row = sql_fetch_array($query);
		$keyword =  $row['me_code'] ;
		if(strlen($keyword) >= 2) {
			$filter_keyword = substr($keyword, 0, 2);
			$sql = " select * from {$g5['menu_en_table']} where me_code like '{$filter_keyword}%' and me_use = '1' order by me_order, me_code ";
			$query = sql_query($sql, false);
			$num = sql_num_rows($query);
			for($i=0; $i < $num;$i++) {
				$list[$i] = sql_fetch_array($query);
			}
		}
	}	
	
	// 메뉴 자체가 있을 경우
    if (count($list) > 0) {		
?>
    <?php for($i=0;$i<count($list);$i++) { $class = ""; if(strpos($list[$i]['me_link'], $url) !== false) $class = " class=\"on\"";
        if ($i == 0) { ?>
    <h2><?php echo $list[$i]['me_name']?></h2>
	<ul>
    <?php } else { ?>
    	<li <?php echo $class?>><a href="<?php echo $list[$i]['me_link']?>" target="_<?php echo $list[$i]['me_target']?>"><?php echo $list[$i]['me_name']?></a></li>
    <?php } } ?>
	</ul>
<? 
	} else { 
		/////////////////////////////////////////////////////////////////////////////
		// 사용자 메뉴 및 페이지 생성 2020.06.09 Mark, 20.05.06 islro
		/////////////////////////////////////////////////////////////////////////////
		$page_block_arr = array("manage","medical","edu1","product","aduits","global");		// 페이지 폴더 블럭 설정
		for($b=0; $b < count($page_block_arr); $b++) {
			$page_key = $page_block_arr[$b] ;
			if(preg_match("/".$page_key."\/(igc_)/i", $_SERVER["PHP_SELF"])) { // 페이지 경로로 페이지 블럭 설정
				// 페이지 블럭별 왼쪽 메뉴 세팅
				$pages = array();
				if($page_key == "manage"){
					$page_folder = "/theme/rustest/manage/" ; // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("러시아"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("TRCU EAC", $page_folder."ru01_trcueac.php", "_self"); // 왼쪽 메뉴 1
					$pages[2][$page_key] = array("GOST R", $page_folder."ru02_gostrr.php", "_self"); // 왼쪽 메뉴 2
					$pages[3][$page_key] = array("방폭인증", $page_folder."ru03_bangpok_audits.php", "_self"); // 왼쪽 메뉴 3
					$pages[4][$page_key] = array("ISE산업안전평가", $page_folder."ru04_ise.php", "_self"); 	// 왼쪽 메뉴 4
					$pages[5][$page_key] = array("화재안전", $page_folder."ru05_trcueac.php", "_self"); // 왼쪽 메뉴 5
					$pages[6][$page_key] = array("위생등록", $page_folder."ru06_wysang_registrator.php", "_self"); // 왼쪽 메뉴 6
					$pages[7][$page_key] = array("의료기기 등록", $page_folder."ru07_medical_divice.php", "_self"); // 왼쪽 메뉴 7
					$pages[8][$page_key] = array("계측기기 인증(PAC)", $page_folder."ru08_pac.php", "_self"); // 왼쪽 메뉴 8
					$pages[9][$page_key] = array("러시아 통신인증", $page_folder."u09_dncyption_communication.php", "_self"); // 왼쪽 메뉴 9
					$pages[10][$page_key] = array("Rejection Letter", $page_folder."u10_refusal_letter.php", "_self"); // 왼쪽 메뉴 10
				}
				if($page_key == "medical"){
					$page_folder = "/theme/rustest/medical/" ; // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("카자흐스탄"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("TRCU EAC", $page_folder."ka01_trcueac.php", "_self");	 // 왼쪽 메뉴 1
					$pages[2][$page_key] = array("GOST K", $page_folder."ka02_gostk.php", "_self"); // 왼쪽 메뉴 2
					$pages[3][$page_key] = array("방폭인증", $page_folder."ka02_bangpok_audits.php", "_self");	 // 왼쪽 메뉴 3
					$pages[4][$page_key] = array("ISE K", $page_folder."ka03_isek.php", "_self"); // 왼쪽 메뉴 4
					$pages[5][$page_key] = array("화재안전K", $page_folder."ka04_firesafek.php", "_self");	// 왼쪽 메뉴 5
					$pages[6][$page_key] = array("계측기기 K", $page_folder."ka05_measuring_equipment.php", "_self"); // 왼쪽 메뉴 6
				}
				if($page_key == "edu1"){
					$page_folder = "/theme/rustest/edu1/" ; // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("벨라루스外2"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("TRCU EAC", $page_folder."vka01_trcu.php", "_self"); // 왼쪽 메뉴 1
				}
				if($page_key == "product"){
					$page_folder = "/theme/rustest/product/" ; // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("우즈베키스탄"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("GOST UZ", $page_folder."uz_gostus.php", "_self"); // 왼쪽 메뉴 1
					//$pages[2][$page_key] = array("유라시아 제품인증", $page_folder."igc_079_EAC-Certification.php", "_self"); // 왼쪽 메뉴 2
					//$pages[3][$page_key] = array("러시아 제품인증", $page_folder."igc_084_GOST-R.php", "_self"); // 왼쪽 메뉴 3
					//$pages[4][$page_key] = array("미주 제품인증", $page_folder."igc_086_FDA.php", "_self"); // 왼쪽 메뉴 4
					//$pages[5][$page_key] = array("중국 제품인증", $page_folder."igc_093_CFDA.php", "_self");	 // 왼쪽 메뉴 5
					//$pages[6][$page_key] = array("동남아시아 제품인증", $page_folder."igc_095_01.php", "_self"); 	// 왼쪽 메뉴 6
					//$pages[7][$page_key] = array("Vegan 인증", $page_folder."igc_097_VeganSociety.php", "_self");	 // 왼쪽 메뉴 7
					//$pages[8][$page_key] = array("HALAL 인증", $page_folder."igc_101_HALAL.php", "_self"); // 왼쪽 메뉴 8
					//$pages[9][$page_key] = array("화장품 인증", $page_folder."igc_102_EWG.php", "_self");	 // 왼쪽 메뉴 9
				}
				if($page_key == "aduits"){
					$page_folder = "/theme/rustest/aduits/" ;	 // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("아제르바이잔"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("AZS인증", $page_folder."azs_audits.php", "_self"); // 왼쪽 메뉴 1
					//$pages[2][$page_key] = array("심사원 인증 2", $page_folder."igc_108_ISO27001.php", "_self"); // 왼쪽 메뉴 2
					//$pages[3][$page_key] = array("심사원 인증 3", $page_folder."igc_112_ISO20000.php", "_self"); // 왼쪽 메뉴 3
				}
				if($page_key == "global"){
					$page_folder = "/theme/rustest/global/" ;	 // 사용자 디렉토리 설정
					$pages[0][$page_key] = array("투르크메이스탄"); // 왼쪽 메뉴 타이틀
					$pages[1][$page_key] = array("TDS인증", $page_folder."tds_audits.php", "_self"); // 왼쪽 메뉴 1
					//$pages[2][$page_key] = array("연수기관 지정 절차", $page_folder."igc_117_01.php", "_self"); // 왼쪽 메뉴 2
					//$pages[3][$page_key] = array("연수기관 시험 감독관", $page_folder."igc_118_01.php", "_self"); // 왼쪽 메뉴 3
				}
				for($i=0; $i<count($pages); $i++) { 				
					$menu_name = $pages[$i][$page_key][0] ;
					$menu_link = $pages[$i][$page_key][1] ;
					$menu_target = $pages[$i][$page_key][2] ;
					$class = ""; 
					if(strpos($menu_link, basename($_SERVER["PHP_SELF"])) !== false) $class = " class=\"on\"";
					if ($i == 0) {
						echo "<h2>".$menu_name."</h2>";
						echo "<ul>" ;
					} else {
						echo "<li ".$class."><a href='".$menu_link."' target='".$menu_target."'>".$menu_name."</a></li>";
					} 
				}
				echo "</ul>" ;
			}
		}
		/////////////////////////////////////////////////////////////////////////////
	}
?>
</div>

<!-----서브페이지 좌측 CS 시작----->
<div class="left_cs">
	<h2>CS Center</h2>
	<p class="tel">Tel. 02-6749-1161</p>
	<p class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> AM 9:00 ~ PM 6:00</p>
	<p class="info">토,일,공휴일은 휴무입니다.</p>
	<dl>
		<dt><i class="fa fa-fax" aria-hidden="true"></i></dt>
		<dd>Fax 02.6749.0711</dd>
		<dt><i class="fa fa-envelope-o" aria-hidden="true"></i></dt>
		<dd style="margin-bottom:40px;">info@dna-tec.org</dd>
	</dl>
	
	<!---------ul class="banner">
		<li><a href="/bbs/board.php?bo_table=qa"><i class="fa fa-comments-o" aria-hidden="true"></i> 묻고답하기</a></li>
		<li><a href="/bbs/qalist.php"><i class="fa fa-user-o" aria-hidden="true"></i> 1:1상담</a></li>
	</ul--------->

</div>



<!-----서브페이지 좌측 CS 종료----->



