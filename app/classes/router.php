<?php
namespace app;
class router {
public function processroutes () {
  if ($_GET["url"] === "list") {
    $listcontroller = new \app\listcontroller();
    $listcontroller->process();
  }
  if ($_GET["url"] === "new") {
     $newmodel = new \app\newmodel();
     $newmodel->db1();
  }
  if ($_GET["url"] === null) {
    header('Location: /list');
 }
}
}