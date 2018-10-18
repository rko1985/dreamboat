<?php include("includes/header.php"); ?>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Boat Id</th>
            <th>Name</th>
            <th>Year</th>
            <th>Type</th>
            <th>Image</th>
            <th>Delete</th>
        </tr>
    </thead>                        
    <tbody>
        <?php 
        
        $query = "SELECT * FROM boats";
        $select_boats= mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_boats)) {
            $boat_id = $row['boat_id'];
            $boat_name = $row['boat_name'];
            $boat_year = $row['boat_year'];
            $boat_type = $row['boat_type'];
            $boat_image = $row['boat_image'];
            
            echo "<tr>";
            echo "<td>$boat_id</td>";
            echo "<td>$boat_name</td>";
            echo "<td>$boat_year</td>";

            $query = "SELECT * FROM types WHERE boat_type_id = $boat_type ";
            $select_boat_type = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_boat_type)) {
            $boat_type = $row['boat_type_id'];
            $type_title = $row['type_title'];

            echo "<td>{$type_title}</td>";

            }

            echo "<td><img width='100' src='images/$boat_image' alt='image'></td>";            
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


}

?>

<?php include("includes/footer.php"); ?>