<header class="header">
    <nav class="navbar sticky navbar-expand-lg">
        <!--    <a href="#" class="ml-2 d-none d-lg-block mr-5"><img src="./assets/images/first-time-here.webp" height="50" alt=""></a>-->
        <div onclick="toggleSideMenu()" class="hamburger d-block d-lg-none d-flex flex-column">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <a class="navbar-brand" href="https://www.thesparkng.com/home"><img src="./assets/images/logo.webp" height="50" alt="The Spark logo"></a>
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
                    <a class="nav-link" href="about">About</a>
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
            <a class="navbar-brand" href="https://www.thesparkng.com/home"><img src="./assets/images/logo.webp" height="50" alt="The Spark logo"></a>
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
                <a class="nav-link" href="https://masterclass.thesparkng.com">Masterclass</a>
            </li>
            <li class="nav-item my-1 mx-4">
                <a class="nav-link" href="http://icons.thesparkng.com/">Icons</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link" href="#">Hub</a>
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
