<?php require './includes/magazine-connection.php';
$magazine = "SELECT magazines.link, magazines.id, magazines.image_url, magazines.name FROM magazines ORDER BY date DESC LIMIT 5";
if ($results = mysqli_query($link, $magazine)) {
    if (mysqli_num_rows($results) > 0) {
        while ($result = mysqli_fetch_array($results)) {
            echo '<div class="px-4 mb-3">';
            echo '<a href="' . $result['link'] . '?id='. $result['id']. '">';
            echo ' <img  class="img-fluid" src="' . $result['image_url'] . '" alt="' . $result['name'] . '" />';
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