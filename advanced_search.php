<?php include("includes/header.php"); ?> <!-- Remove when finished testing -->

<?php include("includes/navbar.php"); ?>

<h1 class="text-center">Advanced Search</h1>

<div class="container">
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
            <select name="builder" id="builder" class="form-control form-control-sm ">
                <option value=''>Any</option>
                <option value="Ranger">Ranger</option>
                <option value="Coronado">Coronado</option> 
                <option value="Rhoades">Rhoades</option>                           
            </select>
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="designer">Designer</label>
            <select name="designer" id="designer" class="form-control form-control-sm ">
                <option value=''>Any</option>
                <option value="gary_mull">Gary Mull</option>
                <option value="ed_edgar">Ed Edgar</option> 
                <option value="frank_butler">Frank Butler</option>                           
            </select>
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
        <label for="ballast">Ballast</label>
        <div class="row">
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="ballast_min" placeholder="ex. 1">
            </div>
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="ballast_max" placeholder="ex. 5000">
            </div>
        </div>
    </div>

    </div><!-- End of form-row -->

    <div class="form-row">

    <div class="col">
        <label for="displacement">Displacement</label>
        <div class="row">
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="displacement_min" placeholder="ex. 1">
            </div>
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="displacement_max" placeholder="ex. 5000">
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
        <select multiple class="selectpicker form-control form-control-sm" name="ballast_type[]" id="ballast_type">
            <option value="1">Lead</option>
            <option value="2">Internal</option> 
            <option value="3">Fixed</option>
            <option value="4">Iron</option>
            <option value="5">Concrete</option>                              
        </select>
    </div>


    <div class="col">
        <label for="keel_design">Keel Design</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="keel_design[]" id="keel_design">
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
        <select multiple class="selectpicker form-control form-control-sm" name="hull_material[]" id="hull_material">
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
            <select multiple class="selectpicker form-control form-control-sm" name="bow[]" id="bow" value="">
                <option value="1">Spoon</option>
                <option value="2">Plumb</option>
                <option value="3">Closed</option>                          
            </select>
        </div>
        <div class="col">
            <label for="stern">Stern:</label><br>
            <select multiple class="selectpicker form-control form-control-sm" name="stern[]" id="stern" value="">
                <option value="1">Counter</option>
                <option value="2">Canoe</option>
                <option value="3">Plumb</option>
                <option value="4">Lazarette</option>                           
            </select>
        </div>
        <div class="col">
            <label for="transom">Transom:</label><br>
            <select  multiple class="selectpicker form-control form-control-sm" name="transom[]" id="transom" value="">
                <option value="1">Reverse</option>
                <option value="2">Flush</option>
                <option value="3">Closed</option>
                <option value="4">Open</option>
                <option value="5">Scoop</option>
                <option value="6">Step</option>                           
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
        <select multiple class="selectpicker form-control form-control-sm" name="engine_make[]" id="engine_make">
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
            <option value="1">Berth-V</option>
            <option value="2">Head</option> 
            <option value="3">Storage</option>
            <option value="4">Vanity</option>                              
        </select>
    </div>

    <div class="col">
        <label for="midships">Midships:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="midships[]" id="midships">
            <option value="1">Locker</option>
            <option value="2">Drawers</option> 
            <option value="3">Head</option>
            <option value="4">Cooler</option>                               
        </select>
    </div>

    <div class="col">
        <label for="salon">Salon:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="salon[]" id="salon">
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
        <select multiple class="selectpicker form-control form-control-sm" name="galley[]" id="galley">
            <option value="1">Cooler</option>
            <option value="2">Refrigerator</option> 
            <option value="3">Sink</option>
            <option value="4">Range</option>
            <option value="5">Oven</option>                           
        </select>
    </div>
    <div class="col">
        <label for="quarter">Quarter:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="quarter[]" id="quarter">
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
        <select multiple class="selectpicker form-control form-control-sm" name="aft[]" id="aft">
            <option value="1">Cooler</option>
            <option value="2">Refrigerator</option> 
            <option value="3">Sink</option>                           
        </select>
    </div>
    <div class="col">
        <label for="navigation_comm">Navigation/Communication:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="navigation_comm[]" id="navigation_comm">
            <option value="1">GPS</option>
            <option value="2">VHF</option> 
            <option value="3">Radar</option>
            <option value="4">SSB</option>
            <option value="5">HAM</option>
            <option value="6">AM/FM</option>           
        </select>
    </div>    
</div> <!-- End of form-row -->
<h4>On Deck</h4>

<div class="form-row">
    <div class="col">
        <label for="helm">Helm:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="helm[]" id="helm">
            <option value="1">Tiller</option>
            <option value="2">Wheel</option> 
            <option value="3">Hydraulic</option>
            <option value="4">Mechanical</option>                           
        </select>
    </div>
    <div class="col">
        <label for="cockpit">Cockpit:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="cockpit[]" id="cockpit">
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
        <select multiple class="selectpicker form-control form-control-sm" name="scuppers[]" id="scuppers">
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
        <select multiple class="selectpicker form-control form-control-sm" name="coaming[]" id="coaming">
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
        <select multiple class="selectpicker form-control form-control-sm" name="gunwales_bullwarks[]" id="gunwales_bullwarks">
            <option value="1">1"</option>
            <option value="2">1-2"</option> 
            <option value="3">2-3"</option>
            <option value="4">3"+</option>                             
        </select>
    </div>
    <div class="col">
        <label for="companionway">Companionway:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="companionway[]" id="companionway">
            <option value="1">Full</option>
            <option value="2">1/2</option> 
            <option value="3">V</option>                           
        </select>
    </div>  
    <div class="col">
        <label for="cabin">Cabin:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="cabin[]" id="cabin">
            <option value="1">Raised</option>
            <option value="2">Flush</option> 
            <option value="3">Hard</option>
            <option value="4">Soft/Hard</option>                           
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
        <select multiple class="selectpicker form-control form-control-sm" name="standing_rigging[]" id="standing_rigging">
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
        <select multiple class="selectpicker form-control form-control-sm" name="chain_plates[]" id="chain_plates">
            <option value="1">Stainless</option>
            <option value="2">Bronze</option>
            <option value="3">Hull</option>
            <option value="4">Bulkhead</option>
            <option value="5">Deck</option>                          
        </select>
    </div>
    <div class="col">
        <label for="dodger">Dodger:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="dodger[]" id="dodger">
            <option value="1">Full</option>
            <option value="2">Partial</option>
            <option value="3">Rigid</option>
            <option value="4">Soft</option>                          
        </select>
    </div>
    
</div> <!-- End of form-row -->

<div class="form-row">
    <div class="col">
        <label for="bimini">Bimini:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="bimini[]" id="bimini">
            <option value="1">Full</option>
            <option value="2">Partial</option>
            <option value="3">Fixed</option>
            <option value="4">Non-Fixed</option>
            <option value="5">Folding</option>    
        </select>
    </div>

    <div class="col">
        <label for="spreaders">Spreaders:</label><br>
        <select multiple class="selectpicker form-control form-control-sm" name="spreaders[]" id="spreaders">
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
        <select multiple class="selectpicker form-control form-control-sm" name="boom[]" id="boom">
            <option value="1">Aluminum</option>
            <option value="2">Wood</option>
            <option value="3">Steel</option>
            <option value="4">Carbon</option>
            <option value="5">Internal Furling</option>
            <option value="6">External Furling</option>       
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