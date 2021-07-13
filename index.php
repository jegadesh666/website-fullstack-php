<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup-website Name</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="./lib/css/bootstrap.min.css">
    
</head>

<body>

    <div class="container-fluid">

        <div class="row Main no-gutters">
            <div class="col-sm-8 col-md-5  form-main">

                    
                <form action="" class="signup-form" method="POST">
                    <h3 style="text-align: center;color:white">Create an Account</h3>
                    <?php require 'index-verify.php';?>

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="w-100 b-radius" pattern=".{3,20}" name="signup-name" placeholder="Enter your Name">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <input type="email" class="w-100 " name="signup-email" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="password" class="w-100" pattern=".{3,10}" name="signup-password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="password" class="w-100 " pattern=".{3,10}" name="signup-cpassword" placeholder="Confirm password">
                        </div>
                    </div>
                    <div class="form-check mt-3">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="" required>By click agree our <a href="user-agreement/user-agreement.php" target="_blank">terms</a> and <a href="user-agreement/user-agreement.php" target="_blank">condition.</a>
                        </label>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="submit" value="submit" name="signup-button" class="w-100 signup-button">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mt-1 login-link">
                            <h5>Already have an account <a href="./Login/login.php">Login</a></h5>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mt-1 or-text">
                            <h5>OR</h5>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mt-1 guest-link">
                            <h5>Continue with <a href="./guest/guest.php">Guest Account</a> </h5>
                        </div>
                    </div>
                </form>





            </div>


        </div>


    </div>




    <script src="./lib/js/jquery.min.js"></script>
    <script src="./lib/js/bootstrap.min.js"></script>
</body>

</html>