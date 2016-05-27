<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>United</title>
        <style>
            input{
                margin-top: 5px;
                margin-bottom: 5px;
                border-radius: 5px;
                text-align: center;
                background-color: lightgray;
            }
            form{
                padding: 20px;
                margin: 20px;
                width: 200px;
                text-align: center;
                border-radius: 20px;
                box-shadow: 2px 2px 10px gray;
                background-color: lightgray;
            }
            input:hover{
                background-color: gray;
            }
            input:active{
                background-color: white;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <input type="text" name="Surname" placeholder="Surname"/>
            <br />
            <input type="text" name="Name" placeholder="Name"/>
            <br />
            <input type="password" name="password" placeholder="Passsword"/>
            <br />
            <input type="submit" value="Submit"/>
        </form>
<?php
function clear_others_chars($data)
{
    return htmlspecialchars(strip_tags(trim($data)));
}
    /*
        htmlspecialchars() - заменяет в строке специальные символы на код
        strip_tags() - преобразовывает теги в строку и не применяет их к введенным данным
        trim() - убирает пробелы в начале и в конце
    */
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        echo clear_others_chars($_POST['Surname'])."<br />";
        echo clear_others_chars($_POST['Name'])."<br />";
        echo clear_others_chars($_POST['password'])."<br />";
    }
?>
    </body>
</html>