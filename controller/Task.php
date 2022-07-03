<?php

class Task extends Controller
{

    public function info()
    {
        if (array_key_exists("status", $_SESSION) && strcmp($_SESSION["status"], "online") == 0)
        {
            $email = $_SESSION["email"];
            // $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            // $uri = explode('/', $uri);
            $this->view("task_list", ["email"=>$email, "task_name"=>"Short task here"]);
            
        }
        else 
            $this->redirect("Login");
    }

    public function list()
    {
        $this->info();
    }

    public function make()
    {
        if (array_key_exists("status", $_SESSION) && strcmp($_SESSION["status"], "online") == 0)
        {
            $email = $_SESSION["email"];
            $this->view("task_maker", ["email"=>$email]);
            
        }
        else 
            $this->redirect("Login");
    }

    public function taskById()
    {
        if (array_key_exists("status", $_SESSION) && strcmp($_SESSION["status"], "online") == 0)
        {
            $email = $_SESSION["email"];
            // $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            // $uri = explode('/', $uri);
            $this->view("task", ["email"=>$email, "task_name"=>"Short task here"]);
            
        }
        else 
            $this->redirect("Login");
        
        // $url_components = parse_url($_SERVER['REQUEST_URI']);
        // try 
        // {
        //     if (isset($url_components['query']))
        //         parse_str($url_components['query'], $params);
        // }
        // catch (Exception $e)
        // {
        //     $this->popUp("ID task không hợp lệ");
        //     $this->redirect("Dashboard");
        // }
    }
}