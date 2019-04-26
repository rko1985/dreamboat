<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
<div class="container">
<?php include("includes/functions.php"); ?>


<?php 

if(isset($_POST['sendEmail'])){
    
    $to = "koonzeli@gmail.com";
    $to2 = "russelloyama@gmail.com";
    $subject = "You Got a Message From DreamBoat";
    $header = "From: " . $_POST['email'];
    $message = $_POST['message'];

    mail($to,$subject,$message,$header);
    mail($to2,$subject,$message,$header);

    echo "<div class='alert alert-success' role='alert'>Your Message Has Been Sent!</div>";
}


?>

<div class="row my-5">
    <div class="col-lg-8 mx-auto mb-4">
        <div class="card card-body bg-light">
        <form action="" method="post">
            <h1 class="text-center">Contact Us</h1>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Enter your message here"required></textarea>
            </div>

            <div class="form-group">
            <input class="form-control btn btn-primary" type="submit" name="sendEmail" value="Send Message">
            </div>

        </form>
        </div>
    </div>
</div>






</div>

<?php include("includes/footer.php"); ?>