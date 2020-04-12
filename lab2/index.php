<html lang="ru">
    <head>
        <title>Сычев Роман Александрович; 191-322; Лабораторная работа №А-2</title>
        <link rel="stylesheet" href="style/style.css">
        <meta charset="UTF-8">
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
                $x = -10;
                $encounting = 10000;
                $step = 2;
                $type = 'A';

                $min_value = 10;
                $max_value = 20;    

                if( $step == 'B' )
                    echo '<ul>';

                for( $i=0; $i < $encounting; $i++, $x+=$step )
                {   
                    if( $x == 0 )
                        $f = 'error';

                    else
                    if( $x <= 10 )
                        $f = 3/x + x/3 - 5;

                    else
                    if( $x <20 
                        $f = (x-7) * (x/8);

                    else // иначе
                    if( x >= 22 )
                        $f = 3*x + 2;

                    if( $step == 'A' )
                    {
                        echo 'f('.$x.')='.$f;

                        if( $i < $encounting-1 )
                            echo '<br>';
                    }

                    else
                    if( $step == 'B' )
                    {
                        echo '<li>f('. $x.')='.$f.'</li>';
                    }
                }

                if( $step == 'B' )
                    echo '</ul>';
            ?>
        </main>

        <footer>
            
        </footer>
    </body>
</html>