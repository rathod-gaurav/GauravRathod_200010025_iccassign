<?php 

    include('db_connect.php');

    //write query for all jobs
    $sql = 'SELECT * FROM jobs_database'; //select all entries from the database table "jobs_database"

    //make query and get result
    $result = mysqli_query($conn, $sql);

    //fetch the reslting row as an array
    $jobs = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
    // mysqli_free_result($result);

    //close the connection
    // mysqli_close($conn);

?>