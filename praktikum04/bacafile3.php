<html>
<head>
	<title></title>
</head>
<body>
<table width="auto" border="2">
    <tr>
        <td width="auto">NIM</td>
        <td width="auto">Nama Mahasiswa</td>
        <td width="auto">Tanggal Lahir</td>
        <td width="auto">Tempat Lahir</td>
        <td width="auto">Usia (Thn)</td>
    </tr>
<?php
$file_handle = fopen("datamhs.dat", "rb");
while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);
    $parts = explode('|', $line_of_text);
    $lahir = $parts[2];
	$taun = date('Y/m/d');
	$pecah1 = explode("-", $lahir);
	$tgl1 = $pecah1[2];
	$bln1 = $pecah1[1];
	$thn1 = $pecah1[0];
	$pecah2 = explode("/", $taun);
	$tgl2 = $pecah2[2];
	$bln2 = $pecah2[1];
	$thn2 =  $pecah2[0];
	$usia = $thn2-$thn1;
    echo "<tr>
    <td>$parts[0]</td>
    <td>$parts[1]</td>
    <td>$parts[2]</td>
    <td>$parts[3]</td>
    <td>$usia    </td>
    </tr>";
}
fclose($file_handle);
?>
</table>
Jumlah Data : 4
</body>
</html>
