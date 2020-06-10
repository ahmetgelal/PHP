<?php
include("ayar.php");
$uye_id=$_GET["uye_id"];
$ilan_id=$_GET["ilan_id"];

$query=mysqli_query($baglan,"select * from favoriilanlar where uye_id='$uye_id' and ilan_id='$ilan_id'");
$count=mysqli_num_rows($query);


class Sonuc{
    public $tf;
    public $text;
}

$sonuc= new Sonuc();

if($count>0){
    $sil=mysqli_query($baglan,"delete from favoriilanlar where uye_id='$uye_id' and ilan_id='$ilan_id'");
    $sonuc->tf=false;
    $sonuc->text="Favoriden cikartildi";
}

else {

    $ekle=mysqli_query($baglan,"insert into favoriilanlar (uye_id,ilan_id) values ('$uye_id','$ilan_id')");

    $sonuc->tf=true;
    $sonuc->text="Favoriye eklendi";
}


echo(json_encode($sonuc));






?>