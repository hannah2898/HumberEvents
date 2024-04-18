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
       
        
        .searchbar{
            background-color: #D9D9D9;
            color: #706D6D;
            padding: 8px;
            padding-left: 20px;
            border: 0px;
            border-radius: 5px;
            width: 800px;
        }
        .searchbar-form{
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        .categories{
            display: flex;
            flex-wrap: wrap;
            gap: 90px;
            justify-content: center;
            align-items: center;
            align-self: center;
        }
        .category-name{
            width: 100px;
            text-align: center;
        }
        .categories-header, .ongoing-header{
            padding-top: 50px;
            padding-left: 80px;
            padding-bottom: 20px;
        }
        .card{
            width: 500px; /* Set the width of the card */
            max-width: 100%; /* Ensure the card does not exceed the specified width */
            height: 100%; /* Set the height of the card */
            border-radius: 10px; /* Add border radius for rounded corners */
            overflow: hidden; /* Hide overflow content (e.g., image) if it exceeds card boundaries */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add box shadow for depth */
        }
        .card-text {
            font-size: 14px;
        }
        .card-title{
            font-size: 20px;
        }
        .img-sizing {
    width: 100%; /* Ensure the image fills the entire width of the card */
    height: 60%; 
    object-fit: cover; 
    /* overflow: hidden; Scale and crop the image to cover the entire card */
}
        .col{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .month{
            text-transform: uppercase;
            font-weight: 600;
            color: #006D9C;
        }
        .event-card{
            display: flex;
            gap:50px;
        }
        .more-button{
            margin-left: 180px;
            background-color: #006D9C;
            color: white;
            font-size: 14px;
        }
        .add-more{
            background-color: #006D9C;
            color: white;
            margin-left: 600px;
            margin-top: 50px;
            border: 0px;
        }
        .getupdates{
            display: flex;
            background-color: #DEB407;
            padding: 20px;
            border-radius: 6px;
            justify-content: space-around;
            align-items: center;
            margin: 50px;
            margin-bottom: 50px;

        }
        .getupdates-input{
            border: 0px;
            border-radius: 5px;
        }
        .category-img img:hover{
            opacity: 0.75;
        }
        
        @media (max-width: 568px) {
            .events-page{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .categories {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 2 columns */
            gap: 20px; /* Gap between items */
            width: 100%;
        }
        .category-item{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .searchbar{
            width: 390px;
        }
            .getupdates{
                width: 90%;
               
            }
            .categories-header,.ongoing-header{
            margin: auto;
            padding-left: 15px;
        }
        .add-more{
            margin-left: 0px;
            margin-top: 50px;
        }
        }
        
    </style>
</head>
<body>
    <?php include('reusables/nav.php') ?>
    <div class="events-page">
    <form class="searchbar-form" action="/search" method="GET">
        <input class="searchbar" type="text" name="searchbar" id="searchbar" placeholder="Search">
    </form>
    <h3 class="categories-header">Explore Categories</h3>
    <div class="categories">
        <div class="category-item">
            <a class="category-img" href="#"><img src="/images/Entertainment.png" alt="Entertainment" width=100px></a>
            <p class="category-name">Entertainment</p>
        </div>
        <div class="category-item">
            <a class="category-img" href="#"><img src="/images/Educational & Business.png" alt="Educational & Business" width=100px></a>
            <p class="category-name">Educational & Business</p>
        </div>
        <div class="category-item">
            <a class="category-img" href="#"><img src="/images/Cultural & Arts.png" alt="Cultural & Arts" width=100px></a>
            <p class="category-name">Cultural & Arts</p>
        </div>
        <div class="category-item">
            <a class="category-img" href="#"><img src="/images/Sports & Fitness.png" alt="Sports & Fitness" width=100px></a>
            <p class="category-name">Sports & Fitness</p>
        </div>
        <div class="category-item">
            <a class="category-img" href="#"><img src="/images/Technology & Innovation.png" alt="Technology & Innovation" width=100px></a>
            <p class="category-name">Technology & Innovation</p>
        </div>
        <div class="category-item">
            <a class="category-img" href="#"><img src="/images/Travel & Adventure.png" alt="Travel & Adventure" width=100px></a>
            <p class="category-name">Travel & Adventure</p>
        </div>
    </div>
    <h3 class="ongoing-header">Ongoing Events</h3>
    <div class="container">
    <?php
        // Establish database connection
        include('includes/connect.php');
        // Query to select all destinations
        $query = 'SELECT *
        FROM events
        WHERE MONTH(timing) = MONTH(CURRENT_DATE())
        AND YEAR(timing) = YEAR(CURRENT_DATE())
        ORDER BY timing;';
        $query1 = 'SELECT *
        FROM `events`
        WHERE MONTH(`timing`) > MONTH(CURRENT_DATE())
        OR YEAR(`timing`) > YEAR(CURRENT_DATE());';
        // Execute the query
        $events = mysqli_query($connect, $query);
        $upcoming_events = mysqli_query($connect,$query1);
        // Check for database connection errors
        if (mysqli_connect_error()) {
            die("Connection error: " . mysqli_connect_error());
        }
        if($events==null){
            echo'<h4>No ongoing events hosted at Humber currently</h4>';
        }
        else
        {
            // Display events in a grid layout
        echo '<div class="row row-cols-1 row-cols-md-2 g-4">';
        foreach ($events as $event) {
            $timing = strtotime($event['timing']); // Convert timing string to timestamp
            $month = date('M', $timing); // Get month abbreviation (e.g., Apr)
            $day = date('d', $timing);
            echo '
            <div class="col">
                <div class="card">
                    <!--event image -->
                    <img src="' . $event['images'] . '" class="card-img-top img-sizing img-fluid" alt=" image" >
                    <div class="card-body event-card">
                        <div class="date">
                            <h4 class="month">' . $month . '</h4>
                            <h4 class="day">' . $day . '</h4>
                        </div>
                        <div class="event-detail">
                            <h4 class="card-title">' . $event['eventName'] . '</h4>
                            <p class="card-text">' . $event['description'] . '</p>
                        </div>
                    </div>
                        <!-- Form to view more details -->
                        <form method="GET" action="eventDetails.php">
                            <!-- Hidden input field to pass eventDetails -->
                            <input type = "hidden" name = "eventId" value = "' . $event['eventId'] . '">
                            <!-- Button to submit the form -->
                            <button type="submit" name="events" class="btn more-button">More Details</button>
                        </form>
                </div>
            </div>';
        }
        echo '</div></div>'; // Close the grid layout

        }
        if( $upcoming_events==null){
            echo'<h4>No upcoming events currently</h4>
            <p>Please check again later</p>';
        }
        // Button to add more attractions
        else{
            echo'<h3 class="ongoing-header">Upcoming Events</h3>
            <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">';
            foreach ($upcoming_events as $event) {
                $timing = strtotime($event['timing']); // Convert timing string to timestamp
                $month = date('M', $timing); // Get month abbreviation (e.g., Apr)
                $day = date('d', $timing);
                echo '
                <div class="col">
                    <div class="card">
                        <!--event image -->
                        <img src="' . $event['images'] . '" class="card-img-top img-sizing img-fluid" alt=" image">
                        <div class="card-body event-card">
                            <div class="date">
                                <h4 class="month">' . $month . '</h4>
                                <h4 class="day">' . $day . '</h4>
                            </div>
                            <div class="event-detail">
                                <h4 class="card-title">' . $event['eventName'] . '</h4>
                                <p class="card-text">' . $event['description'] . '</p>
                            </div>
                        </div>
                            <!-- Form to view more details -->
                            <form method="GET" action="eventDetails.php">
                                <!-- Hidden input field to pass eventDetails -->
                                <input type = "hidden" name = "eventId" value = "' . $event['eventId'] . '">
                                <!-- Button to submit the form -->
                                <button type="submit" name="events" class="btn more-button">More Details</button>
                            </form>
                    </div>
                </div>  
            ';
        }
    }
   
        echo
        ' </div>
        </div>
        ';
        ?>
        <div class="getupdates">
            <h5>Get updates by mail</h5>
            <input type="text" class="getupdates-input">
        </div>
    </div>
    </div>

    </div>
    </body>
<?php include('reusables/footer.php') ?>
</html>
