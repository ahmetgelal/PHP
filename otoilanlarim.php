<?php

include("ayar.php");
$uyeid=$_GET["uyeid"];

$sorgula=mysqli_query($baglan,"select c.*,p.resimyolu
from ilanlar as c  
join ilanresimleri as p on
p.id=(
    select p1.id from ilanresimleri as p1
    where c.id = p1.ilan_id
    limit 1
    ) where c.uye_id='$uyeid'");
//echo(mysqli_num_rows($sorgula));

class Result{
    public $id;
    public $ilan_id;
    public $uye_id;
    public $fiyat;
    public $resim;
    public $aciklama;
    public $baslik;
    public $tf;
    public $result;
    public $sayi;
}
$result = new Result();

$say= mysqli_num_rows($sorgula);

if($say>0){
    $sayac=0;
    echo("[");
    while ($ata= mysqli_fetch_assoc($sorgula)){

        $sayac=$sayac+1;
        
        $result->id=$ata["id"];
        $result->ilan_id=$ata["ilan_id"];
        $result->uye_id=$ata["uye_id"];
        $result->fiyat=$ata["ucret"];
        $result->resim=$ata["resimyolu"];
        $result->aciklama=$ata["aciklama"];
        $result->baslik=$ata["baslik"];
        $result->tf= true;
        $result->result="ilan var";
        $result->sayi=$say;
        
        echo(json_encode($result));
        
        if($say>$sayac){
            echo(",");
        }

    }echo("]");
}else{
        $result->tf= false;
        $result->result="ilan var";

        echo("[");
        echo(json_encode($result));
        echo("]");
}       
?>