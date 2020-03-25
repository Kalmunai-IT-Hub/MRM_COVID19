<?php

/**
 * Author Safnaj on 3/23/2020
 * Project MRM_COVID19
 **/


class Store
{
    private $con;

    function __construct()
    {
        include_once("./database/Database.php"); //DbConnection
        $db = new Database();
        $this->con = $db->connect();

    }

    public function addStoreDetails($store_name,$owner_name,$contact_no,$address){

        $PreparedStatement = $this->con->prepare("INSERT INTO `store`(`store_name`, `owner`, `contact_no`, `address`) VALUES (?,?,?,?)");
        $PreparedStatement->bind_param("ssis", $store_name, $owner_name, $contact_no, $address);
        $Result = $PreparedStatement->execute() or die($this->con->error);
        if ($Result) {
            return $this->con->insert_id;
            return true;
        } else {
            return "ERROR";
        }
    }

}