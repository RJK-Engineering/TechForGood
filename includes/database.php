<?php
//database opvragen
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "techforgood";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()) {
    die("database query failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}
?>
