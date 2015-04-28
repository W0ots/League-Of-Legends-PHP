<?php

	# Includes and requires
	require_once('data/summoner_data.php');
    require_once('conf/config.php');

	#$summoner_name = "whitetrill";
	$summoner_name= $_POST['summonername'];
	$region= $_POST['region'];


	function summoner_id ($region, $summoner_name, $apikey){
		$url = @file_get_contents('https://'.$region.'.api.pvp.net/api/lol/'.$region.'/v1.4/summoner/by-name/'.$summoner_name.'?api_key='.$apikey.'');
		$result = json_decode($url);
	
		foreach ($result as $list){
       		$summonerid = $list->id;
       		break;
		}

		echo $summonerid;
	}
?>
