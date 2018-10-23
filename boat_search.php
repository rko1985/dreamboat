


    
<h1>Boat Search</h1>

<form action="index.php" method="get">
    
    <div class="form-group">
        <label for="boat_year">Year Range</label>
        <input type="text" class="form-control" name="year_beg" placeholder="ex. 1965">
        <input type="text" class="form-control" name="year_end" placeholder="ex. 2015">
    </div>

    <div class="form-group">
        <label for="boat_type">Boat Type</label>
        <select name="boat_type" class="form-control">
            <option value=''>Any</option>
            <option value="1">Sail</option>
            <option value="2">Power</option> 
            <option value="3">Motor Sail</option> 
            <option value="4">Fishing</option>     
        </select>
    </div>

    <div class="form-group">
        <label for="builder">Builder</label><br>
        <select name="builder" id="builder" class="form-control">
            <option value=''>Any</option>
            <option value="Ranger">Ranger</option>
            <option value="Coronado">Coronado</option> 
            <option value="Rhoades">Rhoades</option>                           
        </select>
    </div>

    <div class="form-group">
        <label for="designer">Designer</label><br>
        <select name="designer" id="designer" class="form-control">
            <option value=''>Any</option>
            <option value="gary_mull">Gary Mull</option>
            <option value="ed_edgar">Ed Edgar</option> 
            <option value="frank_butler">Frank Butler</option>                           
        </select>
    </div>

    <div class="form-group">
        <label for="loa">LOA</label>
        <input type="text" class="form-control" name="loa_min" placeholder="ex. 1">
        <input type="text" class="form-control" name="loa_max" placeholder="ex. 5000">
    </div>

    <div class="form-group">
        <label for="lod">LOD</label>
        <input type="text" class="form-control" name="lod_min" placeholder="ex. 1">
        <input type="text" class="form-control" name="lod_max" placeholder="ex. 5000">
    </div>

    <div class="form-group">
        <label for="LWL">LWL</label>
        <input type="text" class="form-control" name="lwl_min" placeholder="ex. 1">
        <input type="text" class="form-control" name="lwl_max" placeholder="ex. 5000">
    </div>

    <div class="form-group">
        <label for="beam">BEAM</label>
        <input type="text" class="form-control" name="beam_min" placeholder="ex. 1">
        <input type="text" class="form-control" name="beam_max" placeholder="ex. 5000">
    </div>

    <div class="form-group">
        <label for="ballast">Ballast</label>
        <input type="text" class="form-control" name="ballast_min" placeholder="ex. 1">
        <input type="text" class="form-control" name="ballast_max" placeholder="ex. 5000">
    </div>

    <div class="form-group">
        <label for="displacement">Displacement</label>
        <input type="text" class="form-control" name="displacement_min" placeholder="ex. 1">
        <input type="text" class="form-control" name="displacement_max" placeholder="ex. 5000">
    </div>

    <div class="form-group">
        <label for="ballast_displacement">Ballast/Displacement</label>
        <input type="text" class="form-control" name="ballast_displacement_min" placeholder="ex. 1">
        <input type="text" class="form-control" name="ballast_displacement_max" placeholder="ex. 5000">
    </div>

    <div class="form-group">
        <label for="draft">Draft</label>
        <input type="text" class="form-control" name="draft_min" placeholder="ex. 1">
        <input type="text" class="form-control" name="draft_max" placeholder="ex. 5000">
    </div>
    
    <div class="form-group">
        <input class="btn btn-primary float-right" type="submit" name="Search_Boat" value="Search For Boat">
    </div>
</form>




