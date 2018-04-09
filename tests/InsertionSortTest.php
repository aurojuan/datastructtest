<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Sort\InsertionSort;

class InsertionSortTest extends TestCase
{
    public function testISort()
    {
        $abc = new InsertionSort();
        $abc->iSort([42,85,53,24,9,100,415,88,351]);
        $this->assertEquals([9,24,42,53,85,88,100,351,415], $abc->iSort([42,85,53,24,9,100,415,88,351]));
    }
}
