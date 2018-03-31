<?php

namespace DataStructure\Sort;

class ShellSort
{
    public $arr = [];

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function shSort() //$count can be calculate by getsize function
    {
        $increment = [5,3,2,1];
        $size = count($this->arr);

        for ($i = 0; $i < 4; $i++) {
            for ($j = $increment[$i]; $j < $size; $j++) {
                $temp = $this->arr[$j];
                $pos = $j - $increment[$i];
                while ($pos >= 0 && $temp < $this->arr[$pos] && $j < $size) {
                    $this->arr[$pos + $increment[$i]] = $this->arr[$pos];
                    $pos = $pos - $increment[$i];
                }
                $this->arr[$pos + $increment[$i]] = $temp;
            }
        }
        print_r($this->arr);
        return $this->arr;
    }
}
