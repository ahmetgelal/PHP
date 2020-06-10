<?php
include("ayar.php");

$ilanid=$_GET["ilanid"];
$sor=mysqli_query($baglan,"select * from ilanresimleri where ilan_id='$ilanid'");
$say= mysqli_num_rows($sor);
class Result{

    public $resim;
}
$result= new Result();

if($say>0){
    $sayac=0;
    echo("[");
    while($ata=mysqli_fetch_assoc($sor)){
        $sayac=$sayac+1;
        $result->resim=$ata["resimyolu"];
        echo(json_encode($result));
        if($say>$sayac){
            echo(",");
        }
    }
    echo("]");
}
?>