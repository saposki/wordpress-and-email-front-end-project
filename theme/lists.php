<?php
   // Get data from form and store in variables
    $fame = $_POST["team_name"];
    $title = $_POST["team_title"];
    $photo = $_POST["team_photo"];
    $description = $_POST["team_description"];

    // Database connection
    $conn = mysqli_connect("localhost","eaze-test-admin","admin","eaze_wp_test");
    if(!$conn) {
    die(‘Problem in database connection: ‘ . mysql_error());
    }

    // Data insertion into database
    $query = "INSERT INTO ‘eaze_wp_test’.’eaze_team_list’ ( ‘fname’, ‘title’, ‘photo’, ‘description’ )
               VALUES ( $fname, $title, $photo, $description )";
    mysqli_query($conn, $query);

    // Redirection to the success page
    header("Location: http://localhost:8888/eaze_wp_test/team/");

?>
