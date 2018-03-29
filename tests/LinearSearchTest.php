<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Search\LinearSearch;

class LinearSearchTest extends TestCase
{
    public function testArraySeqSearch()
    {
        $find = new LinearSearch([3,5,7,11,13,17,19,23,29], 9);
        $find->arraySeqSearch(17);
        $this->assertEquals(6, $find->arraySeqSearch(17));
    }
}
