<!DOCTYPE html> 
<html>

<head>
    <meta charset="utf-8"> 
	
    <title> Новостной портал </title>
		<link rel="stylesheet" href="http://localhost/lab_4/style.css">
    <link rel="stylesheet" href="http://localhost/lab_4/bootstrap.min.css">

</head>

<body>
    <div class="container"> 
        <h1> Новостной портал </h1>
        <div>
				<form method="post" action="index.php?action=add">
					<label>
                Название
                <input type="text" name="title" value="" autofocus required>
            </label>
            <label>
                ДАТА
                <input type="text" name="date" value="" required>
            </label>
            <label>
                Содержимое
                <textarea name="content" required></textarea>
            </label>
            <input type="submit" value="Сохранить">
        </form>

        </div>
    </div>
</body>
    
</html>
