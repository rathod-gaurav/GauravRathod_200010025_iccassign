<?php 

    include('config/db_connect.php');

?>


<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-10">
                <h4 class="text-white text-center mb-4"><strong>Student Page</strong></h4>
            </div>
            <div class="col-10 col-md-4">
                <div class="card bg-secondary mt-3 mb-3 card-left">
                    <div class="card-header bg-dark text-white text-center"><strong><small>New user?</small> SignUp</strong></div>
                    <div class="card-body">
                        <form action="config/sr_actions.php" method="POST">
                            <div class="form-group mt-3 mb-3">
                                <label for="sr_name" class="text-white">Name:</label>
                                <input type="text" class="form-control" id="sr_name" name="sr_fullname" placeholder="Your Full Name!">
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label for="sr_email" class="text-white">Email:</label>
                                <input type="text" class="form-control" id="sr_email" name="sr_email" placeholder="Your Email!">
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label for="sr_password" class="text-white">Password:</label>
                                <input type="password" class="form-control" id="sr_password" name="sr_password" placeholder="Password.">
                            </div>
                            <div class="form-group text-center mb-0">
                                <button type="submit" name="sr_submit" class="btn btn-info"><strong>Signup!</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-4">
                <div class="card bg-secondary mt-3 mb-3 card-right">
                    <div class="card-header bg-dark text-white text-center"><strong><small>Existing User?</small> SignIn</strong></div>
                    <div class="card-body">
                        <form action="config/sl_actions.php" method="POST">
                            <div class="form-group mt-3 mb-3">
                                <label for="sl_username" class="text-white">Username:</label>
                                <input type="text" class="form-control" id="sl_username" name="sl_username" placeholder="Your username/Email!">
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label for="sl_password" class="text-white">Password:</label>
                                <input type="password" class="form-control" id="sl_password" name="sl_password" placeholder="Password.">
                            </div>
                            <div class="form-group text-center mb-0">
                                <button type="submit" name="sl_submit" class="btn btn-info"><strong>SignIn!</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('templates/footer.php'); ?>

</html>