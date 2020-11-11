<?php


class StopWatch
{
    private $startTime;
    private $endTime;
    private $elapsedTime;
    public function __construct($startTime,$endTime,$elapsedTime)
    {
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->elapsedTime = $elapsedTime;
    }
    public function getStartTime(){
        return $this->startTime;
    }
    public function getEndTime() {
        return $this->endTime;
    }
    public function setStart($startTime) {
        $this->start = $startTime;
    }
    public function setStop($endTime) {
        $this->stop = $endTime;
    }

    public function getElapsedTime() {
        return $this->elapsedTime;
    }
}

