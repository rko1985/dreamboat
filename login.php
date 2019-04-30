<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
<?php include("includes/functions.php"); ?>

<?php

ob_start();
session_start();

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE (username = '$username' AND password = '$password')";
    $user_auth_query = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($user_auth_query);

    if(!$user_auth_query){
        echo mysqli_error($connection);
    }

    if((mysqli_num_rows($user_auth_query) == 1) && $row['user_role'] == 'admin'){
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_role'] = $row['user_role'];
        $_SESSION['email'] = $row['email'];
        header("Location: admin/index.php");
    } else {

        if(mysqli_num_rows($user_auth_query) == 1){
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_role'] = $row['user_role'];            
            $_SESSION['email'] = $row['email'];
            header("Location: user/index.php");
        } else {
            echo "<div class='alert alert-danger text-center'>Username or Password Incorrect</div>";
        }

    }

}

?>


<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-lg-4 mx-auto my-auto">
            <div class="card card-body bg-light">
                <form action="" method="post">
                    <h2 class="text-center mb-3">Login</h2>
                    <p class="text-center">Please enter your credentials to login.</p>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input class="form-control" type="text"  name="username"required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="register.php">No Account? Register Here!</a>
                        </div>
                        <div class="col">
                            <input class="form-control btn btn-primary" type="submit" name="submit" value="Login">
                        </div>
                    </div>                
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>