<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна робота 2</title>
</head>
<body>
    <?php
    //Завдання 3.1
        /*
        $x = 12;
        $y;
        if($x <= 0){
            $y = exp($x + 4);
            echo "y = $y <br>";
        }

        if(($x > 0) && ($x <= 1)){
            $y = atan($x - 7);
            echo "y = $y <br>";
        }

        if(($x > 1) && ($x <= 20.4)){
            $y = 2 * pow($x, 3) * sqrt(pow($x, 2) + 30);
            echo "y = $y <br>";
        }

        if(x > 20.4){
            echo "Дане значення не підходить для обчислень<br>";
        }
        */
        //Завдання 4.1
        /*
        $dx = 0.4;
        $z = 0;
        for($x >= 0; $x <= 2; $x+=$dx){
            $z = (pow($x, 3) + 2*$x)/(3 * cos(sqrt($x)) + 1);
            echo "z = ". $z. "<br>";
            
        }
        */
        //Завдання 5.1
        // $k = 9;
        // $i = 2;
        // $y = 0;
        // for($n = $i; $n <= $k; $n++){
        //     ($y += $n - 2) / (pow($n, 2) + 16);
        // }
        // echo $y;

        //Завдання 7.2
        $c = array(-6.3, -1.0, 10.3, -8.8, 6.3, -1.1, 0.0, 0.1);
        $count = 0;
        for($i = 1; $i < count($c); $i+=2){
            if($c[$i] > 0){
                $count++;
            }
        }
        echo $count;
    ?>
</body>
</html>