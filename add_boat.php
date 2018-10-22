<?php include("includes/header.php"); ?>

    <!-- Start Here -->


<?php 

    
   

    if(isset($_POST['Add_Boat'])){
        $boat_name = $_POST['boat_name'];
        $boat_year = $_POST['boat_year'];
        $boat_type = $_POST['boat_type'];
        $boat_image = $_FILES['boat_image']['name'];
        $boat_image_temp = $_FILES['boat_image']['tmp_name'];
        $builder = $_POST['builder'];
        $designer = $_POST['designer'];
        $LOA = $_POST['LOA'];
        $LOD = $_POST['LOD'];
        $LWL = $_POST['LWL'];
        $beam = $_POST['beam'];
        $ballast = $_POST['ballast'];
        $displacement = $_POST['displacement'];
        $ballast_displacement = $_POST['ballast_displacement'];
        $draft = $_POST['draft'];

        move_uploaded_file($boat_image_temp, "images/$boat_image");

        $query = "INSERT INTO boats(boat_name, boat_year, boat_type, boat_image, builder, designer, LOA, LOD, LWL, beam, ballast, displacement, ballast_displacement, draft) ";
        $query .= "VALUES ('{$boat_name}' , {$boat_year} , {$boat_type}, '{$boat_image}', '{$builder}', '{$designer}', '{$LOA}','{$LOD}','{$LWL}','{$beam}','{$ballast}','{$displacement}','{$ballast_displacement}','{$draft}' )";

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
        <label for="builder">Builder</label><br>
        <select name="builder" id="builder">
            <option value="Ranger">Ranger</option>
            <option value="Coronado">Coronado</option> 
            <option value="Rhoades">Rhoades</option>                           
        </select>
    </div>
    <div class="form-group">
        <label for="designer">Designer</label><br>
        <select name="designer" id="designer">
            <option value="gary_mull">Gary Mull</option>
            <option value="ed_edgar">Ed Edgar</option> 
            <option value="frank_butler">Frank Butler</option>                           
        </select>
    </div>
    <div class="form-group">
        <label for="loa">LOA</label>
        <input type="text" class="form-control" name="LOA">
    </div>
    <div class="form-group">
        <label for="lod">LOD</label>
        <input type="text" class="form-control" name="LOD">
    </div>
    <div class="form-group">
        <label for="lwl">LWL</label>
        <input type="text" class="form-control" name="LWL">
    </div>
    <div class="form-group">
        <label for="beam">Beam</label>
        <input type="text" class="form-control" name="beam">
    </div>
    <div class="form-group">
        <label for="ballast">Ballast (lbs)</label>
        <input type="text" class="form-control" name="ballast">
    </div>
    <div class="form-group">
        <label for="displacement">Displacement (lbs)</label>
        <input type="text" class="form-control" name="displacement">
    </div>
    <div class="form-group">
        <label for="ballast_displacement">Ballast/Displacement</label>
        <input type="text" class="form-control" name="ballast_displacement">
    </div>
    <div class="form-group">
        <label for="draft">Draft</label>
        <input type="text" class="form-control" name="draft">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="Add_Boat" value="Add Boat">
    </div>
</form>




<?php include("includes/footer.php"); ?>