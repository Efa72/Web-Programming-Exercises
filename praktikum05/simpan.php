
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Simpan Data</h2>
	<?php
	$namaFile = "datamhs.dat";

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tgllhr = $_POST['tgllhr'];
	$tmptlhr = $_POST['tmptlhr'];

	$myfile = fopen($namaFile, "a") or die("Tidak bisa buka file!");
	fwrite($myfile, "\n$nim|$nama|$tgllhr|$tmptlhr");
	fclose($myfile);
	
	echo "<p>"."Data Mahasiswa";
	echo "<p><pre>"."Nim 		: ".$nim;
	echo "<p><pre>"."Nama 		: ".$nama;
	echo "<p><pre>"."Tanggal Lahir 	: ".$tgllhr;
	echo "<p><pre>"."Tempat Lahir 	: ".$tmptlhr;
	?>

	<form method="post" action="datamhs.dat">
	Data mahasiswa berhasil ditambahkan <input type="submit" name="submit" value="Lihat Data">
	</form>
</body>
</html>
