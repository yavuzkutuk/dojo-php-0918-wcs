<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 20/11/18
 * Time: 09:23
 */

namespace Worms;


use PHPUnit\Framework\TestCase;

class WormTest extends TestCase
{
    public function testWorm()
    {
        $worm = new Worm();
        $worm->setPv(10)->setPa(2);
        $this->assertEquals(5, (2 + 3));
        $this->assertEquals(10, $worm->getPv());
        $this->assertEquals(2, $worm->getPa());
        $this->assertFalse($worm->isDead());

        $worm->setPv(0);
        $this->assertTrue($worm->isDead());

        $red = new Worm();
        $red->setPv(10)->setPa(5);

        $worm->attack($red);
        $this->assertEquals(8, $red->getPv());
    }
}