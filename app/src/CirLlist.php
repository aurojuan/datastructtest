<?php

namespace DataStructure;

use DataStructure\LinkedList;
use DataStructure\ListNode;

class CirLlist extends LinkedList
{
    public $headNode = null;
    public $lastNode = null;

    public function createCllist(array $array, int $wantedNum): void
    {
        $this->headNode = new ListNode($array[0]);
        printf("%d, ", $array[0]);
        $temp = $this->headNode;
        for ($i=1; $i < $wantedNum; ++$i) {
            $new_node = new ListNode($array[$i]);

            $new_node->pre = $temp;
            $temp->next = $new_node;
            printf("%d, ", $new_node->data);
            $temp = $new_node;
            if ($temp->next == null) {
                $this->lastNode = $temp;
            }
        }
        $this->lastNode->next =$this->headNode;
    }

    /* other position can be done by extends method
     */
    public function cllistInsertAfterLast(int $value): void
    {
        $new_node = new ListNode($value);

        $new_node->next = $this->headNnode;
        $this->lastNode->next = $new_node;
        $this->headNode = $new_node;
    }

    /* other position can be done by extends method
     */
    public function cllistDeleteHead(int $target): void
    {
        if ($this->headNode->data == $target) {
            $this->lastNode->next = $this->headNode->next;
            $this->headNode = $this->headNode->next;
        }
    }
}
