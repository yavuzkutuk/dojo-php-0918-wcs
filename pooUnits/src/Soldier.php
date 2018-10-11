<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 04/10/18
 * Time: 11:12
 */

namespace Unit;

require_once 'Unit.php';


class Soldier extends Unit
{
    protected $speed = 2;

    public function attack()
    {
        echo "À l'attaque !";
    }
}
