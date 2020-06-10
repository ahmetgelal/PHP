<?php
include("ayar.php");

$ad=$_POST["kad"];
$sifre=$_POST["sifre"];

Class Uye{
    public $id;
    public $kadi;
  //  public $sifre;
}
$uye= new Uye();

$kontrol=mysqli_fetch_assoc(mysqli_query($baglan,"select * from uyeleroto where kullaniciadi='$ad' and kullanicisifre='$sifre'"));

$uye->id=$kontrol["id"];
$uye->kadi=$kontrol["kullaniciadi"];
$uye->sifre=$kontrol["kullanicisifre"];

echo(json_encode($uye));

?>