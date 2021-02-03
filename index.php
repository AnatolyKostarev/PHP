<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_2: Условия</title>
</head>
<body>
    <?php

    /*Есть 2 переменные. Проверить и вывести на экран,  
    является ли значение первой переменной кратным  
    значению второй (первое число кратно второму, если  
    делится на него без остатка) */

    echo "<h1>Задача 1</h1>";
    
    $a = 10;
    $b = 5;

    if ($a % $b == 0)
    {
        echo "Значение переменной a = {$a} является кратным значению переменной b = {$b}";
    }
    else
    {
        echo "Значение переменной a = {$a} не является кратным значению переменной b = {$b}";
    }


    // 2. Вывести квадрат большего из двух чисел.
    
    echo "<h1>Задача 2</h1>";

    function squareMax($a, $b)
    {
        if ($a > $b)
        {
            $sqr = $a*$a;
            echo "Квадрат наибольшего числа {$a} равен ";
            return $sqr;
        } elseif ($a < $b)
        {
            $sqr = $b*$b;
            echo "Квадрат наибольшего числа {$b} равен ";
            return $sqr;
        } else {
            echo "Введеные числа равны. Невозможно вывести квадрат наибольшего числа";
        }
    }

    // Первый вариант вызова функции и вывода результата в браузер

    $sqr = squareMax(21, 13);
     print_r($sqr);

    // Второй вариант вызова функции и вывода результата в браузер

    //echo squareMax(21, 13);

    echo "<br>";



    /*3. Есть переменная, в ней сохранен номер месяца (в коде
скрипта). Скрипт возвращает количество дней в этом
месяце*/

    echo "<h1>Задача 3</h1>";

    $monthNumber = 4;
    $year = 2020;
    $countOfDays = date('t');

    echo "Количество дней в текущем месяце равно {$countOfDays} <br>";

    $countOfDays1 = cal_days_in_month(CAL_GREGORIAN, $monthNumber, $year);
    echo "<p>Месяц = {$monthNumber}</p>";
    echo "<p>Количество дней в {$monthNumber}-м месяце {$year} года составляет {$countOfDays1}</p> <br>";


    /*4. Есть переменная, в ней (в скрипте) сохранен год.
     Проверить, является ли внесенный год високосным. */

     echo "<h1>Задача 4</h1>";

    $yearFour = date('L');
    $yearFour1 = date('L', mktime(0, 0, 0, 1, 1, $year));
    if ($yearFour == 1)
    {
        echo "Текущий год високосный";
    }
    else
    {
        echo "Текущий год не високосный";
    }

    echo "<br>";

    if ($yearFour1 == 1)
    {
        echo "{$year} год високосный";
    }
    else
    {
        echo "{$year} год не високосный";
    }


    echo "<br>";

    /*5. Вывести сумму двух чисел, если они оба кратны 3, или
         вывести результат деления при условии, что второе
         число не равно нулю (если ноль, то выводится сообщение о некорректном вводе). */

    echo "<h1>Задача 5</h1>";

    function sumAndDev($a, $b)
    {
        if ($b == 0)
        {
            echo "Некорректный ввод. Второй аргумент не может быть равен 0";
        }

        else if ($a % 3 == 0 && $b % 3 == 0)
        {
            echo "Оба аргумента кратны 3-м. Сумма аргументов равна ";
            return $a + $b;
        }
        else
        {
            echo "Один или оба аргумента не кратны 3-м. Результат деления первого аргумента на второй равен ";
            return $a / $b;
        }
    }


    echo sumAndDev(9, 3);
    echo "<br>";
    echo sumAndDev(15, 5);
    echo "<br>";
    echo sumAndDev(12, 0);


    /* 6. Разработать страницу, которая проверяет, авторизован ли пользователь.
     На странице есть переменная session_id. Если в переменной записано число 0,
     то пользователь видит форму регистрации (логин и пароль). Если 1, то выводит
     сообщение «Вы зарегистрированы, войдите».*/

    echo "<h1>Задача 6</h1>";

    $sessionId = 0;

    if ($sessionId == 0)
    {
        echo "<h1>Please, register</h1>
              <p>Session ID: $sessionId </p>
              <form action=\"#\" method=\"post\">
                <p><input id=\"login\" type=\"text\" value=\"Login\"></p>
                <p><input type=\"password\" placeholder=\"Password\"></p>
                <p><input type=\"submit\" value=\"Отправить\"></p>
              </form>";
    }
    else
    {
        echo "<h1>You are already registered.</h1>
              <p>Session ID: $sessionId </p>
              <a href=\"#\">Login</a>";
    }

    echo "<br>";
    /* 7. Разработать программу, которая будет рисовать div
        по указанным в переменных координатам с указанным цветом,
        если координаты не выходят за пределы экрана.
    */
    echo "<h1>Задача 7</h1>";

    $position = "position: absolute";
    $top = "top:";
    $left = "left:";
    $width = "width:";
    $height = "height:";
    $bcg = "background-color:";

    $style ="style = \"{$position}; {$top} 150%; {$left} 5%; {$width} 50px; {$height} 50px; {$bcg} green;\"";

    echo "<div $style></div>";
    ?>
    
</body>
</html>