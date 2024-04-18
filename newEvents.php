<!DOCTYPE html>
<html>

<head>
    
    <!-- Meta charset and title -->
    <meta charset="UTF-8" />
    <title>Add Events</title>
    <!-- social media icon styling -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="hfttps://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<style>
    body{
        background-color: #FBFCFD;
    }
    input{
        background-color: white;
    }
    .header{
        font-weight: 400;
    }
    label{
        font-weight: 600;
    }
    .title-box{
        border: 0px;
        border-bottom: 1px solid #616972;
        border-radius: 0px;
        background-color: #FBFCFD;
    }
    .title-box::placeholder {
        /* Set placeholder text color */
        color: #C8CCD0;
        font-weight: 600;
        /* Set placeholder text font size */
        font-size: 20px;
    }
    .input-group,.dateTime{
        display: flex;
    }
    .dateTime{
        gap:20px
    }
    .row-1,.row-3,.row-4{
        display: flex;
        justify-content: space-between;
    }
    .row-2{
        display: flex;
        justify-content: space-between;
        gap:30px
    }
    .row-1 input{
        width: 400px;
    }
    .row-2 input{
        width: 400px;
    }
    .row-3 input{
        width: 600px;
    }
    .row-4 input{
        width: 400px;
    }
    .row-2 select{
        width: 400px;
    }
    .btn-button{
        background-color: #006D9C;
        color: white;
        width: 100px;
        border: 0px;
    }
    form{
        margin-bottom: 50px;
    }
    .row-5{
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
</head>

<body>
<?php include('reusables/adminNav.php');?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-6 mt-4 mb-4 header">Create Event</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form action="includes/addEvents.php" method="POST">
                <div class="mb-3">
                        <label for="eventName" class="form-label">Event Title</label>
                        <input type="text" class="form-control title-box" id="eventName" name="eventName" aria-describedby="eventName" placeholder="Event Title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Event Details</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="6"required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="timing" class="form-label">Date & Time</label>
                        <div class="dateTime">
                            <div class="input-group mt-3">
                                <label for="date" class="input-group-text">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="input-group mt-3">
                                <label for="startTime" class="input-group-text">Start Time</label>
                                <input type="time" class="form-control" id="startTime" name="startTime" required>
                            </div>
                            <div class="input-group mt-3">
                                <label for="endTime" class="input-group-text">End Time</label>
                                <input type="time" class="form-control" id="endTime" name="endTime" required>
                            </div>
                        </div>
                    </div>
                    <div class="row-1">
                        <div class="mb-3">
                            <label for="location" class="form-label">Event Location</label>
                            <input type="text" class="form-control" id="location" name="location"
                                aria-describedby="Enter location" placeholder="Location"required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="registrationLimit" class="form-label">Set Registration Limit</label>
                            <input type="text" class="form-control" id="registrationLimit" name="registrationLimit" placeholder="Provide limit"
                                aria-describedby="registrationLimit"required>
                    </div>
                    </div>
                    <div class="row-2">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                                aria-describedby="price"required>
                        </div>
                        <div class="mb-3">
                        <label for="categories" class="form-label">Category</label>
                        <select class="form-select" id="categories" name="categories" aria-describedby="price"required>
                            <option value="">Select One</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Educational & Business">Educational & Business</option>
                            <option value="Cultural & Arts">Cultural & Arts</option>
                            <option value="Sports & Fitness">Sports & Fitness</option>
                            <option value="Technology & Innovation">Technology & Innovation</option>
                            <option value="Travel & Adventure">Travel & Adventure</option>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price"placeholder="in CAD"
                                aria-describedby="price"required>
                        </div>
                    </div>
                    <div class="row-3">
                        <div class="mb-3">
                            <label for="images" class="form-label">Image URL</label>
                            <input type="text" class="form-control" id="images" name="images"
                                aria-describedby="ImageURL"required>
                        </div>
                        <div class="mb-3">
                        <label for="eventPoster" class="form-label">Event Poster URL</label>
                        <input type="text" class="form-control" id="eventPoster" name="eventPoster"
                            aria-describedby="eventPoster"required>
                        </div>
                    </div>
                    <h3 class="header mb-3">Guest Details</h3>
                    <div class="row-4">
                        <div class="mb-3">
                            <label for="guestSpeaker" class="form-label">Guest Name</label>
                            <input type="text" class="form-control" id="guestSpeaker" name="guestSpeaker"
                                aria-describedby="guestSpeaker"required>
                        </div>
                        <div class="mb-3">
                            <label for="speakerDetail" class="form-label">Guest Description</label>
                            <input type="text" class="form-control" id="speakerDetail" name="speakerDetail"
                                aria-describedby="speakerDetail"required>
                        </div>
                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Guest Image URL</label>
                            <input type="text" class="form-control" id="speakerImage" name="speakerImage"
                                aria-describedby="speakerImage"required>
                        </div>
                    </div>
                    <div class="row-5">
                    <button type="submit" class="btn btn-button" name="newEvent">Submit</button>
                    </div>
                    
                    <!-- Submit button -->
                    
                </form>
            </div>
        </div>
    </div>

</body>
<?php include('reusables/footer.php') ?>
</html>