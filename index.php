<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="de">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
		<title>Buuky League of Legends</title>
	</head>
	<body>
    <div id="wrapper">
		<?php
			require_once('data/summoner_data.php');
		?>
        <div id="logo"> 
            <img src="img/buuky_logo.png" alt="Buuky Logo" width="200px"> 
            <h1>Buuky League of Legends</h1>
        </div>
        <div id="main">
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
            </br>
            <?php
                echo "Summoner ID:" . $summonerid;
                summoner_id($region, $summoner_name, $apikey);
            ?>
        </div>
    </div>
	</body>
</html>

