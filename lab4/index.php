<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Сычев Роман Александрович; 191-322; Лабораторная работа №А-4</title>
        <link rel="stylesheet" href="style/style.css">
        <meta charset="UTF-8">
    </head>

    <body>
        <header>    
            <img src="img/logo_hw.png" alt="logo">
            <p>Сычев Роман Александрович<br>
                191-322<br>
                Лабораторная работа №А-4</p>
        </header>

        <main>
            <?php
            $tdcount = 7;

            $tables = array('С11*С12#С21', 'С11#С12#С13#С14#С15#С16#C17#C18', '', 'С11*С12*С13*С14*С15', '#', 'С11*С12*С13*С14*С15*С16*С17*С18', '*', 'С11*С12*С13*С14*С15#C21*C22#C31', '#', '');
    
            if ($tdcount > 0) {
                for ($i = 0; $i < count($tables); $i++) {
                    echo '<br><h2>Таблица №' . ($i + 1) . '</h2>';
                    echo '<b>Структура таблицы:</b> <i>' . $tables[$i] . '</i><br><br>';
    
                    table($tables[$i]);
                }
            } else echo 'Неправильное число колонок.';
    
            function table($construction) 
            {
                $table = '';
    
                $lines = explode('#', $construction);
    
                for ($i = 0; $i < count($lines); $i++) $table .= getTR($lines[$i]);
    
                if ($table != '') echo '<table border="1"cellpadding="10">' . $table . '</table>';
                else {
                    if (strpbrk($construction, '#')) echo 'В таблице нет строк с ячейками <br>';
                    else echo 'В таблице нет строк <br>';
                }
            }
    
            function getTR($line)
            {
                global $tdcount;
    
                if ($line != '') {
                    $td = explode('*', $line);
                    $tds = '';
    
                    for ($j = 0; $j < $tdcount; $j++) {
                        $tds .= '<td>' . $td[$j] . '</td>';
                    }
    
                    if ($tds != '') return '<tr>' . $tds . '</tr>';
                }
            }
    
            ?>
        </main>

        <footer>
            <?php
                echo 'Количество колонок: ' . $tdcount . '<br>';
            ?>
        </footer>
    </body>
</html>