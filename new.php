<?php

$host = "ec2-54-86-170-8.compute-1.amazonaws.com";
$user = "hgeqjxmwfmbujl";
$password = "1bde68c14fa3f627ae70c6107d5945d785b671c696e7839a7888aca6d17894b8";
$dbname = "d11r24rr0egnvj";
$port = "5432";

try{
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";


  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
  ?>