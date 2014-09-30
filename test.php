<html>
	<head>
		<title>Erste PHP-Website</title>
	</head>
	
	<body>
		<?php
			$name="JOT";
			$zahl=6;
		/*	echo "Irgendein Text $name";
			echo "<br>";
			echo 'Irgendein \"Text $name'; 
		*/
			
			//phpinfo();
			# PHP Kommentar
			// PHP Kommentar für eine Zeile
			/* PhP-Kommentar über mehrere
			Zeilen
			*/
			
			// Unterschied 'print;' - 'echo;' ?
			echo '<br>';
			for ($zahl=1; $zahl<=10; $zahl++){
					echo "Zahl Nr.: $zahl<br>";
			}
		?>
	</body>		
</html>
