<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_3 Циклы</title>
</head>
<body>
    <?php
    /*1. Вывести N нечетных чисел (N записывается в переменной) и дополнительно:
        a) посчитать их среднее значение;
        b) вывести их в обратном порядке (от большего к меньшему).
        Формат вывода: <span>-элемент; размер текста должен
        быть равен наибольшему числу, цвет текста — красный.  */

        echo "<h1>Задача 1</h1> <br>";

        $array1 = [1, 2, 5, 7, 17, 24, 26, 13, 25];

        function odd($var)
        {
            return $var & 1;
        }

        $array2 = array_filter($array1, "odd");

        foreach($array2 as $key => $val)
        {
            echo "<span style=\"color: red; font-size: " .  max($array2) . "px;\"\">$val,</span>";
        };

        echo "<br>";

        echo "AVG = " . array_sum($array2) / count($array2) . ",<br>";

        rsort($array2);

        foreach($array2 as $key1 => $val1)
        {
            echo "<span style=\"color: red; font-size: " .  max($array2) . "px\";\">$val1,</span>";
        }
        
        echo "<br>"; 
    
    /*2. Найти количество 4-значных чисел, в которых:
            c) цифры зеркальные (например, 2112);
            d) все цифры четные;
            e) все цифры нечетные;
            f) цифры идут в порядке от большего к меньшему
            (например, 4321). */

        echo "<h1>Задача 2</h1> <br>";

        $arr_num = [4556, 2359, 8624, 6446, 7531, 1597, 59854, 6622, 7894, 52147, 4563, 18, 11, 1357];

        foreach ($arr_num as $key2 => $value1)
        {
            if ($value1 > 999 && $value1 < 10000)
            {
                echo "{$value1} ";
            }
        }

        echo "<br>"; 

        /*3. Вывести на экран 10 кругов в один ряд (диаметр 50 рх,
             цвет синий).*/

        echo "<h1>Задача 3</h1> <br>";
        
        $float = "float: left";
        $width = "width:";
        $height = "height:";
        $bradius = "border-radius:";
        $bcg = "background-color:";
        $class_circle = "circle";
        echo "<style>
                .$class_circle {
                    $float;
                    $width 50px;
                    $height 50px;
                    $bradius 50%;
                    $bcg blue;
                }
             </style>";      
        for ($i3 = 0; $i3 <= 10; $i3++) {
            echo "<div class=\"$class_circle\"></div>";
        }

        echo "<br>";
        echo "<br>";
        echo "<br>";

    /*4. Перевести число из двоичной в шестнадцатеричную
         систему счисления. Формат вывода по умолчанию,
         поместить в элемент <p>. */
        echo "<h1>Задача 4</h1> <br>";
         $binNumber = '1001111001';
         $hexNumber =  base_convert($binNumber, 2, 16);
         $decNumber = base_convert($hexNumber, 16, 10);
         echo "<p>Binary Number: $binNumber</p>";
         echo "<p>Converted Hexadecimal Number: $hexNumber</p>";
         echo "<p>Converted Decimal Number: $decNumber</p> <br>";

         echo "<br>";

    /*5. Отобразить число в римской системе счисления. Формат вывода по умолчанию, поместить в элемент <p>. */
        echo "<h1>Задача 5</h1> <br>";

        function numberToRomanRepresentation($number) {
            $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
            $returnValue = '';
            while ($number > 0) {
                foreach ($map as $roman => $int) {
                    if($number >= $int) {
                        $number -= $int;
                        $returnValue .= $roman;
                        break;
                    }
                }
            }
            return $returnValue;
        }
        $decNum = 54;
        echo "<p>Number: {$decNum}</p>";
        $romeNum = numberToRomanRepresentation($decNum);
        echo "<p>Romanian:: {$romeNum}</p><br>";


        /*6. Вывести на экран календарь на текущий месяц:
                a) выходные и праздники выделить красным цветом
                текста;
                b) текущий день обвести рамкой синего цвета;
                c) добавить стиль hover, который будет менять цвет
                на противоположный: цвет текста станет белым,
                а цвет заднего фона красным или черным. */

        echo "<h1>Задача 6</h1> <br>";

        // Вычисляем число дней в текущем месяце
        $dayofmonth = date('t');

        // Счётчик для дней месяца
        $day_count = 1;


        // 1. Первая неделя
        $num = 0;
        for($i = 0; $i < 7; $i++)
        {
            // Вычисляем номер дня недели для числа
            $dayofweek = date('w', mktime(0, 0, 0, date('m'), $day_count, date('Y')));

            // Приводим числа к формату 1 - понедельник, ..., 6 - суббота

            $dayofweek = $dayofweek - 1;
            if($dayofweek == -1) $dayofweek = 6;
                if($dayofweek == $i)
                {
                    // Если дни недели совпадают, заполняем массив $week числами месяца
                    $week[$num][$i] = $day_count;
                    $day_count++;
                }
                else
                {
                    $week[$num][$i] = "";
                }
        }   

        // 2. Последующие недели месяца
        while(true)
        {
            $num++;
            for($i = 0; $i < 7; $i++)
            {
                $week[$num][$i] = $day_count;
                $day_count++;

            // Если достигли конца месяца - выходим из цикла
                if($day_count > $dayofmonth) break;
            }

            // Если достигли конца месяца - выходим из цикла

            if($day_count > $dayofmonth) break;
        }

        // 3. Выводим содержимое массива $week в виде календаря

        // Выводим таблицу

        echo "<table border=0>";
        for ($i = 0; $i < count($week); $i++)
        {
            echo "<tr>";
            for($j = 0; $j < 7; $j++)
            {
                if(!empty($week[$i][$j]))
                {

                // Если имеем дело с субботой и воскресенья подсвечиваем их
                    if($j == 5 || $j == 6) 

                    echo "<td><font color=red>".$week[$i][$j]."</font></td>";

                    else echo "<td>".$week[$i][$j]."</td>";
                }
                else echo "<td>&nbsp;</td>";
            }
            echo "</tr>";
        } 

        echo "</table>";


        /*7. В папке img есть 10 файлов (названные от img1 до
            img10) с расширением jpg. Разработать скрипт, который
            отобразит их на странице по 5 изображений в ряд
            (размер изображения 200х150 рх).*/

        echo "<h1>Задача 7</h1> <br>";
        
        $pathImg = "img/";
        $images = scandir($pathImg);
        $directionImg = "display: flex";
        $spaceDivImg = "line-height: ";
        if ($images !== false)
        {
            $images = preg_grep("/\.(?:png|gif|jpe?g)$/i", $images);
        } else {
            echo "<h2>Не обнаружено изображений</h2>";
        }
        $firstImg = array_slice($images, 0, 5);
        echo "<div style=\"$directionImg; $spaceDivImg 0;\">";
        foreach($firstImg as $image)
        {
            echo "<div><img src='".$pathImg.htmlspecialchars(urlencode($image))."' width=200 height=150 alt='".$image."' /></div>";
        }
        echo "</div>";

        $secondImg = array_slice($images, 5, 5);
        echo "<div style=\"$directionImg\">";
        foreach($secondImg as $image)
        {
            echo "<div><img src='".$pathImg.htmlspecialchars(urlencode($image))."' width=200 height=150 alt='".$image."' /></div>";
        }
        echo "</div>";

   
    ?>
</body>
</html>