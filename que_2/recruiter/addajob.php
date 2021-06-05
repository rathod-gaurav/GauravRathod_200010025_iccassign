<?php 

    include('../config/db_connect.php');

?>

<?php 

    session_start();

    if(!isset($_SESSION['recruiter_login'])){
        header("Location: ../recruiter_ls.php");
    } else{ 
?>
    <div class="text-white ml-3 mt-3 mb-3">
    Welcome,
    <?php 
        echo $_SESSION['recruiter_login'];
    
    }
    ?>
    </div>
    

<!DOCTYPE html>
<html lang="en">

    <?php include('../templates/header.php'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-9 order-md-last">
                <h4 class="text-white text-right mt-4">Add a Job Profile</h4>
                <div class="card bg-light mt-3 mb-3">
                    <div class="card-header text-black text-left col-10 col-md-12"><strong>Please Enter the Details Below.</strong></div>
                    <div class="card-body row justify-content-center">
                        <form action="../config/addajob_actions.php" method="POST" class="container">
                            <div class="form-group mt-3 mb-3 pr-3 pl-3 row justify-content-center">
                                <label for="company_name" class="text-black text-left col-10 col-md-4"><strong>Company Name:</strong></label>
                                <input type="text" class="form-control col-10 col-md-8" id="company_name" name="company_name" placeholder="Name of your Organization.">
                            </div>
                            <div class="form-group mt-3 mb-3 pr-3 pl-3 row justify-content-center">
                                <label for="job_title" class="text-black text-left col-10 col-md-4"><strong>Job Title:</strong></label>
                                <input type="text" class="form-control col-10 col-md-8" id="job_title" name="job_title" placeholder="Work Designation.">
                            </div>
                            <div class="form-group mt-3 mb-3 pr-3 pl-3 row justify-content-center">
                                <label for="job_description" class="text-black text-left col-10 col-md-4"><strong>Job Description:</strong></label>
                                <input type="text" class="form-control col-10 col-md-8" id="job_description" name="job_description" placeholder="Work location, duration, stipend(if any), etc.">
                            </div>
                            <div class="form-group mt-3 mb-3 pr-3 pl-3 row justify-content-center">
                                <label for="job_requirements" class="text-black text-left col-10 col-md-4"><strong>Job Requirements:</strong></label>
                                <textarea class="form-control col-10 col-md-8" id="job_requirements" name="job_requirements" rows="4" placeholder="Give any requirements suited for your job profile."></textarea>
                            </div>
                            <div class="form-group mt-3 pt-3 mb-0 pr-3 pl-3 row justify-content-center">
                            <button type="submit" name="job_submit" class="btn btn-outline-success btn-block">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-3 order-md-first">
                <div class="card mt-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="nav-link" href="recruiterProfile.php">My Profile</a></li>
                        <li class="list-group-item"><a class="nav-link" href="../recruiterhomepage.php">Home</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Applicants' List</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Updates</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Facing an issue?</a></li>
                        <li class="list-group-item"><a class="nav-link" href="config/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>


    <?php include('../templates/footer.php'); ?>

</html>