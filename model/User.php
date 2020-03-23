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
        include_once("../database/DBConnection.php"); //DbConnection
        $db = new Database();
        $this->con = $db->connect();

    }

    public function createUser($name,$nic,$address,$phone_no,$password,$usertype){

    }

}