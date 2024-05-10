<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savol variant</title>
</head>
<body>
    <form action="savol-insert.php" method="POST">
        <?php 
            include_once 'config.php';
            $query = "SELECT * FROM tests";
            $sql = mysqli_query($link, $query);
            
        ?>
        <select name="" id="">
            <option value="">Test nomini tanlang</option>
            <?php while($fetch = mysqli_fetch_assoc($sql)){ ?>
            <option value="" name="savol_id" value="<?=$fetch['id']?>"><?=$fetch['nomi']?></option>
            <?php } ?>
        </select>
        <p><label for="">Savol: </label><input type="text" name="savol" placeholder="Savolni kiriting"></p>
        <p><label for="for">A </label><input type="text" name="a" placeholder="a variant"></p>
        <p><label for="for">B </label><input type="text" name="b" placeholder="b variant"></p>
        <p><label for="for">C </label><input type="text" name="c" placeholder="c variant"></p>
        <p><label for="for">D </label><input type="text" name="d" placeholder="d variant"></p>
        <button> Saqlash </button>
    </form>
</body>
</html>