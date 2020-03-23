<?php

include_once("../model/User.php");
include_once("../database/Database.php");
include_once("../sessions.php");

/**
 * Author Safnaj on 3/23/2020
 * Project MRM_COVID19
 **/

if (isset($_POST["register_button"])) {
    $name = $_POST["name"];
    $nic = $_POST["nic"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $user_type = $_POST["user_type"];

    $obj = new User();
    $result = $obj->createUser($name,$nic,$address,$mobile,$email,$password,$user_type);
    //echo $result = $obj->createUser("safnaj2","962872352v","Zam Zam Road","0777974207","1234","Seller");

    if($result == true){
        $_SESSION["SuccessMessage"] = "Post Published Successfully..!";
    }else{
        $_SESSION["ErrorMessage"] = "Post Published Successfully..!";
    }

}
