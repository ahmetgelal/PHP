<?php
include("ayar.php");
 
$uye_id=$_POST["uye_id"];
$sehir=$_POST["sehir"];
$ilce=$_POST["ilce"];
$mahalle=$_POST["mahalle"];

$marka=$_POST["marka"];
$seri=$_POST["seri"];
$model=$_POST["model"];
$yil=$_POST["yil"];
$km=$_POST["km"];


$ilantipi=$_POST["ilantipi"];
$kimden=$_POST["kimden"];
$baslik=$_POST["baslik"];
$aciklama=$_POST["aciklama"];

$motortipi=$_POST["motortipi"];
$motorhacmi=$_POST["motorhacmi"];
$surat=$_POST["surat"];
$yakittipi=$_POST["yakittipi"];

$ortalamayakit=$_POST["ortalamayakit"];
$depohacmi=$_POST["depohacmi"];

$ucret=$_POST["ucret"];


// Klas olusturuyoruz
class Result{
public $uyeid;
public $ilanid;
public $tf;
}
$result = new Result();

$ekle=mysqli_query($baglan,"insert into ilanlar (uye_id,sehir,ilce,mahalle,marka,seri,model,yil,km,ilantipi,kimden,baslik,
aciklama,motortipi,motorhacmi,surat,yakittipi,ortalamayakit,depohacmi,ucret) values ('$uye_id','$sehir','$ilce','$mahalle','$marka','$seri','$model',
'$yil','$km','$ilantipi','$kimden','$baslik','$aciklama','$motortipi','$motorhacmi','$surat','$yakittipi','$ortalamayakit','$depohacmi','$ucret')");

if($ekle){
$sor=mysqli_query($baglan,"select * from ilanlar where uye_id='$uye_id' order by id desc limit 1");

$sor2=mysqli_fetch_assoc($sor);
$result->uyeid=$sor2["uye_id"];
$result->tf=true;
$result->ilanid=$sor2["id"];
echo(json_encode($result));


}
else{
  
$result->tf=false;

echo(json_encode($result));
  
}
?>