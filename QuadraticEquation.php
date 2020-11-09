<?php


class QuadraticEquation
{
   private $a;
   private $b;
   private $c;

   public function __construct($a, $b, $c)
   {
       $this->a = $a;
       $this->b = $b;
       $this->c = $c;
   }

    public function getDiscriminant()
    {
       return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    public function getRoot1()
    {
       if ($this->getDiscriminant() > 0)
       {
           return (-$this->b + (sqrt(($this->b * $this->b) - (4 * $this->a * $this->c)))) / ($this->a * 2);
       }
    }

    public function getRoot2()
    {
        if ($this->getDiscriminant() > 0)
        {
            return (-$this->b - (sqrt(($this->b * $this->b) - (4 * $this->a * $this->c)))) / ($this->a * 2);
        }
    }
    public function getRoot3()
    {
        if ($this->getDiscriminant() == 0) {
            return -$this->b / (2 * $this->a);
        }

    }
    public function getRoot4() {
       if ($this->getDiscriminant() < 0){
           return "phuong trinh vo nghiem";
       }
    }
}
