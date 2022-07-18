<?php

class Home extends Controller
{
    public function info()
    {
        if (array_key_exists("status", $_SESSION))
        {
            $email = $_SESSION["email"];
            $this->view("dashboard", ["email"=>$email]);
        }
        else 
            $this->redirect("Login");

    }
}
?>