<?php

class Login extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function info()
    {   
        // if (array_key_exists("status", $_SESSION))
        // {
        //     $this->popUp("Đã đăng nhập");
        //     $this->redirect("Dashboard");
        //     return;
        // }
        
        if (isset($_SESSION["email"]))
        {
            $email = $_SESSION["email"];
            $password = $_SESSION["password"];
        }
        else
        {
            $email = "name@example.com";
            $password = "password";
        }
            
        $data = ["email"=>$email, "password"=>$password];
        require_once dirname(__DIR__)."/view/login/login.php";
    }

    public function reciever()
    {
        if (isset($_POST["btnLogin"]))
        {
            if (!isset($_POST["email"]) || strlen($_POST["email"] != 0))
            {
                $this->popUp("Chưa điền email");
                $this->redirect("Login");
                return;
            }

            if (!isset($_POST["password"]) || strlen($_POST["password"]) == 0)
            {
                $this->popUp("Chưa điền mật khẩu");
                $this->redirect("Login");
                return;
            }

            if ($this->user->logIn($_POST["email"], $_POST["password"]))
            {
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["password"] = $_POST["password"];
                // $_SESSION["status"] = "online";
                if (isset($_POST["type"])) {
                    $_SESSION["status"] = $_POST["type"];

                }
                else
                    $_SESSION["status"] = "employee";
                $this->redirect("Dashboard");
                return;
            }

            $this->popUp("Đăng nhập thất bại");
            $this->redirect("Login");
            return;
        }
        else 
        {
            $this->popUp("Chưa đăng nhập");
            $this->redirect("Login");
        }
    }
}

?>