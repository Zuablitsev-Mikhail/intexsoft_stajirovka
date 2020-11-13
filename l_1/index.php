<?php
    require("z1.php");
    require("z2.php");
    $arr = [1,1,1,1,[2,2,2],1,1,[2,2,[3,[4,4,4],3]]];
    $symbol = '-';
    z1($arr,$symbol);
    echo "<br>";
    z2();
    echo "<br>";
?>

<form action="check.php" method="post">
    <input type="number" name="numberA" placeholder="number1" required><br>
    <input type="number" name="numberB" placeholder="number2" required><br>
<!--    оставлено одно поле без проверки на заполнение для проверки перенаправления-->
    <input type="number" name="numberC" placeholder="number3"><br>
    <input type="submit" value="Отправить">
</form>

