<?php include("includes/header.php"); ?> <!-- Remove when finished testing -->

<?php include("includes/navbar.php"); ?>

<h1 class="text-center">Advanced Search</h1>

<div class="container pb-5">
<form action="advanced_search_results.php" method="post">

    <h3>Selling Info</h3>
    <div class="form-row">
        <div class="col">
            <label for="for_sale">For Sale?</label><br>
            <select class="form-control form-control-sm" name="for_sale" id="for_sale">
                <option value="">Select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>     
            </select>
        </div>
        <div class="col">
        <label for="price">Price ($USD):</label>
        <div class="row">
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="price_min" placeholder="ex. 1">
            </div>
            <div class="col">
                <input type="number" class="form-control form-control-sm " name="price_max" placeholder="ex. 5000">
            </div>
        </div>
        </div>
        <div class="col">
            <label for="city">City: </label>
            <input type="text" class="form-control form-control-sm" name="city" value="">
        </div>        
    </div>
    <div class="form-row">
    <div class="col">
        <label for="state">State: </label><br>
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
        <div class="col">
            <label for="region">Region: </label><br>
            <select class="form-control form-control-sm" name="region" id="region" value="">
                <option value="">Select</option>                
                <option value="North America">North America</option>
                <option value="Africa">Africa</option>
                <option value="Asia">Asia</option>
                <option value="Central America">Central America</option>
                <option value="Eastern Europe">Eastern Europe</option>
                <option value="European Union">European Union</option>
                <option value="Middle East">Middle East</option>
                <option value="Oceania">Oceania</option>
                <option value="South America">South America</option>
                <option value="Antarctica">Antarctica</option>
                <option value="The Caribbean">The Caribbean</option>
                     
            </select>
        </div>
        <div class="col">
            <label for="for_sale">Country: </label><br>
            <select class="form-control form-control-sm" name="country" id="country" value="">
                <option value="">Select</option>                
                <option value="USA">United States</option>
                <option value="AFG">Afghanistan</option>
                <option value="ALA">Åland Islands</option>
                <option value="ALB">Albania</option>
                <option value="DZA">Algeria</option>
                <option value="ASM">American Samoa</option>
                <option value="AND">Andorra</option>
                <option value="AGO">Angola</option>
                <option value="AIA">Anguilla</option>
                <option value="ATA">Antarctica</option>
                <option value="ATG">Antigua and Barbuda</option>
                <option value="ARG">Argentina</option>
                <option value="ARM">Armenia</option>
                <option value="ABW">Aruba</option>
                <option value="AUS">Australia</option>
                <option value="AUT">Austria</option>
                <option value="AZE">Azerbaijan</option>
                <option value="BHS">Bahamas</option>
                <option value="BHR">Bahrain</option>
                <option value="BGD">Bangladesh</option>
                <option value="BRB">Barbados</option>
                <option value="BLR">Belarus</option>
                <option value="BEL">Belgium</option>
                <option value="BLZ">Belize</option>
                <option value="BEN">Benin</option>
                <option value="BMU">Bermuda</option>
                <option value="BTN">Bhutan</option>
                <option value="BOL">Bolivia, Plurinational State of</option>
                <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                <option value="BIH">Bosnia and Herzegovina</option>
                <option value="BWA">Botswana</option>
                <option value="BVT">Bouvet Island</option>
                <option value="BRA">Brazil</option>
                <option value="IOT">British Indian Ocean Territory</option>
                <option value="BRN">Brunei Darussalam</option>
                <option value="BGR">Bulgaria</option>
                <option value="BFA">Burkina Faso</option>
                <option value="BDI">Burundi</option>
                <option value="KHM">Cambodia</option>
                <option value="CMR">Cameroon</option>
                <option value="CAN">Canada</option>
                <option value="CPV">Cape Verde</option>
                <option value="CYM">Cayman Islands</option>
                <option value="CAF">Central African Republic</option>
                <option value="TCD">Chad</option>
                <option value="CHL">Chile</option>
                <option value="CHN">China</option>
                <option value="CXR">Christmas Island</option>
                <option value="CCK">Cocos (Keeling) Islands</option>
                <option value="COL">Colombia</option>
                <option value="COM">Comoros</option>
                <option value="COG">Congo</option>
                <option value="COD">Congo, the Democratic Republic of the</option>
                <option value="COK">Cook Islands</option>
                <option value="CRI">Costa Rica</option>
                <option value="CIV">Côte d'Ivoire</option>
                <option value="HRV">Croatia</option>
                <option value="CUB">Cuba</option>
                <option value="CUW">Curaçao</option>
                <option value="CYP">Cyprus</option>
                <option value="CZE">Czech Republic</option>
                <option value="DNK">Denmark</option>
                <option value="DJI">Djibouti</option>
                <option value="DMA">Dominica</option>
                <option value="DOM">Dominican Republic</option>
                <option value="ECU">Ecuador</option>
                <option value="EGY">Egypt</option>
                <option value="SLV">El Salvador</option>
                <option value="GNQ">Equatorial Guinea</option>
                <option value="ERI">Eritrea</option>
                <option value="EST">Estonia</option>
                <option value="ETH">Ethiopia</option>
                <option value="FLK">Falkland Islands (Malvinas)</option>
                <option value="FRO">Faroe Islands</option>
                <option value="FJI">Fiji</option>
                <option value="FIN">Finland</option>
                <option value="FRA">France</option>
                <option value="GUF">French Guiana</option>
                <option value="PYF">French Polynesia</option>
                <option value="ATF">French Southern Territories</option>
                <option value="GAB">Gabon</option>
                <option value="GMB">Gambia</option>
                <option value="GEO">Georgia</option>
                <option value="DEU">Germany</option>
                <option value="GHA">Ghana</option>
                <option value="GIB">Gibraltar</option>
                <option value="GRC">Greece</option>
                <option value="GRL">Greenland</option>
                <option value="GRD">Grenada</option>
                <option value="GLP">Guadeloupe</option>
                <option value="GUM">Guam</option>
                <option value="GTM">Guatemala</option>
                <option value="GGY">Guernsey</option>
                <option value="GIN">Guinea</option>
                <option value="GNB">Guinea-Bissau</option>
                <option value="GUY">Guyana</option>
                <option value="HTI">Haiti</option>
                <option value="HMD">Heard Island and McDonald Islands</option>
                <option value="VAT">Holy See (Vatican City State)</option>
                <option value="HND">Honduras</option>
                <option value="HKG">Hong Kong</option>
                <option value="HUN">Hungary</option>
                <option value="ISL">Iceland</option>
                <option value="IND">India</option>
                <option value="IDN">Indonesia</option>
                <option value="IRN">Iran, Islamic Republic of</option>
                <option value="IRQ">Iraq</option>
                <option value="IRL">Ireland</option>
                <option value="IMN">Isle of Man</option>
                <option value="ISR">Israel</option>
                <option value="ITA">Italy</option>
                <option value="JAM">Jamaica</option>
                <option value="JPN">Japan</option>
                <option value="JEY">Jersey</option>
                <option value="JOR">Jordan</option>
                <option value="KAZ">Kazakhstan</option>
                <option value="KEN">Kenya</option>
                <option value="KIR">Kiribati</option>
                <option value="PRK">Korea, Democratic People's Republic of</option>
                <option value="KOR">Korea, Republic of</option>
                <option value="KWT">Kuwait</option>
                <option value="KGZ">Kyrgyzstan</option>
                <option value="LAO">Lao People's Democratic Republic</option>
                <option value="LVA">Latvia</option>
                <option value="LBN">Lebanon</option>
                <option value="LSO">Lesotho</option>
                <option value="LBR">Liberia</option>
                <option value="LBY">Libya</option>
                <option value="LIE">Liechtenstein</option>
                <option value="LTU">Lithuania</option>
                <option value="LUX">Luxembourg</option>
                <option value="MAC">Macao</option>
                <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                <option value="MDG">Madagascar</option>
                <option value="MWI">Malawi</option>
                <option value="MYS">Malaysia</option>
                <option value="MDV">Maldives</option>
                <option value="MLI">Mali</option>
                <option value="MLT">Malta</option>
                <option value="MHL">Marshall Islands</option>
                <option value="MTQ">Martinique</option>
                <option value="MRT">Mauritania</option>
                <option value="MUS">Mauritius</option>
                <option value="MYT">Mayotte</option>
                <option value="MEX">Mexico</option>
                <option value="FSM">Micronesia, Federated States of</option>
                <option value="MDA">Moldova, Republic of</option>
                <option value="MCO">Monaco</option>
                <option value="MNG">Mongolia</option>
                <option value="MNE">Montenegro</option>
                <option value="MSR">Montserrat</option>
                <option value="MAR">Morocco</option>
                <option value="MOZ">Mozambique</option>
                <option value="MMR">Myanmar</option>
                <option value="NAM">Namibia</option>
                <option value="NRU">Nauru</option>
                <option value="NPL">Nepal</option>
                <option value="NLD">Netherlands</option>
                <option value="NCL">New Caledonia</option>
                <option value="NZL">New Zealand</option>
                <option value="NIC">Nicaragua</option>
                <option value="NER">Niger</option>
                <option value="NGA">Nigeria</option>
                <option value="NIU">Niue</option>
                <option value="NFK">Norfolk Island</option>
                <option value="MNP">Northern Mariana Islands</option>
                <option value="NOR">Norway</option>
                <option value="OMN">Oman</option>
                <option value="PAK">Pakistan</option>
                <option value="PLW">Palau</option>
                <option value="PSE">Palestinian Territory, Occupied</option>
                <option value="PAN">Panama</option>
                <option value="PNG">Papua New Guinea</option>
                <option value="PRY">Paraguay</option>
                <option value="PER">Peru</option>
                <option value="PHL">Philippines</option>
                <option value="PCN">Pitcairn</option>
                <option value="POL">Poland</option>
                <option value="PRT">Portugal</option>
                <option value="PRI">Puerto Rico</option>
                <option value="QAT">Qatar</option>
                <option value="REU">Réunion</option>
                <option value="ROU">Romania</option>
                <option value="RUS">Russian Federation</option>
                <option value="RWA">Rwanda</option>
                <option value="BLM">Saint Barthélemy</option>
                <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="KNA">Saint Kitts and Nevis</option>
                <option value="LCA">Saint Lucia</option>
                <option value="MAF">Saint Martin (French part)</option>
                <option value="SPM">Saint Pierre and Miquelon</option>
                <option value="VCT">Saint Vincent and the Grenadines</option>
                <option value="WSM">Samoa</option>
                <option value="SMR">San Marino</option>
                <option value="STP">Sao Tome and Principe</option>
                <option value="SAU">Saudi Arabia</option>
                <option value="SEN">Senegal</option>
                <option value="SRB">Serbia</option>
                <option value="SYC">Seychelles</option>
                <option value="SLE">Sierra Leone</option>
                <option value="SGP">Singapore</option>
                <option value="SXM">Sint Maarten (Dutch part)</option>
                <option value="SVK">Slovakia</option>
                <option value="SVN">Slovenia</option>
                <option value="SLB">Solomon Islands</option>
                <option value="SOM">Somalia</option>
                <option value="ZAF">South Africa</option>
                <option value="SGS">South Georgia and the South Sandwich Islands</option>
                <option value="SSD">South Sudan</option>
                <option value="ESP">Spain</option>
                <option value="LKA">Sri Lanka</option>
                <option value="SDN">Sudan</option>
                <option value="SUR">Suriname</option>
                <option value="SJM">Svalbard and Jan Mayen</option>
                <option value="SWZ">Swaziland</option>
                <option value="SWE">Sweden</option>
                <option value="CHE">Switzerland</option>
                <option value="SYR">Syrian Arab Republic</option>
                <option value="TWN">Taiwan, Province of China</option>
                <option value="TJK">Tajikistan</option>
                <option value="TZA">Tanzania, United Republic of</option>
                <option value="THA">Thailand</option>
                <option value="TLS">Timor-Leste</option>
                <option value="TGO">Togo</option>
                <option value="TKL">Tokelau</option>
                <option value="TON">Tonga</option>
                <option value="TTO">Trinidad and Tobago</option>
                <option value="TUN">Tunisia</option>
                <option value="TUR">Turkey</option>
                <option value="TKM">Turkmenistan</option>
                <option value="TCA">Turks and Caicos Islands</option>
                <option value="TUV">Tuvalu</option>
                <option value="UGA">Uganda</option>
                <option value="UKR">Ukraine</option>
                <option value="ARE">United Arab Emirates</option>
                <option value="GBR">United Kingdom</option>
                <option value="UMI">United States Minor Outlying Islands</option>
                <option value="URY">Uruguay</option>
                <option value="UZB">Uzbekistan</option>
                <option value="VUT">Vanuatu</option>
                <option value="VEN">Venezuela, Bolivarian Republic of</option>
                <option value="VNM">Viet Nam</option>
                <option value="VGB">Virgin Islands, British</option>
                <option value="VIR">Virgin Islands, U.S.</option>
                <option value="WLF">Wallis and Futuna</option>
                <option value="ESH">Western Sahara</option>
                <option value="YEM">Yemen</option>
                <option value="ZMB">Zambia</option>
                <option value="ZWE">Zimbabwe</option>
            </select>
        </div>
    </div>

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