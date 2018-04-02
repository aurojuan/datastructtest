<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Sort\MergeSort;

class MergeSortTest extends TestCase
{
    public function testMSort()
    {
        $ms = new MergeSort();
        $ms->mSort([42,85,53,24,9,100,415,88,351]);
        $this->assertEquals([9,24,42,53,85,88,100,351,415], $ms->mSort([42,85,53,24,9,100,415,88,351]));
    }
}
