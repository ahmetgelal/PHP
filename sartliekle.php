<?php
include("ayar.php");
if($_POST)
{
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];

$kontrol=mysqli_query($baglan,"select * from kullanici where isim='$ad' and soyad='$soyad'");
$kontrolcount=mysqli_num_rows($kontrol);
//echo($kontrol);
echo("Toplam=".$kontrolcount);
if($kontrolcount<1)
{
$ekle=mysqli_query($baglan,"insert into kullanici (isim,soyad) values ('$ad','$soyad')");
if($ekle){
    
    $x=(array('Result'=>'Ekleme Basarili....'));
    echo json_encode($x);
    

}
else 
{
    echo("vt ekleme basarisiz");
}
}
else {
    $x=(array('Result'=>'Zaten bu kayit var...'));
    echo json_encode($x);

}
}
?>