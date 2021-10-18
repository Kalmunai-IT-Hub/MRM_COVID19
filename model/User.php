<?php

/**
 * Author Safnaj on 3/23/2020
 * Project MRM_COVID19
 * Edited By: Suhail Jamaldeen 
 * 10/18/2021
 **/


class User
{
    private $con;

    function __construct()
    {
        include_once("./database/Database.php"); //DbConnection
        $db = new Database();
        $this->con = $db->connect();

    }

    //User is Already Registered or Not
    private function phoneNoExists($mobile){
        $PreparedStatement = $this->con->prepare("SELECT id FROM users WHERE phone_no = ?");
        $PreparedStatement->bind_param("s",$mobile);
        $PreparedStatement->execute() or die ($this->con->error);
        $Result = $PreparedStatement->get_result();
        if($Result->num_rows > 0){
            return 1;
        }else{
            return 0;
        }
    }

    public function createUser($name,$nic,$address,$phone_no,$password,$user_type){
//        if($this->emailExists($phone_no)){
//            return "PHONE_NO_ALREADY_EXISTS";
//        }else{
            $PreparedStatement = $this->con->prepare("INSERT INTO `users`(`name`, `nic`, `address`, `phone_no`, `password`, `user_type`) VALUES (?,?,?,?,?,?)");
            $PreparedStatement->bind_param("ssssss", $name, $nic, $address, $phone_no, $password, $user_type);
            $Result = $PreparedStatement->execute() or die($this->con->error);
            if ($Result) {
                return $this->con->insert_id;
                return true;
            } else {
                return "ERROR";
            }
        }
   // }

}