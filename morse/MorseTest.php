<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 18/10/18
 * Time: 09:35
 */

namespace Morse;


use PHPUnit\Framework\TestCase;


class MorseTest extends TestCase
{

    public function testMorse()
    {
        $morse = new Morse();
        $this->assertEquals ('W', $morse->convertToLetters('.--'));
        $this->assertEquals ('WILD', $morse->convertToLetters('.-- .. .-.. -..'));
        $this->assertEquals ('WI LD', $morse->convertToLetters('.-- ..   .-.. -..'));
    }
}