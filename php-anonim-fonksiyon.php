<?php

$test=function($par){
    return 'test'.$par;
};
echo $test('ahmet');


// fonksiyopn arrayi

$arr=[

function(){
return '1. fonksiyon';
},
function(){
return '2.fonksiyon';

},
function(){
return '3.fonksiyon';
}


];
print_r($arr);


echo '<br>'. $arr[0]();// (1. fonku cagirir);


function filtrele($isim){
    return $isim.' Gelal';

}


$arr=['ahmet','zeynep','ege burak','elif'];
$arr=array_map('filtrele',$arr);

print_r($arr);
?>