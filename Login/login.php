<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup-website Name</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="container-fluid">

        <div class="row Main no-gutters">
            <div class="col-sm-8 col-md-5  login-main">


                <form action="" class="login-form" method="POST">
                    <h3 style="text-align: center;color:white">Login</h3>

                    <?php include 'login-verify.php' ?>



                    <div class="form-row">
                        <div class="col">
                            <input type="email" class="w-100" name="login-email" value="<?php if (isset($_COOKIE['email'])) {
                                                                                            echo $_COOKIE['email'];
                                                                                        } ?>" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="password" class="w-100" name="login-password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-check mt-1">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="remember" name="remember-link">Remember me!
                        </label>
                    </div>


                    <div class="form-row">
                        <div class="col">
                            <input type="submit" value="submit" name="login-button" class="w-100 login-button">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col forgot-link">
                            <h6><a href="#">Forgot password?</a></h6>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mt-1 signup-link">
                            <h5>You have no account? <a href="../index.php">Signup</a></h5>
                        </div>
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

if (isset($_POST['remember-link'])) {
    $remember = $_POST['remember-link'];
    $email = $_SESSION['email'];
    setcookie("email", $email, time() + 86400*30);
}
?>