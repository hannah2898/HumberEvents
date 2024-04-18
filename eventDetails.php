<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <title>Humber Events</title>
        <!-- social media icon styling -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    .event{
        max-width: 1200px; /* Set maximum width for .event */
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: start;
        gap: 10px;
    }
    .event-container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }
    .icons i{
        color:#004B78;
        
    }
    .icons{
        margin-top: 50px;
        /*   */
        display: flex;
        justify-content: end;
        gap: 10px;
        
    }
    .event-description{
        display: flex;
        flex-direction: column;
        justify-content: end;
        align-items: end;
        align-self: center;
        gap: 50px;
    }
    
    .image-container{
        margin-top: -20px;
        width: 100%;
        max-width: 1200px;
        max-height: 480px;
        overflow: hidden;
        position: relative;
        display: flex; 
        justify-content: center; 
        align-items: center;
       
    }
    .event-image{
        width: 100%;
    height: auto; /* Allow the image to scale proportionally */
    max-height: 100%; /* Limit image height to container's max height */
    object-fit: contain; 
    }
    .more-button{
            margin-left: 180px;
            background-color: #006D9C;
            color: white;
        }
    .event-title{
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        gap: 20px;
        width: 100%;
    }
    .event-details{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    .more-details{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .event-poster{
        width: 250px;
    }
    .info-content{
        display: flex;
        gap: 20px;
    }
   .details{
    font-weight: 600;
   }
   .registrationLimit{
    color: #666666;
    font-size: 12px;
    margin-top: -10px;
   }
   .guest-info{
    display: flex;
    gap: 50px;
    align-items: center;
    
   }
   .specialGuest{
    font-weight:600;
    margin-bottom: 20px;
   }
   .guestSpeaker{
    font-weight: 600;
   }
   .guest-container {
    width: 100px; /* Adjust size of circular container */
    height: 100px; /* Adjust size of circular container */
    border-radius: 50%; /* Create circular shape */
    overflow: hidden; /* Hide overflow content (to maintain circle shape) */
}

.guest-container img {
    width: 100%; /* Ensure image fills circular container */
    height: 100%; /* Ensure image fills circular container */
    object-fit: cover; /* Scale up the image to cover the circular area */
    object-position: center /* Cover the circular area with the image */
}
.sim-event{
    display: flex;
    flex-wrap: wrap; /* Ensure cards wrap to the next line */
    gap: 20px;
    margin-left: 110px;
    justify-content: start;
}
.similar-heading{
    padding-top: 50px;
    padding-bottom: 20px;
}
.card{
            max-width: 500px;
        }
        .col{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .month{
            text-transform: uppercase;
            font-weight: 700;
            font-size: 16px;
            color: #006D9C;
        }
        .day{
            font-size: 16px;
        }
        .event-card{
            display: flex;
            gap:20px;
            max-width: 500px;
        }
        .more-button{
            margin-top: -20px;
            margin-right: 20px;
            background-color: #006D9C;
            font-size: 10px;
            color: white;
        }
        .btn-button{
            background-color: #006D9C;
            color: white;
        }
        .similar-events {
            width: 100%;
            height: 100%;
    max-width: 500px; /* Set maximum width for the card */
    max-height: 300px; /* Set maximum width for the card */
    margin-bottom: 20px; /* Add bottom margin for spacing between cards */
    border: 1px solid #ddd; /* Add border for visual separation */
    border-radius: 8px; /* Add border radius for rounded corners */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add subtle box shadow for depth */
}
.img-size{
    max-width: 500px; /* Set maximum width for the card */
    max-height: 150px;
}
.card-body {
    padding: 10px; /* Add padding inside the card body */
}
.card-title {
    font-size: 16px; /* Adjust the font size of the card title */
    margin-bottom: 5px; /* Add bottom margin below the card title */
    width: 100%;
}
.card-text {
    font-size: 10px; /* Adjust the font size of the card text */
    line-height: 1.2;
    width: 100%; /* Increase line height for readability */
}
.event-detail{
    width: 100%;
}
.getupdates{
            display: flex;
            background-color: #DEB407;
            padding: 20px;
            border-radius: 6px;
            justify-content: space-around;
            align-items: center;
            margin: auto;
            margin-bottom: 50px;
            margin-top: 20px;
            width: 800px;

        }
        .getupdates-input{
            border: 0px;
            border-radius: 5px;
        }
    .buttons{
        margin-top: 20px;
        display: flex;
        gap: 50px;
        justify-content: center;
        align-items: center;
    }
</style>
    </head>
    <body>
    
        <?php include('reusables/nav.php');
        if((isset($_GET['events']))||(isset($_GET['eventId']))){
            $eventId = $_GET['eventId'];
           
            // Establish database connection
            include('includes/connect.php');
            
            $query = "SELECT *
                    FROM events 
                    WHERE eventId = $eventId";
            $event = mysqli_query($connect, $query);
            if($event){
                // Fetch event details
                $eventRow = mysqli_fetch_assoc($event);
                $eventName = $eventRow['eventName'];
                $location = $eventRow['location'];
                $description = $eventRow['description'];
                $timing = strtotime($eventRow['timing']); // Convert timing string to timestamp
                $month = date('M', $timing); // Get month abbreviation (e.g., Apr)
                $day = date('d', $timing);
                $time = date('h:i A', $timing); 
                $year = date('Y', $timing);
                $weekday = date('l', $timing);
                $endtiming = strtotime($eventRow['endtiming']);
                $endtime = date('h:i A', $endtiming); 
                $price = $eventRow['price'];
                $formattedPrice = number_format($price, 2);
                $registrationLimit = $eventRow['registrationLimit'];
                $images = $eventRow['images'];
                $email = $eventRow['email'];
                $categories = $eventRow['categories'];
                $guestSpeaker = $eventRow['guestSpeaker'];
                $speakerDetail = $eventRow['speakerDetail'];
                $speakerImage = $eventRow['speakerImage'];
                $eventPoster =$eventRow['eventPoster'];
                echo '
                <div class="event-container">
                    <div class="event">
                        <div class="event-description">
                            <div class="icons">
                                <i class="far fa-heart fa-lg"></i>
                                <i class="fas fa-share-alt fa-lg"></i>
                            </div>
                            <div class="image-container">
                                <img class="event-image" src="'.$images.'" alt="event-image">
                            </div>
                        </div>
                        <div class="event-title">
                                <h3>'.$eventName.'</h3>
                                <button class="btn btn-button">Tickets</button>
                        </div>
                        <div class="event-desc">
                            <p>'.$description.'</p>
                        </div>
                        <div class="event-details">
                            <div class="more-details">
                                <div class="info">
                                    <div class="info-content">
                                        <img src="/icons/calendar.png" alt="calender icon" width=30px height=30px>
                                        <h5 class="details">'.$weekday.', '.$month.' '.$day.', '.$year.'</h5>
                                    </div>
                                    <div class="info-content">
                                        <img src="/icons/time.png" alt="time icon" width=30px height=30px>
                                        <h5 class="details">'.$time.' to '.$endtime.'</h5>
                                    </div>
                                    <div class="info-content">
                                        <img src="/icons/map.png" alt="location icon" width=30px height=30px>
                                        <h5 class="details">'.$location.'</h5>
                                    </div>
                                    <div class="info-content">
                                        <img src="/icons/price.png" alt="price icon" width=30px height=30px>
                                        <div class="price">
                                            <h5 class="details">$'.$formattedPrice.'</h5>
                                            <p class="registrationLimit">Tickets remaining : '.$registrationLimit.'</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="guest">
                                    <h3 class="specialGuest">Special Guest</h3>
                                    <div class="guest-info">
                                        <div class="guest-container">
                                            <img src="'.$speakerImage.'" alt="speaker image">
                                        </div>
                                        <div class="guest-desc">
                                            <h6 class="guestSpeaker">'.$guestSpeaker.'</h6>
                                            <p>'.$speakerDetail.'</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="poster">
                            <img class="event-poster" src="'.$eventPoster.'" alt="event-image">
                            </div>
                        </div>
                        <h3 class="similar-heading">Similar Events</h3>
                        </div>
                        </div>     
                ';
                
            $query1="SELECT *
            FROM events 
            WHERE categories = '$categories'
            AND eventId != '$eventId'";
            $similarEvents = mysqli_query($connect, $query1);
            if($similarEvents){
                echo '<div class="sim-event row-cols-1 row-cols-md-3">';
                foreach ($similarEvents as $similarEvent) {
                    $timing = strtotime($similarEvent['timing']); // Convert timing string to timestamp
                    $month = date('M', $timing); // Get month abbreviation (e.g., Apr)
                    $day = date('d', $timing);
                    echo '
            <div class="col">
                <div class="card similar-events">
                    <!--event image -->
                    <img src="' . $similarEvent['images'] . '" class="card-img-top img-sizing img-fluid img-size" alt=" image" style="object-fit: cover;">
                    <div class="card-body event-card">
                        <div class="date">
                            <h4 class=" month">' . $month . '</h4>
                            <h4 class="day">' . $day . '</h4>
                        </div>
                        <div class="event-detail">
                            <h4 class="card-title">' . $similarEvent['eventName'] . '</h4>
                            <p class="card-text">' . $similarEvent['description'] . '</p>
                        </div>
                        </div>
                        <!-- Form to view more details -->
                        <form method="GET" action="eventDetails.php">
                            <!-- Hidden input field to pass eventDetails -->
                            <input type = "hidden" name = "eventId" value = "' . $similarEvent['eventId'] . '">
                            <!-- Button to submit the form -->
                            <button type="submit" name="events" class="btn more-button">More Details</button>
                        </form>
                    
                </div>
            </div>
            ';}

            }
            else{
                echo '<h3>There are currently no similar events happening at Humber</h3>';
            }
            }
            
            }?>
                </div>
        </div>
        </div>
        <div class="getupdates">
            <h5>Get updates by mail</h5>
            <input type="text" class="getupdates-input">
        </div>
    </body>
    <?php include('reusables/footer.php') ?>
</html>