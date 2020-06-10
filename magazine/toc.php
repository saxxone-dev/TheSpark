<?php
$mag_read_url = "";
$results = "";
include_once '../includes/db_con.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $id = $mysqli->escape_string($_GET['id']);
    global $results;
    $results = $mysqli->query("SELECT *, magazines.id as magId, articles.link as artLink FROM magazines INNER JOIN articles on magazines.name=articles.magazine INNER JOIN article_contributors on article_contributors.article_title=articles.title WHERE magazines.id='$id' ORDER BY articles.id ASC");

} else if (isset($_GET['year']) && !empty($_GET['year']) && isset($_GET['month']) && !empty($_GET['month'])) {
    $year = $_GET['year'];
    $year = $mysqli->escape_string($_GET['year']);
    $month = $_GET['month'];
    $month = $mysqli->escape_string($_GET['month']);
    global $results;
    $results = $mysqli->query("SELECT *, magazines.id as magId, articles.link as artLink FROM magazines INNER JOIN articles on magazines.name=articles.magazine INNER JOIN article_contributors on article_contributors.article_title=articles.title WHERE magazines.year='$year' AND magazines.month_start='$month' ORDER BY articles.id ASC");

}


// Close connection
mysqli_close($mysqli);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <style>
        * {
            font-family: Roboto, Helvetica, "Helvetica Neue", "TeXGyreHeros", Arial, sans-serif;
        }

        .blur {
            filter: blur(8px);
            -webkit-filter: blur(8px);
            height: 200px;
        }

        .blur1 {
            left: 20px;
        }

        .blur2 {
            right: 20px;

        }

        .toc-active-tab {
            background-color: #5e5e5e;
            border-bottom: 4px solid #FF7E14;
        }

        @media all and (min-width: 768px) {
            .w-md-100 {
                width: 100%;
            }
        }

        .inactive-view {
            transform: translateX(-100vw);
            opacity: 0;
            transition: all 400ms ease-in-out;
            position: absolute;
        }

        .active-view {
            transform: translateX(0);
            opacity: 1;
            transition: all 400ms ease-in;
        }

        .active-view a:hover {
            text-decoration: underline;
            text-decoration-color: #fd7e14;
        }

        @media screen and (min-width: 768px) {
            .inactive-view, .active-view {
                transition: all 900ms ease-in-out;
            }
        }


        .toc-card{
            border-radius: 4px;
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1),0 2px 16px rgba(0,0,0,0.06);
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1), 0 2px 16px rgba(0,0,0,0.06);
            box-shadow: 0 1px 2px rgba(0,0,0,0.1), 0 2px 16px rgba(0,0,0,0.06);
        }
        .toc-card-img {
            width: 100%;
            will-change: transform;
            -moz-transition: all .75s cubic-bezier(0.25, 0.8, 0.25, 1);
            -o-transition: all .75s cubic-bezier(0.25, 0.8, 0.25, 1);
            -webkit-transition: all .75s cubic-bezier(0.25, 0.8, 0.25, 1);
            transition: all .75s cubic-bezier(0.25, 0.8, 0.25, 1);
            display: block;
            max-width: 100%;
            height: auto !important;
        }
        .toc-card-img:hover{
            transform: scale(1.05);
        }
        .toc-card-img-holder {
            max-height: 157px;
            overflow: hidden;
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
<div class="wrapper">
    <div style="background-image: url(../assets/images/screen.jpg); background-repeat: no-repeat;
background-origin: border-box; background-size: cover;">


        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 order-1 text-white py-4 order-md-0 d-flex justify-content-center flex-column" style="min-height: 400px">
                    <?php if ($results) : ?>
                        <?php if (mysqli_num_rows($results) > 0) : ?>

                            <?php $result = mysqli_fetch_assoc($results);

                            echo ' <h1 class="text-capitalize">' . $result['month_start'] . " - " . $result['month_end'] . ' ' . $result['year'] . '</h1>';


                            echo ' <div>FIND A SPECIFIC ISSUE</div>
                    <form action="<?php echo $_SERVER[\'PHP_SELF\']; ?>" class="d-flex mt-4 position-relative"
                          method="get">

                        <div class="select-box">

                            <div id="years" class="options-container options-container-year">
                            </div>
                            <div class="selected selected-year">
                                <input class="border-0 p-0" id="year" value="Year" name="year"/>
                            </div>

                        </div>
                        <div class="select-box mx-2">

                            <div id="months" class="options-container options-container-month">

                            </div>
                            <div class="selected selected-month">
                                <input class="border-0 p-0" id="month" value="Month" name="month"/>
                            </div>
                        </div>
                        <div class="mx-2">
                            <button type="submit"
                                    class="bg-tert p-1 d-flex align-items-center justify-content-center br-0-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px"
                                     height="24px">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-12 order-0 order-md-1 col-md-6 d-flex pb-4 align-items-center">
                    <div>';
                            echo '
                </div>
                <div>
                    </div>
                    <div>';
                            echo '         </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="text-white d-flex justify-content-center" style="background-color: #414141">
            <div class="row px-1">
                <div class="col-12 col-md-4 pt-md-3 mt-2 mb-3  my-md-0 text-right">
                    <div>
                        <a href="https://www.thesparkng.com/home/magazine/read/?id='. $result['magId'] . '">
                        
                        <button class="bg-tert br-0-8 text-12 mx-1 mx-md-4 d-md-flex w-md-100 align-middle">READ &amp;
                            SHARE
                        </button>
                        </a>
                    </div>
                </div>';

                            ?>
                        <?php
                        endif;
                    endif;

                    ?>


                    <div class="col-6 col-md-4 p-2 p-md-4 text-12 font-weight-light text-center cursor-pointer"
                         onclick="toggleTab()" id="aboutEdition">About The Edition
                    </div>
                    <div class="col-6 col-md-4 p-2 p-md-4 text-12 font-weight-light text-center cursor-pointer toc-active-tab"
                         onclick="toggleTab()" id="tableOfContents">Table Of Contents
                    </div>
                </div>
            </div>
            <div id="about-view" class="inactive-view">
                <div class="text-white w-100 bg-pry d-flex justify-content-center py-3">
                    <h2 class="text-center">Building A Productive Africa</h2>
                </div>
                <div class="container">
                    <div class="pt-5 row">
                        <div class="col-12 col-md-7 px-3 order-1 order-md-0">
                            <h3>Summary of the Edition</h3>
                            <p>The author was working at a Silicon Valley bank in 2010 when some
                                entrepreneurs pitched him on a “medical-cannabis technology
                                company.” He didn’t know what to make of it, because he’d never
                                considered cannabis to be a legitimate industry. But he and two friends
                                began researching the issue. They recognized nascent signs that
                                marijuana legalization—first for medical use, and then for recreational
                                use—seemed likely to spread.
                            </p>
                            <h3>Building A Productive Africa</h3>
                            <p>The author was working at a Silicon Valley bank in 2010 when some
                                entrepreneurs pitched him on a “medical-cannabis technology
                                company.” He didn’t know what to make of it, because he’d never
                                considered cannabis to be a legitimate industry. But he and two friends
                                began researching the issue. They recognized nascent signs that
                                marijuana legalization—first for medical use, and then for recreational
                                use—seemed likely to spread.
                            </p>
                            <h3>Appreciation</h3>
                            <p>The author was working at a Silicon Valley bank in 2010 when some
                                entrepreneurs pitched him on a “medical-cannabis technology
                                company.” He didn’t know what to make of it, because he’d never
                                considered cannabis to be a legitimate industry. But he and two friends
                                began researching the issue. They recognized nascent signs that
                                marijuana legalization—first for medical use, and then for recreational
                                use—seemed likely to spread.
                            </p>
                        </div>
                        <div class="col-12 col-md-5 order-0 order-md-1">
                            <img src="../assets/images/08torch-600.png" alt="" class="img-fluid mb-4">
                        </div>
                    </div>
                </div>

            </div>
            <div class="active-view" id="toc-view">
                <?php if ($results) : ?>
                    <?php if (mysqli_num_rows($results) > 0) : ?>
                        <?php
                        while ($result = mysqli_fetch_assoc($results)) {
                            echo '
<div class="text-white w-100 bg-pry bg-pattern-sm" class="' . $result['category'] . '">
<div class="container d-flex align-items-center justify-content-between py-1">
                    <h2 class="text-capitalize mb-0 h4">' . $result['category'] . '</h2>
                    <div class="small text-capitalize">' . $result['month_start'] . " - " . $result['month_end'] . ' ' . $result['year'] . '</div>
                    </div>
                </div>';
                            array_unique($result);
                            echo '<div class="container">
                    <div class="pb-3 pt-0 py-md-3 mx-2 mx-md-0 row toc-card my-3">
                        <div class="col-12 px-0 px-md-4 col-md-7 px-3 d-md-flex align-items-center order-1 order-md-0">
                        <div>
                        <a href="' . $result['artLink'] . '">
                            <h3 class="text-capitalize font-weight-bold h5">' . $result['article_title'] . '</h3></a>';
                            echo '<div>MAGAZINE ARTICLE by ' . $result['contributor_name'] . '</div>';
                            echo '<div>' . $result['highlight'] . '</div>';
                            echo '
</div></div>
            <div class="col-12 px-0 px-md-4 col-md-5 order-0 order-md-1 d-flex justify-content-center">
            <div class="toc-card-img-holder mb-3 mb-md-0">
                <img src="' . $result['article_image'] . '" alt="' . $result['article_title'] . '" class="img-fluid toc-card-img">
                </div>
            </div>
        </div>
    </div>';
                        }
                        ?>
                    <?php
                    endif;
                endif;

                ?>

            </div>
        </div>
        <div class="bg-dark-grey">
            <h4 class="text-center py-4">Explore Other Issues
            </h4>
            <div class="owl-carousel owl-theme">
                <?php
                include_once './featured-mag.php'
                ?>
            </div>
        </div>
    </div>
    <?php
    include '../footer.php';
    ?>
    <script>
        function toggleSideMenu() {
            let sideMenu = document.querySelector('#mobile-side-menu');
            sideMenu.classList.toggle("mobile-side-menu-open");
            sideMenu.classList.toggle("mobile-side-menu");
            console.log("clicked");
        }
    </script>
    <script>
        let years = document.getElementById('years');
        let months = document.getElementById('months');
        let startYear = 2018;
        let yearsArray = [];
        let currentYear = new Date().getFullYear();

        (function yearsBuilder() {
            for (let i = startYear; i <= currentYear; i++) {
                yearsArray.unshift(i);
            }
        })()

        yearsArray.forEach(e => {
            let option = document.createElement("div")
            option.setAttribute("class", "option");
            option.classList.add("option-year");
            let radio = document.createElement("input")
            radio.setAttribute("type", "radio");
            radio.setAttribute("class", "radio");
            radio.setAttribute("id", e);
            radio.setAttribute("name", "year");
            let label = document.createElement("label")
            label.setAttribute("for", e);
            label.innerText = e
            option.append(radio)
            option.append(label)
            if (e === currentYear.toString()) {
                option.setAttribute("selected", "selected");
            }
            years.append(option)
        })
        let allMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        allMonths.forEach(e => {

            let option = document.createElement("div")
            option.setAttribute("class", "option");
            option.classList.add("option-month");
            let radio = document.createElement("input")
            radio.setAttribute("type", "radio");
            radio.setAttribute("class", "radio");
            radio.setAttribute("id", e);
            radio.setAttribute("name", "month");
            let label = document.createElement("label")
            label.setAttribute("for", e);
            label.innerText = e
            option.append(radio)
            option.append(label)
            if (e === "January") {
                option.setAttribute("selected", "selected");
            }
            months.append(option)
        })


        let aboutEdition = document.getElementById('aboutEdition');
        let tableOfContents = document.getElementById('tableOfContents');
        let tocView = document.getElementById('toc-view');
        let aboutView = document.getElementById('about-view');

        function toggleTab() {
            tableOfContents.classList.toggle('toc-active-tab')
            aboutEdition.classList.toggle('toc-active-tab')
            tocView.classList.toggle('active-view')
            tocView.classList.toggle('inactive-view')
            aboutView.classList.toggle('active-view')
            aboutView.classList.toggle('inactive-view')
        }

        let selectedYear = document.querySelector(".selected-year")
        let optionsContainerYear = document.querySelector(".options-container-year")
        let selectedMonth = document.querySelector(".selected-month")
        let optionsContainerMonth = document.querySelector(".options-container-month")
        let optionsListYear = document.querySelectorAll(".option-year")
        let optionsListMonth = document.querySelectorAll(".option-month")

        selectedYear.addEventListener('click', () => {
            optionsContainerYear.classList.toggle("active-option")
        })
        selectedMonth.addEventListener('click', () => {
            optionsContainerMonth.classList.toggle("active-option")
        })
        optionsListYear.forEach(el => {
            el.addEventListener('click', () => {
                document.getElementById("year").value = el.querySelector("label").innerText;
                optionsContainerYear.classList.remove("active-option")
            })
        })

        optionsListMonth.forEach((el) => {
            el.addEventListener('click', () => {
                document.getElementById("month").value = el.querySelector("label").innerText;
                optionsContainerMonth.classList.remove("active-option")
            })
        })
    </script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel();
        });
        let owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
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
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })
    </script>
    <script>
        // document.querySelectorAll("")
    </script>
</body>
</html>