<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Колезнева Надежда 181-323 Лабораторная работа № А-2</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
</head>
<body>
	<head>
		<div class="header">
			<div class="logo"><img src="logo.png" alt=""></div>
			<div class="name"><p>Колезнева Надежда 181-323 Лабораторная работа № А-4</p></div>
		</div>
	</head>
	<main>
    <div class="container">
        <?php
        $tdcount = 7;

        $tables = array('Это*первая#таблица', 'Это*таблица*из*одной*строки', 'А эта*из*огромного*количества*столбцов*очень*много*столбцов','', '*', '#', 'А#здесь#много#строк#очень#много');

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
    </div>
</main>
<footer class="foot">
    <?php
    echo 'Установленное количество колонок: ' . $tdcount . '<br>';
    ?>
</footer>
</body>
</html>