<?php
// $nilaiNumerik = 92;

// if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
//     echo "Nilai huruf : A";
// } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
//     echo "Nilai huruf : B";
// } elseif ($nilaiNumerik >= 70 && $nilaiNumerik <80) {
//     echo "Nilai huruf : C";
// } elseif ($nilaiNumerik < 70) {
//     echo "Nilai huruf : D";
// }

// $jarakSaatIni = 0;
// $jarakTarget = 500;
// $peningkatanHarian = 30;
// $hari = 0;

// while ($jarakSaatIni < $jarakTarget) {
//     $jarakSaatIni += $peningkatanHarian;
//     $hari++;
// }

// echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilomater.";

// $jumlahLahan = 10;
// $tanamanPerLahan = 5;
// $buahPerTanaman = 10;
// $jumlahBuah = 0;

// for ($i = 1; $i <= $jumlahLahan; $i++) {
//     $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
// }

// echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah";

// $skorUjian = [85, 92, 78 ,96, 88];
// $totalSkor = 0;

// foreach ($skorUjian as $skor) {
//     $totalSkor += $skor;
// }

// echo "Total skor ujian adalah : $totalSkor";

// $nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// sort($nilai_siswa);
// array_splice($nilai_siswa, 0, 2);
// array_splice($nilai_siswa, -2);
// $total_nilai = array_sum($nilai_siswa);
// $jumlah_siswa = count($nilai_siswa);
// $rata_rata = $total_nilai / $jumlah_siswa;
// echo "Total nilai setelah mengabaikan 2 nilai tertinggi dan terendah: " . $total_nilai;
// echo "<br>";
// echo "Rata-rata nilai: " . $rata_rata;

// $harga_awal = 120000;
// $diskon = 20;
// $jumlah_diskon = ($harga_awal * $diskon) / 100;
// $harga_akhir = $harga_awal - $jumlah_diskon;
// echo "Harga awal produk: Rp " . number_format($harga_awal, 0, ',', '.');
// echo "<br>";
// echo "Jumlah diskon: Rp " . number_format($jumlah_diskon, 0, ',', '.');
// echo "<br>";
// echo "Harga akhir yang harus dibayar: Rp " . number_format($harga_akhir, 0, ',', '.');

$total_poin = 620;
$dapat_hadiah = ($total_poin > 500) ? "YA" : "TIDAK";
echo "Total skor pemain adalah: " . $total_poin . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $dapat_hadiah;
?>