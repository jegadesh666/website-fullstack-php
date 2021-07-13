<?php
session_start();
include '../config/db-connect.php';


if (isset($_POST['login-button'])) {
    if (empty($_POST['login-email']) or empty($_POST['login-password'])) {
        $empty_error = "please fill all fields";
    } else {


        $email = $_POST['login-email'];
        $password = $_POST['login-password'];
        
        $sql = "SELECT * FROM signup WHERE email=:email";
        $stmt = $conn->prepare($sql);
        $stmt->execute(["email" => $email]);     // 1st method
        // $stmt->bindParam(':email', $email);  // 2nd method

        $result = $stmt->fetchAll();
        if (!$result) {
            $invaild_email = "Invalid Email or Password";
        } else {
            $sql = "SELECT * FROM signup WHERE  email=:email";
            $stmt = $conn->prepare($sql);
            $stmt->execute(["email" => $email]);     // 1st method
            // $stmt->bindParam(':email', $email);  // 2nd method

            $a = $stmt->fetchObject();
            $hash_password = $a->password;
            $user_name = $a->name;
            $p_result = password_verify($password, $hash_password);
            $_SESSION['name']=$a->name;
            $_SESSION['email']=$a->email;

            if ($p_result) {
                $vailid_id = 'ohh you are our user';
                header("location:../Home/Home.php?name=$user_name");
            } else {
                $invailid_id = 'Invalid Email or Password';
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
//invalid email error
if (isset($invaild_email)) {
    $error3 =  $invaild_email;
?>
    <h5 class="bg-danger text-center"><?php echo "$error3" ?></h5>
<?php
}
?>


<?php
//Email already exists in db error
if (isset($invailid_id)) {
    $error5 =  $invailid_id;
?>
    <h5 class="bg-danger text-center"><?php echo "$error5" ?></h5>
<?php
}
?>

<?php
//invalid char error
if (isset($vailid_id)) {
    $error2 =  $vailid_id;
?>
    <h5 class="bg-success text-center"><?php echo "$error2" ?></h5>
<?php
}
?>



<!-- PHP ERROR ALEART END -->