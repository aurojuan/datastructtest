<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Search\InterpolationSearch;

class InterpolationSearchTest extends TestCase
{
    public function testIpSearch()
    {
        $find = new InterpolationSearch([3,5,7,11,13,17,19,23,29]);
        $find->ipSearch(17);
        $this->assertEquals(5, $find->ipSearch(17));// we report the key value of the givened array.

        $numbers = range(0, 100, 10);
        $findanother = new InterpolationSearch($numbers);
        $findanother->ipSearch(30);
        $this->assertEquals(3, $findanother->ipSearch(30));// we report the key value of the givened array.
    }
}
