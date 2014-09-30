<html>
	<head>
		<title>Datei</title>
	</head>
	<body>
		<h2>Datei erstellen</h2>
		<?php
		 	echo "<p>Voila</p>";
			$name = "Johihi";
			$handle = fopen("_unterricht_datei_i.txt","a");
			fwrite($handle, "\n\r".$_POST["vorname"]);
			fclose($handle);
		
			echo "<p>".$_POST["vorname"]."</p>";
		
			echo "<p>Fini</p>";
		
		 
		 	/*		#$time = time();
			#fwrite ($handle,$time);
			fwrite ($handle,$_POST['email']);
		*/	
		?>
	</body>
</html>