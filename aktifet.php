<?php

include("ayar.php");
$mailadres=$_GET["mail"];
$code=$_GET["code"];

$kontrol=mysqli_query($baglan,"select * from ekle where mailadres='$mailadres' and durum='0'
 and dogrulamakodu='$code'");


 $say=mysqli_num_rows($kontrol);

if(($say)>0){
    $guncelle=mysqli_query($baglan,"update ekle set durum='1' where mailadres='$mailadres' and dogrulamakodu
    ='$code'");
    if($guncelle){
        //echo("uyeliginiz aktif edildi");
        $x=(array('result'=>true));
        echo json_encode($x);
    }else{
        //echo("uyliginiz aktif edilmedi")

    }
}else{
    //echo("boyle bir kayit yok");
    $x=(array('result'=>False));
    echo json_encode($x);
}
//echo($mailadres."  ".$code);




?>