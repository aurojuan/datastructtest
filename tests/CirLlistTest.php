<?php

use PHPUnit\Framework\TestCase;
use DataStructure\CirLlist;

class CirLlistTest extends TestCase
{
    public function testCllistInsertAfterLast()
    {
        $juanclist = new CirLlist();
        $juanclist->createCllist([9,2,4,8,0,5], 6);
        $juanclist->cllistInsertAfterLast(7);
        $this->assertEquals(7, $juanclist->getMeasureOfCnodes());
    }

    public function testCllistDeleteHead()
    {
        $juancllistTwo = new CirLlist();
        $juancllistTwo->createCllist([9,5,2,7], 4);
        $juancllistTwo->cllistDeleteHead(9);
        $this->assertEquals(3, $juancllistTwo->getMeasureOfCnodes());
    }
}
