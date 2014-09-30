<?php
	session_start();
?>

<html>
	<head><title>Login</title></head>
	<body>
		<?php
			if (isset($_GET['username']) AND isset($_GET['pword']){
					if($_GET['username'] =="johi" AND $_GET['pword']=="1234"){
							$_SESSION['eingeloggt']=true;
							echo "Welcome<br />";
							echo "Ihre Session-Id: ".session_id();
						}
					else{
							$_SESSION['eingeloggt']=false;
							header("Location:_unterricht_login.php");
						}
				}
		
			echo session_id();
			
			
		?>			
	</body>
</html>