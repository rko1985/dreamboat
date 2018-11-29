<?php include("includes/header.php"); ?> <!-- Remove when finished testing -->

<?php include("includes/navbar.php"); ?>

<?php 

if(isset($_POST['search'])){
$query = "SELECT * FROM boats ";

if(!empty($_POST['boat_type'])){
    $boat_type = $_POST['boat_type'];
    $query .= "INNER JOIN boat_types ON boats.boat_id = boat_types.boat_id INNER JOIN types ON boat_types.type_id = types.type_id ";
    if(count($boat_type) < 1){
        $query .= "WHERE types.type_id = $boat_type[0] ";
    } else {
        $query .= "WHERE types.type_id = $boat_type[0] ";
        foreach($boat_type as $key => $value){
            if($key >= 1) {
                $query .= "OR types.type_id = $boat_type[$key] ";
            }            
        }
        $query .= "GROUP BY boats.boat_name ";
        $query .= "HAVING COUNT(*) = " . count($boat_type);
    }
    
}



echo $query . "<br>";

$boat_select_query = mysqli_query($connection, $query);

if(!$boat_select_query){
    echo mysqli_error($connection);
}

while($row = mysqli_fetch_assoc($boat_select_query)){

    echo $row['boat_name'] . " " .$row['boat_id'] ."<br>";
}

}//end isset


?>

<div class="container">
    <form action="" method="post">
        <div class="form-row">
            <div class="col">
                <label for="boat_type">Boat Type: </label><br>
                <select multiple class="selectpicker form-control" name="boat_type[]" id="boat_type">
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
        </div>
        
        <div class="form-row">
        <div class="col">
            <input class="btn btn-primary float-right" type="submit" name="search" value="Search">
        </div>
        </div>
    </form>
</div>


<?php include("includes/footer.php"); ?> <!-- Remove when finished testing -->