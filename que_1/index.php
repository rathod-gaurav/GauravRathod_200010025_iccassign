<?php 
    include('add.php');

?>



<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <?php foreach($comments as $comment){ ?>
                    <div class="card bg-dark mt-3 mb-3">
                        <div class="card-header text-white text-left"><strong><?php echo htmlspecialchars($comment['fullname']); ?></strong> <small> at <?php echo htmlspecialchars($comment['created_at']); ?></small></div>
                        <div class="card-body">
                            <blockquote class="blockquote mt-4 mb-4">
                                <footer class="blockquote-footer text-left text-white">
                                    <cite title="Source Title">"<?php echo htmlspecialchars($comment['comment']); ?>"</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-12 col-md-4">
                <div class="card bg-dark mt-3 mb-3">
                    <div class="card-header text-white text-center"><strong>Add a Comment!</strong></div>
                    <div class="card-body">
                        <form action="config/actions.php" method="POST">
                            <div class="form-group mt-3 mb-3">
                                <label for="name" class="text-white">Name:</label>
                                <input type="text" class="form-control" id="name" name="fullname" placeholder="Your Full Name!">
                                <div class="feedback"><?php include('config/actions.php'); echo $errors['fullname']; ?></div>
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label for="add_email" class="text-white">Email:</label>
                                <input type="text" class="form-control" id="add_email" name="email" placeholder="Your Email!">
                                <div class="feedback"><?php include('config/actions.php'); echo $errors['email']; ?></div>
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label for="my_comment" class="text-white">Your Comment:</label>
                                <textarea class="form-control" id="my_comment" name="addcomment" rows="4" placeholder="Type in your comment!"></textarea>
                                <div class="feedback"><?php include('config/actions.php'); echo $errors['addcomment']; ?></div>
                            </div>
                            <div class="form-group text-center mb-0">
                                <button type="submit" name="submit" class="btn btn-outline-info">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </div>


    <?php include('templates/footer.php'); ?>

</html>
