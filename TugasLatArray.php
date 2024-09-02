<?php
class nilaiKuis
{
    var $Nama;
    var $Kelas;
    var $MataKuliah;
    var $Nilai;
 
    function statuslulus()
    {
        if ($this->Nilai >= 75)
            $status = "Lulus";
        else
            $status = "Tidak Lulus Kuis";
        return $status;
    }
    function setNama($i)
    {
        $this->Nama = $i;
    }
    function getNama()
    {
        return $this->Nama;
    }
    function setKelas($i)
    {
        $this->Kelas = $i;
    }
    function getKelas()
    {
        return $this->Kelas;
    }
    function setMatkul($i)
    {
        $this->MataKuliah = $i;
    }
    function getMatkul()
    {
        return $this->MataKuliah;
    }
    function setNilai($i)
    {
        $this->Nilai = $i;
    }
    function getNilai()
    {
        return $this->Nilai;
    }
}
 
$Data1 = array('Aditya', 'SI 2', 'Pemrograman Berorientasi Objek', 80);
$Data2 = array('Shinta', 'SI 2', 'Pemrograman Berorientasi Objek', 75);
$Data3 = array('Ineu', 'SI 2', 'Pemrograman Berorientasi Objek', 55);
 
for ($i = 1; $i <= 3; $i++) {
    for ($h = 0; $h <= 3; $h++) {
        ${"nilaikuis$i"} = new nilaiKuis();
        ${"nilaikuis"}->setNama(${"Data$i"}[0]);
        ${"nilaikuis$i"}->setKelas(${"Data$i"}[1]);
        ${"nilaikuis$i"}->setMatkul(${"Data$i"}[2]);
        ${"nilaikuis$i"}->setNilai(${"Data$i"}[3]);
    }
}
 
for ($i = 1; $i <= 3; $i++) {
    echo "\nilaikuis$i<br>"
    ."Nama :"    . ${"nilaikuis$i"}->getNama() . "<br>"
    ."Kelas:"    . ${"nilaikuis$i"}->getKelas() . "<br>"
    ."Mata Kuliah :"   . ${"nilaikuis$i"}->getMatkul() . "<br>"
    ."Nilai: "   . ${"nilaikuis$i"}->getNilai() . "<br>"
    ."Status Lulus :"  . ${"nilaikuis$i"}->statuslulus() . "<br><br>";
}
 
 