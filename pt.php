
<form method="post">
    <input type="text" name="a" placeholder="nhap a"/>
    <input type="text" name="b" placeholder="nhap b"/>
    <input type="text" name="c" placeholder="nhap c"/>
    <input type="submit" value="check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    include "Demo.php";

    $ptx = new Demo($a, $b, $c);

    echo $ptx->getRoot1()."<br>";
    echo $ptx->getRoot2()."<br>";
    echo $ptx->getRoot3()."<br>";
    echo $ptx->getRoot4();
}
