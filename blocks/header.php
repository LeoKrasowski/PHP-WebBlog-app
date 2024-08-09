<div class="d-flex flex-column flex-md-row align-items-center p-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Website</title><path fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        <span class="fs-4">Website example</span>
      </a>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/">Main</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/about.php">Contacs</a>
    </nav>
    <?php
        if (isset($_COOKIE['user']) && $_COOKIE['user'] == 'True'): // If $_COOKIE['user'] is not set, trying to access it directly will trigger a "Undefined index" notice in PHP. To avoid this, you should check if the cookie is set before comparing its value.
    ?>
    <a class="btn btn-outline-primary" href="/auth.php">Account</a>
    <?php else: ?>
    <a class="btn btn-outline-primary" href="/auth.php">Sign in</a>
    <?php endif; ?>
 </div>