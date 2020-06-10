<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="bildirimgonder.php" method="post">
    <input type="text" name="ad"/>
    <input type="text" name="soyad"/>
    <input type="submit" value="Gonder"/>
</body>
</html>

<?php

$ad=$_POST("ad");
$soyad=$_POST("soyad");
$kod=rand(1000,9999);


?>