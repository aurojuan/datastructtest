<?php

namespace DataStructure;

use DataStructure\ListNode;

class CirLlist
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

            $temp->next = $new_node;
            printf("%d, ", $new_node->data);
            $temp = $new_node;

            if ($temp->next == null) {
                $this->lastNode = $temp;
            }
        }
        $this->lastNode->next =$this->headNode;
    }

    public function cllistInsertAfterLast(int $value): void
    {
        $newNode = new ListNode($value);

        if ($this->headNode == null) {
            $this->headNode = $newNode;
        } else {
            $nowNode = $this->headNode;
            while ($nowNode->next !== $this->headNode) {
                $nowNode = $nowNode->next;
            }
            $nowNode->next = $newNode;
        }
        $newNode->next = $this->headNode;
        $this->lastNode = $newNode;
    }

    public function cllistDeleteHead(int $target): void
    {
        if ($this->headNode->data == $target) {
            $this->lastNode->next = $this->headNode->next;
            $this->headNode = $this->headNode->next;
        }
    }

    public function getMeasureOfCnodes(): int // we only deal with the case of more than 1 node here
    {
        $count=0;

        $temp_node = $this->headNode;
        while ($temp_node->next !== $this->headNode) {
            $count += 1;
            $temp_node = $temp_node->next;
        }
        return $count+1;
    }
}
