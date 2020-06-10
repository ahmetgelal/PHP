<?php

include("ayar.php");

$uye_id=$_GET["uyeid"];

$sorgula=mysqli_query($baglan,"select kullaniciadi, kullanicisifre from uyeleroto where id='$uye_id'");

class Result
{
public $kadi;
public $sifre;
}

$result = new Result();

$ata=mysqli_fetch_assoc($sorgula);

$result->kadi=$ata["kullaniciadi"];
$result->sifre=$ata["kullanicisifre"];

echo(json_encode($result));

?>