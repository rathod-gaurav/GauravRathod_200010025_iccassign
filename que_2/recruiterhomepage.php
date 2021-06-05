<?php 

    include('config/db_connect.php');

    include('config/jobsDBconnection.php');

?>

<?php 

    session_start();

    if(!isset($_SESSION['recruiter_login'])){
        header("Location: recruiter_ls.php");
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

    <?php include('templates/header.php'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-9 order-md-last">
                <h4 class="text-white text-right mt-4">My Posted Jobs</h4>
                <?php foreach($jobs as $job){ ?>
                    <div class="card bg-light mt-3 mb-3">
                        <div class="card-header text-black text-left"><strong><?php echo htmlspecialchars($job['company_name']); ?></strong> <small> at <?php echo htmlspecialchars($job['created_at']); ?></small></div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($job['job_title']); ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($job['job_description']); ?></h6>
                            <h6 class="card-subtitle mt-2 text-muted">Requirements: </h6><p class="card-text"><?php echo htmlspecialchars($job['job_requirements']); ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="recruiter/jobresponses.php?id=<?php echo $job['id']; ?>" class="card-link">View Applicants' list.</a>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="col-10 col-md-3 order-md-first">
                <div class="card mt-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="nav-link" href="recruiter/recruiterProfile.php">My Profile</a></li>
                        <li class="list-group-item"><a class="nav-link" href="recruiter/addajob.php">Add a Job</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Applicants' List</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Updates</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Facing an issue?</a></li>
                        <li class="list-group-item"><a class="nav-link" href="config/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>


    <?php include('templates/footer.php'); ?>

</html>