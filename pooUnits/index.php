<?php

require_once 'src/Unit.php';
require_once 'src/Elf.php';
require_once 'src/Soldier.php';

use Unit\Unit;
use Unit\Elf;
use Unit\Soldier;

$peon = new Elf();
echo $peon . '<br>';
$peon->walk('right');
$peon->walk('right');
$peon->walk('right');
echo $peon . '<br>';

$legolas = new Elf();
echo $legolas . '<br>';
$legolas->walk('top');
echo $legolas . '<br>';

$soldier = new Soldier();
echo $soldier . '<br>';
$soldier->walk('top');
$soldier->walk('right');
echo $soldier . '<br>';
$soldier->attack();