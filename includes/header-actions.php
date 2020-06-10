<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $ref_url = "https://";
    $ref_url .= $_SERVER['HTTP_HOST'];
    $ref_url .= $_SERVER['REQUEST_URI'];
} else {
    $ref_url = "http://";
    $ref_url .= $_SERVER['HTTP_HOST'];
    $ref_url .= $_SERVER['REQUEST_URI'];
}
?>
<div id="header-action" class="header-action bg-black br-0-6 hidden shadow p-3">
    <div id="profile">
        <?php
        if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) or (isset($_COOKIE['spark-user-access']) && $_COOKIE['spark-user-access'] == "subscribed")) {
            echo ' <form class=" d-flex align-items-center cursor-pointer logout" action="/home/includes/logout-script.php?referto=' . $ref_url . '" method="post">
 <div class="pr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path fill="white"
                              d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
                    </svg>
                </div>
            <button id="logout" type="submit" name="logout-submit" class="bg-transparent border-0 text-white">LOGOUT</button>
        </form>';
        }
        ?>

        <?php
        if (!isset($_COOKIE['spark-user-access']) or $_COOKIE['spark-user-access'] != "subscribed") {
            echo ' <a href="/home/connect"><div class=" d-flex align-items-center cursor-pointer login">
 <div class="pr-3"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="white"/><path d="M0 0h24v24H0z" fill="none"/></svg></div>
            <div>LOG IN</div>
            
        </div></a>';
        }
        ?>


    </div>

</div>
<script src="https://www.thesparkng.com/home/assets/js/script.js"></script>