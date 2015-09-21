<html>
<head>
	<title>Pagina di controllo Arduino</title>
</head>
<body>
	<h3>Pagina di controllo Arduino</h3>
	
	<?php
		$content = file_get_contents('E:\EasyPHP-DevServer-14.1VC11\data\localweb\login_prova.php');
		echo "Stringa inviata da arduino: $content<br><br>";
		
		$valori_letti = explode(",", $content);
		$temperatura = $valori_letti[0];
		$umidita = $valori_letti[1];
		$luminosita = $valori_letti[2];
		
		echo "Temperatura= $temperatura <br>Umidita= $umidita <br>Luminosita= $luminosita";
	?>
	
</body>
</html>
