<?php

class Dashboard extends Controller
{

    public function info()
    {
        if (array_key_exists("status", $_SESSION))
        {
            $email = $_SESSION["email"];
            $this->view("dashboard", ["email"=>$email, "type"=>$_SESSION["status"]]);
        }
        else 
            $this->redirect("Login");
    }
}
?>