<?php

include_once 'scripts.php';
session_start();

if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])) {
    $email = $mysqli->escape_string($_GET['email']);
    $hash = $mysqli->escape_string($_GET['hash']);

    //select user with matching email and hash who hasnt been verified
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash' AND active='0'");

    if ($result->num_rows == 0) {
        $_SESSION['message'] = "Account has already been activated or the url is invalid";

    } else {
        $_SESSION['message'] = "Your account has been activated";

        //set user status to active (active = 1)

        $mysqli->query("UPDATE users SET active='1' WHERE email='$email'") or die ($mysqli->error);
        $_SESSION['active'] = 1;
        header("location: https://www.thesparkng.com/home");

    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <title>The Spark | Ignite. Connect. Achieve</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="The Spark is a Social Enterprise. We engage, enlighten and empower millions across Africa, connecting them to financial and non-financial resources.">
    <link href="./assets/images/favicon.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--  <link rel="stylesheet" href="./assets/css/bootstrap.css">-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">

<!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5ecccbba8ee2956d73a499fc/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script--></head>
<body>
<?php
include_once "main-header.php";
?>
<div class="w-100 h-100  d-flex align-items-center justify-content-center">
    <div class="px-4">
        <div class="alert text-center alert-warning text-22" style="font-family: 'Bebas Neue', Helvetica, Arial, sans-serif"><?= $_SESSION['message'] ?></div>

<!--        <div><a class="text-22 my-4 font-weight-bold" href="thesprakng.com/home">Home</a></div>-->
    </div>
</div>
</body>
</html>
