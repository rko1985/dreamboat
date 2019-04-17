<?php include("includes/functions.php"); ?>

<div class="container">
    <div class="row pt-4">
<?php

if(isset($_POST['Search_Boat'])){
echo "<table class='table table-bordered table-hover'>
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
        </tr>
    </thead>                        
    <tbody>";
}
?>

        <?php 

        if(isset($_POST['Search_Boat'])){ 

            //Capturing Form Values
            $loa_min = $_POST['loa_min'];
            $loa_max = $_POST['loa_max'];
            if(isset($_POST['boat_type'])){$boat_type = $_POST['boat_type'];}
            if(isset($_POST['mast'])){$mast = $_POST['mast'];}
            if(isset($_POST['keel_design'])){$keel_design = $_POST['keel_design']; }
            $builder = $_POST['builder'];
            $designer = $_POST['designer'];
            $ballast_displacement_min = $_POST['ballast_displacement_min'];
            $ballast_displacement_max = $_POST['ballast_displacement_max'];

            //Form Validating if LOA/Ballast-Displacement is empty
            if(isset($loa_min) && empty($loa_max)){
                $loa_max = 9999999;
            }
            if(isset($loa_max) && empty($loa_min)){
                $loa_min = 0;
            }
            if(isset($ballast_displacement_min) && empty($ballast_displacement_max)){
                $ballast_displacement_max = 9999999;
            }
            if(isset($ballast_displacement_max) && empty($ballast_displacement_min)){
                $ballast_displacement_min = 0;
            }
            
            //Generating query
            $query = "SELECT * FROM boats WHERE ";
            $query .= "LOA BETWEEN $loa_min AND $loa_max ";
            $query .= "AND ballast_displacement BETWEEN $ballast_displacement_min AND $ballast_displacement_max ";
            if(isset($boat_type)) $query .= "AND boat_type LIKE '%" . implode("%' AND boat_type LIKE '%", $boat_type) . "%' ";
            if(isset($mast)) $query .= "AND mast LIKE '%" . implode("%' AND mast LIKE '%", $mast) . "%' ";
            if(isset($keel_design)) $query .= "AND keel_design LIKE '%" . implode("%' AND keel_design LIKE '%", $keel_design) . "%' ";
            $query .= "AND builder LIKE '%{$builder}%' ";
            $query .= "AND designer LIKE '%{$designer}%' ";

            $boat_search_query = mysqli_query($connection, $query);

            if(!$boat_search_query){
                echo mysqli_error($connection);
            }

                        

            while($row = mysqli_fetch_assoc($boat_search_query)) {
                $boat_id = $row['boat_id'];
                $boat_image = $row['boat_image'];
                $boat_type = $row['boat_type'];
                $boat_name = $row['boat_name'];
                $mast = $row['mast'];
                $keel_design = $row['keel_design']; 
                $builder = $row['builder'];
                $designer = $row['designer'];
                $LOA = $row['LOA'];
                $ballast_displacement = $row['ballast_displacement'];
                
                echo "<tr>";
                echo "<td><a href=boat_profile.php?b_id=$boat_id>$boat_id</a></td>";
                echo "<td><img width='50' src='images/$boat_image' alt='image'></td>";
                echo "<td>$boat_name</td>";
                echo "<td>$boat_type</td>";
                echo "<td>$mast</td>";
                echo "<td>$keel_design</td>";
                echo "<td>$builder</td>";
                echo "<td>$designer</td>";
                echo "<td>$LOA</td>";  
                echo "<td>$ballast_displacement</td>";          
                
            }

            

        }
        ?>
   
        
    </tbody>
</table>
    </div>
</div>
