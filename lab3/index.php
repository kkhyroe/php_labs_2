<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Сычев Роман Александрович; 191-322; Лабораторная работа №А-3</title>
        <link rel="stylesheet" href="style/style.css">
        <meta charset="UTF-8">
    </head>

    <body>
        <header>
            <img src="img/logo_hw.png" alt="logo">
            <p>Сычев Роман Александрович<br>
                191-322<br>
                Лабораторная работа №А-3</p>
        </header>

        <main>
            <div class="calc">
                <?php
                if (!isset($_GET['n'])) $_GET['n'] = 0;
    
                if (!isset($_GET['store'])) $_GET['store'] = '';
                else
                    if (isset($_GET['num']) && ($_GET['num'] >= 0)) $_GET['store'] .= $_GET['num'];
    
                echo "<div>" . $_GET['store'] . "</div>";
    
                for ($i = 0; $i < 10; $i++) {
                    echo '<a href="?num=' . $i . '&store=' . $_GET['store'] . '&n=' . ($_GET['n'] + 1) . '">' . $i . '</a>';
                }
                ?>
    
                <a href="?n=<?php echo $_GET['n'] ?>">Сброс</a>
            </div>
        </main>

        <footer>
            <span>Количество нажатий: <b><?php echo $_GET['n'] ?></b></span>
        </footer>
    </body>
</html>