<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*1. Создать массив из 10 элементов (чисел). Вывести:
        a) элементы, которые больше предыдущих;
        b) среднее значение и сумму всех элементов;
        c) отсортировать нечетные элементы массива по убыванию. */

    echo "<h1> Задача 1</h1> <br>";

    for ($i = 0; $i < 10; $i++) {

        $arrayNum[$i] = rand(0, 50);
    }
    
    function odd($var)
    {
        // является ли переданное число нечётным
        return $var & 1;
    }
    $arrayOdd = array_filter($arrayNum, "odd");
    rsort($arrayOdd);

    echo "<h2>Input array: " . implode(", ", $arrayNum) . "</h2>";
    echo "<h5> Summ: " . array_sum($arrayNum) . ", AVG: ". array_sum($arrayNum) / count($arrayNum) . "</h5>";
    echo "<h4> Sorted not pair elements: ". implode(", ", $arrayOdd) . "</h4><br>";

    /*2. Создать массив из 5 дат. Скриптом определить сколько
        дней находится в пределах между двумя соседними
        датами. */

    echo "<h1> Задача 2</h1> <br>";


    $dates = ['31-12-2018', '16-01-2019', '20-02-2019', '21-02-2019', '08-03-2019'];

    echo "<h4>Input dates: " . implode(", ", $dates) . "</h4><br>";

    for ($i = 1; $i < count($dates); $i++) 
    {
        echo "<h5>" . $dates[$i-1] . " - " . $dates[$i] . " - " . (strtotime($dates[$i]) - strtotime($dates[$i-1])) / (60*60*24) . " days</h5>";
    }
    echo "<br>";

    /*3. В массиве есть 10 элементов с такими ключами: type,
        value. Вывести 10 записей с type и value, записанными
        в каждом элементе. */

    echo "<h1> Задача 3</h1> <br>";

    $inputArray = [
        "type=\"text\" value=\"Text1\"",
        "type=\"radio\" value=\"Radio1\"",
        "type=\"checkbox\" value=\"Checkbox1\"",
        "type=\"button\" value=\"Button1\"",
        "type=\"text\" value=\"Text2\"",
        "type=\"text\" value=\"Text3\"",
        "type=\"radio\" value=\"Radio2\"",
        "type=\"radio\" value=\"Radio3\"",
        "type=\"checkbox\" value=\"Checkbox2\"",
        "type=\"button\" value=\"Button2\""
    ];

    $style = "style=\"display: block\"";

    for($i=0; $i < count($inputArray); $i++)
    {
        echo "<input $inputArray[$i] $style>";
    }
    
    echo "<br>";

    /*4. Создать массив фигур (название фигуры, координаты,
        цвет), на основе массива построить страницу и на
        ней нарисовать фигуры с заданным цветом и в указанном месте.*/

    echo "<h1>Задача 4. Реализовал через классы и объекты без использования массива</h1><br>";  

    class Circle
    {
        public $border;
        public $position;
        public $width;
        public $height;
        public $color;
        public $positionXY;

        public function show()
        {
            echo "<div style=\"$this->border $this->position $this->width $this->height $this->color $this->positionXY\"></div>";
        }
    }

    $circle = new Circle();
    $circle->border = "border-radius: 50%; ";
    $circle->position = "position: absolute; ";
    $circle->width = "width: 40px; ";
    $circle->height = "height: 40px; ";
    $circle->color = "background-color: red; ";
    $circle->positionXY = "top: 1050px; left: 25px;";

    $circle->show();

    class Square extends Circle {}
    
    $square = new Square();
    $square->border = "border-radius: 0%; ";
    $square->position = "position: absolute; ";
    $square->width = "width: 40px; ";
    $square->height = "height: 40px; ";
    $square->color = "background-color: green; ";
    $square->positionXY = "top: 1085px; left: 60px;";

    $square->show();

    class cornerSquare extends Circle{}

    $cornerSquare = new cornerSquare();
    $cornerSquare->border = "border-radius: 20%; ";
    $cornerSquare->position = "position: absolute; ";
    $cornerSquare->width = "width: 40px; ";
    $cornerSquare->height = "height: 40px; ";
    $cornerSquare->color = "background-color: blue; ";
    $cornerSquare->positionXY = "top: 1075px; left: 150px;";

    $cornerSquare->show();

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    /*5. Создать массивы: процессор, материнская плата, оперативная память,     жесткий диск, блок питания. Разработать скрипт, который будет возвращать возможные комбинации ПК. */

    echo "<h1> Задача 5</h1> <br>";
    echo "<h2>Не разобрался, как написать функцию, которая будет возвращать возможные комбинации ПК!!!</h2><br>";
    $processors = [

        [
            "Name" => "AMD Ryzen 7 1700X",
            "Socket"=> "Socket: AM4",
            "Frequency" => "Frequency: 3.4GHz",
            "Cores" => "Cores: 8"
        ],
    
        [

            "Name" => "Intel Core i7-8700",
            "Socket"=> "Socket: Socket 1151",
            "Frequency" => "Frequency: 3.2GHz",
            "Cores" => "Cores: 8"
        ]
    ];

    $mother = [

        [
            "Name" => "MSI B450 TOMOHAWK",
            "Socket" => "Socket: AM4",
            "RAM type" => "RAM type: DDR4"
        ],

        [

            "Name" => "ASRock J3455M",
            "Socket" => "Socket: INTEGRATED CPU",
            "RAM type" => "RAM type: DDR3"
        ]
    ];

    $RAM1 = [

            "Name" => "Corsair DDR4 3000MHz",
            "Type" => "Type: DDR4",
            "Memory" => "Memory: 8Gb"
        ];

    $hardDisk = [

            "Name" => "KingstoneSSDNow A400 TLC",
            "Type" => "Type: SSD",
            "Memory" => "Memory: 240Gb"
        ];

    $powerSupply = [
            "Name" => "CHIEFTEC Power Smart",
            "Power" => "Power: 1450W"
        ];

    for($index = 0; $index < count($processors); $index++)
    {
        echo "<div style=\"float: left; height: 150px; padding: 10px; background-color: aqua;\">";
        foreach($processors[$index] as $value)
        {
            echo "<h4>$value</h4>";
        }
        echo "</div>";
    }

    for($index = 0; $index < count($mother); $index++)
    {
        echo "<div style=\"float: left; height: 150px; padding: 10px; background-color: green;\">";
        foreach($mother[$index] as $value)
        {
            echo "<h4>$value</h4>";
        }
        echo "</div>";
    }

    echo "<div style=\"float: left; height: 150px; padding: 10px; background-color: yellow; clear: left;\">";
    foreach ($RAM1 as $k => $v) {
      echo "<h4>$v</h4>";
    }
    echo "</div>";

    echo "<div style=\"float: left; height: 150px; padding: 10px; background-color: pink;\">";
    foreach ($hardDisk as $k => $v) {
      echo "<h4>$v</h4>";
    }
    echo "</div>";

    echo "<div style=\"float: left; height: 150px; padding: 10px; background-color: orange;\">";
    foreach ($powerSupply as $k => $v) {
      echo "<h4>$v</h4>";
    }
    echo "</div>";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";



    /*6. Есть массив из 3-х элементов (Header, Content, Footer),
        который состоит из высоты, цвета фона, цвет текста.
        Создайте страницу на основе этого массива. */

    echo "<h1> Задача 6</h1> <br>";

    $pageArr = [
        "Header" => "width: 100%; height: 100px; background-color: red; color: white;",
        "Content" => "width: 100%; height: 250px; background-color: green; color: grey;",
        "Footer" => "width: 100%; height: 70px; background-color: blue; color: orange;"
    ];

    foreach($pageArr as $key => $style)
    {
        echo "<div style=\"$style\">$key</div>";
    }

    ?>
</body>
</html>