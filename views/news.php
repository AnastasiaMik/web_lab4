<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
    <title>Новостной портал</title>
    <link rel="stylesheet" href="http://localhost/lab_4/style.css">
    <link rel="stylesheet" href="http://localhost/lab_4/bootstrap.min.css">

</head>
<body>
        <header>Новостной портал</header>
        <div class="hellopage">
        </div>
        <a>Панель администратора</a>
        
        <?php foreach ($articles as $a): ?>
            <div>
                <h3><a href="article.php?id=<?=$a['id']?>">
                        <?=$a['title']?>
                        Заголовок
                    </a></h3>
                <em>Опубликовано:<?=$a['date']?></em>
                <p><?=articles_intro($a['content'])?>...</p>
            </div>
        <?php endforeach ?>
      
</body>
</html>
