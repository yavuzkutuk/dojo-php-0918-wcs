<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 20/11/18
 * Time: 08:51
 */

namespace Worms;


/**
 * Class Arena
 * @package Worms
 */
class Arena
{
    /**
     * @var Worm
     */
    private $fighterA;

    /**
     * @var Worm
     */
    private $fighterB;

    public function __construct(Worm $fighterA, Worm $fighterB)
    {
        $this->fighterA = $fighterA;
        $this->fighterB = $fighterB;
    }

    public function fight() : Worm
    {
        $i = 0;
        while (!$this->fighterA->isDead() && !$this->fighterB->isDead()) {
            $this->fighterA->attack($this->fighterB);
            $this->fighterB->attack($this->fighterA);
            echo 'round ' . ++$i . PHP_EOL;
        }
        if ($this->fighterB->isDead())
        {
            return $this->fighterA;
        } else {
            return $this->fighterB;
        }
    }
}