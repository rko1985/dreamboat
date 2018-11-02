<?php include("includes/header.php"); ?> <!-- Remove when finished testing -->

<?php include("includes/navbar.php"); ?>

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

            $year_beg = $_POST['year_beg'];
            $year_end = $_POST['year_end'];
            $loa_min = $_POST['loa_min'];
            $loa_max = $_POST['loa_max'];
            $boat_type = $_POST['boat_type'];
            $builder = $_POST['builder'];
            $designer = $_POST['designer'];
            $lod_min = $_POST['lod_min'];
            $lod_max = $_POST['lod_max'];
            $lwl_min = $_POST['lwl_min'];
            $lwl_max = $_POST['lwl_max'];
            $beam_min = $_POST['beam_min'];
            $beam_max = $_POST['beam_max'];
            $ballast_min = $_POST['ballast_min'];
            $ballast_max = $_POST['ballast_max'];
            $displacement_min = $_POST['displacement_min'];
            $displacement_max = $_POST['displacement_max'];
            $ballast_displacement_min = $_POST['ballast_displacement_min'];
            $ballast_displacement_max = $_POST['ballast_displacement_max'];
            $draft_min = $_POST['draft_min'];
            $draft_max = $_POST['draft_max'];
            $spade_aft_fg = $_POST['spade_aft_fg'];
            $ballast_type = $_POST['ballast_type'];
            $keel_design = $_POST['keel_design'];
            $hull_material = $_POST['hull_material'];
            $rig_design = $_POST['rig_design'];
            $engine_type = $_POST['engine_type']; 
            //BELOW DECK START
            $engine_make = $_POST['engine_make'];
            $engine_horsepower_min = $_POST['engine_horsepower_min'];
            $engine_horsepower_max = $_POST['engine_horsepower_max'];
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
            $forepeak = $_POST['forepeak'];
            $midships = $_POST['midships'];
            $salon = $_POST['salon'];
            $galley = $_POST['galley'];
            $quarter = $_POST['quarter'];
            $aft = $_POST['aft'];
            $navigation_comm = $_POST['navigation_comm'];
            //ON DECK
            $helm = $_POST['helm'];
            $cockpit = $_POST['cockpit'];
            $scuppers_min = $_POST['scuppers_min'];
            $scuppers_max = $_POST['scuppers_max'];
            $coaming = $_POST['coaming'];
            $gunwales_bullwarks_min = $_POST['gunwales_bullwarks_min'];
            $gunwales_bullwarks_max = $_POST['gunwales_bullwarks_max'];
            $companionway = $_POST['companionway'];
            $cabin = $_POST['cabin'];
            $hatches_min = $_POST['hatches_min'];
            $hatches_max = $_POST['hatches_max'];
            $ports_openning = $_POST['ports_openning'];
            $ports_fixed = $_POST['ports_fixed'];
            $dorades_vents_min = $_POST['dorades_vents_min'];
            $dorades_vents_max = $_POST['dorades_vents_max'];
            $transom = $_POST['transom'];
            $bow = $_POST['bow'];
            $stern = $_POST['stern'];
            $rail = $_POST['rail'];
            $ladder = $_POST['ladder'];
            //ABOVE DECK
            $spars = $_POST['spars'];
            $standing_rigging = $_POST['standing_rigging'];
            $chain_plates = $_POST['chain_plates'];
            $dodger = $_POST['dodger'];
            $bimini = $_POST['bimini'];

            
            //BASIC SEARCH
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
                $query .= "AND (boat_type = '{$boat_type}') ";
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
            //UNDERWATER
            if(!empty($spade_aft_fg)) {
                $query .= "AND (spade_aft_fg = '{$spade_aft_fg}') ";
            }
            if(!empty($ballast_type)) {
                $query .= "AND (ballast_type = '{$ballast_type}') ";
            }
            if(!empty($keel_design)) {
                $query .= "AND (keel_design = '{$keel_design}') ";
            }
            if(!empty($hull_material)) {
                $query .= "AND (hull_material = '{$hull_material}') ";
            }
            if(!empty($rig_design)) {
                $query .= "AND (rig_design = '{$rig_design}') ";
            }
            //BELOW DECK
            if(!empty($engine_type)) {
                $query .= "AND (engine_type = '{$engine_type}') ";
            }
            if(!empty($engine_make)) {
                $query .= "AND (engine_make = '{$engine_make}') ";
            }
            if($engine_horsepower_min && $engine_horsepower_max !== null) {
                $query .= "AND (engine_horsepower BETWEEN $engine_horsepower_min AND $engine_horsepower_max) ";
            }
            if($fuel_capacity_min && $fuel_capacity_max !== null) {
                $query .= "AND (fuel_capacity BETWEEN $fuel_capacity_min AND $fuel_capacity_max) ";
            }
            if($water_capacity_min && $water_capacity_max !== null) {
                $query .= "AND (water_capacity BETWEEN $water_capacity_min AND $water_capacity_max) ";
            }
            if($cabins_min && $cabins_max !== null) {
                $query .= "AND (cabins BETWEEN $cabins_min AND $cabins_max) ";
            }
            if($heads_min && $heads_max !== null) {
                $query .= "AND (heads BETWEEN $heads_min AND $heads_max) ";
            }
            if($salon_seating_min && $berths_max !== null) {
                $query .= "AND (salon_seating BETWEEN $salon_seating_min AND $salon_seating_max) ";
            }
            if(!empty($forepeak)) {
                $query .= "AND (forepeak = '{$forepeak}') ";
            }
            if(!empty($midships)) {
                $query .= "AND (midships = '{$midships}') ";
            }
            if(!empty($salon)) {
                $query .= "AND (salon = '{$salon}') ";
            }
            if(!empty($galley)) {
                $query .= "AND (galley = '{$galley}') ";
            }
            if(!empty($quarter)) {
                $query .= "AND (quarter = '{$quarter}') ";
            }
            if(!empty($aft)) {
                $query .= "AND (aft = '{$aft}') ";
            }
            if(!empty($navigation_comm)) {
                $query .= "AND (navigation_comm = '{$navigation_comm}') ";
            }
            //ON DECK
            if(!empty($helm)) {
                $query .= "AND (helm = '{$helm}') ";
            }
            if(!empty($cockpit)) {
                $query .= "AND (cockpit = '{$cockpit}') ";
            }
            if($scuppers_min && $scuppers_max !== null) {
                $query .= "AND (scuppers BETWEEN $scuppers_min AND $scuppers_max) ";
            }
            if(!empty($coaming)) {
                $query .= "AND (coaming = '{$coaming}') ";
            }
            if($gunwales_bullwarks_min && $gunwales_bullwarks_max !== null) {
                $query .= "AND (gunwales_bullwarks BETWEEN $gunwales_bullwarks_min AND $gunwales_bullwarks_max) ";
            }
            if(!empty($companionway)) {
                $query .= "AND (companionway = '{$companionway}') ";
            }
            if(!empty($cabin)) {
                $query .= "AND (cabin = '{$cabin}') ";
            }
            if($hatches_min && $hatches_max !== null) {
                $query .= "AND (hatches BETWEEN $hatches_min AND $hatches_max) ";
            }
            if(!empty($ports_openning)) {
                $query .= "AND (ports_openning = '{$ports_openning}') ";
            }
            if(!empty($ports_fixed)) {
                $query .= "AND (ports_fixed = '{$ports_fixed}') ";
            }
            if($dorades_vents_min && $dorades_vents_max !== null) {
                $query .= "AND (dorades_vents BETWEEN $dorades_vents_min AND $dorades_vents_max) ";
            }
            if(!empty($transom)) {
                $query .= "AND (transom = '{$transom}') ";
            }
            if(!empty($bow)) {
                $query .= "AND (bow = '{$bow}') ";
            }
            if(!empty($stern)) {
                $query .= "AND (stern = '{$stern}') ";
            }
            if(!empty($rail)) {
                $query .= "AND (rail = '{$rail}') ";
            }
            if(!empty($ladder)) {
                $query .= "AND (ladder = '{$ladder}') ";
            }
            //ABOVE DECK
            if(!empty($spars)) {
                $query .= "AND (spars = '{$spars}') ";
            }
            if(!empty($standing_rigging)) {
                $query .= "AND (standing_rigging = '{$standing_rigging}') ";
            }
            if(!empty($chain_plates)) {
                $query .= "AND (chain_plates = '{$chain_plates}') ";
            }
            if(!empty($dodger)) {
                $query .= "AND (dodger = '{$dodger}') ";
            }
            if(!empty($bimini)) {
                $query .= "AND (bimini = '{$bimini}') ";
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