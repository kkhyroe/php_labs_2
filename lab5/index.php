<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Колезнева Надежда 181-323 Лабораторная Работа № А-5</title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="style.css">    
    <link rel="stylesheet" href="styles.css">

</head>
<body>
<header>
<div class="header">

            <div class="logo"><img src="logo.png" alt=""></div>
            <div class="name"><p>Колезнева Надежда 181-323 Лабораторная Работа № А-5</p></div>
        <div class="menu">
            <?php
            link_c('a', 'Табличная верстка');
            echo '<br>';
            link_c('b', 'Блочная верстка');

            function link_c($type, $t_name)
            {
                echo '<a href="?type=' . $type;
                if (isset($_GET['n'])) echo '&n=' . $_GET['n'];
                echo '"';

                if (isset($_GET['type']) && (($_GET['type']) == $type)) echo ' class="active"';

                echo '>' . $t_name . '</a>';
            }

            ?>
    </div></div>
</header>
<main>
    <div class="grid">
        <?php
        if (($_GET['type'] == 'a') || ($_GET['type'] == 'b')) include 'table.php';
        else echo 'Пожалуйста, выберите тип верстки, чтобы увидеть таблицу умножения.';
        ?>
    </div>
</main>
<footer>
    <div class="foot">
        <?php
        echo '<span> Тип верстки: ';
        switch ($_GET['type']) {
            case 'a':
                echo ' табличный;';
                break;
            case 'b':
                echo ' блочный;';
                break;
            case '':
                echo ' -';
        }

        echo "</span><span> Сформировано " . date('d'.'.'.'m'.'.'.'Y') . " в ";
        echo date('H') + 3 . ":" . date('i'. ":" .'s'.';').'</span>';

        echo '<span>  Таблица умножения: ';
        if (isset($_GET['n'])) echo $_GET['n'];
        else if (($_GET['type'] != 'a') && ($_GET['type'] != 'b')) echo '-';
        else echo 'полная';
        echo '</span>';
        ?>
    </div>
</footer>
</body>
</html>