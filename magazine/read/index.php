<?php
session_start();
$current_mag="";
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $_SESSION["mid"] = $_GET["id"];
    $id = $_GET["id"];
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) {
        include_once '../includes/db_con.php';
        $id = $mysqli->escape_string($_GET["id"]);
        $results = $mysqli->query("SELECT * FROM magazines WHERE id=$id");
        
        if ($results) {
            if (mysqli_num_rows($results) > 0) {
                $result = mysqli_fetch_array($results);
                global $current_mag;
                $current_mag = $result['file_url'];
            }
        }
    } else {
        include '../includes/login-modal.php';
        $show_modal = true;
    }
} else {
    header("location: https://www.thesparkng.com/home/magazine/");
}

?>


<!doctype html>

<html lang="en">
<head>
  <title>The Spark | Ignite. Connect. Achieve</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta name="description"
        content="The Spark is a Social Enterprise. We engage, enlighten and empower millions across Africa, connecting them to financial and non-financial resources.">
  <link href="../../assets/images/favicon.png" rel="icon" type="image/png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--  <link rel="stylesheet" href="/assets/css/bootstrap.css">-->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/responsive.css">
  
  <script src="../../assets/js/jquery.min.js"></script>
  <?php 
  if($show_modal == true) {
  echo '
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
          integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
          integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
          crossorigin="anonymous"></script>';
  }
  ?>
  <style>
    .bottom-bar-wrap {
      position: fixed;
      bottom: 0;
      width: 100%;
    }
.hide-sign {display: none;}
    .bottom-bar {
      background-color: rgba(51, 51, 51, 0.84);
      color: #fff;
      padding: 1rem;
      width: 100%;
    }

    #next-page, #prev-page {
      cursor: pointer;
    }

    #next-page:hover, #prev-page:hover {
      opacity: 0.9;
    }

    .error {
      background-color: orangered;
      color: white;
      padding: 1rem;
    }

    .zoom-controls span {
      cursor: pointer;
      width: 30px;
      height: 30px;
    }

    .zoom-controls span:hover {
      background-color: #6c6c6c;
    }

    .zoom-buttton {
      width: 25px;
    }

    #prev-page svg {
      width: 30px;
    }

    #next-page svg {
      width: 30px;
    }

    #page-num {
      width: 40px;
      margin: 0 10px;
      background-color: #6c6c6c;
      color: white;
      border: none;
      padding: 0 0 0 4px;
    }

    .magazine-container {
      width: 100vw;
      height: 100vh;
      background-color: #333;
      overflow: auto;
      text-align: center;
    }

    .magazine-container::-webkit-scrollbar {
      width: 6px;
      background-color: #000000;
    }

    .magazine-container::-webkit-scrollbar-thumb {
      background-color: #F5F5F5;
      border-radius: 10px;
    }

    .magazine-container::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      background-color: #000000;
    }

    .magazine-container {
      width: 100vw;
    }

    canvas {
      /*width: 100vw;*/

    }

    #load-progress {
      font-size: 20px;
      color: #767676;
      position: absolute;
      top: 0;
      left: 0;
    }

    .almost-done {
      color: #8f8f8f;
    }

    #share {
      cursor: pointer;
    }

    #mag-side-menu {
      background-color: #333;
    }

    .mag-hamburger {
      background-color: rgba(51, 51, 51, 0.76);
      position: fixed;
      z-index: 10000;
    }

    .mag-hamburger:active {
      background-color: rgba(62, 62, 62, 0.42);
    }

    .mag-side-list {
      overflow-y: scroll;
      height: calc(100% - 2rem);
    }

    .mag-side-list::-webkit-scrollbar {
      width: 16px;
      background-color: #000000;
    }

    .mag-side-list::-webkit-scrollbar-thumb {
      background-color: #F5F5F5;
      border-radius: 20px;
    }

    .mag-side-list::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      background-color: #000000;
      width: 6px;
    }
    iframe{
      width: 100vw;
      height: 100vh;
    }
    .mag-side-menu {
    background-color: #868686;
    position: absolute;
    top: 0;
    z-index: 10000;
    left: -100vw;
    height: 100vh;
    transition: all 500ms ease-out;
}

