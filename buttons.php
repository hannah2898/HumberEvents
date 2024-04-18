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
                        <div class=button-align>
        <form method="GET" action="newEvents.php">
        <button type="submit" name="addEvent" class="btn btn-dark add-more">Add More</button>
        </form>
        </div>