<html>
	<body>
		<?php
			echo "<form action='avvesso.php' method='post'>";
			echo "<h1>Vuoi eliminare l'account?</h1>";
			echo "<table>";
 			echo "<tr><td>Username</td><td><input type='text' name='username'></td></tr>";
 			echo "<tr><td>Password</td><td><input type='password' name='password'></td></tr><br>";
 			echo "</table>";
 			echo "<br><input type='submit' name='ok' value='Elimina'><br>";
			echo "</form>";
		?>
	</body>
</html>