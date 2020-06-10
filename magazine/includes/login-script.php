<?php
session_start();
include_once 'db_con.php';
$mid = $_SESSION['mid'];
$_SESSION['login_attempt'] = true;
if (isset($_POST['emaillogin'])) {
    $email = $mysqli->escape_string($_POST['emaillogin']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
    if ($result->num_rows == 0) {
        $_SESSION['message'] = "User with that email doesn't exist";
        if (isset($_GET['referto']) && !empty($_GET['referto'])) {
            $ref_url = $_GET['referto'];
            header("location: $ref_url");
            $show_modal = true;
        }
    } else {
        $user = $result->fetch_assoc();
        if (password_verify($_POST['passwordlogin'], $user['password'])) {
            $_SESSION['email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['active'] = $user['active'];
            $_SESSION['logged_in'] = true;
            $_SESSION['login_attempt'] = false;
            $cookie_name = "spark-user-access";
            setcookie("spark-user-access", "subscribed", time() + (86400 * 365), "/"); // 86400 = 1 day
            $_SESSION['message'] = "success";
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
        } else {
            $_SESSION['message'] = "email and password do not match";
            if (isset($_GET['referto']) && !empty($_GET['referto'])) {
                $ref_url = $_GET['referto'];
                header("location: $ref_url");
                $show_modal = true;
            }
        }
    }
}