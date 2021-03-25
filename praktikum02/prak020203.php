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
 				if ($count % 2 != 0){
 					echo "<td"."><font color = 'red'> Cell ".$count."</font></td".$count.">";
 				}else{
 					echo "<td"."><font color = 'blue'> Cell ".$count."</font></td".$count.">";
 				}

 			}
 			echo "</tr>";
 		}
 		echo "</table>";
 	?>
 	</body>
</html>