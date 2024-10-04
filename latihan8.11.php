<?php
interface Hewan{
    public function Makan();
    public function Bergerak();
    public function Beranak();
}

class Burung implements Hewan{
    public function Makan()
    {
        return "Burung makan biji bijian<br/>";
    }
    public function Bergerak()
    {
        return "Burung bergerak dengan berjalan, terbang dan melompat<br/>";
    }
    public function Beranak()
    {
        return "Burung beranak dengan bertelur<br/>";
    }
}

class Kambing implements Hewan{
    public function Makan()
    {
        return "Kambing makan rumput<br/>";
    }
    public function Bergerak()
    {
        return "Kambing bergerak dengan berjalan dan berlari<br/>";
    }
    public function Beranak()
    {
        return "Kambing beranak dengan melahirkan<br/>";
    }
}

// Membuat objek dari kelas Burung dan Kambing
$burung = new Burung();
$kambing = new Kambing();

// Memanggil method-method dari objek Burung
echo $burung->Makan();
echo $burung->Bergerak();
echo $burung->Beranak();

echo "<br/>"; // Pemisah output

// Memanggil method-method dari objek Kambing
echo $kambing->Makan();
echo $kambing->Bergerak();
echo $kambing->Beranak();
?>
