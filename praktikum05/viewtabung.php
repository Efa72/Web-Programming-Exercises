<html>
<head>
	<title></title>
</head>
<body>
<table width="auto" border="2">
    <tr>
        <td width="auto">Nama Tabung</td>
        <td width="auto">Diameter</td>
        <td width="auto">Tinggi</td>
        <td width="auto">Luas</td>
    </tr>
    <?php
    $file = fopen("datatabung.dat", "r");
    while (!feof($file) ) {
    $line_of_text = fgets($file);
    $parts = explode(',', $line_of_text);

    echo "<tr>
        <td><center>$parts[0]</center></td>
        <td>$parts[1]</td>
        <td>$parts[2]</td>
        <td><a href='hitungluas.php?n=$parts[0]&d=$parts[1]&t=$parts[2]'>view</a></td></tr>";
    }
    fclose($file);
    ?>
</table>
</body>
</html>
