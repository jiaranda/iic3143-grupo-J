<?php

# Database config
$dbname = 'grupo_j';
$dbuser = 'iic3142';
$dbpass = 'iic3142';
$dbhost = '127.0.0.1';

# Database connection
$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

# Get comments query
$get_comments = "SELECT comentario FROM flora;";
$result = mysqli_query($link, $get_comments);
$results = array();
while($tbl = mysqli_fetch_array($result)) {
  array_push($results, $tbl[0]);
};

# JSON encoding
$myObj->data = $results;
$myJSON = json_encode($myObj);

# Return JSON
echo $myJSON;

?>