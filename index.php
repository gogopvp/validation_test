<html>
<head>
    <meta charset="utf-8">
    <title>Валидация</title>
</head>
<body>
<h2>Регистрация</h2>
<form action="controller.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
    <p>
        <label>Ваш емаил:<br></label>
        <input name="email" type="text" size="30" maxlength="30">
    </p>
    <p>
        <label>Ваш номер телефона:<br></label>
        <input name="number" type="text" size="30" maxlength="30">
    </p>
    <? if($error)
            foreach ($error as $item)
                echo $item;
    ?>
    <p>
        <input type="submit" name="submit" value="Проверить">
    </p></form>
</body>
</html>