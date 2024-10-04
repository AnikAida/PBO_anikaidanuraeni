<?php

class manusia{
    var $nama;
    var $warna;

    function __construct(){
        echo "ini adalah isi methode construct <br/>";

    }
    function __destruct(){
        echo "Ini adalah isi methode destruct <br/>";

    }
    function tampilkan_nama(){
        echo "Nama saya Mahasiswi SI <br/>";

    }
}
$manusia=new manusia();
echo $manusia->tampilkan_nama();
?>