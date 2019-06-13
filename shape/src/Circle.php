<?php

namespace App;

/**
 * Class Circle
 * @package App
 */
class Circle extends Shape
{
    const PI = 3.14;
    private $radius;

    public function __construct()
    {
        $this->radius = 1;
    }

    public function getArea():?float
    {
        return $this->radius * $this->radius * self::PI;
    }

    public function setRadius($radius):self
    {
        $this->radius = $radius;
        return $this;
    }

    public function getRadius():?float
    {
        return $this->radius;
    }

    public function getPerimeter():?float
    {
        return 2 * self::PI * $this->radius;
    }




}

