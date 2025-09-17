<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна робота 1</title>
</head>
<body>
    <?php
    //Завдання 1.1
    $m = 1;
    $y = 2;
    $k = sqrt((pow(sin($m * $y), 2) + pow(cos($y / $m), 2) + 0.64) / (log10(abs($m * $y)) + log(abs(pow($m, 2) + pow($y, 3))) + exp(-1*($m - $y))));
    echo "k = $k<br>";

    //Завдання 1.2
    $x = 3;
    if((pow($x, 2) >= 1) && (pow($x, 2) <= 2)){
        var_dump(TRUE);
    }
    else{
        var_dump(FALSE);
    }
    echo '<br>';

    if($y >= $x){
        var_dump(TRUE);
    }
    else{
        var_dump(FALSE);
    }
    echo '<br>';

    //Завдання 2.1
    $a = 1.77;
    $b = -0.62;
    $z = pow(sin(exp(-1 * $b)), 4) + abs($a * $b); //Вибрано z так як x ініціалізовано раніше в попередніх задачах
    $w = log(abs($a - $b)) + log10(pi()/$a); //Вибрано w так як y ініціалізовано раніше в попередніх задачах
    $r = (1 / tan(($z + $w)/pow(($z - $w), 2))) + 1.3;

    echo "z = $z<br>";
    echo "w = $w<br>";
    echo "r = $r";
?>
</body>
</html>

