<?php

$car_price = 30000;
$my_money = 15000;
// 30000 - 100%
// ?    -  2%


$conclusion = '';

for($i = 1; $i < 50; $i++) {
    
    if($my_money < $car_price) {
        $minus_proc = round(($car_price * 2) / 100);
        $conclusion .= ' not enought money ' . $car_price .' in month '. $i .'<br>';
        $car_price -= $minus_proc;
        
    } else {
        $conclusion .= ' enought money car cost ' . $car_price . '<br>';
        break;
    }
}

?>

<!DOCTYPE html> 
<html> 
    <head>
        <title>Smoke costs</title> 
        <meta charset="UTF-8">
        <style>
            .cig {
                width: 20px;
                height: 20px;
                background-image: url(https://www.varle.lt/blog/wp-content/uploads/2015/03/e-cigarete_kenkia.png);
                background-size: cover;
                display: inline-block;
            }

            .pakuote {
                border: 2px solid black;
                margin: 10px;
            }
           
        </style>
    </head> 
    <body>
        <?php print $conclusion; ?>
    </body> 
</html><!-- alt + shift + f   oskarShop.lt--> 