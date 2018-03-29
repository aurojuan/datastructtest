<?php

namespace DataStructure\Search;

class LinearSearch
{
    protected $table;
    protected $size;

    public function __construct(array $table, $size) //size is the number of the elements of table
    {
        $this->table = $table;
        $this->size = $size;
    }

    public function arraySeqSearch($value)
    {
        $i = 0;
        while ($i < $this->size) {
            if ($this->table[$i] == $value) {
                echo'Got it! We find the position is:  <br>';
                printf("%d", $i+1);
                return $i + 1;
            }
            $i++;
        }
        echo'not find';
        return -1;
    }
}
