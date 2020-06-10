<?php
include("ayar.php");
$code=rand(1000,100000);
//echo($code);

$ad=$_POST["kullaniciadi"];
$sifre=$_POST["sifre"];
$mailadres=$_POST["mailadres"];
$durum=0;

$kontrol=mysqli_query($baglan,"select * from ekle where uyeadi='$ad' and mailadres='$mailadres'");
$sayi=mysqli_num_rows($kontrol);
if(($sayi)>0)
{
    $x=(array('result'=>false));
    echo json_encode($x);
echo("Boyle Kayit Var");
}
else
{
   $ekle=mysqli_query($baglan,"insert into ekle (uyeadi,sifre,dogrulamakodu,durum,mailadres)
    values ('$ad','$sifre','$code',$durum','$mailadres')");
    if($ekle)
    {
        $to=$mailadres;
        $subject="Lutfen Mail Adresini Dogrula";
        $message="Merhaba $ad Asagidaki linki tiklayarak mail adresini aktif edebilirsin 
        http//kiralahepsini.com/aktifet.php?mail=$mailadres&code=$code";
        $sender="From:<ag.softwaredeveloper@gmail.com>";
        $gonder=mail($to,$subject,$message,$sender);
        if($gonder)
        {
            echo("dogrulama maili yollandi");
            $x=(array('result'=>true));
            echo json_encode($x);
        }
        


    
    }
    else
    {
        echo("ana if te hata");
    }
}

?>