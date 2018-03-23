<?php
//database opvragen
$dbhost = "db.ginojoanroy.nl";
$dbuser = "md427962db407505";
$dbpass = "95dGJPCl";
$dbname = "md427962db407505";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()) {
    die("database query failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}
?>
