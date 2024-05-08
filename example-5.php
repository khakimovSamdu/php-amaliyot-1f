<?php
function modelprice($ls){
    $ma = 0;
    $mi = 1234567;
    $ort = 0;
    $c = 0;
    foreach($ls as $key=>$val){
        $ort+=$val;
        if($val>$ma){
            $ma = $val;
        }
        if($mi>$val){
            $mi = $val;
        }
        $c+=1;
    }
    echo "Max: ".$ma."<br>"."Min: ".$mi."<br>"."O'rtacha qiymat: ".$ort/$c;
}

$ls = ['car1' => 5000, 'car2' => 7000, 'car3' => 1000, 'car4'=>1200];
echo modelprice($ls);
?>