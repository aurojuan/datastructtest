<?php

use PHPUnit\Framework\TestCase;
use DataStructure\LinkedList;

class LinkedListTest extends TestCase
{
    public function testReverseList()
    {
        $li = new LinkedList();
        $li->createList([1,2,3], 3);
        $li->reverseList();
        $li->insertHeadOrLast(3, 5);
        $this->assertEquals(4, $li->getMeasureOfNodes());
    }
}
