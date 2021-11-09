<?php
function getItemsFromJSON($filePath) {
	$json_string = file_get_contents($filePath);	
	if(!$json_string) die("Không lấy được dữ liệu!");
	$d = json_decode($json_string, true);	
	if(!$d) die('Không lấy được dữ liệu!');	
	if(!isset($d['listItems'])) die('Không lấy được dữ liệu!');	
	return $d['listItems'];
}

?>