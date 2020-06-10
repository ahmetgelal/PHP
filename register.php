<?php
include("ayar.php");

$kadi=$_POST["kad"];
$sifre=$_POST["sifre"];
$dogrulamakodu=rand(1000,9999);
$durum=0;

class Result{
    public $result;
    public $tf;
    public $dogrulamaKodu;
}
$result=new Result();
$kontrol=mysqli_query($baglan,"select * from uyeleroto where kullaniciadi='$kadi'");
if(mysqli_num_rows($kontrol)<1)
{
   $ekle=mysqli_query($baglan,"insert into uyeleroto (kullaniciadi,kullanicisifre,dogrulamakodu,durum) values ('$kadi','$sifre','$dogrulamakodu','$durum')");
if($ekle)
{
    $result->dogrulamaKodu=$dogrulamakodu;
    $result->tf=true;
    $result->result="kayit basarili";
    echo(json_encode($result));

}

}
else 
{
   $result->result="boyle bir kayit var";
    $result->tf=false;
    echo(json_encode($result));
}


?>