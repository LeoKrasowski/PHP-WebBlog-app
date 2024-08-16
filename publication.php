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
    <title>Pulication</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        h4, h3 {
            margin: 0 0 10px;
        }

        h4 {
            background: #eee;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        h3 {
            margin-top: 20px;
            font-size: 24px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            color: #333;
            background-color: #eaeaea;
            padding: 8px 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 10px 0;
            transition: background-color 0.3s, border-color 0.3s;
            margin-left: 10px;
        }

        button:hover {
            background-color: #b3e6ff;
            border-color: #dcdcdc;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin: 10px 0;
            resize: vertical;
            box-sizing: border-box;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

    </style>

    <button style="color: black; padding: 5px 10px; border: 1px solid #ccc; border-radius: 5px; cursor: pointer; font-size: 16px;" onclick="goBack()"><</button>
    <script>
      function goBack() {
        window.history.back();
      }
    </script>

</head>
<body>
   <div class="container"> 
    <h4>Title: <?= $publication['title']?></h4>
    <h4>Author: <?= $publication['author']?></h4>
    <h4>Publisher: <?= $publication['publisher']?></h4>
    <h4>Year: <?= $publication['year']?></h4>

    <form action="vendor/create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $publication['id'] ?>">
        <textarea name="body" placeholder="Add your comment here..."></textarea>
        <button type="submit">Add comment</button>
    </form>

    <h3>Comments:</h3>
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