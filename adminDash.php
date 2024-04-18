<html>
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="hfttps://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- social media icon styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <!-- Popper.js library for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
        <style>
            .event-card{
                width: 1200px;
                display: flex;
                padding: 20px;
                justify-content: space-between;
                border: 1px solid #C8CCD0;
                border-radius: 12px;
                
            }
            .card-text{
                width: 800px;
            }
            .event-img{
                width: 300px;
            }
            .date{
                color: #006D9C;
                display: flex;
            }
            .date h6{
                padding-left: 5px;
            }
            .timing,.location,.guest{
                display: flex;
                gap: 20px;
                align-items: center;
            }
            .speaker{
                font-weight: bolder;
            }
            .guestSpeaker{
                margin-left: -10px;
            }
            .buttons{
        margin-top: 20px;
        display: flex;
        gap: 50px;
        justify-content: baseline;
        align-items: center;
    }
    .btn-button{
            background-color: #006D9C;
            color: white;
        }
        </style>
    </head>
    <body>
        <?php include('reusables/adminNav.php') ?>
        <div class="container">
            <div class="row mt-4">
                <h3 class="event-header">Humber Events</h3>
            </div>
            
            
            <?php
                // Establish database connection
                include('includes/connect.php');
                // Query to select all destinations
                $query = 'SELECT *
                FROM events
                ORDER BY timing;';
                // Execute the query
                $events = mysqli_query($connect, $query);
                echo '<div class="row row-cols-1 row-cols-md-2 g-4">';
                if($events){
        foreach ($events as $event) {
            $eventId = $event['eventId'];
            $timing = strtotime($event['timing']); // Convert timing string to timestamp
            $month = date('M', $timing); // Get month abbreviation (e.g., Apr)
            $day = date('d', $timing);
            $weekday = date('l', $timing);
            $year = date('Y', $timing);
            $eventName = $event['eventName'];
                $location = $event['location'];
                $description = $event['description'];
                $time = date('h:i A', $timing); 
                $endtiming = strtotime($event['endtiming']);
                $endtime = date('h:i A', $endtiming); 
                $price = $event['price'];
                $formattedPrice = number_format($price, 2);
                $registrationLimit = $event['registrationLimit'];
                $images = $event['images'];
                $email = $event['email'];
                $categories = $event['categories'];
                $guestSpeaker = $event['guestSpeaker'];
                $speakerDetail = $event['speakerDetail'];
                $speakerImage = $event['speakerImage'];
                $eventPoster =$event['eventPoster'];
            echo '
            <div class="col">
                <div class="event-card mb-4">
                    <div class="event-details">
                        <div class="date">
                                <h6 class="day">' . $weekday . ', </h6>
                                <h6 class="day">' . $day . ', </h6>
                                <h6 class="month">' . $month . ', </h6>
                                <h6 class="year">' . $year . ' </h6>
                                
                        </div>
                        <div class="event-title mb-2">
                            <h4 class="card-title">' . $eventName . '</h4>
                        </div>
                        <div class="event-desc mb-3">
                            <p class="card-text">' . $description . '</p>
                        </div>
                        <div class="timing mb-3">
                            <img src="/icons/time.png" alt="time icon" width=30px height=30px>
                            <h5 class="details">'.$time.' to '.$endtime.'</h5>
                        </div>
                        <div class="location mb-3">
                            <img src="/icons/map.png" alt="location icon" width=30px height=30px>
                            <h5 class="details">'.$location.'</h5>
                        </div>
                        <div class="guest mb-3">
                            <h6 class ="speaker">Guest Speaker |</h6> 
                            <h6 class="guestSpeaker">'.$guestSpeaker.','.$speakerDetail.'</h6>
                        </div>
                        <div class="buttons">
                            <div class="deleteBtn">
                                <form method="GET" action="/includes/deleteconfirm.php">
                                    <input type = "hidden" name = "eventId" value = "' . $eventId . '">
                                    <button type="submit" class="btn btn-button" name="deleteEvent">
                                        Delete Event
                                    </button>
                                   
                                </form>
                            </div>
                            <div class="updateBtn">
                                <form method="GET" action="/updateEvent.php">
                                <!-- Hidden input field to pass DestinationID -->
                                <input type = "hidden" name = "eventId" value = "' .  $eventId  . '">
                                <!-- Button to submit the form -->
                                <button type="submit" name="updateEvent" class="btn btn-button">Update Event</button>
                            </form>
                            </div>
                        
                        </div>
                    </div>
                    <div class="event-img">
                        <img src="' . $images . '" class="card-img-top img-sizing img-fluid" alt=" image" width=100px>
                    </div>
                </div>';
                    }
                    echo '</div></div>';
                }
                else{
                    echo '<h3>There are currently no similar events happening at Humber</h3>';
                }
                 
                ?>
        </div>
        

    </body>
</html>