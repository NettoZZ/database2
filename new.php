<?php

$host = "ec2-52-44-166-58.compute-1.amazonaws.com";
$user = "zyazrgmcqradjd";
$password = "571ca784b8de731a6991ca8a1b3f8c69f836f69bd7867e2cf760b69eade57dfe";
$dbname = "d406gfnvmvbvdi";
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
