<?php
include_once '../includes/db_con.php';
$search = mysqli_real_escape_string($mysqli, $_POST['search']);
$magsNewCount = $_POST['magsNewCount'];

$sql = "SELECT *,  magazines.id as magId, articles.link as artLink FROM magazines INNER JOIN article_contributors INNER JOIN articles WHERE name LIKE '%$search%' OR article_title LIKE '%$search%' or contributor_name LIKE '%$search%' LIMIT 10";
$results = mysqli_query($mysqli, $sql);
if ($results) {
    if (mysqli_num_rows($results) >= 0) {
        while ($result = mysqli_fetch_array($results)) {
            echo '<div class="border-bottom py-4">';
            echo '<a href="' . $result['artLink'] . '">';
            echo '<h4 class="text-capitalize font-weight-bold h5 " style="color: #4b4b4b">' . $result['article_title'] . '</h4></a>';
            echo '<div class="small text-pry text-uppercase">   <a target="_blank" href="https://www.thesparkng.com/home/magazine/toc?id=' . $result['magId'] . '">';
            echo '<div>'.$result['name'].'</div> </a>';
            echo '<div class="mt-1 small text-dark">'.$result['contributor_name'].'</div>';
            echo '</div></div>';
        }
    }
} else {
    echo "ERROR: Could not execute $search. " . mysqli_error($sql);
}
