


    
<h3 class="mt-3">Boat Search</h3>

<form action="index.php" method="post">
    
    <label for="boat_year">Year Range</label>        
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="year_beg" placeholder="ex. 1965">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="year_end" placeholder="ex. 2015">
        </div>
    </div>

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

    <div class="form-group">
        <label for="builder">Builder</label>
        <select name="builder" id="builder" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="Ranger">Ranger</option>
            <option value="Coronado">Coronado</option> 
            <option value="Rhoades">Rhoades</option>                           
        </select>
    </div>

    <div class="form-group">
        <label for="designer">Designer</label>
        <select name="designer" id="designer" class="form-control form-control-sm ">
            <option value=''>Any</option>
            <option value="gary_mull">Gary Mull</option>
            <option value="ed_edgar">Ed Edgar</option> 
            <option value="frank_butler">Frank Butler</option>                           
        </select>
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
        
    <label for="lod">LOD</label>   
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="lod_min" placeholder="ex. 1">
        </div>
        <div class="col">
        <input type="number" class="form-control form-control-sm " name="lod_max" placeholder="ex. 5000">
        </div>
    </div>

    
    <label for="LWL">LWL</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="lwl_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="lwl_max" placeholder="ex. 5000">
        </div>
    </div>

    <label for="beam">BEAM</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="beam_min" placeholder="ex. 1">
        </div>
        <div class="col">
          <input type="number" class="form-control form-control-sm " name="beam_max" placeholder="ex. 5000">
        </div>
    </div>

    <label for="ballast">Ballast</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="ballast_min" placeholder="ex. 1">
        </div>
        <div class="col">
             <input type="number" class="form-control form-control-sm " name="ballast_max" placeholder="ex. 5000">
        </div>
    </div>
        
    
    <label for="displacement">Displacement</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="displacement_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="displacement_max" placeholder="ex. 5000">
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

    <label for="draft">Draft</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="draft_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="draft_max" placeholder="ex. 5000">
        </div>
    </div>
    
    <div class="form-group py-3">
        <input class="btn btn-primary float-right form-control" type="submit" name="Search_Boat" value="Search For Boat">
    </div>
</form>




