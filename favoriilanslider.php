<?php


include("ayar.php");
$uyeid=$_GET["uye_id"];

$query=mysqli_query($baglan,"SELECT c.*,p.resimyolu
FROM favoriilanlar as c 
JOIN ilanresimleri as p ON
p.id=(
    select p1.id from ilanresimleri as p1
    WHERE c.ilan_id=p1.ilan_id
    limit 1
    )
    WHERE c.uye_id='$uyeid'");

    class Slider{
        public $tf;
        public $resimyolu;
        public $ilanid;

    }


    
    

    $slider=new Slider();

$count= mysqli_num_rows($query);

if($count>0){
$sayac=0;
echo("[");
while($ata=mysqli_fetch_assoc($query)){
$sayac=$sayac+1;

$slider->tf=true;
$slider->resimyolu=$ata["resimyolu"];
$slider->ilanid=$ata["ilan_id"];


echo(json_encode($slider));
if($count>$sayac)
{
    echo(",");
}
}
echo("]");
}
else{

echo("[");
$slider->tf=false;
$slider->resimyolu=$ata["resimyolu"];
$slider->ilanid=$ata["ilan_id"];
echo(json_encode($slider));
echo("]");

}

?>