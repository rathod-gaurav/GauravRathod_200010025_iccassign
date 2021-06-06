<?php 

    include('../config/db_connect.php');

    include('../config/jobsDBconnection.php');


?>

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


<!DOCTYPE html>
<html lang="en">

    <?php include('../templates/header.php'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-9 order-md-last">
                <h4 class="text-white text-right mt-4">Apply Now</h4>

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
                            <div class="card-footer card-action">
                                
                            </div>
                        </div>

                        <?php 
                    
                    }

                        ?>
                

                <?php 
                    $email = $_SESSION['student_login'];

                    $query = "SELECT * FROM student_database where s_email = '".$email."'";
                    $query_run = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($query_run)){
                        ?>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-left">Your Registered Details</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>

                                <tbody class="text-white">
                                    <tr>
                                        <th>Name</th>
                                        <td><?php echo $row['s_fullname']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $row['s_email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Registration date and time</th>
                                        <td><?php echo $row['s_created_at']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <?php 
                    
                    }

                        ?>

                <form action="apply.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group text-left mt-3 mb-3">
                        <label for="resume" class="text-white mr-3">Upload Resume</label>
                        <input type="file" name="file" id="resume">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" name="applynow" class="btn btn-success"><strong>Apply Now!</strong></button>
                    </div>
                </form>


            </div>
            <div class="col-10 col-md-3 order-md-first">
                <div class="card mt-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="nav-link" href="studentProfile.php">My Profile</a></li>
                        <li class="list-group-item"><a class="nav-link" href="../studenthomepage.php">Home</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">My Resume</a></li>
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



