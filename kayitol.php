<?php
include("ayar.php");
$kad=$_POST["kadi"];
$sifre=$_POST["sifre"];
$kod=rnd(1000,9999);
$mail=$_POST["mail"];

$ekle=mysqli_query($baglan,
"insert into kayitol(kadi,sifre,kod,mail) values ('$kad','$sifre','$kod','$mail','')");

if($ekle)
{

    
}




?>