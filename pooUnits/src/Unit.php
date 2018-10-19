<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 04/10/18
 * Time: 10:58
 */

namespace Unit;

class Unit
{
    protected $pv;
    protected $position = [0, 0]; // [x, y]
    protected $speed = 1;

    public function __toString()
    {
        return 'La position actuelle est : ' . $this->position[0] . ', ' . $this->position[1];
    }

    public function walk(string $direction)
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
    }
}
