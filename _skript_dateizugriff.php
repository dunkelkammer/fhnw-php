<html>
	<head>
		<title>Dateizugriff</title>
	<head>
	<body>
		<?php
/*			
			$dz = fopen("test.txt","w");
			 $inhalt = file("test.txt");
			 fclose($dz);
	*/		 
			 $inhalt = file("test.txt");
			 $anzahl = count($inhalt);
			
			echo "$anzahl<br />";
			echo $inhalt[0]."<br>";

			for ($i=0; $i < $anzahl; $i++){
				echo $i."<br>";
//				echo $inhalt[$i]."<br>";
				}
			echo "<br><br>end";
		 ?>
	</body>
</html>