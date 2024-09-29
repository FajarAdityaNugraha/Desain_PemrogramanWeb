<?php
// function perkenalan() {
//     echo "Assalammualaikum, ";
//     echo "Perkenalkan, nama saya Fajar <br/>";
//     echo "Senang berkenalan dengan Anda <br/>";
// }
// perkenalan();

// function perkenalan($nama, $salam) {
//     echo "$salam, ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda <br/>";
// }
// perkenalan("Hamdana", "Hallo");
// echo "<hr>";
// $saya = "Fajar";
// $ucapanSalam = "Selamat pagi";
// perkenalan($saya, $ucapanSalam);


function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalammualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Saya berusia " . hitungUmur(1988, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan Anda <br/>";
}
perkenalan("Fajar");
?>