<?php
	session_start();
?>

<html>
	<head><title>Login</title></head>
	<body>
		<?php
			echo session_id();
		?>			
	<form action = "_unterricht_login_b.php" method="GET">
		<input type="text" name="username" />Benutzername <br />
		<input type="password" name="pword" />Passwort <br />
		<input type="submit" value="einloggen" />
	</form>
	</body>
</html>