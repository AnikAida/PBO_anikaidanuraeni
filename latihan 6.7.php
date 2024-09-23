<?php
class perulangan{
    public function loop()
    {
        $i=0;
        do{
            $i++;
            echo $i."<br />";
        }
        while($i<=9);
    }
}
$ObjekPerulangan=new perulangan();
echo $ObjekPerulangan->loop()."<br />";
?>