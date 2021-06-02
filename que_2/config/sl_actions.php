<?php 

    include('db_connect.php');

    if(isset($_POST['sl_submit'])){
        //assuming user submits a valid form
        //validating credentials

        //validating username/email
        $sql = "SELECT id, s_email, s_password FROM student_database WHERE s_email = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            //Bind variables to prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            //set parameters
            $param_username = trim($_POST['sl_username']);
            $hashed_sl_password = $_POST['sl_password']; 

            //Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                //store result
                mysqli_stmt_store_result($stmt);

                //check if username exists, if yes, then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    //bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $s_email, $s_password);

                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($s_password, $hashed_sl_password)){
                            //Password is correct, so start new session by redirecting user to studenthomapage.php
                            header("Location: ../studenthomepage.php");
                        } else{
                            //Password is invalid, display a error message
                            echo "password incorrect";
                        }
                    }
                } else{
                    //Username invalid : username doesn't exist in database
                    echo "Invalid Username or Password";
                }
            } else{
                echo "Oops! Something went wrong. Please try again.";
            }

            //close statement
            mysqli_stmt_close($stmt);
        }

        //close connection
        mysqli_close($conn);
    }

?>
