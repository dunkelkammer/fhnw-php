<html>
	<head>
		<title>Substr_Replace</title>
	</head>
	<body>
		<h1>Genialer Text...</h1>
		<p>
			<?php
				$Text = "Das ist einfach ein Text.";
				$GText = substr_replace($Text, " genialer ",19,1);
				echo "Vorher: $Text<br />Nachher: $GText";
			?>
		</p>
	</body>

</html>