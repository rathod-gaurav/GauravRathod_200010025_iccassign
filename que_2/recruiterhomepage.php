<?php 

    include('config/db_connect.php');

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-9 order-md-last">
                <h4 class="text-white text-right mt-4">My Posted Jobs</h4>
                <div class="card bg-light mt-3 mb-3">
                    <div class="card-header text-black text-left"><strong>#Company Name</strong></div>
                    <div class="card-body">
                        <h5 class="card-title">Job Title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Job Description</h6>
                        <h6 class="card-subtitle mt-2 text-muted">Requirements: </h6><p class="card-text">Resume, good experience in HTML, CSS, Bootstrap, Javascript, and any relevant framework.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link">View applicants' list.</a>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-3 order-md-first">
                <div class="card mt-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="nav-link" href="#">My Profile</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Add a Job</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Applicants' List</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Updates</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Facing an issue?</a></li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>


    <?php include('templates/footer.php'); ?>

</html>