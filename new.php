<?php

$host = "ec2-54-80-184-43.compute-1.amazonaws.com";
$user = "pgqrqmlnduoyap";
$password = "f59f4817b2fc6f141faf2e4f0392db0344ce1f519c48e49008d32102e03dddab";
$dbname = "d7egh9299h16ck";
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