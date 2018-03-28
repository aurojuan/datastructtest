<?php

namespace DataStructure\Graph;

class DFS
{
    protected $n;
    protected $e;
    protected $sum = 0;
    protected $book = [0,0,0,0,0];
    protected $arrt = [];

    public function __construct(array $graph, int $n) //graph is a nXn matrix,non oriented grap;n is the nuber of vertex
    {
        $this->e = $graph;
        $this->n = $n;
    }

    public function dfsearch($now) //now represent as current place
    {
        $this->book[$now] = 1;
        printf("%d", $now);
        //$this->arrt = [];
        $this->arrt[] = $now; // this step is designed for unitest
        $this->sum++;
        if ($this->sum == $this->n) {  //boundary condition for dfs
            return;
        }
        for ($i = 0; $i < $this->n; $i++) {
            if ($this->e[$now][$i] == 1 && $this->book[$i] == 0) {
                $this->book[$i] = 1;
                $this->dfsearch($i);
            }
        }
        return; //it is obviously. if you run all over the loop then you got every vertex as well
    }

    public function returnOrder()
    {
        return $this->arrt;
    }
}
