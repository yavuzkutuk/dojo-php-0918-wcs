<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 04/10/18
 * Time: 11:06
 */

namespace Unit;

require_once 'AttackInterface.php';
require_once 'AbstractUnit.php';



class Elf extends AbstractUnit implements AttackInterface
{
    protected $speed = 5;


    public function __construct()
    {
        echo "Promenons nous dans les bois !" . '<br>';
    }

    
    public function attack() : void
    {
        echo "A l'attaque !" . '<br>';
    }
}
