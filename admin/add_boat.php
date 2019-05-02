<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
<?php include("includes/functions.php"); ?>

    <!-- Start Here -->
<?php 
ob_start();
session_start();


if(!isset($_SESSION['user_role']) && $_SESSION['user_role'] != 'admin'){
    header("Location: ../index.php");
}

?>


<?php 


    if(isset($_POST['Add_Boat'])){
        //Sanitize post array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Selling Info
        $for_sale = $_POST['for_sale'];
        $contact_info = $_POST['contact_info'];
        $price = $_POST['price'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $region = $_POST['region'];
        $country = $_POST['country'];
        $description = $_POST['description'];

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
        if(!empty($ballast) && !empty($displacement)){$ballast_displacement = round($ballast/$displacement,2);} else {$ballast_displacement = 0;};
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

        if(!empty($boat_image)){
            $boat_image = time() . $boat_image; //adds timestampe to boat name to create unique image name
            move_uploaded_file($boat_image_temp, "../images/$boat_image");
        }
        
        //Array to string conversion
        isset($boat_type) ? $boat_type = implode(", ", $boat_type) : $boat_type = NULL;
        isset($mast) ? $mast = implode(", ", $mast) : $mast = NULL;
        isset($keel_design) ? $keel_design = implode(", ", $keel_design) : $keel_design = NULL;
        isset($rig_design) ? $rig_design = implode(", ", $rig_design) : $rig_design = NULL;
        isset($rudder_design) ?  $rudder_design = implode(", ", $rudder_design) : $rudder_design = NULL;
        isset($ballast_type) ?  $ballast_type = implode(", ", $ballast_type) : $ballast_type = NULL;
        isset($hull_material) ?  $hull_material = implode(", ", $hull_material) : $hull_material = NULL;
        isset($bow) ?  $bow = implode(", ", $bow) : $bow = NULL;
        isset($stern) ?  $stern = implode(", ", $stern) : $stern = NULL;
        isset($transom) ?  $transom = implode(", ", $transom) : $transom = NULL;
        isset($engine_type) ?  $engine_type = implode(", ", $engine_type) : $engine_type = NULL;
        isset($engine_make) ?  $engine_make = implode(", ", $engine_make) : $engine_make = NULL;
        isset($forepeak) ?  $forepeak = implode(", ", $forepeak) : $forepeak = NULL;
        isset($midships) ?  $midships = implode(", ", $midships) : $midships = NULL;
        isset($salon) ?  $salon = implode(", ", $salon) : $salon = NULL;
        isset($galley) ?  $galley = implode(", ", $galley) : $galley = NULL;
        isset($quarter) ?  $quarter = implode(", ", $quarter) : $quarter = NULL;
        isset($aft) ?  $aft = implode(", ", $aft) : $aft = NULL;
        isset($navigation_comm) ?  $navigation_comm = implode(", ", $navigation_comm) : $navigation_comm = NULL;
        isset($helm) ?  $helm = implode(", ", $helm) : $helm = NULL;
        isset($cockpit) ?  $cockpit = implode(", ", $cockpit) : $cockpit = NULL;
        isset($scuppers) ?  $scuppers = implode(", ", $scuppers) : $scuppers = NULL;
        isset($coaming) ?  $coaming = implode(", ", $coaming) : $coaming = NULL;
        isset($gunwales_bullwarks) ?  $gunwales_bullwarks = implode(", ", $gunwales_bullwarks) : $gunwales_bullwarks = NULL;
        isset($companionway) ?  $companionway = implode(", ", $companionway) : $companionway = NULL;
        isset($cabin) ?  $cabin = implode(", ", $cabin) : $cabin = NULL;
        isset($standing_rigging) ?  $standing_rigging = implode(", ", $standing_rigging) : $standing_rigging = NULL;
        isset($chain_plates) ?  $chain_plates = implode(", ", $chain_plates) : $chain_plates = NULL;
        isset($dodger) ?  $dodger = implode(", ", $dodger) : $dodger = NULL;
        isset($bimini) ?  $bimini = implode(", ", $bimini) : $bimini = NULL;
        isset($spreaders) ?  $spreaders = implode(", ", $spreaders) : $spreaders = NULL;
        isset($boom) ?  $boom = implode(", ", $boom) : $boom = NULL;

        //Insert into DB

        $query = "INSERT INTO boats(boat_name, user_id, boat_year, boat_type, boat_model, boat_submodel, boat_image, builder, designer, LOA, LOD, LWL, beam, ballast_displacement, draft, rig_design, "; //basic
        $query .= "for_sale, contact_info, price, city, state, region, country, description, "; //selling info
        $query .= "rudder_design, ballast_type, keel_design, hull_material, bow, stern, transom, "; //underwater
        $query .= "engine_type, engine_make, engine_horsepower, fuel_capacity, water_capacity, cabins, heads, berths, salon_seating, forepeak, midships, salon, galley, quarter, aft, navigation_comm, "; //below deck
        $query .= "helm, cockpit, scuppers, coaming, gunwales_bullwarks, companionway, cabin, hatches, ports_openning, ports_fixed, dorades_vents, rail, ladder, ";//on deck
        $query .= "mast, standing_rigging, chain_plates, dodger, bimini, spreaders, boom) ";
        $query .= "VALUES ('{$boat_name}', '{$_SESSION['user_id']}', '{$boat_year}', '{$boat_type}', '{$boat_model}', '{$boat_submodel}', '{$boat_image}', '{$builder}','{$designer}','{$LOA}', '{$LOD}', '{$LWL}', '{$beam}', '{$ballast_displacement}', '{$draft}', '{$rig_design}', ";
        $query .= "'{$for_sale}', '{$contact_info}', '{$price}', '{$city}', '{$state}', '{$region}', '{$country}', '{$description}', ";
        $query .= "'{$rudder_design}', '{$ballast_type}', '{$keel_design}', '{$hull_material}', '{$bow}', '{$stern}', '{$transom}', "; //underwater
        $query .= "'{$engine_type}', '{$engine_make}', '{$engine_horsepower}', '{$fuel_capacity}', '{$water_capacity}', '{$cabins}', '{$heads}', '{$berths}', '{$salon_seating}', '{$forepeak}', '{$midships}', '{$salon}', '{$galley}', '{$quarter}', '{$aft}', '{$navigation_comm}', "; //below deck
        $query .= "'{$helm}', '{$cockpit}', '{$scuppers}', '{$coaming}', '{$gunwales_bullwarks}', '{$companionway}', '{$cabin}', '{$hatches}', '{$ports_openning}', '{$ports_fixed}', '{$dorades_vents}', '{$rail}', '{$ladder}', ";//on deck
        $query .= "'{$mast}', '{$standing_rigging}', '{$chain_plates}', '{$dodger}', '{$bimini}', '{$spreaders}', '{$boom}') ";
        $create_boat_query = mysqli_query($connection, $query);

        if(!$create_boat_query){
            echo mysqli_error($connection) . "<br>";
            echo $query;
        } else {
            header("Location: index.php");
        }
       

    }

?>
    
<h1 class="text-center">Add Boat</h1>


<div class="container mb-5 py-2 bg-light border">
<form action="" method="post" enctype="multipart/form-data">
    <h3>Selling Info</h3>
    <div class="form-row">
        <div class="col">
            <label for="for_sale">For Sale?</label><br>
            <select class="form-control" name="for_sale" id="for_sale">
                <option value="">Select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>     
            </select>
        </div>
        <div class="col">
            <label for="contact_info">Contact Email: </label>
            <input type="text" class="form-control" name="contact_info" value="<?php echo $_SESSION['email']; ?>">
        </div>
        <div class="col">
            <label for="price">Price (USD)</label>
            <input type="number" class="form-control" name="price" value="">
        </div>
        <div class="col">
            <label for="city">City: </label>
            <input type="text" class="form-control" name="city" value="">
        </div>        
    </div>
    <div class="form-row">
    <div class="col">
        <label for="state">State: </label><br>
            <select class="form-control" name="state" id="state" value="">
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
            <select class="form-control" name="region" id="region" value="">
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
            <select class="form-control" name="country" id="country" value="">
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
    <div class="form-row">
        <label for="Description">Boat Description: </label>
        <textarea class="form-control" id="description" rows="3" name="description" value="" placeholder="Write selling description here..."></textarea>
    </div>
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
        <input type="file" class="form-control-file" name="boat_image"> 
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
                <label class="form-check-input" for="sloop"><input class="form-check-input" type="checkbox" id="sloop" name="rig_design[]" value ="Sloop">Sloop</label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-input" for="ketch"><input class="form-check-input" type="checkbox" id="ketch" name="rig_design[]" value ="Ketch">Ketch</label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-input" for="yawl"><input class="form-check-input" type="checkbox" id="yawl" name="rig_design[]" value ="Yawl">Yawl</label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-input" for="cutter"><input class="form-check-input" type="checkbox" id="cutter" name="rig_design[]" value ="Cutter">Cutter</label>
            </div>
        </div>
    </div>
    <hr>
    <h3>Under Water</h3>

    <div class="form-row">        
        <div class="col">
            <label for="rudder_design">Rudder Design:</label><br>
            <select multiple class="selectpicker form-control" name="rudder_design[]" id="rudder_design">
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
            <select multiple class="selectpicker form-control" name="ballast_type[]" id="ballast_type">
                <option value="Lead">Lead</option>
                <option value="Internal">Internal</option> 
                <option value="Fixed">Fixed</option>
                <option value="Iron">Iron</option>
                <option value="Concrete">Concrete</option>                              
            </select>
        </div>
        <div class="col">
            <label for="keel_design">Keel Design</label><br>
            <select multiple class="selectpicker form-control" name="keel_design[]" id="keel_design">
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
            <select multiple class="selectpicker form-control" name="hull_material[]" id="hull_material">
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
            <select multiple class="selectpicker form-control" name="bow[]" id="bow" value="">
                <option value="Spoon">Spoon</option>
                <option value="Plumb">Plumb</option>
                <option value="Closed">Closed</option>                          
            </select>
        </div>
        <div class="col">
            <label for="stern">Stern:</label><br>
            <select multiple class="selectpicker form-control" name="stern[]" id="stern" value="">
                <option value="Counter">Counter</option>
                <option value="Canoe">Canoe</option>
                <option value="Plumb">Plumb</option>
                <option value="Lazarette">Lazarette</option>                           
            </select>
        </div>
        <div class="col">
            <label for="transom">Transom:</label><br>
            <select  multiple class="selectpicker form-control" name="transom[]" id="transom" value="">
                <option value="Reverse">Reverse</option>
                <option value="Flush">Flush</option>
                <option value="Closed">Closed</option>
                <option value="Open">Open</option>
                <option value="Scoop">Scoop</option>
                <option value="Step">Step</option>                           
            </select>
        </div>       
    </div>

    <hr>
    <h3>Below Deck</h3>
    <div class="form-row">
        <div class="col">
            <label for="engine_type">Engine Type:</label><br>
            <select multiple class="selectpicker form-control" name="engine_type[]" id="engine_type">
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
            <select multiple class="selectpicker form-control" name="engine_make[]" id="engine_make">
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
                <option value="Berth-V">Berth-V</option>
                <option value="Head">Head</option> 
                <option value="Storage">Storage</option>
                <option value="Vanity">Vanity</option>                              
            </select>
        </div>
        <div class="col">
            <label for="midships">Midships:</label><br>
            <select multiple class="selectpicker form-control" name="midships[]" id="midships">
                <option value="Locker">Locker</option>
                <option value="Drawers">Drawers</option> 
                <option value="Head">Head</option>
                <option value="Cooler">Cooler</option>                               
            </select>
        </div>
        <div class="col">
            <label for="salon">Salon:</label><br>
            <select multiple class="selectpicker form-control" name="salon[]" id="salon">
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
            <select multiple class="selectpicker form-control" name="galley[]" id="galley">
                <option value="Cooler">Cooler</option>
                <option value="Refrigerator">Refrigerator</option> 
                <option value="Sink">Sink</option>
                <option value="Range">Range</option>
                <option value="Oven">Oven</option>                           
            </select>
        </div>
        <div class="col">
            <label for="quarter">Quarter:</label><br>
            <select multiple class="selectpicker form-control" name="quarter[]" id="quarter">
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
            <select multiple class="selectpicker form-control" name="aft[]" id="aft">
                <option value="Cooler">Cooler</option>
                <option value="Refrigerator">Refrigerator</option> 
                <option value="Sink">Sink</option>                           
            </select>
        </div>
        <div class="col">
            <label for="navigation_comm">Navigation/Communication:</label><br>
            <select multiple class="selectpicker form-control" name="navigation_comm[]" id="navigation_comm">
                <option value="GPS">GPS</option>
                <option value="VHF">VHF</option> 
                <option value="Radar">Radar</option>
                <option value="SSB">SSB</option>
                <option value="HAM">HAM</option>
                <option value="AM/FM">AM/FM</option>           
            </select>
        </div>    
    </div> <!-- End of form-row -->
    <hr>
    <h3>On Deck</h3>
    <div class="form-row">
        <div class="col">
            <label for="helm">Helm:</label><br>
            <select multiple class="selectpicker form-control" name="helm[]" id="helm">
                <option value="Tiller">Tiller</option>
                <option value="Wheel">Wheel</option> 
                <option value="Hydraulic">Hydraulic</option>
                <option value="Mechanical">Mechanical</option>                           
            </select>
        </div>
        <div class="col">
            <label for="cockpit">Cockpit:</label><br>
            <select multiple class="selectpicker form-control" name="cockpit[]" id="cockpit">
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
            <select multiple class="selectpicker form-control" name="scuppers[]" id="scuppers">
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
            <select multiple class="selectpicker form-control" name="coaming[]" id="coaming">
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
            <select multiple class="selectpicker form-control" name="gunwales_bullwarks[]" id="gunwales_bullwarks">
                <option value="1">1"</option>
                <option value="1-2">1-2"</option> 
                <option value="2-3">2-3"</option>
                <option value="3+">3"+</option>                             
            </select>
        </div>
        <div class="col">
            <label for="companionway">Companionway:</label><br>
            <select multiple class="selectpicker form-control" name="companionway[]" id="companionway">
                <option value="Full">Full</option>
                <option value="1/2">1/2</option> 
                <option value="V">V</option>                           
            </select>
        </div>  
        <div class="col">
            <label for="cabin">Cabin:</label><br>
            <select multiple class="selectpicker form-control" name="cabin[]" id="cabin">
                <option value="Raised">Raised</option>
                <option value="Flush">Flush</option> 
                <option value="Hard">Hard</option>
                <option value="Soft/Hard">Soft/Hard</option>                           
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
            <label for="ladder">Ladder:</label><br>
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
            <select multiple class="selectpicker form-control" name="standing_rigging[]" id="standing_rigging">
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
            <select multiple class="selectpicker form-control" name="chain_plates[]" id="chain_plates">
                <option value="Stainless">Stainless</option>
                <option value="Bronze">Bronze</option>
                <option value="Hull">Hull</option>
                <option value="Bulkhead">Bulkhead</option>
                <option value="Deck">Deck</option>                          
            </select>
        </div>
        <div class="col">
            <label for="dodger">Dodger:</label><br>
            <select multiple class="selectpicker form-control" name="dodger[]" id="dodger">
                <option value="Full">Full</option>
                <option value="Partial">Partial</option>
                <option value="Rigid">Rigid</option>
                <option value="Soft">Soft</option>                          
            </select>
        </div>
        <div class="col">
            <label for="bimini">Bimini:</label><br>
            <select multiple class="selectpicker form-control" name="bimini[]" id="bimini">
                <option value="Full">Full</option>
                <option value="Partial">Partial</option>
                <option value="Fixed">Fixed</option>
                <option value="Non-Fixed">Non-Fixed</option>
                <option value="Folding">Folding</option>    
            </select>
        </div> 
    </div> <!-- End of form-row -->

    <div class="form-row">
        <div class="col">
            <label for="spreaders">Spreaders:</label><br>
            <select multiple class="selectpicker form-control" name="spreaders[]" id="spreaders">
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
            <select multiple class="selectpicker form-control" name="boom[]" id="boom">
                <option value="Aluminum">Aluminum</option>
                <option value="Wood">Wood</option>
                <option value="Steel">Steel</option>
                <option value="Carbon">Carbon</option>
                <option value="Internal Furling">Internal Furling</option>
                <option value="External Furling">External Furling</option>       
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