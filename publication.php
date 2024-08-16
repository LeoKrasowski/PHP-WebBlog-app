<?php

    require_once 'connect.php';

    $publication_id = $_GET['id'];
    $publication = mysqli_query($connect, "SELECT * FROM `publications` WHERE `id` = '$publication_id'");
    $publication = mysqli_fetch_assoc($publication);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Title <?= $publication['title']?></h4>
    <h4>Author <?= $publication['author']?></h4>
    <h4>Publisher <?= $publication['publisher']?></h4>
    <h4>Year <?= $publication['year']?></h4>
</body>
</html>