<?php 

    include('db_connect.php');

    session_start();

    if(isset($_SESSION["student_login"])){
        //check if student is already logged in, if yes, then redirect to ../studenthomepage.php
        header("Location: ../studenthomepage.php");
    }

    if(isset($_POST['sl_username'])){
        $uname = $_POST['sl_username'];
        $password = $_POST['sl_password'];

        $sql = mysqli_query($conn, "SELECT * FROM student_database WHERE s_email='".$uname."' AND s_password='".$password."' limit 1");

        

        if(mysqli_num_rows($sql)==1){
            $_SESSION["student_login"]=$uname;
            header("Location: ../studenthomepage.php");
            exit();
        } else{
            echo "You have entered incorrect password";
            exit();
        }
    }

?>