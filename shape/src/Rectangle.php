<?php

namespace App;

/**
 * Class Rectangle
 * @package App
 */
class Rectangle extends Shape
{
    protected $width = 1.0;
    protected $height = 2.0 ;

    public function getWidth():?float
    {
        return $this->width;
    }

    public function getHeight():?float
    {
        return $this->height;
    }

    public function setWidth(float $width)
    {
        $this->width = $width;
        return $this;
    }

    public function setHeight(float $height)
    {
        $this->height = $height;
        return $this;
    }

    public function getPerimeter():?float
    {
        return ($this->width + $this->height) * 2;
    }

    public function getArea():?float
    {
        return $this->width * $this->height;
    }
}