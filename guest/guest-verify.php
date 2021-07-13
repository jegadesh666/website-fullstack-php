<?php

include '../config/db-connect.php';

if (isset($_POST['guest-btn'])) {
    if (empty($_POST['guest-name']) or empty($_POST['guest-username']) or empty($_POST['guest-password'])) {
        $empty_error = "please fill all fields";
    } else {

        $name = $_POST['guest-name'];
        $username = $_POST['guest-username'];
        $password = $_POST['guest-password'];

        if (!preg_match("/^[a-zA-Z]*$/", $name)) {
            $char_error = "invalid Name characters";
        } else {

            if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
                $username_error = "invalid username";
            } else {

                $sql = "SELECT * FROM guest WHERE username=:username";
                $stmt = $conn->prepare($sql);
                $stmt->execute(["username" => $username]);     // 1st method
                // $stmt->bindParam(':email', $email);  // 2nd method

                $result = $stmt->fetchAll();
                if ($result) {
                    $username_exists = "Unknown username error";
                } else {

                    //store customer information in our database
                    //password encryption

                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO guest(name,username,password) VALUES(:name,:username,:password)");
                    $stmt->execute(["name" => $name, "username" => $username, "password" => $hash]); //1st method

                    /* $stmt->bindParam(':name', $username);    //2nd method
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $hash);*/
                    header("location:../guest-login/guest-login.php");
                }
            }
        }
    }
}
?>




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
if (isset($username_error)) {
    $error3 =  $username_error;
?>
    <h5 class="bg-danger text-center"><?php echo "$error3" ?></h5>
<?php
}
?>


<?php
//successfully registered
if (isset( $username_exists)) {
    $error4 =   $username_exists;
?>
    <h5 class="bg-danger text-center w-100"><?php echo "$error4" ?></h5>
<?php
}
?>


<!-- PHP ERROR ALEART END -->