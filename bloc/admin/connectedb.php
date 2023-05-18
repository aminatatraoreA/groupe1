<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=bloc; charset=utf8','root','');
}catch (PDOException $f){
    echo $f->getmessage();
}
?>