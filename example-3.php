<?php
function modelprice($ls){
    foreach($ls as $key=>$val){
        $ort = 0;
        for($i=0; $i<count($val); $i++){
            $ort+=$val[$i];
        }
        echo $key." -> "."O'rtacha narx: ".$ort/count($val)."<br>". $key." -> ". "Maxsimal: ". max($val)."<br>". $key." -> ". "Minimal: ".min($val)."<br>";
    }
}
$ls = array(
    "a"=>array(23, 12, 23, 45, 13, 14, 25, 13, 26, 7),
    "narx"=>array(123, 23, 45, 654, 23, 35, 67, 87, 12, 47)
);

echo modelprice($ls);

?>