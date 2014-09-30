<?php
	if (!isset($_SESSION['eingeloggt']))
	{
	echo "Kein Zugang hier<br />";
	echo "<a href=\"_unterricht_login.php\">Zum Login</a>";
	exit();
	}
?>