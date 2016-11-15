<?php 
$punkteOne = 0;
$punkteTwo = 0;
$punkteThree = 0;
$punkteFour = 0;
$punkteFive = 0;
$HiscoreTable = array("1." => $punkteOne,
					  "2." => $punkteTwo,
					  "3." => $punkteThree,
					  "4." => $punkteFour,
					  "5." => $punkteFive);
$tableStart = "<table border=\"1\">
				<tr>
					<th>Rank</th>
					<th>Points</th>
				</tr>";
$tableEnd = "</table>";

	echo($tableStart);
foreach($HiscoreTable as $name=>$value){
	echo("<tr>
			<td>".$name."</td>
			<td>".$value."</td>
		</tr>");
}
	echo($tableEnd);

?>
