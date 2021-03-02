<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_8</title>
</head>
<body>
    <?php

    echo "<h1>Домашнее задание 8</h1><br>";
    echo "<h2>Задача 1</h2><br>";
    echo "<p style=\"text-align: justify; font-size: 18px; width: 50%;\">Разработать функцию, которая на входе принимает
    3 параметра (число, число, действие) и, в зависимости
    от действия, выполняет математическую операцию.
    Учесть, что нельзя делить на 0 и, если передано некорректное действие, сообщать об ошибке.
    </p><br>";

    function mathOperations($a, $b, $action)
    {
        switch ($action) 
        {
            case ($action != '+' &&  $action != '-' && $action != '*' && $action != '/'):
                echo "<p>{$a} {$action} $b = <span style=\"color: red;\">Incorrect Operation Error!</span></p>";
                break;
            case '+':
                echo "<p>" . $a . " + " . $b . " = " . ($a + $b) . "</p>";
                break;
            case '-':
                echo "<p>" . $a . " - " . $b . " = " . ($a - $b) . "</p>";
                break;
            case '*':
                echo "<p>" . $a . " * " . $b . " = " . ($a * $b) . "</p>";
                break;
            case '/':
                if ($b == 0) {
                    echo "<p>{$a} / {$b} = <span style=\"color: red;\">Dividing By Zero! Error!</span></p>";
                } else {
                    echo "<p>" . $a . " / " . $b . " = " . ($a / $b) . "</p>";
                }
                break;
        }
    }

    mathOperations(15, 5, '+');
    mathOperations(15, 5, '-');
    mathOperations(15, 5, '*');
    mathOperations(15, 5, '/');
    mathOperations(15, 0, '/');
    mathOperations(15, 5, '&');

    echo "<br>";
    echo "<h2>Задача 2</h2><br>";
    echo "<p style=\"text-align: justify; font-size: 18px; width: 50%;\">Разработать функцию вывода HTML-элемента, которая на входе принимает название тега и класс стилей
    и строит на странице соответствующий элемент.</p><br>";

    function showHTML($tegName, $classTegName, $elementContent)
    {
        echo "<style> .$classTegName {color: yellow; padding: 20px; background-color: red;}</style>";
        echo "<$tegName class=\"$classTegName\">$elementContent</$tegName>";
    }


    showHTML('h3', 'headTitle', 'Hello, World!');

    echo "<br>";
    echo "<h2>Задача 3</h2><br>";
    echo "<p style=\"text-align: justify; font-size: 18px; width: 50%;\">Разработать функцию, которая строит блок меню.
    На входе функция получает массив пунктов меню.
    Пункт меню состоит из текста, который будет внутри,
    и названия класса для стилей.</p><br>";


    function navBar($array, $classNameTeg)
    {
        echo "<style> 
            .$classNameTeg {
                display: inline-flex;
                color: yellow; 
                padding: 30px; 
                background-color: green;
                transition: 0.5s;
            }
            .$classNameTeg:hover {
                color: green;
                background-color: yellow;
                transition: 0.5s;
            }
            a {
                text-decoration: none;
            }
            </style>";
        echo "<ul style=\"list-style: none; padding: 0;\">";
        for ($i = 0; $i < count($array); $i++)
        {
            echo "<a href=\"#\"><li class=\"$classNameTeg\">" . $array[$i] . "</li></a>";
        }
        echo "</ul>";
    }

    $array = ['Home', 'About', 'Contacts', 'Photo', 'Blog'];

    navBar($array, 'item');

    echo "<br>";
    echo "<h2>Задача 4</h2><br>";
    echo "<p style=\"text-align: justify; font-size: 18px; width: 50%;\">Разработать функцию генерации случайного цвета,
    которая возвращает случайный цвет в HEX-формате, вывести на страницу DIV, зарисованный цветом,
    который вернет функция.</p><br>";

    function rand_color() {
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }

    $color = rand_color();
    echo "<div style=\"background-color: $color; width: 70px; height: 70px\"></div";









    ?>
</body>
</html>