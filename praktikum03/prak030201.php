
<?php
function hitunggaji($gol, $masaKerja)
{
    if ($gol == 'A') {
        if ($masaKerja<10) {
            $gaji=5;
        }else {
            $gaji=7;
        }
    }else if ($gol=='B') {
        if ($masaKerja<10) {
            $gaji=6;
        }else{
            $gaji=8;
        }
    }
   return $gaji;
}
 
//pemanggilan fungsi
$gaji=hitunggaji('A',5);
echo "Gaji karyawan adalah ".hitunggaji('A',5)."jt";
?> 

