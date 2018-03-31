<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Sort\ShellSort;

class ShellSortTest extends TestCase
{
    public function testShSort()
    {
        $she = new ShellSort([42,85,53,24,9,100,415,88,351]);
        $she->shSort();
        $this->assertEquals([9,24,42,53,85,88,100,351,415], $she->shSort());
    }
}
