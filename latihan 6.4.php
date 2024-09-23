<?php
class perulangan{
    public function loop(){
        $array=array('subang', 'Bandung','Jakarta','Yogyakarta');
            foreach ($array as $key){
                echo $key."<br/>";
            }
    }
}
$objekPerulangan=new perulangan();
echo "Nama-Nama Kota Di Pulau Jawa: "."<br/>";
echo $objekPerulangan->loop()."<br/>";
