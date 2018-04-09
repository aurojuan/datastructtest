<?php

namespace DataStructure\Tree;

use DataStructure\Tree\Node;

class BinarySearchTree
{
    public $root = null;

    public function __construct(int $data)
    {
        $this->root = new Node($data);
    }

    public function isEmpty(): bool
    {
        return $this->root === null;
    }

    public function bTSearch(int $data)
    {
        if ($this->isEmpty()) {
            return false;
        }
        $node = $this->root;
        while ($node) {
            if ($data > $node->data) {
                $node = $node->right;
            } elseif ($data < $node->data) {
                $node = $node->left;
            } else {
                return true;
                break;
            }
        }
        return false;
    }

    public function insert(int $data)
    {
        if ($this->isEmpty()) {
            $node = new Node($data);
            $this->root = $node;
            return $node;
        }

        $node = $this->root;

        while ($node) {
            if ($data > $node->data) {
                if ($node->right) {
                    $node = $node->right;
                } else {
                    $node->right = new Node($data);
                    $node = $node->right;
                    break;
                }
            } elseif ($data < $node->data) {
                if ($node->left) {
                    $node = $node->left;
                } else {
                    $node->left = new Node($data);
                    $node = $node->left;
                    break;
                }
            } else {
                break;
            }
        }
        return $node;
    }
}
