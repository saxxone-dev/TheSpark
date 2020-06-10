<?php
session_start();
$_SESSION['message'] = "";
include_once 'db_con.php';
$_SESSION['login_attempt'] = true;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //VALIDATE PASSWORDS
    if ($_POST['password'] == $_POST['confirm-password']) {
        $email = $mysqli->escape_string($_POST['email']);
        $phone = $_POST['phone'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $access_type = $_POST['access_type'];
        $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
        $hash = $mysqli->escape_string(md5(rand(0, 1000)));

        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['password'] = $password;
        $_SESSION['hash'] = $hash;
        $_SESSION['access_type'] = $access_type;

        //check if user exists
        $result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());


        if ($result->num_rows > 0) {
            $_SESSION['message'] = 'User with this email already exists';
            if (isset($_GET['referto']) && !empty($_GET['referto'])) {
                $ref_url = $_GET['referto'];
                header("location: $ref_url");
                $show_modal = true;
            }
        } else {
            $sql = "INSERT INTO users (email, password, first_name, last_name, phone, hash, access_type)" . "VALUES ('$email', '$password', '$first_name', '$last_name','$phone', '$hash', '$access_type' )";

            //IF SUCCESSFUL REDIRECT TO MAGAZINE PAGE
            if ($mysqli->query($sql) === true) {
                $_SESSION['logged_in'] = true;
                $_SESSION['active'] = 0;
                $mid = $_SESSION['id'];
                $cookie_name = "spark-user-access";
                setcookie("spark-user-access", "subscribed", time() + (86400 * 365), "/"); // 86400 = 1 day
                $_SESSION['login_attempt'] = false;
                $_SESSION['message'] = "Confirmation link has been sent to $email, please verify your account by clicking on the link in the message.";
                if (isset($_GET['referto']) && !empty($_GET['referto'])) {
                    $ref_url = $_GET['referto'];
                    if($ref_url == "https://thesparkng.com/home/magazine/" or "https://thesparkng.com/home/magazine" or "http://thesparkng.com/home/magazine" or $ref_url == "http://thesparkng.com/home/magazine/") {
                        header("location: http://www.thesparkng.com/home/magazine/read?id=25");
                        $show_modal = false;
                    } else {
                        header("location: $ref_url");
                        $show_modal = true;
                    }
                }
                //send link
                $to = $email;
                $subject = "Account Verification (The Spark NG)";
                $message_body = '
                    Hello ' . $first_name . ',
                     Thank you for signing up!
                     Please click this link to activate your account:' .
                    '<a href="thesparkng.com/home/verify?email=' . $email . '&hash=' . $hash . '">' .
                    'thesparkng.com/home/verify?email=' . $email . '&hash=' . $hash . '</a>';
                mail($to, $subject, $message_body);


            } else {
                $_SESSION['message'] = "User registration failed";
                if (isset($_GET['referto']) && !empty($_GET['referto'])) {
                    $ref_url = $_GET['referto'];
                    header("location: $ref_url");
                    $show_modal = true;
                }
            }
        }
    } else {
        $_SESSION['message'] = "passwords do not match";
        if (isset($_GET['referto']) && !empty($_GET['referto'])) {
            $ref_url = $_GET['referto'];
            header("location: $ref_url");
            $show_modal = true;
        }

    }


}
