<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Sort\BubbleSort;

class BubbleSortTest extends TestCase
{
    public function testBubSort()
    {
        $busort = new BubbleSort([42,85,53,24,9,100,415,88,351], 9);
        $busort->bubSort();
        $this->assertEquals([9,24,42,53,85,88,100,351,415], $busort->bubSort());
    }
}
