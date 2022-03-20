<html>
	<head>
	</head>
	<body bgcolor="aqua">
		<h1 align="center">NEGOZIO ON-LINE<br>
		<?php
			$clienti=file("clienti.txt");
	
			if(isset($_POST['ok'])){	
				$user=$_POST['utente'];
				$pas=$_POST['pass'];
				$accesso=-1;//ricerca di cliente non esistente
				$cont=0;//contatore imposrtato a 0
				foreach ($clienti as $cliente){
					$riga=explode("|",$cliente);
					if($user==$riga[0] && $pas==$riga[1] && $user!="" && $pas!="")
						$accesso=$cont;
					else
						$cont++;
				}
				if($accesso>=0){
					echo"
						<h3 align='center'>Grazie per aver effettuato l'accesso al nostro sito $user<br> 
						Scelga cosa si vuole fare:<br>
						<a href='aggiunta.php'>Aggiungere un nuovo acquisto e tutti i dati conseguenti<br>
						<a href='aggiorna.php'>Aggiornamento dati di un'acquisto<br>
						<a href='elimina_prodotto.php'>Cancellazione dati di un acquisto <br>
						<a href='stampa.php'>Stampa di tutti i prodotti<br>
						<a href='elimina_account.php'>Eliminare questo account<br>
						<a href='home.php'>Esci<br>
					";
				}
				else{
					echo "<script type='text/javascript'>alert('Errore!!! Si prega di compilare tutti i campi oppure verificare la correttezza delle credenziali inserite')</script>
						<a href='home.php'>Riprova<br>
						<a href='registrazione.php'>Effettua la registrazione<br>
					";
				}
			}
		?>
	</body>
</html>