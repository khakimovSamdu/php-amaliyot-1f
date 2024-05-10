<?php 
    $host = 'localhost';
    $username = 'root';
    $parol = '';
    $db_name = 'tasks';
    $link = mysqli_connect($host, $username, $parol, $db_name);
    if(!($link)){
        exit("Ma'lumotlar bazasiga ulanmadi!");
    }
    

?>