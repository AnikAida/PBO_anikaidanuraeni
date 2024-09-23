<?php

class Employee
{
    public $nama;
    public $umur;
    public $lama_kerja; // dalam tahun
    public $gaji;

    function __construct($nama, $umur, $lama_kerja, $gaji)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->lama_kerja = $lama_kerja;
        $this->gaji = $gaji;
    }

    function getInfo()
    {
        echo "Nama: " . $this->nama . "<br/>";
        echo "Umur: " . $this->umur . "<br/>";
        echo "Lama Kerja: " . $this->lama_kerja . " tahun<br/>";
        echo "Gaji: " . $this->gaji . "<br/>";
    }
}

class Programmer extends Employee
{
    function hitungBonus()
    {
        if ($this->lama_kerja < 1) {
            $bonus = 0; // tidak ada perubahan gaji
        } elseif ($this->lama_kerja >= 1 && $this->lama_kerja <= 10) {
            $bonus = 0.01 * $this->lama_kerja;
        } else {
            $bonus = 0.02 * $this->lama_kerja;
        }

        $this->gaji += $this->gaji * $bonus;
        echo "Bonus Programmer: " . ($bonus * 100) . "%<br/>";
    }
}

class Direktur extends Employee
{
    function hitungBonus()
    {
        $bonus = 0.5 * $this->lama_kerja;  // 50% dari lama kerja
        $tunjangan = 0.1 * $this->lama_kerja;  // 10% tunjangan

        $this->gaji += $this->gaji * ($bonus + $tunjangan);
        echo "Bonus Direktur: " . ($bonus * 10) . "% + Tunjangan: " . ($tunjangan * 10) . "%<br/>";
    }
}

class PegawaiMingguan extends Employee
{
    public $harga_barang;
    public $stock_barang;
    public $total_penjualan;

    function __construct($nama, $umur, $lama_kerja, $gaji, $harga_barang, $stock_barang, $total_penjualan)
    {
        parent::__construct($nama, $umur, $lama_kerja, $gaji);
        $this->harga_barang = $harga_barang;
        $this->stock_barang = $stock_barang;
        $this->total_penjualan = $total_penjualan;
    }

    function hitungBonus()
    {
        if ($this->total_penjualan > 0.7 * $this->stock_barang) {
            $bonus = 0.1 * $this->harga_barang;
            echo "Bonus Pegawai Mingguan: 10% dari harga barang<br/>";
        } else {
            $bonus = 0.03 * $this->harga_barang;
            echo "Bonus Pegawai Mingguan: 3% dari harga barang<br/>";
        }

        $this->gaji += $bonus;
    }
}


$programmer = new Programmer("aida", 25, 5, 5000000);
echo "<b>Info Programmer</b><br/>";
$programmer->getInfo();
$programmer->hitungBonus();
$programmer->getInfo();

echo "<br/>";

$direktur = new Direktur("anik", 50, 8, 20000000);
echo "<b>Info Direktur</b><br/>";
$direktur->getInfo();
$direktur->hitungBonus();
$direktur->getInfo();

echo "<br/>";

$pegawaiMingguan = new PegawaiMingguan("nura", 30, 2, 3000000, 1000000, 100, 80);
echo "<b>Info Pegawai Mingguan</b><br/>";
$pegawaiMingguan->getInfo();
$pegawaiMingguan->hitungBonus();
$pegawaiMingguan->getInfo();

?>
