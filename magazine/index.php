<?php
session_start();
$cookie_name = "spark-user-access";
$cookie_value = "";
$show_modal = false;

if (!isset($_COOKIE['spark-user-access'])) {
    setcookie($cookie_name, "unsubscribed", time() + (86400 * 30), "/"); // 86400 = 1 day
}
if (isset($_COOKIE['spark-user-access']) and $_COOKIE['spark-user-access'] == "unsubscribed") {

    setcookie($cookie_name, "first article read", time() + (86400 * 30), "/"); // 86400 = 1 day
}
if (isset($_COOKIE['spark-user-access']) and $_COOKIE['spark-user-access'] == "first article read") {
    setcookie($cookie_name, "first article read", time() + (86400 * 30), "/"); // 86400 = 1 day
}
if (isset($_SESSION['login_attempt']) and $_SESSION['login_attempt'] == true) {
    global $show_modal;
    $show_modal = true;
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Start, Sustain And Scale Your Business</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Connect with leaders to help you start, sustain and scale your business. Gain access to funding and growth resources.">
    <link href="../assets/images/favicon.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--  <link rel="stylesheet" href="./assets/css/bootstrap.css">-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <script src="../assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">

    <style>
        ::placeholder {
            color: white;
            font-size: 24px !important;
            font-weight: lighter;
            font-family: Arial, sans-serif;
        }

        .hide-sign {
            display: none;
        }

        * {
            font-family: 'Roboto', Helvetica, TeXGyreHeros, Arial, sans-serif;
        }

        .zoom-hover {
            will-change: transform;
            -moz-transition: all .75s cubic-bezier(0.25, 0.8, 0.25, 1);
            -o-transition: all .75s cubic-bezier(0.25, 0.8, 0.25, 1);
            -webkit-transition: all .75s cubic-bezier(0.25, 0.8, 0.25, 1);
            transition: all .75s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .zoom-hover:hover {
            transform: scale(1.05);
        }
    </style>

    <script>
        <?php

        if ($show_modal == true) {
            echo '$(document).ready(function(){
                    $("#loginModal").modal("show");
                });';
        }
        ?>

        $(document).ready(function () {
            $("#read").click(function () {
                $("#loginModal").modal('show');
            })
//load more magazines
            let magsCount = 8;
            $('#load-more').click(function() {
                 magsCount = magsCount + 4;
                $('#magazines').load("load-magazines.php", {
                    magsNewCount: magsCount
                });
            })

//search magazines


        });


    </script>

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
    <!--End of Tawk.to Script--></head>
<body>

