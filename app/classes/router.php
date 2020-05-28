<?php
namespace app;
class router {
public function processroutes () {
  if ($_GET["url"] === "list") {
    $listcontrol = new \app\listcontrol();
    $listcontrol->process();
  }
  if ($_GET["url"] === "new") {
     $codemodel = new \app\codemodel();
     $codemodel->db1();
  }
  if ($_GET["url"] === null) {
    header('Location: /list');
 }
}
}