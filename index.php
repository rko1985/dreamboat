<?php include("includes/frontheader.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="container">
    
    <div class="row row-eq-height my-4">
                
        <div class="col-md-9 my-1">

            <?php 
            if(isset($_GET['page']) || isset($_POST['Search_Boat'])){
                include("boat_search_results.php");
            } else {
                include("jumbotron.php");
            }
            ?>

        </div>

        <div class="col-md-3 my-1">
            <?php include("boat_search.php") ?>
        </div>

    </div>
</div>


<?php include("includes/footer.php"); ?>