<header class="header">
    <nav class="navbar sticky navbar-expand-lg">
        <!--    <a href="#" class="ml-2 d-none d-lg-block mr-5"><img src="../assets/images/first-time-here.webp" height="50" alt=""></a>-->
        <div onclick="toggleSideMenu()" class="hamburger d-block d-lg-none d-flex flex-column">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <a class="navbar-brand" href="https://www.thesparkng.com/home"><img src="../assets/images/magazine-logo.png" height="50"
                                                    alt="The Spark logo"></a>
        <!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--      <span class="navbar-toggler-icon"></span>-->
        <!--    </button>-->
        <div class="d-block d-lg-none"></div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-3 active">
                    <a class="nav-link" href="https://www.thesparkng.com/home/magazine/">Magazine</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="https://masterclass.thesparkng.com/">Masterclass</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="http://icons.thesparkng.com/">Icons</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="https://thesparkng.com/hub">Hub</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="https://www.thesparkng.com/home/about">About</a>
                </li>
            </ul>
            <div>
                <a href="https://www.thesparkng.com/home/connect">
                    <button class="bg-tert glow-btn mx-3">
                        Connect
                    </button>
                </a>
            </div>
            <form class="form-inline m-2 my-lg-0">
                <!--        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->

                <div id="user-profile"><img src="https://www.thesparkng.com/home/assets/images/person.svg" class="mx-2 menu-action" alt=""></div>
                <img src="https://www.thesparkng.com/home/assets/images/search.svg" class="mx-2 menu-action" alt="">
                <!--        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            </form>
        </div>
    </nav>
    <nav id="mobile-side-menu" class="w-100 menu-shadow mobile-side-menu">
        <div class="d-flex w-100 py-4 px-3 align-items-center justify-content-between">
            <a class="navbar-brand" href="https://www.thesparkng.com/home/"><img src="../assets/images/magazine-logo.png" height="50"
                                                            alt="The Spark logo"></a>
            <div onclick="toggleSideMenu()" class="">
                <svg class="mx-2" fill="white" height="24px" viewBox="0 0 24 24" width="24px"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0V0z" fill="none"/>
                    <path
                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                </svg>
            </div>
        </div>
        <ul class="navbar-nav mx-auto">
            <li class="nav-item my-1 mx-4 active">
                <a class="nav-link" href="https://www.thesparkng.com/home/magazine/">Magazine</a>
            </li>
            <li class="nav-item my-1 mx-4">
                <a class="nav-link" href="https://masterclass.thesparkng.com/">Masterclass</a>
            </li>
            <li class="nav-item my-1 mx-4">
                <a class="nav-link" href="https://icons.thesparkng.com/">Icons</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link" href="https://thesparkng.com/hub">Hub</a>
            </li>
            <li class="nav-item my-1 mx-4">
                <a class="nav-link" href="https://www.thesparkng.com/home/about">About</a>
            </li>
        </ul>
        <div class="my-5 mx-2">
            <a href="https://www.thesparkng.com/home/connect">
                <button class="bg-tert glow-btn mx-3">
                    Connect
                </button>
            </a>
        </div>
    </nav>
</header>


<?php

include_once '../includes/login-modal.php';
include_once '../includes/magazine-connection.php';
$magazines = "SELECT * FROM magazines ORDER BY date DESC LIMIT 9";
$results = mysqli_query($link, $magazines);
// Close connection
mysqli_close($link);
?>
<?php
$mag_read_url = 'https://www.thesparkng.com/home/magazine/toc?id=';


