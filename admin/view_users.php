<?php include("includes/header.php"); ?>

<div class="container">
<?php include("includes/navbar.php"); ?>
<?php include("includes/functions.php"); ?>

<?php 

ob_start();
session_start();

if(!isset($_SESSION['user_role']) && $_SESSION['user_role'] != 'admin'){
    header("Location: ../login.php");
}

?>

<h1 class="text-center">Users</h1>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>User Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>User Role</th>
            <th>Delete</th>
        </tr>
    </thead>                        
    <tbody>
        <?php 
        
        $query = "SELECT * FROM users";
        $select_users= mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_users)) {
            $user_id = $row['user_id'];
            $username = $row['username'];
            $email = $row['email'];
            $user_role = $row['user_role'];

            
            echo "<tr>";
            echo "<td>$user_id</td>";
            echo "<td>$username</td>";
            echo "<td>$email</td>";
            echo "<td>$user_role</td>";
            echo "<td><a href='view_users.php?delete={$user_id}'>Delete</a></td>";
            echo "</tr>";                                            
            
                                        
        }
        
        
        ?>
   
        
    </tbody>
</table>

<?php 

if(isset($_GET['delete'])){

    echo "it worked";

    $the_user_id = $_GET['delete'];

    $query = "DELETE FROM users WHERE user_id = $the_user_id";
    $delete_query = mysqli_query($connection, $query);
    header("Location: view_users.php");

}

?>

</div>


<?php include("includes/footer.php"); ?>
