<?php

/**
 * 
 * @param type $arr_size
 */
function slot_run($arr_size = 5) {

    $empty_arr = [];
    $all_text = '';

for($i = 0; $i < $arr_size; $i++) {
    
    $all_text .= " <p> ";
    for($j = 0; $j < $arr_size; $j++) {
        
        $empty_arr[$i][$j] = rand(0, 1);
        $all_text .= "<h1> " . $empty_arr[$i][$j] . "<span> [row: $i col: $j] </span>" ." </h1> ";
    }
    $all_text .= " </p> ";
}
 // return $empty_arr;
  print $all_text;
}
?> 

<!DOCTYPE html> 
<html>
    <head> 
        <title>Universal 2 dimension array</title> 
        <meta charset="utf-8"> 
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <style> 
            
            h1 {
                display: inline-block;
            }
        </style> 
    </head> 
    <body> 
        <?php
         print slot_run();
         ?> 
    </body> 
</html>