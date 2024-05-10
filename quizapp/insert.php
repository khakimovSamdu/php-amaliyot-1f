<?php 
    include_once 'config.php';
    $nomi = $_POST['nomi'];
    $sav_count = $_POST['sav_count'];
    $izoh = $_POST['izoh'];
    $count = $_POST['count'];
    $vaqt = $_POST['vaqt'];
    $query = "INSERT INTO tests(nomi, savol_soni, vaqt, count, izoh) VALUES('$nomi', '$sav_count', '$vaqt', '$count', '$izoh');";
    $sql = mysqli_query($link, $query);
    if($sql){
        echo "Test qo'shildi";
    }else{
        echo "Test qo'shilmadi";
    }
    
?>