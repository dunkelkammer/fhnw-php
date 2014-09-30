<html>
	<?php
		
		 if(isset($_POST['email'])){
			echo "Voila";
			$handle = fopen("player.txt","a");
			
			# Name in File schreiben
			fwrite($handle, $_POST['name']);
			#$time = time();
			#fwrite ($handle,$time);
			fwrite ($handle,$_POST['email']);
			
			fclose($handle);
		 }
		 else{
			#echo "<p>Eingabe</p>";
		 }
	?>
	
	
	
	
	<head>
		<title>Datei</title>
	</head>
	<body>
		<h2>Bitte eintragen</h2>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">    <!-- PHP Self Trick - very nice -->
			<p>
				<input type = "text" name="wert" size="30"/>Name <br />
				<input type = "text" name="wert" size="30"/>E-Mail <br />
			</p>
			<input type="submit" value="Abschicken!"/>
			<input type="reset" value="Felder l&ouml;schen!"/>
			</form>
	</body>
</html>