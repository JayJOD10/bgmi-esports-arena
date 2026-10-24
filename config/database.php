<?php
$host='localhost'; $db='bgmi_esports_arena'; $user='root'; $pass='';
try { $pdo=new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4",$user,$pass,[
PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES=>false]); }
catch(PDOException $e){http_response_code(500);exit('Database connection failed. Start MySQL and import database.sql.');}
