<?php
include('DB_Config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $courseID = 1;
    $instructorID = 1; 
    $roomID = 1; 

    // Get data from the HTML form
    $courseCode = $_POST['course_code'];
    $instructorID = $_POST['instructor'];
    $roomID = $_POST['room'];
    $schedule = $_POST['schedule'];

    // Create an SQL INSERT statement for your class table
    $insertRegistrationSQL = "INSERT INTO class (CourseID, InstructorID, RoomID, Schedule)
                              VALUES ('$courseID', '$instructorID', '$roomID', '$schedule')";

    // Execute the INSERT statement
    if ($db_connect->query($insertRegistrationSQL) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $insertRegistrationSQL . "<br>" . $db_connect->error;
    }

    // Close the database connection
    $db_connect->close();
}
?>
