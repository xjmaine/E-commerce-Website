<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=redstone', 'root', 'root');
    

    }catch(PDOException $e){
        exit('Database error');
    }

?>