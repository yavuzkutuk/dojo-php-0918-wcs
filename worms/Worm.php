<?php

namespace Worms;

class Worm
{
    private $pv;
    private $pa;

    public function __construct($pv_extern,$pa_extern)
    {
        $this->pv = $pv_extern;
        $this->pa = $pa_extern;
    }

    public function getPv():int
    {
       return $this->pv;
    }

    public function setPv($health)
    {
        return $this->pv = $health;
    }

    public function getPa():int
    {
        return $this->pa;
    }

    public function setPa($attack)
    {
         $this->pa = $attack;
         return $this;
    }

    public function isDead(): bool
    {
        if($this->pv <= 0 ){
            return true;
        }
        return false;
    }

    public function attack(Worm $worm)
    {
        if($this->pa >= 0){
            $worm->pv = $worm->pv - $this->pa;
        }
    }
}

$xavier = new Worm(15,20);
$olivier = new Worm (20, 15);
$xavier->attack($olivier);
$olivier->isDead();
