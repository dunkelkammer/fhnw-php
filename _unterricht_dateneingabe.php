<?php
		if (isset($_POST['wert'])){
				$betrag = $_POST['wert'];
				# Variabeln POST versus GET
				$zins = 2/100;
		
				echo $betrag;
				echo "<br />";
				echo $zins;
				
				echo "<br />";
				echo 1+$zins;
				
				echo "<br />";
				echo pow(1+$zins,10);
		
				echo "<br />";
				$resultat = $betrag*pow(1+$zins,10);
				echo $resultat;
		}
		// PHP Self - 
?>
