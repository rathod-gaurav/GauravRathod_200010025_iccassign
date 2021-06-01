<?php 
//connect to database
$conn = mysqli_connect('localhost', 'Gaurav', 'Test58o2#', 'icc_assignment_question_1');

//check the connection
if(!$conn){
    echo "database connection error" . mysqli_connect_error();
}

//write query for all comments
$sql = 'SELECT * FROM Comments'; //Comments = name of table in the database

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

//     //free result from memory
    mysqli_free_result($result);

//     //close the connection
    mysqli_close($conn)

// include('config/db_connect.php');

//     //write query for all comments
//     $sql = 'SELECT * FROM Comments ORDER BY created_at'; //Comments = name of table in the database

//     //make query and get result
//     $result = mysqli_query($conn, $sql);

//     //fetch the resulting rows as an array
//     $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

//     //free result from memory
//     mysqli_free_result($result);

//     //close the connection
//     mysqli_close($conn)

//     //printing the results
//     //print_r($comments)

?>


