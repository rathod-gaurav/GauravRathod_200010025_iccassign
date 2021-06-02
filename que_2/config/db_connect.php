<?php 
    //connect to database
    $conn = mysqli_connect('localhost', 'Gaurav', 'Test58o2#', 'icc_assignment_question_2');

    //check the connection
    if(!$conn){
        echo "database connection error" . mysqli_connect_error();
    }
?>