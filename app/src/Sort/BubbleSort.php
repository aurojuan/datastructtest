<?php

namespace DataStructure\Sort;

class BubbleSort
{
    protected $arr;
    protected $n;

    public function __construct(array $arr, $n) //n is the size of the array
    {
        $this->arr = $arr;
        $this->n = $n;
    }

    public function bubSort() //now represent as current place
    {
        for ($i = 0; $i < $this->n-1; $i++) {
            for ($j = 0; $j < $this->n - $i - 1; $j++) {
                if ($this->arr[$j] > $this->arr[$j + 1]) {
                    $temp = $this->arr[$j];
                    $this->arr[$j] = $this->arr[$j + 1];
                    $this->arr[$j + 1] = $temp;
                }
            }
        }
        print_r($this->arr);
        return $this->arr;
    }
}
