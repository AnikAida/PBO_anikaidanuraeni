<?php

// Class untuk menangani login
class Login {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function login() {
        $username_benar = "user";
        $password_benar = "password";

        if ($this->username === $username_benar && $this->password === $password_benar) {
            echo "Selamat datang, anda telah berhasil login di Aplikasi Bangun Ruang CLI.\n";
            return true;
        } else {
            echo "Mohon maaf, username dan password yang anda masukkan salah!\n";
            return false;
        }
    }
}

// Class Persegi
class Persegi {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function getLuas() {
        return $this->sisi * $this->sisi;
    }

    public function getKeliling() {
        return 4 * $this->sisi;
    }
}

// Class Persegi Panjang
class PersegiPanjang {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function getLuas() {
        return $this->panjang * $this->lebar;
    }

    public function getKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Class Segitiga
class Segitiga {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function getLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function getKeliling() {
        $sisiMiring = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
        return $this->alas + $this->tinggi + $sisiMiring;
    }
}

// Fungsi utama untuk memulai aplikasi
function startApp() {
    // Proses login
    echo "Masukkan username: ";
    $username = trim(fgets(STDIN));

    echo "Masukkan password: ";
    $password = trim(fgets(STDIN));

    $login = new Login($username, $password);
    if ($login->login()) {
        pilihBangunRuang();
    } else {
        startApp();
    }
}

// Fungsi untuk memilih bangun ruang
function pilihBangunRuang() {
    echo "Silakan pilih salah satu bangun ruang:\n";
    echo "1. Persegi\n";
    echo "2. Persegi Panjang\n";
    echo "3. Segitiga\n";
    echo "4. Lingkaran\n";
    echo "5. Belah ketupat\n";

    echo "Pilih nomor bangun ruang: ";
    $pilihan = trim(fgets(STDIN));

    switch ($pilihan) {
        case 1:
            echo "Masukkan sisi persegi (cm): ";
            $sisi = trim(fgets(STDIN));
            $persegi = new Persegi($sisi);
            echo "Luas Persegi: " . $persegi->getLuas() . " cm²\n";
            echo "Keliling Persegi: " . $persegi->getKeliling() . " cm\n";
            break;

        case 2:
            echo "Masukkan panjang (cm): ";
            $panjang = trim(fgets(STDIN));
            echo "Masukkan lebar (cm): ";
            $lebar = trim(fgets(STDIN));
            $persegiPanjang = new PersegiPanjang($panjang, $lebar);
            echo "Luas Persegi Panjang: " . $persegiPanjang->getLuas() . " cm²\n";
            echo "Keliling Persegi Panjang: " . $persegiPanjang->getKeliling() . " cm\n";
            break;

        case 3:
            echo "Masukkan alas (cm): ";
            $alas = trim(fgets(STDIN));
            echo "Masukkan tinggi (cm): ";
            $tinggi = trim(fgets(STDIN));
            $segitiga = new Segitiga($alas, $tinggi);
            echo "Luas Segitiga: " . $segitiga->getLuas() . " cm²\n";
            echo "Keliling Segitiga: " . round($segitiga->getKeliling(), 2) . " cm\n";
            break;

        default:
            echo "Pilihan tidak valid. Silakan coba lagi.\n";
            pilihBangunRuang();
            break;
    }

    kembaliKeMenu();
}

// Fungsi untuk kembali ke menu utama
function kembaliKeMenu() {
    echo "Kembali ke menu utama? (y/n): ";
    $jawaban = trim(fgets(STDIN));

    if (strtolower($jawaban) == 'y') {
        pilihBangunRuang();
    } else {
        echo "Terima kasih telah menggunakan aplikasi ini!\n";
        exit();
    }
}

// Memulai program
startApp();

?>
