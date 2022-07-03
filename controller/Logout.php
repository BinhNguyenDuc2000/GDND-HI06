<?php

class Logout extends Controller
{
    public function info()
    {
        $_SESSION["status"] = "offline";
        $this->popUp("Đăng xuất thành công");
        $this->redirect("Login");
    }
}
?>