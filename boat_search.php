


    
<h3 class="mt-3">Boat Search</h3>

<form action="index.php" method="post">
    

    <div class="form-group">
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

    <div class="form-group">
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

    <div class="form-group">
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
            <input type="number" class="form-control form-control-sm " name="loa_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="loa_max" placeholder="ex. 5000">
        </div>
    </div>
        
    

    <label for="ballast_displacement">Ballast/Displacement</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="ballast_displacement_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="ballast_displacement_max" placeholder="ex. 5000">
        </div>
    </div>
    
    <div class="form-group py-3">
        <input class="btn btn-primary float-right form-control" type="submit" name="Search_Boat" value="Search For Boat">
    </div>
</form>




