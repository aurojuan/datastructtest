<?php

namespace DataStructure;

use DataStructure\LinkedList;
use DataStructure\ListNode;
use DataStructure\QueueInterfaces\QueueInterfaces;

class Queue implements QueueInterfaces
{
    protected $queue;

    public function __construct()
    {
        $this->queue = new LinkedList();
    }

    public function enqueue(int $data): void
    {
        $this->queue->insertAfterLast($data);
    }

    public function dequeue(): void
    {
        $this->queue->deleteHead();
    }

    public function getMeasureOfQueue(): int
    {
        return $this->queue->getMeasureOfNodes();
    }
}
