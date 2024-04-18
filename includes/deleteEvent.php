<?php
if (isset ($_POST['confirmDelete'])) {
    $eventId = $_POST['eventId'];
    //Connection string
    include ('connect.php');
    $query = "DELETE FROM events WHERE `eventId`='$eventId'";
    $event = mysqli_query($connect, $query);
    if ($event) {
        header("Location: ../events.php");
    } else {
        echo "Failed" . mysqli_error($connect);
    }
}
 else {
    echo "You should not be here!";
}