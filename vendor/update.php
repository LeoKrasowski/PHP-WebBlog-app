<?php
    require_once '../connect.php';

    
        $id = $_POST['id'];  
        $title = $_POST['title'];
        $author = $_POST['author'];
        $description = $_POST['description'];
        $publisher = $_POST['publisher'];
        $year = $_POST['year'];

        header('Location: ../detail.php');

mysqli_query($connect, "UPDATE `publications` SET `title` = '$title', `author` = '$author', `description` = '$description', `publisher` = '$publisher', `year` = '$year' WHERE `publications`.`id` = '$id'");

header('Location: /');
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/style.css">
        <title>Edit publication</title>
        <button type="button" class="collapsible"> publication</button>
          <div class="content">
            <form action="vendor/update.php" method="post">
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
          <script>
        document.addEventListener("DOMContentLoaded", function () {
            var coll = document.querySelectorAll(".collapsible");
            coll.forEach(function (button) {
                button.addEventListener("click", function () {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            });
        });
    </script>  
    </head>
    <body>
        
    </body>
    </html>