
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "tour";

$con = mysqli_connect($server,$username,$password,$database);

if(!$con){
    die("Database can not connect due to ".mysqli_connect_error());
}
?>
