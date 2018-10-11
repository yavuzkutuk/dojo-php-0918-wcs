<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 04/10/18
 * Time: 11:06
 */

namespace Unit;
require_once 'Unit.php';



class Elf extends Unit
{
    protected $speed = 5;

    public function attack()
    {
        echo "À l'attaque !";
    }
}