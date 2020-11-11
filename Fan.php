<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed;
    private $on;
    private $radius;
    private $color;

    private function getSpeed(){
        return $this->speed = self::SLOW;
    }

}