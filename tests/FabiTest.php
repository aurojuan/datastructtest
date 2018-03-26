<?php

use PHPUnit\Framework\TestCase;
use function Datastructure\Math\Fabi;

class FabiTest extends TestCase
{
    public function testFabi()
    {
        $rabbit = Fabi(23);
        $this->assertEquals(46368, $rabbit);
    }
}
