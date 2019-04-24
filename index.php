<?php

//$days = 365;

$cizos_mon_thu = date("N");
$cizos_fri = rand(10, 20);
$cizos_sat_sun = rand(1, 5);
$pakelio_kaina = 3.40;
$surukyta = 0;
$mon_thu_cost = 0;

$sav_ruk = 0;
$smoke_images = '';
        
for ($day = 1; $day <= 365; $day++){
   $weekday = date('N', strtotime("+$day days"));

   if ($weekday <= 4){
       $cizos_mon_thu = rand(3, 4); // Nuo pirmadienio iki ketvirtadienio
       $surukyta += $cizos_mon_thu; // Kiek sur?kiau iki ketvirtadienio
       $mon_thu_cost += $cizos_mon_thu;
       
       // 5 min task
       
       $sav_ruk += 5 * $cizos_mon_thu;
       
   } elseif ($weekday == 5){
       $cizos_fri = rand(10, 20);
       $surukyta += $cizos_fri;
       
       // 5 min task
       
       $sav_ruk += 5 * $cizos_fri;
       
   } else {
       $cizos_sat_sun = rand(1, 3);
       $surukyta += $cizos_sat_sun;
       
       // 5 min task
       
       $sav_ruk += 5 * $cizos_sat_sun;
   }
}

for($cig = 1; $cig < $surukyta; $cig++) {
    
       if($cig % 20 == 1) {
       $borderis = 'bord_start';
       
   } elseif($cig % 20 == 0){
       $borderis = 'bord-end';
   } else {
       $borderis = 'bord_else';
   }
   
    $smoke_images .= "<div class=\"cig $borderis\"></div>";
    
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
            
            .bord_start {
                border-top: 2px solid black;
                border-bottom: 2px solid black;
                border-left: 2px solid black;
                 margin-top: 10px;
                margin-bottom: 10px;
                
            }
            
            .bord_else {
                border-top: 2px solid black;
                border-bottom: 2px solid black;
                margin: 10px 0;
            }
            
            .bord-end {
                border-top: 2px solid black;
                border-bottom: 2px solid black;
                border-right: 2px solid black;
                
                margin-right: 10px;
                margin-top: 10px;
                margin-bottom: 10px;
            }
           
        </style>
    </head> 
    <body>

        <div>
        <?php print $smoke_images; ?>
        </div>
    </body> 
</html><!-- alt + shift + f   oskarShop.lt--> 