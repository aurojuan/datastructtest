<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Sort\SelectionSort;

class SelectionSortTest extends TestCase
{
    public function testSSort()
    {
        $abc = new SelectionSort();
        $abc->sSort([42,85,53,24,9,100,415,88,351]);
        $this->assertEquals([9,24,42,53,85,88,100,351,415], $abc->sSort([42,85,53,24,9,100,415,88,351]));
    }
}
