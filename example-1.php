<html>
<body>

<form method="POST" >
  Login: <input type="text" name="login">
  Parol: <input type="psword" name="parol">
  <input type="submit">
</form>
<?php
$login = $_POST['login'];
$parol = $_POST['parol'];

function islogin($login, $parol){
    $loginone = 12345;
    $parolone = 12345;
    if($login==$loginone and $parolone==$parol){
        echo "Accept";
    }else{
        echo "Parol or Login error";
    }   
}
echo islogin($login, $parol);
?>
</body>
</html>