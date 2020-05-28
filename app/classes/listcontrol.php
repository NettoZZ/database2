<?php
namespace app;
class listcontrol {
    public function process() {
        $model = new \app\listmodel();
        $tasks = $model->gettasks();
        $view = new \app\listview();
        $view->echohtml($tasks);
    }
}
?>