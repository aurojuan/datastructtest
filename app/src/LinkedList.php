<?php

namespace DataStructure;

use DataStructure\DoubleLinkedList;
use DataStructure\ListNode;

class LinkedList extends DoubleLinkedList
{
    protected $headNode = null;
    protected $lastNode = null;

    public function reverseList(): void
    {
        $pre = null;
        $now = $this->headNode;
        $next = null;
        $this->lastNode = $this->headNode;

        if ($this->headNode->next !== null) {
            while ($now !== null) {
                $next = $now->next;
                $now->next = $pre;
                $pre = $now;
                $now = $next;
            }
            $this->headNode = $pre;
        }
    }

    public function insertBeforeHead($int)// this is made for stack
    {
        $new = new ListNode($int);

        $new->next = $this->headNode;
        $this->headNode = $new;
    }

    public function deleteHead()// this is made for stack & queue
    {
        if ($this->headNode == null) {
            throw new \Exception("it is empty");
        } else {
            $this->headNode = $this->headNode->next;
        }
    }

    public function insertAfterLast(int $int)// this is only made for queue
    {
        $newNode = new ListNode($int);

        if ($this->headNode == null) {
            $this->headNode = $newNode;
            $this->lastNode = $newNode;
        } else {
            $nowNode = $this->headNode;
            while ($nowNode->next !== null) {
                $nowNode = $nowNode->next;
            }
            $nowNode->next = $newNode;
            $this->lastNode = $newNode;
        }
    }
}
