<?php

/**
 * Author Safnaj on 3/23/2020
 * Project MRM_COVID19
 **/


session_start();
function ErrorMessage(){
    if(isset($_SESSION["ErrorMessage"])){
        $Output = "<div class=\"alert alert-danger\">
            <script>
                $('div.alert').delay(1000).slideUp(300);
            </script>
            ";
        $Output.= htmlentities($_SESSION["ErrorMessage"]);
        $Output.="</div>";
        $_SESSION["ErrorMessage"] = null;
        return $Output;
    }
}

function SuccessMessage(){
    if(isset($_SESSION["SuccessMessage"])){
        $Output = "<div class=\"alert alert-success\"> 
            <script>           
                $('div.alert').delay(1000).slideUp(300);
            </script>
            ";
        $Output.= htmlentities($_SESSION["SuccessMessage"]);
        $Output.="</div>";
        $_SESSION["SuccessMessage"] = null;
        return $Output;
    }
}



?>