<?php
$cookie_name = "spark-user-first-time-here";
$cookie_value = "";
$show_first_time = false;
if (!isset($_COOKIE['spark-user-first-time-here'])) {
    setcookie($cookie_name, "not-first-time", time() + (86400 * 183), "/"); // 86400 = 1 day
    global $show_first_time;
    $show_first_time = false;
}


?>
<?php
$cachefile = 'caching_folder/cachedpage.html';
$cachetime = 86400 * 7;
// Serve from the cache if it is younger than $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    include($cachefile);
    exit;
}
ob_start(); // Start the output buffer
?><!doctype html>
<html lang="en">
<head>
    <title>Start, Sustain And Scale Your Business</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Connect with leaders to help you start, sustain and scale your business. Gain access to funding and growth resources.">
    <link href="./assets/images/favicon.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--  <link rel="stylesheet" href="./assets/css/bootstrap.css">-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
    <style>
        @media screen and (min-width: 768px) {
            .owl-carousel1 .owl-stage {
                padding-bottom: 3rem !important;
            }

            .owl-carousel2 .owl-item {
                padding-top: 3rem !important;
            }
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
    <!--End of Tawk.to Script--></head>

<body>
<header class="header">
    <nav class="navbar sticky navbar-expand-lg">
        <?php
        if ($show_first_time == true) {
            echo '<a href="./first-time-here" class="ml-2 d-none d-lg-block mr-5"><img src="./assets/images/first-time-here.webp" height="50" alt=""></a>';
        }
        ?>

        <div onclick="toggleSideMenu()" class="hamburger d-block d-lg-none d-flex flex-column">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <a class="navbar-brand" href="https://www.thesparkng.com/home/"><img src="./assets/images/logo.webp" height="50" alt="The Spark logo"></a>
        <!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--      <span class="navbar-toggler-icon"></span>-->
        <!--    </button>-->
        <div class="d-block d-lg-none"></div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-3 active">
                    <a class="nav-link" href="magazine/">Magazine</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="https://masterclass.thesparkng.com">Masterclass</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="http://icons.thesparkng.com/">Icons</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="https://www.thesparkng.com/hub">Hub</a>
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

                <div id="user-profile"><img src="./assets/images/person.svg" class="mx-2 menu-action" alt=""></div>
                <img src="./assets/images/search.svg" class="mx-2 menu-action" alt="">
                <!--        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            </form>
        </div>
    </nav>
    <nav id="mobile-side-menu" class="w-100 menu-shadow mobile-side-menu">
        <div class="d-flex w-100 py-4 px-3 align-items-center justify-content-between">
            <a class="navbar-brand" href="https://www.thesparkng.com/home/"><img src="./assets/images/logo.webp" height="50" alt="The Spark logo"></a>
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
                <a class="nav-link" href="magazine/">Magazine</a>
            </li>
            <li class="nav-item my-1 mx-4">
                <a class="nav-link" href="masterclass.thesparkng.com">Masterclass</a>
            </li>
            <li class="nav-item my-1 mx-4">
                <a class="nav-link" href="http://icons.thesparkng.com/">Icons</a>
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

<script>
    function toggleSideMenu() {
        let sideMenu = document.querySelector('#mobile-side-menu');
        sideMenu.classList.toggle("mobile-side-menu-open");
        sideMenu.classList.toggle("mobile-side-menu");
        console.log("clicked");
    }
</script>
<?php
include 'includes/header-actions.php'
?>
<div class="wrapper">

    <div class="mb-4">
        <div class="owl-carousel owl-theme owl-carousel1">
            <div class="jumbotron home-jumbo text-white text-center d-flex h-100 align-items-center">
                <div class="m-auto">
                    <div class="h-100 px-4 mt-n3 mt-lg-0">
                        <h1 class="text-uppercase text-lg-120 text-lg-60 mt-n5 mt-md-0 text-xs-54 px-md-4 text-white"
                            style="font-family: 'Bebas Neue', Helvetica, TeXGyreHeros, Arial, sans-serif !important; line-height: 0.9">
                            IGNITE <br
                                    class="d-md-none"/> THE NEXT PHASE <br/>
                            OF YOUR <br class=""/> JOURNEY</h1>
                        <p class="text-22 text-white px-2 px-lg-5" style="line-height: 1.3">Gain access to the
                            Magazines, Training Programs, Resources and Legacies you need to achieve Iconic success</p>
                    </div>
                </div>
                <div class="bubble d-flex w-100 justify-content-center justify-content-md-end">
                    <a href="https://masterclass.thesparkng.com/" id="bubble" class="animated slideInRight"><img
                                src="./assets/images/bubble.webp" alt=""></a>
                </div>
            </div>
            <div class="jumbotron home-jumbo text-white text-center d-flex h-100 align-items-center">
                <div class="m-auto">
                    <div class="h-100 px-4 mt-n3 mt-lg-0">
                        <h1 class="text-uppercase text-lg-120 text-lg-60 mt-n5 mt-md-0 text-xs-54 px-md-4 text-white"
                            style="font-family: 'Bebas Neue', Helvetica, TeXGyreHeros, Arial, sans-serif !important; line-height: 0.9">
                            IGNITE <br
                                    class="d-md-none"/> THE NEXT PHASE <br/>
                            OF YOUR <br class=""/> JOURNEY</h1>
                        <p class="text-22 text-white px-2 px-lg-5" style="line-height: 1.3">Gain access to the
                            Magazines, Training Programs, Resources and Legacies you need to achieve Iconic success</p>
                    </div>
                </div>
                <div class="bubble d-flex w-100 justify-content-center justify-content-md-end">
                    <a href="https://masterclass.thesparkng.com/" id="bubble" class="animated slideInRight"><img
                                src="./assets/images/bubble.webp" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class=" pt-4 bg-white-grad">
        <h2 class="text-uppercase text-26 bebas px-3 text-center">LEARN FROM SOME OF THE GREATEST ENTREPRENEURS OF OUR
            GENERATION</h2>
        <div class="owl-carousel owl-theme owl-carousel2">
            <?php require './includes/magazine-connection.php';
            $magazine = "SELECT magazines.link, magazines.id, magazines.image_url, magazines.name FROM magazines ORDER BY date DESC LIMIT 5";
            if ($results = mysqli_query($link, $magazine)) {
                if (mysqli_num_rows($results) > 0) {
                    while ($result = mysqli_fetch_array($results)) {
                        echo '<div class="magazine px-3 my-3 my-md-0">';
                        echo '<a href="' . $result['link'] . '?id='. $result['id']. '">';
                        echo ' <img  class="img-fluid shelf-mag" src="' . $result['image_url'] . '" alt="' . $result['name'] . '" />';
                        echo '</a>
              </div>';
                    }
                }
            } else {
                echo "ERROR: could not execute $magazine. " . mysqli_error($link);
            }
            // Close connection
            mysqli_close($link);
            ?>
        </div>
    </div>
    <div class="mx-md-3 ml-lg-5 mr-lg-4 pt-4">
        <div class="row">
            <div class="col-md-3 my-auto h-100 d-flex align-items-center justify-content-center justify-content-md-end">
                <h3 class="text-xs-18 text-md-24 text font-weight-bold text-center text-md-left"
                    style="color: #414141; font-family: 'Bodoni MT', serif">
                    LEARN FROM SOME OF THE GREATEST AFRICAN ICONS</h3>
            </div>
            <div class="col-md-9 px-md-0 px-lg-3">
                <div class="card-group nb-card">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="./assets/images/book.svg" alt="" class="p-3 community-icon">
                            <h4 class="text-24 card-title font-weight-light" style="margin-bottom: 8px">The Spark <br
                                        class="d-none d-md-block"/> Magazine</h4>Interviews and thought leadership
                            content that will provide you with inspiration and solutions to your endeavour(s), career
                            and life in general.
                        </div>
                        <div class="card-footer bg-white">
                            <a href="./magazine/">
                                <button class="button-main shadow py-1 px-4 br-0-8">View</button>
                            </a>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="./assets/images/mic.svg" alt="" class="p-3 community-icon">
                            <h4 class="text-22 font-weight-light">The Spark <br class="d-none d-md-block"/> Masterclass
                            </h4>
                            <p>Attend our training programs to help you get equipped with the requisite know-how on
                                executing your goals and reaching your potential.</p>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="https://masterclass.thesparkng.com">
                                <button class="button-main shadow py-1 px-4 br-0-8">View</button>
                            </a>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="./assets/images/devices.svg" alt="" class="p-3 community-icon">
                            <h4 class="text-22 font-weight-light">The Spark <br class="d-none d-md-block"/> Academy</h4>
                            <p>Discover legacies in our exclusive sessions of African legends from different industries
                                to mentor you into adopting a culture of innovation.</p>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="http://icons.thesparkng.com/">
                                <button class="button-main shadow py-1 px-4 br-0-8">View</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class=" my-5 pt-3 pb-5">
        <div class="container">
            <div class="d-flex mb-4 justify-content-center"><h3
                        class="text-pry text-center text-capitalize text-xs-40 text-sm-40 text-lg-50 bebas font-weight-light mb-4 py-2 px-4 br-0-8">
                    <span class="text-pry">Meet The Masters</span></h3></div>

            <div class="owl-carousel owl-theme owl-carousel3">
                <div class="justify-content-center">
                    <div class="card-body text-center text-md-left">
                        <a href="https://masterclass.thesparkng.com/">
                            <img src="./assets/images/OzinnaAnumudu.jpg" alt="Ozinna Anumudu"
                                 class="img-fluid rounded-circle p-2 border-pry">
                            <div class="text-20 mt-3 font-weight-light text-center">Ozinna Anumudu</div>
                            <div class="text-14 text-center">Brand Identity And Strategy</div>
                        </a>
                    </div>
                </div>

                <div class="justify-content-center">
                    <div class="card-body text-center text-md-left">
                        <a href="https://masterclass.thesparkng.com/">
                            <img src="./assets/images/TosinOlaseinde.jpg" alt="Tosin Olaseinde "
                                 class="img-fluid rounded-circle p-2 border-pry">
                            <div class="text-20 text-center mt-3 font-weight-light">Tosin Olaseinde</div>
                            <div class="text-14 text-center">Understanding Investments</div>
                        </a>
                    </div>
                </div>

                <div class="justify-content-center">
                    <div class="card-body text-center text-md-left">
                        <a href="https://masterclass.thesparkng.com/">
                            <img src="./assets/images/TriciaIkponmwomba.jpg" alt="Tricia Ikponmwomba"
                                 class="img-fluid rounded-circle p-2 border-pry">
                            <div class="text-18 text-center mt-3 font-weight-light">Tricia Ikponmwomba</div>
                            <div class="text-14 text-center">Scaling A Business</div>
                        </a>
                    </div>
                </div>

                <div class="justify-content-center">
                    <div class="card-body text-center text-md-left">
                        <a href="https://masterclass.thesparkng.com/">
                            <img src="./assets/images/TosinAjibade.jpg" alt="Tosin Ajibade"
                                 class="img-fluid rounded-circle p-2 border-pry">
                            <div class="text-20 mt-3 text-center font-weight-light">Tosin Ajibade</div>
                            <div class="text-14 text-center">Monetizing Your Influence On Social Media</div>
                        </a>
                    </div>
                </div>
                <div class="justify-content-center">
                    <div class="card-body text-center text-md-left">
                        <a href="https://masterclass.thesparkng.com/">
                            <img src="./assets/images/NellyAgbogu.jpg" alt="Nelly Agbogu"
                                 class="img-fluid rounded-circle p-2 border-pry">
                            <div class="text-20 text-center mt-3 font-weight-light">Nelly Agbogu</div>
                            <div class="text-14 text-center">Maximizing Instagram For Business</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-black mb-5 px-4"
         style="position: relative; background-image: url(./assets/images/Mask-Group-2.png); background-size: 100vw;">
        <div class="d-none d-lg-block" style="position: absolute; right: 0;"><img src="./assets/images/sparkle.webp"
                                                                                  width="200px" alt=""></div>
        <div class=" d-flex  justify-content-center">
            <div class="pt-5"><h3 class="text-center mt-2 font-weight-bold text-pry mb-4 text-lg-60 text-xs-50"
                                  style="font-family: 'Bodoni MT', serif">Why African Legends <img height="40px"
                                                                                                   width="auto"
                                                                                                   src="assets/images/heart.svg"
                                                                                                   alt=""/> <br/> The
                    Spark </h3></div>
        </div>

        <div class="card-group mb-5 nb-card">
            <div class="card bg-transparent">
                <div class="card-body text-14">
                    "The Spark's the perfect platform for the new generation of entrepreneurs who don't know where to go
                    or what
                    to
                    do. Aspiring entrepreneur looking to start your business? I highly recommend checking out The Spark
                    is an
                    invaluable resource to help get your business off the ground."
                </div>
                <div class="card-footer bg-transparent">
                    <span class=" text-pry d-block text-center">Aderoju Ope Ajayi</span>
                </div>
                <div class="text-center">
                    <img src="./assets/images/Aderoju-Ope-Ajayi.jpeg" class="academians" alt="">
                </div>

            </div>
            <div class="card bg-transparent">
                <div class="card-body text-14">
                    "The Spark's the perfect platform for the new generation of entrepreneurs who don't know where to go
                    or what
                    to
                    do. Aspiring entrepreneur looking to start your business? I highly recommend checking out The Spark
                    is an
                    invaluable resource to help get your business off the ground."
                </div>
                <div class="card-footer bg-transparent">
                    <span class=" text-pry d-block text-center">Chinwe Egwim</span>
                </div>
                <div class="text-center">
                    <img src="./assets/images/Chinwe-Egwim-Nigeria_s-Human-Capital.jpg" class="academians" alt="">
                </div>

            </div>
            <div class="card bg-transparent">
                <div class="card-body text-14">
                    "The Spark's the perfect platform for the new generation of entrepreneurs who don't know where to go
                    or what
                    to
                    do. Aspiring entrepreneur looking to start your business? I highly recommend checking out The Spark
                    is an
                    invaluable resource to help get your business off the ground."
                </div>
                <div class="card-footer bg-transparent">
                    <span class=" text-pry d-block text-center">Chinenye Uwanaka</span>
                </div>
                <div class="text-center">
                    <img src="./assets/images/Chinenye-Uwanaka.jpg" class="academians" alt="">
                </div>

            </div>
            <div class="card bg-transparent">
                <div class="card-body text-14">
                    "The Spark's the perfect platform for the new generation of entrepreneurs who don't know where to go
                    or what
                    to
                    do. Aspiring entrepreneur looking to start your business? I highly recommend checking out The Spark
                    is an
                    invaluable resource to help get your business off the ground."
                </div>
                <div class="card-footer bg-transparent">
                    <span class=" text-pry d-block text-center">Aramide Abe</span>
                </div>
                <div class="text-center">
                    <img src="./assets/images/Aramide-Abe.jpg" class="academians" alt="">
                </div>

            </div>
        </div>
        <div class=" d-flex justify-content-center">
            <div class="accent-line"></div>
        </div>
    </div>

    <div class="container my-5">
        <div class="container">
            <div class="row my-4">
                <div class="col-md-3"></div>
                <div class="col-md-4 ml-md-4">
                    <h3 class="text-34 text-pry">Join the Growing Movement of Entrepreneurs and Professionals</h3>
                </div>
            </div>
        </div>
        <div class="vue-carousel" id="vc">
            <div class="justify-content-center d-flex">
                <div class="carousel-controller row my-4">
                    <div class="col-3" v-for="(image, index) in imageThumbnails">
                        <div class="vc-item " @click="setSlide(index)" @mouseover="setSlide(index)">
                            <div class="d-flex justify-content-center" style="height: 20px">
                                <div class="bg-pry text-center"
                                     :class="[ isActive == index ? 'pointerActive': '' ]"></div>
                            </div>
                            <img :src="image.url" :alt="image.alt" class="shadow-thick cursor-pointer img-fluid br-1"
                                 :class="[ isActive == index ? 'active': '' ]">
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-display">
                <div class="row mx-lg-5 px-lg-4">
                    <div class="col-md-6 p-0 d-flex justify-content-center justify-content-md-end">
                        <div class="pl-2" style="border-left: 4px solid #ed1d24;">
                            <img class="shadow-thick" width="300px" :src="activeImg.url" :alt="activeImg.alt">
                        </div>
                    </div>
                    <div class="col-md-6 p-0 d-flex align-items-center" style="position: relative;">
                        <div class="carousel-quote font-italic bg-white shadow-thick br-xs-0 p-4 pt-md-5 pb-md-2 px-md-5 font-weight-light text-20"
                             style="position: relative; z-index: 20">
                            <p>{{activeImg.quote}}</p>
                            <p class="mt-3 text-tert text-22">{{activeImg.name}}</p>
                        </div>
                        <div class="bg-pry shadow-thick carousel-pad">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5">
            <h3 class="text-center font-weight-bold my-5" style="font-family: 'Roboto', Helvetica, TeXGyreHeros, Arial, sans-serif">Must Read Posts</h3>
            <div class="row must-read">
                <?php
                $data = json_decode(file_get_contents("https://www.thesparkng.com/hub/wp-json/wp/v2/posts?per_page=6"), true);
                foreach ($data as $datum) {
                    echo '<div class="col-md-4 mb-4 ">';
                    echo '<div class="card-shadow">';
                    echo '<figure class="must-read-fig">';
                    echo '<a href="' . $datum["link"] . '">';
                    $image = json_decode(file_get_contents($datum["_links"]["wp:featuredmedia"][0]["href"]), true);
                    $category = json_decode(file_get_contents($datum["_links"]["wp:term"][0]["href"]), true);
                    echo '<img class="must-read-img" src="' . $image["guid"]["rendered"] . '" />';
                    echo '</figure>';
                    echo '<div class="must-read-content">';
                    echo '<a href="' . $datum["link"] . '"><h4 class="text-16 text-dark mb-3">' . $datum["title"]["rendered"] . '</h4></a>';
                    echo '<span class="text-uppercase d-block my-1 text-12">' .  $category[0]["name"]  . '</span>';
                    echo '<a/>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>


            </div>

        </div>


    </div>
</div>


<div
        class="bottom-banner text-white text-center m-md-2 m-lg-3 p-3 p-md-5 d-flex justify-content-center align-items-center bg-pattern-thread" style="background-repeat: repeat">
    <div class="py-md-5 py-3 my-4 my-md-5">
        <p class="text-56 text-xs-46 text-md-46 text-lg-56 font-weight-bold mb-1 mt-4"> Join The Ignite Movement</p>
        <p class="text-22 mb-4">Gain Access to the Resources You Need to Grow.</p>
        <a href="https://masterclass.thesparkng.com/">
            <button class="bg-black shadow br-0-8 mb-4">Watch Now</button>
        </a>
    </div>
</div>


<?php
include 'footer.php';
?>

<script>
    //  TODO cache json data and refresh every hour for optimum performance. read posts from cached data
    new Vue({
        el: '#vc',
        data: {
            imageThumbnails: [
                {
                    url: 'assets/images/t0.jpg',
                    alt: 't0',
                    quote: "The Spark's real. It's accessible. The stories resonate with me as an entrepreneur. The resources are helpful and motivational. I cannot recommend their content enough!",
                    name: "Seun Runsewe | Director of Product at OPay"
                },
                {
                    url: 'assets/images/t1.jpg',
                    alt: 't1',
                    quote: "The Spark's real. It's accessible. The stories resonate with me as an entrepreneur. The resources are helpful and motivational. I cannot recommend their content enough!",
                    name: "Chinwe Egwim | Associate, WIMBIZ"
                },
                {
                    url: 'assets/images/t2.jpg',
                    alt: 't2',
                    quote: "The Spark's real. It's accessible. The stories resonate with me as an entrepreneur. The resources are helpful and motivational. I cannot recommend their content enough!",
                    name: "Foluso Gbadamosi | Co-Founder at 8191 Solutions"
                },
                {
                    url: 'assets/images/t3.jpg',
                    alt: 't3',
                    quote: "The Spark's real. It's accessible. The stories resonate with me as an entrepreneur. The resources are helpful and motivational. I cannot recommend their content enough!",
                    name: "Otega Ogra | Group Head, Corporate Communications at BUA Group"
                }
            ],
            activeImg: '',
            isActive: '',
        },
        created() {
            let ctx = this;
            let i = 0;
            setInterval(() => {
                i = i % 4 + 1;
                ctx.activeImg = ctx.imageThumbnails[i - 1];
                ctx.isActive = i - 1;
            }, 5000)
        },
        methods: {
            setSlide(index) {
                this.activeImg = this.imageThumbnails[index];
                this.isActive = index
            }
        }
    })
</script>
<script>
    let bubble = document.getElementById('bubble');
    bubble.addEventListener('click', (e) => {
        bubble.classList.remove('slideInRight');
        bubble.classList.add('slideOutRight');
    })
</script>
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script>
    //owl carousel 1
    $(document).ready(function () {
        $(".owl-carousel1").owlCarousel();
    });
    let owl1 = $('.owl-carousel1');
    owl1.owlCarousel({
        items: 1,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: false,
                loop: true
            }
        },
        autoplay: true,
        loop: true,
        autoplayTimeout: 3000,
    });
    $('.play').on('click', function () {
        owl1.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function () {
        owl1.trigger('stop.owl.autoplay')
    })
    //owl carousel 2
    $(document).ready(function () {
        $(".owl-carousel2").owlCarousel();
    });
    let owl2 = $('.owl-carousel2');
    owl2.owlCarousel({
        items: 1,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 4,
                nav: false,
                loop: true
            }
        },
        autoplay: true,
        loop: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
    });
    $('.play').on('click', function () {
        owl2.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function () {
        owl2.trigger('stop.owl.autoplay')
    })

    //owl carousel 3    $(document).ready(function () {
    $(document).ready(function () {
        $(".owl-carousel2").owlCarousel();
    });
    let owl3 = $('.owl-carousel3');
    owl3.owlCarousel({
        items: 1,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: false,
                loop: true
            }
        },
        autoplay: true,
        loop: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
    });
    $('.play').on('click', function () {
        owl3.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function () {
        owl2.trigger('stop.owl.autoplay')
    })
</script>
</body>
</html>

<?php
// Cache the output to a file
$fp = fopen($cachefile, 'w');
fwrite($fp, ob_get_contents());
fclose($fp);
ob_end_flush(); // Send the output to the browser
?>