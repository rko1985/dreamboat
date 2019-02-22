<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
<div class="container">
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
        header("Location: admin/index.php");
    } else {

        if(mysqli_num_rows($user_auth_query) == 1){
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_role'] = $row['user_role'];
            header("Location: user/index.php");
        } else {
            echo "Username or Password Incorrect";
        }

    }

}

?>


<h1 class="text-center">Login</h1>

    <div class="col-lg-6 offset-lg-3 mb-4">
        <form action="" method="post">
            <div class="form-group">
                <input class="form-control" type="text"  name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" required>
            </div>
            <input class="form-control btn btn-primary" type="submit" name="submit" value="Submit">
        </form>  
    </div>
    

</div>

<?php include("includes/footer.php"); ?>