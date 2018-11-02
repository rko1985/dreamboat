<?php include("includes/header.php"); ?>

<?php 
    if(isset($_GET['b_id'])){
        
        $the_boat_id = $_GET['b_id'];

    }

    $query = "SELECT * FROM boats WHERE boat_id = $the_boat_id";
    $select_boat_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_boat_query)){
        $boat_name = $row['boat_name'];
        $boat_year = $row['boat_year'];
        $boat_type = $row['boat_type'];
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
        //UNDER WATER
        $spade_aft_fg = $row['spade_aft_fg']; 
        $ballast_type = $row['ballast_type'];
        $keel_design = $row['keel_design'];
        $hull_material = $row['hull_material'];
        $rig_design = $row['rig_design'];
        //BELOW DECK
        $engine_type = $row['engine_type']; 
        $engine_make = $row['engine_make'];
        $engine_horsepower = $row['engine_horsepower'];
        $fuel_capacity = $row['fuel_capacity'];
        $water_capacity = $row['water_capacity'];
        $cabins = $row['cabins'];
        $heads = $row['heads'];
        $berths = $row['berths'];
        $salon_seating = $row['salon_seating'];
        $forepeak = $row['forepeak'];
        $midships = $row['midships'];
        $salon = $row['salon'];
        $galley = $row['galley'];
        $quarter = $row['quarter'];
        $aft = $row['aft'];
        $navigation_comm = $row['navigation_comm'];
        //ON DECK
        $helm = $row['helm'];
        $cockpit = $row['cockpit'];
        $scuppers = $row['scuppers'];
        $coaming = $row['coaming'];
        $gunwales_bullwarks = $row['gunwales_bullwarks'];
        $companionway = $row['companionway'];
        $cabin = $row['cabin'];
        $hatches = $row['hatches'];
        $ports_openning = $row['ports_openning'];
        $ports_fixed = $row['ports_fixed'];
        $dorades_vents = $row['dorades_vents'];
        $transom = $row['transom'];
        $bow = $row['bow'];
        $stern = $row['stern'];
        $rail = $row['rail'];
        $ladder = $row['ladder'];
        //ABOVE DECK
        $spars = $row['spars'];
        $standing_rigging = $row['standing_rigging'];
        $chain_plates = $row['chain_plates'];
        $dodger = $row['dodger'];
        $bimini = $row['bimini'];
    }


?>


<!-- The Image -->
<div class="container">
    <div class="row">
        <div class="col" align="center">
            <img width=500 src="images/<?php echo $boat_image?>" alt="">
        </div>
    </div>
</div>

<!-- The Basics -->
<div class="display-4">The Basics</div>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Year</th>
            <th>Type</th>
            <th>Builder</th>
            <th>Designer</th>
            <th>LOA</th>
            <th>LOD</th>
            <th>LWL</th>
            <th>BEAM</th>
            <th>Ballast</th>
            <th>Displacement</th>
            <th>Ballast Displacement</th>
            <th>Draft</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $boat_name;?></td>
            <td><?php echo $boat_year;?></td>
            <td><?php echo $boat_type;?></td>
            <td><?php echo $builder;?></td>
            <td><?php echo $designer;?></td>
            <td><?php echo $LOA;?></td>
            <td><?php echo $LOD;?></td>
            <td><?php echo $LWL;?></td>
            <td><?php echo $beam;?></td>
            <td><?php echo $ballast;?></td>
            <td><?php echo $displacement;?></td>
            <td><?php echo $ballast_displacement;?></td>
            <td><?php echo $draft;?></td>
        </tr>
    </tbody>
</table>

<!-- Under Water -->
<div class="display-4">Under Water</div>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Spade/Aft/FG</th>
            <th>Ballast Type</th>
            <th>Keel Design</th>
            <th>Hull Material</th>
            <th>Rig Design</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $spade_aft_fg;?></td>
            <td><?php echo $ballast_type;?></td>
            <td><?php echo $keel_design;?></td>
            <td><?php echo $hull_material;?></td>
            <td><?php echo $rig_design;?></td>
        </tr>
    </tbody>
</table>
<!-- Below -->
<div class="display-4">Below Deck</div>
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
            <td><?php echo $engine_type;?></td>
            <td><?php echo $engine_make;?></td>
            <td><?php echo $engine_horsepower;?></td>
            <td><?php echo $fuel_capacity;?></td>
            <td><?php echo $water_capacity;?></td>
            <td><?php echo $cabins;?></td>
            <td><?php echo $heads;?></td>
            <td><?php echo $berths;?></td>
            <td><?php echo $salon_seating;?></td>
            <td><?php echo $forepeak;?></td>
            <td><?php echo $midships;?></td>
            <td><?php echo $salon;?></td>
            <td><?php echo $galley;?></td>
            <td><?php echo $quarter;?></td>
            <td><?php echo $aft;?></td>
            <td><?php echo $navigation_comm;?></td></td>
        </tr>
    </tbody>
</table>

<!-- On Deck -->
<div class="display-4">On Deck</div>
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
            <td><?php echo $helm;?></td>
            <td><?php echo $cockpit;?></td>
            <td><?php echo $scuppers;?></td>
            <td><?php echo $coaming;?></td>
            <td><?php echo $gunwales_bullwarks;?></td>
            <td><?php echo $companionway;?></td>
            <td><?php echo $cabin;?></td>
            <td><?php echo $hatches;?></td>
            <td><?php echo $ports_openning;?></td>
            <td><?php echo $ports_fixed;?></td>
            <td><?php echo $dorades_vents;?></td>
            <td><?php echo $transom;?></td>
            <td><?php echo $bow;?></td>
            <td><?php echo $stern;?></td>
            <td><?php echo $rail;?></td>
            <td><?php echo $ladder;?></td></td>
        </tr>
    </tbody>
</table>

<!-- Above Deck -->
<div class="display-4">Above Deck</div>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Spars</th>
            <th>Standing Rigging</th>
            <th>Chain Plates</th>
            <th>Dodger</th>
            <th>Bimini</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $spars;?></td>
            <td><?php echo $standing_rigging;?></td>
            <td><?php echo $chain_plates;?></td>
            <td><?php echo $dodger;?></td>
            <td><?php echo $bimini;?></td>
        </tr>
    </tbody>
</table>


<?php include("includes/footer.php"); ?>
