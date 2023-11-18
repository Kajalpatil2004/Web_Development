<?php
include("php/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $student_id = (isset($_POST["student_id"])) ? intval($_POST["student_id"]) : 0;
    $first_name = mysqli_real_escape_string($con, $_POST["first_name"]);
    $last_name = mysqli_real_escape_string($con, $_POST["last_name"]);
    $enrollment_number = mysqli_real_escape_string($con, $_POST["enrollment_number"]);
    $birth_date = mysqli_real_escape_string($con, $_POST["birth_date"]);
    $age = intval($_POST["age"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $mobile_number = mysqli_real_escape_string($con, $_POST["mobile_number"]);
    $gender = mysqli_real_escape_string($con, $_POST["gender"]);
    $address = mysqli_real_escape_string($con, $_POST["address"]);

    // Update data in the database using prepared statement
    $sql = "UPDATE students 
            SET 
                first_name=?, 
                last_name=?, 
                enrollment_number=?, 
                birth_date=?, 
                age=?, 
                email=?, 
                mobile_number=?, 
                gender=?, 
                address=? 
            WHERE 
                student_id=?";  // Change 'id' to 'student_id'

    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssssissssi", $first_name, $last_name, $enrollment_number, $birth_date, $age, $email, $mobile_number, $gender, $address, $student_id);

        if (mysqli_stmt_execute($stmt)) {
            echo "<p class='para'>Update successful!</p>";
            // You can redirect the user to a confirmation page or wherever you like.
            // header("Location: confirmation.php");
        } else {
            echo "<p class='para-w'>Error: " . mysqli_error($con) . "</p>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<p class='para-w'>Error: " . mysqli_error($con) . "</p>";
    }
}
?>
