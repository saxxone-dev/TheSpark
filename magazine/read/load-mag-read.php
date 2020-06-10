<?php
include_once '../includes/magazine-connection.php';
$magsNewCount = $_POST['magsNewCount'];
$mag_read_url = 'https://www.thesparkng.com/home/magazine/read?id=';
$magazines = "SELECT * FROM magazines ORDER BY date DESC LIMIT $magsNewCount";
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