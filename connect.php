<?php

//connect.php, used by other files to connect to website database.

$server	= 'engr-cpanel-mysql.engr.illinois.edu';
$username	= 'gargoyletrees_ad';
$password	= 'cs242';
$database	= 'gargoyletrees_sfr';

// Create connection to my Cpanel database
$connectCpanel = mysqli_connect($server, $username, $password, $database);
if(mysqli_connect_errno($connectCpanel)) {
 	echo "Error: could not establish database connection" . mysqli_connect_error();
}