<!DOCTYPE html> 
<html>

<head>
    <meta charset="utf-8"> 
	
    <title> Новостной портал </title>
</head>
<body>
    <div class="container"> 
        <h1> Новостной портал </h1>
        <div> 
            <div class="article">
		    <h3> <?=$article['title']?> </h3>
                <em> Опубликовано: </em>  
		    <p> <?=$article['content']?> </p>
            </div>
        </div>     
    </div>
</body>
    
</html>
