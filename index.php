<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_7</title>
</head>
<body>
    <?php

    /*
        1. Вывести текстовые поля email, checkbox 'subscribe' и
        кнопку 'send'. При клике на кнопку скрипт проверяет
        checkbox checked. Если да, выводится "Thank you for
        subscribing", если нет, страница обновляется.
    */

    echo "<h1>Задача 1</h1><br>";
    ?>

    <form action="checkedVerify.php" method="post">
        <input type="text" name="email" autocomplete="off" placeholder="email@gmail.com" required>
        <br>
        <input type="checkbox" name="cSubscribe" value="subscribe">
        <label for="cSubscribe"><b>Subscribe</b></label>
        <br>
        <button type="submit" name="nSend" value="vSend">Send</button>
    </form>
</body>
</html>