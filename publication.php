<?php

    require_once 'connect.php';

    $publication_id = $_GET['id'];
    $publication = mysqli_query($connect, "SELECT * FROM `publications` WHERE `id` = '$publication_id'");
    $publication = mysqli_fetch_assoc($publication);

    $comments = mysqli_query($connect,"SELECT * FROM `comments` WHERE `publication_id` = '$publication_id'");
    $comments = mysqli_fetch_all($comments);

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

    <form action="vendor/create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $publication['id'] ?>">
        <textarea name="body"></textarea>
        <button type="submit">Add comment</button>
    </form>

    

    <h3>Comments</h3>
    <ul>
        <?php
         foreach ($comments as $comment) {
            ?>
                <li><?= $comment[2] ?></li>
        <?php
         }        
        ?>
        
    </ul>
</body>
</html>