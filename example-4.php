<?php
function modelprice($ls){
    foreach($ls as $key=>$val){
        for($i=0; $i<count($val); $i++){
            for ($j=0; $j<count($val); $j++){
                if($val[$i]>$val[$j]){
                    $ob = $val[$i];
                    $val[$i] = $val[$j];
                    $val[$j] = $ob;
                }
            }
            
        }
        echo $key."<br>"."Kamayuvchi<br>";
        for($i=0; $i<count($val); $i++){
            echo $val[$i]." ";
        }
        echo "<br>O'suvchi<br>";
        for($i=count($val)-1; $i>=0; $i--){
            echo $val[$i]." ";
        }
        echo "<br>";
        
    }
}
$ls = array(
    "model"=>array(23, 12, 23, 45, 13, 14, 25, 13, 26, 7),
    "price"=>array(123, 23, 45, 654, 23, 35, 67, 87, 12, 47)
);
echo modelprice($ls);

?>