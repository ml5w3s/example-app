<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comentários</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <h1>Área do cliente</h1>
<form action="/posts" method="post">
    <fieldset>
        <legend>Comentários</legend>
        <label for="nome">Nome: </label><br>
        <input type="text" name="title" placeholder="Título"><br><br>
        <label for="post">Comentário: </label><br>
        <textarea name="body" placeholder="Corpo"></textarea><br><br> 
    <input type="submit" value="Enviar">
    </fieldset>
</form>
</body>
</html>
<?php /**PATH /var/www/html/example-app/resources/views/posts/index.blade.php ENDPATH**/ ?>