<?php
class PolaBintang {
    // Variabel untuk menyimpan jumlah baris segitiga
    private $baris;

    // Constructor untuk menginisialisasi jumlah baris
    public function __construct($baris) {
        $this->baris = $baris;
    }

    // Getter untuk mendapatkan nilai baris
    public function getBaris() {
        return $this->baris;
    }

    // Setter untuk mengatur nilai baris
    public function setBaris($baris) {
        $this->baris = $baris;
    }

    // Fungsi untuk mencetak pola bintang pertama (double stars)
    public function gambarPertama() {
        for ($i = 1; $i <= $this->baris; $i++) {
            for ($j = $i; $j <= $this->baris + 1; $j++) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = 1; $j <= $i; $j++) {
                echo "**";
            }
            echo "<br />";
        }
    }

    // Fungsi untuk mencetak segitiga atas dan bawah yang terpisah (gambar kedua)
    public function gambarKedua() {
        // Segitiga bagian atas
        for ($i = 1; $i <= $this->baris; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br />";
        }

        // Segitiga bagian bawah
        for ($i = $this->baris - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br />";
        }
    }

    // Fungsi untuk mencetak segitiga penuh (gambar ketiga)
    public function gambarKetiga() {
        // Bagian atas segitiga
        for ($i = 1; $i <= $this->baris; $i++) {
            for ($j = $this->baris; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br />";
        }

        // Bagian bawah segitiga
        for ($i = $this->baris - 1; $i >= 1; $i--) {
            for ($j = $this->baris; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br />";
        }
    }
}

// Contoh penggunaan class
$pola = new PolaBintang(5); // Mengatur jumlah baris menjadi 5
echo "Gambar Pertama:<br />";
$pola->gambarPertama(); // Mencetak gambar pertama

echo "<br />Gambar Kedua:<br />";
$pola->gambarKedua(); // Mencetak gambar kedua

echo "<br />Gambar Ketiga:<br />";
$pola->gambarKetiga(); // Mencetak gambar ketiga

?>
