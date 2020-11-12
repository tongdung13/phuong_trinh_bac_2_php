<?php

include "StopWatch.php";

$stopwatch = new StopWatch();
$number = [];
for ($i = 0; $i < 100000; $i++){
    $number[$i] = rand(1,100000);
}

$stopwatch->start();
sort($number);
$stopwatch->stop();
$time = $stopwatch->getElapsedTime();
echo $time. '<br>';
echo $stopwatch->getStartTime(). '<br>';
