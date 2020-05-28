<?php
namespace app;
class router {
public function processroutes () {
  if ($_GET["url"] === "list") {
    $listcontrol = new \app\listcontrol();
    $listcontrol->process();
  }
  if ($_GET["url"] === "code") {
     $codecontrol = new \app\codecontrol();
     $codecontrol->db2();
  }
}
}