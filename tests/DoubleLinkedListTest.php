<?php

use PHPUnit\Framework\TestCase;
use DataStructure\DoubleLinkedList;

class DoubleLinkedListTest extends TestCase
{
    public function testInsertHeadOrLast()
    {
        $hu = new DoubleLinkedList();
        $hu->createList([9,5,2,7], 4);
        $hu->insertHeadOrLast(9, 23);
        $this->assertEquals(5, $hu->getMeasureOfNodes());
    }

    public function testDeleteAtMid()
    {
        $gg = new DoubleLinkedList();
        $gg->createList([3,1,4,159], 4);
        $gg->deleteAtMid(1);
        $this->assertEquals(3, $gg->getMeasureOfNodes());
    }
}
