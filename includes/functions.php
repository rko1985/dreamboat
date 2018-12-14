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

function readMultiSelect($joinedTable, $singleTable, $joinId, $name){
    global $connection;
    global $boat_id;

    $findSelected = "SELECT * FROM boats  ";
    $findSelected .= "INNER JOIN $joinedTable ON boats.boat_id = $joinedTable.boat_id ";
    $findSelected .= "INNER JOIN $singleTable ON $singleTable.$joinId = $joinedTable.$joinId ";
    $findSelected .= "WHERE boats.boat_id = $boat_id";
    $find_selected_query = mysqli_query($connection, $findSelected);

    if(!$find_selected_query){
        echo mysqli_error($connection);
    }
    while($row = mysqli_fetch_assoc($find_selected_query)){
        echo $row[$name] . ", ";                
    }
}

//ADVANCED SEARCH FUNCTIONS

//Joining tables

function joinTables($variableName, $joinedTable, $singleTable, $joinId){
    global $query;
    if(!empty($variableName)){
        $query .= "INNER JOIN $joinedTable ON boats.boat_id = $joinedTable.boat_id INNER JOIN $singleTable ON $joinedTable.$joinId = $singleTable.$joinId ";
    }

}

function joinWhereAnd($variableName, $singleTable, $joinId){
    global $query;

    if(!empty($variableName)){
        if(count($variableName) < 1){
            $query .= "AND $singleTable.$joinId = $variableName[0] ";
        } else {
            $query .= "AND $singleTable.$joinId = $variableName[0] ";
            foreach($variableName as $key => $value){
                if($key >= 1) {
                    $query .= "OR $singleTable.$joinId = $variableName[$key] ";
                }            
            }                    
        }                
    }

}

function joinWhereOr($variableName, $singleTable, $joinId){
    global $query;

    if(!empty($variableName)){
        if(count($variableName) < 1){
            $query .= "$singleTable.$joinId = $variableName[0] ";
        } else {
            $query .= "$singleTable.$joinId = $variableName[0] ";
            foreach($variableName as $key => $value){
                if($key >= 1) {
                    $query .= "OR $singleTable.$joinId = $variableName[$key] ";
                }            
            }                    
        }                
    }

}

?>