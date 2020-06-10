<?php
$cookie_name = "spark-user-access";
$cookie_value="";
$show_modal_display = null;
if(!isset($_COOKIE['spark-user-access'])){
    setcookie($cookie_name, "unsubscribed", time() + (86400 * 30), "/"); // 86400 = 1 day
}
if(isset($_COOKIE['spark-user-access']) and $_COOKIE['spark-user-access'] == "unsubscribed"){
    global $show_modal_display;
    $show_modal_display = true;
    include '../includes/login-modal.php';
    setcookie($cookie_name, "first article read" , time() + (86400 * 30), "/"); // 86400 = 1 day
}
if(isset($_COOKIE['spark-user-access']) and $_COOKIE['spark-user-access'] == "unsubscribed"){
    global $show_modal_display;
    $show_modal_display = true;
    include '../includes/login-modal.php';
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

    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <style>
        ::placeholder {
            color: black;
            font-size: 24px;
            font-weight: lighter;
            font-family: Arial, sans-serif;
        }

        body {
            font-family: Roboto, Helvetica, sans-serif;
        }

        .hide-sign {
            display: none;
        }

        iframe {
            border: none !important;

        }

        @media all and (min-width: 1023px) {
            iframe {
                width: 100%;

            }
        }

        @media all and (max-width: 400px) {
            iframe {
                width: 100%;

            }
        }

        @media all and (min-width: 768px) {
            iframe {
                width: 100%;

            }
        }

        @media all and (min-width: 1024px) {
            iframe {
                width: 100%;

            }
        }
        @media screen and (max-width: 480px) {

        }
    </style>
    <?php
    if($show_modal_display == true) {
        echo '<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
          integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
          integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
          integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
          crossorigin="anonymous"></script>';
    }
    ?>
    <script>
        <?php
        if($show_modal_display == true) {

            echo '$(document).ready(function(){
  $("#loginModal").modal("show");
	});';
        }
        ?>
    </script>

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

<header class="header">
    <nav class="navbar sticky navbar-expand-lg bg-white text-black">
        <!--    <a href="#" class="ml-2 d-none d-lg-block mr-5"><img src="../assets/images/first-time-here.webp" height="50" alt=""></a>-->
        <div onclick="toggleSideMenu()" class="hamburger d-block d-lg-none d-flex flex-column">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <a class="navbar-brand" href="..index"><img src="../assets/images/logo.webp" height="50"
                                                    alt="The Spark logo"></a>
        <!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--      <span class="navbar-toggler-icon"></span>-->
        <!--    </button>-->
        <div class="d-block d-lg-none"></div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-3 active">
                    <a class="nav-link" href="../magazine/">Magazine</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="#">Masterclass</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="../academy">Academy</a>
                </li>
                        <li class="nav-item mx-3">
          <a class="nav-link" href="https://thesparkng.com/hub">Hub</a>
        </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="../about">About</a>
                </li>
            </ul>
            <div>
                <a href="/connect">
                    <button class="bg-tert glow-btn mx-3">
                        Connect
                    </button>
                </a>
            </div>
            <form class="form-inline m-2 my-lg-0">
                <!--        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->

                <div id="user-profile"> <img src="./assets/images/person.svg" class="mx-2 menu-action" alt=""></div>
                <img src="../assets/images/search.svg" class="mx-2 menu-action" alt="">
                <!--        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            </form>
        </div>
    </nav>
    <nav id="mobile-side-menu" class="w-100 menu-shadow mobile-side-menu">
        <div class="d-flex w-100 py-1 px-3 align-items-center justify-content-between">
            <a class="navbar-brand" href="../"><img src="/assets/images/logo.webp" height="50"
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
            <li class="nav-item my-1 mx-4 active ">
                <a class="nav-link" href="../magazine/">Magazine</a>
            </li>
            <li class="nav-item my-1 mx-4">
                <a class="nav-link" href="#">Masterclass</a>
            </li>
            <li class="nav-item my-1 mx-4">
                <a class="nav-link" href="../academy">Academy</a>
            </li>
                    <li class="nav-item mx-4">
                <a class="nav-link" href="https://thesparkng.com/hub">Hub</a>
            </li>
            <li class="nav-item my-1 mx-4">
                <a class="nav-link" href="../about">About</a>
            </li>
        </ul>
        <div class="my-5 mx-2">
            <a href="/connect">
                <button class="bg-tert glow-btn mx-3">
                    Connect
                </button>
            </a>
        </div>
    </nav>
</header>

