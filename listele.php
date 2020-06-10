<?php
include("ayar.php");
Class kullanici{
    public $id="";
    public $isim="";
    public $soyad="";

}
$kl=new kullanici();
$bak=mysqli_query($baglan,"select * from kullanici");
$deger=mysqli_num_rows($bak);
//echo("deger :  ".$deger);
$i=0;
echo("[");

while($goster=mysqli_fetch_assoc($bak)){
$i=$i+1;
$kl->id=$goster["id"];
$kl->isim=$goster["isim"];
$kl->soyad=$goster["soyad"];

echo(json_encode($kl));
if($i!=$deger){
    echo(",");
}



}
echo("]");


?>