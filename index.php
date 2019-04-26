<?php
$result = '';
$memory_saved = 'Next memories saved: ';

error_reporting(0);

$my_memories = [
    'Paskaita',
    'viskis',
    'alus',
    'degtine'
];

$friend_memories = [
    'viskis',
    'alus',
    'degtine'
];


var_dump($my_memories);
var_dump($friend_memories);


foreach ($my_memories as $memory) {
    
    if(in_array($memory, $friend_memories)) {
        $memory_saved .= "$memory ";
    } else {
        $memory_saved .= '';
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
            <?php print $memory_saved; ?>
        </ul>
    </body>
</html>