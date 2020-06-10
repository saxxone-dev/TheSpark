<?php
include_once '../includes/db_con.php';
$search = mysqli_real_escape_string($mysqli, $_POST['search']);
$sql = "SELECT *,  magazines.id as magId, articles.link as artLink FROM magazines INNER JOIN article_contributors INNER JOIN articles WHERE name LIKE '%$search%' OR article_title LIKE '%$search%' or contributor_name LIKE '%$search%' LIMIT 10";
$results = mysqli_query($mysqli, $sql);
// Close connection
mysqli_close($mysqli);
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
            font-weight: lighter;
        }

        * {
            font-family: 'Roboto', Helvetica, TeXGyreHeros, Arial, sans-serif;
        }

        a:hover {
            text-decoration: underline;
            text-decoration-color: #fd7e14;
        }
    </style>

    <script>
        $(document).ready(function () {
//load more magazines
            let magsCount = 10;
            $('#load-more').click(function () {
                magsCount = magsCount + 5;
                $('#search-results').load("load-search-magazines.php", {
                    magsNewCount: magsCount
                });
            })
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
<div class="wrapper">
    <div class="container pt-4 mt-lg-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-7">You searched for "<span
                        class="font-weight-bold"><?php echo $_POST['search']; ?> </span>"
            </div>
            <div class="col-12 col-md-6 col-lg-5">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="d-flex w-100" method="post">
                    <input type="search" name="search" class="br-0-8 pl-2" style="border: 1px solid #333"
                           placeholder="search keyword"/>
                    <button type="submit" class="d-flex align-items-center justify-content-center br-0-8 p-2 bg-tert">
                        <svg class="" fill="white" height="18px" viewBox="0 0 24 24" width="18px"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="mt-4" id="search-results">
            <?php
            if ($results) {
                if (mysqli_num_rows($results) >= 0) {
                    while ($result = mysqli_fetch_array($results)) {
                        echo '<div class="border-bottom py-4">';
                        echo '<a href="' . $result['artLink'] . '">';
                        echo '<h4 class="text-capitalize font-weight-bold h5 " style="color: #4b4b4b">' . $result['article_title'] . '</h4></a>';
                        echo '<div class="small text-pry text-uppercase">   <a target="_blank" href="https://www.thesparkng.com/home/magazine/toc?id=' . $result['magId'] . '">';
                        echo '<div>' . $result['name'] . '</div> </a>';
                        echo '<div class="mt-1 small text-dark">' . $result['contributor_name'] . '</div>';
                        echo '</div></div>';
                    }
                }
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
</div>
<div
        class="bottom-banner text-white text-center m-md-2 m-lg-3 p-3 p-md-5 d-flex justify-content-center align-items-center bg-pattern-thread"
        style="background-repeat: repeat">
    <div class="py-md-5 py-3 my-4 my-md-5">
        <p class="text-56 text-xs-46 text-md-46 text-lg-56 font-weight-bold mb-1 mt-4"> Join The Ignite Movement</p>
        <p class="text-22 mb-4">Gain Access to the Resources You Need to Grow.</p>
        <a href="https://masterclass.thesparkng.com/">
            <button class="bg-black shadow br-0-8 mb-4">Watch Now</button>
        </a>
    </div>
</div>
</body>
</html>
