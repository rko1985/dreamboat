<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
<div class="container">



<?php 
ob_start();
session_start();

if($_SESSION['user_role'] == 'admin'){
    header("Location: ../admin/");
} elseif ($_SESSION['user_role'] !== 'subscriber' || !isset($_SESSION['user_role'])){
    header("Location: ../login.php");
} 


?>


<h1 class="text-center">User Area</h1>
<h3 class="text-center">Welcome <?php echo $_SESSION['username']; ?></h3>


<?php include("view_boats.php");  ?>





</div>

<?php include("includes/footer.php"); ?>