<?php



namespace Worms;
require 'Worm.php';


class Arena
{
    private $worm1;
    private $worm2;

    public function __construct(Worm $worm1, Worm $worm2)
    {
        $this->worm1=$worm1;
        $this->worm2=$worm2;
    }

    public function fight()
    {
        while($this->worm1->isDead() == false && $this->worm2->isDead() == false ){
            $this->worm1->attack($this->worm2);
            $this->worm2->attack($this->worm1);
        }

        if($this->worm1->isDead()){
            return 'Worm2 is the Winner';
        }else{
            return 'Worm1 is the Winner';
        }
    }
}

$xavier = new Worm(10,2);
$olivier = new Worm (10, 5);

$arena = new Arena($xavier, $olivier);
echo $arena->fight();

