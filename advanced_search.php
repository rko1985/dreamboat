<?php include("includes/header.php"); ?> <!-- Remove when finished testing -->

<?php include("includes/navbar.php"); ?>

<h1 class="text-center">Advanced Search</h1>

<div class="container pb-5">
<form action="advanced_search_results.php" method="post">

<h4>Basic Parameters</h4>
<div class="form-row">

    <div class="col">
        <label for="boat_name">Name</label>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control form-control-sm" name="boat_name">
            </div>
        </div>
    </div>

    <div class="col">
        <label for="boat_year">Year Range</label>        
        <div class="row">
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="year_beg" placeholder="ex. 1965">
            </div>
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="year_end" placeholder="ex. 2015">
            </div>
        </div>
    </div>

    <div class="col">
        <label for="boat_type">Boat Type: </label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="boat_type[]" id="boat_type">
            <option value="Sail">Sail</option>
            <option value="Power">Power</option> 
            <option value="Motor Sail">Motor Sail</option>
            <option value="Fishing">Fishing</option>
            <option value="Trawler">Trawler</option>
            <option value="Cabin Cruiser">Cabin Cruiser</option>
            <option value="Sunseeker">Sunseeker</option>
            <option value="Monohull">Monohull</option>
            <option value="Catamaran">Catamaran</option>
            <option value="Trimaran">Trimaran</option>
            <option value="Twin Hull">Twin Hull</option>
        </select>
    </div>

    <div class="col">
        <label for="boat_model">Model</label>        
        <div class="row">
            <div class="col">
                <input type="text" class="form-control form-control-sm " name="boat_model">
            </div>
        </div>
    </div>

</div> <!-- End of form-row -->

<div class="form-row">

    <div class="col">
        <label for="boat_submodel">Sub-model</label>        
        <div class="row">
            <div class="col">
                <input type="text" class="form-control form-control-sm " name="boat_submodel">
            </div>
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="builder">Builder</label>
            <input class="form-control" type="text" name="builder" value="">
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="designer">Designer</label>
            <input class="form-control" type="text" name="designer" value="">
        </div>
    </div>



    <div class="col">
        <label for="loa">LOA</label>
        <div class="row">
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="loa_min" placeholder="ex. 1">
            </div>
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="loa_max" placeholder="ex. 5000">
            </div>
        </div>
    </div>

    </div><!-- End of form-row -->

    <div class="form-row">

    <div class="col">
        <label for="lod">LOD</label>   
        <div class="row">
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="lod_min" placeholder="ex. 1">
            </div>
            <div class="col">
            <input type="number" class="form-control form-control-sm " name="lod_max" placeholder="ex. 5000">
            </div>
        </div>
    </div>

    <div class="col">
        <label for="LWL">LWL</label>
        <div class="row">
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="lwl_min" placeholder="ex. 1">
            </div>
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="lwl_max" placeholder="ex. 5000">
            </div>
        </div>
    </div>

    <div class="col">
        <label for="beam">BEAM</label>
        <div class="row">
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="beam_min" placeholder="ex. 1">
            </div>
            <div class="col">
            <input type="number" class="form-control form-control-sm " name="beam_max" placeholder="ex. 5000">
            </div>
        </div>
    </div>

    
    <div class="col">
        <label for="ballast_displacement">Ballast/Displacement</label>
        <div class="row">
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="ballast_displacement_min" placeholder="ex. 1">
            </div>
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="ballast_displacement_max" placeholder="ex. 5000">
            </div>
        </div>
    </div>

    </div><!-- End of form-row -->

    <div class="form-row">


    <div class="col">
        <label for="draft">Draft</label>
        <div class="row">
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="draft_min" placeholder="ex. 1">
            </div>
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="draft_max" placeholder="ex. 5000">
            </div>
        </div>
    </div>

    <div class="col">
        
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



