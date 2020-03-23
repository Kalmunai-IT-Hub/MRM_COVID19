<?php include_once("includes/header.php"); ?>
<?php include_once("sessions.php"); ?>
<?php
    if ( isset($_GET['register']) && $_GET['register'] == "success" )
    {
        $_SESSION["SuccessMessage"] = "User Registered Successfully..!";
    }
    echo ErrorMessage();
    echo SuccessMessage();
?>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content" class="register">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">User Registration</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="./controller/UserController.php" enctype="multipart/form-data">
                                            <div class="form-group"><label class="small mb-1">Name</label>
                                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter Your Name" />
                                                <small id="name_error" class="form-text text-muted"></small>
                                            </div>
                                            <div class="form-group"><label class="small mb-1">NIC Number</label>
                                                <input class="form-control" id="nic" name="nic" type="text" placeholder="NIC Number" />
                                                <small id="nic_error" class="form-text text-muted"></small>
                                            </div>
                                            <div class="form-group"><label class="small mb-1"">Address</label>
                                                <input class="form-control" id="address" name="address" type="text" placeholder="Address" />
                                                <small id="address_error" class="form-text text-muted"></small>
                                            </div>
                                            <div class="form-group"><label class="small mb-1">Mobile Number</label>
                                                <input class="form-control" id="mobile" name="mobile" type="text" placeholder="Mobile Number" />
                                                <small id="mobile_error" class="form-text text-muted"></small>
                                            </div>
                                            <div class="form-group"><label class="small mb-1">Password</label>
                                                <input class="form-control" id="password" name="password" type="password" placeholder="Enter password" />
                                                <small id="pwd_error" class="form-text text-muted"></small>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" >User Type</label>
                                                <select id="user_type" name="user_type" class="form-control">
                                                    <option value="0">Choose Account Type</option>
                                                    <option value="Seller">Seller</option>
                                                    <option value="Buyer">Buyer</option>
                                                </select>
                                                <small id="type_error" class="form-text text-muted"></small>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input class="btn btn-block btn-primary" onclick="formValidation()" id="submit_form"type="submit" name="Submit" value="Register">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Already Member? Login!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/dist/js/scripts.js"></script>
        <script src="js/register.js"></script>
    </body>
</html>
