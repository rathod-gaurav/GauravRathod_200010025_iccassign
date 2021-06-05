<?php 

    include('db_connect.php');

    session_start();

    if(isset($_SESSION["recruiter_login"])){
        //check if student is already logged in, if yes, then redirect to ../studenthomepage.php
        header("Location: ../recruiterhomepage.php");
    }

    if(isset($_POST['rl_username'])){
        $uname = $_POST['rl_username'];
        $password = $_POST['rl_password'];

        $sql = mysqli_query($conn, "SELECT * FROM recruiter_database WHERE r_email='".$uname."' AND r_password='".$password."' limit 1");

        

        if(mysqli_num_rows($sql)==1){
            $_SESSION["recruiter_login"]=$uname;
            header("Location: ../recruiterhomepage.php");
            exit();
        } else{
            echo "You have entered incorrect password";
            exit();
        }
    }

?>