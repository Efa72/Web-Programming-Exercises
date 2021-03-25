<html>
 	<head>Table</head>
 	<body>
 	<?php
 	$baris = 4;
 	$kolom = 5;
 	$count = 0;
 		echo "<table border = '1'>";

 		for($i = 1; $i < 5; $i++){
 			echo "<tr>";
 			for ($j = 1; $j < 6; $j++){
 				$count++;
 				echo "<td>"."Cell ".$count."</td>";
 			}
 			echo "</tr>";
 		}
 		echo "</table>";
 	?>
 	</body>
</html>

