<?php

class User extends Database
{
    public function logIn($email, $password){
        $result = $this->executeQuery("SELECT * FROM MyUser WHERE email = \"$email\" and password = \"$password\"");
        return (count($result) == 1);
    }

}