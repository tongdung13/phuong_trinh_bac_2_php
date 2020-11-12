<?php
 include_once "Fan.php";

 $fan = new Fan();
 $fan->setRadius(4);
 $fan->setSpeed($fan::FAST);
 $fan->setColor("red");
 $fan->setON(true);

 print("<pre>" . print_r($fan->toString(), true) . "<pre></pre>");

$fan->setON(false);

print("<pre>" . print_r($fan->toString(), true) . "<pre></pre>");