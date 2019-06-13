<?php
namespace App;

/**
 * Class Shape
 * @package App
 */
abstract class Shape
{
    private $color = 'black';

    public function __toString():?string
    {
        $str =  "Je suis un objet de type : " . get_class($this) .' , mon aire vaut: ' . $this->getArea();
        $str .= " et mon périmètre vaut  : " . $this->getPerimeter()   . PHP_EOL ;
        return $str;
    }

    public function getColor():?string
    {
        return $this->color;
    }

    public function setColor(string $color):self
    {
        $this->color = $color;
        return $this;
    }
}
