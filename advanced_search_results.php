<?php include("includes/header.php"); ?> <!-- Remove when finished testing -->

<?php include("includes/navbar.php"); ?>
<?php include("includes/functions.php"); ?>
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
            
            //Sanitize post array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //selling info
            $for_sale = $_POST['for_sale'];
            $price_min = $_POST['price_min'];
            $price_max = $_POST['price_max'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $region = $_POST['region'];
            $country = $_POST['country'];
            //basic
            $boat_name = $_POST['boat_name'];
            $year_beg = $_POST['year_beg'];
            $year_end = $_POST['year_end'];
            if(isset($_POST['boat_type'])){$boat_type = $_POST['boat_type'];}
            $boat_model = $_POST['boat_model'];
            $boat_submodel = $_POST['boat_submodel'];
            $builder = $_POST['builder'];
            $designer = $_POST['designer'];
            $loa_min = $_POST['loa_min'];
            $loa_max = $_POST['loa_max'];
            $lod_min = $_POST['lod_min'];
            $lod_max = $_POST['lod_max'];
            $lwl_min = $_POST['lwl_min'];
            $lwl_max = $_POST['lwl_max'];
            $beam_min = $_POST['beam_min'];
            $beam_max = $_POST['beam_max'];
            $ballast_displacement_min = $_POST['ballast_displacement_min'];
            $ballast_displacement_max = $_POST['ballast_displacement_max'];
            $draft_min = $_POST['draft_min'];
            $draft_max = $_POST['draft_max'];
            if(isset($_POST['rig_design'])){$rig_design = $_POST['rig_design'];}
            //under water
            if(isset($_POST['rudder_design'])){$rudder_design = $_POST['rudder_design'];}
            if(isset($_POST['ballast_type'])){$ballast_type = $_POST['ballast_type'];}
            if(isset($_POST['keel_design'])){$keel_design = $_POST['keel_design'];}
            if(isset($_POST['hull_material'])){$hull_material = $_POST['hull_material'];}
            if(isset($_POST['bow'])){$bow = $_POST['bow'];}
            if(isset($_POST['stern'])){$stern = $_POST['stern'];}
            if(isset($_POST['transom'])){$transom = $_POST['transom'];}
            //below deck
            if(isset($_POST['engine_type'])){$engine_type = $_POST['engine_type'];}
            if(isset($_POST['engine_make'])){$engine_make = $_POST['engine_make'];}
            if(isset($_POST['forepeak'])){$forepeak = $_POST['forepeak'];}
            if(isset($_POST['midships'])){$midships = $_POST['midships'];}
            if(isset($_POST['salon'])){$salon = $_POST['salon'];}
            if(isset($_POST['galley'])){$galley = $_POST['galley'];}
            if(isset($_POST['quarter'])){$quarter = $_POST['quarter'];}
            if(isset($_POST['aft'])){$aft = $_POST['aft'];}
            if(isset($_POST['navigation_comm'])){$navigation_comm = $_POST['navigation_comm'];}
            $engine_horsepower_min = $_POST['engine_horsepower_min'];
            $engine_horsepower_maxv = $_POST['engine_horsepower_max'];
            $fuel_capacity_min = $_POST['fuel_capacity_min'];
            $fuel_capacity_max = $_POST['fuel_capacity_max'];
            $water_capacity_min = $_POST['water_capacity_min'];
            $water_capacity_max = $_POST['water_capacity_max'];
            $cabins_min = $_POST['cabins_min'];
            $cabins_max = $_POST['cabins_max'];
            $heads_min = $_POST['heads_min'];
            $heads_max = $_POST['heads_max'];
            $berths_min = $_POST['berths_min'];
            $berths_max = $_POST['berths_max'];
            $salon_seating_min = $_POST['salon_seating_min'];
            $salon_seating_max = $_POST['salon_seating_max'];
            //on deck
            if(isset($_POST['helm'])){$helm = $_POST['helm'];}
            if(isset($_POST['cockpit'])){$cockpit = $_POST['cockpit'];}
            if(isset($_POST['scuppers'])){$scuppers = $_POST['scuppers'];}
            if(isset($_POST['coaming'])){$coaming = $_POST['coaming'];}
            if(isset($_POST['gunwales_bullwarks'])){$gunwales_bullwarks = $_POST['gunwales_bullwarks'];}
            if(isset($_POST['companionway'])){$companionway = $_POST['companionway'];}
            if(isset($_POST['cabin'])){$cabin = $_POST['cabin'];}
            $hatches_min = $_POST['hatches_min'];
            $hatches_max = $_POST['hatches_max'];
            $dorades_vents_min = $_POST['dorades_vents_min'];
            $dorades_vents_max = $_POST['dorades_vents_max'];
            $ports_openning = $_POST['ports_openning'];
            $ports_fixed = $_POST['ports_fixed'];
            $rail = $_POST['rail'];
            $ladder = $_POST['ladder'];
            //above deck
            if(isset($_POST['mast'])){$mast = $_POST['mast'];}
            if(isset($_POST['standing_rigging'])){$standing_rigging = $_POST['standing_rigging'];}
            if(isset($_POST['chain_plates'])){$chain_plates = $_POST['chain_plates'];}
            if(isset($_POST['dodger'])){$dodger = $_POST['dodger'];}
            if(isset($_POST['bimini'])){$bimini = $_POST['bimini'];}
            if(isset($_POST['spreaders'])){$spreaders = $_POST['spreaders'];}
            if(isset($_POST['boom'])){$boom = $_POST['boom'];}
            

            //Form Validating if min/max numbers/empty
            //basic
            if(isset($price_min) && empty($price_max)){
                $price_max = 9999999;
            }
            if(isset($price_max) && empty($price_min)){
                $price_min = 0;
            }
            if(isset($year_beg) && empty($year_end)){
                $year_end = 9999999;
            }
            if(isset($year_end) && empty($year_beg)){
                $year_beg = 0;
            }
            if(isset($ballast_displacement_min) && empty($ballast_displacement_max)){
                $ballast_displacement_max = 9999999;
            }
            if(isset($ballast_displacement_max) && empty($ballast_displacement_min)){
                $ballast_displacement_min = 0;
            }
            if(isset($loa_min) && empty($loa_max)){
                $loa_max = 9999999;
            }
            if(isset($loa_max) && empty($loa_min)){
                $loa_min = 0;
            }
            if(isset($lod_min) && empty($lod_max)){
                $lod_max = 9999999;
            }
            if(isset($lod_max) && empty($lod_min)){
                $lod_min = 0;
            }
            if(isset($lwl_min) && empty($lwl_max)){
                $lwl_max = 9999999;
            }
            if(isset($lwl_max) && empty($lwl_min)){
                $lwl_min = 0;
            }
            if(isset($beam_min) && empty($beam_max)){
                $beam_max = 9999999;
            }
            if(isset($beam_max) && empty($beam_min)){
                $beam_min = 0;
            }
            if(isset($draft_min) && empty($draft_max)){
                $draft_max = 9999999;
            }
            if(isset($draft_max) && empty($draft_min)){
                $draft_min = 0;
            }
            //below deck
            if(isset($engine_horsepower_min) && empty($engine_horsepower_max)){
                $engine_horsepower_max = 9999999;
            }
            if(isset($engine_horsepower_max) && empty($engine_horsepower_min)){
                $engine_horsepower_min = 0;
            }
            if(isset($fuel_capacity_min) && empty($fuel_capacity_max)){
                $fuel_capacity_max = 9999999;
            }
            if(isset($fuel_capacity_max) && empty($fuel_capacity_min)){
                $fuel_capacity_min = 0;
            }
            if(isset($water_capacity_min) && empty($water_capacity_max)){
                $water_capacity_max = 9999999;
            }
            if(isset($water_capacity_max) && empty($water_capacity_min)){
                $water_capacity_min = 0;
            }
            if(isset($cabins_min) && empty($cabins_max)){
                $cabins_max = 9999999;
            }
            if(isset($cabins_max) && empty($cabins_min)){
                $cabins_min = 0;
            }
            if(isset($heads_min) && empty($heads_max)){
                $heads_max = 9999999;
            }
            if(isset($heads_max) && empty($heads_min)){
                $heads_min = 0;
            }
            if(isset($berths_min) && empty($berths_max)){
                $berths_max = 9999999;
            }
            if(isset($berths_max) && empty($berths_min)){
                $berths_min = 0;
            }
            if(isset($salon_seating_min) && empty($salon_seating_max)){
                $salon_seating_max = 9999999;
            }
            if(isset($salon_seating_max) && empty($salon_seating_min)){
                $salon_seating_min = 0;
            }
            //on deck
            if(isset($dorades_vents_min) && empty($dorades_vents_max)){
                $dorades_vents_max = 9999999;
            }
            if(isset($dorades_vents_max) && empty($dorades_vents_min)){
                $dorades_vents_min = 0;
            }
            if(isset($hatches_min) && empty($hatches_max)){
                $hatches_max = 9999999;
            }
            if(isset($hatches_max) && empty($hatches_min)){
                $hatches_min = 0;
            }



            $query = "SELECT * FROM boats WHERE ";
            //Basic
            $query .= "boat_year BETWEEN $year_beg AND $year_end ";
            $query .= "AND ballast_displacement BETWEEN $ballast_displacement_min AND $ballast_displacement_max ";
            if(isset($boat_type)) $query .= "AND boat_type LIKE '%" . implode("%' AND boat_type LIKE '%", $boat_type) . "%' ";
            if(isset($rig_design)) $query .= "AND rig_design LIKE '%" . implode("%' AND rig_design LIKE '%", $rig_design) . "%' ";
            $query .= "AND boat_model LIKE '%{$boat_model}%' ";
            $query .= "AND boat_submodel LIKE '%{$boat_submodel}%' ";
            $query .= "AND builder LIKE '%{$builder}%' ";
            $query .= "AND designer LIKE '%{$designer}%' ";
            $query .= "AND LOA BETWEEN $loa_min AND $loa_max ";
            $query .= "AND LOD BETWEEN $lod_min AND $lod_max ";
            $query .= "AND LWL BETWEEN $lwl_min AND $lwl_max ";
            $query .= "AND beam BETWEEN $beam_min AND $beam_max ";
            $query .= "AND draft BETWEEN $draft_min AND $draft_max ";
            //selling info
            $query .= "AND for_sale LIKE '%{$for_sale}%' ";
            $query .= "AND price BETWEEN $price_min AND $price_max ";
            $query .= "AND state LIKE '%{$state}%' ";
            $query .= "AND city LIKE '%{$city}%' ";
            $query .= "AND region LIKE '%{$region}%' ";
            $query .= "AND country LIKE '%{$country}%' ";
            //underwater
            if(isset($rudder_design)) $query .= "AND rudder_design LIKE '%" . implode("%' AND rudder_design LIKE '%", $rudder_design) . "%' ";
            if(isset($ballast_type)) $query .= "AND ballast_type LIKE '%" . implode("%' AND ballast_type LIKE '%", $ballast_type) . "%' ";
            if(isset($keel_design)) $query .= "AND keel_design LIKE '%" . implode("%' AND keel_design LIKE '%", $keel_design) . "%' ";
            if(isset($hull_material)) $query .= "AND hull_material LIKE '%" . implode("%' AND hull_material LIKE '%", $hull_material) . "%' ";
            if(isset($bow)) $query .= "AND bow LIKE '%" . implode("%' AND bow LIKE '%", $bow) . "%' ";
            if(isset($stern)) $query .= "AND stern LIKE '%" . implode("%' AND stern LIKE '%", $stern) . "%' ";
            if(isset($transom)) $query .= "AND transom LIKE '%" . implode("%' AND transom LIKE '%", $transom) . "%' ";
            //below deck
            if(isset($engine_type)) $query .= "AND engine_type LIKE '%" . implode("%' AND engine_type LIKE '%", $engine_type) . "%' ";
            if(isset($engine_make)) $query .= "AND engine_make LIKE '%" . implode("%' AND engine_make LIKE '%", $engine_make) . "%' ";
            if(isset($forepeak)) $query .= "AND forepeak LIKE '%" . implode("%' AND forepeak LIKE '%", $forepeak) . "%' ";
            if(isset($midships)) $query .= "AND midships LIKE '%" . implode("%' AND midships LIKE '%", $midships) . "%' ";
            if(isset($salon)) $query .= "AND salon LIKE '%" . implode("%' AND salon LIKE '%", $salon) . "%' ";
            if(isset($galley)) $query .= "AND galley LIKE '%" . implode("%' AND galley LIKE '%", $galley) . "%' ";
            if(isset($quarter)) $query .= "AND quarter LIKE '%" . implode("%' AND quarter LIKE '%", $quarter) . "%' ";
            if(isset($aft)) $query .= "AND aft LIKE '%" . implode("%' AND aft LIKE '%", $aft) . "%' ";
            if(isset($navigation_comm)) $query .= "AND navigation_comm LIKE '%" . implode("%' AND navigation_comm LIKE '%", $navigation_comm) . "%' ";
            $query .= "AND engine_horsepower BETWEEN $engine_horsepower_min AND $engine_horsepower_max ";
            $query .= "AND fuel_capacity BETWEEN $fuel_capacity_min AND $fuel_capacity_max ";
            $query .= "AND water_capacity BETWEEN $water_capacity_min AND $water_capacity_max ";
            $query .= "AND cabins BETWEEN $cabins_min AND $cabins_max ";
            $query .= "AND heads BETWEEN $heads_min AND $heads_max ";
            $query .= "AND berths BETWEEN $berths_min AND $berths_max ";
            $query .= "AND salon_seating BETWEEN $salon_seating_min AND $salon_seating_max ";
            //on deck
            if(isset($helm)) $query .= "AND helm LIKE '%" . implode("%' AND helm LIKE '%", $helm) . "%' ";
            if(isset($cockpit)) $query .= "AND cockpit LIKE '%" . implode("%' AND cockpit LIKE '%", $cockpit) . "%' ";
            if(isset($scuppers)) $query .= "AND scuppers LIKE '%" . implode("%' AND scuppers LIKE '%", $scuppers) . "%' ";
            if(isset($coaming)) $query .= "AND coaming LIKE '%" . implode("%' AND coaming LIKE '%", $coaming) . "%' ";
            if(isset($gunwales_bullwarks)) $query .= "AND gunwales_bullwarks LIKE '%" . implode("%' AND gunwales_bullwarks LIKE '%", $gunwales_bullwarks) . "%' ";
            if(isset($companionway)) $query .= "AND companionway LIKE '%" . implode("%' AND companionway LIKE '%", $companionway) . "%' ";
            if(isset($cabin)) $query .= "AND cabin LIKE '%" . implode("%' AND cabin LIKE '%", $cabin) . "%' ";
            $query .= "AND hatches BETWEEN $hatches_min AND $hatches_max ";
            $query .= "AND dorades_vents BETWEEN $dorades_vents_min AND $dorades_vents_max ";
            $query .= "AND ports_openning LIKE '%{$ports_openning}%' ";
            $query .= "AND ports_fixed LIKE '%{$ports_fixed}%' ";
            $query .= "AND rail LIKE '%{$rail}%' ";
            if(!empty($ladder))($query .= "AND ladder = '{$ladder}' ");
            //above deck
            if(isset($mast)) $query .= "AND mast LIKE '%" . implode("%' AND mast LIKE '%", $mast) . "%' ";
            if(isset($standing_rigging)) $query .= "AND standing_rigging LIKE '%" . implode("%' AND standing_rigging LIKE '%", $standing_rigging) . "%' ";
            if(isset($chain_plates)) $query .= "AND chain_plates LIKE '%" . implode("%' AND chain_plates LIKE '%", $chain_plates) . "%' ";
            if(isset($dodger)) $query .= "AND dodger LIKE '%" . implode("%' AND dodger LIKE '%", $dodger) . "%' ";
            if(isset($bimini)) $query .= "AND bimini LIKE '%" . implode("%' AND bimini LIKE '%", $bimini) . "%' ";
            if(isset($spreaders)) $query .= "AND spreaders LIKE '%" . implode("%' AND spreaders LIKE '%", $spreaders) . "%' ";
            if(isset($boom)) $query .= "AND boom LIKE '%" . implode("%' AND boom LIKE '%", $boom) . "%' ";

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
                echo "<td><a href=boat_profile.php?b_id=$boat_id>$boat_name</a></td>";
                echo "<td>$boat_year</td>";
                echo "<td>$boat_type</td>";
                

                echo "<td><img width='50' src='images/$boat_image' alt='image'></td>";            
                                            
                
                                            
            }

            

        }

        ?>
   
        
    </tbody>
</table>

<?php include("includes/footer.php"); ?> <!-- Remove when finished testing -->