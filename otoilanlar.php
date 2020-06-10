<?php
include("ayar.php");

$sor=mysqli_query($baglan,"select c.*,p.resimyolu
from ilanlar as c
join ilanresimleri as p on
p.id=(select p1.id from ilanresimleri as p1
where c.id=p1.id limit 1)");

class Result{
    public $ilanid;
    public $uyeid;
    public $fiyat;
    public $resim;
    public $aciklama;
    public $baslik;
    public $tf;
    public $result;
    public $sayi;
    public $il;
    public $ilce;
    public $mahalle;
}

$result= new Result();

$say=mysqli_num_rows($sor);
if($say>0){
    $sayac=0;
    echo("[");
    while($ata=mysqli_fetch_assoc($sor)){
        $sayac=$sayac+1;
        $result->ilanid=$ata["id"];
        $result->uyeid=$uye_id;
        $result->fiyat=$ata["ucret"];
        $result->resim=$ata["resimyolu"];
        $result->aciklama=$ata["aciklama"];
        $result->baslik=$ata["baslik"];
        $result->tf=true;
        $result->result="ilan var";
        $result->sayi=$say;
        $result->il=$ata["sehir"];
        $result->ilce=$ata["ilce"];
        $result->mahalle=$ata["mahalle"];
        echo(json_encode($result));
    if($say>$sayac){
        echo(",");


    }else{
        echo("]");
    }
    
    
    }
}

?>