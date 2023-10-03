<?php

include("connection.php");

if(isset($_POST['Register']))

{
    
    $person_id = mysqli_real_escape_string($conn, $_POST['person_ID']);
    $date_visited = mysqli_real_escape_string($conn, $_POST['date_visited']);
    $time_in = mysqli_real_escape_string($conn, $_POST['time_In']);
    $time_out = mysqli_real_escape_string($conn, $_POST['time_Out']);


    // Get the current date and time
     $query = "INSERT INTO visitor_log (person_ID, date_visited, time_In, time_Out) VALUES ('$person_id', '$date_visited', '$time_in', '$time_out')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Recorded Successfully";
        header("Location: dashboard1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error";
        header("Location: student-create.php");
        exit(0);
    }
}




            
                      
            

            mysqli_close($conn);
    





?>



?>