<?php

    require_once '../connect.php';

    $id = $_POST['id'];
    $body = $_POST['body'];

    mysqli_query($connect, "INSERT INTO `comments` (`id`, `publication_id`, `body`) VALUES (NULL, '$id', '$body')");

    header('Location: /publication.php?id=' . $id);

?>