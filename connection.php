<?php
$connection = mysqli_connect("localhost", "root", "uncrn#241JMN", "stud_checklist");

// Check connection
if ($connection === false) {
    die("Error: Could not connect. " . mysqli_connect_error());
}

?>
