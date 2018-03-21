<?php

namespace DataStructure;

use DataStructure\LinkedList;
use DataStructure\ListNode;
use DataStructure\StackInterfaces\StackInterfaces;

class Stack implements StackInterfaces
{
    protected $stack;

    public function __construct()
    {
        $this->stack = new LinkedList();
    }

    public function pushToStack(int $data): void
    {
        $this->stack->insertBeforeHead($data);
    }

    /**
     * here we suppose this operation is the case that the original is nonempty
     *
     * @return void
     */
    public function popOutStack(): void
    {
        $this->stack->deleteHead();
    }

    public function getMeasureOfStack(): int
    {
        return $this->stack->getMeasureOfNodes();
    }
}
