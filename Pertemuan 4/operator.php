<?php
// $a = 10;
// $b = 5;

// $hasilTambah = $a + $b;
// $hasilKurang = $a - $b;
// $hasilKali = $a * $b;
// $hasilBagi = $a / $b;
// $sisaBagi = $a % $b;
// $pangkat = $a ** $b;

// echo "a + b : $hasilTambah <br>";
// echo "a - b : $hasilKurang <br>";
// echo "a * b : $hasilKali <br>";
// echo "a / b : $hasilBagi <br>";
// echo "a % b : $sisaBagi <br>";
// echo "a^b : $pangkat <br>";

// $hasilSama = $a == $b;
// $hasilTidakSama = $a != $b;
// $hasilLebihKecil = $a < $b;
// $hasilLebihBesar = $a > $b;
// $hasilLebihKecilSama = $a <= $b;
// $hasilLebihBesarSama = $a >= $b;

// $benar = true;
// $salah = false;

// echo "a == b : $salah <br>";
// echo "a != b : $benar <br>";
// echo "a < b : $salah <br>";
// echo "a > b : $benar <br>";
// echo "a <= b : $salah <br>";
// echo "a >= b : $benar <br>";

// $hasilAnd = $a && $b;
// $hasilOr = $a || $b;
// $hasilNotA = !$a;
// $hasilNotB = !$b;

// echo "$a && $b " . ($hasilAnd ? 'true' : 'false') . "<br>";
// echo "$a || $b " . ($hasilOr ? 'true' : 'false') . "<br>";
// echo "!$a " . ($hasilNotB ? 'true' : 'false') . "<br>";
// echo "!$b " . ($hasilNotB ? 'true' : 'false') . "<br>";


// echo "$a += $b = " . ($a += $b) . "<br>";
// echo "$a -= $b = " . ($a -= $b) . "<br>";
// echo "$a *= $b = " . ($a *= $b) . "<br>";
// echo "$a /= $b = " . ($a /= $b) . "<br>";
// echo "$a % $b = " . ($a % $b) . "<br>";

// $hasilIdentik = $a === $b;
// $hasilTidakIdentik = $a !== $b;

// echo " " . ($hasilIdentik ? 'true' : 'false') . "<br>";
// echo " " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";

$total_kursi = 45;
$kursi_terisi = 28;
$kursi_kosong = $total_kursi - $kursi_terisi;
$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;
echo "Jumlah kursi yang masih kosong adalah " . $kursi_kosong . " kursi.";
echo "<br>";
echo "Persentase kursi yang masih kosong adalah " . $persentase_kosong . "%";
?>