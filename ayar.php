<?php

$host="Localhost";//sunucu adresi
$kullaniciAdi="negkiral_havana";
$sifre="Camila73";
$veritabani="negkiral_havana";


$baglan=@mysqli_connect($host,$kullaniciAdi,$sifre,$veritabani);
/*if($baglan)
{
    echo("Havana Baglanti basarili");
}
else
{
    echo(" Havana baglanti basarisiz");
}
*/

?>

