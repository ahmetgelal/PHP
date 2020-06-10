<?php
include("ayar.php");

class urunler
{
    public $id;
    public $urunadi;
    public $urunfiyati;
    public $urunresmi;

}
$urun=new urunler();
$al= mysqli_query($baglan,"select * from urunler");
$toplam=mysqli_num_rows($al);
echo("[");
$i=0;
while($goster=mysqli_fetch_assoc($al))
{
$i=$i+1;
$urun->id=$goster["id"];
$urun->urunadi=$goster["urunadi"];
$urun->urunfiyati=$goster["urunfiyat"];
$urun->urunresmi=$goster["urunresmi"];

echo(json_encode($urun));
if($i!=$toplam){
    echo(",");
}

}
echo("]");
?>