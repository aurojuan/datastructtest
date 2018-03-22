<?php

use PHPUnit\Framework\TestCase;
use DataStructure\Queue;

class QueueTest extends TestCase
{
    public function testEnqueue()
    {
        $juanqu = new Queue();
        $juanqu->enqueue(67);
        $juanqu->enqueue(89);
        $juanqu->enqueue(12);
        $juanqu->enqueue(34);
        $juanqu->dequeue();
        $this->assertEquals(3, $juanqu->getMeasureOfQueue());
    }
}
