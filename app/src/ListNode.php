<?php

namespace DataStructure;

class ListNode
{
    public $data = null;
    public $prev = null;
    public $next = null;
    public function __construct(int $data)
    {

        if ($data === null) {
            throw new \Exception("Invalid data");
        }
        $this->data = $data;
    }
}
