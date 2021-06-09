<?php 

    include('../config/db_connect.php');

    include('../config/jobsDBconnection.php');

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
                <h4 class="text-white text-right mt-4">View Applicants' List</h4>
                
                <?php 
                    $id = mysqli_real_escape_string($conn, $_GET['id']);

                    $query = "SELECT * FROM jobs_database where id = '".$id."'";
                    $query_run = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($query_run)){
                        ?>

                        <div class="card bg-light mt-3 mb-3">
                            <div class="card-header text-black text-left"><strong><?php echo htmlspecialchars($row['company_name']); ?></strong> <small> at <?php echo htmlspecialchars($row['created_at']); ?></small></div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['job_title']); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($row['job_description']); ?></h6>
                                <h6 class="card-subtitle mt-2 text-muted">Requirements: </h6><p class="card-text"><?php echo htmlspecialchars($row['job_requirements']); ?></p>
                            </div>
                            <div class="card-footer card-action"></div>
                        </div>

                        <?php 
                    
                    }

                        ?>

                <?php 
                
                    $query = "SELECT * FROM student_database";

                    $result = mysqli_query($conn, $query);

                    $applicants = mysqli_fetch_all($result, MYSQLI_ASSOC);

                ?>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <th class="text-left">Applicants and their details</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody class="text-white">
                            <?php foreach($applicants as $applicant){ ?>
                                <?php if($applicant['appliedFor'] == $id){ ?>
                                    
                                    <tr>
                                        <th><?php echo $applicant['s_fullname']; ?></th>
                                        <td><?php echo $applicant['s_email']; ?></td>
                                    </tr>

                                <?php } ?>


                            <?php } ?>
                        </tbody>
                    
                    </table>
                    
                    
                </div>    

            </div>
            <div class="col-10 col-md-3 order-md-first">
                <div class="card mt-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="nav-link" href="recruiterProfile.php">My Profile</a></li>
                        <li class="list-group-item"><a class="nav-link" href="addajob.php">Add a Job</a></li>
                        <li class="list-group-item"><a class="nav-link" href="../recruiterHomepage.php">Home</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Updates</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Facing an issue?</a></li>
                        <li class="list-group-item"><a class="nav-link" href="../config/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>


    <?php include('../templates/footer.php'); ?>

</html>