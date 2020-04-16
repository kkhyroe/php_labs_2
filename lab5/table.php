<div class="left">
    <?php
    echo '<a href="?type=' . $_GET['type'] . '"';
    if (!isset($_GET['n'])) echo ' class="active"';
    echo '>Вся таблица</a>';
    ?>
    <?php
    for ($i = 2; $i <= 9; $i++) {
        echo '<a href="?n=' . $i . '&type=' . $_GET['type'] . '"';
        if (isset($_GET['n']) && (($_GET['n']) == $i)) echo ' class="active"';
        echo '>' . $i . '</a>';
    }
    ?>
</div>

<div class="right">
    <?php

    if (($_GET['type'] == 'a')) get('table');
    else get('block');

    function get($t)
    {
        if ($t == 'table') {
            echo '<table>';
            if (!isset($_GET['n'])) {
                for ($i = 2; $i <= 9; $i++) {
                    echo '<tr>';
                    for ($j = 2; $j <= 9; $j++) {
                        echo '<td>' . link_f($i) . ' x ' . link_f($j) . ' = ' . link_f($j * $i) . '</td>';
                    }
                    echo '</tr>';
                }
            } else {
                for ($i = 2; $i <= 9; $i++) {
                    echo '<tr><td>' . link_f($i) . ' x ' . link_f($_GET['n']) . ' = ' . link_f($_GET['n'] * $i) . '</td></tr>';
                }
            }
            echo '</table>';
        } else {
            echo '<div class="table">';

            if (!isset($_GET['n'])) {
                for ($i = 2; $i <= 9; $i++) {
                    echo '<div class="row">';
                    for ($j = 2; $j <= 9; $j++) {
                        echo '<div class="data">' . link_f($i) . ' x ' . link_f($j) . ' = ' . link_f($j * $i) . '</div>';
                    }
                    echo '</div>';
                }
            } else {
                for ($i = 2; $i <= 9; $i++) {
                    echo '<div class="row"><div class="data">' . link_f($i) . ' x ' . link_f($_GET['n']) . ' = ' . link_f($_GET['n'] * $i) . '</div></div>';
                }
            }
            echo '</div>';
        }
    }

    function link_f($n)
    {
        if ($n <= 9) return '<a href="?n=' . $n . '&type=' . $_GET['type'] . '">' . $n . '</a>';
        else return $n;
    }

    ?>
</div>