<?php

namespace DataStructure\Search;

class BinarySearch
{
    protected $seq = [];

    public function __construct(array $seq)
    {
        $this->seq = $seq;
    }

    public function biSearch($value, $low, $high) //use recursion method here. low=start key of array; high=end key of array
    {
        while ($low <= $high) {
            $mid = (int) (($low + $high) / 2);
            if ($this->seq[$mid] > $value) {
                $high = $mid -1;
            } else {
                if ($this->seq[$mid] < $value) {
                    $low = $mid +1;
                } else {
                    return $mid+1;
                }
            }
        }
        return -1;
    }
}
