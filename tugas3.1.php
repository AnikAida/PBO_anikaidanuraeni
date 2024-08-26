<?php
class Pinjaman
{
    var $besaranPinjaman = 1000000;
    var $besaranBunga = 10/100;
    var $lamaAngsuran = 5;
    var $keterlambatan = 40;
   
    function Total_Pinjaman() {
        $totalPinjaman = $this->besaranPinjaman + (($this->besaranPinjaman * $this->besaranBunga));
        return $totalPinjaman;
    }
   
    function Besar_Angsuran() {
        $totalPinjaman = $this->Total_Pinjaman();
        $angsuranPerBulan = $totalPinjaman / $this->lamaAngsuran;
        return $angsuranPerBulan;
    }
 
       function Denda_Terlambat() {
        $angsuranPerBulan = $this->Besar_Angsuran();
        $dendaPerHari = 0.15 / 100 * $angsuranPerBulan;
        $totalDenda = $dendaPerHari * $this->keterlambatan;
        return $totalDenda;
    }
 
   
    function Total_Pembayaran() {
        $totalPinjaman = $this->Total_Pinjaman();
        $totalDenda = $this->Denda_Terlambat();
        $totalPembayaran = $totalPinjaman / ($this->lamaAngsuran) + $totalDenda;
        return $totalPembayaran;
    }
}
 
$pinjaman = new Pinjaman();
echo "TOKO PEGADAIAN SYARIAH" . "<br>";
echo "Jl Keadilan No 16" . "<br>";
echo "Telp 72353459" . "<br>";
echo "<br>";
echo "Besaran Pinjaman : 1000000" . "<br>";
echo "Besaran Bunga : 10%" . "<br>";
echo "Total Pinjaman: " . $pinjaman->Total_Pinjaman();
echo "<br>";
echo "Lama Angsuran : 5 bulan" . "<br>";
echo "Besar Angsuran: " .$pinjaman->Besar_Angsuran();
echo "<br>";
echo "Denda keterlambatan: " . $pinjaman->Denda_Terlambat();
echo "<br>";
echo "Besaran Pembayaran: " . $pinjaman->Total_Pembayaran();
?>