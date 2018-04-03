<?php
use PHPUnit\Framework\TestCase;
use DataStructure\Tree\BinaryTree;
use DataStructure\Tree\BinaryNode;

class BinaryTreeTest extends TestCase
{
    public function testTraverse()
    {
        $nine = new BinaryNode("9");
        $tree = new BinaryTree($nine);
        $four = new BinaryNode("4");
        $eight = new BinaryNode("8");
        $fourLeftSon = new BinaryNode("7");
        $fourRightSon = new BinaryNode("515");
        $eightLeftSon = new BinaryNode("805");
        $eightRightSon = new BinaryNode("801");
        $four->addChildren($fourLeftSon, $fourRightSon);
        $eight->addChildren($eightLeftSon, $eightRightSon);
        $nine->addChildren($four, $eight);
        $this->expectOutputString('9-4--7--515-8--805--801');
        $tree->traverse($tree->root);
    }
}
