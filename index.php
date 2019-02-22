<?php include("includes/frontheader.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="container">
    
    <div class="row">
        <div class="col-lg-3 py-4">
            <?php include("boat_search.php") ?>
        </div>
        <?php 
        if(!isset($_POST['Search_Boat'])){
            include("jumbotron.php");
        } 
        ?>
        
        <div class="col-lg-9">
            <?php include("boat_search_results.php") ?>
        </div>
    </div>
</div>


<?php include("includes/footer.php"); ?>