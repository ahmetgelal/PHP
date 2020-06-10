<?php
include("ayar.php");
$uye_id=$_GET["uyeid"];
$user=$_GET["user"];
$pass=$_GET["pass"];

$sorgula=mysqli_query($baglan,"update uyeleroto set kullaniciadi='$user', kullanicisifre='$pass' where id='uye_id'");
class Result{
    public $tf;
   
}
$result = new Result();

$result->tf=true;
echo(json_encode($result));
?>