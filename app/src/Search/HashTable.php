<?php

namespace DataStructure\Search;

class HashTable
{
    protected $table = [];

    public function quadraticProbing(int $key, int $i)
    {
         return ($key + 0.5*$i + 0.5*$i*$i) % 8;// hash(k,i)=k+i/2+i*i/2 (mod 2^3)
    }

    public function hInsert(int $key)
    {
        $i = 0;

        while ($i < 8) {
            $j = $this->quadraticProbing($key, $i);
            if (array_key_exists($j, $this->table) == false) {//if nothing exists at the position in this array,
                $this->table[$j] = $key;                      //then put the value in this position.
                return $this->table[$j];
            } else {
                $i++;
            }
        }
        echo "Hash Table Overflow \n";
    }

    public function hSearch(int $key)
    {
        $i = 0;
        while ($i < 8) {
            $j = $this->quadraticProbing($key, $i);
            if ($this->table[$j] == $key) {
                return true;
            } else {
                $i++;
            }
        }
        return false;
    }
}
