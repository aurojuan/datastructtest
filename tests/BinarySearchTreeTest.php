<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Tree\BinarySearchTree;
use DataStructure\Tree\Node;

class BinarySearchTreeTest extends TestCase
{
    public function testBTSearch()
    {
        $tree = new BinarySearchTree(42);

        $treearray = [24,85,9,100,32,88];

        for ($i=1; $i <= count($treearray); $i++) {
            $tree->insert($treearray[$i - 1]);
        }

        $this->assertSame(true, $tree->bTSearch(24));
        $this->assertSame(false, $tree->bTSearch(81));
    }
}
