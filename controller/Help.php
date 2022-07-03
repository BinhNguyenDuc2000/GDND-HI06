<?php

class Help extends Controller
{
    public function info()
    {
        if (array_key_exists("status", $_SESSION) && strcmp($_SESSION["status"], "online") == 0)
        {
            $email = $_SESSION["email"];
            $this->view("help", ["email"=>$email]);
        }
        else 
            $this->redirect("Login");
    }
}
?>