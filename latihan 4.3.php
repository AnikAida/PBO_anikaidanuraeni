<?php
//akses properties
class Kendaraan
{
    var $jumlahroda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;

    function setMerek ($x) {
        $this->merek = $x;
    }

    function getMerek(){
    return $this->merek;
    }

    function setHarga ($y) {
    $this->harga = $y;
    }

    function getHarga () {
    return $this->harga;
    }

    function setjumlahRoda ($x) {
    return $this->jumlahroda = $x;
    }

    function getjumlahRoda () {
    return $this->jumlahroda;
    }

    function setwarna ($x) {
    return $this->warna = $x;
    }

    function getwarna () {
    return $this->warna;
    }

    function setbahanBakar ($x) {
    return $this->bahanBakar = $x;
    }

    function getbahanBakar () {
    return $this->bahanBakar;
    }

    function settahunPembuatan ($x) {
    return $this->tahunPembuatan = $x;
    }

    function gettahunPembuatan() {
    return $this->tahunPembuatan;
    }
}

    $kendaraanl = new Kendaraan;
    $kendaraanl->setMerek('Yamaha Mio' );
    $kendaraanl->setHarga (10000000);
    $kendaraanl->setjumlahRoda (4);
    $kendaraanl->setwarna ('Putih');
    $kendaraanl->settahunPembuatan (2005);
    echo $kendaraanl->getMerek();
    echo "<br>";
    echo $kendaraanl->getHarga();
    echo "<br>";
    echo $kendaraanl->getjumlahRoda();
    echo "<br>";
    echo $kendaraanl->getwarna();
    echo "<br>";
    echo $kendaraanl->gettahunPembuatan();
    echo "<br>";
    echo "<br>";

    $kendaraan2 = new Kendaraan;
    $kendaraan2->setMerek('Toyota Yaris' );
    $kendaraan2->setHarga (60000000);
    $kendaraan2->setjumlahRoda (4);
    $kendaraan2->setwarna ('Silver');
    $kendaraan2->settahunPembuatan (2008);
    echo $kendaraan2->getMerek();
    echo "<br>";
    echo $kendaraan2->getHarga();
    echo "<br>";
    echo $kendaraan2->getjumlahRoda();
    echo "<br>";
    echo $kendaraan2->getwarna();
    echo "<br>";
    echo $kendaraan2->gettahunPembuatan();
    echo "<br>";
    echo "<br>";

    $kendaraan3 = new Kendaraan;
    $kendaraan3->setMerek('Pajero Sport' );
    $kendaraan3->setHarga (100000000);
    $kendaraan3->setjumlahRoda (4);
    $kendaraan3->setwarna ('Hitam');
    $kendaraan3->settahunPembuatan (20018);
    echo $kendaraan3->getMerek();
    echo "<br>";
    echo $kendaraan3->getHarga();
    echo "<br>";
    echo $kendaraan3->getjumlahRoda();
    echo "<br>";
    echo $kendaraan3->getwarna();
    echo "<br>";
    echo $kendaraan3->gettahunPembuatan();
    echo "<br>";
    echo "<br>";

?>
