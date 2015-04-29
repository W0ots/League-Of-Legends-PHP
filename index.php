<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="de">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>aussagekräftiger Titel der Seite</title>
	</head>
	<body>
		<?php
			require_once('data/summoner_data.php');
		?>
		<h1>League of Legends wrapper</h1>
		<form method="post" action="">
			<select name="region" id="region">
				<option value="euw">EU West</option>
				<option value="br">Brasil</option>
				<option value="eune">EU North</option>
				<option value="kr">Korea</option>
				<option value="las">Latin South</option>
				<option value="lan">Latin North</option>
				<option value="na">North America</option>
				<option value="oce">Oceania</option>
				<option value="tr">Turkey</option>
				<option value="ru">Russia</option>
			</select>
			<input type="text" name="summonername">
			<input type="submit">
		</form>
		<?php
			echo "Summoner ID:" . $summonerid;
			summoner_id($region, $summoner_name, $apikey);
		?>
	</body>
</html>

