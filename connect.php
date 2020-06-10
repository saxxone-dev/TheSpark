<?php

?>

<!doctype html>
<html lang="en">
<head>
    <title>Start, Sustain And Scale Your Business</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Connect with leaders to help you start, sustain and scale your business. Gain access to funding and growth resources.">
    <link href="./assets/images/favicon.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--  <link rel="stylesheet" href="./assets/css/bootstrap.css">-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <style>
        .login {

        }
        .hide-sign{
            display: none;
        }
    </style>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5ecccbba8ee2956d73a499fc/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>
<body>


<div class="">
    <div
            class="bg-black pt-md-4 pb-md-0 px-2 px-md-4 px-lg-5 w-100 flex-column flex-md-row d-flex align-items-center justify-content-between">
        <a href="index">
            <div class="d-flex my-4 align-items-center">
                <div><img src="assets/images/connect-logo.png" height="50" alt="The Spark logo"></div>
                <div class="text-26 pt-2 ml-3 font-weight-light text-pry text-uppercase"
                     style="font-family: 'Bebas Neue', Helvetica, TeXGyreHeros, Arial, sans-serif !important;">CONNECT
                </div>
            </div>
        </a>
        <div class="w-xs-100">
            <div class="bg-white d-flex justify-content-center text-black br-0-8 py-1 py-lg-2">
                <a href="https://www.thesparkng.com/hub/" class="border-right px-2 px-md-4">Hub</a>
                <a href="magazine/" class="border-right px-2 px-md-4">Magazine</a>
                <a href="http://icons.thesparkng.com/" class="border-right px-2 px-md-4">Icons</a>
                <a href="https://masterclass.thesparkng.com" class="border-right px-2 px-md-4">Masterclass</a>
            </div>
        </div>
    </div>
    <div class="jumbotron pt-md-0 mb-0 bg-black"
         style="background-image: url(assets/images/login-bg.jpg); background-size: cover;">
        <div class="container pb-5">
            <div class="row pl-lg-4">
                <div class="bg-white shadow-thick login br-0-8 col-12 col-md-6 col-lg-5 pt-5 px-4 mt-2 br-1 text-black">
                    <h2 class="font-weight-bold h4">Enjoy unlimited digital
                        access to The Class</h2>
                    <p class="font-weight-bold h6">
                        $2 $0.25/week
                    </p>
                    <div class="text-black h6"> Billed as $8 $1 every 4 weeks for one year.
                        You can cancel anytime.
                    </div>
                    <div class="mt-4">
                        <form action="./includes/login-script.php" class="hide-sign" id="sign-in" method="post">
                            <?php if (isset($_SESSION['message'])) {
                                echo '<div class="alert alert-danger">' . $_SESSION['message'] . '</div>';
                            } ?>
                            <input class="form-input w-100 mt-3 mb-2" id="emaillogin" type="text" name="emaillogin"
                                   placeholder="Email"/>
                            <input class="form-input w-100 mt-3 mb-2" id="passwordlogin" type="password"
                                   name="passwordlogin"
                                   placeholder="Password"/>
                            <div class="d-flex mt-3 justify-content-center">
                                <button type="submit" name="login-submit"
                                        class="button button-main py-2 px-4 shadow mt-3 justify-content-center text-uppercase br-0-8">

                                    Sign In
                                </button>
                            </div>
                        </form>
                        <form action="./includes/signup-script.php" class="" id="sign-up" method="post">
                            <?php if (isset($_SESSION['message'])) {
                                echo '<div class="alert alert-danger">' . $_SESSION['message'] . '</div>';
                            } ?>

                            <input placeholder="First Name" required id="firstName" name="first_name" type="text"
                                   class="form-input w-100 bg-white text-black my-2"/>


                            <input placeholder="Last Name" required id="lastName" name="last_name" type="text"
                                   class="form-input w-100 bg-white text-black my-2"/>


                            <input placeholder="Email Address" required id="email" name="email" type="email"
                                   class="form-input w-100 bg-white text-black my-2"/>

                            <div class="select-box mt-3 br-0-8">

                                <div id="select-option" class="options-container">

                                    <div class="option">
                                        <input type="radio" class="radio" id="insights" name="insights">
                                        <label for="insights">Access to Insights & Information</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="radio" id="network" name="network">
                                        <label for="network">Access to Inspiring network</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="radio" id="financial" name="financial">
                                        <label for="financial">Access to Financial resources</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="radio" id="non-financial" name="non-financial">
                                        <label for="non-financial">Access to Non-financial resources</label>
                                    </div>
                                </div>
                                <div class="selected br-0-8">
                                    <input class="border-0 p-0" id="access" value="Access Type" name="access"/>
                                </div>

                            </div>


                            <input placeholder="Phone Number" required id="phone" name="phone" type="tel"
                                   class="form-input w-100 bg-white text-black my-2"/>

                            <input placeholder="Password" required id="password" name="password" type="password"
                                   class="form-input w-100 bg-white text-black my-2"/>

                            <input placeholder="Password" required id="confirm-password" name="confirm-password"
                                   type="password"
                                   class="form-input w-100 bg-white text-black my-2"/>

                            <div class="mt-4 d-flex justify-content-center">
                                <button type="submit" class="button button-main bg-tert py-2 px-4 shadow mt-3 justify-content-center text-uppercase br-0-8"
                                        style="cursor: pointer;"> Sign Up
                                </button>
                            </div>
                        </form>
                    </div>
                    <div id="sign-up-link" class="text-center px-md-4 px-lg-0 pb-4 my-4">Don&apos;t have an account&quest;
                        <span
                                class="font-weight-bold cursor-pointer text-pry"
                                onclick="toggleSignUp()">Sign Up</span>
                    </div>
                    <div id="sign-in-link" class="text-center hide-sign my-4">Already have an account? <span
                                class="font-weight-bold cursor-pointer text-pry"
                                onclick="toggleSignUp()">Sign in</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</div>
<script>

    let signIn = document.getElementById("sign-in");
    let signUp = document.getElementById("sign-up");
    let sul = document.getElementById("sign-up-link");
    let sil = document.getElementById("sign-in-link")

    function toggleSignUp() {
        signIn.classList.toggle("hide-sign");
        signUp.classList.toggle("hide-sign");
        sul.classList.toggle("hide-sign");
        sil.classList.toggle("hide-sign");
    }

    let selected = document.querySelector(".selected")
    let optionsContainer = document.querySelector(".options-container")
    let optionsList = document.querySelectorAll(".option")

    selected.addEventListener('click', () => {
        optionsContainer.classList.toggle("active-option")
    })

    optionsList.forEach(el => {
        el.addEventListener('click', () => {
            document.getElementById("access").value = el.querySelector("label").innerText;
            optionsContainer.classList.remove("active-option")
        })
    })
</script>
</body>
</html

