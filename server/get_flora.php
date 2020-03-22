<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php

$dbname = 'grupo_j';
$dbuser = 'iic3142';
$dbpass = 'iic3142';
$dbhost = '127.0.0.1';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

$test_query = "SELECT comentario FROM flora;";
$result = mysqli_query($link, $test_query);

$results = array();

while($tbl = mysqli_fetch_array($result)) {
  array_push($results, $tbl[0]);
};

$myObj->data = $results;
$myJSON = json_encode($myObj);

echo $myJSON;

?>