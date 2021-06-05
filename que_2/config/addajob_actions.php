<?php 

    include('db_connect.php');

    if(isset($_POST['job_submit'])){
        $get_company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
        $get_job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
        $get_job_description = mysqli_real_escape_string($conn, $_POST['job_description']);
        $get_job_requirements = mysqli_real_escape_string($conn, $_POST['job_requirements']);

        //assuming user submits a valid form
        //echo 'form is valid!

        //create sql
        $sql = "INSERT INTO jobs_database(company_name,job_title,job_description,job_requirements) VALUES('$get_company_name', '$get_job_title', '$get_job_description', '$get_job_requirements')";

        //save to database and check
        if(mysqli_query($conn, $sql)){
            //success
            header("Location: ../recruiterhomepage.php");
        } else{
            echo "query error: " . mysqli_error($conn);
        }
    }

?>