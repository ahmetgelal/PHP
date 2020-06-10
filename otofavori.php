<?php
include("ayar.php");
$uye_id=$_GET["uye_id"];
$ilan_id=$_GET["ilan_id"];
$query=mysqli_query($baglan,"select * from favoriilanlar where uye_id='$uye_id' and ilan_id='$ilan_id'");
$count=mysqli_num_rows($query);

Class Durum{
    public $tf;
    public $text;
}
$durum=new Durum();


if($count>0){
$durum->tf=true;
$durum->text="Favoriden Cikar";

}
else
{
    $durum->tf=false;
    $durum->text="Favoriye Al";

}

echo(json_encode($durum));
?>