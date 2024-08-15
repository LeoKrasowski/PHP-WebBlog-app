<?php
    require_once '../connect.php';

$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$publisher = $_POST['publisher'];
$year = $_POST['year'];

mysqli_query($connect, "INSERT INTO `publications` (`id`, `title`, `author`, `description`, `publisher`, `year`) VALUES (NULL, '$title', '$author', '$description', '$publisher', '$year')");

header('Location: ../detail.php');