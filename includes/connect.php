<?php
// Establishing connection to the database
$connect = mysqli_connect('sql311.infinityfree.com', 'if0_35758296', 'MAHkWClFt4KkT', 'if0_35758296_humberevents');

// Checking if connection is successful
if (!$connect) {
    // Display an error message and terminate the script if connection fails
    die("Connection failed: " . mysqli_connect_error());
}