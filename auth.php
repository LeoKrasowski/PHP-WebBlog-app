<?php
    if($_COOKIE['user'] == 'True')
    setcookie('user', 'True', time() -360, '/');
      else
    setcookie('user', 'True', time() +360, '/');

    header('Location: /');
?>