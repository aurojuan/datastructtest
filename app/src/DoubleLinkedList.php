<?php

namespace DataStructure;

use DataStructure\ListNode;

class DoubleLinkedList
{
    protected $headNode = null;
    protected $lastNode = null;

    public function createList(array $array, int $wantedNum): void
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

        printf("\n"); //return $this->head_node;
    }

    public function insertAtMid(int $target, int $value): void
    {
        $new_node = new ListNode($value);
        $ptr_node = $this->headNode->next;
        while ($ptr_node !== null) {
            if ($ptr_node->data == $target) {
                $ptr_node->next->pre = $new_node;
                $new_node->next = $ptr_node->next;
                $ptr_node->next = $new_node;
                $new_node->pre = $ptr_node;
            }
            $ptr_node = $ptr_node->next;
        }
    }

    public function insertHeadOrLast(int $target, int $value): void
    {
        $new_node = new ListNode($value);
        if ($this->headNode == null) {
            $this->headNode = $new_node;
        }

        if ($this->headNode->data == $target) {
            $new_node->next = $this->headNode;
            $this->headNode->pre = $new_node;
            $this->headNode = $new_node;
        } else {
            if ($this->lastNode->data == $target) {
                $this->lastNode->next = $new_node;
                $new_node->pre = $this->lastNode;
                $this->lastNode = $new_node;
            }
        }
    }

    public function deleteHeadOrLast(int $target): void
    {
        if ($this->headNode->data == $target) {
            $this->headNode = $this->headNode->next;
            $this->headNode->pre = null;
        } else {
            if ($this->lastNode->data == $target) {
                $this->lastNode->pre->next = null;
                $this->lastNode = $this->lastNode->pre;
            }
        }
    }

    public function deleteAtMid(int $target): void
    {
        $ptr_node = $this->headNode->next;
        while ($ptr_node !== null) {
            if ($ptr_node->data == $target) {
                $ptr_node->pre->next = $ptr_node->next;
                $ptr_node->next->pre = $ptr_node->pre;
            }
            $ptr_node = $ptr_node->next;
        }
    }

    public function displayFromHead(): void
    {
        $ptr_node = $this->headNode;
        while ($ptr_node !== null) {
            printf("%d, ", $ptr_node->data);
            $ptr_node = $ptr_node->next;
        }
    }

    public function displayFromLast(): void
    {
        $ptr_node=$this->lastNode;
        while ($ptr_node !== null) {
            printf("%d, ", $ptr_node->data);
            $ptr_node = $ptr_node->pre;
        }
    }

    public function getMeasureOfNodes(): int
    {
        $count=0;
        if ($this->headNode == null) {
            echo'Hey bro,there is nothing here!'."\n";
        }

        $temp_node = $this->headNode;
        while ($temp_node !== null) {
            $count += 1;
            $temp_node = $temp_node->next;
        }
        return $count;
    }
}