<!-- UNDERWATER SECTION -->
<h4>Under Water</h4>
<div class="form-row">
    <div class="col">
        <label for="rudder_design">Rudder Design:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="rudder_design[]" id="rudder_design">
            <option value="FG">FG</option>
            <option value="Wood">Wood</option> 
            <option value="Steel">Steel</option>
            <option value="Aluminum">Aluminum</option>
            <option value="Spade">Spade</option>
            <option value="Hung">Hung</option> 
            <option value="Skeg">Skeg</option>
            <option value="Transom">Transom</option>
            <option value="Keel">Keel</option>                               
        </select>
    </div>

     <div class="col">
        <label for="ballast_type">Ballast Type:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="ballast_type[]" id="ballast_type">
            <option value="Lead">Lead</option>
            <option value="Internal">Internal</option> 
            <option value="Fixed">Fixed</option>
            <option value="Iron">Iron</option>
            <option value>Concrete</option>                              
        </select>
    </div>


    <div class="col">
        <label for="keel_design">Keel Design</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="keel_design[]" id="keel_design">
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
        <select multiple class="selectpicker form-control form-control-sm" name="hull_material[]" id="hull_material">
            <option value="Wood">Wood</option>
            <option value="Iron">Iron</option> 
            <option value="Aluminum">Aluminum</option>
            <option value="Cement">Cement</option>
            <option value="FG">FG</option>
            <option value="Cored">Cored</option>
            <option value="Solid">Solid</option>                                
        </select>
    </div>

    </div> <!-- End of form-row -->

    <div class="form-row">        
        <div class="col">
            <label for="bow">Bow:</label><br>
            <select multiple class="selectpicker form-control form-control-sm" name="bow[]" id="bow" value="">
                <option value="Spoon">Spoon</option>
                <option value="Plumb">Plumb</option>
                <option value="Closed">Closed</option>                          
            </select>
        </div>
        <div class="col">
            <label for="stern">Stern:</label><br>
            <select multiple class="selectpicker form-control form-control-sm" name="stern[]" id="stern" value="">
                <option value="Counter">Counter</option>
                <option value="Canoe">Canoe</option>
                <option value="Plumb">Plumb</option>
                <option value="Lazarette">Lazarette</option>                           
            </select>
        </div>
        <div class="col">
            <label for="transom">Transom:</label><br>
            <select  multiple class="selectpicker form-control form-control-sm" name="transom[]" id="transom" value="">
                <option value="Reverse">Reverse</option>
                <option value="Flush">Flush</option>
                <option value="Closed">Closed</option>
                <option value="Open">Open</option>
                <option value="Scoop">Scoop</option>
                <option value="Step">Step</option>                           
            </select>
        </div>
        <div class="col">
        </div>       
    </div> <!-- End of form-row -->





<h4>Below Deck</h4>

<div class="form-row">
    <div class="col">
        <label for="engine_type">Engine Type:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="engine_type[]" id="engine_type">
            <option value="Gasoline">Gasoline</option>
            <option value="Diesel">Diesel</option> 
            <option value="Electric">Electric</option>
            <option value="Inboard">Inboard</option>
            <option value="Outboard">Outboard</option> 
            <option value="Inboard/Outboard">Inboard/Outboard</option>          
            <option value="Single">Single</option>
            <option value="Twin">Twin</option>                             
        </select>
    </div>

    <div class="col">
        <label for="engine_make">Engine Make:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="engine_make[]" id="engine_make">
            <option value="Universal">Universal</option>
            <option value="Yanmar">Yanmar</option> 
            <option value="Volvo">Volvo</option>
            <option value="Perkins">Perkins</option>
            <option value="Cummins">Cummins</option> 
            <option value="Westerbeke">Westerbeke</option>          
            <option value="Chrysler">Chrysler</option>
            <option value="Nissan">Nissan</option>
            <option value="Yamaha">Yamaha</option>
            <option value="Beta">Beta</option>
            <option value="Honda">Honda</option>
            <option value="Other">Other</option>                             
        </select>
    </div>

    <div class="col">
    <label for="loa">Engine Horsepower</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="engine_horsepower_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="engine_horsepower_max" placeholder="ex. 5000">
        </div>
    </div>
    </div>
    <div class="col">
    <label for="loa">Fuel Capacity</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="fuel_capacity_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="fuel_capacity_max" placeholder="ex. 5000">
        </div>
    </div>
    </div>
</div> <!-- End of form-row -->

<div class="form-row">
    <div class="col">
    <label for="loa">Water Capacity</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="water_capacity_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="water_capacity_max" placeholder="ex. 5000">
        </div>
    </div>
    </div>
    <div class="col">
    <label for="loa">Cabins</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="cabins_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="cabins_max" placeholder="ex. 5000">
        </div>
    </div>
    </div>
    <div class="col">
    <label for="loa">Heads</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="heads_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="heads_max" placeholder="ex. 5000">
        </div>
    </div>
    </div>
    <div class="col">
    <label for="loa">Berths</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="berths_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="berths_max" placeholder="ex. 5000">
        </div>
    </div>
    </div>
</div> <!-- End of form-row -->

<div class="form-row">
    <div class="col">
    <label for="loa">Salon Seating</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="salon_seating_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="salon_seating_max" placeholder="ex. 5000">
        </div>
    </div>
    </div>

    <div class="col">
        <label for="forepeak">Forepeak:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="forepeak[]" id="forepeak">
            <option value="Berth-V">Berth-V</option>
            <option value="Head">Head</option> 
            <option value="Storage">Storage</option>
            <option value="Vanity">Vanity</option>                              
        </select>
    </div>

    <div class="col">
        <label for="midships">Midships:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="midships[]" id="midships">
            <option value="Locker">Locker</option>
            <option value="Drawers">Drawers</option> 
            <option value="Head">Head</option>
            <option value="Cooler">Cooler</option>                               
        </select>
    </div>

    <div class="col">
        <label for="salon">Salon:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="salon[]" id="salon">
            <option value="Sette - Bench">Sette - Bench</option>
            <option value="Settle - U">Settle - U</option> 
            <option value="Berth - 1/4">Berth - 1/4</option>
            <option value="Berth - Pipe">Berth - Pipe</option>
            <option value="Shelving">Shelving</option>                           
        </select>
    </div>
    
