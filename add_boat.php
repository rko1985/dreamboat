<?php include("includes/header.php"); ?>

    <!-- Start Here -->


<?php 

    
   

    if(isset($_POST['Add_Boat'])){
         //BASICS
        $boat_name = $_POST['boat_name'];
        $boat_year = $_POST['boat_year'];
        $boat_type = $_POST['boat_type'];
        $boat_image = $_FILES['boat_image']['name'];
        $boat_image_temp = $_FILES['boat_image']['tmp_name'];
        $builder = $_POST['builder'];
        $designer = $_POST['designer'];
        $LOA = $_POST['LOA'];
        $LOD = $_POST['LOD'];
        $LWL = $_POST['LWL'];
        $beam = $_POST['beam'];
        $ballast = $_POST['ballast'];
        $displacement = $_POST['displacement'];
        $ballast_displacement = $_POST['ballast_displacement'];
        $draft = $_POST['draft'];
        //UNDER WATER
        $spade_aft_fg = $_POST['spade_aft_fg']; 
        $ballast_type = $_POST['ballast_type'];
        $keel_design = $_POST['keel_design'];
        $hull_material = $_POST['hull_material'];
        $rig_design = $_POST['rig_design'];
        //BELOW DECK
        $engine_type = $_POST['engine_type']; 
        $engine_make = $_POST['engine_make'];
        $engine_horsepower = $_POST['engine_horsepower'];
        $fuel_capacity = $_POST['fuel_capacity'];
        $water_capacity = $_POST['water_capacity'];
        $cabins = $_POST['cabins'];
        $heads = $_POST['heads'];
        $berths = $_POST['berths'];
        $salon_seating = $_POST['salon_seating'];
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
        $scuppers = $_POST['scuppers'];
        $coaming = $_POST['coaming'];
        $gunwales_bullwarks = $_POST['gunwales_bullwarks'];
        $companionway = $_POST['companionway'];
        $cabin = $_POST['cabin'];
        $hatches = $_POST['hatches'];
        $ports_openning = $_POST['ports_openning'];
        $ports_fixed = $_POST['ports_fixed'];
        $dorades_vents = $_POST['dorades_vents'];
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


        move_uploaded_file($boat_image_temp, "images/$boat_image");

        $query = "INSERT INTO boats(boat_name, boat_year, boat_type, boat_image, builder, designer, LOA, LOD, LWL, beam, ballast, displacement, ballast_displacement, draft, ";
        $query .= "spade_aft_fg, ballast_type, keel_design, hull_material, rig_design, ";
        $query .= "engine_type, engine_make, engine_horsepower, fuel_capacity, water_capacity, cabins, heads, berths, salon_seating, forepeak, midships, salon, galley, quarter, aft, navigation_comm, ";
        $query .= "helm, cockpit, scuppers, coaming, gunwales_bullwarks, companionway, cabin, hatches, ports_openning, ports_fixed, dorades_vents, transom, bow, stern, rail, ladder, ";
        $query .= "spars, standing_rigging, chain_plates, dodger, bimini)";
        $query .= "VALUES ('{$boat_name}' , {$boat_year} , '{$boat_type}', '{$boat_image}', '{$builder}', '{$designer}', '{$LOA}','{$LOD}','{$LWL}','{$beam}','{$ballast}','{$displacement}','{$ballast_displacement}','{$draft}', ";
        $query .= "'{$spade_aft_fg}','{$ballast_type}','{$keel_design}','{$hull_material}','{$rig_design}', ";
        $query .= "'{$engine_type}','{$engine_make}','{$engine_horsepower}','{$fuel_capacity}','{$water_capacity}','{$cabins}','{$heads}','{$berths}','{$salon_seating}','{$forepeak}','{$midships}','{$salon}','{$galley}','{$quarter}','{$aft}','{$navigation_comm}', ";
        $query .= "'{$helm}', '{$cockpit}', '{$scuppers}', '{$coaming}', '{$gunwales_bullwarks}', '{$companionway}', '{$cabin}', '{$hatches}', '{$ports_openning}', '{$ports_fixed}', '{$dorades_vents}', '{$transom}', '{$bow}', '{$stern}', '{$rail}', '{$ladder}', ";
        $query .= "'{$spars}', '{$standing_rigging}', '{$chain_plates}', '{$dodger}', '{$bimini}')";

        $create_boat_query = mysqli_query($connection, $query);

        if(!$create_boat_query){
            echo mysqli_error($connection);
        }
        
    }

?>
    
<h1>Add Boat</h1>



