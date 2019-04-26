<?php

$bar_adventure = '';

$random_result = '';

$result = '';

$day_adventures = [
    
  'pirmadienis' => [
      
    'week_day' => 'Pirmadienis',
     
     'CA' => [
 
         'CA' => 'Paskaita'        
     ]
  ],
   
   'penktadienis' => [
        
     'week_day' => 'Penktadienis',
       
      'baras' => [
          
          'Paskaita',
          'viskis',
          'alus',
          'degtine'
          ]
    ]
    
];
var_dump($day_adventures);


foreach($day_adventures as $day => $week_day) {
    
    if($day == 'penktadienis') {
        
    foreach($week_day as $key => $place_and_act) {
        
        $result .= "<li> $place_and_act </li>";
        
           //baras                   keys => values
           foreach($place_and_act as $drinks => $bar) {
                   
              
              // bar size
              $drink_lenght = count($place_and_act);
            
              // bar min and max
              $random_drink = rand(0, $drink_lenght - 1);
              
               $random_friend_drink = rand(0, $drink_lenght - 1);
             }
        }
    }
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
        <ul>
        <?php print_r($result); ?>
        </ul>
           
        <h1><?php print 'My memories ' . $day_adventures['penktadienis']['baras'][$random_drink];?></h1>  
        <?php print 'Friend memories ' . $day_adventures['penktadienis']['baras'][$random_friend_drink];?>
    </body>
</html>