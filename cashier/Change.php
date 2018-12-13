<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 11/12/18
 * Time: 09:39
 */

namespace Cashier;


/**
 * Class Change
 * @package Cashier
 */
class Change
{
    /**
     * @var int
     */
    private $coin2 = 0;

    /**
     * @var int
     */
    private $bill5 = 0;

    /**
     * @var int
     */
    private $bill10 = 0;

    /**
     * @return int
     */
    public function getCoin2(): int
    {
        return $this->coin2;
    }

    /**
     * @param int $coin2
     * @return Change
     */
    public function setCoin2(int $coin2): Change
    {
        $this->coin2 = $coin2;
        return $this;
    }

    /**
     * @return int
     */
    public function getBill5(): int
    {
        return $this->bill5;
    }

    /**
     * @param int $bill5
     * @return Change
     */
    public function setBill5(int $bill5): Change
    {
        $this->bill5 = $bill5;
        return $this;
    }

    /**
     * @return int
     */
    public function getBill10(): int
    {
        return $this->bill10;
    }

    /**
     * @param int $bill10
     * @return Change
     */
    public function setBill10(int $bill10): Change
    {
        $this->bill10 = $bill10;
        return $this;
    }

    public function optimalChange(int $value) : ?Change
    {
        if ($value < 2 || $value === 3) {
            return null;
        }
        if ($value % 2 !== 0){
            $this->setBill5(1);
            $value -= 5;
        }
        if ($value >= 10){
            $this->setBill10(floor($value/10));
            $value %= 10;
        }
        if ($value % 2 === 0){
           $this->setCoin2($value/2);
        }
        return $this;
    }
}
