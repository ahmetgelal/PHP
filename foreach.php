<?php

$sayilar=[1,2,3,4,5,4,5,34,6,6,6,7,8,9,10];

foreach($sayilar as $sayi){
    echo$sayi.'<br>';
}

$uyeDetay=[
    'ad'=>'ahmet',
    'soyad'=>'gelal',
    'yas'=>46
];

foreach($uyeDetay as $tanim=>$uye){
    echo $tanim.':'.$uye.'<br>';
}



?>