</div> <!-- End of form-row -->

<div class="form-row">
    <div class="col">
        <label for="galley">Galley:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="galley[]" id="galley">
            <option value="Cooler">Cooler</option>
            <option value="Refrigerator">Refrigerator</option> 
            <option value="Sink">Sink</option>
            <option value="Range">Range</option>
            <option value="Oven">Oven</option>                           
        </select>
    </div>
    <div class="col">
        <label for="quarter">Quarter:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="quarter[]" id="quarter">
            <option value="Kitchen">Kitchen</option>
            <option value="Kitchenette">Kitchenette</option> 
            <option value="Navigation">Navigation</option>
            <option value="Lazaretter">Lazaretter</option>
            <option value="Berth - Pipe">Berth - Pipe</option>
            <option value="Berth - Double">Berth - Double</option>
            <option value="Cabin">Cabin</option>
            <option value="Head">Head</option>                          
        </select>
    </div>
    <div class="col">
        <label for="aft">Aft:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="aft[]" id="aft">
            <option value="Cooler">Cooler</option>
            <option value="Refrigerator">Refrigerator</option> 
            <option value="Sink">Sink</option>                           
        </select>
    </div>
    <div class="col">
        <label for="navigation_comm">Navigation/Communication:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="navigation_comm[]" id="navigation_comm">
            <option value="GPS">GPS</option>
            <option value="VHF">VHF</option> 
            <option value="Radar">Radar</option>
            <option value="SSB">SSB</option>
            <option value="HAM">HAM</option>
            <option value="AM/FM">AM/FM</option>           
        </select>
    </div>    
</div> <!-- End of form-row -->
<h4>On Deck</h4>

<div class="form-row">
    <div class="col">
        <label for="helm">Helm:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="helm[]" id="helm">
            <option value="Tiller">Tiller</option>
            <option value="Wheel">Wheel</option> 
            <option value="Hydraulic">Hydraulic</option>
            <option value="Mechanical">Mechanical</option>                           
        </select>
    </div>
    <div class="col">
        <label for="cockpit">Cockpit:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="cockpit[]" id="cockpit">
            <option value="Symmetrical">Symmetrical</option>
            <option value="Asymmetrical">Asymmetrical</option> 
            <option value="Stern">Stern</option>
            <option value="Center">Center</option>
            <option value="3-5">3-5'</option>
            <option value="5-7">5-7'</option> 
            <option value="7-9">7-9'</option>
            <option value="9+">9'+</option>                           
        </select>
    </div>
    <div class="col">
        <label for="scuppers">Scupper Size/Style</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="scuppers[]" id="scuppers">
            <option value="1">1"</option>
            <option value="1-2">1-2"</option> 
            <option value="2-3">2-3"</option>
            <option value="3+">3"+</option>
            <option value="Through Hull">Through Hull</option>  
            <option value="Direct">Direct</option>                                  
        </select>
    </div>
    <div class="col">
        <label for="coaming">Coaming:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="coaming[]" id="coaming">
            <option value="FG">FG</option>
            <option value="Teak">Teak</option> 
            <option value="Wood">Wood</option>
            <option value="Steel">Steel</option>
            <option value="Aluminum">Aluminum</option>                           
        </select>
    </div>
        
</div> <!-- End of form-row -->

<div class="form-row">
    <div class="col">
        <label for="gunwales_bullwarks">Gunwales/Bullwarks:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="gunwales_bullwarks[]" id="gunwales_bullwarks">
            <option value="1">1"</option>
            <option value="1-2">1-2"</option> 
            <option value="2-3">2-3"</option>
            <option value="3+">3"+</option>                             
        </select>
    </div>
    <div class="col">
        <label for="companionway">Companionway:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="companionway[]" id="companionway">
            <option value="Full">Full</option>
            <option value="1/2">1/2</option> 
            <option value="V">V</option>                           
        </select>
    </div>  
    <div class="col">
        <label for="cabin">Cabin:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="cabin[]" id="cabin">
            <option value="Raised">Raised</option>
            <option value="Flush">Flush</option> 
            <option value="Hard">Hard</option>
            <option value="Soft/Hard">Soft/Hard</option>                           
        </select>
    </div>
    <div class="col">
    <label for="loa">Hatches</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="hatches_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="hatches_max" placeholder="ex. 5000">
        </div>
    </div>
    </div>
