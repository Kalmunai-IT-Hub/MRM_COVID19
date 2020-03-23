<?php

/**
 * Author Safnaj on 3/23/2020
 * Project MRM_COVID19
 **/


class User
{
    private $con;

    function __construct()
    {
        include_once("../database/Database.php"); //DbConnection
        $db = new Database();
        $this->con = $db->connect();

    }

    public function createUser($name,$nic,$address,$phone_no,$password,$usertype){
        $PreparedStatement = $this->con->prepare("INSERT INTO `users`(`name`, `nic`, `address`, `phone_no`, `password`, `user_type`) VALUES (?,?,?,?,?,?)");
        $PreparedStatement->bind_param("ssssss", $name, $nic, $address, $phone_no, $password, $usertype);
        $Result = $PreparedStatement->execute() or die($this->con->error);
        if ($Result) {
            return $this->con->insert_id;
            return true;

        } else {
            return "ERROR";
        }
    }

}