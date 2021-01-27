<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Переменные. Типы данных</title>
</head>
<body>

<?php

    print_r("<h1 style=\"text-decoration: underline; color: blue;\">Задача 1</h1>");
    $name = "Anatoly";
    echo "<h2>\" Hello! My name is '" . $name . "' \"</h2>";

    echo "<br>";

    print_r("<h1 style=\"text-decoration: underline; color: blue;\">Задача 2</h1>");
    $age = 45;
    echo "<h2>\" I'm " . $age . " \"</h2>";

    echo "<br>";

    print_r("<h1 style=\"text-decoration: underline; color: blue;\">Задача 3</h1>");
    $a = 10;
    $b = 15;
    $rez = $a + $b;
    $united_string = "'" . $a . "'" . " + " . "'" . $b . "'" . " = " . "'" . $rez . "'";
    echo "<h2>$united_string</h2>";

    echo "<br>";

    print_r("<h1 style=\"text-decoration: underline; color: blue;\">Задача 4</h1>");
    $c = 10;
    $d = 15;
    list($c, $d) = [$d, $c];
    echo "<h2>$c, $d</h2>";

    echo "<br>";

   print_r("<h1 style=\"text-decoration: underline; color: blue;\">Задача 5</h1>");
   $type_r = "type=\"radio\"";
   $name_r = "name=\"variable\"";
   echo "<form action=\"#\" method=\"POST\">
            <p>Какой вариант объявления переменной согласно синтаксису PHP является ошибочным?</p>
            <p><input $type_r $name_r value=\"rad1\"> &#36;age = 30;<br>
            <input $type_r $name_r value=\"rad2\"> &#36;favorite_color = #fff;<br>
            <input $type_r $name_r value=\"rad3\"> &#36;name2 = \"James\";<br>
            <input $type_r $name_r value=\"rad4\"> 17_Yellow = 72;</p>
            <p><input type=\"submit\" value=\"Send\"></p>
        </form>";

    echo "<br>";

    $type_check = "type=\"checkbox\"";
    $name_check = "name=\"number\"";
    echo "<form action=\"#\"  method=\"POST\">
            <p>Какой вариант объявления переменной согласно синтаксису PHP является верным? Возможны несколько правильных ответов.</p>
            <p><input $type_check $name_check value=\"check1\"> &#36;age = 30;<br>
            <input $type_check $name_check value=\"check2\"> &#36;favorite_color = #fff;<br>
            <input $type_check $name_check value=\"check3\"> &#36;name2 = \"James\";<br>
            <input $type_check $name_check value=\"check4\"> 17_Yellow = 72;</p>
            <p><input type=\"submit\" value=\"Send\"></p>
        </form>";

    echo "<br>";

    $type_tag = "textarea";
    $name_text = "name=\"text\"";
    echo "<form action=\"#\"  method=\"POST\">
            <p><b>Дайте определение понятию сценарий в PHP:</b></p>
            <p><$type_tag rows=\"10\" cols=\"45\" $name_text></$type_tag></p>
            <p><input type=\"submit\" value=\"Отправить\"></p>
        </form>";
        
    echo "<br>";


    print_r("<h1 style=\"text-decoration: underline; color: blue;\">Задача 6</h1>");
    $tag_div = "div";
    $style_div = "style=";
    $bcg_div = "background-color: blue";
    $color_text_div = "color: red";
    $width_div = "width: 100px";
    $height_div = "height: 100px";

    echo "$bcg_div <br>";
    echo "$color_text_div  <br>";
    echo "$width_div <br>";
    echo "$height_div <br>";

    echo "<br>";

    echo "<$tag_div  $style_div\"$bcg_div; $color_text_div; $width_div; $height_div;\">Hello</$tag_div>";

?>
</body>
</html>