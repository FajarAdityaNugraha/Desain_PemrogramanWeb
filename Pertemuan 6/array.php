<?php
function perkenalan($nama, $salam="Assalammu'alaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama. "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
perkenalan("Fajar", "Hallo");
echo "<hr>";
$saya = "Fajar";
$ucapanSalam = "Selamat Pagi";
perkenalan($saya);
?>