<?php

    require_once '../connect.php'; 


    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM `publications` WHERE `publications`. `id` = '$id'");
    
    header('Location: ../detail.php');


?>
