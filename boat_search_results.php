<?php include("includes/functions.php"); ?>

<div class="container">
    <div class="row pt-4">
<?php

if(isset($_POST['Search_Boat'])){
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

        if(isset($_POST['Search_Boat'])){

            $loa_min = $_POST['loa_min'];
            $loa_max = $_POST['loa_max'];
            if(isset($_POST['boat_type'])){$boat_type = $_POST['boat_type'];}
            if(isset($_POST['mast'])){$mast = $_POST['mast'];}
            $builder = $_POST['builder'];
            $designer = $_POST['designer'];
            $ballast_displacement_min = $_POST['ballast_displacement_min'];
            $ballast_displacement_max = $_POST['ballast_displacement_max'];
            
            $arrayCount = 0;


            if(empty($loa_min) && empty($loa_max) && !isset($boat_type) && !isset($mast) && empty($builder) && empty($designer) && empty($ballast_displacement_min) && empty($ballast_displacement_max)){
                
                $query = "SELECT * FROM boats";
            
            }   else {

                $query = "SELECT * FROM boats ";

                if(!empty($boat_type)){
                    $query .= "INNER JOIN boat_types ON boats.boat_id = boat_types.boat_id INNER JOIN types ON boat_types.type_id = types.type_id ";
                }
                if(!empty($mast)){
                    $query .= "INNER JOIN boat_mast ON boats.boat_id = boat_mast.boat_id INNER JOIN mast ON boat_mast.mast_id = mast.mast_id ";
                }


                $query .= "WHERE ";

                if(!empty($boat_type)){
                    if(count($boat_type) < 1){
                        $query .= "types.type_id = $boat_type[0] ";
                    } else {
                        $query .= "types.type_id = $boat_type[0] ";
                        foreach($boat_type as $key => $value){
                            if($key >= 1) {
                                $query .= "OR types.type_id = $boat_type[$key] ";
                            }            
                        }                    
                    }                
                }

                if(!empty($boat_type)){
                    $query.="AND ";
                }
                
                

                if(!empty($mast)){
                    if(count($mast) < 1){
                        $query .= "mast.mast_id = $mast[0] ";
                    } else {
                        $query .= "mast.mast_id = $mast[0] ";
                        foreach($mast as $key => $value){
                            if($key >= 1) {
                                $query .= "OR mast.mast_id = $mast[$key] ";
                            }            
                        }                    
                    }                
                }


                if(isset($boat_type) || isset($mast)){
                    if(!empty($builder)) {
                        $query .= "AND builder LIKE '%{$builder}%' ";
                    }
                } else {
                    if(!empty($builder)) {
                        $query .= "builder LIKE '%{$builder}%' ";
                    }
                }


                if(isset($boat_type) || isset($mast) || isset($builder)){
                    if(!empty($designer)) {
                        $query .= "AND designer LIKE '%{$designer}%' ";
                    }
                } else {
                    if(!empty($designer)) {
                        $query .= "designer LIKE '%{$designer}%' ";
                    }
                }

                if(!empty($boat_type) || !empty($mast) || !empty($builder) ||!empty($designer)){
                    if($loa_min && $loa_max !== null) {
                        $query .= "AND (boats.LOA BETWEEN $loa_min AND $loa_max) ";
                    } 
                } else {
                    if($loa_min && $loa_max !== null) {
                        $query .= "(LOA BETWEEN $loa_min AND $loa_max) ";
                    }
                }

                

                if(!empty($boat_type) || !empty($mast) || !empty($builder) || !empty($designer) || (!empty($loa_min) && !empty($loa_max))){
                    if($ballast_displacement_min && $ballast_displacement_max !== null) {
                        $query .= "AND (boats.ballast_displacement BETWEEN $ballast_displacement_min AND $ballast_displacement_max) ";
                    } 
                } else {
                    if($ballast_displacement_min && $ballast_displacement_max !== null) {
                        $query .= "(ballast_displacement BETWEEN $ballast_displacement_min AND $ballast_displacement_max) ";
                    }
                }
                            
                
                if(isset($boat_type) || isset($mast)){
                    $query .= "GROUP BY boats.boat_name ";
                    $query .= "HAVING COUNT(*) = ";
                    if($boat_type){
                        $arrayCount += count($boat_type);
                    }
                    if($mast){
                        $arrayCount += count($mast);
                    }
                    $query .= $arrayCount;
                }

            }
            
     

            // echo $query;
            // echo "array count is:". $arrayCount;
            
            $boat_search_query = mysqli_query($connection, $query);

            if(!$boat_search_query){
                echo mysqli_error($connection);
            }

                        

            while($row = mysqli_fetch_assoc($boat_search_query)) {
                $boat_id = $row['boat_id'];
                $boat_name = $row['boat_name'];
                $boat_year = $row['boat_year'];
                $boat_image = $row['boat_image'];
                                
                echo "<tr>";
                echo "<td>$boat_id</td>";
                echo "<td><a href=boat_profile.php?b_id=$boat_id>$boat_name</a></td>";
                echo "<td>$boat_year</td>";
                echo "<td>";readMultiSelect('boat_types', 'types', 'type_id', 'type_name');"</td>";
                echo "<td><img width='50' src='images/$boat_image' alt='image'></td>";            
                
            }

            

        }
        ?>
   
        
    </tbody>
</table>
    </div>
</div>
