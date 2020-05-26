<?php require_once 'vendor/autoload.php'; ?>
<?php

    // $file = $_GET['url'].'.php';
            
    // if(is_file($file)){
    //     include $file;
    // }else{
    //     include 'list.php';
    // }            
?>
<?php
if ($_GET['url'] === null) {
  include 'list.php';
}
if ($_GET['url'] === 'new') {
  include 'new.php';
}
if ($_GET['url'] === 'delete') {
  echo 'deletando';
}
?>
