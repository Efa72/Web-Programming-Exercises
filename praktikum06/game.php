
<!DOCTYPE html>
<html>
<head>
	<title>Contoh</title>
</head>
<body>
	<?php
	
	?>
	<h2>GAME TEBAK ANGKA</h2>
	<p> Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
	<p>Masukkan Bilangan Tebakan Anda</p>
	<form method="post" action="game.php">
		<input type="text" name="bil">

		<input type="submit" name="submit" value="tebak">
	</form>

	<?php
	
	if (isset($_POST['bil'])){
	$bil = $_POST['bil'];
	$acak = rand(1,3);
	

	if ($bil==$acak) {
		echo "<h4>Selamat ya… ".$_COOKIE['username']." Anda benar, saya telah memilih bilangan ".$acak;
		echo "<h3>Ayo <a href='game.php'>main</a> lagi...";
	}
	if ($bil<$acak) {
		echo "<h5>Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.";
	}
	if ($bil>$acak) {
		echo "<h5>Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.";
	}
}
?>	
	
</body>
</html>

