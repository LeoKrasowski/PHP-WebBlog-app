<?php
  require_once 'connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Publications</title>
</head>
<body>
    <?php require "blocks/header.php" ?>

    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Publications</h1>
        
      <div class="table-responsive">
        <table class="table-striped">
        <thead>
              <tr>
                <th scope="col" class="header-cell">ID</th>
                <th scope="col" class="header-cell">Title</th>
                <th scope="col" class="header-cell">Author</th>
                <th scope="col" class="header-cell">Description</th>
                <th scope="col" class="header-cell">Publisher</th>
                <th scope="col" class="header-cell">Year</th>
              </tr>
            </thead>

        <?php
        $publications = mysqli_query($connect, "SELECT * FROM `publications`");
        $publications = mysqli_fetch_all($publications);
        foreach ($publications as $publication) {
            ?>

            <tr>
              <td><?= $publication[0] ?></td>
              <td><?= $publication[1]?></td>
              <td><?= $publication[2] ?></td>
              <td><?= $publication[3] ?></td>
              <td><?= $publication[4] ?></td>
              <td><?= $publication[5] ?></td>
          <?php
        }
         ?>
      </table>
      <h3>Add new publication</h3>
      <form action="" method="post">
          <p>Title</p>
          <input type="text" name="title">
          <p>Author</p>
          <input type="text" name="author">
          <p>Description</p>
          <textarea name="description"></textarea>
          <p>Publisher</p>
          <input type="text" name="publisher">
          <p>Year</p>
          <input type="text" name="year">
          <button type="submit">Add new</button>
        </form>  
    </div>
  </main>
        
    <?php require "blocks/footer.php" ?>
</body>