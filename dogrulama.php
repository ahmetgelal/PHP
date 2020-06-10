<?php
include("ayar.php");

$kadi=$_POST["kad"];
$dogrulamaKodu=$_POST["kod"];

class Result{
    public $result;
    public $tf;
    public $id;
    public $kad;
   
}


$kontol=mysqli_query($baglan,"select * from uyeleroto where kullaniciadi='$kadi' and dogrulamakodu='$dogrulamakodu' and durum='0'");

if(mysqli_num_rows($kontrol)>0)
{

$guncelle=mysqli_query($boglan,"update uyeleroto set durum='1' where kullaniciadi='$kadi' and dorgulamakodu='$dogrulamakodu'");
$a=mysqli_fetch_assoc($kontrol);
if($guncelle){
    
    $result->result="kayit basarili";
    $result->tf=true;
    $result->id=$a["id"];
    $result->kad=$a["kullaniciadi"];
   
    echo(json_encode($result));


}


}else{
    $result->result="kayit basarisiz";
    $result->tf=false;
    $result->id=null;
    $result->kad=null;

    echo(json_encode($result));
}



?>