<div class="wrapper">

    <div class="bg-dark-grey py-2 py-md-3 py-lg-5">
        <div class="owl-carousel owl-carousel1 owl-theme" id="slider-videos"></div>
    </div>
    <div class="d-flex justify-content-center p-4">
        <div>
            <script src="https://apis.google.com/js/platform.js"></script>
<!---->
<!--            <div class="g-ytsubscribe" data-channel="thesparkng" data-layout="default" data-count="hidden"></div>-->
        </div>
    </div>
    <div class="container mb-4">
        <div>
            <h2 class="h4">CATEGORIES</h2>
            <hr/>
        </div>

        <div class="my-2 py-2">
            <span class="button-main px-4 py-2 br-0-8">
                TEASERS
            </span>
        </div>

        <div class="row my-4">
            <div class="owl-carousel owl-carousel2 owl-theme" id="teasers"></div>
        </div>

        <div class="mt-3">
            <div class="my-2 py-2">
            <span class="button-main px-4 py-2 br-0-8">
                ALL VIDEOS
            </span>
            </div>
        </div>


        <div id="video-container" class="row">
        </div>


    </div>

    <div></div>
    <?php
    include '../footer.php'
    ?>
    <script src="https://apis.google.com/js/api.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script>
        const sliderVideos = document.getElementById("slider-videos")
        fetch('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCvM5B0L3miF0bzc4NRaGKGw&maxResults=6&order=date&type=video&key=AIzaSyDSJzb6-0LFpqYtVSDXgBUNjsnDaoM2ooc')
            .then(response => response.json())
            .then(data => {
                data.items.forEach(item => {
                    let videoId = item.id.videoId;
                    let thumbnail = item.snippet.thumbnails.high.url;
                    let output = `<div class="">
                    <iframe  width="560"
  height="315"
  src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}.cover{
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100%;
                max-height: 100%;
                filter: brightness(90%);}a{text-decoration: none; outline: none; border: none} .play-btn img{width: 100%} div{position:absolute;width:100%;bottom:0;}div{height:1.5em;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black; display: inline-block; width: 1.5em;

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); }</style><a href=https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0><img class='cover'  src=${thumbnail} alt=''><div class='play-btn'><img src='http://thesparkng.com/home/watch/play-button.png'/></div></a>"
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
  allowfullscreen></iframe>
</div>
                </div>`
                    sliderVideos.innerHTML += output;
                })
            })
            .then(() => {
                $(document).ready(function () {
                    $(".owl-carousel1").owlCarousel();
                });
                let owl1 = $('.owl-carousel1');
                owl1.owlCarousel({
                    items: 3,
                    margin: 10,
                    video: true,
                    lazyLoad: true,
                    center: true,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        600: {
                            items: 2,
                            nav: false
                        },
                        1000: {
                            items: 3,
                            nav: false,
                            loop: true
                        }
                    },
                    autoplay: true,
                    loop: true,
                    autoplayTimeout: 4000,
                    autoplayHoverPause: true,
                });
                $('.play').on('click', function () {
                    owl1.trigger('play.owl.autoplay', [1000])
                })
                $('.stop').on('click', function () {
                    owl1.trigger('stop.owl.autoplay')
                })
            });

        const teaserVideos = document.getElementById("teasers")
        fetch('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCvM5B0L3miF0bzc4NRaGKGw&playlistid=PLdpM7AGv8Pziq5D9DGGaDCYLRq4PPv1uV&maxResults=10&order=date&type=video&key=AIzaSyDSJzb6-0LFpqYtVSDXgBUNjsnDaoM2ooc')
            .then(response => response.json())
            .then(data => {
                data.items.forEach(item => {
                    let videoId = item.id.videoId;
                    let thumbnail = item.snippet.thumbnails.high.url;
                    let output = `<div class="">
                    <iframe class="iframe" width="560"
  height="315"
  src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}.play-btn img{width: 100%}a{text-decoration: none; outline: none; border: none} .cover{position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    min-height: 100%;

filter: brightness(90%);}div{position:absolute;width:100%;bottom:0;}div{height:1.5em;font:48px/1.5 sans-serif;color: white;text-shadow:0 0 0.5em black; display: inline-block; width: 1.5em;
    margin: ition: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);}</style><a href=https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0><img  class='cover' src=${thumbnail} alt=''><div class='play-btn'><img src='http://thesparkng.com/home/watch/play-button.png'/></div></a>"
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
  allowfullscreen></iframe>
</div>

                </div>`
                    teaserVideos.innerHTML += output;

                })
            })
            .then(() => {
                $(document).ready(function () {
                    $(".owl-carousel2").owlCarousel();
                });
                let owl2 = $('.owl-carousel2');
                owl2.owlCarousel({
                    items: 3,
                    margin: 10,
                    video: true,
                    lazyLoad: true,
                    center: true,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        600: {
                            items: 2,
                            nav: false
                        },
                        1000: {
                            items: 3,
                            nav: false,
                            loop: true
                        }
                    },
                    autoplay: true,
                    loop: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                });
                $('.play').on('click', function () {
                    owl2.trigger('play.owl.autoplay', [1000])
                })
                $('.stop').on('click', function () {
                    owl2.trigger('stop.owl.autoplay')
                })
                $('.owl-nav > div').on('click', function () {
                    $('.owl-carousel2').trigger('stop.owl.autoplay');


                    //or more complicated (will work for one carousel only, or else use 'each'):
                    //EDIT: this one seems to work
                    var carousel = $('.owl-carousel2').data('owl.carousel');
                    carousel.settings.autoplay = false; //don't know if both are necessary
                    carousel.options.autoplay = false;
                    $('.owl-carousel2').trigger('refresh.owl.carousel');
                });
            });
    </script>
    <script>
        function authenticate() {
            return gapi.auth2.getAuthInstance()
                .signIn({scope: "https://www.googleapis.com/auth/youtube.readonly"})
                .then(function () {
                        console.log("Sign-in successful");
                    },
                    function (err) {
                        console.error("Error signing in", err);
                    });
        }

        function loadClient() {
            gapi.client.setApiKey("AIzaSyDSJzb6-0LFpqYtVSDXgBUNjsnDaoM2ooc");
            return gapi.client.load("https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest")
                .then(function () {
                        console.log("GAPI client loaded for API");
                    },
                    function (err) {
                        console.error("Error loading GAPI client for API", err);
                    });
        }

        // Make sure the client is loaded and sign-in is complete before calling this method.
        function execute() {
            return gapi.client.youtube.channels.list({
                "part": "snippet,contentDetails",
                "forUsername": "thesparkng"
            })
                .then(function (response) {
                        // Handle the results here (response.result has the parsed body).
                        console.log(response);
                        const channel = response.result.items[0];
                        const playlistId = channel.contentDetails.relatedPlaylists.uploads;
                        requestVideoPlaylist(playlistId);
                    },
                    function (err) {
                        console.error("Execute error", err);
                    });
        }

        gapi.load("client:auth2", function () {
            gapi.auth2.init({client_id: "248072596563-lsv9hvju07obf47kja0ah5nnisph57h6.apps.googleusercontent.com"});
        });

        function requestVideoPlaylist(playlistId) {
            const requestOptions = {
                playlistId: playlistId,
                part: 'snippet',
                maxResults: 12
            }
            const request = gapi.client.youtube.playlistItems.list(requestOptions);
            request.execute(response => {
                const playListItems = response.result.items;
                if (playListItems) {
                    let output = "";
                    playListItems.forEach(item => {
                        const videoId = item.snippet.resourceId.videoId;
                        let thumbnail = item.snippet.thumbnails.high.url;
                        output += `
                           <div class="col-12 my-1 px-0 px-md-2 col-md-6 col-lg-4">

<iframe width="560" class="iframe"
  height="315"
  src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}.play-btn img{width: 100%}a{text-decoration: none; outline: none; border: none}a{text-decoration: none; outline: none; border: none}   .cover{position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    min-height: 100%;

filter: brightness(90%);}div{position:absolute;width:100%;bottom:0;}div{height:1.5em;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black; display: inline-block; width: 1.5em;

    position: absolute;

    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);}</style><a href=https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0><img class='cover' src=${thumbnail} alt=''><div class='play-btn'><img src='http://thesparkng.com/home/watch/play-button.png'/></div></a>"
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
  allowfullscreen></iframe>
</div>
                        `
                    });
                    const videoContainer = document.getElementById("video-container");
                    videoContainer.innerHTML = output;
                }
            })
        }

        window.addEventListener("load", () => {
            loadClient().then(execute);
        })
    </script>

    <script>
        document.querySelector("#video-container").addEventListener("click", (evt) => {
            console.log(evt.target)
        })
        document.querySelector("#slider-videos").addEventListener("click", (evt) => {
            console.log(evt.target)
        })
        document.querySelector("#teasers").addEventListener("click", (evt) => {
            console.log(evt.target)
        })


    </script>
</div>
</body>
</html>