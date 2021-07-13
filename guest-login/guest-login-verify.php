<?php
session_start();
include '../config/db-connect.php';

if (isset($_POST['guest-login'])) {

    if (empty($_POST['guest-login-username']) or empty($_POST['guest-login-password'])) {
        $empty_error = "please fill all fields";
    } else {

        $username = $_POST['guest-login-username'];
        $password = $_POST['guest-login-password'];

        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $username_error = "invalid Username characters";
        } else {

            $sql = "SELECT * FROM guest WHERE username=:username";
            $stmt = $conn->prepare($sql);
            $stmt->execute(["username" => $username]);     // 1st method
            // $stmt->bindParam(':email', $email);  // 2nd method

            $result = $stmt->fetchAll();
            if (!$result) {
                $invaild_username = "Invalid username or Password";
            } else {
                $sql = "SELECT * FROM guest WHERE  username=:username";
                $stmt = $conn->prepare($sql);
                $stmt->execute(["username" => $username]);     // 1st method
                // $stmt->bindParam(':email', $email);  // 2nd method

                $a = $stmt->fetchObject();
                $hash_password = $a->password;
                $user_name = $a->name;
                $p_result = password_verify($password, $hash_password);
                $_SESSION['guest-name'] = $a->name;
                $_SESSION['guest-username'] = $a->username;

                if ($p_result) {
                    $vailid_id = 'ohh you are our user';
                    header("location:../Home/Home.php?name1=$user_name");
                } else {
                    $invailid_id = 'Invalid Username or Password';
                }
            }
        }
    }

   
} 
?>


<?php
//Field empty error
if (isset($empty_error)) {
    $error1 =  $empty_error;
?>
    <h5 class="bg-danger text-center"><?php echo "$error1" ?></h5>
<?php
}
?>


<?php
//invalid char error
if (isset($username_error)) {
    $error2 =  $username_error;
?>
    <h5 class="bg-danger text-center"><?php echo "$error2" ?></h5>
<?php
}
?>

<?php
//invalid email error
if (isset($invaild_username)) {
    $error3 =  $invaild_username;
?>
    <h5 class="bg-danger text-center"><?php echo "$error3" ?></h5>
<?php
}
?>


<?php
//successfully registered
if (isset($invailid_id)) {
    $error4 =  $invailid_id;
?>
    <h5 class="bg-danger text-center w-100"><?php echo "$error4" ?></h5>
<?php
}
?>

<?php
//successfully registered
if (isset($vailid_id)) {
    $error5 =  $vailid_id;
?>
    <h5 class="bg-success text-center w-100"><?php echo "$error5" ?></h5>
<?php
}
?>

<!-- PHP ERROR ALEART END -->

