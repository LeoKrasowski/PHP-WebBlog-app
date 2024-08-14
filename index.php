<?php
  require_once 'config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>PHP Web page</title>
</head>
<body>
  <?php require "blocks/header.php" ?>
    <div class="container mt-5">
        <h3 class="mb-5">Articles</h3>

       <div class="d-flex flex-wrap"> 
       <?php
        for($i = 0; $i < 5; $i++):
       ?>     
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Text</h4>
          </div>
          <div class="card-body">
            <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumnail">
              <li class="list-item">Cubilia porta porta turpis sollicitudin volutpat varius nunc rutrum</li>
              <li class="list-item">Sociosqu iaculis efficitur arcu scelerisque habitant; tellus tellus ultricies.</li>
              <li class="list-item">Ullamcorper porttitor senectus erat ornare</li>
              <li class="list-item">Himenaeos proin praesent parturient pellentesque; consectetuer adipiscing elit.</li>
            </ul>
            <a class="btn-detail" href="/detail.php">
            <button type="button" class="w-100 btn btn-lg btn-outline-primary ">Details</button>
            </a>
          </div>
        </div>
      </div>
    <?php endfor; ?>
    </div> 
    </div>
    <?php require "blocks/footer.php" ?>
</body>
</html>