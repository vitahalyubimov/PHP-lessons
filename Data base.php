<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>БД</title>
    </head>
    <body>
		<?php
			//подключение к БД
			$connection = mysql_connect("localhost", "mybd_user", "k8r8zybnmxae");
			//Выбор определенной БД
			$db = mysql_select_db("my_bd");
			//выбор кодировки обязателен
			mysql_set_charset("utf8");	//1 - ый вариант
			mysql_query(" SET NAMES 'utf8' ");	//2-ой вариант
			/*
				Если произошла ошибка в подключении к БД
			*/	
			if (!$connection || !$db)
			{
				//mysql_error(); - надежней завершать скрипт функцией exit() и передавать в неё функцию mysql_error();
				exit(mysql_error());
			}else
			{
				echo "Соединение прошло успешно! <br/>";
			}
			//выбрать ВСЕ из таблицы news
			$result = mysql_query(" SELECT * FROM news ");
			//закрытие соединения
			mysql_close();
			//получение данных в массив
			//mysql_fetch_assoc() - не выделяет память под ключ элемента массива 
			//mysql_fetch_array() - выделяет память под ключ элемента массива
			while($row = mysql_fetch_assoc($result))
			{
				?><h1><?php echo $row['title']."<br/>";?></h1>
				<p><?php echo $row['text']."<br/>";?></p>
				<p>Время/дата публикации: <?php echo $row['date']."  ".$row['time']."<br/>";?></p>
				<p>Автор: <?php echo $row['author']."<br/>";?></p>
				<hr/>
	  <?php }
			
		?>
    </body>
</html>