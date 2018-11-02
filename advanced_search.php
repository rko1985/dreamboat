<?php include("includes/header.php"); ?> <!-- Remove when finished testing -->

<?php include("includes/navbar.php"); ?>

<h1 class="text-center">Advanced Search</h1>

<div class="container">
<form action="advanced_search_results.php" method="post">

<h4>Basic Parameters</h4>
<div class="form-row">
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
        <div class="form-group">
            <label for="boat_type">Boat Type</label>
            <select name="boat_type" class="form-control form-control-sm ">
                <option value=''>Any</option>
                <option value="Sail">Sail</option>
                <option value="Power">Power</option> 
                <option value="Motor Sail">Motor Sail</option> 
                <option value="Fishing">Fishing</option>          
            </select>
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
</div> <!-- End of form-row -->

<div class="form-row">
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

</div><!-- End of form-row -->

<div class="form-row">
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

</div><!-- End of form-row -->

<!-- UNDERWATER SECTION -->
<h4>Under Water</h4>
<div class="form-row">
    <div class="col">
    <div class="form-group">
        <label for="spade_aft_fg">Spade, Aft, FG</label>
        <select name="spade_aft_fg" id="spade_aft_fg" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="FG">FG</option>
            <option value="Wood">Wood</option> 
            <option value="Steel">Steel</option>
            <option value="Aluminum">Aluminum</option>                          
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="ballast_type">Ballast Type</label>
        <select name="ballast_type" id="ballast_type" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Lead">Lead</option>
            <option value="Internal">Internal</option> 
            <option value="Fixed">Fixed</option>
            <option value="Iron">Iron</option>                          
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="keel_design">Keel Design</label>
        <select name="keel_design" id="keel_design" class="form-control form-control-sm ">
            <option value=''>Any</option>
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
    </div>
    <div class="col">
    <div class="form-group">
        <label for="hull_material">Hull Material</label>
        <select name="hull_material" id="hull_material" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Wood">Wood</option>
            <option value="Iron">Iron</option> 
            <option value="Aluminum">Aluminum</option>
            <option value="Cement">Cement</option>                              
        </select>
    </div>
    </div>

    <div class="col">
    <div class="form-group">
        <label for="rig_design">Rig Design</label>
        <select name="rig_design" id="rig_design" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Sloop">Sloop</option>
            <option value="Ketch">Ketch</option> 
            <option value="Yawl">Yawl</option>
            <option value="Cutter">Cutter</option>                            
        </select>
    </div>
    </div>
</div> <!-- End of form-row -->



<h4>Below Deck</h4>

<div class="form-row">
    <div class="col">
    <div class="form-group">
        <label for="engine_type">Engine Type</label>
        <select name="engine_type" id="engine_type" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Gasoline">Gasoline</option>
            <option value="Diesel">Diesel</option> 
            <option value="Electric">Electric</option>                           
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="engine_make">Engine Make</label>
        <select name="engine_make" id="engine_make" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Universal">Universal</option>
            <option value="Yamaha">Yamaha</option> 
            <option value="Volvo">Volvo</option>                           
        </select>
    </div>
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
    <div class="form-group">
        <label for="forepeak">Forepeak</label>
        <select name="forepeak" id="forepeak" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Berth-V">Berth-V</option>
            <option value="Head">Head</option> 
            <option value="Storage">Storage</option>                              
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="midships">Midships</label>
        <select name="midships" id="midships" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Locker">Locker</option>
            <option value="Drawers">Drawers</option> 
            <option value="Head">Head</option>                           
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="salon">Salon</label>
        <select name="salon" id="salon" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Sette - Bench">Sette - Bench</option>
            <option value="Settle - U">Settle - U</option> 
            <option value="Berth - 1/4">Berth - 1/4</option>                         
        </select>
    </div>
    </div>
</div> <!-- End of form-row -->

<div class="form-row">
    <div class="col">
    <div class="form-group">
        <label for="galley">Galley</label>
        <select name="galley" id="galley" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Cooler">Cooler</option>
            <option value="Refrigerator">Refrigerator</option> 
            <option value="Sink">Sink</option>                                
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="quarter">Quarter</label>
        <select name="quarter" id="quarter" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Kitchen">Kitchen</option>
            <option value="Kitchenetter">Kitchenetter</option> 
            <option value="Navigation">Navigation</option>                            
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="aft">Aft</label>
        <select name="aft" id="aft" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Cooler">Cooler</option>
            <option value="Refrigerator">Refrigerator</option> 
            <option value="Sink">Sink</option>                              
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="navigation_comm">Navigation/Communication</label>
        <select name="navigation_comm" id="navigation_comm" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="GPS">GPS</option>
            <option value="VHF">VHF</option> 
            <option value="AM/FM">AM/FM</option>                         
        </select>
    </div>
    </div>
