<?php
if (isset($_GET['deleteEvent'])) {
    $eventId = $_GET['eventId'];
} else {
    // Redirect if eventId is not provided
    header("Location: ../events.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Event Confirmation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
        .delete-confirm{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<?php include('../reusables/nav.php');?>
<div class="delete-confirm">
<h1>Delete Event Confirmation</h1>
    <p>Are you sure you want to delete this event?</p>
    <form method="POST" action="deleteEvent.php">
        <input type="hidden" name="eventId" value="<?php echo $eventId; ?>">
        <button type="submit" name="confirmDelete" class="btn btn-danger">Confirm Delete</button>
        <a href="../eventDetails.php/?eventId=<?php echo $eventId; ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
    
</body>
</html>
