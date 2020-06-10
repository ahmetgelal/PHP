<?php
function test(){
    return "test";
}




$a=test();echo $a;

function topla($s1,$s2){
    $t=$s1+$s2;
    return $t;
}

$b=topla(6,7);
echo $b;


$ad="Ahmet";
function adsoyad($soyad){
    Global $ad;
   return $ad.' = '.$soyad; 
}
echo adsoyad('Gelal');

$yazi="ahmet gelal ahmet gelal";
function kisalt($str,$limit=10){

$karaktersayisi=strlen($str);

if($karaktersayisi>$limit){
    $str=substr($str,0,$limit).'...';
}

return $str;



}

echo kisalt($yazi,7);





?>