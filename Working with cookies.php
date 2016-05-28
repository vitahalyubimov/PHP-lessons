<?php
    if (isset($_POST['send']))
    {
        $cookName = $_POST['bckg_color'];
        setcookie("background", $cookName, time() + 3600);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Работа с куками</title>
        <style>
            <?php 
                if (isset($_COOKIE['background']))
                { ?>
                    body{
                        background: <?php echo $_COOKIE['background'];?>;
                    }
          <?php };?>
        </style>
    </head>
    <body>
        <form method="post">
            <select name="bckg_color">
                <option value="yellow">Yellow</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                <input  type ="submit" name="send" value="Отправить"/>
            </select>
        </form>
        <?php
            print_r($_COOKIE);
        ?>
    </body>
</html>