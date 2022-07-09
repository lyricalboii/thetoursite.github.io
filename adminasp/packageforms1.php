<?php
require "../website1/asp/db.php";
if($_SERVER['REQUEST_METHOD']=="GET"){
    
    $id = $_GET['id'];
    $sql = "DELETE FROM `package` WHERE `package`.`id` = $id";

    $result = mysqli_query($con,$sql);
    header("Location: packageforms.php");
    exit;


}else{
    echo "error";
}

?>