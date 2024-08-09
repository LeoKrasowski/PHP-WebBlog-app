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
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Website</title><path fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        <span class="fs-4">Website example</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Main</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Contacs</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Sign in</a>
    </div>
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
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Details</button>
          </div>
        </div>
      </div>
    <?php endfor; ?>
    </div> 
    </div>
    <footer class="container pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
        <small class="d-block mb-3 text-body-secondary">© 2017–2024</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</body>
</html>