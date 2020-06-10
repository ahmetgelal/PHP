<?php
include("ayar.php");
Class uyeler
{
    public $id;
    public $username;
    public $password;
}
$uyeNesne= new uyeler();
$usernamepost=$_POST["username"];
$passwordpost=$_POST["password"];

$kontrol=mysqli_query($baglan,"select * from uyeler where username='$usernamepost' 
and password='$passwordpost'");

while($ata=mysqli_fetch_assoc($kontrol))
{

    $uyeNesne->id=$ata["id"];
    $uyeNesne->username=$ata["username"];
    $uyeNesne->password=$ata["password"];

    echo(json_encode($uyeNesne));

}








?>