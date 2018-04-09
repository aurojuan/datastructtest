<?php

namespace DataStructure\Tree;

class Node
{
    public $data;
    public $left;
    public $right;
    public $parent;

    public function __construct(int $data = null, Node $parent = null)
    {
        $this->data = $data;
        $this->parent = $parent;
        $this->left = null;
        $this->right = null;
    }
}
