<?php

include_once("../model/User.php");
include_once("../database/Database.php");
include_once("../sessions.php");

/**
 * Author Safnaj on 3/23/2020
 * Project MRM_COVID19
 **/

if(isset($_POST["Submit"])){

    $name = $_POST["name"];
    $nic = $_POST["nic"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $user_type = $_POST["user_type"];

    $obj = new User();
    $result = $obj->createUser($name,$nic,$address,$mobile,$password,$user_type);

    if($result == true){
        header('Location: ../register.php?register=success');
    }else{
        echo "<script type=\"text/javascript\">alert('Error..!');</script>";
    }


}
