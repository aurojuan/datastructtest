<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Graph\DFS;

class DFSTest extends TestCase
{
    public function testdfsearch()
    {
        $graph = new DFS([[0,1,1,999,1],[1,0,999,1,999],[1,999,0,999,1],[999,1,999,0,999],[1,999,1,999,0]], 5);
        $graph->dfsearch(0);
        $this->assertSame([0,1,3,2,4], $graph->returnOrder());
    }
}
