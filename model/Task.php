<?php

class Task extends Database
{
    public function getTaskList($userId){
        $result = $this->executeQuery("SELECT * FROM Task WHERE $userId = $userId");
        return $result;
    }

}