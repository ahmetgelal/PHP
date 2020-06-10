<?php
include("ayar.php");
$ilan_id=$_GET["ilan_id"];

$sil=mysqli_query($baglan,"delete from ilanlar where id='$ilan_id'");
$sil2=mysqli_query($baglan,"delete from ilanresimleri where ilan_id='$ilan_id'");

class Result{
    public $tf;
    public $result;
}
$result= new Result();
if(mysqli_num_rows($sil)>0 || mysqli_num_rows($sil2)>0) {
    $result->tf=true;
    $result->result="ilan silindi";
    echo(json_encode($result));
}
else
{
    $result->tf=false;
    $result->result="ilan silinmedi";
    echo(json_encode($result));
}


?>