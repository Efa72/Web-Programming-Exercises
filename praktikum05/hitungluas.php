<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$namatabung = $_GET['n'];
	$diameter = $_GET['d'];
    $tinggi = $_GET['t'];
    $jari = $diameter/2;

    $luas =  2*3.14*$jari*($jari+$tinggi);
    echo "<h3>Luas tabung ".$namatabung." dengan diameter ".$diameter." dan tinggi ".$tinggi." adalah ".$luas." satuan luas</h3>";
?>
</table>
</body>
</html>
