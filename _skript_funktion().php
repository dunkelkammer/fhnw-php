<html>
<head>
<title>funktion() Funktion</title>
</head>
<body>
<?php
	function quadrat ($zahl){
		$resultat = $zahl * $zahl;
		return $resultat;
	}
?>
<p>Test:</p>
<?php
	$bas=5;
	$quad = quadrat ($bas);
	echo "Quadrat von Basis $bas: $quad.";
?>
</body>
</html>