<?php
class Karyawan
{
    private $nama;
    private $golongan;
    private $jamLembur;
    private $totalGaji;
    private $gajiPokok;

    // Constructor untuk inisialisasi
    public function __construct($nama, $golongan, $jamLembur)
    {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
        $this->setGajiPokok();  // Set gaji pokok sesuai golongan
        $this->totalGaji = $this->hitungGaji();
    }

    // Setter untuk gaji pokok sesuai golongan
    public function setGajiPokok()
    {
        // Gaji pokok berdasarkan golongan
        $gajiPokokPerGolongan = [
            "Ib" => 1250000,
            "Ic" => 1300000,
            "Id" => 1350000,
            "IIa" => 2000000,
            "IIb" => 2100000,
            "IIc" => 2200000,
            "IIIa" => 2400000,
            "IIIb" => 2500000,
            "IIIc" => 2600000,
            "IVa" => 2800000,
            "IVb" => 2900000,
            "IVc" => 3000000,
            "IVd" => 3100000,
        ];
        $this->gajiPokok = $gajiPokokPerGolongan[$this->golongan];
    }

    // Menghitung gaji total (gaji pokok + lembur)
    private function hitungGaji()
    {
        $gajiLembur = $this->jamLembur * 15000;
        return $this->gajiPokok + $gajiLembur;
    }

    // Getter untuk nama
    public function getNama()
    {
        return $this->nama;
    }

    // Getter untuk golongan
    public function getGolongan()
    {
        return $this->golongan;
    }

    // Getter untuk jam lembur
    public function getJamLembur()
    {
        return $this->jamLembur;
    }

    // Getter untuk total gaji
    public function getTotalGaji()
    {
        return $this->totalGaji;
    }
}

// Membuat array untuk menyimpan daftar karyawan
$karyawanList = [];

// Input data karyawan secara dinamis
while (true) {
    echo "Masukkan Nama Karyawan (atau ketik 'selesai' untuk berhenti): ";
    $nama = trim(fgets(STDIN));
    if (strtolower($nama) === 'selesai') {
        break;
    }
    echo "Masukkan Golongan (Ib, Ic, Id, IIa, IIb, IIc, IIIa, IIIb, IIIc, IVa, IVb, IVc, IVd): ";
    $golongan = trim(fgets(STDIN));
    echo "Masukkan Total Jam Lembur: ";
    $jamLembur = (int) trim(fgets(STDIN));

    // Tambahkan karyawan ke array
    $karyawanList[] = new Karyawan($nama, $golongan, $jamLembur);
}

// Menampilkan daftar karyawan
echo "\nDaftar Karyawan:\n";
echo str_pad("Nama Karyawan", 20) .
    str_pad("Golongan", 10) .
    str_pad("Total Jam Lembur", 20) .
    str_pad("Total Gaji", 15) . "\n";
echo str_repeat("-", 75) . "\n";

foreach ($karyawanList as $karyawan) {
    echo str_pad($karyawan->getNama(), 20) .
        str_pad($karyawan->getGolongan(), 10) .
        str_pad($karyawan->getJamLembur(), 20) .
        str_pad(number_format($karyawan->getTotalGaji(), 0, ',', '.'), 15) . "\n";
}

?>