</div> <!-- End of form-row -->
<h4>On Deck</h4>

<div class="form-row">
    <div class="col">
    <div class="form-group">
        <label for="helm">Helm</label>
        <select name="helm" id="helm" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Tiller">Tiller</option>
            <option value="Wheel">Wheel</option> 
            <option value="Hydraulic">Hydraulic</option>                                 
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="cockpit">Cockpit</label>
        <select name="cockpit" id="cockpit" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Symmetrical">Symmetrical</option>
            <option value="Asymmetrical">Asymmetrical</option> 
            <option value="Stern">Stern</option>                           
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="loa">Scuppers</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="scuppers_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="scuppers_max" placeholder="ex. 5000">
        </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="coaming">Coaming</label>
        <select name="coaming" id="coaming" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="FG">FG</option>
            <option value="Teak">Teak</option> 
            <option value="Wood">Wood</option>                              
        </select>
    </div>
    </div>
</div> <!-- End of form-row -->

<div class="form-row">
    <div class="col">
    <label for="loa">Gunwales/Bullwarks</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="gunwales_bullwarks_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="gunwales_bullwarks_max" placeholder="ex. 5000">
        </div>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="companionway">Companionway</label>
        <select name="companionway" id="companionway" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Full">Full</option>
            <option value="1/2">1/2</option> 
            <option value="V">V</option>                                
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="cabin">Cabin</label>
        <select name="cabin" id="cabin" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Raised">Raised</option>
            <option value="Flush">Flush</option> 
            <option value="Hard">Hard</option>                           
        </select>
    </div>
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
        <label for="transom">Transom</label>
        <select name="transom" id="transom" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Reverse">Reverse</option>
            <option value="Flush">Flush</option>
            <option value="Closed">Closed</option>                            
        </select>
    </div>
    </div>
</div> <!-- End of form-row -->


<div class="form-row">
    <div class="col">
    <div class="form-group">
        <label for="bow">Bow</label>
        <select name="bow" id="bow" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Spoon">Spoon</option>
            <option value="Plumb">Plumb</option>
            <option value="Closed">Closed</option>                             
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="stern">Stern</label>
        <select name="stern" id="stern" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Counter">Counter</option>
            <option value="Canoe">Canoe</option>
            <option value="Plumb">Plumb</option>                          
        </select>
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
</div> <!-- End of form-row -->



<h4>Above Deck</h4>

<div class="form-row">
    <div class="col">
    <div class="form-group">
        <label for="spars">Spars</label>
        <select name="spars" id="spars" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Aluminum">Aluminum</option>
            <option value="Wood">Wood</option>
            <option value="Steel">Steel</option>                                      
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="standing_rigging">Standing Rigging</label>
        <select name="standing_rigging" id="standing_rigging" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Wire">Wire</option>
            <option value="Rod">Rod</option>
            <option value="Continuous">Continuous</option>                           
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="chain_plates">Chain Plates</label>
        <select name="chain_plates" id="chain_plates" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Stainless">Stainless</option>
            <option value="Bronze">Bronze</option>
            <option value="Hull">Hull</option>                                 
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="dodger">Dodger</label>
        <select name="dodger" id="dodger" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Full">Full</option>
            <option value="Partial">Partial</option>
            <option value="Rigid">Rigid</option>                            
        </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <label for="bimini">Bimini</label>
        <select name="bimini" id="bimini" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Full">Full</option>
            <option value="Partial">Partial</option>
            <option value="Fixed">Fixed</option>
            <option value="Non-Fixed">Non-Fixed</option>                          
        </select>
    </div>
    </div>
</div> <!-- End of form-row -->
    





    <div class="form-group py-3">
        <input class="btn btn-primary float-right " type="submit" name="Search_Boat" value="Search For Boat">
    </div>
</form>
</div> <!-- End of container -->

<?php include("includes/footer.php"); ?> <!-- Remove when finished testing -->