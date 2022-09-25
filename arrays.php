<?php

//normal array
$arr = array('donkey','monkey');
echo($arr[0]);

echo("<br>");

//associative array
$arr = array(
    'mitsuri' => 'love',
     'gyomi' => 'stone',
     'rengoku' => 'flame'
);

echo($arr['rengoku']);
$arr['don'] = 'man';

foreach($arr as $key => $value){
    echo("<br> $key has power $value");
}

echo('<br>');

//multiDimensional array

$multi = array(array(1,2,3,4),
                array("don",'gpn','jp'),
                array('ind','chn','israel'));

echo ($multi[1][1]);


?>