<?php echo("	
	<form action=LogInMS.php method=POST>
				<fieldset>
					<legend>Tippe Usernamen und Passwort ein</legend>
						<p>
						<label for=username>Username:</label>
							<input id=username name=username required>
							<br>
						<label for=password>Passwort:</label>
							<input type=password id=password name=password required>
							<br>
						</p>
						Bist du noch nicht registriert?<a href=registrierung.php>hier</a>
				</fieldset>
				<input type=submit><br>
			</form>
	"); ?>