<?php
function getItemsFromJSON($filePath) {
	$json_string = file_get_contents($filePath);	
	if(!$json_string) die("Không lấy được dữ liệu!");
	$d = json_decode($json_string, true);	
	if(!$d) die('Không lấy được dữ liệu!');	
	if(!isset($d['listItems'])) die('Không lấy được dữ liệu!');	
	return $d['listItems'];
}

function loadCustomPageInfo($filePath) {
	$json_string = file_get_contents($filePath);	
	if(!$json_string) die("Không lấy được dữ liệu!");
	$d = json_decode($json_string, true);	
	if(!$d) die('Cannot parse the trealet content!');	
	if(!isset($d['trealet'])) die('It is not a trealet!');	
	if($d['trealet']['exec']!='streamline') die('Wrong executable name!');
	return $d['trealet'];
}

function localFetchItemData($item_url){
	if(is_numeric($item_url)){
		$item_url = 'https://hcloud.trealet.com/tiny'.$item_url.'/?json';
		$json_string = file_get_contents($item_url);
		if(!$json_string) return;	
		$d = json_decode($json_string, true);
		return $d['image'];
	}
	else {
		return $item_url;
	}
}
?>