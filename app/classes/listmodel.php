<?php
namespace app;
class listmodel {
    public function gettasks() {
        $db2= new \app\codecontrol;
        $db2->db2();
        return $tasks;
    }
}
?>