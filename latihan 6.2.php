<?php
class perulangan{
    public function loop(){
        for($i=15; $i>0; $i--)
        {
            echo $i;
            echo "<br/>";

        }

    }
}
$objekPerulangan=new perulangan();
echo "  Jenis perulangan Lainnya"."<br/>";
echo $objekPerulangan->loop()."<br/>";
?>