<?php

$car_price = 30000;
$my_money = 15000;
// 30000 - 100%
// ?    -  2%


$conclusion = '';
$money_left = 0;

for($i = 1; $i < 50; $i++) {
    
    if($my_money < $car_price) {
        $minus_proc = round(($car_price * 2) / 100);
        $conclusion .= ' not enought money ' . $car_price .' in month '. $i .'<br>';
        $car_price -= $minus_proc;
        
    } else {
        $conclusion .= ' enought money car cost ' . $car_price . '<br>';
        $money_left = $my_money - $car_price;
        break;
    }
}

?>

<!DOCTYPE html> 
<html> 
    <head>
        <title>Smoke costs</title> 
        <meta charset="UTF-8">
    </head> 
    <body>
        <?php print $conclusion . " money left after I bought car $money_left"; ?>
    </body> 
</html><!-- alt + shift + f   oskarShop.lt--> 