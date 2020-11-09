<?php



    include "class.php";

    $width = 10;
    $height = 30;

    $rectangle = new Rectangle($width, $height);

    echo "chiều rộng ban đầu: ".$rectangle->width."<br>";
    echo "chiều dài ban đầu: ".$rectangle->height ."<br>";
    echo "diện tích ban đầu: "  .$rectangle->getArea(). "<br>";
    echo "chu vi ban đầu: " . $rectangle->getPerimeter(). "<br>";

    $rectangle->height = 40;
    $rectangle->width = 30;

    echo "chiều dài sau thay đổi: ".$rectangle->height ."<br>";
    echo "chieu rộng sau thay đổi : ".$rectangle->width ."<br>";

    echo "chu vi sau thay đổi: ".$rectangle->getPerimeter() ."<br>";
    echo "diện tích sau thay đổi: ".$rectangle->getArea() ."<br>";

    echo ("your Rectangle" . $rectangle->display());