<?php

namespace DataStructure\Sort;

class QuickSort
{
    public $arr;

    public function __construct(array $arr)
    {
        $this->arr = $arr;
    }

    public function qSort(int $left, int $right)
    {
        if ($left > $right) {
            return;
        }
        $temp = $this->arr[$left]; //take the left "value" for pivot in every proess when we use Recursion
        $i = $left;
        $j = $right;

        while ($i !== $j) {
            while ($this->arr[$j] >= $temp && $i < $j) {//the "key" of the rigjt hand side always move first
                $j--;
            }
            while ($this->arr[$i] <= $temp && $i < $j) {
                $i++;
            }
            if ($i < $j) {// the swap
                $swaptemp = $this->arr[$i];
                $this->arr[$i] = $this->arr[$j];
                $this->arr[$j] = $swaptemp;
            }
        }
        $this->arr[$left] = $this->arr[$i]; //adjust the pivot for the next stage of recursion
        $this->arr[$i] = $temp;

        $this->qSort($left, $i-1);// the following two are the Recursion
        $this->qSort($i+1, $right);
    }

    public function printWellSort() //usefull in common situation
    {
        foreach ($this->arr as $ar) {
            printf("%d", $ar);
        }
    }

    public function arrangedReturn() // this is a boring&bullshit function function and just be used only for unitest.  XD
    {
        return $this->arr;
    }
}
