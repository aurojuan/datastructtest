<?php

use PHPUnit\Framework\TestCase;
use DataStructure\Sort\QuickSort;

class QuickSortTest extends TestCase
{
    public function testQSort()
    {
        $abc = new QuickSort([42,85,53,24,9,100,415,88,351]);
        $abc->qSort(0,8);
        $abc->printWellSort();
        $abc->arrangedReturn();
        $this->assertEquals([9,24,42,53,85,88,100,351,415], $abc->arrangedReturn());
    }
}
