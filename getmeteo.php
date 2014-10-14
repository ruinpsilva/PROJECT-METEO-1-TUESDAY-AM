<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		<h1>previsão meteorológica de <?php echo $_GET['location'] ?></h1>
		<?php
		//api.worldweatheronline.com/free/v1/weather.ashx?q=perre%2C%20pt&format=json&num_of_days=5&key=jx6a4hxmgej238dw8x4p8vvc
		$coreURL = "http://api.worldweatheronline.com/free/v1/weather.ashx?";
		$sep = "&";
		$p_q = "q=".$_GET['location'];
		$p_nd = "num_of_days=5";
		$p_key = "key=jx6a4hxmgej238dw8x4p8vvc";
		$p_format = "format=json";
		
		$callURL = $coreURL.$p_q.$sep.$p_nd.$sep.$p_key.$sep.$p_format;

		$forecastJSON = file_get_contents($callURL);
		
		$forecastPHP = json_decode($forecastJSON);
		echo "<hr/>";
		echo $forecastPHP->data->current_condition[0]->temp_C;
		echo "<hr/>";
		?>
	</body>
</html>