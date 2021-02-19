<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_6</title>
</head>
<body>
    <?php

    /*1. Имеется массив из 10 элементов, структура элемента:
        name, company, position. Вывести на экран массив в
        следующем формате: «“Name” is working in “Company”
        as: “position”».
    */

    echo "<h1>Задача 1</h1>";
    echo "<h2 style=\"color: red;\">Вариант 1</h2>";

    $personData = [
        [
            "name" => "Serhii",
            "company" => "Microsoft",
            "position" => "Developer"
        ],
        [
            "name" => "Oleh",
            "company" => "Apple",
            "position" => "QC Engineer"
        ],
        [
            "name" => "Olya",
            "company" => "Amazon",
            "position" => "Project Manager"
        ],
        [
            "name" => "Oksana",
            "company" => "ITStep",
            "position" => "Teacher"
        ],
        [
            "name" => "Andrii",
            "company" => "Apple",
            "position" => "Solution Architect"
        ],
        [
            "name" => "Ihor",
            "company" => "Samsung",
            "position" => "Engineer"
        ],
        [
            "name" => "Olesya",
            "company" => "Samsung",
            "position" => "Developer"
        ],
        [
            "name" => "Roman",
            "company" => "Microsoft",
            "position" => "Product Owner"
        ],
        [
            "name" => "Yura",
            "company" => "Microsoft",
            "position" => "QC Engineer"
        ],
        [
            "name" => "Iryna",
            "company" => "ITStep",
            "position" => "Teacher"
        ],
    ];


    // 1 вариант решения
    for ($index = 0; $index < count($personData); $index++)
    {
        echo "<p>{$personData[$index]["name"]} is working in {$personData[$index]["company"]} as: {$personData[$index]["position"]}</p>";
    }
          
    echo "<br>";

    
    // 2 Вариант решения
    echo "<h1>Задача 1</h1>";
    echo "<h2 style=\"color: red;\">Вариант 2</h2>";

    foreach($personData as ["name" => $name, "company" => $company,  "position" => $position])
    {
        echo "<p>{$name} is working in {$company} as: {$position}</p>";
    
    }

    echo "<br>";

     //2. Отфильтровать массив из задания 1 и вывести работников в зависимости от компаний в виде списка.    
    
    echo "<h1>Задача 2</h1>";

    
    $companyFilter = [];

    foreach($personData as $row)
    {
        $companyFilter[$row['company']][] = $row['name'];
    }

    foreach($companyFilter as $company => $names)
    {
        echo "<ul><li>{$company}";
        foreach($names as $name)
        {
            echo "<ul><li>{$name}</li></ul>";
        }
        echo "</li></ul>";
    }

    echo "<br>";

    /*3. Создать массив из 10 чисел. В первый элемент записать число 1. 
         Каждое следующее число генерируется случайно и записывается в
         массив при условии, если оно больше предыдущего. 
         Результат массива вывести на страницу */

    echo "<h1>Задача 3</h1>";

    $arr[] = 1;
    $total = 10;
    $step = $total;

    while (count($arr) < $total) {
        $rand = rand(1, $step + $total);
        $max = max($arr);
            if ($rand > $max) {
                $arr[] = $rand;
                $step += $total;
            }       
    }

    echo "<p>" . implode(", ", $arr) . "</p>";

    echo "<br>";

    /*4. Создать массив из 10 чисел. Элемент массива: число
        с плавающей точкой и степень округления. Заполнить
        массив, округлить и вывести на страницу. */

    echo "<h1>Задача 4</h1>";

    $numberRound = ["15.2568" => 2, "88.1241289" => 4, "125.35689425" => 2, "45.1245" => 3, "3.1415926" => 0];

    foreach($numberRound as $key => $value)
    {
        echo "<p>". $key . " rounded to " . $value . ": " . round($key, $value). "</p>";
    }

    echo "<br>";


    /*5. Создать массив из 5 элементов. Элементом массива является массив из 5 цифр.
         Заполнить элементы случайными числами от 10 до 100. Вывести массив,
         минимальные значения в каждом столбце выделить красным цветом.
         Найти сумму минимальных элементов в каждом столбце и их среднее значение. */

        echo "<h1>Задача 5</h1>"; 

        /* Сначала задана функция для формирования массива из случайных чисел, 
           где $N - количество элементов массива, $min - минимальное значение границы случайных чисел,
           $max - максимальное значение границы случайных чисел. Если при вызове функции $min и $max не передаются,
           то по умолчанию равны 0 и 100 соответственно*/

        function randarr( $N, $min = 0, $max = 100) {
            return array_map(
                function() use ($min, $max) {
                    return rand($min, $max);
                },
                array_pad([], $N, 0)
            );
        }

        /*Формирование двумерного массива, который содердит 5 элементов из 5 массивов, включающих
        5 случайных чисел */
        $randArr = [];
        for ($i = 0; $i < 5; $i++)
        {
            $randArr[$i] = randarr(5, 10, 100);
        }

        // Задан массив для записи в него минимальных значений ключей 5 элементов-массивов массива $randArr
        $indexMinArr = [];

        for ($row = 0; $row < 5; $row++)
        {
            $indexMinArr[$row] = min(array_column($randArr, "$row")); // формирование массива минимальных значений из столбцов: мин значение [0], [1] и т.д.
            echo "<p>" . implode(", ", $randArr[$row]) . "</p>";
        }

        echo "<p>" . "Summ of the minimums: " . array_sum($indexMinArr) . "</p>";
        echo "<p>" . "AVG  of the minimums: " . array_sum($indexMinArr) / count($indexMinArr) . "</p>";
       
       
        

        echo "<pre> Массив минимальных значений каждого столбца<br>";
        print_r($indexMinArr);
        echo "</pre>";
       
    
        






    ?>
</body>
</html>