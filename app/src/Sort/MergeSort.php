<?php

namespace DataStructure\Sort;

class Mergesort
{
    public function merge(array $left, array $right)
    {
        $combine = [];
        $countLeft = count($left);
        $countRight = count($right);
        $leftIndex = $rightIndex = 0;

        while ($leftIndex < $countLeft && $rightIndex < $countRight) {
            if ($left[$leftIndex] > $right[$rightIndex]) {
                $combine[] = $right[$rightIndex];
                $rightIndex++;
            } else {
                $combine[] = $left[$leftIndex];
                $leftIndex++;
            }
        }

        while ($leftIndex < $countLeft) {
            $combine[] = $left[$leftIndex];
            $leftIndex++;
        }
        while ($rightIndex < $countRight) {
            $combine[] = $right[$rightIndex];
            $rightIndex++;
        }
        return $combine;
    }

    public function mSort($arr)//divide and conque
    {
        $len = count($arr);
        $mid = (int) $len / 2;
        if ($len == 1) {
            return $arr;
        }

        $left = $this->mSort(array_slice($arr, 0, $mid));
        $right = $this->mSort(array_slice($arr, $mid));

        return $this->merge($left, $right);
    }
}
