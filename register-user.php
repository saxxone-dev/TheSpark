<?php
////get currrent page
//$current_page = "";
////autogenerate password
//$email = $_POST['email'];
//$full_name = $_POST['full-name'];
//$chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
//$password = substr(str_shuffle($chars), 0, 8);
//$password_encrypt = sha1($password); //Encrypting Password
//include 'magazine-connection.php';
//$new_user = "INSERT INTO `users`(`email`, `password`, `full_name`)  VALUES ('$email','$password_encrypt','$full_name')";
//if (!mysqli_query($link, $new_user)) {
//    echo 'user not created';
//} else {
//    echo 'user created';
//}
//header("refresh: 2; url = $current_page");
//
////// Generating New password as done in above function and Update it in database by below query
////
////$query = mysqli_query("UPDATE registration SET password='$password1' WHERE email='$email'");
////if ($query){
////$to = $email;
////$subject = 'Your New Password...';
////$message = 'Hello User
////Your new password : ' . $password . '
////E-mail: ' . $email . '
////Now you can login with this email and password.';
/////* Send the message using mail() function */
////if (mail($to, $subject, $message)) {
////    echo "New Password has been sent to your mail, Please check your mail and SignIn.";
////})
//
?>


<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'thespar3_hubdb');
define('DB_PASSWORD', 'RZdjyEUUKnC32K');
define('DB_NAME', 'thespar3_magazines');
define('DB_PORT', '3306');

$sqlserver = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

// Check connection
if($sqlserver === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($sqlserver, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($sqlserver, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($sqlserver);
}
?>
