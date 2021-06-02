<?php 

    include('config/db_connect.php');

?>


<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12">
                <h3 class="text-white text-center mt-4 pt-4">You are -</h3>
            </div>
            <div class="homepage-button col-10 col-md-4">
                <button type="button" class="btn btn-lg btn-outline-secondary btn-block"><a id="btn-text" href="student_ls.php">Student</a></button>
            </div>
            <div class="homepage-button col-10 col-md-4">
                <button type="button" class="btn btn-lg btn-outline-secondary btn-block"><a id="btn-text" href="recruiter_ls.php">Recruiter</a></button>
            </div>
        </div>    
    </div>


    <?php include('templates/footer.php'); ?>

</html>
