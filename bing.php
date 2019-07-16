<?php
  \\获取bing每日壁纸
	function img() {
		$data = json_decode(file_get_contents("http://bing.com/HPImageArchive.aspx?format=js&idx=&n=1"), true);
		return "https://bing.com".$data['images'][0]['url'];
	};
	$url = img();
	header("Location: $url");
	exit;
?>
