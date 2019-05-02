<?php

/**
 * 
 * @param type $arr_size
 */
function slot_run($arr_size = 5) {

    $empty_arr = [];

for($i = 0; $i < $arr_size; $i++) {
    
    for($j = 0; $j < $arr_size; $j++) {
        
        $empty_arr[$i][$j] = rand(0, 1);
    }
    
}
  var_dump($empty_arr);
}
?> 

<!DOCTYPE html> 
<html>
    <head> 
        <title>Universal 2 dimension array</title> 
        <meta charset="utf-8"> 
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <style> 
        </style> 
    </head> 
    <body> 
        <?php slot_run(); ?> 
    </body> 

</html>