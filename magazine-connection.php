<?php
$link = mysqli_connect("localhost", "thespar3_hubdb", "RZdjyEUUKnC32K", "thespar3_magazines", "3306");
// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
