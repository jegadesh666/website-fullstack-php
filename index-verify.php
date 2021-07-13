<?php

include './config/db-connect.php';


if (isset($_POST['signup-button'])) {
    if (empty($_POST['signup-name']) or empty($_POST['signup-email']) or empty($_POST['signup-password']) or empty($_POST['signup-cpassword'])) {
        $empty_error = "please fill all fields";
    } else if ($_POST['signup-password'] != $_POST['signup-cpassword']) {
        $mismatch_error = "password mismatch";
    } else {

        $name = $_POST['signup-name'];
        $email = $_POST['signup-email'];
        $password = $_POST['signup-password'];

        if (!preg_match("/^[a-zA-Z]*$/", $name)) {
            $char_error = "invalid Name characters";
        } else {

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_error = "invalid email";
            } else {

                $sql = "SELECT * FROM signup WHERE Email=:email";
                $stmt = $conn->prepare($sql);
                 $stmt->execute(["email" => $email]);     // 1st method
               // $stmt->bindParam(':email', $email);  // 2nd method

                $result = $stmt->fetchAll();
                if ($result) {
                    $email_exists = "Email already exists";
                } else {
                    //store customer information in our database
                    //password encryption

                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO signup(name,email,password) VALUES(:name,:email,:password)");
                    $stmt->execute(["name" => $name,"email" => $email, "password" => $hash]); //1st method

                   /* $stmt->bindParam(':name', $username);    //2nd method
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $hash);*/
                    header("location:Login/login.php");
                }
            }
        }
    }
} else {
}

?>

<!-- PHP ERROR ALEART START -->
<?php
//Field empty error
if (isset($empty_error)) {
    $error =  $empty_error;
?>
    <h5 class="bg-danger text-center"><?php echo "$error" ?></h5>
<?php
}
?>


<?php
//password mismatch error
if (isset($mismatch_error)) {
    $error1 =  $mismatch_error;
?>
    <h5 class="bg-danger text-center"><?php echo "$error1" ?></h5>
<?php
}
?>

<?php
//invalid char error
if (isset($char_error)) {
    $error2 =  $char_error;
?>
    <h5 class="bg-danger text-center"><?php echo "$error2" ?></h5>
<?php
}
?>

<?php
//invalid email error
if (isset($email_error)) {
    $error3 =  $email_error;
?>
    <h5 class="text-danger text-center"><?php echo "$error3" ?></h5>
<?php
}
?>


<?php
//Email already exists in db error
if (isset($email_exists)) {
    $error5 =  $email_exists;
?>
    <h5 class="bg-danger text-center"><?php echo "$error5" ?></h5>
<?php
}
?>

<!-- PHP ERROR ALEART END -->