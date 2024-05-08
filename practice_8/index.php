<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include_once 'test-variant.php';
        $c=0;
        $arr = chiqar();
        session_start();
        if(!isset($_SESSION['vaqt'])){
            $_SESSION['vaqt'] = time();
        }
        $delta = time() - $_SESSION['vaqt'];
        $qoldiq = 1800 - $delta;
        while($c!=20){
            $k = array_rand($arr, 1);
            $testv = $arr[$k];
            unset($arr[$k]); 
            $c++;
    ?>
    <form>
        <p id='mesg' style="font-size:14px; color:red;"></p>
        <h3><?=$testv?></h3>
        <?php 
            $a=0;
            $brr = varinatchiqar();
            while($a!=4){
                $a++;
                $m = array_rand($brr, 1);
                $variant = $brr[$m];
                unset($brr[$m]);
            
        ?>
        <p>
            <label for="for"><?=$variant?></label>
            <input type="radio">
        </p>
        <?}?>
    </form>
    <?}?>
    <script>
        let t = <?=$q?>;
        setInterval(function (){
            $('#mesg').html(m+" : "+sec)
        },  m = t/60, sec = t%60
        )
    </script>
</body>
</html>