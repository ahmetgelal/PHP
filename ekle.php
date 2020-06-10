<?php
include("ayar.php");

$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$ekle=mysqli_query($baglan,"insert into kullanici (isim,soyad) values ('$ad','$soyad')");
if($ekle){
    
    $x=(array('Result'=>'Ekleme Basarili....'));
    echo json_encode($x);
    

}
else 
{
    echo("vt ekleme basarisiz");
}

?>