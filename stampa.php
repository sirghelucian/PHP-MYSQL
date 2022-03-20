<html>
	<head>
	</head>
	<body bgcolor="aqua">
		<h1 align="center">STAMPA PRODOTTI ACQUISTATI<br>
		<?php
			$righe=file("acquisti.txt");
			echo "
				<form action='$_SERVER[PHP_SELF]' method='post'>
					<table border='1' align='center'>
						<tr><td>Codice</td><td>Nome</td><td>Prezzo(€)</td><td>Quantita'</td><td>Data Ordine </td><td>Data Spedizione </td><td>Immagine</td></tr>
			";
			for($i=0;$i<count($righe);$i++){//for che controlla tutto il contenuto del file
				$riga=explode("|",$righe[$i]);
				echo "<tr>";
				for($j=0;$j<count($riga);$j++){
					if($j!=6)
						echo "<td>$riga[$j]</td>";//stampa dei dati dei prodotti
					else
						echo"<td><a href='immagini/$riga[$j]'><br>URL dell'immagine<br></a></td>";//stampa dell'url dei prodotti rimandando l'immagine in un'altra pagina
				}		
				echo"</tr>";
			}
			echo"</table>
				Scelga cosa si vuole fare:<br>
				<a href='aggiunta.php'>Aggiungere un nuovo acquisto e tutti i dati conseguenti<br>
				<a href='aggiorna.php'>Aggiornamento dati di un'acquisto<br>
				<a href='elimina_prodotto.php'>Cancellazione dati di un acquisto <br>
				<a href='stampa.php'>Stampa di tutti i prodotti<br>
				<a href='elimina_account.php'>Eliminare questo account<br>
				<a href='home.php'>Esci<br>
			";
		?>
	</body>
</html>