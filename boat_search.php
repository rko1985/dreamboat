


<form action="index.php" method="post">
    

    <div class="form-group  my-2">
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

    <div class="form-group my-2">
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

    <div class="form-group my-2">
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

    <div class="form-group  my-2">
        <label for="builder">Builder</label>
        <input class="form-control form-control-sm" type="text" name="builder" id="builder">        
    </div>

    <div class="form-group">
        <label for="designer">Designer</label>
        <input class="form-control form-control-sm" type="text" name="designer" id="designer"> 
    </div>

    <label for="loa">LOA</label>
    <div class="row">
        <div class="col">
            <input type="number" step=".01" class="form-control form-control-sm " name="loa_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" step=".01" class="form-control form-control-sm " name="loa_max" placeholder="ex. 5000">
        </div>
    </div>
        
    

    <label for="ballast_displacement">Ballast/Displacement</label>
    <div class="row">
        <div class="col">
            <input type="number" step=".01" class="form-control form-control-sm " name="ballast_displacement_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" step=".01" class="form-control form-control-sm " name="ballast_displacement_max" placeholder="ex. 5000">
        </div>
    </div>
    
    <div class="form-group py-3">
        <input class="btn btn-primary float-right form-control" type="submit" name="Search_Boat" value="Search For Boat">
    </div>
</form>




