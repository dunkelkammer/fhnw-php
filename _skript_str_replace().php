<html>
	<head>
		<title>String Replace</title>
	<head>
	<body>
		<h1>Strings ersetzen</h1>
		<p>
			<?php
				$Text = "Das ist einfach ein Text.";
				$NewText = str_replace("einfach","zweifach",$Text);
				echo "Vorher: $Text<br />Nacher: $NewText";
			?>
		</p>
	</body>
</html>