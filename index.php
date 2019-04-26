<?php 
    // Подключение файлов 
    require_once 'database.php';
    require_once 'models/articles.php';
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER,MYSQL_PASSWORD, MYSQL_DB); 
    $articles = articles_all($link); 
    include("views/articles.php");
?>
