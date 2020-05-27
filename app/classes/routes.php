<?php
namespace app;
class routes {
function route () {
    if ($_GET['url'] === null) {
        include 'listview.php';
      }
}}
?>