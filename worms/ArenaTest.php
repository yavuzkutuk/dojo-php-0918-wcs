<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 20/11/18
 * Time: 09:22
 */

namespace Worms;


use PHPUnit\Framework\TestCase;

class ArenaTest extends TestCase
{
    public function testArena()
    {

        $strongWorm = $this->createMock(Worm::class);
        $strongWorm->expects($this->any())
            ->method('isDead')
            ->willReturn(false);
        $weakWorm = $this->createMock(Worm::class);
        $weakWorm->expects($this->exactly(2))
            ->method('isDead')
            ->willReturn(true);


        $arena = new Arena($strongWorm, $weakWorm);
        $this->assertEquals($strongWorm, $arena->fight());
        /**
         * $this->assertEquals(4, (2 + 2));
         * $red = new Worm();
         * $worm = new Worm();
         * $red->setPv(10)->setPa(200);
         * $worm->setPv(10)->setPa(5);
         * $arena = new Arena($red, $worm);
         * $this->assertEquals($red, $arena->fight());
         * $red->setPv(10)->setPa(2);
         * $worm->setPv(10)->setPa(5);
         * $this->assertEquals($worm, $arena->fight());
         **/
    }
}