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

    <pre>
      <?php
        $publications = mysqli_query($connect, "SELECT * FROM `publications`");
        $publications = mysqli_fetch_all($publications);
        print_r($publications);
      ?>
    </pre>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Publications</h1>
        
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Description</th>
              <th scope="col">Publisher</th>
              <th scope="col">Year</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Data</td>
              <td>Random</td>
              <td>Enriches</td>
              <td>Table</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>Enriches</td>
              <td>Magnificent</td>
              <td>Design</td>
              <td>Coordination</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Random</td>
              <td>Rich</td>
              <td>Value</td>
              <td>Useful</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>Random</td>
              <td>Rich</td>
              <td>Value</td>
              <td>Useful</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Random</td>
              <td>Rich</td>
              <td>Value</td>
              <td>Useful</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>Random</td>
              <td>Rich</td>
              <td>Value</td>
              <td>Useful</td>
            </tr>
            <tr>
                <td>1,007</td>
                <td>Data</td>
                <td>Random</td>
                <td>enrich</td>
                <td>Table</td>
                </tr>
            <tr>
            <td>1,008</td>
              <td>enrich</td>
              <td>Incandescent</td>
              <td>Design</td>
              <td>Format</td>
            </tr>
            <tr>
            <td>1,009</td>
              <td>enrich</td>
              <td>Incandescent</td>
              <td>Design</td>
              <td>Format</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </main>

    <?php require "blocks/footer.php" ?>
</body>