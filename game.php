<!doctype html>
<html lang=de>
	<head>
		<meta charset=utf-8>
			<title>Simulation: Piraten? Panik! : GAME</title>
	</head>
	<body>
		<header>
			<p><h1>Simulation: Piraten? Panik! </h1></p>
			<p><h1>GAME</h1></p>
		</header>
		
		<main>
				(Provisorische Felderansicht)
			<br>
			<?php include('InfosMS.php') 		?>
			<?php include('SpielfeldMS.php')	?>
			<?php include('ItemsMS.php')		?>
			<?php include('PassivsMS.php')		?>	<!-- SpieleInfos,-Feld,Items,Passivs -->
		</main>
		
		<footer>
			<?php include('OptionenMS.php') ?> <!-- Optionen -->
		</footer>
	</body>
</html>