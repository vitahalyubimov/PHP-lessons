<?php
    if (isset($_POST['Send']))
    {
        $value = $_POST['radio'];
        setcookie('background', $value, time() + 3600);
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
      <?php } ?>
        </style>
    </head>
    <body>
       <form method="post">
            <input type="radio" name="radio" value="red"/>Red<br />
            <input type="radio" name="radio" value="green"/>Green<br />
            <input type="radio" name="radio" value="blue"/>Blue<br />
            <input type="submit" name="Send" value="Отправить"/>
       </form>
    </body>
</html>