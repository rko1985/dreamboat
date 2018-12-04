<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
<?php include("includes/functions.php"); ?>

    <!-- Start Here -->


<?php 

    
   

    if(isset($_POST['Add_Boat'])){
         //BASICS
        $boat_name = $_POST['boat_name'];
        $boat_year = $_POST['boat_year'];
        $boat_year = !empty($boat_year) ? $boat_year : "NULL"; //checks if empty and if empty sends null (for optional data)
        if(isset($_POST['boat_type'])){$boat_type = $_POST['boat_type'];} //multiselect       
        $boat_model = $_POST['boat_model'];
        $boat_submodel = $_POST['boat_submodel'];
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
        $ballast_displacement = round($ballast/$displacement,2);
        $draft = $_POST['draft'];
        if(isset($_POST['rig_design'])){$rig_design = $_POST['rig_design'];} //multiselect 

        //UNDER WATER
        if(isset($_POST['rudder_design'])){$rudder_design = $_POST['rudder_design'];} //multiselect
        if(isset($_POST['ballast_type'])){$ballast_type = $_POST['ballast_type'];} //multiselect
        if(isset($_POST['keel_design'])){$keel_design = $_POST['keel_design'];} //multiselect  
        if(isset($_POST['hull_material'])){$hull_material = $_POST['hull_material'];} //multiselect 
        if(isset($_POST['bow'])){$bow = $_POST['bow'];} //multiselect 
        if(isset($_POST['stern'])){$stern = $_POST['stern'];} //multiselect 
        if(isset($_POST['transom'])){$transom = $_POST['transom'];} //multiselect  
        
        //BELOW DECK
        if(isset($_POST['engine_type'])){$engine_type = $_POST['engine_type'];} //multiselect
        if(isset($_POST['engine_make'])){$engine_make = $_POST['engine_make'];} //multiselect
        $engine_horsepower = $_POST['engine_horsepower'];
        $fuel_capacity = $_POST['fuel_capacity'];
        $water_capacity = $_POST['water_capacity'];
        $cabins = $_POST['cabins'];
        $heads = $_POST['heads'];
        $berths = $_POST['berths'];
        $salon_seating = $_POST['salon_seating'];
        if(isset($_POST['forepeak'])){$forepeak = $_POST['forepeak'];} //multiselect
        if(isset($_POST['midships'])){$midships = $_POST['midships'];} //multiselect
        if(isset($_POST['salon'])){$salon = $_POST['salon'];} //multiselect
        if(isset($_POST['galley'])){$galley = $_POST['galley'];} //multiselect
        if(isset($_POST['quarter'])){$quarter = $_POST['quarter'];} //multiselect
        if(isset($_POST['aft'])){$aft = $_POST['aft'];} //multiselect
        if(isset($_POST['navigation_comm'])){$navigation_comm = $_POST['navigation_comm'];} //multiselect
      

        //ON DECK
        if(isset($_POST['helm'])){$helm = $_POST['helm'];} //multiselect
        if(isset($_POST['cockpit'])){$cockpit = $_POST['cockpit'];} //multiselect
        if(isset($_POST['scuppers'])){$scuppers = $_POST['scuppers'];} //multiselect
        if(isset($_POST['coaming'])){$coaming = $_POST['coaming'];} //multiselect
        if(isset($_POST['gunwales_bullwarks'])){$gunwales_bullwarks = $_POST['gunwales_bullwarks'];} //multiselect
        if(isset($_POST['companionway'])){$companionway = $_POST['companionway'];} //multiselect
        if(isset($_POST['cabin'])){$cabin = $_POST['cabin'];} //multiselect
        $hatches = $_POST['hatches'];
        $ports_openning = $_POST['ports_openning'];
        $ports_fixed = $_POST['ports_fixed'];
        $dorades_vents = $_POST['dorades_vents'];
        $rail = $_POST['rail'];
        $ladder = $_POST['ladder'];

        //ABOVE DECK
        if(isset($_POST['mast'])){$mast = $_POST['mast'];} //multiselect
        if(isset($_POST['standing_rigging'])){$standing_rigging = $_POST['standing_rigging'];} //multiselect
        if(isset($_POST['chain_plates'])){$chain_plates = $_POST['chain_plates'];} //multiselect
        if(isset($_POST['dodger'])){$dodger = $_POST['dodger'];} //multiselect
        if(isset($_POST['bimini'])){$bimini = $_POST['bimini'];} //multiselect
        if(isset($_POST['spreaders'])){$spreaders = $_POST['spreaders'];} //multiselect
        if(isset($_POST['boom'])){$boom = $_POST['boom'];} //multiselect


        $boat_image = time() . $boat_image; //adds timestampe to boat name to create unique image name
        move_uploaded_file($boat_image_temp, "images/$boat_image");

        $query = "INSERT INTO boats (boat_name, boat_year, boat_model, boat_submodel, boat_image, builder, designer, LOA, LOD, LWL, beam, ballast, displacement, ballast_displacement, draft,";
        $query .= "engine_horsepower, fuel_capacity, water_capacity, cabins, heads, berths,salon_seating,";
        $query .= "hatches, ports_openning, ports_fixed, dorades_vents, rail, ladder) ";
        $query .= "VALUES('{$boat_name}', '{$boat_year}', '{$boat_model}','{$boat_submodel}','{$boat_image}','{$builder}','{$designer}','{$LOA}','{$LOD}','{$LWL}','{$beam}','{$ballast}','{$displacement}','{$ballast_displacement}','{$draft}',";
        $query .= " '{$engine_horsepower}','{$fuel_capacity}','{$water_capacity}','{$cabins}','{$heads}','{$berths}','{$salon_seating}',";
        $query .= " '{$hatches}','{$ports_openning}','{$ports_fixed}','{$dorades_vents}','{$rail}','{$ladder}')";
        $create_boat_query = mysqli_query($connection, $query);

        if(!$create_boat_query){
            echo mysqli_error($connection);
        }

        //BASICS
        if(isset($boat_type)){multiselectInsert($boat_type, 'boat_types', 'type_id');}
        if(isset($rig_design)){multiselectInsert($rig_design, 'boat_rig_design', 'rig_design_id');}
        //UNDERWATER
        if(isset($rudder_design)){multiselectInsert($rudder_design, 'boat_rudder_design', 'rudder_design_id');}
        if(isset($ballast_type)){multiselectInsert($ballast_type, 'boat_ballast_type', 'ballast_type_id');}
        if(isset($keel_design)){multiselectInsert($keel_design, 'boat_keel_design', 'keel_design_id');}
        if(isset($hull_material)){multiselectInsert($hull_material, 'boat_hull_material', 'hull_material_id');}
        if(isset($bow)){multiselectInsert($bow, 'boat_bow', 'bow_id');}
        if(isset($stern)){multiselectInsert($stern, 'boat_stern', 'stern_id');}
        if(isset($transom)){multiselectInsert($transom, 'boat_transom', 'transom_id');}
        //BELOW DECK
        if(isset($engine_type)){multiselectInsert($engine_type, 'boat_engine_type', 'engine_type_id');}
        if(isset($engine_make)){multiselectInsert($engine_make, 'boat_engine_make', 'engine_make_id');}
        if(isset($forepeak)){multiselectInsert($forepeak, 'boat_forepeak', 'forepeak_id');}
        if(isset($midships)){multiselectInsert($midships, 'boat_midships', 'midships_id');}
        if(isset($salon)){multiselectInsert($salon, 'boat_salon', 'salon_id');}
        if(isset($galley)){multiselectInsert($galley, 'boat_galley', 'galley_id');}
        if(isset($quarter)){multiselectInsert($quarter, 'boat_quarter', 'quarter_id');}
        if(isset($aft)){multiselectInsert($aft, 'boat_aft', 'aft_id');}
        if(isset($navigation_comm)){multiselectInsert($navigation_comm, 'boat_navigation_comm', 'navigation_comm_id');}
        //ON DECK
        if(isset($helm)){multiselectInsert($helm, 'boat_helm', 'helm_id');}
        if(isset($cockpit)){multiselectInsert($cockpit, 'boat_cockpit', 'cockpit_id');}
        if(isset($scuppers)){multiselectInsert($scuppers, 'boat_scuppers', 'scuppers_id');}
        if(isset($coaming)){multiselectInsert($coaming, 'boat_coaming', 'coaming_id');}
        if(isset($gunwales_bullwarks)){multiselectInsert($gunwales_bullwarks, 'boat_gunwales_bullwarks', 'gunwales_bullwarks_id');}
        if(isset($companionway)){multiselectInsert($companionway, 'boat_companionway', 'companionway_id');}
        if(isset($cabin)){multiselectInsert($cabin, 'boat_cabin', 'cabin_id');}
        //ABOVE DECK
        if(isset($mast)){multiselectInsert($mast, 'boat_mast', 'mast_id');}
        if(isset($standing_rigging)){multiselectInsert($standing_rigging, 'boat_standing_rigging', 'standing_rigging_id');}
        if(isset($chain_plates)){multiselectInsert($chain_plates, 'boat_chain_plates', 'chain_plates_id');}
        if(isset($dodger)){multiselectInsert($dodger, 'boat_dodger', 'dodger_id');}
        if(isset($bimini)){multiselectInsert($bimini, 'boat_bimini', 'bimini_id');}
        if(isset($spreaders)){multiselectInsert($spreaders, 'boat_spreaders', 'spreaders_id');}
        if(isset($boom)){multiselectInsert($boom, 'boat_boom', 'boom_id');}

    }

