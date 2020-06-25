<!doctype html>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>PHP exam</title>
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
    <h1>Экспертная сессия</h1>

    <form method="POST" action="">
        <div>
            <h2>Вопрос</h2>
            <input type="number" name="number" id="number" required>
        </div>  
        <div>
            <h2>Вопрос</h2>
            <input type="number" name="numberpos" id="numberpos" min="0" required>
        </div> 
        <div>
            <h2>Вопрос</h2>
            <input type="text" name="text" id="text" minlength="1" maxlength="30" required>
        </div> 
        <div>
            <h2>Вопрос</h2>
            <textarea name="textarea" id="textarea" minlength="1" maxlength="255" required></textarea>
        </div> 
        <div>
            <h2>Вопрос</h2>
            <input type="radio" name="radio" id="1" checked>
            <input type="radio" name="radio" id="2">
        </div> 
        <div>
            <h2>Вопрос</h2>
            <input type="checkbox" name="checkbox" id="1">
            <input type="checkbox" name="checkbox" id="2">
            <input type="checkbox" name="checkbox" id="3">
        </div>
        <input type="submit">
    </form>
    <?php

    $number = $_POST['number'];
    $numberpos = $_POST['numberpos'];
    $text = $_POST['text'];
    $textarea = $_POST['textarea'];
    $radio = $_POST['radio'];
    $checkbox = $_POST['checkbox'];

    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = "roma1488chne";
    $db_base = 'phpexam'; // Имя БД
    $db_table = "expert"; // Имя Таблицы БД

    $mysqli = new mysqli($db_host,$db_user, $db_password, $db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
    if ($mysqli->connect_error) {
        die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
    ?>
</body>
</html>