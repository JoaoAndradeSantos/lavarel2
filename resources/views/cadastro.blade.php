<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale='1.0'">
    <title>Página de Cadastro</title>
</head>
<body>
    <h1>Pagina de Cadastro</h1>

    <form action="/books" method="POST">
        @csrf
        <label for="lbltitle">Title:</label>
        <input type="text" name="title">
        <br><br>
        <label for="lblauthor">Author:</label>
        <input type="text" name="Author">
        <br><br>
        <label for="lbleditor">Editor:</label>
        <input type="text" name="editor">
        <br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>