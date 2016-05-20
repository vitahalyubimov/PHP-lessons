<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Arrays</title>
    </head>
<body>
<?php
    $peoples = array(
                    "human1" => array(
                                        "surname" => "Ус",
                                        "name" => "Виталий",
                                        "patronymic" => "Сергеевич",
                                        "age" => 19,
                                        "city" => "Днепропетровск"),
                    "human2" => array(
                                        "surname" => "Любимова",
                                        "name"  => "Ирина",
                                        "patronymic" => "Юрьевна",
                                        "age" => 37,
                                        "city" => "Днепропетровск"),
                    "human3" => array(
                                        "surname" => "Игнатьев",
                                        "name" => "Виталий",
                                        "patronymic" => "Александрович",
                                        "age" => 33,
                                        "city" => "Днепропетровск")
                    );
?>
     <a href="http://www.vk.com" style="text-decoration: none; color: magenta;" target="_blank" title="vk.com">
     <h1 style="text-align: center; text-shadow: 2px 2px 5px darkmagenta;">Данные о людях</h1></a>
    <?php foreach($peoples as $nameArray => $item):?>
        <div style="color: magenta;">
            Фамилия: <?php echo $item["surname"]; ?><br />
            Имя: <?php echo $item["name"]; ?><br />
            Отчество: <?php echo $item["patronymic"]; ?><br />
            Возраст: <?php echo $item["age"]; ?><br />
            Город: <?php echo $item["city"]; ?><br /><br />
        </div>
    <?php endforeach;
?>

    </body>
</html>