?>
<div class="wrapper">
    <div>
        <div style="background-color: #F2F2F2; background-image: url(https://www.thesparkng.com/home/assets/images/A-SPARK.png); background-repeat: no-repeat">
            <div class="container">
                <div class="row py-5">
                    <?php
                    if ($results) {
                        if (mysqli_num_rows($results) > 0) {
                            $result = mysqli_fetch_array($results);
                            echo '<div class=" col-md-6 text-md-right col-12 pr-4 my-3">';
                            echo '<a href="' . $mag_read_url . $result['id'] . '">';
                            echo ' <img  class="img-fluid shadow-thick" src="' . $result['image_url'] . '" alt="' . $result['name'] . '" />';
                            echo '</a>
      </div>';
                            echo '<div class="col-md-6 p-md-3 py-3 ">';
                            echo '<span class="d-block font-weight-bold text-14 mb-4">CURRENT ISSUE</span>';
                            echo '<h3 class="font-weight-bold text-capitalize">' . $result['month_start'] . ' – ' . $result['month_end'] . ' ' . $result['year'] . "</h3>";
                            echo '<p class="mb-3">Becoming A Wonder Woman: Collectively, each one of us can
help create a gender equal world.</p>';
                            echo '<h5 class="text-14 mt-md-4 font-weight-bold">FEATURING</h5>';
                            echo '<ul>
                        <li class="listy"> Each for Equal: Moving from Hashtag to Reality</li>
                       <li class="listy">On Becoming A Wonder Woman</li>
                       <li class="listy">Music Is A Woman</li>
                       <li class="listy">The Simple Things Matter</li>
                  </ul>';
                            echo '<a href="https://www.thesparkng.com/home/magazine/toc?id=25"><button type="button" class="bg-pry text-capitalize shadow br-0-8 mt-3" >
         Table of Contents
        </button></a>';
                            echo '</div>';
                        } else {
                            echo "ERROR: Could not execute $magazines. " . mysqli_error($link);
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="bg-pattern-thread">
            <div class="  py-5" style="background-color: rgba(0,0,0,0.34)">
                <div class="container">
                    <div class="d-flex justify-content-center text-white">
                        <div>
                            <h2 class="text-md-center  mb-3">Become An Empowerment Partner</h2>
                            <p class="text-md-center">Through The Spark Magazine, we enlighten millions across Africa
                                with
                                insights and information from Industry leaders that provide solutions to your
                                entrepreneurial endeavour, career and life in general. With this edition, we are
                                offering a
                                wide selection of empowerment packages that will help us drive a productive Africa. Each
                                package below gives your brand more visibility while also empowering entrepreneurs and
                                professionals in our community. Become an empowerment partner through your one-off
                                support
                                or subscription to any of the packages below.
                                Up to 30% of our revenue goes towards empowering the Ignite community.
                            </p>
                        </div>
                    </div>
                    <div class="row  prices text-center ">
                        <div class="col-md-3 my-4 pt-4 d-flex justify-content-center border-right">
                            <div class="pricing-block p-3">
                                <div class="price text-md-36 text-lg-46 text-xs-40">
                                    ₦50,000
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    2 physical magazine copies
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Social Media sponsored post
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Website Sidebar banner
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    50% off a Masterclass session
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Free 3 months subscription to Academy
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-4 pt-4 d-flex justify-content-center border-right">
                            <div class="pricing-block p-3">
                                <div class="price text-md-36 text-lg-46 text-xs-40">
                                    ₦150,000
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    5 physical magazine copies
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Social media sponsored post
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Website Sidebar banner
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    One (1) free Masterclass ticket
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    50% off a Masterclass session
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Free 6 months Academy subscription
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-4 pt-4 d-flex justify-content-center  border-right">
                            <div class="pricing-block p-3">
                                <div class="price text-md-36 text-lg-46 text-xs-40">
                                    ₦250,000
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    10 physical magazine copies
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Social media, newsletter sponsored post and bottom strip magazine ad
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Website leaderboard and sidebar banner
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    One (1) free Masterclass ticket
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Free 1 year Academy subscription
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-4 pt-4 d-flex justify-content-center">
                            <div class="pricing-block p-3">
                                <div class="price text-md-36 text-lg-46 text-xs-22">
                                    ₦500,000
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    20 physical magazine copies
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Social media, newsletter sponsored post, full page magazine ad
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Website banners, Video commercial
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Asset Co-branding for one (1) Masterclass session
                                </div>
                                <div class="text-white font-weight-light text-xs-22 text-20">
                                    Free 1 year Academy subscription
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white py-md-4 py-2"
             style="background-image: url(../assets/images/Group-80.jpg); background-size:cover ">
            <div class="container py-2 py-md-4 text-grey">
                <h1 class="text-34 text-white font-weight-light">The Archive</h1>
                <form action="search-mag.php" class="mb-4" method="post">
                    <div class="input-grp py-2 d-flex align-items-center w-100 br-0-8"
                         style="border: 1px solid #fd7e14; overflow: hidden; background-color: rgba(0,0,0,0.19)">
           <span class="pt-1">
              <svg class="ml-3 mr-2" fill="grey" height="18px" viewBox="0 0 24 24" width="18px"
                   xmlns="http://www.w3.org/2000/svg">
           <path d="M0 0h24v24H0V0z" fill="none"/>
           <path
                   d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
         </svg>
           </span>
                        <input type="search" name="search" placeholder="Find a specific edition, article or contributor"
                               class="flex-grow-1 text-white search-box bg-transparent text-24 mr-3 border-0"
                        >
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row" id="magazines">
                <?php

                if ($results) {
                    if (mysqli_num_rows($results) >= 0) {
                        while ($result = mysqli_fetch_array($results)) {
                            echo '<div class="col-md-4 col-6 col-lg-3 px-3 my-3">';
                            echo '<a target="_blank" href="' . $mag_read_url . $result['id'] . '">';
                            echo ' <img  class="img-fluid shadow-thick zoom-hover" src="' . $result['image_url'] . '" alt="' . $result['name'] . '" />';
                            echo '</a>
      </div>';
                        }
                    }
                } else {
                    echo "ERROR: Could not execute $magazines. " . mysqli_error($link);
                }
                ?>
            </div>

            <div class="d-flex mt-4 justify-content-center">
                <div>
                    <div class="px-md-4 px-1 pt-4 pb-2" id="load-more">
                        <button class="bg-transparent border-0">
                            Load More
                        </button>
                    </div>
                    <div class="w-100" style="border-bottom: 2px solid #ed1d24"></div>
                </div>
            </div>
        </div>
        <div class="container pt-5 mt-4">
            <div class="px-md-4 px-lg-5 mx-lg-4">
                <div style="border-bottom: 4px solid #FF7E14"><h2 class="text-24"
                                                                  style="font-family: 'Bebas Neue', Helvetica, TeXGyreHeros, Arial, sans-serif !important;">
                        READ &amp; SHARE</h2></div>

                <div class="row my-5">
                    <?php
                    //        if ($results) {
                    //            if (mysqli_num_rows($results) > 0) {
                    //                $result = mysqli_fetch_array($results);
                    //                    echo '<div class="col-md-6 text-md-right col-12 px-3 my-3">';
                    //                    echo '<a href="' . $result['link'] . '">';
                    //                    echo ' <img  class="img-fluid shadow-thick" src="' . $result['image_url'] . '" alt="' . $result['name'] . '" />';
                    //                    echo '</a>
                    //      </div>';
                    //            }
                    //        } else {
                    //            echo "ERROR: could not execute $results. " . mysqli_error($results);
                    //        }
                    ?>
                    <div class="col-md-6 p-md-3 py-3 d-lg-flex justify-content-center ">
                       <div>
                           <img src="../assets/images/becoming-a-wonder-woman.webp" alt="becoming a wonder woman"
                                class="img-fluid shadow">
                       </div>
                    </div>
                    <div class="col-md-6 p-md-3 d-flex align-items-center py-3 ">
                        <div>
                            <p class="text-md-20">We work every day to create new resources and opportunities that can
                                help
                                you on your journey. Now we would like you to Be The Spark by giving someone else an
                                opportunity to enjoy the same access.</p>
                            <div>Being a part of the Ignite movement gives you access to:
                                <ul style="padding-left: 1em">
                                    <li style="list-style-type: disc">
                                        Insights & information
                                    </li>
                                    <li style="list-style-type: disc">An inspiring network
                                    </li>
                                    <li style="list-style-type: disc">Financial and non-financial resources such as
                                        education/skill acquisition, funding, business tools, mentorship programs,
                                        networking and knowledge-sharing sessions, promotions, PR mileage, amongst
                                        others.
                                    </li>
                                </ul>
                            </div>
                            <p>Click the button below to read the current edition. Ignite the SPARK in someone else by
                                sharing with your network.</p>

                            <?php
                            if ($_SESSION['logged_in']) {
                                echo '<a href="https://www.thesparkng.com/home/magazine/read?id=25"> <button class="button-tertiary py-2 shadow px-4 br-0-8 mt-3 text-uppercase">
              READ &amp; SHARE
            </button></a>';
                            } else {
                                echo '<button id="read" class="button-tertiary py-2 shadow px-4 br-0-8 mt-3 text-uppercase">
              READ &amp; SHARE
            </button>';

                            }

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
            class="bottom-banner text-white text-center m-md-2 m-lg-3 p-5 d-flex justify-content-center align-items-center bg-pattern-thread">
        <div class="py-5 my-5">
            <p class="text-56 text-xs-34 text-md-36 text-lg-56 mb-1 mt-4"> FREE TRAINING FROM LEGIT
                FOUNDERS</p>
            <p class="text-22 mb-4">Actionable Strategies for Starting & Growing Any Business.</p>
            <button class="bg-black shadow br-0-8 mb-4">Watch Now</button>
        </div>
    </div>
</div>


<?php
include '../footer.php'
?>
<script>
    function toggleSideMenu() {
        let sideMenu = document.querySelector('#mobile-side-menu');
        sideMenu.classList.toggle("mobile-side-menu-open");
        sideMenu.classList.toggle("mobile-side-menu");
        console.log("clicked");
    }
</script>
</body>

</html>
