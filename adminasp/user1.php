<?php
require "../website1/asp/db.php";
if($_SERVER['REQUEST_METHOD']=="GET"){
    
    $id = $_GET['id'];
    $sql = "DELETE FROM `register` WHERE `register`.`sno` = $id";

    $result = mysqli_query($con,$sql);
    header("Location: user.php");
    exit;


}else{
    echo "error";
}

?>