<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Search\HashTable;

class HashTableTest extends TestCase
{
    public function testHSearch()
    {
        $find = new HashTable();

        $find->hInsert(33);
        $find->hInsert(10);
        $find->hInsert(77);
        $find->hInsert(2);
        $find->hInsert(8);
        $find->hInsert(47);
        $find->hInsert(90);
        $find->hInsert(1);

        $this->assertEquals(true, $find->hSearch(47));
        $this->assertEquals(false, $find->hSearch(23));
    }
}
