<?php
    //Запуск сессии
    session_start();
    if (isset($_POST['send']))
    {
        $_SESSION['login'] = $_POST['login'];
    }
    if (isset($_POST['submit']))
    {
        $bckg = $_POST['bckg'];
        //Кука на 5 сек
        setcookie("background", $bckg, time() + 5);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Работа с сессиями</title>
        <style>
            input{
                margin-top: 5px;
                margin-bottom: 5px;
            }
            <?php 
                if (isset($_COOKIE['background']))
                {
            ?>
            body{
                background: <?php echo $_COOKIE['background']?>;
            }
            <?php }?>
        </style>
    </head>
    <body>
    <?php
        if (!isset($_SESSION['login']))
        {
    ?>
        <form method="post">
            <input type="text" name="login" placeholder="Login"/>
            <br />
            <input type="submit" name="send" value="Отправить"/>
        </form>
    <?php
        }else{
          echo "Welcome, ".$_SESSION['login'];  
        } 
        ?>
        <form method="post">
            <select name="bckg">
                <optgroup label="Color:">
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                </optgroup>
            </select>
            <input type="submit" name="submit" value="Выбрать"/>
        </form>
    </body>
</html>