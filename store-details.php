<?php include_once("includes/Header.php"); ?>
<?php include_once("includes/navbar.php"); ?>
<?php include_once("sessions.php"); ?>
<?php include_once("model/Store.php"); ?>

<?php

if(isset($_POST["Submit"])){

    $store_name = $_POST["store_name"];
    $owner_name = $_POST["owner_name"];
    $contact_no = $_POST["contact_no"];
    $address = $_POST["address"];

    $obj = new Store();
    $result = $obj->addStoreDetails($store_name,$owner_name,$contact_no,$address);

    if($result == true){
        $_SESSION["SuccessMessage"] = "Store Details Updated Successfully..!";
        // header('Location: register.php');
    }else{
        $_SESSION["ErrorMessage"] = "Something Went Wrong..!";
        //header('Location: register.php');
    }

}

?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard</a>
                        <a class="nav-link" href="store-details.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Store</a>
                        <a class="nav-link" href="orders.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Orders</a>
                        <a class="nav-link" href="products.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Products</a>
                        <a class="nav-link" href="setting.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Setting</a>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                >Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.php">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                >Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Ahamed Safnaj
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <br/>
                    <?php
                        echo ErrorMessage();
                        echo SuccessMessage();
                    ?>
                    <h1 class="mt-4">Store Details</h1>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <form method="post" action="store-details.php" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <label for="title"><span class="FieldInfo">Store Name :</span></label>
                                <input class="form-control" type="text" name="store_name" id="store_name" placeholder="Enter Store Name">
                            </div>
                            <div class="form-group">
                                <label for="title"><span class="FieldInfo">Owner Name :</span></label>
                                <input class="form-control" type="text" name="owner_name" id="owner_name" placeholder="Enter Store Owner's Name">
                            </div>
                            <div class="form-group">
                                <label for="title"><span class="FieldInfo">Contact No :</span></label>
                                <input class="form-control" type="text" name="contact_no" id="contact_no" placeholder="Enter Contact No">
                            </div>
                            <div class="form-group">
                                <label for="title"><span class="FieldInfo">Address :</span></label>
                                <input class="form-control" type="text" name="address" id="address" placeholder="Enter Address">
                            </div>
                            <input class="btn btn-primary btn-block" type="submit" name="Submit" value="Update Details">
                        </fieldset>
                    </form>

                </div>
            </main>

<?php include_once("includes/footer.php"); ?>