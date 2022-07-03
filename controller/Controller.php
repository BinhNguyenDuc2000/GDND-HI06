<?php
// Kiếm soát xem trang nào được sử dụng và hiển thị

abstract class Controller {
    // public function model($model){
    //     require_once "./mvc/models/".$model.".php";
    //     return new $model;
    // }
    public function view($view, $data=[]){
        require_once dirname(__DIR__)."/view/blank.php";
    }
    // Sử dụng Javascript do php không cho phép in ki chuyển trang
    public function redirect($site){
        $link="https://binhnguyen-tech.stackstaging.com/TreeCare/".$site;
        echo "<script>setTimeout(\"location.href = '$link';\",350);</script>";
    }
    // Hiển thị popup
    public function popUp($Message)
    {
        echo "<script>alert(\"".$Message."\")</script>";
    }

    public abstract function info();
}
?>