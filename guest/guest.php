<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup-website Name</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="guest.css">

</head>

<body>

    <div class="container-fluid">

        <div class="row Main no-gutters">
            <div class="col-sm-8 col-md-5  guest-main">


                <form action="" class="guest-form" method="POST">


                    <h3 style="text-align: center;color:white">Guest signup</h3>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><b>Ohhh no!</b> You don't want share your Email with us..No problem just
                        share your name with us</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <?php include 'guest-verify.php' ?>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="w-100" pattern=".{3,20}" name="guest-name"
                                placeholder="Enter your Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="w-100" pattern=".{3,20}" name="guest-username"
                                placeholder="Enter new user name(No special char allowed)">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <input type="password" class="w-100" pattern=".{3,10}" name="guest-password"
                                placeholder="Enter New Password">
                        </div>
                    </div>
                    <div class="form-check mt-3">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="" required>By click agree our <a
                                href="#">terms</a> and <a href="#">condition.</a>
                        </label>
                    </div>


                    <div class="form-row">
                        <div class="col">
                            <input type="submit" value="submit" name="guest-btn" class="w-100 guest-button">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col mt-1 guest-login-link">
                            <h5>You have an guest account? <a href="../guest-login/guest-login.php">Login</a></h5>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mt-1 or-text">
                            <h5>OR</h5>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mt-1 normal-link">
                            <h5>Back to Normal <a href="../index.php">Signup</a> </h5>
                        </div>
                    </div>

                </form>


            </div>


        </div>


    </div>




    <script src="../lib/js/jquery.min.js"></script>
    <script src="../lib/js/bootstrap.min.js"></script>
</body>

</html>