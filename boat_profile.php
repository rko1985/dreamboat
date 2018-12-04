<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
<?php include("includes/functions.php"); ?>
<?php 
    if(isset($_GET['b_id'])){
        
        $boat_id = $_GET['b_id'];

    }

    $query = "SELECT * FROM boats WHERE boat_id = $boat_id";
    $select_boat_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_boat_query)){
        $boat_name = $row['boat_name'];
        $boat_year = $row['boat_year'];
        $boat_model = $row['boat_model'];
        $boat_submodel = $row['boat_submodel'];
        $boat_image = $row['boat_image'];
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
        // //UNDER WATER
        // $spade_aft_fg = $row['spade_aft_fg']; 
        // $ballast_type = $row['ballast_type'];
        // $keel_design = $row['keel_design'];
        // $hull_material = $row['hull_material'];
        // $rig_design = $row['rig_design'];
        //BELOW DECK
        // $engine_type = $row['engine_type']; 
        // $engine_make = $row['engine_make'];
        $engine_horsepower = $row['engine_horsepower'];
        $fuel_capacity = $row['fuel_capacity'];
        $water_capacity = $row['water_capacity'];
        $cabins = $row['cabins'];
        $heads = $row['heads'];
        $berths = $row['berths'];
        $salon_seating = $row['salon_seating'];
        // $forepeak = $row['forepeak'];
        // $midships = $row['midships'];
        // $salon = $row['salon'];
        // $galley = $row['galley'];
        // $quarter = $row['quarter'];
        // $aft = $row['aft'];
        // $navigation_comm = $row['navigation_comm'];
        //ON DECK
        // $helm = $row['helm'];
        // $cockpit = $row['cockpit'];
        // // $scuppers = $row['scuppers'];
        // $coaming = $row['coaming'];
        // $gunwales_bullwarks = $row['gunwales_bullwarks'];
        // $companionway = $row['companionway'];
        // $cabin = $row['cabin'];
        $hatches = $row['hatches'];
        $ports_openning = $row['ports_openning'];
        $ports_fixed = $row['ports_fixed'];
        $dorades_vents = $row['dorades_vents'];
        // $transom = $row['transom'];
        // $bow = $row['bow'];
        // $stern = $row['stern'];
        $rail = $row['rail'];
        $ladder = $row['ladder'];
        // //ABOVE DECK
        // $spars = $row['spars'];
        // $standing_rigging = $row['standing_rigging'];
        // $chain_plates = $row['chain_plates'];
        // $dodger = $row['dodger'];
        // $bimini = $row['bimini'];
    }


?>
<div class="container ">
       <p class="display-3 text-lg-center"><?php echo $boat_name;?></p>
</div>
<div class="container py-2">
    <div class="row">
        <div class="col-lg-8">
            <img class="img-responsive" width=500 style="width: 100%; height: 100%" src="images/<?php echo $boat_image?>" alt="">
        </div>
        <div class="col border">
            <p><b>Name:</b>  <?php echo $boat_name;?><br>
            <b>Year:</b>  <?php echo $boat_year;?><br>
            <b>Type:</b>  <?php readMultiSelect('boat_types', 'types', 'type_id', 'type_name');?><br>
            <b>Model:</b>  <?php echo $boat_model;?><br>
            <b>Sub-Model:</b>  <?php echo $boat_submodel;?><br>
            <b>Builder:</b>  <?php echo $builder;?><br>
            <b>Designer:</b>  <?php echo $designer;?><br>
            <b>LOA:</b>  <?php echo $LOA;?><br>
            <b>LOD:</b> <?php echo $LOD;?><br>
            <b>LWL:</b>  <?php echo $LWL;?><br>
            <b>Beam:</b>  <?php echo $beam;?><br>
            <b>Ballast:</b>  <?php echo $ballast;?><br>
            <b>Displacement:</b>  <?php echo $displacement;?><br>
            <b>Ballast/Displacement:</b>  <?php echo $ballast_displacement;?><br>
            <b>Rig Design:</b>  <?php readMultiSelect('boat_rig_design', 'rig_design', 'rig_design_id', 'rig_design_name');?><br>

            </p>
        </div>
    </div>
</div>




<!-- Under Water -->
<div class="container">
    <h3>Under Water</h3>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Rudder Design</th>
                <th>Ballast Type</th>
                <th>Keel Design</th>
                <th>Hull Material</th>
                <th>Bow</th>
                <th>Stern</th>
                <th>Transom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php readMultiSelect('boat_rudder_design', 'rudder_design', 'rudder_design_id', 'rudder_design_name');?></td>
                <td><?php readMultiSelect('boat_ballast_type', 'ballast_type', 'ballast_type_id', 'ballast_type_name');?></td>
                <td><?php readMultiSelect('boat_keel_design', 'keel_design', 'keel_design_id', 'keel_design_name');?></td>
                <td><?php readMultiSelect('boat_hull_material', 'hull_material', 'hull_material_id', 'hull_material_name');?></td>
                <td><?php readMultiSelect('boat_bow', 'bow', 'bow_id', 'bow_name');?></td>
                <td><?php readMultiSelect('boat_stern', 'stern', 'stern_id', 'stern_name');?></td>
                <td><?php readMultiSelect('boat_transom', 'transom', 'transom_id', 'transom_name');?></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Below Deck -->
