<?php
function ProcessMarks($marks){
    $sum =0;
    foreach($marks as $value){
        $sum+=$value;
    }

    return ($sum);
}

$mitsuri = [34,23,56,78];
echo(ProcessMarks($mitsuri));

?>