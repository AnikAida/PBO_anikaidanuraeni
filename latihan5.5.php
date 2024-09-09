<?php
$pembeli1 = ["Pembeli 1", true, 200000];
$pembeli2 = ["Pembeli 2", true, 570000];
$pembeli3 = ["Pembeli 3", false, 120000];
$pembeli4 = ["Pembeli 4", false, 90000];
 
function hitungDiskon($nama, $kartumember, $totalbelanja) {
    $diskon = 0;
    if ($kartumember) {
        switch (true) {
            case ($totalbelanja > 500000):
                $diskon = 50000;
                break;
            case ($totalbelanja > 100000):
                $diskon = 15000;
                break;
            case ($totalbelanja <= 110000):
                    $diskon = 5000;
                    break;
            default:
                $diskon = 0;
                break;
        }
    } else {
        // Jika tdk memiliki member
        if ($totalbelanja > 100000) {
            $diskon = 5000;
        }
    }
    $biaya_akhir = $totalbelanja - $diskon;
    echo "$nama, Total Belanja: Rp$totalbelanja, Diskon: Rp$diskon, Biaya yang dikeluarkan: Rp$biaya_akhir\n";
}
$pembeli = 1;
switch ($pembeli) {
    case 1:
        hitungDiskon($pembeli1[0], $pembeli1[1], $pembeli1[2]);
        // Tidak ada break
    case 2:
        hitungDiskon($pembeli2[0], $pembeli2[1], $pembeli2[2]);
    case 3:
        hitungDiskon($pembeli3[0], $pembeli3[1], $pembeli3[2]);
    case 4:
        hitungDiskon($pembeli4[0], $pembeli4[1], $pembeli4[2]);
        break;
    default:
        echo "Tidak ada pembeli lagi.";
}
?>