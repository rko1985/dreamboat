<?php include("includes/header.php"); ?>
<div class="container">
<?php include("includes/navbar.php"); ?>
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
        array_push($error_array, "Your passwords do not match<br>");
    }

    //check if username exists already
    $query = "SELECT * FROM users WHERE username = '$username'";
    $user_exists_query = mysqli_query($connection, $query);
    if(mysqli_num_rows($user_exists_query) > 0){
        echo "Username already exists, please choose another username<br>";
        array_push($error_array, "Username already exists, please choose another username<br>");
    }

    //check if email exists already
    $query = "SELECT * FROM users WHERE email = '$email'";
    $email_exists_query = mysqli_query($connection, $query);
    if(mysqli_num_rows($email_exists_query) > 0){
        echo "Email already exists, please choose another username<br>";
        array_push($error_array, "Email already exists, please choose another username<br>");
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


<h1 class="text-center">Register</h1>

    <div class="col-lg-6 offset-lg-3 mb-4">
        <form action="" method="post">
            <div class="form-group">
                <input class="form-control" type="text"  name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password1" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password2" placeholder="Confirm Password" required>
            </div>
            <?php if(in_array("Your passwords do not match<br>", $error_array)){echo "Your passwords do not match";} ?>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" required>
            </div>

            <input class="form-control btn btn-primary" type="submit" name="submit" value="Submit">
        </form>  
    </div>


</div>

<?php include("includes/footer.php"); ?>