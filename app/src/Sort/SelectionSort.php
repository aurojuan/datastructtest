<?php

namespace DataStructure\Sort;

class SelectionSort
{
    public function sSort(array $arr)
    {
        $len = count($arr);
        for ($i = 0; $i < $len; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < $len; $j++) {
                if ($arr[$j] < $arr[$min]) {
                    $min = $j;
                }
            }

            if ($min != $i) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$min];
                $arr[$min] = $temp;
            }
        }
        return $arr;
    }
}
