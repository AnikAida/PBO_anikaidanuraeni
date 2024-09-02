<?php
class Angsuran {
    private $pinjaman;
    private $bunga;
    private $lamaAngsuran;
    private $angsuran = [];

    public function setPinjaman($pinjaman) {
        $this->pinjaman = $pinjaman;
    }

    public function setBunga($bunga) {
        $this->bunga = $bunga;
    }

    public function setLamaAngsuran($lamaAngsuran) {
        $this->lamaAngsuran = $lamaAngsuran;
    }

    public function hitungAngsuran() {
        $pokokAngsuran = $this->pinjaman / $this->lamaAngsuran;
        $bungaTotal = ($this->bunga / 100) * $this->pinjaman;

        // Menghitung angsuran setiap bulan dan menyimpannya dalam array angsuran
        for ($i = 0; $i < $this->lamaAngsuran; $i++) {
            $this->angsuran[$i] = $pokokAngsuran + ($bungaTotal - ($i * ($bungaTotal / $this->lamaAngsuran)));
        }
    }

    // Mengembalikan seluruh array angsuran
    public function getAngsuran() {
        return $this->angsuran;
    }

    public function getLamaAngsuran() {
        return $this->lamaAngsuran;
    }
}

// Data tunggal
$Data1 = array(1000000, 10, 5); // Rp. 1.000.000, bunga 10%, lama angsuran 5 bulan

$angsuran1 = new Angsuran();
$angsuran1->setPinjaman($Data1[0]);
$angsuran1->setBunga($Data1[1]);
$angsuran1->setLamaAngsuran($Data1[2]);
$angsuran1->hitungAngsuran();

echo "Angsuran Data1<br/>";
echo "Pinjaman: Rp." . number_format($Data1[0], 0, ',', '.') . "<br/>";
echo "Bunga: " . $Data1[1] . "%<br/>";
echo "Lama Angsuran: " . $Data1[2] . " bulan<br/><br/>";

$angsuranArray = $angsuran1->getAngsuran();
$lamaAngsuran = $angsuran1->getLamaAngsuran();
for ($j = 0; $j < $lamaAngsuran; $j++) {
    echo "Angsuran " . ($j + 1) . ": Rp." . number_format($angsuranArray[$j], 0, ',', '.') . "<br/>";
}
?>
