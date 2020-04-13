<html>
    <head>
        <title>Сычев Роман Александрович; 191-322; Лабораторная работа №А-2</title>
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>

        <header>
            <img src="img/logo_hw.png" alt="logo">
            <p>Сычев Роман Александрович<br>
                191-322<br>
                Лабораторная работа №А-2</p>
        </header>

        <main>
            <?php
                $min_value=-100;
                $max_value=200;

                $maximum = $min_value
                $minimum = $max_value
                $middle = 0
                $sum = 0

                $x = -10;
                $encounting = 10000;
                $step = 2;
                $type = 'D';

                switch ($type) {
                    case 'B':
                        echo '<ul>';
                        break;
                    case 'C':
                        echo '<ol>';
                        break;
                    case 'D':
                        echo '<table>';
                        echo '<tr>';
                        echo '<td>Номер строки</td>';
                        echo '<td>Значения аргументов</td>';
                        echo '<td>Значения функции</td>';
                        echo '</tr>';
                        break;
                }

                for( $i=0; $i < $encounting; $i++, $x+=$step )
                {
                    if( $x <= 10 )
                        $f = 32*x / 21;
                    else 
                    if( $x <20 ) 
                        $f = x*x/3 + 7/(x-4);
                    else
                    {
                        if( x == 22 )
                            $f= 'error';
                        else
                            $f = ( 1 / (x-22) )*2 + x;
                    }

                    if( $f>=$max_value || $f<$min_value )
                        break;

                    if( $f >= $maximum )
                        $maximum = $f
                    if( $f <= $minimum )
                        $minimum = $f
                    $sum = $sum + $f
                    $k = $i

                    switch ($type) {
                        case 'A':
                            echo 'f('.$x.')='.$f;
                            if( $i < $encounting-1 )
                                echo '<br>';
                            break;
                        case 'B':
                            echo '<li>f('. $x.')='.$f.'</li>';
                            break;
                        case 'C':
                            echo '<li>f('. $x.')='.$f.'</li>';
                            break;
                        case 'D':
                            $n = $i + 1;
                            echo '<tr>';
                            echo '<td>'.$n.'</td>';
                            echo '<td>x='.$x.'</td>';
                            echo '<td>f='.$f.'</td>';
                            echo '</tr>';
                            break;
                        case 'E':
                            echo '<div class="dive">';
                            echo 'f('.$x.')='.$f;
                            echo '</div>';
                            break;
                    }
                }

                switch ($variable) {
                    case 'B':
                        echo '</ol>';
                        break;
                    case 'C':
                        echo '<ul>';
                        break;
                    case 'D':
                        echo '</table>';
                        break;
                }   
            ?>
        </main>
                
        <footer>
            <?php 
                echo 'Максимум — '.$maximum;
                echo 'Минимум — '.$minimum;
                echo 'Среднее значение — '.$sum/$k;
                echo 'Сумма — '.$sum;
            ?>
        </footer>
    </body>
</html>