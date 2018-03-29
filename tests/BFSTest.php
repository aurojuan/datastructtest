<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Graph\BFS;

class BFSTest extends TestCase
{
    public function testBfsearch()
    {
        $graph = new BFS([[0,1,1,999,1],[1,0,999,1,999],[1,999,0,999,1],[999,1,999,0,999],[1,999,1,999,0]], 5);
        $graph->bfsearch(0);  //999 means non adjacency;1 means adjacency;0 means itself
        $this->assertSame([0,1,2,4,3], $graph->bfsearch(0));
    }
}
