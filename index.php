<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ksiegarnia</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="/api/scripts.js"></script>
</head>
<body>
<div>
    <form method="POST">

        <legend>Ksiegarnia</legend>
        <p>
            <label>
Nazwa:
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label>
Autor
                <input type="text" name="autor">
            </label>
        <p>
        </p>
        <label>
            <textarea rows="10" cols="80" name="opis"></textarea>
        </label>
        <p>
        </p>
        <label>
            <input type="submit" value="Zatwierdz">
        </label>
    </form>
</div>
<div class="book">
    <ul>
        <li id="name"></li>
        <li id="autor"></li>
        <li id="opis"></li>
    </ul>
</div>
</body>
</html>