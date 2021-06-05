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
                <h4 class="text-white text-right mt-4 mb-4">My Profile</h4>

                <?php 
                    $email = $_SESSION['recruiter_login'];

                    $query = "SELECT * FROM recruiter_database where r_email = '".$email."'";
                    $query_run = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($query_run)){
                        ?>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th class="text-right">Your Registered Details</th>
                                    </tr>
                                </thead>

                                <tbody class="text-white">
                                    <tr>
                                        <th>Name</th>
                                        <td><?php echo $row['r_fullname']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $row['r_email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Registered on</th>
                                        <td><?php echo $row['r_created_at']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <?php 
                    
                    }

                        ?>
                

            </div>
            <div class="col-10 col-md-3 order-md-first">
                <div class="card mt-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="nav-link" href="../recruiterhomepage.php">Home</a></li>
                        <li class="list-group-item"><a class="nav-link" href="addajob.php">Add a Job</a></li>
                        <li class="list-group-item"><a class="nav-link" href="#">Applicants' List</a></li>
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