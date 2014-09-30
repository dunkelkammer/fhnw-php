<html>
	<head>
		<title>substr() Zeichenauslese</title>
	</head>
	<body>
		<h1>Diverses mit Texten:</h1>
		<?php
			$wort = "Johannes";
			$text ="Johannes arbeitet gerne und trinkt Bier.";
			$subj = substr($text,0,8);
			echo "<p>Hier ein Beispieltext: <i>$text</i><br />";
			echo "Das Wort $wort hat ".strlen($text)." Zeichen,<br />";
			echo "und befindet sich an der Position: ".strpos($text,$wort)."</p>";
			echo "<p>$subj</p>";
		?>		
	</body>
</html>