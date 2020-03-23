<?php

/**
 * Author Safnaj on 3/23/2020
 * Project MRM_COVID19
 **/


class Database
{
    public function connect()
    {

        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mrm_covid19";

        // Create connection
        $DBConnect = mysqli_connect($server, $username, $password, $dbname);

        // Check connection
        if (!$DBConnect) {
            //echo "There is an Error in Connecting to the Database..!";
            die("Connection failed: " . mysqli_connect_error());

        }
        //echo "Successfully Connected..!";
        return $DBConnect;
    }
}

//$db = new Database();
//$db->connect();

?>