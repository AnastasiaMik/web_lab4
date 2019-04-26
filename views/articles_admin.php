<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	
    <title>Новостной блог</title>
</head>
<body>
    <div class = "container">
        <a href="../index.php"><h1>На главную</h1></a>
        <a href="index.php?action=add">Добавить статью</a>
        <div class = "container">
            <table>
                <tr>
                    <th>Дата создания</th>
                    <th>Заголовок</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($articles as $a): ?> 
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['title']?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
                    </td>
                    <td>
                        <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                    </td>
                </tr>
                <?php endforeach ?> 
            </table>
        </div>
    </div>
</body>
