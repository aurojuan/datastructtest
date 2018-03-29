<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Search\BinarySearch;

class BinarySearchTest extends TestCase
{
    public function testBiSearch()
    {
        $find = new BinarySearch([3,5,7,11,13,17,19,23,29]);
        $find->biSearch(17, 0, 8);
        $this->assertEquals(6, $find->biSearch(17, 0, 8));

        $numbers = range(0, 100, 10);
        $findanother = new BinarySearch($numbers);
        $findanother->biSearch(30, 0, 10);
        $this->assertEquals(4, $findanother->biSearch(30, 0, 10));
    }
}
