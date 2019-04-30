


<form class="p-3" action="index.php" method="post">

    <label for="price">Price: ($USD)</label>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="price_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" class="form-control form-control-sm " name="price_max" placeholder="ex. 5000">
        </div>
    </div>

    <div class="form-group my-0">
        <label for="State">State:</label><br>
        <select class="form-control form-control-sm" name="state" id="state" value="">
            <option value="">Select</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
            <option value="AS">American Samoa</option>
            <option value="GU">Guam</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="PR">Puerto Rico</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="VI">Virgin Islands</option>
            <option value="AS">American Samoa</option>
            <option value="GU">Guam</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="PR">Puerto Rico</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="VI">Virgin Islands</option>    
        </select>
    </div>    

    <div class="form-group  my-0">
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

    <div class="form-group my-0">
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

    <div class="form-group my-0">
        <label for="keel_design">Keel Design:</label><br>
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

    <div class="form-group  my-0">
        <label for="builder">Builder:</label>
        <input class="form-control form-control-sm" type="text" name="builder" id="builder">        
    </div>

    <div class="form-group my-0">
        <label for="designer">Designer:</label>
        <input class="form-control form-control-sm" type="text" name="designer" id="designer"> 
    </div>

    <label for="loa">LOA:</label>
    <div class="row">
        <div class="col">
            <input type="number" step=".01" class="form-control form-control-sm " name="loa_min" placeholder="ex. 1">
        </div>
        <div class="col">
            <input type="number" step=".01" class="form-control form-control-sm " name="loa_max" placeholder="ex. 5000">
        </div>
    </div>
        
    

    <label for="ballast_displacement">Ballast/Displacement:</label>
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




