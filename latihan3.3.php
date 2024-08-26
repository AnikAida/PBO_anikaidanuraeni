<?php
class Kendaraan
{
    var $jumlah_roda;
    var $bahan_bakar;
    var $harga;
    var $merek;
 
    function status_harga()
    {
        if ($this->harga > 50000000) {
            $status = "Mahal";
        } else {
            $status = "Murah";
        }
        return $status;
    }
}
$ObjekKendaraan1 = new Kendaraan();
$ObjekKendaraan1->merek = "Yamaha MIO";
$ObjekKendaraan1->harga = "10000000";
 
$ObjekKendaraan2 = new Kendaraan();
$ObjekKendaraan2->merek = "Toyota Avanza";
$ObjekKendaraan2->harga = "100000000";
 
echo "Merek : " . $ObjekKendaraan2->merek . "<br>";
echo "Nominal Harga : " . $ObjekKendaraan2->harga . "<br>";
echo "Status Harga Kendaraan : " . $ObjekKendaraan2->status_harga();
?>