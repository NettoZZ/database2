<?php
namespace app;
class listcontroller {
    public function process() {
        $view = new \app\listview();
        $view->echohtml();
        $model = new \app\listmodel();
        $model->gettasks();
    }
}
?>