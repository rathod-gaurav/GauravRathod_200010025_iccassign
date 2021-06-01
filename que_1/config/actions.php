<?php

    include('db_connect.php');

    $fullname = $email = $addcomment = '';
    $errors = array('fullname' => '' , 'email' => '', 'addcomment' => '');

    // if(isset($_GET['submit'])){
    //     echo $_GET['fullname'];
    //     echo $_GET['addcomment'];
    // }

    if(isset($_POST['submit'])){

        $get_fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $get_email = mysqli_real_escape_string($conn, $_POST['email']);
        $get_addcomment = mysqli_real_escape_string($conn, $_POST['addcomment']);

        //check fullname
        if(empty($_POST['fullname'])){
            $errors['fullname'] = "This field required!";
        } else{
            $fullname = $_POST['fullname'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $fullname)){
                $errors['fullname'] = "Full Name must not include any special character!";
            }
        }
        
        //check email
        if(empty($_POST['email'])){
            $errors['email'] = "This field required! <br />";
        } else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Invalid Email!";
            }
        }

        //check comment
        if(empty($_POST['addcomment'])){
            $errors['addcomment'] = "This field required! <br />";
        }
     //end of post check



    if(array_filter($errors)){
        // echo 'There are errors in the form';
    } else{
        // echo 'form is valid';

        //create sql
        $sql = "INSERT INTO Comments(fullname,email,comment) VALUES('$get_fullname', '$get_email', '$get_addcomment')";

        //save to database and check
        if(mysqli_query($conn, $sql)){
            //success
            header("Location: ../index.php");  
        }
        else{
            echo "query error: " . mysqli_error($conn);
        }
    }
    }
?>