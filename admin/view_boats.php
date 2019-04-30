<?php include("includes/functions.php"); ?>

<?php 


ob_start();

if(!isset($_SESSION['user_role']) && $_SESSION['user_role'] != 'admin'){
    header("Location: ../login.php");
}

?>

<div class="text-center my-3">
    <h3 class="">All Boats</h3>
    <a class="btn btn-primary float-left my-3" href="add_boat.php">Create a Listing</a>
</div>


<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Boat Id</th>
            <th>Image</th>
            <th>Boat Name</th>
            <th>Boat Type</th>
            <th>Mast</th>
            <th>Keel Design</th>
            <th>Builder</th>
            <th>Designer</th>
            <th>LOA</th>
            <th>Ballast Displacement</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>                        
    <tbody>
        <?php 
        
        $query = "SELECT * FROM boats";
        $select_boats= mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_boats)) {
            $boat_id = $row['boat_id'];
            $boat_image = $row['boat_image'];
            $boat_name = $row['boat_name'];
            $boat_type = $row['boat_type'];
            $mast = $row['mast'];
            $keel_design = $row['keel_design']; 
            $builder = $row['builder'];
            $designer = $row['designer'];
            $LOA = $row['LOA'];
            $ballast_displacement = $row['ballast_displacement'];
            
            echo "<tr>";
            echo "<td><a href=../boat_profile.php?b_id=$boat_id>$boat_id</a></td>";
            echo "<td><img width='50' src='../images/$boat_image' alt='image'></td>";
            echo "<td>$boat_name</td>";
            echo "<td>$boat_type</td>";
            echo "<td>$mast</td>";
            echo "<td>$keel_design</td>";
            echo "<td>$builder</td>";
            echo "<td>$designer</td>";
            echo "<td>$LOA</td>";  
            echo "<td>$ballast_displacement</td>";
            echo "<td><a href='edit_boat.php?boat_id={$boat_id}'>Edit</a></td>";            
            echo "<td><a href='index.php?delete={$boat_id}'>Delete</a></td>";                                            
            
        }
        
        
        ?>
   
        
    </tbody>
</table>

<?php 

if(isset($_GET['delete'])){

    $the_boat_id = $_GET['delete'];

    $query = "DELETE FROM boats WHERE boat_id = $the_boat_id";
    $delete_query = mysqli_query($connection, $query);
    header("Location: index.php");

}

?>