<?php
session_start();
$_SESSION['logged_in'] = false;
setcookie("spark-user-access", "", time() - 3600, "/");
if (isset($_GET['referto']) && !empty($_GET['referto'])) {
    $ref_url = $_GET['referto'];
    if($ref_url == "https://thesparkng.com/home/magazine/" or "https://thesparkng.com/home/magazine" or "http://thesparkng.com/home/magazine" or $ref_url == "http://thesparkng.com/home/magazine/") {
        header("location: http://www.thesparkng.com/home/magazine/read?id=25");
    } else {
        header("location: $ref_url");
    }
}
