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

            //Capturing Form Values
            $loa_min = $_POST['loa_min'];
            $loa_max = $_POST['loa_max'];
            if(isset($_POST['boat_type'])){$boat_type = $_POST['boat_type'];}
            if(isset($_POST['mast'])){$mast = $_POST['mast'];}
            if(isset($_POST['keel_design'])){$keel_design = $_POST['keel_design'];}
            $builder = $_POST['builder'];
            $designer = $_POST['designer'];
            $ballast_displacement_min = $_POST['ballast_displacement_min'];
            $ballast_displacement_max = $_POST['ballast_displacement_max'];

            $arrayCount = 0; 

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
            
            


            if(empty($loa_min) && empty($loa_max) && !isset($boat_type) && !isset($mast) && empty($builder) && empty($designer) && empty($ballast_displacement_min) && empty($ballast_displacement_max)){
                
                $query = "SELECT * FROM boats";
            
            }   else {

                $query = "SELECT * FROM boats ";

                //TABLE JOINS
                if(!empty($boat_type)){
                    $query .= "INNER JOIN boat_types ON boats.boat_id = boat_types.boat_id INNER JOIN types ON boat_types.type_id = types.type_id ";
                }
                if(!empty($mast)){
                    $query .= "INNER JOIN boat_mast ON boats.boat_id = boat_mast.boat_id INNER JOIN mast ON boat_mast.mast_id = mast.mast_id ";
                }
                if(!empty($keel_design)){
                    $query .= "INNER JOIN boat_keel_design ON boats.boat_id = boat_keel_design.boat_id INNER JOIN keel_design ON boat_keel_design.keel_design_id = keel_design.keel_design_id ";
                }


                $query .= "WHERE ";

                //BOAT TYPE
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
                
                //MAST
                if(!empty($boat_type)){
                    if(!empty($mast)){
                        if(count($mast) < 1){
                            $query .= "AND mast.mast_id = $mast[0] ";
                        } else {
                            $query .= "AND mast.mast_id = $mast[0] ";
                            foreach($mast as $key => $value){
                                if($key >= 1) {
                                    $query .= "OR mast.mast_id = $mast[$key] ";
                                }            
                            }                    
                        }                
                    }
                } else {
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
                }

                //KEEL DESIGN
                if(!empty($boat_type) || !empty($mast)){
                    if(!empty($keel_design)){
                        if(count($keel_design) < 1){
                            $query .= "AND keel_design.keel_design_id = $keel_design[0] ";
                        } else {
                            $query .= "AND keel_design.keel_design_id = $keel_design[0] ";
                            foreach($keel_design as $key => $value){
                                if($key >= 1) {
                                    $query .= "OR keel_design.keel_design_id = $keel_design[$key] ";
                                }            
                            }                    
                        }                
                    }
                } else {
                    if(!empty($keel_design)){
                        if(count($keel_design) < 1){
                            $query .= "keel_design.keel_design_id = $keel_design[0] ";
                        } else {
                            $query .= "keel_design.keel_design_id = $keel_design[0] ";
                            foreach($keel_design as $key => $value){
                                if($key >= 1) {
                                    $query .= "OR keel_design.keel_design_id = $keel_design[$key] ";
                                }            
                            }                    
                        }                
                    }
                }
                

                
                //BUILDER
                if(isset($boat_type) || isset($mast)){
                    if(!empty($builder)) {
                        $query .= "AND builder LIKE '%{$builder}%' ";
                    }
                } else {
                    if(!empty($builder)) {
                        $query .= "builder LIKE '%{$builder}%' ";
                    }
                }

                //DESIGNER
                if(!isset($boat_type) && !isset($mast) && empty($builder)){
                    if(!empty($designer)) {
                        $query .= "designer LIKE '%{$designer}%' ";
                    }
                }elseif(isset($boat_type) || isset($mast) || isset($builder)){
                        if(!empty($designer)) {
                            $query .= "AND designer LIKE '%{$designer}%' ";
                        }
                    } else {
                        if(!empty($designer)) {
                            $query .= "designer LIKE '%{$designer}%' ";
                        }
                    }

                //LOA
                
                if(!empty($boat_type) || !empty($mast) || !empty($keel_design) || !empty($builder) ||!empty($designer)){
                    if($loa_min !== null && $loa_max !== null) {
                        $query .= "AND (boats.LOA BETWEEN $loa_min AND $loa_max) ";
                    } 
                } else {
                    if($loa_min !== null && $loa_max !== null) {
                        $query .= "(LOA BETWEEN $loa_min AND $loa_max) ";
                    }
                }

                
                //BALLAST/DISPLACEMENT
                if(!empty($boat_type) || !empty($mast) || !empty($keel_design) || !empty($builder) || !empty($designer) || (!empty($loa_min) || !empty($loa_max))){
                    if($ballast_displacement_min !== null && $ballast_displacement_max !== null) {
                        $query .= "AND (boats.ballast_displacement BETWEEN $ballast_displacement_min AND $ballast_displacement_max) ";
                    } 
                } else {
                    if($ballast_displacement_min !== null && $ballast_displacement_max !== null) {
                        $query .= "(ballast_displacement BETWEEN $ballast_displacement_min AND $ballast_displacement_max) ";
                    }
                }
                            
                

                if(isset($boat_type) || isset($mast) || isset($keel_design)){

                    if(isset($boat_type)){$boat_type_count = count($boat_type);} else {$boat_type_count = 0;}
                    if(isset($mast)){$mast_count = count($mast);} else {$mast_count = 0;}
                    if(isset($keel_design)){$keel_design_count = count($keel_design);} else {$keel_design_count = 0;}
                    
                    $query .= "GROUP BY boats.boat_name ";
                    $query .= "HAVING COUNT(*) = ";
                    
                    //If any combination of type/mast/keel = 1 then arrayCount = 1
                    if($boat_type_count == 1 && $mast_count == 1 && $keel_design_count == 0){
                        $arrayCount = 1;
                    }elseif ($boat_type_count == 1 && $mast_count == 0 && $keel_design_count == 1){
                        $arrayCount = 1;
                    }elseif ($mast_count == 1 && $boat_type_count == 0 && $keel_design_count == 1){
                        $arrayCount = 1;
                    }elseif ($keel_design_count == 1 && $mast_count == 1 && $boat_type_count == 1){
                        $arrayCount = 1;
                    }else {
                        if(isset($boat_type)){
                            $arrayCount += count($boat_type);
                        }
                        if(isset($mast)){
                            $arrayCount += count($mast);
                        }
                        if(isset($keel_design)){
                            $arrayCount += count($keel_design);
                        }
                    }
                    $query .= $arrayCount;
                    
                }

            }
            
     

            echo $query;
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
