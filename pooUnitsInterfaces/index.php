<?php

require_once 'src/Elf.php';
require_once 'src/Soldier.php';
require_once 'src/Worker.php';


use Unit\Soldier;
use Unit\Worker;
use Unit\Elf;

$workers = [];
$soldiers = [];
$elves = [];

for ($i = 1; $i <= 10; $i++) {
    $workers[] = new Worker();
}

for ($i = 1; $i <= 10; $i++) {
    $soldiers[] =  new Soldier();
}

for ($i = 1; $i <= 2; $i++) {
    $elves[] =  new Elf();
}

echo $workers[1];

$workers[1]->walk('right');
try {
    $workers[1]->walk('bottom');
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
    $workers[1]->walk('top');
}
$workers[1]->walk('right');
$workers[1]->walk('right');

echo $workers[1];


// BONUS

require_once 'src/Army.php';
use Unit\Army;

$army = new Army();

foreach ($soldiers as $soldier) {
    $army->join($soldier);
    echo 'Welcome on board soldier !' . '<br>';
}

try {
    $army->join($workers[1]);
}catch(TypeError $e){
    echo 'You can\'t join the army, farmer !' . '<br>';
    echo '<em>' . $e->getMessage() . '</em><br>';
}

echo $army;
