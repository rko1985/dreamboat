<?php include("includes/header.php"); ?>
<div class="container">
<?php include("includes/navbar.php"); ?>



<?php 
ob_start();
session_start();


if(!isset($_SESSION['user_role'])){
    header("Location: ../index.php");
}

?>


<h1 class="text-center">User Area</h1>
<h3 class="text-center">Welcome <?php echo $_SESSION['username']; ?></h3>


<?php include("view_boats.php");  ?>





</div>

<?php include("includes/footer.php"); ?>