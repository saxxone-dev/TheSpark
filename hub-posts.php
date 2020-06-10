<?php
$cachefile = 'caching_folder/cachedpage.html';
$cachetime = 86400 * 7;
// Serve from the cache if it is younger than $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    include($cachefile);
    exit;
}
ob_start(); // Start the output buffer
?>
    <div class="my-5">
      <h3 class="text-center mb-5">Must-Read Posts</h3>
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
              echo '<span class="text-uppercase d-block my-1 text-16">' .  $category[0]["name"]  . '</span>';
              echo '<a href="' . $datum["link"] . '"><h4 class="text-16 text-dark mb-3">' . $datum["title"]["rendered"] . '</h4></a>';
              echo '<a/>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
          }
          ?>


      </div>

    </div>

<?php
// Cache the output to a file
$fp = fopen($cachefile, 'w');
fwrite($fp, ob_get_contents());
fclose($fp);
ob_end_flush(); // Send the output to the browser