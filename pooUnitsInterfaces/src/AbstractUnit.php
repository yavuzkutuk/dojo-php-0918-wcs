<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 04/10/18
 * Time: 10:58
 */

namespace Unit;

abstract class AbstractUnit
{
    private $pv;
    protected $position = [0, 0]; // [x, y]
    protected $speed = 1;

    public function __toString()
    {
        return 'La position actuelle est :' . $this->position[0] .','. $this->position[1] . '.<br/>';
    }

    public function walk(string $direction) : void
    {
        if ($direction == 'right') {
            $this->position[0]+= $this->speed;
        } elseif ($direction == 'top') {
            $this->position[1]+= $this->speed;
        } elseif ($direction == 'left') {
            $this->position[0]-= $this->speed;
        } elseif ($direction == 'bottom') {
            $this->position[1]-= $this->speed;
        }
        if ($this->position[0] < 0 || $this->position[1] < 0) {
            throw new \Exception("hors de la carte !");
        }
    }
}