<div class="container">
    <h3>Below Deck</h3>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Engine Type</th>
                <th>Engine Make</th>
                <th>Engine Horsepower</th>
                <th>Fuel Capacity</th>
                <th>Water Capacity</th>
                <th>Cabins</th>
                <th>Heads</th>
                <th>Berths</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php readMultiSelect('boat_engine_type', 'engine_type', 'engine_type_id', 'engine_type_name');?></td>
                <td><?php readMultiSelect('boat_engine_make', 'engine_make', 'engine_make_id', 'engine_make_name');?></td>
                <td><?php echo $engine_horsepower;?></td>
                <td><?php echo $fuel_capacity;?></td>
                <td><?php echo $water_capacity;?></td>
                <td><?php echo $cabins;?></td>
                <td><?php echo $heads;?></td>
                <td><?php echo $berths;?></td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Salon Seating</th>
                <th>Forepeak</th>
                <th>Midships</th>
                <th>Salon</th>
                <th>Galley</th>
                <th>Quarter</th>
                <th>Aft</th>
                <th>Navigation/Communication</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $salon_seating;?></td>
                <td><?php readMultiSelect('boat_forepeak', 'forepeak', 'forepeak_id', 'forepeak_name');?></td>
                <td><?php readMultiSelect('boat_midships', 'midships', 'midships_id', 'midships_name');?></td>
                <td><?php readMultiSelect('boat_salon', 'salon', 'salon_id', 'salon_name');?></td>
                <td><?php readMultiSelect('boat_galley', 'galley', 'galley_id', 'galley_name');?></td>
                <td><?php readMultiSelect('boat_quarter', 'quarter', 'quarter_id', 'quarter_name');?></td>
                <td><?php readMultiSelect('boat_aft', 'aft', 'aft_id', 'aft_name');?></td>
                <td><?php readMultiSelect('boat_navigation_comm', 'navigation_comm', 'navigation_comm_id', 'navigation_comm_name');?></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- On Deck -->
<div class="container">
    <h3>On Deck</h3>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Helm</th>
                <th>Cockpit</th>
                <th>Scuppers</th>
                <th>Coaming</th>
                <th>Gunwales/Bullwarks</th>
                <th>Companionway</th>
                <th>Cabin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php readMultiSelect('boat_helm', 'helm', 'helm_id', 'helm_name');?></td>
            <td><?php readMultiSelect('boat_cockpit', 'cockpit', 'cockpit_id', 'cockpit_name');?></td>
            <td><?php readMultiSelect('boat_scuppers', 'scuppers', 'scuppers_id', 'scuppers_name');?></td>
            <td><?php readMultiSelect('boat_coaming', 'coaming', 'coaming_id', 'coaming_name');?></td>
            <td><?php readMultiSelect('boat_gunwales_bullwarks', 'gunwales_bullwarks', 'gunwales_bullwarks_id', 'gunwales_bullwarks_name');?></td>
            <td><?php readMultiSelect('boat_companionway', 'companionway', 'companionway_id', 'companionway_name');?></td>
            <td><?php readMultiSelect('boat_cabin', 'cabin', 'cabin_id', 'cabin_name');?></td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Hatches</th>
                <th>Ports Openning</th>
                <th>Ports Fixed</th>
                <th>Dorades Vents</th>               
                <th>Rail</th>
                <th>Ladder</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $hatches;?></td>
                <td><?php echo $ports_openning;?></td>
                <td><?php echo $ports_fixed;?></td>
                <td><?php echo $dorades_vents;?></td>            
                <td><?php echo $rail;?></td>
                <td><?php echo $ladder;?></td></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Above Deck -->
<div class="container">
    <h3>Above Deck</h3>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Mast</th>
                <th>Standing Rigging</th>
                <th>Chain Plates</th>
                <th>Dodger</th>
                <th>Bimini</th>
                <th>Spreaders</th>
                <th>Boom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php readMultiSelect('boat_mast', 'mast', 'mast_id', 'mast_name')?></td>
            <td><?php readMultiSelect('boat_standing_rigging', 'standing_rigging', 'standing_rigging_id', 'standing_rigging_name');?></td>
            <td><?php readMultiSelect('boat_chain_plates', 'chain_plates', 'chain_plates_id', 'chain_plates_name');?></td>
            <td><?php readMultiSelect('boat_dodger', 'dodger', 'dodger_id', 'dodger_name');?></td>
            <td><?php readMultiSelect('boat_bimini', 'bimini', 'bimini_id', 'bimini_name')?></td>
            <td><?php readMultiSelect('boat_spreaders', 'spreaders', 'spreaders_id', 'spreaders_name')?></td>
            <td><?php readMultiSelect('boat_boom', 'boom', 'boom_id', 'boom_name')?></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Below -->
