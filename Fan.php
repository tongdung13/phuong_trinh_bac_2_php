<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed = self::SLOW;
    private $on = false;
    private $radius = 8;
    private $color = "black";

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getOn()
    {
        return $this->on;
    }

    public function setON($on)
    {
        $this->on = $on;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function toString()
    {
        if ($this->on) {
            return "speed = " . $this->speed . ",color = " .$this->color .", radius = " . $this->radius .",fan is on";
        } else {
            return  "speed = 0 ". ", color = " . $this->color . ", radius = " . $this->radius . ",fan is off";
        }
    }
}