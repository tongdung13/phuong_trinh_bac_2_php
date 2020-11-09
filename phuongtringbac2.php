<title>Phương trình bâcj 2</title>
<head>
    <style>
        form {
            border: 1px;

        }
    </style>
</head>
<h1>PHƯƠNG TRÌNH BẬC 2</h1>
    <form method="post">
        <input type="text" name="a" placeholder="nhap a"/><br><br>
        <input type="text" name="b" placeholder="nhap b"/><br><br>
        <input type="text" name="c" placeholder="nhap c"/><br><br>
        <input type="submit" value="check"/>
    </form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $a = $_POST["a"];
     $b = $_POST["b"];
     $c = $_POST["c"];

     include "QuadraticEquation.php";

     $pt = new QuadraticEquation($a, $b, $c);

     echo "x1: ".$pt->getRoot1() . "<br>";
     echo "x2: ".$pt->getRoot2() . "<br>";
     echo $pt->getRoot3() . "<br>";
     echo $pt->getRoot4();

 }