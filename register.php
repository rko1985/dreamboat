<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
<div class="container">
<?php include("includes/functions.php"); ?>

<?php 

$error_array = [];

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];    

    //check if passwords match
    if($password1 != $password2) {
        array_push($error_array, "Your passwords do not match.");
    }

    //check if username exists already
    $query = "SELECT * FROM users WHERE username = '$username'";
    $user_exists_query = mysqli_query($connection, $query);
    if(mysqli_num_rows($user_exists_query) > 0){
        array_push($error_array, "Username already exists, please choose another username.");
    }

    //check if email exists already
    $query = "SELECT * FROM users WHERE email = '$email'";
    $email_exists_query = mysqli_query($connection, $query);
    if(mysqli_num_rows($email_exists_query) > 0){
        array_push($error_array, "Email already exists, please choose another email.");
    }


    if(empty($error_array)){
        $query = "INSERT INTO users (username, password, email, user_role) VALUES ('$username','$password1','$email','subscriber')"; 
        $create_user_query = mysqli_query($connection, $query);
        if($create_user_query){
            echo "<div class='alert-success text-center'>Accound created! Please <a href='login.php'>login!</a><br></div>";
        }
    }

    


}


?>




    <div class="container">
        <div class="row my-5">
            <div class="col-lg-6 mx-auto mb-4">
                <div class="card card-body bg-light">
                    <form action="" method="post">
                        <h1 class="text-center">Register</h1>
                        <div class="form-group">
                            <label for="username">Choose a Username:</label>
                            <input class="form-control" type="text"  name="username" required>
                        </div>
                        <?php if(in_array("Username already exists, please choose another username.", $error_array)){echo "<div class='alert alert-danger'>Username already exists, please choose another username.</div>";} ?>
                        <div class="form-group">
                            <label for="username">Choose a Password:</label>
                            <input class="form-control" type="password" name="password1" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Confirm Password:</label>
                            <input class="form-control" type="password" name="password2" required>
                        </div>
                        <?php if(in_array("Your passwords do not match.", $error_array)){echo "<div class='alert alert-danger'>Your passwords do not match.</div>";} ?>
                        <div class="form-group">
                            <label for="username">Enter your Email:</label>
                            <input class="form-control" type="email" name="email"  required>
                        </div>
                        <?php if(in_array("Email already exists, please choose another email.", $error_array)){echo "<div class='alert alert-danger'>Email already exists, please choose another email.</div>";} ?>

                        <input class="form-control btn btn-primary" type="submit" name="submit" value="Register">
                    </form>
                </div>  
            </div>
        </div>
    </div>

    


</div>

<?php include("includes/footer.php"); ?>