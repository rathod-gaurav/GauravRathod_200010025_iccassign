<?php 

    include('db_connect.php');

    if(isset($_POST['rr_submit'])){
        $get_rr_fullname = mysqli_real_escape_string($conn, $_POST['rr_fullname']);
        $get_rr_email = mysqli_real_escape_string($conn, $_POST['rr_email']);
        $get_rr_password = mysqli_real_escape_string($conn, $_POST['rr_password']);

        //assuming user submits a valid form
        //echo 'form is valid!

        //create sql
        $sql = "INSERT INTO recruiter_database(r_fullname,r_email,r_password) VALUES('$get_rr_fullname', '$get_rr_email', '$get_rr_password')";

        //save to database and check
        if(mysqli_query($conn, $sql)){
            //success
            header("Location: ../recruiter_ls.php");
        } else{
            echo "query error: " . mysqli_error($conn);
        }
    }

?>