<?php
class Kendaraan
{
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga;
    var $merek;
    var $tahunpembuatan;
 
    function statusharga()
    {
        if ($this->harga > 50000000)
            $status = 'Mahal';
        else
            $status = 'Murah';
        return $status;
    }
    function dapatSubsidi()
    {
        if ($this->bahanbakar != 'Pertamax')
            $status = 'Dapat Subsidi';
        else
            $status = 'Tidak Dapat Subsidi';
        return $status;
    }
    function hargaSecondKendaraan()
    {
        if ($this->tahunpembuatan < 2000)
            $status = 'Harga Second';
        else
            $status = 'Harga Real';
        return $status;
    }
    function setMerek($x)
    {
        $this->merek = $x;
    }
    function getMerek()
    {
        return $this->merek;
    }
    function setHarga($y)
    {
        $this->harga = $y;
    }
    function getHarga()
    {
        return $this->harga;
    }
    function setWarna($x)
    {
        $this->warna = $x;
    }
    function getWarna()
    {
        return $this->warna;
    }
    function setBahanBakar($y)
    {
        $this->bahanbakar = $y;
    }
    function getBahanBakar()
    {
        return $this->bahanbakar;
    }
    function setJumlahRoda($x)
    {
    $this->jumlahroda = $x;
    }
    function getJumlahRoda()
    {
        return $this->jumlahroda;
    }
    function setTahunPembuatan($y)
    {
        $this->tahunpembuatan = $y;
    }
    function getTahunPembuatan()
    {
        return $this->tahunpembuatan;
    }
 
}
 
$Data1 = array('Toyota Yaris', '4', '160000000', 'Merah', 'Pertamax', '2014');
$Data2 = array('Honda Scoopy', '2', '13000000', 'Putih', 'Premium', '2005');
$Data3 = array('Isuzu Panther', '4', '40000000', 'Hitam', 'Solar', '1994');
 
for ($i = 1; $i <= 3; $i++) {
    for ($h = 0; $h <= 5; $h++) {
        ${"kendaraan$i"} = new Kendaraan();
        ${"kendaraan$i"}->setMerek(${"Data$i"}[0]);
        ${"kendaraan$i"}->setJumlahRoda(${"Data$i"}[1]);
        ${"kendaraan$i"}->setHarga(${"Data$i"}[2]);
        ${"kendaraan$i"}->setWarna(${"Data$i"}[3]);
        ${"kendaraan$i"}->setBahanBakar(${"Data$i"}[4]);
        ${"kendaraan$i"}->setTahunPembuatan(${"Data$i"}[5]);
    }
 
}
 
for ($i = 1; $i <= 3; $i++) {
    echo "\$kendaraan$i<br>"
        . ${"kendaraan$i"}->getMerek() . "<br>"
        . ${"kendaraan$i"}->getJumlahRoda() . "<br>"
        . ${"kendaraan$i"}->getHarga() . "<br>"
        . ${"kendaraan$i"}->getWarna() . "<br>"
        . ${"kendaraan$i"}->getBahanBakar() . "<br>"
        . ${"kendaraan$i"}->getTahunPembuatan() . "<br>"
        . ${"kendaraan$i"}->statusHarga() . "<br>"
        . ${"kendaraan$i"}->dapatSubsidi() . "<br>"
        . ${"kendaraan$i"}->hargaSecondKendaraan() . "<br><br>";
}
?>