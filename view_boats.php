<?php include("includes/header.php"); ?>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Boat Id</th>
            <th>Name</th>
            <th>Year</th>
            <th>Type</th>
            <th>Image</th>
            <th>Builder</th>
            <th>Designer</th>
            <th>LOA</th>
            <th>LOD</th>
            <th>LWL</th>
            <th>Beam</th>
            <th>Ballast</th>
            <th>Bisplacement</th>
            <th>Ballast Displacement</th>
            <th>Draft</th>
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
            $boat_year = $row['boat_year'];
            $boat_type = $row['boat_type'];            
            $builder = $row['builder']; 
            $designer = $row['designer'];
            $LOA = $row['LOA'];
            $LOD = $row['LOD'];
            $LWL = $row['LWL'];
            $beam = $row['beam'];
            $ballast = $row['ballast'];
            $displacement = $row['displacement'];
            $ballast_displacement = $row['ballast_displacement'];
            $draft = $row['draft'];
        

            
            echo "<tr>";
            echo "<td>$boat_id</td>";
            echo "<td><img width='50' src='images/$boat_image' alt='image'></td>";   
            echo "<td>$boat_name</td>";
            echo "<td>$boat_year</td>";
            echo "<td>$boat_type</td>";            
            echo "<td>$builder</td>";
            echo "<td>$designer</td>";
            echo "<td>$LOA</td>";
            echo "<td>$LOD</td>";
            echo "<td>$LWL</td>";
            echo "<td>$beam</td>";
            echo "<td>$ballast</td>";
            echo "<td>$displacement</td>";
            echo "<td>$ballast_displacement</td>";
            echo "<td>$draft</td>";                     
            echo "<td><a href='view_boats.php?delete={$boat_id}'>Delete</a></td>";                                            
            
                                        
        }
        
        
        ?>
   
        
    </tbody>
</table>

<?php 

if(isset($_GET['delete'])){

    $the_boat_id = $_GET['delete'];

    $query = "DELETE FROM boats WHERE boat_id = $the_boat_id";
    $delete_query = mysqli_query($connection, $query);
    header("Location: view_boats.php");

}

?>

<?php include("includes/footer.php"); ?>