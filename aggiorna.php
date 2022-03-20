<html>
	<head>
	</head>
	<body bgcolor="aqua">
		<h1 align="center">AGGIORNAMENTO PRDOTTO NEGOZIO ON-LINE<br>
		<?php
			echo"<form action='$_SERVER[PHP_SELF]' method='POST'>
					<table border='1' align='center'>
						<tr><td>Inserire codice del prodotto da modificare: </td><td><input type='text' name='codice'></td></tr>
						<tr><td align='center' colspan='2'><input type='submit' name='ok' value='Modifica prodotto' ></td></tr>
					</table>
				</form>";
			if(isset($_POST['ok'])){
				$righe=file('acquisti.txt');
				$acquisti="";
				foreach($righe as $riga){
					$campo=explode('|',$riga);
					if($campo[0]!=$_POST['codice']){
						echo"<form action='$_SERVER[PHP_SELF]' method='POST'>
								<table border='1' align='center'>
									<tr><td align='center' colspan='2'> Inserimento nuovi dati</td></tr>
					 				<tr><td>Nome prodotto</td><td><input type='text' name='nome'></td></tr>
									<tr><td>Prezzo prodotto:</td><td><input type='number' step='any' name='prezzo'></td></tr>
									<tr><td>Quantita' prodotto:</td><td><input type='number' name='quantita'></td></tr>
									<tr><td>Data ordine: </td><td><input type='date' name='ordine'></td></tr>
									<tr><td>Data spedizione: </td><td><input type='date' name='spedizione'></td></tr>
									<tr><td align='center' colspan='2'><input type='submit' name='ok' value='Aggiorna prodotto'></td><tr>
								</table>
							</form>
						";	
						/*$acquisti=array();
						for($i=0;$i<count($righe);$i++){
							$riga=explode(";",$righe[$i]);
							$acquisti[$i]['nome']=$riga[0];
							$acquisti[$i]['prezzo']=$riga[1];
							$acquisti[$i]['quantita']=$riga[2];
							$acquisti[$i]['ordine']=$riga[3];
							$acquisti[$i]['spedizione']=$riga[4];
						}		
						$codice=$_POST['codice'];
						$nome=$_POST['nome'];
						$prezzo=$_POST['prezzo'];
						$quantita=$_POST['quantita'];
						$ordine=$_POST['ordine'];
						$spedizione=$_POST['spedizione'];
						for($i=0;$i<count($acquisti);$i++){
							if($acquisti[$i]['codice']==$codice){
								$acquisti[$i]['nome']=$nome;
								$acquisti[$i]['prezzo']=$prezzo;
								$acquisti[$i]['quantita']=$quantita;
								$acquisti[$i]['ordine']=$ordine;
								$acquisti[$i]['spedizione']=$spedizione;
								echo"Dati del prodotto aggiornati correttamente\r\n";
							}		
						}
						$prodotti="";
						for($i=0;$i<count($acquisti);$i++){
							$prodotti.=$acquisti[$i]['nome']."|";
							$prodotti.=$acquisti[$i]['prezzo']."|";
							$prodotti.=$acquisti[$i]['quantita']."|";
							$prodotti.=$acquisti[$i]['ordine']."|";
							$prodotti.=$acquisti[$i]['spedizione']."|";
							$prodotti.=$_POST['codice']."|\r\n";
						}*/
					}
				}
				$id=fopen('acquisti.txt','w');
				fwrite($id,$acquisti);
				echo"Aggiornamento avvenuto con successo<br>
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