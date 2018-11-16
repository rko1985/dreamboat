<?php 

function multiSelectInsert($incomingVariable, $joinTable, $joinId){
    global $connection;

    if(!empty($incomingVariable)){
        foreach($incomingVariable as $selected){
            $query = " INSERT INTO $joinTable (boat_id, $joinId) VALUES(LAST_INSERT_ID(), $selected)";
            $multiselect_query = mysqli_query($connection, $query);
            if(!$multiselect_query)
            echo mysqli_error($connection);
        }
    }   


}


?>