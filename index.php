
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DreamBoat.info</title>
    <meta name="description" content="Dreamboat.info">
    <meta name="author" content="Dreamboat.info">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


    <script src="assets/js/bootstrap.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
        body { background: url(assets/bglight.png); }
        .hero-unit { background-color: #fff; }
        .center { display: block; margin: 0 auto; }
    </style>

    <script>
 
        //$('.selectpicker').selectpicker('val', '5');

        $('#myTab a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
 
    </script>
</head>

<body>

<!-- <?php
if($_SERVER['HTTP_HOST'] == 'localhost') {
    //Dev
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
} else {
    //Live
    $dbhost = "localhost"; 
    $dbuser = "dreamboat_user"; 
    $dbpass = "ks7J34hsk9sdk"; 
}

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('Could not connect: ' . mysql_error());
}

if($_SERVER['HTTP_HOST'] == 'localhost') {
    //Dev
    mysql_select_db('shipping_info');
} else {
    //Live
    mysql_select_db('boats');
}


if(isset($_POST['search']))
{
  if(! get_magic_quotes_gpc() )
  {
     $name = addslashes ($_POST['name']);
     $location  = addslashes ($_POST['location']);
     $width  = addslashes ($_POST['width']);
     $min_length  = addslashes ($_POST['min_length']);
     $max_length  = addslashes ($_POST['max_length']);
     $notes  = addslashes ($_POST['notes']);
  }
  else
  {
     $name = $_POST['name'];
     $location  = $_POST['location'];
     $width  = $_POST['width'];
     $min_length  = $_POST['min_length'];
     $max_length  = $_POST['max_length'];
     $notes  = $_POST['notes'];
  }


unset($sql);

if ($location) {
    $sql[] = " location = '$location' ";
}

if ($min_length && (!$max_length)) {
    $sql[] = " (length > '$min_length') ";
}
else if ((!$min_length) && $max_length) {
    $sql[] = " (length < '$max_length') ";
}
else if ($min_length && $max_length) {
    $sql[] = " (length BETWEEN '$min_length' AND '$max_length') ";
}

if ($width) {
    $sql[] = " width = '$width' ";
}

$query = "SELECT * FROM boats";

if (!empty($sql)) {
    $query .= ' WHERE ' . implode(' AND ', $sql);
}

//echo "<p>".$query."</p>";
//$query = "SELECT * FROM boats where location='$location' or length='$length' or width='$width'";
}
else
{
  $query = "SELECT * FROM boats limit 10";
}

$retval = mysql_query( $query, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
?> -->

<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand">DreamBoat.info</a>
      <div class="nav-collapse collapse">
      </div>
    </div>
  </div>
</div>
<div class="container hero-unit">
    <div class="row tabbable">
    <div class="span3 fixme">

    <p><b>Choose your attributes</b></p>

    <form class="form-horizontal" method="post" action="<?php $_PHP_SELF ?>">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li><a href="#basics" data-toggle="tab">Basics</a></li>
      <li><a href="#under_water" data-toggle="tab">Under Water</a></li>
      <li><a href="#below_decks" data-toggle="tab">Below Decks</a></li>
      <li><a href="#on_deck" data-toggle="tab">On Deck</a></li>
      <li><a href="#above_deck" data-toggle="tab">Above Deck</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade in active" id="basics">


 <div class="row-fluid">
        <b>Boat Type</b>
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="boat_type[]" multiple="true" style="height:100px;">
            <option value="1">Sail</option>
            <option value="5">Power</option>
            <option value="10">Motor Sail</option>
            <option value="10">Trawler</option>
            <option value="10">Fishing</option>
            <option value="10">Cabin Cruiser</option>
            <option value="10">Sunseeker</option>
            <option value="10">Monohull</option>
            <option value="10">Catamaran</option>
            <option value="10">Trimaran</option>
            <option value="10">Twin Hull</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        <b>Year</b>
    </div>
    <div class="row-fluid">
        Min:
        <select class="selectpicker span3">
            <option value="">Any</option>
            <?php 
                for ($x=1920; $x<=2015; $x++) {
                    echo "<option value=\"".$x."\">".$x."</option>";} 
            ?>
        </select>
        Max:
        <select class="selectpicker span3">
            <option value="">Any</option>
            <?php 
                for ($x=1920; $x<=2015; $x++) {
                    echo "<option value=\"".$x."\">".$x."</option>";} 
            ?>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Builder
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="">Any</option>
            <option value="1">Ranger</option>
            <option value="2">Coronado</option>
            <option value="3">Rhodes</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Model
    </div>
    <div class="row-fluid">
        <input class="span10" type="text" name="model" value="" placeholder="Any"/>
        <hr>
    </div>
    <div class="row-fluid">
        Designer
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="">Any</option>
            <option value="1">Gary Mull</option>
            <option value="2">Ed Edgar</option>
            <option value="2">Frank Butler</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Length Overall (LOA)
    </div>
    <div class="row-fluid">
        Min:
        <select name="min_length" class="selectpicker span4">
            <option value="">Any</option>
            <option value="1">1 foot</option>
            <?php 
                for ($x=2; $x<=100; $x++) {
                    echo "<option value=\"".$x."\">".$x." feet</option>";} 
            ?>
        </select>
        Max:
        <select name="max_length" class="selectpicker span4">
            <option value="">Any</option>
            <option value="1">1 foot</option>
            <?php 
                for ($x=2; $x<=100; $x++) {
                    echo "<option value=\"".$x."\">".$x." feet</option>";} 
            ?>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Length On Deck (LOD)
    </div>
    <div class="row-fluid">
        Min:
        <select class="selectpicker span4">
            <option value="">Any</option>
            <option value="1">1 foot</option>
            <?php 
                for ($x=2; $x<=100; $x++) {
                    echo "<option value=\"".$x."\">".$x." feet</option>";} 
            ?>
        </select>
        Max:
        <select class="selectpicker span4">
            <option value="">Any</option>
            <option value="1">1 foot</option>
            <?php 
                for ($x=2; $x<=100; $x++) {
                    echo "<option value=\"".$x."\">".$x." feet</option>";} 
            ?>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Length at Waterline (LWL)
    </div>
    <div class="row-fluid">
        Min:
        <select class="selectpicker span4">
            <option value="">Any</option>
            <option value="1">1 foot</option>
            <?php 
                for ($x=2; $x<=100; $x++) {
                    echo "<option value=\"".$x."\">".$x." feet</option>";} 
            ?>
        </select>
        Max:
        <select class="selectpicker span4">
            <option value="">Any</option>
            <option value="1">1 foot</option>
            <?php 
                for ($x=2; $x<=100; $x++) {
                    echo "<option value=\"".$x."\">".$x." feet</option>";} 
            ?>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Beam
    </div>
    <div class="row-fluid">
        Min:
        <select class="selectpicker span3">
            <option value="">Any</option>
            <option value="1">1</option>
            <?php 
                for ($x=2; $x<=50; $x++) {
                    echo "<option value=\"".$x."\">".$x."</option>";} 
            ?>
        </select>
        Max:
        <select class="selectpicker span3">
            <option value="">Any</option>
            <option value="1">1</option>
            <?php 
                for ($x=2; $x<=50; $x++) {
                    echo "<option value=\"".$x."\">".$x."</option>";} 
            ?>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Ballast (lbs)
    </div>
    <div class="row-fluid">
        Min:
        <input class="span3" type="text" name="ballast_min" value="" placeholder="Any"/>
        Max:
        <input class="span3" type="text" name="ballast_max" value="" placeholder="Any"/>
        <hr>
    </div>
    <div class="row-fluid">
        Displacement (lbs)
    </div>
    <div class="row-fluid">
        Min:
        <input class="span3" type="text" name="ballast_min" value="" placeholder="Any"/>
        Max:
        <input class="span3" type="text" name="ballast_max" value="" placeholder="Any"/>
        <hr>
    </div>
    <div class="row-fluid">
        Ballast/Displacement
    </div>
    <div class="row-fluid">
        Min:
        <select class="selectpicker span3">
            <option value="">Any</option>
            <option value="1">1</option>
            <?php 
                for ($x=2; $x<=100; $x++) {
                    echo "<option value=\"".$x."\">".$x."</option>";} 
            ?>
        </select>
        Max:
        <select class="selectpicker span3">
            <option value="">Any</option>
            <option value="1">1</option>
            <?php 
                for ($x=2; $x<=100; $x++) {
                    echo "<option value=\"".$x."\">".$x."</option>";} 
            ?>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Draft
    </div>
    <div class="row-fluid">
        Min:
        <select class="selectpicker span3">
            <option value="">Any</option>
            <option value="1">1</option>
            <?php 
                for ($x=2; $x<=100; $x++) {
                    echo "<option value=\"".$x."\">".$x."</option>";} 
            ?>
        </select>
        Max:
        <select class="selectpicker span3">
            <option value="">Any</option>
            <option value="1">1</option>
            <?php 
                for ($x=2; $x<=100; $x++) {
                    echo "<option value=\"".$x."\">".$x."</option>";} 
            ?>
        </select>
        <hr>
    </div>


      </div>

<!-- UNDER WATER -->

      <div class="tab-pane fade" id="under_water">

    <div class="row-fluid">
        Spade, Aft, FG
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="">Any</option>
            <option value="1">Spade</option>
            <option value="2">Hung</option>
            <option value="3">Skeg</option>
            <option value="4">Transom</option>
            <option value="5">Keel</option>
            <option value="6">Balanced</option>
            <option value="7">Aft</option>
            <option value="8">FG</option>
            <option value="9">Wood</option>
            <option value="10">Steel</option>
            <option value="11">Aluminum</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Ballast Type:
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="">Any</option>
            <option value="1">Lead</option>
            <option value="2">Internal</option>
            <option value="3">Fixed</option>
            <option value="4">Iron</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Keel Design
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="">Any</option>
            <option value="1">Fin</option>
            <option value="2">3/4</option>
            <option value="3">Full</option>
            <option value="4">FG</option>
            <option value="5">Lead</option>
            <option value="6">Iron</option>
            <option value="7">Wing</option>
            <option value="8">Bulb</option>
            <option value="9">Swing</option>
            <option value="10">Twin</option>
            <option value="11">Shoal</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Hull Material
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="">Any</option>
            <option value="1">FG</option>
            <option value="2">Wood</option>
            <option value="3">Iron</option>
            <option value="4">Aluminum</option>
            <option value="5">Cement</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Rig Design
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="">Any</option>
            <option value="1">Sloop</option>
            <option value="2">Ketch</option>
            <option value="3">Yawl</option>
            <option value="4">Cutter</option>
            <option value="5">Schooner</option>
            <option value="6">Bermuda</option>
            <option value="7">Tahitian</option>
            <option value="8">Square</option>
            <option value="9">Masthead</option>
            <option value="10">Fractional</option>
            <option value="11">Stayless</option>
        </select>
        <hr>
    </div>

      </div>

<!-- BELOW DECKS -->

      <div class="tab-pane fade" id="below_decks">

    <div class="row-fluid">
        Engine Type
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="">Any</option>
            <option value="1">Gasoline</option>
            <option value="2">Diesel</option>
            <option value="3">Electric</option>
            <option value="4">Inboard</option>
            <option value="5">Outboard</option>
            <option value="6">Inboard/Outboard</option>
            <option value="7">Single</option>
            <option value="8">Twin</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Engine Make
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="">Any</option>
            <option value="1">Universal</option>
            <option value="2">Yanmar</option>
            <option value="3">Volvo</option>
            <option value="4">Perkins</option>
            <option value="5">Cummins</option>
            <option value="6">Westerbeke</option>
            <option value="7">Chrysler</option>
            <option value="8">Nissan</option>
            <option value="9">Yamaha</option>
            <option value="10">Beta</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Engine Horsepower
    </div>
    <div class="row-fluid">
        Min:
        <input class="span3" type="text" name="ballast_min" value="" placeholder="Any"/>
        Max:
        <input class="span3" type="text" name="ballast_max" value="" placeholder="Any"/>
        <hr>
    </div>
    <div class="row-fluid">
        Fuel Capacity
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="0">0</option>
            <option value="1">1-20</option>
            <option value="2">21-50</option>
            <option value="3">51-100</option>
            <option value="4">101+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Water Capacity
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="0">0</option>
            <option value="1">1-20</option>
            <option value="2">21-50</option>
            <option value="3">51-100</option>
            <option value="4">101+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Cabins
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4+</option>
            <option value="5">Forward</option>
            <option value="6">Aft</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Heads
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Berths
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Salon Seating
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Forepeak
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Berth-V</option>
            <option value="2">Head</option>
            <option value="3">Storage</option>
            <option value="4">Vanity</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Midships
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Locker</option>
            <option value="2">Drawers</option>
            <option value="3">Head</option>
            <option value="4">Cooler</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Salon
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Sette - Bench</option>
            <option value="2">Sette - U</option>
            <option value="3">Berth - 1/4</option>
            <option value="4">Berth - Pipe</option>
            <option value="5">Shelving</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Galley
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Cooler</option>
            <option value="2">Refrigerator</option>
            <option value="3">Sink</option>
            <option value="4">Range</option>
            <option value="5">Oven</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Quarter
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Kitchen</option>
            <option value="2">Kitchenetter</option>
            <option value="3">Navigation</option>
            <option value="4">Lazarette</option>
            <option value="5">Berth - Pipe</option>
            <option value="6">Berth - Double</option>
            <option value="7">Cabin</option>
            <option value="8">Head</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Aft
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Cabin</option>
            <option value="2">Berth - Double</option>
            <option value="3">Berth - Single</option>
            <option value="4">Berth - Twin</option>
            <option value="5">Locker</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Navigation/Communication
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Table</option>
            <option value="2">Storage</option>
            <option value="3">GPS</option>
            <option value="4">VHF</option>
            <option value="5">Radar</option>
            <option value="6">SSB</option>
            <option value="7">HAM</option>
            <option value="8">AM/FM</option>
        </select>
        <hr>
    </div>

      </div>

<!-- ON DECK -->

      <div class="tab-pane fade" id="on_deck">

    <div class="row-fluid">
        Helm
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Tiller</option>
            <option value="2">Wheel</option>
            <option value="3">Hydraulic</option>
            <option value="4">Mechanical</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Cockpit
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Symmetrical</option>
            <option value="2">Asymmetrical</option>
            <option value="3">Stern</option>
            <option value="4">Center</option>
            <option value="5">3-5'</option>
            <option value="6">5-7'</option>
            <option value="7">7-9'</option>
            <option value="8">10'+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Scuppers
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">1"</option>
            <option value="2">1-2"</option>
            <option value="3">2-3"</option>
            <option value="4">3"+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Coaming
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">FG</option>
            <option value="2">Teak</option>
            <option value="3">Wood</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Gunwales/ Bullwarks
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">1"</option>
            <option value="2">1-2"</option>
            <option value="3">2-3"</option>
            <option value="4">3"+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Companionway
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Full</option>
            <option value="2">1/2</option>
            <option value="3">V</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Cabin
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Raised</option>
            <option value="2">Flush</option>
            <option value="3">Hard</option>
            <option value="4">Round</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Hatches
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Ports - Openning
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Small</option>
            <option value="2">Large</option>
            <option value="3">Small/Large</option>
            <option value="4">0-2</option>
            <option value="5">2-4</option>
            <option value="6">4-6</option>
            <option value="7">6-8</option>
            <option value="8">8-10</option>
            <option value="8">10+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Ports - Fixed
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Small</option>
            <option value="2">Large</option>
            <option value="3">Small/Large</option>
            <option value="4">0-2</option>
            <option value="5">2-4</option>
            <option value="6">4-6</option>
            <option value="7">6-8</option>
            <option value="8">8-10</option>
            <option value="8">10+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Dorades/Vents
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5+</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Transom
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Reverse</option>
            <option value="2">Flush</option>
            <option value="3">Closed</option>
            <option value="4">Open</option>
            <option value="5">Scoop</option>
            <option value="6">Step</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Bow
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Spoon</option>
            <option value="2">Plumb</option>
            <option value="3">Sharp</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Stern
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Counter</option>
            <option value="2">Canoe</option>
            <option value="3">Plumb</option>
            <option value="4">Lazarette</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Rail
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Wood</option>
            <option value="2">Rubber</option>
            <option value="3">FG</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Ladder
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Fixed</option>
            <option value="2">Non-fixed</option>
        </select>
        <hr>
    </div>


      </div>


<!-- ABOVE DECK -->

      <div class="tab-pane fade" id="above_deck">


    <div class="row-fluid">
        Spars
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Aluminum</option>
            <option value="2">Wood</option>
            <option value="3">Steel</option>
            <option value="4">Carbon</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Standing Rigging
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Wire</option>
            <option value="2">Rod</option>
            <option value="3">Continuous</option>
            <option value="4">Discontinuous</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Chain Plates
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Stainless</option>
            <option value="2">Bronze</option>
            <option value="3">Hull</option>
            <option value="4">Bulkhead</option>
            <option value="5">Deck</option>
        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Dodger
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Full</option>
            <option value="2">Partial</option>
            <option value="3">Rigid</option>
            <option value="4">Soft</option>

        </select>
        <hr>
    </div>
    <div class="row-fluid">
        Bimini
    </div>
    <div class="row-fluid">
        <select class="selectpicker span10" name="builder" data-live-search="true" multiple>
            <option value="1">Full</option>
            <option value="2">Partial</option>
            <option value="3">Fixed</option>
            <option value="4">Non-Fixed</option>
        </select>
        <hr>
    </div>

      </div>

    </div>

    

   
    
    <!--

    <table border="1" cellpadding="5">
        <tr>
            <td align="left">Length Overall (LOA):</td>
        </tr>
        <tr>
            <td align="left">Min Length :</td>
        </tr>
        <tr>
            <td>
                <select name="min_length" class="input-small">
                    <option value="">Any</option>
                    <option value="1">1 foot</option>
                    <option value="5">5 feet</option>
                    <option value="10">10 feet</option>
                    <option value="15">15 feet</option>
                    <option value="20">20 feet</option>
                    <option value="25">25 feet</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="left">Max Length :</td>
        </tr>
        <tr>
            <td>
                <select name="max_length" class="input-small">
                    <option value="">Any</option>
                    <option value="8">8 feet</option>
                    <option value="12">12 feet</option>
                    <option value="22">22 feet</option>
                    <option value="23">23 feet</option>
                    <option value="34">34 feet</option>
                    <option value="42">42 feet</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="left"><br></td>
        </tr>
        <tr>
            <td align="left">Width :</td>
        </tr>
        <tr>
            <td>
                <select name="width" class="input-medium">
                    <option value="">Any</option>
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="left"><br></td>
        </tr>
        <tr>
        <tr>
            <td align="left">Location :</td>
        </tr>
        <tr>
            <td>
                <select name="location" class="input-medium">
                    <option value="">Any</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="San Francisco">San Francisco</option>
                    <option value="Sausalito">Sausalito</option>
                    <option value="Waikiki">Waikiki</option>
                    <option value="Reno">Reno</option>
                    <option value="Maine">Maine</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="left"><br></td>
        </tr>
    </table>
-->


                <div class="span5">
                    <input type="submit" class="btn btn-success btn-large" name="search" id="search" value="Search"/>
                </div>
            </form>
        </div>
        <div class="span8 well pull-right">
            <div class="tab-content">
                <div id="blog" class="tab-pane active">

    <h2>Welcome to DreamBoat.info!</h2>
    <p>Below are your results:</p>


<?php

echo "<div class=\"span7\">";
echo "<table class=\"table table-condensed hero-unit\"> "; 
echo "<thead>";
echo "<tr>";
echo "<th></th>";
echo "<th>Name</th>"; 
echo "<th>Location</th>";
echo "<th>Width</th>";
echo "<th>Length</th>";
echo "<th>Notes</th>";
echo "</tr>";
echo "<thead>";


while($row = mysql_fetch_array( $retval )) 
{
echo "<tbody>";
echo "<tr>";
echo "<td><button type=\"button\" class=\"btn btn-primary\" style=\"font-size:smaller;\">Select</button></td>";
echo "<td>".$row['name'] . "</td>"; 
echo "<td>".$row['location'] . " </td>";
echo "<td>".$row['width'] . " </td>";
echo "<td>".$row['length'] . " </td>";
echo "<td>".$row['notes'] . " </td>";
echo "</tr>";
echo "</tbody>";
} 
echo "</table>";
echo "</div>";

mysql_close($conn);


?>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>