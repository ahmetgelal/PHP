<?php
include("ayar.php");
$ilanid=47;//$_GET["ilanid"];

$sor=mysqli_query($baglan,"select * from ilanlar where id='$ilanid'");

class Result{
public $uyeid     ;
public $sehir     ;
public $ilce     ;
public $mahalle   ;
public $marka      ;
public $seri     ;
public $model      ;
public $yil       ;
public $ilantipi    ;
public $kimden    ;
public $baslik            ;
public $aciklama   ;
public $motortipi   ;
public $motorhacmi    ;
public $surat   ;
public $yakittipi    ;
public $ortalamayakit   ;
public $depohacmi    ;
public $km     ;
public $ucret   ;

}

$sor2=mysqli_fetch_assoc($sor);

$result = new Result();
$result->uyeid=$sor2["uye_id"];
 $result->sehir=$sor2["sehir"];
$result->mahalle=$sor2["mahalle"];
$result->marka=$sor2["marka"];
$result->seri=$sor2["seri"];

$result->model=$sor2["model"];
$result->yil=$sor2["yil"];
$result->ilantipi=$sor2["ilantipi"];
$result->kimden=$sor2["kimden"];

$result->baslik=$sor2["baslik"];
$result->aciklama=$sor2["aciklama"];
$result->motortipi=$sor2["motortipi"];
$result->motorhacmi=$sor2["motorhacmi"];

$result->surat=$sor2["surat"];
$result->yakittipi=$sor2["yakittipi"];
$result->ortalamayakit=$sor2["ortalamayakit"];
$result->depohacmi=$sor2["depohacmi"];

$result->km=$sor2["km"];
$result->ucret=$sor2["ucret"];
//$result->uyeid=$sor2["uye_id"];
//$result->uyeid=$sor2["uye_id"];

echo(json_encode($result));


?>