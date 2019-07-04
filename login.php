<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
<?php include("includes/functions.php"); ?>

<?php

ob_start();

if(isset($_POST['submit'])){

    //Sanitize post array
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

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

<footer id="main-footer" class=" pr-3 bg-dark text-white fixed-bottom">
    <div class="container">
        <div class="row text-center">
            <p class="ml-auto">
                Copyright &copy; <span id="year"></span>
            </p>
        </div>
    </div>  
</footer>

    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
    
    <script>
        // get the current year for the copyright
        $('#year').text(new Date().getFullYear());
    </script>



</body>
</html>