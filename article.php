<?php
    require_once 'database.php';
    require_once 'models/articles.php';
    
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER,MYSQL_PASSWORD, MYSQL_DB);   
    $article = articles_get($link, $_GET['id']);
    
    include("views/article.php")
?>
