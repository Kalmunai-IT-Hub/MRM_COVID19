<?php include_once("includes/Header.php"); ?>
<?php include_once("sessions.php"); ?>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content" class="register">
                <div>
<!--                    --><?php
//                        echo Message();
//                        echo SuccessMessage();
//                    ?>
                </div>
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">User Registration</h3></div>
                                    <div class="card-body">
                                        <form id="user_form" method="get" action="controller/UserController.php">
                                            <div class="form-group"><label class="small mb-1" for="Name">Name</label>
                                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter Your Name" />
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="Nic">NIC Number</label>
                                                <input class="form-control" id="nic" name="nic" type="text" placeholder="NIC Number" />
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="address">Address</label>
                                                <input class="form-control" id="address" name="address" type="text" placeholder="Address" />
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="Name">Mobile Number</label>
                                                <input class="form-control" id="mobile" name="mobile" type="Number" placeholder="Mobile Number" />
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control" id="password" name="password" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="Name">User Type</label>
                                                <select name="user_type" class="form-control">
                                                    <option value="0">Choose Account Type</option>
                                                    <option value="Seller">Seller</option>
                                                    <option value="Buyer">Buyer</option>
                                                </select>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-block btn-primary" name="register_button">Register</a>
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
    </body>
</html>
