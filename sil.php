<?php
include("ayar.php");
if($_POST){

$id=$_POST["id"];
$sil=mysqli_query($baglan,"delete from kullanici where id='$id'");
if($sil)
{
    $x=(array('Result'=>'Silme basarili'));
    echo json_encode($x);
}
else{
    $x=(array('Result'=>'Silme basarisiz'));
    echo json_encode($x);
}

}
?>