<form action="" method="post" enctype="multipart/form-data">
    <h3>The Basics</h3>
    <div class="form-row">
        <div class="col">
            <label for="boat_name">Name: </label>
            <input type="text" class="form-control" name="boat_name">
        </div>
        <div class="col">
            <label for="boat_year">Year: </label>
            <input type="text" class="form-control" name="boat_year">
        </div>
        <div class="col">
            <label for="boat_type">Boat Type: </label><br>
            <select class="form-control" name="boat_type" id="boat_type">
                <option value="Sail">Sail</option>
                <option value="Power">Power</option> 
                <option value="Motor Sail">Motor Sail</option>
                <option value="Fishing">Fishing</option>
            </select>
        </div>
    </div>
    <div class="form-control-file">
        <label for="boat_image">Upload Image: </label><br>
        <input type="file" name="boat_image"> 
    </div>    
    <div class="form-row">        
        <div class="col">
            <label for="builder">Builder</label><br>
            <select class="form-control" name="builder" id="builder">
                <option value="Ranger">Ranger</option>
                <option value="Coronado">Coronado</option> 
                <option value="Rhoades">Rhoades</option>                           
            </select>
        </div>
        <div class="col">
            <label for="designer">Designer</label><br>
            <select class="form-control" name="designer" id="designer">
                <option value="gary_mull">Gary Mull</option>
                <option value="ed_edgar">Ed Edgar</option> 
                <option value="frank_butler">Frank Butler</option>                           
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            <label for="loa">LOA: </label>
            <input type="text" class="form-control" name="LOA">
        </div>
        <div class="col">
            <label for="lod">LOD: </label>
            <input type="text" class="form-control" name="LOD">
        </div>
        <div class="col">
            <label for="lwl">LWL: </label>
            <input type="text" class="form-control" name="LWL">
        </div>
        <div class="col">
            <label for="beam">Beam: </label>
            <input type="text" class="form-control" name="beam">
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            <label for="ballast">Ballast (lbs): </label>
            <input type="text" class="form-control" name="ballast">
        </div>
        <div class="col">
            <label for="displacement">Displacement (lbs): </label>
            <input type="text" class="form-control" name="displacement">
        </div>
        <div class="col">
            <label for="ballast_displacement">Ballast/Displacement: </label>
            <input type="text" class="form-control" name="ballast_displacement">
        </div>
        <div class="col">
            <label for="draft">Draft: </label>
            <input type="text" class="form-control" name="draft">
        </div>
    </div>
    <hr>
    <h3>Under Water</h3>

    <div class="form-row">        
        <div class="col">
            <label for="spade_aft_fg">Spade, Aft, FG:</label><br>
            <select class="form-control" name="spade_aft_fg" id="spade_aft_fg">
                <option value="FG">FG</option>
                <option value="Wood">Wood</option> 
                <option value="Steel">Steel</option>
                <option value="Aluminum">Aluminum</option>                               
            </select>
        </div>
        <div class="col">
            <label for="ballast_type">Ballast Type:</label><br>
            <select class="form-control" name="ballast_type" id="ballast_type">
                <option value="Lead">Lead</option>
                <option value="Internal">Internal</option> 
                <option value="Fixed">Fixed</option>
                <option value="Iron">Iron</option>                              
            </select>
        </div>
        <div class="col">
            <label for="keel_design">Keel Design</label><br>
            <select class="form-control" name="keel_design" id="keel_design">
                <option value="Fin">Fin</option>
                <option value="3/4">3/4</option> 
                <option value="Full">Full</option>
                <option value="FG">FG</option>
                <option value="Lead">Lead</option>
                <option value="Iron">Iron</option> 
                <option value="Wing">Wing</option>
                <option value="Bulb">Bulb</option>                
                <option value="Swing">Swing</option>
                <option value="Twin">Twin</option>
                <option value="Shoal">Shoal</option>                                         
            </select>
        </div>
        <div class="col">
            <label for="hull_material">Hull Material:</label><br>
            <select class="form-control" name="hull_material" id="hull_material">
                <option value="Wood">Wood</option>
                <option value="Iron">Iron</option> 
                <option value="Aluminum">Aluminum</option>
                <option value="Cement">Cement</option>                              
            </select>
        </div>
        <div class="col">
            <label for="rig_design">Rig Design:</label><br>
            <select class="form-control" name="rig_design" id="rig_design">
                <option value="Sloop">Sloop</option>
                <option value="Ketch">Ketch</option> 
                <option value="Yawl">Yawl</option>
                <option value="Cutter">Cutter</option>                              
            </select>
        </div>
    </div>

    <hr>
    <h3>Below Deck</h3>
    <div class="form-row">
        <div class="col">
            <label for="engine_type">Engine Type:</label><br>
            <select class="form-control" name="engine_type" id="engine_type">
                <option value="Gasoline">Gasoline</option>
                <option value="Diesel">Diesel</option> 
                <option value="Electric">Electric</option>                           
            </select>
        </div>
        <div class="col">
            <label for="engine_make">Engine Make:</label><br>
            <select class="form-control" name="engine_make" id="engine_make">
                <option value="Universal">Universal</option>
                <option value="Yamaha">Yamaha</option> 
                <option value="Volvo">Volvo</option>                           
            </select>
        </div>
        <div class="col">
            <label for="engine_horsepower">Engine Horsepower:</label>
            <input type="text" class="form-control" name="engine_horsepower">
        </div>
        <div class="col">
            <label for="fuel_capacity">Fuel Capcity:</label>
            <input type="text" class="form-control" name="fuel_capacity">
        </div>
        <div class="col">
            <label for="water_capacity">Water Capacity:</label>
            <input type="text" class="form-control" name="water_capacity">
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <label for="cabins">Cabins:</label>
            <input type="text" class="form-control" name="cabins">
        </div>
        <div class="col">
            <label for="heads">Heads:</label>
            <input type="text" class="form-control" name="heads">
        </div>
        <div class="col">
            <label for="berths">Berths:</label>
            <input type="text" class="form-control" name="berths">
        </div>
        <div class="col">
            <label for="salon_seating">Salon Seating:</label>
            <input type="text" class="form-control" name="salon_seating">
        </div>
        <div class="col">
            <label for="forepeak">Forepeak:</label><br>
            <select class="form-control" name="forepeak" id="forepeak">
                <option value="Berth-V">Berth-V</option>
                <option value="Head">Head</option> 
                <option value="Storage">Storage</option>                           
            </select>
        </div>
        <div class="col">
            <label for="midships">Midships:</label><br>
            <select class="form-control" name="midships" id="midships">
                <option value="Locker">Locker</option>
                <option value="Drawers">Drawers</option> 
                <option value="Head">Head</option>                           
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <label for="salon">Salon:</label><br>
            <select class="form-control" name="salon" id="salon">
                <option value="Sette - Bench">Sette - Bench</option>
                <option value="Settle - U">Settle - U</option> 
                <option value="Berth - 1/4">Berth - 1/4</option>                           
            </select>
        </div>
        <div class="col">
            <label for="galley">Galley:</label><br>
            <select class="form-control" name="galley" id="galley">
                <option value="Cooler">Cooler</option>
                <option value="Refrigerator">Refrigerator</option> 
                <option value="Sink">Sink</option>                           
            </select>
        </div>
        <div class="col">
            <label for="quarter">Quarter:</label><br>
            <select class="form-control" name="quarter" id="quarter">
                <option value="Kitchen">Kitchen</option>
                <option value="Kitchenetter">Kitchenetter</option> 
                <option value="Navigation">Navigation</option>                           
            </select>
        </div>
        <div class="col">
            <label for="aft">Aft:</label><br>
            <select class="form-control" name="aft" id="aft">
                <option value="Cooler">Cooler</option>
                <option value="Refrigerator">Refrigerator</option> 
                <option value="Sink">Sink</option>                           
            </select>
        </div>
        <div class="col">
            <label for="navigation_comm">Navigation/Communication:</label><br>
            <select class="form-control" name="navigation_comm" id="navigation_comm">
                <option value="GPS">GPS</option>
                <option value="VHF">VHF</option> 
                <option value="AM/FM">AM/FM</option>                           
            </select>
        </div>    
    </div>
    <hr>
    <h3>On Deck</h3>
    <div class="form-row">
        <div class="col">
            <label for="helm">Helm:</label><br>
            <select class="form-control" name="helm" id="helm">
                <option value="Tiller">Tiller</option>
                <option value="Wheel">Wheel</option> 
                <option value="Hydraulic">Hydraulic</option>                           
            </select>
        </div>
        <div class="col">
            <label for="cockpit">Cockpit:</label><br>
            <select class="form-control" name="cockpit" id="cockpit">
                <option value="Symmetrical">Symmetrical</option>
                <option value="Asymmetrical">Asymmetrical</option> 
                <option value="Stern">Stern</option>                           
            </select>
        </div>
        <div class="col">
            <label for="scuppers">Scuppers:</label><br>
            <input type="text" class="form-control" name="scuppers">
        </div>
        <div class="col">
            <label for="coaming">Coaming:</label><br>
            <select class="form-control" name="coaming" id="coaming">
                <option value="FG">FG</option>
                <option value="Teak">Teak</option> 
                <option value="Wood">Wood</option>                           
            </select>
        </div>
        <div class="col">
            <label for="gunwales_bullwarks">Gunwales/Bullwarks:</label><br>
            <input type="text" class="form-control" name="gunwales_bullwarks">
        </div>
        <div class="col">
            <label for="companionway">Companionway:</label><br>
            <select class="form-control" name="companionway" id="companionway">
                <option value="Full">Full</option>
                <option value="1/2">1/2</option> 
                <option value="V">V</option>                           
            </select>
        </div>    
    </div>
    <div class="form-row">
        <div class="col">
            <label for="cabin">Cabin:</label><br>
            <select class="form-control" name="cabin" id="cabin">
                <option value="Raised">Raised</option>
                <option value="Flush">Flush</option> 
                <option value="Hard">Hard</option>                           
            </select>
        </div>
        <div class="col">
            <label for="hatches">Hatches:</label><br>
            <input type="text" class="form-control" name="hatches">
        </div>
        <div class="col">
            <label for="ports_openning">Ports Openning:</label><br>
            <select class="form-control" name="ports_openning" id="ports_openning">
                <option value="Small">Small</option>
                <option value="Large">Large</option>                        
            </select>
        </div>
        <div class="col">
            <label for="ports_fixed">Ports Fixed:</label><br>
            <select class="form-control" name="ports_fixed" id="ports_fixed">
                <option value="Small">Small</option>
                <option value="Large">Large</option>                        
            </select>
        </div>
        <div class="col">
            <label for="dorades_vents">Dorades/Vents:</label><br>
            <input type="text" class="form-control" name="dorades_vents">
        </div>
        <div class="col">
            <label for="transom">Transom:</label><br>
            <select class="form-control" name="transom" id="transom">
                <option value="Reverse">Reverse</option>
                <option value="Flush">Flush</option>
                <option value="Closed">Closed</option>                          
            </select>
        </div>
        <div class="col">
            <label for="bow">Bow:</label><br>
            <select class="form-control" name="bow" id="bow">
                <option value="Spoon">Spoon</option>
                <option value="Plumb">Plumb</option>
                <option value="Closed">Closed</option>                          
            </select>
        </div>
        <div class="col">
            <label for="stern">Stern:</label><br>
            <select class="form-control" name="stern" id="stern">
                <option value="Counter">Counter</option>
                <option value="Canoe">Canoe</option>
                <option value="Plumb">Plumb</option>                          
            </select>
        </div>
        <div class="col">
            <label for="rail">Rail:</label><br>
            <select class="form-control" name="rail" id="rail">
                <option value="Wood">Wood</option>
                <option value="Rubber">Rubber</option>
                <option value="FG">FG</option>                          
            </select>
        </div>
        <div class="col">
            <label for="ladder">Ladder:</label><br>
            <select class="form-control" name="ladder" id="ladder">
                <option value="Fixed">Fixed</option>
                <option value="Non-Fixed">Non-Fixed</option>     
            </select>
        </div>          
    </div>
    <hr>
    <h3>Above Deck</h3>
    <div class="form-row">
        <div class="col">
            <label for="spars">Spars:</label><br>
            <select class="form-control" name="spars" id="spars">
                <option value="Aluminum">Aluminum</option>
                <option value="Wood">Wood</option>
                <option value="Steel">Steel</option>                          
            </select>
        </div>
        <div class="col">
            <label for="standing_rigging">Standing Rigging:</label><br>
            <select class="form-control" name="standing_rigging" id="standing_rigging">
                <option value="Wire">Wire</option>
                <option value="Rod">Rod</option>
                <option value="Continuous">Continuous</option>                          
            </select>
        </div>
        <div class="col">
            <label for="chain_plates">Chain Plates:</label><br>
            <select class="form-control" name="chain_plates" id="chain_plates">
                <option value="Stainless">Stainless</option>
                <option value="Bronze">Bronze</option>
                <option value="Hull">Hull</option>                          
            </select>
        </div>
        <div class="col">
            <label for="dodger">Dodger:</label><br>
            <select class="form-control" name="dodger" id="dodger">
                <option value="Full">Full</option>
                <option value="Partial">Partial</option>
                <option value="Rigid">Rigid</option>                          
            </select>
        </div>
        <div class="col">
            <label for="bimini">Bimini:</label><br>
            <select class="form-control" name="bimini" id="bimini">
                <option value="Full">Full</option>
                <option value="Partial">Partial</option>
                <option value="Fixed">Fixed</option>
                <option value="Non-Fixed">Non-Fixed</option>     
            </select>
        </div> 
    </div>
        
    <hr>
    <div class="col">
        <input class="btn btn-primary btn-lg float-right" type="submit" name="Add_Boat" value="Add Boat">
    </div>
</form>




<?php include("includes/footer.php"); ?>