<html>
	<head>
	</head>
	<body bgcolor="aqua">
		<h1 align="center">AGGIUNTA NUOVO ACQUISTO<br>
		<?php
			echo"
				<form action='$_SERVER[PHP_SELF]' method='POST' enctype='multipart/form-data'>
					<table border='1' align='center'>
						<tr><td>Codice prodotto:</td><td><input type='text' name='codice'></td></tr>
						<tr><td>Nome prodotto:</td><td><input type='text' name='nome'></td></tr>
						<tr><td>Prezzo prodotto:</td><td><input type='number' step='any' name='prezzo'></td></tr>
						<tr><td>Quantita' prodotto:</td><td><input type='number' name='quantita'></td></tr>
						<tr><td>Data ordine: </td><td><input type='date' name='ordine'></td></tr>
						<tr><td>Data spedizione: </td><td><input type='date' name='spedizione'></td></tr>
						<tr><td colspan=2 align='center'><input type='file' name='immagine'></td></tr>
						<tr><td colspan=2 align='center'><input type='submit' name='ok' value='Aggiungi'></td></tr>
					</table>
				</form>
			";
			if(isset($_POST['ok'])){
				if($_POST['codice']!="" && $_POST['nome']!="" && $_POST['prezzo']!="" && $_POST['quantita']!="" && $_POST['ordine']!="" && $_POST['spedizione']!="" && $_FILES['immagine']['error']==0){
					move_uploaded_file($_FILES['immagine']['tmp_name'],"immagini/".$_FILES['immagine']['name']);
					$id=fopen("acquisti.txt","a");
					fwrite($id,$_POST['codice']."|".$_POST['nome']."|".$_POST['prezzo']."|".$_POST['quantita']."|".$_POST['ordine']."|".$_POST['spedizione']."|".$_FILES['immagine']['name']."\n");
					echo"Aggiunta avvenuta con successo<br>
						Scelga cosa si vuole fare:<br>
						<a href='aggiunta.php'>Aggiungere un nuovo acquisto e tutti i dati conseguenti<br>
						<a href='aggiorna.php'>Aggiornamento dati di un acquisto<br>
						<a href='elimina_prodotto.php'>Cancellazione dati di un acquisto <br>
						<a href='stampa.php'>Stampa di tutti i prodotti<br>
						<a href='elimina_account.php'>Eliminare questo account<br>
						<a href='home.php'>Esci<br>
					";
				}
				else
					echo"Errore!!! Si prega di compilare tutti i campi";
			}
	?>
	</body>
</html>