<?php
include("ayar.php");

$sebze=$_POST["sebze"];
$kg=$_POST["kg"];
$birimfiyat=$_POST["birimfiyat"];
$toplam=$_POST["toplam"];

$ekle=mysqli_query($baglan,"insert into pazar (sebze,kg,birimfiyat,toplam) values ('$sebze','$kg','$birimfiyat','$toplam')");

if($ekle)
{
    echo("kayit basarili");

}
else
{
    echo("kayit basarisiz");
}

?>