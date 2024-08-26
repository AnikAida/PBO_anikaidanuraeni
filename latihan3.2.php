<?php
class Kendaraan
{
    var $jumlahRoda = 4;
    var $warna;
    var $bahanBakar = "Premium";
    var $harga = 100000000;
    var $merek;
    var $tahunPembuatan = 2004;

    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = "Mahal";
        } else {
            $status = "Murah";
        }
        return $status;
    }
    
    function statusBBM()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "DAPAT SUBSIDI";
        } else {
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }
    
    function hargaSecondKendaraan()
    {
        if ($this->tahunPembuatan < 2004) {
            $status = 1000000;
        } else {
            $status = 10000000;
        }
        return $status;
    }

}

$ObjekKendaraan1 = new Kendaraan();
$ObjekKendaraan1-> harga=1000000;
$ObjekKendaraan1-> tahunPembuatan=1999;
echo"Status Harga: ".$ObjekKendaraan->statusHarga();
$ObjekKendaraan2 = new Kendaraan;$ObjekKendaraan2->bahanBakar="Premium";
$ObjekKendaraan2->tahunPembuatan=1999;
echo "<br>";
echo"status BBM:".$ObjekKendaraan2->statusBBM();
echo "<br>";
echo"Harga Bekas:".$ObjekKendaraan2->hargaSecondKendaraan();
?>
