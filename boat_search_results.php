

<?php include("includes/header.php"); ?>



<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Boat Id</th>
            <th>Name</th>
            <th>Year</th>
            <th>Type</th>
            <th>Image</th>
        </tr>
    </thead>                        
    <tbody>
        <?php 

        if(isset($_GET['Search_Boat'])){

            $year_beg = $_GET['year_beg'];
            $year_end = $_GET['year_end'];

            $query = "SELECT * FROM boats WHERE boat_year BETWEEN $year_beg AND $year_end";
            $boat_search_query = mysqli_query($connection, $query);

            if(!$boat_search_query){
                echo mysqli_error($connection);
            }

        
        
            $query = "SELECT * FROM boats WHERE boat_year BETWEEN $year_beg AND $year_end";
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
                                            
                
                                            
            }
        
        }
        ?>
   
        
    </tbody>
</table>


<?php include("includes/footer.php"); ?>