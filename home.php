<html>
	<head>
	</head>
	<body bgcolor="aqua">
		<h1 align="center">ACCEDI AL NEGOZIO ON-LINE<br>
		<?php
			echo "
				<form action='accesso.php' method='POST'>
					<table border='1' align='center'>
						<tr><td>Username</td><td><input type='text' name='utente'></td></tr>
						<tr><td>Password</td><td><input type='password' name='pass'></td></tr>
						<tr><td colspan='2' align='center'><input type='submit' name='ok' value='Accedi'></td></tr>
					</table>
				</form>
			";
		?>
	</body>
</html>