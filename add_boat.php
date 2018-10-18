<?php include("includes/header.php"); ?>

    <!-- Start Here -->


<?php 

    
   

    if(isset($_POST['Add_Boat'])){
        $boat_name = $_POST['boat_name'];
        $boat_year = $_POST['boat_year'];
        $boat_type = $_POST['boat_type'];
        $boat_image = $_FILES['boat_image']['name'];
        $boat_image_temp = $_FILES['boat_image']['tmp_name'];

        move_uploaded_file($boat_image_temp, "images/$boat_image");

        $query = "INSERT INTO boats(boat_name, boat_year, boat_type, boat_image) ";
        $query .= "VALUES ('{$boat_name}' , {$boat_year} , {$boat_type}, '{$boat_image}' )";

        $create_boat_query = mysqli_query($connection, $query);

        if(!$create_boat_query){
            echo mysqli_error($connection);
        }
        
    }

?>
    
<h1>Add Boat</h1>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="boat_name">Name</label>
        <input type="text" class="form-control" name="boat_name">
    </div>
    <div class="form-group">
        <label for="boat_year">Year</label>
        <input type="text" class="form-control" name="boat_year">
    </div>
    <div class="form-group">
        <label for="boat_type">Boat Type</label><br>
        <select name="boat_type" id="boat_type">
            <option value="1">Sail</option>
            <option value="2">Power</option> 
            <option value="3">Motor Sail</option> 
            <option value="4">Fishing</option>                              
        </select>
    </div>
    <div class="form-group">
        <label for="boat_image">Upload Image</label><br>
        <input type="file" name="boat_image"> 
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="Add_Boat" value="Add Boat">
    </div>
</form>




<?php include("includes/footer.php"); ?>