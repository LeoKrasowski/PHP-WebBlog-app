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
    <link rel="stylesheet" href="/css/style.css">
    <title>Edit publication</title>

    <button 
            id="dynamicButton"
            style="color: black; padding: 5px 10px; border: 1px solid #ccc; border-radius: 5px; cursor: pointer; font-size: 16px;" 
            onmouseover="hoverIn(this)"
            onmouseout="hoverOut(this)"
            onclick="goBack()">
            <
        </button>
    <script>
      function goBack() {
        window.history.back();
      }

      function hoverIn(button) {
        button.style.backgroundColor = '#b3e6ff'; // Change background color on hover
        button.style.transform = 'scale(1.05)';    // Scale up slightly on hover
      }

      function hoverOut(button) {
        button.style.backgroundColor = '#eaeaea'; // Revert background color
        button.style.transform = 'scale(1)';       // Revert scale
      }
    </script>

    <H2 style="color: grey; font-size: 24px; font-family: Arial, sans-serif; text-align: center;">Publication</H2>
      <div>
        <form action="vendor/create.php" method="post">
        <input type="hidden" name="id" value="<?= $publication['id'] ?>">
            <h4 class="title-form">Edit</h4>
            <p class="li-form">Title</p>
            <input type="text" name="title" value="<?= $publication['title'] ?>">
            <p class="li-form">Author</p>
            <input type="text" name="author" value="<?= $publication['author'] ?>">
            <p class="li-form">Description</p>
            <textarea name="description"> <?= $publication['description'] ?></textarea>
            <p class="li-form">Publisher</p>
            <input type="text" name="publisher" value="<?= $publication['publisher'] ?>">
            <p class="li-form">Year</p>
            <input type="text" name="year" value="<?= $publication['year'] ?>">
          <button type="submit" class="btn-submit">Submit</button>
          </form>  
        </div>
      </div>
      
</head>
<body>
    
</body>
</html>