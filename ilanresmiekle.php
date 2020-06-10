<?php
include("ayar.php");
$uye_id=$_POST["uye_id"];
$ilan_id=$_POST["ilan_id"];
$resim=$_POST["resim"];

$baslik=rand(0,10000).rand(0,100000).rand(0,100000);
$yol="ilanresimleri/$baslik.jpg";
//echo($baslik);

class Result{
  public $sonuc;
    public $tf;
}

$result = new Result();



$ekle=mysqli_query($baglan,"insert into ilanresimleri (uye_id,ilan_id,baslik,resimyolu) values ('$uye_id','$ilan_id','$baslik','$yol')");

if($ekle){
   file_put_contents($yol,base64_decode($resim));
   $result->sonuc="resim yuklendi";
   $result->tf=true;
    echo(json_encode($result));

    

}
else{
    $result->sonuc="resim yuklenmedi";
    $result->tf=false;
    echo(json_encode($result));

}

?>