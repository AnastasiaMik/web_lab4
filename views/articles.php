<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	
    <title>Новостной портал</title>
    <link rel="stylesheet" href="http://localhost/lab_4/style.css">
    <link rel="stylesheet" href="http://localhost/lab_4/bootstrap.min.css">
</head>
<body>
	<div class = "container">
        <h1>Новостной портал</h1>
		<a href="admin">Панель администратора</a>
        <div class="overflow"></div> 
        <div class="blogline"></div>
        <div>
        <?php foreach ($articles as $a): ?> 
            <div class="blog">
                <h3><a href="article.php?id=<?=$a['id']?>">
                        <?=$a['title']?>
                    </a></h3>
                <em>Опубликовано: <?=$a['date']?></em>
                <p><?=articles_intro($a['content'])?>...</p>

            </div>
        <?php endforeach ?> 
        </div>
		</div>
</body>
</html>
