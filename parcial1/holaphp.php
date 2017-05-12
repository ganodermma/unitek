<?php
	//echo "<h1>hola php</h1>";
	date_default_timezone_set('Europe/paris');
	echo date("Y-m-d H:i:s");
	for ($n=1; $n<=6; $n++) { 
		echo"<h$n style='color:#$n$n$n';>cabecera nivel $n </h$n>";
		# code...
	}
?>
