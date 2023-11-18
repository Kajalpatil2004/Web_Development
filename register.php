<?php
session_start();
include("php/connection.php");

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the student ID and event ID from the form
    $student_id = $_POST["student_id"];
    $event_id = $_POST["event_id"];

    // Check if the student and event exist in the database
    $check_student_query = "SELECT * FROM students WHERE student_id = $student_id";
    $check_event_query = "SELECT * FROM events WHERE event_id = $event_id";

    $student_result = mysqli_query($con, $check_student_query);
    $event_result = mysqli_query($con, $check_event_query);

    // Check if the student and event exist
    if (mysqli_num_rows($student_result) > 0 && mysqli_num_rows($event_result) > 0) {
        // Insert data into the event_registrations table
        $insert_query = "INSERT INTO event_registrations (student_id, event_id, registration_date)
                         VALUES ($student_id, $event_id, NOW())";

        if (mysqli_query($con, $insert_query)) {
            echo "<p class='success-para'>Registration successful!</p>";
        } else {
            echo "<p class='para-w'>Error: " . mysqli_error($con) . "</p>";
        }
    } else {
        echo "<p class='para-w'>Student or event not found.</p>";
    }
}
?>

<!-- HTML form for event registration -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your CSS styles here -->
    <!-- Include your stylesheet links -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Add your event registration form here -->
    <form action="register.php" method="post">
    <div class="input-group">
    <label>Student ID:</label>
    <input type="text" placeholder="Student ID" name="student_id" required>
</div>
<div class="input-group">
    <label>Event ID:</label>
    <input type="text" placeholder="Event ID" name="event_id" required>
</div>

        <button type="submit" class="submit-button" name="submit">Register for Event</button>
    </form>
</body>
</html>
