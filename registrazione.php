<html>
	<head>
	</head>
	<body bgcolor="aqua">
		<h1 align="center">REGISTRAZIONE NEGOZIO ON-LINE<br>
		<?php
			echo"
				<form action='$_SERVER[PHP_SELF]' method='POST'>
					<table border='1' align='center'>
						<tr><td>Username</td><td><input type='text' name='nuovoUtente'></td></tr>
						<tr><td>Password</td><td><input type='password' name='pass1'></td></tr>
						<tr><td>Inserisca di nuovo la password</td><td><input type='password' name='pass2'></td></tr>
						<tr><td align='center' colspan='2'><input type='submit' name='ok' value='Registrati'></td></tr>
					</table>
				</form>				
			";				
			if(isset($_POST['ok'])){
				$ut=$_POST['nuovoUtente'];	
				$p1=$_POST['pass1'];	
				$p2=$_POST['pass2'];	
				if($ut!="" && $p1==$p2 && $p1!="" && $p2!=""){
					$riga=$ut."|".$p1."|"."\r\n";
					$id=fopen("clienti.txt", "a");
					fwrite($id,$riga);
					echo "<a href='home.php'>Torna alla pagina iniziale</a>";								
				}
				else
					echo"Le password inserite non corrispondono oppure non hai compilato tutti i campi";								
			}
		?>
	</body>
</html>