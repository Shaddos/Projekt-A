<?php echo("	
	<form action=RegisterMS.php method=POST>
				<fieldset>
					<legend>Bitte gebe deine pers&oumlnlichen Daten ein:
					</legend>
					<label for=name>Nachname:</label>
						<input id=name name=name required>
						<br>
					<label for=surname>Nachname:</label>
						<input id=surname name=surname required>
						<br>
					<label for=email>E-Mail:</label>
						<input type=email id=email name=email required>
						<br>
					<label for=age>Alter:</label>
						<input type=number id=age min=0 max=140 name=age required>
						<br>
					<label for=birthdate>Geburtsdatum:</label>
						<input type=date id=birthdate name=birthdate required>
						<br>
					<p>
						<label for=username>Username:</label>
							<input id=username name=username required>
							<br>
						<label for=password>Passwort:</label>
							<input type=password id=password name=password required>
							<br>
						</p>
				</fieldset>
				<input type=submit>
			</form>
	"); ?>