<?php include("includes/header.php"); ?>
<div class="container">
<?php include("includes/navbar.php"); ?>
<?php include("includes/functions.php"); ?>

<h1 class="text-center mt-4">All Boats</h1>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Boat Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Year</th>
            <th>Type</th>
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
            echo "<td><a href=boat_profile.php?b_id=$boat_id>$boat_name</a></td>";
            echo "<td>$boat_year</td>";
            echo "<td>";

            readMultiSelect('boat_types', 'types', 'type_id', 'type_name');

            echo "</td>";            
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

</div>

<?php include("includes/footer.php"); ?>