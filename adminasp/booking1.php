<?php
require "../website1/asp/db.php";
if($_SERVER['REQUEST_METHOD']=="GET"){
    
    $id = $_GET['id'];
    $sql = "DELETE FROM `booking` WHERE `booking`.`id` = $id";

    $result = mysqli_query($con,$sql);
    header("Location: booking.php");
    exit;


}else{
    echo "error";
}

?>