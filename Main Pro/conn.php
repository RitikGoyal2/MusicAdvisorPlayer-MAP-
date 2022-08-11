<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","ajax_search");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
?>
