<?php

//connect.php, used by other files to connect to website database.

$server	= 'engr-cpanel-mysql.engr.illinois.edu';
$username	= 'paulkim6_vegsoup';
$password	= '()torched!@';
$database	= 'paulkim6_cs242final';

// Create connection to my Cpanel database
$connectCpanel = mysqli_connect($server, $username, $password, $database);
if(mysqli_connect_errno($connectCpanel)) {
 	echo "Error: could not establish database connection" . mysqli_connect_error();
}