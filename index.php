<?php include("includes/frontheader.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="container">
    
    <div class="row row-eq-height my-4">
        <div class="col-lg-3">
            <?php include("boat_search.php") ?>
        </div>        
        
        <div class="col-lg-9">

            <?php 
            if(!isset($_POST['Search_Boat'])){
                include("jumbotron.php");
            } 
            ?>

            <?php include("boat_search_results.php") ?>

        </div>
    </div>
</div>


<?php include("includes/footer.php"); ?>