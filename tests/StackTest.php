<?php

use PHPUnit\Framework\TestCase;
use DataStructure\Stack;

class StackTest extends TestCase
{
    public function testPushToStack()
    {
        $juanstack = new Stack();
        $juanstack->pushToStack(10);
        $juanstack->pushToStack(20);
        $juanstack->pushToStack(30);
        $juanstack->popOutStack();
        $this->assertEquals(2, $juanstack->getMeasureOfStack());
    }
}
