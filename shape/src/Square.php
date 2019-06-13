<?php
namespace App;



/**
 * Class Square
 * @package App
 */
final class Square extends Rectangle
{
    private $side;

    public function __construct($side)
    {
       $this->height = $side;
       $this->width = $side;
    }

    public function getSide():?float
    {
        return $this->side;
    }

    public function setSide($side):self
    {
        $this->height = $side;
        $this->width = $side;
        return $this;
    }

    public function setHeight(float $height)
    {
        return $this->forbid();
    }

    public function setWidth(float $width)
    {
        return $this->forbid();
    }

    private function forbid(){

        if(get_class($this) != 'App\Rectangle')
        {
            throw new \Exception("Forbiden. Use setSide method on a Square instead");
        }
    }

}