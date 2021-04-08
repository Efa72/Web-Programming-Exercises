
<?php
function hitungDenda($tglHaruskembali, $tglKembali){
	echo "<pre>";

	$tglHaruskembali = "2021-01-03";
	$tglKembali = "2021-01-05";

	$pecah1 = explode("-", $tglHaruskembali);
	$tgl1 = $pecah1[2];
	$bln1 = $pecah1[1];
	$thn1 = $pecah1[0];

	$pecah2 = explode("-", $tglKembali);
	$tgl2 = $pecah2[2];
	$bln2 = $pecah2[1];
	$thn2 =  $pecah2[0];

	$jdn1 = GregorianToJD($bln1, $tgl1, $thn1);
	$jdn2 = GregorianToJD($bln2, $tgl2, $thn2);

	$selisih = $jdn2 - $jdn1;
	$denda = $selisih * 3000;

echo "HITUNG DENDA \n";
echo "\n";
echo "Tanggal Harus Kembali : ". $tglHaruskembali;
echo "\n";
echo "Tanggal tglKembali    : ". $tglKembali;
echo "\n";
echo "Terlambat             : ".$selisih." hari";
echo "\n";
echo "Denda                 : Rp ".$denda;}
hitungDenda(2021-01-03, 2021-01-05);
echo "</pre>";

?>
