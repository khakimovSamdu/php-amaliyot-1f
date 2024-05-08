<?php
function modelprice($ls){
    $l = [];
    foreach($ls as $key=>$val){
        $l.array_push($val);
    }
    
}

$ls = ['car1' => 5000, 'car2' => 7000, 'car3' => 1000, 'car4'=>1200];
echo modelprice($ls);
?>