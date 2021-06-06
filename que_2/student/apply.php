<?php 

    session_start();

    if(!isset($_SESSION['student_login'])){
        header("Location: ../student_ls.php");
    } else{ 
?>
    <div class="text-white ml-3 mt-3 mb-3">
    Welcome,
    <?php 
        echo $_SESSION['student_login'];
    
    }
    ?>
    </div>








<?php 

    include('../config/db_connect.php');

    include('../config/jobsDBconnection.php');

    if(isset($_POST['applynow'])){

        $job_id = mysqli_real_escape_string($conn, $_GET['id']);

        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];


        //allow only pdf/doc files 
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('pdf', 'docx');

        if(in_array($fileActualExt, $allowed)){

            if($fileError === 0){
                if($fileSize < 1000000){
                    //if size < 1000000kilobytes
                    $fileNameNew = uniqid('', true).".".$fileActualExt; //save uploaded file as a unique one.

                    //destination to upload file
                    $fileDestination = 'resumes/'.$fileNameNew;

                    //upload file from temporary to permanent location
                    move_uploaded_file($fileTmpName, $fileDestination);

                    $email = $_SESSION['student_login'];

                    $query = "SELECT * FROM student_database where s_email = '".$email."'";
                    $query_run = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($query_run)){ ?>
                        <?php
                        $sql = "UPDATE student_database SET appliedFor=TRUE WHERE s_email='".$email."'"; 
                        if(mysqli_query($conn, $sql)){
                            //success
                            header("Location: ../studenthomepage.php?applicationSuccess");
                        }
                        echo $row['appliedFor']; ?>
                    <?php }

                    //header("Location: ../studenthomepage.php?applicationSuccess");

                } else{
                    echo "Your file is too big!";
                }

            } else{
                echo "There was an error uploading your file. Please try again later.";
            }

        } else{
            echo "Only .pdf and .docx files allowed";
        }
        

        


        // $sql = "INSERT INTO student_database(appliedFor) VALUES(TRUE)";

        // if(mysqli_query($conn, $sql)){
        //     //success
        //     header("Location: ../studenthomepage.php?applicationSuccess");
        // }
        






        
        // //file name with a random number so that similar don't get replaced
        // $pname = rand(1000,1000)."-".$_FILES["file"]["name"];

        // //temporary file name to store file
        // $tname = $_FILES["file"]["tmp_name"];

        // //upload directory path
        // $uploads_dir = 'resumes';

        // //to move uploaded file to a specific location
        // move_uploaded_file($tname, $uploads_dir.'/'.$pname);

        // //sql query to insert into database


        // header("Location: ../studenthomepage.php");

        
    }

?>


