    <?php

    /*1. Генерируется 100 случайных чисел. Скрипт выводит
         их и ищет максимальное и минимальное число.*/
    echo "<h1>Задача 1</h1>";
        
    $randomArray = [];
    for ($i = 0; $i < 100; $i++)
    {
        $randomArray[$i] = rand(100, 500);
    }
    ?>
    
    <p style="width: 500px;"><?php echo implode(" ", $randomArray); ?></p>
    <p>Maximum: <?php echo max($randomArray); ?></p>
    <p>Minimum: <?php echo min($randomArray); ?></p>

    <?php
    /*2. Считать все картинки из папки, в которой находится
         скрипт, и вывести их на страницу. */
    echo "<br>";
    echo "<h1>Задача 2</h1>";

    $path = "img/";
    $images = scandir($path);

    if ($images !== false)
    {
        $images = preg_grep("/\.(?:png|gif|jpe?g)$/i", $images);
    } else {
        echo "<h2>Не обнаружено изображений</h2>";
    }
    echo "<div>";
    echo "<style>
            img {
                width: 248px;
                height: 154px;
            }</style>";
    foreach($images as $image)
    {
        echo "<img src='".$path.htmlspecialchars(urlencode($image))."' alt='".$image."' />";
    }
    echo "</div>";
    
    ?>

    <?php
    /*3. Вывести на экран таблицу умножения от 2 до 10. */
    echo "<br>";
    echo "<h1>Задача 3</h1>";
    echo "<table cellpadding=\"5\" style=\"display: flex;\">";

    for ($i = 2; $i <= 10; $i++ ) {
        echo "<tbody>";
        for ($k = 2; $k <= 10; $k++) {
            echo "<tr><td align=\"right\">$i * $k = " . $i * $k . "</td></tr>";
        }
      }
      echo "</tbody>";
      echo "</table>";
    ?>

    <?php
    /*4. В банке открыли депозит под 20% годовых. На депозит положили
         300 единиц. Какая сумма единиц будет
         через 20 лет? Какая будет прибыль? Вывести в таблице
         сумму и прибыль за каждый год.*/
    echo "<br>";
    echo "<h1>Задача 4</h1>";




    ?>

    <?php
    /*5. Вывести число задом наперед (347689 -> 986743) */
    
    echo "<br>";
    echo "<h1>Задача 5</h1>";

    $beforeReverseNum = 347689;

    $afterReverseNum = strrev($beforeReverseNum);

    echo "<h1 style=\"color: red\";>$beforeReverseNum</h1>";
    echo "<h1 style=\"color: green\";>$afterReverseNum</h1>";
    
    ?>
   

    <?php
    /*6. Разработать скрипт, который будет разбивать число
         на цифры, считать их количество, находить самую
         большую, самую маленькую цифру в числе, считать
         сумму цифр, среднее значение. */
    echo "<br>";
    echo "<h1>Задача 6</h1>";    

    $number = 513796428;

    $arr1 = str_split($number);
    ?>
    <h1>Number is: <?php echo $number; ?></h1>
    <h2>Digits in the number: <?php echo implode(", ", $arr1); ?></h2>
    <p>Count of digits: <b><?php echo count($arr1); ?></b>,
                    Max: <b><?php echo max($arr1); ?></b>,
                    Min: <b><?php echo min($arr1); ?></b>,
                    Summ: <b><?php echo array_sum($arr1); ?></b>,
                    AVG: <b><?php echo round(array_sum($arr1) / count($arr1), 4); ?></b>
    </p>