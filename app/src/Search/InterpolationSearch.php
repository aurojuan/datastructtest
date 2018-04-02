<?php

namespace DataStructure\Search;

class InterpolationSearch
{
    protected $table = [];

    public function __construct(array $table)
    {
        $this->table = $table;
    }

    public function ipSearch(int $value): int
    {
        $low = 0;
        $high = count($this->table) - 1;

        while ($this->table[$high] != $this->table[$low] && $value >= $this->table[$low] && $value <= $this->table[$high]) {
            $mid = intval($low + (($value - $this->table[$low]) * ($high - $low) / ($this->table[$high] - $this->table[$low])));

            if ($this->table[$mid] < $value) {
                $low = $mid + 1;
            } elseif ($value < $this->table[$mid]) {
                $high = $mid - 1;
            } else {
                return $mid;
            }

            if ($value == $this->table[$low]) {
                return $low;
            } else {
                return -1;
            }
        }
    }
}
