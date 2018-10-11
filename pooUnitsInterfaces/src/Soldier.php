<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 04/10/18
 * Time: 11:12
 */

namespace Unit;

require_once 'AttackInterface.php';
require_once 'AbstractUnit.php';

class Soldier extends AbstractUnit implements AttackInterface
{

    protected $speed = 2;

    public function __construct()
    {
        echo "Prêt à combattre!" . '<br>';
    }
    public function attack() : void
    {
        echo "A l'attaque !" . '<br>';
    }
}
