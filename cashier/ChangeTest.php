<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 11/12/18
 * Time: 09:40
 */

namespace Cashier;

use PHPUnit\Framework\TestCase;

class ChangeTest extends TestCase
{

    public function testChangeNull()
    {
        $change = new Change();
        $this->assertNull($change->optimalChange(1));
    }

    public function testChangeWith6()
    {
        $change = new Change();
        $change->optimalChange(6);
        $this->assertEquals(3, $change->getCoin2());
        $this->assertEquals(0, $change->getBill5());
        $this->assertEquals(0, $change->getBill10());
    }


    public function testChangeWith30()
    {
        $change = new Change();
        $change->optimalChange(30);
        $this->assertEquals(0, $change->getCoin2());
        $this->assertEquals(0, $change->getBill5());
        $this->assertEquals(3, $change->getBill10());
    }
    public function testChangeWith24()
    {
        $change = new Change();
        $change->optimalChange(24);
        $this->assertEquals(2, $change->getCoin2());
        $this->assertEquals(0, $change->getBill5());
        $this->assertEquals(2, $change->getBill10());
    }
    public function testChangeWith51()
    {
        $change = new Change();
        $change->optimalChange(51);
        $this->assertEquals(3, $change->getCoin2());
        $this->assertEquals(1, $change->getBill5());
        $this->assertEquals(4, $change->getBill10());
    }
}