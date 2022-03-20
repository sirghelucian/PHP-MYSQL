<html>
	<head>
	</head>
	<body bgcolor="aqua">
		<h1 align="center">ELIMINAZIONE PRODOTTO NEGOZIO ON-LINE<br>
		<?php
			echo"<form action='$_SERVER[PHP_SELF]' method='POST'>
					<table border='1' align='center'>
						<tr><td>Inserire codice del prodotto da eliminare: </td><td><input type='text' name='elimina'></td></tr>
						<tr><td align='center' colspan='2'><input type='submit' name='ok' value='Elimina prodotto' ></td></tr>
					</table>
				</form>";
			if(isset($_POST['ok'])){
				$righe=file('acquisti.txt');
				$acquisti="";
				foreach($righe as $riga){
					$campo=explode('|',$riga);
					if($campo[0]!=$_POST['elimina'])	
						$acquisti.=$riga;
				}
				$id=fopen('acquisti.txt','w');
				fwrite($id,$acquisti);
				echo"Eliminazione avvenuta con successo<br>
					Scelga cosa si vuole fare:<br>
					<a href='aggiunta.php'>Aggiungere un nuovo acquisto e tutti i dati conseguenti<br>
					<a href='aggiorna.php'>Aggiornamento dati di un acquisto<br>
					<a href='elimina_prodotto.php'>Cancellazione dati di un acquisto <br>
					<a href='stampa.php'>Stampa di tutti i prodotti<br>
					<a href='elimina_account.php'>Eliminare questo account<br>
					<a href='home.php'>Esci<br>
				";
			}
		?>
	</body>
</html>