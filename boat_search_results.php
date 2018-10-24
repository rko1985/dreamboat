
<div class="container">
    <div class="row pt-4">
<?php

if(isset($_GET['Search_Boat'])){
echo "<table class='table table-bordered table-hover'>
    <thead>
        <tr>
            <th>Boat Id</th>
            <th>Name</th>
            <th>Year</th>
            <th>Type</th>
            <th>Image</th>
        </tr>
    </thead>                        
    <tbody>";
}
?>

        <?php 

        if(isset($_GET['Search_Boat'])){

            $year_beg = $_GET['year_beg'];
            $year_end = $_GET['year_end'];
            $loa_min = $_GET['loa_min'];
            $loa_max = $_GET['loa_max'];
            $boat_type = $_GET['boat_type'];
            $builder = $_GET['builder'];
            $designer = $_GET['designer'];
            $lod_min = $_GET['lod_min'];
            $lod_max = $_GET['lod_max'];
            $lwl_min = $_GET['lwl_min'];
            $lwl_max = $_GET['lwl_max'];
            $beam_min = $_GET['beam_min'];
            $beam_max = $_GET['beam_max'];
            $ballast_min = $_GET['ballast_min'];
            $ballast_max = $_GET['ballast_max'];
            $displacement_min = $_GET['displacement_min'];
            $displacement_max = $_GET['displacement_max'];
            $ballast_displacement_min = $_GET['ballast_displacement_min'];
            $ballast_displacement_max = $_GET['ballast_displacement_max'];
            $draft_min = $_GET['draft_min'];
            $draft_max = $_GET['draft_max'];

        
            $query = "SELECT * FROM boats WHERE ";
            if($year_beg && $year_end !== null) {
                $query .= "(boat_year BETWEEN $year_beg AND $year_end) ";
            } else {
                $query .= "(boat_year BETWEEN 1 AND 9999) "; //This default parameter needs to be set for the following AND conditions to work
            }
            if($loa_min && $loa_max !== null) {
                $query .= "AND (LOA BETWEEN $loa_min AND $loa_max) ";
            }
            if(!empty($boat_type)) {
                $query .= "AND (boat_type = $boat_type) ";
            }
            if(!empty($builder)) {
                $query .= "AND (builder = '{$builder}' ) ";
            }
            if(!empty($designer)) {
                $query .= "AND (designer = '{$designer}') ";
            }
            if($lod_min && $lod_max !== null) {
                $query .= "AND (LOD BETWEEN $lod_min AND $lod_max) ";
            }
            if($lwl_min && $lwl_max !== null) {
                $query .= "AND (LWL BETWEEN $lwl_min AND $lwl_max) ";
            }
            if($beam_min && $beam_max !== null) {
                $query .= "AND (beam BETWEEN $beam_min AND $beam_max) ";
            }
            if($ballast_min && $ballast_max !== null) {
                $query .= "AND (ballast BETWEEN $ballast_min AND $ballast_max) ";
            }
            if($displacement_min && $displacement_max !== null) {
                $query .= "AND (displacement BETWEEN $displacement_min AND $displacement_max) ";
            }
            if($ballast_displacement_min && $ballast_displacement_max !== null) {
                $query .= "AND (ballast_displacement BETWEEN $ballast_displacement_min AND $ballast_displacement_max) ";
            }
            if($draft_min && $draft_max !== null) {
                $query .= "AND (draft BETWEEN $draft_min AND $draft_max) ";
            }
                

        
            
            $boat_search_query = mysqli_query($connection, $query);

            if(!$boat_search_query){
                echo mysqli_error($connection);
            }

                        

            while($row = mysqli_fetch_assoc($boat_search_query)) {
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

                echo "<td><img width='50' src='images/$boat_image' alt='image'></td>";            
                                            
                
                                            
            }

            

        }
        ?>
   
        
    </tbody>
</table>
    </div>
</div>
