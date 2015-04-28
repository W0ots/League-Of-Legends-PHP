<?php

$apikey = "";
$region = "euw";
$summoner_name = "whitetrill";


function summoner_id ($region, $summoner_name, $apikey){
	$url = "https://'.$region.'.api.pvp.net/api/lol/'.$region.'/v1.4/summoner/by-name/'.$summoner_name.'?api_key='.$apikey.'";
	$content = file_get_contents($url);
	$result = json_decode($content, true);
	echo $result;
}
summoner_id($region, $summoner_name, $apikey);

?>
