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

                $x = -10;
                $encounting = 10000;
                $step = 2;
                $type = 'E';

                if( $type == 'B' )
                    echo '<ul>';
                else
                if( $type == 'C' )
                    echo '<ol>';
                else
                if( $type == 'D' )
                {
                    echo '<table>';
                    echo '<tr>';
                    echo '<td>Номер строки</td>';
                    echo '<td>Значения аргументов</td>';
                    echo '<td>Значения функции</td>';
                    echo '</tr>';
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
                    if( $type == 'A' )
                    {
                        echo 'f('.$x.')='.$f;
                        if( $i < $encounting-1 )
                            echo '<br>';
                    }
                    else
                    if( $type == 'B' || $type == 'C')
                    {
                        echo '<li>f('. $x.')='.$f.'</li>';
                    }
                    else
                    if( $type == 'D' )
                    {
                        $n = $i + 1;
                        echo '<tr>';
                        echo '<td>'.$n.'</td>';
                        echo '<td>x='.$x.'</td>';
                        echo '<td>x='.$f.'</td>';
                        echo '</tr>';
                    }
                    else
                    if( $type == 'E' )
                    {
                        echo '<div style="display: inline-block; border: 2px solid red; margin: 4px;">';
                        echo 'f('.$x.')='.$f;
                        echo '</div>';
                    }
                }

                if( $type == 'B' )
                    echo '</ol>';
                else
                if( $type == 'C' )
                    echo '<ul>';
                else
                if( $type == 'D' )
                    echo '</table>';
            ?>
        </main>
                
        <footer>
            
        </footer>
    </body>
</html>