?>
    
<h1 class="text-center">Add Boat</h1>


<div class="container">
<form action="" method="post" enctype="multipart/form-data">
    <h3>The Basics</h3>
    <div class="form-row">
        <div class="col">
            <label for="boat_name">Name: </label>
            <input type="text" class="form-control" name="boat_name" required>
        </div>
        <div class="col">
            <label for="boat_year">Year: </label>
            <input type="number" class="form-control" name="boat_year" value="">
        </div>
        <div class="col">
            <label for="boat_type">Boat Type: </label><br>
            <select multiple class="selectpicker form-control" name="boat_type[]" id="boat_type">
                <option value="1">Sail</option>
                <option value="2">Power</option> 
                <option value="3">Motor Sail</option>
                <option value="4">Fishing</option>
                <option value="5">Trawler</option>
                <option value="6">Cabin Cruiser</option>
                <option value="7">Sunseeker</option>
                <option value="8">Monohull</option>
                <option value="9">Catamaran</option>
                <option value="10">Trimaran</option>
                <option value="11">Twin Hull</option>
            </select>
        </div>
    </div> <!-- End of form-row -->
    <div class="form-row">
        <div class="col">
            <label for="boat_model">Model: </label>
            <input type="text" class="form-control" name="boat_model">
        </div>
        <div class="col">
            <label for="boat_submodel">Sub-Model: </label>
            <input type="text" class="form-control" name="boat_submodel">
        </div>    
    </div> <!-- End of form-row -->
    <div class="form-control-file">
        <label for="boat_image">Upload Image: </label><br>
        <input type="file" name="boat_image"> 
    </div>    
    <div class="form-row">        
        <div class="col">
            <label for="builder">Builder</label><br>
            <input class="form-control" type="text" name="builder" value="">
        </div>
        <div class="col">
            <label for="designer">Designer</label><br>
            <input class="form-control" type="text" name="designer" value="">
           
        </div>
    </div> <!-- End of form-row -->
    <div class="form-row">
        <div class="col">
            <label for="loa">LOA: </label>
            <input type="number" step=".01" class="form-control" name="LOA"  value="">
        </div>
        <div class="col">
            <label for="lod">LOD: </label>
            <input type="number" step=".01" class="form-control" name="LOD" value="">
        </div>
        <div class="col">
            <label for="lwl">LWL: </label>
            <input type="number" step=".01" class="form-control" name="LWL" value="">
        </div>
        <div class="col">
            <label for="beam">Beam: </label>
            <input type="number" step=".01" class="form-control" name="beam" value="">
        </div>
    </div> <!-- End of form-row -->
    <div class="form-row">
        <div class="col">
            <label for="ballast">Ballast (lbs): </label>
            <input type="number" step=".01" class="form-control" name="ballast" value="">
        </div>
        <div class="col">
            <label for="displacement">Displacement (lbs): </label>
            <input type="number" step=".01" class="form-control" name="displacement" value="">
        </div>
        
        <div class="col">
            <label for="draft">Draft: </label>
            <input type="number" step=".01" class="form-control" name="draft" value="">
        </div>
    </div> <!-- End of form-row -->
    <div class="form-row">
        <div class="col">
            <label for="rig_design">Rig Design:</label><br>
            <div class="form-check form-check-inline">
                <label class="form-check-input" for="sloop"><input class="form-check-input" type="checkbox" id="sloop" name="rig_design[]" value ="1">Sloop</label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-input" for="ketch"><input class="form-check-input" type="checkbox" id="ketch" name="rig_design[]" value ="2">Ketch</label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-input" for="yawl"><input class="form-check-input" type="checkbox" id="yawl" name="rig_design[]" value ="3">Yawl</label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-input" for="cutter"><input class="form-check-input" type="checkbox" id="cutter" name="rig_design[]" value ="4">Cutter</label>
            </div>
        </div>
    </div>
    <hr>
    <h3>Under Water</h3>

    <div class="form-row">        
        <div class="col">
            <label for="rudder_design">Rudder Design:</label><br>
            <select multiple class="selectpicker form-control" name="rudder_design[]" id="rudder_design">
                <option value="1">FG</option>
                <option value="2">Wood</option> 
                <option value="3">Steel</option>
                <option value="4">Aluminum</option>
                <option value="5">Spade</option>
                <option value="6">Hung</option> 
                <option value="7">Skeg</option>
                <option value="8">Transom</option>
                <option value="9">Keel</option>                                    
            </select>
        </div>
        <div class="col">
            <label for="ballast_type">Ballast Type:</label><br>
            <select multiple class="selectpicker form-control" name="ballast_type[]" id="ballast_type">
                <option value="1">Lead</option>
                <option value="2">Internal</option> 
                <option value="3">Fixed</option>
                <option value="4">Iron</option>
                <option value="5">Concrete</option>                              
            </select>
        </div>
        <div class="col">
            <label for="keel_design">Keel Design</label><br>
            <select multiple class="selectpicker form-control" name="keel_design[]" id="keel_design">
                <option value="1">Fin</option>
                <option value="2">3/4</option> 
                <option value="3">Full</option>
                <option value="4">FG</option>
                <option value="5">Lead</option>
                <option value="6">Iron</option> 
                <option value="7">Wing</option>
                <option value="8">Bulb</option>                
                <option value="9">Swing</option>
                <option value="10">Twin</option>
                <option value="11">Shoal</option>                                         
            </select>
        </div>
        <div class="col">
            <label for="hull_material">Hull Material:</label><br>
            <select multiple class="selectpicker form-control" name="hull_material[]" id="hull_material">
                <option value="1">Wood</option>
                <option value="2">Iron</option> 
                <option value="3">Aluminum</option>
                <option value="4">Cement</option>
                <option value="5">FG</option>
                <option value="6">Cored</option>
                <option value="7">Solid</option>                                
            </select>
        </div>
        
    </div> <!-- End of form-row -->

    <div class="form-row">        
        <div class="col">
            <label for="bow">Bow:</label><br>
            <select multiple class="selectpicker form-control" name="bow[]" id="bow" value="">
                <option value="1">Spoon</option>
                <option value="2">Plumb</option>
                <option value="3">Closed</option>                          
            </select>
        </div>
        <div class="col">
            <label for="stern">Stern:</label><br>
            <select multiple class="selectpicker form-control" name="stern[]" id="stern" value="">
                <option value="1">Counter</option>
                <option value="2">Canoe</option>
                <option value="3">Plumb</option>
                <option value="4">Lazarette</option>                           
            </select>
        </div>
        <div class="col">
            <label for="transom">Transom:</label><br>
            <select  multiple class="selectpicker form-control" name="transom[]" id="transom" value="">
                <option value="1">Reverse</option>
                <option value="2">Flush</option>
                <option value="3">Closed</option>
                <option value="4">Open</option>
                <option value="5">Scoop</option>
                <option value="6">Step</option>                           
            </select>
        </div>       
    </div>

    <hr>
    <h3>Below Deck</h3>
    <div class="form-row">
        <div class="col">
            <label for="engine_type">Engine Type:</label><br>
            <select multiple class="selectpicker form-control" name="engine_type[]" id="engine_type">
                <option value="1">Gasoline</option>
                <option value="2">Diesel</option> 
                <option value="3">Electric</option>
                <option value="4">Inboard</option>
                <option value="5">Outboard</option> 
                <option value="6">Inboard/Outboard</option>          
                <option value="7">Single</option>
                <option value="8">Twin</option>                             
            </select>
        </div>
        <div class="col">
            <label for="engine_make">Engine Make:</label><br>
            <select multiple class="selectpicker form-control" name="engine_make[]" id="engine_make">
                <option value="1">Universal</option>
                <option value="2">Yanmar</option> 
                <option value="3">Volvo</option>
                <option value="4">Perkins</option>
                <option value="5">Cummins</option> 
                <option value="6">Westerbeke</option>          
                <option value="7">Chrysler</option>
                <option value="8">Nissan</option>
                <option value="9">Yamaha</option>
                <option value="10">Beta</option>
                <option value="11">Honda</option>
                <option value="12">Other</option>                             
            </select>
        </div>
        <div class="col">
            <label for="engine_horsepower">Engine Horsepower:</label>
            <input type="number" class="form-control" name="engine_horsepower">
        </div>
        <div class="col">
            <label for="fuel_capacity">Fuel Capcity:</label>
            <input type="number" class="form-control" name="fuel_capacity">
        </div>
        
    </div> <!-- End of form-row -->

    <div class="form-row">
        <div class="col">
            <label for="water_capacity">Water Capacity:</label>
            <input type="number" class="form-control" name="water_capacity">
        </div>
        <div class="col">
            <label for="cabins">Cabins:</label>
            <input type="number" class="form-control" name="cabins">
        </div>
        <div class="col">
            <label for="heads">Heads:</label>
            <input type="number" class="form-control" name="heads">
        </div>
        <div class="col">
            <label for="berths">Berths:</label>
            <input type="number" class="form-control" name="berths">
        </div>
        
    </div> <!-- End of form-row -->

    <div class="form-row">

        <div class="col">
            <label for="salon_seating">Salon Seating:</label>
            <input type="number" class="form-control" name="salon_seating">
        </div>
        <div class="col">
            <label for="forepeak">Forepeak:</label><br>
            <select multiple class="selectpicker form-control" name="forepeak[]" id="forepeak">
                <option value="1">Berth-V</option>
                <option value="2">Head</option> 
                <option value="3">Storage</option>
                <option value="4">Vanity</option>                              
            </select>
        </div>
        <div class="col">
            <label for="midships">Midships:</label><br>
            <select multiple class="selectpicker form-control" name="midships[]" id="midships">
                <option value="1">Locker</option>
                <option value="2">Drawers</option> 
                <option value="3">Head</option>
                <option value="4">Cooler</option>                               
            </select>
        </div>
        <div class="col">
            <label for="salon">Salon:</label><br>
            <select multiple class="selectpicker form-control" name="salon[]" id="salon">
                <option value="1">Sette - Bench</option>
                <option value="2">Settle - U</option> 
                <option value="3">Berth - 1/4</option>
                <option value="4">Berth - Pipe</option>
                <option value="5">Shelving</option>                           
            </select>
        </div>
        
    </div> <!-- End of form-row -->

    <div class="form-row">
        <div class="col">
            <label for="galley">Galley:</label><br>
            <select multiple class="selectpicker form-control" name="galley[]" id="galley">
                <option value="1">Cooler</option>
                <option value="2">Refrigerator</option> 
                <option value="3">Sink</option>
                <option value="4">Range</option>
                <option value="5">Oven</option>                           
            </select>
        </div>
        <div class="col">
            <label for="quarter">Quarter:</label><br>
            <select multiple class="selectpicker form-control" name="quarter[]" id="quarter">
                <option value="1">Kitchen</option>
                <option value="2">Kitchenetter</option> 
                <option value="3">Navigation</option>
                <option value="4">Lazaretter</option>
                <option value="5">Berth - Pipe</option>
                <option value="6">Berth - Double</option>
                <option value="7">Cabin</option>
                <option value="8">Head</option>                           
            </select>
        </div>
        <div class="col">
            <label for="aft">Aft:</label><br>
            <select multiple class="selectpicker form-control" name="aft[]" id="aft">
                <option value="1">Cooler</option>
                <option value="2">Refrigerator</option> 
                <option value="3">Sink</option>                           
            </select>
        </div>
        <div class="col">
            <label for="navigation_comm">Navigation/Communication:</label><br>
            <select multiple class="selectpicker form-control" name="navigation_comm[]" id="navigation_comm">
                <option value="1">GPS</option>
                <option value="2">VHF</option> 
                <option value="3">Radar</option>
                <option value="4">SSB</option>
                <option value="5">HAM</option>
                <option value="6">AM/FM</option>           
            </select>
        </div>    
    </div> <!-- End of form-row -->
    <hr>
    <h3>On Deck</h3>
    <div class="form-row">
        <div class="col">
            <label for="helm">Helm:</label><br>
            <select multiple class="selectpicker form-control" name="helm[]" id="helm">
                <option value="1">Tiller</option>
                <option value="2">Wheel</option> 
                <option value="3">Hydraulic</option>
                <option value="4">Mechanical</option>                           
            </select>
        </div>
        <div class="col">
            <label for="cockpit">Cockpit:</label><br>
            <select multiple class="selectpicker form-control" name="cockpit[]" id="cockpit">
                <option value="1">Symmetrical</option>
                <option value="2">Asymmetrical</option> 
                <option value="3">Stern</option>
                <option value="4">Center</option>
                <option value="5">3-5'</option>
                <option value="6">5-7'</option> 
                <option value="7">7-9'</option>
                <option value="8">9'+</option>                           
            </select>
        </div>
        <div class="col">
            <label for="scuppers">Scupper Size/Style</label><br>
            <select multiple class="selectpicker form-control" name="scuppers[]" id="scuppers">
                <option value="1">1"</option>
                <option value="2">1-2"</option> 
                <option value="3">2-3"</option>
                <option value="4">3"+</option>
                <option value="5">Through Hull</option>  
                <option value="6">Direct</option>                                  
            </select>
        </div>
        <div class="col">
            <label for="coaming">Coaming:</label><br>
            <select multiple class="selectpicker form-control" name="coaming[]" id="coaming">
                <option value="1">FG</option>
                <option value="2">Teak</option> 
                <option value="3">Wood</option>
                <option value="4">Steel</option>
                <option value="5">Aluminum</option>                           
            </select>
        </div>
          
    </div> <!-- End of form-row -->
    <div class="form-row">

        <div class="col">
            <label for="gunwales_bullwarks">Gunwales/Bullwarks:</label><br>
            <select multiple class="selectpicker form-control" name="gunwales_bullwarks[]" id="gunwales_bullwarks">
                <option value="1">1"</option>
                <option value="2">1-2"</option> 
                <option value="3">2-3"</option>
                <option value="4">3"+</option>                             
            </select>
        </div>
        <div class="col">
            <label for="companionway">Companionway:</label><br>
            <select multiple class="selectpicker form-control" name="companionway[]" id="companionway">
                <option value="1">Full</option>
                <option value="2">1/2</option> 
                <option value="3">V</option>                           
            </select>
        </div>  
        <div class="col">
            <label for="cabin">Cabin:</label><br>
            <select multiple class="selectpicker form-control" name="cabin[]" id="cabin">
                <option value="1">Raised</option>
                <option value="2">Flush</option> 
                <option value="3">Hard</option>
                <option value="4">Soft/Hard</option>                           
            </select>
        </div>
        <div class="col">
            <label for="hatches">Hatches:</label><br>
            <input type="number" class="form-control" name="hatches">
        </div>
                  
    </div> <!-- End of form-row -->

    <div class="form-row">
    <div class="col">
            <label for="ports_openning">Ports Openning:</label><br>
            <select class="form-control" name="ports_openning" id="ports_openning">
                <option value="">Select</option>
                <option value="Small">Small</option>
                <option value="Large">Large</option>                        
            </select>
        </div>
        <div class="col">
            <label for="ports_fixed">Ports Fixed:</label><br>
            <select class="form-control" name="ports_fixed" id="ports_fixed">
                <option value="">Select</option>
                <option value="Small">Small</option>
                <option value="Large">Large</option>                        
            </select>
        </div>
        <div class="col">
            <label for="dorades_vents">Dorades/Vents:</label><br>
            <input type="number" class="form-control" name="dorades_vents">
        </div>
         
    </div> <!-- End of form-row -->

    <div class="form-row">
        
        <div class="col">
            <label for="rail">Rail:</label><br>
            <select class="form-control" name="rail" id="rail">
                <option value="">Select</option>
                <option value="Wood">Wood</option>
                <option value="Rubber">Rubber</option>
                <option value="FG">FG</option>                          
            </select>
        </div>
        <div class="col">
            <label for="c">Ladder:</label><br>
            <select class="form-control" name="ladder" id="ladder">
                <option value="">Select</option>
                <option value="Fixed">Fixed</option>
                <option value="Non-Fixed">Non-Fixed</option>     
            </select>
        </div>
    </div> <!-- End of form-row -->


    <hr>
    <h3>Above Deck</h3>
    <div class="form-row">
        <div class="col">
            <label for="mast">Mast:</label><br>
            <select multiple class="selectpicker form-control" name="mast[]" id="mast">
                <option value="1">Aluminum</option>
                <option value="2">Wood</option>
                <option value="3">Steel</option>
                <option value="4">Carbon</option>
                <option value="5">Internal Furling</option> 
                <option value="6">External Furling</option>
                <option value="7">1</option>
                <option value="8">2</option> 
                <option value="9">3+</option>                           
            </select>
        </div>
        <div class="col">
            <label for="standing_rigging">Standing Rigging:</label><br>
            <select multiple class="selectpicker form-control" name="standing_rigging[]" id="standing_rigging">
                <option value="1">Wire</option>
                <option value="2">Rod</option>
                <option value="3">Continuous</option>
                <option value="4">Discontinuous</option>
                <option value="5">Furling</option> 
                <option value="6">Masthead</option>
                <option value="7">Fractional</option>
                <option value="8">Stayless</option>                          
            </select>
        </div>
        <div class="col">
            <label for="chain_plates">Chain Plates:</label><br>
            <select multiple class="selectpicker form-control" name="chain_plates[]" id="chain_plates">
                <option value="1">Stainless</option>
                <option value="2">Bronze</option>
                <option value="3">Hull</option>
                <option value="4">Bulkhead</option>
                <option value="5">Deck</option>                          
            </select>
        </div>
        <div class="col">
            <label for="dodger">Dodger:</label><br>
            <select multiple class="selectpicker form-control" name="dodger[]" id="dodger">
                <option value="1">Full</option>
                <option value="2">Partial</option>
                <option value="3">Rigid</option>
                <option value="4">Soft</option>                          
            </select>
        </div>
        <div class="col">
            <label for="bimini">Bimini:</label><br>
            <select multiple class="selectpicker form-control" name="bimini[]" id="bimini">
                <option value="1">Full</option>
                <option value="2">Partial</option>
                <option value="3">Fixed</option>
                <option value="4">Non-Fixed</option>
                <option value="5">Folding</option>    
            </select>
        </div> 
    </div> <!-- End of form-row -->

    <div class="form-row">
        <div class="col">
            <label for="spreaders">Spreaders:</label><br>
            <select multiple class="selectpicker form-control" name="spreaders[]" id="spreaders">
                <option value="1">Aluminum</option>
                <option value="2">Wood</option>
                <option value="3">Steel</option>
                <option value="4">Carbon</option>
                <option value="5">Athwart</option>     
                <option value="6">Swept</option>
            </select>
        </div>
        <div class="col">
            <label for="boom">Boom:</label><br>
            <select multiple class="selectpicker form-control" name="boom[]" id="boom">
                <option value="1">Aluminum</option>
                <option value="2">Wood</option>
                <option value="3">Steel</option>
                <option value="4">Carbon</option>
                <option value="5">Internal Furling</option>
                <option value="6">External Furling</option>       
            </select>
        </div>  
    </div>
    
     <div class="form-row pt-3">
        <div class="col">
            <input class="btn btn-primary btn-lg float-right" type="submit" name="Add_Boat" value="Add Boat">
        </div>
     </div>   
        
    
</form>
</div> <!-- End of container -->



<?php include("includes/footer.php"); ?>

<script>

    $(document).ready(function(){

        $('.selectpicker').selectpicker();

    });

</script>