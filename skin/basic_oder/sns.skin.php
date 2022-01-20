<?
function sns_share_icon($url, $title, $img='', $icon='', $eol='') {
	global $config,$board_skin_url;

	$sns_url = $url;
	$sns_msg = str_replace('\"', '"', strip_tags($title));
	$sns_msg = str_replace('\'', '', $sns_msg);
	$sns_send  = G5_BBS_URL.'/sns_send.php?longurl='.urlencode($sns_url).'&amp;title='.urlencode($sns_msg);
	$sns_img = ($icon) ? $icon : $board_skin_url.'/img/sns';

	$eol = ($eol) ? '' : PHP_EOL;
	
	$is_kakao = false;
	if($config['cf_kakao_js_apikey'] && IS_MOBILE_DEVICE) {
		if(!defined('G5_KAKAO')) {
			define('G5_KAKAO', true);
			echo '<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>'.PHP_EOL;
			echo '<script src="'.G5_JS_URL.'/kakaolink.js"></script>'.PHP_EOL;
			echo '<script>Kakao.init("'.$config['cf_kakao_js_apikey'].'");</script>'.PHP_EOL;
		}

		$is_kakao = true;
	}

	$sns = array();
	$sns[] = array('facebook', 'facebook', 'Facebook','페이스북');
	$sns[] = array('twitter', 'twitter', 'Twitter','트위터');
	$sns[] = array('googleplus', 'gplus', 'GooglePlus','구글 플러스');
	$sns[] = array('kakaostory', 'kakaostory', 'KakaoStory','카카오스토리');
	$sns[] = array('kakaotalk', 'kakaotalk', 'KakaoTalk','카카오톡');
	$sns[] = array('naverband', 'naverband', 'NaverBand','네이버 밴드');
	$sns[] = array('naver', 'naver', 'Naver','네이버');
	$sns[] = array('tumblr', 'tumblr', 'Tumblr','텀블러');
	$sns[] = array('pinterest', 'pinterest', 'Pinterest','핀터레스트');

	$sns_cnt = count($sns);

	$sns_icon = '';
	for($i=0; $i < $sns_cnt; $i++) {

		$sns_href = $sns_send.'&amp;sns='.$sns[$i][1];

		if($sns[$i][0] == 'pinterest') {

			if(!$img) continue;

			$sns_href .= '&amp;img='.urlencode($img);
		}

		if($sns[$i][0] == 'kakaotalk') {

			if(!$is_kakao) continue;

			$thumb = ($img) ? sns_thumbnail($img, 300, 0) : array('src'=>'', 'height'=>'');
			$sns_icon .= '<a href="'.$sns_href.'" onclick="kakaolink_send(\''.$sns_msg.'\',\''.$sns_url.'\',\''.$thumb['src'].'\', \'300\', \''.$thumb['height'].'\'); return false;" target="_blank">';
			$sns_icon .= '<img src="'.$sns_img.'/'.$sns[$i][0].'.png" class="sns-icon" data-original-title="'.$sns[$i][3].'" data-toggle="tooltip" data-html="true" data-placement="top"></a>'.$eol;
		} else {
			$sns_icon .= '<a href="'.$sns_href.'" onclick="send_sns(\''.$sns[$i][0].'\',\''.$sns_href.'\'); return false;">';
			$sns_icon .= '<img src="'.$sns_img.'/'.$sns[$i][0].'.png" target="_blank" class="sns-icon" data-original-title="'.$sns[$i][3].'" data-toggle="tooltip" data-placement="top"></a>'.$eol;
		}
	}

    return $sns_icon;
}

// 썸네일 생성
function sns_thumbnail($url, $thumb_width, $thumb_height, $is_create=false, $is_crop=true, $crop_mode='center', $is_sharpen=false, $um_value='80/0.5/3') {

	if(!$url) return;

	$thumb = array();

	// 이미지 path 구함
    $p = @parse_url($url);
	if(strpos($p['path'], '/'.G5_DATA_DIR.'/') != 0)
		$data_path = preg_replace('/^\/.*\/'.G5_DATA_DIR.'/', '/'.G5_DATA_DIR, $p['path']);
	else
		$data_path = $p['path'];

	$srcfile = G5_PATH.$data_path;

	$is_thumb = false;
	if(is_file($srcfile) && $thumb_width > 0) {

		$size = @getimagesize($srcfile);
		if(empty($size))
			return;

		// jpg 이면 exif 체크
		if($size[2] == 2 && function_exists('exif_read_data')) {
			$degree = 0;
			$exif = @exif_read_data($srcfile);
			if(!empty($exif['Orientation'])) {
				switch($exif['Orientation']) {
					case 8:
						$degree = 90;
						break;
					case 3:
						$degree = 180;
						break;
					case 6:
						$degree = -90;
						break;
				}

				// 세로사진의 경우 가로, 세로 값 바꿈
				if($degree == 90 || $degree == -90) {
					$tmp = $size;
					$size[0] = $tmp[1];
					$size[1] = $tmp[0];
				}
			}
		}

		// 원본 width가 thumb_width보다 작다면
		if($size[0] <= $thumb_width) {
			$thumb['src'] = $url;
			$thumb['height'] = $size[1];
			$thumb['is_thumb'] = false;
			return $thumb;
		}

		// Animated GIF 체크
		$is_animated = false;
		if($size[2] == 1) {
			$is_animated = is_animated_gif($srcfile);
		}

        // 이미지 높이
		$img_height = round(($thumb_width * $size[1]) / $size[0]);

		$filename = basename($srcfile);
		$filepath = dirname($srcfile);

		// 썸네일 생성
		if(!$is_animated) {
			$thumb_file = thumbnail($filename, $filepath, $filepath, $thumb_width, $thumb_height, $is_create, $is_crop, $crop_mode, $is_sharpen, $um_value);
			$is_thumb = true;
		} else {
			$thumb_file = $filename;
			$is_thumb = false;
		}

		if(!$thumb_file) {
			$thumb['src'] = $url;
			$thumb['height'] = $size[1];
			$thumb['is_thumb'] = false;
			return $thumb;
		}

		$url = G5_URL . str_replace($filename, $thumb_file, $data_path);
	}

	$thumb['src'] = $url;
	$thumb['height'] = $img_height;
	$thumb['is_thumb'] = $is_thumb;

	return $thumb;
}

echo sns_share_icon('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], $view['subject'], $seometa['img']['src']);
?>

<script type='text/javascript'>
function send_sns(id,url) {
	switch(id) {
		case 'facebook'		: window.open(url, "win_facebook", "menubar=0,resizable=1,width=600,height=400"); break;
		case 'twitter'		: window.open(url, "win_twitter", "menubar=0,resizable=1,width=600,height=400"); break;
		case 'googleplus'	: window.open(url, "win_googleplus", "menubar=0,resizable=1,width=600,height=600"); break;
		case 'naverband'	: window.open(url, "win_naverband", "menubar=0,resizable=1,width=410,height=540"); break;
		case 'naver'		: window.open(url, "win_naver", "menubar=0,resizable=1,width=450,height=540"); break;
		case 'kakaostory'	: window.open(url, "win_kakaostory", "menubar=0,resizable=1,width=500,height=500"); break;
		case 'tumblr'		: window.open(url, "win_tumblr", "menubar=0,resizable=1,width=540,height=600"); break;
		case 'pinterest'	: window.open(url, "win_pinterest", "menubar=0,resizable=1,width=800,height=500"); break;
	}
    return false;
}

$(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>