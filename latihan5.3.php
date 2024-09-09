<?php
class Kendaraan
{
    var $jumlahRoda = 4;
    var $warna;
    var $bahanBakar ;
    var $harga_mobil;
    var $merek;
    var $tahunPembuatan;
    var $harga_bekas;
    var $platnomor;

    function statusHarga()
    {
        if ($this->harga_mobil > 50000000) {
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

    function hargaSecondKendaraan() {
        if ($this->tahunPembuatan > 2005) {
            $harga_bekas = $this->harga_mobil - ($this->harga_mobil * 20 / 100);
        } else if ($this->tahunPembuatan >= 2000 && $this->tahunPembuatan <= 2005) {
            $harga_bekas = $this->harga_mobil - ($this->harga_mobil * 30 / 100);
        } else {
            $harga_bekas = $this->harga_mobil - ($this->harga_mobil * 40 / 100);
        }
        return $harga_bekas;
    }

    function bayarpajak() {
        if ($this->tahunPembuatan <= 2017) {
            $jumlahpajak = $this->harga_mobil * (2.5 / 100);
        } else {
            $jumlahpajak = 0;
        }
        return $jumlahpajak;
    }
    
    function operasiplatnomor() {   
        if ($this->platnomor % 2 == 0) {
            $harioperasi = "selasa, kamis, sabtu";
        } else {
            $harioperasi = "senin,rabu,jumat,mimggu";
        }
        return $harioperasi;
    }
}

$ObjekKendaraan1 = new Kendaraan();
$ObjekKendaraan2 = new Kendaraan();
$ObjekKendaraan3 = new Kendaraan();

$ObjekKendaraan1->harga_mobil = 500000000;
$ObjekKendaraan1->tahunPembuatan = 2009;
$ObjekKendaraan1->bahanBakar = "Premium";
$ObjekKendaraan1->platnomor = 2122;

echo "Status Harga: " . $ObjekKendaraan1->statusHarga();
echo "<br>";
echo "Status BBM: " . $ObjekKendaraan1->statusBBM();
echo "<br>";
echo "Harga Bekas: " . $ObjekKendaraan1->hargaSecondKendaraan();
echo "<br>";
echo "Jumlah Pajak: " . $ObjekKendaraan1->bayarpajak();
echo "<br>";
echo "Hasil Operasi: " . $ObjekKendaraan1->operasiplatnomor();
echo "<br>";
?>
