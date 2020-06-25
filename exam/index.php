<!doctype html>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>PHP exam</title>
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
<h1>Админка</h1>
    <form method=POST action="">
        <input type="password" name="pass">
        <input type="submit">
    </form>

    <div class="admin">

    <?php
        if (isset($_REQUEST['newsession'])) {
            if (session_id()) {
                echo "Сессия уже существует";
            }
            else {
            session_start();
            echo session_id();
            $id = session_id();
            $id = (string) $id;
            }
        }
    ?>
    <form>
        <input type="submit" name="newsession" value="Новая сессия" />
    </form>
    <?php
        if (isset($_REQUEST['closesession'])) {
            session_abort();
        }
    ?>
    <form>
        <input type="submit" name="closesession" value="Закрыть сессию" />
    </form>
    <?php
        if (isset($_REQUEST['delsession'])) {
            $db_host = "localhost"; 
            $db_user = "std_917"; // Логин БД
            $db_password = "roma1488chne";
            $db_base = 'std_917'; // Имя БД
            $db_table = "expert"; // Имя Таблицы БД
            $id = session_id();
            $id = (string) $id;
            $link = mysqli_connect($db_host, $db_user, $db_password, $db_base) 
            or die("Ошибка " . mysqli_error($link)); 
            $query ="DELETE FROM ".$db_table." WHERE id = 'session_id()'";
            echo $id;
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
            mysqli_close($link);

            session_abort();
        }
    ?>
    <form>
        <input type="submit" name="delsession" value="Удалить сессию" />
    </form>
    <?php
        if (isset($_REQUEST['results'])) {
            $db_host = "localhost"; 
            $db_user = "std_917"; // Логин БД
            $db_password = "roma1488chne";
            $db_base = 'std_917'; // Имя БД
            $db_table = "expert"; // Имя Таблицы БД
            $id = session_id();
            $id = (string) $id;
            $link = mysqli_connect($db_host, $db_user, $db_password, $db_base) 
            or die("Ошибка " . mysqli_error($link)); 
                
            $query ="SELECT * FROM expert";
            
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
            if($result)
            {
                $rows = mysqli_num_rows($result); // количество полученных строк
                
                echo "<table><tr><th>1 Вопрос</th><th>2 Вопрос</th><th>3 Вопрос</th><th>4 Вопрос</th><th>Дата и время</th><th>ip</th></tr>";
                for ($i = 0 ; $i < $rows ; ++$i)
                {
                    $row = mysqli_fetch_row($result);
                    echo "<tr>";
                        for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
                    echo "</tr>";
                }
                echo "</table>";
                
                // очищаем результат
                mysqli_free_result($result);
            }
            
            mysqli_close($link);
        }
    ?>
    <form>
        <input type="submit" name="results" value="Показать результаты" />
    </form>
    <?php
        if (isset($_REQUEST['link'])) {
            echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        }
    ?>
    <form>
        <input type="submit" name="link" value="Создать ссылку на эту сессию" />
    </form>
 

    </div>

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

        <input type="submit" name="Submit">
    </form>
    <?php

    if (isset($_POST['number']) && isset($_POST['text'])){
        $number = $_POST['number'];
        $numberpos = $_POST['numberpos'];
        $text = $_POST['text'];
        $textarea = $_POST['textarea'];
        $date = date("m.d.Y H:i:s");
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = (string)$date;
        $ip = (string)$ip;

        $db_host = "localhost"; 
        $db_user = "std_917"; // Логин БД
        $db_password = "roma1488chne";
        $db_base = 'std_917'; // Имя БД
        $db_table = "expert"; // Имя Таблицы БД

        $mysqli = new mysqli($db_host,$db_user, $db_password, $db_base);

        if ($mysqli->connect_error) {
            die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        }

        $result = $mysqli->query("INSERT INTO ".$db_table." (number,numberpos,text,textarea,date,ip,id) VALUES ('$number','$numberpos','$text','$textarea','$date','$ip','$id')");
        

        if ($result == true){
            echo "Информация занесена в базу данных";
        }else{
            echo "Информация не занесена в базу данных";
        }
    }
    ?>
    

</body>
</html>