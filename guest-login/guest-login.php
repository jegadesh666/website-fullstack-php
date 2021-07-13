<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup-website Name</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="guest-login.css">
</head>

<body>

    <div class="container-fluid">

        <div class="row Main no-gutters">
            <div class="col-sm-8 col-md-5  guest-login-main">


                <form action="" class="guest-login-form" method="POST">
                    <h3 style="text-align: center;color:white">Guest Login</h3>

                    <?php include 'guest-login-verify.php' ?>

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="w-100" name="guest-login-username" value="<?php if (isset($_COOKIE['guest-username'])) {
                                                                                            echo $_COOKIE['guest-username'];
                                                                                        } ?>" placeholder="Enter your registered user name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="password" class="w-100 " pattern=".{3,10}" name="guest-login-password" placeholder="Confirm password">
                        </div>
                    </div>
                    <div class="form-check mt-1">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="remember" name="guest-remember">Remember me!
                        </label>
                    </div>


                    <div class="form-row">
                        <div class="col">
                            <input type="submit" value="submit" name="guest-login" class="w-100 guest-login-button">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col mt-1 guest-signup-link">
                            <h5>Don't have an guest account? <a href="../guest/guest.php">Guest signup</a></h5>
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

<?php 
if (isset($_POST['guest-remember'])) {
    $guest_user = $_SESSION['guest-username'];
    setcookie("guest-username", $guest_user, time() + 86400*30);
}


?>