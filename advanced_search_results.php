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
            $ballast_min = $_POST['ballast_min'];
            $ballast_max = $_POST['ballast_max'];
            $displacement_min = $_POST['displacement_min'];
            $displacement_max = $_POST['displacement_max'];
            $ballast_displacement_min = $_POST['ballast_displacement_min'];
            $ballast_displacement_max = $_POST['ballast_displacement_max'];
            $draft_min = $_POST['draft_min'];
            $draft_max = $_POST['draft_max'];
            if(isset($_POST['rig_design'])){$rig_design = $_POST['rig_design'];}

            //UNDERWATER
            if(isset($_POST['rudder_design'])){$rudder_design = $_POST['rudder_design'];}
            if(isset($_POST['ballast_type'])){$ballast_type = $_POST['ballast_type'];}
            if(isset($_POST['keel_design'])){$keel_design = $_POST['keel_design'];}
            if(isset($_POST['hull_material'])){$hull_material = $_POST['hull_material'];}
            if(isset($_POST['bow'])){$bow = $_POST['bow'];}
            if(isset($_POST['stern'])){$stern = $_POST['stern'];}
            if(isset($_POST['transom'])){$transom = $_POST['transom'];}
            
            //BELOW DECK START
            if(isset($_POST['engine_type'])){$engine_type = $_POST['engine_type'];}
            if(isset($_POST['engine_make'])){$engine_make = $_POST['engine_make'];}
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
            if(isset($_POST['forepeak'])){$forepeak = $_POST['forepeak'];}
            if(isset($_POST['midships'])){$midships = $_POST['midships'];}
            if(isset($_POST['salon'])){$salon = $_POST['salon'];}
            if(isset($_POST['galley'])){$galley = $_POST['galley'];}
            if(isset($_POST['quarter'])){$quarter = $_POST['quarter'];}
            if(isset($_POST['aft'])){$aft = $_POST['aft'];}
            if(isset($_POST['navigation_comm'])){$navigation_comm = $_POST['navigation_comm'];}
            //ON DECK
            if(isset($_POST['helm'])){$helm = $_POST['helm'];}
            if(isset($_POST['cockpit'])){$cockpit = $_POST['cockpit'];}
            if(isset($_POST['scuppers'])){$scuppers = $_POST['scuppers'];}
            if(isset($_POST['coaming'])){$coaming = $_POST['coaming'];}
            if(isset($_POST['gunwales_bullwarks'])){$gunwales_bullwarks = $_POST['gunwales_bullwarks'];}
            if(isset($_POST['companionway'])){$companionway = $_POST['companionway'];}
            if(isset($_POST['cabin'])){$cabin = $_POST['cabin'];}
            $hatches_min = $_POST['hatches_min'];
            $hatches_max = $_POST['hatches_max'];
            $ports_openning = $_POST['ports_openning'];
            $ports_fixed = $_POST['ports_fixed'];
            $dorades_vents_min = $_POST['dorades_vents_min'];
            $dorades_vents_max = $_POST['dorades_vents_max'];
            $rail = $_POST['rail'];
            $ladder = $_POST['ladder'];
            //ABOVE DECK
            if(isset($_POST['mast'])){$mast = $_POST['mast'];}
            if(isset($_POST['standing_rigging'])){$standing_rigging = $_POST['standing_rigging'];}
            if(isset($_POST['chain_plates'])){$chain_plates = $_POST['chain_plates'];}
            if(isset($_POST['dodger'])){$dodger = $_POST['dodger'];}
            if(isset($_POST['bimini'])){$bimini = $_POST['bimini'];}
            if(isset($_POST['spreaders'])){$spreaders = $_POST['spreaders'];}
            if(isset($_POST['boom'])){$boom = $_POST['boom'];}

            $arrayCount = 0; 

            $query = "SELECT * FROM boats ";

             //TABLE JOINS

            if(isset($boat_type)){joinTables($boat_type, 'boat_types', 'types', 'type_id');};
            if(isset($rig_design)){joinTables($rig_design, 'boat_rig_design', 'rig_design', 'rig_design_id');};
            if(isset($rudder_design)){joinTables($rudder_design, 'boat_rudder_design', 'rudder_design', 'rudder_design_id');};
            if(isset($ballast_type)){joinTables($ballast_type, 'boat_ballast_type', 'ballast_type', 'ballast_type_id');};
            if(isset($keel_design)){joinTables($keel_design, 'boat_keel_design', 'keel_design', 'keel_design_id');};
            if(isset($hull_material)){joinTables($hull_material, 'boat_hull_material', 'hull_material', 'hull_material_id');};
            if(isset($bow)){joinTables($bow, 'boat_bow', 'bow', 'bow_id');};
            if(isset($stern)){joinTables($stern, 'boat_stern', 'stern', 'stern_id');};
            if(isset($transom)){joinTables($transom, 'boat_transom', 'transom', 'transom_id');};
            if(isset($forepeak)){joinTables($forepeak, 'boat_forepeak', 'forepeak', 'forepeak_id');};
            if(isset($midships)){joinTables($midships, 'boat_midships', 'midships', 'midships_id');};
            if(isset($salon)){joinTables($salon, 'boat_salon', 'salon', 'salon_id');};
            if(isset($galley)){joinTables($galley, 'boat_galley', 'galley', 'galleyv_id');};
            if(isset($quarter)){joinTables($quarter, 'boat_quarter', 'quarter', 'quarter_id');};
            if(isset($aft)){joinTables($aft, 'boat_aft', 'aft', 'aft_id');};
            if(isset($navigation_comm)){joinTables($navigation_comm, 'boat_navigation_comm', 'navigation_comm', 'navigation_comm_id');};
            if(isset($helm)){joinTables($helm, 'boat_helm', 'helm', 'helm_id');};
            if(isset($cockpit)){joinTables($cockpit, 'boat_cockpit', 'cockpit', 'cockpit_id');};
            if(isset($scuppers)){joinTables($scuppers, 'boat_scuppers', 'scuppers', 'scuppers_id');};
            if(isset($coaming)){joinTables($coaming, 'boat_coaming', 'coaming', 'coaming_id');};
            if(isset($gunwales_bullwarks)){joinTables($gunwales_bullwarks, 'boat_gunwales_bullwarks', 'gunwales_bullwarks', 'gunwales_bullwarks_id');};
            if(isset($companionway)){joinTables($companionway, 'boat_companionway', 'companionway', 'companionway_id');};
            if(isset($cabin)){joinTables($cabin, 'boat_cabin', 'cabin', 'cabin_id');};
            if(isset($mast)){joinTables($mast, 'boat_mast', 'mast', 'mast_id');};
            if(isset($standing_rigging)){joinTables($standing_rigging, 'boat_standing_rigging', 'standing_rigging', 'standing_rigging_id');};
            if(isset($chain_plates)){joinTables($chain_plates, 'boat_chain_plates', 'chain_plates', 'chain_plates_id');};
            if(isset($dodger)){joinTables($dodger, 'boat_dodger', 'dodger', 'dodger_id');};
            if(isset($bimini)){joinTables($bimini, 'boat_bimini', 'bimini', 'bimini_id');};
            if(isset($spreaders)){joinTables($spreaders, 'boat_spreaders', 'spreaders', 'spreaders_id');};
            if(isset($boom)){joinTables($boom, 'boat_boom', 'boom', 'boom_id');};

            $query .= "WHERE ";

            //Multiselect Limiting conditions

            //BOAT TYPE (First Condition)
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
            //Additional Conditions
            if(isset($rig_design)) if(!empty($boat_type)){joinWhereAnd($rig_design, 'rig_design', 'rig_design_id');}else{joinWhereOr($rig_design, 'rig_design', 'rig_design_id');}
            if(isset($rudder_design)) if(!empty($boat_type) || !empty($rig_design)){joinWhereAnd($rudder_design, 'rudder_design', 'rudder_design_id');}else{joinWhereOr($rudder_design, 'rudder_design', 'rudder_design_id');}
            if(isset($ballast_type)) if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design)){joinWhereAnd($ballast_type, 'ballast_type', 'ballast_type_id');}else{joinWhereOr($ballast_type, 'ballast_type', 'ballast_type_id');}
            if(isset($keel_design)) if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type)){joinWhereAnd($keel_design, 'keel_design', 'keel_design_id');}else{joinWhereOr($keel_design, 'keel_design', 'keel_design_id');}
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers) || !empty($coaming))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers) || !empty($coaming) || !empty($gunwales_bullwarks))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers) || !empty($coaming) || !empty($gunwales_bullwarks) || !empty($companionway))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers) || !empty($coaming) || !empty($gunwales_bullwarks) || !empty($companionway) || !empty($cabin))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers) || !empty($coaming) || !empty($gunwales_bullwarks) || !empty($companionway) || !empty($cabin) || !empty($mast))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers) || !empty($coaming) || !empty($gunwales_bullwarks) || !empty($companionway) || !empty($cabin) || !empty($mast) || !empty($standing_rigging))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers) || !empty($coaming) || !empty($gunwales_bullwarks) || !empty($companionway) || !empty($cabin) || !empty($mast) || !empty($standing_rigging) || !empty($chain_plates))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers) || !empty($coaming) || !empty($gunwales_bullwarks) || !empty($companionway) || !empty($cabin) || !empty($mast) || !empty($standing_rigging) || !empty($chain_plates) || !empty($dodger))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers) || !empty($coaming) || !empty($gunwales_bullwarks) || !empty($companionway) || !empty($cabin) || !empty($mast) || !empty($standing_rigging) || !empty($chain_plates) || !empty($dodger) || !empty($bimini))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers) || !empty($coaming) || !empty($gunwales_bullwarks) || !empty($companionway) || !empty($cabin) || !empty($mast) || !empty($standing_rigging) || !empty($chain_plates) || !empty($dodger) || !empty($bimini) || !empty($spreaders))
            if(!empty($boat_type) || !empty($rig_design) || !empty($rudder_design) || !empty($ballast_type) || !empty($keel_design) || !empty($hull_material) || !empty($bow) || !empty($stern) || !empty($transom) || !empty($engine_type) || !empty($engine_make) || !empty($forepeak) || !empty($midships) || !empty($salon) || !empty($galley) || !empty($quarter) || !empty($aft) || !empty($navigation_comm) || !empty($helm) || !empty($cockpit) || !empty($scuppers) || !empty($coaming) || !empty($gunwales_bullwarks) || !empty($companionway) || !empty($cabin) || !empty($mast) || !empty($standing_rigging) || !empty($chain_plates) || !empty($dodger) || !empty($bimini) || !empty($spreaders) || !empty($boom))



























            if(isset($boat_type) || isset($rig_design) || isset($rudder_design)|| isset($ballast_type)|| isset($keel_design)){

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
                    if(isset($rig_design)){
                        $arrayCount += count($rig_design);
                    }
                    if(isset($rudder_design)){
                        $arrayCount += count($rudder_design);
                    }
                    if(isset($ballast_type)){
                        $arrayCount += count($ballast_type);
                    }
                    if(isset($keel_design)){
                        $arrayCount += count($keel_design);
                    }
                }
                $query .= $arrayCount;
            }

            echo $query;
            

            
            // //BASIC SEARCH
            // $query = "SELECT * FROM boats WHERE ";
            // if($year_beg && $year_end !== null) {
            //     $query .= "(boat_year BETWEEN $year_beg AND $year_end) ";
            // } else {
            //     $query .= "(boat_year BETWEEN 1 AND 9999) "; //This default parameter needs to be set for the following AND conditions to work
            // }
            // if($loa_min && $loa_max !== null) {
            //     $query .= "AND (LOA BETWEEN $loa_min AND $loa_max) ";
            // }
            // if(!empty($boat_type)) {
            //     $query .= "AND (boat_type = '{$boat_type}') ";
            // }
            // if(!empty($builder)) {
            //     $query .= "AND (builder = '{$builder}' ) ";
            // }
            // if(!empty($designer)) {
            //     $query .= "AND (designer = '{$designer}') ";
            // }
            // if($lod_min && $lod_max !== null) {
            //     $query .= "AND (LOD BETWEEN $lod_min AND $lod_max) ";
            // }
            // if($lwl_min && $lwl_max !== null) {
            //     $query .= "AND (LWL BETWEEN $lwl_min AND $lwl_max) ";
            // }
            // if($beam_min && $beam_max !== null) {
            //     $query .= "AND (beam BETWEEN $beam_min AND $beam_max) ";
            // }
            // if($ballast_min && $ballast_max !== null) {
            //     $query .= "AND (ballast BETWEEN $ballast_min AND $ballast_max) ";
            // }
            // if($displacement_min && $displacement_max !== null) {
            //     $query .= "AND (displacement BETWEEN $displacement_min AND $displacement_max) ";
            // }
            // if($ballast_displacement_min && $ballast_displacement_max !== null) {
            //     $query .= "AND (ballast_displacement BETWEEN $ballast_displacement_min AND $ballast_displacement_max) ";
            // }
            // if($draft_min && $draft_max !== null) {
            //     $query .= "AND (draft BETWEEN $draft_min AND $draft_max) ";
            // }
            // //UNDERWATER
            // if(!empty($spade_aft_fg)) {
            //     $query .= "AND (spade_aft_fg = '{$spade_aft_fg}') ";
            // }
            // if(!empty($ballast_type)) {
            //     $query .= "AND (ballast_type = '{$ballast_type}') ";
            // }
            // if(!empty($keel_design)) {
            //     $query .= "AND (keel_design = '{$keel_design}') ";
            // }
            // if(!empty($hull_material)) {
            //     $query .= "AND (hull_material = '{$hull_material}') ";
            // }
            // if(!empty($rig_design)) {
            //     $query .= "AND (rig_design = '{$rig_design}') ";
            // }
            // //BELOW DECK
            // if(!empty($engine_type)) {
            //     $query .= "AND (engine_type = '{$engine_type}') ";
            // }
            // if(!empty($engine_make)) {
            //     $query .= "AND (engine_make = '{$engine_make}') ";
            // }
            // if($engine_horsepower_min && $engine_horsepower_max !== null) {
            //     $query .= "AND (engine_horsepower BETWEEN $engine_horsepower_min AND $engine_horsepower_max) ";
            // }
            // if($fuel_capacity_min && $fuel_capacity_max !== null) {
            //     $query .= "AND (fuel_capacity BETWEEN $fuel_capacity_min AND $fuel_capacity_max) ";
            // }
            // if($water_capacity_min && $water_capacity_max !== null) {
            //     $query .= "AND (water_capacity BETWEEN $water_capacity_min AND $water_capacity_max) ";
            // }
            // if($cabins_min && $cabins_max !== null) {
            //     $query .= "AND (cabins BETWEEN $cabins_min AND $cabins_max) ";
            // }
            // if($heads_min && $heads_max !== null) {
            //     $query .= "AND (heads BETWEEN $heads_min AND $heads_max) ";
            // }
            // if($salon_seating_min && $berths_max !== null) {
            //     $query .= "AND (salon_seating BETWEEN $salon_seating_min AND $salon_seating_max) ";
            // }
            // if(!empty($forepeak)) {
            //     $query .= "AND (forepeak = '{$forepeak}') ";
            // }
            // if(!empty($midships)) {
            //     $query .= "AND (midships = '{$midships}') ";
            // }
            // if(!empty($salon)) {
            //     $query .= "AND (salon = '{$salon}') ";
            // }
            // if(!empty($galley)) {
            //     $query .= "AND (galley = '{$galley}') ";
            // }
            // if(!empty($quarter)) {
            //     $query .= "AND (quarter = '{$quarter}') ";
            // }
            // if(!empty($aft)) {
            //     $query .= "AND (aft = '{$aft}') ";
            // }
            // if(!empty($navigation_comm)) {
            //     $query .= "AND (navigation_comm = '{$navigation_comm}') ";
            // }
            // //ON DECK
            // if(!empty($helm)) {
            //     $query .= "AND (helm = '{$helm}') ";
            // }
            // if(!empty($cockpit)) {
            //     $query .= "AND (cockpit = '{$cockpit}') ";
            // }
            // if($scuppers_min && $scuppers_max !== null) {
            //     $query .= "AND (scuppers BETWEEN $scuppers_min AND $scuppers_max) ";
            // }
            // if(!empty($coaming)) {
            //     $query .= "AND (coaming = '{$coaming}') ";
            // }
            // if($gunwales_bullwarks_min && $gunwales_bullwarks_max !== null) {
            //     $query .= "AND (gunwales_bullwarks BETWEEN $gunwales_bullwarks_min AND $gunwales_bullwarks_max) ";
            // }
            // if(!empty($companionway)) {
            //     $query .= "AND (companionway = '{$companionway}') ";
            // }
            // if(!empty($cabin)) {
            //     $query .= "AND (cabin = '{$cabin}') ";
            // }
            // if($hatches_min && $hatches_max !== null) {
            //     $query .= "AND (hatches BETWEEN $hatches_min AND $hatches_max) ";
            // }
            // if(!empty($ports_openning)) {
            //     $query .= "AND (ports_openning = '{$ports_openning}') ";
            // }
            // if(!empty($ports_fixed)) {
            //     $query .= "AND (ports_fixed = '{$ports_fixed}') ";
            // }
            // if($dorades_vents_min && $dorades_vents_max !== null) {
            //     $query .= "AND (dorades_vents BETWEEN $dorades_vents_min AND $dorades_vents_max) ";
            // }
            // if(!empty($transom)) {
            //     $query .= "AND (transom = '{$transom}') ";
            // }
            // if(!empty($bow)) {
            //     $query .= "AND (bow = '{$bow}') ";
            // }
            // if(!empty($stern)) {
            //     $query .= "AND (stern = '{$stern}') ";
            // }
            // if(!empty($rail)) {
            //     $query .= "AND (rail = '{$rail}') ";
            // }
            // if(!empty($ladder)) {
            //     $query .= "AND (ladder = '{$ladder}') ";
            // }
            // //ABOVE DECK
            // if(!empty($spars)) {
            //     $query .= "AND (spars = '{$spars}') ";
            // }
            // if(!empty($standing_rigging)) {
            //     $query .= "AND (standing_rigging = '{$standing_rigging}') ";
            // }
            // if(!empty($chain_plates)) {
            //     $query .= "AND (chain_plates = '{$chain_plates}') ";
            // }
            // if(!empty($dodger)) {
            //     $query .= "AND (dodger = '{$dodger}') ";
            // }
            // if(!empty($bimini)) {
            //     $query .= "AND (bimini = '{$bimini}') ";
            // }
            

        
            
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

<?php include("includes/footer.php"); ?> <!-- Remove when finished testing -->