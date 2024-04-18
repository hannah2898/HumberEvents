<?php
// Check if the form for adding new destinations is submitted
if (isset($_POST['newEvent'])) {
    // Retrieve data from the form
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

    // Connection string
    include('../includes/connect.php');

    // SQL query to insert new destination into the database
    $query = "INSERT INTO events (eventName, location, description, timing, endtiming, price, categories, eventPoster, guestSpeaker, speakerDetail, speakerImage, registrationLimit,email,images)
     VALUES ('$eventName', '$location', '$description', '$timing','$endtiming', '$price','$categories', '$eventPoster','$guestSpeaker','$speakerDetail', '$speakerImage','$registrationLimit','$email','$images')";

    // Execute the query
    $event = mysqli_query($connect, $query);

    // Check if the query was successful
    if ($event) {
        // Redirect to the destination details page with the DestinationID in the URL
        header("Location: ../events.php");
    } else {
        // Display error message if the query fails
        echo "Failed" . mysqli_error($connect);
    }
} else {
    // Display error message if the form submission is unexpected
    echo "You should not be here!";
}