</div> <!-- End of form-row -->


<div class="form-row">
    <div class="col">
    <div class="form-group">
        <label for="ports_openning">Ports - Openning</label>
        <select name="ports_openning" id="ports_openning" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Small">Small</option>
            <option value="Large">Large</option>                     
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="ports_fixed">Ports - Fixed</label>
        <select name="ports_fixed" id="ports_fixed" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Small">Small</option>
            <option value="Large">Large</option>                       
        </select>
    </div>
    </div>
    <div class="col">
    <label for="loa">Dorades/Vents:</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="dorades_vents_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="dorades_vents_max" placeholder="ex. 5000">
        </div>
    </div>
    </div>

     <div class="col">
    <div class="form-group">
        <label for="rail">Rail</label>
        <select name="rail" id="rail" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Wood">Wood</option>
            <option value="Rubber">Rubber</option>
            <option value="FG">FG</option>                          
        </select>
    </div>
    </div>
    
</div> <!-- End of form-row -->


<div class="form-row">
  
    <div class="col">
    <div class="form-group">
        <label for="ladder">Ladder</label>
        <select name="ladder" id="ladder" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Fixed">Fixed</option>
            <option value="Non-Fixed">Non-Fixed</option>                           
        </select>
    </div>
    </div>

    <div class="col">
    </div>
    <div class="col">
    </div>
    <div class="col">
    </div>
</div> <!-- End of form-row -->



<h4>Above Deck</h4>

<div class="form-row">
    <div class="col">
        <label for="mast">Mast:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="mast[]" id="mast">
            <option value="Aluminum">Aluminum</option>
            <option value="Wood">Wood</option>
            <option value="Steel">Steel</option>
            <option value="Carbon">Carbon</option>
            <option value="Internal Furling">Internal Furling</option> 
            <option value="External Furling">External Furling</option>
            <option value="1">1</option>
            <option value="2">2</option> 
            <option value="3+">3+</option>                           
        </select>
    </div>
    <div class="col">
        <label for="standing_rigging">Standing Rigging:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="standing_rigging[]" id="standing_rigging">
            <option value="Wire">Wire</option>
            <option value="Rod">Rod</option>
            <option value="Continuous">Continuous</option>
            <option value="Discontinuous">Discontinuous</option>
            <option value="Furling">Furling</option> 
            <option value="Masthead">Masthead</option>
            <option value="Fractional">Fractional</option>
            <option value="Stayless">Stayless</option>                          
        </select>
    </div>
    <div class="col">
        <label for="chain_plates">Chain Plates:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="chain_plates[]" id="chain_plates">
            <option value="Stainless">Stainless</option>
            <option value="Bronze">Bronze</option>
            <option value="Hull">Hull</option>
            <option value="Bulkhead">Bulkhead</option>
            <option value="Deck">Deck</option>                          
        </select>
    </div>
    <div class="col">
        <label for="dodger">Dodger:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="dodger[]" id="dodger">
            <option value="Full">Full</option>
            <option value="Partial">Partial</option>
            <option value="Rigid">Rigid</option>
            <option value="Soft">Soft</option>                          
        </select>
    </div>
    
</div> <!-- End of form-row -->

<div class="form-row">
    <div class="col">
        <label for="bimini">Bimini:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="bimini[]" id="bimini">
            <option value="Full">Full</option>
            <option value="Partial">Partial</option>
            <option value="Fixed">Fixed</option>
            <option value="Non-Fixed">Non-Fixed</option>
            <option value="Folding">Folding</option>    
        </select>
    </div>

    <div class="col">
        <label for="spreaders">Spreaders:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="spreaders[]" id="spreaders">
            <option value="Aluminum">Aluminum</option>
            <option value="Wood">Wood</option>
            <option value="Steel">Steel</option>
            <option value="Carbon">Carbon</option>
            <option value="Athwart">Athwart</option>     
            <option value="Swept">Swept</option>
        </select>
    </div>
    <div class="col">
        <label for="boom">Boom:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="boom[]" id="boom">
            <option value="Aluminum">Aluminum</option>
            <option value="Wood">Wood</option>
            <option value="Steel">Steel</option>
            <option value="Carbon">Carbon</option>
            <option value="Internal Furling">Internal Furling</option>
            <option value="External Furling">External Furling</option>       
        </select>
    </div>

    <div class="col">
    </div>

</div>
    





    <div class="form-group py-3">
        <input class="btn btn-primary float-right " type="submit" name="Search_Boat" value="Search For Boat">
    </div>
</form>
</div> <!-- End of container -->

<?php include("includes/footer.php"); ?> <!-- Remove when finished testing -->


<script>

$(document).ready(function(){

    $('.selectpicker').selectpicker();

});

</script>