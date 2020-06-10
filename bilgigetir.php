<?php
include("ayar.php");
$id=$_GET["uyeid"];

Class bilgiler
{
    public $uyeismi;
    public $uyeyasi;
    public $uyeokul;
    public $uyeresim;
    public $uyemailadres;

}
$bilgi= new bilgiler();

$kontrol=mysqli_query($baglan,"select * from bilgiler where id='$id'");
while($ata=mysqli_fetch_assoc($kontrol)){

    $bilgi->uyeismi=$ata["uyeismi"];
    $bilgi->uyeyasi=$ata["uyeyasi"];
    $bilgi->uyeokul=$ata["uyeokul"];
    $bilgi->uyeresim=$ata["uyeresim"];
    $bilgi->uyemailadres=$ata["uyemailadres"];

    echo(json_encode($bilgi));

}
?>