.mag-side-menu-open {
    position: absolute;
    top: 0;
    z-index: 10000;
    left: 0;
    height: 100vh;
    box-shadow: 100px 0 100px rgba(87, 87, 87, 0.2);
    transition: all 500ms ease-in-out;
}

#mag-side-menu li {
    padding-bottom: 10px;
    padding-top: 10px;
    border-bottom: 1px solid rgba(211, 211, 211, 0.17);
}
  </style>
  <script>
  <?php
  if($show_modal == true) {
  	
  echo '$(document).ready(function(){
  $("#loginModal").modal("show");
	});';
  }
  ?>
  
	</script>
	<script>
      function toggleSideMenu() {
          let sideMenu = document.querySelector('#mag-side-menu');
          sideMenu.classList.toggle("mag-side-menu-open");
          sideMenu.classList.toggle("mag-side-menu");
          console.log("clicked");
      }
      
      //load more magazines
        $(document).ready(function () {
            let magsCount = 4;
            $('#load').click(function () {
                magsCount = magsCount + 4;
                $('#magList').load("load-mag-read.php", {
                    magsNewCount: magsCount
                });
            })
        })
      
  </script>
</head>
<body>

<?php if (!$show_modal): ?>
  <div class="mag-hamburger p-3" onclick="toggleSideMenu()">
    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
      <path d="M0 0h24v24H0z" fill="none"/>
      <path fill="#ffffff" d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
    </svg>
  </div>
  <nav id="mag-side-menu" class="w-xs-90 w-md-50 w-lg-30 menu-shadow mag-side-menu">
    <div class="d-flex w-100 pt-2 px-1 align-items-center justify-content-between">
      <div><h2 class="font-weight-light text-white pl-2 h4"
                style="font-family: 'Roboto', Helvetica, TeXGyreHeros, Arial, sans-serif !important; font-weight: 400;">
          OUR MAGAZINES</h2></div>
      <div onclick="toggleSideMenu()" class="">
        <svg class="mx-2" fill="white" height="24px" viewBox="0 0 24 24" width="24px"
             xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path
              d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
        </svg>
      </div>
    </div>
    <div class="mag-side-list" id="magList">
        <?php
        include_once '../../magazine-connection.php';
        $mag_read_url = 'https://www.thesparkng.com/home/magazine/read?id=';
        $magazines = "SELECT * FROM magazines ORDER BY date DESC LIMIT 4";
        $results = mysqli_query($link, $magazines);
        if ($results) {
            if (mysqli_num_rows($results) >= 0) {
                while ($result = mysqli_fetch_array($results)) {
                    echo '<div class="col-12 px-3 my-3">';
                    echo '<a target="_blank" href="' . $mag_read_url . $result['id'] . '">';
                    echo ' <img  class="img-fluid shadow-thick" src="' . $result['image_url'] . '" alt="' . $result['name'] . '" />';
                    echo '</a>
      </div>';
                }
            }
        } else {
            echo "ERROR: Could not execute $magazines. " . mysqli_error($link);
        }
        // Close connection
        mysqli_close($link);
        ?>
       
    </div>
 <div class="text-center mb-4">
            <button class="bg-tert br-0-8" id="load" style="font-family: 'Roboto', Helvetica, TeXGyreHeros, Arial, sans-serif">Load More</button>
        </div>
  </nav>

  <?php echo '<iframe src="https://thesparkng.com/home/magazine/web/viewer.html?file='.$current_mag.'" style="border: none;"/>' ?>
<?php endif; ?>

<?php if (!$show_modal): ?>



  

<?php endif; ?>
</body>
</html>
