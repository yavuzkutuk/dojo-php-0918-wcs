<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 20/11/18
 * Time: 08:50
 */

namespace Worms;


class Worm
{
    /**
     * @var int
     */
    private $pv;

    /**
     * @var int
     */
    private $pa;

    /**
     * @return int
     */
    public function getPv(): int
    {
        return $this->pv;
    }

    /**
     * @param int $pv
     * @return Worm
     */
    public function setPv(int $pv): Worm
    {
        $this->pv = $pv;
        return $this;
    }

    /**
     * @return int
     */
    public function getPa(): int
    {
        return $this->pa;
    }

    /**
     * @param int $pa
     * @return Worm
     */
    public function setPa(int $pa): Worm
    {
        $this->pa = $pa;
        return $this;
    }

    public function isDead(): bool
    {
        return ($this->getPv() <= 0);
    }

    public function attack(Worm $villain)
    {
        $villain->setPv($villain->getPv() - $this->getPa());
    }
}