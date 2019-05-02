<?php include("includes/functions.php"); ?>


        <?php 

        if(isset($_POST['Search_Boat']) || isset($_GET['page'])){ //Pagination check for page from GET

            if(isset($_POST['Search_Boat'])){ //Pagination check for post
                //Capturing Form Values
                //Sanitize post array
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $loa_min = $_POST['loa_min'];
                $loa_max = $_POST['loa_max'];
                $price_min = $_POST['price_min'];
                $price_max = $_POST['price_max'];
                $state = $_POST['state'];
                if(isset($_POST['boat_type'])){$boat_type = $_POST['boat_type'];}
                if(isset($_POST['mast'])){$mast = $_POST['mast'];}
                if(isset($_POST['keel_design'])){$keel_design = $_POST['keel_design']; }
                $builder = $_POST['builder'];
                $designer = $_POST['designer'];
                $ballast_displacement_min = $_POST['ballast_displacement_min'];
                $ballast_displacement_max = $_POST['ballast_displacement_max'];

                //Form Validating if LOA/Ballast-Displacement/Price is empty
                if(isset($price_min) && empty($price_max)){
                    $price_max = 9999999;
                }
                if(isset($price_max) && empty($price_min)){
                    $price_min = 0;
                }
                if(isset($loa_min) && empty($loa_max)){
                    $loa_max = 9999999;
                }
                if(isset($loa_max) && empty($loa_min)){
                    $loa_min = 0;
                }
                if(isset($ballast_displacement_min) && empty($ballast_displacement_max)){
                    $ballast_displacement_max = 9999999;
                }
                if(isset($ballast_displacement_max) && empty($ballast_displacement_min)){
                    $ballast_displacement_min = 0;
                }

                //Pagination Begin

                $query = "SELECT * FROM boats WHERE ";
                $query .= "LOA BETWEEN $loa_min AND $loa_max ";
                $query .= "AND price BETWEEN $price_min AND $price_max ";
                $query .= "AND ballast_displacement BETWEEN $ballast_displacement_min AND $ballast_displacement_max ";
                if(isset($boat_type)) $query .= "AND boat_type LIKE '%" . implode("%' AND boat_type LIKE '%", $boat_type) . "%' ";
                if(isset($mast)) $query .= "AND mast LIKE '%" . implode("%' AND mast LIKE '%", $mast) . "%' ";
                if(isset($keel_design)) $query .= "AND keel_design LIKE '%" . implode("%' AND keel_design LIKE '%", $keel_design) . "%' ";
                $query .= "AND builder LIKE '%{$builder}%' ";
                $query .= "AND designer LIKE '%{$designer}%' ";
                $query .= "AND state LIKE '%{$state}%' ";
                
                //Saving query for pagination
                $_SESSION['front_query'] = $query;
            }

            if(isset($_SESSION['front_query'])){ //Pagination saving query for GET page
                $query = $_SESSION['front_query'];
            }

            $boat_search_query = mysqli_query($connection, $query);

            if(!$boat_search_query){
                echo mysqli_error($connection);
            }

            // How many items to list per page
            $total = mysqli_num_rows($boat_search_query);

            if($total == 0){
                echo "<div class='jumbotron h-100 d-flex'>
                        <div class='my-auto mx-auto'>
                        <h1 class='display-4'>No Results Found</h1>
                        <p class='lead text-center'>Please refine your search.</p>
                        </div>
                    </div>";
            } else {

                // How many items to list per page
                $limit = 6;

                // How many pages will there be
                $pages = ceil($total / $limit);

                // What page are we currently on?
                $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
                    'options' => array(
                        'default'   => 1,
                        'min_range' => 1,
                    ),
                )));

                // Calculate the offset for the query
                $offset = ($page - 1)  * $limit;

                // Some information to display to the user
                $start = $offset + 1;
                $end = min(($offset + $limit), $total);

                //Pagination End
                
                //Generating query
                if(isset($_GET['page'])){
                    $query = $_SESSION['front_query'];
                } else {
                $query = "SELECT * FROM boats WHERE ";
                $query .= "LOA BETWEEN $loa_min AND $loa_max ";
                $query .= "AND price BETWEEN $price_min AND $price_max ";
                $query .= "AND ballast_displacement BETWEEN $ballast_displacement_min AND $ballast_displacement_max ";
                if(isset($boat_type)) $query .= "AND boat_type LIKE '%" . implode("%' AND boat_type LIKE '%", $boat_type) . "%' ";
                if(isset($mast)) $query .= "AND mast LIKE '%" . implode("%' AND mast LIKE '%", $mast) . "%' ";
                if(isset($keel_design)) $query .= "AND keel_design LIKE '%" . implode("%' AND keel_design LIKE '%", $keel_design) . "%' ";
                $query .= "AND builder LIKE '%{$builder}%' ";
                $query .= "AND designer LIKE '%{$designer}%' ";
                $query .= "AND state LIKE '%{$state}%' ";
                }

                $query .= "LIMIT {$limit} OFFSET {$offset} "; //Offset for paginated query

                $boat_search_query = mysqli_query($connection, $query);            

                if(!$boat_search_query){
                    echo mysqli_error($connection);
                }

                echo "<table class='table table-bordered table-hover justify-content-center'>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Model</th>
                                <th>LOA</th>
                            </tr>
                        </thead>                        
                        <tbody>";  

                while($row = mysqli_fetch_assoc($boat_search_query)) {
                    $boat_id = $row['boat_id'];
                    $boat_image = $row['boat_image'];
                    $price = $row['price'];
                    $boat_model = $row['boat_model'];
                    $LOA = $row['LOA'];
                    $for_sale = $row['for_sale'];
                    
                    echo "<tr>";
                    echo empty($boat_image) ? "<td class='align-middle'>No Image Available</td>" : "<td class='align-middle'><a href=boat_profile.php?b_id=$boat_id><img width='50' src='images/$boat_image' alt='image'></a></td>";                    
                    echo (empty($price) || $price == 0 || $for_sale == 'No') ? "<td class='align-middle'>Not for sale</a></td>" : "<td class='align-middle'>$".number_format($price)."</a></td>";                
                    echo "<td class='align-middle'><a href=boat_profile.php?b_id=$boat_id>$boat_model</a></td>";
                    echo "<td class='align-middle'>$LOA</td>";
                    
                }

                echo "                    
                    </tbody>
                    </table>
                ";

            } // End else for $total

        }
        ?>
   

    <?php
    if($total > 0){ 
    //Pagination Buttons
    // The "back" link    
    $prevlink = ($page > 1) ? '<li class="page-item">
    <a class="page-link" href="?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">First</span>
    </a>
    </li>
    
    <li class="page-item">
    <a class="page-link" href="?page=' . ($page - 1) . '" aria-label="Previous">
        <span aria-hidden="true">&lsaquo;</span>
        <span class="sr-only">Previous</span>
    </a>
    </li>' : '<li class="page-item disabled">
    <a class="page-link" href="?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">First</span>
    </a>
    </li>
    
    <li class="page-item disabled">
    <a class="page-link" href="?page=' . ($page - 1) . '" aria-label="Previous">
        <span aria-hidden="true">&lsaquo;</span>
        <span class="sr-only">Previous</span>
    </a>
    </li>';

    // The "forward" link
    $nextlink = ($page < $pages) ? '<li class="page-item">
    <a class="page-link" href="?page=' . ($page + 1) . '" aria-label="Next">
        <span aria-hidden="true">&rsaquo;</span>
        <span class="sr-only">Next</span>
    </a>
    </li>

    
    <li class="page-item">
    <a class="page-link" href="?page=' . $pages . '" aria-label="Previous">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Last</span>
    </a>
    </li>' : '<li class="page-item disabled">
    <a class="page-link" href="?page=' . ($page + 1) . '" aria-label="Next">
        <span aria-hidden="true">&rsaquo;</span>
        <span class="sr-only">Next</span>
    </a>
    </li>

    
    <li class="page-item disabled">
    <a class="page-link" href="?page=' . $pages . '" aria-label="Previous">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Last</span>
    </a>
    </li>';
    // Display the paging information
    
    echo '    
    <nav aria-label="Page navigation example" style="opacity: 0.95;" class="my-3">
        <div class="text-center">
            <ul class="pagination justify-content-center">

                '.$prevlink.'

                <li class="page-item"><a class="page-link btn-disabled" >Page '.$page.' of '.$pages.', displaying '.$start.'-'.$end.' of '.$total.' results</a></li>
                
                '. $nextlink.'
                


            </ul>
        </div>
    </nav>
    ';
    }
    ?>

