<?php 

    include('db_connect.php');

    if(isset($_POST['sr_submit'])){
        $get_sr_fullname = mysqli_real_escape_string($conn, $_POST['sr_fullname']);
        $get_sr_email = mysqli_real_escape_string($conn, $_POST['sr_email']);
        $get_sr_password = mysqli_real_escape_string($conn, $_POST['sr_password']);

        //assuming user submits a valid form
        //echo 'form is valid!

        //create sql
        $sql = "INSERT INTO student_database(s_fullname,s_email,s_password) VALUES('$get_sr_fullname', '$get_sr_email', '$get_sr_password')";

        //save to database and check
        if(mysqli_query($conn, $sql)){
            //success
            header("Location: ../student_ls.php");
        } else{
            echo "query error: " . mysqli_error($conn);
        }
    }

?>