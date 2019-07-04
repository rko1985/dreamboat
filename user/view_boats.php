
<?php include("includes/functions.php"); ?>

<?php 


if($_SESSION['user_role'] == 'admin'){
    header("Location: ../admin/");
} elseif ($_SESSION['user_role'] !== 'subscriber' || !isset($_SESSION['user_role'])){
    header("Location: ../login.php");
} 

?>

<div class="text-center my-3">
    <h3 class="">My Listings </h3>
    <a class="btn btn-primary float-left my-3" href="add_boat.php">Create a Listing</a>
</div>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Boat Id</th>
            <th>Boat Name</th>
            <th>Model</th>
            <th>Submodel</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>                        
    <tbody>
        <?php 
        
        $query = "SELECT * FROM boats WHERE user_id = '{$_SESSION['user_id']} '";
        $select_boats= mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_boats)) {
            $boat_id = $row['boat_id'];
            $boat_name = $row['boat_name'];
            $boat_model = $row['boat_model'];
            $boat_submodel = $row['boat_submodel'];
            
            echo "<tr>";
            echo "<td>$boat_id</td>";
            echo "<td><a href=../boat_profile.php?b_id=$boat_id>$boat_name</a></td>";
            echo "<td>$boat_model</td>";
            echo "<td>$boat_submodel</td>";
            echo "<td><a href='edit_boat.php?boat_id={$boat_id}'>Edit</a></td>";            
            echo "<td><a href='index.php?delete={$boat_id}'>Delete</a></td>";
            echo "</tr>";                                              
            
        }
        
        
        ?>
   
        
    </tbody>
</table>

<?php 
if(mysqli_num_rows($select_boats) == 0){
    echo "<div class='lead text-center'>You currently have no listings.</div>";
}
?>

<?php 

if(isset($_GET['delete'])){
    $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

    $the_boat_id = $_GET['delete'];

    //find if boat is authorized to be deleted
    $query = "SELECT * FROM boats WHERE user_id = '{$_SESSION['user_id']}' AND boat_id = '{$the_boat_id}'";
    $find_user_query = mysqli_query($connection, $query);
    if(mysqli_num_rows($find_user_query) < 1){
        header("Location: ../index.php");
    } else {
        $query = "DELETE FROM boats WHERE boat_id = $the_boat_id";
        $delete_query = mysqli_query($connection, $query);
        header("Location: index.php");        
    }
        
   

}

?>