<!-- <div class="display-4">Below Deck</div> 
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Engine Type</th>
            <th>Engine Make</th>
            <th>Engine Horsepower</th>
            <th>Fuel Capacity</th>
            <th>Wather Capacity</th>
            <th>Cabins</th>
            <th>Heads</th>
            <th>Berths</th>
            <th>Salon Seating</th>
            <th>Forepeak</th>
            <th>Midships</th>
            <th>Salon</th>
            <th>Galley</th>
            <th>Quarter</th>
            <th>Aft</th>
            <th>Navigation/Communication</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php readMultiSelect('boat_engine_type', 'engine_type', 'engine_type_id', 'engine_type_name');?></td>
            <td><?php readMultiSelect('boat_engine_make', 'engine_make', 'engine_make_id', 'engine_make_name');?></td>
            <td><?php echo $engine_horsepower;?></td>
            <td><?php echo $fuel_capacity;?></td>
            <td><?php echo $water_capacity;?></td>
            <td><?php echo $cabins;?></td>
            <td><?php echo $heads;?></td>
            <td><?php echo $berths;?></td>
            <td><?php echo $salon_seating;?></td>
            <td><?php readMultiSelect('boat_forepeak', 'forepeak', 'forepeak_id', 'forepeak_name');?></td>
            <td><?php readMultiSelect('boat_midships', 'midships', 'midships_id', 'midships_name');?></td>
            <td><?php readMultiSelect('boat_salon', 'salon', 'salon_id', 'salon_name');?></td>
            <td><?php readMultiSelect('boat_galley', 'galley', 'galley_id', 'galley_name');?></td>
            <td><?php readMultiSelect('boat_quarter', 'quarter', 'quarter_id', 'quarter_name');?></td>
            <td><?php readMultiSelect('boat_aft', 'aft', 'aft_id', 'aft_name');?></td>
            <td><?php readMultiSelect('boat_navigation_comm', 'navigation_comm', 'navigation_comm_id', 'navigation_comm_name');?></td></td>
        </tr>
    </tbody>
</table> --> 

<!-- On Deck -->
<!-- <div class="display-4">On Deck</div>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Helm</th>
            <th>Cockpit</th>
            <th>Scuppers</th>
            <th>Coaming</th>
            <th>Gunwales/Bullwarks</th>
            <th>Companionway</th>
            <th>Cabin</th>
            <th>Hatches</th>
            <th>Ports Openning</th>
            <th>Ports Fixed</th>
            <th>Dorades Vents</th>
            <th>Transom</th>
            <th>Bow</th>
            <th>Stern</th>
            <th>Rail</th>
            <th>Ladder</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php readMultiSelect('boat_helm', 'helm', 'helm_id', 'helm_name');?></td>
            <td><?php readMultiSelect('boat_cockpit', 'cockpit', 'cockpit_id', 'cockpit_name');?></td>
            <td><?php readMultiSelect('boat_scuppers', 'scuppers', 'scuppers_id', 'scuppers_name');?></td>
            <td><?php readMultiSelect('boat_coaming', 'coaming', 'coaming_id', 'coaming_name');?></td>
            <td><?php readMultiSelect('boat_gunwales_bullwarks', 'gunwales_bullwarks', 'gunwales_bullwarks_id', 'gunwales_bullwarks_name');?></td>
            <td><?php readMultiSelect('boat_coaming', 'coaming', 'coaming_id', 'coaming_name');?></td>
            <td><?php readMultiSelect('boat_companionway', 'companionway', 'companionway_id', 'companionway_name');?></td>
            <td><?php echo $hatches;?></td>
            <td><?php echo $ports_openning;?></td>
            <td><?php echo $ports_fixed;?></td>
            <td><?php echo $dorades_vents;?></td>
            <td><?php readMultiSelect('boat_transom', 'transom', 'transom_id', 'transom_name');?></td>
            <td><?php readMultiSelect('boat_bow', 'bow', 'bow_id', 'bow_name');?></td>
            <td><?php readMultiSelect('boat_stern', 'stern', 'stern_id', 'stern_name');?></td>
            <td><?php echo $rail;?></td>
            <td><?php echo $ladder;?></td></td>
        </tr>
    </tbody>
</table> -->

<!-- Above Deck -->
<!-- <div class="display-4">Above Deck</div>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Standing Rigging</th>
            <th>Chain Plates</th>
            <th>Dodger</th>
            <th>Bimini</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php readMultiSelect('boat_standing_rigging', 'standing_rigging', 'standing_rigging_id', 'standing_rigging_name');?></td>
            <td><?php readMultiSelect('boat_chain_plates', 'chain_plates', 'chain_plates_id', 'chain_plates_name');?></td>
            <td><?php readMultiSelect('boat_dodger', 'dodger', 'dodger_id', 'dodger_name');?></td>
            <td><?php readMultiSelect('boat_bimini', 'bimini', 'bimini_id', 'bimini_name')?></td>
        </tr>
    </tbody>
</table> --> 


<?php include("includes/footer.php"); ?>
