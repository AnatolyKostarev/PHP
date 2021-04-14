<h1 style="color: red; margin-bottom: 15px;">Задача 1</h1>
<p style="margin-bottom: 30px; font-size: 20px">Разработать функцию, которая на вход принимает count_elem (количество элементов в массиве), min_val (минимальное число, которое может быть записано в 
элементе массива), max_val (максимальное число, которое может быть записано в элементе массива) и возвращает массив с количеством элементов count_elem. Каждый 
элемент — это число, которое генерируется случайным значением от min_val до max_val (если min_val больше max_val, поменять их значения местами).</p>

<?php

function differentNums($countelem, $minValue, $maxValue)
{
    $nums = [];

    if($minValue > $maxValue) 
    {
        echo "Минимальное значение аргумента не может быть больше маскимального";
    } else {
        for($i = 1; $i <= $countelem; $i++)
    {
        $a = rand($minValue, $maxValue);
        array_push($nums, $a);
    }
    echo "<h3>Count: {$countelem}</h3>";
    echo "<h3>Min: {$minValue}</h3>";
    echo "<h3>Max: {$maxValue}</h3>";
    echo "<h3>";
    foreach($nums as $num)
    {
        echo "{$num}, ";
    }
    echo "</h3>";
    return $nums; 
    }
}

// вызов функции с количеством элементов 10, минимальным значением 56, максим. значением 1000
differentNums(10, 1, 85);
?>

<h1 style="color: red; margin-bottom: 15px;">Задача 2</h1>
<p style="margin-bottom: 30px; font-size: 20px">Разработать функцию, которая на вход принимает два числа: число, которое нужно возвести в степень и число-степень до которого нужно возвести. Возвращает число, возведенное в степен</p>

<?php
    function numToPower($x, $y)
    {
        $z = $x**$y;
        echo "<h1>" . $x . "^" . $y . "=" . $z . "</h1>";
   
    }

    numToPower(2, 5);
?>

<h1 style="color: red; margin-bottom: 15px;">Задача 3</h1>
<p style="margin-bottom: 30px; font-size: 20px">Разработать функцию, которая на вход принимает ссылки на два числа и меняет их местами.</p>

<?php
    function changeNum($a, $b)
    {
        echo "<h1>First: {$a}; Second: {$b}";
        list($a, $b) = [$b, $a];
        echo "<h1>First: {$a}; Second: {$b}";
    }

    changeNum(10, 15);
?>
