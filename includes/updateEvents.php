<?php
// Connection string
include ('connect.php');
// Check if the form for editing destination is submitted
if (isset ($_POST['updateEvent'])) {
    // Retrieve data from the form
    $eventId =$_POST['eventId'];
    $eventName = $_POST['eventName'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $timing = $date . ' ' . $startTime;
    $endTime = new DateTime($endTime); // Create DateTime object from end time
    $endTime->setDate(date('Y', strtotime($timing)), date('m', strtotime($timing)), date('d', strtotime($timing))); // Set the same date as $timing
    $endtiming = $endTime->format('Y-m-d H:i:s'); 
    $price = $_POST['price'];
    $categories = $_POST['categories'];
    $eventPoster = $_POST['eventPoster'];
    $guestSpeaker = $_POST['guestSpeaker'];
    $speakerDetail = $_POST['speakerDetail'];
    $speakerImage = $_POST['speakerImage'];
    $registrationLimit = $_POST['registrationLimit'];
    $email = $_POST['email'];
    $images = $_POST['images'];

    // SQL query to update destination into the database
    $query = "UPDATE events SET eventName='$eventName', location='$location', description='$description', 
    timing='$timing', price='$price', categories='$categories', 
    eventPoster='$eventPoster', guestSpeaker='$guestSpeaker', speakerDetail='$speakerDetail', 
    speakerImage='$speakerImage', registrationLimit='$registrationLimit', email='$email', images='$images'
    WHERE eventId='$eventId'";

    $event = mysqli_query($connect, $query);
    if ($event) {
        header("Location: /eventDetails.php/?eventId=".urlencode($eventId));
    } else {
        echo "Error" . mysqli_error($connect);
    }
} else {
    echo "You shouldn't be here!";
}
mysqli_close($connect);
